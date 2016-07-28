<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 16:53:04 2012" -->
<!-- isoreceived="20120220215304" -->
<!-- sent="Mon, 20 Feb 2012 16:52:58 -0500" -->
<!-- isosent="20120220215258" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]" -->
<!-- id="604C2267-7D8A-49AC-8F7C-A0284AA72EC4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CB67C6CF.C11F%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-20 16:52:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10510.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>Previous message:</strong> <a href="10508.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>In reply to:</strong> <a href="10499.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10541.php">Jeffrey Squyres: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/WORK AROUND]"</a>
<li><strong>Reply:</strong> <a href="10541.php">Jeffrey Squyres: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/WORK AROUND]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo Brian --
<br>
<p>Do we need to bring this to v1.5, too?
<br>
<p><p>On Feb 20, 2012, at 11:49 AM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; Hi Paul -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for noticing this.  I guess we don't have many Altix developers.  I
</span><br>
<span class="quotelev1">&gt; think I've fixed it on the trunk with r25968, plus r25967 to make sure the
</span><br>
<span class="quotelev1">&gt; Altix component gets selected over the Linux component on Altix systems.
</span><br>
<span class="quotelev1">&gt; I don't have an Altix to test on; can you give it a go and let me know if
</span><br>
<span class="quotelev1">&gt; it works?  In the trunk right now, and should be in the trunk nightly
</span><br>
<span class="quotelev1">&gt; tarball tomorrow morning.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem cropped up when we started running the configure macros for
</span><br>
<span class="quotelev1">&gt; components that couldn't possibly succeed (which we needed to make
</span><br>
<span class="quotelev1">&gt; Automake happy in a couple of situations) sometime late in the 1.5 series.
</span><br>
<span class="quotelev1">&gt; Before that, a component could never think it succeeded and then later be
</span><br>
<span class="quotelev1">&gt; told it didn't.  We added yet another macro to handle issues like this, so
</span><br>
<span class="quotelev1">&gt; it was a fairly easy fix.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/17/12 4:26 PM, &quot;Paul H. Hargrove&quot; &lt;PHHargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   I've poked enough at the ompi configure magic to *think* I
</span><br>
<span class="quotelev2">&gt;&gt;   understand the source of the problem I've seen w/ both trunk and
</span><br>
<span class="quotelev2">&gt;&gt;   1.5.x on the Altix.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   The problem appears to be that both timer/altix/configure.m4 and
</span><br>
<span class="quotelev2">&gt;&gt;   timer/linux/configure.m4 are setting the value of
</span><br>
<span class="quotelev2">&gt;&gt;   $timer_base_include and the LAST one &quot;wins&quot;.  Meanwhile, only the
</span><br>
<span class="quotelev2">&gt;&gt;   FIRST one is getting added to $static_components (&quot;there can be only
</span><br>
<span class="quotelev2">&gt;&gt;   one&quot;).  So, I suspect the difference I saw between trunk and 1.5 was
</span><br>
<span class="quotelev2">&gt;&gt;   just a matter of which configure probe ran first.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   The result of having FIRST and LAST &quot;win&quot; in different settings is a
</span><br>
<span class="quotelev2">&gt;&gt;   mismatch.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ grep -e timer:linux -e timer:altix
</span><br>
<span class="quotelev2">&gt;&gt;     configure.out
</span><br>
<span class="quotelev2">&gt;&gt;     --- MCA component timer:linux (m4 configuration macro, priority
</span><br>
<span class="quotelev2">&gt;&gt;     30)
</span><br>
<span class="quotelev2">&gt;&gt;     checking for MCA component timer:linux compile mode... static
</span><br>
<span class="quotelev2">&gt;&gt;     checking if MCA component timer:linux can compile... yes
</span><br>
<span class="quotelev2">&gt;&gt;     --- MCA component timer:altix (m4 configuration macro, priority
</span><br>
<span class="quotelev2">&gt;&gt;     30)
</span><br>
<span class="quotelev2">&gt;&gt;     checking for MCA component timer:altix compile mode... static
</span><br>
<span class="quotelev2">&gt;&gt;     checking if MCA component timer:altix can compile... no
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   which picks timer:linux and rejects timer:altix, as compared to:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ grep -e '&quot;MCA_opal_timer_[SD]' -e
</span><br>
<span class="quotelev2">&gt;&gt;     MCA_timer_ config.status
</span><br>
<span class="quotelev2">&gt;&gt;     S[&quot;MCA_opal_timer_DSO_SUBDIRS&quot;]=&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     S[&quot;MCA_opal_timer_STATIC_SUBDIRS&quot;]=&quot; mca/timer/linux&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; S[&quot;MCA_opal_timer_STATIC_LTLIBS&quot;]=&quot;mca/timer/linux/libmca_timer_linux.la
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;
</span><br>
<span class="quotelev2">&gt;&gt;     S[&quot;MCA_opal_timer_DSO_COMPONENTS&quot;]=&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     S[&quot;MCA_opal_timer_STATIC_COMPONENTS&quot;]=&quot; linux&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     D[&quot;MCA_timer_IMPLEMENTATION_HEADER&quot;]=&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     \&quot;opal/mca/timer/altix/timer_altix.h\&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Which will build timer:linux but has improperly picked up the
</span><br>
<span class="quotelev2">&gt;&gt;   timer:altix HEADER!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   For the present, an explicit --with-timer=altix works-around the
</span><br>
<span class="quotelev2">&gt;&gt;   problem in either branch.
</span><br>
<span class="quotelev2">&gt;&gt;   However, the setting of the header variable by a NON-selected
</span><br>
<span class="quotelev2">&gt;&gt;   component is ERRONEOUS and should get fixed.
</span><br>
<span class="quotelev2">&gt;&gt;   In trunk, it may also make sense to raise the priority of
</span><br>
<span class="quotelev2">&gt;&gt;   timer:altix above that of timer:linux.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   On 2/15/2012 12:41 AM, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     I've configured the ompi trunk (nightly tarball 1.7a1r25927)
</span><br>
<span class="quotelev2">&gt;&gt;       on an SGI Altix.
</span><br>
<span class="quotelev2">&gt;&gt;     I used no special arguments indicating that this is an Altix,
</span><br>
<span class="quotelev2">&gt;&gt;       and there does not appear to be an altix-specific file in
</span><br>
<span class="quotelev2">&gt;&gt;       contrib/platform.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     My build fails as follows:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; make:
</span><br>
<span class="quotelev2">&gt;&gt;         Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/mnt/home/c_phargrov/OMPI/openmpi-trunk-linux-ia64/BLD/opal/tools/wrapper
</span><br>
<span class="quotelev2">&gt;&gt; s'
</span><br>
<span class="quotelev2">&gt;&gt;           CC     opal_wrapper.o
</span><br>
<span class="quotelev2">&gt;&gt;           CCLD   opal_wrapper
</span><br>
<span class="quotelev2">&gt;&gt;         ../../../opal/.libs/libopen-pal.so: undefined reference to
</span><br>
<span class="quotelev2">&gt;&gt;         `opal_timer_altix_mmdev_timer_addr'
</span><br>
<span class="quotelev2">&gt;&gt;         ../../../opal/.libs/libopen-pal.so: undefined reference to
</span><br>
<span class="quotelev2">&gt;&gt;         `opal_timer_altix_freq'
</span><br>
<span class="quotelev2">&gt;&gt;         collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     The configure-generated opal_config.h contains
</span><br>
<span class="quotelev2">&gt;&gt;     #define MCA_timer_IMPLEMENTATION_HEADER
</span><br>
<span class="quotelev2">&gt;&gt;       &quot;opal/mca/timer/altix/timer_altix.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     Nothing appears to have been built in
</span><br>
<span class="quotelev2">&gt;&gt;       BUILDDIR/opal/mca/timer/altix.
</span><br>
<span class="quotelev2">&gt;&gt;     However, BUILDDIR/opal/mca/timer/linux has been built.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       -- 
</span><br>
<span class="quotelev2">&gt;&gt;       Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;       Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt;       HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt; &lt;tel:%2B1-510-486-6900&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10510.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>Previous message:</strong> <a href="10508.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>In reply to:</strong> <a href="10499.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10541.php">Jeffrey Squyres: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/WORK AROUND]"</a>
<li><strong>Reply:</strong> <a href="10541.php">Jeffrey Squyres: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/WORK AROUND]"</a>
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
