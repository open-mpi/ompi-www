<?
$subject_val = "[OMPI users] problem with open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 12:58:50 2014" -->
<!-- isoreceived="20140416165850" -->
<!-- sent="Wed, 16 Apr 2014 17:55:28 +0100 (BST)" -->
<!-- isosent="20140416165528" -->
<!-- name="flavienne sayou" -->
<!-- email="flaviennesayou1_at_[hidden]" -->
<!-- subject="[OMPI users] problem with open mpi" -->
<!-- id="1397667328.54084.YahooMailNeo_at_web172206.mail.ir2.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] problem with open mpi<br>
<strong>From:</strong> flavienne sayou (<em>flaviennesayou1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-16 12:55:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24222.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>Previous message:</strong> <a href="24220.php">flavienne sayou: "[OMPI users] problem with open mpi"</a>
<!-- nextthread="start" -->
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24221/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24222.php">Gus Correa: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>Previous message:</strong> <a href="24220.php">flavienne sayou: "[OMPI users] problem with open mpi"</a>
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
