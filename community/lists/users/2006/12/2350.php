<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec 12 11:19:12 2006" -->
<!-- isoreceived="20061212161912" -->
<!-- sent="Tue, 12 Dec 2006 09:18:47 -0700" -->
<!-- isosent="20061212161847" -->
<!-- name="Maestas, Christopher Daniel" -->
<!-- email="cdmaest_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pernode request" -->
<!-- id="347180497203A942A6AA82C85846CBC9034F60FF_at_ES23SNLNT.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Pernode request" -->
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
<strong>From:</strong> Maestas, Christopher Daniel (<em>cdmaest_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-12 11:18:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2351.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Previous message:</strong> <a href="2349.php">Ralph Castain: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2236.php">Maestas, Christopher Daniel: "[OMPI users] Pernode request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2356.php">Ralph H Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Reply:</strong> <a href="2356.php">Ralph H Castain: "Re: [OMPI users] Pernode request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I figured I should of run an mpi program ...here's what it does (seems
<br>
to be by-X-slot style):
<br>
<pre>
---
$ /apps/x86_64/system/mpiexec-0.82/bin/mpiexec -npernode 2 mpi_hello
Hello, I am node an41 with rank 0
Hello, I am node an41 with rank 1
Hello, I am node an39 with rank 4
Hello, I am node an40 with rank 2
Hello, I am node an38 with rank 6
Hello, I am node an39 with rank 5
Hello, I am node an38 with rank 7
Hello, I am node an40 with rank 3
---
What you describe makes sense to me.  Thanks!
&gt; -----Original Message-----
&gt; From: users-bounces_at_[hidden] 
&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
&gt; Sent: Monday, December 11, 2006 10:27 PM
&gt; To: Open MPI Users
&gt; Subject: Re: [OMPI users] Pernode request
&gt; 
&gt; Hi Chris
&gt; 
&gt; I have also implemented --npernode N now as well - it is in 
&gt; the trunk as of
&gt; r12826.
&gt; 
&gt; The testing you show below using mpiexec really doesn't tell 
&gt; us the story -
&gt; we need to know the rank of the various processes (and unfortunately,
&gt; hostname just tells us the host). There is no way to tell the 
&gt; rank from just
&gt; the order in which the host names are printed to the screen. 
&gt; I have a test
&gt; program in our distribution (see 
&gt; orte/test/mpi/hello_hostname.c) that will
&gt; output both the rank and hostname - it would give us the 
&gt; required info.
&gt; 
&gt; Regardless, I think it would make sense to provide the flexibility you
&gt; describe. What if we selected this &quot;by-X-slot&quot; style by using 
&gt; the --npernode
&gt; option, and allowing the user to combine it with the existing 
&gt; &quot;--byslot&quot;
&gt; option? This would still launch N procs/node, but with the 
&gt; ranking done by
&gt; slot. If the user doesn't specify &quot;byslot&quot;, then we default 
&gt; to assigning
&gt; ranks by node.
&gt; 
&gt; Make sense? If so, I can probably have that going before the holiday.
&gt; 
&gt; Ralph
&gt; 
&gt; 
&gt; 
&gt; On 12/11/06 7:51 PM, &quot;Maestas, Christopher Daniel&quot; 
&gt; &lt;cdmaest_at_[hidden]&gt;
&gt; wrote:
&gt; 
&gt; &gt; Hello Ralph,
&gt; &gt; 
&gt; &gt; This is great news!  Thanks for doing this.  I will try and 
&gt; get around
&gt; &gt; to it soon before the holiday break.
&gt; &gt; 
&gt; &gt; The allocation scheme always seems to get to me.  From what 
&gt; you describe
&gt; &gt; that is how I would have seen it.  As I've gotten to know 
&gt; osc mpiexec
&gt; &gt; through the years I think they like to do a first fit 
&gt; approach, but now
&gt; &gt; that I test it I think the feature needs more testing or 
&gt; I'm not testing
&gt; &gt; appropriately :-)
&gt; &gt; ---
&gt; &gt; $ /apps/x86_64/system/mpiexec-0.82/bin/mpiexec -comm=none 
&gt; -npernode 2
&gt; &gt; grep HOSTNAME /etc/sysconfig/network
&gt; &gt; HOSTNAME=&quot;an56&quot;
&gt; &gt; HOSTNAME=&quot;an56&quot;
&gt; &gt; HOSTNAME=&quot;an55&quot;
&gt; &gt; HOSTNAME=&quot;an53&quot;
&gt; &gt; HOSTNAME=&quot;an54&quot;
&gt; &gt; HOSTNAME=&quot;an55&quot;
&gt; &gt; HOSTNAME=&quot;an53&quot;
&gt; &gt; HOSTNAME=&quot;an54&quot;
&gt; &gt; ---
&gt; &gt; 
&gt; &gt; I guess I would wonder if it would be possible to switch 
&gt; from the method
&gt; &gt; what you suggest and also allow a &quot;by-X-slot&quot; style of 
&gt; launch where you
&gt; &gt; would see for npernode = X and N nodes:
&gt; &gt;  proc1 - node1
&gt; &gt;  proc2 - node1
&gt; &gt;  ...
&gt; &gt;  proc(X*1) - node1
&gt; &gt; ...
&gt; &gt;  proc(X+1) - node2
&gt; &gt;  proc(X+2) - node2
&gt; &gt; ...
&gt; &gt;  proc(X*2) - node2
&gt; &gt; ...
&gt; &gt;  proc(N*X-(X-0)) - nodeN
&gt; &gt;  proc(N*X-(X-1)) - nodeN
&gt; &gt;  ...
&gt; &gt;  proc(X*N-1) - nodeN
&gt; &gt;  proc(X*N) - nodeN
&gt; &gt; 
&gt; &gt; I think that's how to best describe it.  Basically you load 
&gt; until there
&gt; &gt; are X processes on each node before moving to the next.  
&gt; This may prove
&gt; &gt; to be more challenging, and I can understand if it would 
&gt; not be deemed
&gt; &gt; &quot;worthy.&quot; :-)
&gt; &gt; 
&gt; &gt; -cdm 
&gt; &gt; 
&gt; &gt;&gt; -----Original Message-----
&gt; &gt;&gt; From: users-bounces_at_[hidden]
&gt; &gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
&gt; &gt;&gt; Sent: Monday, December 11, 2006 5:41 PM
&gt; &gt;&gt; To: Open MPI Users
&gt; &gt;&gt; Subject: Re: [OMPI users] Pernode request
&gt; &gt;&gt; 
&gt; &gt;&gt; Hi Chris
&gt; &gt;&gt; 
&gt; &gt;&gt; Okay, we have modified the pernode behavior as you requested
&gt; &gt;&gt; (on the trunk
&gt; &gt;&gt; as of r12821)- give it a shot and see if that does it. I have
&gt; &gt;&gt; not yet added
&gt; &gt;&gt; the npernode option, but hope to get that soon.
&gt; &gt;&gt; 
&gt; &gt;&gt; I have a question for you about the npernode option. I am
&gt; &gt;&gt; assuming that you
&gt; &gt;&gt; want n procs/node, but that you want it mapped by NODE. For
&gt; &gt;&gt; example, proc 0
&gt; &gt;&gt; goes on the first node, proc 1 goes on the second node, etc.
&gt; &gt;&gt; until I get one
&gt; &gt;&gt; on each node; then I wrap back to the beginning and do this
&gt; &gt;&gt; again until I
&gt; &gt;&gt; get the specified number of procs on each node.
&gt; &gt;&gt; 
&gt; &gt;&gt; Correct?
&gt; &gt;&gt; Ralph
&gt; &gt;&gt; 
&gt; &gt;&gt;&gt; Ralph,
&gt; &gt;&gt; 
&gt; &gt;&gt;&gt; I agree with what you stated in points 1-4. That is what we
&gt; &gt;&gt; are looking
&gt; &gt;&gt;&gt; for.
&gt; &gt;&gt;&gt; I understand your point now about the non-MPI users too. :-)
&gt; &gt;&gt;&gt; 
&gt; &gt;&gt;&gt; Thanks,
&gt; &gt;&gt;&gt; -cdm
&gt; &gt;&gt; 
&gt; &gt;&gt;&gt;&gt; -----Original Message-----
&gt; &gt;&gt;&gt;&gt; From: users-bounces_at_[hidden]
&gt; &gt;&gt; [mailto:users-bounces_at_[hidden]] On
&gt; &gt;&gt;&gt;&gt; Behalf Of Ralph Castain
&gt; &gt;&gt;&gt;&gt; Sent: Wednesday, November 29, 2006 8:01 AM
&gt; &gt;&gt;&gt;&gt; To: Open MPI Users
&gt; &gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Pernode request
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; Hi Chris
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; Thanks for the patience and the clarification - much 
&gt; appreciated. In
&gt; &gt;&gt;&gt;&gt; fact, I have someone that needs to learn more about the
&gt; &gt;&gt; code base, so I
&gt; &gt;&gt;&gt;&gt; think I will assign this to him. At the least, he will have
&gt; &gt;&gt; to learn a
&gt; &gt;&gt;&gt;&gt; lot more about the mapper!
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; I have no problem with modifying the pernode behavior to
&gt; &gt;&gt; deal with the
&gt; &gt;&gt;&gt;&gt; case of someone specifying -np as you describe. It would be
&gt; &gt;&gt; relatively
&gt; &gt;&gt;&gt;&gt; easy to check. As I understand it, you want the behavior to be:
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; 1. if no -np is specified, launch one proc/node across
&gt; &gt;&gt; entire allocation
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; 2. if -np n is specified AND n is less than the number 
&gt; of allocated
&gt; &gt;&gt;&gt;&gt; nodes, then launch one proc/node up to the specified
&gt; &gt;&gt; number. Of course,
&gt; &gt;&gt;&gt;&gt; this is identical to just doing -np n -bynode, but that's
&gt; &gt;&gt; immaterial.
&gt; &gt;&gt;&gt;&gt; ;-)
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; 3. if -np n is specified AND n is greater than the number
&gt; &gt;&gt; of allocated
&gt; &gt;&gt;&gt;&gt; nodes, error message and exit
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; 4. add a -npernode n option that launches n procs/node,
&gt; &gt;&gt; subject to the
&gt; &gt;&gt;&gt;&gt; same tests above.
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; Can you confirm?
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; Finally, I think you misunderstood my comment about the MPI
&gt; &gt;&gt; folks. Our
&gt; &gt;&gt;&gt;&gt; non-MPI users couldn't care less about commonality of 
&gt; command line
&gt; &gt;&gt;&gt;&gt; arguments across MPI implementations. Hence, I leave issues
&gt; &gt;&gt; in that area
&gt; &gt;&gt;&gt;&gt; to the MPI members of the team - they are the ones that
&gt; &gt;&gt; decide how to
&gt; &gt;&gt;&gt;&gt; deal with the myriad of different option syntaxes in the
&gt; &gt;&gt; MPI community.
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; Gives me too much of a headache! :-)
&gt; &gt;&gt;&gt;&gt; 
&gt; &gt;&gt;&gt;&gt; Ralph 
&gt; &gt;&gt; 
&gt; &gt;&gt; 
&gt; &gt;&gt; _______________________________________________
&gt; &gt;&gt; users mailing list
&gt; &gt;&gt; users_at_[hidden]
&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt; 
&gt; &gt; 
&gt; &gt; 
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2351.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Previous message:</strong> <a href="2349.php">Ralph Castain: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2236.php">Maestas, Christopher Daniel: "[OMPI users] Pernode request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2356.php">Ralph H Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Reply:</strong> <a href="2356.php">Ralph H Castain: "Re: [OMPI users] Pernode request"</a>
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
