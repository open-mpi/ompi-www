<?
$subject_val = "[OMPI users] ompi-checkpoint fails sometimes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 11 17:36:08 2010" -->
<!-- isoreceived="20100511213608" -->
<!-- sent="Tue, 11 May 2010 14:35:53 -0700" -->
<!-- isosent="20100511213553" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="[OMPI users] ompi-checkpoint fails sometimes" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E70712A61F_at_usa-mv-msg.wipro.com" -->
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
<strong>Subject:</strong> [OMPI users] ompi-checkpoint fails sometimes<br>
<strong>From:</strong> <a href="mailto:ananda.mudar_at_[hidden]?Subject=Re:%20[OMPI%20users]%20ompi-checkpoint%20fails%20sometimes"><em>ananda.mudar_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-05-11 17:35:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13024.php">Damien: "[OMPI users] Fortran issues on Windows and 1.5 Trunk version"</a>
<li><strong>Previous message:</strong> <a href="13022.php">Gijsbert Wiesenekker: "Re: [OMPI users] Questions about MPI_Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13077.php">Josh Hursey: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="13077.php">Josh Hursey: "Re: [OMPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>&nbsp;
<br>
<p>I am using open-mpi 1.3.4 with BLCR. Sometimes I am running into a
<br>
strange problem with ompi-checkpoint command. Even though I see that all
<br>
MPI processes (equal to np argument) are running, ompi-checkpoint
<br>
command fails at times. I have seen this failure always when the MPI
<br>
processes spawned are not fully running ie; these processes are not
<br>
running above 90% CPU utilization. How do I ensure that the MPI
<br>
processes are fully up and running before I issue ompi-checkpoint
<br>
because dynamically detecting if the processes are utilizing above 90%
<br>
CPU resources is not easy.
<br>
<p>&nbsp;
<br>
<p>Are there any MCA parameters I can use to overcome this issue?
<br>
<p>&nbsp;
<br>
<p>Thanks
<br>
<p>Ananda
<br>
<p><p>Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13023/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13024.php">Damien: "[OMPI users] Fortran issues on Windows and 1.5 Trunk version"</a>
<li><strong>Previous message:</strong> <a href="13022.php">Gijsbert Wiesenekker: "Re: [OMPI users] Questions about MPI_Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13077.php">Josh Hursey: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="13077.php">Josh Hursey: "Re: [OMPI users] (no subject)"</a>
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
