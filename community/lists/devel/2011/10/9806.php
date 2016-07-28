<?
$subject_val = "Re: [OMPI devel] Launcher in trunk is broken?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 10 13:30:00 2011" -->
<!-- isoreceived="20111010173000" -->
<!-- sent="Mon, 10 Oct 2011 11:29:51 -0600" -->
<!-- isosent="20111010172951" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Launcher in trunk is broken?" -->
<!-- id="9CED47BA-0202-462E-A668-E63490E785F7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="12DF8D49-B1CD-457E-9881-5F9062EF6ED8_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Launcher in trunk is broken?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-10 13:29:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9807.php">Jeff Squyres: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>Previous message:</strong> <a href="9805.php">George Bosilca: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>In reply to:</strong> <a href="9805.php">George Bosilca: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9807.php">Jeff Squyres: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>Reply:</strong> <a href="9807.php">Jeff Squyres: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>Reply:</strong> <a href="9808.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 10, 2011, at 11:14 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you don't mind I would like to understand this issue a little bit more. What exactly is broken in the termination detection?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From a network point of view, there is a slight issue with the commit 25245. A direct call to exit will close all pending sockets, with a linger of 60 seconds (quite bad if you use static ports as an example). There are proper protocols to shutdown sockets in a reliable way, maybe it is time to implement one of them.
</span><br>
<p>Did I miss this message somewhere? I didn't receive it.
<br>
<p>The problem is that the daemons with children are not seeing the sockets close when their child daemons terminate. So the lowest layer of daemons terminate (as they have no children). The next layer does not terminate, leaving mpirun hanging.
<br>
<p>What's interesting is that mpirun does see the sockets directly connected to it close. As you probably recall, the binomial routed module has daemons directly callback to  mpirun, so that connection is created. The socket to the next level of daemon gets created later - it is this later socket whose closure isn't being detected.
<br>
<p><span class="quotelev1">&gt;From what I could see, it appeared to be a progress issue. The socket may be closed, but the event lib may not be progressing to detect it. As we intend to fix that anyway with the async progress work, and static ports are not the default behavior (and rarely used), I didn't feel it worth leaving the trunk hanging while continuing to chase it.
</span><br>
<p>If someone has time, properly closing the sockets is something we've talked about for quite awhile, but never gotten around to doing. I'm not sure it will resolve this problem, but would be worth doing anyway.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 10, 2011, at 12:40 , Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It wasn't the launcher that was broken, but termination detection, and not for all environments (e.g., worked fine for slurm). It is a progress-related issue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Should be fixed in r25245.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 10, 2011, at 8:33 AM, Shamis, Pavel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + 1 , I see the same issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Behalf Of Yevgeny Kliteynik
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Monday, October 10, 2011 10:24 AM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: OpenMPI Devel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: [OMPI devel] Launcher in trunk is broken?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It looks like the process launcher is broken in the OMPI trunk:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you run any simple test (not necessarily including MPI calls) on 4 or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; more nodes, the MPI processes won't be killed after the test finishes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpirun -host host_1,host_2,host_3,host_4 -np 4 --mca btl sm,tcp,self
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Output:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; host_1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; host_2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; host_3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; host_4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And test is hanging......
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have an older trunk (r25228), and everything is OK there.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Not sure if it means that something was broken after that, or the problem
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; existed before, but kicked in only now due to some other change.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- YK
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hxxp://www.open-mpi.org/mailman/listinfo.cgi/devel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9807.php">Jeff Squyres: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>Previous message:</strong> <a href="9805.php">George Bosilca: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>In reply to:</strong> <a href="9805.php">George Bosilca: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9807.php">Jeff Squyres: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>Reply:</strong> <a href="9807.php">Jeff Squyres: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>Reply:</strong> <a href="9808.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
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
