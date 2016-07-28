<?
$subject_val = "[OMPI users] Open MPI v1.4 release: explanation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 17:29:12 2009" -->
<!-- isoreceived="20091208222912" -->
<!-- sent="Tue, 8 Dec 2009 17:29:07 -0500" -->
<!-- isosent="20091208222907" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI v1.4 release: explanation" -->
<!-- id="8ECB7572-F969-4052-A05D-13E6D80848A5_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI v1.4 release: explanation<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-08 17:29:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11461.php">Tim Prince: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>Previous message:</strong> <a href="11459.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners is just about to release Open MPI version 1.4 in reaction to the GNU Libtool 2.2.6b security update release (see <a href="http://security-tracker.debian.org/tracker/CVE-2009-3736">http://security-tracker.debian.org/tracker/CVE-2009-3736</a> for more details).
<br>
<p>This mail contains a few more details than the upcoming v1.4 announcement mail.
<br>
<p>The Open MPI v1.4 release closes a potential security vulnerability associated with the embedded version of GNU Libtool used in the Open MPI v1.3.x series.  The *only* change between Open MPI v1.3.4 and Open MPI v1.4 is that we used GNU Libtool 2.2.6b to build Open MPI v1.4, thereby updating Open MPI's embedded copy of the &quot;libltdl&quot; library.
<br>
<p>*** NOTE: We feel that this GNU Libtool libltdl vulnerability has
<br>
&nbsp;&nbsp;&nbsp;&nbsp;minimal/trivial impact on Open MPI, but are releasing v1.4 with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the update for the following reasons:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;- It is a convenient excuse to transition the v1.3 &quot;feature
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;release&quot; series in to the v1.4 &quot;stable/bug fix&quot; series.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- It serves to encourage all v1.2[.x] users to upgrade to the v1.4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;series.
<br>
<p>Note that the GNU Libtool libltdl problem extends back quite a few versions, and affects multiple Open MPI versions:
<br>
<p>&nbsp;- v1.0 series: This series is ancient and no longer maintained.
<br>
&nbsp;- v1.1 series: This series is ancient and no longer maintained.
<br>
&nbsp;- v1.2 series: Until today, the v1.2 series was technically the
<br>
&nbsp;&nbsp;&nbsp;stable release.  However, the majority of Open MPI users are
<br>
&nbsp;&nbsp;&nbsp;already using the v1.3 series.  As such, there are currently no
<br>
&nbsp;&nbsp;&nbsp;plans to patch the v1.2 series.
<br>
&nbsp;- v1.3 series: As of today, this series has formally transitioned to
<br>
&nbsp;&nbsp;&nbsp;the v1.4 series; no more releases will be made.
<br>
&nbsp;- v1.4 series: First release today.
<br>
<p>As mentioned above, v1.2[.x] users are encouraged to upgrade to the v1.4 release.  If you cannot upgrade to v1.4 but need the security fix, please send a note to the Open MPI user's list to help us gauge the demand for a v1.2.10 release.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11461.php">Tim Prince: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>Previous message:</strong> <a href="11459.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
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
