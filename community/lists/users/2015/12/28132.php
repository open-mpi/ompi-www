<?
$subject_val = "Re: [OMPI users] OpenMPI library conflicts";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 06:25:59 2015" -->
<!-- isoreceived="20151204112559" -->
<!-- sent="Fri, 4 Dec 2015 11:25:53 +0000" -->
<!-- isosent="20151204112553" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI library conflicts" -->
<!-- id="7897C1CF-1BA3-4B81-B23C-6734F23F5737_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAGWAij4a9HKhYyhOE8Pde-nLFN5u=WSxY76=AnQifkH1+GSuwQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI library conflicts<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-04 06:25:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28133.php">Baldassari Caroline: "Re: [OMPI users] Problem with the 1.8.8 version"</a>
<li><strong>Previous message:</strong> <a href="28131.php">Yilmaz, D.: "[OMPI users] OpenMPI library conflicts"</a>
<li><strong>In reply to:</strong> <a href="28131.php">Yilmaz, D.: "[OMPI users] OpenMPI library conflicts"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 4, 2015, at 4:31 AM, Yilmaz, D. &lt;d.yilmaz_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you are switching/rebulding the openmpi releases on your computer time to time. Your latest openmpi build ( not the latest release) which you are trying to install can not change the symbolic links of the openmpi libraries in /usr/local/lib directory. After you built your the last openmpi, the symbolic links of the library files may refer to the previously installed openmpi libraries. These library conflicts may cause segmentation faults on mpirun.
</span><br>
<p>Good tip.
<br>
<p>Note that we explicitly discourage you from installing a new version of Open MPI over an older installation:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=building#install-overwrite">http://www.open-mpi.org/faq/?category=building#install-overwrite</a>
<br>
<p>Here's some other FAQ items that might be helpful:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=building#overwrite-pre-installed-ompi">http://www.open-mpi.org/faq/?category=building#overwrite-pre-installed-ompi</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=building#where-to-install">http://www.open-mpi.org/faq/?category=building#where-to-install</a>
<br>
<p>Hope those help!
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
<li><strong>Next message:</strong> <a href="28133.php">Baldassari Caroline: "Re: [OMPI users] Problem with the 1.8.8 version"</a>
<li><strong>Previous message:</strong> <a href="28131.php">Yilmaz, D.: "[OMPI users] OpenMPI library conflicts"</a>
<li><strong>In reply to:</strong> <a href="28131.php">Yilmaz, D.: "[OMPI users] OpenMPI library conflicts"</a>
<!-- nextthread="start" -->
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
