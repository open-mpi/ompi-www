<?
$subject_val = "Re: [OMPI users] top command output shows huge CPU utilization when	openmpi processes resume after the checkpoint";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 21 13:00:17 2010" -->
<!-- isoreceived="20100321170017" -->
<!-- sent="Sun, 21 Mar 2010 11:58:56 -0500" -->
<!-- isosent="20100321165856" -->
<!-- name="Addepalli, Srirangam V" -->
<!-- email="srirangam.v.addepalli_at_[hidden]" -->
<!-- subject="Re: [OMPI users] top command output shows huge CPU utilization when	openmpi processes resume after the checkpoint" -->
<!-- id="15F71B097D330B42AA606A4AD8CA9640D4F47A2437_at_CRATUS.ttu.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1E3BF6B8D1243842A175F7C7069EB0E70695D353_at_usa-mv-msg.wipro.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] top command output shows huge CPU utilization when	openmpi processes resume after the checkpoint<br>
<strong>From:</strong> Addepalli, Srirangam V (<em>srirangam.v.addepalli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-21 12:58:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12392.php">Shiqing Fan: "Re: [OMPI users] compiling C++ programs in windows"</a>
<li><strong>Previous message:</strong> <a href="12390.php">Bloom Broker: "[OMPI users] compiling C++ programs in windows"</a>
<li><strong>In reply to:</strong> <a href="12389.php">ananda.mudar_at_[hidden]: "[OMPI users] top command output shows huge CPU utilization when openmpi processes resume after the checkpoint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12449.php">Josh Hursey: "Re: [OMPI users] top command output shows huge CPU utilization when	openmpi processes resume after the checkpoint"</a>
<li><strong>Reply:</strong> <a href="12449.php">Josh Hursey: "Re: [OMPI users] top command output shows huge CPU utilization when	openmpi processes resume after the checkpoint"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes We have seen this behavior too. 
<br>
<p><span class="quotelev2">&gt;&gt;Another behavior I have seen is that one MPI process starts to show different elapsed time than its peers. Is it because checkpoint happened on behalf of this process?
</span><br>
<p>R
<br>
________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of ananda.mudar_at_[hidden] [ananda.mudar_at_[hidden]]
<br>
Sent: Saturday, March 20, 2010 10:18 PM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] top command output shows huge CPU utilization when        openmpi processes resume after the checkpoint
<br>
<p>When I checkpoint my openmpi application using ompi_checkpoint, I see that top command suddenly shows some really huge numbers in &quot;CPU %&quot; field such as 150% 200% etc. After sometime, these numbers do come back to the normal numbers under 100%. This happens exactly around the time checkpoint is completed and when the processes are resuming the execution.
<br>
<p>Another behavior I have seen is that one MPI process starts to show different elapsed time than its peers. Is it because checkpoint happened on behalf of this process?
<br>
<p>For your reference, I am using open mpi 1.3.4 and BLCR 0.8.2 for checkpointing.
<br>
<p>Thanks
<br>
Anand
<br>
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
<li><strong>Next message:</strong> <a href="12392.php">Shiqing Fan: "Re: [OMPI users] compiling C++ programs in windows"</a>
<li><strong>Previous message:</strong> <a href="12390.php">Bloom Broker: "[OMPI users] compiling C++ programs in windows"</a>
<li><strong>In reply to:</strong> <a href="12389.php">ananda.mudar_at_[hidden]: "[OMPI users] top command output shows huge CPU utilization when openmpi processes resume after the checkpoint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12449.php">Josh Hursey: "Re: [OMPI users] top command output shows huge CPU utilization when	openmpi processes resume after the checkpoint"</a>
<li><strong>Reply:</strong> <a href="12449.php">Josh Hursey: "Re: [OMPI users] top command output shows huge CPU utilization when	openmpi processes resume after the checkpoint"</a>
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
