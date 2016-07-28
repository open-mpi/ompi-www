<?
$subject_val = "Re: [OMPI devel] [2.0.0rc3] regression: not enough space for shared memory-backing file";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 17 23:14:39 2016" -->
<!-- isoreceived="20160618031439" -->
<!-- sent="Fri, 17 Jun 2016 20:14:13 -0700" -->
<!-- isosent="20160618031413" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc3] regression: not enough space for shared memory-backing file" -->
<!-- id="CAAvDA17RbKp0o1NrizZhTyPt2Eyx+q1DbrZHZnhivLT7UBuJXw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA15UzAJb+K=-W8dy0x=054bojsipsM-5DtZCUH=dcx1Zpg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [2.0.0rc3] regression: not enough space for shared memory-backing file<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-17 23:14:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19128.php">Ralph Castain: "[OMPI devel] Master: warnings on Mac"</a>
<li><strong>Previous message:</strong> <a href="19126.php">Paul Hargrove: "[OMPI devel] [2.0.0rc3] regression: not enough space for shared memory-backing file"</a>
<li><strong>In reply to:</strong> <a href="19126.php">Paul Hargrove: "[OMPI devel] [2.0.0rc3] regression: not enough space for shared memory-backing file"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
NEVERMIND.
<br>
<p>I have determined that there was a configuration change between my testing
<br>
of 1.10.3rc4 and 2.0.0rc3.
<br>
Specifically TMPDIR=$XDG_RUNTIME_DIR currently, but did not just a couple
<br>
of weeks ago.
<br>
Unsetting TMPDIR allows btl:sm to run as it did before.
<br>
<p>-Paul
<br>
<p><p>On Fri, Jun 17, 2016 at 8:00 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am testing the 2.0.0rc3 tarball PLUS the patch from PR1232 to fix the
</span><br>
<span class="quotelev1">&gt; dependence on 64-bit atomics.
</span><br>
<span class="quotelev1">&gt; On an ARM system with only 256MB of memory, I am seeing the following
</span><br>
<span class="quotelev1">&gt; failure which did NOT occur in my testing of 1.10.3rc4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca btl sm,self -np 2 examples/ring_c'
</span><br>
<span class="quotelev1">&gt; [armel-jessie:03953] create_and_attach: unable to create shared memory BTL
</span><br>
<span class="quotelev1">&gt; coordinating structure :: size 134217728
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It appears as if there is not enough space for
</span><br>
<span class="quotelev1">&gt; /run/user/19214/openmpi-sessions-19214_at_armel-jessie_0/34799/1/shared_mem_pool.armel-jessie
</span><br>
<span class="quotelev1">&gt; (the shared-memory backing
</span><br>
<span class="quotelev1">&gt; file). It is likely that your MPI job will now either abort or experience
</span><br>
<span class="quotelev1">&gt; performance degradation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Local host:  armel-jessie
</span><br>
<span class="quotelev1">&gt;   Space Requested: 134217736 B
</span><br>
<span class="quotelev1">&gt;   Space Available: 25968640 B
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I already determined that changing &quot;-mca btl sm,self&quot; to &quot;-mca btl
</span><br>
<span class="quotelev1">&gt; tcp,self&quot; works, but would rather not go that route if &quot;sm&quot; can be
</span><br>
<span class="quotelev1">&gt; preserved.
</span><br>
<span class="quotelev1">&gt; So, if there are other MCA parameters I could/should be setting to avoid
</span><br>
<span class="quotelev1">&gt; this please let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this system is now &quot;officially too small&quot; to run btl:sm, then I will
</span><br>
<span class="quotelev1">&gt; just have to accept that.
</span><br>
<span class="quotelev1">&gt; However, I wanted to bring this to the attention of the devel list in case
</span><br>
<span class="quotelev1">&gt; this change in behavior relative to v1.10 was *not* expected behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW: The awkward line break between &quot;backing&quot; and &quot;file&quot; is in the
</span><br>
<span class="quotelev1">&gt; original output (not an artifact of my email).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul [who still remembers owning an i486 with a 40MB hard drive]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19127/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19128.php">Ralph Castain: "[OMPI devel] Master: warnings on Mac"</a>
<li><strong>Previous message:</strong> <a href="19126.php">Paul Hargrove: "[OMPI devel] [2.0.0rc3] regression: not enough space for shared memory-backing file"</a>
<li><strong>In reply to:</strong> <a href="19126.php">Paul Hargrove: "[OMPI devel] [2.0.0rc3] regression: not enough space for shared memory-backing file"</a>
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
