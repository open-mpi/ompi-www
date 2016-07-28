<?
$subject_val = "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 24 05:55:09 2010" -->
<!-- isoreceived="20100124105509" -->
<!-- sent="Sun, 24 Jan 2010 21:54:56 +1100" -->
<!-- isosent="20100124105456" -->
<!-- name="Chris Samuel" -->
<!-- email="chris_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)" -->
<!-- id="201001242155.02282.chris_at_csamuel.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4B48B505.5080704_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)<br>
<strong>From:</strong> Chris Samuel (<em>chris_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-24 05:54:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7351.php">Graham, Richard L.: "[OMPI devel] Snow leopard builds"</a>
<li><strong>Previous message:</strong> <a href="7349.php">Lenny Verkhovsky: "Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
<li><strong>In reply to:</strong> <a href="7300.php">Eugene Loh: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, 10 Jan 2010 03:55:33 am Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; The default (I think this means Linux, whether with gcc, gfortran, Sun f90,
</span><br>
<span class="quotelev1">&gt; etc.) is to use mmap to malloc large allocations.
</span><br>
<p>This was brought in by glibc version 2.3:
<br>
<p>&nbsp;<a href="http://en.wikipedia.org/wiki/Malloc#dlmalloc_.28the_glibc_allocator.29">http://en.wikipedia.org/wiki/Malloc#dlmalloc_.28the_glibc_allocator.29</a>
<br>
<p>It has the side effect of making the behaviour of malloc() in response to 
<br>
resource limits dependent on the size of the allocation being made. For 
<br>
example RLIMIT_DATA (maximum size of a processes data segment) will only be 
<br>
enforced for small allocations that don't trigger the use of mmap().
<br>
<p>Had great fun with that trying to track down why the mem property of Torque 
<br>
PBS jobs wasn't being enforced all the time.
<br>
<p>cheers,
<br>
Chris
<br>
<pre>
-- 
 Chris Samuel  :  <a href="http://www.csamuel.org/">http://www.csamuel.org/</a>  :  Melbourne, VIC
This email may come with a PGP signature as a file. Do not panic.
For more info see: <a href="http://en.wikipedia.org/wiki/OpenPGP">http://en.wikipedia.org/wiki/OpenPGP</a>

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7350/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7351.php">Graham, Richard L.: "[OMPI devel] Snow leopard builds"</a>
<li><strong>Previous message:</strong> <a href="7349.php">Lenny Verkhovsky: "Re: [OMPI devel] crash when using coll_tuned_use_dynamic_rules option with 1.4"</a>
<li><strong>In reply to:</strong> <a href="7300.php">Eugene Loh: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
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
