<?
$subject_val = "Re: [OMPI users] Problem with MPI_Send and MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 11:06:17 2008" -->
<!-- isoreceived="20080930150617" -->
<!-- sent="Tue, 30 Sep 2008 11:06:10 -0400" -->
<!-- isosent="20080930150610" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Send and MPI_Recv" -->
<!-- id="A17A6674-F328-4C11-84C9-437D77F61F20_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E51420E8B1A7424498DAA8253BD4F027_at_aparicio1" -->
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
<strong>Date:</strong> 2008-09-30 11:06:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6795.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6793.php">Jeroen Kleijer: "Re: [OMPI users] TCP BTL in different subnets?"</a>
<li><strong>In reply to:</strong> <a href="6740.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6795.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6795.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is quite the odd problem.
<br>
<p>1. From prior mails, you do not seem to have iptables running to block  
<br>
any ports -- is there any other port blocking software running,  
<br>
perchance?
<br>
<p>2. You do seem to be able to run non-MPI apps properly.
<br>
<p>3. I assume that you would be able to run &quot;hello world&quot; kinds of MPI  
<br>
apps ok (i.e., ones that do not include any MPI communication  
<br>
functions properly).  Can you test this, to be sure?  There's a &quot;hello  
<br>
world&quot; demo app in the examples/ subdirectory in the OMPI tarball.
<br>
<p>4. What we really need to know is why OMPI's MPI TCP communication is  
<br>
apparently failing to make a connection between the two nodes.  That  
<br>
will require attaching to the MPI processes with a debugger and seeing  
<br>
why they're not connecting.  We unfortunately haven't had many  
<br>
problems with this part of the code, so we haven't added too much user- 
<br>
visible instrumentation...
<br>
<p><p><p>On Sep 25, 2008, at 11:20 AM, Sofia Aparicio Secanellas wrote:
<br>
<p><span class="quotelev1">&gt; I have tried with two computers linux with the same kernel  
</span><br>
<span class="quotelev1">&gt; (2.6.22-15-generic) and I got the same problem. I do not understand  
</span><br>
<span class="quotelev1">&gt; what happens.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sofia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- Original Message ----- From: &quot;Sofia Aparicio Secanellas&quot; &lt;saparicio_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, September 24, 2008 5:53 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No , I do not have any ethernet device aliases.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sofia
</span><br>
<span class="quotelev2">&gt;&gt; ----- Original Message ----- From: &quot;Jeff Squyres&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, September 24, 2008 2:33 PM
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You don't happen to have ethernet device aliases on either of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; these machines, do you?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (we have a problem with this on the trunk/v1.3 series right now;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we  were under the impression that it was working fine in the v1.2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; series  -- but I figured I'd ask...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 24, 2008, at 3:22 AM, Sofia Aparicio Secanellas wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello Terry,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I obtain the hostnames of both computers:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pichurra
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hpl1-linux
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sofia
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----- Original Message ----- From: &quot;Terry Dontje&quot; &lt;Terry.Dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Tuesday, September 23, 2008 6:24 PM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello Sofia,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Very puzzling indeed.  Can your try to run hostname or uptime  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with mpirun? That is something like:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -np 2 --host 10.1.10.208,10.1.10.240 --mca   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpi_preconnect_all 1 --prefix /usr/local -mca btl self,tcp -mca   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; btl_tcp_if_include eth1 hostname
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Date: Tue, 23 Sep 2008 17:05:22 +0200
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: &quot;Sofia Aparicio Secanellas&quot; &lt;saparicio_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Message-ID: &lt;34D2F769A7C946BF915A828A9CD7F3CC_at_aparicio1&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello Terry,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here you can find the files.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sofia
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; No virus found in this incoming message
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Checked by PC Tools AntiVirus (4.0.0.26 - 10.100.007).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.pctools.com/free-antivirus/">http://www.pctools.com/free-antivirus/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No virus found in this outgoing message
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Checked by PC Tools AntiVirus (4.0.0.26 - 10.100.007).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.pctools.com/free-antivirus/">http://www.pctools.com/free-antivirus/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="6795.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6793.php">Jeroen Kleijer: "Re: [OMPI users] TCP BTL in different subnets?"</a>
<li><strong>In reply to:</strong> <a href="6740.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6795.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6795.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
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
