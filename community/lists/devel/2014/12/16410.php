<?
$subject_val = "[OMPI devel] RFC: update opal lifo class and add fifo class";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  2 17:41:47 2014" -->
<!-- isoreceived="20141202224147" -->
<!-- sent="Tue, 2 Dec 2014 15:41:46 -0700" -->
<!-- isosent="20141202224146" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: update opal lifo class and add fifo class" -->
<!-- id="20141202224146.GJ14457_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: update opal lifo class and add fifo class<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-02 17:41:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16411.php">George Bosilca: "Re: [OMPI devel] RFC: update opal lifo class and add fifo class"</a>
<li><strong>Previous message:</strong> <a href="16409.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16411.php">George Bosilca: "Re: [OMPI devel] RFC: update opal lifo class and add fifo class"</a>
<li><strong>Reply:</strong> <a href="16411.php">George Bosilca: "Re: [OMPI devel] RFC: update opal lifo class and add fifo class"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Update the interface to the atomic lifo to include non-atomic and
<br>
opal_using_threads conditioned atomic versions.
<br>
<p>Why: We currently only have one type of lifo in the master branch:
<br>
atomic. This has a negative impact on the performance of Open MPI when
<br>
not using threads. To fix this issue I want to add two new flavors of
<br>
lifo push and pop:
<br>
<p>&nbsp;- opal_lifo_push_st/opal_lifo_pop_st: explicit single-threaded. These
<br>
&nbsp;&nbsp;&nbsp;versions can be used when it is guaranteed that no other thread will
<br>
&nbsp;&nbsp;&nbsp;touch the fifo.
<br>
<p>&nbsp;- opal_lifo_push/opal_lifo_pop: use atomics if opal_using_threads is
<br>
&nbsp;&nbsp;&nbsp;set otherwise use the single-threaded versions.
<br>
<p><p>The existing functions: opal_atomic_lifo_push and opal_atomic_lifo_pop
<br>
will be renamed to opal_lifo_push_atomic and opal_lifo_pop_atomic
<br>
respectively. I have made some improvements to the atomic implementation
<br>
and included implementations of push/pop that use the 128-bit
<br>
compare-and-swap available on most modern x86_64 processors.
<br>
<p>Existing code (ompi_free_list_t) will use the conditioned version. This
<br>
will give good out of the box performance with single threaded
<br>
benchmarks while still providing support for the MPI_THREAD_MULTIPLE
<br>
case.
<br>
<p>As part of this RFC I am pushing a fifo implementation and unit tests
<br>
for both the fifo and lifo classes. More info can be found in the commit
<br>
message:
<br>
<p><a href="https://github.com/hjelmn/ompi/commit/b57b4b2df841a2d309b528717b40d9bf23355a82">https://github.com/hjelmn/ompi/commit/b57b4b2df841a2d309b528717b40d9bf23355a82</a>
<br>
<p><p>When: Tuesday, Dec 9.
<br>
<p><p>The pull request can be found @ <a href="https://github.com/open-mpi/ompi/pull/300">https://github.com/open-mpi/ompi/pull/300</a>
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16410/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16411.php">George Bosilca: "Re: [OMPI devel] RFC: update opal lifo class and add fifo class"</a>
<li><strong>Previous message:</strong> <a href="16409.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RTLD_GLOBAL question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16411.php">George Bosilca: "Re: [OMPI devel] RFC: update opal lifo class and add fifo class"</a>
<li><strong>Reply:</strong> <a href="16411.php">George Bosilca: "Re: [OMPI devel] RFC: update opal lifo class and add fifo class"</a>
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
