<?
$subject_val = "Re: [OMPI users] Checkpointing mpi4py program";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 13 12:18:39 2010" -->
<!-- isoreceived="20100813161839" -->
<!-- sent="Fri, 13 Aug 2010 09:17:26 -0700" -->
<!-- isosent="20100813161726" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing mpi4py program" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E707FA211D_at_usa-mv-msg.wipro.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.4250.1281712213.1857.users_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-08-13 12:17:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14017.php">Joshua Hursey: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<li><strong>Previous message:</strong> <a href="14015.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<li><strong>Maybe in reply to:</strong> <a href="13945.php">ananda.mudar_at_[hidden]: "[OMPI users] Checkpointing mpi4py program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14017.php">Joshua Hursey: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<li><strong>Reply:</strong> <a href="14017.php">Joshua Hursey: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, I will do that.
<br>
<p>But did you try this program on a system where the latest trunk is
<br>
installed? Were you successful in checkpointing?
<br>
<p>- Ananda
<br>
-----Original Message-----
<br>
Message: 9
<br>
Date: Fri, 13 Aug 2010 10:21:29 -0400
<br>
From: Joshua Hursey &lt;jjhursey_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] users Digest, Vol 1658, Issue 2
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;7A43615B-A462-4C72-8112-496653D8F0A0_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=us-ascii
<br>
<p>I probably won't have an opportunity to work on reproducing this on the
<br>
1.4.2. The trunk has a bunch of bug fixes that probably will not be
<br>
backported to the 1.4 series (things have changed too much since that
<br>
branch). So I would suggest trying the 1.5 series.
<br>
<p>-- Josh
<br>
<p>On Aug 13, 2010, at 10:12 AM, &lt;ananda.mudar_at_[hidden]&gt;
<br>
&lt;ananda.mudar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am having problems compiling the sources from the latest trunk. It
</span><br>
<span class="quotelev1">&gt; complains of libgomp.spec missing even though that file exists on my
</span><br>
<span class="quotelev1">&gt; system. I will see if I have to change any other environment variables
</span><br>
<span class="quotelev1">&gt; to have a successful compilation. I will keep you posted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTW, were you successful in reproducing the problem on a system with
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.4.2?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ananda
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; Date: Thu, 12 Aug 2010 09:12:26 -0400
</span><br>
<span class="quotelev1">&gt; From: Joshua Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Checkpointing mpi4py program
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;1F1445AB-9208-4EF0-AF25-5926BD53C7E1_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you try this with the current trunk (r23587 or later)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just added a number of new features and bug fixes, and I would be
</span><br>
<span class="quotelev1">&gt; interested to see if it fixes the problem. In particular I suspect
</span><br>
that
<br>
<span class="quotelev1">&gt; this might be related to the Init/Finalize bounding of the checkpoint
</span><br>
<span class="quotelev1">&gt; region.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 10, 2010, at 2:18 PM, &lt;ananda.mudar_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ananda.mudar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please find attached is the python program that reproduces the hang
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; I described. Initial part of this file describes the prerequisite
</span><br>
<span class="quotelev2">&gt;&gt; modules and the steps to reproduce the problem. Please let me know if
</span><br>
<span class="quotelev2">&gt;&gt; you have any questions in reproducing the hang.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please note that, if I add the following lines at the end of the
</span><br>
<span class="quotelev1">&gt; program
</span><br>
<span class="quotelev2">&gt;&gt; (in case sleep_time is True), the problem disappears ie; program
</span><br>
<span class="quotelev1">&gt; resumes
</span><br>
<span class="quotelev2">&gt;&gt; successfully after successful completion of checkpoint.
</span><br>
<span class="quotelev2">&gt;&gt; # Add following lines at the end for sleep_time is True
</span><br>
<span class="quotelev2">&gt;&gt; else:
</span><br>
<span class="quotelev2">&gt;&gt; 	time.sleep(0.1)
</span><br>
<span class="quotelev2">&gt;&gt; # End of added lines
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot for your time in looking into this issue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; Ananda
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ananda B Mudar, PMP
</span><br>
<span class="quotelev2">&gt;&gt; Senior Technical Architect
</span><br>
<span class="quotelev2">&gt;&gt; Wipro Technologies
</span><br>
<span class="quotelev2">&gt;&gt; Ph: 972 765 8093
</span><br>
<span class="quotelev2">&gt;&gt; ananda.mudar_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; Date: Mon, 9 Aug 2010 16:37:58 -0400
</span><br>
<span class="quotelev2">&gt;&gt; From: Joshua Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Checkpointing mpi4py program
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;270BD450-743A-4662-9568-1FEDFCC6F9C6_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=windows-1252
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have not tried to checkpoint an mpi4py application, so I cannot say
</span><br>
<span class="quotelev2">&gt;&gt; for sure if it works or not. You might be hitting something with the
</span><br>
<span class="quotelev2">&gt;&gt; Python runtime interacting in an odd way with either Open MPI or
</span><br>
BLCR.
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you attach a debugger and get a backtrace on a stuck checkpoint?
</span><br>
<span class="quotelev2">&gt;&gt; That might show us where things are held up.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 9, 2010, at 4:04 PM, &lt;ananda.mudar_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ananda.mudar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have integrated mpi4py with openmpi 1.4.2 that was built with BLCR
</span><br>
<span class="quotelev2">&gt;&gt; 0.8.2. When I run ompi-checkpoint on the program written using
</span><br>
mpi4py,
<br>
<span class="quotelev1">&gt; I
</span><br>
<span class="quotelev2">&gt;&gt; see that program doesn?t resume sometimes after successful checkpoint
</span><br>
<span class="quotelev2">&gt;&gt; creation. This doesn?t occur always meaning the program resumes after
</span><br>
<span class="quotelev2">&gt;&gt; successful checkpoint creation most of the time and completes
</span><br>
<span class="quotelev2">&gt;&gt; successfully. Has anyone tested the checkpoint/restart functionality
</span><br>
<span class="quotelev2">&gt;&gt; with mpi4py programs? Are there any best practices that I should keep
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev2">&gt;&gt; mind while checkpointing mpi4py programs?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your time
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -          Ananda
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please do not print this email unless it is absolutely necessary.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The information contained in this electronic message and any
</span><br>
<span class="quotelev2">&gt;&gt; attachments to this message are intended for the exclusive use of the
</span><br>
<span class="quotelev2">&gt;&gt; addressee(s) and may contain proprietary, confidential or privileged
</span><br>
<span class="quotelev2">&gt;&gt; information. If you are not the intended recipient, you should not
</span><br>
<span class="quotelev2">&gt;&gt; disseminate, distribute or copy this e-mail. Please notify the sender
</span><br>
<span class="quotelev2">&gt;&gt; immediately and destroy all copies of this message and any
</span><br>
<span class="quotelev1">&gt; attachments.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: Computer viruses can be transmitted via email. The
</span><br>
recipient
<br>
<span class="quotelev2">&gt;&gt; should check this email and any attachments for the presence of
</span><br>
<span class="quotelev1">&gt; viruses.
</span><br>
<span class="quotelev2">&gt;&gt; The company accepts no liability for any damage caused by any virus
</span><br>
<span class="quotelev2">&gt;&gt; transmitted by this email.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.wipro.com
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
<p>Please do not print this email unless it is absolutely necessary. 
<br>
<p>The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 
<br>
<p>WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 
<br>
<p>www.wipro.com
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14017.php">Joshua Hursey: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<li><strong>Previous message:</strong> <a href="14015.php">ananda.mudar_at_[hidden]: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<li><strong>Maybe in reply to:</strong> <a href="13945.php">ananda.mudar_at_[hidden]: "[OMPI users] Checkpointing mpi4py program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14017.php">Joshua Hursey: "Re: [OMPI users] Checkpointing mpi4py program"</a>
<li><strong>Reply:</strong> <a href="14017.php">Joshua Hursey: "Re: [OMPI users] Checkpointing mpi4py program"</a>
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
