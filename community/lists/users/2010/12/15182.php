<?
$subject_val = "[OMPI users] [SPAM:### 89%] OpenMPI LAM ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 17 04:49:08 2010" -->
<!-- isoreceived="20101217094908" -->
<!-- sent="Fri, 17 Dec 2010 10:47:52 +0100" -->
<!-- isosent="20101217094752" -->
<!-- name="GUBERNATIS Pierre 164999" -->
<!-- email="pierre.gubernatis_at_[hidden]" -->
<!-- subject="[OMPI users] [SPAM:### 89%] OpenMPI LAM ?" -->
<!-- id="8727_1292579347_oBH9n2N2025346_B898EB4A4F8E354A80061DC158D05BB78BC2CF_at_TOURVES.intra.cea.fr" -->
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
<strong>Subject:</strong> [OMPI users] [SPAM:### 89%] OpenMPI LAM ?<br>
<strong>From:</strong> GUBERNATIS Pierre 164999 (<em>pierre.gubernatis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-17 04:47:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15183.php">Ricardo Reis: "Re: [OMPI users] [SPAM:### 89%] OpenMPI LAM ?"</a>
<li><strong>Previous message:</strong> <a href="15181.php">Matthias Jurenz: "Re: [OMPI users] [SPAM:### 85%] Re: [SPAM:### 83%] problem when compiling ompenmpiV1.5.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15183.php">Ricardo Reis: "Re: [OMPI users] [SPAM:### 89%] OpenMPI LAM ?"</a>
<li><strong>Reply:</strong> <a href="15183.php">Ricardo Reis: "Re: [OMPI users] [SPAM:### 89%] OpenMPI LAM ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am new at Openmpi : I used Lam so far and we have just installed OpenMpi.
<br>
<p>When I run &quot;mpirun -app schema&quot; , OpenMpi complains about a missing daemon lamd, whereas the documentations says there is no need to run lamboot anymore.
<br>
<p>&nbsp;
<br>
<p>To make sure :
<br>
<p>&nbsp;
<br>
<p>$ which mpirun
<br>
<p>/export/opt/OPEN-MPI/1.4.3/bin/mpirun
<br>
<p>&#201;couter
<br>
<p>Lire phon&#233;tiquement
<br>
<p>&nbsp;
<br>
<p>Dictionnaire - Afficher le dictionnaire &lt;<a href="http://www.google.fr/dictionary?source=translation&amp;hl=fr&amp;q=&amp;langpair=en|fr">http://www.google.fr/dictionary?source=translation&amp;hl=fr&amp;q=&amp;langpair=en|fr</a>&gt; 
<br>
<p>1.	verbe 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.	ouvrir
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.	s'ouvrir
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.	d&#233;couvrir
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.	d&#233;gager
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.	s'&#233;panouir
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.	commencer
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7.	percer
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8.	d&#233;plier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9.	&#233;clore
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10.	d&#233;faire
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11.	d&#233;boutonner
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12.	d&#233;baucher
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13.	pratiquer
<br>
<p>2.	adjectif 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.	ouvert
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.	libre
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.	franc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.	d&#233;bouch&#233;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.	g&#233;n&#233;reux
<br>
<p>&nbsp;
<br>
<p>$ more schema
<br>
<p>-np 1 -wd /Master/Path Master
<br>
<p>-np 1 -wd /Slave1/Path ../Slave
<br>
<p>-np 1 -wd /Slave2/Path ../Slave
<br>
<p>&nbsp;
<br>
<p>$mpirun -app schema
<br>
<p>-----------------------------------------------------------------------------
<br>
<p>&nbsp;
<br>
<p>It seems that there is no lamd running on the host paola20.
<br>
<p>&nbsp;
<br>
<p>This indicates that the LAM/MPI runtime environment is not operating.
<br>
<p>The LAM/MPI runtime environment is necessary for MPI programs to run
<br>
<p>(the MPI program tired to invoke the &quot;MPI_Init&quot; function).
<br>
<p>&nbsp;
<br>
<p>Please run the &quot;lamboot&quot; command the start the LAM/MPI runtime
<br>
<p>environment.  See the LAM/MPI documentation for how to invoke
<br>
<p>&quot;lamboot&quot; across multiple machines.
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>And, if I run 'lamboot', it works !
<br>
<p>&nbsp;
<br>
<p>Would you know why ?
<br>
<p>thanks
<br>
<p>Pierre 
<br>
<p>&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15182/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15183.php">Ricardo Reis: "Re: [OMPI users] [SPAM:### 89%] OpenMPI LAM ?"</a>
<li><strong>Previous message:</strong> <a href="15181.php">Matthias Jurenz: "Re: [OMPI users] [SPAM:### 85%] Re: [SPAM:### 83%] problem when compiling ompenmpiV1.5.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15183.php">Ricardo Reis: "Re: [OMPI users] [SPAM:### 89%] OpenMPI LAM ?"</a>
<li><strong>Reply:</strong> <a href="15183.php">Ricardo Reis: "Re: [OMPI users] [SPAM:### 89%] OpenMPI LAM ?"</a>
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
