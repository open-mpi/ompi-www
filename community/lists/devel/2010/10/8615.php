<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23931";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 25 13:53:13 2010" -->
<!-- isoreceived="20101025175313" -->
<!-- sent="Mon, 25 Oct 2010 13:53:04 -0400" -->
<!-- isosent="20101025175304" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r23931" -->
<!-- id="88BA1BDD-BDB4-4596-A1DC-7632CE69B839_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201010251453.o9PErYD2012959_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r23931<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-25 13:53:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8616.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23931"</a>
<li><strong>Previous message:</strong> <a href="8614.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (15)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8616.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23931"</a>
<li><strong>Reply:</strong> <a href="8616.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23931"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph, 
<br>
<p>In file included from ../../../../../trunk/opal/mca/event/libevent207/libevent207_module.c:44:
<br>
../../../../../trunk/opal/mca/event/libevent207/libevent/event.h:165:33: error: event2/event-config.h: No such file or directory
<br>
<p><p>Looks like you forgot some files. 
<br>
<p>Aurelien 
<br>
<p><p>Le 25 oct. 2010 &#224; 10:53, rhc_at_[hidden] a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Author: rhc
</span><br>
<span class="quotelev1">&gt; Date: 2010-10-25 10:53:33 EDT (Mon, 25 Oct 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 23931
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/23931">https://svn.open-mpi.org/trac/ompi/changeset/23931</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Remove the sample and test code from the libevent distro - don't need to include them in ompi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Removed:
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/event/libevent207/libevent/sample/
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/event/libevent207/libevent/test/
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/event/libevent207/libevent/Makefile.am  |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/event/libevent207/libevent/configure.in |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;   2 files changed, 2 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/event/libevent207/libevent/Makefile.am
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/event/libevent207/libevent/Makefile.am	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/event/libevent207/libevent/Makefile.am	2010-10-25 10:53:33 EDT (Mon, 25 Oct 2010)
</span><br>
<span class="quotelev1">&gt; @@ -85,7 +85,7 @@
</span><br>
<span class="quotelev1">&gt; 	libevent.pc.in \
</span><br>
<span class="quotelev1">&gt; 	Doxyfile \
</span><br>
<span class="quotelev1">&gt; 	whatsnew-2.0.txt \
</span><br>
<span class="quotelev1">&gt; -	Makefile.nmake test/Makefile.nmake \
</span><br>
<span class="quotelev1">&gt; +	Makefile.nmake \
</span><br>
<span class="quotelev1">&gt; 	$(PLATFORM_DEPENDENT_SRC)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # OMPI: Changed to noinst and libevent.la
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/event/libevent207/libevent/configure.in
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/event/libevent207/libevent/configure.in	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/event/libevent207/libevent/configure.in	2010-10-25 10:53:33 EDT (Mon, 25 Oct 2010)
</span><br>
<span class="quotelev1">&gt; @@ -838,4 +838,4 @@
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AC_CONFIG_FILES( [libevent.pc libevent_openssl.pc libevent_pthreads.pc] )
</span><br>
<span class="quotelev1">&gt; -AC_OUTPUT(Makefile include/Makefile test/Makefile sample/Makefile)
</span><br>
<span class="quotelev1">&gt; +AC_OUTPUT(Makefile include/Makefile)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8616.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23931"</a>
<li><strong>Previous message:</strong> <a href="8614.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (15)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8616.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23931"</a>
<li><strong>Reply:</strong> <a href="8616.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23931"</a>
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
