<?
$subject_val = "Re: [OMPI users] Checkpointing a restarted app fails";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 12:55:31 2008" -->
<!-- isoreceived="20080922165531" -->
<!-- sent="Mon, 22 Sep 2008 12:55:25 -0400" -->
<!-- isosent="20080922165525" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing a restarted app fails" -->
<!-- id="2F05352D-DBA7-44D0-A592-EBF01634B536_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48D1D140.8060409_at_cs.tu-berlin.de" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 12:55:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6662.php">Shafagh Jafer: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Previous message:</strong> <a href="6660.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6593.php">Matthias Hovestadt: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6710.php">Matthias Hovestadt: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
<li><strong>Reply:</strong> <a href="6710.php">Matthias Hovestadt: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe this is now fixed in the trunk. I was able to reproduce with  
<br>
the current trunk and committed a fix a few minutes ago in r19601. So  
<br>
the fix should be in tonight's tarball (or you can grab it from SVN).  
<br>
I've made a request to have the patch applied to v1.3, but that may  
<br>
take a day or so to complete.
<br>
<p>Let me know if this fix eliminates your SIGPIPE issues.
<br>
<p>Thanks for the bug report :)
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Sep 17, 2008, at 11:55 PM, Matthias Hovestadt wrote:
<br>
<p><span class="quotelev1">&gt; Hi Josh!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First of all, thanks a lot for replying. :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When executing this checkpoint command, the running application
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directly aborts, even though I did not specify the &quot;--term&quot; option:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that process rank 1 with PID 14050 on node grid- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; demo-1.cit.tu-berlin.de exited on signal 13 (Broken pipe).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ccs_at_grid-demo-1:~$
</span><br>
<span class="quotelev2">&gt;&gt; Interesting. This looks like a bug with the restart mechanism in  
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI. This was working fine, but something must have changed in  
</span><br>
<span class="quotelev2">&gt;&gt; the trunk to break it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you perhaps know a SVN revision number of OMPI that
</span><br>
<span class="quotelev1">&gt; is known to be working? If this issue is a regression
</span><br>
<span class="quotelev1">&gt; failure, I would be glad to use the source from an old
</span><br>
<span class="quotelev1">&gt; but working SVN state...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A useful piece of debugging information for me would be a stack  
</span><br>
<span class="quotelev2">&gt;&gt; trace from the failed process. You should be able to get this from  
</span><br>
<span class="quotelev2">&gt;&gt; a core file it left or If you would set the following MCA variable  
</span><br>
<span class="quotelev2">&gt;&gt; in $HOME/.openmpi/mca-params.conf:
</span><br>
<span class="quotelev2">&gt;&gt;  opal_cr_debug_sigpipe=1
</span><br>
<span class="quotelev2">&gt;&gt; This will cause the Open MPI app to wait in a sleep loop when it  
</span><br>
<span class="quotelev2">&gt;&gt; detects a Broken Pipe signal. Then you should be able to attach a  
</span><br>
<span class="quotelev2">&gt;&gt; debugger and retrieve a stack trace.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I created this file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ccs_at_grid-demo-1:~$ cat .openmpi/mca-params.conf
</span><br>
<span class="quotelev1">&gt; opal_cr_debug_sigpipe=1
</span><br>
<span class="quotelev1">&gt; ccs_at_grid-demo-1:~$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I restarted the application from a checkpointed state
</span><br>
<span class="quotelev1">&gt; and tried to checkpoint this restarted application. Unfortunately
</span><br>
<span class="quotelev1">&gt; the restated application still terminates, despite of this para-
</span><br>
<span class="quotelev1">&gt; meter. However, the output slightly changed :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; worker fetch area available 1
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:26220] opal_cr: sigpipe_debug: Debug  
</span><br>
<span class="quotelev1">&gt; SIGPIPE [13]: PID (26220)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 26248 on node grid- 
</span><br>
<span class="quotelev1">&gt; demo-1.cit.tu-berlin.de exited on signal 0 (Unknown signal 0).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 2 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev1">&gt; ccs_at_grid-demo-1:~$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is now this additional &quot;opal_cr: sigpipe_debug&quot; line, so
</span><br>
<span class="quotelev1">&gt; he apparently evaluates the .openmpi/mca-params.conf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also tried to get a corefile by setting &quot;ulimit -c 50000&quot;, so
</span><br>
<span class="quotelev1">&gt; that ulimit -a gives me the following output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ccs_at_grid-demo-1:~$ ulimit -a
</span><br>
<span class="quotelev1">&gt; core file size          (blocks, -c) 0
</span><br>
<span class="quotelev1">&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev1">&gt; scheduling priority             (-e) 20
</span><br>
<span class="quotelev1">&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev1">&gt; pending signals                 (-i) unlimited
</span><br>
<span class="quotelev1">&gt; max locked memory       (kbytes, -l) unlimited
</span><br>
<span class="quotelev1">&gt; max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev1">&gt; open files                      (-n) 1024
</span><br>
<span class="quotelev1">&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev1">&gt; POSIX message queues     (bytes, -q) unlimited
</span><br>
<span class="quotelev1">&gt; real-time priority              (-r) 0
</span><br>
<span class="quotelev1">&gt; stack size              (kbytes, -s) 8192
</span><br>
<span class="quotelev1">&gt; cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev1">&gt; max user processes              (-u) unlimited
</span><br>
<span class="quotelev1">&gt; virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev1">&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev1">&gt; ccs_at_grid-demo-1:~$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, no corefile is generated, so that I do not know
</span><br>
<span class="quotelev1">&gt; how to give you the requested stacktrace.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there perhaps other debug parameters I could use?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Matthias
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6662.php">Shafagh Jafer: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Previous message:</strong> <a href="6660.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6593.php">Matthias Hovestadt: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6710.php">Matthias Hovestadt: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
<li><strong>Reply:</strong> <a href="6710.php">Matthias Hovestadt: "Re: [OMPI users] Checkpointing a restarted app fails"</a>
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
