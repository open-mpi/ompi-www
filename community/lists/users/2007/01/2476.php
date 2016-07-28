<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 17 09:00:38 2007" -->
<!-- isoreceived="20070117140038" -->
<!-- sent="Wed, 17 Jan 2007 07:00:29 -0700" -->
<!-- isosent="20070117140029" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't start more than one process in a node as normal user" -->
<!-- id="C1D37A0D.6F76%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-17 09:00:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2477.php">Brian Budge: "Re: [OMPI users] ld_library_path not being updated"</a>
<li><strong>Previous message:</strong> <a href="2475.php">Gleb Natapov: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>In reply to:</strong> <a href="2472.php">eddie168: "[OMPI users] Can't start more than one process in a node as normal user"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2488.php">eddie168: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>Reply:</strong> <a href="2488.php">eddie168: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Eddie
<br>
<p>Open MPI needs to create a temporary file system &#173; what we call our &#179;session
<br>
directory&#178; - where it stores things like the shared memory file. From this
<br>
output, it appears that your /tmp directory is &#179;locked&#178; to root access only.
<br>
<p>You have three options for resolving this problem:
<br>
<p>(a) you could make /tmp accessible to general users;
<br>
<p>(b) you could use the &#139;tmpdir xxx command line option to point Open MPI at
<br>
another directory that is accessible to the user (for example, you could use
<br>
a &#179;tmp&#178; directory under the user&#185;s home directory); or
<br>
<p>(c) you could set an MCA parameter OMPI_MCA_tmpdir_base to identify a
<br>
directory we can use instead of /tmp.
<br>
<p>&nbsp;If you select options (b) or (c), the only requirement is that this
<br>
location must be accessible on every node being used. Let me be clear on
<br>
this: the tmp directory must not be NSF mounted and therefore shared across
<br>
all nodes. However, each node must be able to access a location of the given
<br>
name &#173; that location should be strictly local to each node.
<br>
<p>Hope that helps
<br>
Ralph
<br>
<p><p><p>On 1/17/07 12:25 AM, &quot;eddie168&quot; &lt;eddie168+ompi_user_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I have recently installed OpenMPI 1.1.2 on a OpenSSI cluster running Fedora
</span><br>
<span class="quotelev1">&gt; core 3. I tested a simple hello world mpi program (attached) and it runs ok as
</span><br>
<span class="quotelev1">&gt; root. However, if I run the same program under normal user, it gives the
</span><br>
<span class="quotelev1">&gt; following error: 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [eddie_at_oceanus:~/home2/mpi_tut]$ mpirun -np 2 tut01
</span><br>
<span class="quotelev1">&gt; [oceanus:125089] mca_common_sm_mmap_init: ftruncate failed with errno=13
</span><br>
<span class="quotelev1">&gt; [oceanus:125089] mca_mpool_sm_init: unable to create shared memory mapping (
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-eddie_at_localhost_0/default-universe/1/shared_mem_pool.loc
</span><br>
<span class="quotelev1">&gt; alhost)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
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
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<span class="quotelev1">&gt; Am I need to give certain permission to the user in order to oversubscribe
</span><br>
<span class="quotelev1">&gt; processes?
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
<span class="quotelev1">&gt; 
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
<p><p><p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2476/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2477.php">Brian Budge: "Re: [OMPI users] ld_library_path not being updated"</a>
<li><strong>Previous message:</strong> <a href="2475.php">Gleb Natapov: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>In reply to:</strong> <a href="2472.php">eddie168: "[OMPI users] Can't start more than one process in a node as normal user"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2488.php">eddie168: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>Reply:</strong> <a href="2488.php">eddie168: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
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
