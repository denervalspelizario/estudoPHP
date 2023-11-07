import { NestFactory } from '@nestjs/core';
import { AppModule } from './app.module';
import { ValidationPipe } from '@nestjs/common';

async function bootstrap() {
  const app = await NestFactory.create(AppModule);

  // depois de instalar validation pipe
  // usa-se esse comando para estabelecer que as validações do ValidationPipe sejam globais
  app.useGlobalPipes( new ValidationPipe());

  await app.listen(3000);
}
bootstrap();
