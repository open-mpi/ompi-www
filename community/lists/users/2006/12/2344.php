<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec 11 19:41:28 2006" -->
<!-- isoreceived="20061212004128" -->
<!-- sent="Mon, 11 Dec 2006 17:41:18 -0700" -->
<!-- isosent="20061212004118" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pernode request" -->
<!-- id="C1A348BE.D9A%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-11 19:41:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2345.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>Previous message:</strong> <a href="2343.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2236.php">Maestas, Christopher Daniel: "[OMPI users] Pernode request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2345.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Chris
<br>
<p>Okay, we have modified the pernode behavior as you requested (on the trunk
<br>
as of r12821)- give it a shot and see if that does it. I have not yet added
<br>
the npernode option, but hope to get that soon.
<br>
<p>I have a question for you about the npernode option. I am assuming that you
<br>
want n procs/node, but that you want it mapped by NODE. For example, proc 0
<br>
goes on the first node, proc 1 goes on the second node, etc. until I get one
<br>
on each node; then I wrap back to the beginning and do this again until I
<br>
get the specified number of procs on each node.
<br>
<p>Correct?
<br>
Ralph
<br>
<p><span class="quotelev1">&gt;Ralph,
</span><br>
<p><span class="quotelev1">&gt;I agree with what you stated in points 1-4. That is what we are looking
</span><br>
<span class="quotelev1">&gt;for.
</span><br>
<span class="quotelev1">&gt;I understand your point now about the non-MPI users too. :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks,
</span><br>
<span class="quotelev1">&gt;-cdm
</span><br>
<p><span class="quotelev2">&gt;&gt;-----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt;From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt;Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt;Sent: Wednesday, November 29, 2006 8:01 AM
</span><br>
<span class="quotelev2">&gt;&gt;To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt;Subject: Re: [OMPI users] Pernode request
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Hi Chris
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Thanks for the patience and the clarification - much appreciated. In
</span><br>
<span class="quotelev2">&gt;&gt;fact, I have someone that needs to learn more about the code base, so I
</span><br>
<span class="quotelev2">&gt;&gt;think I will assign this to him. At the least, he will have to learn a
</span><br>
<span class="quotelev2">&gt;&gt;lot more about the mapper!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I have no problem with modifying the pernode behavior to deal with the
</span><br>
<span class="quotelev2">&gt;&gt;case of someone specifying -np as you describe. It would be relatively
</span><br>
<span class="quotelev2">&gt;&gt;easy to check. As I understand it, you want the behavior to be:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;1. if no -np is specified, launch one proc/node across entire allocation
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;2. if -np n is specified AND n is less than the number of allocated
</span><br>
<span class="quotelev2">&gt;&gt;nodes, then launch one proc/node up to the specified number. Of course,
</span><br>
<span class="quotelev2">&gt;&gt;this is identical to just doing -np n -bynode, but that's immaterial.
</span><br>
<span class="quotelev2">&gt;&gt;;-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;3. if -np n is specified AND n is greater than the number of allocated
</span><br>
<span class="quotelev2">&gt;&gt;nodes, error message and exit
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;4. add a -npernode n option that launches n procs/node, subject to the
</span><br>
<span class="quotelev2">&gt;&gt;same tests above.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Can you confirm?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Finally, I think you misunderstood my comment about the MPI folks. Our
</span><br>
<span class="quotelev2">&gt;&gt;non-MPI users couldn't care less about commonality of command line
</span><br>
<span class="quotelev2">&gt;&gt;arguments across MPI implementations. Hence, I leave issues in that area
</span><br>
<span class="quotelev2">&gt;&gt;to the MPI members of the team - they are the ones that decide how to
</span><br>
<span class="quotelev2">&gt;&gt;deal with the myriad of different option syntaxes in the MPI community.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Gives me too much of a headache! :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Ralph 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2345.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>Previous message:</strong> <a href="2343.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2236.php">Maestas, Christopher Daniel: "[OMPI users] Pernode request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2345.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
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
