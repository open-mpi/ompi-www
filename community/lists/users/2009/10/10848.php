<?
$subject_val = "Re: [OMPI users] How to force the configure, and make to build a 32 bit opmi on a 64 bit linux ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 10:58:56 2009" -->
<!-- isoreceived="20091001145856" -->
<!-- sent="Thu, 1 Oct 2009 10:58:51 -0400" -->
<!-- isosent="20091001145851" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to force the configure, and make to build a 32 bit opmi on a 64 bit linux ?" -->
<!-- id="59D35255-2240-4002-8D69-8684D7711EFE_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="SNT109-W10BD57EB507A6CEBFE49E08DD30_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to force the configure, and make to build a 32 bit opmi on a 64 bit linux ?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 10:58:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10849.php">Michael Di Domenico: "[OMPI users] openmpi 1.4 and barrier"</a>
<li><strong>Previous message:</strong> <a href="10847.php">Nader Ahmadi: "[OMPI users] How to force the configure, and make to build a 32 bit opmi on a 64 bit linux ?"</a>
<li><strong>In reply to:</strong> <a href="10847.php">Nader Ahmadi: "[OMPI users] How to force the configure, and make to build a 32 bit opmi on a 64 bit linux ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You probably just want to pass the relevant compiler/linker flags to  
<br>
Open MPI's configure script, such as:
<br>
<p>&nbsp;&nbsp;&nbsp;./configure CFLAGS=-m32 CXXFLAGS=-m32 FFLAGS=-m32 FCFLAGS=-m32 ...
<br>
<p>You need to pass them to all four language flags (C, C++, F77, F90).   
<br>
I used -m32 as an example here; use whatever flag(s) is(are) relevant  
<br>
for your compiler.
<br>
<p><p><p>On Oct 1, 2009, at 10:43 AM, Nader Ahmadi wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have 64 bit linux box. For a number of reason I need to build a  
</span><br>
<span class="quotelev1">&gt; 32 bit
</span><br>
<span class="quotelev1">&gt; openMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have searched FAQ and archived mail, but I couldn't find a good  
</span><br>
<span class="quotelev1">&gt; answer.
</span><br>
<span class="quotelev1">&gt; There are some references to this question, in the developer mailing  
</span><br>
<span class="quotelev1">&gt; list with no clear
</span><br>
<span class="quotelev1">&gt; response.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am I looking for is:
</span><br>
<span class="quotelev1">&gt; How do I force the configure, and make to build a 32 bit OMPI on a  
</span><br>
<span class="quotelev1">&gt; 64 bit linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nader,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Microsoft brings you a new way to search the web. Try Bing&#153; now  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10849.php">Michael Di Domenico: "[OMPI users] openmpi 1.4 and barrier"</a>
<li><strong>Previous message:</strong> <a href="10847.php">Nader Ahmadi: "[OMPI users] How to force the configure, and make to build a 32 bit opmi on a 64 bit linux ?"</a>
<li><strong>In reply to:</strong> <a href="10847.php">Nader Ahmadi: "[OMPI users] How to force the configure, and make to build a 32 bit opmi on a 64 bit linux ?"</a>
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
