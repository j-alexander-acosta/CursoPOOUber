class Car {
    private Integer id;
    private String license;
    private Account driver;
    private Integer passegenger;

    public Car(String license, Account driver){
        this.license = license;
        this.driver = driver;
        
    }

    void printDataCar() {
        if(passegenger != null){
            System.out.println("License: " + license + " Name Driver: " + driver.name + "Passengers: " + passegenger);    
        }
        g
    }

    public Integer getPassenger(){
        return passegenger;
    }

    public void setPassenger(Integer passenger) {
        if(passenger == 4){
            this.passegenger = passenger;
        }else {
            System.out.println("Necesitas asignar 4 pasajeros");
        }
    }

    

}