<?
$subject_val = "[OMPI users] 1.5.3 and SGE integration?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 08:25:04 2011" -->
<!-- isoreceived="20110321122504" -->
<!-- sent="Mon, 21 Mar 2011 12:24:40 +0000" -->
<!-- isosent="20110321122440" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="[OMPI users] 1.5.3 and SGE integration?" -->
<!-- id="871v20u0dz.fsf_at_liv.ac.uk" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] 1.5.3 and SGE integration?<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-21 08:24:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15924.php">Tim Prince: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="15922.php">yanyg_at_[hidden]: "[OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15927.php">Terry Dontje: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>Reply:</strong> <a href="15927.php">Terry Dontje: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've just tried 1.5.3 under SGE with tight integration, which seems to
<br>
be broken.  I built and ran in the same way as for 1.4.{1,3}, which
<br>
works, and ompi_info reports the same gridengine parameters for 1.5 as
<br>
for 1.4.
<br>
<p>The symptoms are that it reports a failure to communicate using ssh,
<br>
whereas it should be using the SGE builtin method via qrsh.
<br>
<p>There doesn't seem to be a relevant bug report, but before I
<br>
investigate, has anyone else succeeded/failed with it, or have any
<br>
hints?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15924.php">Tim Prince: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="15922.php">yanyg_at_[hidden]: "[OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15927.php">Terry Dontje: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
<li><strong>Reply:</strong> <a href="15927.php">Terry Dontje: "Re: [OMPI users] 1.5.3 and SGE integration?"</a>
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
