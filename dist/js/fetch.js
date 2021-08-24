export default class ApiCall {
    
    async request(url, method = 'GET', body = null) {
        let options = {
            method: method,
            headers: {
                'Content-Type': 'application/json'
            }
        };
    
        if (method == 'POST' || method == 'PUT') {
            options.body = JSON.stringify(body);
        }
        
        const response = await fetch(url, options);
        const data = await response.json();
    
        if (!response.ok) {
            throw new Error(`${data.status}: ${data.message}`);
        } else return data;
    }

    async formEncoded(url, body){
        const result = await fetch(url, {method: 'POST', body: body,});
        const upload_response = await result.json();

        return upload_response;
    }
}