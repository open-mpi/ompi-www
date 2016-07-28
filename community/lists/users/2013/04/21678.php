<?
$subject_val = "Re: [OMPI users] network related MPI errors on Amazon EC2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  4 16:46:43 2013" -->
<!-- isoreceived="20130404204643" -->
<!-- sent="Thu, 4 Apr 2013 13:46:37 -0700" -->
<!-- isosent="20130404204637" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] network related MPI errors on Amazon EC2" -->
<!-- id="BE035947-245A-4010-96A3-CE75F46B2B39_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CABS=9Uwag236mQkuz2YRhSFmmg+f2EU-0wQRkR8aSQSHTWPVxQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] network related MPI errors on Amazon EC2<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-04 16:46:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21679.php">Limin Gu: "Re: [OMPI users] openmpi-1.7 failed to build on Centos 6.4"</a>
<li><strong>Previous message:</strong> <a href="21677.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7 failed to build on Centos 6.4"</a>
<li><strong>In reply to:</strong> <a href="21675.php">Yevgeny Popkov: "[OMPI users] Fwd: network related MPI errors on Amazon EC2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds like something is making the TCP connections unstable. Last time I looked at HVM, they were running something like 64G of memory? If you have more than one proc on a node (as your output would indicate), and you are doing collectives on such large data sizes, it's quite possible you are running out of memory due to the way the collective algorithms work - and perhaps trashing the connection (which would explain it being unreachable until the OS can reset it).
<br>
<p>You might try running with fewer procs/node to see if that helps.
<br>
<p><p>On Apr 4, 2013, at 11:10 AM, Yevgeny Popkov &lt;ypopkov_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running some matrix-algebra-based calculations on Amazon EC2 (HVM instances running Ubuntu 11.1 with OpenMPI 1.6.4 and python bindings with mpi4py 1.3). I am using StarCluster to spin up instances so all nodes from a given cluster are in the same placement group (i.e. are on the same 10 Gb network) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My calculations are CPU-bound and I use just a few collective operations (namely allgatherv, statterv, bcast, and reduce) that exchange a non-trivial amount data (the size of full distributed dense matrix reaches tens of gigabytes - e.g. I use allgatherv on that matrix) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For smaller matrix sizes everything works fine but once I start increasing the number of parameters in my models and, as a result, increase the number of nodes/workers to keep up I get errors like this one:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [node005][[18726,1],125][btl_tcp_frag.c:215:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [node008][[18726,1],8][btl_tcp_frag.c:215:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [node008][[18726,1],108][btl_tcp_frag.c:215:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [node008][[18726,1],28][btl_tcp_frag.c:215:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [node007][[18726,1],7][btl_tcp_frag.c:215:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [node001][[18726,1],21][btl_tcp_frag.c:215:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've also seen other network-related errors such as &quot;unable to find path to host&quot;. Whenever I get these errors one or more of the EC2 nodes becomes &quot;unreachable&quot; according EC2 Web UI (even though I can log in to those nodes using internal IP aliases) Such nodes typically recover from being &quot;unreachable&quot; after a few minutes but my MPI job hangs anyway. The culprit is usually allgatherv but I've seen reduce and bcast to cause these errors as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't get this errors if I run on a single node (but that's way too slow even with 16 workers so I need to run my jobs on at least 20 nodes)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea how to fix this? May be by adjusting some linux and/or OpenMPI parameters?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help would greatly appreciated!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Yevgeny
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21678/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21679.php">Limin Gu: "Re: [OMPI users] openmpi-1.7 failed to build on Centos 6.4"</a>
<li><strong>Previous message:</strong> <a href="21677.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7 failed to build on Centos 6.4"</a>
<li><strong>In reply to:</strong> <a href="21675.php">Yevgeny Popkov: "[OMPI users] Fwd: network related MPI errors on Amazon EC2"</a>
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
