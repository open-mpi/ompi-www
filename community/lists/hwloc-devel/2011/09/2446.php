<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 23 15:33:35 2011" -->
<!-- isoreceived="20110923193335" -->
<!-- sent="Fri, 23 Sep 2011 15:33:30 -0400" -->
<!-- isosent="20110923193330" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845" -->
<!-- id="676373DF-D248-42B3-AC90-AF2B921F7212_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E7CD9B1.5090004_at_inria.fr" -->
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
<strong>Date:</strong> 2011-09-23 15:33:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2447.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Previous message:</strong> <a href="2445.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>In reply to:</strong> <a href="2445.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2447.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Reply:</strong> <a href="2447.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, I was OTP when I sent that, and not fully focused.
<br>
<p>My concern is that this file must be generated via an AC_CONFIG_FILE somewhere, right?  And therefore it must be included in the tarball, etc.
<br>
<p>I guess I'm just a little surprised that it's a .in and not a .am.  Just because we have a Makefile.am doesn't mean that &quot;make dist&quot; has to traverse down there.
<br>
<p>Is there a reason to not have it as an .am?  I don't really care other than uniformity, I think -- if there's just *one* Makefile that's different, it's one more thing that has to be remembered, etc.
<br>
<p><p><p>On Sep 23, 2011, at 3:10 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; It works fine here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's basically similar to tests/embedded/ stuff (all files
</span><br>
<span class="quotelev1">&gt; in the parent EXTRA_DIST, nothing in SUBDIRS so that automake
</span><br>
<span class="quotelev1">&gt; doesn't know about it).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Adding this Makefile.in the list of files that configure has
</span><br>
<span class="quotelev1">&gt; to manage shouldn't be a problem, we already have many .in
</span><br>
<span class="quotelev1">&gt; files that are not Makefile.am.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 23/09/2011 20:59, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Err... is this right?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does &quot;make dist&quot; and friends still work?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 23, 2011, at 2:56 PM, bgoglin_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: bgoglin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2011-09-23 14:56:56 EDT (Fri, 23 Sep 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 3845
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/3845">https://svn.open-mpi.org/trac/hwloc/changeset/3845</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Don't forget the Makefile.in in tests/rename
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's not a .am because we don't want automake to go there
</span><br>
<span class="quotelev3">&gt;&gt;&gt; automatically. We just run things manually, while still
</span><br>
<span class="quotelev3">&gt;&gt;&gt; benefiting from configure srcdir/builddir variables
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Added:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/tests/rename/Makefile.in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Added: trunk/tests/rename/Makefile.in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- (empty file)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/tests/rename/Makefile.in	2011-09-23 14:56:56 EDT (Fri, 23 Sep 2011)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -0,0 +1,37 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +srcdir	=	@srcdir@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +abs_top_srcdir	=	@abs_top_srcdir@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +abs_top_builddir	=	@abs_top_builddir@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +all:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +prepare:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +	@echo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +	@echo &quot;###############################&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +	@echo Enabling renaming in headers...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +	@echo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +	sed	-e '/^#define HWLOC_SYM_TRANSFORM 0/s/0/1/'			\
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +		-e '/^#define HWLOC_SYM_PREFIX hwloc_/s/hwloc_/foobar_/1'	\
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +		-e '/^#define HWLOC_SYM_PREFIX_CAPS HWLOC_/s/HWLOC_/FOOBAR_/2'	\
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +		-i $(abs_top_builddir)/include/hwloc/autogen/config.h $(abs_top_builddir)/include/private/autogen/config.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +missing: prepare
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +	@echo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +	@echo &quot;###########################&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +	@echo Finding missing renaming...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +	@echo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +	cpp $(srcdir)/main.c -I $(abs_top_srcdir)/include -I $(abs_top_builddir)/include \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +		| egrep -i '(^| |\*)hwloc_'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +useless: prepare
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +	@echo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +	@echo &quot;###########################&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +	@echo Finding useless renaming...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +	@echo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +	grep '^#define' $(abs_top_srcdir)/include/hwloc/rename.h \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +		| awk '{print $$2}' \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +		| egrep -v '(HWLOC_RENAME_H|HWLOC_MUNGE_NAME|HWLOC_NAME)' \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +		| while read name ; do \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +			grep $$name -rwH $(abs_top_srcdir)/include/ \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +			| grep -v rename.h: | grep -v .svn &gt;/dev/null \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +			|| echo $$name; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +			done
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
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
<li><strong>Next message:</strong> <a href="2447.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Previous message:</strong> <a href="2445.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>In reply to:</strong> <a href="2445.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2447.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Reply:</strong> <a href="2447.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
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
