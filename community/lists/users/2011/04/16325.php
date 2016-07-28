<?
$subject_val = "Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 23 12:17:28 2011" -->
<!-- isoreceived="20110423161728" -->
<!-- sent="Sat, 23 Apr 2011 18:17:16 +0200" -->
<!-- isosent="20110423161716" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted" -->
<!-- id="8D3862CA-9324-48C5-8F37-33C5EFE87B74_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DB2EB16.6070206_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-23 12:17:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16326.php">Pablo Lopez Rios: "Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted"</a>
<li><strong>Previous message:</strong> <a href="16324.php">Ralph Castain: "Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted"</a>
<li><strong>In reply to:</strong> <a href="16321.php">Pablo Lopez Rios: "Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 23.04.2011 um 17:07 schrieb Pablo Lopez Rios:
<br>
<p><span class="quotelev2">&gt;&gt; what about:
</span><br>
<span class="quotelev2">&gt;&gt; ( trap &quot;&quot; sigint; exec mpiexec ...)&amp;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yup, that's included in the workarounds I tried. Tried again with your specific suggestion; no luck.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Well, maybe mpiexec is adjusting it on its own
</span><br>
<span class="quotelev2">&gt;&gt; again. This can be checked in /proc/&lt;pid&gt;/status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The signal masks in /proc/$!/status are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; nompi (bash):
</span><br>
<span class="quotelev1">&gt; SigBlk: 0000000000010000 -&gt;  16 blocked
</span><br>
<span class="quotelev1">&gt; SigIgn: 0000000000000006 -&gt;  1,2 ignored
</span><br>
<span class="quotelev1">&gt; SigCgt: 0000000000010000 -&gt;  16 caught
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpi (mpirun):
</span><br>
<span class="quotelev1">&gt; SigBlk: 0000000000000000 -&gt;  none blocked
</span><br>
<span class="quotelev1">&gt; SigIgn: 0000000000000004 -&gt;  2 ignored
</span><br>
<span class="quotelev1">&gt; SigCgt: 0000000180015ee2 -&gt;  1,5,6,7,9,10,11,12,14,16,31,32 caught
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think I'm off by one in interpreting the above masks
</span><br>
<p>I think so.
<br>
<p><p><span class="quotelev1">&gt; (for instance I would expect signals 30 and 31 to be caught, not 31 and 32), but I'm already assuming that the least significant bit is &quot;signal 0&quot;; assuming it is &quot;signal 1&quot; would just worsen the values.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, why does mpirun bypass the traps I try to set and how do I stop it doing so?
</span><br>
<p>I get:
<br>
<p>$ cat /proc/31619/status
<br>
...
<br>
SigCgt:	000000004b813efb
<br>
...
<br>
$ trap '' int
<br>
$ cat /proc/31619/status 
<br>
...
<br>
SigCgt:	000000004b813ef9
<br>
...
<br>
$ trap '' hup
<br>
$ cat /proc/31619/status 
<br>
...
<br>
SigCgt:	000000004b813ef8
<br>
<p>Looks like SIGINT(2) is bit 1 and likewise SIGHUP(1) is bit 0.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Pablo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 23/04/11 13:20, Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am 23.04.2011 um 04:31 schrieb Pablo Lopez Rios:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm having a bit of a problem with wrapping mpirun in a script. The script needs to run an MPI job in the background and tail -f the output. Pressing Ctrl+C should stop tail -f, and the MPI job should continue. However mpirun seems to detect the SIGINT that was meant for tail, and kills the job immediately. I've tried workarounds involving nohup, disown, trap, subshells (including calling the script from within itself), etc, to no avail.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem is that this doesn't happen if I run the command directly instead, without mpirun. Attached is a script that reproduces the problem. It runs a simple counting script in the background which takes 10 seconds to run, and tails the output. If called with &quot;nompi&quot; as first argument, it will simply run bash -c &quot;$SCRIPT&quot;&gt;&amp;  &quot;$out&quot;&amp;, and with &quot;mpi&quot; it will do the same with 'mpirun -np 1' prepended. The output I get is:
</span><br>
<span class="quotelev2">&gt;&gt; what about:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ( trap &quot;&quot; sigint; exec mpiexec ...)&amp;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; i.e. replace the subshell with changed interrupt handling with the mpiexec. Well, maybe mpiexec is adjusting it on its own again. This can be checked in /proc/&lt;pid&gt;/status
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ./ompi_bug.sh mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ^C
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ./ompi_bug.sh nompi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nompi:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ^C
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ cat output.*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun: killing job...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that process rank 0 with PID 1222 on node pablomme exited on signal 0 (Unknown signal 0).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nompi:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Done
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This convinces me that there is something strange with OpenMPI, since I expect no difference in signal handling when running a simple command with or without mpirun in the middle.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've tried looking for options to change this behaviour, but I don't seem to find any. Is there one, preferably in the form of an environment variable? Or is this a bug?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using OpenMPI v1.4.3 as distributed with Ubuntu 11.04, and also v1.2.8 as distributed with OpenSUSE 11.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pablo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;ompi_bug.sh.gz&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16326.php">Pablo Lopez Rios: "Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted"</a>
<li><strong>Previous message:</strong> <a href="16324.php">Ralph Castain: "Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted"</a>
<li><strong>In reply to:</strong> <a href="16321.php">Pablo Lopez Rios: "Re: [OMPI users] OpenMPI exits when subsequent tail -f in script is interrupted"</a>
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
