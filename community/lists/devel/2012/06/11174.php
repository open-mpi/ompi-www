<?
$subject_val = "Re: [OMPI devel] Problem in oob/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 26 08:42:26 2012" -->
<!-- isoreceived="20120626124226" -->
<!-- sent="Tue, 26 Jun 2012 06:42:17 -0600" -->
<!-- isosent="20120626124217" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem in oob/tcp" -->
<!-- id="D1338AF6-61A2-43C9-A902-B57D90E59927_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OFDEFE7A83.86FD0708-ONC1257A29.00275626-C1257A29.0027562D_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Problem in oob/tcp<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-26 08:42:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11175.php">Josh Hursey: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>Previous message:</strong> <a href="11173.php">Ludovic.Hablot_at_[hidden]: "Re: [OMPI devel] Problem in oob/tcp"</a>
<li><strong>In reply to:</strong> <a href="11173.php">Ludovic.Hablot_at_[hidden]: "Re: [OMPI devel] Problem in oob/tcp"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It may be there from a long time ago. When the OOB loses a connection, nothing is supposed to happen unless that connection is defined as a &quot;lifeline&quot;. Remember, the OOB is not an MPI transport - it is there solely to handle support functions and therefore is not considered &quot;mission critical&quot;. So losing an OOB connection isn't considered a &quot;fatal&quot; problem unless it is to the &quot;lifeline&quot;.
<br>
<p>We define a lifeline solely for the case where a daemon dies and we need the local procs to &quot;suicide&quot; and mpirun to terminate the job. So I guess the question is: which connection failed? Was this a connection from a daemon back to mpirun?
<br>
<p>Or were you running as a direct launch process - i.e., the connection was between two MPI procs that were launched via srun? If so, then there is no &quot;lifeline&quot; - if a connection drops, you are on your own. Not much we can do about that scenario as you really don't want to abort just because a non-critical connection fails.
<br>
<p><p>On Jun 26, 2012, at 1:09 AM, Ludovic.Hablot_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Version 1.6. But it's already there in 1.5.4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----devel-bounces_at_[hidden] a &#233;crit : -----
</span><br>
<span class="quotelev1">&gt; A : Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; De : Ralph Castain 
</span><br>
<span class="quotelev1">&gt; Envoy&#233; par : devel-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date : 25/06/2012 17:57
</span><br>
<span class="quotelev1">&gt; Objet : Re: [OMPI devel] Problem in oob/tcp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What version?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 25, 2012, at 9:53 AM, Ludovic.Hablot_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi everybody,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm facing a problem in orte/oob/tcp/, more particularly in file oob_tcp_msg.c. Some network interruptions were making my program hanging and not crashing (a basic helloworld).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thus, I reproduced the problem with gdb, by simulating an error on read (jumping from line 357 to 367, oob_tcp_msg.c). Then, openmpi close the socket, make the shutdown and then is hanging.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It seems that there is an exception callback function (mca_oob_tcp.oob_exception_callback) &quot;planned&quot; but not implemented yet.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any idea on how to solve this problem ? Or is this the expected behavior when we lose connection ? Did I missed anything ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ludovic
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11174/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11175.php">Josh Hursey: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>Previous message:</strong> <a href="11173.php">Ludovic.Hablot_at_[hidden]: "Re: [OMPI devel] Problem in oob/tcp"</a>
<li><strong>In reply to:</strong> <a href="11173.php">Ludovic.Hablot_at_[hidden]: "Re: [OMPI devel] Problem in oob/tcp"</a>
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
