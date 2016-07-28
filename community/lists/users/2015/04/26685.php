<?
$subject_val = "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon	Phi/MIC";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 12 19:12:54 2015" -->
<!-- isoreceived="20150412231254" -->
<!-- sent="Sun, 12 Apr 2015 23:12:25 +0000" -->
<!-- isosent="20150412231225" -->
<!-- name="Riebs, Andy" -->
<!-- email="Andy.Riebs_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon	Phi/MIC" -->
<!-- id="egykjkjlpberbp9inxx4dyj3.1428880341900_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="510B2D56-F191-4514-AECB-A1BD7BD392CA_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon	Phi/MIC<br>
<strong>From:</strong> Riebs, Andy (<em>Andy.Riebs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-12 19:12:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26686.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Previous message:</strong> <a href="26684.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>In reply to:</strong> <a href="26684.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26689.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My fault, I thought the tar ball name looked funny :-)
<br>

<br>
Will try again tomorrow
<br>

<br>
Andy
<br>

<br>
--
<br>
Andy Riebs
<br>
andy.riebs_at_[hidden]
<br>

<br>

<br>
-------- Original message --------
<br>
From: Ralph Castain
<br>
Date:04/12/2015 3:10 PM (GMT-05:00)
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC
<br>

<br>
Sorry about that - I hadn&#226;&#128;&#153;t brought it over to the 1.8 branch yet. I&#226;&#128;&#153;ve done so now, which means the ERROR_LOG shouldn&#226;&#128;&#153;t show up any more. It won&#226;&#128;&#153;t fix the memheap problem, though.
<br>

<br>
You might try adding &#226;&#128;&#156;--mca memheap_base_verbose 100&#226;&#128;&#157; to your cmd line so we can see why none of the memheap components are being selected.
<br>

<br>

<br>
On Apr 12, 2015, at 11:30 AM, Andy Riebs &lt;andy.riebs_at_[hidden]&lt;mailto:andy.riebs_at_[hidden]&gt;&gt; wrote:
<br>

<br>
Hi Ralph,
<br>

<br>
Here's the output with openmpi-v1.8.4-202-gc2da6a5.tar.bz2&lt;<a href="https://www.open-mpi.org/nightly/v1.8/openmpi-v1.8.4-202-gc2da6a5.tar.bz2">https://www.open-mpi.org/nightly/v1.8/openmpi-v1.8.4-202-gc2da6a5.tar.bz2</a>&gt;:
<br>

<br>
$ shmemrun -H localhost -N 2 --mca sshmem mmap  --mca plm_base_verbose 5 $PWD/mic.out
<br>
[atl1-01-mic0:190189] mca:base:select:(  plm) Querying component [rsh]
<br>
[atl1-01-mic0:190189] [[INVALID],INVALID] plm:rsh_lookup on agent ssh : rsh path NULL
<br>
[atl1-01-mic0:190189] mca:base:select:(  plm) Query of component [rsh] set priority to 10
<br>
[atl1-01-mic0:190189] mca:base:select:(  plm) Querying component [isolated]
<br>
[atl1-01-mic0:190189] mca:base:select:(  plm) Query of component [isolated] set priority to 0
<br>
[atl1-01-mic0:190189] mca:base:select:(  plm) Querying component [slurm]
<br>
[atl1-01-mic0:190189] mca:base:select:(  plm) Skipping component [slurm]. Query failed to return a module
<br>
[atl1-01-mic0:190189] mca:base:select:(  plm) Selected component [rsh]
<br>
[atl1-01-mic0:190189] plm:base:set_hnp_name: initial bias 190189 nodename hash 4121194178
<br>
[atl1-01-mic0:190189] plm:base:set_hnp_name: final jobfam 32137
<br>
[atl1-01-mic0:190189] [[32137,0],0] plm:rsh_setup on agent ssh : rsh path NULL
<br>
[atl1-01-mic0:190189] [[32137,0],0] plm:base:receive start comm
<br>
[atl1-01-mic0:190189] [[32137,0],0] plm:base:setup_job
<br>
[atl1-01-mic0:190189] [[32137,0],0] plm:base:setup_vm
<br>
[atl1-01-mic0:190189] [[32137,0],0] plm:base:setup_vm creating map
<br>
[atl1-01-mic0:190189] [[32137,0],0] setup:vm: working unmanaged allocation
<br>
[atl1-01-mic0:190189] [[32137,0],0] using dash_host
<br>
[atl1-01-mic0:190189] [[32137,0],0] checking node atl1-01-mic0
<br>
[atl1-01-mic0:190189] [[32137,0],0] ignoring myself
<br>
[atl1-01-mic0:190189] [[32137,0],0] plm:base:setup_vm only HNP in allocation
<br>
[atl1-01-mic0:190189] [[32137,0],0] complete_setup on job [32137,1]
<br>
[atl1-01-mic0:190189] [[32137,0],0] ORTE_ERROR_LOG: Not found in file base/plm_base_launch_support.c at line 440
<br>
[atl1-01-mic0:190189] [[32137,0],0] plm:base:launch_apps for job [32137,1]
<br>
[atl1-01-mic0:190189] [[32137,0],0] plm:base:launch wiring up iof for job [32137,1]
<br>
[atl1-01-mic0:190189] [[32137,0],0] plm:base:launch [32137,1] registered
<br>
[atl1-01-mic0:190189] [[32137,0],0] plm:base:launch job [32137,1] is not a dynamic spawn
<br>
--------------------------------------------------------------------------
<br>
It looks like SHMEM_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during SHMEM_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open SHMEM
<br>
developer):
<br>

