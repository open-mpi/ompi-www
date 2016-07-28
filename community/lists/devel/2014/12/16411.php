<?
$subject_val = "Re: [OMPI devel] RFC: update opal lifo class and add fifo class";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  2 17:54:05 2014" -->
<!-- isoreceived="20141202225405" -->
<!-- sent="Tue, 2 Dec 2014 17:54:04 -0500" -->
<!-- isosent="20141202225404" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: update opal lifo class and add fifo class" -->
<!-- id="CAMJJpkUE2wtNdkqbJ4DwMfmNGpE0VbVvmrf+r6b_pdLPaC9M6w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20141202224146.GJ14457_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: update opal lifo class and add fifo class<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-02 17:54:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16412.php">Nathan Hjelm: "Re: [OMPI devel] RFC: update opal lifo class and add fifo class"</a>
<li><strong>Previous message:</strong> <a href="16410.php">Nathan Hjelm: "[OMPI devel] RFC: update opal lifo class and add fifo class"</a>
<li><strong>In reply to:</strong> <a href="16410.php">Nathan Hjelm: "[OMPI devel] RFC: update opal lifo class and add fifo class"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16412.php">Nathan Hjelm: "Re: [OMPI devel] RFC: update opal lifo class and add fifo class"</a>
<li><strong>Reply:</strong> <a href="16412.php">Nathan Hjelm: "Re: [OMPI devel] RFC: update opal lifo class and add fifo class"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The FIFO implementation doesn't look right to me. I don't have time to look
<br>
at it right now, but just looking at the push it will not correctly succeed
<br>
if two threads are pushing items in same time.
<br>
<p>A FIFO is a very sensitive algorithm, and should be treated accordingly.
<br>
Moreover, there is no immediate need for it, so I suggest you drop it from
<br>
this RFC.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>PS: There are some known FIFO implementations that work correctly, but they
<br>
all require a CAS2. <a href="http://www.grame.fr/ressources/publications/LockFree.pdf">http://www.grame.fr/ressources/publications/LockFree.pdf</a>
<br>
<p><p>On Tue, Dec 2, 2014 at 5:41 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What: Update the interface to the atomic lifo to include non-atomic and
</span><br>
<span class="quotelev1">&gt; opal_using_threads conditioned atomic versions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why: We currently only have one type of lifo in the master branch:
</span><br>
<span class="quotelev1">&gt; atomic. This has a negative impact on the performance of Open MPI when
</span><br>
<span class="quotelev1">&gt; not using threads. To fix this issue I want to add two new flavors of
</span><br>
<span class="quotelev1">&gt; lifo push and pop:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - opal_lifo_push_st/opal_lifo_pop_st: explicit single-threaded. These
</span><br>
<span class="quotelev1">&gt;    versions can be used when it is guaranteed that no other thread will
</span><br>
<span class="quotelev1">&gt;    touch the fifo.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - opal_lifo_push/opal_lifo_pop: use atomics if opal_using_threads is
</span><br>
<span class="quotelev1">&gt;    set otherwise use the single-threaded versions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The existing functions: opal_atomic_lifo_push and opal_atomic_lifo_pop
</span><br>
<span class="quotelev1">&gt; will be renamed to opal_lifo_push_atomic and opal_lifo_pop_atomic
</span><br>
<span class="quotelev1">&gt; respectively. I have made some improvements to the atomic implementation
</span><br>
<span class="quotelev1">&gt; and included implementations of push/pop that use the 128-bit
</span><br>
<span class="quotelev1">&gt; compare-and-swap available on most modern x86_64 processors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Existing code (ompi_free_list_t) will use the conditioned version. This
</span><br>
<span class="quotelev1">&gt; will give good out of the box performance with single threaded
</span><br>
<span class="quotelev1">&gt; benchmarks while still providing support for the MPI_THREAD_MULTIPLE
</span><br>
<span class="quotelev1">&gt; case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As part of this RFC I am pushing a fifo implementation and unit tests
</span><br>
<span class="quotelev1">&gt; for both the fifo and lifo classes. More info can be found in the commit
</span><br>
<span class="quotelev1">&gt; message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/hjelmn/ompi/commit/b57b4b2df841a2d309b528717b40d9bf23355a82">https://github.com/hjelmn/ompi/commit/b57b4b2df841a2d309b528717b40d9bf23355a82</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When: Tuesday, Dec 9.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The pull request can be found @ <a href="https://github.com/open-mpi/ompi/pull/300">https://github.com/open-mpi/ompi/pull/300</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16410.php">http://www.open-mpi.org/community/lists/devel/2014/12/16410.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16411/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16412.php">Nathan Hjelm: "Re: [OMPI devel] RFC: update opal lifo class and add fifo class"</a>
<li><strong>Previous message:</strong> <a href="16410.php">Nathan Hjelm: "[OMPI devel] RFC: update opal lifo class and add fifo class"</a>
<li><strong>In reply to:</strong> <a href="16410.php">Nathan Hjelm: "[OMPI devel] RFC: update opal lifo class and add fifo class"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16412.php">Nathan Hjelm: "Re: [OMPI devel] RFC: update opal lifo class and add fifo class"</a>
<li><strong>Reply:</strong> <a href="16412.php">Nathan Hjelm: "Re: [OMPI devel] RFC: update opal lifo class and add fifo class"</a>
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
