<?
$subject_val = "[OMPI users] top command output shows huge CPU utilization when openmpi processes resume after the checkpoint";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 20 23:19:02 2010" -->
<!-- isoreceived="20100321031902" -->
<!-- sent="Sat, 20 Mar 2010 20:18:32 -0700" -->
<!-- isosent="20100321031832" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="[OMPI users] top command output shows huge CPU utilization when openmpi processes resume after the checkpoint" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E70695D353_at_usa-mv-msg.wipro.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] top command output shows huge CPU utilization when openmpi processes resume after the checkpoint<br>
<strong>From:</strong> <a href="mailto:ananda.mudar_at_[hidden]?Subject=Re:%20[OMPI%20users]%20top%20command%20output%20shows%20huge%20CPU%20utilization%20when%20openmpi%20processes%20resume%20after%20the%20checkpoint"><em>ananda.mudar_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-03-20 23:18:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12390.php">Bloom Broker: "[OMPI users] compiling C++ programs in windows"</a>
<li><strong>Previous message:</strong> <a href="12388.php">ananda.mudar_at_[hidden]: "[OMPI users] mpirun with -am ft-enable-cr option takes longer time on certain configurations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12391.php">Addepalli, Srirangam V: "Re: [OMPI users] top command output shows huge CPU utilization when	openmpi processes resume after the checkpoint"</a>
<li><strong>Reply:</strong> <a href="12391.php">Addepalli, Srirangam V: "Re: [OMPI users] top command output shows huge CPU utilization when	openmpi processes resume after the checkpoint"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When I checkpoint my openmpi application using ompi_checkpoint, I see
<br>
that top command suddenly shows some really huge numbers in &quot;CPU %&quot;
<br>
field such as 150% 200% etc. After sometime, these numbers do come back
<br>
to the normal numbers under 100%. This happens exactly around the time
<br>
checkpoint is completed and when the processes are resuming the
<br>
execution.
<br>
<p>&nbsp;
<br>
<p>Another behavior I have seen is that one MPI process starts to show
<br>
different elapsed time than its peers. Is it because checkpoint happened
<br>
on behalf of this process?
<br>
<p>&nbsp;
<br>
<p>For your reference, I am using open mpi 1.3.4 and BLCR 0.8.2 for
<br>
checkpointing.
<br>
<p>&nbsp;
<br>
<p>Thanks
<br>
Anand
<br>
<p><p>Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12389/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12390.php">Bloom Broker: "[OMPI users] compiling C++ programs in windows"</a>
<li><strong>Previous message:</strong> <a href="12388.php">ananda.mudar_at_[hidden]: "[OMPI users] mpirun with -am ft-enable-cr option takes longer time on certain configurations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12391.php">Addepalli, Srirangam V: "Re: [OMPI users] top command output shows huge CPU utilization when	openmpi processes resume after the checkpoint"</a>
<li><strong>Reply:</strong> <a href="12391.php">Addepalli, Srirangam V: "Re: [OMPI users] top command output shows huge CPU utilization when	openmpi processes resume after the checkpoint"</a>
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
