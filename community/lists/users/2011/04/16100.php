<?
$subject_val = "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  4 02:40:38 2011" -->
<!-- isoreceived="20110404064038" -->
<!-- sent="Mon, 04 Apr 2011 08:40:30 +0200" -->
<!-- isosent="20110404064030" -->
<!-- name="Pascal Deveze" -->
<!-- email="Pascal.Deveze_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view" -->
<!-- id="4D9967DE.7080901_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8CDBF8FFECB974F-16B8-7F8_at_web-mmc-d04.sysops.aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view<br>
<strong>From:</strong> Pascal Deveze (<em>Pascal.Deveze_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-04 02:40:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16101.php">John Hearns: "Re: [OMPI users] WRF run on multiple Nodes"</a>
<li><strong>Previous message:</strong> <a href="16099.php">Ahsan Ali: "Re: [OMPI users] WRF run on multiple Nodes"</a>
<li><strong>In reply to:</strong> <a href="16075.php">fah10_at_[hidden]: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16103.php">fah10_at_[hidden]: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>Reply:</strong> <a href="16103.php">fah10_at_[hidden]: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could you check that your programm closes all MPI-IO files before 
<br>
calling MPI_Finalize ?
<br>
<p>fah10_at_[hidden] a &#233;crit :
<br>
<span class="quotelev2">&gt; &gt; Even inside MPICH2, I have given little attention to threadsafety and
</span><br>
<span class="quotelev2">&gt; &gt; the MPI-IO routines. In MPICH2, each MPI_File* function grabs the big
</span><br>
<span class="quotelev2">&gt; &gt; critical section lock -- not pretty but it gets the job done.
</span><br>
<span class="quotelev2">&gt; &gt; When ported to OpenMPI, I don't know how the locking works.
</span><br>
<span class="quotelev2">&gt; &gt; Furthermore, the MPI-IO library inside OpenMPI-1.4.3 is pretty old. I
</span><br>
<span class="quotelev2">&gt; &gt; wonder if the locking we added over the years will help? Can you try
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.5.3 and report what happens?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In Openmpi-1.5.3 with enabled threading support, the MPI-IO routines work
</span><br>
<span class="quotelev1">&gt; without any problems. However, the dead lock now occurs when calling
</span><br>
<span class="quotelev1">&gt; mpi_finalize with the backtrace given below. This deadlock is independent
</span><br>
<span class="quotelev1">&gt; of the number of mpi tasks.
</span><br>
<span class="quotelev1">&gt; However, the deadlock during mpi_finalize does not occur when no MPI-IO
</span><br>
<span class="quotelev1">&gt; routines where called before. Unfortunately, the program terminates with a
</span><br>
<span class="quotelev1">&gt; segfault in this case, after returning from mpi_finalize (at the end 
</span><br>
<span class="quotelev1">&gt; of the program)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fabian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_mutex_lock(): Resource deadlock avoided
</span><br>
<span class="quotelev1">&gt; #0  0x0012e416 in __kernel_vsyscall ()
</span><br>
<span class="quotelev1">&gt; #1  0x01035941 in raise (sig=6) at 
</span><br>
<span class="quotelev1">&gt; ../nptl/sysdeps/unix/sysv/linux/raise.c:64
</span><br>
<span class="quotelev1">&gt; #2  0x01038e42 in abort () at abort.c:92
</span><br>
<span class="quotelev1">&gt; #3  0x00d9da68 in ompi_attr_free_keyval (type=COMM_ATTR, 
</span><br>
<span class="quotelev1">&gt; key=0xbffda0e4, predefined=0 '\000') at attribute/attribute.c:656
</span><br>
<span class="quotelev1">&gt; #4  0x00dd8aa2 in PMPI_Keyval_free (keyval=0xbffda0e4) at 
</span><br>
<span class="quotelev1">&gt; pkeyval_free.c:52
</span><br>
<span class="quotelev1">&gt; #5  0x01bf3e6a in ADIOI_End_call (comm=0xf1c0c0, keyval=10, 
</span><br>
<span class="quotelev1">&gt; attribute_val=0x0, extra_state=0x0) at ad_end.c:82
</span><br>
<span class="quotelev1">&gt; #6  0x00da01bb in ompi_attr_delete. (type=UNUSED_ATTR, object=0x6, 
</span><br>
<span class="quotelev1">&gt; attr_hash=0x2c64, key=14285602, predefined=232 '\350', need_lock=128 
</span><br>
<span class="quotelev1">&gt; '\200')
</span><br>
<span class="quotelev1">&gt;     at attribute/attribute.c:726
</span><br>
<span class="quotelev1">&gt; #7  0x00d9fb22 in ompi_attr_delete_all (type=COMM_ATTR, 
</span><br>
<span class="quotelev1">&gt; object=0xf1c0c0, attr_hash=0x8d0fee8) at attribute/attribute.c:1043
</span><br>
<span class="quotelev1">&gt; #8  0x00dbda65 in ompi_mpi_finalize () at runtime/ompi_mpi_finalize.c:133
</span><br>
<span class="quotelev1">&gt; #9  0x00dd12c2 in PMPI_Finalize () at pfinalize.c:46
</span><br>
<span class="quotelev1">&gt; #10 0x00d6b515 in mpi_finalize_f (ierr=0xbffda2b8) at pfinalize_f.c:62
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16100/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16101.php">John Hearns: "Re: [OMPI users] WRF run on multiple Nodes"</a>
<li><strong>Previous message:</strong> <a href="16099.php">Ahsan Ali: "Re: [OMPI users] WRF run on multiple Nodes"</a>
<li><strong>In reply to:</strong> <a href="16075.php">fah10_at_[hidden]: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16103.php">fah10_at_[hidden]: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>Reply:</strong> <a href="16103.php">fah10_at_[hidden]: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
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
