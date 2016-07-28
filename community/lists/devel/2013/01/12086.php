<?
$subject_val = "[OMPI devel] mpirun -host does not work from r27879 and forward on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 31 10:31:35 2013" -->
<!-- isoreceived="20130131153135" -->
<!-- sent="Thu, 31 Jan 2013 07:31:30 -0800" -->
<!-- isosent="20130131153130" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] mpirun -host does not work from r27879 and forward on trunk" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E93236478_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> [OMPI devel] mpirun -host does not work from r27879 and forward on trunk<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-31 10:31:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12087.php">Ralph Castain: "Re: [OMPI devel] mpirun -host does not work from r27879 and forward on trunk"</a>
<li><strong>Previous message:</strong> <a href="12085.php">Jure Pe&#196;&#141;ar: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12087.php">Ralph Castain: "Re: [OMPI devel] mpirun -host does not work from r27879 and forward on trunk"</a>
<li><strong>Reply:</strong> <a href="12087.php">Ralph Castain: "Re: [OMPI devel] mpirun -host does not work from r27879 and forward on trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have stumbled into a problem with the -host argument.  This problem appears to be introduced with changeset r27879 on 1/19/2013 by rhc.  
<br>
<p>With r27877, things work:
<br>
[rolf_at_node]$ which mpirun
<br>
/home/rolf/ompi-trunk-r27877/64/bin/mpirun
<br>
[rolf_at_node]$ mpirun -np 2 -host c0-0,c0-3 hostname
<br>
c0-3
<br>
c0-0
<br>
<p>With r27879, things are broken:
<br>
[rolf_at_node]$ setenv PATH /home/rolf/ompi-trunk-r27879/64/bin:${PATH}
<br>
[rolf_at_node]$ mpirun -np 2 -host c0-0,c0-3 hostname                        
<br>
--------------------------------------------------------------------------
<br>
All nodes which are allocated for this job are already filled.
<br>
--------------------------------------------------------------------------
<br>
[rolf_at_Fermi-Cluster nv]$ 
<br>
<p>Note: Could not compile r27878 so did not test that.
<br>
<p>I can only run processes on the same node as mpirun.
<br>
<p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12087.php">Ralph Castain: "Re: [OMPI devel] mpirun -host does not work from r27879 and forward on trunk"</a>
<li><strong>Previous message:</strong> <a href="12085.php">Jure Pe&#196;&#141;ar: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12087.php">Ralph Castain: "Re: [OMPI devel] mpirun -host does not work from r27879 and forward on trunk"</a>
<li><strong>Reply:</strong> <a href="12087.php">Ralph Castain: "Re: [OMPI devel] mpirun -host does not work from r27879 and forward on trunk"</a>
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
