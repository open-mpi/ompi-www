<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 16 08:25:01 2007" -->
<!-- isoreceived="20070716122501" -->
<!-- sent="Mon, 16 Jul 2007 08:24:26 -0400" -->
<!-- isosent="20070716122426" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: lsf support / farm use models" -->
<!-- id="4747715C-E08E-4565-B195-86F1EF2D19B7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="325001540707152018x342c9c35i65ec3b4be14807c4_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-07-16 08:24:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1903.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
<li><strong>Previous message:</strong> <a href="1901.php">Sven Stork: "Re: [OMPI devel] Orte update"</a>
<li><strong>In reply to:</strong> <a href="1900.php">Matthew Moskewicz: "[OMPI devel] Fwd: lsf support / farm use models"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1920.php">Bill McMillan: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 15, 2007, at 11:18 PM, Matthew Moskewicz wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; i'll probably just continue experimenting on my own for the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; moment (tracking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any updates to the main trunk LSF support) to see if i can figure  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it out. any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; advice the best way to get such back support into trunk, if and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when if exists
</span><br>
<span class="quotelev3">&gt;&gt;&gt; / is working?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The *best* way would be for you to sign a third-party agreement -  
</span><br>
<span class="quotelev2">&gt;&gt; see the
</span><br>
<span class="quotelev2">&gt;&gt;  web site for details and a copy. Barring that, the only option  
</span><br>
<span class="quotelev2">&gt;&gt; would be to
</span><br>
<span class="quotelev2">&gt;&gt;  submit the code through either Jeff or I. We greatly prefer the  
</span><br>
<span class="quotelev2">&gt;&gt; agreement
</span><br>
<span class="quotelev2">&gt;&gt;  method as it is (a) less burdensome on us and (b) gives you greater
</span><br>
<span class="quotelev2">&gt;&gt;  flexibility.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i'll talk to 'the man' -- it should be okay ... eventually, at  
</span><br>
<span class="quotelev1">&gt; least ...
</span><br>
<p>See <a href="http://www.open-mpi.org/community/contribute/">http://www.open-mpi.org/community/contribute/</a> for details.  As an  
<br>
open project, we always welcome new developers, but we do need to  
<br>
keep the IP tidy.
<br>
<p><span class="quotelev2">&gt;&gt; I can't speak to the motivation behind MPI-2 - the others in the  
</span><br>
<span class="quotelev2">&gt;&gt; group can
</span><br>
<span class="quotelev2">&gt;&gt;  do a much better job of that. What I can say is that we started  
</span><br>
<span class="quotelev2">&gt;&gt; out with a
</span><br>
<span class="quotelev2">&gt;&gt;  design to support such modes of operation as dynamic farms, but  
</span><br>
<span class="quotelev2">&gt;&gt; the group
</span><br>
<span class="quotelev2">&gt;&gt;  has been moving away from it due to a combination of performance  
</span><br>
<span class="quotelev2">&gt;&gt; impacts,
</span><br>
<span class="quotelev2">&gt;&gt;  reliability, and (frankly) lack of interest from our user  
</span><br>
<span class="quotelev2">&gt;&gt; community. Our
</span><br>
<span class="quotelev2">&gt;&gt;  intent now is to cut the RTE back to the basics required to  
</span><br>
<span class="quotelev2">&gt;&gt; support the MPI
</span><br>
<span class="quotelev2">&gt;&gt;  standard, including MPI-2 - which arguably says nothing about  
</span><br>
<span class="quotelev2">&gt;&gt; dynamic
</span><br>
<span class="quotelev2">&gt;&gt;  resource allocation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that's true -- dynamic processes can be useful even under a static
</span><br>
<span class="quotelev1">&gt; allocation. in fact, in the short term for my particular application,
</span><br>
<span class="quotelev1">&gt; i'll probably do just that -- the user picks an initial allocation,
</span><br>
<span class="quotelev1">&gt; and then i just do the best i can. hopefully the allocations will be
</span><br>
<span class="quotelev1">&gt; 'small enough' to get away without dynamic acquisition for a while (a
</span><br>
<span class="quotelev1">&gt; year?).
</span><br>
<p>FWIW, our experience with the MPI layer has shown that the vast  
<br>
majority of applications only need a specific set of initial  
<br>
resources (hosts/cpus) and then just use those.  We have seen only a  
<br>
small class of applications that truly benefit from dynamically  
<br>
adding / removing resources in the middle of the run.  The canonical  
<br>
manager/worker model fits this criteria (i.e., benefits from  
<br>
dynamically adding/removing resources), but as you noted, it also  
<br>
works just fine with a static set of resources.  FWIW, I've seen many  
<br>
MPI applications written with the manager/worker model to ease their  
<br>
startup with a variable number of nodes (e.g., under a resource  
<br>
manager) -- they'll just launch as many processes as they get in  
<br>
their job then then manager/worker from there to &quot;discover&quot; how many  
<br>
processes they got, use them all, etc.
<br>
<p><span class="quotelev1">&gt; beyond that, i guess i'm just one of those guys that thinks
</span><br>
<span class="quotelev1">&gt; it's a shame that MPI supplanted pvm so long ago in the first place.
</span><br>
<span class="quotelev1">&gt; and yes, i already looked into modifying pvm instead, no thank you ...
</span><br>
<span class="quotelev1">&gt; ;)
</span><br>
<p>A religious argument.  ;-)  There were certainly good things about  
<br>
PVM, and MPI managed to take at least some of them.
<br>
<p><span class="quotelev2">&gt;&gt; Not to say we won't support it - just indicating that such support  
</span><br>
<span class="quotelev2">&gt;&gt; will have
</span><br>
<span class="quotelev2">&gt;&gt;  lower priority and that the system will be designed primarily for  
</span><br>
<span class="quotelev2">&gt;&gt; other
</span><br>
<span class="quotelev2">&gt;&gt;  priorities. So dynamic resource allocation will have to be  
</span><br>
<span class="quotelev2">&gt;&gt; considered as an
</span><br>
<span class="quotelev2">&gt;&gt;  &quot;exception case&quot;, with all the attendant implications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fair enough. i'm still hoping it won't be too exceptional, really. on
</span><br>
<span class="quotelev1">&gt; a related note, perhaps is it possible to 'join' running openMPI jobs
</span><br>
<span class="quotelev1">&gt; (using nameservers or whatnot)? if so, then application level
</span><br>
<span class="quotelev1">&gt; workarounds are also possible -- and can even be automated if the
</span><br>
<span class="quotelev1">&gt; application just launches a whole new copy of itself via whatever
</span><br>
<span class="quotelev1">&gt; top-level means was used to launch itself in the first place.
</span><br>
<p>MPI-2 does support the MPI_COMM_JOIN and MPI_COMM_ACCEPT/ 
<br>
MPI_COMM_CONNECT models.  We do support this in Open MPI, but the  
<br>
restrictions (in terms of ORTE) may not be sufficient for you.
<br>
<p>Some other random notes in no particular order:
<br>
<p>- As you noted, the LSF support is *very* new; it was just added last  
<br>
week.
<br>
<p>- It also likely doesn't work yet; we started the integration work  
<br>
and ran into a technical issue that required further discussion with  
<br>
Platform.  They're currently looking into it; we stopped the LSF work  
<br>
in ORTE until they get back to us.
<br>
<p>- FWIW, one of the main reasons OMPI/ORTE didn't add extensive/ 
<br>
flexible support for dynamic addition of resources was the potential  
<br>
for queue time.  Many systems run &quot;full&quot; all the time, so if you try  
<br>
to acquire more resources, you could just sit in a queue for minutes/ 
<br>
hours/days/weeks before getting nodes.  While it is certainly  
<br>
possible to program with this model, we didn't really want to get  
<br>
into the rats nest of corner cases that this would entail, especially  
<br>
since very few users are asking for it.
<br>
<p>- That being said, MPI_THREAD_MULTIPLE and MPI_COMM_SPAWN *might*  
<br>
offer a way out here.  But I think a) THREAD_MULTIPLE isn't working  
<br>
yet (other OMPI members are working on this), and b) even when  
<br>
THREAD_MULTIPLE works, there will be ORTE issues to deal with  
<br>
(canceling pending resource allocations, etc.).  Ralph mentioned that  
<br>
someone else is working on such things on the TM/PBS/Torque side; I  
<br>
haven't followed that effort closely.
<br>
<p><span class="quotelev1">&gt; well, certainly part of the issue is the need (or at least strong
</span><br>
<span class="quotelev1">&gt; preference) to support 6.2 -- but read on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hmm, i'll need to review the APIs in more detail, but here is my
</span><br>
<span class="quotelev1">&gt; current understanding:
</span><br>
<span class="quotelev1">&gt; there appear to be some overlaps between the ls_* and lsb_* functions,
</span><br>
<span class="quotelev1">&gt; but they seem basically compatible as far as i can tell. almost all
</span><br>
<span class="quotelev1">&gt; the functions have a command line version as well, for example:
</span><br>
<span class="quotelev1">&gt; lsb_submit()/bsub
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lsb_getalloc()/none and lsb_launch()/blaunch are new with LSF 7.0, but
</span><br>
<span class="quotelev1">&gt; appear to just be a different (simpler) interface to existing
</span><br>
<span class="quotelev1">&gt; functionality in the LSB_* env vars and the ls_rexec()/lsgrun commands
</span><br>
<span class="quotelev1">&gt; -- although, as you say, perhaps platform will hook or enhance them
</span><br>
<span class="quotelev1">&gt; later. but, the key issue is that lsb_launch() just starts tasks -- it
</span><br>
<span class="quotelev1">&gt; does not perform or interact with the queue or job control (much?).
</span><br>
<span class="quotelev1">&gt; so, you can't use these functions to get an allocation in the first
</span><br>
<span class="quotelev1">&gt; place, and you have to be careful not to use them as a way around the
</span><br>
<span class="quotelev1">&gt; queuing system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ as a side note, the function ls_rexecv()/lsgrun is the one i have
</span><br>
<span class="quotelev1">&gt; heard admins do not like because it can break queuing/accounting, and
</span><br>
<span class="quotelev1">&gt; might try to disable somehow. i don't really buy that, because it's
</span><br>
<span class="quotelev1">&gt; not you can disable it and have the system still work, since (as
</span><br>
<span class="quotelev1">&gt; above) || job launching depends on it. i guess if you really don't
</span><br>
<span class="quotelev1">&gt; care about || launching maybe you could. but, if used properly after a
</span><br>
<span class="quotelev1">&gt; proper allocation i don't think there should (or even can) be a
</span><br>
<span class="quotelev1">&gt; problem. ]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so, lsb_submit()/bsub is a combination allocate/launch -- you specify
</span><br>
<span class="quotelev1">&gt; the allocation size you want, and when it's all ready, it runs the
</span><br>
<span class="quotelev1">&gt; 'job' (really the job launcher) only on one (randomly chosen) 'head'
</span><br>
<span class="quotelev1">&gt; node from the allocation, with the env vars set so the launcher can
</span><br>
<span class="quotelev1">&gt; use ls_rexec/lsgrun functions to start the rest of the job. there are
</span><br>
<span class="quotelev1">&gt; of course various script wrappers you can use (mpijob, pvmjob, etc)
</span><br>
<span class="quotelev1">&gt; instead of your 'real job'. then, i think lsf *should* try to track
</span><br>
<span class="quotelev1">&gt; what processes get started via the wrapper / head process so it knows
</span><br>
<span class="quotelev1">&gt; they are part of the same job. i dunno if it really does that -- but,
</span><br>
<span class="quotelev1">&gt; my guess is that at the least it assumes the allocation is in use
</span><br>
<span class="quotelev1">&gt; until the original process ends. in any case, the wrapper / head
</span><br>
<span class="quotelev1">&gt; process examines the environment vars and uses ls_rexec()/lsgrun or
</span><br>
<span class="quotelev1">&gt; the like to actually run N copies of the 'real job' executable. in
</span><br>
<span class="quotelev1">&gt; 7.0, it can conveniently use lsb_getalloc() and lsb_launch(), but that
</span><br>
<span class="quotelev1">&gt; doesn't really change any semantics as far as i know. one could
</span><br>
<span class="quotelev1">&gt; imaging that calling lsb_launch() instead of ls_rexec() might be
</span><br>
<span class="quotelev1">&gt; preferable from a process tracking point of view, but i don't see why
</span><br>
<span class="quotelev1">&gt; Platform couldn't hook ls_rexec() just as well as lsb_launch().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i really need to get a little more confidence on that issue, since
</span><br>
<span class="quotelev1">&gt; it's what determines what actions will (or perhaps already do in
</span><br>
<span class="quotelev1">&gt; practice) 'break' the queuing/reporting system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; there are some 'allocate only' functions as well, such as
</span><br>
<span class="quotelev1">&gt; ls_placereq()/lsplace -- these can just return a host list / set the
</span><br>
<span class="quotelev1">&gt; env vars without running anything at first. apparently, you need to
</span><br>
<span class="quotelev1">&gt; run something 'soon' on the resultant hosts or the load balancer might
</span><br>
<span class="quotelev1">&gt; get confused and reuse them. also, since this doesn't seem to go
</span><br>
<span class="quotelev1">&gt; through the queues, it's probably not a viable set of functions to
</span><br>
<span class="quotelev1">&gt; really use. a red herring, as far as i'm concerned.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; there is also an lsb_runjob() that is similar to lsb_launch(), but for
</span><br>
<span class="quotelev1">&gt; an already submitted job. so, if one were to lsb_sumbit() with an
</span><br>
<span class="quotelev1">&gt; option set to never launch it automatically, and then one were to run
</span><br>
<span class="quotelev1">&gt; lsb_runjob(), you can avoid the queue and/or force the use of certain
</span><br>
<span class="quotelev1">&gt; hosts? i guess this is also not a good function to use, but at least
</span><br>
<span class="quotelev1">&gt; the queuing system would be aware of any bad behavior (queue skipping
</span><br>
<span class="quotelev1">&gt; via ls_placereq() to get extra hosts, for instance) in this case ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; there does *not* appear to be an option to lsb_submit() that allows a
</span><br>
<span class="quotelev1">&gt; non-blocking programmatic callback when allocation is complete. if
</span><br>
<span class="quotelev1">&gt; there was, it would need to deal with process tracking issues, or
</span><br>
<span class="quotelev1">&gt; maybe just merge the old and new jobs somehow in that case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so to speak to the original point, it would indeed be nice to be able
</span><br>
<span class="quotelev1">&gt; to do additional allocations (and then an lsb_launch) with a simple
</span><br>
<span class="quotelev1">&gt; programmatic interface for completeness, but i don't see one. however,
</span><br>
<span class="quotelev1">&gt; lsb_submit() is pretty close -- it makes a 'new' job, but i think
</span><br>
<span class="quotelev1">&gt; that's okay. the initial daemon that gets run on the 'head' (i.e.
</span><br>
<span class="quotelev1">&gt; randomly chosen) node of the new job will run an lsb_launch() or
</span><br>
<span class="quotelev1">&gt; similar to start up the remaining N-1 daemons as children -- thus
</span><br>
<span class="quotelev1">&gt; hopefully keeping the queuing system and process tracking happy. or
</span><br>
<span class="quotelev1">&gt; you could use some LSF option / wrapper script to tell it to run the
</span><br>
<span class="quotelev1">&gt; same daemon on all N hosts for you, if a some suitable option/wrapper
</span><br>
<span class="quotelev1">&gt; exists anyway. so, in summary lsb_sumit() does allocation + one
</span><br>
<span class="quotelev1">&gt; (non-optional) launch on allocation completion. lsb_launch() (or
</span><br>
<span class="quotelev1">&gt; similar) does only launching, should probably only be run from the
</span><br>
<span class="quotelev1">&gt; single process started from an lsb_submit(), and should only launch
</span><br>
<span class="quotelev1">&gt; things on the allocation given by lsb_getalloc() (or env vars).
</span><br>
<p>I am certainly not an expert on LSF (nor its API) -- I only started  
<br>
using it last week!  Do you have any contacts to ask at Platform?   
<br>
They would likely be the best ones to discuss this with.
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
<li><strong>Next message:</strong> <a href="1903.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
<li><strong>Previous message:</strong> <a href="1901.php">Sven Stork: "Re: [OMPI devel] Orte update"</a>
<li><strong>In reply to:</strong> <a href="1900.php">Matthew Moskewicz: "[OMPI devel] Fwd: lsf support / farm use models"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1920.php">Bill McMillan: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
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
