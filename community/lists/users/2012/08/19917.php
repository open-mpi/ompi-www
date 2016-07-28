<?
$subject_val = "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  .";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  9 09:37:40 2012" -->
<!-- isoreceived="20120809133740" -->
<!-- sent="Thu, 09 Aug 2012 15:37:35 +0200" -->
<!-- isosent="20120809133735" -->
<!-- name="ESCOBAR Juan" -->
<!-- email="Juan.Escobar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp;amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ." -->
<!-- id="5023BD1F.50503_at_aero.obs-mip.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5525A3CC-814E-476B-BE7D-5E5FDAE86D33_at_cisco.com" -->
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
<strong>From:</strong> ESCOBAR Juan (<em>Juan.Escobar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-09 09:37:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19918.php">Jeff Squyres: "[OMPI users] CUDA in v1.7? (was: Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler...)"</a>
<li><strong>Previous message:</strong> <a href="19916.php">Jeff Squyres: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>In reply to:</strong> <a href="19916.php">Jeff Squyres: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19918.php">Jeff Squyres: "[OMPI users] CUDA in v1.7? (was: Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler...)"</a>
<li><strong>Reply:</strong> <a href="19918.php">Jeff Squyres: "[OMPI users] CUDA in v1.7? (was: Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler...)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 08/09/2012 01:41 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 9, 2012, at 5:53 AM, ESCOBAR Juan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps a Boeotian question .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why the nightly version are called 1.9.xxx ??
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; are they from 1.6 (or 1.7 series) ?
</span><br>
<span class="quotelev1">&gt; Neither.  They're from the v1.9 series.  :-)  Keep in mind that we have active nightly tarball series right now: v1.6, v1.7, and v1.9.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's our numbering scheme:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - In general, an even 2nd number of OMPI's release number indicates a &quot;super stable&quot; series, and an odd number indicates a &quot;feature release&quot; series.  See <a href="http://www.open-mpi.org/software/ompi/versions/">http://www.open-mpi.org/software/ompi/versions/</a> for more details.
</span><br>
<p>:-[ Thank you Jeff .
<br>
:-[ Yes , I've already read this page ...
<br>
:-[ My mistake ...
<br>
:-[ I was little lost in the web pages
<br>
<p>The version I was looking for is in this page :
<br>
<a href="http://www.open-mpi.org/nightly/">http://www.open-mpi.org/nightly/</a>
<br>
and then link
<br>
=&gt; *v1.6 series* &lt;<a href="http://www.open-mpi.org/nightly/v1.6/">http://www.open-mpi.org/nightly/v1.6/</a>&gt;
<br>
=&gt; openmpi-1.6.1rc2r26972.tar.gz &lt;<a href="http://www.open-mpi.org/nightly/v1.6/openmpi-1.6.1rc2r26972.tar.gz">http://www.open-mpi.org/nightly/v1.6/openmpi-1.6.1rc2r26972.tar.gz</a>&gt;
<br>
<p>... but as I'am also interested in testing the Open-MPI/CUDA feature ( with potentially pgi-acc or open-acc directive )
<br>
I've 'googled' and finish in the the Open-MPI  'trunck' .
<br>
<p>=&gt; this Open-MPI/CUDA feature will be only in the 1.9 serie or also on 1.7/1.8 ?
<br>
<p>A+
<br>
Juan .
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - v1.6.x is the current stable release series.
</span><br>
<span class="quotelev1">&gt;    - We have a specific branch in our SVN repository for the v1.6.x series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - v1.7.x is the upcoming feature release series (we anticipate v1.7.0 in October or so).
</span><br>
<span class="quotelev1">&gt;    - We have a specific branch in our SVN repository for the v1.7.x series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Per our scheme, v1.7.x will eventually morph into v1.8.x.
</span><br>
<span class="quotelev1">&gt;    - Meaning: the v1.7.x SVN branch will eventually be renamed to be v1.8.x.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Hence, our SVN development trunk -- where we do most of our day-to-day work -- is the *next* series pair beyond 1.7/1.8.  It's therefore &quot;v1.9&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Juan ESCOBAR
Support MESONH
Laboratoire d'A&#233;rologie, O.M.P.
14 avenue Edouard Belin
31400 - TOULOUSE
Tel : +33 (0)5-61-33-27-49
Fax : +33 (0)5-61-33-27-90
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19917/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19918.php">Jeff Squyres: "[OMPI users] CUDA in v1.7? (was: Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler...)"</a>
<li><strong>Previous message:</strong> <a href="19916.php">Jeff Squyres: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>In reply to:</strong> <a href="19916.php">Jeff Squyres: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19918.php">Jeff Squyres: "[OMPI users] CUDA in v1.7? (was: Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler...)"</a>
<li><strong>Reply:</strong> <a href="19918.php">Jeff Squyres: "[OMPI users] CUDA in v1.7? (was: Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler...)"</a>
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
