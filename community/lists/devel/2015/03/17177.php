<?
$subject_val = "[OMPI devel] RFC: Update master tarballs to latest GNU Autotools";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 10:44:18 2015" -->
<!-- isoreceived="20150330144418" -->
<!-- sent="Mon, 30 Mar 2015 14:44:15 +0000" -->
<!-- isosent="20150330144415" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Update master tarballs to latest GNU Autotools" -->
<!-- id="5A16827C-2434-47B9-8725-3E57AF01CFD0_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Update master tarballs to latest GNU Autotools<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-30 10:44:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17178.php">Rolf vandeVaart: "[OMPI devel] Problems with some IBM neighbor tests"</a>
<li><strong>Previous message:</strong> <a href="17176.php">Nathan Hjelm: "Re: [OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Upgrade GNU Autotools used to build master nightly tarballs
<br>
<p>WHY: Support newer platforms (e.g., POWER 8)
<br>
<p>WHERE: Build server, build scripts
<br>
<p>TIMEOUT: later this week
<br>
<p>MORE DETAIL:
<br>
<p>Nysal's post on the user's list (<a href="http://www.open-mpi.org/community/lists/users/2015/03/26579.php">http://www.open-mpi.org/community/lists/users/2015/03/26579.php</a>) reminds me that we have an open issue about POWER8 on master/v1.8.
<br>
<p>Now that master has been updated to avoid the embedded libltdl issue, we should be free to upgrade the GNU Autotools requirements on master.
<br>
<p>If no one has any objections, I can update the build system to use the newest rev of the GNU Autotools for master nightly tarballs (v1.8 tarballs will continue using the same GNU Autotools version that they use now).
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17178.php">Rolf vandeVaart: "[OMPI devel] Problems with some IBM neighbor tests"</a>
<li><strong>Previous message:</strong> <a href="17176.php">Nathan Hjelm: "Re: [OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228"</a>
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
