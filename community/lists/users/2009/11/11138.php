<?
$subject_val = "[OMPI users] running multiple executables under Torque/PBS PRO";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 16:46:07 2009" -->
<!-- isoreceived="20091110214607" -->
<!-- sent="Tue, 10 Nov 2009 13:46:07 -0800" -->
<!-- isosent="20091110214607" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="[OMPI users] running multiple executables under Torque/PBS PRO" -->
<!-- id="1257889567.7214.22.camel_at_alder.reachone.com" -->
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
<strong>Subject:</strong> [OMPI users] running multiple executables under Torque/PBS PRO<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 16:46:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11139.php">Ralph Castain: "Re: [OMPI users] running multiple executables under Torque/PBS PRO"</a>
<li><strong>Previous message:</strong> <a href="11137.php">Glembek Ond&#197;&#153;ej: "[OMPI users] System hang-up on MPI_Reduce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11139.php">Ralph Castain: "Re: [OMPI users] running multiple executables under Torque/PBS PRO"</a>
<li><strong>Reply:</strong> <a href="11139.php">Ralph Castain: "Re: [OMPI users] running multiple executables under Torque/PBS PRO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I want to run a number of MPI executables simultaneously in a PBS job.
<br>
For example on my system I do 'cat $PBS_NODEFILE' and get a list like
<br>
this:
<br>
<p>n04
<br>
n04
<br>
n04
<br>
n04
<br>
n06
<br>
n06
<br>
n06
<br>
n06
<br>
n07
<br>
n07
<br>
n07
<br>
n07
<br>
n09
<br>
n09
<br>
n09
<br>
n09
<br>
&nbsp;
<br>
i.e, 16 processors on 4 nodes. from which I can parse into file(s) as
<br>
desired.  If I want to run prog1 on 1 node (4 processors), prog2 on 1
<br>
node (4 processors), and prog3 on 2 nodes (8 processors), I think the
<br>
syntax will be something like:
<br>
<p>&nbsp;&nbsp;mpirun -np 4 --hostfile nodefile1 prog1: \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-np 4 --hostfile nodefile2 prog2: \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-np 8 --hostfile nodefile3 prog3
<br>
<p>Where nodefile1, nodefile2, and nodefile3 are the lists extracted from
<br>
PBS_NODEFILE.  Is this correct?  Any suggestion/advice, (e.g. syntax of
<br>
the 'nodefiles'), is appreciated.
<br>
<p>T. Rosmond
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11139.php">Ralph Castain: "Re: [OMPI users] running multiple executables under Torque/PBS PRO"</a>
<li><strong>Previous message:</strong> <a href="11137.php">Glembek Ond&#197;&#153;ej: "[OMPI users] System hang-up on MPI_Reduce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11139.php">Ralph Castain: "Re: [OMPI users] running multiple executables under Torque/PBS PRO"</a>
<li><strong>Reply:</strong> <a href="11139.php">Ralph Castain: "Re: [OMPI users] running multiple executables under Torque/PBS PRO"</a>
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
