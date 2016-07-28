<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 19 16:41:12 2010" -->
<!-- isoreceived="20100219214112" -->
<!-- sent="Fri, 19 Feb 2010 16:40:59 -0500" -->
<!-- isosent="20100219214059" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663" -->
<!-- id="20100219214059.GB18477_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3D303E36-B14C-4A92-A197-736F6DE4AE9D_at_cisco.com" -->
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
<strong>Date:</strong> 2010-02-19 16:40:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7466.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Previous message:</strong> <a href="7464.php">Ralph Castain: "[OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7459.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Feb/18/2010 01:16:33PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Feb 18, 2010, at 1:12 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; About this change - I have been seeing the below error while trying to
</span><br>
<span class="quotelev2">&gt; &gt; build the trunk recently:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   $ make ...
</span><br>
<span class="quotelev2">&gt; &gt;   cd . &amp;&amp; /bin/bash /tmp/config-missing-bug-in-trunk/trunk/config/missing --run aclocal-1.10 -I config
</span><br>
<span class="quotelev2">&gt; &gt;   configure.ac:939: warning: OMPI_CONFIGURE_SETUP is m4_require'd but not m4_defun'd
</span><br>
<span class="quotelev2">&gt; &gt;   config/ompi_mca.m4:37: OMPI_MCA is expanded from...
</span><br>
<span class="quotelev2">&gt; &gt;   configure.ac:939: the top level
</span><br>
<span class="quotelev2">&gt; &gt;    cd . &amp;&amp; /bin/bash /tmp/config-missing-bug-in-trunk/trunk/config/missing --run automake-1.10 --foreign
</span><br>
<span class="quotelev2">&gt; &gt;   configure.ac:939: warning: OMPI_CONFIGURE_SETUP is m4_require'd but not m4_defun'd
</span><br>
<span class="quotelev2">&gt; &gt;   ...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; While fixing ACLOCAL_AMFLAGS gets the build to complete successfully,
</span><br>
<span class="quotelev2">&gt; &gt; the real issue is: why is config/missing getting immediately invoked
</span><br>
<span class="quotelev2">&gt; &gt; by &quot;make&quot;?  This wasn't happening before, and it means configure is
</span><br>
<span class="quotelev2">&gt; &gt; getting run twice per build now.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Any ideas what could be causing this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No -- it should not be happening.  I'd think that those extra -I's shouldn't be necessary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Check the usual suspects, such as time synchronization between NFS client and server, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might also want to run &quot;make -d&quot; to see what rules are being invoked and why.
</span><br>
<p>make -d shows the problem:
<br>
<p>&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;Prerequisite `config/libtool.m4' is newer than target `aclocal.m4'.
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;Must remake target `aclocal.m4'.
<br>
&nbsp;&nbsp;...
<br>
<p>This occurs because autogen.sh patches aclocal.m4 before patching
<br>
libtool.m4.  I don't know why we're suddenly seeing this now, but this
<br>
vile hack fixes it:
<br>
<p>Index: autogen.sh
<br>
===================================================================
<br>
--- autogen.sh
<br>
+++ autogen.sh
<br>
@@ -594,6 +594,9 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm -f libtool.m4.rej
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;
<br>
+    # Ensure libtool.m4 is very old so that make does not rebuild aclocal.m4
<br>
+    touch -t 197001010000.00 config/libtool.m4
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;run_and_check $ompi_autoconf
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;run_and_check $ompi_automake --foreign -a --copy --include-deps
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7466.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Previous message:</strong> <a href="7464.php">Ralph Castain: "[OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7459.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663"</a>
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
