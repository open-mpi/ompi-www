<?
$subject_val = "Re: [OMPI users] Problem with MPI_Send and MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 24 03:24:11 2008" -->
<!-- isoreceived="20080924072411" -->
<!-- sent="Wed, 24 Sep 2008 09:22:17 +0200" -->
<!-- isosent="20080924072217" -->
<!-- name="Sofia Aparicio Secanellas" -->
<!-- email="saparicio_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Send and MPI_Recv" -->
<!-- id="9AD7553CAEB441BFA15E385C679894E0_at_aparicio1" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="48D9184E.5020502_at_sun.com" -->
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
<strong>Date:</strong> 2008-09-24 03:22:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6710.php">Matthias Hovestadt: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
<li><strong>Previous message:</strong> <a href="6708.php">Shafagh Jafer: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>In reply to:</strong> <a href="6703.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6714.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6714.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Terry,
<br>
<p>I obtain the hostnames of both computers:
<br>
<p>pichurra
<br>
hpl1-linux
<br>
<p>Thank you.
<br>
<p>Sofia
<br>
<p>----- Original Message ----- 
<br>
From: &quot;Terry Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt;
<br>
To: &lt;users_at_[hidden]&gt;
<br>
Sent: Tuesday, September 23, 2008 6:24 PM
<br>
Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
<br>
<p><p><span class="quotelev1">&gt; Hello Sofia,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Very puzzling indeed.  Can your try to run hostname or uptime with mpirun? 
</span><br>
<span class="quotelev1">&gt; That is something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --host 10.1.10.208,10.1.10.240 --mca mpi_preconnect_all 
</span><br>
<span class="quotelev1">&gt; 1 --prefix /usr/local -mca btl self,tcp -mca btl_tcp_if_include eth1 
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tue, 23 Sep 2008 17:05:22 +0200
</span><br>
<span class="quotelev1">&gt; From: &quot;Sofia Aparicio Secanellas&quot; &lt;saparicio_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;34D2F769A7C946BF915A828A9CD7F3CC_at_aparicio1&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Terry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here you can find the files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sofia
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
<p><p><p>No virus found in this outgoing message
<br>
Checked by PC Tools AntiVirus (4.0.0.26 - 10.100.007).
<br>
<a href="http://www.pctools.com/free-antivirus/">http://www.pctools.com/free-antivirus/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6710.php">Matthias Hovestadt: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
<li><strong>Previous message:</strong> <a href="6708.php">Shafagh Jafer: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>In reply to:</strong> <a href="6703.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6714.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6714.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
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
