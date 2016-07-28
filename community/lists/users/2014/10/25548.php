<?
$subject_val = "[OMPI users] low CPU utilization with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 21 22:18:14 2014" -->
<!-- isoreceived="20141022021814" -->
<!-- sent="Wed, 22 Oct 2014 10:18:12 +0800" -->
<!-- isosent="20141022021812" -->
<!-- name="Vinson Leung" -->
<!-- email="lwhvinson1990_at_[hidden]" -->
<!-- subject="[OMPI users] low CPU utilization with OpenMPI" -->
<!-- id="CAAvvnSq7jm0OmDZRRJFrjeVi9SToQvRRtvTYoebkSPdGYHp=VA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] low CPU utilization with OpenMPI<br>
<strong>From:</strong> Vinson Leung (<em>lwhvinson1990_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-21 22:18:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25549.php">Brock Palen: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="25547.php">Gus Correa: "Re: [OMPI users] New ib locked pages behavior?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25549.php">Brock Palen: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="25549.php">Brock Palen: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
<li><strong>Maybe reply:</strong> <a href="25555.php">Vinson Leung: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Because of permission reason (OpenMPI can not write temporary file to the
<br>
default /tmp directory), I change the TMPDIR to my local directory (export
<br>
TMPDIR=/home/user/tmp ) and then the MPI program can run. But the CPU
<br>
utilization is very low under 20% (8 MPI rank running in Intel Xeon 8-core
<br>
CPU).
<br>
<p>And I also got some message when I run with OpenMPI:
<br>
[cn3:28072] 9 more processes have sent help message
<br>
help-opal-shmem-mmap.txt / mmap on nfs
<br>
[cn3:28072] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all
<br>
help / error messages
<br>
<p>Any idea?
<br>
Thanks
<br>
<p>VIncent
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25548/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25549.php">Brock Palen: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="25547.php">Gus Correa: "Re: [OMPI users] New ib locked pages behavior?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25549.php">Brock Palen: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="25549.php">Brock Palen: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
<li><strong>Maybe reply:</strong> <a href="25555.php">Vinson Leung: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
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
