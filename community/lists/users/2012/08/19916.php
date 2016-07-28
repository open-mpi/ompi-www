<?
$subject_val = "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  .";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  9 07:41:40 2012" -->
<!-- isoreceived="20120809114140" -->
<!-- sent="Thu, 9 Aug 2012 07:41:17 -0400" -->
<!-- isosent="20120809114117" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp;amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ." -->
<!-- id="5525A3CC-814E-476B-BE7D-5E5FDAE86D33_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="502388A7.5010509_at_aero.obs-mip.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  .<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-09 07:41:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19917.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>Previous message:</strong> <a href="19915.php">jiakai: "[OMPI users] recv hangs up when iptables is enabled"</a>
<li><strong>In reply to:</strong> <a href="19914.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19917.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>Reply:</strong> <a href="19917.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 9, 2012, at 5:53 AM, ESCOBAR Juan wrote:
<br>
<p><span class="quotelev1">&gt; Perhaps a Boeotian question .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why the nightly version are called 1.9.xxx ??
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; are they from 1.6 (or 1.7 series) ?
</span><br>
<p>Neither.  They're from the v1.9 series.  :-)  Keep in mind that we have active nightly tarball series right now: v1.6, v1.7, and v1.9.
<br>
<p>Here's our numbering scheme:
<br>
<p>- In general, an even 2nd number of OMPI's release number indicates a &quot;super stable&quot; series, and an odd number indicates a &quot;feature release&quot; series.  See <a href="http://www.open-mpi.org/software/ompi/versions/">http://www.open-mpi.org/software/ompi/versions/</a> for more details.
<br>
<p>- v1.6.x is the current stable release series.
<br>
&nbsp;&nbsp;- We have a specific branch in our SVN repository for the v1.6.x series.
<br>
<p>- v1.7.x is the upcoming feature release series (we anticipate v1.7.0 in October or so).
<br>
&nbsp;&nbsp;- We have a specific branch in our SVN repository for the v1.7.x series.
<br>
<p>- Per our scheme, v1.7.x will eventually morph into v1.8.x.
<br>
&nbsp;&nbsp;- Meaning: the v1.7.x SVN branch will eventually be renamed to be v1.8.x.
<br>
<p>- Hence, our SVN development trunk -- where we do most of our day-to-day work -- is the *next* series pair beyond 1.7/1.8.  It's therefore &quot;v1.9&quot;.
<br>
<p>Make sense?
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
<li><strong>Next message:</strong> <a href="19917.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>Previous message:</strong> <a href="19915.php">jiakai: "[OMPI users] recv hangs up when iptables is enabled"</a>
<li><strong>In reply to:</strong> <a href="19914.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19917.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>Reply:</strong> <a href="19917.php">ESCOBAR Juan: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
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
