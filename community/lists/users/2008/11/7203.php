<?
$subject_val = "[OMPI users] mca btl_openib_flags default value";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 08:57:53 2008" -->
<!-- isoreceived="20081104135753" -->
<!-- sent="Tue, 4 Nov 2008 14:57:48 +0100" -->
<!-- isosent="20081104135748" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="grodid_at_[hidden]" -->
<!-- subject="[OMPI users] mca btl_openib_flags default value" -->
<!-- id="Pine.LNX.4.58.0811041451110.7372_at_lxplus237.cern.ch" -->
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
<strong>Subject:</strong> [OMPI users] mca btl_openib_flags default value<br>
<strong>From:</strong> Gilbert Grosdidier (<em>grodid_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-04 08:57:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7204.php">Sangamesh B: "[OMPI users] OpenMPI-1.2.7 + SGE"</a>
<li><strong>Previous message:</strong> <a href="7202.php">Olivier Marsden: "[OMPI users] question regarding the configuration of multiple nics for openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7207.php">Jeff Squyres: "Re: [OMPI users] mca btl_openib_flags default value"</a>
<li><strong>Reply:</strong> <a href="7207.php">Jeff Squyres: "Re: [OMPI users] mca btl_openib_flags default value"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bonjour,
<br>
<p>&nbsp;Working with OpenMPI 1.2.5 on RHEL5.2, I noticed a weird default value for 
<br>
this mca parameter, as printed by ompi_info:
<br>
<p>MCA btl: parameter &quot;btl_openib_flags&quot; (current value: &quot;54&quot;)
<br>
BTL flags, added together: SEND=1, PUT=2, GET=4 (cannot be 0)
<br>
<p>&nbsp;Is this expected or not ?
<br>
I could understand any value between 1 &amp; 7, but what does mean 54, please ?
<br>
Does it behave like 6, if removal of the unexpected bits ?
<br>
<p>&nbsp;Thanks,                                Gilbert
<br>
<p><pre>
-- 
*---------------------------------------------------------------------*
  Gilbert Grosdidier                 Gilbert.Grosdidier_at_[hidden]
  LAL / IN2P3 / CNRS                 Phone : +33 1 6446 8909
  Facult&#233; des Sciences, Bat. 200     Fax   : +33 1 6446 8546
  B.P. 34, F-91898 Orsay Cedex (FRANCE)
 ---------------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7204.php">Sangamesh B: "[OMPI users] OpenMPI-1.2.7 + SGE"</a>
<li><strong>Previous message:</strong> <a href="7202.php">Olivier Marsden: "[OMPI users] question regarding the configuration of multiple nics for openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7207.php">Jeff Squyres: "Re: [OMPI users] mca btl_openib_flags default value"</a>
<li><strong>Reply:</strong> <a href="7207.php">Jeff Squyres: "Re: [OMPI users] mca btl_openib_flags default value"</a>
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
