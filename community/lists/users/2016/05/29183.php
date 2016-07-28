<?
$subject_val = "Re: [OMPI users] No core dump in some cases";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 11 23:23:06 2016" -->
<!-- isoreceived="20160512032306" -->
<!-- sent="Wed, 11 May 2016 23:23:03 -0400" -->
<!-- isosent="20160512032303" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] No core dump in some cases" -->
<!-- id="CAHXxYDi2+T=deDwMiYRs2z5xuFYo18Di2e5A6aDoAgLGmyFaYw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="10d8a97b-39c0-f5f1-3433-e911f587ee18_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] No core dump in some cases<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-11 23:23:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29184.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Previous message:</strong> <a href="29182.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>In reply to:</strong> <a href="29181.php">Gilles Gouaillardet: "Re: [OMPI users] No core dump in some cases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29184.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Reply:</strong> <a href="29184.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Gilles
<br>
<p>Mystery solved! In fact, this one line is exactly what was needed!! It
<br>
turns out the OMPI signal handlers are irrelevant. (i.e. don't make any
<br>
difference when this env variable is set)
<br>
<p>This explains:
<br>
<p>1. The difference in the behaviour in the two clusters (one has PSM, the
<br>
other does not)
<br>
2. Why you couldn't find where in OMPI code the .btr files are being
<br>
generated (looks like they are being generated in PSM library)
<br>
<p>And, now that I can get a core file (finally!), I can present the back
<br>
trace where the crash in MPI_Init() is happening. It is as follows:
<br>
<p>#0  0x00007f1c114977d8 in main_arena () from /lib64/libc.so.6
<br>
#1  0x00007f1c106719ac in device_destruct (device=0x1c85b70) at
<br>
btl_openib_component.c:985
<br>
#2  0x00007f1c1066d0ae in opal_obj_run_destructors (object=0x1c85b70) at
<br>
../../../../opal/class/opal_object.h:460
<br>
#3  0x00007f1c10674d3c in init_one_device (btl_list=0x7ffd00dada50,
<br>
ib_dev=0x1c85430) at btl_openib_component.c:2255
<br>
#4  0x00007f1c10676800 in btl_openib_component_init
<br>
(num_btl_modules=0x7ffd00dadb80, enable_progress_threads=true,
<br>
enable_mpi_threads=false)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at btl_openib_component.c:2752
<br>
#5  0x00007f1c10633971 in mca_btl_base_select
<br>
(enable_progress_threads=true, enable_mpi_threads=false) at
<br>
base/btl_base_select.c:110
<br>
#6  0x00007f1c117fb0a0 in mca_bml_r2_component_init
<br>
(priority=0x7ffd00dadc4c, enable_progress_threads=true,
<br>
enable_mpi_threads=false)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at bml_r2_component.c:86
<br>
#7  0x00007f1c117f8033 in mca_bml_base_init (enable_progress_threads=true,
<br>
enable_mpi_threads=false) at base/bml_base_init.c:74
<br>
#8  0x00007f1c1173f675 in ompi_mpi_init (argc=1, argv=0x7ffd00dae008,
<br>
requested=0, provided=0x7ffd00daddbc) at runtime/ompi_mpi_init.c:590
<br>
#9  0x00007f1c1177c8b7 in PMPI_Init (argc=0x7ffd00daddfc,
<br>
argv=0x7ffd00daddf0) at pinit.c:66
<br>
#10 0x0000000000400aa0 in main (argc=1, argv=0x7ffd00dae008) at mpitest.c:17
<br>
<p>This is with the absolute latest code from master.
<br>
<p>Thanks everyone for their help.
<br>
<p>Durga
<br>
<p>The surgeon general advises you to eat right, exercise regularly and quit
<br>
ageing.
<br>
<p>On Wed, May 11, 2016 at 10:55 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Note the psm library sets its own signal handler, possibly after the
</span><br>
<span class="quotelev1">&gt; OpenMPI one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that can be disabled by
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export IPATH_NO_BACKTRACE=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/12/2016 11:34 AM, dpchoudh . wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your continued support. With your help, I have a better
</span><br>
<span class="quotelev1">&gt; understanding of what is happening. Here are the details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Yes, I am sure that ulimit -c is 'unlimited' (and for the test in
</span><br>
<span class="quotelev1">&gt; question, I am running it on a single node, so there are no other nodes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. The command I am running is possibly the simplest MPI command:
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 &lt;program&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks to me, after running your test code, that what is crashing is
</span><br>
<span class="quotelev1">&gt; MPI_Init() itself. The output from your code (I called it 'btrtest') is as
</span><br>
<span class="quotelev1">&gt; follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI ~]$ mpirun -np 2 ./btrtest
</span><br>
<span class="quotelev1">&gt; before MPI_Init : -1 -1
</span><br>
<span class="quotelev1">&gt; before MPI_Init : -1 -1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btrtest:7275 terminated with signal 11 at PC=7f401f49e7d8
</span><br>
<span class="quotelev1">&gt; SP=7ffec47e7578.  Backtrace:
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(+0x3ba7d8)[0x7f401f49e7d8]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btrtest:7274 terminated with signal 11 at PC=7f1ba21897d8
</span><br>
<span class="quotelev1">&gt; SP=7ffc516ac8d8.  Backtrace:
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(+0x3ba7d8)[0x7f1ba21897d8]
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process name: [[7936,1],1]
</span><br>
<span class="quotelev1">&gt;   Exit code:    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So obviously the code does not make it past MPI_Init()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is an issue that I have been observing for quite a while in different
</span><br>
<span class="quotelev1">&gt; forms and have reported on the forum a few times also. Let me elaborate:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Both my 'well-behaving' and crashing clusters run CentOS 7 (the crashing
</span><br>
<span class="quotelev1">&gt; one has the latest updates, the well-behaving one does not as I am not
</span><br>
<span class="quotelev1">&gt; allowed to apply updates on that). They both have OMPI, from the master
</span><br>
<span class="quotelev1">&gt; branch, compiled from the source. Both consist of 64 bit Dell servers,
</span><br>
<span class="quotelev1">&gt; although not identical models (I doubt if that matters)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only significant difference between the two is this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The well behaved one (if it does core dump, that is because there is a bug
</span><br>
<span class="quotelev1">&gt; in the MPI app) has very simple network hardware: two different NICs (one
</span><br>
<span class="quotelev1">&gt; Broadcom GbE, one proprietary NIC that is currently being exposed as an IP
</span><br>
<span class="quotelev1">&gt; interface). There is no RDMA capability there at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The crashing one have 4 different NICs:
</span><br>
<span class="quotelev1">&gt; 1. Broadcom GbE
</span><br>
<span class="quotelev1">&gt; 2. Chelsio T3 based 10Gb iWARP NIC
</span><br>
<span class="quotelev1">&gt; 3. QLogic 20Gb Infiniband (PSM capable)
</span><br>
<span class="quotelev1">&gt; 4. LSI logic Fibre channel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this situation, WITH ALL BUT THE GbE LINK DOWN (the GbE connects the
</span><br>
<span class="quotelev1">&gt; machine to the WAN link), it seems just the presence of these NICs matter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are the various commands and outputs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI ~]$ mpirun -np 2 ./btrtest
</span><br>
<span class="quotelev1">&gt; before MPI_Init : -1 -1
</span><br>
<span class="quotelev1">&gt; before MPI_Init : -1 -1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btrtest:10032 terminated with signal 11 at PC=7f6897c197d8
</span><br>
<span class="quotelev1">&gt; SP=7ffcae2b2ef8.  Backtrace:
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(+0x3ba7d8)[0x7f6897c197d8]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btrtest:10033 terminated with signal 11 at PC=7fb035c3e7d8
</span><br>
<span class="quotelev1">&gt; SP=7ffe61a92088.  Backtrace:
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(+0x3ba7d8)[0x7fb035c3e7d8]
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process name: [[9294,1],0]
</span><br>
<span class="quotelev1">&gt;   Exit code:    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI ~]$ mpirun -np 2 -mca pml ob1 ./btrtest
</span><br>
<span class="quotelev1">&gt; before MPI_Init : -1 -1
</span><br>
<span class="quotelev1">&gt; before MPI_Init : -1 -1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btrtest:10076 terminated with signal 11 at PC=7fa92d20b7d8
</span><br>
<span class="quotelev1">&gt; SP=7ffebb106028.  Backtrace:
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(+0x3ba7d8)[0x7fa92d20b7d8]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btrtest:10077 terminated with signal 11 at PC=7f5012fa57d8
</span><br>
<span class="quotelev1">&gt; SP=7ffea4f4fdf8.  Backtrace:
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(+0x3ba7d8)[0x7f5012fa57d8]
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process name: [[9266,1],0]
</span><br>
<span class="quotelev1">&gt;   Exit code:    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI ~]$ mpirun -np 2 -mca pml ob1 -mca btl self,sm ./btrtest
</span><br>
<span class="quotelev1">&gt; before MPI_Init : -1 -1
</span><br>
<span class="quotelev1">&gt; before MPI_Init : -1 -1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btrtest:10198 terminated with signal 11 at PC=400829 SP=7ffe6e148870.
</span><br>
<span class="quotelev1">&gt; Backtrace:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btrtest:10197 terminated with signal 11 at PC=400829 SP=7ffe87be6cd0.
</span><br>
<span class="quotelev1">&gt; Backtrace:
</span><br>
<span class="quotelev1">&gt; ./btrtest[0x400829]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xf5)[0x7f9473bbeb15]
</span><br>
<span class="quotelev1">&gt; ./btrtest[0x4006d9]
</span><br>
<span class="quotelev1">&gt; ./btrtest[0x400829]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xf5)[0x7fdfe2d8eb15]
</span><br>
<span class="quotelev1">&gt; ./btrtest[0x4006d9]
</span><br>
<span class="quotelev1">&gt; after MPI_Init : -1 -1
</span><br>
<span class="quotelev1">&gt; after MPI_Init : -1 -1
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process name: [[9384,1],1]
</span><br>
<span class="quotelev1">&gt;   Exit code:    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI ~]$ ulimit -a
</span><br>
<span class="quotelev1">&gt; core file size          (blocks, -c) unlimited
</span><br>
<span class="quotelev1">&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev1">&gt; scheduling priority             (-e) 0
</span><br>
<span class="quotelev1">&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev1">&gt; pending signals                 (-i) 216524
</span><br>
<span class="quotelev1">&gt; max locked memory       (kbytes, -l) unlimited
</span><br>
<span class="quotelev1">&gt; max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev1">&gt; open files                      (-n) 1024
</span><br>
<span class="quotelev1">&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev1">&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev1">&gt; real-time priority              (-r) 0
</span><br>
<span class="quotelev1">&gt; stack size              (kbytes, -s) 8192
</span><br>
<span class="quotelev1">&gt; cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev1">&gt; max user processes              (-u) 4096
</span><br>
<span class="quotelev1">&gt; virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev1">&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI ~]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do realize that my setup is very unusual (I am a quasi-developer of MPI
</span><br>
<span class="quotelev1">&gt; whereas most other folks in this list are likely end-users), but somehow
</span><br>
<span class="quotelev1">&gt; just disabling this 'execinfo' MCA would allow me to make progress (and
</span><br>
<span class="quotelev1">&gt; also find out why/where MPI_Init() is crashing!). Is there any way I can do
</span><br>
<span class="quotelev1">&gt; that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The surgeon general advises you to eat right, exercise regularly and quit
</span><br>
<span class="quotelev1">&gt; ageing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 11, 2016 at 8:58 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you sure ulimit -c unlimited is *really* applied on all hosts
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; can you please run the simple program below and confirm that ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;sys/time.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;sys/resource.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;poll.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev2">&gt;&gt;     struct rlimit rlim;
</span><br>
<span class="quotelev2">&gt;&gt;     char * c = (char *)0;
</span><br>
<span class="quotelev2">&gt;&gt;     getrlimit(RLIMIT_CORE, &amp;rlim);
</span><br>
<span class="quotelev2">&gt;&gt;     printf (&quot;before MPI_Init : %d %d\n&quot;, rlim.rlim_cur, rlim.rlim_max);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;     getrlimit(RLIMIT_CORE, &amp;rlim);
</span><br>
<span class="quotelev2">&gt;&gt;     printf (&quot;after MPI_Init : %d %d\n&quot;, rlim.rlim_cur, rlim.rlim_max);
</span><br>
<span class="quotelev2">&gt;&gt;     *c = 0;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;     return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 5/12/2016 4:22 AM, dpchoudh . wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for the advice. However, that did not seem to make any
</span><br>
<span class="quotelev2">&gt;&gt; difference. Here is what I did (on the cluster that generates .btr files
</span><br>
<span class="quotelev2">&gt;&gt; for core dumps):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [durga_at_smallMPI git]$ ompi_info --all | grep opal_signal
</span><br>
<span class="quotelev2">&gt;&gt;            MCA opal base: parameter &quot;opal_signal&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;6,7,8,11&quot;, data source: default, level: 3 user/all, type: string)
</span><br>
<span class="quotelev2">&gt;&gt; [durga_at_smallMPI git]$
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; According to &lt;bits/signum.h&gt;, signals 6.7,8,11 are this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #define    SIGABRT        6    /* Abort (ANSI).  */
</span><br>
<span class="quotelev2">&gt;&gt; #define    SIGBUS        7    /* BUS error (4.2 BSD).  */
</span><br>
<span class="quotelev2">&gt;&gt; #define    SIGFPE        8    /* Floating-point exception (ANSI).  */
</span><br>
<span class="quotelev2">&gt;&gt; #define    SIGSEGV        11    /* Segmentation violation (ANSI).  */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And thus I added the following just after MPI_Init()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;     signal(SIGABRT, SIG_DFL);
</span><br>
<span class="quotelev2">&gt;&gt;     signal(SIGBUS, SIG_DFL);
</span><br>
<span class="quotelev2">&gt;&gt;     signal(SIGFPE, SIG_DFL);
</span><br>
<span class="quotelev2">&gt;&gt;     signal(SIGSEGV, SIG_DFL);
</span><br>
<span class="quotelev2">&gt;&gt;     signal(SIGTERM, SIG_DFL);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (I added the 'SIGTERM' part later, just in case it would make a
</span><br>
<span class="quotelev2">&gt;&gt; difference; i didn't)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The resulting code still generates .btr files instead of core files.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like the 'execinfo' MCA component is being used as the backtrace
</span><br>
<span class="quotelev2">&gt;&gt; mechanism:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [durga_at_smallMPI git]$ ompi_info | grep backtrace
</span><br>
<span class="quotelev2">&gt;&gt;            MCA backtrace: execinfo (MCA v2.1.0, API v2.0.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v3.0.0)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, I could not find any way to choose 'none' instead of 'execinfo'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And the strange thing is, on the cluster where regular core dump is
</span><br>
<span class="quotelev2">&gt;&gt; happening, the output of
</span><br>
<span class="quotelev2">&gt;&gt; $ ompi_info | grep backtrace
</span><br>
<span class="quotelev2">&gt;&gt; is identical to the above. (Which kind of makes sense because they were
</span><br>
<span class="quotelev2">&gt;&gt; created from the same source with the same configure options.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry to harp on this, but without a core file it is hard to debug the
</span><br>
<span class="quotelev2">&gt;&gt; application (e.g. examine stack variables).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you
</span><br>
<span class="quotelev2">&gt;&gt; Durga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The surgeon general advises you to eat right, exercise regularly and quit
</span><br>
<span class="quotelev2">&gt;&gt; ageing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, May 11, 2016 at 3:37 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;gilles.gouaillardet_at_[hidden]&gt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Durga,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you might wanna try to restore the signal handler for other signals as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; well
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (SIGSEGV, SIGBUS, ...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info --all | grep opal_signal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does list the signal you should restore the handler
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only one backtrace component is built (out of several candidates :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; execinfo, none, printstack)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nm -l libopen-pal.so | grep backtrace
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will hint you which component was built
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your two similar distros might have different backtrace component
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btr is a plain text file with a back trace &quot;ala&quot; gdb
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nathan,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i did a 'grep btr' and could not find anything :-(
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_backtrace_buffer and opal_backtrace_print are only used with stderr.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so i am puzzled who creates the tracefile name and where ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; also, no stack is printed by default unless opal_abort_print_stack is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; true
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, May 11, 2016 at 3:43 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello Nathan
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Thank you for your response. Could you please be more specific? Adding
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; following after MPI_Init() does not seem to make a difference.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   signal(SIGABRT, SIG_DFL);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   signal(SIGTERM, SIG_DFL);
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I also find it puzzling that nearly identical OMPI distro running on a
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; different machine shows different behaviour.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Best regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Durga
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; The surgeon general advises you to eat right, exercise regularly and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; quit
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ageing.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On Tue, May 10, 2016 at 10:02 AM, Hjelm, Nathan Thomas &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;hjelmn_at_[hidden]&gt;hjelmn_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; btr files are indeed created by open mpi's backtrace mechanism. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; think we
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; should revisit it at some point but for now the only effective way i
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; found to prevent it is to restore the default signal handlers after
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; MPI_Init.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Excuse the quoting style. Good sucks.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; From: users on behalf of dpchoudh .
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Sent: Monday, May 09, 2016 2:59:37 PM
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Subject: Re: [OMPI users] No core dump in some cases
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Hi Gus
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Thanks for your suggestion. But I am not using any resource manager
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (i.e.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; I am launching mpirun from the bash shell.). In fact, both of the two
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; clusters I talked about run CentOS 7 and I launch the job the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; way on
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; both of these, yet one of them creates standard core files and the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; creates the 'btr; files. Strange thing is, I could not find anything
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; .btr (= Backtrace?) files on Google, which is any I asked on this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; forum.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Best regards
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Durga
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; The surgeon general advises you to eat right, exercise regularly and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; quit
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; ageing.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; On Mon, May 9, 2016 at 12:04 PM, Gus Correa
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; &lt;gus_at_[hidden]&lt;mailto: &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Hi Durga
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Just in case ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; If you're using a resource manager to start the jobs (Torque, etc),
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; you need to have them set the limits (for coredump size, stacksize,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; locked
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; memory size, etc).
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; This way the jobs will inherit the limits from the
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; resource manager daemon.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; On Torque (which I use) I do this on the pbs_mom daemon
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; init script (I am still before the systemd era, that lovely POS).
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; And set the hard/soft limits on /etc/security/limits.conf as well.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; On 05/07/2016 12:27 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; I'm afraid I don't know what a .btr file is -- that is not something
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; is controlled by Open MPI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; You might want to look into your OS settings to see if it has some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; kind of
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; alternate corefile mechanism...?
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; On May 6, 2016, at 8:58 PM, dpchoudh .
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; &lt;dpchoudh_at_[hidden]&lt;mailto: &lt;dpchoudh_at_[hidden]&gt;dpchoudh_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Hello all
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; I run MPI jobs (for test purpose only) on two different 'clusters'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Both
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; 'clusters' have two nodes only, connected back-to-back. The two are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; very
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; similar, but not identical, both software and hardware wise.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Both have ulimit -c set to unlimited. However, only one of the two
</span><br>
<span class="quotelev3">&gt;&gt;&gt; creates
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; core files when an MPI job crashes. The other creates a text file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; named
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; something like
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;program_name_that_crashed&gt;.80s-&lt;a-number-that-looks-like-a-PID&gt;,&lt;hostname-where-the-crash-happened&gt;.btr
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; I'd much prefer a core file because that allows me to debug with a lot
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; more options than a static text file with addresses. How do I get a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; file in all situations? I am using MPI source from the master branch.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Durga
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; The surgeon general advises you to eat right, exercise regularly and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; quit
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; ageing.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; users_at_[hidden]&lt;mailto: &lt;users_at_[hidden]&gt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Subscription: &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29124.php">http://www.open-mpi.org/community/lists/users/2016/05/29124.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; users_at_[hidden]&lt;mailto: &lt;users_at_[hidden]&gt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Subscription: &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29141.php">http://www.open-mpi.org/community/lists/users/2016/05/29141.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Subscription: &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29154.php">http://www.open-mpi.org/community/lists/users/2016/05/29154.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Subscription: &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29169.php">http://www.open-mpi.org/community/lists/users/2016/05/29169.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/05/29170.php">http://www.open-mpi.org/community/lists/users/2016/05/29170.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29170.php">http://www.open-mpi.org/community/lists/users/2016/05/29170.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29176.php">http://www.open-mpi.org/community/lists/users/2016/05/29176.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29177.php">http://www.open-mpi.org/community/lists/users/2016/05/29177.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29178.php">http://www.open-mpi.org/community/lists/users/2016/05/29178.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29181.php">http://www.open-mpi.org/community/lists/users/2016/05/29181.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29183/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29184.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Previous message:</strong> <a href="29182.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>In reply to:</strong> <a href="29181.php">Gilles Gouaillardet: "Re: [OMPI users] No core dump in some cases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29184.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Reply:</strong> <a href="29184.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
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