<br>
&nbsp;&nbsp;mca_memheap_base_select() failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
[atl1-01-mic0:190191] Error: pshmem_init.c:61 - shmem_init() SHMEM failed to initialize - aborting
<br>
[atl1-01-mic0:190192] Error: pshmem_init.c:61 - shmem_init() SHMEM failed to initialize - aborting
<br>
--------------------------------------------------------------------------
<br>
SHMEM_ABORT was invoked on rank 1 (pid 190192, host=atl1-01-mic0) with errorcode -1.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
A SHMEM process is aborting at a time when it cannot guarantee that all
<br>
of its peer processes in the job will be killed properly.  You should
<br>
double check that everything has shut down cleanly.
<br>

<br>
Local host: atl1-01-mic0
<br>
PID:        190192
<br>
--------------------------------------------------------------------------
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
[atl1-01-mic0:190189] [[32137,0],0] plm:base:orted_cmd sending orted_exit commands
<br>
--------------------------------------------------------------------------
<br>
shmemrun detected that one or more processes exited with non-zero status, thus causing
<br>
the job to be terminated. The first process to do so was:
<br>

<br>
&nbsp;&nbsp;Process name: [[32137,1],0]
<br>
&nbsp;&nbsp;Exit code:    255
<br>
--------------------------------------------------------------------------
<br>
[atl1-01-mic0:190189] 1 more process has sent help message help-shmem-runtime.txt / shmem_init:startup:internal-failure
<br>
[atl1-01-mic0:190189] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
[atl1-01-mic0:190189] 1 more process has sent help message help-shmem-api.txt / shmem-abort
<br>
[atl1-01-mic0:190189] 1 more process has sent help message help-shmem-runtime.txt / oshmem shmem abort:cannot guarantee all killed
<br>
[atl1-01-mic0:190189] [[32137,0],0] plm:base:receive stop comm
<br>

<br>

<br>
On 04/11/2015 07:41 PM, Ralph Castain wrote:
<br>
Got it - thanks. I fixed that ERROR_LOG issue (I think- please verify). I suspect the memheap issue relates to something else, but I probably need to let the OSHMEM folks comment on it
<br>

<br>

<br>
On Apr 11, 2015, at 9:52 AM, Andy Riebs &lt;andy.riebs_at_[hidden]&lt;mailto:andy.riebs_at_[hidden]&gt;&gt; wrote:
<br>

<br>
Everything is built on the Xeon side, with the icc &quot;-mmic&quot; switch. I then ssh into one of the PHIs, and run shmemrun from there.
<br>

<br>

<br>
On 04/11/2015 12:00 PM, Ralph Castain wrote:
<br>
Let me try to understand the setup a little better. Are you running shmemrun on the PHI itself? Or is it running on the host processor, and you are trying to spawn a process onto the Phi?
<br>

<br>

<br>
On Apr 11, 2015, at 7:55 AM, Andy Riebs &lt;andy.riebs_at_[hidden]&lt;mailto:andy.riebs_at_[hidden]&gt;&gt; wrote:
<br>

<br>
Hi Ralph,
<br>

<br>
Yes, this is attempting to get OSHMEM to run on the Phi.
<br>

