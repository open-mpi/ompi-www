<?
$subject_val = "Re: [OMPI users] Strange behaviour OpenMPI in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 09:53:23 2016" -->
<!-- isoreceived="20160125145323" -->
<!-- sent="Mon, 25 Jan 2016 14:53:21 +0000" -->
<!-- isosent="20160125145321" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange behaviour OpenMPI in Fortran" -->
<!-- id="55C02283-338B-4E96-A9A1-57F6F12B6FE6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87wpqxetnk.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange behaviour OpenMPI in Fortran<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-25 09:53:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28370.php">Steve O'Hara: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>Previous message:</strong> <a href="28368.php">Kuhl, Spencer J: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>In reply to:</strong> <a href="28365.php">Dave Love: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28388.php">Dave Love: "[OMPI users] Fortran features and interfaces (was: Strange behaviour OpenMPI in Fortran)"</a>
<li><strong>Reply:</strong> <a href="28388.php">Dave Love: "[OMPI users] Fortran features and interfaces (was: Strange behaviour OpenMPI in Fortran)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 25, 2016, at 7:21 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You might expect the f90 module to reveal the error anyway.
</span><br>
<span class="quotelev1">&gt; Unfortunately which routines it covers depends on the compiler and OMPI
</span><br>
<span class="quotelev1">&gt; versions in a way I don't understand -- can someone explain?  For
</span><br>
<span class="quotelev1">&gt; instance, it won't work with the RHEL6 system compiler (GCC 4.4), but
</span><br>
<span class="quotelev1">&gt; OMPI 1.8 using GCC 4.9 will report the error with &quot;use mpi&quot;.
</span><br>
<p>As you surmise, it depends on your fortran compiler.
<br>
<p>The following from the v1.10 README file may shed some light on your question:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi-release/blob/v1.10/README#L370-L405">https://github.com/open-mpi/ompi-release/blob/v1.10/README#L370-L405</a>
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28370.php">Steve O'Hara: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>Previous message:</strong> <a href="28368.php">Kuhl, Spencer J: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>In reply to:</strong> <a href="28365.php">Dave Love: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28388.php">Dave Love: "[OMPI users] Fortran features and interfaces (was: Strange behaviour OpenMPI in Fortran)"</a>
<li><strong>Reply:</strong> <a href="28388.php">Dave Love: "[OMPI users] Fortran features and interfaces (was: Strange behaviour OpenMPI in Fortran)"</a>
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
