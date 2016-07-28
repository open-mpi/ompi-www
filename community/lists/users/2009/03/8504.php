<?
$subject_val = "Re: [OMPI users] openmpi 1.3 and gridengine tight integrationproblem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 18 11:52:54 2009" -->
<!-- isoreceived="20090318155254" -->
<!-- sent="Wed, 18 Mar 2009 10:52:46 -0500" -->
<!-- isosent="20090318155246" -->
<!-- name="Rene Salmon" -->
<!-- email="salmr0_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.3 and gridengine tight integrationproblem" -->
<!-- id="1237391566.603.229.camel_at_holwrs01.amoco.com" -->
<!-- inreplyto="49C0FFB7.5070805_at_Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.3 and gridengine tight integrationproblem<br>
<strong>From:</strong> Rene Salmon (<em>salmr0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-18 11:52:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8505.php">Jeff Squyres: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<li><strong>Previous message:</strong> <a href="8503.php">Jeff Squyres: "[OMPI users] Fwd: New MPI-2.1 standard in hardcover - the yellow book"</a>
<li><strong>In reply to:</strong> <a href="8502.php">Rolf Vandevaart: "Re: [OMPI users] openmpi 1.3 and gridengine tight integrationproblem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At this FAQ, we show an example of a parallel environment setup.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge">http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am wondering if the control_slaves needs to be TRUE.
</span><br>
<span class="quotelev1">&gt; And double check the that the PE (pavtest) is on the list for the
</span><br>
<span class="quotelev1">&gt; queue
</span><br>
<span class="quotelev1">&gt; (also mentioned at the FAQ).  And perhaps start trying to run hostname
</span><br>
<span class="quotelev1">&gt; first.
</span><br>
<p><p>Changing control_slaves to true did not make thing work but it did
<br>
provide me with a bit more info on this. Enough to figure things out.
<br>
Now when I run i get a message about &quot;rcmd:socket: Permission denied&quot; :
<br>
<p><p><p>Starting server daemon at host &quot;hpcp7782&quot;
<br>
Server daemon successfully started with task id &quot;1.hpcp7782&quot;
<br>
Establishing /hpc/SGE/utilbin/lx24-amd64/rsh session to host
<br>
hpcp7782 ...
<br>
rcmd: socket: Permission denied
<br>
/hpc/SGE/utilbin/lx24-amd64/rsh exited with exit code 1
<br>
reading exit code from shepherd ... timeout (60 s) expired while waiting
<br>
on socket fd 4
<br>
error: error reading returncode of remote command
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 31961) died unexpectedly with status 255 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have
<br>
the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
<p>[hpcp7781:31960] mca: base: close: component rsh closed
<br>
[hpcp7781:31960] mca: base: close: unloading component rsh
<br>
<p><p><p><p>So it turns out the NFS mount for SGE on the clients had option &quot;nosuid&quot;
<br>
set which does not allow the qrsh/rsh SGE binaries to run because they
<br>
are setuid.  Got rid of the &quot;nosuid&quot; and now things work just fine.
<br>
<p>Thank you for the help
<br>
<p>Rene
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8505.php">Jeff Squyres: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<li><strong>Previous message:</strong> <a href="8503.php">Jeff Squyres: "[OMPI users] Fwd: New MPI-2.1 standard in hardcover - the yellow book"</a>
<li><strong>In reply to:</strong> <a href="8502.php">Rolf Vandevaart: "Re: [OMPI users] openmpi 1.3 and gridengine tight integrationproblem"</a>
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
