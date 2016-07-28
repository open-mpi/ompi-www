<?
$subject_val = "Re: [OMPI users] problem calling mpirun from script invoked with mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 15:48:18 2009" -->
<!-- isoreceived="20091028194818" -->
<!-- sent="Wed, 28 Oct 2009 13:48:10 -0600" -->
<!-- isosent="20091028194810" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem calling mpirun from script invoked with mpirun" -->
<!-- id="71d2d8cc0910281248h39db17fbqbde608cfda90c475_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b74576e70910281211v37769cc6ne6b7b0b6dd7bc316_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem calling mpirun from script invoked with mpirun<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-28 15:48:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10988.php">Jeff Squyres: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband.cardand Mellanox infiniband cards."</a>
<li><strong>Previous message:</strong> <a href="10986.php">Luke Shulenburger: "[OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<li><strong>In reply to:</strong> <a href="10986.php">Luke Shulenburger: "[OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10989.php">Luke Shulenburger: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<li><strong>Reply:</strong> <a href="10989.php">Luke Shulenburger: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid we have never really supported this kind of nested invocations of
<br>
mpirun. If it works with any version of OMPI, it is totally a fluke - it
<br>
might work one time, and then fail the next.
<br>
<p>The problem is that we pass envars to the launched processes to control
<br>
their behavior, and these conflict with what mpirun needs. We have tried
<br>
various scrubbing mechanisms (i.e., having mpirun start out by scrubbing the
<br>
environment of envars that would have come from the initial mpirun, but they
<br>
all have the unfortunate possibility of removing parameters provided by the
<br>
user - and that can cause its own problems.
<br>
<p>I don't know if we will ever support nested operations - occasionally, I do
<br>
give it some thought, but have yet to find a foolproof solution.
<br>
<p>Ralph
<br>
<p><p>On Wed, Oct 28, 2009 at 1:11 PM, Luke Shulenburger
<br>
&lt;lshulenburger_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I am having trouble with a script that calls mpi.  Basically my
</span><br>
<span class="quotelev1">&gt; problem distills to wanting to call a script with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np # ./script.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where script.sh looks like:
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 ./mpiprogram
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Whenever I invoke script.sh normally (as ./script.sh for instance) it
</span><br>
<span class="quotelev1">&gt; works fine, but if I do mpirun -np 2 ./script.sh I get the following
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ppv.stanford.edu:08814] [[27860,1],0] ORTE_ERROR_LOG: A message is
</span><br>
<span class="quotelev1">&gt; attempting to be sent to a process whose contact information is
</span><br>
<span class="quotelev1">&gt; unknown in file rml_oob_send.c at line 105
</span><br>
<span class="quotelev1">&gt; [ppv.stanford.edu:08814] [[27860,1],0] could not get route to
</span><br>
<span class="quotelev1">&gt; [[INVALID],INVALID]
</span><br>
<span class="quotelev1">&gt; [ppv.stanford.edu:08814] [[27860,1],0] ORTE_ERROR_LOG: A message is
</span><br>
<span class="quotelev1">&gt; attempting to be sent to a process whose contact information is
</span><br>
<span class="quotelev1">&gt; unknown in file base/plm_base_proxy.c at line 86
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have also tried running with mpirun -d to get some debugging info
</span><br>
<span class="quotelev1">&gt; and it appears that the proctable is not being created for the second
</span><br>
<span class="quotelev1">&gt; mpirun.  The command hangs like so:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ppv.stanford.edu:08823] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-sluke_at_[hidden]_0/27855/0/0
</span><br>
<span class="quotelev1">&gt; [ppv.stanford.edu:08823] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-sluke_at_[hidden]_0/27855/0
</span><br>
<span class="quotelev1">&gt; [ppv.stanford.edu:08823] top: openmpi-sessions-sluke_at_[hidden]_0
</span><br>
<span class="quotelev1">&gt; [ppv.stanford.edu:08823] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [ppv.stanford.edu:08823] [[27855,0],0] node[0].name ppv daemon 0 arch
</span><br>
<span class="quotelev1">&gt; ffc91200
</span><br>
<span class="quotelev1">&gt; [ppv.stanford.edu:08823] Info: Setting up debugger process table for
</span><br>
<span class="quotelev1">&gt; applications
</span><br>
<span class="quotelev1">&gt;  MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt;  MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt;  MPIR_partial_attach_ok = 1
</span><br>
<span class="quotelev1">&gt;  MPIR_i_am_starter = 0
</span><br>
<span class="quotelev1">&gt;  MPIR_proctable_size = 1
</span><br>
<span class="quotelev1">&gt;  MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;    (i, host, exe, pid) = (0, ppv.stanford.edu,
</span><br>
<span class="quotelev1">&gt; /home/sluke/maintenance/openmpi-1.3.3/examples/./shell.sh, 8824)
</span><br>
<span class="quotelev1">&gt; [ppv.stanford.edu:08825] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-sluke_at_[hidden]_0/27855/1/0
</span><br>
<span class="quotelev1">&gt; [ppv.stanford.edu:08825] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-sluke_at_[hidden]_0/27855/1
</span><br>
<span class="quotelev1">&gt; [ppv.stanford.edu:08825] top: openmpi-sessions-sluke_at_[hidden]_0
</span><br>
<span class="quotelev1">&gt; [ppv.stanford.edu:08825] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [ppv.stanford.edu:08825] [[27855,1],0] ORTE_ERROR_LOG: A message is
</span><br>
<span class="quotelev1">&gt; attempting to be sent to a process whose contact information is
</span><br>
<span class="quotelev1">&gt; unknown in file rml_oob_send.c at line 105
</span><br>
<span class="quotelev1">&gt; [ppv.stanford.edu:08825] [[27855,1],0] could not get route to
</span><br>
<span class="quotelev1">&gt; [[INVALID],INVALID]
</span><br>
<span class="quotelev1">&gt; [ppv.stanford.edu:08825] [[27855,1],0] ORTE_ERROR_LOG: A message is
</span><br>
<span class="quotelev1">&gt; attempting to be sent to a process whose contact information is
</span><br>
<span class="quotelev1">&gt; unknown in file base/plm_base_proxy.c at line 86
</span><br>
<span class="quotelev1">&gt; [ppv.stanford.edu:08825] Info: Setting up debugger process table for
</span><br>
<span class="quotelev1">&gt; applications
</span><br>
<span class="quotelev1">&gt;  MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt;  MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt;  MPIR_partial_attach_ok = 1
</span><br>
<span class="quotelev1">&gt;  MPIR_i_am_starter = 0
</span><br>
<span class="quotelev1">&gt;  MPIR_proctable_size = 0
</span><br>
<span class="quotelev1">&gt;  MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this case, it does not matter what the ultimate mpiprogram I try to
</span><br>
<span class="quotelev1">&gt; run is, the shell script fails in the same way regardless (I've tried
</span><br>
<span class="quotelev1">&gt; the hello_f90 executable from the openmpi examples directory).  Here
</span><br>
<span class="quotelev1">&gt; are some details of my setup:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have built openmpi 1.3.3 with the intel fortran in c compilers
</span><br>
<span class="quotelev1">&gt; (version 11.1).  The machine uses rocks with the SGE scheduler, so I
</span><br>
<span class="quotelev1">&gt; have run autoconf with ./configure --prefix=/home/sluke --with-sge,
</span><br>
<span class="quotelev1">&gt; however this problem persists even if I am running on the head node
</span><br>
<span class="quotelev1">&gt; outside of the scheduler.  I am attaching the resulting config.log to
</span><br>
<span class="quotelev1">&gt; this email as well as output to ompi_info --all and ifconfig.  I hope
</span><br>
<span class="quotelev1">&gt; this gives the experts on the list enough to go from, but I will be
</span><br>
<span class="quotelev1">&gt; happy to provide any more information that might be helpful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Luke Shulenburger
</span><br>
<span class="quotelev1">&gt; Geophysical Laboratory
</span><br>
<span class="quotelev1">&gt; Carnegie Institution of Washington
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS I have tried this on a machine with openmpi-1.2.6 and cannot
</span><br>
<span class="quotelev1">&gt; reproduce the error, however on a second machine with openmpi-1.3.2 I
</span><br>
<span class="quotelev1">&gt; have the same problem.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10987/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10988.php">Jeff Squyres: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband.cardand Mellanox infiniband cards."</a>
<li><strong>Previous message:</strong> <a href="10986.php">Luke Shulenburger: "[OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<li><strong>In reply to:</strong> <a href="10986.php">Luke Shulenburger: "[OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10989.php">Luke Shulenburger: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<li><strong>Reply:</strong> <a href="10989.php">Luke Shulenburger: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
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
