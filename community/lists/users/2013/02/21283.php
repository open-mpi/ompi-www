<?
$subject_val = "[OMPI users] Fwd: How openmpi-1.6.3 using nodes which not LSF dispatch?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  2 09:33:28 2013" -->
<!-- isoreceived="20130202143328" -->
<!-- sent="Sat, 02 Feb 2013 22:33:20 +0800" -->
<!-- isosent="20130202143320" -->
<!-- name="HM Li" -->
<!-- email="lihm0_at_[hidden]" -->
<!-- subject="[OMPI users] Fwd: How openmpi-1.6.3 using nodes which not LSF dispatch?" -->
<!-- id="510D23B0.8_at_163.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="510D1FC7.8020105_at_163.com" -->
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
<strong>Subject:</strong> [OMPI users] Fwd: How openmpi-1.6.3 using nodes which not LSF dispatch?<br>
<strong>From:</strong> HM Li (<em>lihm0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-02 09:33:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21284.php">Ralph Castain: "Re: [OMPI users] Fwd: How openmpi-1.6.3 using nodes which not LSF dispatch?"</a>
<li><strong>Previous message:</strong> <a href="21282.php">Andreas Bok Andersen: "[OMPI users] mmap and MPI_File_Read"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21284.php">Ralph Castain: "Re: [OMPI users] Fwd: How openmpi-1.6.3 using nodes which not LSF dispatch?"</a>
<li><strong>Reply:</strong> <a href="21284.php">Ralph Castain: "Re: [OMPI users] Fwd: How openmpi-1.6.3 using nodes which not LSF dispatch?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->

  <head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  </head>
  <body text="#000000" bgcolor="#FFFFFF">
    Can you help me?  <br>
    <div class="moz-forward-container"> <br>
      The <font color="#ff0000">b</font>node1.<font color="#ff0000">b</font>node2

      and node1,node2 are the hostnames of the same nodes corresponding
      to the InfiniBand and ethernet network respectively.<br>
      The node1,node2 are the nodes declarated in lsf.cluster.name<br>
      In order to use the IB network, I have modified the lsf mpijob
      script, and modified the HOSTFILE containing the nodes which LSF
      dispatched from node to bnode.<br>
      Then use "<font color="#ff0000">mpiexec -machinefile $HOSTFILE
        $COMMANDLINE</font>" to run my jobs.<br>
      But the job exits and shows:<br>
      -------------------------------------------------------------<br>
      A hostfile was provided that contains at least one node not<br>
      present in the allocation:<br>
      <br>
        hostfile:  /home/nic/hmli/.lsbatch/bhost23263.node1<br>
        node:      bnode2<br>
      <br>
      If you are operating in a<font color="#ff0000"> resource-managed
        environment, then only<br>
        nodes that are in the allocation can be used in the hostfile</font>.
      You<br>
      may find relative node syntax to be a useful alternative to<br>
      specifying absolute node names see the orte_hosts man page for<br>
      further information.<br>
      -------------------------------------------------------------<br>
      <br>
      I don't want to change the hostname from node to bnode in
      lsf.cluster.name.<br>
      <br>
      Thank you very much. <br>
      <br>
    </div>
    <br>
  </body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21284.php">Ralph Castain: "Re: [OMPI users] Fwd: How openmpi-1.6.3 using nodes which not LSF dispatch?"</a>
<li><strong>Previous message:</strong> <a href="21282.php">Andreas Bok Andersen: "[OMPI users] mmap and MPI_File_Read"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21284.php">Ralph Castain: "Re: [OMPI users] Fwd: How openmpi-1.6.3 using nodes which not LSF dispatch?"</a>
<li><strong>Reply:</strong> <a href="21284.php">Ralph Castain: "Re: [OMPI users] Fwd: How openmpi-1.6.3 using nodes which not LSF dispatch?"</a>
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
