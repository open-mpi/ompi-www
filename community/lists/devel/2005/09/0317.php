<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep  6 05:35:30 2005" -->
<!-- isoreceived="20050906103530" -->
<!-- sent="Tue, 6 Sep 2005 06:35:23 -0400" -->
<!-- isosent="20050906103523" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Small ltdl use update" -->
<!-- id="15dc94d78f4dd2a76b378e59175df251_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050905083918.GF26863_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-06 05:35:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0318.php">John Ryan: "error in ompi/mca/rcache/rb/rcache_rb_mru.c"</a>
<li><strong>Previous message:</strong> <a href="0316.php">Ralf Wildenhues: "Re:  Small ltdl use update"</a>
<li><strong>In reply to:</strong> <a href="0316.php">Ralf Wildenhues: "Re:  Small ltdl use update"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Got it -- thanks!
<br>
<p>On Sep 5, 2005, at 4:39 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Jeff Squyres wrote on Thu, Sep 01, 2005 at 02:45:41PM CEST:
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 31, 2005, at 7:46 AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Please apply the first patch (or a similar solution) to include
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ltdl.h directly.  This is both how it's documented and how
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it will work with Libtool 1.5.x and 2.x: the latter has other
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; included files, which live one directory level further down
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Done, thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I missed another instance of this (exposed by &quot;make check&quot;), sorry.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Per our other thread, I've updated all of this -- please let me know 
</span><br>
<span class="quotelev2">&gt;&gt; if
</span><br>
<span class="quotelev2">&gt;&gt; you find any problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All fine except for one test that also seems to need this below (or an
</span><br>
<span class="quotelev1">&gt; equivalent fix):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: test/mca/schema/Makefile.am
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- test/mca/schema/Makefile.am	(revision 7180)
</span><br>
<span class="quotelev1">&gt; +++ test/mca/schema/Makefile.am	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -17,6 +17,8 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  include $(top_srcdir)/test/support/Makefile.options
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +AM_CPPFLAGS += -I$(top_srcdir)/opal/libltdl
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  check_PROGRAMS = \
</span><br>
<span class="quotelev1">&gt;  	test_schema
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0318.php">John Ryan: "error in ompi/mca/rcache/rb/rcache_rb_mru.c"</a>
<li><strong>Previous message:</strong> <a href="0316.php">Ralf Wildenhues: "Re:  Small ltdl use update"</a>
<li><strong>In reply to:</strong> <a href="0316.php">Ralf Wildenhues: "Re:  Small ltdl use update"</a>
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
