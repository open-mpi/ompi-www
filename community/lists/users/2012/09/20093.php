<?
$subject_val = "Re: [OMPI users] what is a &quot;node&quot;?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  1 10:24:24 2012" -->
<!-- isoreceived="20120901142424" -->
<!-- sent="Sat, 1 Sep 2012 07:24:17 -0700" -->
<!-- isosent="20120901142417" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] what is a &amp;quot;node&amp;quot;?" -->
<!-- id="8AEA167B-B52E-4AA3-8C78-EB240EAB9C4D_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+dv2NEPgwG8V5XU5xUVSPMc=bWsHwZca98Wa1E5j77K0+1vYQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-01 10:24:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20094.php">Austin Baker: "[OMPI users] Error: argv0 not available"</a>
<li><strong>Previous message:</strong> <a href="20092.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>In reply to:</strong> <a href="20091.php">Zbigniew Koza: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20120.php">Jeff Squyres: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 1, 2012, at 4:33 AM, Zbigniew Koza &lt;zzkoza_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks, Ralph, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the new syntax works well (I used &quot;man mpirun&quot;, which displayed the old syntax).
</span><br>
<p>Ouch - will have to fix that. Thx
<br>
<p><span class="quotelev1">&gt; Also, the report displayed by --report-binding is far more human-readable than in previous versions of OpenMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Out of curiosity, and also to supress the warning, I installed the libnuma-dev package with libnuma.so and libnuma.a libraries, but the warning remains. 
</span><br>
<span class="quotelev1">&gt; Does it mean I should recompile OpenMPI to get rid of this warning? 
</span><br>
<p>I'll have to let Jeff answer that one, but I should think not as it is dynamically loaded. For now, you can turn that warning off by adding
<br>
<p>-mca hwloc_base_mem_bind_failure_action silent
<br>
<p>Jeff is responsible for the length of that param :-)
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Z Koza
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2012/9/1 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; You are using cmd line options that no longer exist in the 1.9 release - look at &quot;mpirun -h&quot; for the current list of options.
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
<span class="quotelev1">&gt; Note the space in &quot;--bind-to core&quot; and the &quot;-map-by&quot; option syntax. The warning means that we didn't find libnuma installed on your machine, so we cannot bind memory allocations (but can bind processes).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 1, 2012, at 3:41 AM, Zbigniew Koza &lt;zzkoza_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi, 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have one more question.
</span><br>
<span class="quotelev2">&gt;&gt; I wanted to experiment with processor affinity command-line options on my ubuntu PC.
</span><br>
<span class="quotelev2">&gt;&gt; When I use OpenMPI compiled from sourecs a few weeks ago, mpirun returns error messages.
</span><br>
<span class="quotelev2">&gt;&gt; However, the&quot;official&quot; OpenMPI installation on the same machine makes no problem.
</span><br>
<span class="quotelev2">&gt;&gt; Does it mean there's a  bug in OpenMPI-current and I should report a bug?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; =======  1. OpneMPI version: ====
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -V
</span><br>
<span class="quotelev2">&gt;&gt; mpirun (Open MPI) 1.9a1r26880
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ==== 2. mpirun &quot;offending&quot; command and error report: ===
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; zkoza_at_zbyszek:~$ mpirun -np 2 --bind-to-core -bycore --report-bindings uptime
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev2">&gt;&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev2">&gt;&gt; support binding memory to the process location.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Node:  zbyszek
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is a warning only; your job will continue, though performance may
</span><br>
<span class="quotelev2">&gt;&gt; be degraded.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to find the specified executable file, and therefore
</span><br>
<span class="quotelev2">&gt;&gt; did not launch the job.  This error was first reported for process
</span><br>
<span class="quotelev2">&gt;&gt; rank 0; it may have occurred for other processes as well.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; NOTE: A common cause for this error is misspelling a mpirun command
</span><br>
<span class="quotelev2">&gt;&gt;       line parameter option (remember that mpirun interprets the first
</span><br>
<span class="quotelev2">&gt;&gt;       unrecognized command line token as the executable).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Node:       zbyszek
</span><br>
<span class="quotelev2">&gt;&gt; Executable: -bycore
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 2 total processes failed to start
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ==== 3. the same mpirun command using standard MPI installation ====
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=/usr/lib/openmpi /usr/bin/mpirun --path /usr/lib/openmpi -np 2 --bind-to-core -bycore --report-bindings uptime
</span><br>
<span class="quotelev2">&gt;&gt; [zbyszek:03104] [[7637,0],0] odls:default:fork binding child [[7637,1],0] to cpus 0001
</span><br>
<span class="quotelev2">&gt;&gt; [zbyszek:03104] [[7637,0],0] odls:default:fork binding child [[7637,1],1] to cpus 0002
</span><br>
<span class="quotelev2">&gt;&gt;  12:25:51 up 21:27,  1 user,  load average: 0.00, 0.01, 0.05
</span><br>
<span class="quotelev2">&gt;&gt;  12:25:51 up 21:27,  1 user,  load average: 0.00, 0.01, 0.05
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ==== 4. version of standard OpenMPI ===
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; zkoza_at_zbyszek:~$ LD_LIBRARY_PATH=/usr/lib/openmpi /usr/bin/mpirun --path /usr/lib/openmpi --version
</span><br>
<span class="quotelev2">&gt;&gt; mpirun (Open MPI) 1.4.3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Z Koza
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20093/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20094.php">Austin Baker: "[OMPI users] Error: argv0 not available"</a>
<li><strong>Previous message:</strong> <a href="20092.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>In reply to:</strong> <a href="20091.php">Zbigniew Koza: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20120.php">Jeff Squyres: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
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
