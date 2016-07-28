<?
$subject_val = "[OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  5 01:36:46 2015" -->
<!-- isoreceived="20150805053646" -->
<!-- sent="Wed, 5 Aug 2015 05:36:44 +0000" -->
<!-- isosent="20150805053644" -->
<!-- name="Lane, William" -->
<!-- email="William.Lane_at_[hidden]" -->
<!-- subject="[OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?" -->
<!-- id="434F2BB0AF80484CA04DE0D8C0738BF293EF0634_at_cshsmsgmbx02.CSMC.EDU" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?<br>
<strong>From:</strong> Lane, William (<em>William.Lane_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-05 01:36:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27395.php">Ralph Castain: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="27393.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27395.php">Ralph Castain: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="27395.php">Ralph Castain: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm running OpenMPI 1.8.7 tests on a mixed bag cluster of various systems
<br>
under CentOS 6.3, I've been intermittently getting warnings about not having
<br>
the proper NUMA libraries installed. Which NUMA libraries should be installed
<br>
for CentOS 6.3 and OpenMPI 1.8.7?
<br>
<p>Here's what I currently have installed:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;yum list installed *numa*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;numactl.x86_64
<br>
<p>Here's the list of available NUMA libraries for CentOS 6.3:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;listed via: yum search numa | less
<br>
&nbsp;&nbsp;&nbsp;&nbsp;numactl-devel.i686 : Development package for building Applications that use numa
<br>
&nbsp;&nbsp;&nbsp;&nbsp;numactl-devel.x86_64 : Development package for building Applications that use
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: numa
<br>
&nbsp;&nbsp;&nbsp;&nbsp;numad.x86_64 : NUMA user daemon
<br>
&nbsp;&nbsp;&nbsp;&nbsp;numactl.i686 : Library for tuning for Non Uniform Memory Access machines
<br>
&nbsp;&nbsp;&nbsp;&nbsp;numactl.x86_64 : Library for tuning for Non Uniform Memory Access machines
<br>
<p>Also, since this cluster actually has working NUMA nodes, could the lack
<br>
of the proper NUMA libraries being installed cause any issues?
<br>
<p>-Bill L.
<br>
IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation.
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27394/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27395.php">Ralph Castain: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="27393.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27395.php">Ralph Castain: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="27395.php">Ralph Castain: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
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
