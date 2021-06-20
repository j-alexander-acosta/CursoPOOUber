from  car import Car

if __name__ == "__main__":
    print("Hola Mundo")
    car = Car()
    car.license = "AMS234"
    car.driver = "Andres Herrera"
    print(vars(car))

    car2 = Car()
    car2.license = "IBM234"
    car2.driver = "Martha Herrera"
    print(vars(car2))