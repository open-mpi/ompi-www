<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep  5 03:39:21 2005" -->
<!-- isoreceived="20050905083921" -->
<!-- sent="Mon, 5 Sep 2005 10:39:18 +0200" -->
<!-- isosent="20050905083918" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  Small ltdl use update" -->
<!-- id="20050905083918.GF26863_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="f07d35997652abecc57f2d02595ac9e9_at_open-mpi.org" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-05 03:39:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0317.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
<li><strong>Previous message:</strong> <a href="0315.php">Rich L. Graham: "Re:  pml vs bml vs btl"</a>
<li><strong>In reply to:</strong> <a href="0287.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0317.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
<li><strong>Reply:</strong> <a href="0317.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>* Jeff Squyres wrote on Thu, Sep 01, 2005 at 02:45:41PM CEST:
<br>
<span class="quotelev1">&gt; On Aug 31, 2005, at 7:46 AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Please apply the first patch (or a similar solution) to include
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ltdl.h directly.  This is both how it's documented and how
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; it will work with Libtool 1.5.x and 2.x: the latter has other
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; included files, which live one directory level further down
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Done, thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I missed another instance of this (exposed by &quot;make check&quot;), sorry.
</span><br>
<span class="quotelev2">&gt; &gt; See below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Per our other thread, I've updated all of this -- please let me know if 
</span><br>
<span class="quotelev1">&gt; you find any problems.
</span><br>
<p>All fine except for one test that also seems to need this below (or an
<br>
equivalent fix):
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>Index: test/mca/schema/Makefile.am
<br>
===================================================================
<br>
--- test/mca/schema/Makefile.am	(revision 7180)
<br>
+++ test/mca/schema/Makefile.am	(working copy)
<br>
@@ -17,6 +17,8 @@
<br>
&nbsp;
<br>
&nbsp;include $(top_srcdir)/test/support/Makefile.options
<br>
&nbsp;
<br>
+AM_CPPFLAGS += -I$(top_srcdir)/opal/libltdl
<br>
+
<br>
&nbsp;check_PROGRAMS = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test_schema
<br>
&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0317.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
<li><strong>Previous message:</strong> <a href="0315.php">Rich L. Graham: "Re:  pml vs bml vs btl"</a>
<li><strong>In reply to:</strong> <a href="0287.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0317.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
<li><strong>Reply:</strong> <a href="0317.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
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
