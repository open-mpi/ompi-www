<?
$subject_val = "Re: [OMPI users] MPI_Lookup_name error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 15:18:39 2008" -->
<!-- isoreceived="20080506191839" -->
<!-- sent="Tue, 6 May 2008 15:17:58 -0400" -->
<!-- isosent="20080506191758" -->
<!-- name="Alberto Giannetti" -->
<!-- email="albertogiannetti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Lookup_name error" -->
<!-- id="32030b750805061217y5f5bfe48o16135b623aeca31f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C4447367.50C1%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Lookup_name error<br>
<strong>From:</strong> Alberto Giannetti (<em>albertogiannetti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-06 15:17:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5617.php">Brad Benton: "Re: [OMPI users] Problem with AlltoAll routine"</a>
<li><strong>Previous message:</strong> <a href="5615.php">Gabriele FATIGATI: "[OMPI users] Problem with AlltoAll routine"</a>
<li><strong>In reply to:</strong> <a href="5600.php">Ralph Castain: "Re: [OMPI users] MPI_Lookup_name error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Correct, I am using 1.2.6 and not running a persistent deamon (thank you for
<br>
the link Pak by the way).
<br>
However, in the Client/Server test thread I'm showing a complete example
<br>
where I tried to run both applications through the same mpirun command and
<br>
still having an internal error:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2008/04/5537.php">http://www.open-mpi.org/community/lists/users/2008/04/5537.php</a>
<br>
<p>On Mon, May 5, 2008 at 10:18 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I assume you are using some variant of OMPI 1.2?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When last I checked, which admittedly was quite a while ago, this worked
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev1">&gt; the 1.2.x series. However, I note something here that may be a problem. In
</span><br>
<span class="quotelev1">&gt; the 1.2.x series, we do not have a global publish/lookup service - the
</span><br>
<span class="quotelev1">&gt; application doing the publish must be launched by the same mpirun as the
</span><br>
<span class="quotelev1">&gt; application doing the lookup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code below only does the lookup, and appears to be asking that you
</span><br>
<span class="quotelev1">&gt; provide some server name. I assume you are somehow looking up the name of
</span><br>
<span class="quotelev1">&gt; the mpirun that launched the application that did the publish, and hoping
</span><br>
<span class="quotelev1">&gt; the two will cross-connect? Unfortunately, I don't believe the 1.2.x code
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; smart enough to figure out how to do that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is cleaned up in the upcoming 1.3 release and should work much
</span><br>
<span class="quotelev1">&gt; smoother.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/27/08 6:58 PM, &quot;Alberto Giannetti&quot; &lt;albertogiannetti_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am having error using MPI_Lookup_name. The same program works fine
</span><br>
<span class="quotelev2">&gt; &gt; when using MPICH:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/bin/mpiexec -np 2 ./client myfriend
</span><br>
<span class="quotelev2">&gt; &gt; Processor 0 (662, Sender) initialized
</span><br>
<span class="quotelev2">&gt; &gt; Processor 0 looking for service myfriend-0
</span><br>
<span class="quotelev2">&gt; &gt; Processor 1 (664, Sender) initialized
</span><br>
<span class="quotelev2">&gt; &gt; Processor 1 looking for service myfriend-1
</span><br>
<span class="quotelev2">&gt; &gt; [local:00662] *** An error occurred in MPI_Lookup_name
</span><br>
<span class="quotelev2">&gt; &gt; [local:00662] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; [local:00662] *** MPI_ERR_NAME: invalid name argument
</span><br>
<span class="quotelev2">&gt; &gt; [local:00662] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt; &gt; [local:00664] *** An error occurred in MPI_Lookup_name
</span><br>
<span class="quotelev2">&gt; &gt; [local:00664] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; [local:00664] *** MPI_ERR_NAME: invalid name argument
</span><br>
<span class="quotelev2">&gt; &gt; [local:00664] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;    int rank, i;
</span><br>
<span class="quotelev2">&gt; &gt;    float data[100];
</span><br>
<span class="quotelev2">&gt; &gt;    char cdata[64];
</span><br>
<span class="quotelev2">&gt; &gt;    char myport[MPI_MAX_PORT_NAME];
</span><br>
<span class="quotelev2">&gt; &gt;    char myservice[64];
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Comm intercomm;
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Status status;
</span><br>
<span class="quotelev2">&gt; &gt;    int intercomm_size;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt; &gt;    printf(&quot;Processor %d (%d, Sender) initialized\n&quot;, rank, getpid());
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    if( argc &lt; 2 ) {
</span><br>
<span class="quotelev2">&gt; &gt;      fprintf(stderr, &quot;Require server name\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;      MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;      exit(-1);
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    for( i = 0; i &lt; 100; i++ )
</span><br>
<span class="quotelev2">&gt; &gt;      data[i] = i;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    sprintf(myservice, &quot;%s-%d&quot;, argv[1], rank);
</span><br>
<span class="quotelev2">&gt; &gt;    printf(&quot;Processor %d looking for service %s\n&quot;, rank, myservice);
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Lookup_name(myservice, MPI_INFO_NULL, myport);
</span><br>
<span class="quotelev2">&gt; &gt;    printf(&quot;Processor %d found port %s looking for service %s\n&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; rank, myport, myservice);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    while( 1 ) {
</span><br>
<span class="quotelev2">&gt; &gt;      printf(&quot;Processor %d connecting to '%s'\n&quot;, rank, myport);
</span><br>
<span class="quotelev2">&gt; &gt;      if( MPI_Comm_connect(myport, MPI_INFO_NULL, 0, MPI_COMM_SELF,
</span><br>
<span class="quotelev2">&gt; &gt; &amp;intercomm) == MPI_SUCCESS )
</span><br>
<span class="quotelev2">&gt; &gt;        break;
</span><br>
<span class="quotelev2">&gt; &gt;      sleep(1);
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt;    printf(&quot;Processor %d connected\n&quot;, rank);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Comm_remote_size(intercomm, &amp;intercomm_size);
</span><br>
<span class="quotelev2">&gt; &gt;    printf(&quot;Processor %d remote comm size is %d\n&quot;, rank,
</span><br>
<span class="quotelev2">&gt; &gt; intercomm_size);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    printf(&quot;Processor %d sending data through intercomm to rank 0...
</span><br>
<span class="quotelev2">&gt; &gt; \n&quot;, rank);
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Send(data, 100, MPI_FLOAT, 0, rank, intercomm);
</span><br>
<span class="quotelev2">&gt; &gt;    printf(&quot;Processor %d data sent!\n&quot;, rank);
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Recv(cdata, 12, MPI_CHAR, MPI_ANY_SOURCE, MPI_ANY_TAG,
</span><br>
<span class="quotelev2">&gt; &gt; intercomm, &amp;status);
</span><br>
<span class="quotelev2">&gt; &gt;    printf(&quot;Processor %d received string data '%s' from rank %d, tag %d
</span><br>
<span class="quotelev2">&gt; &gt; \n&quot;, rank, cdata, status.MPI_SOURCE, status.MPI_TAG);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    sleep(5);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    printf(&quot;Processor %d disconnecting communicator\n&quot;, rank);
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Comm_disconnect(&amp;intercomm);
</span><br>
<span class="quotelev2">&gt; &gt;    printf(&quot;Processor %d finalizing\n&quot;, rank);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;    printf(&quot;Processor %d Goodbye!\n&quot;, rank);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5616/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5617.php">Brad Benton: "Re: [OMPI users] Problem with AlltoAll routine"</a>
<li><strong>Previous message:</strong> <a href="5615.php">Gabriele FATIGATI: "[OMPI users] Problem with AlltoAll routine"</a>
<li><strong>In reply to:</strong> <a href="5600.php">Ralph Castain: "Re: [OMPI users] MPI_Lookup_name error"</a>
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
