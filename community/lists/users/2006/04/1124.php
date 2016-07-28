<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 24 07:59:39 2006" -->
<!-- isoreceived="20060424115939" -->
<!-- sent="Mon, 24 Apr 2006 07:59:33 -0400 (EDT)" -->
<!-- isosent="20060424115933" -->
<!-- name="Aniruddha Shet" -->
<!-- email="shet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] VAPI error with mpi_leave_pinned setting" -->
<!-- id="Pine.GSO.4.40.0604240751060.12717-100000_at_kappa.cse.ohio-state.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="41654.128.165.0.81.1145868497.squirrel_at_webmail.lanl.gov" -->
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
<strong>From:</strong> Aniruddha Shet (<em>shet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-24 07:59:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1125.php">sdamjad: "[OMPI users] config error"</a>
<li><strong>Previous message:</strong> <a href="1123.php">Galen Mark Shipman: "Re: [OMPI users] VAPI error with mpi_leave_pinned setting"</a>
<li><strong>In reply to:</strong> <a href="1123.php">Galen Mark Shipman: "Re: [OMPI users] VAPI error with mpi_leave_pinned setting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1136.php">Aniruddha Shet: "Re: [OMPI users] VAPI error with mpi_leave_pinned setting"</a>
<li><strong>Reply:</strong> <a href="1136.php">Aniruddha Shet: "Re: [OMPI users] VAPI error with mpi_leave_pinned setting"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 24 Apr 2006, Galen Mark Shipman wrote:
<br>
<p>Hi Galen,
<br>
<p>I face this problem with releases 1.0.1 and 1.0.2. It probably isn't an
<br>
issue with Open MPI as there have been instances earlier where setting
<br>
mpi_leave_pinned to 1 didn't throw up errors. I suspect it is an issue
<br>
with the compute nodes but cannot confirm for sure. I am also trying to
<br>
resolve this with the system administrator.
<br>
<p>Thanks,
<br>
Aniruddha
<br>
<p><p><span class="quotelev1">&gt; Hi Aniruddha,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you using the trunk, or one of the release tar files (if so which one).
</span><br>
<span class="quotelev1">&gt; I will try to reproduce this as time permits but I am out of town so
</span><br>
<span class="quotelev1">&gt; please expect some delay.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Galen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I keep getting a vapi error when running any NAS benchmark on Infiniband
</span><br>
<span class="quotelev2">&gt; &gt; with mpi_leave_pinned option set to 1. This problem does not occur with
</span><br>
<span class="quotelev2">&gt; &gt; mpi_leave_pinned set to 0. Please find attached the error trace.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Aniruddha
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Aniruddha Shet | Project webpage:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://forge-fre.ornl.gov/molar/index.html">http://forge-fre.ornl.gov/molar/index.html</a>
</span><br>
<span class="quotelev2">&gt; &gt; Graduate Research Associate | Project webpage: www.cs.unm.edu/~fastos
</span><br>
<span class="quotelev2">&gt; &gt; Dept. of Comp. Sci. &amp; Engg | Personal webpage:
</span><br>
<span class="quotelev2">&gt; &gt; www.cse.ohio-state.edu/~shet
</span><br>
<span class="quotelev2">&gt; &gt; The Ohio State University | Office: DL 474
</span><br>
<span class="quotelev2">&gt; &gt; 2015 Neil Avenue | Phone: +1 (614) 292 7036
</span><br>
<span class="quotelev2">&gt; &gt; Columbus OH 43210-1277 | Cell: +1 (614) 446 1630
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
-----------------------------------------------------------------------------------------
Aniruddha G. Shet           | Project webpage: <a href="http://forge-fre.ornl.gov/molar/index.html">http://forge-fre.ornl.gov/molar/index.html</a>
Graduate Research Associate | Project webpage: <a href="http://www.cs.unm.edu/~fastos">http://www.cs.unm.edu/~fastos</a>
Dept. of Comp. Sci. &amp; Engg  | Personal webpage: <a href="http://www.cse.ohio-state.edu/~shet">http://www.cse.ohio-state.edu/~shet</a>
The Ohio State University   | Office: DL 474
2015 Neil Avenue            | Phone: +1 (614) 292 7036
Columbus OH 43210-1277      | Cell: +1 (614) 446 1630
-----------------------------------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1125.php">sdamjad: "[OMPI users] config error"</a>
<li><strong>Previous message:</strong> <a href="1123.php">Galen Mark Shipman: "Re: [OMPI users] VAPI error with mpi_leave_pinned setting"</a>
<li><strong>In reply to:</strong> <a href="1123.php">Galen Mark Shipman: "Re: [OMPI users] VAPI error with mpi_leave_pinned setting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1136.php">Aniruddha Shet: "Re: [OMPI users] VAPI error with mpi_leave_pinned setting"</a>
<li><strong>Reply:</strong> <a href="1136.php">Aniruddha Shet: "Re: [OMPI users] VAPI error with mpi_leave_pinned setting"</a>
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
