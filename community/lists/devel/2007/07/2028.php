<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 27 09:57:45 2007" -->
<!-- isoreceived="20070727135745" -->
<!-- sent="Fri, 27 Jul 2007 09:58:55 -0400" -->
<!-- isosent="20070727135855" -->
<!-- name="Terry D. Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations" -->
<!-- id="46A9FA1F.2040306_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C2CF49A1.36DA%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Terry D. Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-27 09:58:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2029.php">Ralph Castain: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<li><strong>Previous message:</strong> <a href="2027.php">Ralph Castain: "[OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<li><strong>In reply to:</strong> <a href="2027.php">Ralph Castain: "[OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2029.php">Ralph Castain: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<li><strong>Reply:</strong> <a href="2029.php">Ralph Castain: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt;WHAT:   Proposal to add two new command line options that will allow us to
</span><br>
<span class="quotelev1">&gt;        replace the current need to separately launch a persistent daemon to
</span><br>
<span class="quotelev1">&gt;        support connect/accept operations
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;WHY:    Remove problems of confusing multiple allocations, provide a cleaner
</span><br>
<span class="quotelev1">&gt;        method for connect/accept between jobs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;WHERE:  minor changes in orterun and orted, some code in rmgr and each pls
</span><br>
<span class="quotelev1">&gt;        to ensure the proper jobid and connect info is passed to each
</span><br>
<span class="quotelev1">&gt;        app_context as it is launched
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
It is my opinion that we would be better off attacking the issues of
<br>
the persistent daemons described below then creating a new set of
<br>
options to mpirun for process placement.  (more comments below on
<br>
the actual proposal).
<br>
<p><span class="quotelev1">&gt;TIMOUT: 8/10/07
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We currently do not support connect/accept operations in a clean way. Users
</span><br>
<span class="quotelev1">&gt;are required to first start a persistent daemon that operates in a
</span><br>
<span class="quotelev1">&gt;user-named universe. They then must enter the mpirun command for each
</span><br>
<span class="quotelev1">&gt;application in a separate window, providing the universe name on each
</span><br>
<span class="quotelev1">&gt;command line. This is required because (a) mpirun will not run in the
</span><br>
<span class="quotelev1">&gt;background (in fact, at one point in time it would segfault, though I
</span><br>
<span class="quotelev1">&gt;believe it now just hangs), and (b) we require that all applications using
</span><br>
<span class="quotelev1">&gt;connect/accept operate under the same HNP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This is burdensome and appears to be causing problems for users as it
</span><br>
<span class="quotelev1">&gt;requires them to remember to launch that persistent daemon first -
</span><br>
<span class="quotelev1">&gt;otherwise, the applications execute, but never connect. Additionally, we
</span><br>
<span class="quotelev1">&gt;have the problem of confused allocations from the different login sessions.
</span><br>
<span class="quotelev1">&gt;This has caused numerous problems of processes going to incorrect locations,
</span><br>
<span class="quotelev1">&gt;allocations timing out at different times and causing jobs to abort, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;What I propose here is to eliminate the confusion in a manner that minimizes
</span><br>
<span class="quotelev1">&gt;code complexity. The idea is to utilize our so-painfully-developed multiple
</span><br>
<span class="quotelev1">&gt;app_context capability to have the user launch all the interacting
</span><br>
<span class="quotelev1">&gt;applications with the same mpirun command. This not only eliminates the
</span><br>
<span class="quotelev1">&gt;annoyance factor for users by eliminating the need for multiple steps and
</span><br>
<span class="quotelev1">&gt;login sessions, but also solves the problem of ensuring that all
</span><br>
<span class="quotelev1">&gt;applications are running in the same allocation (so we don't have to worry
</span><br>
<span class="quotelev1">&gt;any more about timeouts in one allocation aborting another job).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The proposal is to add two command line options that are associated with a
</span><br>
<span class="quotelev1">&gt;specific app_context (feel free to redefine the name of the option - I don't
</span><br>
<span class="quotelev1">&gt;personally care):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;1. --independent-job - indicates that this app_context is to be launched as
</span><br>
<span class="quotelev1">&gt;an independent job. We will assign it a separate jobid, though we will map
</span><br>
<span class="quotelev1">&gt;it as part of the overall command (e.g., if by slot and no other directives
</span><br>
<span class="quotelev1">&gt;provided, it will start mapping where the prior app_context left off)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
I am unclear what does the option --connect really do?  The MPI codes 
<br>
actually
<br>
have to call MPI_Comm_connect to really connect to a process.  Can we 
<br>
get away
<br>
with just the above option?
<br>
<p><span class="quotelev1">&gt;2. --connect x,y,z  - only valid when combined with the above option,
</span><br>
<span class="quotelev1">&gt;indicates that this independent job is to be MPI-connected to app_contexts
</span><br>
<span class="quotelev1">&gt;x,y,z (where x,y,z are the number of the app_context, counting from the
</span><br>
<span class="quotelev1">&gt;beginning of the command - you choose if we start from 0 or 1).
</span><br>
<span class="quotelev1">&gt;Alternatively, we can default to connecting to everyone, and then use
</span><br>
<span class="quotelev1">&gt;--disconnect to indicate we -don't- want to be connected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Note that this means the entire allocation for the combined app_contexts
</span><br>
<span class="quotelev1">&gt;must be provided. This helps the RTE tremendously to keep things straight,
</span><br>
<span class="quotelev1">&gt;and ensures that all the app_contexts will be able to complete (or not) in a
</span><br>
<span class="quotelev1">&gt;synchronized fashion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;It also allows us to eliminate the persistent daemon and multiple login
</span><br>
<span class="quotelev1">&gt;session requirements for connect/accept. That does not mean we cannot have a
</span><br>
<span class="quotelev1">&gt;persistent daemon to create a virtual machine, assuming we someday want to
</span><br>
<span class="quotelev1">&gt;support that mode of operation. This simply removes the requirement that the
</span><br>
<span class="quotelev1">&gt;user start one just so they can use connect/accept.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Comments?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2029.php">Ralph Castain: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<li><strong>Previous message:</strong> <a href="2027.php">Ralph Castain: "[OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<li><strong>In reply to:</strong> <a href="2027.php">Ralph Castain: "[OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2029.php">Ralph Castain: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<li><strong>Reply:</strong> <a href="2029.php">Ralph Castain: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
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
