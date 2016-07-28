<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 23 15:10:47 2011" -->
<!-- isoreceived="20110923191047" -->
<!-- sent="Fri, 23 Sep 2011 21:10:41 +0200" -->
<!-- isosent="20110923191041" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845" -->
<!-- id="4E7CD9B1.5090004_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="714ABB50-A6A6-49A5-BACE-18039A80CBA2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-23 15:10:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2446.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Previous message:</strong> <a href="2444.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>In reply to:</strong> <a href="2444.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2446.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Reply:</strong> <a href="2446.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It works fine here.
<br>
<p>It's basically similar to tests/embedded/ stuff (all files
<br>
in the parent EXTRA_DIST, nothing in SUBDIRS so that automake
<br>
doesn't know about it).
<br>
<p>Adding this Makefile.in the list of files that configure has
<br>
to manage shouldn't be a problem, we already have many .in
<br>
files that are not Makefile.am.
<br>
<p>Brice
<br>
<p><p><p>Le 23/09/2011 20:59, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Err... is this right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does &quot;make dist&quot; and friends still work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 23, 2011, at 2:56 PM, bgoglin_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: bgoglin
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2011-09-23 14:56:56 EDT (Fri, 23 Sep 2011)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 3845
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/3845">https://svn.open-mpi.org/trac/hwloc/changeset/3845</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Don't forget the Makefile.in in tests/rename
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's not a .am because we don't want automake to go there
</span><br>
<span class="quotelev2">&gt;&gt; automatically. We just run things manually, while still
</span><br>
<span class="quotelev2">&gt;&gt; benefiting from configure srcdir/builddir variables
</span><br>
<span class="quotelev2">&gt;&gt; Added:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/tests/rename/Makefile.in
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Added: trunk/tests/rename/Makefile.in
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- (empty file)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/tests/rename/Makefile.in	2011-09-23 14:56:56 EDT (Fri, 23 Sep 2011)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -0,0 +1,37 @@
</span><br>
<span class="quotelev2">&gt;&gt; +srcdir	=	@srcdir@
</span><br>
<span class="quotelev2">&gt;&gt; +abs_top_srcdir	=	@abs_top_srcdir@
</span><br>
<span class="quotelev2">&gt;&gt; +abs_top_builddir	=	@abs_top_builddir@
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +all:
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +prepare:
</span><br>
<span class="quotelev2">&gt;&gt; +	@echo
</span><br>
<span class="quotelev2">&gt;&gt; +	@echo &quot;###############################&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +	@echo Enabling renaming in headers...
</span><br>
<span class="quotelev2">&gt;&gt; +	@echo
</span><br>
<span class="quotelev2">&gt;&gt; +	sed	-e '/^#define HWLOC_SYM_TRANSFORM 0/s/0/1/'			\
</span><br>
<span class="quotelev2">&gt;&gt; +		-e '/^#define HWLOC_SYM_PREFIX hwloc_/s/hwloc_/foobar_/1'	\
</span><br>
<span class="quotelev2">&gt;&gt; +		-e '/^#define HWLOC_SYM_PREFIX_CAPS HWLOC_/s/HWLOC_/FOOBAR_/2'	\
</span><br>
<span class="quotelev2">&gt;&gt; +		-i $(abs_top_builddir)/include/hwloc/autogen/config.h $(abs_top_builddir)/include/private/autogen/config.h
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +missing: prepare
</span><br>
<span class="quotelev2">&gt;&gt; +	@echo
</span><br>
<span class="quotelev2">&gt;&gt; +	@echo &quot;###########################&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +	@echo Finding missing renaming...
</span><br>
<span class="quotelev2">&gt;&gt; +	@echo
</span><br>
<span class="quotelev2">&gt;&gt; +	cpp $(srcdir)/main.c -I $(abs_top_srcdir)/include -I $(abs_top_builddir)/include \
</span><br>
<span class="quotelev2">&gt;&gt; +		| egrep -i '(^| |\*)hwloc_'
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +useless: prepare
</span><br>
<span class="quotelev2">&gt;&gt; +	@echo
</span><br>
<span class="quotelev2">&gt;&gt; +	@echo &quot;###########################&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +	@echo Finding useless renaming...
</span><br>
<span class="quotelev2">&gt;&gt; +	@echo
</span><br>
<span class="quotelev2">&gt;&gt; +	grep '^#define' $(abs_top_srcdir)/include/hwloc/rename.h \
</span><br>
<span class="quotelev2">&gt;&gt; +		| awk '{print $$2}' \
</span><br>
<span class="quotelev2">&gt;&gt; +		| egrep -v '(HWLOC_RENAME_H|HWLOC_MUNGE_NAME|HWLOC_NAME)' \
</span><br>
<span class="quotelev2">&gt;&gt; +		| while read name ; do \
</span><br>
<span class="quotelev2">&gt;&gt; +			grep $$name -rwH $(abs_top_srcdir)/include/ \
</span><br>
<span class="quotelev2">&gt;&gt; +			| grep -v rename.h: | grep -v .svn &gt;/dev/null \
</span><br>
<span class="quotelev2">&gt;&gt; +			|| echo $$name; \
</span><br>
<span class="quotelev2">&gt;&gt; +			done
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2446.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Previous message:</strong> <a href="2444.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>In reply to:</strong> <a href="2444.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2446.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Reply:</strong> <a href="2446.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
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
