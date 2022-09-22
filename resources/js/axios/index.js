import axios from 'axios'
const instance = axios.create({
    baseURL: 'http://localhost:8000/api/v1'
});
// axios.defaults.headers.common['Authorization'] = 'Bearer ' + localStorage.getItem('loyelAuthToken');
export default instance;
