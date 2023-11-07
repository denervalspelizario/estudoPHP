import { CreateUserDTO } from "./create-user.dto";
import { PartialType } from '@nestjs/mapped-types'; // Partyal type precisa ser instalado 

export class UpdatePatchUserDTO extends PartialType(CreateUserDTO){ 
// update recebe toda estrutura do dto create isString, IsEmail, IsStrongPassword
// O PARTIAL INDICA  que nao existe a obrigatoriade de uso total dos parametros de CreateUserDTO


  
}
