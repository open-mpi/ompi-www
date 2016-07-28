<?
$subject_val = "[OMPI users] ORTE_ERROR_LOG Timeout";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 20 12:19:28 2008" -->
<!-- isoreceived="20080520161928" -->
<!-- sent="Tue, 20 May 2008 12:17:03 -0400" -->
<!-- isosent="20080520161703" -->
<!-- name="Rudd, James" -->
<!-- email="jrudd_at_[hidden]" -->
<!-- subject="[OMPI users] ORTE_ERROR_LOG Timeout" -->
<!-- id="02A30774E66E464D90D15CB71C40544E06E381E9FA_at_exch-mb2.AD.NCCU.EDU" -->
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
<strong>Subject:</strong> [OMPI users] ORTE_ERROR_LOG Timeout<br>
<strong>From:</strong> Rudd, James (<em>jrudd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-20 12:17:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5711.php">Jim Kusznir: "[OMPI users] OpenMPI+PGI errors"</a>
<li><strong>Previous message:</strong> <a href="5709.php">Alex L.: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5801.php">Jeff Squyres: "Re: [OMPI users] ORTE_ERROR_LOG Timeout"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5801.php">Jeff Squyres: "Re: [OMPI users] ORTE_ERROR_LOG Timeout"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have been trying to compile a molecular dynamics program with the Openmpi 1.2.5 included in OFED 1.3.  I am running Fedora Core 6; the output of uname -r is 2.6.18-1.2798.fc6.  I've traced the problems I've been having back to openmpi because I'm unable to run the test programs such as glob on more than one node.  I currently have 2 nodes connected to an infiniband switch with opensm running on node1.  The nodes can ping each other and I am able to ssh between them without a password.  My openmpi-default-hostfile  includes the following:
<br>
<p>node1 slots=2 max-slots=4
<br>
node2 slots=4 max-slots=4
<br>
<p>When I run &quot;mpirun -np 4 --debug-daemons ./glob&quot; I get:
<br>
Daemon [0,0,1] checking in as pid 21341 on host node1
<br>
And the program appears to hang.  Once I CTRL+C it a couple of times I get the contents of error.txt
<br>
<p>Per the instructions in the FAQ I've included the output of &quot;ibv_devinfo&quot;, &quot;ifconfig&quot;, and &quot;ulimit -l&quot; in the infiniband_info.txt file. The results of &quot;ompi_info -all is in the ompi_info.txt file.
<br>
<p>I've been tearing my hear out over this, any help would be greatly appreciated.
<br>
<p>James Rudd
<br>
JLC-Biomedical/Biotechnology Research Institute
<br>
North Carolina Central University
<br>
700 George Street
<br>
Durham, NC 27707
<br>
Phone:  (919) 530-7015
<br>
Email:  jrudd_at_[hidden]&lt;mailto:jrudd_at_[hidden]&gt;
<br>
<a href="http://ariel.acc.nccu.edu/Academics/BBRI/personnel/rudd.htm">http://ariel.acc.nccu.edu/Academics/BBRI/personnel/rudd.htm</a>
<br>
<p><p><p>
<p>


<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5710/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5710/error.txt">error.txt</a>
</ul>
<!-- attachment="error.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5710/infiniband_info.txt">infiniband_info.txt</a>
</ul>
<!-- attachment="infiniband_info.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5710/ompi_info.txt">ompi_info.txt</a>
</ul>
<!-- attachment="ompi_info.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5711.php">Jim Kusznir: "[OMPI users] OpenMPI+PGI errors"</a>
<li><strong>Previous message:</strong> <a href="5709.php">Alex L.: "Re: [OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5801.php">Jeff Squyres: "Re: [OMPI users] ORTE_ERROR_LOG Timeout"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5801.php">Jeff Squyres: "Re: [OMPI users] ORTE_ERROR_LOG Timeout"</a>
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
