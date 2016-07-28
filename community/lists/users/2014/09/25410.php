<?
$subject_val = "[OMPI users] General question about running single-node jobs.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 20:12:13 2014" -->
<!-- isoreceived="20140930001213" -->
<!-- sent="Mon, 29 Sep 2014 17:12:08 -0700" -->
<!-- isosent="20140930001208" -->
<!-- name="Lee-Ping Wang" -->
<!-- email="leeping_at_[hidden]" -->
<!-- subject="[OMPI users] General question about running single-node jobs." -->
<!-- id="807F585B-67EE-4215-89F2-91FDE208EA36_at_stanford.edu" -->
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
<strong>Subject:</strong> [OMPI users] General question about running single-node jobs.<br>
<strong>From:</strong> Lee-Ping Wang (<em>leeping_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-29 20:12:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25411.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>Previous message:</strong> <a href="25409.php">Lee-Ping Wang: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25411.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>Reply:</strong> <a href="25411.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>My application uses MPI to run parallel jobs on a single node, so I have no need of any support for communication between nodes.  However, when I use mpirun to launch my application I see strange errors such as:
<br>
<p>--------------------------------------------------------------------------
<br>
No network interfaces were found for out-of-band communications. We require
<br>
at least one available network for out-of-band messaging.
<br>
--------------------------------------------------------------------------
<br>
<p>[nid23206:10697] [[33772,1],0] ORTE_ERROR_LOG: Unable to open a TCP socket for out-of-band communications in file oob_tcp_listener.c at line 113
<br>
[nid23206:10697] [[33772,1],0] ORTE_ERROR_LOG: Unable to open a TCP socket for out-of-band communications in file oob_tcp_component.c at line 584
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_oob_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value (null) (-43) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
<p>/home/leeping/opt/qchem-4.2/ext-libs/openmpi/lib/libmpi.so.1(+0xfeaa9)[0x2b77e9de5aa9]
<br>
/home/leeping/opt/qchem-4.2/ext-libs/openmpi/lib/libmpi.so.1(ompi_btl_openib_connect_base_select_for_local_port+0xd0)[0x2b77e9de13a0]
<br>
<p>It seems like in each case, OpenMPI is trying to use some feature related to networking and crashing as a result.  My workaround is to deduce the components that are crashing and disable them in my environment variables like this:
<br>
<p>export OMPI_MCA_btl=self,sm
<br>
export OMPI_MCA_oob=^tcp
<br>
<p>Is there a better way to do this - i.e. explicitly prohibit OpenMPI from using any network-related feature and run only on the local node?
<br>
<p>Thanks,
<br>
<p>- Lee-Ping
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25410/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25411.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>Previous message:</strong> <a href="25409.php">Lee-Ping Wang: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25411.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
<li><strong>Reply:</strong> <a href="25411.php">Lee-Ping Wang: "Re: [OMPI users] General question about running single-node jobs."</a>
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
