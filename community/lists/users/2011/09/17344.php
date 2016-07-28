<?
$subject_val = "Re: [OMPI users] RE :  MPI hangs on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 19 16:19:50 2011" -->
<!-- isoreceived="20110919201950" -->
<!-- sent="Mon, 19 Sep 2011 16:19:40 -0400" -->
<!-- isosent="20110919201940" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RE :  MPI hangs on multiple nodes" -->
<!-- id="4E77A3DC.80902_at_ldeo.columbia.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E777824.60507_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] RE :  MPI hangs on multiple nodes<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-19 16:19:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17345.php">Blosch, Edwin L: "[OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>Previous message:</strong> <a href="17343.php">Jeremiah Willcock: "[OMPI users] Typo in MPI_Cart_coords man page"</a>
<li><strong>In reply to:</strong> <a href="17342.php">Gus Correa: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ole, Eugene
<br>
<p>For what it is worth, I tried Ole's program here,
<br>
as Devendra Rai had done before.
<br>
I ran it across two nodes, with a total of 16 processes.
<br>
I tried mca parameters for openib Infiniband,
<br>
then for tcp on Gigabit Ethernet.
<br>
Both work.
<br>
I am using OpenMPI 1.4.3 compiled with GCC 4.1.2 on CentOS 5.2.
<br>
Thanks.
<br>
<p>Gus Correa
<br>
<p>Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Hi Eugene
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You're right, it is blocking send, buffers can be reused after MPI_Send 
</span><br>
<span class="quotelev1">&gt; returns.
</span><br>
<span class="quotelev1">&gt; My bad, I only read your answer to Sebastien and Ole
</span><br>
<span class="quotelev1">&gt; after I posted mine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could MPI run out of [internal] buffers to hold the messages, perhaps?
</span><br>
<span class="quotelev1">&gt; The messages aren't that big anyway [5000 doubles].
</span><br>
<span class="quotelev1">&gt; Could MPI behave differently regarding internal
</span><br>
<span class="quotelev1">&gt; buffering when communication is intra-node vs. across the network?
</span><br>
<span class="quotelev1">&gt; [It works intra-node, according to Ole's posting.]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suppose Ole rebuilt OpenMPI on his newly installed Ubuntu.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm missing the point on the buffer re-use.  It seems to me that the 
</span><br>
<span class="quotelev2">&gt;&gt; sample program passes some buffer around in a ring.  Each process 
</span><br>
<span class="quotelev2">&gt;&gt; receives the buffer with a blocking receive and then forwards it with 
</span><br>
<span class="quotelev2">&gt;&gt; a blocking send.  The blocking send does not return until the send 
</span><br>
<span class="quotelev2">&gt;&gt; buffer is safe to reuse.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 9/19/2011 7:37 AM, Gus Correa wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You could try the examples/connectivity.c program in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI source tree, to test if everything is alright.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It also hints how to solve the buffer re-use issue
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that Sebastien [rightfully] pointed out [i.e., declare separate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; buffers for MPI_Send and MPI_Recv].
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; S&#233;bastien Boisvert wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is it safe to re-use the same buffer (variable A) for MPI_Send and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Recv given that MPI_Send may be eager depending on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the MCA parameters ?
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17345.php">Blosch, Edwin L: "[OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>Previous message:</strong> <a href="17343.php">Jeremiah Willcock: "[OMPI users] Typo in MPI_Cart_coords man page"</a>
<li><strong>In reply to:</strong> <a href="17342.php">Gus Correa: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
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
