<?
$subject_val = "Re: [OMPI users] Checkpointing mpi4py program";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 13 11:10:13 2010" -->
<!-- isoreceived="20100813151013" -->
<!-- sent="Fri, 13 Aug 2010 08:06:28 -0700" -->
<!-- isosent="20100813150628" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing mpi4py program" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E717D6F4_at_usa-mv-msg.wipro.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="B30C88DAEC303049BF03B142CB080A8003596733EC_at_usa-mv-msg.wipro.com" -->
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
<strong>Date:</strong> 2010-08-13 11:06:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14016.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<li><strong>Previous message:</strong> <a href="14014.php">Gus Correa: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Maybe in reply to:</strong> <a href="13945.php">ananda.mudar_at_[hidden]: "[OMPI users] Checkpointing mpi4py program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14016.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh
<br>
&nbsp;
<br>
I have stack traces of all 8 python processes when I observed the hang after successful completion of checkpoint. They are in the attached document. Please see if these stack traces provide any clue.
<br>
&nbsp;
<br>
Thanks
<br>
Ananda
<br>
<p>________________________________
<br>
<p>From: Ananda Babu Mudar (WT01 - Energy and Utilities)
<br>
Sent: Fri 8/13/2010 9:12 AM
<br>
To: users_at_[hidden]
<br>
Subject: RE: users Digest, Vol 1658, Issue 2
<br>
<p><p><p>Josh
<br>
<p>I am having problems compiling the sources from the latest trunk. It complains of libgomp.spec missing even though that file exists on my system. I will see if I have to change any other environment variables to have a successful compilation. I will keep you posted.
<br>
<p>BTW, were you successful in reproducing the problem on a system with OpenMPI 1.4.2?
<br>
<p>Thanks
<br>
Ananda
<br>
-----Original Message-----
<br>
Date: Thu, 12 Aug 2010 09:12:26 -0400
<br>
From: Joshua Hursey &lt;jjhursey_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Checkpointing mpi4py program
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;1F1445AB-9208-4EF0-AF25-5926BD53C7E1_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=us-ascii
<br>
<p>Can you try this with the current trunk (r23587 or later)?
<br>
<p>I just added a number of new features and bug fixes, and I would be interested to see if it fixes the problem. In particular I suspect that this might be related to the Init/Finalize bounding of the checkpoint region.
<br>
<p>-- Josh
<br>
<p>On Aug 10, 2010, at 2:18 PM, &lt;ananda.mudar_at_[hidden]&gt; &lt;ananda.mudar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please find attached is the python program that reproduces the hang that
</span><br>
<span class="quotelev1">&gt; I described. Initial part of this file describes the prerequisite
</span><br>
<span class="quotelev1">&gt; modules and the steps to reproduce the problem. Please let me know if
</span><br>
<span class="quotelev1">&gt; you have any questions in reproducing the hang.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please note that, if I add the following lines at the end of the program
</span><br>
<span class="quotelev1">&gt; (in case sleep_time is True), the problem disappears ie; program resumes
</span><br>
<span class="quotelev1">&gt; successfully after successful completion of checkpoint.
</span><br>
<span class="quotelev1">&gt; # Add following lines at the end for sleep_time is True
</span><br>
<span class="quotelev1">&gt; else:
</span><br>
<span class="quotelev1">&gt;       time.sleep(0.1)
</span><br>
<span class="quotelev1">&gt; # End of added lines
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot for your time in looking into this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Ananda
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ananda B Mudar, PMP
</span><br>
<span class="quotelev1">&gt; Senior Technical Architect
</span><br>
<span class="quotelev1">&gt; Wipro Technologies
</span><br>
<span class="quotelev1">&gt; Ph: 972 765 8093
</span><br>
<span class="quotelev1">&gt; ananda.mudar_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; Date: Mon, 9 Aug 2010 16:37:58 -0400
</span><br>
<span class="quotelev1">&gt; From: Joshua Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Checkpointing mpi4py program
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;270BD450-743A-4662-9568-1FEDFCC6F9C6_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=windows-1252
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have not tried to checkpoint an mpi4py application, so I cannot say
</span><br>
<span class="quotelev1">&gt; for sure if it works or not. You might be hitting something with the
</span><br>
<span class="quotelev1">&gt; Python runtime interacting in an odd way with either Open MPI or BLCR.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you attach a debugger and get a backtrace on a stuck checkpoint?
</span><br>
<span class="quotelev1">&gt; That might show us where things are held up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 9, 2010, at 4:04 PM, &lt;ananda.mudar_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ananda.mudar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have integrated mpi4py with openmpi 1.4.2 that was built with BLCR
</span><br>
<span class="quotelev1">&gt; 0.8.2. When I run ompi-checkpoint on the program written using mpi4py, I
</span><br>
<span class="quotelev1">&gt; see that program doesn?t resume sometimes after successful checkpoint
</span><br>
<span class="quotelev1">&gt; creation. This doesn?t occur always meaning the program resumes after
</span><br>
<span class="quotelev1">&gt; successful checkpoint creation most of the time and completes
</span><br>
<span class="quotelev1">&gt; successfully. Has anyone tested the checkpoint/restart functionality
</span><br>
<span class="quotelev1">&gt; with mpi4py programs? Are there any best practices that I should keep in
</span><br>
<span class="quotelev1">&gt; mind while checkpointing mpi4py programs?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your time
</span><br>
<span class="quotelev2">&gt;&gt; -          Ananda
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
<span class="quotelev1">&gt; immediately and destroy all copies of this message and any attachments.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: Computer viruses can be transmitted via email. The recipient
</span><br>
<span class="quotelev1">&gt; should check this email and any attachments for the presence of viruses.
</span><br>
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
<p><p><p>Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14015/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/msword attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14015/stack-trace-of-hung-mpi4py-program.doc">stack-trace-of-hung-mpi4py-program.doc</a>
</ul>
<!-- attachment="stack-trace-of-hung-mpi4py-program.doc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14016.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<li><strong>Previous message:</strong> <a href="14014.php">Gus Correa: "Re: [OMPI users] problem with .bashrc stetting of openmpi"</a>
<li><strong>Maybe in reply to:</strong> <a href="13945.php">ananda.mudar_at_[hidden]: "[OMPI users] Checkpointing mpi4py program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14016.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program"</a>
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
