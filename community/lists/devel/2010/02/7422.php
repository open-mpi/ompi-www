<?
$subject_val = "Re: [OMPI devel] failurewithzero-lengthReduce()andbothsbuf=rbuf=NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 15:01:55 2010" -->
<!-- isoreceived="20100211200155" -->
<!-- sent="Thu, 11 Feb 2010 15:01:49 -0500" -->
<!-- isosent="20100211200149" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] failurewithzero-lengthReduce()andbothsbuf=rbuf=NULL" -->
<!-- id="AE087CFC-D9AC-498A-BC17-260BB9EC27B6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="e7ba66e41002111114m1919d667yd84863d870986313_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] failurewithzero-lengthReduce()andbothsbuf=rbuf=NULL<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 15:01:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7423.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<li><strong>Previous message:</strong> <a href="7421.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_errhandler() and MPI_Win_set_errhandler()do not fail when passing MPI_WIN_NULL"</a>
<li><strong>In reply to:</strong> <a href="7420.php">Lisandro Dalcin: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7408.php">Eugene Loh: "Re: [OMPI devel] failure	withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 11, 2010, at 2:14 PM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; But you did not answer my previous question... What's the rationale
</span><br>
<span class="quotelev1">&gt; for requiring sendbuf!=recvbuf when count=0? I would argue you want a
</span><br>
<span class="quotelev1">&gt; free ticket :-) to put restrictions on user code (without an actual
</span><br>
<span class="quotelev1">&gt; rationale) in order to simplify your implementation.
</span><br>
<p>I don't understand your assertion.  The MPI spec clearly says that sendbuf must != recvbuf.  If you want the sendbuf to be the same as the recvbuf, MPI supports MPI_IN_PLACE for several operations.
<br>
<p>I realize that's not what you're trying to do, but these are the semantics that MPI has defined.
<br>
<p><span class="quotelev2">&gt; &gt; While zero-length arrays/sequence/containers do appears in real code, they are not equal to NULL. If they are NULL, that means they do not contain any useful data, and they don't need to be source or target of any kind of [collective or point-to-point] communications.
</span><br>
<p>And even stronger than this: remember that NULL *is* a valid pointer for MPI when it is paired with an appropriate datatype.  As I said in an earlier mail, NULL is therefore not a special case buffer for sendbuf or recvbuf.
<br>
<p>To be absolutely clear: none of OMPI's MPI API calls have checks of the form:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == choice_buffer)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return error;
<br>
<p><span class="quotelev1">&gt; Yes, I know. Moreover, I agree with you. NULL should be reserved for
</span><br>
<span class="quotelev1">&gt; invalid pointers, not for zero-length array...
</span><br>
<p>But it is not.  MPI's datatype mechanism is so general that NULL is valid.
<br>
<p>So yes, passing MPI_REDUCE(NULL, NULL, ...) violates the sendbuf!=recvbuf rule (partially because there is only one datatype in MPI_REDUCE).  If a language may convert a buffer representation to NULL for you behind the scenes, then it's up to the language binding to catch/correct that.
<br>
<p>...at least by the wording in today's MPI spec.  That being said, your python example of buffers a and b unknowingly being transformed to NULL behind the scenes seems like a good thing that MPI should support better.  It's exactly these kinds of issues that would be helpful to know / discuss / propose improvements for MPI-3.
<br>
<p>Could we convince you to come to a Forum meeting?  :-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7423.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<li><strong>Previous message:</strong> <a href="7421.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_errhandler() and MPI_Win_set_errhandler()do not fail when passing MPI_WIN_NULL"</a>
<li><strong>In reply to:</strong> <a href="7420.php">Lisandro Dalcin: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7408.php">Eugene Loh: "Re: [OMPI devel] failure	withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
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
