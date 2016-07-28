<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jul 15 17:46:01 2007" -->
<!-- isoreceived="20070715214601" -->
<!-- sent="Sun, 15 Jul 2007 15:45:49 -0600" -->
<!-- isosent="20070715214549" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: lsf support / farm use models" -->
<!-- id="C2BFF1AD.3490%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="325001540707151249y2a7d41f6p625fde12c5f145b5_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-15 17:45:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1900.php">Matthew Moskewicz: "[OMPI devel] Fwd: lsf support / farm use models"</a>
<li><strong>Previous message:</strong> <a href="1898.php">Ralph Castain: "[OMPI devel] Removal of cellid"</a>
<li><strong>In reply to:</strong> <a href="1897.php">Matthew Moskewicz: "[OMPI devel] Fwd: lsf support / farm use models"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Matt
<br>
<p><p>On 7/15/07 1:49 PM, &quot;Matthew Moskewicz&quot; &lt;moskewcz_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Welcome! Yes, Jeff and I have been working on the LSF support based on 7.0
</span><br>
<span class="quotelev2">&gt;&gt; features in collab with the folks at Platform.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sounds good. i'm happy to be involved with such a nice active project!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) it appears that you (jeff, i guess ;) are using new LSF 7.0 API features.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i'm working to support customers in the EDA space, and it's not clear
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if/when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they will migrate to 7.0 -- not to mention that our company (cadence)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appear to have LSF 7.0 yet. i'm still looking in to the deatils, but it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appears that (from the Platform docs) lsb_getalloc is probably just a thin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrapper around the LSB_MCPU_HOSTS (spelling?) environment variable. so that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could be worked around fairly easily. i dunno about lsb_launch -- it seems
</span><br>
<span class="quotelev3">&gt;&gt;&gt; equivalent to a set of ls_rtask() calls (one per process). however, i have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; heard that there can be significant subtleties with the semantics of these
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functions, in terms of compatibility across differently configured
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LSF-controlled farms, specifically with regrads to administrators ability to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; track and control job execution. personally, i don't see how it's really
</span><br>
<span class="quotelev3">&gt;&gt;&gt; possible for LSF to prevent 'bad' users from spamming out jobs or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; short-cutting queues, but perhaps some of the methods they attempt to use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; complicate things for a library like open-rte.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; After lengthy discussions with Platform, it was deemed the best path forward
</span><br>
<span class="quotelev2">&gt;&gt; is to use the lsb_getalloc interface. While it currently reads the enviro
</span><br>
<span class="quotelev2">&gt;&gt; variable, they indicated a potential change to read a file instead for
</span><br>
<span class="quotelev2">&gt;&gt; scalability. Rather than chasing any changes, we all agreed that using
</span><br>
<span class="quotelev2">&gt;&gt; lsb_getalloc would remain the &quot;stable&quot; interface - so that is what we used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; understood.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Similar reasons for using lsb_launch. I would really advise against making
</span><br>
<span class="quotelev2">&gt;&gt; any changes away from that support. Instead, we could take a lesson from our
</span><br>
<span class="quotelev2">&gt;&gt; bproc support and simply (a) detect if we are on a pre-7.0 release, and then
</span><br>
<span class="quotelev2">&gt;&gt; (b) build our own internal wrapper that provides back-support. See the bproc
</span><br>
<span class="quotelev2">&gt;&gt; pls component for examples.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that sounds fine -- should just be a matter of a little configure magic,
</span><br>
<span class="quotelev1">&gt; right? i already had to change the current configure stuff to be able to build
</span><br>
<span class="quotelev1">&gt; at all under 6.2 (since the current configure check requires 7.0 to pass), so
</span><br>
<span class="quotelev1">&gt; i guess it shouldn't be too much harder to mimic the bproc method of detecting
</span><br>
<span class="quotelev1">&gt; multiple versions, assuming it's really the same sort of thing. basically, i'd
</span><br>
<span class="quotelev1">&gt; keep the main LSF configure check downgraded as i have currently done in my
</span><br>
<span class="quotelev1">&gt; working copy, but add a new 7.0 check that is really the current truck check.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then, i'll make signature-compatible replacements (with the same names? or add
</span><br>
<span class="quotelev1">&gt; internal functions to abstract things? or just add #ifdef's inline where they
</span><br>
<span class="quotelev1">&gt; are used?) for each missing LSF 7.0 function (implemented using the 6.1 or 6.2
</span><br>
<span class="quotelev1">&gt; API), and have configure only build them if the system LSF doesn't have them.
</span><br>
<span class="quotelev1">&gt; uhm, once i figure out how to do that, anyway ... i guess i'll ask for more
</span><br>
<span class="quotelev1">&gt; help if the bproc code doesn't enlighten me. if successful, i should be able
</span><br>
<span class="quotelev1">&gt; to track trunk easily with respect to the LSF version issue at least.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>This sounds fine - you'll find that the bproc pls does the exact same thing.
<br>
In that case, we use #ifdefs since the APIs are actually different between
<br>
the versions - we just create a wrapper inside the bproc pls code for the
<br>
older version so that we can always call the same API. I'm not sure what the
<br>
case will be in LSF - I believe the function calls are indeed different, so
<br>
you might be able to use the same approach.
<br>
<p><span class="quotelev1">&gt; i'll probably just continue experimenting on my own for the moment (tracking
</span><br>
<span class="quotelev1">&gt; any updates to the main trunk LSF support) to see if i can figure it out. any
</span><br>
<span class="quotelev1">&gt; advice the best way to get such back support into trunk, if and when if exists
</span><br>
<span class="quotelev1">&gt; / is working? 
</span><br>
<p>The *best* way would be for you to sign a third-party agreement - see the
<br>
web site for details and a copy. Barring that, the only option would be to
<br>
submit the code through either Jeff or I. We greatly prefer the agreement
<br>
method as it is (a) less burdensome on us and (b) gives you greater
<br>
flexibility.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) this brings us to point 2 -- upon talking to the author(s) of cadence's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; internal open-rte-like library, several key issues were raised. mainly,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; customers want their applications to be 'farm-friendly' in several key ways.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; firstly, they do not want any persistent daemons running outside of a given
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job -- this requirement seems met by the current open-mpi default behavior,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; least as far i can tell. secondly, they prefer (strongly) that applications
</span><br>
<span class="quotelev3">&gt;&gt;&gt; acquire resources incrementally, and perform work with whatever nodes are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; currently available, rather than forcing a large up-front node allocation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fault tolerance is nice too, although it's unclear to me if it's really
</span><br>
<span class="quotelev3">&gt;&gt;&gt; practically needed. in any case, many of our applications can structure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; their 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; computation to use resources in just such a way, generally by dividing the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work into independent, restartable pieces ( i.e. they are embarrassingly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ||).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; also, MPI communication + MPI-2 process creation seems to be a reasonable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interface for handling communication and dynamic process creation on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application side. however, it's not clear that open-rte supports the needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dynamic resource acquisition model in any of the ras/pls components i looked
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at. in fact, other that just folding everything in the pls component, it's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clear that the entire flow via the rmgr really supports it very well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specifically for LSF, the use model is that the initial job either is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; created 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with bsub/lsb_submit(),  (or automatically submits itself as step zero
</span><br>
<span class="quotelev3">&gt;&gt;&gt; perhaps) to run initially on N machines. N should be 'small' (1-16) --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; perhaps
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only 1 for simplicity. then, as the application runs, it will continue to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; consume more resources as limited by the farm status, the user selection,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the max # of processes that the job can usefully support (generally 'large'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 100-1000 cpus).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OpenRTE will be undergoing some changes shortly, so I would strongly
</span><br>
<span class="quotelev2">&gt;&gt; recommend you avoid making major changes without first discussing how they
</span><br>
<span class="quotelev2">&gt;&gt; fit into the new design with us. While cadence is a nice system, there are
</span><br>
<span class="quotelev2">&gt;&gt; tradeoffs in every design approach - and it isn't clear that theirs is
</span><br>
<span class="quotelev2">&gt;&gt; necessarily any better than another.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We could argue for quite some time about their beliefs regarding customers
</span><br>
<span class="quotelev2">&gt;&gt; desires - I have heard these statements in multiple directions, with people
</span><br>
<span class="quotelev2">&gt;&gt; citing claims of customer &quot;demands&quot; pointing every which way. Bottom line,
</span><br>
<span class="quotelev2">&gt;&gt; from what I can tell, is that customers want something that works and is
</span><br>
<span class="quotelev2">&gt;&gt; transparent to them - how that is done is largely irrelevant.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yeah, i agree with that completely.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have other people working on dynamic resource allocation for other
</span><br>
<span class="quotelev2">&gt;&gt; systems (e.g., TM), and are making some modifications to better support that
</span><br>
<span class="quotelev2">&gt;&gt; kind of requirement. We can discuss those with you if you like to see how
</span><br>
<span class="quotelev2">&gt;&gt; they meet your needs. Not much was done in the past in that regard because
</span><br>
<span class="quotelev2">&gt;&gt; people weren't interested in it. Frankly, we are somewhat moving in the
</span><br>
<span class="quotelev2">&gt;&gt; other direction now, so supporting it in the manner you describe may
</span><br>
<span class="quotelev2">&gt;&gt; possibly become harder rather than easier. You may have to accept some
</span><br>
<span class="quotelev2">&gt;&gt; less-than-ideal result, I fear.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; well, i guess it basically boils down to having some level of support for
</span><br>
<span class="quotelev1">&gt; dynamic resource allocation, so that if an application supports or needs to
</span><br>
<span class="quotelev1">&gt; structure it's computation that way, it can do so. my impression from reading
</span><br>
<span class="quotelev1">&gt; the MPI-2 spec (or somewhere else?) was that a big part of the motivation
</span><br>
<span class="quotelev1">&gt; behind MPI-2 dynamic processes creation was to support just such models (a la
</span><br>
<span class="quotelev1">&gt; pvm) -- and it seems that the rte layer needs matching support, or it can't
</span><br>
<span class="quotelev1">&gt; really work well. if there is some support at all, or if it's not too hard to
</span><br>
<span class="quotelev1">&gt; add, i guess i'll be happy.
</span><br>
<p>I can't speak to the motivation behind MPI-2 - the others in the group can
<br>
do a much better job of that. What I can say is that we started out with a
<br>
design to support such modes of operation as dynamic farms, but the group
<br>
has been moving away from it due to a combination of performance impacts,
<br>
reliability, and (frankly) lack of interest from our user community. Our
<br>
intent now is to cut the RTE back to the basics required to support the MPI
<br>
standard, including MPI-2 - which arguably says nothing about dynamic
<br>
resource allocation.
<br>
<p>Not to say we won't support it - just indicating that such support will have
<br>
lower priority and that the system will be designed primarily for other
<br>
priorities. So dynamic resource allocation will have to be considered as an
<br>
&quot;exception case&quot;, with all the attendant implications.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that said, i'd like to reiterate (and skip this paragraph if you get bored)
</span><br>
<span class="quotelev1">&gt; that, at a basic level, i think the ideas behind pvm and dynamic resource
</span><br>
<span class="quotelev1">&gt; allocation are pretty well founded and useful. the idea is to work *with* the
</span><br>
<span class="quotelev1">&gt; existing DRM, rather than only having a private allocation layer over a static
</span><br>
<span class="quotelev1">&gt; allocation from the host DRM. for applications that are capable of being
</span><br>
<span class="quotelev1">&gt; dynamically flexible about the number of CPUs they need, static initial
</span><br>
<span class="quotelev1">&gt; allocation just doesn't work too well -- a small initial allocation may limit
</span><br>
<span class="quotelev1">&gt; the || too much, whereas a large allocation may be wasteful, and may (vastly)
</span><br>
<span class="quotelev1">&gt; increase the queue time to job startup. in fact, when the queue time is long,
</span><br>
<span class="quotelev1">&gt; it's extra-wasteful, because the DRM has to hold a bunch of hosts idle waiting
</span><br>
<span class="quotelev1">&gt; for the whole allocation to be satisfied. in all i've heard, this seems to be
</span><br>
<span class="quotelev1">&gt; the most 'real' customer issue -- that is, i believe the other cadence
</span><br>
<span class="quotelev1">&gt; distributed processing guys when they say that they are having or have had
</span><br>
<span class="quotelev1">&gt; problems with various applications -- both MPI based (LAM/MPI i think -- which
</span><br>
<span class="quotelev1">&gt; had other problems concerning the deamon issue) as well as custom frameworks
</span><br>
<span class="quotelev1">&gt; that simply made large (&gt;100) bsub requests. the most pathological thing i've
</span><br>
<span class="quotelev1">&gt; heard internally is that for maximum portability across different LSF farms,
</span><br>
<span class="quotelev1">&gt; not only do you need to acquire resources incrementally, but that you need to
</span><br>
<span class="quotelev1">&gt; acquire each CPU individually using a single bsub -- that is, you shouldn't
</span><br>
<span class="quotelev1">&gt; even use the -n option to bsub *at all*. this actually simplifies things in
</span><br>
<span class="quotelev1">&gt; some ways, but i don't really know if i believe it. anyway, that's what i've
</span><br>
<span class="quotelev1">&gt; heard, from the cadence open-rte-alike people that are really running
</span><br>
<span class="quotelev1">&gt; applications on customer farms. somehow, there are problems with accounting or
</span><br>
<span class="quotelev1">&gt; something on certain farms if you bsub non-single cpu tasks. on second
</span><br>
<span class="quotelev1">&gt; thought, i can actually believe this, because the EDA community really doesn't
</span><br>
<span class="quotelev1">&gt; run many true scientific-computing style multiprocessor jobs at the moment --
</span><br>
<span class="quotelev1">&gt; mainly, they are running multiple separate jobs that only loosely communicate
</span><br>
<span class="quotelev1">&gt; via the file system, or not at all -- there's just some script that launch all
</span><br>
<span class="quotelev1">&gt; the pieces of a job, and the pieces are in charge of co-ordinating with
</span><br>
<span class="quotelev1">&gt; themselves if needed. since application have evolved from this 'primitive'
</span><br>
<span class="quotelev1">&gt; form of using multiple CPUs, it's not too surprising that farms might not be
</span><br>
<span class="quotelev1">&gt; well configured to support the more traditional scientific computing use
</span><br>
<span class="quotelev1">&gt; models. i'm continuing to investigate the issue, and i'll have more data as i
</span><br>
<span class="quotelev1">&gt; start enabling farm support in my own app on some real customer farms --
</span><br>
<span class="quotelev1">&gt; assuming i can get something working with open-mpi, of course! ;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I think someone is feeding you a very extreme view of LSF. I have interacted
<br>
for years with people working with LSF-based systems, and can count on the
<br>
fingers of one hand the people who are operating the way you describe.
<br>
<p>*Can* you use LSF that way? Sure. Is that how most people use it? Not from
<br>
what I have seen. Still, if that's a mode you want to support...have at it!
<br>
;-)
<br>
<p>Keep in mind, though, that Open MPI is driven by performance for large-scale
<br>
multiprocessor computations. As I indicated earlier, the type of operation
<br>
you are describing will have to be treated as an &quot;exception case&quot;.
<br>
Literally, this means you are welcome to try and make it work, but the
<br>
fundamental operations of the system won't be designed to optimize that mode
<br>
at the sacrifice of the primary objective.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so, i figure it's up to me to implement this stuff ;) ... clearly, i want to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; keep the 'normal' style ras/pls for LSF working, but somehow add the dynamic
</span><br>
<span class="quotelev3">&gt;&gt;&gt; behavior as an option. my initial thought was to (in the dynamic case)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; basically ignore/fudge the ras/rmaps(/pls?) stages and simply use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bsub/lsb_submit() in pls to launch new daemons as needed/requested.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just an FYI: this could cause unexpected behavior in the current
</span><br>
<span class="quotelev2">&gt;&gt; implementation as a number of subsystems depend upon the info coming from
</span><br>
<span class="quotelev2">&gt;&gt; those stages. May not be as big a problem in the revised implementation
</span><br>
<span class="quotelev2">&gt;&gt; currently underway.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; duly noted. i don't pretend to be able to follow the current control flow at
</span><br>
<span class="quotelev1">&gt; the moment. i think just running the debug version with all the printouts
</span><br>
<span class="quotelev1">&gt; should help me a lot there. also, perhaps if i just make a rmgr_dyn_lsf, and
</span><br>
<span class="quotelev1">&gt; don't use sds, then there might not be as many subsystems involved to
</span><br>
<span class="quotelev1">&gt; complain. actually, i suspect the LSF specific part would be (very) small, so
</span><br>
<span class="quotelev1">&gt; perhaps it could be rmgr_dynurm + a new component type like dynraspls to
</span><br>
<span class="quotelev1">&gt; encapsulate the DRM specific part.
</span><br>
<p>You have to use sds as this is the framework where the application process
<br>
learns its name. That framework will be receiving more responsibilities in
<br>
the revised implementation, so you'll unfortunately have to use it. Your
<br>
best bet (IMHO) would be to create an lsf_farm component in the new PLM when
<br>
we get the system revised.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; again,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; though it's not clear that the current control flow supports this well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; given 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that there may be a large (10sec - 15min) delay between lsb_submit() and job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launch, it may be necessary to both acquire minimum size blocks of new
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemons
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at a time, and to have some non-blocking way to perform spawning. for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; example, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the current code, the MPI-2 spawn is blocking because it needs to return
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicator to the spawned process.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Actually, that is not the real reason. It is blocking because the parent
</span><br>
<span class="quotelev2">&gt;&gt; wants to send a message to the new children telling them where/how to
</span><br>
<span class="quotelev2">&gt;&gt; rendezvous with it. The problem is that the parent doesn't know the name of
</span><br>
<span class="quotelev2">&gt;&gt; the child until after the spawn is completed - because we need the child's
</span><br>
<span class="quotelev2">&gt;&gt; OOB contact info so we can send the message. The easiest way to ensure that
</span><br>
<span class="quotelev2">&gt;&gt; all the handshakes occurred correctly was to simply make comm_spawn
</span><br>
<span class="quotelev2">&gt;&gt; blocking.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Given that comm_spawn in our current environments is relatively fast, that
</span><br>
<span class="quotelev2">&gt;&gt; was deemed to be an acceptable solution. Obviously, your stated time frames
</span><br>
<span class="quotelev2">&gt;&gt; are much, much longer, so that might not work in those cases.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It would be easier to change it under the revised implementation, which will
</span><br>
<span class="quotelev2">&gt;&gt; better support that kind of difference between environments. In the current
</span><br>
<span class="quotelev2">&gt;&gt; one, it could be quite problematic.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; however, this is not really necessary for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the application to continue -- it can continue with other work until the new
</span><br>
<span class="quotelev3">&gt;&gt;&gt; worker is up and running. perhaps some form of multi-threading could help
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this, but it's not totally clear. i think i would prefer some lower-level
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open-rte calls that perform daemon pre-allocation ( i.e. dynamic ras/daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; startup), such that i know that if there are idle daemons, it is safe to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spawn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without risk of blocking.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll have to leave that up to the MPI folks on the team - we have
</span><br>
<span class="quotelev2">&gt;&gt; historically resisted the idea of having one environment behave differently
</span><br>
<span class="quotelev2">&gt;&gt; from another so as to limit &quot;user astonishment&quot;. However, if they can live
</span><br>
<span class="quotelev2">&gt;&gt; with that change, I personally have no problem with it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We just made a significant change to daemon launch procedures, and the flow
</span><br>
<span class="quotelev2">&gt;&gt; between the stages is going to be completely revamped over the next few
</span><br>
<span class="quotelev2">&gt;&gt; months. How that affects your thinking is unclear to me at the moment, but
</span><br>
<span class="quotelev2">&gt;&gt; might be worth further discussion.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just as an FYI: we already check to see if there are available daemons, and
</span><br>
<span class="quotelev2">&gt;&gt; we do spawn upon them if so. The issue here sounds like it is more in
</span><br>
<span class="quotelev2">&gt;&gt; obtaining a larger-than-immediately-needed allocation, and spawning daemons
</span><br>
<span class="quotelev2">&gt;&gt; on all of it just-in-case they are needed. There is nothing in the system
</span><br>
<span class="quotelev2">&gt;&gt; that precludes doing so - we made a design decision early on not to do it,
</span><br>
<span class="quotelev2">&gt;&gt; but that's not a requirement. Again, the revised implementation would let
</span><br>
<span class="quotelev2">&gt;&gt; you do that much easier than the current one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hmm, i'm thinking that if there was a way to directly tell open-rte to acquire
</span><br>
<span class="quotelev1">&gt; more daemons non-blockingly, that would be enough.
</span><br>
<span class="quotelev1">&gt; in the LSF case, i think one would bsub the daemons themselves (with arguments
</span><br>
<span class="quotelev1">&gt; sufficient to phone-home, so no sds needed?), so (node acquisition == daemon
</span><br>
<span class="quotelev1">&gt; startup).
</span><br>
<p>You could - though this sounds pretty non-scalable to me.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this functions could be called heuristically by MPI-2 spawn type functions, or
</span><br>
<span class="quotelev1">&gt; even manually by the application (in the short term). it should not effect the
</span><br>
<span class="quotelev1">&gt; semantics of the MPI-2 calls themselves.
</span><br>
<p>Your best bet would be to have your own component so that you could do
<br>
whatever you wanted with the spawn API. You could play with an RMGR
<br>
component for now, but your best bet is clearly going to be the new PLM.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the goal is that one could determine (at least with some confidence) if there
</span><br>
<span class="quotelev1">&gt; were any free (and ready to spawn quickly without blocking) resources before
</span><br>
<span class="quotelev1">&gt; issuing a spawn call. this might just mean examining the value of the MPI
</span><br>
<span class="quotelev1">&gt; universe size (and that this value could change), or it might need some new
</span><br>
<span class="quotelev1">&gt; interface, i dunno.
</span><br>
<p>You know, the real issue here (I think) is being driven by your use of bsub
<br>
- which I believe is a batch launch request. Why would you want to do that
<br>
instead of just directly calling lsb_launch()? I suspect we can get the
<br>
Platform folks to give us an API to request additional node allocations from
<br>
inside our program, so why not just use the API to launch? Or are you going
<br>
the batch route because we don't currently have an API and you want to
<br>
support older LSF versions?
<br>
<p>Might be more pain than it's worth...
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oh, and at first glance there appears to be a bunch of duplicated code
</span><br>
<span class="quotelev3">&gt;&gt;&gt; across 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the various flavors of ras (and similarly for pls, sds). is it reasonable to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attempt to factor things out? i seem to recall reading that some major
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rework
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was in progress, so perhaps this would not be a good time?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Definitely not a good time - I would wait awhile and let's see how much of
</span><br>
<span class="quotelev2">&gt;&gt; it remains. Some of it is there because of historical uncertainty over what
</span><br>
<span class="quotelev2">&gt;&gt; would be common and what wouldn't be - some might be there for a reason
</span><br>
<span class="quotelev2">&gt;&gt; known to the original author. I would advise asking before assuming...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; okay.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uhm ... well, any advice on anything here?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Matt.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks again,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matt.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1900.php">Matthew Moskewicz: "[OMPI devel] Fwd: lsf support / farm use models"</a>
<li><strong>Previous message:</strong> <a href="1898.php">Ralph Castain: "[OMPI devel] Removal of cellid"</a>
<li><strong>In reply to:</strong> <a href="1897.php">Matthew Moskewicz: "[OMPI devel] Fwd: lsf support / farm use models"</a>
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
