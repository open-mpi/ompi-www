<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  7 10:14:34 2006" -->
<!-- isoreceived="20060907141434" -->
<!-- sent="Thu, 7 Sep 2006 15:14:32 +0100 (GMT+01:00)" -->
<!-- isosent="20060907141432" -->
<!-- name="Eng. A.A. Isola" -->
<!-- email="alfonso.isola_at_[hidden]" -->
<!-- subject="[OMPI users]  R: Re: MPI_LOOKUP_NAME BUG" -->
<!-- id="10d88a14306.alfonso.isola_at_tin.it" -->
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
<strong>Date:</strong> 2006-09-07 10:14:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1842.php">Renato Golin: "Re: [OMPI users] R: Re: MPI_LOOKUP_NAME BUG"</a>
<li><strong>Previous message:</strong> <a href="1840.php">Renato Golin: "Re: [OMPI users] R: Re: MPI_LOOKUP_NAME BUG"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1842.php">Renato Golin: "Re: [OMPI users] R: Re: MPI_LOOKUP_NAME BUG"</a>
<li><strong>Reply:</strong> <a href="1842.php">Renato Golin: "Re: [OMPI users] R: Re: MPI_LOOKUP_NAME BUG"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, you have right!, I send you the real program.
<br>
For the other 
<br>
discussion...I have used only the MPI2 rouines inside my programs and 
<br>
nothinf other. Then is not possible that it doesn't works. I can 
<br>
understand, for example, that inside Open_MPI the threads or the 
<br>
Client-
<br>
Server routines are realized in different way, but the output 
<br>
have to 
<br>
be the same and particularly has to be the same of the 
<br>
protocol says.
<br>
Then is I generate a program under the rigorous respect 
<br>
of the MPI 
<br>
protocol, why this program has not to work in different 
<br>
implementations?
<br>
I want repeat again that I've compiled this program 
<br>
in 
<br>
both implementations withouts error s or warnings, but when I 
<br>
execute 
<br>
it in Open_MPI it doesn't work! 
<br>
<p>Following I have put my 
<br>
exact server 
<br>
and client codes:
<br>
<p>SERVER.C code:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &quot;mpi.
<br>
h&quot;
<br>
#include &quot;string.h&quot;
<br>
#include &lt;sys/types.h&gt;
<br>
#include 
<br>
&lt;unistd.h&gt;
<br>
<p><p><p>#define MAX_DATA 20
<br>
<p><p>/* Global variables */
<br>
MPI_Comm 
<br>
client;
<br>
char 
<br>
port_name[MPI_MAX_PORT_NAME];
<br>
char buf;
<br>
<p>int main(int 
<br>
argc,char *argv
<br>
[])
<br>
{
<br>
int myid,numprocs,namelen, provided;
<br>
char 
<br>
processor_name
<br>
[MPI_MAX_PROCESSOR_NAME];
<br>
<p>/* Initialization MPI 
<br>
structure */
<br>
MPI_Init
<br>
(NULL,NULL);
<br>
MPI_Comm_size(MPI_COMM_WORLD,
<br>
&amp;numprocs);
<br>
MPI_Comm_rank
<br>
(MPI_COMM_WORLD,&amp;myid);
<br>
MPI_Get_processor_name
<br>
(processor_name,
<br>
&amp;namelen);
<br>
printf(&quot;server Process Rank %d ,TOT 
<br>
processes %d on %s\n&quot;,
<br>
myid,numprocs, processor_name); 
<br>
MPI_Open_port
<br>
(MPI_INFO_NULL,
<br>
port_name);
<br>
if(argv[1]==NULL)
<br>
{
<br>
printf(&quot;You must insert 
<br>
a server 
<br>
name!!!\n&quot;);
<br>
MPI_Close_port(port_name); /*chiudo la porta*/
<br>
<p>MPI_Finalize();
<br>
return 0;
<br>
}
<br>
MPI_Publish_name(argv[1],MPI_INFO_NULL,
<br>
port_name);
<br>
printf(&quot;Server %s available at %s\n&quot;,argv[1],port_name);
<br>
if 
<br>
(MPI_Comm_accept(port_name,MPI_INFO_NULL,0,MPI_COMM_WORLD,&amp;clie
<br>
nt)!
<br>
=MPI_SUCCESS) 
<br>
{
<br>
printf(&quot;No client available\n&quot;);
<br>
}
<br>
<p>MPI_Send
<br>
(&quot;HELLO 
<br>
CLIENT\n&quot;,MAX_DATA,MPI_CHAR,0,1,client); 
<br>
MPI_Comm_disconnect
<br>
(&amp;client);
<br>
MPI_Close_port(port_name); /*close port*/ 
<br>
MPI_Unpublish_name
<br>
(argv[1],
<br>
MPI_INFO_NULL,port_name);
<br>
MPI_Finalize(); 
<br>
return 0;
<br>
}
<br>
<p><p>CLIENT.c 
<br>
code:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
#include &quot;string.
<br>
h&quot;
<br>
#include &quot;unistd.h&quot;
<br>
<p>#define MAX_DATA 20
<br>
<p>int main(int argc, char 
<br>
*argv[])
<br>
{
<br>
int myid,numprocs,namelen,op;
<br>
char processor_name
<br>
[MPI_MAX_PROCESSOR_NAME];
<br>
MPI_Comm server;
<br>
MPI_Status status;
<br>
<p>char 
<br>
port_name[MPI_MAX_PORT_NAME];
<br>
char buf[MAX_DATA];
<br>
<p>/* Initialization 
<br>
MPI structure */
<br>
MPI_Init(NULL,NULL);
<br>
MPI_Comm_size(MPI_COMM_WORLD,
<br>
&amp;numprocs);
<br>
MPI_Comm_rank(MPI_COMM_WORLD,&amp;myid);
<br>
MPI_Get_processor_name
<br>
(processor_name,&amp;namelen);
<br>
printf(&quot;Rank Client Process %d ,TOT 
<br>
processes %d on %s\n&quot;,myid,numprocs,processor_
<br>
name);
<br>
<p>if(argv[1]
<br>
==NULL)
<br>
{
<br>
printf(&quot;You must insert a server name!!!\n&quot;);
<br>
<p>MPI_Finalize();
<br>
return 0; 
<br>
}
<br>
<p>while(MPI_Lookup_name(argv[1],
<br>
MPI_INFO_NULL,port_name)!=MPI_SUCCESS)
<br>
{
<br>
printf(&quot;Name Server supplied 
<br>
don't found or the server is power down!\n&quot;);
<br>
}
<br>
printf(&quot;Server Name 
<br>
found!\n&quot;);
<br>
if(MPI_Comm_connect(port_name,MPI_INFO_NULL,0,
<br>
MPI_COMM_WORLD,&amp;server)==MPI_ERR_PORT){ 
<br>
printf(&quot;Connection 
<br>
error\n&quot;);
<br>
MPI_Finalize(); 
<br>
return 0;
<br>
}
<br>
else{ 
<br>
printf
<br>
(&quot;Connection OK!\n&quot;);
<br>
printf
<br>
(&quot;Server address %s\n&quot;, port_name);
<br>
}
<br>
<p>MPI_Recv(buf,MAX_DATA,MPI_CHAR,
<br>
MPI_ANY_SOURCE,MPI_ANY_TAG,server,
<br>
&amp;status);
<br>
printf(&quot;The server has 
<br>
written: %s&quot;, buf);
<br>
MPI_Comm_disconnect
<br>
(&amp;server);
<br>
printf(&quot;The Client 
<br>
is disconnected!\n&quot;);
<br>
MPI_Finalize();
<br>
return 0;
<br>
}
<br>
<p>Later that i have 
<br>
compiled the two C files I have executed 
<br>
the following
<br>
commands:
<br>
<p>mpiexec -np 1 server BOB
<br>
mpiexec -np 1 client 
<br>
BOB
<br>
<p>N.B.
<br>
I have used 
<br>
the argv[] to recover the server name to publish 
<br>
or to lookup(for ex. 
<br>
BOB).
<br>
<p>I hope that you will be able to fix this 
<br>
bug!
<br>
<p>Bye 
<br>
<p>A.A. Isola
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1842.php">Renato Golin: "Re: [OMPI users] R: Re: MPI_LOOKUP_NAME BUG"</a>
<li><strong>Previous message:</strong> <a href="1840.php">Renato Golin: "Re: [OMPI users] R: Re: MPI_LOOKUP_NAME BUG"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1842.php">Renato Golin: "Re: [OMPI users] R: Re: MPI_LOOKUP_NAME BUG"</a>
<li><strong>Reply:</strong> <a href="1842.php">Renato Golin: "Re: [OMPI users] R: Re: MPI_LOOKUP_NAME BUG"</a>
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
