import { Body, Controller, Post, Get, Param, Put, Patch } from '@nestjs/common';

@Controller('users') // nome da rota
export class userController{
  @Post() // tipo post
  async create(@Body() body){ // recebimento de dado via body
    return{body};
  }

  @Get()
  async list(){ 
    return{users:[]}; // retorna lista de users 
  }

  @Get(':id') // vai /users/:id
  async readOne(@Param() username){  // recebi um parametro na url com nome de username
    return{user:{}, username};
  }


  @Put(':id')
  async update(@Body() body, @Param() params){
    return{
      method: 'put',
      body,
      params
    }
  }

  @Patch(':id')
  async updatePartial(@Body() body, @Param() params){
    return{
      method: 'patch',
      body,
      params
    }    
  }
}
