<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 23 07:43:45 2007" -->
<!-- isoreceived="20070323114345" -->
<!-- sent="Fri, 23 Mar 2007 07:43:44 -0400" -->
<!-- isosent="20070323114344" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error in MPI_Waitall" -->
<!-- id="5C72D319-1FBC-4977-A0B8-64A92FC8FBB1_at_open-mpi.org" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="66CE7F4ACF0C74439F9F6E0A568293020201A4CD_at_INDMAIL.lands.resnet.qg" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-23 07:43:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2898.php">Ricardo Fonseca: "[OMPI users] Problems compiling openmpi 1.2 under AIX 5.2"</a>
<li><strong>Previous message:</strong> <a href="2896.php">Rainer Keller: "Re: [OMPI users] has anybody used the Intel Thread Checker w/OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="2895.php">Jeffrey Stephen: "[OMPI users] error in MPI_Waitall"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Steve,
<br>
<p>This list is for supporting Open MPI, not MPICH2 (MPICH2 is an  
<br>
entirely different software package).  You should probably redirect  
<br>
your question to their support lists.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p>On Mar 23, 2007, at 12:46 AM, Jeffrey Stephen wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to run an MPICH2 application over 2 processors on a  
</span><br>
<span class="quotelev1">&gt; dual processor x64 Linux box (SuSE 10). I am getting the following  
</span><br>
<span class="quotelev1">&gt; error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; Fatal error in MPI_Waitall: Other MPI error, error stack:
</span><br>
<span class="quotelev1">&gt; MPI_Waitall(242)..........................: MPI_Waitall(count=2,  
</span><br>
<span class="quotelev1">&gt; req_array=0x5bbda70, status_array=0x7fff461d9ce0) failed
</span><br>
<span class="quotelev1">&gt; MPIDI_CH3_Progress_wait(212)..............: an error occurred while  
</span><br>
<span class="quotelev1">&gt; handling an event returned by MPIDU_Sock_Wait()
</span><br>
<span class="quotelev1">&gt; MPIDI_CH3I_Progress_handle_sock_event(413):
</span><br>
<span class="quotelev1">&gt; MPIDU_Socki_handle_read(633)..............: connection failure  
</span><br>
<span class="quotelev1">&gt; (set=0,sock=1,errno=104:Connection reset by peer)
</span><br>
<span class="quotelev1">&gt; rank 0 in job 2  Demeter_18432   caused collective abort of all ranks
</span><br>
<span class="quotelev1">&gt;   exit status of rank 0: killed by signal 11
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;cpi&quot; example that comes with MPICH2 executes correctly. I am  
</span><br>
<span class="quotelev1">&gt; using MPICH2-1.0.5p2 which I compiled from source.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone know what the problem is?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers
</span><br>
<span class="quotelev1">&gt; steve
</span><br>
<span class="quotelev1">&gt; ********************************************************************** 
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Climate change will impact on everyone&#133; Queensland takes action
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Register your interest in attending at <a href="http://www.nrw.qld.gov.au/">http://www.nrw.qld.gov.au/</a> 
</span><br>
<span class="quotelev1">&gt; events/nrconference/index.html
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Natural Resources Conference 2007
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Climate Change - Queensland takes action
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Wednesday 23 May 2007
</span><br>
<span class="quotelev1">&gt; Brisbane Convention and Exhibition Centre
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ********************************************************************** 
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The information in this email together with any attachments is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; intended only for the person or entity to which it is addressed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and may contain confidential and/or privileged material.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any form of review, disclosure, modification, distribution
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and/or publication of this email message is prohibited, unless
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as a necessary part of Departmental business.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you have received this message in error, you are asked to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; inform the sender as quickly as possible and delete this message
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and any copies of this message from your computer and/or your
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; computer system network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ********************************************************************** 
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2898.php">Ricardo Fonseca: "[OMPI users] Problems compiling openmpi 1.2 under AIX 5.2"</a>
<li><strong>Previous message:</strong> <a href="2896.php">Rainer Keller: "Re: [OMPI users] has anybody used the Intel Thread Checker w/OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="2895.php">Jeffrey Stephen: "[OMPI users] error in MPI_Waitall"</a>
<!-- nextthread="start" -->
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
