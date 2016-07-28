<?
$subject_val = "[OMPI users] Openib Selection and Dual Port ConnectX";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 10 11:25:11 2016" -->
<!-- isoreceived="20160610152511" -->
<!-- sent="Fri, 10 Jun 2016 15:25:08 +0000" -->
<!-- isosent="20160610152508" -->
<!-- name="Grodowitz, Nathan T." -->
<!-- email="grodowitznt_at_[hidden]" -->
<!-- subject="[OMPI users] Openib Selection and Dual Port ConnectX" -->
<!-- id="0C32425D-0DF6-4A57-87E8-259D6787EFC9_at_ornl.gov" -->
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
<strong>Subject:</strong> [OMPI users] Openib Selection and Dual Port ConnectX<br>
<strong>From:</strong> Grodowitz, Nathan T. (<em>grodowitznt_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-10 11:25:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29424.php">Gilles Gouaillardet: "Re: [OMPI users] Openib Selection and Dual Port ConnectX"</a>
<li><strong>Previous message:</strong> <a href="29422.php">Ralph Castain: "Re: [OMPI users] [open-mpi/ompi] pmix use of strnlen is not portable (#1771)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29424.php">Gilles Gouaillardet: "Re: [OMPI users] Openib Selection and Dual Port ConnectX"</a>
<li><strong>Reply:</strong> <a href="29424.php">Gilles Gouaillardet: "Re: [OMPI users] Openib Selection and Dual Port ConnectX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>

<br>
We recently ran into an issue with a cluster and dual port ConnectX3 cards. We are using the cards with one port setup for IB and one port setup for 10gbe. We ran into scaling issues when using the openib BTL where the system tried to run over the 10gbe port rather than the IB port. This caused lots of RDMA errors (RDMA_CM_EVENT_ADDR_ERROR) which were somewhat hard to diagnose. We were able to discover the issue via &#226;&#128;&#156;&#226;&#128;&#148;mca btl_base_verbose 30&#226;&#128;&#157;. This showed the ports being used. From there, we were able to setup our openmpi module to use &#226;&#128;&#156; btl_openib_if_include &#226;&#128;&#156;mlx4_0:1&#226;&#128;&#157; &#226;&#128;&#156; and put openmpi traffic over the proper port. There wasn&#226;&#128;&#153;t much documentation on the issue, so I wanted to send it out to the mailing list. 
<br>

<br>
Also, is there a reason that openib attempts to use the 10gbe interface as well? What is the cause for this as the default behavior? If this sort of configuration gets more common, it may come up more in the future. 
<br>

<br>

<br>
Thank you,
<br>

<br>
Nathan Grodowitz
<br>
ITSD Linux R&amp;D Scientific Platforms 
<br>
HPC Admin
<br>
Office:865-576-4715
<br>
Cell:865-347-4247
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29424.php">Gilles Gouaillardet: "Re: [OMPI users] Openib Selection and Dual Port ConnectX"</a>
<li><strong>Previous message:</strong> <a href="29422.php">Ralph Castain: "Re: [OMPI users] [open-mpi/ompi] pmix use of strnlen is not portable (#1771)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29424.php">Gilles Gouaillardet: "Re: [OMPI users] Openib Selection and Dual Port ConnectX"</a>
<li><strong>Reply:</strong> <a href="29424.php">Gilles Gouaillardet: "Re: [OMPI users] Openib Selection and Dual Port ConnectX"</a>
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
