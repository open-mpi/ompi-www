<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 28 13:04:23 2006" -->
<!-- isoreceived="20060628170423" -->
<!-- sent="Wed, 28 Jun 2006 13:02:16 -0400" -->
<!-- isosent="20060628170216" -->
<!-- name="Terry D. Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Re : OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error: 0), si_code:1(BUS_ADRALN)" -->
<!-- id="44A2B618.5040200_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200606281221.22726.kyron_at_neuralbs.com" -->
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
<strong>Date:</strong> 2006-06-28 13:02:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1492.php">Eric Thibodeau: "Re: [OMPI users] Re : OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error: 0), si_code:1(BUS_ADRALN)"</a>
<li><strong>Previous message:</strong> <a href="1490.php">Eric Thibodeau: "Re: [OMPI users] Re : OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error:	0 ), si_code:1(BUS_ADRALN)"</a>
<li><strong>In reply to:</strong> <a href="1490.php">Eric Thibodeau: "Re: [OMPI users] Re : OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error:	0 ), si_code:1(BUS_ADRALN)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1492.php">Eric Thibodeau: "Re: [OMPI users] Re : OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error: 0), si_code:1(BUS_ADRALN)"</a>
<li><strong>Reply:</strong> <a href="1492.php">Eric Thibodeau: "Re: [OMPI users] Re : OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error: 0), si_code:1(BUS_ADRALN)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, I've been using the trunk and not 1.1.  I also just built 
<br>
1.1.1a1r10538 and ran
<br>
it with no bus error.  Though you are running 1.1b5r10421 so we're not 
<br>
running the
<br>
same thing, as of yet.
<br>
<p>I have a cluster of two v440 that have 4 cpus each running Solaris 10.  
<br>
The tests I
<br>
am running are np=2 one process on each node.
<br>
<p>--td
<br>
<p>Eric Thibodeau wrote:
<br>
<p><span class="quotelev1">&gt;Terry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;	I was about to comment on this. could you tell me the specs of your machine. As you will notice in &quot;my thread&quot;, I am running into problems on Sparc SPM systems where the CPU borad's RTC are in a doubtfull state. Are-you running 1.1 on SMP machines. If so, on how many procs and what hardware/OS version is this running off?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;ET
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Le mercredi 28 juin 2006 10:35, Terry D. Dontje a &#233;crit :
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Frank,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Can you set your limit coredumpsize to non-zero rerun the program
</span><br>
<span class="quotelev2">&gt;&gt;and then get the stack via dbx?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;So, I have a similar case of BUS_ADRALN on SPARC systems with an
</span><br>
<span class="quotelev2">&gt;&gt;older version (June 21st) of the trunk.  I've since run using the latest 
</span><br>
<span class="quotelev2">&gt;&gt;trunk and the
</span><br>
<span class="quotelev2">&gt;&gt;bus went away.  I am now going to try this out with v1.1 to see if I get 
</span><br>
<span class="quotelev2">&gt;&gt;similar
</span><br>
<span class="quotelev2">&gt;&gt;results.  Your stack would help me try and determine if this is an 
</span><br>
<span class="quotelev2">&gt;&gt;OpenMPI issue
</span><br>
<span class="quotelev2">&gt;&gt;or possibly some type of platform problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;There is another thread with Eric Thibodeau that I am unsure if it is 
</span><br>
<span class="quotelev2">&gt;&gt;the same issue
</span><br>
<span class="quotelev2">&gt;&gt;as either of our situation. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;--td
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;[...snip...]
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1492.php">Eric Thibodeau: "Re: [OMPI users] Re : OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error: 0), si_code:1(BUS_ADRALN)"</a>
<li><strong>Previous message:</strong> <a href="1490.php">Eric Thibodeau: "Re: [OMPI users] Re : OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error:	0 ), si_code:1(BUS_ADRALN)"</a>
<li><strong>In reply to:</strong> <a href="1490.php">Eric Thibodeau: "Re: [OMPI users] Re : OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error:	0 ), si_code:1(BUS_ADRALN)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1492.php">Eric Thibodeau: "Re: [OMPI users] Re : OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error: 0), si_code:1(BUS_ADRALN)"</a>
<li><strong>Reply:</strong> <a href="1492.php">Eric Thibodeau: "Re: [OMPI users] Re : OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error: 0), si_code:1(BUS_ADRALN)"</a>
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
