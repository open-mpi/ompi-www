<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 24 15:41:26 2007" -->
<!-- isoreceived="20070924194126" -->
<!-- sent="Mon, 24 Sep 2007 15:41:10 -0400" -->
<!-- isosent="20070924194110" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with adding new component (fwd)" -->
<!-- id="2CF942FA-B6B4-4D16-80AE-E6FD8192683D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0709242113250.15128_at_pita.cs.huji.ac.il" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-24 15:41:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2363.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<li><strong>Previous message:</strong> <a href="2361.php">David Erukhimovich: "Re: [OMPI devel] Problem with adding new component (fwd)"</a>
<li><strong>In reply to:</strong> <a href="2361.php">David Erukhimovich: "Re: [OMPI devel] Problem with adding new component (fwd)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 24, 2007, at 3:15 PM, David Erukhimovich wrote:
<br>
<p><span class="quotelev1">&gt; I understand all of This.
</span><br>
<span class="quotelev1">&gt; The only thing I did this time is to download v1.2.3 from svn and  
</span><br>
<span class="quotelev1">&gt; build it
</span><br>
<span class="quotelev1">&gt; (without modifying anything!).
</span><br>
<span class="quotelev1">&gt; So I got The linkage error I attached last time. As you can see it  
</span><br>
<span class="quotelev1">&gt; isn't
</span><br>
<span class="quotelev1">&gt; connected with ORTE but with opmi_info or something
</span><br>
<p>FYI: The OPAL progress stuff changed quite a bit between v1.2 and the  
<br>
trunk as well.  :-\
<br>
<p>Specifically: v1.2 branched a while ago and is our current stable  
<br>
release.  The developent trunk has moved ahead with development and  
<br>
has changed (sometimes by a lot) as compared to the v1.2 stable  
<br>
release branch; the development trunk will someday turn into the v1.3  
<br>
series.  The v1.2 branch does *not* get all of these changes; it  
<br>
generally only gets bug fixes (and sometimes new functionality, but  
<br>
the focus is on bug fixes).
<br>
<p>So if you developed some code against the SVN trunk, you may well be  
<br>
running into compatibility issues between the v1.2 branch.  More  
<br>
specifically: *any* mixing of v1.2 and trunk may result in Badness.   
<br>
What might be easiest is to &quot;make clean&quot; and then &quot;make&quot; again to  
<br>
ensure that you don't have any kind of cross-pollination that is  
<br>
causing these linker issues (e.g., somehow mistakenly trying to link  
<br>
together stuff between the v1.2 branch and the trunk).
<br>
<p>If you continue to have compiler/linker issues, send the full set of  
<br>
data requested by the &quot;getting help&quot; page so that we can see the full  
<br>
errors, etc.
<br>
<p><p><p><p><p><span class="quotelev1">&gt; --David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim Mattox wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the future, please continue to ask your questions on the developer
</span><br>
<span class="quotelev1">&gt; mailing list so that others can learn from them later via google, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this case, it appears the problem is that you originally copied  
</span><br>
<span class="quotelev1">&gt; the component
</span><br>
<span class="quotelev1">&gt; from the development trunk to modify for your own needs.  The ORTE
</span><br>
<span class="quotelev1">&gt; layer has changed significantly between the 1.2 series and the trunk,
</span><br>
<span class="quotelev1">&gt; and thus your new code inherited the newer stuff that isn't  
</span><br>
<span class="quotelev1">&gt; compatible with
</span><br>
<span class="quotelev1">&gt; the 1.2 sources.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You should either make a copy of a component in the 1.2 series to
</span><br>
<span class="quotelev1">&gt; modify as you need, or, you should be building from a trunk checkout.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/24/07, David Erukhimovich &lt;daviderukh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev1">&gt; Date: Mon, 24 Sep 2007 18:51:28 +0200 (IST)
</span><br>
<span class="quotelev1">&gt; From: David Erukhimovich &lt;daviderukh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: David Erukhimovich &lt;daviderukh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Problem with adding new component
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Hello Tom,
</span><br>
<span class="quotelev1">&gt;    Thanks for your responce.
</span><br>
<span class="quotelev1">&gt;    I tried to complies the ompi 1.2.3 (and 1.2.0) I downloaded from  
</span><br>
<span class="quotelev1">&gt; svn
</span><br>
<span class="quotelev1">&gt;    using:
</span><br>
<span class="quotelev1">&gt;      $ sh autogen.sh ; configure --prefix $MOSHOME/openmpi- 
</span><br>
<span class="quotelev1">&gt; install ; make all
</span><br>
<span class="quotelev1">&gt;    install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    and I got the following compilation error:
</span><br>
<span class="quotelev1">&gt;      components.o: In function `ompi_info::open_components()':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    /cs/stud/daviderukh/moshome/v1.2.0/ompi/tools/ompi_info/ 
</span><br>
<span class="quotelev1">&gt; components.cc:221:
</span><br>
<span class="quotelev1">&gt;    undefined reference to `orte_rml_base'
</span><br>
<span class="quotelev1">&gt;      ../../../ompi/.libs/libmpi.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;    `opal_progress_mpi_init'
</span><br>
<span class="quotelev1">&gt;      ../../../ompi/.libs/libmpi.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;    `opal_progress_events'
</span><br>
<span class="quotelev1">&gt;      ../../../ompi/.libs/libmpi.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;    `opal_progress_mpi_enable'
</span><br>
<span class="quotelev1">&gt;      ../../../ompi/.libs/libmpi.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;    `opal_progress_event_decrement'
</span><br>
<span class="quotelev1">&gt;      ../../../ompi/.libs/libmpi.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;    `opal_progress_mpi_disable'
</span><br>
<span class="quotelev1">&gt;      ../../../ompi/.libs/libmpi.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;    `opal_progress_event_increment'
</span><br>
<span class="quotelev1">&gt;      collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    What is the thing now?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thank you
</span><br>
<span class="quotelev1">&gt;    --David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/23/07, Tim Mattox &lt;timattox_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello David,
</span><br>
<span class="quotelev1">&gt; The development trunk (towards 1.3) is not binary compatible with
</span><br>
<span class="quotelev1">&gt; the 1.2 branch of Open MPI.  Actually, AFAIK, no two versions of
</span><br>
<span class="quotelev1">&gt; Open MPI are guaranteed to be binary compatible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You would need to compile and make your component from within
</span><br>
<span class="quotelev1">&gt; a 1.2 source tree.  To be safe, you should use an svn check out that
</span><br>
<span class="quotelev1">&gt; matches the version you want to use, so in your case:
</span><br>
<span class="quotelev1">&gt;     svn co <a href="https://svn.open-mpi.org/svn/ompi/tags/v1.2-series/v1.2.3">https://svn.open-mpi.org/svn/ompi/tags/v1.2-series/v1.2.3</a>
</span><br>
<span class="quotelev1">&gt; and then go from there.  There is a chance things will work from the
</span><br>
<span class="quotelev1">&gt; current 1.2 svn HEAD, but we do not test our code changes for
</span><br>
<span class="quotelev1">&gt; binary compatibility between versions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/23/07, David Erukhimovich &lt;daviderukh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I created a new component by modifying round_robin (on rmaps) a bit. I
</span><br>
<span class="quotelev1">&gt; compiled it using autogen. configure and make in the development (1.3)
</span><br>
<span class="quotelev1">&gt; version and it works fine.
</span><br>
<span class="quotelev1">&gt; Now I tried to copy the the new library I made (.so and .la files) to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lib folder of a stable release (1.2.3).
</span><br>
<span class="quotelev1">&gt; the release sees the new component but it doesn't work. the output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when I
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; run the following is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    $ mpirun --mca rmaps mos_round_robin --mca rmaps_base_verbose 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mos204:04929] Scheduling policy: unspec
</span><br>
<span class="quotelev1">&gt; [mos204:04929] orte:base:open: querying component mos_round_robin
</span><br>
<span class="quotelev1">&gt; [mos204:04929] orte:base:open: component mos_round_robin does NOT want
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; be considered for selection
</span><br>
<span class="quotelev1">&gt; [mos204:04929] orte:rmaps:base:map: no components available!
</span><br>
<span class="quotelev1">&gt; [mos204:04929] [0,0,0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; base/rmaps_base_map_job.c at line 201
</span><br>
<span class="quotelev1">&gt; [mos204:04929] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [mos204:04929] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [mos204:04929] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [mos204:04929] Failing at address: 0xf7f1eb
</span><br>
<span class="quotelev1">&gt; [mos204:04929] [ 0] [0xffffe440]
</span><br>
<span class="quotelev1">&gt; [mos204:04929] [ 1] /lib/i686/cmov/libc.so.6(vasprintf+0xbc)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0xb7d8eb6c]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mos204:04929] [ 2]
</span><br>
<span class="quotelev1">&gt; /cs/mosna/daviderukh/openmpi-install2/lib/libopen-pal.so.0[0xb7f18572]
</span><br>
<span class="quotelev1">&gt; [mos204:04929] [ 3]
</span><br>
<span class="quotelev1">&gt; /cs/mosna/daviderukh/openmpi-install2/lib/libopen-pal.so.0 
</span><br>
<span class="quotelev1">&gt; (opal_output+0x1e)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0xb7f18a5e]
</span><br>
<span class="quotelev1">&gt; [mos204:04929] [ 4]
</span><br>
<span class="quotelev1">&gt; /cs/mosna/daviderukh/openmpi-install2/lib/libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (orte_rmaps_base_map_job+0x5f6)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0xb7f870b6]
</span><br>
<span class="quotelev1">&gt; [mos204:04929] [ 5]
</span><br>
<span class="quotelev1">&gt; /cs/mosna/daviderukh/openmpi-install2/lib/openmpi/mca_rmgr_urm.so
</span><br>
<span class="quotelev1">&gt; [0xb7c7c368]
</span><br>
<span class="quotelev1">&gt; [mos204:04929] [ 6] mpirun(orterun+0x3d9) [0x804a1e9]
</span><br>
<span class="quotelev1">&gt; [mos204:04929] [ 7] mpirun(main+0x22) [0x8049e06]
</span><br>
<span class="quotelev1">&gt; [mos204:04929] [ 8] /lib/i686/cmov/libc.so.6(__libc_start_main+0xe0)
</span><br>
<span class="quotelev1">&gt; [0xb7d44050]
</span><br>
<span class="quotelev1">&gt; [mos204:04929] [ 9] mpirun [0x8049d81]
</span><br>
<span class="quotelev1">&gt; [mos204:04929] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So... what am I doing wrong and how can I fix it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt; --David
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="2363.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16200"</a>
<li><strong>Previous message:</strong> <a href="2361.php">David Erukhimovich: "Re: [OMPI devel] Problem with adding new component (fwd)"</a>
<li><strong>In reply to:</strong> <a href="2361.php">David Erukhimovich: "Re: [OMPI devel] Problem with adding new component (fwd)"</a>
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
