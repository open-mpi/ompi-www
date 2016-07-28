<?
$subject_val = "Re: [OMPI devel] BTL add procs errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 12:49:34 2010" -->
<!-- isoreceived="20100602164934" -->
<!-- sent="Wed, 02 Jun 2010 09:51:57 -0700" -->
<!-- isosent="20100602165157" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL add procs errors" -->
<!-- id="4C068C2D.1070705_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AC6EE900-FF59-4A13-8213-5AE33AD82180_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] BTL add procs errors<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 12:51:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8036.php">George Bosilca: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8034.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="8034.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8039.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8039.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; We did assume that at least the errors are symmetric, i.e. if A fails 
</span><br>
<span class="quotelev1">&gt; to connect to B then B will fail when trying to connect to A.
</span><br>
<p>I've not been following this thread closely, but thought I'd add a comment.
<br>
<p>It used to be that the sm BTL could fail asymmetrically.  A shared 
<br>
memory could be allocated and processes start to allocate resources 
<br>
within shared memory.  At some point, the shared area would be 
<br>
exhausted.  So, some processes were set up to communicate to others, but 
<br>
the others would not be able to communicate back via the same BTL.  I 
<br>
think this led to much brokenness.  (E.g., how would a process return a 
<br>
sm fragment to a sender?)
<br>
<p>At this point, my recollection of those issues is very fuzzy.
<br>
<p>In any case, I think those issues went away with the shared-memory work 
<br>
I did a while back.  The size of the area is now computed to be large 
<br>
enough that each process's initial allocation would succeed.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8036.php">George Bosilca: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8034.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="8034.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8039.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8039.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
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
