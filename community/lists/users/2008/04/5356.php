<?
$subject_val = "[OMPI users] problems with hostfile when doing MPMD";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 06:40:47 2008" -->
<!-- isoreceived="20080410104047" -->
<!-- sent="Thu, 10 Apr 2008 12:40:37 +0200" -->
<!-- isosent="20080410104037" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="[OMPI users] problems with hostfile when doing MPMD" -->
<!-- id="9b0da5ce0804100340u1efc64f2ofd728426558865bd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] problems with hostfile when doing MPMD<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-10 06:40:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5357.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>Previous message:</strong> <a href="5355.php">Reuti: "Re: [OMPI users] submitted job stops"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5357.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>Reply:</strong> <a href="5357.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>Reply:</strong> <a href="5388.php">Ralph Castain: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI
<br>
In my network i have some 32 bit machines and some 64 bit machines.
<br>
With --host i successfully call my application:
<br>
&nbsp;&nbsp;mpirun -np 3 --host aim-plankton -x DISPLAY ./run_gdb.sh ./MPITest :
<br>
-np 3 --host aim-fanta4 -x DISPLAY ./run_gdb.sh ./MPITest64
<br>
(MPITest64 has the same code as MPITest, but was compiled on the 64 bit machine)
<br>
<p>But when i use hostfiles:
<br>
&nbsp;&nbsp;mpirun -np 3 --hostfile hosts32 -x DISPLAY ./run_gdb.sh ./MPITest :
<br>
-np 3 --hostfile hosts64 -x DISPLAY ./run_gdb.sh ./MPITest64
<br>
all 6 processes are started on the 64 bit machine aim-fanta4.
<br>
<p>hosts32:
<br>
&nbsp;&nbsp;&nbsp;aim-plankton slots=3
<br>
hosts64
<br>
&nbsp;&nbsp;aim-fanta4 slots
<br>
<p>Is this a bug or a feature?  ;)
<br>
<p>Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5357.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>Previous message:</strong> <a href="5355.php">Reuti: "Re: [OMPI users] submitted job stops"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5357.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>Reply:</strong> <a href="5357.php">jody: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>Reply:</strong> <a href="5388.php">Ralph Castain: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
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
