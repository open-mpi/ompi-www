<?
$subject_val = "[OMPI users] Relative indexing error in OpenMPI 1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  9 01:32:50 2015" -->
<!-- isoreceived="20151009053250" -->
<!-- sent="Fri, 9 Oct 2015 14:32:46 +0900" -->
<!-- isosent="20151009053246" -->
<!-- name="waku2005" -->
<!-- email="waku2005_at_[hidden]" -->
<!-- subject="[OMPI users] Relative indexing error in OpenMPI 1.8.7" -->
<!-- id="CAB8TAZY4HqPpE-cR7E=74WNb0Z0OPGofudJewHy0csviTDMgjg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Relative indexing error in OpenMPI 1.8.7<br>
<strong>From:</strong> waku2005 (<em>waku2005_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-09 01:32:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27853.php">Lisandro Dalcin: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Previous message:</strong> <a href="27851.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27967.php">Ralph Castain: "Re: [OMPI users] Relative indexing error in OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27967.php">Ralph Castain: "Re: [OMPI users] Relative indexing error in OpenMPI 1.8.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI users
<br>
<p>Relative indexing error occurs in my CentOS small cluster.
<br>
What and where should I check ?
<br>
<p>Environment:
<br>
- 4node GbE cluster (CentOS 6.7)
<br>
- OpenMPI 1.8.7 (builded usin system compiler, gcc version 4.4.7 20120313
<br>
and installed /usr/local/openmpi-1.8.7)
<br>
- use ssh without password authentification (using RSA key)
<br>
<p>This is &quot;myhosts&quot; file:
<br>
--------------
<br>
ensis10 slots=4
<br>
ensis12 slots=6
<br>
ensis13 slots=6
<br>
ensis14 slots=6
<br>
--------------
<br>
<p>Command line and error messgae:
<br>
$ mpirun --hostfile ./myhosts -np 4 -host +n2 hostname
<br>
--------------------------------------------------------------------------
<br>
A relative host was specified, but no prior allocation has been made.
<br>
Thus, there is no way to determine the proper host to be used.
<br>
<p>-host: +n2
<br>
<p>Please see the orte_hosts man page for further information.
<br>
--------------------------------------------------------------------------
<br>
<p># In case of direct hostname specification, it works fine such as:
<br>
# [@ensis10] $ mpirun --hostfile ./myhosts -np 4 -host ensis12 hostname
<br>
# ensis12
<br>
# ensis12
<br>
# ensis12
<br>
# ensis12
<br>
#
<br>
<p>Thanks in advance
<br>
<p><p><pre>
-- 
S.Wakashima  (waku2005_at_[hidden])
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27852/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27853.php">Lisandro Dalcin: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Previous message:</strong> <a href="27851.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27967.php">Ralph Castain: "Re: [OMPI users] Relative indexing error in OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27967.php">Ralph Castain: "Re: [OMPI users] Relative indexing error in OpenMPI 1.8.7"</a>
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
