<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 21 00:36:50 2012" -->
<!-- isoreceived="20120221053650" -->
<!-- sent="Mon, 20 Feb 2012 21:36:36 -0800" -->
<!-- isosent="20120221053636" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]" -->
<!-- id="4F432D64.9090202_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F42A3D5.7050907_at_lbl.gov" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-21 00:36:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10530.php">Paul H. Hargrove: "[OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>Previous message:</strong> <a href="10528.php">Jeffrey Squyres: "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>In reply to:</strong> <a href="10501.php">Paul H. Hargrove: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10509.php">Jeffrey Squyres: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Testing tonight's trunk tarball on the Altix system I have access to 
<br>
looks fine now.
<br>
<p>Thanks, Brian.
<br>
-Paul
<br>
<p>On 2/20/2012 11:49 AM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; Brian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for looking into this.
</span><br>
<span class="quotelev1">&gt; I'll plan to take a look at the trunk tarball tonight and report back.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/20/2012 8:49 AM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Paul -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for noticing this.  I guess we don't have many Altix 
</span><br>
<span class="quotelev2">&gt;&gt; developers.  I
</span><br>
<span class="quotelev2">&gt;&gt; think I've fixed it on the trunk with r25968, plus r25967 to make 
</span><br>
<span class="quotelev2">&gt;&gt; sure the
</span><br>
<span class="quotelev2">&gt;&gt; Altix component gets selected over the Linux component on Altix systems.
</span><br>
<span class="quotelev2">&gt;&gt; I don't have an Altix to test on; can you give it a go and let me 
</span><br>
<span class="quotelev2">&gt;&gt; know if
</span><br>
<span class="quotelev2">&gt;&gt; it works?  In the trunk right now, and should be in the trunk nightly
</span><br>
<span class="quotelev2">&gt;&gt; tarball tomorrow morning.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem cropped up when we started running the configure macros for
</span><br>
<span class="quotelev2">&gt;&gt; components that couldn't possibly succeed (which we needed to make
</span><br>
<span class="quotelev2">&gt;&gt; Automake happy in a couple of situations) sometime late in the 1.5 
</span><br>
<span class="quotelev2">&gt;&gt; series.
</span><br>
<span class="quotelev2">&gt;&gt;   Before that, a component could never think it succeeded and then 
</span><br>
<span class="quotelev2">&gt;&gt; later be
</span><br>
<span class="quotelev2">&gt;&gt; told it didn't.  We added yet another macro to handle issues like 
</span><br>
<span class="quotelev2">&gt;&gt; this, so
</span><br>
<span class="quotelev2">&gt;&gt; it was a fairly easy fix.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2/17/12 4:26 PM, &quot;Paul H. Hargrove&quot;&lt;PHHargrove_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I've poked enough at the ompi configure magic to *think* I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     understand the source of the problem I've seen w/ both trunk and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     1.5.x on the Altix.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     The problem appears to be that both timer/altix/configure.m4 and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     timer/linux/configure.m4 are setting the value of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     $timer_base_include and the LAST one &quot;wins&quot;.  Meanwhile, only the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     FIRST one is getting added to $static_components (&quot;there can be 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     one&quot;).  So, I suspect the difference I saw between trunk and 1.5 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     just a matter of which configure probe ran first.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     The result of having FIRST and LAST &quot;win&quot; in different settings 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mismatch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ grep -e timer:linux -e timer:altix
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       configure.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       --- MCA component timer:linux (m4 configuration macro, priority
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       30)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       checking for MCA component timer:linux compile mode... static
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       checking if MCA component timer:linux can compile... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       --- MCA component timer:altix (m4 configuration macro, priority
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       30)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       checking for MCA component timer:altix compile mode... static
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       checking if MCA component timer:altix can compile... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     which picks timer:linux and rejects timer:altix, as compared to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ grep -e '&quot;MCA_opal_timer_[SD]' -e
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       MCA_timer_ config.status
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       S[&quot;MCA_opal_timer_DSO_SUBDIRS&quot;]=&quot;&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       S[&quot;MCA_opal_timer_STATIC_SUBDIRS&quot;]=&quot; mca/timer/linux&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; S[&quot;MCA_opal_timer_STATIC_LTLIBS&quot;]=&quot;mca/timer/linux/libmca_timer_linux.la 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       &quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       S[&quot;MCA_opal_timer_DSO_COMPONENTS&quot;]=&quot;&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       S[&quot;MCA_opal_timer_STATIC_COMPONENTS&quot;]=&quot; linux&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       D[&quot;MCA_timer_IMPLEMENTATION_HEADER&quot;]=&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       \&quot;opal/mca/timer/altix/timer_altix.h\&quot;&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Which will build timer:linux but has improperly picked up the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     timer:altix HEADER!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     For the present, an explicit --with-timer=altix works-around the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     problem in either branch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     However, the setting of the header variable by a NON-selected
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     component is ERRONEOUS and should get fixed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     In trunk, it may also make sense to raise the priority of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     timer:altix above that of timer:linux.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On 2/15/2012 12:41 AM, Paul Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       I've configured the ompi trunk (nightly tarball 1.7a1r25927)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         on an SGI Altix.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       I used no special arguments indicating that this is an Altix,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         and there does not appear to be an altix-specific file in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         contrib/platform.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       My build fails as follows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/mnt/home/c_phargrov/OMPI/openmpi-trunk-linux-ia64/BLD/opal/tools/wrapper 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; s'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             CC     opal_wrapper.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             CCLD   opal_wrapper
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           ../../../opal/.libs/libopen-pal.so: undefined reference to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           `opal_timer_altix_mmdev_timer_addr'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           ../../../opal/.libs/libopen-pal.so: undefined reference to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           `opal_timer_altix_freq'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           collect2: ld returned 1 exit status
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       The configure-generated opal_config.h contains
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       #define MCA_timer_IMPLEMENTATION_HEADER
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &quot;opal/mca/timer/altix/timer_altix.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Nothing appears to have been built in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         BUILDDIR/opal/mca/timer/altix.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       However, BUILDDIR/opal/mca/timer/linux has been built.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;tel:%2B1-510-486-6900&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     -- Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10530.php">Paul H. Hargrove: "[OMPI devel] non-portable code in examples/Makefile"</a>
<li><strong>Previous message:</strong> <a href="10528.php">Jeffrey Squyres: "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>In reply to:</strong> <a href="10501.php">Paul H. Hargrove: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10509.php">Jeffrey Squyres: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
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
