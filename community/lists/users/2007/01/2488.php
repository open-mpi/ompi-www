<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 17 20:56:27 2007" -->
<!-- isoreceived="20070118015627" -->
<!-- sent="Thu, 18 Jan 2007 11:56:23 +1000" -->
<!-- isosent="20070118015623" -->
<!-- name="eddie168" -->
<!-- email="eddie168+ompi_user_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't start more than one process in a node as normal user" -->
<!-- id="b62da3030701171756o2e21fe7asdad876dd09ba2f28_at_mail.gmail.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="C1D37A0D.6F76%rhc_at_lanl.gov" -->
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
<strong>From:</strong> eddie168 (<em>eddie168+ompi_user_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-17 20:56:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2489.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Previous message:</strong> <a href="2487.php">Brian Budge: "Re: [OMPI users] ld_library_path not being updated"</a>
<li><strong>In reply to:</strong> <a href="2476.php">Ralph H Castain: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2502.php">eddie168: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>Reply:</strong> <a href="2502.php">eddie168: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph and Brian,
<br>
<p>Thanks for the advice, I have checked the permission to /tmp
<br>
<p>drwxrwxrwt   19 root  root  4096 Jan 18 11:38 tmp
<br>
<p>which I think there shouldn't be any problem to create files there, so
<br>
option (a) still not work for me.
<br>
<p>I tried option (b) which set --tmpdir on command line and run as normal
<br>
user, it works for -np 1, however it gives the same error for -np 2.
<br>
<p>Option (c) also tested by setting &quot;OMPI_MCA_tmpdir_base =
<br>
/home2/mpi_tut/tmp&quot; in &quot;~/.openmpi/mca-params.conf&quot;, however error still
<br>
occurred.
<br>
<p>I included the debug output of what I ran (with IP masked), I noticed that
<br>
the optional tmp directory set in the beginning of the process, however it
<br>
changed back to &quot;/tmp&quot; after executing orted. Could the error I got related
<br>
to SSH setting?
<br>
<p>Many thanks,
<br>
<p>Eddie.
<br>
<p><p>[eddie_at_oceanus:~/home2/mpi_tut]$ mpirun -d --tmpdir /home2/mpi_tut/tmp -np 2
<br>
tut01
<br>
[oceanus:129119] [0,0,0] setting up session dir with
<br>
[oceanus:129119]        tmpdir /home2/mpi_tut/tmp
<br>
[oceanus:129119]        universe default-universe
<br>
[oceanus:129119]        user eddie
<br>
[oceanus:129119]        host oceanus
<br>
[oceanus:129119]        jobid 0
<br>
[oceanus:129119]        procid 0
<br>
[oceanus:129119] procdir:
<br>
/home2/mpi_tut/tmp/openmpi-sessions-eddie_at_oceanus_0/default-universe/0/0
<br>
[oceanus:129119] jobdir:
<br>
/home2/mpi_tut/tmp/openmpi-sessions-eddie_at_oceanus_0/default-universe/0
<br>
[oceanus:129119] unidir:
<br>
/home2/mpi_tut/tmp/openmpi-sessions-eddie_at_oceanus_0/default-universe
<br>
[oceanus:129119] top: openmpi-sessions-eddie_at_oceanus_0
<br>
[oceanus:129119] tmp: /home2/mpi_tut/tmp
<br>
[oceanus:129119] [0,0,0] contact_file
<br>
/home2/mpi_tut/tmp/openmpi-sessions-eddie_at_oceanus_0/default-universe/universe-setup.txt
<br>
[oceanus:129119] [0,0,0] wrote setup file
<br>
[oceanus:129119] pls:rsh: local csh: 0, local bash: 1
<br>
[oceanus:129119] pls:rsh: assuming same remote shell as local shell
<br>
[oceanus:129119] pls:rsh: remote csh: 0, remote bash: 1
<br>
[oceanus:129119] pls:rsh: final template argv:
<br>
[oceanus:129119] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --debug
<br>
--bootproxy 1 --name &lt;template&gt; --num_procs 2 --vpid_start 0 --nodename
<br>
&lt;template&gt; --universe eddie_at_oceanus:default-universe --nsreplica
<br>
&quot;0.0.0;tcp://xxx.xxx.xxx.xxx:52428&quot;
<br>
--gprreplica &quot;0.0.0;tcp://xxx.xxx.xxx.xxx:52428&quot; --mpi-call-yield 0
<br>
[oceanus:129119] pls:rsh: launching on node localhost
<br>
[oceanus:129119] pls:rsh: oversubscribed -- setting mpi_yield_when_idle to 1
<br>
(1 2)
<br>
[oceanus:129119] pls:rsh: localhost is a LOCAL node
<br>
[oceanus:129119] pls:rsh: changing to directory /home/eddie
<br>
[oceanus:129119] pls:rsh: executing: orted --debug --bootproxy 1 --name
<br>
0.0.1 --num_procs 2 --vpid_start 0 --nodename localhost --universe
<br>
eddie_at_oceanus:default-universe --nsreplica &quot;0.0.0;tcp://xxx.xxx.xxx.xxx:52428&quot;
<br>
--gprreplica &quot;0.0.0;tcp://xxx.xxx.xxx.xxx:52428&quot; --mpi-call-yield 1
<br>
[oceanus:129120] [0,0,1] setting up session dir with
<br>
[oceanus:129120]        universe default-universe
<br>
[oceanus:129120]        user eddie
<br>
[oceanus:129120]        host localhost
<br>
[oceanus:129120]        jobid 0
<br>
[oceanus:129120]        procid 1
<br>
[oceanus:129120] procdir:
<br>
/tmp/openmpi-sessions-eddie_at_localhost_0/default-universe/0/1
<br>
[oceanus:129120] jobdir:
<br>
/tmp/openmpi-sessions-eddie_at_localhost_0/default-universe/0
<br>
[oceanus:129120] unidir:
<br>
/tmp/openmpi-sessions-eddie_at_localhost_0/default-universe
<br>
[oceanus:129120] top: openmpi-sessions-eddie_at_localhost_0
<br>
[oceanus:129120] tmp: /tmp
<br>
[oceanus:129121] [0,1,0] setting up session dir with
<br>
[oceanus:129121]        universe default-universe
<br>
[oceanus:129121]        user eddie
<br>
[oceanus:129121]        host localhost
<br>
[oceanus:129121]        jobid 1
<br>
[oceanus:129121]        procid 0
<br>
[oceanus:129121] procdir:
<br>
/tmp/openmpi-sessions-eddie_at_localhost_0/default-universe/1/0
<br>
[oceanus:129121] jobdir:
<br>
/tmp/openmpi-sessions-eddie_at_localhost_0/default-universe/1
<br>
[oceanus:129121] unidir:
<br>
/tmp/openmpi-sessions-eddie_at_localhost_0/default-universe
<br>
[oceanus:129121] top: openmpi-sessions-eddie_at_localhost_0
<br>
[oceanus:129121] tmp: /tmp
<br>
[oceanus:129122] [0,1,1] setting up session dir with
<br>
[oceanus:129122]        universe default-universe
<br>
[oceanus:129122]        user eddie
<br>
[oceanus:129122]        host localhost
<br>
[oceanus:129122]        jobid 1
<br>
[oceanus:129122]        procid 1
<br>
[oceanus:129122] procdir:
<br>
/tmp/openmpi-sessions-eddie_at_localhost_0/default-universe/1/1
<br>
[oceanus:129122] jobdir:
<br>
/tmp/openmpi-sessions-eddie_at_localhost_0/default-universe/1
<br>
[oceanus:129122] unidir:
<br>
/tmp/openmpi-sessions-eddie_at_localhost_0/default-universe
<br>
[oceanus:129122] top: openmpi-sessions-eddie_at_localhost_0
<br>
[oceanus:129122] tmp: /tmp
<br>
[oceanus:129119] spawn: in job_state_callback(jobid = 1, state = 0x4)
<br>
[oceanus:129119] Info: Setting up debugger process table for applications
<br>
&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;MPIR_debug_gate = 0
<br>
&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;MPIR_acquired_pre_main = 0
<br>
&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;MPIR_proctable_size = 2
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, localhost, tut01, 129121)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, localhost, tut01, 129122)
<br>
[oceanus:129121] mca_common_sm_mmap_init: ftruncate failed with errno=13
<br>
[oceanus:129121] mca_mpool_sm_init: unable to create shared memory mapping (
<br>
/tmp/openmpi-sessions-eddie_at_localhost_0/default-universe/1/shared_mem_pool.localhost
<br>
)
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Out of resource&quot; (-2) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[oceanus:129120] sess_dir_finalize: found proc session dir empty - deleting
<br>
[oceanus:129120] sess_dir_finalize: job session dir not empty - leaving
<br>
[oceanus:129120] sess_dir_finalize: found proc session dir empty - deleting
<br>
[oceanus:129120] sess_dir_finalize: found job session dir empty - deleting
<br>
[oceanus:129120] sess_dir_finalize: univ session dir not empty - leaving
<br>
[oceanus:129120] orted: job_state_callback(jobid = 1, state =
<br>
ORTE_PROC_STATE_TERMINATED)
<br>
[oceanus:129120] sess_dir_finalize: job session dir not empty - leaving
<br>
[oceanus:129120] sess_dir_finalize: found proc session dir empty - deleting
<br>
[oceanus:129120] sess_dir_finalize: found job session dir empty - deleting
<br>
[oceanus:129120] sess_dir_finalize: found univ session dir empty - deleting
<br>
[oceanus:129120] sess_dir_finalize: found top session dir empty - deleting
<br>
[eddie_at_oceanus:~/home2/mpi_tut]$
<br>
<p><p>On 1/18/07, Ralph H Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Eddie
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI needs to create a temporary file system &#150; what we call our
</span><br>
<span class="quotelev1">&gt; &quot;session directory&quot; - where it stores things like the shared memory file.
</span><br>
<span class="quotelev1">&gt; From this output, it appears that your /tmp directory is &quot;locked&quot; to root
</span><br>
<span class="quotelev1">&gt; access only.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You have three options for resolving this problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (a) you could make /tmp accessible to general users;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (b) you could use the &#151;tmpdir xxx command line option to point Open MPI at
</span><br>
<span class="quotelev1">&gt; another directory that is accessible to the user (for example, you could use
</span><br>
<span class="quotelev1">&gt; a &quot;tmp&quot; directory under the user's home directory); or
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (c) you could set an MCA parameter OMPI_MCA_tmpdir_base to identify a
</span><br>
<span class="quotelev1">&gt; directory we can use instead of /tmp.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  If you select options (b) or (c), the only requirement is that this
</span><br>
<span class="quotelev1">&gt; location must be accessible on every node being used. Let me be clear on
</span><br>
<span class="quotelev1">&gt; this: the tmp directory *must not* be NSF mounted and therefore shared
</span><br>
<span class="quotelev1">&gt; across all nodes. However, each node must be able to access a location of
</span><br>
<span class="quotelev1">&gt; the given name &#150; that location should be strictly local to each node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/17/07 12:25 AM, &quot;eddie168&quot; &lt;eddie168+ompi_user_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have recently installed OpenMPI 1.1.2 on a OpenSSI cluster running
</span><br>
<span class="quotelev1">&gt; Fedora core 3. I tested a simple hello world mpi program (attached) and it
</span><br>
<span class="quotelev1">&gt; runs ok as root. However, if I run the same program under normal user, it
</span><br>
<span class="quotelev1">&gt; gives the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [eddie_at_oceanus:~/home2/mpi_tut]$ mpirun -np 2 tut01
</span><br>
<span class="quotelev1">&gt; [oceanus:125089] mca_common_sm_mmap_init: ftruncate failed with errno=13
</span><br>
<span class="quotelev1">&gt; [oceanus:125089] mca_mpool_sm_init: unable to create shared memory mapping
</span><br>
<span class="quotelev1">&gt; ( /tmp/openmpi-sessions-eddie_at_localhost
</span><br>
<span class="quotelev1">&gt; _0/default-universe/1/shared_mem_pool.localhost)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
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
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2488/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2489.php">Robin Humble: "Re: [OMPI users] IB bandwidth vs. kernels"</a>
<li><strong>Previous message:</strong> <a href="2487.php">Brian Budge: "Re: [OMPI users] ld_library_path not being updated"</a>
<li><strong>In reply to:</strong> <a href="2476.php">Ralph H Castain: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2502.php">eddie168: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>Reply:</strong> <a href="2502.php">eddie168: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
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
