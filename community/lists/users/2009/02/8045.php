<?
$subject_val = "Re: [OMPI users] OpenMPI and Valgrind";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 16:30:10 2009" -->
<!-- isoreceived="20090212213010" -->
<!-- sent="Thu, 12 Feb 2009 13:30:02 -0800" -->
<!-- isosent="20090212213002" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and Valgrind" -->
<!-- id="B3470262-3A58-4D85-909B-48164163C05C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200902121623.35678.techlist_at_pathfinder.phys.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI and Valgrind<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-12 16:30:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8046.php">George Bosilca: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>Previous message:</strong> <a href="8044.php">Reuben D. Budiardja: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>In reply to:</strong> <a href="8044.php">Reuben D. Budiardja: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8046.php">George Bosilca: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 12, 2009, at 1:23 PM, Reuben D. Budiardja wrote:
<br>
<p><span class="quotelev2">&gt;&gt; From memory and reading the above links (i.e. untested advice):
</span><br>
<span class="quotelev2">&gt;&gt; 1) Use OpenMPI 1.3 where the default is not to include this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried it with OpenMPI 1.3, I didn't give any configure option
</span><br>
<span class="quotelev1">&gt; except --prefix, and Valgrind still does not work as expected.
</span><br>
<p>Open MPI v1.3 does not include a memory manager by default, so it's  
<br>
possible that something else is going on here to interfere with  
<br>
Valgrind's behavior.  Or it could be that Valgrind simply won't catch  
<br>
this error.
<br>
<p><span class="quotelev2">&gt;&gt; 2) Configure Open MPI 1.2.8 with the --disable-memory-manager option
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tried this, no luck either. The option doesn't seem to be doing  
</span><br>
<span class="quotelev1">&gt; anything, and
</span><br>
<span class="quotelev1">&gt; it's not even listed as option with &quot;./configure --help&quot;.
</span><br>
<p>Try --without-memory-manager (not --disable).
<br>
<p><span class="quotelev2">&gt;&gt; 3) Compile you application without the -lopen-pal otion.  In practice
</span><br>
<span class="quotelev2">&gt;&gt; this means running &quot;mpicc --show&quot; and cut-and pasting the underlying
</span><br>
<span class="quotelev2">&gt;&gt; compile line without the -lopen-pal into your application build
</span><br>
<span class="quotelev2">&gt;&gt; procedure.  I was able to do this for hello world but I can image  
</span><br>
<span class="quotelev2">&gt;&gt; it'll
</span><br>
<span class="quotelev2">&gt;&gt; be a real PITA for anything larger.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I tried this before, and for a very small test program this  
</span><br>
<span class="quotelev1">&gt; seems to
</span><br>
<span class="quotelev1">&gt; work. But as you said, this would a real pain to do..
</span><br>
<p><p>This won't work in practice; OMPI *needs* the open-pal library, and  
<br>
for shared library builds, it will pull it in by default anyway.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8046.php">George Bosilca: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>Previous message:</strong> <a href="8044.php">Reuben D. Budiardja: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>In reply to:</strong> <a href="8044.php">Reuben D. Budiardja: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8046.php">George Bosilca: "Re: [OMPI users] OpenMPI and Valgrind"</a>
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
