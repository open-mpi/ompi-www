<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 12 06:46:07 2007" -->
<!-- isoreceived="20070612104607" -->
<!-- sent="Tue, 12 Jun 2007 06:45:47 -0400" -->
<!-- isosent="20070612104547" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] threaded builds" -->
<!-- id="EFCAB19D-E3F4-4CC3-B1D6-55B1F62B3ECF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="466D992F.7010208_at_lbl.gov" -->
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
<strong>Date:</strong> 2007-06-12 06:45:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1665.php">Richard Graham: "Re: [OMPI devel] threaded builds"</a>
<li><strong>Previous message:</strong> <a href="1663.php">Paul H. Hargrove: "Re: [OMPI devel] threaded builds"</a>
<li><strong>In reply to:</strong> <a href="1663.php">Paul H. Hargrove: "Re: [OMPI devel] threaded builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1665.php">Richard Graham: "Re: [OMPI devel] threaded builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Heh.  I don't.  :-)
<br>
<p>Well, I should specify: since the group is [pretty strongly] leaning  
<br>
towards threading being the issue for 1.3, then it makes sense to  
<br>
dedicate my resources elsewhere (rather than 1.2 thread testing).
<br>
<p><p>On Jun 11, 2007, at 2:49 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; If Jeff has the resources to run threaded tests against 1.2, *and* to
</span><br>
<span class="quotelev1">&gt; examine the results, then it might be valuable to have a summary the
</span><br>
<span class="quotelev1">&gt; known threading issues in 1.2 written down somewhere for the  
</span><br>
<span class="quotelev1">&gt; benefit of
</span><br>
<span class="quotelev1">&gt; those who don't chase the trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Graham, Richard L. wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I would second this - thread safety should be a 1.3 item, unless  
</span><br>
<span class="quotelev2">&gt;&gt; someone has a lot of spare time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rich
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] &lt;devel-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Mon Jun 11 10:44:33 2007
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] threaded builds
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 11, 2007, at 8:25 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I leave it to the thread subgroup to decide...  Should we discuss on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the call tomorrow?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't have a strong opinion; I was just testing both because it  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; easy to do so.  If we want to concentrate on the trunk, I can adjust
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my MTT setup.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think trying to worry about 1.2 would just be a time sink. We know
</span><br>
<span class="quotelev2">&gt;&gt; that there are architectural issues with threads in some parts of the
</span><br>
<span class="quotelev2">&gt;&gt; code. I don't see us re-architecting 1.2 in this regard.
</span><br>
<span class="quotelev2">&gt;&gt; Seems we should only focus on the trunk.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Galen
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 11, 2007, at 10:17 AM, Brian Barrett wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, this is a known issue.  I don't know -- are we trying to make
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; threads work on the 1.2 branch, or just the trunk?  I had thought
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; just the trunk?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 11, 2007, at 8:13 AM, Tim Prins wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I had similar problems on the trunk, which was fixed by Brian with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; r14877.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Perhaps 1.2 needs something similar?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Monday 11 June 2007 10:08:15 am Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Per the teleconf last week, I have started to revamp the Cisco  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MTT
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; infrastructure to do simplistic thread testing.  Specifically,  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; building the OMPI trunk and v1.2 branches with &quot;--with-threads --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; enable-mpi-threads&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I haven't switched this into my production MTT setup yet, but in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; first trial runs, I'm noticing a segv in the test/threads/
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; opal_condition program.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It seems that in the thr1 test on the v1.2 branch, when it calls
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; opal_progress() underneath the condition variable wait, at some
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; point
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in there current_base is getting to be NULL.  Hence, the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; following
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; segv's because the passed in value of &quot;base&quot; is NULL (event.c):
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; int
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; opal_event_base_loop(struct event_base *base, int flags)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          const struct opal_eventop *evsel = base-&gt;evsel;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Here's the full call stack:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #0  0x0000002a955a020e in opal_event_base_loop (base=0x0,  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; flags=5)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      at event.c:520
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #1  0x0000002a955a01f9 in opal_event_loop (flags=5) at event.c: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 514
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #2  0x0000002a95599111 in opal_progress () at runtime/
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; opal_progress.c:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 259
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #3  0x00000000004012c8 in opal_condition_wait (c=0x5025a0,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; m=0x502600)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;      at ../../opal/threads/condition.h:81
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #4  0x0000000000401146 in thr1_run (obj=0x503110) at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; opal_condition.c:46
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #5  0x00000036e290610a in start_thread () from /lib64/tls/
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libpthread.so.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #6  0x00000036e1ec68c3 in clone () from /lib64/tls/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #7  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This test seems to work fine on the trunk (at least, it didn't  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; segv
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in my small number of trail runs).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Is this a known problem in the 1.2 branch?  Should I skip the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; thread
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; testing on the 1.2 branch and concentrate on the trunk?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
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
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1665.php">Richard Graham: "Re: [OMPI devel] threaded builds"</a>
<li><strong>Previous message:</strong> <a href="1663.php">Paul H. Hargrove: "Re: [OMPI devel] threaded builds"</a>
<li><strong>In reply to:</strong> <a href="1663.php">Paul H. Hargrove: "Re: [OMPI devel] threaded builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1665.php">Richard Graham: "Re: [OMPI devel] threaded builds"</a>
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
