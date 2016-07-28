<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 17 11:27:59 2007" -->
<!-- isoreceived="20070117162759" -->
<!-- sent="Wed, 17 Jan 2007 09:27:46 -0700" -->
<!-- isosent="20070117162746" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't start more than one process in a node as normal user" -->
<!-- id="8422760C-364E-4150-9DE7-489544EE01D2_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b62da3030701162325q242c174fq4c016f5f03793a10_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-17 11:27:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2481.php">Scott Atchley: "Re: [OMPI users] ld_library_path not being updated"</a>
<li><strong>Previous message:</strong> <a href="2479.php">Brian W. Barrett: "Re: [OMPI users] openmpi on altix"</a>
<li><strong>In reply to:</strong> <a href="2472.php">eddie168: "[OMPI users] Can't start more than one process in a node as normal user"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
errno 13 on Linux is EACCESS.  According to the man page, ftruncate()  
<br>
only retrns errno 13 if the file is owned by another user.  I can't  
<br>
see exactly how this could occur, but you might want to look at /tmp/  
<br>
and make sure everything in openmpi-sessions-eddie* is owned by user  
<br>
eddie.
<br>
<p>Brian
<br>
<p>On Jan 17, 2007, at 12:25 AM, eddie168 wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have recently installed OpenMPI 1.1.2 on a OpenSSI cluster  
</span><br>
<span class="quotelev1">&gt; running Fedora core 3. I tested a simple hello world mpi program  
</span><br>
<span class="quotelev1">&gt; (attached) and it runs ok as root. However, if I run the same  
</span><br>
<span class="quotelev1">&gt; program under normal user, it gives the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [eddie_at_oceanus:~/home2/mpi_tut]$ mpirun -np 2 tut01
</span><br>
<span class="quotelev1">&gt; [oceanus:125089] mca_common_sm_mmap_init: ftruncate failed with  
</span><br>
<span class="quotelev1">&gt; errno=13
</span><br>
<span class="quotelev1">&gt; [oceanus:125089] mca_mpool_sm_init: unable to create shared memory  
</span><br>
<span class="quotelev1">&gt; mapping ( /tmp/openmpi-sessions-eddie_at_localhost_0/default-universe/ 
</span><br>
<span class="quotelev1">&gt; 1/shared_mem_pool.localhost)
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or  
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Out of resource&quot; (-2) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [eddie_at_oceanus:~/home2/mpi_tut]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I need to give certain permission to the user in order to  
</span><br>
<span class="quotelev1">&gt; oversubscribe processes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eddie.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ompi-output.tar.gz&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
   Brian Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2481.php">Scott Atchley: "Re: [OMPI users] ld_library_path not being updated"</a>
<li><strong>Previous message:</strong> <a href="2479.php">Brian W. Barrett: "Re: [OMPI users] openmpi on altix"</a>
<li><strong>In reply to:</strong> <a href="2472.php">eddie168: "[OMPI users] Can't start more than one process in a node as normal user"</a>
<!-- nextthread="start" -->
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
