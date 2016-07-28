<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 18 13:16:38 2010" -->
<!-- isoreceived="20100218181638" -->
<!-- sent="Thu, 18 Feb 2010 13:16:33 -0500" -->
<!-- isosent="20100218181633" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663" -->
<!-- id="3D303E36-B14C-4A92-A197-736F6DE4AE9D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100218181253.GA18482_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-18 13:16:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7460.php">Ralph Castain: "[OMPI devel] Modex-less launch"</a>
<li><strong>Previous message:</strong> <a href="7458.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663"</a>
<li><strong>In reply to:</strong> <a href="7458.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7465.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663"</a>
<li><strong>Reply:</strong> <a href="7465.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 18, 2010, at 1:12 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; About this change - I have been seeing the below error while trying to
</span><br>
<span class="quotelev1">&gt; build the trunk recently:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   $ make ...
</span><br>
<span class="quotelev1">&gt;   cd . &amp;&amp; /bin/bash /tmp/config-missing-bug-in-trunk/trunk/config/missing --run aclocal-1.10 -I config
</span><br>
<span class="quotelev1">&gt;   configure.ac:939: warning: OMPI_CONFIGURE_SETUP is m4_require'd but not m4_defun'd
</span><br>
<span class="quotelev1">&gt;   config/ompi_mca.m4:37: OMPI_MCA is expanded from...
</span><br>
<span class="quotelev1">&gt;   configure.ac:939: the top level
</span><br>
<span class="quotelev1">&gt;    cd . &amp;&amp; /bin/bash /tmp/config-missing-bug-in-trunk/trunk/config/missing --run automake-1.10 --foreign
</span><br>
<span class="quotelev1">&gt;   configure.ac:939: warning: OMPI_CONFIGURE_SETUP is m4_require'd but not m4_defun'd
</span><br>
<span class="quotelev1">&gt;   ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While fixing ACLOCAL_AMFLAGS gets the build to complete successfully,
</span><br>
<span class="quotelev1">&gt; the real issue is: why is config/missing getting immediately invoked
</span><br>
<span class="quotelev1">&gt; by &quot;make&quot;?  This wasn't happening before, and it means configure is
</span><br>
<span class="quotelev1">&gt; getting run twice per build now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas what could be causing this?
</span><br>
<p>No -- it should not be happening.  I'd think that those extra -I's shouldn't be necessary.
<br>
<p>Check the usual suspects, such as time synchronization between NFS client and server, etc.
<br>
<p>You might also want to run &quot;make -d&quot; to see what rules are being invoked and why.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="7460.php">Ralph Castain: "[OMPI devel] Modex-less launch"</a>
<li><strong>Previous message:</strong> <a href="7458.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663"</a>
<li><strong>In reply to:</strong> <a href="7458.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7465.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663"</a>
<li><strong>Reply:</strong> <a href="7465.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663"</a>
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
