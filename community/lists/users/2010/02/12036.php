<?
$subject_val = "Re: [OMPI users] Difficulty with MPI_Unpack";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 06:20:08 2010" -->
<!-- isoreceived="20100208112008" -->
<!-- sent="Mon, 08 Feb 2010 12:21:57 +0100" -->
<!-- isosent="20100208112157" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Difficulty with MPI_Unpack" -->
<!-- id="871vgwug4q.fsf_at_59A2.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B6F87C7.2000803_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Difficulty with MPI_Unpack<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-08 06:21:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12037.php">Andreea Costea: "Re: [OMPI users] OpenMPI checkpoint/restart on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="12035.php">Rafael Arco Arredondo: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>In reply to:</strong> <a href="12033.php">Prentice Bisbal: "[OMPI users] Difficulty with MPI_Unpack"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12039.php">Prentice Bisbal: "Re: [OMPI users] Difficulty with MPI_Unpack"</a>
<li><strong>Reply:</strong> <a href="12039.php">Prentice Bisbal: "Re: [OMPI users] Difficulty with MPI_Unpack"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, 07 Feb 2010 22:40:55 -0500, Prentice Bisbal &lt;prentice_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello, everyone. I'm having trouble packing/unpacking this structure:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; typedef struct{
</span><br>
<span class="quotelev1">&gt;   int index;
</span><br>
<span class="quotelev1">&gt;   int* coords;
</span><br>
<span class="quotelev1">&gt; }point;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The size of the coords array is not known a priori, so it needs to be a
</span><br>
<span class="quotelev1">&gt; dynamic array. I'm trying to send it from one node to another using
</span><br>
<span class="quotelev1">&gt; MPI_Pack/MPI_Unpack as shown below. When I unpack it, I get this error
</span><br>
<span class="quotelev1">&gt; when unpacking the coords array:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [fatboy:07360] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [fatboy:07360] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [fatboy:07360] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [fatboy:07360] Failing at address: (nil)
</span><br>
<p>Looks like b_point.coords = NULL.  Has this been allocated on rank=1?
<br>
<p>You might need to use MPI_Get_count to decide how much to allocate.
<br>
Also, if you don't have a convenient upper bound on the size of the
<br>
receive buffer, you can use MPI_Probe followed by MPI_Get_count to
<br>
determine this before calling MPI_Recv.
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12037.php">Andreea Costea: "Re: [OMPI users] OpenMPI checkpoint/restart on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="12035.php">Rafael Arco Arredondo: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>In reply to:</strong> <a href="12033.php">Prentice Bisbal: "[OMPI users] Difficulty with MPI_Unpack"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12039.php">Prentice Bisbal: "Re: [OMPI users] Difficulty with MPI_Unpack"</a>
<li><strong>Reply:</strong> <a href="12039.php">Prentice Bisbal: "Re: [OMPI users] Difficulty with MPI_Unpack"</a>
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
