<?
$subject_val = "Re: [OMPI users] client-server example";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 13 12:55:16 2013" -->
<!-- isoreceived="20130413165516" -->
<!-- sent="Sat, 13 Apr 2013 09:55:09 -0700" -->
<!-- isosent="20130413165509" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] client-server example" -->
<!-- id="E5CC4319-1AA6-4E77-A594-F407B377B1FE_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CABftzehNBRq+RdFooVSQnKAL=8HJ3yaKH3Eh1i-dQa_WLCLU6w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] client-server example<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-13 12:55:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21723.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
<li><strong>Previous message:</strong> <a href="21721.php">John Chludzinski: "[OMPI users] client-server example"</a>
<li><strong>In reply to:</strong> <a href="21721.php">John Chludzinski: "[OMPI users] client-server example"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21723.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
<li><strong>Reply:</strong> <a href="21723.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You need to pass in the port info that the server printed - just copy/paste the line below &quot;server available at&quot;.
<br>
<p>On Apr 12, 2013, at 10:58 PM, John Chludzinski &lt;john.chludzinski_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Found the following client-server example (code) on
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mpi-forum.org">http://www.mpi-forum.org</a> and I'm trying to get it to work.  Not sure
</span><br>
<span class="quotelev1">&gt; what argv[1] should be for the client?  The output from the server
</span><br>
<span class="quotelev1">&gt; side is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       server available at
</span><br>
<span class="quotelev1">&gt; 4094230528.0;tcp://192.168.1.4:55803+4094230529.0;tcp://192.168.1.4:51618:300
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; // SERVER
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;error.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;errno.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define MAX_DATA 100
</span><br>
<span class="quotelev1">&gt; #define FATAL 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main( int argc, char **argv )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  MPI_Comm client;
</span><br>
<span class="quotelev1">&gt;  MPI_Status status;
</span><br>
<span class="quotelev1">&gt;  char port_name[MPI_MAX_PORT_NAME];
</span><br>
<span class="quotelev1">&gt;  double buf[MAX_DATA];
</span><br>
<span class="quotelev1">&gt;  int size, again;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;  if (size != 1) error(FATAL, errno, &quot;Server too big&quot;);
</span><br>
<span class="quotelev1">&gt;  MPI_Open_port(MPI_INFO_NULL, port_name);
</span><br>
<span class="quotelev1">&gt;  printf(&quot;server available at %s\n&quot;,port_name);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  while (1)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      MPI_Comm_accept( port_name, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;client );
</span><br>
<span class="quotelev1">&gt;      again = 1;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      while (again)
</span><br>
<span class="quotelev1">&gt;        {
</span><br>
<span class="quotelev1">&gt;          MPI_Recv( buf, MAX_DATA, MPI_DOUBLE, MPI_ANY_SOURCE,
</span><br>
<span class="quotelev1">&gt; MPI_ANY_TAG, client, &amp;status );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          switch (status.MPI_TAG)
</span><br>
<span class="quotelev1">&gt;            {
</span><br>
<span class="quotelev1">&gt;            case 0: MPI_Comm_free( &amp;client );
</span><br>
<span class="quotelev1">&gt;              MPI_Close_port(port_name);
</span><br>
<span class="quotelev1">&gt;              MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;              return 0;
</span><br>
<span class="quotelev1">&gt;            case 1: MPI_Comm_disconnect( &amp;client );
</span><br>
<span class="quotelev1">&gt;              again = 0;
</span><br>
<span class="quotelev1">&gt;              break;
</span><br>
<span class="quotelev1">&gt;            case 2: /* do something */
</span><br>
<span class="quotelev1">&gt;              fprintf( stderr, &quot;Do something ...\n&quot; );
</span><br>
<span class="quotelev1">&gt;            default:
</span><br>
<span class="quotelev1">&gt;              /* Unexpected message type */
</span><br>
<span class="quotelev1">&gt;              MPI_Abort( MPI_COMM_WORLD, 1 );
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; //CLIENT
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define MAX_DATA 100
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main( int argc, char **argv )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  MPI_Comm server;
</span><br>
<span class="quotelev1">&gt;  double buf[MAX_DATA];
</span><br>
<span class="quotelev1">&gt;  char port_name[MPI_MAX_PORT_NAME];
</span><br>
<span class="quotelev1">&gt;  int done = 0, tag, n, CNT=0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev1">&gt;  strcpy(port_name, argv[1] );  /* assume server's name is cmd-line arg */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_connect( port_name, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;server );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  n = MAX_DATA;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  while (!done)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      tag = 2; /* Action to perform */
</span><br>
<span class="quotelev1">&gt;      if ( CNT == 5 ) { tag = 0; done = 1; }
</span><br>
<span class="quotelev1">&gt;      MPI_Send( buf, n, MPI_DOUBLE, 0, tag, server );
</span><br>
<span class="quotelev1">&gt;      CNT++;
</span><br>
<span class="quotelev1">&gt;      /* etc */
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Send( buf, 0, MPI_DOUBLE, 0, 1, server );
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_disconnect( &amp;server );
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21723.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
<li><strong>Previous message:</strong> <a href="21721.php">John Chludzinski: "[OMPI users] client-server example"</a>
<li><strong>In reply to:</strong> <a href="21721.php">John Chludzinski: "[OMPI users] client-server example"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21723.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
<li><strong>Reply:</strong> <a href="21723.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
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
