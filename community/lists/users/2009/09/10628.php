<?
$subject_val = "[OMPI users] How to build OMPI with Checkpoint/restart.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 12 07:37:35 2009" -->
<!-- isoreceived="20090912113735" -->
<!-- sent="Sat, 12 Sep 2009 13:37:30 +0200" -->
<!-- isosent="20090912113730" -->
<!-- name="Marcin Stolarek" -->
<!-- email="mstol_at_[hidden]" -->
<!-- subject="[OMPI users] How to build OMPI with Checkpoint/restart." -->
<!-- id="fa184f540909120437n167ff575ub54910d201529289_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] How to build OMPI with Checkpoint/restart.<br>
<strong>From:</strong> Marcin Stolarek (<em>mstol_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-12 07:37:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10629.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Previous message:</strong> <a href="10627.php">Doug Reeder: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10632.php">Marcin Stolarek: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<li><strong>Reply:</strong> <a href="10632.php">Marcin Stolarek: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I'm trying  to compile OpenMPI with  checkpoint restart via BLCR. I'm not
<br>
sure which path shoul I set as a value of --with-blcr option.
<br>
I'm using 1.3.3 release, which version of BLCR should I use?
<br>
<p>I've compiled the newest version of BLCR with --prefix=$BLCR, and I've
<br>
putten as a option to openmpi configure --with-blcr=$BLCR, but I recived:
<br>
<p><p>configure:76646: checking if MCA component crs:blcr can compile
<br>
configure:76648: result: no
<br>
<p>marcin
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10628/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10629.php">Jeff Squyres: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Previous message:</strong> <a href="10627.php">Doug Reeder: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10632.php">Marcin Stolarek: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
<li><strong>Reply:</strong> <a href="10632.php">Marcin Stolarek: "Re: [OMPI users] How to build OMPI with Checkpoint/restart."</a>
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
