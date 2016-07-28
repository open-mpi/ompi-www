<?
$subject_val = "Re: [OMPI users] Problem with MPI_Send and MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 11:59:56 2008" -->
<!-- isoreceived="20080917155956" -->
<!-- sent="Wed, 17 Sep 2008 11:59:49 -0400" -->
<!-- isosent="20080917155949" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Send and MPI_Recv" -->
<!-- id="53CC4F7C-8BD8-48BB-8A76-1FD4B3329CB8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48D127AC.9030407_at_sun.com" -->
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
<strong>Date:</strong> 2008-09-17 11:59:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6584.php">Eugene Loh: "Re: [OMPI users] Odd MPI_Bcast behavior"</a>
<li><strong>Previous message:</strong> <a href="6582.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<li><strong>In reply to:</strong> <a href="6580.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6597.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Additionally, since you technically have a heterogeneous situation  
<br>
(different OS versions on each node), you might want to:
<br>
<p>- compile and install OMPI separately on each node (preferably in the  
<br>
same filesystem location, though)
<br>
- compile and install your MPI app separately on each node (preferably  
<br>
in the same filesystem location)
<br>
<p>You *could* be seeing differences between libc on each node, etc.
<br>
<p><p><p>On Sep 17, 2008, at 11:52 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Wed, 17 Sep 2008 16:23:59 +0200
</span><br>
<span class="quotelev2">&gt;&gt; From: &quot;Sofia Aparicio Secanellas&quot; &lt;saparicio_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;0625EEFB84E04647A1930A963A8DF7E3_at_aparicio1&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; format=flowed; charset=&quot;iso-8859-1&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; 	reply-type=response
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Terry,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much for your help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Sofia,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I took your program and actually ran it successfully on my  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; systems using &gt; Open MPI r19400.  A couple questions:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 1.  Have you tried to run the program on a single node?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;     mpirun -np 2 --host 10.4.5.123 --prefix /usr/local &gt; ./ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PruebaSumaParalela.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes. In this case, the program works perfectly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 2.  Can you try and run the code the following way and is the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output &gt; different?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;     mpirun -np 2 --host 10.4.5.123,edu_at_10.4.5.126 --mca  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_preconnect_all &gt; 1 --prefix /usr/local ./PruebaSumaParalela.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The program also hangs but the output is different. In both  
</span><br>
<span class="quotelev2">&gt;&gt; computers I get the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Inicio
</span><br>
<span class="quotelev2">&gt;&gt; Inicio
</span><br>
<span class="quotelev2">&gt;&gt; totalnodes:2
</span><br>
<span class="quotelev2">&gt;&gt; mynode:0
</span><br>
<span class="quotelev2">&gt;&gt; Inicio Recv
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Ok, so it looks like rank 1 is not getting out of MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 3.  When the program hangs can you attach a debugger to one of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the &gt; processes and print out a stack?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do not know how to do that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; With Solaris, I usually do the following:
</span><br>
<span class="quotelev1">&gt; % dbx - &lt;pid of process&gt;
</span><br>
<span class="quotelev1">&gt; dbx&gt;  where
</span><br>
<span class="quotelev1">&gt; &lt;stack prints out&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 4.  What version of Open MPI are you using, on what type of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machine, using &gt; which OS?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Openmpi-1.2.2 in both computers
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In 10.4.5.123 I have:
</span><br>
<span class="quotelev2">&gt;&gt; Ubuntu Linux pichurra 2.6.22-15-generic #1 SMP Tue Jun 10 09:21:34  
</span><br>
<span class="quotelev2">&gt;&gt; UTC 2008 i686 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In edu_at_10.4.5.126 I have:
</span><br>
<span class="quotelev2">&gt;&gt; K-Ubuntu Linux hp1-Linux 2.6.20-16-generic #2 SMP Sun Sep 23  
</span><br>
<span class="quotelev2">&gt;&gt; 19:50:39 UTC 2007 i686 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the bonehead question but is edu_at_10.4.5.126 the actual  
</span><br>
<span class="quotelev1">&gt; machine name?  Is its IP address really 10.4.5.126?  Can you try  
</span><br>
<span class="quotelev1">&gt; that instead?  I would guess the issue is that the tcp btl is  
</span><br>
<span class="quotelev1">&gt; somehow not matching the two nodes as being connected to each other.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; Sofia
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6584.php">Eugene Loh: "Re: [OMPI users] Odd MPI_Bcast behavior"</a>
<li><strong>Previous message:</strong> <a href="6582.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<li><strong>In reply to:</strong> <a href="6580.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6597.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
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
