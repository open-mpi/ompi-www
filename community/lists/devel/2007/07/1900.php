<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jul 15 23:18:31 2007" -->
<!-- isoreceived="20070716031831" -->
<!-- sent="Sun, 15 Jul 2007 20:18:25 -0700" -->
<!-- isosent="20070716031825" -->
<!-- name="Matthew Moskewicz" -->
<!-- email="moskewcz_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: lsf support / farm use models" -->
<!-- id="325001540707152018x342c9c35i65ec3b4be14807c4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Matthew Moskewicz (<em>moskewcz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-15 23:18:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1901.php">Sven Stork: "Re: [OMPI devel] Orte update"</a>
<li><strong>Previous message:</strong> <a href="1899.php">Ralph Castain: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1902.php">Jeff Squyres: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<li><strong>Reply:</strong> <a href="1902.php">Jeff Squyres: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<li><strong>Maybe reply:</strong> <a href="1920.php">Bill McMillan: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<li><strong>Maybe reply:</strong> <a href="1975.php">Bill McMillan: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi again,
<br>
<p>[i'm going to snip out the sections that seem resolved]
<br>
[also, sorry about mutating the subject last time -- oops.]
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This sounds fine - you'll find that the bproc pls does the exact same thing.
</span><br>
<span class="quotelev1">&gt;  In that case, we use #ifdefs since the APIs are actually different between
</span><br>
<span class="quotelev1">&gt;  the versions - we just create a wrapper inside the bproc pls code for the
</span><br>
<span class="quotelev1">&gt;  older version so that we can always call the same API. I'm not sure what the
</span><br>
<span class="quotelev1">&gt;  case will be in LSF - I believe the function calls are indeed different, so
</span><br>
<span class="quotelev1">&gt;  you might be able to use the same approach.
</span><br>
<p>okay
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; i'll probably just continue experimenting on my own for the moment (tracking
</span><br>
<span class="quotelev2">&gt;  &gt; any updates to the main trunk LSF support) to see if i can figure it out. any
</span><br>
<span class="quotelev2">&gt;  &gt; advice the best way to get such back support into trunk, if and when if exists
</span><br>
<span class="quotelev2">&gt;  &gt; / is working?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The *best* way would be for you to sign a third-party agreement - see the
</span><br>
<span class="quotelev1">&gt;  web site for details and a copy. Barring that, the only option would be to
</span><br>
<span class="quotelev1">&gt;  submit the code through either Jeff or I. We greatly prefer the agreement
</span><br>
<span class="quotelev1">&gt;  method as it is (a) less burdensome on us and (b) gives you greater
</span><br>
<span class="quotelev1">&gt;  flexibility.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>i'll talk to 'the man' -- it should be okay ... eventually, at least ...
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't speak to the motivation behind MPI-2 - the others in the group can
</span><br>
<span class="quotelev1">&gt;  do a much better job of that. What I can say is that we started out with a
</span><br>
<span class="quotelev1">&gt;  design to support such modes of operation as dynamic farms, but the group
</span><br>
<span class="quotelev1">&gt;  has been moving away from it due to a combination of performance impacts,
</span><br>
<span class="quotelev1">&gt;  reliability, and (frankly) lack of interest from our user community. Our
</span><br>
<span class="quotelev1">&gt;  intent now is to cut the RTE back to the basics required to support the MPI
</span><br>
<span class="quotelev1">&gt;  standard, including MPI-2 - which arguably says nothing about dynamic
</span><br>
<span class="quotelev1">&gt;  resource allocation.
</span><br>
<p>that's true -- dynamic processes can be useful even under a static
<br>
allocation. in fact, in the short term for my particular application,
<br>
i'll probably do just that -- the user picks an initial allocation,
<br>
and then i just do the best i can. hopefully the allocations will be
<br>
'small enough' to get away without dynamic acquisition for a while (a
<br>
year?). beyond that, i guess i'm just one of those guys that thinks
<br>
it's a shame that MPI supplanted pvm so long ago in the first place.
<br>
and yes, i already looked into modifying pvm instead, no thank you ...
<br>
;)
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not to say we won't support it - just indicating that such support will have
</span><br>
<span class="quotelev1">&gt;  lower priority and that the system will be designed primarily for other
</span><br>
<span class="quotelev1">&gt;  priorities. So dynamic resource allocation will have to be considered as an
</span><br>
<span class="quotelev1">&gt;  &quot;exception case&quot;, with all the attendant implications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>fair enough. i'm still hoping it won't be too exceptional, really. on
<br>
a related note, perhaps is it possible to 'join' running openMPI jobs
<br>
(using nameservers or whatnot)? if so, then application level
<br>
workarounds are also possible -- and can even be automated if the
<br>
application just launches a whole new copy of itself via whatever
<br>
top-level means was used to launch itself in the first place.
<br>
<p><span class="quotelev1">&gt; I think someone is feeding you a very extreme view of LSF. I have interacted
</span><br>
<span class="quotelev1">&gt;  for years with people working with LSF-based systems, and can count on the
</span><br>
<span class="quotelev1">&gt;  fingers of one hand the people who are operating the way you describe.
</span><br>
<p>perhaps -- i'm trying to convince the guy it's worth taking a look at
<br>
enhancing open-mpi/open-rte as opposed to continuing with his internal
<br>
effort. maybe i'll get him to chime in directly on this issue --
<br>
however ...
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Can* you use LSF that way? Sure. Is that how most people use it? Not from
</span><br>
<span class="quotelev1">&gt;  what I have seen. Still, if that's a mode you want to support...have at it!
</span><br>
<span class="quotelev1">&gt;  ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>... that said, his library already has the needed workarounds for this
<br>
usage model. still, the communication is much simpler -- TCP point to
<br>
point only (which is 'enough' for me now, but i'm not sure about the
<br>
future), and i'm a little worried about the maturity and (software
<br>
engineering and performance wise) scalability of his effort.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Keep in mind, though, that Open MPI is driven by performance for large-scale
</span><br>
<span class="quotelev1">&gt;  multiprocessor computations. As I indicated earlier, the type of operation
</span><br>
<span class="quotelev1">&gt;  you are describing will have to be treated as an &quot;exception case&quot;.
</span><br>
<span class="quotelev1">&gt;  Literally, this means you are welcome to try and make it work, but the
</span><br>
<span class="quotelev1">&gt;  fundamental operations of the system won't be designed to optimize that mode
</span><br>
<span class="quotelev1">&gt;  at the sacrifice of the primary objective.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>again, fair enough. ;)
<br>
<p><span class="quotelev2">&gt;  &gt; duly noted. i don't pretend to be able to follow the current control flow at
</span><br>
<span class="quotelev2">&gt;  &gt; the moment. i think just running the debug version with all the printouts
</span><br>
<span class="quotelev2">&gt;  &gt; should help me a lot there. also, perhaps if i just make a rmgr_dyn_lsf, and
</span><br>
<span class="quotelev2">&gt;  &gt; don't use sds, then there might not be as many subsystems involved to
</span><br>
<span class="quotelev2">&gt;  &gt; complain. actually, i suspect the LSF specific part would be (very) small, so
</span><br>
<span class="quotelev2">&gt;  &gt; perhaps it could be rmgr_dynurm + a new component type like dynraspls to
</span><br>
<span class="quotelev2">&gt;  &gt; encapsulate the DRM specific part.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You have to use sds as this is the framework where the application process
</span><br>
<span class="quotelev1">&gt;  learns its name. That framework will be receiving more responsibilities in
</span><br>
<span class="quotelev1">&gt;  the revised implementation, so you'll unfortunately have to use it. Your
</span><br>
<span class="quotelev1">&gt;  best bet (IMHO) would be to create an lsf_farm component in the new PLM when
</span><br>
<span class="quotelev1">&gt;  we get the system revised.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>sounds right -- some things will of course depend on when i need what
<br>
working where. but if possible i'll try to get in too deep before some
<br>
of these design changes are in. any hints on a timeline?
<br>
<p><span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; hmm, i'm thinking that if there was a way to directly tell open-rte to acquire
</span><br>
<span class="quotelev2">&gt;  &gt; more daemons non-blockingly, that would be enough.
</span><br>
<span class="quotelev2">&gt;  &gt; in the LSF case, i think one would bsub the daemons themselves (with arguments
</span><br>
<span class="quotelev2">&gt;  &gt; sufficient to phone-home, so no sds needed?), so (node acquisition == daemon
</span><br>
<span class="quotelev2">&gt;  &gt; startup).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You could - though this sounds pretty non-scalable to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>hmm, in what way? my impression is that you need to go back to an LSF
<br>
queue on every request for new resources from LSF. there might be some
<br>
way to give a (variably) higher priority to running jobs, but it's
<br>
still going to require a bsub()/lsb_submit() (or similar API) to get
<br>
new resources. otherwise, it defeats the queuing / job control system.
<br>
i think.
<br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; this functions could be called heuristically by MPI-2 spawn type functions, or
</span><br>
<span class="quotelev2">&gt;  &gt; even manually by the application (in the short term). it should not effect the
</span><br>
<span class="quotelev2">&gt;  &gt; semantics of the MPI-2 calls themselves.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your best bet would be to have your own component so that you could do
</span><br>
<span class="quotelev1">&gt;  whatever you wanted with the spawn API. You could play with an RMGR
</span><br>
<span class="quotelev1">&gt;  component for now, but your best bet is clearly going to be the new PLM.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>sounds right. same potential timeline issues as above of course.
<br>
<p><span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; the goal is that one could determine (at least with some confidence) if there
</span><br>
<span class="quotelev2">&gt;  &gt; were any free (and ready to spawn quickly without blocking) resources before
</span><br>
<span class="quotelev2">&gt;  &gt; issuing a spawn call. this might just mean examining the value of the MPI
</span><br>
<span class="quotelev2">&gt;  &gt; universe size (and that this value could change), or it might need some new
</span><br>
<span class="quotelev2">&gt;  &gt; interface, i dunno.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You know, the real issue here (I think) is being driven by your use of bsub
</span><br>
<span class="quotelev1">&gt;  - which I believe is a batch launch request. Why would you want to do that
</span><br>
<span class="quotelev1">&gt;  instead of just directly calling lsb_launch()? I suspect we can get the
</span><br>
<span class="quotelev1">&gt;  Platform folks to give us an API to request additional node allocations from
</span><br>
<span class="quotelev1">&gt;  inside our program, so why not just use the API to launch? Or are you going
</span><br>
<span class="quotelev1">&gt;  the batch route because we don't currently have an API and you want to
</span><br>
<span class="quotelev1">&gt;  support older LSF versions?
</span><br>
<span class="quotelev1">&gt;  Might be more pain than it's worth...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>well, certainly part of the issue is the need (or at least strong
<br>
preference) to support 6.2 -- but read on.
<br>
<p>hmm, i'll need to review the APIs in more detail, but here is my
<br>
current understanding:
<br>
there appear to be some overlaps between the ls_* and lsb_* functions,
<br>
but they seem basically compatible as far as i can tell. almost all
<br>
the functions have a command line version as well, for example:
<br>
lsb_submit()/bsub
<br>
<p>lsb_getalloc()/none and lsb_launch()/blaunch are new with LSF 7.0, but
<br>
appear to just be a different (simpler) interface to existing
<br>
functionality in the LSB_* env vars and the ls_rexec()/lsgrun commands
<br>
-- although, as you say, perhaps platform will hook or enhance them
<br>
later. but, the key issue is that lsb_launch() just starts tasks -- it
<br>
does not perform or interact with the queue or job control (much?).
<br>
so, you can't use these functions to get an allocation in the first
<br>
place, and you have to be careful not to use them as a way around the
<br>
queuing system.
<br>
<p>[ as a side note, the function ls_rexecv()/lsgrun is the one i have
<br>
heard admins do not like because it can break queuing/accounting, and
<br>
might try to disable somehow. i don't really buy that, because it's
<br>
not you can disable it and have the system still work, since (as
<br>
above) || job launching depends on it. i guess if you really don't
<br>
care about || launching maybe you could. but, if used properly after a
<br>
proper allocation i don't think there should (or even can) be a
<br>
problem. ]
<br>
<p>so, lsb_submit()/bsub is a combination allocate/launch -- you specify
<br>
the allocation size you want, and when it's all ready, it runs the
<br>
'job' (really the job launcher) only on one (randomly chosen) 'head'
<br>
node from the allocation, with the env vars set so the launcher can
<br>
use ls_rexec/lsgrun functions to start the rest of the job. there are
<br>
of course various script wrappers you can use (mpijob, pvmjob, etc)
<br>
instead of your 'real job'. then, i think lsf *should* try to track
<br>
what processes get started via the wrapper / head process so it knows
<br>
they are part of the same job. i dunno if it really does that -- but,
<br>
my guess is that at the least it assumes the allocation is in use
<br>
until the original process ends. in any case, the wrapper / head
<br>
process examines the environment vars and uses ls_rexec()/lsgrun or
<br>
the like to actually run N copies of the 'real job' executable. in
<br>
7.0, it can conveniently use lsb_getalloc() and lsb_launch(), but that
<br>
doesn't really change any semantics as far as i know. one could
<br>
imaging that calling lsb_launch() instead of ls_rexec() might be
<br>
preferable from a process tracking point of view, but i don't see why
<br>
Platform couldn't hook ls_rexec() just as well as lsb_launch().
<br>
<p>i really need to get a little more confidence on that issue, since
<br>
it's what determines what actions will (or perhaps already do in
<br>
practice) 'break' the queuing/reporting system.
<br>
<p>there are some 'allocate only' functions as well, such as
<br>
ls_placereq()/lsplace -- these can just return a host list / set the
<br>
env vars without running anything at first. apparently, you need to
<br>
run something 'soon' on the resultant hosts or the load balancer might
<br>
get confused and reuse them. also, since this doesn't seem to go
<br>
through the queues, it's probably not a viable set of functions to
<br>
really use. a red herring, as far as i'm concerned.
<br>
<p>there is also an lsb_runjob() that is similar to lsb_launch(), but for
<br>
an already submitted job. so, if one were to lsb_sumbit() with an
<br>
option set to never launch it automatically, and then one were to run
<br>
lsb_runjob(), you can avoid the queue and/or force the use of certain
<br>
hosts? i guess this is also not a good function to use, but at least
<br>
the queuing system would be aware of any bad behavior (queue skipping
<br>
via ls_placereq() to get extra hosts, for instance) in this case ...
<br>
<p>there does *not* appear to be an option to lsb_submit() that allows a
<br>
non-blocking programmatic callback when allocation is complete. if
<br>
there was, it would need to deal with process tracking issues, or
<br>
maybe just merge the old and new jobs somehow in that case.
<br>
<p>so to speak to the original point, it would indeed be nice to be able
<br>
to do additional allocations (and then an lsb_launch) with a simple
<br>
programmatic interface for completeness, but i don't see one. however,
<br>
lsb_submit() is pretty close -- it makes a 'new' job, but i think
<br>
that's okay. the initial daemon that gets run on the 'head' (i.e.
<br>
randomly chosen) node of the new job will run an lsb_launch() or
<br>
similar to start up the remaining N-1 daemons as children -- thus
<br>
hopefully keeping the queuing system and process tracking happy. or
<br>
you could use some LSF option / wrapper script to tell it to run the
<br>
same daemon on all N hosts for you, if a some suitable option/wrapper
<br>
exists anyway. so, in summary lsb_sumit() does allocation + one
<br>
(non-optional) launch on allocation completion. lsb_launch() (or
<br>
similar) does only launching, should probably only be run from the
<br>
single process started from an lsb_submit(), and should only launch
<br>
things on the allocation given by lsb_getalloc() (or env vars).
<br>
<p>Matt.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1901.php">Sven Stork: "Re: [OMPI devel] Orte update"</a>
<li><strong>Previous message:</strong> <a href="1899.php">Ralph Castain: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1902.php">Jeff Squyres: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<li><strong>Reply:</strong> <a href="1902.php">Jeff Squyres: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<li><strong>Maybe reply:</strong> <a href="1920.php">Bill McMillan: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<li><strong>Maybe reply:</strong> <a href="1975.php">Bill McMillan: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
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
