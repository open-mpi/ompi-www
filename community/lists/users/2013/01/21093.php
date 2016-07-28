<?
$subject_val = "Re: [OMPI users] Backward Compatibility of MPI Java Binding";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  9 12:38:24 2013" -->
<!-- isoreceived="20130109173824" -->
<!-- sent="Wed, 9 Jan 2013 17:38:19 +0000" -->
<!-- isosent="20130109173819" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Backward Compatibility of MPI Java Binding" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC380AF2F9_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="14551023-C514-4021-A7D0-B64D41487622_at_ci.i.u-tokyo.ac.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Backward Compatibility of MPI Java Binding<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-09 12:38:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21094.php">Kumar, Sudhir: "[OMPI users] Open MPI error in Windows"</a>
<li><strong>Previous message:</strong> <a href="21092.php">Jeff Squyres (jsquyres): "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>In reply to:</strong> <a href="21087.php">Yoshiki SATO: "Re: [OMPI users] Backward Compatibility of MPI Java Binding"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 8, 2013, at 3:23 AM, Yoshiki SATO &lt;yoshiki_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Could you let me know the details of that?  
</span><br>
<p>We don't have a technical writeup of what changed in the configure/build system between the two; it's just something that happened over time (our methodology is that we branch away from the main development trunk and then only selectively apply patches from the main trunk to the release branch over time).
<br>
<p>The differences between the configure/build system between v1.6 and the SVN trunk are now fairly large, for example:
<br>
<p>- trunk uses autogen.pl; v1.6 uses autogen.sh
<br>
- trunk uses many more &lt;project&gt;_ prefixes (but not all) to m4 macros; v1.6 doesn't
<br>
- trunk has most .m4 files in config/; v1.6 distributes them around config/ and &lt;project&gt;/config/ directories
<br>
- trunk has different requirements for each 
<br>
- many global shell variable names have changed between trunk and v1.6
<br>
- Fortran support, for example, was completely revamped on the trunk, and has very, very different .m4 tests than v1.6
<br>
<p>I think the subsystems you'll have to update to port the Java interface to the v1.6 branch include (this is more-or-less off the top of my head; it is likely not all-inclusive):
<br>
<p>- update configure.ac
<br>
- port ompi_setup_java.m4 and orte_setup_java.m4
<br>
- port ompi/mpi/java
<br>
- update ompi/Makefile.am
<br>
<p>If you endeavor to do this and need some help, please ask questions over on the devel list (not the user's list).
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
<li><strong>Next message:</strong> <a href="21094.php">Kumar, Sudhir: "[OMPI users] Open MPI error in Windows"</a>
<li><strong>Previous message:</strong> <a href="21092.php">Jeff Squyres (jsquyres): "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>In reply to:</strong> <a href="21087.php">Yoshiki SATO: "Re: [OMPI users] Backward Compatibility of MPI Java Binding"</a>
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
