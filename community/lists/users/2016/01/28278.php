<?
$subject_val = "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 14 19:49:21 2016" -->
<!-- isoreceived="20160115004921" -->
<!-- sent="Thu, 14 Jan 2016 16:49:01 -0800" -->
<!-- isosent="20160115004901" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW" -->
<!-- id="CAGKz=uLEfHePCYNC8_3FvcoYeFQ-kYqyP570WOh0SK-zcZCrZA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="22348831-F59E-4A6B-BDE7-170E0F8F7787_at_icl.utk.edu" -->
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
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-14 19:49:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28279.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Type_free and non-blocking operations"</a>
<li><strong>Previous message:</strong> <a href="28277.php">George Bosilca: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>In reply to:</strong> <a href="28277.php">George Bosilca: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28280.php">George Bosilca: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28280.php">George Bosilca: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jan 14, 2016 at 3:05 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 13, 2016, at 19:57 , Jim Edwards &lt;jedwards_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George and all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Back to OpenMPI, now the question is :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#156;Is OpenMPI going to be updated (and when) in order to support an
</span><br>
<span class="quotelev1">&gt; intuitive and user friendly feature, that is currently explicitly
</span><br>
<span class="quotelev1">&gt; prohibited by the MPI 3.1 standard, but that might be part of the MPI-4
</span><br>
<span class="quotelev1">&gt; standard and that we already know is not backward compatible (*) ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the MPI Forum agrees to amend the standard to allow this [currently
</span><br>
<span class="quotelev1">&gt; forbidden] behavior, we will be bound to adapt. Meanwhile, I would assume
</span><br>
<span class="quotelev1">&gt; that with regard to this particular question the MPICH implementation is
</span><br>
<span class="quotelev1">&gt; far too user-friendly and only loosely standard compliant.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>The MPI standard does not require implementations to catch ANY invalid
<br>
usage errors, so MPICH compliance is in no way affected by allowing invalid
<br>
usage.  The error in question is completely innocuous and there is no value
<br>
whatsoever to crashing a user application over it.
<br>
<p>If you want to hop on the standard-compliance soapbox, let's start with
<br>
MPI-2 features like MPI_THREAD_MULTIPLE and RMA ;-)
<br>
<p><p><span class="quotelev1">&gt; (*) fwiw, mpich already &#226;&#128;&#156;implements&quot; this, so backward incompatibility
</span><br>
<span class="quotelev1">&gt; would only affect tools currently working with OpenMPI but not with mpich.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i am a pragmatic guy, so i'd rather go for it, but here is what i am gonna
</span><br>
<span class="quotelev1">&gt; do :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; unless George vetoes that, i will add this topic to the weekly call
</span><br>
<span class="quotelev1">&gt; agenda, and wait for the community to make a decision
</span><br>
<span class="quotelev1">&gt; (e.g. go / no go, and milestone if needed 1.10 series ? 2.0 ? 2.1 ? master
</span><br>
<span class="quotelev1">&gt; only ?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A pragmatic user will certainly appreciate in all circumstances to type
</span><br>
<span class="quotelev1">&gt; less characters (MPI_BYTE) instead of MPI_DATATYPE_NULL when used in
</span><br>
<span class="quotelev1">&gt; combination with a statically known count of 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
What is the type of NULL and nullptr?  Both because of static analysis and
<br>
inferring MPI datatypes from pointer types (as done in C++ codes), I'm not
<br>
sure it's a good idea to say that null buffers have a well-defined MPI
<br>
type.
<br>
<p>Jeff
<br>
<p><p><span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28277.php">http://www.open-mpi.org/community/lists/users/2016/01/28277.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28278/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28279.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Type_free and non-blocking operations"</a>
<li><strong>Previous message:</strong> <a href="28277.php">George Bosilca: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>In reply to:</strong> <a href="28277.php">George Bosilca: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28280.php">George Bosilca: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28280.php">George Bosilca: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
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
