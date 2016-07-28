<?
$subject_val = "Re: [OMPI devel] mpirun -host does not work from r27879 and forward	on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 31 11:50:56 2013" -->
<!-- isoreceived="20130131165056" -->
<!-- sent="Thu, 31 Jan 2013 08:50:49 -0800" -->
<!-- isosent="20130131165049" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpirun -host does not work from r27879 and forward	on trunk" -->
<!-- id="5D607F7F-7347-430D-A0D3-C0CF542452B5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F35E93472C20_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpirun -host does not work from r27879 and forward	on trunk<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-31 11:50:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12091.php">Rolf vandeVaart: "Re: [OMPI devel] mpirun -host does not work from r27879 and	forward	on trunk"</a>
<li><strong>Previous message:</strong> <a href="12089.php">Rolf vandeVaart: "Re: [OMPI devel] mpirun -host does not work from r27879 and forward	on trunk"</a>
<li><strong>In reply to:</strong> <a href="12089.php">Rolf vandeVaart: "Re: [OMPI devel] mpirun -host does not work from r27879 and forward	on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12091.php">Rolf vandeVaart: "Re: [OMPI devel] mpirun -host does not work from r27879 and	forward	on trunk"</a>
<li><strong>Reply:</strong> <a href="12091.php">Rolf vandeVaart: "Re: [OMPI devel] mpirun -host does not work from r27879 and	forward	on trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes - no hostfile and no RM allocation, just -host. 
<br>
<p>What is your setup?
<br>
<p>On Jan 31, 2013, at 8:44 AM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Interesting.  Yes, I was saying that the latest trunk does not work for me.  I just retested the trunk also, and no luck.
</span><br>
<span class="quotelev1">&gt; Are you launching the MPI processes on remote nodes from the HNP?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, January 31, 2013 11:40 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] mpirun -host does not work from r27879 and
</span><br>
<span class="quotelev2">&gt;&gt; forward on trunk
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FWIW: I just tried it on the trunk head and it worked fine
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 31, 2013, at 8:20 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ummm...that was fixed a long time ago. You might try a later version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or are you saying the head of the trunk doesn't work too?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 31, 2013, at 7:31 AM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have stumbled into a problem with the -host argument.  This problem
</span><br>
<span class="quotelev2">&gt;&gt; appears to be introduced with changeset r27879 on 1/19/2013 by rhc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With r27877, things work:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rolf_at_node]$ which mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/rolf/ompi-trunk-r27877/64/bin/mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rolf_at_node]$ mpirun -np 2 -host c0-0,c0-3 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; c0-3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; c0-0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With r27879, things are broken:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rolf_at_node]$ setenv PATH /home/rolf/ompi-trunk-r27879/64/bin:${PATH}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rolf_at_node]$ mpirun -np 2 -host c0-0,c0-3 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----- All nodes which are allocated for this job are already filled.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rolf_at_Fermi-Cluster nv]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Note: Could not compile r27878 so did not test that.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I can only run processes on the same node as mpirun.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------- This email message is for the sole use of the intended
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; recipient(s) and may contain confidential information.  Any
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unauthorized review, use, disclosure or distribution is prohibited.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="12091.php">Rolf vandeVaart: "Re: [OMPI devel] mpirun -host does not work from r27879 and	forward	on trunk"</a>
<li><strong>Previous message:</strong> <a href="12089.php">Rolf vandeVaart: "Re: [OMPI devel] mpirun -host does not work from r27879 and forward	on trunk"</a>
<li><strong>In reply to:</strong> <a href="12089.php">Rolf vandeVaart: "Re: [OMPI devel] mpirun -host does not work from r27879 and forward	on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12091.php">Rolf vandeVaart: "Re: [OMPI devel] mpirun -host does not work from r27879 and	forward	on trunk"</a>
<li><strong>Reply:</strong> <a href="12091.php">Rolf vandeVaart: "Re: [OMPI devel] mpirun -host does not work from r27879 and	forward	on trunk"</a>
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