<br>
I grabbed openmpi-dev-1484-g033418f.tar.bz2 and configured it with
<br>

<br>
$ ./configure --prefix=/home/ariebs/mic/mpi-nightly    CC=icc -mmic CXX=icpc -mmic    \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--build=x86_64-unknown-linux-gnu --host=x86_64-k1om-linux    \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AR=x86_64-k1om-linux-ar RANLIB=x86_64-k1om-linux-ranlib  LD=x86_64-k1om-linux-ld   \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpirun-prefix-by-default --disable-io-romio     --disable-mpi-fortran    \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-debug     --enable-mca-no-build=btl-usnic,btl-openib,common-verbs,oob-ud
<br>

<br>
(Note that I had to add &quot;oob-ud&quot; to the &quot;--enable-mca-no-build&quot; option, as the build complained that mca oob/ud needed mca common-verbs.)
<br>

<br>
With that configuration, here is what I am seeing now...
<br>

<br>
$ export SHMEM_SYMMETRIC_HEAP_SIZE=1G
<br>
$ shmemrun -H localhost -N 2 --mca sshmem mmap  --mca plm_base_verbose 5 $PWD/mic.out
<br>
[atl1-01-mic0:189895] mca:base:select:(  plm) Querying component [rsh]
<br>
[atl1-01-mic0:189895] [[INVALID],INVALID] plm:rsh_lookup on agent ssh : rsh path NULL
<br>
[atl1-01-mic0:189895] mca:base:select:(  plm) Query of component [rsh] set priority to 10
<br>
[atl1-01-mic0:189895] mca:base:select:(  plm) Querying component [isolated]
<br>
[atl1-01-mic0:189895] mca:base:select:(  plm) Query of component [isolated] set priority to 0
<br>
[atl1-01-mic0:189895] mca:base:select:(  plm) Querying component [slurm]
<br>
[atl1-01-mic0:189895] mca:base:select:(  plm) Skipping component [slurm]. Query failed to return a module
<br>
[atl1-01-mic0:189895] mca:base:select:(  plm) Selected component [rsh]
<br>
[atl1-01-mic0:189895] plm:base:set_hnp_name: initial bias 189895 nodename hash 4121194178
<br>
[atl1-01-mic0:189895] plm:base:set_hnp_name: final jobfam 32419
<br>
[atl1-01-mic0:189895] [[32419,0],0] plm:rsh_setup on agent ssh : rsh path NULL
<br>
[atl1-01-mic0:189895] [[32419,0],0] plm:base:receive start comm
<br>
[atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_job
<br>
[atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_vm
<br>
[atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_vm creating map
<br>
[atl1-01-mic0:189895] [[32419,0],0] setup:vm: working unmanaged allocation
<br>
[atl1-01-mic0:189895] [[32419,0],0] using dash_host
<br>
[atl1-01-mic0:189895] [[32419,0],0] checking node atl1-01-mic0
<br>
[atl1-01-mic0:189895] [[32419,0],0] ignoring myself
<br>
[atl1-01-mic0:189895] [[32419,0],0] plm:base:setup_vm only HNP in allocation
<br>
[atl1-01-mic0:189895] [[32419,0],0] complete_setup on job [32419,1]
<br>
[atl1-01-mic0:189895] [[32419,0],0] ORTE_ERROR_LOG: Not found in file base/plm_base_launch_support.c at line 440
<br>
[atl1-01-mic0:189895] [[32419,0],0] plm:base:launch_apps for job [32419,1]
<br>
[atl1-01-mic0:189895] [[32419,0],0] plm:base:launch wiring up iof for job [32419,1]
<br>
[atl1-01-mic0:189895] [[32419,0],0] plm:base:launch [32419,1] registered
<br>
[atl1-01-mic0:189895] [[32419,0],0] plm:base:launch job [32419,1] is not a dynamic spawn
<br>
[atl1-01-mic0:189899] Error: pshmem_init.c:61 - shmem_init() SHMEM failed to initialize - aborting
<br>
[atl1-01-mic0:189898] Error: pshmem_init.c:61 - shmem_init() SHMEM failed to initialize - aborting
<br>
--------------------------------------------------------------------------
<br>
It looks like SHMEM_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during SHMEM_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open SHMEM
<br>
developer):
<br>

<br>
&nbsp;&nbsp;mca_memheap_base_select() failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
SHMEM_ABORT was invoked on rank 1 (pid 189899, host=atl1-01-mic0) with errorcode -1.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
A SHMEM process is aborting at a time when it cannot guarantee that all
<br>
of its peer processes in the job will be killed properly.  You should
<br>
double check that everything has shut down cleanly.
<br>

<br>
Local host: atl1-01-mic0
<br>
PID:        189899
<br>
--------------------------------------------------------------------------
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
[atl1-01-mic0:189895] [[32419,0],0] plm:base:orted_cmd sending orted_exit commands
<br>
--------------------------------------------------------------------------
<br>
shmemrun detected that one or more processes exited with non-zero status, thus causing
<br>
the job to be terminated. The first process to do so was:
<br>

<br>
&nbsp;&nbsp;Process name: [[32419,1],1]
<br>
&nbsp;&nbsp;Exit code:    255
<br>
--------------------------------------------------------------------------
<br>
[atl1-01-mic0:189895] 1 more process has sent help message help-shmem-runtime.txt / shmem_init:startup:internal-failure
<br>
[atl1-01-mic0:189895] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
[atl1-01-mic0:189895] 1 more process has sent help message help-shmem-api.txt / shmem-abort
<br>
[atl1-01-mic0:189895] 1 more process has sent help message help-shmem-runtime.txt / oshmem shmem abort:cannot guarantee all killed
<br>
[atl1-01-mic0:189895] [[32419,0],0] plm:base:receive stop comm
<br>

<br>

<br>

<br>

<br>
On 04/10/2015 06:37 PM, Ralph Castain wrote:
<br>
Andy - could you please try the current 1.8.5 nightly tarball and see if it helps? The error log indicates that it is failing to get the topology from some daemon, I&#239;&#191;&#189;m assuming the one on the Phi?
<br>

<br>
You might also add &#239;&#191;&#189;enable-debug to that configure line and then put -mca plm_base_verbose on the shmemrun cmd to get more help
<br>

<br>

<br>
On Apr 10, 2015, at 11:55 AM, Andy Riebs &lt;andy.riebs_at_[hidden]&lt;mailto:andy.riebs_at_[hidden]&gt;&gt; wrote:
<br>

<br>
Summary: MPI jobs work fine, SHMEM jobs work just often enough to be tantalizing, on an Intel Xeon Phi/MIC system.
<br>

<br>
Longer version
<br>

<br>
Thanks to the excellent write-up last June (&lt;<a href="https://www.open-mpi.org/community/lists/users/2014/06/24711.php">https://www.open-mpi.org/community/lists/users/2014/06/24711.php</a>&gt;&lt;<a href="https://www.open-mpi.org/community/lists/users/2014/06/24711.php">https://www.open-mpi.org/community/lists/users/2014/06/24711.php</a>&gt;), I have been able to build a version of Open MPI for the Xeon Phi coprocessor that runs MPI jobs on the Phi coprocessor with no problem, but not SHMEM jobs.  Just at the point where I was about to document the problems I was having with SHMEM, my trivial SHMEM job worked. And then failed when I tried to run it again, immediately afterwards. I have a feeling I may be in uncharted  territory here.
<br>

<br>
Environment
<br>

<br>
&nbsp;&nbsp;*   RHEL 6.5
<br>
&nbsp;&nbsp;*   Intel Composer XE 2015
<br>
&nbsp;&nbsp;*   Xeon Phi/MIC
<br>

<br>
----------------
<br>

<br>

<br>
Configuration
<br>

<br>
$ export PATH=/usr/linux-k1om-4.7/bin/:$PATH
<br>
$ source /opt/intel/15.0/composer_xe_2015/bin/compilervars.sh intel64
<br>
$ ./configure --prefix=/home/ariebs/mic/mpi \
<br>
&nbsp;&nbsp;&nbsp;CC=&quot;icc -mmic&quot; CXX=&quot;icpc -mmic&quot; \
<br>
&nbsp;&nbsp;&nbsp;--build=x86_64-unknown-linux-gnu --host=x86_64-k1om-linux \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;AR=x86_64-k1om-linux-ar RANLIB=x86_64-k1om-linux-ranlib \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;LD=x86_64-k1om-linux-ld \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpirun-prefix-by-default --disable-io-romio \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--disable-vt --disable-mpi-fortran \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-mca-no-build=btl-usnic,btl-openib,common-verbs
<br>
$ make
<br>
$ make install
<br>

<br>
----------------
<br>

<br>
Test program
<br>

<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;shmem.h&gt;
<br>
int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int me, num_pe;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shmem_init();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;num_pe = num_pes();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;me = my_pe();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Hello World from process %ld of %ld\n&quot;, me, num_pe);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(0);
<br>
}
<br>

<br>
----------------
<br>

<br>
Building the program
<br>

<br>
export PATH=/home/ariebs/mic/mpi/bin:$PATH
<br>
export PATH=/usr/linux-k1om-4.7/bin/:$PATH
<br>
source /opt/intel/15.0/composer_xe_2015/bin/compilervars.sh intel64
<br>
export LD_LIBRARY_PATH=/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic:$LD_LIBRARY_PATH
<br>

<br>
icc -mmic -std=gnu99 -I/home/ariebs/mic/mpi/include -pthread \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Wl,-rpath -Wl,/home/ariebs/mic/mpi/lib -Wl,--enable-new-dtags \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-L/home/ariebs/mic/mpi/lib -loshmem -lmpi -lopen-rte -lopen-pal \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-lm -ldl -lutil \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Wl,-rpath -Wl,/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-L/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-o mic.out  shmem_hello.c
<br>

<br>
----------------
<br>

<br>
Running the program
<br>

<br>
(Note that the program had been consistently failing. Then, when I logged back into the system to capture the results, it worked once,  and then immediately failed when I tried again, as shown below. Logging in and out isn't sufficient to correct the problem. Overall, I think I had 3 successful runs in 30-40 attempts.)
<br>

<br>
$ shmemrun -H localhost -N 2 --mca sshmem mmap ./mic.out
<br>
[atl1-01-mic0:189372] [[30936,0],0] ORTE_ERROR_LOG: Not found in file base/plm_base_launch_support.c at line 426
<br>
Hello World from process 0 of 2
<br>
Hello World from process 1 of 2
<br>
$ shmemrun -H localhost -N 2 --mca sshmem mmap ./mic.out
<br>
[atl1-01-mic0:189381] [[30881,0],0] ORTE_ERROR_LOG: Not found in file base/plm_base_launch_support.c at line 426
<br>
[atl1-01-mic0:189383] Error: pshmem_init.c:61 - shmem_init() SHMEM failed to initialize - aborting
<br>
--------------------------------------------------------------------------
<br>
It looks like SHMEM_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during SHMEM_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open SHMEM
<br>
developer):
<br>

<br>
&nbsp;&nbsp;mca_memheap_base_select() failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
SHMEM_ABORT was invoked on rank 0 (pid 189383, host=atl1-01-mic0) with errorcode -1.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
A SHMEM process is aborting at a time when it cannot guarantee that all
<br>
of its peer processes in the job will be killed properly.  You should
<br>
double check that everything has shut down cleanly.
<br>

<br>
Local host: atl1-01-mic0
<br>
PID:        189383
<br>
--------------------------------------------------------------------------
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
shmemrun detected that one or more processes exited with non-zero status, thus causing
<br>
the job to be terminated. The first process to do so was:
<br>

<br>
&nbsp;&nbsp;Process name: [[30881,1],0]
<br>
&nbsp;&nbsp;Exit code:    255
<br>
--------------------------------------------------------------------------
<br>

<br>
Any thoughts about where to go from here?
<br>

<br>
Andy
<br>

<br>

<br>
--
<br>
Andy Riebs
<br>
Hewlett-Packard Company
<br>
High Performance Computing
<br>
+1 404 648 9024
<br>
My opinions are not necessarily those of HP
<br>

<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26670.php">http://www.open-mpi.org/community/lists/users/2015/04/26670.php</a>
<br>

<br>

<br>

<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26676.php">http://www.open-mpi.org/community/lists/users/2015/04/26676.php</a>
<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26678.php">http://www.open-mpi.org/community/lists/users/2015/04/26678.php</a>
<br>

<br>

<br>

<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26679.php">http://www.open-mpi.org/community/lists/users/2015/04/26679.php</a>
<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26680.php">http://www.open-mpi.org/community/lists/users/2015/04/26680.php</a>
<br>

<br>

<br>

<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26682.php">http://www.open-mpi.org/community/lists/users/2015/04/26682.php</a>
<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26683.php">http://www.open-mpi.org/community/lists/users/2015/04/26683.php</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26686.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Previous message:</strong> <a href="26684.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>In reply to:</strong> <a href="26684.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26689.php">Andy Riebs: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
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
