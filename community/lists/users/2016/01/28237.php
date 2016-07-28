<?
$subject_val = "[OMPI users] Singleton process spawns additional thread";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  7 07:09:47 2016" -->
<!-- isoreceived="20160107120947" -->
<!-- sent="Thu, 7 Jan 2016 13:09:43 +0100" -->
<!-- isosent="20160107120943" -->
<!-- name="Au Eelis" -->
<!-- email="aueelis_at_[hidden]" -->
<!-- subject="[OMPI users] Singleton process spawns additional thread" -->
<!-- id="568E5587.4030003_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Singleton process spawns additional thread<br>
<strong>From:</strong> Au Eelis (<em>aueelis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-07 07:09:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28238.php">Sasso, John (GE Power, Non-GE): "Re: [OMPI users] Singleton process spawns additional thread"</a>
<li><strong>Previous message:</strong> <a href="28236.php">Siegmar Gross: "[OMPI users] warnings building openmpi-v2.x-dev-950-g995993b"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28238.php">Sasso, John (GE Power, Non-GE): "Re: [OMPI users] Singleton process spawns additional thread"</a>
<li><strong>Reply:</strong> <a href="28238.php">Sasso, John (GE Power, Non-GE): "Re: [OMPI users] Singleton process spawns additional thread"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>I have a weird problem with executing a singleton OpenMPI program, where 
<br>
an additional thread causes full load, while the master thread performs 
<br>
the actual calculations.
<br>
<p>In contrast, executing &quot;mpirun -np 1 [executable]&quot; performs the same 
<br>
calculation at the same speed but the additional thread is idling.
<br>
<p>In my understanding, both calculations should behave in the same way 
<br>
(i.e., one working thread) for a program which is simply moving some 
<br>
data around (mainly some MPI_BCAST and MPI_GATHER commands).
<br>
<p>I could observe this behaviour in OpenMPI 1.10.1 with ifort 16.0.1 and 
<br>
gfortran 5.3.0. I could create a minimal working example, which is 
<br>
appended to this mail.
<br>
<p>Am I missing something?
<br>
<p>Best regards,
<br>
Stefan
<br>
<p>-----
<br>
<p>MWE: Compile this with &quot;mpifort main.f90&quot;. When executing with 
<br>
&quot;./a.out&quot;, there is thread wasting cycles, while the master thread waits 
<br>
for input. When executing with &quot;mpirun -np 1 ./a.out&quot; this thread is idling.
<br>
<p>program main
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use mpi_f08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: ierror,rank
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Init(ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Comm_Rank(MPI_Comm_World,rank,ierror)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! let master thread wait on [RETURN]-key
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;read(*,*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end if
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) rank
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_barrier(mpi_comm_world, ierror)
<br>
end program
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28238.php">Sasso, John (GE Power, Non-GE): "Re: [OMPI users] Singleton process spawns additional thread"</a>
<li><strong>Previous message:</strong> <a href="28236.php">Siegmar Gross: "[OMPI users] warnings building openmpi-v2.x-dev-950-g995993b"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28238.php">Sasso, John (GE Power, Non-GE): "Re: [OMPI users] Singleton process spawns additional thread"</a>
<li><strong>Reply:</strong> <a href="28238.php">Sasso, John (GE Power, Non-GE): "Re: [OMPI users] Singleton process spawns additional thread"</a>
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
