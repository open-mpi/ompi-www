<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Sep 23 11:07:28 2007" -->
<!-- isoreceived="20070923150728" -->
<!-- sent="Sun, 23 Sep 2007 11:07:22 -0400" -->
<!-- isosent="20070923150722" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with adding new component" -->
<!-- id="ea86ce220709230807p5d7a1503w4d310b0e60ca69c0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="010709231313570.4940_at_mos204.cs.huji.ac.il" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-23 11:07:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2361.php">David Erukhimovich: "Re: [OMPI devel] Problem with adding new component (fwd)"</a>
<li><strong>Previous message:</strong> <a href="2359.php">David Erukhimovich: "[OMPI devel] Problem with adding new component"</a>
<li><strong>In reply to:</strong> <a href="2359.php">David Erukhimovich: "[OMPI devel] Problem with adding new component"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello David,
<br>
The development trunk (towards 1.3) is not binary compatible with
<br>
the 1.2 branch of Open MPI.  Actually, AFAIK, no two versions of
<br>
Open MPI are guaranteed to be binary compatible.
<br>
<p>You would need to compile and make your component from within
<br>
a 1.2 source tree.  To be safe, you should use an svn check out that
<br>
matches the version you want to use, so in your case:
<br>
&nbsp;&nbsp;&nbsp;svn co <a href="https://svn.open-mpi.org/svn/ompi/tags/v1.2-series/v1.2.3">https://svn.open-mpi.org/svn/ompi/tags/v1.2-series/v1.2.3</a>
<br>
and then go from there.  There is a chance things will work from the
<br>
current 1.2 svn HEAD, but we do not test our code changes for
<br>
binary compatibility between versions.
<br>
<p>On 9/23/07, David Erukhimovich &lt;daviderukh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I created a new component by modifying round_robin (on rmaps) a bit. I
</span><br>
<span class="quotelev1">&gt; compiled it using autogen. configure and make in the development (1.3)
</span><br>
<span class="quotelev1">&gt; version and it works fine.
</span><br>
<span class="quotelev1">&gt; Now I tried to copy the the new library I made (.so and .la files) to the
</span><br>
<span class="quotelev1">&gt; lib folder of a stable release (1.2.3).
</span><br>
<span class="quotelev1">&gt; the release sees the new component but it doesn't work. the output when I
</span><br>
<span class="quotelev1">&gt; run the following is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   $ mpirun --mca rmaps mos_round_robin --mca rmaps_base_verbose 1 hostname
</span><br>
<span class="quotelev1">&gt; [mos204:04929] Scheduling policy: unspec
</span><br>
<span class="quotelev1">&gt; [mos204:04929] orte:base:open: querying component mos_round_robin
</span><br>
<span class="quotelev1">&gt; [mos204:04929] orte:base:open: component mos_round_robin does NOT want to
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
<span class="quotelev1">&gt; [mos204:04929] [ 1] /lib/i686/cmov/libc.so.6(vasprintf+0xbc) [0xb7d8eb6c]
</span><br>
<span class="quotelev1">&gt; [mos204:04929] [ 2]
</span><br>
<span class="quotelev1">&gt; /cs/mosna/daviderukh/openmpi-install2/lib/libopen-pal.so.0 [0xb7f18572]
</span><br>
<span class="quotelev1">&gt; [mos204:04929] [ 3]
</span><br>
<span class="quotelev1">&gt; /cs/mosna/daviderukh/openmpi-install2/lib/libopen-pal.so.0(opal_output+0x1e)
</span><br>
<span class="quotelev1">&gt; [0xb7f18a5e]
</span><br>
<span class="quotelev1">&gt; [mos204:04929] [ 4]
</span><br>
<span class="quotelev1">&gt; /cs/mosna/daviderukh/openmpi-install2/lib/libopen-rte.so.0(orte_rmaps_base_map_job+0x5f6)
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
<p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2361.php">David Erukhimovich: "Re: [OMPI devel] Problem with adding new component (fwd)"</a>
<li><strong>Previous message:</strong> <a href="2359.php">David Erukhimovich: "[OMPI devel] Problem with adding new component"</a>
<li><strong>In reply to:</strong> <a href="2359.php">David Erukhimovich: "[OMPI devel] Problem with adding new component"</a>
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
