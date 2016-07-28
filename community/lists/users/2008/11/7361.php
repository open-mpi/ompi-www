<?
$subject_val = "[OMPI users] infiniband problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 14:38:16 2008" -->
<!-- isoreceived="20081120193816" -->
<!-- sent="Thu, 20 Nov 2008 20:38:10 +0100" -->
<!-- isosent="20081120193810" -->
<!-- name="Michael Oevermann" -->
<!-- email="michael.oevermann_at_[hidden]" -->
<!-- subject="[OMPI users] infiniband problem" -->
<!-- id="4925BCA2.6030202_at_tu-berlin.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] infiniband problem<br>
<strong>From:</strong> Michael Oevermann (<em>michael.oevermann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-20 14:38:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7362.php">Ralph Castain: "Re: [OMPI users] infiniband problem"</a>
<li><strong>Previous message:</strong> <a href="7360.php">Ralph Castain: "Re: [OMPI users] Hybrid program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7362.php">Ralph Castain: "Re: [OMPI users] infiniband problem"</a>
<li><strong>Reply:</strong> <a href="7362.php">Ralph Castain: "Re: [OMPI users] infiniband problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I have &quot;inherited&quot; a small cluster with a head node and four compute
<br>
nodes which I have to administer.  The nodes are connected via infiniband (OFED), but the head is not. 
<br>
I am a complete novice to the infiniband stuff and here is my problem:
<br>
<p>The infiniband configuration seems to be OK. The usual tests suggested in the OFED install guide give 
<br>
the expected output, e.g.
<br>
<p><p>ibv_devinfo on the nodes:
<br>
<p><p>************************* oscar_cluster *************************
<br>
--------- n01---------
<br>
hca_id: mthca0
<br>
fw_ver: 1.2.0
<br>
node_guid: 0002:c902:0025:930c
<br>
sys_image_guid: 0002:c902:0025:930f
<br>
vendor_id: 0x02c9
<br>
vendor_part_id: 25204
<br>
hw_ver: 0xA0
<br>
board_id: MT_03B0140001
<br>
phys_port_cnt: 1
<br>
port: 1
<br>
state: PORT_ACTIVE (4)
<br>
max_mtu: 2048 (4)
<br>
active_mtu: 2048 (4)
<br>
sm_lid: 2
<br>
port_lid: 1
<br>
port_lmc: 0x00
<br>
<p>etc. for the other nodes.
<br>
<p>sminfo on the nodes:
<br>
<p>************************* oscar_cluster *************************
<br>
--------- n01---------
<br>
sminfo: sm lid 2 sm guid 0x2c90200259201, activity count 6881 priority 0 
<br>
state 3 SMINFO_MASTER
<br>
--------- n02---------
<br>
sminfo: sm lid 2 sm guid 0x2c90200259201, activity count 6882 priority 0 
<br>
state 3 SMINFO_MASTER
<br>
--------- n03---------
<br>
sminfo: sm lid 2 sm guid 0x2c90200259201, activity count 6883 priority 0 
<br>
state 3 SMINFO_MASTER
<br>
--------- n04---------
<br>
sminfo: sm lid 2 sm guid 0x2c90200259201, activity count 6884 priority 0 
<br>
state 3 SMINFO_MASTER
<br>
<p><p><p>However, when I directly start a mpi job (without using a scheduler) via:
<br>
<p>/usr/mpi/gcc4/openmpi-1.2.2-1/bin/mpirun -np 4 -hostfile 
<br>
/home/sysgen/infiniband-mpi-test/machine/usr/mpi/gcc4/openmpi-1.2.2-1/tests/IMB-2.3/IMB-MPI1
<br>
<p>I get the error message:
<br>
<p>0,1,0]: uDAPL on host n01 was unable to find any NICs.
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
[0,1,2]: uDAPL on host n01 was unable to find any NICs.
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
[0,1,3]: uDAPL on host n02 was unable to find any NICs.
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
[0,1,1]: uDAPL on host n02 was unable to find any NICs.
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
<p>MPI with normal GB Etherrnet and IP networking just works fine, but the 
<br>
infinband doesn't. The MPI libs I am using
<br>
for the test are definitely compiled with IB support and the tests have 
<br>
been run successfully on
<br>
the cluster before.
<br>
<p>Any suggestions what is going wrong here?
<br>
<p>Best regards and thanks for any help!
<br>
<p>Michael
<br>
<p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7361/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7362.php">Ralph Castain: "Re: [OMPI users] infiniband problem"</a>
<li><strong>Previous message:</strong> <a href="7360.php">Ralph Castain: "Re: [OMPI users] Hybrid program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7362.php">Ralph Castain: "Re: [OMPI users] infiniband problem"</a>
<li><strong>Reply:</strong> <a href="7362.php">Ralph Castain: "Re: [OMPI users] infiniband problem"</a>
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
