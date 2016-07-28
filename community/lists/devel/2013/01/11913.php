<?
$subject_val = "Re: [OMPI devel] [OMPI users] Backward Compatibility of MPI Java Binding";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  9 22:29:05 2013" -->
<!-- isoreceived="20130110032905" -->
<!-- sent="Thu, 10 Jan 2013 12:30:43 +0900" -->
<!-- isosent="20130110033043" -->
<!-- name="Yoshiki SATO" -->
<!-- email="yoshiki_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] Backward Compatibility of MPI Java Binding" -->
<!-- id="6DF063E9-EA08-41AC-8426-8A18AA04DB15_at_ci.i.u-tokyo.ac.jp" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC380AF2F9_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] Backward Compatibility of MPI Java Binding<br>
<strong>From:</strong> Yoshiki SATO (<em>yoshiki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-09 22:30:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11914.php">George Bosilca: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="11912.php">Ralph Castain: "Re: [OMPI devel] Build open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11915.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Backward Compatibility of MPI Java	Binding"</a>
<li><strong>Reply:</strong> <a href="11915.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Backward Compatibility of MPI Java	Binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your suggestion.  I resend my question here.
<br>
<p><span class="quotelev1">&gt; it's just something that happened over time (our methodology is that we branch away from the main development trunk and then only selectively apply patches from the main trunk to the release branch over time).
</span><br>
<p>The 1.7's Java implementation under ompi/mpi/java seem to be able to build up independently.  Do you think we can build just them and run it (via prunjava?) with our custom OpenMPI build based on 1.6?
<br>
<p>Regards,
<br>
--yoshiki
<br>
<p>On 2013/01/10, at 2:38, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 8, 2013, at 3:23 AM, Yoshiki SATO &lt;yoshiki_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Could you let me know the details of that?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We don't have a technical writeup of what changed in the configure/build system between the two; it's just something that happened over time (our methodology is that we branch away from the main development trunk and then only selectively apply patches from the main trunk to the release branch over time).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The differences between the configure/build system between v1.6 and the SVN trunk are now fairly large, for example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - trunk uses autogen.pl; v1.6 uses autogen.sh
</span><br>
<span class="quotelev1">&gt; - trunk uses many more &lt;project&gt;_ prefixes (but not all) to m4 macros; v1.6 doesn't
</span><br>
<span class="quotelev1">&gt; - trunk has most .m4 files in config/; v1.6 distributes them around config/ and &lt;project&gt;/config/ directories
</span><br>
<span class="quotelev1">&gt; - trunk has different requirements for each 
</span><br>
<span class="quotelev1">&gt; - many global shell variable names have changed between trunk and v1.6
</span><br>
<span class="quotelev1">&gt; - Fortran support, for example, was completely revamped on the trunk, and has very, very different .m4 tests than v1.6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think the subsystems you'll have to update to port the Java interface to the v1.6 branch include (this is more-or-less off the top of my head; it is likely not all-inclusive):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - update configure.ac
</span><br>
<span class="quotelev1">&gt; - port ompi_setup_java.m4 and orte_setup_java.m4
</span><br>
<span class="quotelev1">&gt; - port ompi/mpi/java
</span><br>
<span class="quotelev1">&gt; - update ompi/Makefile.am
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you endeavor to do this and need some help, please ask questions over on the devel list (not the user's list).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The MPI Java binding being developed on the 1.7 pre-release.  Is it possible to merge it with 1.5 or 1.6 releases?
</span><br>
<span class="quotelev2">&gt;&gt; Our OpenMPI installation has large modifications to adopt specific network channels.  Thus, it would be happy to work the MPI Java binding even with old OpenMPI binaries/libraries.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot for any comment in advance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; --yoshiki
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11914.php">George Bosilca: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="11912.php">Ralph Castain: "Re: [OMPI devel] Build open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11915.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Backward Compatibility of MPI Java	Binding"</a>
<li><strong>Reply:</strong> <a href="11915.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Backward Compatibility of MPI Java	Binding"</a>
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
