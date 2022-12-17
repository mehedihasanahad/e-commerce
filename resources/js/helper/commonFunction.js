class CommonFunction {
    static formdata(payload) {
        let formData = new FormData();
        for (const formDataKey in payload) {
            formData.append(formDataKey, payload[formDataKey]);
        }
        return formData;
    }
    static async validateToken(token, rememberToken) {
        try {
            if (rememberToken) {
                const formData = this.formdata({'token': rememberToken});
                const response = await APISERVICE.post('validateToken', formData);
                return response;
            } else if (token) {
                const formData = this.formdata({'token': token});
                const response = await APISERVICE.post('validateToken', formData);
                return response;
            }
        } catch (e) {
            console.log(e);
            return e;
        }
    }
}

export default CommonFunction;
