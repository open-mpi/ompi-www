<?
$subject_val = "[hwloc-users] problem with open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 12:46:58 2014" -->
<!-- isoreceived="20140416164658" -->
<!-- sent="Wed, 16 Apr 2014 17:44:08 +0100 (BST)" -->
<!-- isosent="20140416164408" -->
<!-- name="flavienne sayou" -->
<!-- email="flaviennesayou1_at_[hidden]" -->
<!-- subject="[hwloc-users] problem with open mpi" -->
<!-- id="1397666648.6254.YahooMailNeo_at_web172203.mail.ir2.yahoo.com" -->
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
<strong>Subject:</strong> [hwloc-users] problem with open mpi<br>
<strong>From:</strong> flavienne sayou (<em>flaviennesayou1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-16 12:44:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1024.php">Brice Goglin: "Re: [hwloc-users] problem with open mpi"</a>
<li><strong>Previous message:</strong> <a href="1022.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1024.php">Brice Goglin: "Re: [hwloc-users] problem with open mpi"</a>
<li><strong>Reply:</strong> <a href="1024.php">Brice Goglin: "Re: [hwloc-users] problem with open mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
I am
Flavienne and I am a master student.
I wrote a
script which have to backup sequentials applications with BLCR and parallels
applications with OPEN MPI.
I created
symbolic links of this script to /etc/rc0.d and /etc/rc6.d folders in order to
be executed before boot and reboot processes of the computer. My aim is to
backup all sequential and parallel application before the computer goes down
(shutdown or reboot).
Backups of
sequentials and parallels applications are performed&#160; good when the computer is on. But when the
computer shutdown or reboot, only sequentials applications are backed up.
I am
wondering why parallels applications cannot be backed up before the compeuter
goes down and if there is a solution which I can use to solve my problem.
For
information, I am working on Ubuntu 10.04 and the sript I wrote is below:
#!/bin/sh
&#160;
for i in
`cat /home/snf4/ckpt/ficseq.txt`
do 
&#160;
cr_checkpoint
--term $i 
&#160;
done
&#160;
for i in
`cat /home/snf4/ckpt/ficpar.txt`
do 
&#160;
ompi-checkpoint
--term $i 
&#160;
done
Where
ficpar.txt contains PID of paralleles applications which are executed and
ficseq.text contains PID of sequentials applications which are executed.
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1023/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1024.php">Brice Goglin: "Re: [hwloc-users] problem with open mpi"</a>
<li><strong>Previous message:</strong> <a href="1022.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1024.php">Brice Goglin: "Re: [hwloc-users] problem with open mpi"</a>
<li><strong>Reply:</strong> <a href="1024.php">Brice Goglin: "Re: [hwloc-users] problem with open mpi"</a>
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
