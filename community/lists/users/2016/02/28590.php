<?
$subject_val = "[OMPI users] Question on OpenMPI backwards compatibility";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 26 11:21:02 2016" -->
<!-- isoreceived="20160226162102" -->
<!-- sent="Fri, 26 Feb 2016 16:20:56 +0000" -->
<!-- isosent="20160226162056" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] Question on OpenMPI backwards compatibility" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F0CE1DD51_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> [OMPI users] Question on OpenMPI backwards compatibility<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-26 11:20:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28591.php">Emmanuel Thomé: "[OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Previous message:</strong> <a href="28589.php">Eva: "Re: [OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28593.php">David Shrader: "Re: [OMPI users] Question on OpenMPI backwards compatibility"</a>
<li><strong>Reply:</strong> <a href="28593.php">David Shrader: "Re: [OMPI users] Question on OpenMPI backwards compatibility"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am confused about backwards-compatibility.
<br>
<p>FAQ #111 says:
<br>
Open MPI reserves the right to break ABI compatibility at new feature release series. ..... MPI applications compiled/linked against Open MPI 1.6.x will not be ABI compatible with Open MPI 1.7.x
<br>
<p>But the versioning documentation says:
<br>
&nbsp;&nbsp;* Minor: The minor number is the second integer in the version string.  ....  Backwards compatibility will still be preserved with prior releases that have the same major version number (e.g., v2.5.3 is backwards compatible with v2.3.1).	
<br>
<p>These two examples and statements appear inconsistent to me:
<br>
<p>Can I use OpenMPI 1.7.x run-time and options to execute codes built with OpenMPI 1.6.x?   No (FAQ #111)
<br>
<p>Can I use OpenMPI 2.5.x run-time and options to execute codes built with OpenMPI 2.3.x?   Yes (s/w versioning documentation)
<br>
<p>Can I use OpenMPI 1.8.x run-time and options to execute codes built with OpenMPI 1.6.x?   Who knows?!  I tested this once, and it failed.  I made the assumption that 1.8.x wouldn't run a 1.6.x code, and I moved on.  But I realize now that I could have made a mistake.  The test I performed could have failed for some other reason. 
<br>
<p>Can anyone shed some light?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28591.php">Emmanuel Thomé: "[OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Previous message:</strong> <a href="28589.php">Eva: "Re: [OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28593.php">David Shrader: "Re: [OMPI users] Question on OpenMPI backwards compatibility"</a>
<li><strong>Reply:</strong> <a href="28593.php">David Shrader: "Re: [OMPI users] Question on OpenMPI backwards compatibility"</a>
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
