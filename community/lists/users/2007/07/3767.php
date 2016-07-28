<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 26 01:49:05 2007" -->
<!-- isoreceived="20070726054905" -->
<!-- sent="Thu, 26 Jul 2007 07:48:54 +0200" -->
<!-- isosent="20070726054854" -->
<!-- name="Per Madsen" -->
<!-- email="Per.Madsen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems starting mpi program via a system call from within a mpi program" -->
<!-- id="EA09C4B2B0F16E44B8F3311629493C0DCCD0A3_at_DJFPOST01.djf.agrsci.dk" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] Problems starting mpi program via a system call from within a mpi program" -->
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
<strong>From:</strong> Per Madsen (<em>Per.Madsen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-26 01:48:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3768.php">Jeff Squyres: "Re: [OMPI users] Problems starting mpi program via a system call from within a mpi program"</a>
<li><strong>Previous message:</strong> <a href="3766.php">Ricardo Reis: "Re: [OMPI users] open-mpi 1.2.3 on Linux ia32 and Intel 10.0.25"</a>
<li><strong>Maybe in reply to:</strong> <a href="3732.php">Per Madsen: "[OMPI users] Problems starting mpi program via a system call from within a mpi program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3768.php">Jeff Squyres: "Re: [OMPI users] Problems starting mpi program via a system call from within a mpi program"</a>
<li><strong>Reply:</strong> <a href="3768.php">Jeff Squyres: "Re: [OMPI users] Problems starting mpi program via a system call from within a mpi program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I have found a solution to my problem with executing a MPI program from within a MPI program via a system call.
<br>
<p>A related problem has been discussed in the thread: &#147;Recursive use of orterun&#148;.
<br>
<p>The problem was the setup and export of environment variables.
<br>
<p>I solved my problem by adding the following to the script starting the second MPI program:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for i in $(env | grep OMPI_MCA |sed 's/=/ /' | awk '{print $1}')
<br>
&nbsp;&nbsp;&nbsp;&nbsp;do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset $i
<br>
&nbsp;&nbsp;&nbsp;&nbsp;done
<br>
<p>This clear the environment for the child process for all variables with name starting with &#147;OMPI_NCA&#148;
<br>
<p>Regards 
<br>
Per Madsen 
<br>
Senior scientist 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AARHUS UNIVERSITET / UNIVERSITY OF AARHUS 
<br>
Det Jordbrugsvidenskabelige Fakultet / Faculty of Agricultural Sciences 
<br>
Forskningscenter Foulum / Research Centre Foulum 
<br>
Genetik og Bioteknologi / Dept. of Genetics and Biotechnology 
<br>
Blichers All&#233; 20, P.O. BOX 50 
<br>
DK-8830 Tjele 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3768.php">Jeff Squyres: "Re: [OMPI users] Problems starting mpi program via a system call from within a mpi program"</a>
<li><strong>Previous message:</strong> <a href="3766.php">Ricardo Reis: "Re: [OMPI users] open-mpi 1.2.3 on Linux ia32 and Intel 10.0.25"</a>
<li><strong>Maybe in reply to:</strong> <a href="3732.php">Per Madsen: "[OMPI users] Problems starting mpi program via a system call from within a mpi program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3768.php">Jeff Squyres: "Re: [OMPI users] Problems starting mpi program via a system call from within a mpi program"</a>
<li><strong>Reply:</strong> <a href="3768.php">Jeff Squyres: "Re: [OMPI users] Problems starting mpi program via a system call from within a mpi program"</a>
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
