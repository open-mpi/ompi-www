<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  7 07:30:19 2006" -->
<!-- isoreceived="20060907113019" -->
<!-- sent="Thu, 7 Sep 2006 12:25:25 +0100 (GMT+01:00)" -->
<!-- isosent="20060907112525" -->
<!-- name="Eng. A.A. Isola" -->
<!-- email="alfonso.isola_at_[hidden]" -->
<!-- subject="[OMPI users] R: Re:  MPI_LOOKUP_NAME BUG" -->
<!-- id="10d88066fbf.alfonso.isola_at_tin.it" -->
<!-- charset="UTF-8" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>From:</strong> Eng. A.A. Isola (<em>alfonso.isola_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-07 07:25:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1840.php">Renato Golin: "Re: [OMPI users] R: Re: MPI_LOOKUP_NAME BUG"</a>
<li><strong>Previous message:</strong> <a href="1838.php">Renato Golin: "Re: [OMPI users] MPI_LOOKUP_NAME BUG"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1840.php">Renato Golin: "Re: [OMPI users] R: Re: MPI_LOOKUP_NAME BUG"</a>
<li><strong>Reply:</strong> <a href="1840.php">Renato Golin: "Re: [OMPI users] R: Re: MPI_LOOKUP_NAME BUG"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Simple Client-Server Example.
<br>
This is a simple example; the server 
<br>
accepts only a single connection at a time and serves
<br>
that connection 
<br>
until the client requests to be disconnected. The server is a single 
<br>
process.
<br>
Here is the server. It accepts a single connection and then 
<br>
processes data until it
<br>
receives a message with tag 1. A message with 
<br>
tag 0 tells the server to exit.
<br>
<p>#include &quot;mpi.h&quot;
<br>
int main( int argc, 
<br>
char **argv )
<br>
{
<br>
MPI_Comm client;
<br>
MPI_Status status;
<br>
char port_name
<br>
[MPI_MAX_PORT_NAME];
<br>
double buf[MAX_DATA];
<br>
int size, again;
<br>
MPI_Init( 
<br>
&amp;argc, &amp;argv );
<br>
MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
if (size != 1) 
<br>
error(FATAL, &quot;Server too big&quot;);
<br>
MPI_Open_port(MPI_INFO_NULL, 
<br>
port_name);
<br>
printf(&quot;server available at %s\n&quot;,port_name);
<br>
while (1) {
<br>
MPI_Comm_accept( port_name, MPI_INFO_NULL, 0, MPI_COMM_WORLD,
<br>
&amp;client 
<br>
);
<br>
again = 1;
<br>
while (again) {
<br>
MPI_Recv( buf, MAX_DATA, MPI_DOUBLE,
<br>
MPI_ANY_SOURCE, MPI_ANY_TAG, client, &amp;status );
<br>
switch (status.MPI_TAG) 
<br>
{
<br>
case 0: MPI_Comm_free( &amp;client );
<br>
MPI_Close_port(port_name);
<br>
MPI_Finalize();
<br>
return 0;
<br>
case 1: MPI_Comm_disconnect( &amp;client );
<br>
again 
<br>
= 0;
<br>
break;
<br>
case 2: /* do something */
<br>
...
<br>
default:
<br>
/* Unexpected 
<br>
message type */
<br>
MPI_Abort( MPI_COMM_WORLD, 1 );
<br>
}
<br>
}
<br>
}
<br>
}
<br>
Here is the 
<br>
client.
<br>
#include &quot;mpi.h&quot;
<br>
int main( int argc, char **argv )
<br>
{
<br>
MPI_Comm 
<br>
server;
<br>
double buf[MAX_DATA];
<br>
char port_name[MPI_MAX_PORT_NAME];
<br>
MPI_Init( &amp;argc, &amp;argv );
<br>
strcpy(port_name, argv[1] );/* assume 
<br>
server's name is cmd-line arg */
<br>
MPI_Comm_connect( port_name, 
<br>
MPI_INFO_NULL, 0, MPI_COMM_WORLD,
<br>
&amp;server );
<br>
while (!done) {
<br>
tag = 2; 
<br>
/* Action to perform */
<br>
MPI_Send( buf, n, MPI_DOUBLE, 0, tag, server );
<br>
/* etc */
<br>
}
<br>
MPI_Send( buf, 0, MPI_DOUBLE, 0, 1, server );
<br>
MPI_Comm_disconnect( &amp;server );
<br>
MPI_Finalize();
<br>
return 0;
<br>
}
<br>
<p>I have the 
<br>
same problem also if I don't use the MPI_LOOKUP_NAME but by the 
<br>
port_name recovered by the MPI_open_port.
<br>
<p>I have seen that the address 
<br>
supplied by the system to the server is always the same 0.1.0:2000 , I 
<br>
think that thi is very strange.
<br>
<p>If I write an example where I use the 
<br>
MPI routines that are in the MPI protocol, they have to work!! Is a 
<br>
mistake to say that the same program can work and not dependently on 
<br>
the implementation.
<br>
Because if I wirte a correct MPI application, if 
<br>
the implementation work and support all the routines inside the 
<br>
application, the program has to work!
<br>
Then this example has to work in 
<br>
MPICH2 and also in OPEN_MPI. If this doesn't happen this means that 
<br>
Open_MPI has some problems...
<br>
<p>The software has to be independent from 
<br>
the implementation that you use.
<br>
<p>bye 
<br>
<p>A.A.Isola
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1840.php">Renato Golin: "Re: [OMPI users] R: Re: MPI_LOOKUP_NAME BUG"</a>
<li><strong>Previous message:</strong> <a href="1838.php">Renato Golin: "Re: [OMPI users] MPI_LOOKUP_NAME BUG"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1840.php">Renato Golin: "Re: [OMPI users] R: Re: MPI_LOOKUP_NAME BUG"</a>
<li><strong>Reply:</strong> <a href="1840.php">Renato Golin: "Re: [OMPI users] R: Re: MPI_LOOKUP_NAME BUG"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
