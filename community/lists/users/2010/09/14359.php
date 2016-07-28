<?
$subject_val = "[OMPI users] how to tell if opempi is using rsh or ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 29 19:41:08 2010" -->
<!-- isoreceived="20100929234108" -->
<!-- sent="Wed, 29 Sep 2010 16:40:44 -0700" -->
<!-- isosent="20100929234044" -->
<!-- name="Borenstein, Bernard S" -->
<!-- email="bernard.s.borenstein_at_[hidden]" -->
<!-- subject="[OMPI users] how to tell if opempi is using rsh or ssh" -->
<!-- id="86452700B9094A47B93B8DD616E3927E0332365B59_at_XCH-SW-06V.sw.nos.boeing.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] how to tell if opempi is using rsh or ssh<br>
<strong>From:</strong> Borenstein, Bernard S (<em>bernard.s.borenstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-29 19:40:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14360.php">Terry Frankcombe: "Re: [OMPI users] a question about [MPI]IO on systems without	network filesystem"</a>
<li><strong>Previous message:</strong> <a href="14358.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14361.php">Reuti: "Re: [OMPI users] how to tell if opempi is using rsh or ssh"</a>
<li><strong>Reply:</strong> <a href="14361.php">Reuti: "Re: [OMPI users] how to tell if opempi is using rsh or ssh"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are eliminating the use of rsh at our company and I'm trying to test out openmpi with the Nasa Overflow program using ssh.
<br>
I've been testing other MPI's (MPICH1 and LAM/MPI) and if I tried to use rsh the programs would just die when running
<br>
using PBS.  I submitted my Overflow job using  --mca plm_rsh_agent rsh and was surprised to see the job run.
<br>
Does this setting fail over to ssh if rsh is not available or should it just use rsh only???  Also is there any command
<br>
(this is a linux cluster) to see if ssh is being used.  I'm trying to definitely make sure that it is using ssh and not rsh.
<br>
rsh has been turned off on these nodes, so I'm pretty sure it's using ssh, but want to make sure.
<br>
<p>Thanx in advance for any help that can be provided.
<br>
<p>Bernie Borenstein
<br>
The Boeing Company
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14360.php">Terry Frankcombe: "Re: [OMPI users] a question about [MPI]IO on systems without	network filesystem"</a>
<li><strong>Previous message:</strong> <a href="14358.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14361.php">Reuti: "Re: [OMPI users] how to tell if opempi is using rsh or ssh"</a>
<li><strong>Reply:</strong> <a href="14361.php">Reuti: "Re: [OMPI users] how to tell if opempi is using rsh or ssh"</a>
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
