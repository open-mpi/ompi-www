<?
$subject_val = "[OMPI users] compiler upgrades require openmpi rebuild?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 30 18:49:04 2010" -->
<!-- isoreceived="20100830224904" -->
<!-- sent="Mon, 30 Aug 2010 15:48:57 -0700" -->
<!-- isosent="20100830224857" -->
<!-- name="David Turner" -->
<!-- email="dpturner_at_[hidden]" -->
<!-- subject="[OMPI users] compiler upgrades require openmpi rebuild?" -->
<!-- id="4C7C3559.6050301_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI users] compiler upgrades require openmpi rebuild?<br>
<strong>From:</strong> David Turner (<em>dpturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-30 18:48:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14134.php">³ÂÎÄºÆ: "[OMPI users]  High Checkpoint Overhead Ratio"</a>
<li><strong>Previous message:</strong> <a href="14132.php">Richard Treumann: "[OMPI users] AUTO: Richard Treumann/Poughkeepsie/IBM is out of the office until 01/02/2001. (returning 09/07/2010)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14172.php">Jeff Squyres: "Re: [OMPI users] compiler upgrades require openmpi rebuild?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14172.php">Jeff Squyres: "Re: [OMPI users] compiler upgrades require openmpi rebuild?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We have recently upgraded our default compiler suite from
<br>
PGI 10.5 to PGI 10.8.  We use the &quot;module&quot; system to manage
<br>
third-party software.  The module for PGI sets PATH and
<br>
LD_LIBRARY_PATH.
<br>
<p>Using Open MPI 1.4.2, built with PGI 10.5, I have verified
<br>
that changing PATH is sufficient for the Open MPI compiler
<br>
wrappers to pick up version 10.8 of the PGI compilers.
<br>
However, it appears that the 10.5 PGI libraries are &quot;wired&quot;
<br>
into the wrappers somehow.  So I get an executable that
<br>
has been compiled with PGI 10.8 but linked against PGI 10.5
<br>
libraries.
<br>
<p>Short of rebuilding Open MPI with PGI 10.8, is there any
<br>
(safe, reliable) way to get the compiler wrappers to link
<br>
against the PGI 10.8 libraries?  Thanks!
<br>
<p><pre>
-- 
Best regards,
David Turner
User Services Group        email: dpturner_at_[hidden]
NERSC Division             phone: (510) 486-4027
Lawrence Berkeley Lab        fax: (510) 486-4316
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14134.php">³ÂÎÄºÆ: "[OMPI users]  High Checkpoint Overhead Ratio"</a>
<li><strong>Previous message:</strong> <a href="14132.php">Richard Treumann: "[OMPI users] AUTO: Richard Treumann/Poughkeepsie/IBM is out of the office until 01/02/2001. (returning 09/07/2010)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14172.php">Jeff Squyres: "Re: [OMPI users] compiler upgrades require openmpi rebuild?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14172.php">Jeff Squyres: "Re: [OMPI users] compiler upgrades require openmpi rebuild?"</a>
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
