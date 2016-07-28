<?
$subject_val = "[OMPI users] System hang-up on MPI_Reduce";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 16:45:36 2009" -->
<!-- isoreceived="20091110214536" -->
<!-- sent="Tue, 10 Nov 2009 22:45:31 +0100" -->
<!-- isosent="20091110214531" -->
<!-- name="Glembek Ond&#197;&#153;ej" -->
<!-- email="glembek_at_[hidden]" -->
<!-- subject="[OMPI users] System hang-up on MPI_Reduce" -->
<!-- id="20091110224531.12274ulrj6ra49h7_at_email.fit.vutbr.cz" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="428810f20911101025y2d068f09k505bed762218256e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] System hang-up on MPI_Reduce<br>
<strong>From:</strong> Glembek Ond&#197;&#153;ej (<em>glembek_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 16:45:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11138.php">Tom Rosmond: "[OMPI users] running multiple executables under Torque/PBS PRO"</a>
<li><strong>Previous message:</strong> <a href="11136.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>In reply to:</strong> <a href="11132.php">amjad ali: "[OMPI users] Coding help requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11140.php">Ralph Castain: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
<li><strong>Reply:</strong> <a href="11140.php">Ralph Castain: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am using MPI_Reduce operation on 122880x400 matrix of doubles. The  
<br>
parallel job runs on 32 machines, each having different processor in  
<br>
terms of speed, but the architecture and OS is the same on all  
<br>
machines (x86_64). The task is a typical map-and-reduce, i.e. each of  
<br>
the processes collects some data, which is then summed (MPI_Reduce w.  
<br>
MPI_SUM).
<br>
<p>Having different processors, each of the jobs comes to the MPI_Reduce  
<br>
in different time.
<br>
<p>The *first problem* came when I called MPI_Reduce on the whole matrix.  
<br>
The system ended up with *MPI_ERR_OTHER error*, each time on different  
<br>
rank. I fixed this problem by chunking up the matrix into 2048  
<br>
submatrices, calling MPI_Reduce in cycle.
<br>
<p>However *second problem* arose --- MPI_Reduce hangs up... It  
<br>
apparently gets stuck in some kind of dead-lock or something like  
<br>
that. It seems that if the processors are of similar speed, the  
<br>
problem disappears, however I cannot provide this condition all the  
<br>
time.
<br>
<p>I managed to get rid of the problem (at least after few  
<br>
non-problematic iterations) by sticking MPI_Barrier before the  
<br>
MPI_Reduce line.
<br>
<p>The questions are:
<br>
<p>1) is this a usual behavior???
<br>
2) is there some kind of timeout for MPI_Reduce???
<br>
3) why does MPI_Reduce die on large amount of data if the system has  
<br>
enough address space (64 bit compilation)
<br>
<p>Thanx
<br>
Ondrej Glembek
<br>
<p><p><pre>
-- 
   Ondrej Glembek, PhD student  E-mail: glembek_at_[hidden]
   UPGM FIT VUT Brno, L226      Web:    <a href="http://www.fit.vutbr.cz/~glembek">http://www.fit.vutbr.cz/~glembek</a>
   Bozetechova 2, 612 66        Phone:  +420 54114-1292
   Brno, Czech Republic         Fax:    +420 54114-1290
   ICQ: 93233896
   GPG: C050 A6DC 7291 6776 9B69 BB11 C033 D756 6F33 DE3C
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11138.php">Tom Rosmond: "[OMPI users] running multiple executables under Torque/PBS PRO"</a>
<li><strong>Previous message:</strong> <a href="11136.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>In reply to:</strong> <a href="11132.php">amjad ali: "[OMPI users] Coding help requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11140.php">Ralph Castain: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
<li><strong>Reply:</strong> <a href="11140.php">Ralph Castain: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
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
