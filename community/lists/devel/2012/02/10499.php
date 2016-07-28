<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 11:50:41 2012" -->
<!-- isoreceived="20120220165041" -->
<!-- sent="Mon, 20 Feb 2012 16:49:59 +0000" -->
<!-- isosent="20120220164959" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]" -->
<!-- id="CB67C6CF.C11F%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F3EE212.20707_at_lbl.gov" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-20 11:49:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10500.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: [OMPI users] WEXITSTATUS: OpenMPI 1.5.5 RC1 doesn't build on NetBSD (and perhaps other BSDs)"</a>
<li><strong>Previous message:</strong> <a href="10498.php">Jeffrey Squyres: "[OMPI devel] Fwd: [OMPI users] WEXITSTATUS: OpenMPI 1.5.5 RC1 doesn't build on NetBSD (and perhaps other BSDs)"</a>
<li><strong>In reply to:</strong> <a href="10487.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failure on Altix [w/ WORK AROUND]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10501.php">Paul H. Hargrove: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
<li><strong>Reply:</strong> <a href="10501.php">Paul H. Hargrove: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
<li><strong>Reply:</strong> <a href="10509.php">Jeffrey Squyres: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Paul -
<br>
<p>Thanks for noticing this.  I guess we don't have many Altix developers.  I
<br>
think I've fixed it on the trunk with r25968, plus r25967 to make sure the
<br>
Altix component gets selected over the Linux component on Altix systems.
<br>
I don't have an Altix to test on; can you give it a go and let me know if
<br>
it works?  In the trunk right now, and should be in the trunk nightly
<br>
tarball tomorrow morning.
<br>
<p>The problem cropped up when we started running the configure macros for
<br>
components that couldn't possibly succeed (which we needed to make
<br>
Automake happy in a couple of situations) sometime late in the 1.5 series.
<br>
&nbsp;Before that, a component could never think it succeeded and then later be
<br>
told it didn't.  We added yet another macro to handle issues like this, so
<br>
it was a fairly easy fix.
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p>On 2/17/12 4:26 PM, &quot;Paul H. Hargrove&quot; &lt;PHHargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;    I've poked enough at the ompi configure magic to *think* I
</span><br>
<span class="quotelev1">&gt;    understand the source of the problem I've seen w/ both trunk and
</span><br>
<span class="quotelev1">&gt;    1.5.x on the Altix.
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    The problem appears to be that both timer/altix/configure.m4 and
</span><br>
<span class="quotelev1">&gt;    timer/linux/configure.m4 are setting the value of
</span><br>
<span class="quotelev1">&gt;    $timer_base_include and the LAST one &quot;wins&quot;.  Meanwhile, only the
</span><br>
<span class="quotelev1">&gt;    FIRST one is getting added to $static_components (&quot;there can be only
</span><br>
<span class="quotelev1">&gt;    one&quot;).  So, I suspect the difference I saw between trunk and 1.5 was
</span><br>
<span class="quotelev1">&gt;    just a matter of which configure probe ran first.
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    The result of having FIRST and LAST &quot;win&quot; in different settings is a
</span><br>
<span class="quotelev1">&gt;    mismatch.
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;$ grep -e timer:linux -e timer:altix
</span><br>
<span class="quotelev1">&gt;      configure.out
</span><br>
<span class="quotelev1">&gt;      --- MCA component timer:linux (m4 configuration macro, priority
</span><br>
<span class="quotelev1">&gt;      30)
</span><br>
<span class="quotelev1">&gt;      checking for MCA component timer:linux compile mode... static
</span><br>
<span class="quotelev1">&gt;      checking if MCA component timer:linux can compile... yes
</span><br>
<span class="quotelev1">&gt;      --- MCA component timer:altix (m4 configuration macro, priority
</span><br>
<span class="quotelev1">&gt;      30)
</span><br>
<span class="quotelev1">&gt;      checking for MCA component timer:altix compile mode... static
</span><br>
<span class="quotelev1">&gt;      checking if MCA component timer:altix can compile... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    which picks timer:linux and rejects timer:altix, as compared to:
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;$ grep -e '&quot;MCA_opal_timer_[SD]' -e
</span><br>
<span class="quotelev1">&gt;      MCA_timer_ config.status
</span><br>
<span class="quotelev1">&gt;      S[&quot;MCA_opal_timer_DSO_SUBDIRS&quot;]=&quot;&quot;
</span><br>
<span class="quotelev1">&gt;      S[&quot;MCA_opal_timer_STATIC_SUBDIRS&quot;]=&quot; mca/timer/linux&quot;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;S[&quot;MCA_opal_timer_STATIC_LTLIBS&quot;]=&quot;mca/timer/linux/libmca_timer_linux.la
</span><br>
<span class="quotelev1">&gt;      &quot;
</span><br>
<span class="quotelev1">&gt;      S[&quot;MCA_opal_timer_DSO_COMPONENTS&quot;]=&quot;&quot;
</span><br>
<span class="quotelev1">&gt;      S[&quot;MCA_opal_timer_STATIC_COMPONENTS&quot;]=&quot; linux&quot;
</span><br>
<span class="quotelev1">&gt;      D[&quot;MCA_timer_IMPLEMENTATION_HEADER&quot;]=&quot;
</span><br>
<span class="quotelev1">&gt;      \&quot;opal/mca/timer/altix/timer_altix.h\&quot;&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    Which will build timer:linux but has improperly picked up the
</span><br>
<span class="quotelev1">&gt;    timer:altix HEADER!
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    For the present, an explicit --with-timer=altix works-around the
</span><br>
<span class="quotelev1">&gt;    problem in either branch.
</span><br>
<span class="quotelev1">&gt;    However, the setting of the header variable by a NON-selected
</span><br>
<span class="quotelev1">&gt;    component is ERRONEOUS and should get fixed.
</span><br>
<span class="quotelev1">&gt;    In trunk, it may also make sense to raise the priority of
</span><br>
<span class="quotelev1">&gt;    timer:altix above that of timer:linux.
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    -Paul
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    On 2/15/2012 12:41 AM, Paul Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;      I've configured the ompi trunk (nightly tarball 1.7a1r25927)
</span><br>
<span class="quotelev1">&gt;        on an SGI Altix.
</span><br>
<span class="quotelev1">&gt;      I used no special arguments indicating that this is an Altix,
</span><br>
<span class="quotelev1">&gt;        and there does not appear to be an altix-specific file in
</span><br>
<span class="quotelev1">&gt;        contrib/platform.
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      My build fails as follows:
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;        
</span><br>
<span class="quotelev1">&gt;make:
</span><br>
<span class="quotelev1">&gt;          Entering directory
</span><br>
<span class="quotelev1">&gt;`/mnt/home/c_phargrov/OMPI/openmpi-trunk-linux-ia64/BLD/opal/tools/wrapper
</span><br>
<span class="quotelev1">&gt;s'
</span><br>
<span class="quotelev1">&gt;            CC     opal_wrapper.o
</span><br>
<span class="quotelev1">&gt;            CCLD   opal_wrapper
</span><br>
<span class="quotelev1">&gt;          ../../../opal/.libs/libopen-pal.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;          `opal_timer_altix_mmdev_timer_addr'
</span><br>
<span class="quotelev1">&gt;          ../../../opal/.libs/libopen-pal.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;          `opal_timer_altix_freq'
</span><br>
<span class="quotelev1">&gt;          collect2: ld returned 1 exit status
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
<span class="quotelev1">&gt;      The configure-generated opal_config.h contains
</span><br>
<span class="quotelev1">&gt;      #define MCA_timer_IMPLEMENTATION_HEADER
</span><br>
<span class="quotelev1">&gt;        &quot;opal/mca/timer/altix/timer_altix.h&quot;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      Nothing appears to have been built in
</span><br>
<span class="quotelev1">&gt;        BUILDDIR/opal/mca/timer/altix.
</span><br>
<span class="quotelev1">&gt;      However, BUILDDIR/opal/mca/timer/linux has been built.
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      -Paul
</span><br>
<span class="quotelev1">&gt;        
</span><br>
<span class="quotelev1">&gt;        
</span><br>
<span class="quotelev1">&gt;        -- 
</span><br>
<span class="quotelev1">&gt;        Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;        Future Technologies Group
</span><br>
<span class="quotelev1">&gt;        HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;&lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev1">&gt;        Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;&lt;tel:%2B1-510-486-6900&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    -- 
</span><br>
<span class="quotelev1">&gt;Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Future Technologies Group
</span><br>
<span class="quotelev1">&gt;HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10500.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: [OMPI users] WEXITSTATUS: OpenMPI 1.5.5 RC1 doesn't build on NetBSD (and perhaps other BSDs)"</a>
<li><strong>Previous message:</strong> <a href="10498.php">Jeffrey Squyres: "[OMPI devel] Fwd: [OMPI users] WEXITSTATUS: OpenMPI 1.5.5 RC1 doesn't build on NetBSD (and perhaps other BSDs)"</a>
<li><strong>In reply to:</strong> <a href="10487.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failure on Altix [w/ WORK AROUND]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10501.php">Paul H. Hargrove: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
<li><strong>Reply:</strong> <a href="10501.php">Paul H. Hargrove: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
<li><strong>Reply:</strong> <a href="10509.php">Jeffrey Squyres: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
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
