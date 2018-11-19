import { Project } from "./Project";

class PantechProject extends Project{
    constructor(
        name,
        year,
    ) {
        super(
            name,
            'Pantech',
            year,
            ['JSP', 'Oracle', 'Javascript', 'Jquery','Windchill']
        );
    }

}

export {PantechProject};