<?
$subject_val = "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  4 10:28:27 2011" -->
<!-- isoreceived="20110404142827" -->
<!-- sent="Mon, 4 Apr 2011 08:28:18 -0600" -->
<!-- isosent="20110404142818" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view" -->
<!-- id="6F1039FD-3ECA-4329-B6E2-A0777D2CCD8F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110404141840.GC16772_at_mcs.anl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-04 10:28:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16109.php">Borenstein, Bernard S: "[OMPI users] question about running openmpi with different interconnects"</a>
<li><strong>Previous message:</strong> <a href="16107.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16106.php">Rob Latham: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16119.php">Dave Goodell: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>Reply:</strong> <a href="16119.php">Dave Goodell: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 4, 2011, at 8:18 AM, Rob Latham wrote:
<br>
<p><span class="quotelev1">&gt; On Sat, Apr 02, 2011 at 04:59:34PM -0400, fah10_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; opal_mutex_lock(): Resource deadlock avoided
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x0012e416 in __kernel_vsyscall ()
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x01035941 in raise (sig=6) at ../nptl/sysdeps/unix/sysv/linux/raise.c:64
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x01038e42 in abort () at abort.c:92
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00d9da68 in ompi_attr_free_keyval (type=COMM_ATTR, key=0xbffda0e4, predefined=0 '\000') at attribute/attribute.c:656
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00dd8aa2 in PMPI_Keyval_free (keyval=0xbffda0e4) at pkeyval_free.c:52
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x01bf3e6a in ADIOI_End_call (comm=0xf1c0c0, keyval=10, attribute_val=0x0, extra_state=0x0) at ad_end.c:82
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00da01bb in ompi_attr_delete. (type=UNUSED_ATTR, object=0x6, attr_hash=0x2c64, key=14285602, predefined=232 '\350', need_lock=128 '\200') at attribute/attribute.c:726
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x00d9fb22 in ompi_attr_delete_all (type=COMM_ATTR, object=0xf1c0c0, attr_hash=0x8d0fee8) at attribute/attribute.c:1043
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x00dbda65 in ompi_mpi_finalize () at runtime/ompi_mpi_finalize.c:133
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x00dd12c2 in PMPI_Finalize () at pfinalize.c:46
</span><br>
<span class="quotelev2">&gt;&gt; #10 0x00d6b515 in mpi_finalize_f (ierr=0xbffda2b8) at pfinalize_f.c:62
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess I need some OpenMPI eyeballs on this...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ROMIO hooks into the attribute keyval deletion mechanism to clean up
</span><br>
<span class="quotelev1">&gt; the internal data structures it has allocated.  I suppose since this
</span><br>
<span class="quotelev1">&gt; is MPI_Finalize, we could just leave those internal data structures
</span><br>
<span class="quotelev1">&gt; alone and let the OS deal with it. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I see happening here is the OpenMPI finalize routine is deleting
</span><br>
<span class="quotelev1">&gt; attributes.   one of those attributes is ROMIO's, which in turn tries
</span><br>
<span class="quotelev1">&gt; to free keyvals.  Is the deadlock that noting &quot;under&quot; ompi_attr_delete
</span><br>
<span class="quotelev1">&gt; can itself call ompi_* routines? (as ROMIO triggers a call to
</span><br>
<span class="quotelev1">&gt; ompi_attr_free_keyval) ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's where ROMIO sets up the keyval and the delete handler:
</span><br>
<span class="quotelev1">&gt; <a href="https://trac.mcs.anl.gov/projects/mpich2/browser/mpich2/trunk/src/mpi/romio/mpi-io/mpir-mpioinit.c#L39">https://trac.mcs.anl.gov/projects/mpich2/browser/mpich2/trunk/src/mpi/romio/mpi-io/mpir-mpioinit.c#L39</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that routine gets called upon any &quot;MPI-IO entry point&quot; (open, delete,
</span><br>
<span class="quotelev1">&gt; register-datarep).  The keyvals help ensure that ROMIO's internal
</span><br>
<span class="quotelev1">&gt; structures get initialized exactly once, and the delete hooks help us
</span><br>
<span class="quotelev1">&gt; be good citizens and clean up on exit. 
</span><br>
<p>FWIW: his trace shows that OMPI incorrectly attempts to acquire a thread lock that has already been locked. This occurs  in OMPI's attribute code, probably surrounding the call to your code.
<br>
<p>In other words, it looks to me like the problem is on our side, not yours. Jeff is the one who generally handles the attribute code, though, so I'll ping his eyeballs :-)
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Rob Latham
</span><br>
<span class="quotelev1">&gt; Mathematics and Computer Science Division
</span><br>
<span class="quotelev1">&gt; Argonne National Lab, IL USA
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16109.php">Borenstein, Bernard S: "[OMPI users] question about running openmpi with different interconnects"</a>
<li><strong>Previous message:</strong> <a href="16107.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16106.php">Rob Latham: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16119.php">Dave Goodell: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>Reply:</strong> <a href="16119.php">Dave Goodell: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
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
