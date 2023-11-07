import { Body, Controller, Post, Get, Param, Put, Patch, Delete, ParseIntPipe } from '@nestjs/common';
import { CreateUserDTO } from './dto/create-user.dto';
import { UpdatePutUserDTO } from './dto/update-put-user.dto';
import { UpdatePatchUserDTO } from './dto/update-patch-user.dto';

@Controller('users')  // rotas tipos users
export class userController{
  
  @Post() // tipo post
  async create(@Body() {email, name, password}: CreateUserDTO){ // body recebe parametros de CreateuserDTO 
    return{email, name, password}; // retorna os dados
  }
  
  @Get() // tipo get
  async list(){ 
    return{users:[]};  
  }
  
  @Get(':id')  
  async readOne(@Param() username){  
    return{user:{}, username};
  }

  @Put(':id') // dados(email, name e passwor) pelo body  seguindo a tipagem de UpdatePutUserDTO e is pelo params(url)
  async update(@Body() {email, name, password}: UpdatePutUserDTO, @Param('id', ParseIntPipe) id: number){ 
    return{                                                                         
      method: 'put',
      email, name, password,
      id
    }
  }
  
  @Patch(':id')
  async updatePartial(@Body() {email, name, password}: UpdatePatchUserDTO, @Param('id', ParseIntPipe) id: number){
    return{
      method: 'patch',
      email, name, password,
      id
    }    
  }

  @Delete(':id') // id recebido por params e transformando ela em number usando o ParseIntPipe(precisa importar)
  async delete(@Param('id', ParseIntPipe) id: number){ 
    return{
      id
    }    
  }
}
