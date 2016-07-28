<?
$subject_val = "Re: [OMPI users] client-server example";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 13 19:24:35 2013" -->
<!-- isoreceived="20130413232435" -->
<!-- sent="Sat, 13 Apr 2013 19:24:31 -0400" -->
<!-- isosent="20130413232431" -->
<!-- name="John Chludzinski" -->
<!-- email="john.chludzinski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] client-server example" -->
<!-- id="CABftzeiifH1RCVe_CHCqN_8=vyHFACtO8A+vuvue0N18oaFiRQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CABftzejAXYwat8UJ9nTr32h1Y3eg9TLDW9zmqGhVQzHGuuv80A_at_mail.gmail.com" -->
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
<strong>From:</strong> John Chludzinski (<em>john.chludzinski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-13 19:24:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21725.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
<li><strong>Previous message:</strong> <a href="21723.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
<li><strong>In reply to:</strong> <a href="21723.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21725.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
<li><strong>Reply:</strong> <a href="21725.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry: The previous post was intended for another group, ignore it.
<br>
<p>With regards to the client-server problem:
<br>
<p>$ mpirun -n 1 client
<br>
3878879232.0;tcp://192.168.1.4:37625+3878879233.0;tcp://192.168.1.4:38945:300
<br>
<p>[jski:01882] [[59199,1],0] ORTE_ERROR_LOG: Not found in file
<br>
dpm_orte.c at line 158
<br>
[jski:1882] *** An error occurred in MPI_Comm_connect
<br>
[jski:1882] *** on communicator MPI_COMM_WORLD
<br>
[jski:1882] *** MPI_ERR_INTERN: internal error
<br>
[jski:1882] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 1882 on
<br>
node jski exiting improperly. There are two reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>On Sat, Apr 13, 2013 at 7:16 PM, John Chludzinski
<br>
&lt;john.chludzinski_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; After I &quot;source mpi.ksk&quot;, PATH is unchanged but LD_LIBRARY_PATH is there:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    $ print $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;    /usr/lib64/openmpi/lib/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why does PATH loose its change?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---John
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Apr 13, 2013 at 12:55 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; You need to pass in the port info that the server printed - just copy/paste the line below &quot;server available at&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 12, 2013, at 10:58 PM, John Chludzinski &lt;john.chludzinski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Found the following client-server example (code) on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.mpi-forum.org">http://www.mpi-forum.org</a> and I'm trying to get it to work.  Not sure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what argv[1] should be for the client?  The output from the server
</span><br>
<span class="quotelev3">&gt;&gt;&gt; side is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       server available at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4094230528.0;tcp://192.168.1.4:55803+4094230529.0;tcp://192.168.1.4:51618:300
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; // SERVER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;error.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;errno.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define MAX_DATA 100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define FATAL 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main( int argc, char **argv )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm client;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Status status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  char port_name[MPI_MAX_PORT_NAME];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  double buf[MAX_DATA];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  int size, again;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  if (size != 1) error(FATAL, errno, &quot;Server too big&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Open_port(MPI_INFO_NULL, port_name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  printf(&quot;server available at %s\n&quot;,port_name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  while (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Comm_accept( port_name, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;client );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      again = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      while (again)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_Recv( buf, MAX_DATA, MPI_DOUBLE, MPI_ANY_SOURCE,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_ANY_TAG, client, &amp;status );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          switch (status.MPI_TAG)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            case 0: MPI_Comm_free( &amp;client );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              MPI_Close_port(port_name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            case 1: MPI_Comm_disconnect( &amp;client );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              again = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            case 2: /* do something */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              fprintf( stderr, &quot;Do something ...\n&quot; );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              /* Unexpected message type */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              MPI_Abort( MPI_COMM_WORLD, 1 );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; //CLIENT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define MAX_DATA 100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main( int argc, char **argv )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm server;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  double buf[MAX_DATA];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  char port_name[MPI_MAX_PORT_NAME];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  int done = 0, tag, n, CNT=0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  strcpy(port_name, argv[1] );  /* assume server's name is cmd-line arg */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm_connect( port_name, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &amp;server );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  n = MAX_DATA;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  while (!done)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      tag = 2; /* Action to perform */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if ( CNT == 5 ) { tag = 0; done = 1; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Send( buf, n, MPI_DOUBLE, 0, tag, server );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      CNT++;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      /* etc */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Send( buf, 0, MPI_DOUBLE, 0, 1, server );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm_disconnect( &amp;server );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21725.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
<li><strong>Previous message:</strong> <a href="21723.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
<li><strong>In reply to:</strong> <a href="21723.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21725.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
<li><strong>Reply:</strong> <a href="21725.php">John Chludzinski: "Re: [OMPI users] client-server example"</a>
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
