<?
$subject_val = "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 12 21:06:57 2016" -->
<!-- isoreceived="20160113020657" -->
<!-- sent="Tue, 12 Jan 2016 21:06:56 -0500" -->
<!-- isosent="20160113020656" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW" -->
<!-- id="CAMJJpkUA7J3vWtqe+KFynGPgtKmiRSAZfOKRaSdZ_StfuWH_sw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAPuR+ZgZ=7p7TdtMqEzwwz0gQPDzARKoYezdw4MJtMP3kUm3xg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-01-12 21:06:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28256.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28254.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>In reply to:</strong> <a href="28254.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28256.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28256.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28259.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As JH mentioned the examples are not normative. The type MPI_DATATYPE_NULL
<br>
is not part of the MPI predefined datatypes, and as such is not expected to
<br>
be a commited datatype, thus improper for communications (even when the
<br>
count is 0).
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Tue, Jan 12, 2016 at 8:25 PM, Jim Edwards &lt;jedwards_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; &#226;&#128;&#139;Hi Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that your conversation with Jeff pretty much covered it but
</span><br>
<span class="quotelev1">&gt; your understanding of my original problem is correct.
</span><br>
<span class="quotelev1">&gt; Thanks for the prompt response and the PR.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jan 12, 2016 at 5:59 PM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Consider MPI_Get_accumulate with op=MPI_NO_OP, which is used to achieve
</span><br>
<span class="quotelev2">&gt;&gt; atomic Get.  Obviously, one does not want to allocate and describe a source
</span><br>
<span class="quotelev2">&gt;&gt; buffer that will not be touched by this.  This is a case like MPI_Alltoallw
</span><br>
<span class="quotelev2">&gt;&gt; where (NULL,0,MPI_DATATYPE_NULL) needs to work at participating processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jan 12, 2016 at 4:46 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i could not find anything in the standard that says this is an invalid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usage ... so i can only agree this is a bug.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fwiw, example 4.23 is working fine with OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but that is a different case : with MPI_Gather and friends, recv stuff
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is irrelevant on non root task.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the case of MPI_Alltoallw and friends, no parameter is ignored.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fortunatly, the fix is pretty trivial, so i will make a PR from now
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Jan 13, 2016 at 9:37 AM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Example 4.23 of MPI 3.1 (it is hardly a new example, but may have a
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; different number in older versions) demonstrates the use of
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; (buffer=NULL,count=0,type=MPI_DATATYPE_NULL).  While examples in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; standard are not normative text, this is certainly a valid use of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI.  I
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; can't find a citation where it says explicitly that this is correct,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but it
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; follows logically from other text.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; The MPICH macro MPIR_ERRTEST_USERBUFFER that is used through the code
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; test for valid user buffers begins with &quot;if (count &gt; 0...&quot; and thus
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; concern itself with the type or buffer pointer when count=0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Furthermore,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; this macro is redundantly protected with a count&gt;0 check when used in
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_Alltoallw (and other collectives).
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Best,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Jeff
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On Tue, Jan 12, 2016 at 4:18 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Hi Jim,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; can you please confirm my understanding is correct :
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; - OpenMPI does *not* accept MPI_DATATYPE_NULL as an input of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Alltoallw
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; - mpich does accept MPI_DATATYPE_NULL as an input of MPI_Alltoallw
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *if*
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; the corresponding count *is* zero
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; - mpich does *not* accept MPI_DATATYPE_NULL as an input of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Alltoallw
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; *if* the corresponding count is *not* zero
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; So you are considering as a bug the fact OpenMPI does not accept
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; MPI_DATATYPE_NULL *with* a zero count.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; am i correct ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; On 1/13/2016 8:27 AM, Jim Edwards wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; I am using OpenMPI-1.8.3 built with gcc 4.8.3
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; and I am using an MPI_Alltoallw call to perform
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; an all to some (or some to all) communication.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; In the case in which my task is not sending (or receiving) any data I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; datatype for that send or recv buffer to MPI_DATATYPE_NULL - this
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; works fine with other mpi libraries but fails in openmpi.   If I set
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; the datatype to something else say MPI_CHAR - it works fine.   I think
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; that this is a bug in open-mpi - would you agree?
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Jim Edwards
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; CESM Software Engineer
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; National Center for Atmospheric Research
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Boulder, CO
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28249.php">http://www.open-mpi.org/community/lists/users/2016/01/28249.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28250.php">http://www.open-mpi.org/community/lists/users/2016/01/28250.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Jeff Hammond
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28251.php">http://www.open-mpi.org/community/lists/users/2016/01/28251.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28252.php">http://www.open-mpi.org/community/lists/users/2016/01/28252.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Hammond
</span><br>
<span class="quotelev2">&gt;&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28253.php">http://www.open-mpi.org/community/lists/users/2016/01/28253.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28254.php">http://www.open-mpi.org/community/lists/users/2016/01/28254.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28255/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28256.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28254.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>In reply to:</strong> <a href="28254.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28256.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28256.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28259.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
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
