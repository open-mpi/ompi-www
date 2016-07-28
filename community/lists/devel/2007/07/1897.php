<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jul 15 15:49:06 2007" -->
<!-- isoreceived="20070715194906" -->
<!-- sent="Sun, 15 Jul 2007 12:49:00 -0700" -->
<!-- isosent="20070715194900" -->
<!-- name="Matthew Moskewicz" -->
<!-- email="moskewcz_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: lsf support / farm use models" -->
<!-- id="325001540707151249y2a7d41f6p625fde12c5f145b5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.2527.1184528084.6844.devel_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-07-15 15:49:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1898.php">Ralph Castain: "[OMPI devel] Removal of cellid"</a>
<li><strong>Previous message:</strong> <a href="1896.php">Paul H. Hargrove: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1899.php">Ralph Castain: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<li><strong>Reply:</strong> <a href="1899.php">Ralph Castain: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Welcome! Yes, Jeff and I have been working on the LSF support based on 7.0
</span><br>
<span class="quotelev1">&gt; features in collab with the folks at Platform.
</span><br>
<p><p>sounds good. i'm happy to be involved with such a nice active project!
<br>
<p><p><span class="quotelev2">&gt; &gt; 1) it appears that you (jeff, i guess ;) are using new LSF 7.0 API
</span><br>
<span class="quotelev1">&gt; features.
</span><br>
<span class="quotelev2">&gt; &gt; i'm working to support customers in the EDA space, and it's not clear
</span><br>
<span class="quotelev1">&gt; if/when
</span><br>
<span class="quotelev2">&gt; &gt; they will migrate to 7.0 -- not to mention that our company (cadence)
</span><br>
<span class="quotelev1">&gt; doesn't
</span><br>
<span class="quotelev2">&gt; &gt; appear to have LSF 7.0 yet. i'm still looking in to the deatils, but it
</span><br>
<span class="quotelev2">&gt; &gt; appears that (from the Platform docs) lsb_getalloc is probably just a
</span><br>
<span class="quotelev1">&gt; thin
</span><br>
<span class="quotelev2">&gt; &gt; wrapper around the LSB_MCPU_HOSTS (spelling?) environment variable. so
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev2">&gt; &gt; could be worked around fairly easily. i dunno about lsb_launch -- it
</span><br>
<span class="quotelev1">&gt; seems
</span><br>
<span class="quotelev2">&gt; &gt; equivalent to a set of ls_rtask() calls (one per process). however, i
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev2">&gt; &gt; heard that there can be significant subtleties with the semantics of
</span><br>
<span class="quotelev1">&gt; these
</span><br>
<span class="quotelev2">&gt; &gt; functions, in terms of compatibility across differently configured
</span><br>
<span class="quotelev2">&gt; &gt; LSF-controlled farms, specifically with regrads to administrators
</span><br>
<span class="quotelev1">&gt; ability to
</span><br>
<span class="quotelev2">&gt; &gt; track and control job execution. personally, i don't see how it's really
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; possible for LSF to prevent 'bad' users from spamming out jobs or
</span><br>
<span class="quotelev2">&gt; &gt; short-cutting queues, but perhaps some of the methods they attempt to
</span><br>
<span class="quotelev1">&gt; use can
</span><br>
<span class="quotelev2">&gt; &gt; complicate things for a library like open-rte.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After lengthy discussions with Platform, it was deemed the best path
</span><br>
<span class="quotelev1">&gt; forward
</span><br>
<span class="quotelev1">&gt; is to use the lsb_getalloc interface. While it currently reads the enviro
</span><br>
<span class="quotelev1">&gt; variable, they indicated a potential change to read a file instead for
</span><br>
<span class="quotelev1">&gt; scalability. Rather than chasing any changes, we all agreed that using
</span><br>
<span class="quotelev1">&gt; lsb_getalloc would remain the &quot;stable&quot; interface - so that is what we
</span><br>
<span class="quotelev1">&gt; used.
</span><br>
<p><p>understood.
<br>
<p>Similar reasons for using lsb_launch. I would really advise against making
<br>
<span class="quotelev1">&gt; any changes away from that support. Instead, we could take a lesson from
</span><br>
<span class="quotelev1">&gt; our
</span><br>
<span class="quotelev1">&gt; bproc support and simply (a) detect if we are on a pre-7.0 release, and
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt; (b) build our own internal wrapper that provides back-support. See the
</span><br>
<span class="quotelev1">&gt; bproc
</span><br>
<span class="quotelev1">&gt; pls component for examples.
</span><br>
<p><p>that sounds fine -- should just be a matter of a little configure magic,
<br>
right? i already had to change the current configure stuff to be able to
<br>
build at all under 6.2 (since the current configure check requires 7.0 to
<br>
pass), so i guess it shouldn't be too much harder to mimic the bproc method
<br>
of detecting multiple versions, assuming it's really the same sort of thing.
<br>
basically, i'd keep the main LSF configure check downgraded as i have
<br>
currently done in my working copy, but add a new 7.0 check that is really
<br>
the current truck check.
<br>
<p>then, i'll make signature-compatible replacements (with the same names? or
<br>
add internal functions to abstract things? or just add #ifdef's inline where
<br>
they are used?) for each missing LSF 7.0 function (implemented using the 6.1or
<br>
6.2 API), and have configure only build them if the system LSF doesn't have
<br>
them. uhm, once i figure out how to do that, anyway ... i guess i'll ask for
<br>
more help if the bproc code doesn't enlighten me. if successful, i should be
<br>
able to track trunk easily with respect to the LSF version issue at least.
<br>
<p>i'll probably just continue experimenting on my own for the moment (tracking
<br>
any updates to the main trunk LSF support) to see if i can figure it out.
<br>
any advice the best way to get such back support into trunk, if and when if
<br>
exists / is working?
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2) this brings us to point 2 -- upon talking to the author(s) of
</span><br>
<span class="quotelev1">&gt; cadence's
</span><br>
<span class="quotelev2">&gt; &gt; internal open-rte-like library, several key issues were raised. mainly,
</span><br>
<span class="quotelev2">&gt; &gt; customers want their applications to be 'farm-friendly' in several key
</span><br>
<span class="quotelev1">&gt; ways.
</span><br>
<span class="quotelev2">&gt; &gt; firstly, they do not want any persistent daemons running outside of a
</span><br>
<span class="quotelev1">&gt; given
</span><br>
<span class="quotelev2">&gt; &gt; job -- this requirement seems met by the current open-mpi default
</span><br>
<span class="quotelev1">&gt; behavior, at
</span><br>
<span class="quotelev2">&gt; &gt; least as far i can tell. secondly, they prefer (strongly) that
</span><br>
<span class="quotelev1">&gt; applications
</span><br>
<span class="quotelev2">&gt; &gt; acquire resources incrementally, and perform work with whatever nodes
</span><br>
<span class="quotelev1">&gt; are
</span><br>
<span class="quotelev2">&gt; &gt; currently available, rather than forcing a large up-front node
</span><br>
<span class="quotelev1">&gt; allocation.
</span><br>
<span class="quotelev2">&gt; &gt; fault tolerance is nice too, although it's unclear to me if it's really
</span><br>
<span class="quotelev2">&gt; &gt; practically needed. in any case, many of our applications can structure
</span><br>
<span class="quotelev1">&gt; their
</span><br>
<span class="quotelev2">&gt; &gt; computation to use resources in just such a way, generally by dividing
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; work into independent, restartable pieces ( i.e. they are embarrassingly
</span><br>
<span class="quotelev1">&gt; ||).
</span><br>
<span class="quotelev2">&gt; &gt; also, MPI communication + MPI-2 process creation seems to be a
</span><br>
<span class="quotelev1">&gt; reasonable
</span><br>
<span class="quotelev2">&gt; &gt; interface for handling communication and dynamic process creation on the
</span><br>
<span class="quotelev2">&gt; &gt; application side. however, it's not clear that open-rte supports the
</span><br>
<span class="quotelev1">&gt; needed
</span><br>
<span class="quotelev2">&gt; &gt; dynamic resource acquisition model in any of the ras/pls components i
</span><br>
<span class="quotelev1">&gt; looked
</span><br>
<span class="quotelev2">&gt; &gt; at. in fact, other that just folding everything in the pls component,
</span><br>
<span class="quotelev1">&gt; it's not
</span><br>
<span class="quotelev2">&gt; &gt; clear that the entire flow via the rmgr really supports it very well.
</span><br>
<span class="quotelev2">&gt; &gt; specifically for LSF, the use model is that the initial job either is
</span><br>
<span class="quotelev1">&gt; created
</span><br>
<span class="quotelev2">&gt; &gt; with bsub/lsb_submit(),  (or automatically submits itself as step zero
</span><br>
<span class="quotelev2">&gt; &gt; perhaps) to run initially on N machines. N should be 'small' (1-16) --
</span><br>
<span class="quotelev1">&gt; perhaps
</span><br>
<span class="quotelev2">&gt; &gt; only 1 for simplicity. then, as the application runs, it will continue
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt; &gt; consume more resources as limited by the farm status, the user
</span><br>
<span class="quotelev1">&gt; selection, and
</span><br>
<span class="quotelev2">&gt; &gt; the max # of processes that the job can usefully support (generally
</span><br>
<span class="quotelev1">&gt; 'large' --
</span><br>
<span class="quotelev2">&gt; &gt; 100-1000 cpus).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenRTE will be undergoing some changes shortly, so I would strongly
</span><br>
<span class="quotelev1">&gt; recommend you avoid making major changes without first discussing how they
</span><br>
<span class="quotelev1">&gt; fit into the new design with us. While cadence is a nice system, there are
</span><br>
<span class="quotelev1">&gt; tradeoffs in every design approach - and it isn't clear that theirs is
</span><br>
<span class="quotelev1">&gt; necessarily any better than another.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We could argue for quite some time about their beliefs regarding customers
</span><br>
<span class="quotelev1">&gt; desires - I have heard these statements in multiple directions, with
</span><br>
<span class="quotelev1">&gt; people
</span><br>
<span class="quotelev1">&gt; citing claims of customer &quot;demands&quot; pointing every which way. Bottom line,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; from what I can tell, is that customers want something that works and is
</span><br>
<span class="quotelev1">&gt; transparent to them - how that is done is largely irrelevant.
</span><br>
<p><p>yeah, i agree with that completely.
<br>
<p><p>We have other people working on dynamic resource allocation for other
<br>
<span class="quotelev1">&gt; systems (e.g., TM), and are making some modifications to better support
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; kind of requirement. We can discuss those with you if you like to see how
</span><br>
<span class="quotelev1">&gt; they meet your needs. Not much was done in the past in that regard because
</span><br>
<span class="quotelev1">&gt; people weren't interested in it. Frankly, we are somewhat moving in the
</span><br>
<span class="quotelev1">&gt; other direction now, so supporting it in the manner you describe may
</span><br>
<span class="quotelev1">&gt; possibly become harder rather than easier. You may have to accept some
</span><br>
<span class="quotelev1">&gt; less-than-ideal result, I fear.
</span><br>
<p><p>well, i guess it basically boils down to having some level of support for
<br>
dynamic resource allocation, so that if an application supports or needs to
<br>
structure it's computation that way, it can do so. my impression from
<br>
reading the MPI-2 spec (or somewhere else?) was that a big part of the
<br>
motivation behind MPI-2 dynamic processes creation was to support just such
<br>
models (a la pvm) -- and it seems that the rte layer needs matching support,
<br>
or it can't really work well. if there is some support at all, or if it's
<br>
not too hard to add, i guess i'll be happy.
<br>
<p>that said, i'd like to reiterate (and skip this paragraph if you get bored)
<br>
that, at a basic level, i think the ideas behind pvm and dynamic resource
<br>
allocation are pretty well founded and useful. the idea is to work *with*
<br>
the existing DRM, rather than only having a private allocation layer over a
<br>
static allocation from the host DRM. for applications that are capable of
<br>
being dynamically flexible about the number of CPUs they need, static
<br>
initial allocation just doesn't work too well -- a small initial allocation
<br>
may limit the || too much, whereas a large allocation may be wasteful, and
<br>
may (vastly) increase the queue time to job startup. in fact, when the queue
<br>
time is long, it's extra-wasteful, because the DRM has to hold a bunch of
<br>
hosts idle waiting for the whole allocation to be satisfied. in all i've
<br>
heard, this seems to be the most 'real' customer issue -- that is, i believe
<br>
the other cadence distributed processing guys when they say that they are
<br>
having or have had problems with various applications -- both MPI based
<br>
(LAM/MPI i think -- which had other problems concerning the deamon issue) as
<br>
well as custom frameworks that simply made large (&gt;100) bsub requests. the
<br>
most pathological thing i've heard internally is that for maximum
<br>
portability across different LSF farms, not only do you need to acquire
<br>
resources incrementally, but that you need to acquire each CPU individually
<br>
using a single bsub -- that is, you shouldn't even use the -n option to bsub
<br>
*at all*. this actually simplifies things in some ways, but i don't really
<br>
know if i believe it. anyway, that's what i've heard, from the cadence
<br>
open-rte-alike people that are really running applications on customer
<br>
farms. somehow, there are problems with accounting or something on certain
<br>
farms if you bsub non-single cpu tasks. on second thought, i can actually
<br>
believe this, because the EDA community really doesn't run many true
<br>
scientific-computing style multiprocessor jobs at the moment -- mainly, they
<br>
are running multiple separate jobs that only loosely communicate via the
<br>
file system, or not at all -- there's just some script that launch all the
<br>
pieces of a job, and the pieces are in charge of co-ordinating with
<br>
themselves if needed. since application have evolved from this 'primitive'
<br>
form of using multiple CPUs, it's not too surprising that farms might not be
<br>
well configured to support the more traditional scientific computing use
<br>
models. i'm continuing to investigate the issue, and i'll have more data as
<br>
i start enabling farm support in my own app on some real customer farms --
<br>
assuming i can get something working with open-mpi, of course! ;)
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; so, i figure it's up to me to implement this stuff ;) ... clearly, i
</span><br>
<span class="quotelev1">&gt; want to
</span><br>
<span class="quotelev2">&gt; &gt; keep the 'normal' style ras/pls for LSF working, but somehow add the
</span><br>
<span class="quotelev1">&gt; dynamic
</span><br>
<span class="quotelev2">&gt; &gt; behavior as an option. my initial thought was to (in the dynamic case)
</span><br>
<span class="quotelev2">&gt; &gt; basically ignore/fudge the ras/rmaps(/pls?) stages and simply use
</span><br>
<span class="quotelev2">&gt; &gt; bsub/lsb_submit() in pls to launch new daemons as needed/requested.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just an FYI: this could cause unexpected behavior in the current
</span><br>
<span class="quotelev1">&gt; implementation as a number of subsystems depend upon the info coming from
</span><br>
<span class="quotelev1">&gt; those stages. May not be as big a problem in the revised implementation
</span><br>
<span class="quotelev1">&gt; currently underway.
</span><br>
<p><p>duly noted. i don't pretend to be able to follow the current control flow at
<br>
the moment. i think just running the debug version with all the printouts
<br>
should help me a lot there. also, perhaps if i just make a rmgr_dyn_lsf, and
<br>
don't use sds, then there might not be as many subsystems involved to
<br>
complain. actually, i suspect the LSF specific part would be (very) small,
<br>
so perhaps it could be rmgr_dynurm + a new component type like dynraspls to
<br>
encapsulate the DRM specific part.
<br>
<p><span class="quotelev1">&gt; again,
</span><br>
<span class="quotelev2">&gt; &gt; though it's not clear that the current control flow supports this well.
</span><br>
<span class="quotelev1">&gt; given
</span><br>
<span class="quotelev2">&gt; &gt; that there may be a large (10sec - 15min) delay between lsb_submit() and
</span><br>
<span class="quotelev1">&gt; job
</span><br>
<span class="quotelev2">&gt; &gt; launch, it may be necessary to both acquire minimum size blocks of new
</span><br>
<span class="quotelev1">&gt; daemons
</span><br>
<span class="quotelev2">&gt; &gt; at a time, and to have some non-blocking way to perform spawning. for
</span><br>
<span class="quotelev1">&gt; example,
</span><br>
<span class="quotelev2">&gt; &gt; in the current code, the MPI-2 spawn is blocking because it needs to
</span><br>
<span class="quotelev1">&gt; return a
</span><br>
<span class="quotelev2">&gt; &gt; communicator to the spawned process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, that is not the real reason. It is blocking because the parent
</span><br>
<span class="quotelev1">&gt; wants to send a message to the new children telling them where/how to
</span><br>
<span class="quotelev1">&gt; rendezvous with it. The problem is that the parent doesn't know the name
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev1">&gt; the child until after the spawn is completed - because we need the child's
</span><br>
<span class="quotelev1">&gt; OOB contact info so we can send the message. The easiest way to ensure
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; all the handshakes occurred correctly was to simply make comm_spawn
</span><br>
<span class="quotelev1">&gt; blocking.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Given that comm_spawn in our current environments is relatively fast, that
</span><br>
<span class="quotelev1">&gt; was deemed to be an acceptable solution. Obviously, your stated time
</span><br>
<span class="quotelev1">&gt; frames
</span><br>
<span class="quotelev1">&gt; are much, much longer, so that might not work in those cases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be easier to change it under the revised implementation, which
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev1">&gt; better support that kind of difference between environments. In the
</span><br>
<span class="quotelev1">&gt; current
</span><br>
<span class="quotelev1">&gt; one, it could be quite problematic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; however, this is not really necessary for
</span><br>
<span class="quotelev2">&gt; &gt; the application to continue -- it can continue with other work until the
</span><br>
<span class="quotelev1">&gt; new
</span><br>
<span class="quotelev2">&gt; &gt; worker is up and running. perhaps some form of multi-threading could
</span><br>
<span class="quotelev1">&gt; help with
</span><br>
<span class="quotelev2">&gt; &gt; this, but it's not totally clear. i think i would prefer some
</span><br>
<span class="quotelev1">&gt; lower-level
</span><br>
<span class="quotelev2">&gt; &gt; open-rte calls that perform daemon pre-allocation ( i.e. dynamic
</span><br>
<span class="quotelev1">&gt; ras/daemon
</span><br>
<span class="quotelev2">&gt; &gt; startup), such that i know that if there are idle daemons, it is safe to
</span><br>
<span class="quotelev1">&gt; spawn
</span><br>
<span class="quotelev2">&gt; &gt; without risk of blocking.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll have to leave that up to the MPI folks on the team - we have
</span><br>
<span class="quotelev1">&gt; historically resisted the idea of having one environment behave
</span><br>
<span class="quotelev1">&gt; differently
</span><br>
<span class="quotelev1">&gt; from another so as to limit &quot;user astonishment&quot;. However, if they can live
</span><br>
<span class="quotelev1">&gt; with that change, I personally have no problem with it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We just made a significant change to daemon launch procedures, and the
</span><br>
<span class="quotelev1">&gt; flow
</span><br>
<span class="quotelev1">&gt; between the stages is going to be completely revamped over the next few
</span><br>
<span class="quotelev1">&gt; months. How that affects your thinking is unclear to me at the moment, but
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; might be worth further discussion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just as an FYI: we already check to see if there are available daemons,
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; we do spawn upon them if so. The issue here sounds like it is more in
</span><br>
<span class="quotelev1">&gt; obtaining a larger-than-immediately-needed allocation, and spawning
</span><br>
<span class="quotelev1">&gt; daemons
</span><br>
<span class="quotelev1">&gt; on all of it just-in-case they are needed. There is nothing in the system
</span><br>
<span class="quotelev1">&gt; that precludes doing so - we made a design decision early on not to do it,
</span><br>
<span class="quotelev1">&gt; but that's not a requirement. Again, the revised implementation would let
</span><br>
<span class="quotelev1">&gt; you do that much easier than the current one.
</span><br>
<p><p><p>hmm, i'm thinking that if there was a way to directly tell open-rte to
<br>
acquire more daemons non-blockingly, that would be enough.
<br>
in the LSF case, i think one would bsub the daemons themselves (with
<br>
arguments sufficient to phone-home, so no sds needed?), so (node acquisition
<br>
== daemon startup).
<br>
<p>this functions could be called heuristically by MPI-2 spawn type functions,
<br>
or even manually by the application (in the short term). it should not
<br>
effect the semantics of the MPI-2 calls themselves.
<br>
<p>the goal is that one could determine (at least with some confidence) if
<br>
there were any free (and ready to spawn quickly without blocking) resources
<br>
before issuing a spawn call. this might just mean examining the value of the
<br>
MPI universe size (and that this value could change), or it might need some
<br>
new interface, i dunno.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; oh, and at first glance there appears to be a bunch of duplicated code
</span><br>
<span class="quotelev1">&gt; across
</span><br>
<span class="quotelev2">&gt; &gt; the various flavors of ras (and similarly for pls, sds). is it
</span><br>
<span class="quotelev1">&gt; reasonable to
</span><br>
<span class="quotelev2">&gt; &gt; attempt to factor things out? i seem to recall reading that some major
</span><br>
<span class="quotelev1">&gt; rework
</span><br>
<span class="quotelev2">&gt; &gt; was in progress, so perhaps this would not be a good time?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Definitely not a good time - I would wait awhile and let's see how much of
</span><br>
<span class="quotelev1">&gt; it remains. Some of it is there because of historical uncertainty over
</span><br>
<span class="quotelev1">&gt; what
</span><br>
<span class="quotelev1">&gt; would be common and what wouldn't be - some might be there for a reason
</span><br>
<span class="quotelev1">&gt; known to the original author. I would advise asking before assuming...
</span><br>
<p><p>okay.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; uhm ... well, any advice on anything here?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Matt.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>thanks again,
<br>
<p>Matt.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1897/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1898.php">Ralph Castain: "[OMPI devel] Removal of cellid"</a>
<li><strong>Previous message:</strong> <a href="1896.php">Paul H. Hargrove: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1899.php">Ralph Castain: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<li><strong>Reply:</strong> <a href="1899.php">Ralph Castain: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
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
