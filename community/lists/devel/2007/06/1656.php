<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 10:13:58 2007" -->
<!-- isoreceived="20070611141358" -->
<!-- sent="Mon, 11 Jun 2007 10:13:52 -0400" -->
<!-- isosent="20070611141352" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] threaded builds" -->
<!-- id="200706111013.52830.tprins_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="D2A1E705-0CA8-41F2-91A6-A08BC18C3DD4_at_cisco.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-11 10:13:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1657.php">Brian Barrett: "Re: [OMPI devel] threaded builds"</a>
<li><strong>Previous message:</strong> <a href="1655.php">Jeff Squyres: "[OMPI devel] threaded builds"</a>
<li><strong>In reply to:</strong> <a href="1655.php">Jeff Squyres: "[OMPI devel] threaded builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1657.php">Brian Barrett: "Re: [OMPI devel] threaded builds"</a>
<li><strong>Reply:</strong> <a href="1657.php">Brian Barrett: "Re: [OMPI devel] threaded builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had similar problems on the trunk, which was fixed by Brian with r14877.
<br>
<p>Perhaps 1.2 needs something similar?
<br>
<p>Tim
<br>
<p>On Monday 11 June 2007 10:08:15 am Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Per the teleconf last week, I have started to revamp the Cisco MTT
</span><br>
<span class="quotelev1">&gt; infrastructure to do simplistic thread testing.  Specifically, I'm
</span><br>
<span class="quotelev1">&gt; building the OMPI trunk and v1.2 branches with &quot;--with-threads --
</span><br>
<span class="quotelev1">&gt; enable-mpi-threads&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I haven't switched this into my production MTT setup yet, but in the
</span><br>
<span class="quotelev1">&gt; first trial runs, I'm noticing a segv in the test/threads/
</span><br>
<span class="quotelev1">&gt; opal_condition program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that in the thr1 test on the v1.2 branch, when it calls
</span><br>
<span class="quotelev1">&gt; opal_progress() underneath the condition variable wait, at some point
</span><br>
<span class="quotelev1">&gt; in there current_base is getting to be NULL.  Hence, the following
</span><br>
<span class="quotelev1">&gt; segv's because the passed in value of &quot;base&quot; is NULL (event.c):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; opal_event_base_loop(struct event_base *base, int flags)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;          const struct opal_eventop *evsel = base-&gt;evsel;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the full call stack:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0  0x0000002a955a020e in opal_event_base_loop (base=0x0, flags=5)
</span><br>
<span class="quotelev1">&gt;      at event.c:520
</span><br>
<span class="quotelev1">&gt; #1  0x0000002a955a01f9 in opal_event_loop (flags=5) at event.c:514
</span><br>
<span class="quotelev1">&gt; #2  0x0000002a95599111 in opal_progress () at runtime/opal_progress.c:
</span><br>
<span class="quotelev1">&gt; 259
</span><br>
<span class="quotelev1">&gt; #3  0x00000000004012c8 in opal_condition_wait (c=0x5025a0, m=0x502600)
</span><br>
<span class="quotelev1">&gt;      at ../../opal/threads/condition.h:81
</span><br>
<span class="quotelev1">&gt; #4  0x0000000000401146 in thr1_run (obj=0x503110) at opal_condition.c:46
</span><br>
<span class="quotelev1">&gt; #5  0x00000036e290610a in start_thread () from /lib64/tls/
</span><br>
<span class="quotelev1">&gt; libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #6  0x00000036e1ec68c3 in clone () from /lib64/tls/libc.so.6
</span><br>
<span class="quotelev1">&gt; #7  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This test seems to work fine on the trunk (at least, it didn't segv
</span><br>
<span class="quotelev1">&gt; in my small number of trail runs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this a known problem in the 1.2 branch?  Should I skip the thread
</span><br>
<span class="quotelev1">&gt; testing on the 1.2 branch and concentrate on the trunk?
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1657.php">Brian Barrett: "Re: [OMPI devel] threaded builds"</a>
<li><strong>Previous message:</strong> <a href="1655.php">Jeff Squyres: "[OMPI devel] threaded builds"</a>
<li><strong>In reply to:</strong> <a href="1655.php">Jeff Squyres: "[OMPI devel] threaded builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1657.php">Brian Barrett: "Re: [OMPI devel] threaded builds"</a>
<li><strong>Reply:</strong> <a href="1657.php">Brian Barrett: "Re: [OMPI devel] threaded builds"</a>
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
