<?
$subject_val = "Re: [OMPI users] what is a &quot;node&quot;?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  1 06:55:31 2012" -->
<!-- isoreceived="20120901105531" -->
<!-- sent="Sat, 1 Sep 2012 03:55:22 -0700" -->
<!-- isosent="20120901105522" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] what is a &amp;quot;node&amp;quot;?" -->
<!-- id="14EF9BB6-1D79-43EB-BB7E-35E030F073F8_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+dv2NGT26H+yxuXuPQx0Nr-vDSzDBq8f5WLh8Z2nv07wYPB+w_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-01 06:55:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20080.php">Zbigniew Koza: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Previous message:</strong> <a href="20078.php">Zbigniew Koza: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>In reply to:</strong> <a href="20078.php">Zbigniew Koza: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20080.php">Zbigniew Koza: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Reply:</strong> <a href="20080.php">Zbigniew Koza: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are using cmd line options that no longer exist in the 1.9 release - look at &quot;mpirun -h&quot; for the current list of options.
<br>
<p>FWIW: in your example, the correct cmd line would be:
<br>
<p>mpirun -np 2 --bind-to core -map-by core --report-bindings uptime
<br>
<p>Note the space in &quot;--bind-to core&quot; and the &quot;-map-by&quot; option syntax. The warning means that we didn't find libnuma installed on your machine, so we cannot bind memory allocations (but can bind processes).
<br>
<p>On Sep 1, 2012, at 3:41 AM, Zbigniew Koza &lt;zzkoza_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have one more question.
</span><br>
<span class="quotelev1">&gt; I wanted to experiment with processor affinity command-line options on my ubuntu PC.
</span><br>
<span class="quotelev1">&gt; When I use OpenMPI compiled from sourecs a few weeks ago, mpirun returns error messages.
</span><br>
<span class="quotelev1">&gt; However, the&quot;official&quot; OpenMPI installation on the same machine makes no problem.
</span><br>
<span class="quotelev1">&gt; Does it mean there's a  bug in OpenMPI-current and I should report a bug?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =======  1. OpneMPI version: ====
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -V
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.9a1r26880
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==== 2. mpirun &quot;offending&quot; command and error report: ===
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; zkoza_at_zbyszek:~$ mpirun -np 2 --bind-to-core -bycore --report-bindings uptime
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev1">&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev1">&gt; support binding memory to the process location.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Node:  zbyszek
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a warning only; your job will continue, though performance may
</span><br>
<span class="quotelev1">&gt; be degraded.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to find the specified executable file, and therefore
</span><br>
<span class="quotelev1">&gt; did not launch the job.  This error was first reported for process
</span><br>
<span class="quotelev1">&gt; rank 0; it may have occurred for other processes as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOTE: A common cause for this error is misspelling a mpirun command
</span><br>
<span class="quotelev1">&gt;       line parameter option (remember that mpirun interprets the first
</span><br>
<span class="quotelev1">&gt;       unrecognized command line token as the executable).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Node:       zbyszek
</span><br>
<span class="quotelev1">&gt; Executable: -bycore
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 2 total processes failed to start
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==== 3. the same mpirun command using standard MPI installation ====
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/lib/openmpi /usr/bin/mpirun --path /usr/lib/openmpi -np 2 --bind-to-core -bycore --report-bindings uptime
</span><br>
<span class="quotelev1">&gt; [zbyszek:03104] [[7637,0],0] odls:default:fork binding child [[7637,1],0] to cpus 0001
</span><br>
<span class="quotelev1">&gt; [zbyszek:03104] [[7637,0],0] odls:default:fork binding child [[7637,1],1] to cpus 0002
</span><br>
<span class="quotelev1">&gt;  12:25:51 up 21:27,  1 user,  load average: 0.00, 0.01, 0.05
</span><br>
<span class="quotelev1">&gt;  12:25:51 up 21:27,  1 user,  load average: 0.00, 0.01, 0.05
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==== 4. version of standard OpenMPI ===
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; zkoza_at_zbyszek:~$ LD_LIBRARY_PATH=/usr/lib/openmpi /usr/bin/mpirun --path /usr/lib/openmpi --version
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.4.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Z Koza
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-20079/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20080.php">Zbigniew Koza: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Previous message:</strong> <a href="20078.php">Zbigniew Koza: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>In reply to:</strong> <a href="20078.php">Zbigniew Koza: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20080.php">Zbigniew Koza: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Reply:</strong> <a href="20080.php">Zbigniew Koza: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
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
