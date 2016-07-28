<?
$subject_val = "Re: [OMPI users] Setting RPATH for Open MPI libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 20 10:25:16 2012" -->
<!-- isoreceived="20121120152516" -->
<!-- sent="Tue, 20 Nov 2012 10:25:12 -0500" -->
<!-- isosent="20121120152512" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting RPATH for Open MPI libraries" -->
<!-- id="03E0EE73-763A-42A5-BA20-40998BDA5503_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D96770EC-6B10-4294-BA0D-AAD5C66D9558_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Setting RPATH for Open MPI libraries<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-20 10:25:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20747.php">Jakub Nowacki: "[OMPI users] Building multiple RPM error"</a>
<li><strong>Previous message:</strong> <a href="20745.php">mariana Vargas: "Re: [OMPI users] PBS jobs with OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="20702.php">Reuti: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20748.php">Jeff Squyres: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 11, 2012, at 5:11 PM, Reuti wrote:
<br>
<p><span class="quotelev1">&gt; Then it works again and the RPATH is included. Why is the necessary -L argument removed by the wrapper during compilation if OMPI_LDFLAGS for additonal flags is used?
</span><br>
<p>When you specify OMPI_LDFLAGS, it *replaces* the LDFLAGS in the wrapper compiler -- it doesn't *add* them.
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
<li><strong>Next message:</strong> <a href="20747.php">Jakub Nowacki: "[OMPI users] Building multiple RPM error"</a>
<li><strong>Previous message:</strong> <a href="20745.php">mariana Vargas: "Re: [OMPI users] PBS jobs with OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="20702.php">Reuti: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20748.php">Jeff Squyres: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
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
