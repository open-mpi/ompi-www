<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 23 14:59:19 2011" -->
<!-- isoreceived="20110923185919" -->
<!-- sent="Fri, 23 Sep 2011 14:59:14 -0400" -->
<!-- isosent="20110923185914" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845" -->
<!-- id="714ABB50-A6A6-49A5-BACE-18039A80CBA2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201109231856.p8NIuukj020013_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-23 14:59:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2445.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Previous message:</strong> <a href="2443.php">Ralph Castain: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2445.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Reply:</strong> <a href="2445.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Err... is this right?
<br>
<p>Does &quot;make dist&quot; and friends still work?
<br>
<p><p>On Sep 23, 2011, at 2:56 PM, bgoglin_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bgoglin
</span><br>
<span class="quotelev1">&gt; Date: 2011-09-23 14:56:56 EDT (Fri, 23 Sep 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 3845
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/3845">https://svn.open-mpi.org/trac/hwloc/changeset/3845</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Don't forget the Makefile.in in tests/rename
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's not a .am because we don't want automake to go there
</span><br>
<span class="quotelev1">&gt; automatically. We just run things manually, while still
</span><br>
<span class="quotelev1">&gt; benefiting from configure srcdir/builddir variables
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;   trunk/tests/rename/Makefile.in
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Added: trunk/tests/rename/Makefile.in
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- (empty file)
</span><br>
<span class="quotelev1">&gt; +++ trunk/tests/rename/Makefile.in	2011-09-23 14:56:56 EDT (Fri, 23 Sep 2011)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,37 @@
</span><br>
<span class="quotelev1">&gt; +srcdir	=	@srcdir@
</span><br>
<span class="quotelev1">&gt; +abs_top_srcdir	=	@abs_top_srcdir@
</span><br>
<span class="quotelev1">&gt; +abs_top_builddir	=	@abs_top_builddir@
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +all:
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +prepare:
</span><br>
<span class="quotelev1">&gt; +	@echo
</span><br>
<span class="quotelev1">&gt; +	@echo &quot;###############################&quot;
</span><br>
<span class="quotelev1">&gt; +	@echo Enabling renaming in headers...
</span><br>
<span class="quotelev1">&gt; +	@echo
</span><br>
<span class="quotelev1">&gt; +	sed	-e '/^#define HWLOC_SYM_TRANSFORM 0/s/0/1/'			\
</span><br>
<span class="quotelev1">&gt; +		-e '/^#define HWLOC_SYM_PREFIX hwloc_/s/hwloc_/foobar_/1'	\
</span><br>
<span class="quotelev1">&gt; +		-e '/^#define HWLOC_SYM_PREFIX_CAPS HWLOC_/s/HWLOC_/FOOBAR_/2'	\
</span><br>
<span class="quotelev1">&gt; +		-i $(abs_top_builddir)/include/hwloc/autogen/config.h $(abs_top_builddir)/include/private/autogen/config.h
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +missing: prepare
</span><br>
<span class="quotelev1">&gt; +	@echo
</span><br>
<span class="quotelev1">&gt; +	@echo &quot;###########################&quot;
</span><br>
<span class="quotelev1">&gt; +	@echo Finding missing renaming...
</span><br>
<span class="quotelev1">&gt; +	@echo
</span><br>
<span class="quotelev1">&gt; +	cpp $(srcdir)/main.c -I $(abs_top_srcdir)/include -I $(abs_top_builddir)/include \
</span><br>
<span class="quotelev1">&gt; +		| egrep -i '(^| |\*)hwloc_'
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +useless: prepare
</span><br>
<span class="quotelev1">&gt; +	@echo
</span><br>
<span class="quotelev1">&gt; +	@echo &quot;###########################&quot;
</span><br>
<span class="quotelev1">&gt; +	@echo Finding useless renaming...
</span><br>
<span class="quotelev1">&gt; +	@echo
</span><br>
<span class="quotelev1">&gt; +	grep '^#define' $(abs_top_srcdir)/include/hwloc/rename.h \
</span><br>
<span class="quotelev1">&gt; +		| awk '{print $$2}' \
</span><br>
<span class="quotelev1">&gt; +		| egrep -v '(HWLOC_RENAME_H|HWLOC_MUNGE_NAME|HWLOC_NAME)' \
</span><br>
<span class="quotelev1">&gt; +		| while read name ; do \
</span><br>
<span class="quotelev1">&gt; +			grep $$name -rwH $(abs_top_srcdir)/include/ \
</span><br>
<span class="quotelev1">&gt; +			| grep -v rename.h: | grep -v .svn &gt;/dev/null \
</span><br>
<span class="quotelev1">&gt; +			|| echo $$name; \
</span><br>
<span class="quotelev1">&gt; +			done
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
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
<li><strong>Next message:</strong> <a href="2445.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Previous message:</strong> <a href="2443.php">Ralph Castain: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2445.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Reply:</strong> <a href="2445.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
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
