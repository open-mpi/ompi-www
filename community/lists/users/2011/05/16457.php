<?
$subject_val = "Re: [OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 08:28:35 2011" -->
<!-- isoreceived="20110506122835" -->
<!-- sent="Fri, 6 May 2011 17:58:30 +0530" -->
<!-- isosent="20110506122830" -->
<!-- name="hi" -->
<!-- email="hiralsmaillist_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD" -->
<!-- id="BANLkTinb2dFWhOzc-1o7ZFCL=Pcv-Hj1iA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201105041757.45986.cap_at_nsc.liu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD<br>
<strong>From:</strong> hi (<em>hiralsmaillist_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-06 08:28:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16458.php">Tim Hutt: "[OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>Previous message:</strong> <a href="16456.php">Jed Brown: "Re: [OMPI users] SpMV Benchmarks"</a>
<li><strong>In reply to:</strong> <a href="16443.php">Peter Kjellstr&#246;m: "Re: [OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Peter,
<br>
<p>Thanks that helped a lot.
<br>
BTW: please let me know if you any comment on &quot;Windows:
<br>
MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION&quot; thread.
<br>
<p>Thank you.
<br>
-Hiral
<br>
<p>2011/5/4 Peter Kjellstr&#246;m &lt;cap_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; On Wednesday, May 04, 2011 04:04:37 PM hi wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Greetings !!!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am observing following error messages when executing attached test
</span><br>
<span class="quotelev2">&gt;&gt; program...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; C:\test&gt;mpirun mar_f.exe
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; [vbgyor:9920] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev2">&gt;&gt; [vbgyor:9920] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [vbgyor:9920] *** MPI_ERR_OP: invalid reduce operation
</span><br>
<span class="quotelev2">&gt;&gt; [vbgyor:9920] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not a fortran programmer but it seems to me that placing the MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; call in a subroutine like that broke the meaning of MPI_SUM and MPI_REAL in
</span><br>
<span class="quotelev1">&gt; that scope. Adding:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; after SUBROUTINE PAR_BLAS2(m, n, a, b, c, comm) helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /Peter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16458.php">Tim Hutt: "[OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>Previous message:</strong> <a href="16456.php">Jed Brown: "Re: [OMPI users] SpMV Benchmarks"</a>
<li><strong>In reply to:</strong> <a href="16443.php">Peter Kjellstr&#246;m: "Re: [OMPI users] Error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
<!-- nextthread="start" -->
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
