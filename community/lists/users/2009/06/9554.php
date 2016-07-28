<?
$subject_val = "Re: [OMPI users] Spawn and OpenFabrics";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  5 10:14:55 2009" -->
<!-- isoreceived="20090605141455" -->
<!-- sent="Fri, 5 Jun 2009 10:14:45 -0400" -->
<!-- isosent="20090605141445" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn and OpenFabrics" -->
<!-- id="F9D7DA3E-BBB1-479B-8AF3-2B50F8D21928_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1243970796.3239.76.camel_at_alpaca.lan" -->
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
<strong>Subject:</strong> Re: [OMPI users] Spawn and OpenFabrics<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-05 10:14:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9555.php">Jeff Squyres: "Re: [OMPI users] How to use Multiple linkswithOpenMPI??????????????????"</a>
<li><strong>Previous message:</strong> <a href="9553.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for a single	machine	installation ?"</a>
<li><strong>In reply to:</strong> <a href="9498.php">Allen Barnett: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9561.php">Allen Barnett: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<li><strong>Reply:</strong> <a href="9561.php">Allen Barnett: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 2, 2009, at 3:26 PM, Allen Barnett wrote:
<br>
<p><span class="quotelev2">&gt; &gt;  Does OMPI say that it has IBV fork support?
</span><br>
<span class="quotelev2">&gt; &gt;      ompi_info --param btl openib --parsable | grep  
</span><br>
<span class="quotelev1">&gt; have_fork_support
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My RHEL4 system reports:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_openib_want_fork_support&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt; MCA btl: information &quot;btl_openib_have_fork_support&quot; (value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as does the build installed on the Altix system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ok, good.  Note, however, that OMPI indicating that it has support  
<br>
simply means that the verbs installed has support for it.  It does  
<br>
*not* mean that the underlying kernel supports it.
<br>
<p><span class="quotelev2">&gt; &gt; Be sure to also see <a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-fork">http://www.open-mpi.org/faq/?category=openfabrics#ofa-fork</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We're using OMPI 1.2.8.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Good.
<br>
<p><span class="quotelev3">&gt; &gt; &gt; Also, would MPI_COMM_SPAWN suffer from the same difficulties?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It shouldn't; we proxy the launch of new commands off to mpirun /
</span><br>
<span class="quotelev2">&gt; &gt; OMPI's run-time system.  Specifically: the new process(es) are not
</span><br>
<span class="quotelev2">&gt; &gt; POSIX children of the process(es) that called MPI_COMM_SPAWN.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is a program started with MPI_COMM_SPAWN required to call MPI_INIT?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes.  OMPI v1.3 has an extension (a specific MPI_Info key) to indicate  
<br>
that the spawned program is not an MPI application, but I do not  
<br>
believe that that existed back in the 1.2 series.
<br>
<p><span class="quotelev1">&gt; I
</span><br>
<span class="quotelev1">&gt; guess what I'm asking is if I will have to make my partitioner an
</span><br>
<span class="quotelev1">&gt; OpenMPI program as well?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>If you use MPI_COMM_SPAWN with the 1.2 series, yes.
<br>
<p>Another less attractive but functional solution would be to do what I  
<br>
did for the new command notifier due in the OMPI v1.5 series  
<br>
(&quot;notifier&quot; = subsystem to notify external agents when OMPI detects  
<br>
something wrong, like write to the syslog, send an email, write to a  
<br>
sysadmin mysql db, etc., &quot;command&quot; = plugin that simply forks and runs  
<br>
whatever command you want).  During MPI_INIT, the fork notifier pre- 
<br>
forks a dummy process.  This dummy process then waits for commands via  
<br>
a pipe.  When the parent (MPI process itself) wants to fork a child,  
<br>
it sends the argv to exec down the pipe and has the child process  
<br>
actually do the fork and exec.
<br>
<p>Proxying all the fork requests through a secondary process like this  
<br>
avoids all the problems with registered memory in the child process.   
<br>
This is icky, but it is an unfortunately necessity for OS-bypass/ 
<br>
registration-based networks like OpenFabrics.
<br>
<p>In your case, you'd want to pre-fork before calling MPI_INIT.  But the  
<br>
rest of the technique is pretty much the same.
<br>
<p>Have a look at the code in this tree if it helps:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/orte/mca/notifier/command">https://svn.open-mpi.org/trac/ompi/browser/trunk/orte/mca/notifier/command</a>
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9555.php">Jeff Squyres: "Re: [OMPI users] How to use Multiple linkswithOpenMPI??????????????????"</a>
<li><strong>Previous message:</strong> <a href="9553.php">DEVEL Michel: "Re: [OMPI users] What flags for configure for a single	machine	installation ?"</a>
<li><strong>In reply to:</strong> <a href="9498.php">Allen Barnett: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9561.php">Allen Barnett: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<li><strong>Reply:</strong> <a href="9561.php">Allen Barnett: "Re: [OMPI users] Spawn and OpenFabrics"</a>
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
