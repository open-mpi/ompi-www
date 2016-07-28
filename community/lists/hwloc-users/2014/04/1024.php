<?
$subject_val = "Re: [hwloc-users] problem with open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 12:48:51 2014" -->
<!-- isoreceived="20140416164851" -->
<!-- sent="Wed, 16 Apr 2014 18:48:40 +0200" -->
<!-- isosent="20140416164840" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] problem with open mpi" -->
<!-- id="534EB468.9010701_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1397666648.6254.YahooMailNeo_at_web172203.mail.ir2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] problem with open mpi<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-16 12:48:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1025.php">Friedley, Andrew: "[hwloc-users] divide by zero error?"</a>
<li><strong>Previous message:</strong> <a href="1023.php">flavienne sayou: "[hwloc-users] problem with open mpi"</a>
<li><strong>In reply to:</strong> <a href="1023.php">flavienne sayou: "[hwloc-users] problem with open mpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
This list is for hwloc users (hwloc is a Open MPI subproject).
<br>
You likely want Open MPI users instead: users_at_[hidden]
<br>
Brice
<br>
<p><p>Le 16/04/2014 18:44, flavienne sayou a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I am Flavienne and I am a master student.
</span><br>
<span class="quotelev1">&gt; I wrote a script which have to backup sequentials applications with
</span><br>
<span class="quotelev1">&gt; BLCR and parallels applications with OPEN MPI.
</span><br>
<span class="quotelev1">&gt; I created symbolic links of this script to /etc/rc0.d and /etc/rc6.d
</span><br>
<span class="quotelev1">&gt; folders in order to be executed before boot and reboot processes of
</span><br>
<span class="quotelev1">&gt; the computer. My aim is to backup all sequential and parallel
</span><br>
<span class="quotelev1">&gt; application before the computer goes down (shutdown or reboot).
</span><br>
<span class="quotelev1">&gt; Backups of sequentials and parallels applications are performed  good
</span><br>
<span class="quotelev1">&gt; when the computer is on. But when the computer shutdown or reboot,
</span><br>
<span class="quotelev1">&gt; only sequentials applications are backed up.
</span><br>
<span class="quotelev1">&gt; I am wondering why parallels applications cannot be backed up before
</span><br>
<span class="quotelev1">&gt; the compeuter goes down and if there is a solution which I can use to
</span><br>
<span class="quotelev1">&gt; solve my problem.
</span><br>
<span class="quotelev1">&gt; For information, I am working on Ubuntu 10.04 and the sript I wrote is
</span><br>
<span class="quotelev1">&gt; below:
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; for i in `cat /home/snf4/ckpt/ficseq.txt`
</span><br>
<span class="quotelev1">&gt; do
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; cr_checkpoint --term $i
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; done
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; for i in `cat /home/snf4/ckpt/ficpar.txt`
</span><br>
<span class="quotelev1">&gt; do
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ompi-checkpoint --term $i
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; done
</span><br>
<span class="quotelev1">&gt; Where ficpar.txt contains PID of paralleles applications which are
</span><br>
<span class="quotelev1">&gt; executed and ficseq.text contains PID of sequentials applications
</span><br>
<span class="quotelev1">&gt; which are executed.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1024/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1025.php">Friedley, Andrew: "[hwloc-users] divide by zero error?"</a>
<li><strong>Previous message:</strong> <a href="1023.php">flavienne sayou: "[hwloc-users] problem with open mpi"</a>
<li><strong>In reply to:</strong> <a href="1023.php">flavienne sayou: "[hwloc-users] problem with open mpi"</a>
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
