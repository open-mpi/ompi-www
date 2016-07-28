<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 18 14:49:54 2005" -->
<!-- isoreceived="20050718194954" -->
<!-- sent="Mon, 18 Jul 2005 12:49:48 -0700" -->
<!-- isosent="20050718194948" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="FYI: Failing intel tests" -->
<!-- id="6a4726eaa3f2762e1b17fa2a179efcfe_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-07-18 14:49:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0034.php">Tim S. Woodall: "Re:  FYI: Failing intel tests"</a>
<li><strong>Previous message:</strong> <a href="0032.php">George Bosilca: "Re:  OMPI_MCA_ptl_base_exclude=sm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0034.php">Tim S. Woodall: "Re:  FYI: Failing intel tests"</a>
<li><strong>Reply:</strong> <a href="0034.php">Tim S. Woodall: "Re:  FYI: Failing intel tests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So I have been working a variety of platforms [x86 32 bit, x86 64 bit, 
<br>
PPC 64 bit]. As of SVN Revision 6541 below are the current failures 
<br>
from the intel_tests suite. For all of these tests I used &quot;tcp,self&quot; 
<br>
PTLs and the TEG PML.
<br>
<p>On x86-32, x86-64, PPC64
<br>
-------------------------
<br>
MPI_Send_self_f
<br>
MPI_Send_self_c
<br>
MPI_Send_init_self_c
<br>
<p>On x86-64, PPC64
<br>
-----------------
<br>
MPI_Allreduce_loc_c
<br>
MPI_Reduce_loc_c
<br>
MPI_Reduce_scatter_loc_c
<br>
MPI_Scan_loc_c
<br>
<p><p><pre>
----
Josh Hursey
jjhursey_at_[hidden]
<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0034.php">Tim S. Woodall: "Re:  FYI: Failing intel tests"</a>
<li><strong>Previous message:</strong> <a href="0032.php">George Bosilca: "Re:  OMPI_MCA_ptl_base_exclude=sm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0034.php">Tim S. Woodall: "Re:  FYI: Failing intel tests"</a>
<li><strong>Reply:</strong> <a href="0034.php">Tim S. Woodall: "Re:  FYI: Failing intel tests"</a>
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
