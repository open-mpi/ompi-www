<?
$subject_val = "Re: [OMPI users] openMPI on Xgrid";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 30 15:06:09 2010" -->
<!-- isoreceived="20100330190609" -->
<!-- sent="Tue, 30 Mar 2010 15:06:00 -0400" -->
<!-- isosent="20100330190600" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI on Xgrid" -->
<!-- id="4BB24B98.1000207_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BB245A1.9060507_at_noaa.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI on Xgrid<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-30 15:06:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12480.php">Shaun Jackman: "Re: [OMPI users] MPI_Init never returns on IA64"</a>
<li><strong>Previous message:</strong> <a href="12478.php">Craig Tierney: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>In reply to:</strong> <a href="12478.php">Craig Tierney: "Re: [OMPI users] openMPI on Xgrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12502.php">Cristobal Navarro: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>Reply:</strong> <a href="12502.php">Cristobal Navarro: "Re: [OMPI users] openMPI on Xgrid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Craig Tierney wrote:
<br>
<span class="quotelev1">&gt; Jody Klymak wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 30, 2010, at  11:12 AM, Cristobal Navarro wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i just have some questions,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Torque requires moab, but from what i've read on the site you have to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; buy moab right?
</span><br>
<span class="quotelev2">&gt;&gt; I am pretty sure you can download torque w/o moab.  I do not use moab,
</span><br>
<span class="quotelev2">&gt;&gt; which I think is a higher-level scheduling layer on top of pbs. 
</span><br>
<span class="quotelev2">&gt;&gt; However, there are folks here who would know far more than I do about
</span><br>
<span class="quotelev2">&gt;&gt; these sorts of things.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,  Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Moab is a scheduler, which works with Torque and several other
</span><br>
<span class="quotelev1">&gt; products.  Torque comes with a basic scheduler, and Moab is not
</span><br>
<span class="quotelev1">&gt; required.  If you want more features but not pay for Moab, you
</span><br>
<span class="quotelev1">&gt; can look at Maui.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Craig
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Hi
<br>
<p>Just adding to what Craig and Jody said.
<br>
Moab is not required for Torque.
<br>
<p>A small cluster with a few users can work well with
<br>
the basic Torque/PBS scheduler (pbs_sched),
<br>
and its first-in-first-out job policy.
<br>
An alternative is to replace pbs_sched with the
<br>
free Maui scheduler, if you need fine grained job control.
<br>
<p>You can install both Torque and Maui from source code (available here 
<br>
<a href="http://www.clusterresources.com/">http://www.clusterresources.com/</a>), but it takes some work.
<br>
<p>Some Linux distributions have Torque and Maui available as packages
<br>
through yum, apt-get, etc.
<br>
I would guess for the Mac you can get at least Torque through fink,
<br>
or not?
<br>
<p>Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jody Klymak
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="12480.php">Shaun Jackman: "Re: [OMPI users] MPI_Init never returns on IA64"</a>
<li><strong>Previous message:</strong> <a href="12478.php">Craig Tierney: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>In reply to:</strong> <a href="12478.php">Craig Tierney: "Re: [OMPI users] openMPI on Xgrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12502.php">Cristobal Navarro: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>Reply:</strong> <a href="12502.php">Cristobal Navarro: "Re: [OMPI users] openMPI on Xgrid"</a>
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
