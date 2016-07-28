<?
$subject_val = "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 11 00:55:20 2014" -->
<!-- isoreceived="20140111055520" -->
<!-- sent="Fri, 10 Jan 2014 21:55:03 -0800" -->
<!-- isosent="20140111055503" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD" -->
<!-- id="F4359778-3A3F-4AA6-AA0F-9159E8C1A207_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA15GP-dXTDrWKZ1Ms5ymNi_WEjQAPKJryYgE9KDP5S14Dw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-11 00:55:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13742.php">marco atzeri: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13740.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>In reply to:</strong> <a href="13740.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13645.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know - I decided not to eliminate it due to lack of time, and the fact that it doesn't hurt anything. Will look at performing the surgery later
<br>
<p><p>On Jan 10, 2014, at 9:37 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You applied the CMR for this issue (r30256), but the __WINDOWS__ cruft is all still there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 9, 2014 at 2:36 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; The windows reference is stale on that branch - I'll remove it when applying the cmr. We no longer support native Windows, and never did on the 1.7 series.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 9, 2014, at 2:08 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The changes as described in the commit message make good sense to me except for one thing:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In the 1.7 branch there is still a defined(__WINDOWS__) case for which opal_path_nfs() is currently a no-op .  So, I fear that if CMR'ed blindly both the configure-time and build-time checks to ensure that at least one of statfs() or statvs() will abort the build on Windows.  Maybe Marco can say more on the subject, but I think Cygwin will detect one or both of the stat calls, but opal_path_nfs() will still be a no-op due to the __WINDOWS__ guard.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll be building tonight's trunk tarball on all of my Solaris and *BSD systems.  So, I can at least confirm that the code builds (finds at least one of statfs() or statvfs()) on each platform.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, only my Solaris (10/SPARC and 11/x86-64) systems have NFS-mounted filesystems.  So, I don't have any means to ensure that the &quot;newly active&quot; code performs correctly on the BSD systems.  In other words, opal_path_nfs() might continue to always return false on BSD systems and I'd not know the difference.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; P.S. the commit message says &quot;modern flavors of *BSD OSs no longer define __BSD&quot;, but the FreeBSD-6.3 (circa 2008) system I also test doesn't define __BSD either.  So, I wonder if this code ever did worked as intended on the BSD systems.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jan 9, 2014 at 1:30 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Fixed on trunk in <a href="https://svn.open-mpi.org/trac/ompi/changeset/30198">https://svn.open-mpi.org/trac/ompi/changeset/30198</a>.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can't test on all the kinds of systems Paul/Marco have, though -- we'll have to see what happens when he tries.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 9, 2014, at 10:36 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I fully concur - just limited by my available time to fix it. Jeff has volunteered to step in, though.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Jan 8, 2014, at 11:44 PM, marco atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Il 1/9/2014 5:10 AM, Ralph Castain ha scritto:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Actually, as I look at it, the logic escapes me anyway. Basically, you
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; only have two options - use the vfs struct for Sun, and use fs struct
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; for everything else. I'm not aware of any other choice, and indeed the
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; list of all the systems for the latter actually is intended to amount to
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; &quot;anything else&quot;.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; So I just changed it to an &quot;else&quot; statement in the trunk and scheduled
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; it for 1.7.4 if it passes muster - see how this works for you.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; please note that there are other similar cases in the same file
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; in &quot;bool opal_path_nfs&quot; function at row 434 and 462
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; the one at 489 is a multiple if with no default case,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; so the code will fail to perform for any architecture
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; no reported there, like CYGWIN, and it is very hard to notice
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; In general this type of &quot;ifdefined&quot; around platform
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; are very bad for portability or platform evolution.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Adding a new platform will be a hell of work.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; The Autoconf approach to portability &quot;should be&quot; to test
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; for features, not for versions or platform.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Regards
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Marco
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13741/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13742.php">marco atzeri: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13740.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>In reply to:</strong> <a href="13740.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13645.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
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
