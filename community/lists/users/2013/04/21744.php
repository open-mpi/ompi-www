<?
$subject_val = "[OMPI users] Change In Behavior Running on Multiple Nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 17 10:08:45 2013" -->
<!-- isoreceived="20130417140845" -->
<!-- sent="Wed, 17 Apr 2013 07:08:06 -0700" -->
<!-- isosent="20130417140806" -->
<!-- name="Welder, Wallace T         PWR" -->
<!-- email="Wallace.Welder_at_[hidden]" -->
<!-- subject="[OMPI users] Change In Behavior Running on Multiple Nodes" -->
<!-- id="9ED9893299233A48A5E9E7FEB7A423292180BF_at_cppxch05.pwrutc.com" -->
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
<strong>Subject:</strong> [OMPI users] Change In Behavior Running on Multiple Nodes<br>
<strong>From:</strong> Welder, Wallace T         PWR (<em>Wallace.Welder_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-17 10:08:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21745.php">Ralph Castain: "Re: [OMPI users] Change In Behavior Running on Multiple Nodes"</a>
<li><strong>Previous message:</strong> <a href="21743.php">Ralph Castain: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21745.php">Ralph Castain: "Re: [OMPI users] Change In Behavior Running on Multiple Nodes"</a>
<li><strong>Reply:</strong> <a href="21745.php">Ralph Castain: "Re: [OMPI users] Change In Behavior Running on Multiple Nodes"</a>
<li><strong>Maybe reply:</strong> <a href="21746.php">Welder, Wallace T         PWR: "Re: [OMPI users] Change In Behavior Running on Multiple Nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've recently tried running OpenMPI v1.6.4 on multiple nodes and have noticed a change in behavior that I don't understand.  In OpenMPI version 1.4.x, 1.5.x and 1.6.1, I could run a job spanning two nodes as shown below.  The procedure results in 8 processes running on the first node and 8 on the second node.
<br>
<p>mpirun -hostfile mpimachines -n 1 host.exe : -n 15 node.exe
<br>
<p>where the file mpimachines looks  like:
<br>
<p>node1 slots=8
<br>
node2 slots=8
<br>
<p>In OpenMPI v1.6.2 and v1.6.4 (haven't tried v1.6.3) when I try to run the same way, all the processes start on node1 and none start on node2.  I've noticed there are now runtime flags -bynode and -byslot, but  I haven't had any success with those.  I've also tried changing the mpimachines file to look like:
<br>
<p>node1 slots=8 max-slots=8
<br>
node2 slots=8 max-slots=8
<br>
<p>When I tried this, I got a runtime error saying there were not enough slots in the system to satisfy the 15 slots that were requested by the application node.exe.  I think there is a hint in here about my problem, but I haven't been able to figure out what it is yet.
<br>
<p>Can anyone let me know how the process has changed with these newer versions of OpenMPI?
<br>
<p>Thanks,
<br>
<p>Wallace
<br>
<p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21744/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21745.php">Ralph Castain: "Re: [OMPI users] Change In Behavior Running on Multiple Nodes"</a>
<li><strong>Previous message:</strong> <a href="21743.php">Ralph Castain: "Re: [OMPI users] MPI based HLA/RTI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21745.php">Ralph Castain: "Re: [OMPI users] Change In Behavior Running on Multiple Nodes"</a>
<li><strong>Reply:</strong> <a href="21745.php">Ralph Castain: "Re: [OMPI users] Change In Behavior Running on Multiple Nodes"</a>
<li><strong>Maybe reply:</strong> <a href="21746.php">Welder, Wallace T         PWR: "Re: [OMPI users] Change In Behavior Running on Multiple Nodes"</a>
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
