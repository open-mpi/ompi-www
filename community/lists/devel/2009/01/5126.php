<?
$subject_val = "Re: [OMPI devel] Open MPI v1.3rc3 has been posted";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 08:06:49 2009" -->
<!-- isoreceived="20090113130649" -->
<!-- sent="Tue, 13 Jan 2009 08:06:42 -0500" -->
<!-- isosent="20090113130642" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI v1.3rc3 has been posted" -->
<!-- id="F126758C-F88A-47CF-B10A-C3D9C021507B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="496C72E3.1010701_at_itwm.fraunhofer.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI v1.3rc3 has been posted<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-13 08:06:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5127.php">Jeff Squyres: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<li><strong>Previous message:</strong> <a href="5125.php">Alex A. Granovsky: "[OMPI devel] OpenMPI question"</a>
<li><strong>In reply to:</strong> <a href="5123.php">Gregor Dschung: "Re: [OMPI devel] Open MPI v1.3rc3 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5132.php">Bogdan Costescu: "Re: [OMPI devel] Open MPI v1.3rc3 has been posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's the diff from the NEWS files in the two tarballs (note that  
<br>
some of the items are listed in the [unreleased] 1.2.9 section,  
<br>
meaning that the fixes were applied to both the 1.2 series and 1.3):
<br>
<p>--- openmpi-1.3rc2/NEWS	2008-12-02 13:50:46.000000000 -0500
<br>
+++ openmpi-1.3rc3/NEWS	2009-01-09 12:55:22.000000000 -0500
<br>
@@ -29,6 +29,9 @@
<br>
&nbsp;&nbsp;1.3 (not released yet)
<br>
&nbsp;&nbsp;---
<br>
<p>+- Extended the OS X 10.5.x (Leopard) workaround for a problem when
<br>
+  assembly code is compiled with -g[0-9].  Thanks to Barry Smith for
<br>
+  reporting the problem.  See ticket #1701.
<br>
&nbsp;&nbsp;- Disabled MPI_REAL16 and MPI_COMPLEX32 support on platforms where the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;bit representation of REAL*16 is different than that of the C type
<br>
&nbsp;&nbsp;&nbsp;&nbsp;of the same size (usually long double).  Thanks to Julien Devriendt
<br>
@@ -106,6 +109,17 @@
<br>
&nbsp;&nbsp;1.2.9 (unreleased)
<br>
&nbsp;&nbsp;------------------
<br>
<p>+- Fix a segfault when using one-sided communications on some forms of  
<br>
derived
<br>
+  datatypes.  Thanks to Dorian Krause for reporting the bug. See #1715.
<br>
+- Fix an alignment problem affecting one-sided communications on
<br>
+  some architectures (e.g., SPARC64). See #1738.
<br>
+- Fix compilation on Solaris when thread support is enabled in Open MPI
<br>
+  (e.g., when using --with-threads). See #1736.
<br>
+- Correctly take into account the MTU that an OpenFabrics device port
<br>
+  is using. See #1722 and
<br>
+  <a href="https://bugs.openfabrics.org/show_bug.cgi?id=1369">https://bugs.openfabrics.org/show_bug.cgi?id=1369</a>.
<br>
+- Fix two datatype engine bugs. See #1677.
<br>
+  Thanks to Peter Kjellstrom for the bugreport.
<br>
&nbsp;&nbsp;- Fix the bml r2 help filename so the help message can be found. See  
<br>
#1623.
<br>
&nbsp;&nbsp;- Fix a compilation problem on RHEL4U3 with the PGI 32 bit compiler
<br>
&nbsp;&nbsp;&nbsp;&nbsp;caused by &lt;infiniband/driver.h&gt;.  See ticket #1613.
<br>
<p><p><p>On Jan 13, 2009, at 5:54 AM, Gregor Dschung wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; could you please outline the changes between RC2 and RC3?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Gregor
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;third&quot; release candidate of v1.3 is now up on the website:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.3/">http://www.open-mpi.org/software/ompi/v1.3/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please run it through it's paces as best you can
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5127.php">Jeff Squyres: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<li><strong>Previous message:</strong> <a href="5125.php">Alex A. Granovsky: "[OMPI devel] OpenMPI question"</a>
<li><strong>In reply to:</strong> <a href="5123.php">Gregor Dschung: "Re: [OMPI devel] Open MPI v1.3rc3 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5132.php">Bogdan Costescu: "Re: [OMPI devel] Open MPI v1.3rc3 has been posted"</a>
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
