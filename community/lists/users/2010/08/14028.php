<?
$subject_val = "Re: [OMPI users] Checkpointing mpi4py program";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 16 00:26:28 2010" -->
<!-- isoreceived="20100816042628" -->
<!-- sent="Sun, 15 Aug 2010 21:24:56 -0700" -->
<!-- isosent="20100816042456" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing mpi4py program" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E70801DE34_at_usa-mv-msg.wipro.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Checkpointing mpi4py program" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpointing mpi4py program<br>
<strong>From:</strong> <a href="mailto:ananda.mudar_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Checkpointing%20mpi4py%20program"><em>ananda.mudar_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-08-16 00:24:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14029.php">sunita_at_[hidden]: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Previous message:</strong> <a href="14027.php">Ralph Castain: "Re: [OMPI users] mpirun hangs during runtime on Intel quad-core"</a>
<li><strong>Maybe in reply to:</strong> <a href="13945.php">ananda.mudar_at_[hidden]: "[OMPI users] Checkpointing mpi4py program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14041.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh
<br>
<p>I tried running the mpi4py program with the latest trunk version of
<br>
openmpi. I have compiled openmpi-1.7a1r23596 from trunk and recompiled
<br>
mpi4py to use this library. Unfortunately I see the same behavior as I
<br>
have seen with openmpi 1.4.2 ie; checkpoint will be successful but the
<br>
program doesn't proceed after that.
<br>
<p>I have attached the stack traces of all the MPI processes that are part
<br>
of the mpirun. I really appreciate if you can take a look at the stack
<br>
trace and let m e know the potential problem. I am kind of stuck at this
<br>
point and need your assistance to move forward. Please let me know if
<br>
you need any additional information.
<br>
<p>Thanks for your time in advance
<br>
<p>Thanks
<br>
<p>Ananda
<br>
<p>-----Original Message----- 
<br>
Subject: Re: [OMPI users] Checkpointing mpi4py program
<br>
From: Joshua Hursey (jjhursey_at_[hidden])
<br>
Date: 2010-08-13 12:28:31
<br>
<p>Nope. I probably won't get to it for a while. I'll let you know if I do.
<br>
<p><p>On Aug 13, 2010, at 12:17 PM, &lt;ananda.mudar_at_[hidden]&gt;
<br>
&lt;ananda.mudar_at_[hidden]&gt; wrote: 
<br>
<p><span class="quotelev1">&gt; OK, I will do that. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But did you try this program on a system where the latest trunk is 
</span><br>
<span class="quotelev1">&gt; installed? Were you successful in checkpointing? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Ananda 
</span><br>
<span class="quotelev1">&gt; -----Original Message----- 
</span><br>
<span class="quotelev1">&gt; Message: 9 
</span><br>
<span class="quotelev1">&gt; Date: Fri, 13 Aug 2010 10:21:29 -0400 
</span><br>
<span class="quotelev1">&gt; From: Joshua Hursey &lt;jjhursey_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] users Digest, Vol 1658, Issue 2 
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;7A43615B-A462-4C72-8112-496653D8F0A0_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I probably won't have an opportunity to work on reproducing this on
</span><br>
the 
<br>
<span class="quotelev1">&gt; 1.4.2. The trunk has a bunch of bug fixes that probably will not be 
</span><br>
<span class="quotelev1">&gt; backported to the 1.4 series (things have changed too much since that 
</span><br>
<span class="quotelev1">&gt; branch). So I would suggest trying the 1.5 series. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 13, 2010, at 10:12 AM, &lt;ananda.mudar_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;ananda.mudar_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Josh 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am having problems compiling the sources from the latest trunk. It 
</span><br>
<span class="quotelev2">&gt;&gt; complains of libgomp.spec missing even though that file exists on my 
</span><br>
<span class="quotelev2">&gt;&gt; system. I will see if I have to change any other environment
</span><br>
variables 
<br>
<span class="quotelev2">&gt;&gt; to have a successful compilation. I will keep you posted. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; BTW, were you successful in reproducing the problem on a system with 
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.4.2? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks 
</span><br>
<span class="quotelev2">&gt;&gt; Ananda 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message----- 
</span><br>
<span class="quotelev2">&gt;&gt; Date: Thu, 12 Aug 2010 09:12:26 -0400 
</span><br>
<span class="quotelev2">&gt;&gt; From: Joshua Hursey &lt;jjhursey_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Checkpointing mpi4py program 
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;1F1445AB-9208-4EF0-AF25-5926BD53C7E1_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=us-ascii 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you try this with the current trunk (r23587 or later)? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just added a number of new features and bug fixes, and I would be 
</span><br>
<span class="quotelev2">&gt;&gt; interested to see if it fixes the problem. In particular I suspect 
</span><br>
<span class="quotelev1">&gt; that 
</span><br>
<span class="quotelev2">&gt;&gt; this might be related to the Init/Finalize bounding of the checkpoint
</span><br>
<p><span class="quotelev2">&gt;&gt; region. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 10, 2010, at 2:18 PM, &lt;ananda.mudar_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ananda.mudar_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please find attached is the python program that reproduces the hang 
</span><br>
<span class="quotelev2">&gt;&gt; that 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I described. Initial part of this file describes the prerequisite 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; modules and the steps to reproduce the problem. Please let me know
</span><br>
if 
<br>
<span class="quotelev3">&gt;&gt;&gt; you have any questions in reproducing the hang. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please note that, if I add the following lines at the end of the 
</span><br>
<span class="quotelev2">&gt;&gt; program 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (in case sleep_time is True), the problem disappears ie; program 
</span><br>
<span class="quotelev2">&gt;&gt; resumes 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; successfully after successful completion of checkpoint. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Add following lines at the end for sleep_time is True 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; else: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time.sleep(0.1) 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # End of added lines 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks a lot for your time in looking into this issue. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ananda 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ananda B Mudar, PMP 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Senior Technical Architect 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Wipro Technologies 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ph: 972 765 8093 begin_of_the_skype_highlighting              972
</span><br>
765 8093      end_of_the_skype_highlighting 
<br>
<span class="quotelev3">&gt;&gt;&gt; ananda.mudar_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message----- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Mon, 9 Aug 2010 16:37:58 -0400 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Joshua Hursey &lt;jjhursey_at_[hidden]&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Checkpointing mpi4py program 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID: &lt;270BD450-743A-4662-9568-1FEDFCC6F9C6_at_[hidden]&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=windows-1252 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have not tried to checkpoint an mpi4py application, so I cannot
</span><br>
say 
<br>
<span class="quotelev3">&gt;&gt;&gt; for sure if it works or not. You might be hitting something with the
</span><br>
<p><span class="quotelev3">&gt;&gt;&gt; Python runtime interacting in an odd way with either Open MPI or 
</span><br>
<span class="quotelev1">&gt; BLCR. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you attach a debugger and get a backtrace on a stuck checkpoint?
</span><br>
<p><span class="quotelev3">&gt;&gt;&gt; That might show us where things are held up. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 9, 2010, at 4:04 PM, &lt;ananda.mudar_at_[hidden]&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;ananda.mudar_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have integrated mpi4py with openmpi 1.4.2 that was built with
</span><br>
BLCR 
<br>
<span class="quotelev3">&gt;&gt;&gt; 0.8.2. When I run ompi-checkpoint on the program written using 
</span><br>
<span class="quotelev1">&gt; mpi4py, 
</span><br>
<span class="quotelev2">&gt;&gt; I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; see that program doesn?t resume sometimes after successful
</span><br>
checkpoint 
<br>
<span class="quotelev3">&gt;&gt;&gt; creation. This doesn?t occur always meaning the program resumes
</span><br>
after 
<br>
<span class="quotelev3">&gt;&gt;&gt; successful checkpoint creation most of the time and completes 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; successfully. Has anyone tested the checkpoint/restart functionality
</span><br>
<p><span class="quotelev3">&gt;&gt;&gt; with mpi4py programs? Are there any best practices that I should
</span><br>
keep 
<br>
<span class="quotelev2">&gt;&gt; in 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mind while checkpointing mpi4py programs? 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for your time 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Ananda 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please do not print this email unless it is absolutely necessary. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The information contained in this electronic message and any 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attachments to this message are intended for the exclusive use of
</span><br>
the 
<br>
<span class="quotelev3">&gt;&gt;&gt; addressee(s) and may contain proprietary, confidential or privileged
</span><br>
<p><span class="quotelev3">&gt;&gt;&gt; information. If you are not the intended recipient, you should not 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; disseminate, distribute or copy this e-mail. Please notify the
</span><br>
sender 
<br>
<span class="quotelev3">&gt;&gt;&gt; immediately and destroy all copies of this message and any 
</span><br>
<span class="quotelev2">&gt;&gt; attachments. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WARNING: Computer viruses can be transmitted via email. The 
</span><br>
<span class="quotelev1">&gt; recipient 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should check this email and any attachments for the presence of 
</span><br>
<span class="quotelev2">&gt;&gt; viruses. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The company accepts no liability for any damage caused by any virus 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; transmitted by this email. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; www.wipro.com 
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please do not print this email unless it is absolutely necessary. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The information contained in this electronic message and any 
</span><br>
<span class="quotelev1">&gt; attachments to this message are intended for the exclusive use of the 
</span><br>
<span class="quotelev1">&gt; addressee(s) and may contain proprietary, confidential or privileged 
</span><br>
<span class="quotelev1">&gt; information. If you are not the intended recipient, you should not 
</span><br>
<span class="quotelev1">&gt; disseminate, distribute or copy this e-mail. Please notify the sender 
</span><br>
<span class="quotelev1">&gt; immediately and destroy all copies of this message and any
</span><br>
attachments. 
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: Computer viruses can be transmitted via email. The recipient
</span><br>
<p><span class="quotelev1">&gt; should check this email and any attachments for the presence of
</span><br>
viruses. 
<br>
<span class="quotelev1">&gt; The company accepts no liability for any damage caused by any virus 
</span><br>
<span class="quotelev1">&gt; transmitted by this email. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; www.wipro.com 
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
<span class="quotelev1">&gt; _______________________________________________ 
</span><br>
<span class="quotelev1">&gt; users mailing list 
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
</span><br>
<span class="quotelev1">&gt; 
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14028/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/msword attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14028/stack_trace_of_hung_mpi4py_program_with_openmpi_trunk.doc">stack trace of hung mpi4py program with openmpi trunk.doc</a>
</ul>
<!-- attachment="stack_trace_of_hung_mpi4py_program_with_openmpi_trunk.doc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14029.php">sunita_at_[hidden]: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Previous message:</strong> <a href="14027.php">Ralph Castain: "Re: [OMPI users] mpirun hangs during runtime on Intel quad-core"</a>
<li><strong>Maybe in reply to:</strong> <a href="13945.php">ananda.mudar_at_[hidden]: "[OMPI users] Checkpointing mpi4py program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14041.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program"</a>
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
