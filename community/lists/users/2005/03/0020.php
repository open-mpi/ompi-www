<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 11 01:50:54 2005" -->
<!-- isoreceived="20050311065054" -->
<!-- sent="Fri, 11 Mar 2005 07:46:26 +0100" -->
<!-- isosent="20050311064626" -->
<!-- name="Toon Knapen" -->
<!-- email="toon.knapen_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]" -->
<!-- id="42313EC2.1060409_at_fft.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="fafb4304d2be3471477db2dbba924e7a_at_anu.edu.au" -->
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
<strong>From:</strong> Toon Knapen (<em>toon.knapen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-03-11 01:46:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0021.php">Jeff Squyres: "[O-MPI users] Fwd: Thoughts on an MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0019.php">Stuart Midgley: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>In reply to:</strong> <a href="0017.php">Stuart Midgley: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0024.php">JorgeJ. Hernandez: "[O-MPI users] Information Request..."</a>
<li><strong>Reply:</strong> <a href="0024.php">JorgeJ. Hernandez: "[O-MPI users] Information Request..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Stuart Midgley wrote:
<br>
<p><span class="quotelev1">&gt; The other issue we are concerned about is that an ABI doesn't resolve 
</span><br>
<span class="quotelev1">&gt; one of the central issues.  While you might have different MPI's with 
</span><br>
<span class="quotelev1">&gt; the same ABI, different mpi's behave differently and can cause a code to 
</span><br>
<span class="quotelev1">&gt; behave differently.  An ISV would still have to verify their code 
</span><br>
<span class="quotelev1">&gt; against all MPI's they wish to support.  For example, an ISV might, by 
</span><br>
<span class="quotelev1">&gt; accident, make an assumption about the small message size and their code 
</span><br>
<span class="quotelev1">&gt; might hang on different MPI's.
</span><br>
<p>This is an artifact of relying on a standard.
<br>
<p>For instance, we also rely on our compilers to be compliant to the C++ 
<br>
standard. Sometimes we stumble on different interpretations of the 
<br>
standard by multiple compilers (although being compliant) and thus 
<br>
different behaviour of different platforms. But by default we suppose 
<br>
all our compliant. This is far less work than making no such assumption 
<br>
and the number of problems due to this assumption are low (and controlable).
<br>
<p>So the fact that multiple implementations of the same standard might 
<br>
behave differently should not prohibit the use of a standard.
<br>
<p>toon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0021.php">Jeff Squyres: "[O-MPI users] Fwd: Thoughts on an MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0019.php">Stuart Midgley: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>In reply to:</strong> <a href="0017.php">Stuart Midgley: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0024.php">JorgeJ. Hernandez: "[O-MPI users] Information Request..."</a>
<li><strong>Reply:</strong> <a href="0024.php">JorgeJ. Hernandez: "[O-MPI users] Information Request..."</a>
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
