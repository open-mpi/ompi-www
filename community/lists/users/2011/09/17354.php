<?
$subject_val = "Re: [OMPI users] MPI hangs on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 20 08:34:57 2011" -->
<!-- isoreceived="20110920123457" -->
<!-- sent="Tue, 20 Sep 2011 05:34:51 -0700" -->
<!-- isosent="20110920123451" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI hangs on multiple nodes" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F32689F8C549_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DDDBC7A5-A13B-459F-B4CC-984195A40204_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI hangs on multiple nodes<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-20 08:34:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17355.php">Barrett, Brian W: "Re: [OMPI users] Open MPI and Objective C"</a>
<li><strong>Previous message:</strong> <a href="17353.php">Reuti: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>In reply to:</strong> <a href="17351.php">Jeff Squyres: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17434.php">Ole Nielsen: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; 1: After a reboot of two nodes I ran again, and the inter-node freeze didn't
</span><br>
<span class="quotelev1">&gt;happen until the third iteration. I take that to mean that the basic
</span><br>
<span class="quotelev1">&gt;communication works, but that something is saturating. Is there some notion
</span><br>
<span class="quotelev1">&gt;of buffer size somewhere in the MPI system that could explain this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hmm.  This is not a good sign; it somewhat indicates a problem with your OS.
</span><br>
<span class="quotelev1">&gt;Based on this email and your prior emails, I'm guessing you're using TCP for
</span><br>
<span class="quotelev1">&gt;communication, and that the problem is based on inter-node communication
</span><br>
<span class="quotelev1">&gt;(e.g., the problem would occur even if you only run 1 process per machine,
</span><br>
<span class="quotelev1">&gt;but does not occur if you run all N processes on a single machine, per your #4,
</span><br>
<span class="quotelev1">&gt;below).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I agree with Jeff here.  Open MPI uses lazy connections to establish connections and round robins through the interfaces.
<br>
So, the first few communications could work as they are using interfaces that could communicate between the nodes, but the third iteration uses an interface that for some reason cannot establish the connection.
<br>
<p>One flag you can use that may help is --mca btl_base_verbose 20, like this;
<br>
<p>mpirun --mca btl_base_verbose 20 connectivity_c
<br>
<p>It will dump out a bunch of stuff, but there will be a few lines that look like this:
<br>
<p>[...snip...]
<br>
[dt:09880] btl: tcp: attempting to connect() to [[58627,1],1] address 10.20.14.101 on port 1025
<br>
[...snip...]
<br>
<p>Rolf
<br>
<p><p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17355.php">Barrett, Brian W: "Re: [OMPI users] Open MPI and Objective C"</a>
<li><strong>Previous message:</strong> <a href="17353.php">Reuti: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>In reply to:</strong> <a href="17351.php">Jeff Squyres: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17434.php">Ole Nielsen: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
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
