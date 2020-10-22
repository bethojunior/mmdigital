class ScheduleController extends ConnectionServer{
    static updateStatus(data)
    {
        return new Promise(resolve => {
            this.sendRequest('schedule/updateStatus','POST',data,resolve,true)
        })
    }
}
