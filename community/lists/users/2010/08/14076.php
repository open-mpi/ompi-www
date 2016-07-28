<?
$subject_val = "Re: [OMPI users] Checkpointing mpi4py program (Probably bcast issue)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 18 17:43:37 2010" -->
<!-- isoreceived="20100818214337" -->
<!-- sent="Wed, 18 Aug 2010 14:43:33 -0700" -->
<!-- isosent="20100818214333" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing mpi4py program (Probably bcast issue)" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E708091DC4_at_usa-mv-msg.wipro.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Checkpointing mpi4py program (Probably bcast issue)" -->
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
<strong>Date:</strong> 2010-08-18 17:43:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14077.php">Joshua Hursey: "[OMPI users] Checkpoint/Restart Process Migration and Automatic Recovery Support"</a>
<li><strong>Previous message:</strong> <a href="14075.php">Jeff Squyres: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14084.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program (Probably bcast issue)"</a>
<li><strong>Maybe reply:</strong> <a href="14084.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program (Probably bcast issue)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh
<br>
<p>&nbsp;
<br>
<p>Thanks for addressing the issue. I will try the new version that has
<br>
your fix and let you know.
<br>
<p>&nbsp;
<br>
<p>BTW, I have been in touch with mpi4py team also to debug this issue.
<br>
According to mpi4py team, MPI_Bcast() is implemented with two collective
<br>
calls: First one with MPI_Bcast() of single integer and the next one
<br>
with MPI_Bcast() chunk of memory. Since the problem I was running into
<br>
was during MPI_Bcast() calls, I have mimic'd the mpi4py logic and wrote
<br>
a program in c. I have attached the same with this mail for your
<br>
reference.
<br>
<p>&nbsp;
<br>
<p>If you run this program without checkpoint control, program runs for
<br>
ever because of the infinite loop inside. However if I run this program
<br>
under checkpoint control (mpirun -am ft-enable-cr), occasionally it
<br>
fails with the following messages:
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
<p>While running mpi4py program, I used to get these errors occasionally
<br>
from cPickle().
<br>
<p>&nbsp;
<br>
<p>I tried this program with OpenMPI 1.4.2, OpenMPI trunk versions and the
<br>
behavior is same.
<br>
<p>&nbsp;
<br>
<p>I have not hit the hang condition I had seen while checkpointing mpi4py
<br>
program but I hope this issue may be manifesting hang condition at
<br>
times!!
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
<p>As far as the mpi4py program, I don't really know what to suggest. I
<br>
don't have a setup to test this locally and am completely unfamiliar
<br>
with mpi4py. Can you reproduce this with just a C program? 
<br>
<p>-- Josh 
<br>
<p>On Aug 16, 2010, at 12:25 PM, &lt;ananda.mudar_at_[hidden]&gt;
<br>
&lt;ananda.mudar_at_[hidden]&gt; wrote: 
<br>
<p><span class="quotelev1">&gt; Josh 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have one more update on my observation while analyzing this issue. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to refresh, I am using openmpi-trunk release 23596 with
</span><br>
mpi4py-1.2.1 and BLCR 0.8.2. When I checkpoint the python script written
<br>
using mpi4py, the program doesn't progress after the checkpoint is taken
<br>
successfully. I tried it with openmpi 1.4.2 and then tried it with the
<br>
latest trunk version as suggested. I see the similar behavior in both
<br>
the releases. 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have one more interesting observation which I thought may be useful.
</span><br>
I tried the &quot;-stop&quot; option of ompi-checkpoint (trunk version) and the
<br>
mpirun prints the following error messages when I run the command
<br>
&quot;ompi-checkpoint -stop -v &lt;pid of mpirun&gt;&quot;: 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==== Error messages in the window where mpirun command was running
</span><br>
START ====================================== 
<br>
<span class="quotelev1">&gt; [hpdcnln001:15148] Error: ( app) Passed an invalid handle (0) [5
</span><br>
=&quot;/tmp/openmpi-sessions-amudar_at_hpdcnln001_0/37739/1&quot;] 
<br>
<span class="quotelev1">&gt; [hpdcnln001:15148] [[37739,1],2] ORTE_ERROR_LOG: Error in file
</span><br>
../../../../../orte/mca/sstore/central/sstore_central_module.c at line
<br>
253 
<br>
<span class="quotelev1">&gt; [hpdcnln001:15149] Error: ( app) Passed an invalid handle (0) [5
</span><br>
=&quot;/tmp/openmpi-sessions-amudar_at_hpdcnln001_0/37739/1&quot;] 
<br>
<span class="quotelev1">&gt; [hpdcnln001:15149] [[37739,1],3] ORTE_ERROR_LOG: Error in file
</span><br>
../../../../../orte/mca/sstore/central/sstore_central_module.c at line
<br>
253 
<br>
<span class="quotelev1">&gt; [hpdcnln001:15146] Error: ( app) Passed an invalid handle (0) [5
</span><br>
=&quot;/tmp/openmpi-sessions-amudar_at_hpdcnln001_0/37739/1&quot;] 
<br>
<span class="quotelev1">&gt; [hpdcnln001:15146] [[37739,1],0] ORTE_ERROR_LOG: Error in file
</span><br>
../../../../../orte/mca/sstore/central/sstore_central_module.c at line
<br>
253 
<br>
<span class="quotelev1">&gt; [hpdcnln001:15147] Error: ( app) Passed an invalid handle (0) [5
</span><br>
=&quot;/tmp/openmpi-sessions-amudar_at_hpdcnln001_0/37739/1&quot;] 
<br>
<span class="quotelev1">&gt; [hpdcnln001:15147] [[37739,1],1] ORTE_ERROR_LOG: Error in file
</span><br>
../../../../../orte/mca/sstore/central/sstore_central_module.c at line
<br>
253 
<br>
<span class="quotelev1">&gt; ==== Error messages in the window where mpirun command was running END
</span><br>
====================================== 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please note that the checkpoint image was created at the end of it.
</span><br>
However when I run the command &quot;kill -CONT &lt;pid of mpirun&gt;&quot;, it fails to
<br>
move forward which is same as the original problem I have reported. 
<br>
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
<span class="quotelev1">&gt; Ph: 972 765 8093 begin_of_the_skype_highlighting              972 765
</span><br>
8093      end_of_the_skype_highlighting 
<br>
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
<span class="quotelev1">&gt; I tried running the mpi4py program with the latest trunk version of
</span><br>
openmpi. I have compiled openmpi-1.7a1r23596 from trunk and recompiled
<br>
mpi4py to use this library. Unfortunately I see the same behavior as I
<br>
have seen with openmpi 1.4.2 ie; checkpoint will be successful but the
<br>
program doesn't proceed after that. 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have attached the stack traces of all the MPI processes that are
</span><br>
part of the mpirun. I really appreciate if you can take a look at the
<br>
stack trace and let m e know the potential problem. I am kind of stuck
<br>
at this point and need your assistance to move forward. Please let me
<br>
know if you need any additional information. 
<br>
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
<span class="quotelev1">&gt; Nope. I probably won't get to it for a while. I'll let you know if I
</span><br>
do. 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 13, 2010, at 12:17 PM, &lt;ananda.mudar_at_[hidden]&gt;
</span><br>
&lt;ananda.mudar_at_[hidden]&gt; wrote: 
<br>
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
<span class="quotelev2">&gt; &gt; I probably won't have an opportunity to work on reproducing this on
</span><br>
the 
<br>
<span class="quotelev2">&gt; &gt; 1.4.2. The trunk has a bunch of bug fixes that probably will not be 
</span><br>
<span class="quotelev2">&gt; &gt; backported to the 1.4 series (things have changed too much since
</span><br>
that 
<br>
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
<span class="quotelev3">&gt; &gt;&gt; I am having problems compiling the sources from the latest trunk.
</span><br>
It 
<br>
<span class="quotelev3">&gt; &gt;&gt; complains of libgomp.spec missing even though that file exists on
</span><br>
my 
<br>
<span class="quotelev3">&gt; &gt;&gt; system. I will see if I have to change any other environment
</span><br>
variables 
<br>
<span class="quotelev3">&gt; &gt;&gt; to have a successful compilation. I will keep you posted. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; BTW, were you successful in reproducing the problem on a system
</span><br>
with 
<br>
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
<p><span class="quotelev3">&gt; &gt;&gt; interested to see if it fixes the problem. In particular I suspect 
</span><br>
<span class="quotelev2">&gt; &gt; that 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this might be related to the Init/Finalize bounding of the
</span><br>
checkpoint 
<br>
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
<span class="quotelev4">&gt; &gt;&gt;&gt; Please find attached is the python program that reproduces the
</span><br>
hang 
<br>
<span class="quotelev3">&gt; &gt;&gt; that 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I described. Initial part of this file describes the prerequisite 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; modules and the steps to reproduce the problem. Please let me know
</span><br>
if 
<br>
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
<span class="quotelev4">&gt; &gt;&gt;&gt; I have not tried to checkpoint an mpi4py application, so I cannot
</span><br>
say 
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; for sure if it works or not. You might be hitting something with
</span><br>
the 
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Python runtime interacting in an odd way with either Open MPI or 
</span><br>
<span class="quotelev2">&gt; &gt; BLCR. 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Can you attach a debugger and get a backtrace on a stuck
</span><br>
checkpoint? 
<br>
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
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I have integrated mpi4py with openmpi 1.4.2 that was built with
</span><br>
BLCR 
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 0.8.2. When I run ompi-checkpoint on the program written using 
</span><br>
<span class="quotelev2">&gt; &gt; mpi4py, 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; see that program doesn?t resume sometimes after successful
</span><br>
checkpoint 
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; creation. This doesn?t occur always meaning the program resumes
</span><br>
after 
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; successful checkpoint creation most of the time and completes 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; successfully. Has anyone tested the checkpoint/restart
</span><br>
functionality 
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; with mpi4py programs? Are there any best practices that I should
</span><br>
keep 
<br>
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
<p><span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The information contained in this electronic message and any 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; attachments to this message are intended for the exclusive use of
</span><br>
the 
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; addressee(s) and may contain proprietary, confidential or
</span><br>
privileged 
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; information. If you are not the intended recipient, you should not
</span><br>
<p><span class="quotelev4">&gt; &gt;&gt;&gt; disseminate, distribute or copy this e-mail. Please notify the
</span><br>
sender 
<br>
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
<span class="quotelev4">&gt; &gt;&gt;&gt; The company accepts no liability for any damage caused by any
</span><br>
virus 
<br>
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
<span class="quotelev2">&gt; &gt; attachments to this message are intended for the exclusive use of
</span><br>
the 
<br>
<span class="quotelev2">&gt; &gt; addressee(s) and may contain proprietary, confidential or privileged
</span><br>
<p><span class="quotelev2">&gt; &gt; information. If you are not the intended recipient, you should not 
</span><br>
<span class="quotelev2">&gt; &gt; disseminate, distribute or copy this e-mail. Please notify the
</span><br>
sender 
<br>
<span class="quotelev2">&gt; &gt; immediately and destroy all copies of this message and any
</span><br>
attachments. 
<br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; WARNING: Computer viruses can be transmitted via email. The
</span><br>
recipient 
<br>
<span class="quotelev2">&gt; &gt; should check this email and any attachments for the presence of
</span><br>
viruses. 
<br>
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
<span class="quotelev2">&gt; &gt; The information contained in this electronic message and any
</span><br>
attachments to this message are intended for the exclusive use of the
<br>
addressee(s) and may contain proprietary, confidential or privileged
<br>
information. If you are not the intended recipient, you should not
<br>
disseminate, distribute or copy this e-mail. Please notify the sender
<br>
immediately and destroy all copies of this message and any attachments. 
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; WARNING: Computer viruses can be transmitted via email. The
</span><br>
recipient should check this email and any attachments for the presence
<br>
of viruses. The company accepts no liability for any damage caused by
<br>
any virus transmitted by this email. 
<br>
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
<span class="quotelev1">&gt; The information contained in this electronic message and any
</span><br>
attachments to this message are intended for the exclusive use of the
<br>
addressee(s) and may contain proprietary, confidential or privileged
<br>
information. If you are not the intended recipient, you should not
<br>
disseminate, distribute or copy this e-mail. Please notify the sender
<br>
immediately and destroy all copies of this message and any attachments. 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The recipient
</span><br>
should check this email and any attachments for the presence of viruses.
<br>
The company accepts no liability for any damage caused by any virus
<br>
transmitted by this email. 
<br>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14076/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14076/bcast-checkpoint-bug.c">bcast-checkpoint-bug.c</a>
</ul>
<!-- attachment="bcast-checkpoint-bug.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14077.php">Joshua Hursey: "[OMPI users] Checkpoint/Restart Process Migration and Automatic Recovery Support"</a>
<li><strong>Previous message:</strong> <a href="14075.php">Jeff Squyres: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14084.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program (Probably bcast issue)"</a>
<li><strong>Maybe reply:</strong> <a href="14084.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program (Probably bcast issue)"</a>
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
