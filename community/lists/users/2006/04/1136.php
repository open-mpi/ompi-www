<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 25 10:12:39 2006" -->
<!-- isoreceived="20060425141239" -->
<!-- sent="Tue, 25 Apr 2006 10:12:31 -0400" -->
<!-- isosent="20060425141231" -->
<!-- name="Aniruddha Shet" -->
<!-- email="shet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] VAPI error with mpi_leave_pinned setting" -->
<!-- id="001a01c66872$4c47eb60$2402a8c0_at_Aniruddha" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="Pine.GSO.4.40.0604240751060.12717-100000_at_kappa.cse.ohio-state.edu" -->
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
<strong>Date:</strong> 2006-04-25 10:12:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1137.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>Previous message:</strong> <a href="1135.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<li><strong>In reply to:</strong> <a href="1124.php">Aniruddha Shet: "Re: [OMPI users] VAPI error with mpi_leave_pinned setting"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Looks like there is no problem with the setup of compute nodes. The error 
<br>
seems to occur when trying to lookup the lower priority queue for a CQ 
<br>
entry.
<br>
<p>Thanks,
<br>
Aniruddha
<br>
<p>----- Original Message ----- 
<br>
From: &quot;Aniruddha Shet&quot; &lt;shet_at_[hidden]&gt;
<br>
To: &lt;gshipman_at_[hidden]&gt;; &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Sent: Monday, April 24, 2006 7:59 AM
<br>
Subject: Re: [OMPI users] VAPI error with mpi_leave_pinned setting
<br>
<p><p><span class="quotelev1">&gt; On Mon, 24 Apr 2006, Galen Mark Shipman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Galen,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I face this problem with releases 1.0.1 and 1.0.2. It probably isn't an
</span><br>
<span class="quotelev1">&gt; issue with Open MPI as there have been instances earlier where setting
</span><br>
<span class="quotelev1">&gt; mpi_leave_pinned to 1 didn't throw up errors. I suspect it is an issue
</span><br>
<span class="quotelev1">&gt; with the compute nodes but cannot confirm for sure. I am also trying to
</span><br>
<span class="quotelev1">&gt; resolve this with the system administrator.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Aniruddha
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Aniruddha,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you using the trunk, or one of the release tar files (if so which 
</span><br>
<span class="quotelev2">&gt;&gt; one).
</span><br>
<span class="quotelev2">&gt;&gt; I will try to reproduce this as time permits but I am out of town so
</span><br>
<span class="quotelev2">&gt;&gt; please expect some delay.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Galen
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I keep getting a vapi error when running any NAS benchmark on 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Infiniband
</span><br>
<span class="quotelev3">&gt;&gt; &gt; with mpi_leave_pinned option set to 1. This problem does not occur with
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpi_leave_pinned set to 0. Please find attached the error trace.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Aniruddha
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ----------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Aniruddha Shet | Project webpage:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://forge-fre.ornl.gov/molar/index.html">http://forge-fre.ornl.gov/molar/index.html</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Graduate Research Associate | Project webpage: www.cs.unm.edu/~fastos
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Dept. of Comp. Sci. &amp; Engg | Personal webpage:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; www.cse.ohio-state.edu/~shet
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The Ohio State University | Office: DL 474
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2015 Neil Avenue | Phone: +1 (614) 292 7036
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Columbus OH 43210-1277 | Cell: +1 (614) 446 1630
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ----------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Aniruddha G. Shet           | Project webpage: 
</span><br>
<span class="quotelev1">&gt; <a href="http://forge-fre.ornl.gov/molar/index.html">http://forge-fre.ornl.gov/molar/index.html</a>
</span><br>
<span class="quotelev1">&gt; Graduate Research Associate | Project webpage: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cs.unm.edu/~fastos">http://www.cs.unm.edu/~fastos</a>
</span><br>
<span class="quotelev1">&gt; Dept. of Comp. Sci. &amp; Engg  | Personal webpage: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cse.ohio-state.edu/~shet">http://www.cse.ohio-state.edu/~shet</a>
</span><br>
<span class="quotelev1">&gt; The Ohio State University   | Office: DL 474
</span><br>
<span class="quotelev1">&gt; 2015 Neil Avenue            | Phone: +1 (614) 292 7036
</span><br>
<span class="quotelev1">&gt; Columbus OH 43210-1277      | Cell: +1 (614) 446 1630
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1137.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>Previous message:</strong> <a href="1135.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<li><strong>In reply to:</strong> <a href="1124.php">Aniruddha Shet: "Re: [OMPI users] VAPI error with mpi_leave_pinned setting"</a>
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
