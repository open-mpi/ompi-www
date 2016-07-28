<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul 14 17:16:06 2007" -->
<!-- isoreceived="20070714211606" -->
<!-- sent="Sat, 14 Jul 2007 15:15:54 -0600" -->
<!-- isosent="20070714211554" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] lsf support / farm use models" -->
<!-- id="C2BE992A.3478%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="325001540707141302v1436dfb3y69524dcc78417bc6_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-07-14 17:15:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1896.php">Paul H. Hargrove: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Previous message:</strong> <a href="1894.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#433142: openmpi: FTBFS on GNU/kFreeBSD"</a>
<li><strong>In reply to:</strong> <a href="1892.php">Matthew Moskewicz: "[OMPI devel] lsf support / farm use models"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Welcome! Yes, Jeff and I have been working on the LSF support based on 7.0
<br>
features in collab with the folks at Platform.
<br>
<p>Some further comments below...
<br>
<p>Ralph
<br>
<p><p>On 7/14/07 2:02 PM, &quot;Matthew Moskewicz&quot; &lt;moskewcz_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; hi everyone, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; firstly, i'm new around here, and somewhat clueless when it comes to the
</span><br>
<span class="quotelev1">&gt; details of working with an big autoconfiscated project like open-rte/open-mpi
</span><br>
<span class="quotelev1">&gt; the svn checkout level ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i've read some of the archives that turned up in searches for terms like
</span><br>
<span class="quotelev1">&gt; 'LSF', and it would seem there was some discussion about adding some form of
</span><br>
<span class="quotelev1">&gt; LSF support to open-rte, but that the discussion ended a while back. so, after
</span><br>
<span class="quotelev1">&gt; playing around with the 1.2.3 release tarball for a while, and reading
</span><br>
<span class="quotelev1">&gt; various pieces of the code until i  had a (vague) idea of the top-level
</span><br>
<span class="quotelev1">&gt; control flow and such, i decided i was ready to try to add ras and pls
</span><br>
<span class="quotelev1">&gt; component to support LSF. once i had the build system up, i tried to create an
</span><br>
<span class="quotelev1">&gt; ras/lsf directory, and slightly to my surprise, it already existed. i was
</span><br>
<span class="quotelev1">&gt; kinda hoping for that, but it appears to be *very* fresh code at the moment.
</span><br>
<span class="quotelev1">&gt; nonetheless, i played around a bit more, and ran into two issues:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) it appears that you (jeff, i guess ;) are using new LSF 7.0 API features.
</span><br>
<span class="quotelev1">&gt; i'm working to support customers in the EDA space, and it's not clear if/when
</span><br>
<span class="quotelev1">&gt; they will migrate to 7.0 -- not to mention that our company (cadence) doesn't
</span><br>
<span class="quotelev1">&gt; appear to have LSF 7.0 yet. i'm still looking in to the deatils, but it
</span><br>
<span class="quotelev1">&gt; appears that (from the Platform docs) lsb_getalloc is probably just a thin
</span><br>
<span class="quotelev1">&gt; wrapper around the LSB_MCPU_HOSTS (spelling?) environment variable. so that
</span><br>
<span class="quotelev1">&gt; could be worked around fairly easily. i dunno about lsb_launch -- it seems
</span><br>
<span class="quotelev1">&gt; equivalent to a set of ls_rtask() calls (one per process). however, i have
</span><br>
<span class="quotelev1">&gt; heard that there can be significant subtleties with the semantics of these
</span><br>
<span class="quotelev1">&gt; functions, in terms of compatibility across differently configured
</span><br>
<span class="quotelev1">&gt; LSF-controlled farms, specifically with regrads to administrators ability to
</span><br>
<span class="quotelev1">&gt; track and control job execution. personally, i don't see how it's really
</span><br>
<span class="quotelev1">&gt; possible for LSF to prevent 'bad' users from spamming out jobs or
</span><br>
<span class="quotelev1">&gt; short-cutting queues, but perhaps some of the methods they attempt to use can
</span><br>
<span class="quotelev1">&gt; complicate things for a library like open-rte.
</span><br>
<p>After lengthy discussions with Platform, it was deemed the best path forward
<br>
is to use the lsb_getalloc interface. While it currently reads the enviro
<br>
variable, they indicated a potential change to read a file instead for
<br>
scalability. Rather than chasing any changes, we all agreed that using
<br>
lsb_getalloc would remain the &quot;stable&quot; interface - so that is what we used.
<br>
<p>Similar reasons for using lsb_launch. I would really advise against making
<br>
any changes away from that support. Instead, we could take a lesson from our
<br>
bproc support and simply (a) detect if we are on a pre-7.0 release, and then
<br>
(b) build our own internal wrapper that provides back-support. See the bproc
<br>
pls component for examples.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) this brings us to point 2 -- upon talking to the author(s) of cadence's
</span><br>
<span class="quotelev1">&gt; internal open-rte-like library, several key issues were raised. mainly,
</span><br>
<span class="quotelev1">&gt; customers want their applications to be 'farm-friendly' in several key ways.
</span><br>
<span class="quotelev1">&gt; firstly, they do not want any persistent daemons running outside of a given
</span><br>
<span class="quotelev1">&gt; job -- this requirement seems met by the current open-mpi default behavior, at
</span><br>
<span class="quotelev1">&gt; least as far i can tell. secondly, they prefer (strongly) that applications
</span><br>
<span class="quotelev1">&gt; acquire resources incrementally, and perform work with whatever nodes are
</span><br>
<span class="quotelev1">&gt; currently available, rather than forcing a large up-front node allocation.
</span><br>
<span class="quotelev1">&gt; fault tolerance is nice too, although it's unclear to me if it's really
</span><br>
<span class="quotelev1">&gt; practically needed. in any case, many of our applications can structure their
</span><br>
<span class="quotelev1">&gt; computation to use resources in just such a way, generally by dividing the
</span><br>
<span class="quotelev1">&gt; work into independent, restartable pieces ( i.e. they are embarrassingly ||).
</span><br>
<span class="quotelev1">&gt; also, MPI communication + MPI-2 process creation seems to be a reasonable
</span><br>
<span class="quotelev1">&gt; interface for handling communication and dynamic process creation on the
</span><br>
<span class="quotelev1">&gt; application side. however, it's not clear that open-rte supports the needed
</span><br>
<span class="quotelev1">&gt; dynamic resource acquisition model in any of the ras/pls components i looked
</span><br>
<span class="quotelev1">&gt; at. in fact, other that just folding everything in the pls component, it's not
</span><br>
<span class="quotelev1">&gt; clear that the entire flow via the rmgr really supports it very well.
</span><br>
<span class="quotelev1">&gt; specifically for LSF, the use model is that the initial job either is created
</span><br>
<span class="quotelev1">&gt; with bsub/lsb_submit(),  (or automatically submits itself as step zero
</span><br>
<span class="quotelev1">&gt; perhaps) to run initially on N machines. N should be 'small' (1-16) -- perhaps
</span><br>
<span class="quotelev1">&gt; only 1 for simplicity. then, as the application runs, it will continue to
</span><br>
<span class="quotelev1">&gt; consume more resources as limited by the farm status, the user selection, and
</span><br>
<span class="quotelev1">&gt; the max # of processes that the job can usefully support (generally 'large' --
</span><br>
<span class="quotelev1">&gt; 100-1000 cpus). 
</span><br>
<p>OpenRTE will be undergoing some changes shortly, so I would strongly
<br>
recommend you avoid making major changes without first discussing how they
<br>
fit into the new design with us. While cadence is a nice system, there are
<br>
tradeoffs in every design approach - and it isn't clear that theirs is
<br>
necessarily any better than another.
<br>
<p>We could argue for quite some time about their beliefs regarding customers
<br>
desires - I have heard these statements in multiple directions, with people
<br>
citing claims of customer &quot;demands&quot; pointing every which way. Bottom line,
<br>
from what I can tell, is that customers want something that works and is
<br>
transparent to them - how that is done is largely irrelevant.
<br>
<p>We have other people working on dynamic resource allocation for other
<br>
systems (e.g., TM), and are making some modifications to better support that
<br>
kind of requirement. We can discuss those with you if you like to see how
<br>
they meet your needs. Not much was done in the past in that regard because
<br>
people weren't interested in it. Frankly, we are somewhat moving in the
<br>
other direction now, so supporting it in the manner you describe may
<br>
possibly become harder rather than easier. You may have to accept some
<br>
less-than-ideal result, I fear.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so, i figure it's up to me to implement this stuff ;) ... clearly, i want to
</span><br>
<span class="quotelev1">&gt; keep the 'normal' style ras/pls for LSF working, but somehow add the dynamic
</span><br>
<span class="quotelev1">&gt; behavior as an option. my initial thought was to (in the dynamic case)
</span><br>
<span class="quotelev1">&gt; basically ignore/fudge the ras/rmaps(/pls?) stages and simply use
</span><br>
<span class="quotelev1">&gt; bsub/lsb_submit() in pls to launch new daemons as needed/requested.
</span><br>
<p>Just an FYI: this could cause unexpected behavior in the current
<br>
implementation as a number of subsystems depend upon the info coming from
<br>
those stages. May not be as big a problem in the revised implementation
<br>
currently underway.
<br>
<p><span class="quotelev1">&gt; again, 
</span><br>
<span class="quotelev1">&gt; though it's not clear that the current control flow supports this well. given
</span><br>
<span class="quotelev1">&gt; that there may be a large (10sec - 15min) delay between lsb_submit() and job
</span><br>
<span class="quotelev1">&gt; launch, it may be necessary to both acquire minimum size blocks of new daemons
</span><br>
<span class="quotelev1">&gt; at a time, and to have some non-blocking way to perform spawning. for example,
</span><br>
<span class="quotelev1">&gt; in the current code, the MPI-2 spawn is blocking because it needs to return a
</span><br>
<span class="quotelev1">&gt; communicator to the spawned process.
</span><br>
<p>Actually, that is not the real reason. It is blocking because the parent
<br>
wants to send a message to the new children telling them where/how to
<br>
rendezvous with it. The problem is that the parent doesn't know the name of
<br>
the child until after the spawn is completed - because we need the child's
<br>
OOB contact info so we can send the message. The easiest way to ensure that
<br>
all the handshakes occurred correctly was to simply make comm_spawn
<br>
blocking.
<br>
<p>Given that comm_spawn in our current environments is relatively fast, that
<br>
was deemed to be an acceptable solution. Obviously, your stated time frames
<br>
are much, much longer, so that might not work in those cases.
<br>
<p>It would be easier to change it under the revised implementation, which will
<br>
better support that kind of difference between environments. In the current
<br>
one, it could be quite problematic.
<br>
<p><span class="quotelev1">&gt; however, this is not really necessary for
</span><br>
<span class="quotelev1">&gt; the application to continue -- it can continue with other work until the new
</span><br>
<span class="quotelev1">&gt; worker is up and running. perhaps some form of multi-threading could help with
</span><br>
<span class="quotelev1">&gt; this, but it's not totally clear. i think i would prefer some lower-level
</span><br>
<span class="quotelev1">&gt; open-rte calls that perform daemon pre-allocation ( i.e. dynamic ras/daemon
</span><br>
<span class="quotelev1">&gt; startup), such that i know that if there are idle daemons, it is safe to spawn
</span><br>
<span class="quotelev1">&gt; without risk of blocking.
</span><br>
<p>I'll have to leave that up to the MPI folks on the team - we have
<br>
historically resisted the idea of having one environment behave differently
<br>
from another so as to limit &quot;user astonishment&quot;. However, if they can live
<br>
with that change, I personally have no problem with it.
<br>
<p>We just made a significant change to daemon launch procedures, and the flow
<br>
between the stages is going to be completely revamped over the next few
<br>
months. How that affects your thinking is unclear to me at the moment, but
<br>
might be worth further discussion.
<br>
<p>Just as an FYI: we already check to see if there are available daemons, and
<br>
we do spawn upon them if so. The issue here sounds like it is more in
<br>
obtaining a larger-than-immediately-needed allocation, and spawning daemons
<br>
on all of it just-in-case they are needed. There is nothing in the system
<br>
that precludes doing so - we made a design decision early on not to do it,
<br>
but that's not a requirement. Again, the revised implementation would let
<br>
you do that much easier than the current one.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; oh, and at first glance there appears to be a bunch of duplicated code across
</span><br>
<span class="quotelev1">&gt; the various flavors of ras (and similarly for pls, sds). is it reasonable to
</span><br>
<span class="quotelev1">&gt; attempt to factor things out? i seem to recall reading that some major rework
</span><br>
<span class="quotelev1">&gt; was in progress, so perhaps this would not be a good time?
</span><br>
<p>Definitely not a good time - I would wait awhile and let's see how much of
<br>
it remains. Some of it is there because of historical uncertainty over what
<br>
would be common and what wouldn't be - some might be there for a reason
<br>
known to the original author. I would advise asking before assuming...
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; uhm ... well, any advice on anything here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks,
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
<li><strong>Next message:</strong> <a href="1896.php">Paul H. Hargrove: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Previous message:</strong> <a href="1894.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#433142: openmpi: FTBFS on GNU/kFreeBSD"</a>
<li><strong>In reply to:</strong> <a href="1892.php">Matthew Moskewicz: "[OMPI devel] lsf support / farm use models"</a>
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
