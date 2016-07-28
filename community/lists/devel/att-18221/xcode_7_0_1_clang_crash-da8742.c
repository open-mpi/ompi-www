# 1 "<built-in>"
# 1 "xcode_7_0_1_clang_crash.c"
#define EXTERN

typedef struct s *t;

EXTERN struct ss e1;
EXTERN struct ss e2;

int foo()
{
  return (((t)&e1) == ((t)&e2));
}
