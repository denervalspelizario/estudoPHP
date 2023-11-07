import { IsString, IsEmail, IsStrongPassword } from "class-validator"; // import das validações

// DTO que vai receber 3 parametros
export class CreateUserDTO {
  @IsString()     // name tipo string
  name: string;

  @IsEmail()      // email tipo string
  email: string;

  @IsStrongPassword({ // senha tipo string
    minLength: 6, // minimo de 6 caracteres
    minNumbers: 0, // não vai ter minimo de numeros
    minLowercase: 0, // não vai ter minimo de letras minusculas
    minUppercase: 0, // não vai ter minimo de letras maiusculas
    minSymbols: 0 // não vai ter minimo de simbolos especiais
  })
  password: string;
}
