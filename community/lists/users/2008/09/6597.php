<?
$subject_val = "Re: [OMPI users] Problem with MPI_Send and MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 04:20:46 2008" -->
<!-- isoreceived="20080918082046" -->
<!-- sent="Thu, 18 Sep 2008 10:19:37 +0200" -->
<!-- isosent="20080918081937" -->
<!-- name="Sofia Aparicio Secanellas" -->
<!-- email="saparicio_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Send and MPI_Recv" -->
<!-- id="E3B88B6CBFCF4F78A9F8310502FB5AD4_at_aparicio1" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Sofia Aparicio Secanellas (<em>saparicio_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-18 04:19:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6598.php">Santolo Felaco: "Re: [OMPI users] BLCR not found"</a>
<li><strong>Previous message:</strong> <a href="6596.php">Shafagh Jafer: "Re: [OMPI users] what is inside mpicc/mpic++"</a>
<li><strong>In reply to:</strong> <a href="6580.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6599.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Terry,
<br>
<p>Yes, &quot;edu&quot; is the user and 10.4.5.126 is the IP address. Because both 
<br>
computers have different usernames, I think that I should write the username 
<br>
otherwise it does not work. In fact, on the computer 10.4.5.123 I write:
<br>
<p>mpirun -np 2 --host 10.4.5.123,edu_at_10.4.5.126 --prefix /usr/local 
<br>
./PruebaSumaParalela.out
<br>
<p>and on the computer 10.4.5.126 I write:
<br>
<p>mpirun -np 2 --host sofia_at_10.4.5.123,10.4.5.126 --prefix /usr/local 
<br>
./PruebaSumaParalela.out
<br>
<p>If I try only with the IP and  I write on the computer 10.4.5.123:
<br>
<p>mpirun -np 2 --host 10.4.5.123,10.4.5.126 --prefix /usr/local 
<br>
./PruebaSumaParalela.out
<br>
<p>then the computer ask me the password of sofia_at_10.4.5.126 and then I type 
<br>
the password and does not work because the user is &quot;edu&quot; not &quot;sofia&quot;.
<br>
<p>I am trying to install dbx, if I can attach a debugger I will tell you.
<br>
<p>Thank you very much.
<br>
<p>Sofia
<br>
<p><span class="quotelev2">&gt;&gt;
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
<span class="quotelev4">&gt;&gt;&gt; &gt; I took your program and actually ran it successfully on my systems 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; using Open MPI r19400.  A couple questions:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 1.  Have you tried to run the program on a single node?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;     mpirun -np 2 --host 10.4.5.123 --prefix /usr/local 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ./PruebaSumaParalela.out
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
<span class="quotelev4">&gt;&gt;&gt; &gt; 2.  Can you try and run the code the following way and is the output 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; different?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;     mpirun -np 2 --host 10.4.5.123,edu_at_10.4.5.126 --mca 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mpi_preconnect_all 1 --prefix /usr/local ./PruebaSumaParalela.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The program also hangs but the output is different. In both computers I 
</span><br>
<span class="quotelev2">&gt;&gt; get the following:
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
<span class="quotelev4">&gt;&gt;&gt; &gt; 3.  When the program hangs can you attach a debugger to one of the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; processes and print out a stack?
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
<span class="quotelev4">&gt;&gt;&gt; &gt; 4.  What version of Open MPI are you using, on what type of machine, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; using which OS?
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
<span class="quotelev2">&gt;&gt; Ubuntu Linux pichurra 2.6.22-15-generic #1 SMP Tue Jun 10 09:21:34 UTC 
</span><br>
<span class="quotelev2">&gt;&gt; 2008 i686 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In edu_at_10.4.5.126 I have:
</span><br>
<span class="quotelev2">&gt;&gt; K-Ubuntu Linux hp1-Linux 2.6.20-16-generic #2 SMP Sun Sep 23 19:50:39 UTC 
</span><br>
<span class="quotelev2">&gt;&gt; 2007 i686 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the bonehead question but is edu_at_10.4.5.126 the actual machine 
</span><br>
<span class="quotelev1">&gt; name?  Is its IP address really 10.4.5.126?  Can you try that instead?  I 
</span><br>
<span class="quotelev1">&gt; would guess the issue is that the tcp btl is somehow not matching the two 
</span><br>
<span class="quotelev1">&gt; nodes as being connected to each other.
</span><br>
<p><p><p><p>No virus found in this outgoing message
<br>
Checked by PC Tools AntiVirus (4.0.0.26 - 10.100.007).
<br>
<a href="http://www.pctools.com/free-antivirus/">http://www.pctools.com/free-antivirus/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6598.php">Santolo Felaco: "Re: [OMPI users] BLCR not found"</a>
<li><strong>Previous message:</strong> <a href="6596.php">Shafagh Jafer: "Re: [OMPI users] what is inside mpicc/mpic++"</a>
<li><strong>In reply to:</strong> <a href="6580.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6599.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
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
