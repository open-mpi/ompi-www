<?
$subject_val = "Re: [OMPI users] Checkpointing a restarted app fails";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 23:56:23 2008" -->
<!-- isoreceived="20080918035623" -->
<!-- sent="Thu, 18 Sep 2008 11:55:44 +0800" -->
<!-- isosent="20080918035544" -->
<!-- name="Matthias Hovestadt" -->
<!-- email="maho_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing a restarted app fails" -->
<!-- id="48D1D140.8060409_at_cs.tu-berlin.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6BB4A7FB-9CD2-484C-B3C6-641974CF7002_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpointing a restarted app fails<br>
<strong>From:</strong> Matthias Hovestadt (<em>maho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-17 23:55:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6594.php">Shafagh Jafer: "[OMPI users] what is inside mpicc/mpic++"</a>
<li><strong>Previous message:</strong> <a href="6592.php">Davi Vercillo C. Garcia (&#227;&#131;&#135;&#227;&#131;&#147;&#227;&#131;&#131;&#227;&#131;&#137;): "Re: [OMPI users] Newbie doubt."</a>
<li><strong>In reply to:</strong> <a href="6567.php">Josh Hursey: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6661.php">Josh Hursey: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
<li><strong>Reply:</strong> <a href="6661.php">Josh Hursey: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh!
<br>
<p>First of all, thanks a lot for replying. :-)
<br>
<p><span class="quotelev2">&gt;&gt; When executing this checkpoint command, the running application
</span><br>
<span class="quotelev2">&gt;&gt; directly aborts, even though I did not specify the &quot;--term&quot; option:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 1 with PID 14050 on node 
</span><br>
<span class="quotelev2">&gt;&gt; grid-demo-1.cit.tu-berlin.de exited on signal 13 (Broken pipe).
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ccs_at_grid-demo-1:~$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Interesting. This looks like a bug with the restart mechanism in Open 
</span><br>
<span class="quotelev1">&gt; MPI. This was working fine, but something must have changed in the trunk 
</span><br>
<span class="quotelev1">&gt; to break it.
</span><br>
<p>Do you perhaps know a SVN revision number of OMPI that
<br>
is known to be working? If this issue is a regression
<br>
failure, I would be glad to use the source from an old
<br>
but working SVN state...
<br>
<p><span class="quotelev1">&gt; A useful piece of debugging information for me would be a stack trace 
</span><br>
<span class="quotelev1">&gt; from the failed process. You should be able to get this from a core file 
</span><br>
<span class="quotelev1">&gt; it left or If you would set the following MCA variable in 
</span><br>
<span class="quotelev1">&gt; $HOME/.openmpi/mca-params.conf:
</span><br>
<span class="quotelev1">&gt;   opal_cr_debug_sigpipe=1
</span><br>
<span class="quotelev1">&gt; This will cause the Open MPI app to wait in a sleep loop when it detects 
</span><br>
<span class="quotelev1">&gt; a Broken Pipe signal. Then you should be able to attach a debugger and 
</span><br>
<span class="quotelev1">&gt; retrieve a stack trace.
</span><br>
<p>I created this file:
<br>
<p>ccs_at_grid-demo-1:~$ cat .openmpi/mca-params.conf
<br>
opal_cr_debug_sigpipe=1
<br>
ccs_at_grid-demo-1:~$
<br>
<p>Then I restarted the application from a checkpointed state
<br>
and tried to checkpoint this restarted application. Unfortunately
<br>
the restated application still terminates, despite of this para-
<br>
meter. However, the output slightly changed :
<br>
<p><p>worker fetch area available 1
<br>
[grid-demo-1.cit.tu-berlin.de:26220] opal_cr: sigpipe_debug: Debug 
<br>
SIGPIPE [13]: PID (26220)
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 26248 on node 
<br>
grid-demo-1.cit.tu-berlin.de exited on signal 0 (Unknown signal 0).
<br>
--------------------------------------------------------------------------
<br>
2 total processes killed (some possibly by mpirun during cleanup)
<br>
ccs_at_grid-demo-1:~$
<br>
<p><p>There is now this additional &quot;opal_cr: sigpipe_debug&quot; line, so
<br>
he apparently evaluates the .openmpi/mca-params.conf
<br>
<p><p>I also tried to get a corefile by setting &quot;ulimit -c 50000&quot;, so
<br>
that ulimit -a gives me the following output:
<br>
<p>ccs_at_grid-demo-1:~$ ulimit -a
<br>
core file size          (blocks, -c) 0
<br>
data seg size           (kbytes, -d) unlimited
<br>
scheduling priority             (-e) 20
<br>
file size               (blocks, -f) unlimited
<br>
pending signals                 (-i) unlimited
<br>
max locked memory       (kbytes, -l) unlimited
<br>
max memory size         (kbytes, -m) unlimited
<br>
open files                      (-n) 1024
<br>
pipe size            (512 bytes, -p) 8
<br>
POSIX message queues     (bytes, -q) unlimited
<br>
real-time priority              (-r) 0
<br>
stack size              (kbytes, -s) 8192
<br>
cpu time               (seconds, -t) unlimited
<br>
max user processes              (-u) unlimited
<br>
virtual memory          (kbytes, -v) unlimited
<br>
file locks                      (-x) unlimited
<br>
ccs_at_grid-demo-1:~$
<br>
<p>Unfortunately, no corefile is generated, so that I do not know
<br>
how to give you the requested stacktrace.
<br>
<p>Are there perhaps other debug parameters I could use?
<br>
<p><p>Best,
<br>
Matthias
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6594.php">Shafagh Jafer: "[OMPI users] what is inside mpicc/mpic++"</a>
<li><strong>Previous message:</strong> <a href="6592.php">Davi Vercillo C. Garcia (&#227;&#131;&#135;&#227;&#131;&#147;&#227;&#131;&#131;&#227;&#131;&#137;): "Re: [OMPI users] Newbie doubt."</a>
<li><strong>In reply to:</strong> <a href="6567.php">Josh Hursey: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6661.php">Josh Hursey: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
<li><strong>Reply:</strong> <a href="6661.php">Josh Hursey: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
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
