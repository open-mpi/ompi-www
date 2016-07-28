<?
$subject_val = "Re: [OMPI users] prob in running two mpi merged program";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 09:04:42 2015" -->
<!-- isoreceived="20150203140442" -->
<!-- sent="Tue, 3 Feb 2015 06:04:40 -0800" -->
<!-- isosent="20150203140440" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] prob in running two mpi merged program" -->
<!-- id="CAMD57oc9H+PCQ197N5+rbeweJyQY1v3hFpYCmsUWqE+hpkSnOw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAFQZe_koKC0v4nMYM1XDuxqc=P3dwBG_P8EVt_4sxB6vyZ3U-Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] prob in running two mpi merged program<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-03 09:04:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26266.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
<li><strong>Previous message:</strong> <a href="26264.php">Muhammad Ashfaqur Rahman: "[OMPI users] prob in running two mpi merged program"</a>
<li><strong>In reply to:</strong> <a href="26264.php">Muhammad Ashfaqur Rahman: "[OMPI users] prob in running two mpi merged program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26266.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
<li><strong>Reply:</strong> <a href="26266.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid I don't quite understand what you are saying, so let's see if I
<br>
can clarify. You have two fortran MPI programs. You start one using
<br>
&quot;mpiexec&quot;. You then start the other one as a singleton - i.e., you just run
<br>
&quot;myapp&quot; without using mpiexec. The two apps are attempting to execute an
<br>
MPI_Connect/accept so they can &quot;join&quot;.
<br>
<p>Is that correct? You mention MPICH in your statement about one of the procs
<br>
- are you using MPICH or Open MPI? If the latter, which version are you
<br>
using?
<br>
<p>Ralph
<br>
<p><p>On Mon, Feb 2, 2015 at 11:35 PM, Muhammad Ashfaqur Rahman &lt;
<br>
ashfaq226_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt; Take my greetings. I am new in mpi usage. I have problems in parallel run,
</span><br>
<span class="quotelev1">&gt; when two fortran mpi programs are merged to one executable. If these two
</span><br>
<span class="quotelev1">&gt; are separate, then they are running parallel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One program has used spmd and another one  has used mpich header directly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other issue is that while trying to run the above mentioned merged program
</span><br>
<span class="quotelev1">&gt; in mpi, it's first started with separate parallel instances of same step
</span><br>
<span class="quotelev1">&gt; and then after some steps it becomes serial.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please help me in this regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashfaq
</span><br>
<span class="quotelev1">&gt; Ph.D Student
</span><br>
<span class="quotelev1">&gt; Dept. of Meteorology
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26264.php">http://www.open-mpi.org/community/lists/users/2015/02/26264.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26265/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26266.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
<li><strong>Previous message:</strong> <a href="26264.php">Muhammad Ashfaqur Rahman: "[OMPI users] prob in running two mpi merged program"</a>
<li><strong>In reply to:</strong> <a href="26264.php">Muhammad Ashfaqur Rahman: "[OMPI users] prob in running two mpi merged program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26266.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
<li><strong>Reply:</strong> <a href="26266.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
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
