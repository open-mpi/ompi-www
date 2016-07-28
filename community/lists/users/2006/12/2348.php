<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec 12 00:27:34 2006" -->
<!-- isoreceived="20061212052734" -->
<!-- sent="Mon, 11 Dec 2006 22:27:25 -0700" -->
<!-- isosent="20061212052725" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pernode request" -->
<!-- id="C1A38BCD.DA8%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="347180497203A942A6AA82C85846CBC9034F60FB_at_ES23SNLNT.srn.sandia.gov" -->
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
<strong>Date:</strong> 2006-12-12 00:27:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2349.php">Ralph Castain: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>Previous message:</strong> <a href="2347.php">Maestas, Christopher Daniel: "[OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>In reply to:</strong> <a href="2345.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2350.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Chris
<br>
<p>I have also implemented --npernode N now as well - it is in the trunk as of
<br>
r12826.
<br>
<p>The testing you show below using mpiexec really doesn't tell us the story -
<br>
we need to know the rank of the various processes (and unfortunately,
<br>
hostname just tells us the host). There is no way to tell the rank from just
<br>
the order in which the host names are printed to the screen. I have a test
<br>
program in our distribution (see orte/test/mpi/hello_hostname.c) that will
<br>
output both the rank and hostname - it would give us the required info.
<br>
<p>Regardless, I think it would make sense to provide the flexibility you
<br>
describe. What if we selected this &quot;by-X-slot&quot; style by using the --npernode
<br>
option, and allowing the user to combine it with the existing &quot;--byslot&quot;
<br>
option? This would still launch N procs/node, but with the ranking done by
<br>
slot. If the user doesn't specify &quot;byslot&quot;, then we default to assigning
<br>
ranks by node.
<br>
<p>Make sense? If so, I can probably have that going before the holiday.
<br>
<p>Ralph
<br>
<p><p><p>On 12/11/06 7:51 PM, &quot;Maestas, Christopher Daniel&quot; &lt;cdmaest_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hello Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is great news!  Thanks for doing this.  I will try and get around
</span><br>
<span class="quotelev1">&gt; to it soon before the holiday break.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The allocation scheme always seems to get to me.  From what you describe
</span><br>
<span class="quotelev1">&gt; that is how I would have seen it.  As I've gotten to know osc mpiexec
</span><br>
<span class="quotelev1">&gt; through the years I think they like to do a first fit approach, but now
</span><br>
<span class="quotelev1">&gt; that I test it I think the feature needs more testing or I'm not testing
</span><br>
<span class="quotelev1">&gt; appropriately :-)
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; $ /apps/x86_64/system/mpiexec-0.82/bin/mpiexec -comm=none -npernode 2
</span><br>
<span class="quotelev1">&gt; grep HOSTNAME /etc/sysconfig/network
</span><br>
<span class="quotelev1">&gt; HOSTNAME=&quot;an56&quot;
</span><br>
<span class="quotelev1">&gt; HOSTNAME=&quot;an56&quot;
</span><br>
<span class="quotelev1">&gt; HOSTNAME=&quot;an55&quot;
</span><br>
<span class="quotelev1">&gt; HOSTNAME=&quot;an53&quot;
</span><br>
<span class="quotelev1">&gt; HOSTNAME=&quot;an54&quot;
</span><br>
<span class="quotelev1">&gt; HOSTNAME=&quot;an55&quot;
</span><br>
<span class="quotelev1">&gt; HOSTNAME=&quot;an53&quot;
</span><br>
<span class="quotelev1">&gt; HOSTNAME=&quot;an54&quot;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess I would wonder if it would be possible to switch from the method
</span><br>
<span class="quotelev1">&gt; what you suggest and also allow a &quot;by-X-slot&quot; style of launch where you
</span><br>
<span class="quotelev1">&gt; would see for npernode = X and N nodes:
</span><br>
<span class="quotelev1">&gt;  proc1 - node1
</span><br>
<span class="quotelev1">&gt;  proc2 - node1
</span><br>
<span class="quotelev1">&gt;  ...
</span><br>
<span class="quotelev1">&gt;  proc(X*1) - node1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  proc(X+1) - node2
</span><br>
<span class="quotelev1">&gt;  proc(X+2) - node2
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  proc(X*2) - node2
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  proc(N*X-(X-0)) - nodeN
</span><br>
<span class="quotelev1">&gt;  proc(N*X-(X-1)) - nodeN
</span><br>
<span class="quotelev1">&gt;  ...
</span><br>
<span class="quotelev1">&gt;  proc(X*N-1) - nodeN
</span><br>
<span class="quotelev1">&gt;  proc(X*N) - nodeN
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think that's how to best describe it.  Basically you load until there
</span><br>
<span class="quotelev1">&gt; are X processes on each node before moving to the next.  This may prove
</span><br>
<span class="quotelev1">&gt; to be more challenging, and I can understand if it would not be deemed
</span><br>
<span class="quotelev1">&gt; &quot;worthy.&quot; :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -cdm 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, December 11, 2006 5:41 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Pernode request
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Chris
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Okay, we have modified the pernode behavior as you requested
</span><br>
<span class="quotelev2">&gt;&gt; (on the trunk
</span><br>
<span class="quotelev2">&gt;&gt; as of r12821)- give it a shot and see if that does it. I have
</span><br>
<span class="quotelev2">&gt;&gt; not yet added
</span><br>
<span class="quotelev2">&gt;&gt; the npernode option, but hope to get that soon.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a question for you about the npernode option. I am
</span><br>
<span class="quotelev2">&gt;&gt; assuming that you
</span><br>
<span class="quotelev2">&gt;&gt; want n procs/node, but that you want it mapped by NODE. For
</span><br>
<span class="quotelev2">&gt;&gt; example, proc 0
</span><br>
<span class="quotelev2">&gt;&gt; goes on the first node, proc 1 goes on the second node, etc.
</span><br>
<span class="quotelev2">&gt;&gt; until I get one
</span><br>
<span class="quotelev2">&gt;&gt; on each node; then I wrap back to the beginning and do this
</span><br>
<span class="quotelev2">&gt;&gt; again until I
</span><br>
<span class="quotelev2">&gt;&gt; get the specified number of procs on each node.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Correct?
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I agree with what you stated in points 1-4. That is what we
</span><br>
<span class="quotelev2">&gt;&gt; are looking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I understand your point now about the non-MPI users too. :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cdm
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Wednesday, November 29, 2006 8:01 AM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Pernode request
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Chris
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for the patience and the clarification - much appreciated. In
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fact, I have someone that needs to learn more about the
</span><br>
<span class="quotelev2">&gt;&gt; code base, so I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; think I will assign this to him. At the least, he will have
</span><br>
<span class="quotelev2">&gt;&gt; to learn a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lot more about the mapper!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have no problem with modifying the pernode behavior to
</span><br>
<span class="quotelev2">&gt;&gt; deal with the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; case of someone specifying -np as you describe. It would be
</span><br>
<span class="quotelev2">&gt;&gt; relatively
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; easy to check. As I understand it, you want the behavior to be:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. if no -np is specified, launch one proc/node across
</span><br>
<span class="quotelev2">&gt;&gt; entire allocation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. if -np n is specified AND n is less than the number of allocated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes, then launch one proc/node up to the specified
</span><br>
<span class="quotelev2">&gt;&gt; number. Of course,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this is identical to just doing -np n -bynode, but that's
</span><br>
<span class="quotelev2">&gt;&gt; immaterial.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ;-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3. if -np n is specified AND n is greater than the number
</span><br>
<span class="quotelev2">&gt;&gt; of allocated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes, error message and exit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4. add a -npernode n option that launches n procs/node,
</span><br>
<span class="quotelev2">&gt;&gt; subject to the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; same tests above.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you confirm?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Finally, I think you misunderstood my comment about the MPI
</span><br>
<span class="quotelev2">&gt;&gt; folks. Our
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; non-MPI users couldn't care less about commonality of command line
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; arguments across MPI implementations. Hence, I leave issues
</span><br>
<span class="quotelev2">&gt;&gt; in that area
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to the MPI members of the team - they are the ones that
</span><br>
<span class="quotelev2">&gt;&gt; decide how to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; deal with the myriad of different option syntaxes in the
</span><br>
<span class="quotelev2">&gt;&gt; MPI community.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gives me too much of a headache! :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2349.php">Ralph Castain: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>Previous message:</strong> <a href="2347.php">Maestas, Christopher Daniel: "[OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>In reply to:</strong> <a href="2345.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2350.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
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
