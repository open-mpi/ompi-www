<?
$subject_val = "[OMPI users] mpirun with -am ft-enable-cr option takes longer time on certain configurations";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 20 23:15:57 2010" -->
<!-- isoreceived="20100321031557" -->
<!-- sent="Sat, 20 Mar 2010 20:14:50 -0700" -->
<!-- isosent="20100321031450" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun with -am ft-enable-cr option takes longer time on certain configurations" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E70695D352_at_usa-mv-msg.wipro.com" -->
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
<strong>Subject:</strong> [OMPI users] mpirun with -am ft-enable-cr option takes longer time on certain configurations<br>
<strong>From:</strong> <a href="mailto:ananda.mudar_at_[hidden]?Subject=Re:%20[OMPI%20users]%20mpirun%20with%20-am%20ft-enable-cr%20option%20takes%20longer%20time%20on%20certain%20configurations"><em>ananda.mudar_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-03-20 23:14:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12389.php">ananda.mudar_at_[hidden]: "[OMPI users] top command output shows huge CPU utilization when openmpi processes resume after the checkpoint"</a>
<li><strong>Previous message:</strong> <a href="12387.php">Damien Hocking: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12451.php">Josh Hursey: "Re: [OMPI users] mpirun with -am ft-enable-cr option takes longer time on certain configurations"</a>
<li><strong>Reply:</strong> <a href="12451.php">Josh Hursey: "Re: [OMPI users] mpirun with -am ft-enable-cr option takes longer time on certain configurations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am observing a very strange performance issue with my openmpi program.
<br>
<p>&nbsp;
<br>
<p>I have compute intensive openmpi based application that keeps the data
<br>
in memory, process the data and then dumps it to GPFS parallel file
<br>
system. GPFS parallel file system server is connected to a QDR
<br>
infiniband switch from Voltaire. 
<br>
<p>&nbsp;
<br>
<p>If my cluster is connected to a DDR infiniband switch which in turn
<br>
connects to file system server on QDR switch, I see that I can run my
<br>
application under checkpoint/restart control (with -am ft-enable-cr) and
<br>
I can checkpoint (ompi-checkpoint) successfully and the application gets
<br>
completed after few additional seconds.
<br>
<p>&nbsp;
<br>
<p>If my cluster is connected to the same QDR switch which connects to file
<br>
system server, I see that my application takes close to 10x time to
<br>
complete if I run it under checkpoint/restart control (with -am
<br>
ft-enable-cr). If I run the same application using a plain mpirun
<br>
command (ie; without -am ft_enable_cr), it finishes within a minute.
<br>
<p>&nbsp;
<br>
<p>I am using open mpi 1.3.4 and BLCR 0.8.2 for checkpointing
<br>
<p>&nbsp;
<br>
<p>Are there any specific MCA parameters that I should tune to address this
<br>
problem? Any other pointers will be really helpful.
<br>
<p>&nbsp;
<br>
<p>Thanks
<br>
<p>Anand
<br>
<p><p>Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12388/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12389.php">ananda.mudar_at_[hidden]: "[OMPI users] top command output shows huge CPU utilization when openmpi processes resume after the checkpoint"</a>
<li><strong>Previous message:</strong> <a href="12387.php">Damien Hocking: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12451.php">Josh Hursey: "Re: [OMPI users] mpirun with -am ft-enable-cr option takes longer time on certain configurations"</a>
<li><strong>Reply:</strong> <a href="12451.php">Josh Hursey: "Re: [OMPI users] mpirun with -am ft-enable-cr option takes longer time on certain configurations"</a>
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
