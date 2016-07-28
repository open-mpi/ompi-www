<?
$subject_val = "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 27 10:43:19 2008" -->
<!-- isoreceived="20080627144319" -->
<!-- sent="Fri, 27 Jun 2008 16:42:27 +0200" -->
<!-- isosent="20080627144227" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)" -->
<!-- id="200806271642.27606.keller_at_hlrs.de" -->
<!-- charset="iso 8859-15" -->
<!-- inreplyto="3175cc9c0806270654q61075a40p3667f25cda8a0a9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-27 10:42:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5996.php">Matt Hughes: "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<li><strong>Previous message:</strong> <a href="5994.php">Joao Marcelo: "[OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<li><strong>In reply to:</strong> <a href="5994.php">Joao Marcelo: "[OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5996.php">Matt Hughes: "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Joao,
<br>
the problem is that, You do not use the &amp;reqs[i] correctly in the MPI_Send -- 
<br>
reqs[0] will not be initialized; but wait for in MPI_Waitall...
<br>
<p>Change:
<br>
&nbsp;&nbsp;rc = MPI_Isend(&amp;a , 1 , MPI_INT , i , 0 , MPI_COMM_WORLD , &amp;reqs[i]);
<br>
to
<br>
&nbsp;&nbsp;rc = MPI_Isend(&amp;a , 1 , MPI_INT , i , 0 , MPI_COMM_WORLD , &amp;reqs[i-1]);
<br>
<p>and it will work.
<br>
<p><p>These kind of buglets can be very neatly found using the memchecker component 
<br>
using valgrind, which is implemented in the upcoming OpenMPI-1.3.
<br>
<p>Please check the FAQ on:
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=debugging">http://www.open-mpi.org/faq/?category=debugging</a>
<br>
on how to use and what errors to find...
<br>
<p><p>I attached the program with a bit of cleanups (e.g. why do You need 
<br>
MPI_ANY_SOURCE in the recv on the workers...).
<br>
<p>With best regards,
<br>
Rainer
<br>
<p><p><p><p>On Freitag, 27. Juni 2008, Joao Marcelo wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm starting to code with MPI and decided to use openmpi. I'm using
</span><br>
<span class="quotelev1">&gt; Ubuntu Linux with GCC version 4.2.3  and OpenMPI 1.2.5 (distribution
</span><br>
<span class="quotelev1">&gt; package). The output of &quot;ompi_info -- all&quot; is attached. I'm also
</span><br>
<span class="quotelev1">&gt; sending a copy of the source code I'm trying to run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I'm trying to do is selecting process with rank 0 as the main
</span><br>
<span class="quotelev1">&gt; process, which you send data to all others processes with non-blocking
</span><br>
<span class="quotelev1">&gt; MPI_Isend. After all functions calls are performed, it will wait with
</span><br>
<span class="quotelev1">&gt; MPI_Waitall() and the print a ending message. The compile command is :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicc.openmpi -fopenmp mpi.c -o mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And I'm running with :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun.openmpi -np 2 ./mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is that after the output below, the processes halt,
</span><br>
<span class="quotelev1">&gt; without the ending message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jmhal_at_galileo:~/$ mpirun.openmpi -np 2 ./mpi
</span><br>
<span class="quotelev1">&gt; Main process: 0.
</span><br>
<span class="quotelev1">&gt; 1 - received value, rc value: 100 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I start more processes, for example 3, this what I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jmhal_at_galileo:~/$ mpirun.openmpi -np 3 ./mpi
</span><br>
<span class="quotelev1">&gt; Main process: 0.
</span><br>
<span class="quotelev1">&gt; End.
</span><br>
<span class="quotelev1">&gt; 1 - received value, rc value: 100 0
</span><br>
<span class="quotelev1">&gt; 2 - received value, rc value: 100 0
</span><br>
<span class="quotelev1">&gt; [galileo:15807] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [galileo:15807] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [galileo:15807] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [galileo:15807] Failing at address: 0xd
</span><br>
<span class="quotelev1">&gt; [galileo:15807] [ 0] [0xb7f2a440]
</span><br>
<span class="quotelev1">&gt; [galileo:15807] [ 1] /usr/lib/openmpi/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; [0xb7b49da8] [galileo:15807] [ 2]
</span><br>
<span class="quotelev1">&gt; /usr/lib/libmpi.so.0(mca_pml_base_close+0x90) [0xb7efd830] [galileo:15807]
</span><br>
<span class="quotelev1">&gt; [ 3] /usr/lib/libmpi.so.0(ompi_mpi_finalize+0x1d6) [0xb7ec48d6]
</span><br>
<span class="quotelev1">&gt; [galileo:15807] [ 4] /usr/lib/libmpi.so.0(PMPI_Finalize+0x56) [0xb7ee27d6]
</span><br>
<span class="quotelev1">&gt; [galileo:15807] [ 5] ./mpi(main+0x1bc) [0x8048a60]
</span><br>
<span class="quotelev1">&gt; [galileo:15807] [ 6]
</span><br>
<span class="quotelev1">&gt; /lib/tls/i686/cmov/libc.so.6(__libc_start_main+0xe0) [0xb7c47450]
</span><br>
<span class="quotelev1">&gt; [galileo:15807] [ 7] ./mpi [0x8048841]
</span><br>
<span class="quotelev1">&gt; [galileo:15807] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; mpirun.openmpi noticed that job rank 0 with PID 15807 on node galileo
</span><br>
<span class="quotelev1">&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; 2 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which is ok since all messages were print, but what about the error
</span><br>
<span class="quotelev1">&gt; message?
</span><br>
<p><p><p><pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller   <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                          Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                  Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink

</pre>
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5995/mpi_correct.c">mpi_correct.c</a>
</ul>
<!-- attachment="mpi_correct.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5996.php">Matt Hughes: "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<li><strong>Previous message:</strong> <a href="5994.php">Joao Marcelo: "[OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<li><strong>In reply to:</strong> <a href="5994.php">Joao Marcelo: "[OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5996.php">Matt Hughes: "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
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
