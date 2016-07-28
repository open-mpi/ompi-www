<?
$subject_val = "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 12 19:46:30 2016" -->
<!-- isoreceived="20160113004630" -->
<!-- sent="Wed, 13 Jan 2016 09:46:29 +0900" -->
<!-- isosent="20160113004629" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW" -->
<!-- id="CAAkFZ5vo14KY_9v0X7N=UJ9A+w6krFuRPBOui26FYM67Z7gxkA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAGKz=u+eGUNM4YJhejT=Ob1wQgvPgU1n-300n7A9qFYo8KW9WQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-12 19:46:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28253.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28251.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>In reply to:</strong> <a href="28251.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28253.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28253.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff,
<br>
<p>i could not find anything in the standard that says this is an invalid
<br>
usage ... so i can only agree this is a bug.
<br>
<p>fwiw, example 4.23 is working fine with OpenMPI
<br>
but that is a different case : with MPI_Gather and friends, recv stuff
<br>
is irrelevant on non root task.
<br>
in the case of MPI_Alltoallw and friends, no parameter is ignored.
<br>
<p>fortunatly, the fix is pretty trivial, so i will make a PR from now
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On Wed, Jan 13, 2016 at 9:37 AM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Example 4.23 of MPI 3.1 (it is hardly a new example, but may have a
</span><br>
<span class="quotelev1">&gt; different number in older versions) demonstrates the use of
</span><br>
<span class="quotelev1">&gt; (buffer=NULL,count=0,type=MPI_DATATYPE_NULL).  While examples in the MPI
</span><br>
<span class="quotelev1">&gt; standard are not normative text, this is certainly a valid use of MPI.  I
</span><br>
<span class="quotelev1">&gt; can't find a citation where it says explicitly that this is correct, but it
</span><br>
<span class="quotelev1">&gt; follows logically from other text.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MPICH macro MPIR_ERRTEST_USERBUFFER that is used through the code to
</span><br>
<span class="quotelev1">&gt; test for valid user buffers begins with &quot;if (count &gt; 0...&quot; and thus does
</span><br>
<span class="quotelev1">&gt; concern itself with the type or buffer pointer when count=0.  Furthermore,
</span><br>
<span class="quotelev1">&gt; this macro is redundantly protected with a count&gt;0 check when used in
</span><br>
<span class="quotelev1">&gt; MPI_Alltoallw (and other collectives).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jan 12, 2016 at 4:18 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jim,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; can you please confirm my understanding is correct :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - OpenMPI does *not* accept MPI_DATATYPE_NULL as an input of MPI_Alltoallw
</span><br>
<span class="quotelev2">&gt;&gt; - mpich does accept MPI_DATATYPE_NULL as an input of MPI_Alltoallw *if*
</span><br>
<span class="quotelev2">&gt;&gt; the corresponding count *is* zero
</span><br>
<span class="quotelev2">&gt;&gt; - mpich does *not* accept MPI_DATATYPE_NULL as an input of MPI_Alltoallw
</span><br>
<span class="quotelev2">&gt;&gt; *if* the corresponding count is *not* zero
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So you are considering as a bug the fact OpenMPI does not accept
</span><br>
<span class="quotelev2">&gt;&gt; MPI_DATATYPE_NULL *with* a zero count.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; am i correct ?
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
<span class="quotelev2">&gt;&gt; On 1/13/2016 8:27 AM, Jim Edwards wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using OpenMPI-1.8.3 built with gcc 4.8.3
</span><br>
<span class="quotelev2">&gt;&gt; and I am using an MPI_Alltoallw call to perform
</span><br>
<span class="quotelev2">&gt;&gt; an all to some (or some to all) communication.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the case in which my task is not sending (or receiving) any data I set
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; datatype for that send or recv buffer to MPI_DATATYPE_NULL - this
</span><br>
<span class="quotelev2">&gt;&gt; works fine with other mpi libraries but fails in openmpi.   If I set
</span><br>
<span class="quotelev2">&gt;&gt; the datatype to something else say MPI_CHAR - it works fine.   I think
</span><br>
<span class="quotelev2">&gt;&gt; that this is a bug in open-mpi - would you agree?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jim Edwards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CESM Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; National Center for Atmospheric Research
</span><br>
<span class="quotelev2">&gt;&gt; Boulder, CO
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28249.php">http://www.open-mpi.org/community/lists/users/2016/01/28249.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28250.php">http://www.open-mpi.org/community/lists/users/2016/01/28250.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28251.php">http://www.open-mpi.org/community/lists/users/2016/01/28251.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28253.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28251.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>In reply to:</strong> <a href="28251.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28253.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28253.php">Jeff Hammond: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
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
