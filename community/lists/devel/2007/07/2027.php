<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 27 09:05:19 2007" -->
<!-- isoreceived="20070727130519" -->
<!-- sent="Fri, 27 Jul 2007 07:05:05 -0600" -->
<!-- isosent="20070727130505" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] [RFC] New command line options to replace persistent daemon operations" -->
<!-- id="C2CF49A1.36DA%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-27 09:05:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2028.php">Terry D. Dontje: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<li><strong>Previous message:</strong> <a href="2026.php">Ralph Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2028.php">Terry D. Dontje: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<li><strong>Reply:</strong> <a href="2028.php">Terry D. Dontje: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT:   Proposal to add two new command line options that will allow us to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;replace the current need to separately launch a persistent daemon to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;support connect/accept operations
<br>
<p>WHY:    Remove problems of confusing multiple allocations, provide a cleaner
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;method for connect/accept between jobs
<br>
<p>WHERE:  minor changes in orterun and orted, some code in rmgr and each pls
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to ensure the proper jobid and connect info is passed to each
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;app_context as it is launched
<br>
<p>TIMOUT: 8/10/07
<br>
<p>We currently do not support connect/accept operations in a clean way. Users
<br>
are required to first start a persistent daemon that operates in a
<br>
user-named universe. They then must enter the mpirun command for each
<br>
application in a separate window, providing the universe name on each
<br>
command line. This is required because (a) mpirun will not run in the
<br>
background (in fact, at one point in time it would segfault, though I
<br>
believe it now just hangs), and (b) we require that all applications using
<br>
connect/accept operate under the same HNP.
<br>
<p>This is burdensome and appears to be causing problems for users as it
<br>
requires them to remember to launch that persistent daemon first -
<br>
otherwise, the applications execute, but never connect. Additionally, we
<br>
have the problem of confused allocations from the different login sessions.
<br>
This has caused numerous problems of processes going to incorrect locations,
<br>
allocations timing out at different times and causing jobs to abort, etc.
<br>
<p>What I propose here is to eliminate the confusion in a manner that minimizes
<br>
code complexity. The idea is to utilize our so-painfully-developed multiple
<br>
app_context capability to have the user launch all the interacting
<br>
applications with the same mpirun command. This not only eliminates the
<br>
annoyance factor for users by eliminating the need for multiple steps and
<br>
login sessions, but also solves the problem of ensuring that all
<br>
applications are running in the same allocation (so we don't have to worry
<br>
any more about timeouts in one allocation aborting another job).
<br>
<p>The proposal is to add two command line options that are associated with a
<br>
specific app_context (feel free to redefine the name of the option - I don't
<br>
personally care):
<br>
<p>1. --independent-job - indicates that this app_context is to be launched as
<br>
an independent job. We will assign it a separate jobid, though we will map
<br>
it as part of the overall command (e.g., if by slot and no other directives
<br>
provided, it will start mapping where the prior app_context left off)
<br>
<p>2. --connect x,y,z  - only valid when combined with the above option,
<br>
indicates that this independent job is to be MPI-connected to app_contexts
<br>
x,y,z (where x,y,z are the number of the app_context, counting from the
<br>
beginning of the command - you choose if we start from 0 or 1).
<br>
Alternatively, we can default to connecting to everyone, and then use
<br>
--disconnect to indicate we -don't- want to be connected.
<br>
<p>Note that this means the entire allocation for the combined app_contexts
<br>
must be provided. This helps the RTE tremendously to keep things straight,
<br>
and ensures that all the app_contexts will be able to complete (or not) in a
<br>
synchronized fashion.
<br>
<p>It also allows us to eliminate the persistent daemon and multiple login
<br>
session requirements for connect/accept. That does not mean we cannot have a
<br>
persistent daemon to create a virtual machine, assuming we someday want to
<br>
support that mode of operation. This simply removes the requirement that the
<br>
user start one just so they can use connect/accept.
<br>
<p>Comments?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2028.php">Terry D. Dontje: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<li><strong>Previous message:</strong> <a href="2026.php">Ralph Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2028.php">Terry D. Dontje: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<li><strong>Reply:</strong> <a href="2028.php">Terry D. Dontje: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
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
