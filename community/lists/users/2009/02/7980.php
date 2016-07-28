<?
$subject_val = "[OMPI users] open-mpi ssh hostname problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  6 06:18:44 2009" -->
<!-- isoreceived="20090206111844" -->
<!-- sent="Fri, 06 Feb 2009 12:18:42 +0100" -->
<!-- isosent="20090206111842" -->
<!-- name="Bernhard Knapp" -->
<!-- email="bernhard.knapp_at_[hidden]" -->
<!-- subject="[OMPI users] open-mpi ssh hostname problem" -->
<!-- id="498C1C92.4050208_at_meduniwien.ac.at" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] open-mpi ssh hostname problem<br>
<strong>From:</strong> Bernhard Knapp (<em>bernhard.knapp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-06 06:18:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7981.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
<li><strong>Previous message:</strong> <a href="7979.php">doriankrause: "Re: [OMPI users] Global Communicator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7988.php">Jeff Squyres: "Re: [OMPI users] open-mpi ssh hostname problem"</a>
<li><strong>Reply:</strong> <a href="7988.php">Jeff Squyres: "Re: [OMPI users] open-mpi ssh hostname problem"</a>
<li><strong>Maybe reply:</strong> <a href="7996.php">Bernhard Knapp: "Re: [OMPI users] open-mpi ssh hostname problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear users
<br>
<p>I am using the parallel software Gromacs on Fedora8 nodes. I installed 
<br>
the software and run it without problems but thereafter I moved the node 
<br>
to our server-room and did the following:
<br>
- set ip adress, subnetmask and gateway
<br>
- changed the ssh port in /etc/ssh/sshd_config since we use port 
<br>
forwarding on our router and /usr/sbin/semanage port -a -t 
<br>
inetd_child_port_t -p tcp 5101
<br>
- changed the firewall settings to additionally allow the new port
<br>
- changed the hostname via hostname command
<br>
<p>Then I started exactly the same simulation (same command, same data) as 
<br>
before (before the network configuration) and it comes up with the 
<br>
following error:
<br>
<p><p>ssh: quoVadis01: Name or service not known
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 5039) died unexpectedly with status 255 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
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
<p><p>Currently the simulation is only running in parallel on the local 4 
<br>
cores and not using the network at all.
<br>
<p>Why is it a problem for open-mpi to change the hostname from &quot;localhost&quot; 
<br>
to &quot;quoVadis01&quot;? If i change the hostname back it works again. How can I 
<br>
make open-mpi running using a hostname different to localhost. Simply to 
<br>
reinstall mpi after changing the hostname does not help.
<br>
<p>cheers
<br>
Bernhard
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7981.php">Ted Yu: "Re: [OMPI users] Global Communicator"</a>
<li><strong>Previous message:</strong> <a href="7979.php">doriankrause: "Re: [OMPI users] Global Communicator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7988.php">Jeff Squyres: "Re: [OMPI users] open-mpi ssh hostname problem"</a>
<li><strong>Reply:</strong> <a href="7988.php">Jeff Squyres: "Re: [OMPI users] open-mpi ssh hostname problem"</a>
<li><strong>Maybe reply:</strong> <a href="7996.php">Bernhard Knapp: "Re: [OMPI users] open-mpi ssh hostname problem"</a>
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
