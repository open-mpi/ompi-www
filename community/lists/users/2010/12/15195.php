<?
$subject_val = "[OMPI users] Call to MPI_Test has large time-jitter";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 17 18:43:35 2010" -->
<!-- isoreceived="20101217234335" -->
<!-- sent="Fri, 17 Dec 2010 15:43:27 -0800 (PST)" -->
<!-- isosent="20101217234327" -->
<!-- name="Sashi Balasingam" -->
<!-- email="sashibala2_at_[hidden]" -->
<!-- subject="[OMPI users] Call to MPI_Test has large time-jitter" -->
<!-- id="134954.257.qm_at_web32903.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Call to MPI_Test has large time-jitter<br>
<strong>From:</strong> Sashi Balasingam (<em>sashibala2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-17 18:43:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15196.php">Reuti: "Re: [OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher"</a>
<li><strong>Previous message:</strong> <a href="15194.php">Brock Palen: "Re: [OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15197.php">Tim Prince: "Re: [OMPI users] Call to MPI_Test has large time-jitter"</a>
<li><strong>Reply:</strong> <a href="15197.php">Tim Prince: "Re: [OMPI users] Call to MPI_Test has large time-jitter"</a>
<li><strong>Maybe reply:</strong> <a href="15199.php">Sashi Balasingam: "Re: [OMPI users] Call to MPI_Test has large time-jitter"</a>
<li><strong>Reply:</strong> <a href="15219.php">Yiannis Papadopoulos: "Re: [OMPI users] Call to MPI_Test has large time-jitter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I recently started on an MPI-based, 'real-time', pipelined-processing application, and the application fails due to large time-jitter in sending and receiving messages. Here are related info -
<br>
&#160;
<br>
1) Platform:
<br>
a) Intel Box: Two Hex-core, Intel Xeon, 2.668 GHz (...total of 12 cores), 
<br>
b) OS: SUSE Linux Enterprise Server 11 (x86_64) - Kernel \r (\l)
<br>
c) MPI Rev: (OpenRTE) 1.4, (...Installed OFED package)
<br>
d) HCA: InfiniBand: Mellanox Technologies MT26428 [ConnectX IB QDR, PCIe 2.0 5GT/s] (rev a0)
<br>
&#160;
<br>
2) Application detail
<br>
&#160;
<br>
a) Launching 7 processes, for pipelined processing, where each process waits for a message (sizes vary between 1 KBytes to 26 KBytes), 
<br>
then process the data, and outputs a message (sizes vary between 1 KBytes to 26 KBytes), to next process.
<br>
&#160;
<br>
b) MPI transport functions used : &quot;MPI_Isend&quot;, MPI_Irecv, MPI_Test. 
<br>
&#160;&#160; i) For Receiving messages, I first make an MPI_Irecv call, followed by a busy-loop on MPI_Test, waiting for message
<br>
&#160;&#160; ii) For Sending message, there is a busy-loop on MPI_Test to ensure prior buffer was sent, then use MPI_Isend.
<br>
&#160;
<br>
c) When the job starts, all these 7 process are put in High priority mode ( SCHED_FIFO policy, with priority setting of 99). 
<br>
The Job entails an input data packet stream (and a series of MPI messages), continually at 40 micro-sec rate, for a few minutes.&#160;&#160;&#160; 
<br>
<p>3) The Problem:
<br>
Most calls to MPI_Test (...which is non-blocking) takes a few micro-sec, but around 10% of the job, it has a large jitter, that vary from 1 to 100 odd millisec. This causes
<br>
some of the application input queues to fill-up&#160; and cause a failure.
<br>
&#160;
<br>
Any suggestions to look at on the MPI settings or OS config/issues will be much appreciated.
<br>
&#160;
<br>
Thanks in advance.
<br>
Sanji
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15195/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15196.php">Reuti: "Re: [OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher"</a>
<li><strong>Previous message:</strong> <a href="15194.php">Brock Palen: "Re: [OMPI users] Using (or not using) Torque/Moab under PBS Pro as the OpenMPI launcher"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15197.php">Tim Prince: "Re: [OMPI users] Call to MPI_Test has large time-jitter"</a>
<li><strong>Reply:</strong> <a href="15197.php">Tim Prince: "Re: [OMPI users] Call to MPI_Test has large time-jitter"</a>
<li><strong>Maybe reply:</strong> <a href="15199.php">Sashi Balasingam: "Re: [OMPI users] Call to MPI_Test has large time-jitter"</a>
<li><strong>Reply:</strong> <a href="15219.php">Yiannis Papadopoulos: "Re: [OMPI users] Call to MPI_Test has large time-jitter"</a>
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
