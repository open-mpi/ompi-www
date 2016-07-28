<?
$subject_val = "Re: [OMPI users] MPI Template Datatype?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  9 16:10:02 2010" -->
<!-- isoreceived="20100809201002" -->
<!-- sent="Mon, 9 Aug 2010 22:09:58 +0200" -->
<!-- isosent="20100809200958" -->
<!-- name="Riccardo Murri" -->
<!-- email="riccardo.murri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Template Datatype?" -->
<!-- id="AANLkTineaP_WEjPhwUxVZiyiJ+wOvhogQ=TbUN2bvSus_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AANLkTimjcMaLrvjBViggkmHJvwOnuwXQafu=uZyQud_g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Template Datatype?<br>
<strong>From:</strong> Riccardo Murri (<em>riccardo.murri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-09 16:09:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13947.php">Alexandru Blidaru: "Re: [OMPI users] MPI Template Datatype?"</a>
<li><strong>Previous message:</strong> <a href="13945.php">ananda.mudar_at_[hidden]: "[OMPI users] Checkpointing mpi4py program"</a>
<li><strong>In reply to:</strong> <a href="13942.php">Alexandru Blidaru: "[OMPI users] MPI Template Datatype?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13947.php">Alexandru Blidaru: "Re: [OMPI users] MPI Template Datatype?"</a>
<li><strong>Reply:</strong> <a href="13947.php">Alexandru Blidaru: "Re: [OMPI users] MPI Template Datatype?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Alexandru,
<br>
<p>On Mon, Aug 9, 2010 at 6:05 PM, Alexandru Blidaru &lt;alexsb92_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I have to send some vectors from node to node, and the vecotrs are built
</span><br>
<span class="quotelev1">&gt; using a template. The datatypes used in the template will be long, int,
</span><br>
<span class="quotelev1">&gt; double, and char. How may I send those vectors since I wouldn't know what
</span><br>
<span class="quotelev1">&gt; MPI datatype i have to specify in MPI_Send and MPI Recv. Is there any way to
</span><br>
<span class="quotelev1">&gt; do this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I'm not sure I understand what your question is about: are you asking
<br>
what MPI datatypes you should use to send C types &quot;long&quot;, &quot;int&quot;, etc.,
<br>
or are you trying to send a more complex C type (&quot;vector&quot;)?
<br>
Can you send some code demonstrating the  problem you are trying to solve?
<br>
<p>Besides, your wording suggests that you are trying to send a C++
<br>
std::vector&lt;T&gt; over MPI: have you already had a look at Boost.MPI?  It
<br>
has out-of-the-box support for STL containers.
<br>
<p>Cheers,
<br>
Riccardo
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13947.php">Alexandru Blidaru: "Re: [OMPI users] MPI Template Datatype?"</a>
<li><strong>Previous message:</strong> <a href="13945.php">ananda.mudar_at_[hidden]: "[OMPI users] Checkpointing mpi4py program"</a>
<li><strong>In reply to:</strong> <a href="13942.php">Alexandru Blidaru: "[OMPI users] MPI Template Datatype?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13947.php">Alexandru Blidaru: "Re: [OMPI users] MPI Template Datatype?"</a>
<li><strong>Reply:</strong> <a href="13947.php">Alexandru Blidaru: "Re: [OMPI users] MPI Template Datatype?"</a>
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
