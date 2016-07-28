<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul 28 09:04:27 2007" -->
<!-- isoreceived="20070728130427" -->
<!-- sent="Sat, 28 Jul 2007 07:04:11 -0600" -->
<!-- isosent="20070728130411" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations" -->
<!-- id="C2D09AEB.372C%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4CEC92FC-91D9-42C5-87E9-C62577622CAC_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2007-07-28 09:04:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2040.php">Brian Barrett: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2038.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>In reply to:</strong> <a href="2032.php">Aurelien Bouteiller: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's fine - please review the standard and let us know.
<br>
<p>Meantime, let me explain how the persistent daemon operations currently work
<br>
and some of the problems that drove us there (and continue to plague that
<br>
mode).
<br>
<p>HOW IT CURRENTLY WORKS
<br>
First, it is critical to understand the following point: all allocation
<br>
operations are performed -solely- at the HNP. There was a time when we
<br>
performed them at mpirun and passed the results to the HNP. However, this
<br>
caused a lot of trouble in managed environments as users couldn't keep
<br>
straight what their jobs were doing across multiple login sessions. I'll
<br>
explain more about that later in this note. For now, just keep in your mind
<br>
that the reading of any allocation is done at the HNP.
<br>
<p>It is easiest to explain how things currently operate by considering the
<br>
following use-case. A user logs into a managed environment, obtains an
<br>
allocation (we'll call it allocation A), and starts a persistent daemon
<br>
using:
<br>
<p>orted --persistent --seed --scope public --universe foo
<br>
<p>The orted starts up and daemonizes, but it does -not- read the local
<br>
allocation at this time because it hasn't been ordered to launch anything
<br>
yet. Accordingly, the node segment of the GPR is empty.
<br>
<p>Next, the user executes (we'll call this mpirun-A):
<br>
<p>mpirun --universe foo -np 10 ./my_app
<br>
<p>Mpirun-A connects to the persistent orted, and then - and this is critical -
<br>
selects only the proxy components for the RDS, RAS, RMAPS, PLS, and RMGR
<br>
frameworks. It then begins to execute the launch sequence, which - since it
<br>
it is using the proxy components - consists of nothing more than sending a
<br>
sequence of commands to the persistent daemon.
<br>
<p>For the interests of this discussion, the command sequence begins with an
<br>
order to run the RDS framework. The persistent orted checks to see if there
<br>
are any hostfiles on -its- command line. Let me emphasize that point here -
<br>
it does -not- know if the user put a -hostfile option on the mpirun command
<br>
line! It only looks at its own MCA param, which means it will look in its
<br>
environment, command line, or a default hostfile location. Any hostfile
<br>
specified on the mpirun command line -is ignored-.
<br>
<p>In this use case, the persistent orted does not see a hostfile, so the RDS
<br>
does nothing. Mpirun-A then orders the execution of the RAS framework. The
<br>
persistent orted checks to see if any nodes are on the node segment. If
<br>
there are, it would simply stop right there and do nothing. In this case,
<br>
the segment is empty, so it runs the local RM component and gets
<br>
allocation-A, which it then stores on the node segment.
<br>
<p>Mpirun-A now proceeds to execute the remainder of the launch, and the my_app
<br>
procs start.
<br>
<p>Okay, now the user opens a new window and logs back in to the same machine.
<br>
For fun, let us assume they get another allocation in this login session
<br>
from the RM (call it allocation B). They now execute:
<br>
<p>mpirun --universe foo -np 50 -hostfile bar ./my_other_app
<br>
<p>We'll call this mpirun-B. So what happens here? Well, mpirun-B will connect
<br>
to the persistent orted running on this system since we told it to do so. It
<br>
will therefore select only the proxy components, and then initiate the
<br>
launch.
<br>
<p>First step will be to command the persistent orted to run the RDS framework.
<br>
The orted will look at its MCA param and not see a hostfile, so nothing is
<br>
done. Mpirun-B will then order the orted to run the RAS framework - and here
<br>
is where the fun begins. Because there already are nodes on the node
<br>
segment, the RAS -does not execute any components-. Thus, the allocation in
<br>
the node segment remains unchanged. This mpirun-B will therefore launch the
<br>
my_other_app procs on the same nodes being used by my_app!
<br>
<p>HOW DID WE GET THERE
<br>
The problem has always been that there is no consistent treatment of this
<br>
use-case across the various MPI's out there. We have, therefore, been caught
<br>
in that constant struggle between &quot;camps&quot; that understandably want to
<br>
minimize any changes in behavior that their users have to absorb.
<br>
<p>Our first discussion was about the use of a &quot;lamboot-like&quot; command to setup
<br>
a virtual machine, and then require that all mpirun's could only execute
<br>
within that VM. This would solve the above confusion, but there was general
<br>
disapproval of the lamboot-first methodology. Accordingly, we rejected that
<br>
approach, and - after a lot of discussion - settled on the idea of creating
<br>
a &quot;universe&quot; to which mpirun's from any login session could connect.
<br>
<p>Initially, we would read the allocation at the mpirun location, and then
<br>
simply communicate it to the HNP (in this case, that would be the persistent
<br>
orted). However, while this worked fine for hostfile-based systems, this
<br>
caused problems in managed environments as it led to confusion over which
<br>
allocation was being used in the above use-case. If instead of mpirun-A
<br>
executing first, the user in the prior example had executed mpirun-B first,
<br>
then we would have wound up with everything executing in allocation B.
<br>
<p>We then fixed that problem by tracking allocations according to jobid's.
<br>
Since each mpirun had a separate jobid, we could just say &quot;you run your job
<br>
inside your own allocation&quot;. That solved the timing issue, but opened
<br>
another set of problems.
<br>
<p>(a) the orted was only alive while the session within which it was created
<br>
existed. So, if mpirun-A finished first and the user logged out (or the
<br>
system logged them out due to inactivity), then mpirun-B lost its HNP! We
<br>
had - and still do -not- have - no reliable way of detecting and responding
<br>
to the loss of an HNP. Thus, more often than not, we wound up with stranded
<br>
processes in job-B and lots of complaints about cleanup.
<br>
<p>(b) the bookkeeping became very complex when we started dealing with
<br>
dynamics. For example, are comm_spawn'd children required to execute solely
<br>
within the allocation of their parents? That would make sense, but now I
<br>
have to track job genealogy so I know who is a child of whom, so I can
<br>
assign them to the right allocation.
<br>
<p>(c) what to do about hostfile and -host. That discussion is in another
<br>
thread - it gets uglier in this mode.
<br>
<p>(d) how to detect and handle multiple reads of the same allocation. Suppose
<br>
that mpirun-B had been in the same login session as mpirun-A. If I read the
<br>
allocation within mpirun and pass it to the orted, now the orted will get
<br>
the same allocation sent to it that it got from mpirun-A - yet the number of
<br>
slots in that allocation didn't actually change! How do I know this is the
<br>
-same- allocation, and that I should just ignore the second set of
<br>
information? If I just assign the &quot;new&quot; allocation to job-B as if it were
<br>
totally independent, then I will map my_other_app's procs right no top of
<br>
my_app's procs since I will have no idea that those slots were already in
<br>
use.
<br>
<p>So we fixed those problems by dictating that the allocation is only read
<br>
-once-, and only at the HNP itself. Note that this doesn't solve (a) - this
<br>
remains a consistent problem on managed environments which has only been
<br>
mitigated by the fact that few people (to date) have been using
<br>
connect/accept with Open MPI (those that do have been bitten and warned).
<br>
<p><p>WHERE DO WE GO FROM HERE
<br>
Is the system perfect and doing what it should? Obviously not. However, that
<br>
isn't because we were &quot;stupid&quot; or &quot;not thinking&quot; - it is because the desired
<br>
behavior has never been clearly defined, there are multiple camps that have
<br>
strong and contradictory opinions, and there are technical problems with
<br>
just about any choice you make.
<br>
<p>What I was hoping to do with this RFC is kickoff this discussion. How -do-
<br>
you want this to work? Do we forbid cross-connection of mpiruns in different
<br>
login sessions? Note that this was a &quot;mandatory&quot; requirement when we
<br>
started, but perhaps - in the light of experience - it should be
<br>
reconsidered. How do you want to handle hostfile and -host in the persistent
<br>
daemon scenario described above? Etc.
<br>
<p>Please let me know - to be honest, I am rather tired of going around in
<br>
circles on this behavior.
<br>
<p>Thanks - and I hope that helps explain why &quot;fixing&quot; persistent orted is
<br>
hardly straightforward.
<br>
<p>Ralph
<br>
<p>PS. As to why mpirun can't be run in the background, we should start another
<br>
thread on that issue. In brief, it is a combination of problems with the
<br>
event library, progress engine, and IOF.
<br>
<p><p><p>Finally, we 
<br>
<p><p>On 7/27/07 4:42 PM, &quot;Aurelien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I basically agree with Terry, even if your proposal would solve all
</span><br>
<span class="quotelev1">&gt; the issue I currently face. I think we need to read the MPI2 standard
</span><br>
<span class="quotelev1">&gt; to make sure we are not on the brink of breaking the standard.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 27, 2007, at 10:13 , Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 7/27/07 7:58 AM, &quot;Terry D. Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHAT:   Proposal to add two new command line options that will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allow us to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        replace the current need to separately launch a persistent
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; daemon to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        support connect/accept operations
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHY:    Remove problems of confusing multiple allocations,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; provide a cleaner
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        method for connect/accept between jobs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHERE:  minor changes in orterun and orted, some code in rmgr and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; each pls
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        to ensure the proper jobid and connect info is passed to each
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        app_context as it is launched
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is my opinion that we would be better off attacking the issues of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the persistent daemons described below then creating a new set of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; options to mpirun for process placement.  (more comments below on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the actual proposal).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Non-trivial problems - we haven't figured them out in three years of
</span><br>
<span class="quotelev2">&gt;&gt; occasional effort. It isn't clear that they even -can- be solved when
</span><br>
<span class="quotelev2">&gt;&gt; considering the problem of running in multiple RM-based allocations.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll try to provide more detail on the problems when I return from
</span><br>
<span class="quotelev2">&gt;&gt; my quick
</span><br>
<span class="quotelev2">&gt;&gt; trip...
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="2040.php">Brian Barrett: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2038.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>In reply to:</strong> <a href="2032.php">Aurelien Bouteiller: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
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
