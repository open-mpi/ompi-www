<?
$subject_val = "Re: [OMPI users] Heap profiling with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  6 03:29:57 2008" -->
<!-- isoreceived="20080806072957" -->
<!-- sent="Wed, 6 Aug 2008 09:29:47 +0200" -->
<!-- isosent="20080806072947" -->
<!-- name="Jan Ploski" -->
<!-- email="Jan.Ploski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Heap profiling with OpenMPI" -->
<!-- id="OF6FA6FB24.6959ADA1-ONC125749D.0027C06C-C125749D.00292E4A_at_offis.uni-oldenburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="13290745-B09D-499D-8006-D756E6D9B5CC_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Heap profiling with OpenMPI<br>
<strong>From:</strong> Jan Ploski (<em>Jan.Ploski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-06 03:29:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6277.php">Jeffrey M Ceason: "[OMPI users] Jeffrey M Ceason is out of the office."</a>
<li><strong>Previous message:</strong> <a href="6275.php">Rainer Keller: "Re: [OMPI users] cluster LiveCD"</a>
<li><strong>In reply to:</strong> <a href="6268.php">George Bosilca: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6278.php">George Bosilca: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6278.php">George Bosilca: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
users-bounces_at_[hidden] schrieb am 08/05/2008 05:51:51 PM:
<br>
<p><span class="quotelev1">&gt; Jan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using valgrind with Open MPI on a [very] regular basis and I never 
</span><br>
<span class="quotelev1">&gt; had any problems. I usually want to know the execution path on the MPI 
</span><br>
<span class="quotelev1">&gt; applications. For this I use:
</span><br>
<span class="quotelev1">&gt; mpirun -np XX valgrind --tool=callgrind -q --log-file=some_file ./my_app
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just run your example:
</span><br>
<span class="quotelev1">&gt;      mpirun -np 2 -bynode --mca btl tcp,self valgrind --tool=massif - 
</span><br>
<span class="quotelev1">&gt; q ./NPmpi -u 4
</span><br>
<span class="quotelev1">&gt; and I got 2 non empty files in the current directory:
</span><br>
<span class="quotelev1">&gt;      bosilca_at_dancer:~/NetPIPE_3.6.2$ ls -l massif.out.*
</span><br>
<span class="quotelev1">&gt;      -rw------- 1 bosilca bosilca 140451 2008-08-05 11:57 massif.out. 
</span><br>
<span class="quotelev1">&gt; 21197
</span><br>
<span class="quotelev1">&gt;      -rw------- 1 bosilca bosilca 131471 2008-08-05 11:57 massif.out. 
</span><br>
<span class="quotelev1">&gt; 21210
</span><br>
<p>George,
<br>
<p>Thanks for the info - which version of OpenMPI, compiler and valgrind did 
<br>
you try with? I checked in two different clusters with OpenMPI 1.2.4 
<br>
compiled with two different versions of the PGI compiler and valgrind 
<br>
3.3.1, with the same bad result. I also noticed that the MPI processes 
<br>
despite of producing the expected output do not terminate cleanly. I can 
<br>
see in the stderr log (for each process):
<br>
<p>==7909== Warning: client syscall munmap tried to modify addresses 
<br>
0xD1968F92A19A72D1-0x34324E6F
<br>
==7909== 
<br>
==7909== Process terminating with default action of signal 11 (SIGSEGV)
<br>
==7909==  Access not within mapped region at address 0x8053D8000
<br>
==7909==    at 0x5284996: _int_free (in 
<br>
/opt/openmpi-1.2.4/lib/libopen-pal.so.0.0.0)
<br>
==7909==    by 0x52837A7: free (in 
<br>
/opt/openmpi-1.2.4/lib/libopen-pal.so.0.0.0)
<br>
==7909==    by 0x593C76A: free_mem (in /lib64/libc-2.4.so)
<br>
==7909==    by 0x593C3E1: __libc_freeres (in /lib64/libc-2.4.so)
<br>
==7909==    by 0x491D31C: _vgnU_freeres (vg_preloaded.c:60)
<br>
==7909==    by 0x587D1C4: exit (in /lib64/libc-2.4.so)
<br>
==7909==    by 0x586815A: (below main) (in /lib64/libc-2.4.so)
<br>
<p>That probably explains why my massif.out.* are empty (&lt;200 bytes long), 
<br>
but why do the processes crash? The same program runs ok with 
<br>
valgrind+MVAPICH or with OpenMPI without valgrind in their respective 
<br>
clusters. I experience this both with a simple test program and with a 
<br>
real application (WRF).
<br>
<p>Regards,
<br>
Jan Ploski
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6277.php">Jeffrey M Ceason: "[OMPI users] Jeffrey M Ceason is out of the office."</a>
<li><strong>Previous message:</strong> <a href="6275.php">Rainer Keller: "Re: [OMPI users] cluster LiveCD"</a>
<li><strong>In reply to:</strong> <a href="6268.php">George Bosilca: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6278.php">George Bosilca: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6278.php">George Bosilca: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
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
