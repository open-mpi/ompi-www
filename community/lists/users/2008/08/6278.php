<?
$subject_val = "Re: [OMPI users] Heap profiling with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  6 05:12:36 2008" -->
<!-- isoreceived="20080806091236" -->
<!-- sent="Wed, 6 Aug 2008 11:12:20 +0200" -->
<!-- isosent="20080806091220" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Heap profiling with OpenMPI" -->
<!-- id="15344E3D-655A-47E0-8989-7C4EF8B53D7B_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF6FA6FB24.6959ADA1-ONC125749D.0027C06C-C125749D.00292E4A_at_offis.uni-oldenburg.de" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-06 05:12:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6279.php">STUART PURVES: "[OMPI users] Failure to include Myrinet MX in install"</a>
<li><strong>Previous message:</strong> <a href="6277.php">Jeffrey M Ceason: "[OMPI users] Jeffrey M Ceason is out of the office."</a>
<li><strong>In reply to:</strong> <a href="6276.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6281.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6281.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jan,
<br>
<p>I'm using the latest of Open MPI compiled with debug turned on, and  
<br>
valgrind 3.3.0. From your trace it looks like there is a conflict  
<br>
between two memory managers. I'm not having the same problem as I  
<br>
disable the Open MPI memory manager on my builds (configure option -- 
<br>
without-memory-manager).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 6, 2008, at 9:29 AM, Jan Ploski wrote:
<br>
<p><span class="quotelev1">&gt; users-bounces_at_[hidden] schrieb am 08/05/2008 05:51:51 PM:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jan,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using valgrind with Open MPI on a [very] regular basis and I  
</span><br>
<span class="quotelev2">&gt;&gt; never
</span><br>
<span class="quotelev2">&gt;&gt; had any problems. I usually want to know the execution path on the  
</span><br>
<span class="quotelev2">&gt;&gt; MPI
</span><br>
<span class="quotelev2">&gt;&gt; applications. For this I use:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np XX valgrind --tool=callgrind -q --log-file=some_file ./ 
</span><br>
<span class="quotelev2">&gt;&gt; my_app
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just run your example:
</span><br>
<span class="quotelev2">&gt;&gt;     mpirun -np 2 -bynode --mca btl tcp,self valgrind --tool=massif -
</span><br>
<span class="quotelev2">&gt;&gt; q ./NPmpi -u 4
</span><br>
<span class="quotelev2">&gt;&gt; and I got 2 non empty files in the current directory:
</span><br>
<span class="quotelev2">&gt;&gt;     bosilca_at_dancer:~/NetPIPE_3.6.2$ ls -l massif.out.*
</span><br>
<span class="quotelev2">&gt;&gt;     -rw------- 1 bosilca bosilca 140451 2008-08-05 11:57 massif.out.
</span><br>
<span class="quotelev2">&gt;&gt; 21197
</span><br>
<span class="quotelev2">&gt;&gt;     -rw------- 1 bosilca bosilca 131471 2008-08-05 11:57 massif.out.
</span><br>
<span class="quotelev2">&gt;&gt; 21210
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the info - which version of OpenMPI, compiler and  
</span><br>
<span class="quotelev1">&gt; valgrind did
</span><br>
<span class="quotelev1">&gt; you try with? I checked in two different clusters with OpenMPI 1.2.4
</span><br>
<span class="quotelev1">&gt; compiled with two different versions of the PGI compiler and valgrind
</span><br>
<span class="quotelev1">&gt; 3.3.1, with the same bad result. I also noticed that the MPI processes
</span><br>
<span class="quotelev1">&gt; despite of producing the expected output do not terminate cleanly. I  
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev1">&gt; see in the stderr log (for each process):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==7909== Warning: client syscall munmap tried to modify addresses
</span><br>
<span class="quotelev1">&gt; 0xD1968F92A19A72D1-0x34324E6F
</span><br>
<span class="quotelev1">&gt; ==7909==
</span><br>
<span class="quotelev1">&gt; ==7909== Process terminating with default action of signal 11  
</span><br>
<span class="quotelev1">&gt; (SIGSEGV)
</span><br>
<span class="quotelev1">&gt; ==7909==  Access not within mapped region at address 0x8053D8000
</span><br>
<span class="quotelev1">&gt; ==7909==    at 0x5284996: _int_free (in
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.2.4/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==7909==    by 0x52837A7: free (in
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.2.4/lib/libopen-pal.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==7909==    by 0x593C76A: free_mem (in /lib64/libc-2.4.so)
</span><br>
<span class="quotelev1">&gt; ==7909==    by 0x593C3E1: __libc_freeres (in /lib64/libc-2.4.so)
</span><br>
<span class="quotelev1">&gt; ==7909==    by 0x491D31C: _vgnU_freeres (vg_preloaded.c:60)
</span><br>
<span class="quotelev1">&gt; ==7909==    by 0x587D1C4: exit (in /lib64/libc-2.4.so)
</span><br>
<span class="quotelev1">&gt; ==7909==    by 0x586815A: (below main) (in /lib64/libc-2.4.so)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That probably explains why my massif.out.* are empty (&lt;200 bytes  
</span><br>
<span class="quotelev1">&gt; long),
</span><br>
<span class="quotelev1">&gt; but why do the processes crash? The same program runs ok with
</span><br>
<span class="quotelev1">&gt; valgrind+MVAPICH or with OpenMPI without valgrind in their respective
</span><br>
<span class="quotelev1">&gt; clusters. I experience this both with a simple test program and with a
</span><br>
<span class="quotelev1">&gt; real application (WRF).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Jan Ploski
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6278/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6279.php">STUART PURVES: "[OMPI users] Failure to include Myrinet MX in install"</a>
<li><strong>Previous message:</strong> <a href="6277.php">Jeffrey M Ceason: "[OMPI users] Jeffrey M Ceason is out of the office."</a>
<li><strong>In reply to:</strong> <a href="6276.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6281.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6281.php">Jan Ploski: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
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
