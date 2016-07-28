<?
$subject_val = "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 14 22:33:15 2016" -->
<!-- isoreceived="20160115033315" -->
<!-- sent="Thu, 14 Jan 2016 22:33:13 -0500" -->
<!-- isosent="20160115033313" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW" -->
<!-- id="CAMJJpkWTj4ikYX-q21qfkQou8YbwxzpyG0XhNKxq4OfwGh-Ccg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAGKz=uLEfHePCYNC8_3FvcoYeFQ-kYqyP570WOh0SK-zcZCrZA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-14 22:33:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28281.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28279.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Type_free and non-blocking operations"</a>
<li><strong>In reply to:</strong> <a href="28278.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28281.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28281.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jan 14, 2016 at 7:49 PM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 14, 2016 at 3:05 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 13, 2016, at 19:57 , Jim Edwards &lt;jedwards_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George and all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Back to OpenMPI, now the question is :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#128;&#156;Is OpenMPI going to be updated (and when) in order to support an
</span><br>
<span class="quotelev2">&gt;&gt; intuitive and user friendly feature, that is currently explicitly
</span><br>
<span class="quotelev2">&gt;&gt; prohibited by the MPI 3.1 standard, but that might be part of the MPI-4
</span><br>
<span class="quotelev2">&gt;&gt; standard and that we already know is not backward compatible (*) ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the MPI Forum agrees to amend the standard to allow this [currently
</span><br>
<span class="quotelev2">&gt;&gt; forbidden] behavior, we will be bound to adapt. Meanwhile, I would assume
</span><br>
<span class="quotelev2">&gt;&gt; that with regard to this particular question the MPICH implementation is
</span><br>
<span class="quotelev2">&gt;&gt; far too user-friendly and only loosely standard compliant.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MPI standard does not require implementations to catch ANY invalid
</span><br>
<span class="quotelev1">&gt; usage errors, so MPICH compliance is in no way affected by allowing invalid
</span><br>
<span class="quotelev1">&gt; usage.  The error in question is completely innocuous and there is no value
</span><br>
<span class="quotelev1">&gt; whatsoever to crashing a user application over it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>That certainly a way of seeing it. In which case set your mpi_param_check
<br>
to zero and let's close this discussion.
<br>
<p><p><span class="quotelev1">&gt; If you want to hop on the standard-compliance soapbox, let's start with
</span><br>
<span class="quotelev1">&gt; MPI-2 features like MPI_THREAD_MULTIPLE and RMA ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (*) fwiw, mpich already &#226;&#128;&#156;implements&quot; this, so backward incompatibility
</span><br>
<span class="quotelev2">&gt;&gt; would only affect tools currently working with OpenMPI but not with mpich.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i am a pragmatic guy, so i'd rather go for it, but here is what i am
</span><br>
<span class="quotelev2">&gt;&gt; gonna do :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; unless George vetoes that, i will add this topic to the weekly call
</span><br>
<span class="quotelev2">&gt;&gt; agenda, and wait for the community to make a decision
</span><br>
<span class="quotelev2">&gt;&gt; (e.g. go / no go, and milestone if needed 1.10 series ? 2.0 ? 2.1 ?
</span><br>
<span class="quotelev2">&gt;&gt; master only ?)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A pragmatic user will certainly appreciate in all circumstances to type
</span><br>
<span class="quotelev2">&gt;&gt; less characters (MPI_BYTE) instead of MPI_DATATYPE_NULL when used in
</span><br>
<span class="quotelev2">&gt;&gt; combination with a statically known count of 0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; What is the type of NULL and nullptr?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Both because of static analysis and inferring MPI datatypes from pointer
<br>
<span class="quotelev1">&gt; types (as done in C++ codes), I'm not sure it's a good idea to say that
</span><br>
<span class="quotelev1">&gt; null buffers have a well-defined MPI type.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I fail to see the missing link between null pointers and MPI datatype,
<br>
especially in the case you promote where you call an MPI function with a
<br>
count of zero. Moreover, as mentioned by Bill on the MPI Forum mailing
<br>
list, NULL is a valid buffer for MPI functions, even when the count is not
<br>
ZERO when paired with the right datatype.
<br>
<p>My point in that this is a matter for the MPI Forum, all discussion outside
<br>
that context are bound to be lost.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28277.php">http://www.open-mpi.org/community/lists/users/2016/01/28277.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28278.php">http://www.open-mpi.org/community/lists/users/2016/01/28278.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28280/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28281.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28279.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Type_free and non-blocking operations"</a>
<li><strong>In reply to:</strong> <a href="28278.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28281.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28281.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
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
