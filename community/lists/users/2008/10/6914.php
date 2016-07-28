<?
$subject_val = "Re: [OMPI users] Performance: MPICH2 vs OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 18:57:37 2008" -->
<!-- isoreceived="20081008225737" -->
<!-- sent="Wed, 08 Oct 2008 16:00:39 -0700" -->
<!-- isosent="20081008230039" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance: MPICH2 vs OpenMPI" -->
<!-- id="48ED3B97.60801_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48ED1FA9.9000109_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance: MPICH2 vs OpenMPI<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-08 19:00:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6915.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6913.php">Sudhakar Mahalingam: "Re: [OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5"</a>
<li><strong>In reply to:</strong> <a href="6909.php">Eugene Loh: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6911.php">George Bosilca: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Sangamesh B wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The job is run on 2 nodes - 8 cores.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI - 25 m 39 s.
</span><br>
<span class="quotelev2">&gt;&gt; MPICH2  -  15 m 53 s.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't understand MPICH very well, but it seemed as though some of 
</span><br>
<span class="quotelev1">&gt; the flags used in building MPICH are supposed to be added in 
</span><br>
<span class="quotelev1">&gt; automatically to the mpicc/etc compiler wrappers.
</span><br>
<p>Again, this may not apply to your case, but I found out some more 
<br>
details on my theory.
<br>
<p>If you build MPICH2 like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;% configure CFLAGS=-O2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;% make
<br>
<p>then when you use &quot;mpicc&quot; to build your application, you automatically 
<br>
get that optimization flag built in.
<br>
<p>What had confused me was that I tried confirming the theory by building 
<br>
MPICH2 like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;% configure --enable-fast
<br>
&nbsp;&nbsp;&nbsp;&nbsp;% make
<br>
<p>That does *NOT* up the mpicc optimization level (despite their 
<br>
documentation).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6915.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6913.php">Sudhakar Mahalingam: "Re: [OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5"</a>
<li><strong>In reply to:</strong> <a href="6909.php">Eugene Loh: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6911.php">George Bosilca: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
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
