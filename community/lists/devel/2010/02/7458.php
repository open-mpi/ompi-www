<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 18 13:12:58 2010" -->
<!-- isoreceived="20100218181258" -->
<!-- sent="Thu, 18 Feb 2010 13:12:53 -0500" -->
<!-- isosent="20100218181253" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663" -->
<!-- id="20100218181253.GA18482_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201002181811.o1IIBNvL027548_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-18 13:12:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7459.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663"</a>
<li><strong>Previous message:</strong> <a href="7457.php">Jeff Squyres: "[OMPI devel] RFC: pkg-config(1) files for OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7459.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663"</a>
<li><strong>Reply:</strong> <a href="7459.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
About this change - I have been seeing the below error while trying to
<br>
build the trunk recently:
<br>
<p>&nbsp;&nbsp;$ make ...
<br>
&nbsp;&nbsp;cd . &amp;&amp; /bin/bash /tmp/config-missing-bug-in-trunk/trunk/config/missing --run aclocal-1.10 -I config
<br>
&nbsp;&nbsp;configure.ac:939: warning: OMPI_CONFIGURE_SETUP is m4_require'd but not m4_defun'd
<br>
&nbsp;&nbsp;config/ompi_mca.m4:37: OMPI_MCA is expanded from...
<br>
&nbsp;&nbsp;configure.ac:939: the top level
<br>
&nbsp;&nbsp;&nbsp;cd . &amp;&amp; /bin/bash /tmp/config-missing-bug-in-trunk/trunk/config/missing --run automake-1.10 --foreign
<br>
&nbsp;&nbsp;configure.ac:939: warning: OMPI_CONFIGURE_SETUP is m4_require'd but not m4_defun'd
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;ompi/mca/allocator/Makefile.am:31: WANT_INSTALL_HEADERS does not appear in AM_CONDITIONAL
<br>
&nbsp;&nbsp;... repeats 49 times ...
<br>
&nbsp;&nbsp;make: *** [configure] Error 1
<br>
<p>While fixing ACLOCAL_AMFLAGS gets the build to complete successfully,
<br>
the real issue is: why is config/missing getting immediately invoked
<br>
by &quot;make&quot;?  This wasn't happening before, and it means configure is
<br>
getting run twice per build now.
<br>
<p>Any ideas what could be causing this?
<br>
<p>-Ethan
<br>
<p><p>On Thu, Feb/18/2010 01:11:23PM, emallove_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: emallove
</span><br>
<span class="quotelev1">&gt; Date: 2010-02-18 13:11:23 EST (Thu, 18 Feb 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 22663
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/22663">https://svn.open-mpi.org/trac/ompi/changeset/22663</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; In case `config/missing` gets invoked, ensure that all the OMPI-specific m4
</span><br>
<span class="quotelev1">&gt; macros are defined.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/Makefile.am |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;    1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/Makefile.am
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/Makefile.am	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/Makefile.am	2010-02-18 13:11:23 EST (Thu, 18 Feb 2010)
</span><br>
<span class="quotelev1">&gt; @@ -25,4 +25,4 @@
</span><br>
<span class="quotelev1">&gt;  dist-hook:
</span><br>
<span class="quotelev1">&gt;  	csh &quot;$(top_srcdir)/config/distscript.csh&quot; &quot;$(top_srcdir)&quot; &quot;$(distdir)&quot; &quot;$(OMPI_VERSION)&quot; &quot;$(OMPI_SVN_R)&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -ACLOCAL_AMFLAGS = -I config
</span><br>
<span class="quotelev1">&gt; +ACLOCAL_AMFLAGS = -I config -I opal/config -I ompi/config -I orte/config
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7459.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663"</a>
<li><strong>Previous message:</strong> <a href="7457.php">Jeff Squyres: "[OMPI devel] RFC: pkg-config(1) files for OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7459.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663"</a>
<li><strong>Reply:</strong> <a href="7459.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663"</a>
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
