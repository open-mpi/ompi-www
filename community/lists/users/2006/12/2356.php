<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec 13 08:57:28 2006" -->
<!-- isoreceived="20061213135728" -->
<!-- sent="Wed, 13 Dec 2006 06:57:20 -0700" -->
<!-- isosent="20061213135720" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pernode request" -->
<!-- id="C1A554D0.6660%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="347180497203A942A6AA82C85846CBC9034F60FF_at_ES23SNLNT.srn.sandia.gov" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-13 08:57:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2357.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>Previous message:</strong> <a href="2355.php">Michael Alexander: "[OMPI users] CfP Workshops on Virtualization/XEN in HPC Cluster and Grid Computing Environments (XHPC'07, VHPC'07)"</a>
<li><strong>In reply to:</strong> <a href="2350.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2357.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/12/06 9:18 AM, &quot;Maestas, Christopher Daniel&quot; &lt;cdmaest_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I figured I should of run an mpi program ...here's what it does (seems
</span><br>
<span class="quotelev1">&gt; to be by-X-slot style):
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; $ /apps/x86_64/system/mpiexec-0.82/bin/mpiexec -npernode 2 mpi_hello
</span><br>
<span class="quotelev1">&gt; Hello, I am node an41 with rank 0
</span><br>
<span class="quotelev1">&gt; Hello, I am node an41 with rank 1
</span><br>
<span class="quotelev1">&gt; Hello, I am node an39 with rank 4
</span><br>
<span class="quotelev1">&gt; Hello, I am node an40 with rank 2
</span><br>
<span class="quotelev1">&gt; Hello, I am node an38 with rank 6
</span><br>
<span class="quotelev1">&gt; Hello, I am node an39 with rank 5
</span><br>
<span class="quotelev1">&gt; Hello, I am node an38 with rank 7
</span><br>
<span class="quotelev1">&gt; Hello, I am node an40 with rank 3
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<p>Clearly mapping by slot here. Question: our default mapping mode is by slot,
<br>
as this example also shows. I could turn the npernode behavior around from
<br>
what I previously described - we could default to mapping by slot (as we do
<br>
normally, and in concert with what mpiexec appears to be doing), and let
<br>
users provide the &quot;-bynode&quot; option to change to mapping by node.
<br>
<p>This wouldn't have any affect on the pernode behavior since that option only
<br>
maps one proc/node anyway (so mapping by slot or by node yields the same
<br>
result).
<br>
<p>It seems to me this would be more consistent. Make sense?
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What you describe makes sense to me.  Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, December 11, 2006 10:27 PM
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
<span class="quotelev2">&gt;&gt; I have also implemented --npernode N now as well - it is in
</span><br>
<span class="quotelev2">&gt;&gt; the trunk as of
</span><br>
<span class="quotelev2">&gt;&gt; r12826.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The testing you show below using mpiexec really doesn't tell
</span><br>
<span class="quotelev2">&gt;&gt; us the story -
</span><br>
<span class="quotelev2">&gt;&gt; we need to know the rank of the various processes (and unfortunately,
</span><br>
<span class="quotelev2">&gt;&gt; hostname just tells us the host). There is no way to tell the
</span><br>
<span class="quotelev2">&gt;&gt; rank from just
</span><br>
<span class="quotelev2">&gt;&gt; the order in which the host names are printed to the screen.
</span><br>
<span class="quotelev2">&gt;&gt; I have a test
</span><br>
<span class="quotelev2">&gt;&gt; program in our distribution (see
</span><br>
<span class="quotelev2">&gt;&gt; orte/test/mpi/hello_hostname.c) that will
</span><br>
<span class="quotelev2">&gt;&gt; output both the rank and hostname - it would give us the
</span><br>
<span class="quotelev2">&gt;&gt; required info.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regardless, I think it would make sense to provide the flexibility you
</span><br>
<span class="quotelev2">&gt;&gt; describe. What if we selected this &quot;by-X-slot&quot; style by using
</span><br>
<span class="quotelev2">&gt;&gt; the --npernode
</span><br>
<span class="quotelev2">&gt;&gt; option, and allowing the user to combine it with the existing
</span><br>
<span class="quotelev2">&gt;&gt; &quot;--byslot&quot;
</span><br>
<span class="quotelev2">&gt;&gt; option? This would still launch N procs/node, but with the
</span><br>
<span class="quotelev2">&gt;&gt; ranking done by
</span><br>
<span class="quotelev2">&gt;&gt; slot. If the user doesn't specify &quot;byslot&quot;, then we default
</span><br>
<span class="quotelev2">&gt;&gt; to assigning
</span><br>
<span class="quotelev2">&gt;&gt; ranks by node.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Make sense? If so, I can probably have that going before the holiday.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 12/11/06 7:51 PM, &quot;Maestas, Christopher Daniel&quot;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;cdmaest_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is great news!  Thanks for doing this.  I will try and
</span><br>
<span class="quotelev2">&gt;&gt; get around
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to it soon before the holiday break.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The allocation scheme always seems to get to me.  From what
</span><br>
<span class="quotelev2">&gt;&gt; you describe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that is how I would have seen it.  As I've gotten to know
</span><br>
<span class="quotelev2">&gt;&gt; osc mpiexec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; through the years I think they like to do a first fit
</span><br>
<span class="quotelev2">&gt;&gt; approach, but now
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that I test it I think the feature needs more testing or
</span><br>
<span class="quotelev2">&gt;&gt; I'm not testing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appropriately :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ /apps/x86_64/system/mpiexec-0.82/bin/mpiexec -comm=none
</span><br>
<span class="quotelev2">&gt;&gt; -npernode 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; grep HOSTNAME /etc/sysconfig/network
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HOSTNAME=&quot;an56&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HOSTNAME=&quot;an56&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HOSTNAME=&quot;an55&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HOSTNAME=&quot;an53&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HOSTNAME=&quot;an54&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HOSTNAME=&quot;an55&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HOSTNAME=&quot;an53&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HOSTNAME=&quot;an54&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I guess I would wonder if it would be possible to switch
</span><br>
<span class="quotelev2">&gt;&gt; from the method
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what you suggest and also allow a &quot;by-X-slot&quot; style of
</span><br>
<span class="quotelev2">&gt;&gt; launch where you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would see for npernode = X and N nodes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  proc1 - node1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  proc2 - node1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  proc(X*1) - node1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  proc(X+1) - node2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  proc(X+2) - node2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  proc(X*2) - node2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  proc(N*X-(X-0)) - nodeN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  proc(N*X-(X-1)) - nodeN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  proc(X*N-1) - nodeN
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  proc(X*N) - nodeN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think that's how to best describe it.  Basically you load
</span><br>
<span class="quotelev2">&gt;&gt; until there
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are X processes on each node before moving to the next.
</span><br>
<span class="quotelev2">&gt;&gt; This may prove
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to be more challenging, and I can understand if it would
</span><br>
<span class="quotelev2">&gt;&gt; not be deemed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;worthy.&quot; :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cdm 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Monday, December 11, 2006 5:41 PM
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
<span class="quotelev4">&gt;&gt;&gt;&gt; Okay, we have modified the pernode behavior as you requested
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (on the trunk
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as of r12821)- give it a shot and see if that does it. I have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not yet added
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the npernode option, but hope to get that soon.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a question for you about the npernode option. I am
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; assuming that you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; want n procs/node, but that you want it mapped by NODE. For
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; example, proc 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; goes on the first node, proc 1 goes on the second node, etc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; until I get one
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on each node; then I wrap back to the beginning and do this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; again until I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; get the specified number of procs on each node.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Correct?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I agree with what you stated in points 1-4. That is what we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are looking
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I understand your point now about the non-MPI users too. :-)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -cdm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sent: Wednesday, November 29, 2006 8:01 AM
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Pernode request
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi Chris
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks for the patience and the clarification - much
</span><br>
<span class="quotelev2">&gt;&gt; appreciated. In
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fact, I have someone that needs to learn more about the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; code base, so I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; think I will assign this to him. At the least, he will have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to learn a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lot more about the mapper!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have no problem with modifying the pernode behavior to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; deal with the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; case of someone specifying -np as you describe. It would be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; relatively
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; easy to check. As I understand it, you want the behavior to be:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1. if no -np is specified, launch one proc/node across
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; entire allocation
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 2. if -np n is specified AND n is less than the number
</span><br>
<span class="quotelev2">&gt;&gt; of allocated
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; nodes, then launch one proc/node up to the specified
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; number. Of course,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; this is identical to just doing -np n -bynode, but that's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; immaterial.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ;-)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 3. if -np n is specified AND n is greater than the number
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of allocated
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; nodes, error message and exit
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 4. add a -npernode n option that launches n procs/node,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; subject to the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; same tests above.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Can you confirm?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Finally, I think you misunderstood my comment about the MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; folks. Our
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; non-MPI users couldn't care less about commonality of
</span><br>
<span class="quotelev2">&gt;&gt; command line
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; arguments across MPI implementations. Hence, I leave issues
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in that area
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to the MPI members of the team - they are the ones that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; decide how to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; deal with the myriad of different option syntaxes in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI community.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Gives me too much of a headache! :-)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="2357.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>Previous message:</strong> <a href="2355.php">Michael Alexander: "[OMPI users] CfP Workshops on Virtualization/XEN in HPC Cluster and Grid Computing Environments (XHPC'07, VHPC'07)"</a>
<li><strong>In reply to:</strong> <a href="2350.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2357.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
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
