<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb  6 12:14:38 2007" -->
<!-- isoreceived="20070206171438" -->
<!-- sent="Tue, 6 Feb 2007 12:14:30 -0500" -->
<!-- isosent="20070206171430" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with MPI_Init" -->
<!-- id="64C4E4FA-79E1-4F2C-8955-68E2699A540F_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="op.tnb6meny252rkl_at_daria" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-06 12:14:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2626.php">Reese Faucette: "Re: [OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
<li><strong>Previous message:</strong> <a href="2624.php">Pablo Hern&#195;&#161;n Rodr&#195;&#173;guez Zivic: "[OMPI users] Problems with MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="2624.php">Pablo Hern&#195;&#161;n Rodr&#195;&#173;guez Zivic: "[OMPI users] Problems with MPI_Init"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings Pablo.
<br>
<p>Please note that this list is for support of the Open MPI software  
<br>
package.
<br>
<p>&nbsp;From the output you included, it looks like you are not using Open  
<br>
MPI, but are rather using one of the MPICH variants (i.e., a  
<br>
different software package).  You might want to send your question to  
<br>
the MPICH mailing list -- we won't really be able to help you here.
<br>
<p>Good luck!
<br>
<p><p>On Feb 6, 2007, at 11:55 AM, Pablo Hern&#225;n Rodr&#237;guez Zivic wrote:
<br>
<p><span class="quotelev1">&gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using MPI (ParMetis) on an 64 bits machine. When I tried to  
</span><br>
<span class="quotelev1">&gt; test it using the example programs it hangs with an error message  
</span><br>
<span class="quotelev1">&gt; wich says that I must change the device to ch_p4mpd. So, once I  
</span><br>
<span class="quotelev1">&gt; change it on the file mpirun.ch4 the application starts and hangs  
</span><br>
<span class="quotelev1">&gt; (never returns) in the MPI_Init instruction. Using gdb to debug it  
</span><br>
<span class="quotelev1">&gt; I found the function that hangs: BNR_Fence. The call stack is the  
</span><br>
<span class="quotelev1">&gt; following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0x00000000004af87e in BNR_Fence ()
</span><br>
<span class="quotelev1">&gt; (gdb) up
</span><br>
<span class="quotelev1">&gt; #1  0x00000000004a56e2 in bm_start ()
</span><br>
<span class="quotelev1">&gt; (gdb) up
</span><br>
<span class="quotelev1">&gt; #2  0x00000000004a4053 in p4_initenv ()
</span><br>
<span class="quotelev1">&gt; (gdb) up
</span><br>
<span class="quotelev1">&gt; #3  0x00000000004b3bc4 in MPID_P4_Init ()
</span><br>
<span class="quotelev1">&gt; (gdb) up
</span><br>
<span class="quotelev1">&gt; #4  0x00000000004b3806 in MPID_CH_InitMsgPass ()
</span><br>
<span class="quotelev1">&gt; (gdb) up
</span><br>
<span class="quotelev1">&gt; #5  0x00000000004b1125 in MPID_Init ()
</span><br>
<span class="quotelev1">&gt; (gdb) up
</span><br>
<span class="quotelev1">&gt; #6  0x000000000048606d in MPIR_Init ()
</span><br>
<span class="quotelev1">&gt; (gdb) up
</span><br>
<span class="quotelev1">&gt; #7  0x0000000000485e6d in PMPI_Init ()
</span><br>
<span class="quotelev1">&gt; (gdb) up
</span><br>
<span class="quotelev1">&gt; #8  0x0000000000406066 in main ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone have a clue of what's going on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, thank you all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pablo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 		
</span><br>
<span class="quotelev1">&gt; __________________________________________________Pregunt&#225;.  
</span><br>
<span class="quotelev1">&gt; Respond&#233;. Descubr&#237;.Todo lo que quer&#237;as saber, y lo que ni  
</span><br>
<span class="quotelev1">&gt; imaginabas,est&#225; en Yahoo! Respuestas (Beta).&#161;Probalo ya!http:// 
</span><br>
<span class="quotelev1">&gt; www.yahoo.com.ar/respuestas
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
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2626.php">Reese Faucette: "Re: [OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
<li><strong>Previous message:</strong> <a href="2624.php">Pablo Hern&#195;&#161;n Rodr&#195;&#173;guez Zivic: "[OMPI users] Problems with MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="2624.php">Pablo Hern&#195;&#161;n Rodr&#195;&#173;guez Zivic: "[OMPI users] Problems with MPI_Init"</a>
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
