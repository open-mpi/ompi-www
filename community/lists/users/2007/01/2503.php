<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 18 22:55:12 2007" -->
<!-- isoreceived="20070119035512" -->
<!-- sent="Thu, 18 Jan 2007 22:54:59 -0500" -->
<!-- isosent="20070119035459" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't start more than one process in a node as normal user" -->
<!-- id="D6D95C9C-8C05-4CC2-9041-44961E788067_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="b62da3030701181930x3cd10d9et360be6e07f464829_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-18 22:54:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2504.php">Ralph Castain: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>Previous message:</strong> <a href="2502.php">eddie168: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>In reply to:</strong> <a href="2502.php">eddie168: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2504.php">Ralph Castain: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Two things:
<br>
<p>1. You will definitely need to also specify the &quot;self&quot; BTL.   
<br>
Otherwise, if you have an MPI process that tries to send to itself,  
<br>
there will be no [internal OMPI] path for that message to follow, and  
<br>
an MPI exception will occur.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl tcp,self -np 2 tut01
<br>
<p>2. I'm guessing that you do not have a high-speed network like  
<br>
InfiniBand.  If so, I'm further guessing that the permission denied  
<br>
issue was from the shared memory device.  You can confirm this by  
<br>
trying:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl sm --np 2 tut01
<br>
<p>If this gives you the same error, then it was the shared memory  
<br>
device that was trying to create an mmaped file in /tmp that was  
<br>
resulting in the error.  How much RAM do you have, and how much is  
<br>
free when you tried to run?
<br>
<p><p>On Jan 18, 2007, at 10:30 PM, eddie168 wrote:
<br>
<p><span class="quotelev1">&gt; Just to answer my own question, after I explicitly specify the &quot;-- 
</span><br>
<span class="quotelev1">&gt; mca btl tcp&quot; parameter, the program works. So I will need to issue  
</span><br>
<span class="quotelev1">&gt; command like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun --mca btl tcp -np 2 tut01
</span><br>
<span class="quotelev1">&gt; oceanus:Hello world from 0
</span><br>
<span class="quotelev1">&gt; oceanus:Hello world from 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eddie.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/18/07, eddie168 &lt;eddie168+ompi_user_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Ralph and Brian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the advice, I have checked the permission to /tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; drwxrwxrwt   19 root  root  4096 Jan 18 11:38 tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which I think there shouldn't be any problem to create files there,  
</span><br>
<span class="quotelev1">&gt; so option (a) still not work for me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried option (b) which set --tmpdir on command line and run as  
</span><br>
<span class="quotelev1">&gt; normal user, it works for -np 1, however it gives the same error  
</span><br>
<span class="quotelev1">&gt; for -np 2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Option (c) also tested by setting &quot;OMPI_MCA_tmpdir_base = /home2/ 
</span><br>
<span class="quotelev1">&gt; mpi_tut/tmp&quot; in &quot;~/.openmpi/mca-params.conf&quot;, however error still  
</span><br>
<span class="quotelev1">&gt; occurred.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I included the debug output of what I ran (with IP masked), I  
</span><br>
<span class="quotelev1">&gt; noticed that the optional tmp directory set in the beginning of the  
</span><br>
<span class="quotelev1">&gt; process, however it changed back to &quot;/tmp&quot; after executing orted.  
</span><br>
<span class="quotelev1">&gt; Could the error I got related to SSH setting?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eddie.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [eddie_at_oceanus:~/home2/mpi_tut]$ mpirun -d --tmpdir /home2/mpi_tut/ 
</span><br>
<span class="quotelev1">&gt; tmp -np 2 tut01
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [oceanus:129119]        tmpdir /home2/mpi_tut/tmp
</span><br>
<span class="quotelev1">&gt; [oceanus:129119]        universe default-universe
</span><br>
<span class="quotelev1">&gt; [oceanus:129119]        user eddie
</span><br>
<span class="quotelev1">&gt; [oceanus:129119]        host oceanus
</span><br>
<span class="quotelev1">&gt; [oceanus:129119]        jobid 0
</span><br>
<span class="quotelev1">&gt; [oceanus:129119]        procid 0
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] procdir: /home2/mpi_tut/tmp/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; eddie_at_oceanus_0/default-universe/0/0
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] jobdir: /home2/mpi_tut/tmp/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; eddie_at_oceanus_0/default-universe/0
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] unidir: /home2/mpi_tut/tmp/openmpi-sessions- 
</span><br>
<span class="quotelev1">&gt; eddie_at_oceanus_0/default-universe
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] top: openmpi-sessions-eddie_at_oceanus_0
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] tmp: /home2/mpi_tut/tmp
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] [0,0,0] contact_file /home2/mpi_tut/tmp/openmpi- 
</span><br>
<span class="quotelev1">&gt; sessions-eddie_at_oceanus_0/default-universe/universe-setup.txt
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] [0,0,0] wrote setup file
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] pls:rsh: local csh: 0, local bash: 1
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] pls:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] pls:rsh: remote csh: 0, remote bash: 1
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] pls:rsh: final template argv:
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --debug  
</span><br>
<span class="quotelev1">&gt; --bootproxy 1 --name &lt;template&gt; --num_procs 2 --vpid_start 0 -- 
</span><br>
<span class="quotelev1">&gt; nodename &lt;template&gt; --universe eddie_at_oceanus:default-universe -- 
</span><br>
<span class="quotelev1">&gt; nsreplica &quot;0.0.0;tcp://xxx.xxx.xxx.xxx:52428&quot; --gprreplica &quot;  
</span><br>
<span class="quotelev1">&gt; 0.0.0;tcp://xxx.xxx.xxx.xxx:52428&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] pls:rsh: launching on node localhost
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] pls:rsh: oversubscribed -- setting  
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle to 1 (1 2)
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] pls:rsh: localhost is a LOCAL node
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] pls:rsh: changing to directory /home/eddie
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] pls:rsh: executing: orted --debug --bootproxy 1 -- 
</span><br>
<span class="quotelev1">&gt; name 0.0.1 --num_procs 2 --vpid_start 0 --nodename localhost -- 
</span><br>
<span class="quotelev1">&gt; universe eddie_at_oceanus:default-universe --nsreplica &quot;0.0.0;tcp:// 
</span><br>
<span class="quotelev1">&gt; xxx.xxx.xxx.xxx:52428&quot; --gprreplica &quot;0.0.0;tcp://xxx.xxx.xxx.xxx: 
</span><br>
<span class="quotelev1">&gt; 52428&quot; --mpi-call-yield 1
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] [0,0,1] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [oceanus:129120]        universe default-universe
</span><br>
<span class="quotelev1">&gt; [oceanus:129120]        user eddie
</span><br>
<span class="quotelev1">&gt; [oceanus:129120]        host localhost
</span><br>
<span class="quotelev1">&gt; [oceanus:129120]        jobid 0
</span><br>
<span class="quotelev1">&gt; [oceanus:129120]        procid 1
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] procdir: /tmp/openmpi-sessions-eddie_at_localhost_0/ 
</span><br>
<span class="quotelev1">&gt; default-universe/0/1
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] jobdir: /tmp/openmpi-sessions-eddie_at_localhost_0/ 
</span><br>
<span class="quotelev1">&gt; default-universe/0
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] unidir: /tmp/openmpi-sessions-eddie_at_localhost_0/ 
</span><br>
<span class="quotelev1">&gt; default-universe
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] top: openmpi-sessions-eddie_at_localhost_0
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [oceanus:129121] [0,1,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [oceanus:129121]        universe default-universe
</span><br>
<span class="quotelev1">&gt; [oceanus:129121]        user eddie
</span><br>
<span class="quotelev1">&gt; [oceanus:129121]        host localhost
</span><br>
<span class="quotelev1">&gt; [oceanus:129121]        jobid 1
</span><br>
<span class="quotelev1">&gt; [oceanus:129121]        procid 0
</span><br>
<span class="quotelev1">&gt; [oceanus:129121] procdir: /tmp/openmpi-sessions-eddie_at_localhost_0/ 
</span><br>
<span class="quotelev1">&gt; default-universe/1/0
</span><br>
<span class="quotelev1">&gt; [oceanus:129121] jobdir: /tmp/openmpi-sessions-eddie_at_localhost_0/ 
</span><br>
<span class="quotelev1">&gt; default-universe/1
</span><br>
<span class="quotelev1">&gt; [oceanus:129121] unidir: /tmp/openmpi-sessions-eddie_at_localhost_0/ 
</span><br>
<span class="quotelev1">&gt; default-universe
</span><br>
<span class="quotelev1">&gt; [oceanus:129121] top: openmpi-sessions-eddie_at_localhost_0
</span><br>
<span class="quotelev1">&gt; [oceanus:129121] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [oceanus:129122] [0,1,1] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [oceanus:129122]        universe default-universe
</span><br>
<span class="quotelev1">&gt; [oceanus:129122]        user eddie
</span><br>
<span class="quotelev1">&gt; [oceanus:129122]        host localhost
</span><br>
<span class="quotelev1">&gt; [oceanus:129122]        jobid 1
</span><br>
<span class="quotelev1">&gt; [oceanus:129122]        procid 1
</span><br>
<span class="quotelev1">&gt; [oceanus:129122] procdir: /tmp/openmpi-sessions-eddie_at_localhost_0/ 
</span><br>
<span class="quotelev1">&gt; default-universe/1/1
</span><br>
<span class="quotelev1">&gt; [oceanus:129122] jobdir: /tmp/openmpi-sessions-eddie_at_localhost_0/ 
</span><br>
<span class="quotelev1">&gt; default-universe/1
</span><br>
<span class="quotelev1">&gt; [oceanus:129122] unidir: /tmp/openmpi-sessions-eddie_at_localhost_0/ 
</span><br>
<span class="quotelev1">&gt; default-universe
</span><br>
<span class="quotelev1">&gt; [oceanus:129122] top: openmpi-sessions-eddie_at_localhost_0
</span><br>
<span class="quotelev1">&gt; [oceanus:129122] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] spawn: in job_state_callback(jobid = 1, state = 0x4)
</span><br>
<span class="quotelev1">&gt; [oceanus:129119] Info: Setting up debugger process table for  
</span><br>
<span class="quotelev1">&gt; applications
</span><br>
<span class="quotelev1">&gt;   MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_debug_gate = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt;   MPIR_acquired_pre_main = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_i_am_starter = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_proctable_size = 2
</span><br>
<span class="quotelev1">&gt;   MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (0, localhost, tut01, 129121)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (1, localhost, tut01, 129122)
</span><br>
<span class="quotelev1">&gt; [oceanus:129121] mca_common_sm_mmap_init: ftruncate failed with  
</span><br>
<span class="quotelev1">&gt; errno=13
</span><br>
<span class="quotelev1">&gt; [oceanus:129121] mca_mpool_sm_init: unable to create shared memory  
</span><br>
<span class="quotelev1">&gt; mapping (/tmp/openmpi-sessions-eddie_at_localhost_0/default-universe/1/ 
</span><br>
<span class="quotelev1">&gt; shared_mem_pool.localhost )
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
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; [oceanus:129120] sess_dir_finalize: found proc session dir empty -  
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] sess_dir_finalize: job session dir not empty -  
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] sess_dir_finalize: found proc session dir empty -  
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] sess_dir_finalize: found job session dir empty -  
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] sess_dir_finalize: univ session dir not empty -  
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] orted: job_state_callback(jobid = 1, state =  
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_STATE_TERMINATED)
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] sess_dir_finalize: job session dir not empty -  
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] sess_dir_finalize: found proc session dir empty -  
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] sess_dir_finalize: found job session dir empty -  
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] sess_dir_finalize: found univ session dir empty -  
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [oceanus:129120] sess_dir_finalize: found top session dir empty -  
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [eddie_at_oceanus:~/home2/mpi_tut]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/18/07, Ralph H Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Eddie
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI needs to create a temporary file system &#150; what we call our  
</span><br>
<span class="quotelev1">&gt; &quot;session directory&quot; - where it stores things like the shared memory  
</span><br>
<span class="quotelev1">&gt; file. From this output, it appears that your /tmp directory is  
</span><br>
<span class="quotelev1">&gt; &quot;locked&quot; to root access only.
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
<span class="quotelev1">&gt; (b) you could use the &#151;tmpdir xxx command line option to point Open  
</span><br>
<span class="quotelev1">&gt; MPI at another directory that is accessible to the user (for  
</span><br>
<span class="quotelev1">&gt; example, you could use a &quot;tmp&quot; directory under the user's home  
</span><br>
<span class="quotelev1">&gt; directory); or
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (c) you could set an MCA parameter OMPI_MCA_tmpdir_base to identify  
</span><br>
<span class="quotelev1">&gt; a directory we can use instead of /tmp.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  If you select options (b) or (c), the only requirement is that  
</span><br>
<span class="quotelev1">&gt; this location must be accessible on every node being used. Let me  
</span><br>
<span class="quotelev1">&gt; be clear on this: the tmp directory must not be NSF mounted and  
</span><br>
<span class="quotelev1">&gt; therefore shared across all nodes. However, each node must be able  
</span><br>
<span class="quotelev1">&gt; to access a location of the given name &#150; that location should be  
</span><br>
<span class="quotelev1">&gt; strictly local to each node.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/17/07 12:25 AM, &quot;eddie168&quot; &lt; eddie168+ompi_user_at_[hidden] &gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear all,
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
<span class="quotelev1">&gt; mapping ( /tmp/openmpi- sessions-eddie_at_localhost_0/default-universe/ 
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2504.php">Ralph Castain: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>Previous message:</strong> <a href="2502.php">eddie168: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>In reply to:</strong> <a href="2502.php">eddie168: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2504.php">Ralph Castain: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
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
