<?
$subject_val = "[OMPI users] mpirun unsuccessful when run across multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 18 09:40:43 2011" -->
<!-- isoreceived="20110418134043" -->
<!-- sent="Mon, 18 Apr 2011 21:40:38 +0800" -->
<!-- isosent="20110418134038" -->
<!-- name="chenjie gu" -->
<!-- email="archygu_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun unsuccessful when run across multiple nodes" -->
<!-- id="BANLkTin+XYtamiOkmi3q3xm-H47M-gkvjw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpirun unsuccessful when run across multiple nodes<br>
<strong>From:</strong> chenjie gu (<em>archygu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-18 09:40:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16270.php">Reuti: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="16268.php">Reuti: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16270.php">Reuti: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>Reply:</strong> <a href="16270.php">Reuti: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
I am a green hand on Openmpi, I have the following Openmpi structure,
<br>
however it has problem when running across multiple nodes.
<br>
I am trying to build a Bewolf Cluster between 6 nodes of our serve (HP
<br>
Proliant G460 G7), I have installed the Openmpi on one node (assuming at
<br>
/mirror),
<br>
./configure --prefix=/mirror/openmpi CC=icc CXX=icpc F77=ifort FC=ifort
<br>
make all install
<br>
<p>using NFS, the directory of /mirror was successfully exported to the rest of
<br>
5 nodes. Now as I test the Openmpi, it runs very well on a single node,
<br>
however it hangs across multiple nodes.
<br>
<p>Now one possible reason as I know is that Openmpi uses TCP to exchange data
<br>
between different nodes, so I am worried about
<br>
whether there are firewalls between each nodes, which can be factory
<br>
integrated at somewhere(switch/NIC). Could anyone give me some
<br>
information on this point?
<br>
<p>Thanks a lot,
<br>
Regards,
<br>
ArchyGU
<br>
Nanyang Technological University
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16269/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16270.php">Reuti: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="16268.php">Reuti: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16270.php">Reuti: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>Reply:</strong> <a href="16270.php">Reuti: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
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
