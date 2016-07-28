<?
$subject_val = "[OMPI users] Sending relatively large messages with high frequency";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 00:35:26 2010" -->
<!-- isoreceived="20100225053526" -->
<!-- sent="Thu, 25 Feb 2010 16:35:21 +1100" -->
<!-- isosent="20100225053521" -->
<!-- name="Amr Hassan" -->
<!-- email="amr.abdelaziz_at_[hidden]" -->
<!-- subject="[OMPI users] Sending relatively large messages with high frequency" -->
<!-- id="4b583f3d1002242135k1f28119n23e9274870cb07da_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Sending relatively large messages with high frequency<br>
<strong>From:</strong> Amr Hassan (<em>amr.abdelaziz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-25 00:35:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12150.php">Brian Budge: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Previous message:</strong> <a href="12148.php">Brian Budge: "Re: [OMPI users] MPI_ERR_TRUNCATE returned from MPI_Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12150.php">Brian Budge: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Reply:</strong> <a href="12150.php">Brian Budge: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Maybe reply:</strong> <a href="12152.php">Amr Hassan: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Reply:</strong> <a href="12160.php">Prentice Bisbal: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I'm facing a strange problem with OpenMPI.
<br>
<p>I'm developing an application which is required to send a message from each
<br>
client  (1 MB each) to a server node for around 10 times per second (it's a
<br>
distributed render application and I'm trying to reach a higher frame rate
<br>
). The problem is that OpenMPI crash in that case and only works if I
<br>
partition this messages into a set of 20 k sub-messages with a sleep between
<br>
each one of them for around 1 to 10 ms!! This solution is very expensive in
<br>
term of time needed to send the data.  Is there any other solutions?
<br>
<p>The error i got now is:
<br>
Signal: Segmentation fault (11)
<br>
Signal code:  Address not mapped (1)
<br>
Failing at address: xxxxxxxxxxxxx
<br>
<p>The OS is Linux CentOS.  I'm using the latest version of OpenMPI.
<br>
<p>I appreciate any help regarding that.
<br>
<p>&nbsp;Regards,
<br>
Amr
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12149/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12150.php">Brian Budge: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Previous message:</strong> <a href="12148.php">Brian Budge: "Re: [OMPI users] MPI_ERR_TRUNCATE returned from MPI_Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12150.php">Brian Budge: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Reply:</strong> <a href="12150.php">Brian Budge: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Maybe reply:</strong> <a href="12152.php">Amr Hassan: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Reply:</strong> <a href="12160.php">Prentice Bisbal: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
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
