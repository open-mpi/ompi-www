<?
$subject_val = "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 14:17:25 2009" -->
<!-- isoreceived="20090320181725" -->
<!-- sent="Fri, 20 Mar 2009 14:17:20 -0400" -->
<!-- isosent="20090320181720" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode" -->
<!-- id="49C3DDB0.9020204_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49C3DCAE.6060705_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-20 14:17:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8541.php">Prentice Bisbal: "Re: [OMPI users] Compiling Open MPI with PGI compilers in	32-bit mode"</a>
<li><strong>Previous message:</strong> <a href="8539.php">Ethan Mallove: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
<li><strong>In reply to:</strong> <a href="8538.php">Prentice Bisbal: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8539.php">Ethan Mallove: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Prentice Bisbal wrote:
<br>
<span class="quotelev1">&gt; Ethan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree with Doug. Did you try to build for 64-bit in the same
</span><br>
<span class="quotelev1">&gt; directory? If so, you need to do a 'make clean' or 'make distclean'
</span><br>
<span class="quotelev1">&gt; before compiling for 32-bit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Even if you didn't try to compile for 64-bit yourself, try doing 'make
</span><br>
<span class="quotelev1">&gt; clean' or 'make distclean'. ;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I should add that I had a similar problem only a couple of weeks ago
<br>
with a different piece of software. The .o files were of type &quot;Mach-0&quot;.
<br>
The developer did his developing on a Mac, and the tarball contained the
<br>
.o files from his own builds. He didn't have a 'make clean' or 'make
<br>
distclean' in his Makefile, so I had to resort to
<br>
<p>find . -name \*.o -exec rm \{\} \;
<br>
<p>which fixed the problem.
<br>
<p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8541.php">Prentice Bisbal: "Re: [OMPI users] Compiling Open MPI with PGI compilers in	32-bit mode"</a>
<li><strong>Previous message:</strong> <a href="8539.php">Ethan Mallove: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
<li><strong>In reply to:</strong> <a href="8538.php">Prentice Bisbal: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8539.php">Ethan Mallove: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
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
