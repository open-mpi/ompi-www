<?
$subject_val = "Re: [OMPI users] Problem with MPI_Send and MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 11:52:20 2008" -->
<!-- isoreceived="20080917155220" -->
<!-- sent="Wed, 17 Sep 2008 11:52:12 -0400" -->
<!-- isosent="20080917155212" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Send and MPI_Recv" -->
<!-- id="48D127AC.9030407_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.1643.1221663517.16379.users_at_open-mpi.org" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-17 11:52:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6581.php">Jeff Squyres: "Re: [OMPI users] Odd MPI_Bcast behavior"</a>
<li><strong>Previous message:</strong> <a href="6579.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Maybe in reply to:</strong> <a href="6554.php">Sofia Aparicio Secanellas: "[OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6583.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6583.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6597.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6599.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Date: Wed, 17 Sep 2008 16:23:59 +0200
</span><br>
<span class="quotelev1">&gt; From: &quot;Sofia Aparicio Secanellas&quot; &lt;saparicio_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;0625EEFB84E04647A1930A963A8DF7E3_at_aparicio1&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; format=flowed; charset=&quot;iso-8859-1&quot;;
</span><br>
<span class="quotelev1">&gt; 	reply-type=response
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Terry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Sofia,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I took your program and actually ran it successfully on my systems using 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Open MPI r19400.  A couple questions:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1.  Have you tried to run the program on a single node?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     mpirun -np 2 --host 10.4.5.123 --prefix /usr/local 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ./PruebaSumaParalela.out
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes. In this case, the program works perfectly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2.  Can you try and run the code the following way and is the output 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; different?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     mpirun -np 2 --host 10.4.5.123,edu_at_10.4.5.126 --mca mpi_preconnect_all 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1 --prefix /usr/local ./PruebaSumaParalela.out
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program also hangs but the output is different. In both computers I get 
</span><br>
<span class="quotelev1">&gt; the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Inicio
</span><br>
<span class="quotelev1">&gt; Inicio
</span><br>
<span class="quotelev1">&gt; totalnodes:2
</span><br>
<span class="quotelev1">&gt; mynode:0
</span><br>
<span class="quotelev1">&gt; Inicio Recv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Ok, so it looks like rank 1 is not getting out of MPI_Init
<br>
<span class="quotelev3">&gt;&gt; &gt; 3.  When the program hangs can you attach a debugger to one of the 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; processes and print out a stack?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not know how to do that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
With Solaris, I usually do the following:
<br>
% dbx - &lt;pid of process&gt;
<br>
dbx&gt;  where
<br>
&lt;stack prints out&gt;
<br>
<p><span class="quotelev3">&gt;&gt; &gt; 4.  What version of Open MPI are you using, on what type of machine, using 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; which OS?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Openmpi-1.2.2 in both computers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In 10.4.5.123 I have:
</span><br>
<span class="quotelev1">&gt; Ubuntu Linux pichurra 2.6.22-15-generic #1 SMP Tue Jun 10 09:21:34 UTC 2008 
</span><br>
<span class="quotelev1">&gt; i686 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In edu_at_10.4.5.126 I have:
</span><br>
<span class="quotelev1">&gt; K-Ubuntu Linux hp1-Linux 2.6.20-16-generic #2 SMP Sun Sep 23 19:50:39 UTC 
</span><br>
<span class="quotelev1">&gt; 2007 i686 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Sorry for the bonehead question but is edu_at_10.4.5.126 the actual machine 
<br>
name?  Is its IP address really 10.4.5.126?  Can you try that instead?  
<br>
I would guess the issue is that the tcp btl is somehow not matching the 
<br>
two nodes as being connected to each other.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Sofia
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6581.php">Jeff Squyres: "Re: [OMPI users] Odd MPI_Bcast behavior"</a>
<li><strong>Previous message:</strong> <a href="6579.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Maybe in reply to:</strong> <a href="6554.php">Sofia Aparicio Secanellas: "[OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6583.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6583.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6597.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6599.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
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
