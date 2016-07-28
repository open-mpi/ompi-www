<?
$subject_val = "[OMPI users] Problem with MPI_Send and MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 16 12:16:20 2008" -->
<!-- isoreceived="20080916161620" -->
<!-- sent="Tue, 16 Sep 2008 18:15:59 +0200" -->
<!-- isosent="20080916161559" -->
<!-- name="Sofia Aparicio Secanellas" -->
<!-- email="saparicio_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with MPI_Send and MPI_Recv" -->
<!-- id="D99B2E131E0640C9A2A4D8A0FD2472A5_at_aparicio1" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Problem with MPI_Send and MPI_Recv<br>
<strong>From:</strong> Sofia Aparicio Secanellas (<em>saparicio_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-16 12:15:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6555.php">Gus Correa: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6553.php">Robert Latham: "Re: [OMPI users] bug in MPI_File_get_position_shared ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6555.php">Gus Correa: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6555.php">Gus Correa: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Maybe reply:</strong> <a href="6566.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Maybe reply:</strong> <a href="6580.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Maybe reply:</strong> <a href="6600.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Maybe reply:</strong> <a href="6605.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Maybe reply:</strong> <a href="6613.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Maybe reply:</strong> <a href="6694.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Maybe reply:</strong> <a href="6699.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Maybe reply:</strong> <a href="6703.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am new using MPI. I want to run a simple program (I enclose the program) in 2 different computers. I have installed MPI in both computers. I have compiled the program using:
<br>
<p>mpiCC -o PruebaSumaParalela.out PruebaSumaParalela.cpp
<br>
<p>I have copied the executable PruebaSumaParalela.out  to my /home directoy in both computers. Then I run:
<br>
<p>mpirun -np 2 --host 10.4.5.123,edu_at_10.4.5.126 --prefix /usr/local ./PruebaSumaParalela.out 
<br>
<p>The 10.4.5.123 computer prints:
<br>
<p>Inicio
<br>
Inicio
<br>
totalnodes:2
<br>
mynode:0
<br>
Inicio Recv
<br>
totalnodes:2
<br>
mynode:1
<br>
Inicio Send
<br>
sum:375250
<br>
<p>The edu_at_10.4.5.126 computer prints:
<br>
<p>Inicio
<br>
Inicio
<br>
totalnodes:2
<br>
mynode:1
<br>
Inicio Send
<br>
sum:375250
<br>
totalnodes:2
<br>
mynode:0
<br>
Inicio Recv
<br>
<p>But the program does not finish on any computer. It seems that the Send and Recv does not work. Master computer is waiting to receive something that the slave does not send.
<br>
Do you know what the problem could be ?
<br>
<p>Thank you very much.
<br>
<p>Sofia
<br>
<p>No virus found in this outgoing message
<br>
Checked by PC Tools AntiVirus (4.0.0.26 - 10.100.007).
<br>
<a href="http://www.pctools.com/free-antivirus/">http://www.pctools.com/free-antivirus/</a>
<br>
<p><p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6554/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6554/PruebaSumaParalela.cpp">PruebaSumaParalela.cpp</a>
</ul>
<!-- attachment="PruebaSumaParalela.cpp" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6555.php">Gus Correa: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6553.php">Robert Latham: "Re: [OMPI users] bug in MPI_File_get_position_shared ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6555.php">Gus Correa: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6555.php">Gus Correa: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Maybe reply:</strong> <a href="6566.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Maybe reply:</strong> <a href="6580.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Maybe reply:</strong> <a href="6600.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Maybe reply:</strong> <a href="6605.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Maybe reply:</strong> <a href="6613.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Maybe reply:</strong> <a href="6694.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Maybe reply:</strong> <a href="6699.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Maybe reply:</strong> <a href="6703.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
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
