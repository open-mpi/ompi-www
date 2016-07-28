#include <signal.h>
#include <stdio.h>

void doraise(isig)
long isig[1] ;
{
int i, j ;
   i = isig[0];
   raise( i );   /* signal i is raised */
}

void doraise_(isig)
long isig[1] ;
{
     doraise(isig) ;
}

void whatsig(isig)
long isig[1] ;
{
        int i ;
        i = isig[0];
        psignal( i , "Testing Signal");
}

void whatsig_(isig)
long isig[1] ;
{
     whatsig(isig) ;
}

void showallsignals()
{
        int i ;
        char buf[15];
        for ( i = 1; i < 32; i++ ) {
           sprintf(buf, "Signal code %d ", i);
           psignal( i , buf );
        }
}

void showallsignals_()
{
     showallsignals() ;
}

