<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 12 10:58:38 2007" -->
<!-- isoreceived="20070612145838" -->
<!-- sent="Tue, 12 Jun 2007 10:57:36 -0400" -->
<!-- isosent="20070612145736" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] rdma over tcp?" -->
<!-- id="87A4AD78-AFD6-451B-ADEF-514C450ACBC2_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="89A6B5FC-59AB-4093-AF28-13EA8376AEA7_at_lanl.gov" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-12 10:57:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3475.php">Jeff Pummill: "Re: [OMPI users] f90 support not built with gfortran?"</a>
<li><strong>Previous message:</strong> <a href="3473.php">Brian Barrett: "Re: [OMPI users] rdma over tcp?"</a>
<li><strong>In reply to:</strong> <a href="3473.php">Brian Barrett: "Re: [OMPI users] rdma over tcp?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 12, 2007, at 10:52 AM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 11, 2007, at 9:27 AM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With openmpi-1.2.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i ran a:  ompi_info --param btl tcp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and i see reference to:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MCA btl: parameter &quot;btl_tcp_min_rdma_size&quot; (current value: &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; MCA btl: parameter &quot;btl_tcp_max_rdma_size&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;2147483647&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can TCP support RDMA?  I thought you needed fancy hardware to get
</span><br>
<span class="quotelev2">&gt;&gt; such support?  Light on this subject is highly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Also if a user using ethernet, is trying to up the limit for
</span><br>
<span class="quotelev2">&gt;&gt; 'greedy'  messages that the btl_tcp_eager_limit?  Is there a problem
</span><br>
<span class="quotelev2">&gt;&gt; increasing its size?  We will test it with his app of-course,  but
</span><br>
<span class="quotelev2">&gt;&gt; was wondering if there was a 'gotcha'  I was going to walk into.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Brock -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;rdma&quot; part of the TCP transport isn't real RDMA, but just which
</span><br>
<span class="quotelev1">&gt; protocol is used by the upper layers to transfer data.  In the send/
</span><br>
<span class="quotelev1">&gt; receive protocol, receives always involve a copy.  Using the RDMA
</span><br>
<span class="quotelev1">&gt; protocol (which is pretty simple to fake with a send/receive
</span><br>
<span class="quotelev1">&gt; interface), the TCP BTL header includes the remote address and no
</span><br>
<span class="quotelev1">&gt; copy is involved.  So no, we haven't discovered some hidden interface
</span><br>
<span class="quotelev1">&gt; in TCP -- just trying to have as few special cases for various
</span><br>
<span class="quotelev1">&gt; interconnects as possible :).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, increasing the btl_tcp_eager_limit is how you increase the
</span><br>
<span class="quotelev1">&gt; &quot;greedy&quot; message size.  It's currently 64k, and the only problem with
</span><br>
<span class="quotelev1">&gt; increasing it is memory usage.  With TCP, even if you need to send a
</span><br>
<span class="quotelev1">&gt; 4 byte message, 64K will be used on both the sender and receiver
</span><br>
<span class="quotelev1">&gt; during transfer and these fragments are free-listed, so you can very
</span><br>
<span class="quotelev1">&gt; quickly cause Open MPI to use lots and lots of memory if the eager
</span><br>
<span class="quotelev1">&gt; limit is too big.  If you start seeing segfauls, bus errors, and
</span><br>
<span class="quotelev1">&gt; failed mallocs, you might have bumped the eager limit too high and
</span><br>
<span class="quotelev1">&gt; run yourself out of memory...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<p>Thanks thats exactly what i want to know!  (and kind of assumed)
<br>
Brock
<br>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3475.php">Jeff Pummill: "Re: [OMPI users] f90 support not built with gfortran?"</a>
<li><strong>Previous message:</strong> <a href="3473.php">Brian Barrett: "Re: [OMPI users] rdma over tcp?"</a>
<li><strong>In reply to:</strong> <a href="3473.php">Brian Barrett: "Re: [OMPI users] rdma over tcp?"</a>
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
