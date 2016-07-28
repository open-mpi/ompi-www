<?
$subject_val = "[OMPI users] Are there limitations on MPI_Alloc_mem?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 24 09:24:44 2011" -->
<!-- isoreceived="20110124142444" -->
<!-- sent="Mon, 24 Jan 2011 15:24:39 +0100" -->
<!-- isosent="20110124142439" -->
<!-- name="Staffan Ronnas" -->
<!-- email="suhbataar_at_[hidden]" -->
<!-- subject="[OMPI users] Are there limitations on MPI_Alloc_mem?" -->
<!-- id="4D3D8BA7.9010302_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Are there limitations on MPI_Alloc_mem?<br>
<strong>From:</strong> Staffan Ronnas (<em>suhbataar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-24 09:24:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15407.php">Avinash Malik: "[OMPI users] Problem with running MPI programs on machines with multiple interfaces"</a>
<li><strong>Previous message:</strong> <a href="15405.php">Reuti: "Re: [OMPI users] bash: orted: command not found despite env vars being set"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am working on a distributed array data structure built on top of the one-sided 
<br>
communication primitives MPI_Get and MPI_Put in MPI-2. I use passive target 
<br>
synchronization (MPI_Win_{lock,unlock}) in order to access remote entries in the array 
<br>
without requiring the involvement of the target process. The MPI-2 standard allows 
<br>
implementations to require that the memory used for this type of communication be 
<br>
allocated using MPI_Alloc_mem. Hence, this is what I do, and it works well on my system.
<br>
<p>I am, however, concerned that the amount of memory that can be allocated with 
<br>
MPI_Alloc_mem could be limited on specific configurations, as stated in the following 
<br>
article: &lt;<a href="http://www.cs.berkeley.edu/~bonachea/upc/mpi2.html">http://www.cs.berkeley.edu/~bonachea/upc/mpi2.html</a>&gt; . I have searched for 
<br>
information regarding this issue, but not found anything. I would therefore like to ask 
<br>
whether there are any such restrictions in OpenMPI, and in other popular implementations 
<br>
(MPICH2, HP-MPI, etc)?
<br>
<p><p>Kind regards,
<br>
<p>Staffan Ronnas
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15407.php">Avinash Malik: "[OMPI users] Problem with running MPI programs on machines with multiple interfaces"</a>
<li><strong>Previous message:</strong> <a href="15405.php">Reuti: "Re: [OMPI users] bash: orted: command not found despite env vars being set"</a>
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
