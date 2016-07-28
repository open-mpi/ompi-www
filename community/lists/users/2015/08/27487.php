<?
$subject_val = "[OMPI users] default number of slots in openmpi 1.8";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 09:54:17 2015" -->
<!-- isoreceived="20150825135417" -->
<!-- sent="Tue, 25 Aug 2015 15:54:12 +0200" -->
<!-- isosent="20150825135412" -->
<!-- name="Nicolas Niclausse" -->
<!-- email="nicolas.niclausse_at_[hidden]" -->
<!-- subject="[OMPI users] default number of slots in openmpi 1.8" -->
<!-- id="55DC7384.2000407_at_inria.fr" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] default number of slots in openmpi 1.8<br>
<strong>From:</strong> Nicolas Niclausse (<em>nicolas.niclausse_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-25 09:54:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27488.php">Ralph Castain: "Re: [OMPI users] default number of slots in openmpi 1.8"</a>
<li><strong>Previous message:</strong> <a href="27486.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27488.php">Ralph Castain: "Re: [OMPI users] default number of slots in openmpi 1.8"</a>
<li><strong>Reply:</strong> <a href="27488.php">Ralph Castain: "Re: [OMPI users] default number of slots in openmpi 1.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm trying to use openmpi 1.8.8 on a cluster managed by OAR, however i have
<br>
some troubles with the default slots number.
<br>
<p>I have reserved one core on two nodes (each has 12 cores):
<br>
<p># cat $OAR_NODEFILE
<br>
nef097.inria.fr
<br>
nef098.inria.fr
<br>
<p>but:
<br>
mpirun -np 2 --mca plm_rsh_agent oarsh -hostfile $OAR_NODEFILE ./NPmpi
<br>
<p>runs only on the first node:
<br>
0: nef097
<br>
1: nef097
<br>
Now starting the main loop
<br>
&nbsp;&nbsp;0:       1 bytes      7 times --&gt;      0.00 Mbps in   12571.35 usec
<br>
[skip]
<br>
<p><p>If i use a nodefile like this, it works:
<br>
nef097.inria.fr slots=1
<br>
nef098.inria.fr slots=1
<br>
<p>The doc says however that the default value is 1, and openmpi 1.6.4 works
<br>
fine (the OS is Centos 7, btw)
<br>
<p>Am i missing something ?
<br>
<p><pre>
-- 
Nicolas NICLAUSSE                          Service DREAM
INRIA Sophia Antipolis                     <a href="http://www-sop.inria.fr/">http://www-sop.inria.fr/</a>
2004 route des lucioles - BP 93            Tel: (33/0) 4 92 38 76 93
06902  SOPHIA-ANTIPOLIS cedex (France)     Fax: (33/0) 4 92 38 76 02
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27488.php">Ralph Castain: "Re: [OMPI users] default number of slots in openmpi 1.8"</a>
<li><strong>Previous message:</strong> <a href="27486.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27488.php">Ralph Castain: "Re: [OMPI users] default number of slots in openmpi 1.8"</a>
<li><strong>Reply:</strong> <a href="27488.php">Ralph Castain: "Re: [OMPI users] default number of slots in openmpi 1.8"</a>
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
