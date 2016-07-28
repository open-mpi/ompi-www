#include <stdio.h>

int
main(const int argc, const char* argv[])
 {
  bool bar;
  bool foo = true; 
  bar = foo;
   
   printf("Hello World!\n");
   printf("sizeof bool %i\n", sizeof(bool));
   return 0;
 }

