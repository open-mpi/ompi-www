<?
$subject_val = "Re: [OMPI users] Problem with MPI_Send and MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 24 11:55:24 2008" -->
<!-- isoreceived="20080924155524" -->
<!-- sent="Wed, 24 Sep 2008 17:53:08 +0200" -->
<!-- isosent="20080924155308" -->
<!-- name="Sofia Aparicio Secanellas" -->
<!-- email="saparicio_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Send and MPI_Recv" -->
<!-- id="1C8033FD918F4EAEB7DAEC5E4291A3EE_at_aparicio1" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="F8EB527E-A7B8-4BDE-B875-A7FC990E91B1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_Send and MPI_Recv<br>
<strong>From:</strong> Sofia Aparicio Secanellas (<em>saparicio_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-24 11:53:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6723.php">Shafagh Jafer: "Re: [OMPI users] which gcc to compile openmpi with?"</a>
<li><strong>Previous message:</strong> <a href="6721.php">Jeff Squyres: "Re: [OMPI users] which gcc to compile openmpi with?"</a>
<li><strong>In reply to:</strong> <a href="6714.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6740.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6740.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No , I do not have any ethernet device aliases.
<br>
<p>Thank you,
<br>
<p>Sofia
<br>
----- Original Message ----- 
<br>
From: &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Sent: Wednesday, September 24, 2008 2:33 PM
<br>
Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
<br>
<p><p><span class="quotelev1">&gt; You don't happen to have ethernet device aliases on either of these  
</span><br>
<span class="quotelev1">&gt; machines, do you?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (we have a problem with this on the trunk/v1.3 series right now; we  
</span><br>
<span class="quotelev1">&gt; were under the impression that it was working fine in the v1.2 series  
</span><br>
<span class="quotelev1">&gt; -- but I figured I'd ask...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 24, 2008, at 3:22 AM, Sofia Aparicio Secanellas wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello Terry,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I obtain the hostnames of both computers:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; pichurra
</span><br>
<span class="quotelev2">&gt;&gt; hpl1-linux
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sofia
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----- Original Message ----- From: &quot;Terry Dontje&quot; &lt;Terry.Dontje_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, September 23, 2008 6:24 PM
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Sofia,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Very puzzling indeed.  Can your try to run hostname or uptime with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun? That is something like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 2 --host 10.1.10.208,10.1.10.240 --mca  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_preconnect_all 1 --prefix /usr/local -mca btl self,tcp -mca  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_tcp_if_include eth1 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Tue, 23 Sep 2008 17:05:22 +0200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: &quot;Sofia Aparicio Secanellas&quot; &lt;saparicio_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID: &lt;34D2F769A7C946BF915A828A9CD7F3CC_at_aparicio1&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Terry,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here you can find the files.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sofia
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No virus found in this incoming message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Checked by PC Tools AntiVirus (4.0.0.26 - 10.100.007).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.pctools.com/free-antivirus/">http://www.pctools.com/free-antivirus/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No virus found in this outgoing message
</span><br>
<span class="quotelev2">&gt;&gt; Checked by PC Tools AntiVirus (4.0.0.26 - 10.100.007).
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.pctools.com/free-antivirus/">http://www.pctools.com/free-antivirus/</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No virus found in this incoming message
</span><br>
<span class="quotelev1">&gt; Checked by PC Tools AntiVirus (4.0.0.26 - 10.100.007).
</span><br>
<span class="quotelev1">&gt; <a href="http://www.pctools.com/free-antivirus/">http://www.pctools.com/free-antivirus/</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6723.php">Shafagh Jafer: "Re: [OMPI users] which gcc to compile openmpi with?"</a>
<li><strong>Previous message:</strong> <a href="6721.php">Jeff Squyres: "Re: [OMPI users] which gcc to compile openmpi with?"</a>
<li><strong>In reply to:</strong> <a href="6714.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6740.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6740.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
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
