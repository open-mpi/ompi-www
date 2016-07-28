<?
$subject_val = "[OMPI users] Infinipath context limit";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 05:57:13 2008" -->
<!-- isoreceived="20080206105713" -->
<!-- sent="Wed, 6 Feb 2008 11:57:06 +0100 (CET)" -->
<!-- isosent="20080206105706" -->
<!-- name="Dani&#235;l Mantione" -->
<!-- email="daniel.mantione_at_[hidden]" -->
<!-- subject="[OMPI users] Infinipath context limit" -->
<!-- id="Pine.LNX.4.63.0802061151590.12335_at_druifje.clustervision.com" -->
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
<strong>Subject:</strong> [OMPI users] Infinipath context limit<br>
<strong>From:</strong> Dani&#235;l Mantione (<em>daniel.mantione_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-06 05:57:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4993.php">jody: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>Previous message:</strong> <a href="4991.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4997.php">Christian Bell: "Re: [OMPI users] Infinipath context limit"</a>
<li><strong>Reply:</strong> <a href="4997.php">Christian Bell: "Re: [OMPI users] Infinipath context limit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am trying to use OpenMPI on a cluster with Infinipath and 8 core nodes. 
<br>
I get these errors when using more than 4 processes:
<br>
<p>node017.13311ipath_userinit: assign_port command failed: Device or 
<br>
resource busy
<br>
[node017:13311] Open MPI failed to open a PSM endpoint: No free InfiniPath 
<br>
contexts available on /dev/ipath
<br>
[node017:13311] Error in psm_ep_open (error No free ports could be 
<br>
obtained)
<br>
node017.13315ipath_userinit: assign_port command failed: Device or 
<br>
resource busy
<br>
[node017:13315] Open MPI failed to open a PSM endpoint: No free InfiniPath 
<br>
contexts available on /dev/ipath
<br>
[node017:13315] Error in psm_ep_open (error No free ports could be 
<br>
obtained)
<br>
node017.13314ipath_userinit: assign_port command failed: Device or 
<br>
resource busy
<br>
node017.13313ipath_userinit: assign_port command failed: Device or 
<br>
resource busy
<br>
[node017:13313] Open MPI failed to open a PSM endpoint: No free InfiniPath 
<br>
contexts available on /dev/ipath
<br>
[node017:13313] Error in psm_ep_open (error No free ports could be 
<br>
obtained)
<br>
[node017:13314] Open MPI failed to open a PSM endpoint: No free InfiniPath 
<br>
contexts available on /dev/ipath
<br>
[node017:13314] Error in psm_ep_open (error No free ports could be 
<br>
obtained)
<br>
<p>The Infinipath User Guide writes this:
<br>
<p>&quot;Context Sharing Enabled: The MPI library provides PSM the local process layout
<br>
so that InfiniPath contexts available on each node can be shared if necessary; for
<br>
example, when running more node programs than contexts. By default, the
<br>
QLE7140 and QHT7140 have a maximum of four and eight sharable InfiniPath
<br>
contexts, respectively. Up to 4 node programs (from the same MPI job) can share
<br>
an InfiniPath context, for a total of 16 node programs per node for each QLE7140
<br>
and 32 node programs per node for each QHT7140.
<br>
The error message when this limit is exceeded is:
<br>
<p>No free InfiniPath contexts available on /dev/ipath
<br>
&quot;
<br>
<p>It looks like OpenMPI is running into the context limit, apparently 4 
<br>
inthis case. Can I do the context sharing mentioned with OpenMPI?
<br>
<p>Best regards,
<br>
<p>Dani&#235;l Mantione
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4993.php">jody: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>Previous message:</strong> <a href="4991.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4997.php">Christian Bell: "Re: [OMPI users] Infinipath context limit"</a>
<li><strong>Reply:</strong> <a href="4997.php">Christian Bell: "Re: [OMPI users] Infinipath context limit"</a>
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
