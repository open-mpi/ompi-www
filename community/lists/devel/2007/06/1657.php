<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 10:18:32 2007" -->
<!-- isoreceived="20070611141832" -->
<!-- sent="Mon, 11 Jun 2007 08:17:46 -0600" -->
<!-- isosent="20070611141746" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] threaded builds" -->
<!-- id="92406932-5199-4EF4-9A92-0F88131ABD76_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200706111013.52830.tprins_at_open-mpi.org" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-11 10:17:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1658.php">Brian Barrett: "Re: [OMPI devel] Patch to fix cross-compile failure"</a>
<li><strong>Previous message:</strong> <a href="1656.php">Tim Prins: "Re: [OMPI devel] threaded builds"</a>
<li><strong>In reply to:</strong> <a href="1656.php">Tim Prins: "Re: [OMPI devel] threaded builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1659.php">Ralph H Castain: "Re: [OMPI devel] threaded builds"</a>
<li><strong>Reply:</strong> <a href="1659.php">Ralph H Castain: "Re: [OMPI devel] threaded builds"</a>
<li><strong>Reply:</strong> <a href="1660.php">Jeff Squyres: "Re: [OMPI devel] threaded builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, this is a known issue.  I don't know -- are we trying to make  
<br>
threads work on the 1.2 branch, or just the trunk?  I had thought  
<br>
just the trunk?
<br>
<p>Brian
<br>
<p><p>On Jun 11, 2007, at 8:13 AM, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; I had similar problems on the trunk, which was fixed by Brian with  
</span><br>
<span class="quotelev1">&gt; r14877.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps 1.2 needs something similar?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Monday 11 June 2007 10:08:15 am Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Per the teleconf last week, I have started to revamp the Cisco MTT
</span><br>
<span class="quotelev2">&gt;&gt; infrastructure to do simplistic thread testing.  Specifically, I'm
</span><br>
<span class="quotelev2">&gt;&gt; building the OMPI trunk and v1.2 branches with &quot;--with-threads --
</span><br>
<span class="quotelev2">&gt;&gt; enable-mpi-threads&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I haven't switched this into my production MTT setup yet, but in the
</span><br>
<span class="quotelev2">&gt;&gt; first trial runs, I'm noticing a segv in the test/threads/
</span><br>
<span class="quotelev2">&gt;&gt; opal_condition program.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems that in the thr1 test on the v1.2 branch, when it calls
</span><br>
<span class="quotelev2">&gt;&gt; opal_progress() underneath the condition variable wait, at some point
</span><br>
<span class="quotelev2">&gt;&gt; in there current_base is getting to be NULL.  Hence, the following
</span><br>
<span class="quotelev2">&gt;&gt; segv's because the passed in value of &quot;base&quot; is NULL (event.c):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int
</span><br>
<span class="quotelev2">&gt;&gt; opal_event_base_loop(struct event_base *base, int flags)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;          const struct opal_eventop *evsel = base-&gt;evsel;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's the full call stack:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x0000002a955a020e in opal_event_base_loop (base=0x0, flags=5)
</span><br>
<span class="quotelev2">&gt;&gt;      at event.c:520
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x0000002a955a01f9 in opal_event_loop (flags=5) at event.c:514
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x0000002a95599111 in opal_progress () at runtime/ 
</span><br>
<span class="quotelev2">&gt;&gt; opal_progress.c:
</span><br>
<span class="quotelev2">&gt;&gt; 259
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00000000004012c8 in opal_condition_wait (c=0x5025a0,  
</span><br>
<span class="quotelev2">&gt;&gt; m=0x502600)
</span><br>
<span class="quotelev2">&gt;&gt;      at ../../opal/threads/condition.h:81
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x0000000000401146 in thr1_run (obj=0x503110) at  
</span><br>
<span class="quotelev2">&gt;&gt; opal_condition.c:46
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00000036e290610a in start_thread () from /lib64/tls/
</span><br>
<span class="quotelev2">&gt;&gt; libpthread.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00000036e1ec68c3 in clone () from /lib64/tls/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This test seems to work fine on the trunk (at least, it didn't segv
</span><br>
<span class="quotelev2">&gt;&gt; in my small number of trail runs).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this a known problem in the 1.2 branch?  Should I skip the thread
</span><br>
<span class="quotelev2">&gt;&gt; testing on the 1.2 branch and concentrate on the trunk?
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
<li><strong>Next message:</strong> <a href="1658.php">Brian Barrett: "Re: [OMPI devel] Patch to fix cross-compile failure"</a>
<li><strong>Previous message:</strong> <a href="1656.php">Tim Prins: "Re: [OMPI devel] threaded builds"</a>
<li><strong>In reply to:</strong> <a href="1656.php">Tim Prins: "Re: [OMPI devel] threaded builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1659.php">Ralph H Castain: "Re: [OMPI devel] threaded builds"</a>
<li><strong>Reply:</strong> <a href="1659.php">Ralph H Castain: "Re: [OMPI devel] threaded builds"</a>
<li><strong>Reply:</strong> <a href="1660.php">Jeff Squyres: "Re: [OMPI devel] threaded builds"</a>
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
