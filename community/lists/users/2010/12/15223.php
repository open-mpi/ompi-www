<?
$subject_val = "[OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 24 05:17:09 2010" -->
<!-- isoreceived="20101224101709" -->
<!-- sent="Fri, 24 Dec 2010 11:17:05 +0100" -->
<!-- isosent="20101224101705" -->
<!-- name="Advanced Computing Group University of Padova" -->
<!-- email="acg.unipd_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )" -->
<!-- id="AANLkTimJF0kDwxgQMF7TvUh5W8CetyF3+nhFHU5Vuk0m_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )<br>
<strong>From:</strong> Advanced Computing Group University of Padova (<em>acg.unipd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-24 05:17:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15224.php">Benjamin Toueg: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Previous message:</strong> <a href="15222.php">&#195;&#207;&#207;&#220;&#190;&#252;: "Re: [OMPI users] Openmpi Checkpoint/Restart failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15225.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>Reply:</strong> <a href="15225.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
i am building a small 16 nodes cluster gentoo based.
<br>
I succesfully installed openmpi and i succesfully tried some simple small
<br>
test parallel program on a single host but...
<br>
i can't run parallel program on more than one nodes
<br>
<p><p>The nodes are cloned (so they are equals).
<br>
The mpiuser (and their ssh certificates) uses /home/mpiuser that is a nfs
<br>
share.
<br>
I modified .bashrc
<br>
<p>-------------------------
<br>
PATH=/usr/bin:$PATH ; export PATH ;
<br>
LD_LIBRARY_PATH=/usr/lib64:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ;
<br>
<p># already present below
<br>
if [[ $- != *i* ]] ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Shell is non-interactive.  Be done now!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return
<br>
fi
<br>
---------------------
<br>
<p>The very very strange behaviour is that using the --debug-daemons let my
<br>
program run succesfully.....
<br>
<p>Thank you in advance and sorry for my bad english
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15223/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15224.php">Benjamin Toueg: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Previous message:</strong> <a href="15222.php">&#195;&#207;&#207;&#220;&#190;&#252;: "Re: [OMPI users] Openmpi Checkpoint/Restart failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15225.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>Reply:</strong> <a href="15225.php">Advanced Computing Group University of Padova: "Re: [OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
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
