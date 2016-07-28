<?
$subject_val = "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 12 19:37:35 2016" -->
<!-- isoreceived="20160113003735" -->
<!-- sent="Tue, 12 Jan 2016 16:37:15 -0800" -->
<!-- isosent="20160113003715" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW" -->
<!-- id="CAGKz=u+eGUNM4YJhejT=Ob1wQgvPgU1n-300n7A9qFYo8KW9WQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="569597DF.9090600_at_rist.or.jp" -->
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
<strong>Date:</strong> 2016-01-12 19:37:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28252.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28250.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>In reply to:</strong> <a href="28250.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28252.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28252.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Example 4.23 of MPI 3.1 (it is hardly a new example, but may have a
<br>
different number in older versions) demonstrates the use of
<br>
(buffer=NULL,count=0,type=MPI_DATATYPE_NULL).  While examples in the MPI
<br>
standard are not normative text, this is certainly a valid use of MPI.  I
<br>
can't find a citation where it says explicitly that this is correct, but it
<br>
follows logically from other text.
<br>
<p>The MPICH macro MPIR_ERRTEST_USERBUFFER that is used through the code to
<br>
test for valid user buffers begins with &quot;if (count &gt; 0...&quot; and thus does
<br>
concern itself with the type or buffer pointer when count=0.  Furthermore,
<br>
this macro is redundantly protected with a count&gt;0 check when used in
<br>
MPI_Alltoallw (and other collectives).
<br>
<p>Best,
<br>
<p>Jeff
<br>
<p>On Tue, Jan 12, 2016 at 4:18 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Jim,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you please confirm my understanding is correct :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - OpenMPI does *not* accept MPI_DATATYPE_NULL as an input of MPI_Alltoallw
</span><br>
<span class="quotelev1">&gt; - mpich does accept MPI_DATATYPE_NULL as an input of MPI_Alltoallw *if*
</span><br>
the corresponding count *is* zero
<br>
<span class="quotelev1">&gt; - mpich does *not* accept MPI_DATATYPE_NULL as an input of MPI_Alltoallw
</span><br>
*if* the corresponding count is *not* zero
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So you are considering as a bug the fact OpenMPI does not accept
</span><br>
MPI_DATATYPE_NULL *with* a zero count.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; am i correct ?
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
<span class="quotelev1">&gt; On 1/13/2016 8:27 AM, Jim Edwards wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI-1.8.3 built with gcc 4.8.3
</span><br>
<span class="quotelev1">&gt; and I am using an MPI_Alltoallw call to perform
</span><br>
<span class="quotelev1">&gt; an all to some (or some to all) communication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the case in which my task is not sending (or receiving) any data I set
</span><br>
the
<br>
<span class="quotelev1">&gt; datatype for that send or recv buffer to MPI_DATATYPE_NULL - this
</span><br>
<span class="quotelev1">&gt; works fine with other mpi libraries but fails in openmpi.   If I set
</span><br>
<span class="quotelev1">&gt; the datatype to something else say MPI_CHAR - it works fine.   I think
</span><br>
<span class="quotelev1">&gt; that this is a bug in open-mpi - would you agree?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jim Edwards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CESM Software Engineer
</span><br>
<span class="quotelev1">&gt; National Center for Atmospheric Research
</span><br>
<span class="quotelev1">&gt; Boulder, CO
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
<a href="http://www.open-mpi.org/community/lists/users/2016/01/28249.php">http://www.open-mpi.org/community/lists/users/2016/01/28249.php</a>
<br>
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
<a href="http://www.open-mpi.org/community/lists/users/2016/01/28250.php">http://www.open-mpi.org/community/lists/users/2016/01/28250.php</a>
<br>
<p><p><p><p><pre>
--
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28251/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28252.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28250.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>In reply to:</strong> <a href="28250.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28252.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28252.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
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
