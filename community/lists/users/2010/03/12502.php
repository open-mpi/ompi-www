<?
$subject_val = "Re: [OMPI users] openMPI on Xgrid";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 31 11:21:38 2010" -->
<!-- isoreceived="20100331152138" -->
<!-- sent="Wed, 31 Mar 2010 11:21:13 -0400" -->
<!-- isosent="20100331152113" -->
<!-- name="Cristobal Navarro" -->
<!-- email="axischire_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI on Xgrid" -->
<!-- id="k2zb66245471003310821uf02c800fk54c054b0f505b75c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BB24B98.1000207_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Cristobal Navarro (<em>axischire_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-31 11:21:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12503.php">Jeff Squyres: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>Previous message:</strong> <a href="12501.php">Joshua Hursey: "Re: [OMPI users] Segmentation fault (11)"</a>
<li><strong>In reply to:</strong> <a href="12479.php">Gus Correa: "Re: [OMPI users] openMPI on Xgrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12503.php">Jeff Squyres: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>Reply:</strong> <a href="12503.php">Jeff Squyres: "Re: [OMPI users] openMPI on Xgrid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
and how about Sun Grid Engine + openMPI, good idea??
<br>
<p>im asking because i just checked out that Mathematica 7 supports cluster
<br>
integration with SGE which will be a plus apart from our C programs.
<br>
<p><p>Cristobal
<br>
<p><p><p><p>On Tue, Mar 30, 2010 at 4:06 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Craig Tierney wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jody Klymak wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 30, 2010, at  11:12 AM, Cristobal Navarro wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  i just have some questions,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Torque requires moab, but from what i've read on the site you have to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; buy moab right?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am pretty sure you can download torque w/o moab.  I do not use moab,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which I think is a higher-level scheduling layer on top of pbs. However,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there are folks here who would know far more than I do about
</span><br>
<span class="quotelev3">&gt;&gt;&gt; these sorts of things.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,  Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Moab is a scheduler, which works with Torque and several other
</span><br>
<span class="quotelev2">&gt;&gt; products.  Torque comes with a basic scheduler, and Moab is not
</span><br>
<span class="quotelev2">&gt;&gt; required.  If you want more features but not pay for Moab, you
</span><br>
<span class="quotelev2">&gt;&gt; can look at Maui.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Craig
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just adding to what Craig and Jody said.
</span><br>
<span class="quotelev1">&gt; Moab is not required for Torque.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A small cluster with a few users can work well with
</span><br>
<span class="quotelev1">&gt; the basic Torque/PBS scheduler (pbs_sched),
</span><br>
<span class="quotelev1">&gt; and its first-in-first-out job policy.
</span><br>
<span class="quotelev1">&gt; An alternative is to replace pbs_sched with the
</span><br>
<span class="quotelev1">&gt; free Maui scheduler, if you need fine grained job control.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can install both Torque and Maui from source code (available here
</span><br>
<span class="quotelev1">&gt; <a href="http://www.clusterresources.com/">http://www.clusterresources.com/</a>), but it takes some work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some Linux distributions have Torque and Maui available as packages
</span><br>
<span class="quotelev1">&gt; through yum, apt-get, etc.
</span><br>
<span class="quotelev1">&gt; I would guess for the Mac you can get at least Torque through fink,
</span><br>
<span class="quotelev1">&gt; or not?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jody Klymak
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12502/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12503.php">Jeff Squyres: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>Previous message:</strong> <a href="12501.php">Joshua Hursey: "Re: [OMPI users] Segmentation fault (11)"</a>
<li><strong>In reply to:</strong> <a href="12479.php">Gus Correa: "Re: [OMPI users] openMPI on Xgrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12503.php">Jeff Squyres: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>Reply:</strong> <a href="12503.php">Jeff Squyres: "Re: [OMPI users] openMPI on Xgrid"</a>
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
