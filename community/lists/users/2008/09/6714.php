<?
$subject_val = "Re: [OMPI users] Problem with MPI_Send and MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 24 08:33:45 2008" -->
<!-- isoreceived="20080924123345" -->
<!-- sent="Wed, 24 Sep 2008 08:33:38 -0400" -->
<!-- isosent="20080924123338" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Send and MPI_Recv" -->
<!-- id="F8EB527E-A7B8-4BDE-B875-A7FC990E91B1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9AD7553CAEB441BFA15E385C679894E0_at_aparicio1" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-24 08:33:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6715.php">Thomas Ropars: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)"</a>
<li><strong>Previous message:</strong> <a href="6713.php">Samuel Sarholz: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)"</a>
<li><strong>In reply to:</strong> <a href="6709.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6722.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6722.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You don't happen to have ethernet device aliases on either of these  
<br>
machines, do you?
<br>
<p>(we have a problem with this on the trunk/v1.3 series right now; we  
<br>
were under the impression that it was working fine in the v1.2 series  
<br>
-- but I figured I'd ask...)
<br>
<p><p>On Sep 24, 2008, at 3:22 AM, Sofia Aparicio Secanellas wrote:
<br>
<p><span class="quotelev1">&gt; Hello Terry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I obtain the hostnames of both computers:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pichurra
</span><br>
<span class="quotelev1">&gt; hpl1-linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sofia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- Original Message ----- From: &quot;Terry Dontje&quot; &lt;Terry.Dontje_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; To: &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, September 23, 2008 6:24 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Sofia,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Very puzzling indeed.  Can your try to run hostname or uptime with  
</span><br>
<span class="quotelev2">&gt;&gt; mpirun? That is something like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 --host 10.1.10.208,10.1.10.240 --mca  
</span><br>
<span class="quotelev2">&gt;&gt; mpi_preconnect_all 1 --prefix /usr/local -mca btl self,tcp -mca  
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_if_include eth1 hostname
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tue, 23 Sep 2008 17:05:22 +0200
</span><br>
<span class="quotelev2">&gt;&gt; From: &quot;Sofia Aparicio Secanellas&quot; &lt;saparicio_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;34D2F769A7C946BF915A828A9CD7F3CC_at_aparicio1&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Terry,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here you can find the files.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sofia
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No virus found in this incoming message
</span><br>
<span class="quotelev2">&gt;&gt; Checked by PC Tools AntiVirus (4.0.0.26 - 10.100.007).
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.pctools.com/free-antivirus/">http://www.pctools.com/free-antivirus/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No virus found in this outgoing message
</span><br>
<span class="quotelev1">&gt; Checked by PC Tools AntiVirus (4.0.0.26 - 10.100.007).
</span><br>
<span class="quotelev1">&gt; <a href="http://www.pctools.com/free-antivirus/">http://www.pctools.com/free-antivirus/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6715.php">Thomas Ropars: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)"</a>
<li><strong>Previous message:</strong> <a href="6713.php">Samuel Sarholz: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)"</a>
<li><strong>In reply to:</strong> <a href="6709.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6722.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6722.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
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
