<?
$subject_val = "Re: [OMPI devel] Launcher in trunk is broken?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 10 13:14:37 2011" -->
<!-- isoreceived="20111010171437" -->
<!-- sent="Mon, 10 Oct 2011 13:14:33 -0400" -->
<!-- isosent="20111010171433" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Launcher in trunk is broken?" -->
<!-- id="12DF8D49-B1CD-457E-9881-5F9062EF6ED8_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2B9031E9-C2BF-43C5-845C-A02E4E8DDF94_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-10 13:14:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9806.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>Previous message:</strong> <a href="9804.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>In reply to:</strong> <a href="9804.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9806.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>Reply:</strong> <a href="9806.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>If you don't mind I would like to understand this issue a little bit more. What exactly is broken in the termination detection?
<br>
<p><span class="quotelev1">&gt;From a network point of view, there is a slight issue with the commit 25245. A direct call to exit will close all pending sockets, with a linger of 60 seconds (quite bad if you use static ports as an example). There are proper protocols to shutdown sockets in a reliable way, maybe it is time to implement one of them.
</span><br>
<p>Thanks,
<br>
&nbsp;&nbsp;george.
<br>
<p>On Oct 10, 2011, at 12:40 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; It wasn't the launcher that was broken, but termination detection, and not for all environments (e.g., worked fine for slurm). It is a progress-related issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should be fixed in r25245.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 10, 2011, at 8:33 AM, Shamis, Pavel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; + 1 , I see the same issue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Behalf Of Yevgeny Kliteynik
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Monday, October 10, 2011 10:24 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: OpenMPI Devel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI devel] Launcher in trunk is broken?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like the process launcher is broken in the OMPI trunk:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you run any simple test (not necessarily including MPI calls) on 4 or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; more nodes, the MPI processes won't be killed after the test finishes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -host host_1,host_2,host_3,host_4 -np 4 --mca btl sm,tcp,self
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Output:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; host_1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; host_2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; host_3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; host_4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And test is hanging......
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have an older trunk (r25228), and everything is OK there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not sure if it means that something was broken after that, or the problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; existed before, but kicked in only now due to some other change.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- YK
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hxxp://www.open-mpi.org/mailman/listinfo.cgi/devel
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
<li><strong>Next message:</strong> <a href="9806.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>Previous message:</strong> <a href="9804.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>In reply to:</strong> <a href="9804.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9806.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>Reply:</strong> <a href="9806.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
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
