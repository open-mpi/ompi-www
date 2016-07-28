<?
$subject_val = "Re: [OMPI users] Granular locks?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  5 18:14:11 2011" -->
<!-- isoreceived="20110105231411" -->
<!-- sent="Thu, 6 Jan 2011 02:18:15 +0300" -->
<!-- isosent="20110105231815" -->
<!-- name="Alex A. Granovsky" -->
<!-- email="gran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Granular locks?" -->
<!-- id="01c101cbad2e$d500ee60$3145efc3_at_alexg" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4D24D8C9.2040407_at_cern.ch" -->
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
<strong>From:</strong> Alex A. Granovsky (<em>gran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-05 18:18:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15275.php">Kristian Medri: "[OMPI users] Duplicate independent processes"</a>
<li><strong>Previous message:</strong> <a href="15273.php">Gilbert Grosdidier: "Re: [OMPI users] Granular locks?"</a>
<li><strong>In reply to:</strong> <a href="15273.php">Gilbert Grosdidier: "Re: [OMPI users] Granular locks?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/10/14374.php">Barrett, Brian W: "Re: [OMPI users] Granular locks?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilbert,
<br>
<p>why not to use architecture-specific atomic updates writing to the array?
<br>
In this case, you wouldn't need anything special reading from array at all.
<br>
Moreover, this model looks like a good candidate to be implemented as
<br>
multithreaded application, rather than two separate processes sharing
<br>
segment of memory.
<br>
<p>regards,
<br>
Alex Granovsky
<br>
<p>----- Original Message -----
<br>
From: &quot;Gilbert Grosdidier&quot; &lt;Gilbert.Grosdidier_at_[hidden]&gt;
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Sent: Wednesday, January 05, 2011 11:47 PM
<br>
Subject: Re: [OMPI users] Granular locks?
<br>
<p><p>Hi Gijsbert,
<br>
<p>&nbsp;&nbsp;Thank you for this proposal, I think it could be useful for our LQCD
<br>
application,
<br>
at least for further evaluations. How could I get to the code, please ?
<br>
<p>&nbsp;&nbsp;Thanks in advance for your help,   Best,   G.
<br>
<p><p><p>Le 03/01/2011 22:36, Gijsbert Wiesenekker a &#233;crit :
<br>
<span class="quotelev1">&gt; On Oct 2, 2010, at 10:54 , Gijsbert Wiesenekker wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 1, 2010, at 23:24 , Gijsbert Wiesenekker wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a large array that is shared between two processes. One process updates array elements randomly, the other process reads
</span><br>
array elements randomly. Most of the time these writes and reads do not overlap.
<br>
<span class="quotelev3">&gt;&gt;&gt; The current version of the code uses Linux shared memory with NSEMS semaphores. When array element i has to be read or updated
</span><br>
semaphore (i % NSEMS) is used. if NSEMS = 1 the entire array will be locked which leads to unnecessary waits because reads and
<br>
writes do not overlap most of the time. Performance increases as NSEMS increases, and flattens out at NSEMS = 32, at which point the
<br>
code runs twice as fast when compared to NSEMS = 1.
<br>
<span class="quotelev3">&gt;&gt;&gt; I want to change the code to use OpenMPI RMA, but MPI_Win_lock locks the entire array, which is similar to NSEMS = 1. Is there a
</span><br>
way to have more granular locks?
<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gijsbert
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, is there an MPI_Win_lock equavalent for IPC_NOWAIT?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gijsbert
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; FYI, as in my case the performance penalty by using OpenMPI RMA instead of shared memory was too large I have written a couple of
</span><br>
wrapper functions that use OpenMPI to gracefully allocate and release shared memory:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; file://mpi_alloc_shm is a collective operation that allocates arg_nrecords of arg_record_size each in the shared memory segment
</span><br>
identified by arg_key with arg_nsems semaphores to control access.
<br>
<span class="quotelev1">&gt; file://arg_key is the shared memory key.
</span><br>
<span class="quotelev1">&gt; file://arg_nrecords is the number of records.
</span><br>
<span class="quotelev1">&gt; file://arg_record_size is the size of a record.
</span><br>
<span class="quotelev1">&gt; file://arg_default is the default record value. If not equal to NULL all arg_nrecord records will be initialized to *arg_default.
</span><br>
<span class="quotelev1">&gt; file://arg_nsems is the number of semaphores that will be used to control access. If record irecord has to be updated or read,
</span><br>
semaphore (irecord % arg_nsems) will be used for exclusive access.
<br>
<span class="quotelev1">&gt; file://arg_mpi_id is the mpi_id of the process that will create the shared memory segment. If the mpi_id of the calling process is
</span><br>
not equal to arg_mpi_id the process will not create but try to open it.
<br>
<span class="quotelev1">&gt; void mpi_alloc_shm(key_t arg_key, i64_t arg_nrecords, i64_t arg_record_size,
</span><br>
<span class="quotelev1">&gt;    void *arg_default, int arg_nsems, int arg_mpi_id, MPI_Comm comm);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; file://mpi_shm_put updates record irecord in the shared memory segment identified by shm_key with value *source.
</span><br>
<span class="quotelev1">&gt; void mpi_shm_put(key_t shm_key, void *source, i64_t irecord);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; file://mpi_shm_get tries to read record irecord in the shared memory segment identified by shm_key using IPC_NO_WAIT to request a
</span><br>
lock.
<br>
<span class="quotelev1">&gt; file://FALSE is returned if the lock could not be obtained, else TRUE and the record in *dest.
</span><br>
<span class="quotelev1">&gt; file://as in my case only the creator of the shared memory segment will update it, a lock is not used if the creator tries to read
</span><br>
record irecord.
<br>
<span class="quotelev1">&gt; int  mpi_shm_get(key_t shm_key, i64_t irecord, void *dest);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; file://mpi_free_shm is a collective operation that deallocates the shared memory segment identified by shm_key
</span><br>
<span class="quotelev1">&gt; void mpi_free_shm(key_t shm_key, MPI_Comm comm);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please feel free to contact me if you would like to have a copy of the source code of these routines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Gijsbert
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15275.php">Kristian Medri: "[OMPI users] Duplicate independent processes"</a>
<li><strong>Previous message:</strong> <a href="15273.php">Gilbert Grosdidier: "Re: [OMPI users] Granular locks?"</a>
<li><strong>In reply to:</strong> <a href="15273.php">Gilbert Grosdidier: "Re: [OMPI users] Granular locks?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/10/14374.php">Barrett, Brian W: "Re: [OMPI users] Granular locks?"</a>
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
