<?
$subject_val = "Re: [OMPI devel] RFC: Resilient ORTE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 23 16:39:29 2011" -->
<!-- isoreceived="20110623203929" -->
<!-- sent="Thu, 23 Jun 2011 16:39:23 -0400" -->
<!-- isosent="20110623203923" -->
<!-- name="Wesley Bland" -->
<!-- email="wbland_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Resilient ORTE" -->
<!-- id="54DD045A29EE4852BC172B93F63ECB42_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="598AACAA-C962-41A1-BF00-ACCB735D40A5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Resilient ORTE<br>
<strong>From:</strong> Wesley Bland (<em>wbland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-23 16:39:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9410.php">Ken Lloyd: "[OMPI devel] Resilience 2011"</a>
<li><strong>Previous message:</strong> <a href="9408.php">Ralf Wildenhues: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Maybe in reply to:</strong> <a href="9299.php">George Bosilca: "[OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Committed in r24815.
<br>
<p>On Thursday, June 23, 2011 at 4:19 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 23, 2011, at 2:14 PM, Wesley Bland wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Maybe before the ORTED saw the signal, it detected a communication failure and reacted to that. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Quite possible. However, remember that procs local to mpirun (in most environments) directly receive the ctrl-c instead of the orted getting a cmd from mpirun to kill them. Thus, they &quot;abort_by_signal&quot; rather than &quot;terminate by cmd&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've had this problem a lot on my Mac, in particular. The ctrl-c is seen directly by the procs, so the abort code path is totally different.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Either way, I haven't had any trouble being able to ctrl-c out of my applications. I'll go ahead and comment the code out of the HNP and if we want to put it back later, it will be there.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Thursday, June 23, 2011 at 4:05 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Jun 23, 2011, at 1:59 PM, Wesley Bland wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I don't see any code in the orted errmgr that deals with the state ORTE_PROC_STATE_ABORTED_BY_SIG however the HNP does deal with that state.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Like I said, the orted just passes it along - as it does with all failure states.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The discussion Josh and I were having was whether or not to remove the code dealing with ORTE_PROC_STATE_ABORTED_BY_SIG from the HNP so that the processes running on that node can also be aborted by a kill signal and allow the rest of the job to run.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I don't see any reason to treat that state any differently than all the other failure states. However, be careful - if someone -wants- to kill the job, then we need to ensure they can do so - i.e., if mpirun sigterms/sigkills a proc, we don't want it auto-recovering or we'll never ctrl-c out of mpirun.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In my branch, I have a special code for procs terminated deliberately by mpirun - pretty sure I put that code back into the trunk, but I don't believe the trunk errmgr modules know what to do with it (TERMINATED_BY_CMD).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; You might need to add some code for that case.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Thursday, June 23, 2011 at 3:54 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I'm not entirely sure what that means. The orteds certainly detect and mark that a local proc aborted by signal - the orted errmgr just sends a note back to the HNP notifying it of the situation rather than responding to it directly.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I don't believe the HNP does anything different when responding to a local proc's abort-by-signal vs getting a message from an orted, does it?
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; What is it you want the HNP/orted to do? I haven't dug that deeply into your branch
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; On Jun 23, 2011, at 1:47 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; I would mention this to Ralph to be sure (CC'ed). I bet that you can
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; push this change in with the rest so that mpirun hosting a failed
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; process works.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Ralph, what do you think?
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; -- Josh
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; On Thu, Jun 23, 2011 at 3:29 PM, Wesley Bland &lt;wbland_at_[hidden] (mailto:wbland_at_[hidden])&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; There is still one problem that you'll notice when you run your tests. The
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; HNP errmgr catches &quot;aborted by signal&quot; while the orteds don't. I wasn't sure
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; if this had a purpose that I wasn't aware of so I left that in there. It's a
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; simple matter of removing the code to make the behavior the same on the HNP
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; as the orteds, but I don't want to remove something like that if it's going
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; to cause problems for someone else.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; On Thursday, June 23, 2011 at 10:16 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; So I finally got a chance to test the branch this morning. I cannot
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; get it to work. Maybe I'm doing some wrong, missing some MCA
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; parameter?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; -------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; [jjhursey_at_smoky-login1 resilient-orte] hg summary
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; parent: 2:c550cf6ed6a2 tip
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; Newest version. Synced with trunk r24785.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; branch: default
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; commit: 1 modified, 8097 unknown
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; update: (current)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; -------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; (the 1 modified was the test program attached)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; Attached is a modified version of the orte_abort.c program found in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; ${top}/orte/test/system. This program is ORTE only, and registers the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; errmgr callback to trigger correct termination. You will need to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; configure Open MPI with '--with-devel-headers' to build this. But then
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; you can compile with:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; ortecc -g orte_abort.c -o orte_abort
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; These are the configure options that I used:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; --with-devel-headers --enable-binaries --disable-io-romio
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; --enable-contrib-no-build=vt --enable-debug CC=gcc CXX=g++
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; F77=gfortran FC=gfortran
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; If the HNP has no processes on it - I get a hang:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; -------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; mpirun -np 4 --nolocal orte_abort
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; orte_abort: Name [[60121,1],0,0] Host: smoky13 Pid 3688 -- Initalized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; orte_abort: Name [[60121,1],1,0] Host: smoky13 Pid 3689 -- Initalized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; orte_abort: Name [[60121,1],2,0] Host: smoky13 Pid 3690 -- Initalized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; orte_abort: Name [[60121,1],3,0] Host: smoky13 Pid 3691 -- Initalized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; orte_abort: Name [[60121,1],3,0] Host: smoky13 Pid 3691 -- Calling Abort
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; mpirun: killing job...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; [smoky14:04002] [[60121,0],0,0] ORTE_ERROR_LOG: Data unpack would read
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; past end of buffer in file errmgr_hnp.c at line 824
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; [smoky14:04002] [[60121,0],0,0] ORTE_ERROR_LOG: Data unpack would read
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; past end of buffer in file orted/orted_comm.c at line 1341
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; mpirun: abort is already in progress...hit ctrl-c again to forcibly
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; terminate
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; [jjhursey_at_smoky14 system] echo $?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; -------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; If the HNP has processes on it, but not the one that aborted - I get a hang:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; -------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; [jjhursey_at_smoky14 system] mpirun -np 4 --npernode 2 orte_abort
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; orte_abort: Name [[60302,1],0,0] Host: smoky14 Pid 3830 -- Initalized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; orte_abort: Name [[60302,1],1,0] Host: smoky14 Pid 3831 -- Initalized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; orte_abort: Name [[60302,1],2,0] Host: smoky13 Pid 3484 -- Initalized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; orte_abort: Name [[60302,1],3,0] Host: smoky13 Pid 3485 -- Initalized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; orte_abort: Name [[60302,1],3,0] Host: smoky13 Pid 3485 -- Calling Abort
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; mpirun: killing job...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; [smoky14:03829] [[60302,0],0,0]-[[60302,1],1,0] mca_oob_tcp_msg_recv:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; [smoky14:03829] [[60302,0],0,0]-[[60302,1],0,0] mca_oob_tcp_msg_recv:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; [smoky14:03829] [[60302,0],0,0] ORTE_ERROR_LOG: Data unpack would read
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; past end of buffer in file errmgr_hnp.c at line 824
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; [smoky14:03829] [[60302,0],0,0] ORTE_ERROR_LOG: Data unpack would read
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; past end of buffer in file orted/orted_comm.c at line 1341
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; mpirun: abort is already in progress...hit ctrl-c again to forcibly
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; terminate
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; [jjhursey_at_smoky14 system] echo $?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; --------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; If the HNP has processes on it, and it is the one that aborted - I get
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; immediate return, but no callback:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; --------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; [jjhursey_at_smoky14 system] mpirun -np 4 --npernode 4 orte_abort
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; orte_abort: Name [[60292,1],0,0] Host: smoky14 Pid 3840 -- Initalized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; orte_abort: Name [[60292,1],1,0] Host: smoky14 Pid 3841 -- Initalized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; orte_abort: Name [[60292,1],2,0] Host: smoky14 Pid 3842 -- Initalized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; orte_abort: Name [[60292,1],3,0] Host: smoky14 Pid 3843 -- Initalized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; orte_abort: Name [[60292,1],3,0] Host: smoky14 Pid 3843 -- Calling Abort
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; [jjhursey_at_smoky14 system] echo $?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 3
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; --------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; Any ideas on what I might be doing wrong?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; I tried with both calling 'orte_errmgr.abort(ORTE_PROC_MY_NAME-&gt;vpid,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; NULL);' and 'kill(getpid(), SIGKILL);' and got the same behavior.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; -- Josh
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; On Thu, Jun 23, 2011 at 9:58 AM, Wesley Bland &lt;wbland_at_[hidden] (mailto:wbland_at_[hidden])&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; Last reminder (I hope). RFC goes in a COB today.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; Wesley
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; devel_at_[hidden] (mailto:devel_at_[hidden])
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; Joshua Hursey
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; devel_at_[hidden] (mailto:devel_at_[hidden])
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; Attachments:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt; &gt; - orte_abort.c
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9409/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9410.php">Ken Lloyd: "[OMPI devel] Resilience 2011"</a>
<li><strong>Previous message:</strong> <a href="9408.php">Ralf Wildenhues: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Maybe in reply to:</strong> <a href="9299.php">George Bosilca: "[OMPI devel] RFC: Resilient ORTE"</a>
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
