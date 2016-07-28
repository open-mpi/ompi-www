<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 23 00:46:46 2007" -->
<!-- isoreceived="20070323044646" -->
<!-- sent="Fri, 23 Mar 2007 14:46:40 +1000" -->
<!-- isosent="20070323044640" -->
<!-- name="Jeffrey Stephen" -->
<!-- email="Stephen.Jeffrey_at_[hidden]" -->
<!-- subject="[OMPI users] error in MPI_Waitall" -->
<!-- id="66CE7F4ACF0C74439F9F6E0A568293020201A4CD_at_INDMAIL.lands.resnet.qg" -->
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
<strong>From:</strong> Jeffrey Stephen (<em>Stephen.Jeffrey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-23 00:46:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2896.php">Rainer Keller: "Re: [OMPI users] has anybody used the Intel Thread Checker w/OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="2894.php">Curtis Janssen: "[OMPI users] has anybody used the Intel Thread Checker w/OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2897.php">Tim Prins: "Re: [OMPI users] error in MPI_Waitall"</a>
<li><strong>Reply:</strong> <a href="2897.php">Tim Prins: "Re: [OMPI users] error in MPI_Waitall"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;
<br>
I am trying to run an MPICH2 application over 2 processors on a dual
<br>
processor x64 Linux box (SuSE 10). I am getting the following error
<br>
message:
<br>
&nbsp;
<br>
------------------------------
<br>
Fatal error in MPI_Waitall: Other MPI error, error stack:
<br>
MPI_Waitall(242)..........................: MPI_Waitall(count=2,
<br>
req_array=0x5bbda70, status_array=0x7fff461d9ce0) failed
<br>
MPIDI_CH3_Progress_wait(212)..............: an error occurred while
<br>
handling an event returned by MPIDU_Sock_Wait()
<br>
MPIDI_CH3I_Progress_handle_sock_event(413):
<br>
MPIDU_Socki_handle_read(633)..............: connection failure
<br>
(set=0,sock=1,errno=104:Connection reset by peer)
<br>
rank 0 in job 2  Demeter_18432   caused collective abort of all ranks
<br>
&nbsp;&nbsp;exit status of rank 0: killed by signal 11
<br>
------------------------------
<br>
&nbsp;
<br>
The &quot;cpi&quot; example that comes with MPICH2 executes correctly. I am using
<br>
MPICH2-1.0.5p2 which I compiled from source. 
<br>
&nbsp;
<br>
Does anyone know what the problem is?
<br>
&nbsp;
<br>
cheers
<br>
steve
<br>
<p>************************************************************************
<br>
Climate change will impact on everyone&#226;&#128;&#166; Queensland takes action
<br>
Register your interest in attending at <a href="http://www.nrw.qld.gov.au/events/nrconference/index.html">http://www.nrw.qld.gov.au/events/nrconference/index.html</a>
<br>
Natural Resources Conference 2007
<br>
Climate Change - Queensland takes action
<br>
Wednesday 23 May 2007
<br>
Brisbane Convention and Exhibition Centre
<br>
************************************************************************
<br>
The information in this email together with any attachments is
<br>
intended only for the person or entity to which it is addressed
<br>
and may contain confidential and/or privileged material.
<br>
Any form of review, disclosure, modification, distribution
<br>
and/or publication of this email message is prohibited, unless
<br>
as a necessary part of Departmental business.
<br>
If you have received this message in error, you are asked to
<br>
inform the sender as quickly as possible and delete this message
<br>
and any copies of this message from your computer and/or your
<br>
computer system network.
<br>
************************************************************************
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2895/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2896.php">Rainer Keller: "Re: [OMPI users] has anybody used the Intel Thread Checker w/OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="2894.php">Curtis Janssen: "[OMPI users] has anybody used the Intel Thread Checker w/OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2897.php">Tim Prins: "Re: [OMPI users] error in MPI_Waitall"</a>
<li><strong>Reply:</strong> <a href="2897.php">Tim Prins: "Re: [OMPI users] error in MPI_Waitall"</a>
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
