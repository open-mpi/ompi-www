<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 10:08:34 2007" -->
<!-- isoreceived="20070611140834" -->
<!-- sent="Mon, 11 Jun 2007 10:08:15 -0400" -->
<!-- isosent="20070611140815" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] threaded builds" -->
<!-- id="D2A1E705-0CA8-41F2-91A6-A08BC18C3DD4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2007-06-11 10:08:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1656.php">Tim Prins: "Re: [OMPI devel] threaded builds"</a>
<li><strong>Previous message:</strong> <a href="1654.php">Pak Lui: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1656.php">Tim Prins: "Re: [OMPI devel] threaded builds"</a>
<li><strong>Reply:</strong> <a href="1656.php">Tim Prins: "Re: [OMPI devel] threaded builds"</a>
<li><strong>Maybe reply:</strong> <a href="1662.php">Graham, Richard L.: "Re: [OMPI devel] threaded builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per the teleconf last week, I have started to revamp the Cisco MTT  
<br>
infrastructure to do simplistic thread testing.  Specifically, I'm  
<br>
building the OMPI trunk and v1.2 branches with &quot;--with-threads -- 
<br>
enable-mpi-threads&quot;.
<br>
<p>I haven't switched this into my production MTT setup yet, but in the  
<br>
first trial runs, I'm noticing a segv in the test/threads/ 
<br>
opal_condition program.
<br>
<p>It seems that in the thr1 test on the v1.2 branch, when it calls  
<br>
opal_progress() underneath the condition variable wait, at some point  
<br>
in there current_base is getting to be NULL.  Hence, the following  
<br>
segv's because the passed in value of &quot;base&quot; is NULL (event.c):
<br>
<p>int
<br>
opal_event_base_loop(struct event_base *base, int flags)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const struct opal_eventop *evsel = base-&gt;evsel;
<br>
...
<br>
<p>Here's the full call stack:
<br>
<p>#0  0x0000002a955a020e in opal_event_base_loop (base=0x0, flags=5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at event.c:520
<br>
#1  0x0000002a955a01f9 in opal_event_loop (flags=5) at event.c:514
<br>
#2  0x0000002a95599111 in opal_progress () at runtime/opal_progress.c: 
<br>
259
<br>
#3  0x00000000004012c8 in opal_condition_wait (c=0x5025a0, m=0x502600)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../opal/threads/condition.h:81
<br>
#4  0x0000000000401146 in thr1_run (obj=0x503110) at opal_condition.c:46
<br>
#5  0x00000036e290610a in start_thread () from /lib64/tls/ 
<br>
libpthread.so.0
<br>
#6  0x00000036e1ec68c3 in clone () from /lib64/tls/libc.so.6
<br>
#7  0x0000000000000000 in ?? ()
<br>
<p>This test seems to work fine on the trunk (at least, it didn't segv  
<br>
in my small number of trail runs).
<br>
<p>Is this a known problem in the 1.2 branch?  Should I skip the thread  
<br>
testing on the 1.2 branch and concentrate on the trunk?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1656.php">Tim Prins: "Re: [OMPI devel] threaded builds"</a>
<li><strong>Previous message:</strong> <a href="1654.php">Pak Lui: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1656.php">Tim Prins: "Re: [OMPI devel] threaded builds"</a>
<li><strong>Reply:</strong> <a href="1656.php">Tim Prins: "Re: [OMPI devel] threaded builds"</a>
<li><strong>Maybe reply:</strong> <a href="1662.php">Graham, Richard L.: "Re: [OMPI devel] threaded builds"</a>
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
