<?
$subject_val = "[OMPI users] client-server example";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 13 01:58:44 2013" -->
<!-- isoreceived="20130413055844" -->
<!-- sent="Sat, 13 Apr 2013 01:58:40 -0400" -->
<!-- isosent="20130413055840" -->
<!-- name="John Chludzinski" -->
<!-- email="john.chludzinski_at_[hidden]" -->
<!-- subject="[OMPI users] client-server example" -->
<!-- id="CABftzehNBRq+RdFooVSQnKAL=8HJ3yaKH3Eh1i-dQa_WLCLU6w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] client-server example<br>
<strong>From:</strong> John Chludzinski (<em>john.chludzinski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-13 01:58:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21722.php">Ralph Castain: "Re: [OMPI users] client-server example"</a>
<li><strong>Previous message:</strong> <a href="21720.php">Ilias Miroslav: "[OMPI users] LDFLAGS &amp; static compilation &amp; linking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21722.php">Ralph Castain: "Re: [OMPI users] client-server example"</a>
<li><strong>Reply:</strong> <a href="21722.php">Ralph Castain: "Re: [OMPI users] client-server example"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Found the following client-server example (code) on
<br>
<a href="http://www.mpi-forum.org">http://www.mpi-forum.org</a> and I'm trying to get it to work.  Not sure
<br>
what argv[1] should be for the client?  The output from the server
<br>
side is:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;server available at
<br>
4094230528.0;tcp://192.168.1.4:55803+4094230529.0;tcp://192.168.1.4:51618:300
<br>
<p><p>// SERVER
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;error.h&gt;
<br>
#include &lt;errno.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>#define MAX_DATA 100
<br>
#define FATAL 1
<br>
<p>int main( int argc, char **argv )
<br>
{
<br>
&nbsp;&nbsp;MPI_Comm client;
<br>
&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;char port_name[MPI_MAX_PORT_NAME];
<br>
&nbsp;&nbsp;double buf[MAX_DATA];
<br>
&nbsp;&nbsp;int size, again;
<br>
<p>&nbsp;&nbsp;MPI_Init( &amp;argc, &amp;argv );
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;if (size != 1) error(FATAL, errno, &quot;Server too big&quot;);
<br>
&nbsp;&nbsp;MPI_Open_port(MPI_INFO_NULL, port_name);
<br>
&nbsp;&nbsp;printf(&quot;server available at %s\n&quot;,port_name);
<br>
<p>&nbsp;&nbsp;while (1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_accept( port_name, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;client );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;again = 1;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (again)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv( buf, MAX_DATA, MPI_DOUBLE, MPI_ANY_SOURCE,
<br>
MPI_ANY_TAG, client, &amp;status );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch (status.MPI_TAG)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case 0: MPI_Comm_free( &amp;client );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Close_port(port_name);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case 1: MPI_Comm_disconnect( &amp;client );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;again = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case 2: /* do something */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf( stderr, &quot;Do something ...\n&quot; );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Unexpected message type */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Abort( MPI_COMM_WORLD, 1 );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<p>//CLIENT
<br>
#include &lt;string.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>#define MAX_DATA 100
<br>
<p>int main( int argc, char **argv )
<br>
{
<br>
&nbsp;&nbsp;MPI_Comm server;
<br>
&nbsp;&nbsp;double buf[MAX_DATA];
<br>
&nbsp;&nbsp;char port_name[MPI_MAX_PORT_NAME];
<br>
&nbsp;&nbsp;int done = 0, tag, n, CNT=0;
<br>
<p>&nbsp;&nbsp;MPI_Init( &amp;argc, &amp;argv );
<br>
&nbsp;&nbsp;strcpy(port_name, argv[1] );  /* assume server's name is cmd-line arg */
<br>
<p>&nbsp;&nbsp;MPI_Comm_connect( port_name, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;server );
<br>
<p>&nbsp;&nbsp;n = MAX_DATA;
<br>
<p>&nbsp;&nbsp;while (!done)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tag = 2; /* Action to perform */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( CNT == 5 ) { tag = 0; done = 1; }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send( buf, n, MPI_DOUBLE, 0, tag, server );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CNT++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* etc */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;MPI_Send( buf, 0, MPI_DOUBLE, 0, 1, server );
<br>
&nbsp;&nbsp;MPI_Comm_disconnect( &amp;server );
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;return 0;
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21722.php">Ralph Castain: "Re: [OMPI users] client-server example"</a>
<li><strong>Previous message:</strong> <a href="21720.php">Ilias Miroslav: "[OMPI users] LDFLAGS &amp; static compilation &amp; linking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21722.php">Ralph Castain: "Re: [OMPI users] client-server example"</a>
<li><strong>Reply:</strong> <a href="21722.php">Ralph Castain: "Re: [OMPI users] client-server example"</a>
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
