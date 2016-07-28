<?
$subject_val = "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 11 19:41:31 2015" -->
<!-- isoreceived="20150411234131" -->
<!-- sent="Sat, 11 Apr 2015 16:41:25 -0700" -->
<!-- isosent="20150411234125" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC" -->
<!-- id="0A4ECE92-D50F-4E2A-9380-C367B074766A_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="5529513E.8020609_at_hp.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-11 19:41:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26683.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Previous message:</strong> <a href="26681.php">Ahmed Salama: "[OMPI users] run openmpi 1.8 in both linux and windows 7"</a>
<li><strong>In reply to:</strong> <a href="26680.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26683.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="26683.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Got it - thanks. I fixed that ERROR_LOG issue (I think- please verify). I suspect the memheap issue relates to something else, but I probably need to let the OSHMEM folks comment on it
<br>
<p><p><span class="quotelev1">&gt; On Apr 11, 2015, at 9:52 AM, Andy Riebs &lt;andy.riebs_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Everything is built on the Xeon side, with the icc &quot;-mmic&quot; switch. I then ssh into one of the PHIs, and run shmemrun from there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 04/11/2015 12:00 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Let me try to understand the setup a little better. Are you running shmemrun on the PHI itself? Or is it running on the host processor, and you are trying to spawn a process onto the Phi?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 11, 2015, at 7:55 AM, Andy Riebs &lt;andy.riebs_at_[hidden] &lt;mailto:andy.riebs_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, this is attempting to get OSHMEM to run on the Phi.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I grabbed openmpi-dev-1484-g033418f.tar.bz2 and configured it with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ./configure --prefix=/home/ariebs/mic/mpi-nightly    CC=icc -mmic CXX=icpc -mmic    \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --build=x86_64-unknown-linux-gnu --host=x86_64-k1om-linux    \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      AR=x86_64-k1om-linux-ar RANLIB=x86_64-k1om-linux-ranlib  LD=x86_64-k1om-linux-ld   \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      --enable-mpirun-prefix-by-default --disable-io-romio     --disable-mpi-fortran    \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      --enable-debug     --enable-mca-no-build=btl-usnic,btl-openib,common-verbs,oob-ud
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Note that I had to add &quot;oob-ud&quot; to the &quot;--enable-mca-no-build&quot; option, as the build complained that mca oob/ud needed mca common-verbs.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With that configuration, here is what I am seeing now...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ export SHMEM_SYMMETRIC_HEAP_SIZE=1G
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ shmemrun -H localhost -N 2 --mca sshmem mmap  --mca plm_base_verbose 5 $PWD/mic.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] [[INVALID],INVALID] plm:rsh_lookup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] mca:base:select:(  plm) Querying component [isolated]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] mca:base:select:(  plm) Query of component [isolated] set priority to 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] mca:base:select:(  plm) Skipping component [slurm]. Query failed to return a module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] plm:base:set_hnp_name: initial bias 189895 nodename hash 4121194178
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] plm:base:set_hnp_name: final jobfam 32419
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] plm:rsh_setup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] plm:base:receive start comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_vm creating map
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] setup:vm: working unmanaged allocation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] using dash_host
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] checking node atl1-01-mic0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] ignoring myself
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_vm only HNP in allocation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] complete_setup on job [32419,1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] ORTE_ERROR_LOG: Not found in file base/plm_base_launch_support.c at line 440
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] plm:base:launch_apps for job [32419,1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] plm:base:launch wiring up iof for job [32419,1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] plm:base:launch [32419,1] registered
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] plm:base:launch job [32419,1] is not a dynamic spawn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189899] Error: pshmem_init.c:61 - shmem_init() SHMEM failed to initialize - aborting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189898] Error: pshmem_init.c:61 - shmem_init() SHMEM failed to initialize - aborting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like SHMEM_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail during SHMEM_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; additional information (which may only be relevant to an Open SHMEM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   mca_memheap_base_select() failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SHMEM_ABORT was invoked on rank 1 (pid 189899, host=atl1-01-mic0) with errorcode -1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A SHMEM process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Local host: atl1-01-mic0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PID:        189899
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] plm:base:orted_cmd sending orted_exit commands
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shmemrun detected that one or more processes exited with non-zero status, thus causing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Process name: [[32419,1],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Exit code:    255
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] 1 more process has sent help message help-shmem-runtime.txt / shmem_init:startup:internal-failure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] 1 more process has sent help message help-shmem-api.txt / shmem-abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] 1 more process has sent help message help-shmem-runtime.txt / oshmem shmem abort:cannot guarantee all killed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [atl1-01-mic0:189895] [[32419,0],0] plm:base:receive stop comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 04/10/2015 06:37 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Andy - could you please try the current 1.8.5 nightly tarball and see if it helps? The error log indicates that it is failing to get the topology from some daemon, I&#239;&#191;&#189;m assuming the one on the Phi?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You might also add &#239;&#191;&#189;enable-debug to that configure line and then put -mca plm_base_verbose on the shmemrun cmd to get more help
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Apr 10, 2015, at 11:55 AM, Andy Riebs &lt;andy.riebs_at_[hidden] &lt;mailto:andy.riebs_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Summary: MPI jobs work fine, SHMEM jobs work just often enough to be tantalizing, on an Intel Xeon Phi/MIC system.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Longer version
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks to the excellent write-up last June (&lt;<a href="https://www.open-mpi.org/community/lists/users/2014/06/24711.php">https://www.open-mpi.org/community/lists/users/2014/06/24711.php</a>&gt; &lt;<a href="https://www.open-mpi.org/community/lists/users/2014/06/24711.php">https://www.open-mpi.org/community/lists/users/2014/06/24711.php</a>&gt;), I have been able to build a version of Open MPI for the Xeon Phi coprocessor that runs MPI jobs on the Phi coprocessor with no problem, but not SHMEM jobs.  Just at the point where I was about to document the problems I was having with SHMEM, my trivial SHMEM job worked. And then failed when I tried to run it again, immediately afterwards. I have a feeling I may be in uncharted  territory here.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Environment
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; RHEL 6.5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Intel Composer XE 2015
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Xeon Phi/MIC
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Configuration
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ export PATH=/usr/linux-k1om-4.7/bin/:$PATH
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ source /opt/intel/15.0/composer_xe_2015/bin/compilervars.sh intel64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ ./configure --prefix=/home/ariebs/mic/mpi \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    CC=&quot;icc -mmic&quot; CXX=&quot;icpc -mmic&quot; \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    --build=x86_64-unknown-linux-gnu --host=x86_64-k1om-linux \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     AR=x86_64-k1om-linux-ar RANLIB=x86_64-k1om-linux-ranlib \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     LD=x86_64-k1om-linux-ld \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     --enable-mpirun-prefix-by-default --disable-io-romio \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     --disable-vt --disable-mpi-fortran \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     --enable-mca-no-build=btl-usnic,btl-openib,common-verbs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ make
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ make install
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Test program
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;shmem.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         int me, num_pe;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         shmem_init();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         num_pe = num_pes();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         me = my_pe();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         printf(&quot;Hello World from process %ld of %ld\n&quot;, me, num_pe);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         exit(0);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Building the program
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export PATH=/home/ariebs/mic/mpi/bin:$PATH
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export PATH=/usr/linux-k1om-4.7/bin/:$PATH
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; source /opt/intel/15.0/composer_xe_2015/bin/compilervars.sh intel64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export LD_LIBRARY_PATH=/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; icc -mmic -std=gnu99 -I/home/ariebs/mic/mpi/include -pthread \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         -Wl,-rpath -Wl,/home/ariebs/mic/mpi/lib -Wl,--enable-new-dtags \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         -L/home/ariebs/mic/mpi/lib -loshmem -lmpi -lopen-rte -lopen-pal \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         -lm -ldl -lutil \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         -Wl,-rpath -Wl,/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         -L/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         -o mic.out  shmem_hello.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Running the program
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (Note that the program had been consistently failing. Then, when I logged back into the system to capture the results, it worked once,  and then immediately failed when I tried again, as shown below. Logging in and out isn't sufficient to correct the problem. Overall, I think I had 3 successful runs in 30-40 attempts.)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ shmemrun -H localhost -N 2 --mca sshmem mmap ./mic.out
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189372] [[30936,0],0] ORTE_ERROR_LOG: Not found in file base/plm_base_launch_support.c at line 426
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello World from process 0 of 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello World from process 1 of 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ shmemrun -H localhost -N 2 --mca sshmem mmap ./mic.out
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189381] [[30881,0],0] ORTE_ERROR_LOG: Not found in file base/plm_base_launch_support.c at line 426
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [atl1-01-mic0:189383] Error: pshmem_init.c:61 - shmem_init() SHMEM failed to initialize - aborting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It looks like SHMEM_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fail during SHMEM_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; additional information (which may only be relevant to an Open SHMEM
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   mca_memheap_base_select() failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; SHMEM_ABORT was invoked on rank 0 (pid 189383, host=atl1-01-mic0) with errorcode -1.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; A SHMEM process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Local host: atl1-01-mic0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PID:        189383
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; shmemrun detected that one or more processes exited with non-zero status, thus causing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Process name: [[30881,1],0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Exit code:    255
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any thoughts about where to go from here?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Andy
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Andy Riebs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hewlett-Packard Company
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; High Performance Computing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +1 404 648 9024
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; My opinions are not necessarily those of HP
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26670.php">http://www.open-mpi.org/community/lists/users/2015/04/26670.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26670.php">http://www.open-mpi.org/community/lists/users/2015/04/26670.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26676.php">http://www.open-mpi.org/community/lists/users/2015/04/26676.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26676.php">http://www.open-mpi.org/community/lists/users/2015/04/26676.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26678.php">http://www.open-mpi.org/community/lists/users/2015/04/26678.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26678.php">http://www.open-mpi.org/community/lists/users/2015/04/26678.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26679.php">http://www.open-mpi.org/community/lists/users/2015/04/26679.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26679.php">http://www.open-mpi.org/community/lists/users/2015/04/26679.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26680.php">http://www.open-mpi.org/community/lists/users/2015/04/26680.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26682/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26683.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Previous message:</strong> <a href="26681.php">Ahmed Salama: "[OMPI users] run openmpi 1.8 in both linux and windows 7"</a>
<li><strong>In reply to:</strong> <a href="26680.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26683.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="26683.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
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
