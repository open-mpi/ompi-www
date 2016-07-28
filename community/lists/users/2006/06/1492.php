<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 28 13:13:49 2006" -->
<!-- isoreceived="20060628171349" -->
<!-- sent="Wed, 28 Jun 2006 13:13:36 -0400" -->
<!-- isosent="20060628171336" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Re : OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error: 0), si_code:1(BUS_ADRALN)" -->
<!-- id="200606281313.36142.kyron_at_neuralbs.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="44A2B618.5040200_at_sun.com" -->
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
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-28 13:13:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1493.php">Patrick Jessee: "[OMPI users] error messages for btl components that aren't loaded"</a>
<li><strong>Previous message:</strong> <a href="1491.php">Terry D. Dontje: "Re: [OMPI users] Re : OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error: 0), si_code:1(BUS_ADRALN)"</a>
<li><strong>In reply to:</strong> <a href="1491.php">Terry D. Dontje: "Re: [OMPI users] Re : OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error: 0), si_code:1(BUS_ADRALN)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am actually running the released 1.1. I can send you my code, if you want, and you could try running it off a single node with -np 4 or 5 (oversubscribing) and see if you get a BUS_ADRALN error off one node. The only restriction to compiling the code is that X libs be available (display is not required for the execution though it's more fun :P)
<br>
<p>Eric
<br>
<p>Le mercredi 28 juin 2006 13:02, Terry D. Dontje a &#233;crit&#160;:
<br>
<span class="quotelev1">&gt; Well, I've been using the trunk and not 1.1.  I also just built 
</span><br>
<span class="quotelev1">&gt; 1.1.1a1r10538 and ran
</span><br>
<span class="quotelev1">&gt; it with no bus error.  Though you are running 1.1b5r10421 so we're not 
</span><br>
<span class="quotelev1">&gt; running the
</span><br>
<span class="quotelev1">&gt; same thing, as of yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a cluster of two v440 that have 4 cpus each running Solaris 10.  
</span><br>
<span class="quotelev1">&gt; The tests I
</span><br>
<span class="quotelev1">&gt; am running are np=2 one process on each node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric Thibodeau wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Terry,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;	I was about to comment on this. could you tell me the specs of your machine. As you will notice in &quot;my thread&quot;, I am running into problems on Sparc SPM systems where the CPU borad's RTC are in a doubtfull state. Are-you running 1.1 on SMP machines. If so, on how many procs and what hardware/OS version is this running off?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;ET
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Le mercredi 28 juin 2006 10:35, Terry D. Dontje a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Frank,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Can you set your limit coredumpsize to non-zero rerun the program
</span><br>
<span class="quotelev3">&gt; &gt;&gt;and then get the stack via dbx?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;So, I have a similar case of BUS_ADRALN on SPARC systems with an
</span><br>
<span class="quotelev3">&gt; &gt;&gt;older version (June 21st) of the trunk.  I've since run using the latest 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;trunk and the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;bus went away.  I am now going to try this out with v1.1 to see if I get 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;similar
</span><br>
<span class="quotelev3">&gt; &gt;&gt;results.  Your stack would help me try and determine if this is an 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;OpenMPI issue
</span><br>
<span class="quotelev3">&gt; &gt;&gt;or possibly some type of platform problem.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;There is another thread with Eric Thibodeau that I am unsure if it is 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;the same issue
</span><br>
<span class="quotelev3">&gt; &gt;&gt;as either of our situation. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;--td
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;[...snip...]
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Eric Thibodeau
Neural Bucket Solutions Inc.
T. (514) 736-1436
C. (514) 710-0517
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1493.php">Patrick Jessee: "[OMPI users] error messages for btl components that aren't loaded"</a>
<li><strong>Previous message:</strong> <a href="1491.php">Terry D. Dontje: "Re: [OMPI users] Re : OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error: 0), si_code:1(BUS_ADRALN)"</a>
<li><strong>In reply to:</strong> <a href="1491.php">Terry D. Dontje: "Re: [OMPI users] Re : OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error: 0), si_code:1(BUS_ADRALN)"</a>
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
