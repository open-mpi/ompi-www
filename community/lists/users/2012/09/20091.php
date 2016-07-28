<?
$subject_val = "Re: [OMPI users] what is a &quot;node&quot;?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  1 07:34:04 2012" -->
<!-- isoreceived="20120901113404" -->
<!-- sent="Sat, 1 Sep 2012 13:33:59 +0200" -->
<!-- isosent="20120901113359" -->
<!-- name="Zbigniew Koza" -->
<!-- email="zzkoza_at_[hidden]" -->
<!-- subject="Re: [OMPI users] what is a &amp;quot;node&amp;quot;?" -->
<!-- id="CA+dv2NEPgwG8V5XU5xUVSPMc=bWsHwZca98Wa1E5j77K0+1vYQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="14EF9BB6-1D79-43EB-BB7E-35E030F073F8_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] what is a &quot;node&quot;?<br>
<strong>From:</strong> Zbigniew Koza (<em>zzkoza_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-01 07:33:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20092.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Previous message:</strong> <a href="20090.php">Ralph Castain: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>In reply to:</strong> <a href="20090.php">Ralph Castain: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20093.php">Ralph Castain: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Reply:</strong> <a href="20093.php">Ralph Castain: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Reply:</strong> <a href="20120.php">Jeff Squyres: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Ralph,
<br>
<p>the new syntax works well (I used &quot;man mpirun&quot;, which displayed the old
<br>
syntax).
<br>
Also, the report displayed by --report-binding is far more human-readable
<br>
than in previous versions of OpenMPI
<br>
<p>Out of curiosity, and also to supress the warning, I installed the
<br>
libnuma-dev package with libnuma.so and libnuma.a libraries, but the
<br>
warning remains.
<br>
Does it mean I should recompile OpenMPI to get rid of this warning?
<br>
<p>Z Koza
<br>
<p><p><p>2012/9/1 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; You are using cmd line options that no longer exist in the 1.9 release -
</span><br>
<span class="quotelev1">&gt; look at &quot;mpirun -h&quot; for the current list of options.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: in your example, the correct cmd line would be:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --bind-to core -map-by core --report-bindings uptime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note the space in &quot;--bind-to core&quot; and the &quot;-map-by&quot; option syntax. The
</span><br>
<span class="quotelev1">&gt; warning means that we didn't find libnuma installed on your machine, so we
</span><br>
<span class="quotelev1">&gt; cannot bind memory allocations (but can bind processes).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 1, 2012, at 3:41 AM, Zbigniew Koza &lt;zzkoza_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have one more question.
</span><br>
<span class="quotelev1">&gt; I wanted to experiment with processor affinity command-line options on my
</span><br>
<span class="quotelev1">&gt; ubuntu PC.
</span><br>
<span class="quotelev1">&gt; When I use OpenMPI compiled from sourecs a few weeks ago, mpirun returns
</span><br>
<span class="quotelev1">&gt; error messages.
</span><br>
<span class="quotelev1">&gt; However, the&quot;official&quot; OpenMPI installation on the same machine makes no
</span><br>
<span class="quotelev1">&gt; problem.
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
<span class="quotelev1">&gt; zkoza_at_zbyszek:~$ mpirun -np 2 --bind-to-core -bycore --report-bindings
</span><br>
<span class="quotelev1">&gt; uptime
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
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/lib/openmpi /usr/bin/mpirun --path /usr/lib/openmpi
</span><br>
<span class="quotelev1">&gt; -np 2 --bind-to-core -bycore --report-bindings uptime
</span><br>
<span class="quotelev1">&gt; [zbyszek:03104] [[7637,0],0] odls:default:fork binding child [[7637,1],0]
</span><br>
<span class="quotelev1">&gt; to cpus 0001
</span><br>
<span class="quotelev1">&gt; [zbyszek:03104] [[7637,0],0] odls:default:fork binding child [[7637,1],1]
</span><br>
<span class="quotelev1">&gt; to cpus 0002
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
<span class="quotelev1">&gt; zkoza_at_zbyszek:~$ LD_LIBRARY_PATH=/usr/lib/openmpi /usr/bin/mpirun --path
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi --version
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20091/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20092.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Previous message:</strong> <a href="20090.php">Ralph Castain: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>In reply to:</strong> <a href="20090.php">Ralph Castain: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20093.php">Ralph Castain: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Reply:</strong> <a href="20093.php">Ralph Castain: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Reply:</strong> <a href="20120.php">Jeff Squyres: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
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
