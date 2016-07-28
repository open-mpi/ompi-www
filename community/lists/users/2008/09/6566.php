<?
$subject_val = "Re: [OMPI users] Problem with MPI_Send and MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 07:24:44 2008" -->
<!-- isoreceived="20080917112444" -->
<!-- sent="Wed, 17 Sep 2008 07:24:17 -0400" -->
<!-- isosent="20080917112417" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Send and MPI_Recv" -->
<!-- id="48D0E8E1.9010906_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.1608.1221637902.16379.users_at_open-mpi.org" -->
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
<strong>Date:</strong> 2008-09-17 07:24:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6567.php">Josh Hursey: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
<li><strong>Previous message:</strong> <a href="6565.php">Christophe Spaggiari: "[OMPI users] mpirun hang"</a>
<li><strong>Maybe in reply to:</strong> <a href="6554.php">Sofia Aparicio Secanellas: "[OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6576.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6576.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6579.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sofia,
<br>
<p>I took your program and actually ran it successfully on my systems using 
<br>
Open MPI r19400.  A couple questions:
<br>
<p>1.  Have you tried to run the program on a single node?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 2 --host 10.4.5.123 --prefix /usr/local 
<br>
./PruebaSumaParalela.out
<br>
<p>2.  Can you try and run the code the following way and is the output 
<br>
different?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 2 --host 10.4.5.123,edu_at_10.4.5.126 --mca 
<br>
mpi_preconnect_all 1 --prefix /usr/local ./PruebaSumaParalela.out
<br>
<p>3.  When the program hangs can you attach a debugger to one of the 
<br>
processes and print out a stack?
<br>
<p>4.  What version of Open MPI are you using, on what type of machine, 
<br>
using which OS?
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Date: Tue, 16 Sep 2008 18:15:59 +0200
</span><br>
<span class="quotelev1">&gt; From: &quot;Sofia Aparicio Secanellas&quot; &lt;saparicio_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Problem with MPI_Send and MPI_Recv
</span><br>
<span class="quotelev1">&gt; To: &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;D99B2E131E0640C9A2A4D8A0FD2472A5_at_aparicio1&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am new using MPI. I want to run a simple program (I enclose the program) in 2 different computers. I have installed MPI in both computers. I have compiled the program using:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiCC -o PruebaSumaParalela.out PruebaSumaParalela.cpp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have copied the executable PruebaSumaParalela.out  to my /home directoy in both computers. Then I run:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --host 10.4.5.123,edu_at_10.4.5.126 --prefix /usr/local ./PruebaSumaParalela.out 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The 10.4.5.123 computer prints:
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
<span class="quotelev1">&gt; totalnodes:2
</span><br>
<span class="quotelev1">&gt; mynode:1
</span><br>
<span class="quotelev1">&gt; Inicio Send
</span><br>
<span class="quotelev1">&gt; sum:375250
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The edu_at_10.4.5.126 computer prints:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Inicio
</span><br>
<span class="quotelev1">&gt; Inicio
</span><br>
<span class="quotelev1">&gt; totalnodes:2
</span><br>
<span class="quotelev1">&gt; mynode:1
</span><br>
<span class="quotelev1">&gt; Inicio Send
</span><br>
<span class="quotelev1">&gt; sum:375250
</span><br>
<span class="quotelev1">&gt; totalnodes:2
</span><br>
<span class="quotelev1">&gt; mynode:0
</span><br>
<span class="quotelev1">&gt; Inicio Recv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But the program does not finish on any computer. It seems that the Send and Recv does not work. Master computer is waiting to receive something that the slave does not send.
</span><br>
<span class="quotelev1">&gt; Do you know what the problem could be ?
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
<span class="quotelev1">&gt; No virus found in this outgoing message
</span><br>
<span class="quotelev1">&gt; Checked by PC Tools AntiVirus (4.0.0.26 - 10.100.007).
</span><br>
<span class="quotelev1">&gt; <a href="http://www.pctools.com/free-antivirus/">http://www.pctools.com/free-antivirus/</a>
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; An embedded and charset-unspecified text was scrubbed...
</span><br>
<span class="quotelev1">&gt; Name: PruebaSumaParalela.cpp
</span><br>
<span class="quotelev1">&gt; URL: &lt;<a href="http://www.open-mpi.org/MailArchives/users/attachments/20080916/d19b7a37/attachment.ksh">http://www.open-mpi.org/MailArchives/users/attachments/20080916/d19b7a37/attachment.ksh</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6567.php">Josh Hursey: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
<li><strong>Previous message:</strong> <a href="6565.php">Christophe Spaggiari: "[OMPI users] mpirun hang"</a>
<li><strong>Maybe in reply to:</strong> <a href="6554.php">Sofia Aparicio Secanellas: "[OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6576.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6576.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6579.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
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
