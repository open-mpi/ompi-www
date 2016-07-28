<?
$subject_val = "[OMPI users] using openib and psm together";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 21 06:01:58 2011" -->
<!-- isoreceived="20110421100158" -->
<!-- sent="Thu, 21 Apr 2011 11:01:38 +0100" -->
<!-- isosent="20110421100138" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="[OMPI users] using openib and psm together" -->
<!-- id="87k4en9b3x.fsf_at_liv.ac.uk" -->
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
<strong>Subject:</strong> [OMPI users] using openib and psm together<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-21 06:01:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16300.php">Stanislav Sazykin: "[OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<li><strong>Previous message:</strong> <a href="16298.php">Brock Palen: "[OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16306.php">Jeff Squyres: "Re: [OMPI users] using openib and psm together"</a>
<li><strong>Reply:</strong> <a href="16306.php">Jeff Squyres: "Re: [OMPI users] using openib and psm together"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have an installation with both Mellanox and Qlogic IB adaptors (in
<br>
distinct islands), so I built open-mpi 1.4.3 with openib and psm
<br>
support.
<br>
<p>Now I've just read this in the OFED source, but I can't see any relevant
<br>
issue in the open-mpi tracker:
<br>
<p>&nbsp;&nbsp;OpenMPI support
<br>
&nbsp;&nbsp;---------------
<br>
&nbsp;&nbsp;It is recommended to use the OpenMPI v1.5 development branch. Prior versions
<br>
&nbsp;&nbsp;of OpenMPI have an issue with support PSM network transports mixed with standard
<br>
&nbsp;&nbsp;Verbs transport (BTL openib). This prevents an OpenMPI installation with
<br>
&nbsp;&nbsp;network modules available for PSM and Verbs to work correctly on nodes with
<br>
&nbsp;&nbsp;no QLogic IB hardware. This has been fixed in the latest development branch
<br>
&nbsp;&nbsp;allowing a single OpenMPI installation to target IB hardware via PSM or Verbs
<br>
&nbsp;&nbsp;as well as alternate transports seamlessly.
<br>
<p>Do I definitely need 1.5 (and is 1.5.3 good enough?) to have openib and
<br>
psm working correctly?  Also what are the symptoms of it not working
<br>
correctly?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16300.php">Stanislav Sazykin: "[OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<li><strong>Previous message:</strong> <a href="16298.php">Brock Palen: "[OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16306.php">Jeff Squyres: "Re: [OMPI users] using openib and psm together"</a>
<li><strong>Reply:</strong> <a href="16306.php">Jeff Squyres: "Re: [OMPI users] using openib and psm together"</a>
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
