<?
$subject_val = "Re: [OMPI users] Granular locks?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  3 16:36:12 2011" -->
<!-- isoreceived="20110103213612" -->
<!-- sent="Mon, 3 Jan 2011 22:36:04 +0100" -->
<!-- isosent="20110103213604" -->
<!-- name="Gijsbert Wiesenekker" -->
<!-- email="gijsbert.wiesenekker_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Granular locks?" -->
<!-- id="F3791387-DA2E-494C-92D4-D5DD7E9790FF_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2C682023-E765-409C-9B0F-FED41379D95B_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Granular locks?<br>
<strong>From:</strong> Gijsbert Wiesenekker (<em>gijsbert.wiesenekker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-03 16:36:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15259.php">Gustavo Correa: "Re: [OMPI users] Sending large boradcasts"</a>
<li><strong>Previous message:</strong> <a href="15257.php">&#243;&#197;&#210;&#199;&#197;&#202; &#242;&#197;&#202;&#205;&#197;&#210;&#207;&#215;: "[OMPI users] Sending MPI-message from master to master"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/10/14367.php">Gijsbert Wiesenekker: "Re: [OMPI users] Granular locks?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15273.php">Gilbert Grosdidier: "Re: [OMPI users] Granular locks?"</a>
<li><strong>Reply:</strong> <a href="15273.php">Gilbert Grosdidier: "Re: [OMPI users] Granular locks?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 2, 2010, at 10:54 , Gijsbert Wiesenekker wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 1, 2010, at 23:24 , Gijsbert Wiesenekker wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a large array that is shared between two processes. One process updates array elements randomly, the other process reads array elements randomly. Most of the time these writes and reads do not overlap.
</span><br>
<span class="quotelev2">&gt;&gt; The current version of the code uses Linux shared memory with NSEMS semaphores. When array element i has to be read or updated semaphore (i % NSEMS) is used. if NSEMS = 1 the entire array will be locked which leads to unnecessary waits because reads and writes do not overlap most of the time. Performance increases as NSEMS increases, and flattens out at NSEMS = 32, at which point the code runs twice as fast when compared to NSEMS = 1.
</span><br>
<span class="quotelev2">&gt;&gt; I want to change the code to use OpenMPI RMA, but MPI_Win_lock locks the entire array, which is similar to NSEMS = 1. Is there a way to have more granular locks?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gijsbert
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, is there an MPI_Win_lock equavalent for IPC_NOWAIT?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gijsbert
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>FYI, as in my case the performance penalty by using OpenMPI RMA instead of shared memory was too large I have written a couple of wrapper functions that use OpenMPI to gracefully allocate and release shared memory:
<br>
<p>//mpi_alloc_shm is a collective operation that allocates arg_nrecords of arg_record_size each in the shared memory segment identified by arg_key with arg_nsems semaphores to control access.
<br>
//arg_key is the shared memory key.
<br>
//arg_nrecords is the number of records.
<br>
//arg_record_size is the size of a record.
<br>
//arg_default is the default record value. If not equal to NULL all arg_nrecord records will be initialized to *arg_default.
<br>
//arg_nsems is the number of semaphores that will be used to control access. If record irecord has to be updated or read, semaphore (irecord % arg_nsems) will be used for exclusive access.
<br>
//arg_mpi_id is the mpi_id of the process that will create the shared memory segment. If the mpi_id of the calling process is not equal to arg_mpi_id the process will not create but try to open it.
<br>
void mpi_alloc_shm(key_t arg_key, i64_t arg_nrecords, i64_t arg_record_size,
<br>
&nbsp;&nbsp;void *arg_default, int arg_nsems, int arg_mpi_id, MPI_Comm comm);
<br>
<p>//mpi_shm_put updates record irecord in the shared memory segment identified by shm_key with value *source.
<br>
void mpi_shm_put(key_t shm_key, void *source, i64_t irecord);
<br>
<p>//mpi_shm_get tries to read record irecord in the shared memory segment identified by shm_key using IPC_NO_WAIT to request a lock.
<br>
//FALSE is returned if the lock could not be obtained, else TRUE and the record in *dest.
<br>
//as in my case only the creator of the shared memory segment will update it, a lock is not used if the creator tries to read record irecord.
<br>
int  mpi_shm_get(key_t shm_key, i64_t irecord, void *dest);
<br>
<p>//mpi_free_shm is a collective operation that deallocates the shared memory segment identified by shm_key
<br>
void mpi_free_shm(key_t shm_key, MPI_Comm comm);
<br>
<p>Please feel free to contact me if you would like to have a copy of the source code of these routines.
<br>
<p>Regards,
<br>
Gijsbert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15259.php">Gustavo Correa: "Re: [OMPI users] Sending large boradcasts"</a>
<li><strong>Previous message:</strong> <a href="15257.php">&#243;&#197;&#210;&#199;&#197;&#202; &#242;&#197;&#202;&#205;&#197;&#210;&#207;&#215;: "[OMPI users] Sending MPI-message from master to master"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/10/14367.php">Gijsbert Wiesenekker: "Re: [OMPI users] Granular locks?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15273.php">Gilbert Grosdidier: "Re: [OMPI users] Granular locks?"</a>
<li><strong>Reply:</strong> <a href="15273.php">Gilbert Grosdidier: "Re: [OMPI users] Granular locks?"</a>
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
