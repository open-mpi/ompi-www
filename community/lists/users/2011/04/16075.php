<?
$subject_val = "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr  2 16:59:59 2011" -->
<!-- isoreceived="20110402205959" -->
<!-- sent="Sat, 02 Apr 2011 16:59:34 -0400" -->
<!-- isosent="20110402205934" -->
<!-- name="fah10_at_[hidden]" -->
<!-- email="fah10_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view" -->
<!-- id="8CDBF8FFECB974F-16B8-7F8_at_web-mmc-d04.sysops.aol.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.5.1301760024.30011.users_at_open-mpi.org" -->
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
<strong>From:</strong> <a href="mailto:fah10_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Deadlock%20with%20mpi_init_thread%20%2B%20mpi_file_set_view"><em>fah10_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-04-02 16:59:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16076.php">Laurence Marks: "[OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Previous message:</strong> <a href="16074.php">David Zhang: "Re: [OMPI users] OMPI not calling finalize error"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/16065.php">fah10_at_[hidden]: "[OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16100.php">Pascal Deveze: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>Reply:</strong> <a href="16100.php">Pascal Deveze: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>Reply:</strong> <a href="16106.php">Rob Latham: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Even inside MPICH2, I have given little attention to threadsafety and
</span><br>
<span class="quotelev1">&gt; the MPI-IO routines.  In MPICH2, each MPI_File* function grabs the big
</span><br>
<span class="quotelev1">&gt; critical section lock -- not pretty but it gets the job done.  
</span><br>
<span class="quotelev1">&gt; When ported to OpenMPI, I don't know how the locking works.
</span><br>
<span class="quotelev1">&gt; Furthermore, the MPI-IO library inside OpenMPI-1.4.3 is pretty old.  I
</span><br>
<span class="quotelev1">&gt; wonder if the locking we added over the years will help?  Can you try
</span><br>
<span class="quotelev1">&gt; openmpi-1.5.3 and report what happens?
</span><br>
<p>In Openmpi-1.5.3 with enabled threading support, the MPI-IO routines work
<br>
without any problems. However, the dead lock now occurs when calling 
<br>
mpi_finalize with the backtrace given below. This deadlock is independent
<br>
of the number of mpi tasks. 
<br>
However, the deadlock during mpi_finalize does not occur when no MPI-IO 
<br>
routines where called before. Unfortunately, the program terminates with a
<br>
segfault in this case, after returning from mpi_finalize (at the end of the program)
<br>
<p>Fabian
<br>
<p><p>opal_mutex_lock(): Resource deadlock avoided
<br>
#0  0x0012e416 in __kernel_vsyscall ()
<br>
#1  0x01035941 in raise (sig=6) at ../nptl/sysdeps/unix/sysv/linux/raise.c:64
<br>
#2  0x01038e42 in abort () at abort.c:92
<br>
#3  0x00d9da68 in ompi_attr_free_keyval (type=COMM_ATTR, key=0xbffda0e4, predefined=0 '\000') at attribute/attribute.c:656
<br>
#4  0x00dd8aa2 in PMPI_Keyval_free (keyval=0xbffda0e4) at pkeyval_free.c:52
<br>
#5  0x01bf3e6a in ADIOI_End_call (comm=0xf1c0c0, keyval=10, attribute_val=0x0, extra_state=0x0) at ad_end.c:82
<br>
#6  0x00da01bb in ompi_attr_delete. (type=UNUSED_ATTR, object=0x6, attr_hash=0x2c64, key=14285602, predefined=232 '\350', need_lock=128 '\200')
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at attribute/attribute.c:726
<br>
#7  0x00d9fb22 in ompi_attr_delete_all (type=COMM_ATTR, object=0xf1c0c0, attr_hash=0x8d0fee8) at attribute/attribute.c:1043
<br>
#8  0x00dbda65 in ompi_mpi_finalize () at runtime/ompi_mpi_finalize.c:133
<br>
#9  0x00dd12c2 in PMPI_Finalize () at pfinalize.c:46
<br>
#10 0x00d6b515 in mpi_finalize_f (ierr=0xbffda2b8) at pfinalize_f.c:62
<br>
<p><p><p>.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16075/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16076.php">Laurence Marks: "[OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Previous message:</strong> <a href="16074.php">David Zhang: "Re: [OMPI users] OMPI not calling finalize error"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/16065.php">fah10_at_[hidden]: "[OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16100.php">Pascal Deveze: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>Reply:</strong> <a href="16100.php">Pascal Deveze: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>Reply:</strong> <a href="16106.php">Rob Latham: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
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
