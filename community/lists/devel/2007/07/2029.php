<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 27 10:14:07 2007" -->
<!-- isoreceived="20070727141407" -->
<!-- sent="Fri, 27 Jul 2007 08:13:57 -0600" -->
<!-- isosent="20070727141357" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations" -->
<!-- id="C2CF59C5.36F0%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46A9FA1F.2040306_at_sun.com" -->
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
<strong>Date:</strong> 2007-07-27 10:13:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2030.php">Andrew Lofthouse: "[OMPI devel] minor bug report for building openmpi-1.2.3 on cygwin"</a>
<li><strong>Previous message:</strong> <a href="2028.php">Terry D. Dontje: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<li><strong>In reply to:</strong> <a href="2028.php">Terry D. Dontje: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2032.php">Aurelien Bouteiller: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<li><strong>Reply:</strong> <a href="2032.php">Aurelien Bouteiller: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/27/07 7:58 AM, &quot;Terry D. Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHAT:   Proposal to add two new command line options that will allow us to
</span><br>
<span class="quotelev2">&gt;&gt;        replace the current need to separately launch a persistent daemon to
</span><br>
<span class="quotelev2">&gt;&gt;        support connect/accept operations
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHY:    Remove problems of confusing multiple allocations, provide a cleaner
</span><br>
<span class="quotelev2">&gt;&gt;        method for connect/accept between jobs
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHERE:  minor changes in orterun and orted, some code in rmgr and each pls
</span><br>
<span class="quotelev2">&gt;&gt;        to ensure the proper jobid and connect info is passed to each
</span><br>
<span class="quotelev2">&gt;&gt;        app_context as it is launched
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; It is my opinion that we would be better off attacking the issues of
</span><br>
<span class="quotelev1">&gt; the persistent daemons described below then creating a new set of
</span><br>
<span class="quotelev1">&gt; options to mpirun for process placement.  (more comments below on
</span><br>
<span class="quotelev1">&gt; the actual proposal).
</span><br>
<p>Non-trivial problems - we haven't figured them out in three years of
<br>
occasional effort. It isn't clear that they even -can- be solved when
<br>
considering the problem of running in multiple RM-based allocations.
<br>
<p>I'll try to provide more detail on the problems when I return from my quick
<br>
trip...
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; TIMOUT: 8/10/07
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We currently do not support connect/accept operations in a clean way. Users
</span><br>
<span class="quotelev2">&gt;&gt; are required to first start a persistent daemon that operates in a
</span><br>
<span class="quotelev2">&gt;&gt; user-named universe. They then must enter the mpirun command for each
</span><br>
<span class="quotelev2">&gt;&gt; application in a separate window, providing the universe name on each
</span><br>
<span class="quotelev2">&gt;&gt; command line. This is required because (a) mpirun will not run in the
</span><br>
<span class="quotelev2">&gt;&gt; background (in fact, at one point in time it would segfault, though I
</span><br>
<span class="quotelev2">&gt;&gt; believe it now just hangs), and (b) we require that all applications using
</span><br>
<span class="quotelev2">&gt;&gt; connect/accept operate under the same HNP.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is burdensome and appears to be causing problems for users as it
</span><br>
<span class="quotelev2">&gt;&gt; requires them to remember to launch that persistent daemon first -
</span><br>
<span class="quotelev2">&gt;&gt; otherwise, the applications execute, but never connect. Additionally, we
</span><br>
<span class="quotelev2">&gt;&gt; have the problem of confused allocations from the different login sessions.
</span><br>
<span class="quotelev2">&gt;&gt; This has caused numerous problems of processes going to incorrect locations,
</span><br>
<span class="quotelev2">&gt;&gt; allocations timing out at different times and causing jobs to abort, etc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What I propose here is to eliminate the confusion in a manner that minimizes
</span><br>
<span class="quotelev2">&gt;&gt; code complexity. The idea is to utilize our so-painfully-developed multiple
</span><br>
<span class="quotelev2">&gt;&gt; app_context capability to have the user launch all the interacting
</span><br>
<span class="quotelev2">&gt;&gt; applications with the same mpirun command. This not only eliminates the
</span><br>
<span class="quotelev2">&gt;&gt; annoyance factor for users by eliminating the need for multiple steps and
</span><br>
<span class="quotelev2">&gt;&gt; login sessions, but also solves the problem of ensuring that all
</span><br>
<span class="quotelev2">&gt;&gt; applications are running in the same allocation (so we don't have to worry
</span><br>
<span class="quotelev2">&gt;&gt; any more about timeouts in one allocation aborting another job).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The proposal is to add two command line options that are associated with a
</span><br>
<span class="quotelev2">&gt;&gt; specific app_context (feel free to redefine the name of the option - I don't
</span><br>
<span class="quotelev2">&gt;&gt; personally care):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. --independent-job - indicates that this app_context is to be launched as
</span><br>
<span class="quotelev2">&gt;&gt; an independent job. We will assign it a separate jobid, though we will map
</span><br>
<span class="quotelev2">&gt;&gt; it as part of the overall command (e.g., if by slot and no other directives
</span><br>
<span class="quotelev2">&gt;&gt; provided, it will start mapping where the prior app_context left off)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; I am unclear what does the option --connect really do?  The MPI codes
</span><br>
<span class="quotelev1">&gt; actually
</span><br>
<span class="quotelev1">&gt; have to call MPI_Comm_connect to really connect to a process.  Can we
</span><br>
<span class="quotelev1">&gt; get away
</span><br>
<span class="quotelev1">&gt; with just the above option?
</span><br>
<p><p>You are right - connect doesn't need to exist. I was thinking it would just
<br>
minimize the startup message as I wouldn't bother sharing RTE info across
<br>
jobs that weren't &quot;connected&quot;. However, for MPI users, this probably would
<br>
be confusing, so I would suggest just dropping it. With the routed rml, it
<br>
won't have that much impact anyway (I think).
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. --connect x,y,z  - only valid when combined with the above option,
</span><br>
<span class="quotelev2">&gt;&gt; indicates that this independent job is to be MPI-connected to app_contexts
</span><br>
<span class="quotelev2">&gt;&gt; x,y,z (where x,y,z are the number of the app_context, counting from the
</span><br>
<span class="quotelev2">&gt;&gt; beginning of the command - you choose if we start from 0 or 1).
</span><br>
<span class="quotelev2">&gt;&gt; Alternatively, we can default to connecting to everyone, and then use
</span><br>
<span class="quotelev2">&gt;&gt; --disconnect to indicate we -don't- want to be connected.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Note that this means the entire allocation for the combined app_contexts
</span><br>
<span class="quotelev2">&gt;&gt; must be provided. This helps the RTE tremendously to keep things straight,
</span><br>
<span class="quotelev2">&gt;&gt; and ensures that all the app_contexts will be able to complete (or not) in a
</span><br>
<span class="quotelev2">&gt;&gt; synchronized fashion.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It also allows us to eliminate the persistent daemon and multiple login
</span><br>
<span class="quotelev2">&gt;&gt; session requirements for connect/accept. That does not mean we cannot have a
</span><br>
<span class="quotelev2">&gt;&gt; persistent daemon to create a virtual machine, assuming we someday want to
</span><br>
<span class="quotelev2">&gt;&gt; support that mode of operation. This simply removes the requirement that the
</span><br>
<span class="quotelev2">&gt;&gt; user start one just so they can use connect/accept.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Comments?
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="2030.php">Andrew Lofthouse: "[OMPI devel] minor bug report for building openmpi-1.2.3 on cygwin"</a>
<li><strong>Previous message:</strong> <a href="2028.php">Terry D. Dontje: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<li><strong>In reply to:</strong> <a href="2028.php">Terry D. Dontje: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2032.php">Aurelien Bouteiller: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<li><strong>Reply:</strong> <a href="2032.php">Aurelien Bouteiller: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
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
