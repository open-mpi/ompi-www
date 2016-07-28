<?
$subject_val = "Re: [OMPI devel] Memory corruption with mpool";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 08:02:55 2009" -->
<!-- isoreceived="20091102130255" -->
<!-- sent="Mon, 2 Nov 2009 23:32:10 +1030" -->
<!-- isosent="20091102130210" -->
<!-- name="Christopher Yeoh" -->
<!-- email="cyeoh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Memory corruption with mpool" -->
<!-- id="20091102233210.5f8b3861_at_lilo" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AEECEF3.4090800_at_uni-hd.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Memory corruption with mpool<br>
<strong>From:</strong> Christopher Yeoh (<em>cyeoh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-02 08:02:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7067.php">Mondrian Nuessle: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>Previous message:</strong> <a href="7065.php">Mondrian Nuessle: "[OMPI devel] Memory corruption with mpool"</a>
<li><strong>In reply to:</strong> <a href="7065.php">Mondrian Nuessle: "[OMPI devel] Memory corruption with mpool"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7067.php">Mondrian Nuessle: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>Reply:</strong> <a href="7067.php">Mondrian Nuessle: "Re: [OMPI devel] Memory corruption with mpool"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Mondrian,
<br>
<p>On Mon, 02 Nov 2009 13:22:11 +0100
<br>
Mondrian Nuessle &lt;nuessle_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I turn on mpi_leave_pinned (and thus the registration cache is
</span><br>
<span class="quotelev1">&gt; actually used), I see occasional memory corruption issues for example
</span><br>
<span class="quotelev1">&gt; when I call MPI_Allreduce often.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Debugging with valgrind did not lead to any clues, since OMPI refuses
</span><br>
<span class="quotelev1">&gt; to run in that case. If I turn off mpi_leave_pinned, everything seems
</span><br>
<span class="quotelev1">&gt; to be fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tested on version 1.3.3 and 1.3.4rc1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have any suggestions how to investigate this situation?
</span><br>
<p>Have you got OMPI_ENABLE_DEBUG defined? The symptoms of what you are
<br>
seeing sound like what might happen if debug is off and you trigger an
<br>
issue I posted about here related to thread safety of mpool.
<br>
<p><a href="http://www.open-mpi.org/community/lists/devel/2009/10/7042.php">http://www.open-mpi.org/community/lists/devel/2009/10/7042.php</a>
<br>
<p>If OMPI_ENABLE_DEBUG is defined it will abort if pthread_mutex_lock
<br>
returns EDEADLK (see opal_mutex_lock), but if not, the code proceeds
<br>
without a lock which  could cause memory corruption.
<br>
<p>Chris
<br>
<pre>
-- 
cyeoh_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7067.php">Mondrian Nuessle: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>Previous message:</strong> <a href="7065.php">Mondrian Nuessle: "[OMPI devel] Memory corruption with mpool"</a>
<li><strong>In reply to:</strong> <a href="7065.php">Mondrian Nuessle: "[OMPI devel] Memory corruption with mpool"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7067.php">Mondrian Nuessle: "Re: [OMPI devel] Memory corruption with mpool"</a>
<li><strong>Reply:</strong> <a href="7067.php">Mondrian Nuessle: "Re: [OMPI devel] Memory corruption with mpool"</a>
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
