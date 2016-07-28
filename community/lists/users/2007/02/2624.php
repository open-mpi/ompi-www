<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb  6 11:55:42 2007" -->
<!-- isoreceived="20070206165542" -->
<!-- sent="Tue, 06 Feb 2007 13:55:16 -0300" -->
<!-- isosent="20070206165516" -->
<!-- name="Pablo Hern&#195;&#161;n Rodr&#195;&#173;guez Zivic" -->
<!-- email="hackgram_at_[hidden]" -->
<!-- subject="[OMPI users] Problems with MPI_Init" -->
<!-- id="op.tnb6meny252rkl_at_daria" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Pablo Hern&#195;&#161;n Rodr&#195;&#173;guez Zivic (<em>hackgram_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-06 11:55:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2625.php">Jeff Squyres: "Re: [OMPI users] Problems with MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="2623.php">Alex Tumanov: "Re: [OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2625.php">Jeff Squyres: "Re: [OMPI users] Problems with MPI_Init"</a>
<li><strong>Reply:</strong> <a href="2625.php">Jeff Squyres: "Re: [OMPI users] Problems with MPI_Init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>I'm using MPI (ParMetis) on an 64 bits machine. When I tried to test it  
<br>
using the example programs it hangs with an error message wich says that I  
<br>
must change the device to ch_p4mpd. So, once I change it on the file  
<br>
mpirun.ch4 the application starts and hangs (never returns) in the  
<br>
MPI_Init instruction. Using gdb to debug it I found the function that  
<br>
hangs: BNR_Fence. The call stack is the following:
<br>
<p>0x00000000004af87e in BNR_Fence ()
<br>
(gdb) up
<br>
#1  0x00000000004a56e2 in bm_start ()
<br>
(gdb) up
<br>
#2  0x00000000004a4053 in p4_initenv ()
<br>
(gdb) up
<br>
#3  0x00000000004b3bc4 in MPID_P4_Init ()
<br>
(gdb) up
<br>
#4  0x00000000004b3806 in MPID_CH_InitMsgPass ()
<br>
(gdb) up
<br>
#5  0x00000000004b1125 in MPID_Init ()
<br>
(gdb) up
<br>
#6  0x000000000048606d in MPIR_Init ()
<br>
(gdb) up
<br>
#7  0x0000000000485e6d in PMPI_Init ()
<br>
(gdb) up
<br>
#8  0x0000000000406066 in main ()
<br>
<p><p><p>Does anyone have a clue of what's going on?
<br>
<p>Anyway, thank you all.
<br>
<p>Pablo
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
__________________________________________________ 
<br>
Pregunt&#225;. Respond&#233;. Descubr&#237;. 
<br>
Todo lo que quer&#237;as saber, y lo que ni imaginabas, 
<br>
est&#225; en Yahoo! Respuestas (Beta). 
<br>
&#161;Probalo ya! 
<br>
<a href="http://www.yahoo.com.ar/respuestas">http://www.yahoo.com.ar/respuestas</a> 
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2625.php">Jeff Squyres: "Re: [OMPI users] Problems with MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="2623.php">Alex Tumanov: "Re: [OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2625.php">Jeff Squyres: "Re: [OMPI users] Problems with MPI_Init"</a>
<li><strong>Reply:</strong> <a href="2625.php">Jeff Squyres: "Re: [OMPI users] Problems with MPI_Init"</a>
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
