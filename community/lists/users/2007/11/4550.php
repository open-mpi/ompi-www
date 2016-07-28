<?
$subject_val = "Re: [OMPI users] Run a process double";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 18:46:42 2007" -->
<!-- isoreceived="20071128234642" -->
<!-- sent="Wed, 28 Nov 2007 16:46:30 -0700" -->
<!-- isosent="20071128234630" -->
<!-- name="Damien Hocking" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Run a process double" -->
<!-- id="474DFDD6.3050607_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="474DF3A1.9020906_at_yahoo.com.ar" -->
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
<strong>Subject:</strong> Re: [OMPI users] Run a process double<br>
<strong>From:</strong> Damien Hocking (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-28 18:46:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4551.php">Mark Potts: "Re: [OMPI users] Run a process double"</a>
<li><strong>Previous message:</strong> <a href="4549.php">Henry Adolfo Lambis Miranda: "[OMPI users] Run a process double"</a>
<li><strong>In reply to:</strong> <a href="4549.php">Henry Adolfo Lambis Miranda: "[OMPI users] Run a process double"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4551.php">Mark Potts: "Re: [OMPI users] Run a process double"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's what's supposed to happen, it's how MPI works.  Process 0 is the 
<br>
head or boss process, and the others are slaves, and execute partially 
<br>
different code even though they're in the same executable.  MPI is 
<br>
multi-process, not multi-thread.
<br>
<p>Damien
<br>
<p>Henry Adolfo Lambis Miranda wrote:
<br>
<span class="quotelev1">&gt; Hi everybody out there.....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is my first post to the mail list.
</span><br>
<span class="quotelev1">&gt; I have installed openmp 1.2.4 over a x_64 AMD double processor with SuSE
</span><br>
<span class="quotelev1">&gt; linux.
</span><br>
<span class="quotelev1">&gt; In principal, the instalation was succefull, with ifort 10.X.
</span><br>
<span class="quotelev1">&gt; But when i run any code ( mpirun -np 2 a.out), instead of share the
</span><br>
<span class="quotelev1">&gt; calcules between the two
</span><br>
<span class="quotelev1">&gt; processor, the system duplicate the executable and send one to each
</span><br>
<span class="quotelev1">&gt; processor.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i don&#180;t know what the h$%&amp; is going on......
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Henry
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4551.php">Mark Potts: "Re: [OMPI users] Run a process double"</a>
<li><strong>Previous message:</strong> <a href="4549.php">Henry Adolfo Lambis Miranda: "[OMPI users] Run a process double"</a>
<li><strong>In reply to:</strong> <a href="4549.php">Henry Adolfo Lambis Miranda: "[OMPI users] Run a process double"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4551.php">Mark Potts: "Re: [OMPI users] Run a process double"</a>
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
