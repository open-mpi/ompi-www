<?
$subject_val = "Re: [OMPI users] Checkpointing mpi4py program (Probably bcast issue)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 20 13:48:14 2010" -->
<!-- isoreceived="20100820174814" -->
<!-- sent="Fri, 20 Aug 2010 10:47:23 -0700" -->
<!-- isosent="20100820174723" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing mpi4py program (Probably bcast issue)" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E717D6FC_at_usa-mv-msg.wipro.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="B30C88DAEC303049BF03B142CB080A8003596733FF_at_usa-mv-msg.wipro.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpointing mpi4py program (Probably bcast issue)<br>
<strong>From:</strong> <a href="mailto:ananda.mudar_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Checkpointing%20mpi4py%20program%20(Probably%20bcast%20issue)"><em>ananda.mudar_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-08-20 13:47:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14085.php">Randolph Pullen: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Previous message:</strong> <a href="14083.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Maybe in reply to:</strong> <a href="14076.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program (Probably bcast issue)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh
<br>
&nbsp;
<br>
I have few more observations that I want to share with you.
<br>
&nbsp;
<br>
I modified the earlier C program little bit by making two MPI_Bcast() calls inside while loop for 10 seconds. The issue of MPI_Bcast() failing with ERR_TRUNCATE error message resurfaces when I call checkpoint on this program. Interestingly the two MPI_Bcast() calls are broadcasting different data types ie; first one broadcasts integer variable and the second one broadcasts float variable.
<br>
&nbsp;
<br>
If I make these two MPI_Bcast() calls to broadcast the same data type ie; either broadcast two different integer variables one after another or broadcast two different float variables one after another, the program continues successfully. Checkpoint command is successful all the times and the program resumes after successful checkpoint.
<br>
&nbsp;
<br>
When the MPI_Bcast() failed with ERR_TRUNCATE error message, I have captured the output after setting &quot;--mca crcp_base_verbose 20 --mca orte_debug_verbose 20&quot;.  I have filtered all the messages before and after the error message occurred so that it will not have clutter.
<br>
&nbsp;
<br>
I am attaching both the C program (little modified from the earlier one I shared with you) and the filtered output log file with this thread. Hope you see something with these messages that might be going wrong.
<br>
&nbsp;
<br>
Please let me know if you need any additional information on this issue.
<br>
&nbsp;
<br>
Thanks
<br>
Ananda
<br>
________________________________
<br>
<p>Sent: Wed 8/18/2010 4:43 PM
<br>
To: 'users_at_[hidden]'
<br>
Subject: Re: [OMPI users] Checkpointing mpi4py program (Probably bcast issue)
<br>
<p><p><p>Josh
<br>
<p>&nbsp;
<br>
<p>Thanks for addressing the issue. I will try the new version that has your fix and let you know.
<br>
<p>&nbsp;
<br>
<p>BTW, I have been in touch with mpi4py team also to debug this issue. According to mpi4py team, MPI_Bcast() is implemented with two collective calls: First one with MPI_Bcast() of single integer and the next one with MPI_Bcast() chunk of memory. Since the problem I was running into was during MPI_Bcast() calls, I have mimic'd the mpi4py logic and wrote a program in c. I have attached the same with this mail for your reference.
<br>
<p>&nbsp;
<br>
<p>If you run this program without checkpoint control, program runs for ever because of the infinite loop inside. However if I run this program under checkpoint control (mpirun -am ft-enable-cr), occasionally it fails with the following messages:
<br>
<p>=== Error message START ======================================
<br>
<p>[Host1:7398] *** An error occurred in MPI_Bcast
<br>
<p>[Host1:7398] *** on communicator MPI_COMM_WORLD
<br>
<p>[Host1:7398] *** MPI_ERR_TRUNCATE: message truncated
<br>
<p>[Host1:7398] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
<p>=== Error message END ======================================
<br>
<p>&nbsp;
<br>
<p>While running mpi4py program, I used to get these errors occasionally from cPickle().
<br>
<p>&nbsp;
<br>
<p>I tried this program with OpenMPI 1.4.2, OpenMPI trunk versions and the behavior is same.
<br>
<p>&nbsp;
<br>
<p>I have not hit the hang condition I had seen while checkpointing mpi4py program but I hope this issue may be manifesting hang condition at times!!
<br>
<p>&nbsp;
<br>
<p>Let me know if you need any other information.
<br>
<p>&nbsp;
<br>
<p>Thanks
<br>
<p>Ananda
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>Ananda B Mudar, PMP
<br>
<p>Senior Technical Architect
<br>
<p>Wipro Technologies
<br>
<p>Ph: 972 765 8093
<br>
<p>ananda.mudar_at_[hidden]
<br>
<p>--- Original Message -------------------------------
<br>
<p>Subject: Re: [OMPI users] Checkpointing mpi4py program
<br>
From: Joshua Hursey (jjhursey_at_[hidden])
<br>
Date: 2010-08-18 16:48:17
<br>
<p>I just fixed the --stop bug that you highlighted in r23627. 
<br>
<p>As far as the mpi4py program, I don't really know what to suggest. I don't have a setup to test this locally and am completely unfamiliar with mpi4py. Can you reproduce this with just a C program? 
<br>
<p>-- Josh 
<br>
<p>On Aug 16, 2010, at 12:25 PM, &lt;ananda.mudar_at_[hidden]&gt; &lt;ananda.mudar_at_[hidden]&gt; wrote: 
<br>
<p><span class="quotelev1">&gt; Josh 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have one more update on my observation while analyzing this issue. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to refresh, I am using openmpi-trunk release 23596 with mpi4py-1.2.1 and BLCR 0.8.2. When I checkpoint the python script written using mpi4py, the program doesn't progress after the checkpoint is taken successfully. I tried it with openmpi 1.4.2 and then tried it with the latest trunk version as suggested. I see the similar behavior in both the releases. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have one more interesting observation which I thought may be useful. I tried the &quot;-stop&quot; option of ompi-checkpoint (trunk version) and the mpirun prints the following error messages when I run the command &quot;ompi-checkpoint -stop -v &lt;pid of mpirun&gt;&quot;: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==== Error messages in the window where mpirun command was running START ====================================== 
</span><br>
<span class="quotelev1">&gt; [hpdcnln001:15148] Error: ( app) Passed an invalid handle (0) [5 =&quot;/tmp/openmpi-sessions-amudar_at_hpdcnln001_0/37739/1&quot;] 
</span><br>
<span class="quotelev1">&gt; [hpdcnln001:15148] [[37739,1],2] ORTE_ERROR_LOG: Error in file ../../../../../orte/mca/sstore/central/sstore_central_module.c at line 253 
</span><br>
<span class="quotelev1">&gt; [hpdcnln001:15149] Error: ( app) Passed an invalid handle (0) [5 =&quot;/tmp/openmpi-sessions-amudar_at_hpdcnln001_0/37739/1&quot;] 
</span><br>
<span class="quotelev1">&gt; [hpdcnln001:15149] [[37739,1],3] ORTE_ERROR_LOG: Error in file ../../../../../orte/mca/sstore/central/sstore_central_module.c at line 253 
</span><br>
<span class="quotelev1">&gt; [hpdcnln001:15146] Error: ( app) Passed an invalid handle (0) [5 =&quot;/tmp/openmpi-sessions-amudar_at_hpdcnln001_0/37739/1&quot;] 
</span><br>
<span class="quotelev1">&gt; [hpdcnln001:15146] [[37739,1],0] ORTE_ERROR_LOG: Error in file ../../../../../orte/mca/sstore/central/sstore_central_module.c at line 253 
</span><br>
<span class="quotelev1">&gt; [hpdcnln001:15147] Error: ( app) Passed an invalid handle (0) [5 =&quot;/tmp/openmpi-sessions-amudar_at_hpdcnln001_0/37739/1&quot;] 
</span><br>
<span class="quotelev1">&gt; [hpdcnln001:15147] [[37739,1],1] ORTE_ERROR_LOG: Error in file ../../../../../orte/mca/sstore/central/sstore_central_module.c at line 253 
</span><br>
<span class="quotelev1">&gt; ==== Error messages in the window where mpirun command was running END ====================================== 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please note that the checkpoint image was created at the end of it. However when I run the command &quot;kill -CONT &lt;pid of mpirun&gt;&quot;, it fails to move forward which is same as the original problem I have reported. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me know if you need any additional information. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your time in advance 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Ananda 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ananda B Mudar, PMP 
</span><br>
<span class="quotelev1">&gt; Senior Technical Architect 
</span><br>
<span class="quotelev1">&gt; Wipro Technologies 
</span><br>
<span class="quotelev1">&gt; Ph: 972 765 8093 begin_of_the_skype_highlighting              972 765 8093      end_of_the_skype_highlighting 
</span><br>
<span class="quotelev1">&gt; ananda.mudar_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Ananda Babu Mudar
</span><br>
<span class="quotelev1">&gt; Sent: Sunday, August 15, 2010 11:25 PM 
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Checkpointing mpi4py program 
</span><br>
<span class="quotelev1">&gt; Importance: High 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried running the mpi4py program with the latest trunk version of openmpi. I have compiled openmpi-1.7a1r23596 from trunk and recompiled mpi4py to use this library. Unfortunately I see the same behavior as I have seen with openmpi 1.4.2 ie; checkpoint will be successful but the program doesn't proceed after that. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have attached the stack traces of all the MPI processes that are part of the mpirun. I really appreciate if you can take a look at the stack trace and let m e know the potential problem. I am kind of stuck at this point and need your assistance to move forward. Please let me know if you need any additional information. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your time in advance 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ananda 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message----- 
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Checkpointing mpi4py program 
</span><br>
<span class="quotelev1">&gt; From: Joshua Hursey (jjhursey_at_[hidden]) 
</span><br>
<span class="quotelev1">&gt; Date: 2010-08-13 12:28:31 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nope. I probably won't get to it for a while. I'll let you know if I do. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 13, 2010, at 12:17 PM, &lt;ananda.mudar_at_[hidden]&gt; &lt;ananda.mudar_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; OK, I will do that. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; But did you try this program on a system where the latest trunk is 
</span><br>
<span class="quotelev2">&gt; &gt; installed? Were you successful in checkpointing? 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; - Ananda 
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message----- 
</span><br>
<span class="quotelev2">&gt; &gt; Message: 9 
</span><br>
<span class="quotelev2">&gt; &gt; Date: Fri, 13 Aug 2010 10:21:29 -0400 
</span><br>
<span class="quotelev2">&gt; &gt; From: Joshua Hursey &lt;jjhursey_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] users Digest, Vol 1658, Issue 2 
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID: &lt;7A43615B-A462-4C72-8112-496653D8F0A0_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=us-ascii 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I probably won't have an opportunity to work on reproducing this on the 
</span><br>
<span class="quotelev2">&gt; &gt; 1.4.2. The trunk has a bunch of bug fixes that probably will not be 
</span><br>
<span class="quotelev2">&gt; &gt; backported to the 1.4 series (things have changed too much since that 
</span><br>
<span class="quotelev2">&gt; &gt; branch). So I would suggest trying the 1.5 series. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- Josh 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 13, 2010, at 10:12 AM, &lt;ananda.mudar_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &lt;ananda.mudar_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Josh 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am having problems compiling the sources from the latest trunk. It 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; complains of libgomp.spec missing even though that file exists on my 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; system. I will see if I have to change any other environment variables 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to have a successful compilation. I will keep you posted. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; BTW, were you successful in reproducing the problem on a system with 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OpenMPI 1.4.2? 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ananda 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----Original Message----- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Date: Thu, 12 Aug 2010 09:12:26 -0400 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: Joshua Hursey &lt;jjhursey_at_[hidden]&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI users] Checkpointing mpi4py program 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Message-ID: &lt;1F1445AB-9208-4EF0-AF25-5926BD53C7E1_at_[hidden]&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Content-Type: text/plain; charset=us-ascii 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can you try this with the current trunk (r23587 or later)? 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I just added a number of new features and bug fixes, and I would be 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; interested to see if it fixes the problem. In particular I suspect 
</span><br>
<span class="quotelev2">&gt; &gt; that 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this might be related to the Init/Finalize bounding of the checkpoint 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; region. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- Josh 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Aug 10, 2010, at 2:18 PM, &lt;ananda.mudar_at_[hidden]&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;ananda.mudar_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Josh 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Please find attached is the python program that reproduces the hang 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I described. Initial part of this file describes the prerequisite 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; modules and the steps to reproduce the problem. Please let me know if 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; you have any questions in reproducing the hang. 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Please note that, if I add the following lines at the end of the 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; program 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (in case sleep_time is True), the problem disappears ie; program 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; resumes 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; successfully after successful completion of checkpoint. 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; # Add following lines at the end for sleep_time is True 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; else: 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; time.sleep(0.1) 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; # End of added lines 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks a lot for your time in looking into this issue. 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Regards 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ananda 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ananda B Mudar, PMP 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Senior Technical Architect 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Wipro Technologies 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ph: 972 765 8093 972 765 8093 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ananda.mudar_at_[hidden] 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -----Original Message----- 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Date: Mon, 9 Aug 2010 16:37:58 -0400 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; From: Joshua Hursey &lt;jjhursey_at_[hidden]&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subject: Re: [OMPI users] Checkpointing mpi4py program 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Message-ID: &lt;270BD450-743A-4662-9568-1FEDFCC6F9C6_at_[hidden]&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Content-Type: text/plain; charset=windows-1252 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have not tried to checkpoint an mpi4py application, so I cannot say 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; for sure if it works or not. You might be hitting something with the 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Python runtime interacting in an odd way with either Open MPI or 
</span><br>
<span class="quotelev2">&gt; &gt; BLCR. 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Can you attach a debugger and get a backtrace on a stuck checkpoint? 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; That might show us where things are held up. 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -- Josh 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Aug 9, 2010, at 4:04 PM, &lt;ananda.mudar_at_[hidden]&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &lt;ananda.mudar_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I have integrated mpi4py with openmpi 1.4.2 that was built with BLCR 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0.8.2. When I run ompi-checkpoint on the program written using 
</span><br>
<span class="quotelev2">&gt; &gt; mpi4py, 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; see that program doesn?t resume sometimes after successful checkpoint 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; creation. This doesn?t occur always meaning the program resumes after 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; successful checkpoint creation most of the time and completes 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; successfully. Has anyone tested the checkpoint/restart functionality 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; with mpi4py programs? Are there any best practices that I should keep 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mind while checkpointing mpi4py programs? 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thanks for your time 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; - Ananda 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Please do not print this email unless it is absolutely necessary. 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The information contained in this electronic message and any 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; attachments to this message are intended for the exclusive use of the 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; addressee(s) and may contain proprietary, confidential or privileged 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; information. If you are not the intended recipient, you should not 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; disseminate, distribute or copy this e-mail. Please notify the sender 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; immediately and destroy all copies of this message and any 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; attachments. 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; WARNING: Computer viruses can be transmitted via email. The 
</span><br>
<span class="quotelev2">&gt; &gt; recipient 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; should check this email and any attachments for the presence of 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; viruses. 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The company accepts no liability for any damage caused by any virus 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; transmitted by this email. 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; www.wipro.com 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________ 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Please do not print this email unless it is absolutely necessary. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The information contained in this electronic message and any 
</span><br>
<span class="quotelev2">&gt; &gt; attachments to this message are intended for the exclusive use of the 
</span><br>
<span class="quotelev2">&gt; &gt; addressee(s) and may contain proprietary, confidential or privileged 
</span><br>
<span class="quotelev2">&gt; &gt; information. If you are not the intended recipient, you should not 
</span><br>
<span class="quotelev2">&gt; &gt; disseminate, distribute or copy this e-mail. Please notify the sender 
</span><br>
<span class="quotelev2">&gt; &gt; immediately and destroy all copies of this message and any attachments. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; WARNING: Computer viruses can be transmitted via email. The recipient 
</span><br>
<span class="quotelev2">&gt; &gt; should check this email and any attachments for the presence of viruses. 
</span><br>
<span class="quotelev2">&gt; &gt; The company accepts no liability for any damage caused by any virus 
</span><br>
<span class="quotelev2">&gt; &gt; transmitted by this email. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; www.wipro.com 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________ 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden] 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Please do not print this email unless it is absolutely necessary. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; www.wipro.com 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________ 
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list 
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please do not print this email unless it is absolutely necessary. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; www.wipro.com 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;ATT00001..txt&gt; 
</span><br>
<p><p>Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com
<br>
<p><p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14084/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14084/bcast-checkpoint-bug-v2.c">bcast-checkpoint-bug-v2.c</a>
</ul>
<!-- attachment="bcast-checkpoint-bug-v2.c" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14084/debug-msgs-with-orte-debug-crcp-base-verbose-20.log">debug-msgs-with-orte-debug-crcp-base-verbose-20.log</a>
</ul>
<!-- attachment="debug-msgs-with-orte-debug-crcp-base-verbose-20.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14085.php">Randolph Pullen: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<li><strong>Previous message:</strong> <a href="14083.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Maybe in reply to:</strong> <a href="14076.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program (Probably bcast issue)"</a>
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
