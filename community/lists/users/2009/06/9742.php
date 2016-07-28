<?
$subject_val = "Re: [OMPI users] Open specific port TCP/IP in MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 27 11:35:01 2009" -->
<!-- isoreceived="20090627153501" -->
<!-- sent="Sat, 27 Jun 2009 11:34:55 -0400" -->
<!-- isosent="20090627153455" -->
<!-- name="Nulik Nol" -->
<!-- email="nuliknol_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open specific port TCP/IP in MPI" -->
<!-- id="1c92aaf50906270834v24696d26gb9f41771e0524d77_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7F148EC0-12C2-4B97-8722-CD02B1CF2643_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open specific port TCP/IP in MPI<br>
<strong>From:</strong> Nulik Nol (<em>nuliknol_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-27 11:34:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9743.php">Mostyn Lewis: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
<li><strong>Previous message:</strong> <a href="9741.php">Jeff Squyres: "Re: [OMPI users] PBSPro/OpenMPI Errors"</a>
<li><strong>In reply to:</strong> <a href="9735.php">Ralph Castain: "Re: [OMPI users] Open specific port TCP/IP in MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jun 26, 2009 at 6:25 PM, Ralph Castain&lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Not sure I understand the problem. Your server will have the ability to recv
</span><br>
<p>this is what i wanted. feel free to add to the FAQ. In the TODO list
<br>
is still remove the step of copying of the URI from one machine to
<br>
another, but that can be done later. This works only from version 1.3
<br>
and up. Regards
<br>
<p>[root_at_niko code]# cat server.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc,char *argv[]){
<br>
int size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char port_name[MPI_MAX_PORT_NAME],data[256],message[5]=&quot;pong\0&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm client; MPI_Status status;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (size != 1) {printf(&quot;only one process is accepted\n&quot;); return(1);}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Open_port(MPI_INFO_NULL, port_name);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;server: listening on port %s\n&quot;,port_name);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Publish_name(&quot;myserver&quot;, MPI_INFO_NULL, port_name);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_accept( port_name, MPI_INFO_NULL, 0, MPI_COMM_WORLD,&amp;client );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv( data,256,MPI_CHAR,MPI_ANY_SOURCE, MPI_ANY_TAG, client, &amp;status );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;server: %s\n&quot;,data);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(message,5,MPI_CHAR,0,2,client);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_disconnect( &amp;client );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
[root_at_niko code]# cat client.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
int main( int argc, char **argv )
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm server; MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char port_name[MPI_MAX_PORT_NAME],data[256],message[5]=&quot;ping\0&quot;;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init( &amp;argc, &amp;argv );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Lookup_name(&quot;myserver&quot;, MPI_INFO_NULL, port_name);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_connect( port_name, MPI_INFO_NULL, 0, MPI_COMM_SELF,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;server);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send( message, 5, MPI_CHAR, 0, 1, server );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv( data,256,MPI_CHAR,MPI_ANY_SOURCE, MPI_ANY_TAG, server, &amp;status );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;client: %s\n&quot;,data);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_disconnect( &amp;server );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
[root_at_niko code]# mpicc -I/usr/include/openmpi/1.2.4-gcc/
<br>
-L/usr/lib64/openmpi/1.2.4-gcc -lmpi -o server server.c
<br>
[root_at_niko code]# mpicc -I/usr/include/openmpi/1.2.4-gcc/
<br>
-L/usr/lib64/openmpi/1.2.4-gcc -lmpi -o client client.c
<br>
[root_at_niko code]# scp client root_at_192.168.1.63:/root
<br>
client                                                            100%
<br>
9645     9.4KB/s   00:00
<br>
[root_at_niko code]# ompi-server -r ompi-server.uri
<br>
[root_at_niko code]# cat ompi-server.uri
<br>
258080768.0;tcp://192.168.1.64:48683
<br>
[root_at_niko code]# mpirun -np 1 -ompi-server $(cat ompi-server.uri) ./server &amp;
<br>
[1] 24079
<br>
[root_at_niko code]# server: listening on port
<br>
257949696.0;tcp://192.168.1.64:58284+257949697.0;tcp://192.168.1.64:59326:300
<br>
<p>[root_at_niko code]# ssh -l root 192.168.1.63
<br>
Last login: Sat Jun 27 23:17:24 Local time zone must be set--see zic
<br>
manual page 2009 from n64 on ssh
<br>
master ~ # mpirun -np 1 -ompi-server
<br>
'258080768.0;tcp://192.168.1.64:48683' ./client
<br>
server: ping
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;client: pong
<br>
master ~ #
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9743.php">Mostyn Lewis: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
<li><strong>Previous message:</strong> <a href="9741.php">Jeff Squyres: "Re: [OMPI users] PBSPro/OpenMPI Errors"</a>
<li><strong>In reply to:</strong> <a href="9735.php">Ralph Castain: "Re: [OMPI users] Open specific port TCP/IP in MPI"</a>
<!-- nextthread="start" -->
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
