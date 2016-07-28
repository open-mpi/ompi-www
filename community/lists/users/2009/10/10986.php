<?
$subject_val = "[OMPI users] problem calling mpirun from script invoked with mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 15:11:26 2009" -->
<!-- isoreceived="20091028191126" -->
<!-- sent="Wed, 28 Oct 2009 15:11:20 -0400" -->
<!-- isosent="20091028191120" -->
<!-- name="Luke Shulenburger" -->
<!-- email="lshulenburger_at_[hidden]" -->
<!-- subject="[OMPI users] problem calling mpirun from script invoked with mpirun" -->
<!-- id="b74576e70910281211v37769cc6ne6b7b0b6dd7bc316_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] problem calling mpirun from script invoked with mpirun<br>
<strong>From:</strong> Luke Shulenburger (<em>lshulenburger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-28 15:11:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10987.php">Ralph Castain: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<li><strong>Previous message:</strong> <a href="10985.php">Matthew Erickson: "Re: [OMPI users] With IMPI works fine,With OMPI fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10987.php">Ralph Castain: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<li><strong>Reply:</strong> <a href="10987.php">Ralph Castain: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I am having trouble with a script that calls mpi.  Basically my
<br>
problem distills to wanting to call a script with:
<br>
<p>mpirun -np # ./script.sh
<br>
<p>where script.sh looks like:
<br>
#!/bin/bash
<br>
mpirun -np 2 ./mpiprogram
<br>
<p>Whenever I invoke script.sh normally (as ./script.sh for instance) it
<br>
works fine, but if I do mpirun -np 2 ./script.sh I get the following
<br>
error:
<br>
<p>[ppv.stanford.edu:08814] [[27860,1],0] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact information is
<br>
unknown in file rml_oob_send.c at line 105
<br>
[ppv.stanford.edu:08814] [[27860,1],0] could not get route to
<br>
[[INVALID],INVALID]
<br>
[ppv.stanford.edu:08814] [[27860,1],0] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact information is
<br>
unknown in file base/plm_base_proxy.c at line 86
<br>
<p>I have also tried running with mpirun -d to get some debugging info
<br>
and it appears that the proctable is not being created for the second
<br>
mpirun.  The command hangs like so:
<br>
<p>[ppv.stanford.edu:08823] procdir:
<br>
/tmp/openmpi-sessions-sluke_at_[hidden]_0/27855/0/0
<br>
[ppv.stanford.edu:08823] jobdir:
<br>
/tmp/openmpi-sessions-sluke_at_[hidden]_0/27855/0
<br>
[ppv.stanford.edu:08823] top: openmpi-sessions-sluke_at_[hidden]_0
<br>
[ppv.stanford.edu:08823] tmp: /tmp
<br>
[ppv.stanford.edu:08823] [[27855,0],0] node[0].name ppv daemon 0 arch ffc91200
<br>
[ppv.stanford.edu:08823] Info: Setting up debugger process table for
<br>
applications
<br>
&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;MPIR_partial_attach_ok = 1
<br>
&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;MPIR_proctable_size = 1
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, ppv.stanford.edu,
<br>
/home/sluke/maintenance/openmpi-1.3.3/examples/./shell.sh, 8824)
<br>
[ppv.stanford.edu:08825] procdir:
<br>
/tmp/openmpi-sessions-sluke_at_[hidden]_0/27855/1/0
<br>
[ppv.stanford.edu:08825] jobdir:
<br>
/tmp/openmpi-sessions-sluke_at_[hidden]_0/27855/1
<br>
[ppv.stanford.edu:08825] top: openmpi-sessions-sluke_at_[hidden]_0
<br>
[ppv.stanford.edu:08825] tmp: /tmp
<br>
[ppv.stanford.edu:08825] [[27855,1],0] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact information is
<br>
unknown in file rml_oob_send.c at line 105
<br>
[ppv.stanford.edu:08825] [[27855,1],0] could not get route to
<br>
[[INVALID],INVALID]
<br>
[ppv.stanford.edu:08825] [[27855,1],0] ORTE_ERROR_LOG: A message is
<br>
attempting to be sent to a process whose contact information is
<br>
unknown in file base/plm_base_proxy.c at line 86
<br>
[ppv.stanford.edu:08825] Info: Setting up debugger process table for
<br>
applications
<br>
&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;MPIR_partial_attach_ok = 1
<br>
&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;MPIR_proctable_size = 0
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
<p><p>In this case, it does not matter what the ultimate mpiprogram I try to
<br>
run is, the shell script fails in the same way regardless (I've tried
<br>
the hello_f90 executable from the openmpi examples directory).  Here
<br>
are some details of my setup:
<br>
<p>I have built openmpi 1.3.3 with the intel fortran in c compilers
<br>
(version 11.1).  The machine uses rocks with the SGE scheduler, so I
<br>
have run autoconf with ./configure --prefix=/home/sluke --with-sge,
<br>
however this problem persists even if I am running on the head node
<br>
outside of the scheduler.  I am attaching the resulting config.log to
<br>
this email as well as output to ompi_info --all and ifconfig.  I hope
<br>
this gives the experts on the list enough to go from, but I will be
<br>
happy to provide any more information that might be helpful.
<br>
<p>Luke Shulenburger
<br>
Geophysical Laboratory
<br>
Carnegie Institution of Washington
<br>
<p><p>PS I have tried this on a machine with openmpi-1.2.6 and cannot
<br>
reproduce the error, however on a second machine with openmpi-1.3.2 I
<br>
have the same problem.
<br>
<p>


<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10986/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10986/ifconfigout">ifconfigout</a>
</ul>
<!-- attachment="ifconfigout" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10986/ompi_info">ompi_info</a>
</ul>
<!-- attachment="ompi_info" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10987.php">Ralph Castain: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<li><strong>Previous message:</strong> <a href="10985.php">Matthew Erickson: "Re: [OMPI users] With IMPI works fine,With OMPI fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10987.php">Ralph Castain: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<li><strong>Reply:</strong> <a href="10987.php">Ralph Castain: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
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
