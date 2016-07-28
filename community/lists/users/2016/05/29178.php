<?
$subject_val = "Re: [OMPI users] No core dump in some cases";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 11 22:34:56 2016" -->
<!-- isoreceived="20160512023456" -->
<!-- sent="Wed, 11 May 2016 22:34:52 -0400" -->
<!-- isosent="20160512023452" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] No core dump in some cases" -->
<!-- id="CAHXxYDjEuZiJbh+s6pL6F5m4D5tNZ-b3+B9-9R5+x0bUUeHqkA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="a6cad9d2-87cc-515f-f8f8-775aff973082_at_rist.or.jp" -->
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
<strong>Date:</strong> 2016-05-11 22:34:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29179.php">Ralph Castain: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Previous message:</strong> <a href="29177.php">Gilles Gouaillardet: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>In reply to:</strong> <a href="29177.php">Gilles Gouaillardet: "Re: [OMPI users] No core dump in some cases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29179.php">Ralph Castain: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Reply:</strong> <a href="29179.php">Ralph Castain: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Reply:</strong> <a href="29180.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Reply:</strong> <a href="29181.php">Gilles Gouaillardet: "Re: [OMPI users] No core dump in some cases"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Gilles
<br>
<p>Thank you for your continued support. With your help, I have a better
<br>
understanding of what is happening. Here are the details.
<br>
<p>1. Yes, I am sure that ulimit -c is 'unlimited' (and for the test in
<br>
question, I am running it on a single node, so there are no other nodes)
<br>
<p>2. The command I am running is possibly the simplest MPI command:
<br>
mpirun -np 2 &lt;program&gt;
<br>
<p>It looks to me, after running your test code, that what is crashing is
<br>
MPI_Init() itself. The output from your code (I called it 'btrtest') is as
<br>
follows:
<br>
<p>[durga_at_smallMPI ~]$ mpirun -np 2 ./btrtest
<br>
before MPI_Init : -1 -1
<br>
before MPI_Init : -1 -1
<br>
<p>btrtest:7275 terminated with signal 11 at PC=7f401f49e7d8 SP=7ffec47e7578.
<br>
Backtrace:
<br>
/lib64/libc.so.6(+0x3ba7d8)[0x7f401f49e7d8]
<br>
<p>btrtest:7274 terminated with signal 11 at PC=7f1ba21897d8 SP=7ffc516ac8d8.
<br>
Backtrace:
<br>
/lib64/libc.so.6(+0x3ba7d8)[0x7f1ba21897d8]
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun detected that one or more processes exited with non-zero status,
<br>
thus causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;Process name: [[7936,1],1]
<br>
&nbsp;&nbsp;Exit code:    1
<br>
--------------------------------------------------------------------------
<br>
<p>So obviously the code does not make it past MPI_Init()
<br>
<p>This is an issue that I have been observing for quite a while in different
<br>
forms and have reported on the forum a few times also. Let me elaborate:
<br>
<p>Both my 'well-behaving' and crashing clusters run CentOS 7 (the crashing
<br>
one has the latest updates, the well-behaving one does not as I am not
<br>
allowed to apply updates on that). They both have OMPI, from the master
<br>
branch, compiled from the source. Both consist of 64 bit Dell servers,
<br>
although not identical models (I doubt if that matters)
<br>
<p>The only significant difference between the two is this:
<br>
<p>The well behaved one (if it does core dump, that is because there is a bug
<br>
in the MPI app) has very simple network hardware: two different NICs (one
<br>
Broadcom GbE, one proprietary NIC that is currently being exposed as an IP
<br>
interface). There is no RDMA capability there at all.
<br>
<p>The crashing one have 4 different NICs:
<br>
1. Broadcom GbE
<br>
2. Chelsio T3 based 10Gb iWARP NIC
<br>
3. QLogic 20Gb Infiniband (PSM capable)
<br>
4. LSI logic Fibre channel
<br>
<p>In this situation, WITH ALL BUT THE GbE LINK DOWN (the GbE connects the
<br>
machine to the WAN link), it seems just the presence of these NICs matter.
<br>
<p>Here are the various commands and outputs:
<br>
<p>[durga_at_smallMPI ~]$ mpirun -np 2 ./btrtest
<br>
before MPI_Init : -1 -1
<br>
before MPI_Init : -1 -1
<br>
<p>btrtest:10032 terminated with signal 11 at PC=7f6897c197d8
<br>
SP=7ffcae2b2ef8.  Backtrace:
<br>
/lib64/libc.so.6(+0x3ba7d8)[0x7f6897c197d8]
<br>
<p>btrtest:10033 terminated with signal 11 at PC=7fb035c3e7d8
<br>
SP=7ffe61a92088.  Backtrace:
<br>
/lib64/libc.so.6(+0x3ba7d8)[0x7fb035c3e7d8]
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun detected that one or more processes exited with non-zero status,
<br>
thus causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;Process name: [[9294,1],0]
<br>
&nbsp;&nbsp;Exit code:    1
<br>
--------------------------------------------------------------------------
<br>
<p>[durga_at_smallMPI ~]$ mpirun -np 2 -mca pml ob1 ./btrtest
<br>
before MPI_Init : -1 -1
<br>
before MPI_Init : -1 -1
<br>
<p>btrtest:10076 terminated with signal 11 at PC=7fa92d20b7d8
<br>
SP=7ffebb106028.  Backtrace:
<br>
/lib64/libc.so.6(+0x3ba7d8)[0x7fa92d20b7d8]
<br>
<p>btrtest:10077 terminated with signal 11 at PC=7f5012fa57d8
<br>
SP=7ffea4f4fdf8.  Backtrace:
<br>
/lib64/libc.so.6(+0x3ba7d8)[0x7f5012fa57d8]
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun detected that one or more processes exited with non-zero status,
<br>
thus causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;Process name: [[9266,1],0]
<br>
&nbsp;&nbsp;Exit code:    1
<br>
--------------------------------------------------------------------------
<br>
<p>[durga_at_smallMPI ~]$ mpirun -np 2 -mca pml ob1 -mca btl self,sm ./btrtest
<br>
before MPI_Init : -1 -1
<br>
before MPI_Init : -1 -1
<br>
<p>btrtest:10198 terminated with signal 11 at PC=400829 SP=7ffe6e148870.
<br>
Backtrace:
<br>
<p>btrtest:10197 terminated with signal 11 at PC=400829 SP=7ffe87be6cd0.
<br>
Backtrace:
<br>
./btrtest[0x400829]
<br>
/lib64/libc.so.6(__libc_start_main+0xf5)[0x7f9473bbeb15]
<br>
./btrtest[0x4006d9]
<br>
./btrtest[0x400829]
<br>
/lib64/libc.so.6(__libc_start_main+0xf5)[0x7fdfe2d8eb15]
<br>
./btrtest[0x4006d9]
<br>
after MPI_Init : -1 -1
<br>
after MPI_Init : -1 -1
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun detected that one or more processes exited with non-zero status,
<br>
thus causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;Process name: [[9384,1],1]
<br>
&nbsp;&nbsp;Exit code:    1
<br>
--------------------------------------------------------------------------
<br>
<p><p>[durga_at_smallMPI ~]$ ulimit -a
<br>
core file size          (blocks, -c) unlimited
<br>
data seg size           (kbytes, -d) unlimited
<br>
scheduling priority             (-e) 0
<br>
file size               (blocks, -f) unlimited
<br>
pending signals                 (-i) 216524
<br>
max locked memory       (kbytes, -l) unlimited
<br>
max memory size         (kbytes, -m) unlimited
<br>
open files                      (-n) 1024
<br>
pipe size            (512 bytes, -p) 8
<br>
POSIX message queues     (bytes, -q) 819200
<br>
real-time priority              (-r) 0
<br>
stack size              (kbytes, -s) 8192
<br>
cpu time               (seconds, -t) unlimited
<br>
max user processes              (-u) 4096
<br>
virtual memory          (kbytes, -v) unlimited
<br>
file locks                      (-x) unlimited
<br>
[durga_at_smallMPI ~]$
<br>
<p><p>I do realize that my setup is very unusual (I am a quasi-developer of MPI
<br>
whereas most other folks in this list are likely end-users), but somehow
<br>
just disabling this 'execinfo' MCA would allow me to make progress (and
<br>
also find out why/where MPI_Init() is crashing!). Is there any way I can do
<br>
that?
<br>
<p>Thank you
<br>
Durga
<br>
<p>The surgeon general advises you to eat right, exercise regularly and quit
<br>
ageing.
<br>
<p>On Wed, May 11, 2016 at 8:58 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Are you sure ulimit -c unlimited is *really* applied on all hosts
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you please run the simple program below and confirm that ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/time.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/resource.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;poll.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt;     struct rlimit rlim;
</span><br>
<span class="quotelev1">&gt;     char * c = (char *)0;
</span><br>
<span class="quotelev1">&gt;     getrlimit(RLIMIT_CORE, &amp;rlim);
</span><br>
<span class="quotelev1">&gt;     printf (&quot;before MPI_Init : %d %d\n&quot;, rlim.rlim_cur, rlim.rlim_max);
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     getrlimit(RLIMIT_CORE, &amp;rlim);
</span><br>
<span class="quotelev1">&gt;     printf (&quot;after MPI_Init : %d %d\n&quot;, rlim.rlim_cur, rlim.rlim_max);
</span><br>
<span class="quotelev1">&gt;     *c = 0;
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/12/2016 4:22 AM, dpchoudh . wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for the advice. However, that did not seem to make any
</span><br>
<span class="quotelev1">&gt; difference. Here is what I did (on the cluster that generates .btr files
</span><br>
<span class="quotelev1">&gt; for core dumps):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI git]$ ompi_info --all | grep opal_signal
</span><br>
<span class="quotelev1">&gt;            MCA opal base: parameter &quot;opal_signal&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;6,7,8,11&quot;, data source: default, level: 3 user/all, type: string)
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI git]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; According to &lt;bits/signum.h&gt;, signals 6.7,8,11 are this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define    SIGABRT        6    /* Abort (ANSI).  */
</span><br>
<span class="quotelev1">&gt; #define    SIGBUS        7    /* BUS error (4.2 BSD).  */
</span><br>
<span class="quotelev1">&gt; #define    SIGFPE        8    /* Floating-point exception (ANSI).  */
</span><br>
<span class="quotelev1">&gt; #define    SIGSEGV        11    /* Segmentation violation (ANSI).  */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And thus I added the following just after MPI_Init()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     signal(SIGABRT, SIG_DFL);
</span><br>
<span class="quotelev1">&gt;     signal(SIGBUS, SIG_DFL);
</span><br>
<span class="quotelev1">&gt;     signal(SIGFPE, SIG_DFL);
</span><br>
<span class="quotelev1">&gt;     signal(SIGSEGV, SIG_DFL);
</span><br>
<span class="quotelev1">&gt;     signal(SIGTERM, SIG_DFL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I added the 'SIGTERM' part later, just in case it would make a
</span><br>
<span class="quotelev1">&gt; difference; i didn't)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The resulting code still generates .btr files instead of core files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like the 'execinfo' MCA component is being used as the backtrace
</span><br>
<span class="quotelev1">&gt; mechanism:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI git]$ ompi_info | grep backtrace
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v2.1.0, API v2.0.0, Component
</span><br>
<span class="quotelev1">&gt; v3.0.0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I could not find any way to choose 'none' instead of 'execinfo'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And the strange thing is, on the cluster where regular core dump is
</span><br>
<span class="quotelev1">&gt; happening, the output of
</span><br>
<span class="quotelev1">&gt; $ ompi_info | grep backtrace
</span><br>
<span class="quotelev1">&gt; is identical to the above. (Which kind of makes sense because they were
</span><br>
<span class="quotelev1">&gt; created from the same source with the same configure options.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry to harp on this, but without a core file it is hard to debug the
</span><br>
<span class="quotelev1">&gt; application (e.g. examine stack variables).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The surgeon general advises you to eat right, exercise regularly and quit
</span><br>
<span class="quotelev1">&gt; ageing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 11, 2016 at 3:37 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; &lt;gilles.gouaillardet_at_[hidden]&gt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Durga,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; you might wanna try to restore the signal handler for other signals as
</span><br>
<span class="quotelev2">&gt;&gt; well
</span><br>
<span class="quotelev2">&gt;&gt; (SIGSEGV, SIGBUS, ...)
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info --all | grep opal_signal
</span><br>
<span class="quotelev2">&gt;&gt; does list the signal you should restore the handler
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; only one backtrace component is built (out of several candidates :
</span><br>
<span class="quotelev2">&gt;&gt; execinfo, none, printstack)
</span><br>
<span class="quotelev2">&gt;&gt; nm -l libopen-pal.so | grep backtrace
</span><br>
<span class="quotelev2">&gt;&gt; will hint you which component was built
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; your two similar distros might have different backtrace component
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gus,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; btr is a plain text file with a back trace &quot;ala&quot; gdb
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nathan,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i did a 'grep btr' and could not find anything :-(
</span><br>
<span class="quotelev2">&gt;&gt; opal_backtrace_buffer and opal_backtrace_print are only used with stderr.
</span><br>
<span class="quotelev2">&gt;&gt; so i am puzzled who creates the tracefile name and where ...
</span><br>
<span class="quotelev2">&gt;&gt; also, no stack is printed by default unless opal_abort_print_stack is true
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, May 11, 2016 at 3:43 PM, dpchoudh . &lt; &lt;dpchoudh_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello Nathan
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thank you for your response. Could you please be more specific? Adding
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; following after MPI_Init() does not seem to make a difference.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   signal(SIGABRT, SIG_DFL);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   signal(SIGTERM, SIG_DFL);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I also find it puzzling that nearly identical OMPI distro running on a
</span><br>
<span class="quotelev3">&gt;&gt; &gt; different machine shows different behaviour.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Best regards
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Durga
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The surgeon general advises you to eat right, exercise regularly and
</span><br>
<span class="quotelev2">&gt;&gt; quit
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ageing.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Tue, May 10, 2016 at 10:02 AM, Hjelm, Nathan Thomas &lt;hjelmn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; btr files are indeed created by open mpi's backtrace mechanism. I
</span><br>
<span class="quotelev2">&gt;&gt; think we
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; should revisit it at some point but for now the only effective way i
</span><br>
<span class="quotelev2">&gt;&gt; have
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; found to prevent it is to restore the default signal handlers after
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; MPI_Init.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Excuse the quoting style. Good sucks.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; ________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; From: users on behalf of dpchoudh .
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Sent: Monday, May 09, 2016 2:59:37 PM
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subject: Re: [OMPI users] No core dump in some cases
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Hi Gus
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Thanks for your suggestion. But I am not using any resource manager
</span><br>
<span class="quotelev2">&gt;&gt; (i.e.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I am launching mpirun from the bash shell.). In fact, both of the two
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; clusters I talked about run CentOS 7 and I launch the job the same way
</span><br>
<span class="quotelev2">&gt;&gt; on
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; both of these, yet one of them creates standard core files and the
</span><br>
<span class="quotelev2">&gt;&gt; other
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; creates the 'btr; files. Strange thing is, I could not find anything
</span><br>
<span class="quotelev2">&gt;&gt; on the
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; .btr (= Backtrace?) files on Google, which is any I asked on this
</span><br>
<span class="quotelev2">&gt;&gt; forum.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Best regards
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Durga
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; The surgeon general advises you to eat right, exercise regularly and
</span><br>
<span class="quotelev2">&gt;&gt; quit
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; ageing.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Mon, May 9, 2016 at 12:04 PM, Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &lt;gus_at_[hidden]&lt;mailto: &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Hi Durga
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Just in case ...
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; If you're using a resource manager to start the jobs (Torque, etc),
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; you need to have them set the limits (for coredump size, stacksize,
</span><br>
<span class="quotelev2">&gt;&gt; locked
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; memory size, etc).
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; This way the jobs will inherit the limits from the
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; resource manager daemon.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Torque (which I use) I do this on the pbs_mom daemon
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; init script (I am still before the systemd era, that lovely POS).
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; And set the hard/soft limits on /etc/security/limits.conf as well.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I hope this helps,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On 05/07/2016 12:27 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I'm afraid I don't know what a .btr file is -- that is not something
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; is controlled by Open MPI.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; You might want to look into your OS settings to see if it has some
</span><br>
<span class="quotelev2">&gt;&gt; kind of
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; alternate corefile mechanism...?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On May 6, 2016, at 8:58 PM, dpchoudh .
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &lt;dpchoudh_at_[hidden]&lt;mailto: &lt;dpchoudh_at_[hidden]&gt;dpchoudh_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Hello all
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I run MPI jobs (for test purpose only) on two different 'clusters'.
</span><br>
<span class="quotelev2">&gt;&gt; Both
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 'clusters' have two nodes only, connected back-to-back. The two are
</span><br>
<span class="quotelev2">&gt;&gt; very
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; similar, but not identical, both software and hardware wise.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Both have ulimit -c set to unlimited. However, only one of the two
</span><br>
<span class="quotelev2">&gt;&gt; creates
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; core files when an MPI job crashes. The other creates a text file named
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; something like
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;program_name_that_crashed&gt;.80s-&lt;a-number-that-looks-like-a-PID&gt;,&lt;hostname-where-the-crash-happened&gt;.btr
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I'd much prefer a core file because that allows me to debug with a lot
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; more options than a static text file with addresses. How do I get a
</span><br>
<span class="quotelev2">&gt;&gt; core
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; file in all situations? I am using MPI source from the master branch.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Thanks in advance
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Durga
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; The surgeon general advises you to eat right, exercise regularly and
</span><br>
<span class="quotelev2">&gt;&gt; quit
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; ageing.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]&lt;mailto: &lt;users_at_[hidden]&gt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29124.php">http://www.open-mpi.org/community/lists/users/2016/05/29124.php</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]&lt;mailto: &lt;users_at_[hidden]&gt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29141.php">http://www.open-mpi.org/community/lists/users/2016/05/29141.php</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29154.php">http://www.open-mpi.org/community/lists/users/2016/05/29154.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29169.php">http://www.open-mpi.org/community/lists/users/2016/05/29169.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29170.php">http://www.open-mpi.org/community/lists/users/2016/05/29170.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29176.php">http://www.open-mpi.org/community/lists/users/2016/05/29176.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29177.php">http://www.open-mpi.org/community/lists/users/2016/05/29177.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29178/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29179.php">Ralph Castain: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Previous message:</strong> <a href="29177.php">Gilles Gouaillardet: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>In reply to:</strong> <a href="29177.php">Gilles Gouaillardet: "Re: [OMPI users] No core dump in some cases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29179.php">Ralph Castain: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Reply:</strong> <a href="29179.php">Ralph Castain: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Reply:</strong> <a href="29180.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Reply:</strong> <a href="29181.php">Gilles Gouaillardet: "Re: [OMPI users] No core dump in some cases"</a>
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
