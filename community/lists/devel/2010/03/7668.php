<?
$subject_val = "[OMPI devel] Increased AM/AC/LT versions";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 26 17:09:06 2010" -->
<!-- isoreceived="20100326210906" -->
<!-- sent="Fri, 26 Mar 2010 17:09:00 -0400" -->
<!-- isosent="20100326210900" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Increased AM/AC/LT versions" -->
<!-- id="E11A8912-F8FC-4D4C-9AFB-786A3E6C8A12_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201003262103.o2QL3po0015375_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Increased AM/AC/LT versions<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-26 17:09:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7669.php">Abhishek Kulkarni: "[OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Previous message:</strong> <a href="7667.php">luyang dong: "[OMPI devel] The feature of openmpi1.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is done!
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: March 26, 2010 5:03:51 PM EDT
</span><br>
<span class="quotelev1">&gt; To: &lt;svn-full_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI svn-full] svn:open-mpi r22896
</span><br>
<span class="quotelev1">&gt; Reply-To: &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2010-03-26 17:03:50 EDT (Fri, 26 Mar 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 22896
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/22896">https://svn.open-mpi.org/trac/ompi/changeset/22896</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Per RFC initially started here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2010/02/7496.php">http://www.open-mpi.org/community/lists/devel/2010/02/7496.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Increase the required versions of AM, AC, and LT:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  * Autoconf: 2.65
</span><br>
<span class="quotelev1">&gt;  * Automake: 1.11.1
</span><br>
<span class="quotelev1">&gt;  * Libtool: 2.2.6b
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And therefore removed a bunch of patches that we used to apply to make
</span><br>
<span class="quotelev1">&gt; older versions of these tools work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also updated the HACKING document to match these version numbers,
</span><br>
<span class="quotelev1">&gt; specifically mentioned Mercurial in a few places, and removed some
</span><br>
<span class="quotelev1">&gt; outdated language about running autogen.sh in subdirectories.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Removed:
</span><br>
<span class="quotelev1">&gt;    trunk/config/libltdl_dlopen_global.diff
</span><br>
<span class="quotelev1">&gt;    trunk/config/lt-sun-fortran.diff
</span><br>
<span class="quotelev1">&gt;    trunk/config/lt1522-pathCC.diff
</span><br>
<span class="quotelev1">&gt;    trunk/config/lt21a-pathCC.diff
</span><br>
<span class="quotelev1">&gt;    trunk/config/lt224-icc.diff
</span><br>
<span class="quotelev1">&gt;    trunk/config/ltmain_otool.diff
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/HACKING    |    52 +++----------                          
</span><br>
<span class="quotelev1">&gt;    trunk/autogen.sh |   156 ---------------------------------------
</span><br>
<span class="quotelev1">&gt;    2 files changed, 16 insertions(+), 192 deletions(-)
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7669.php">Abhishek Kulkarni: "[OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Previous message:</strong> <a href="7667.php">luyang dong: "[OMPI devel] The feature of openmpi1.5"</a>
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
