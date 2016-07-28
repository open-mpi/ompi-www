<?
$subject_val = "[OMPI users] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 13 09:33:55 2014" -->
<!-- isoreceived="20140213143355" -->
<!-- sent="Thu, 13 Feb 2014 14:33:53 +0000" -->
<!-- isosent="20140213143353" -->
<!-- name="MM" -->
<!-- email="finjulhich_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No" -->
<!-- id="CADsB1iCdYFa2ZYetrY18-MamVV4gW0SftOZ3nA4qd3EhROnoJg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No<br>
<strong>From:</strong> MM (<em>finjulhich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-13 09:33:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23593.php">MM: "Re: [OMPI users] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
<li><strong>Previous message:</strong> <a href="23591.php">Javier Garcia Blas: "[OMPI users] CFP: Workshop on Enhancing Parallel Scientific Applications with Accelerated HPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23593.php">MM: "Re: [OMPI users] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
<li><strong>Reply:</strong> <a href="23593.php">MM: "Re: [OMPI users] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am running a MPI application on a single host, with a dual quadcore with
<br>
hyperthreading on. (16 OS-visible processors), but just in debug mode
<br>
(msvc2010) 32bit, with 2 mpi processes only.
<br>
<p>mpirun -mca btl_tcp_if_exclude lo -np 1 prog1.exe : -np 1 prog2.exe
<br>
<p>. when progr1.exe has 1 thread (mpi never initialized), everything works
<br>
fine.
<br>
. when progr2.exe has 2 threads (1 thread with no call to mpi functions,
<br>
and a second thread where mpi is initialized, through a default ctor of
<br>
boost::mpi::environment, I think thos means just a call to MPI_Initialize()
<br>
), ompi_info gives &quot;Threading support: No&quot;
<br>
<p>1. I start prog1, create addition thread boost::thread that handles MPI
<br>
calls.
<br>
2. proceed to a point where both thread1 and threadMPI, not concurrently,
<br>
call a function f().
<br>
f() initializes a global const std::string* X=null, to a static, this X is
<br>
visible from both threads.
<br>
<p>In fact, it appears at a certain point during a boost::mpi::broadcast,
<br>
within threadMPI, boost::mpi calls MPI_Isend (point_to_point.cpp: 53),
<br>
during this Isend, a 3rd thread (not threadMPI) is created and causes a
<br>
call to f() which doesn't see X as !=nullptr.
<br>
<p>I can see this while debugging with msvc, and stepping into MPI_Isend (i
<br>
don't have the sources for it). At that moment, suddenly a new thread is
<br>
created, and a call to f() is made.
<br>
<p>This all sounds quite nightmarish.
<br>
<p>I understand I haven't presented any specific code to receive an accurate
<br>
answer, but any help is appreciated.
<br>
<p>Regards,
<br>
<p>MM
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23592/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23593.php">MM: "Re: [OMPI users] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
<li><strong>Previous message:</strong> <a href="23591.php">Javier Garcia Blas: "[OMPI users] CFP: Workshop on Enhancing Parallel Scientific Applications with Accelerated HPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23593.php">MM: "Re: [OMPI users] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
<li><strong>Reply:</strong> <a href="23593.php">MM: "Re: [OMPI users] openmpi 1.6.2 boost 1.54 mswin7 vs2010 Threading support:No"</a>
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
