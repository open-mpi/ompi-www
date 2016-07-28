<?
$subject_val = "Re: [OMPI users] infiniband problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 14:52:04 2008" -->
<!-- isoreceived="20081120195204" -->
<!-- sent="Thu, 20 Nov 2008 12:51:56 -0700" -->
<!-- isosent="20081120195156" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] infiniband problem" -->
<!-- id="6210C62F-BB93-4D63-A14B-D513360AF85A_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4925BCA2.6030202_at_tu-berlin.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] infiniband problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-20 14:51:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7363.php">Michael Oevermann: "Re: [OMPI users] infiniband problem"</a>
<li><strong>Previous message:</strong> <a href="7361.php">Michael Oevermann: "[OMPI users] infiniband problem"</a>
<li><strong>In reply to:</strong> <a href="7361.php">Michael Oevermann: "[OMPI users] infiniband problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7363.php">Michael Oevermann: "Re: [OMPI users] infiniband problem"</a>
<li><strong>Reply:</strong> <a href="7363.php">Michael Oevermann: "Re: [OMPI users] infiniband problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your command line may have just come across with a typo, but something  
<br>
isn't right:
<br>
<p>-hostfile /home/sysgen/infiniband-mpi-test/machine/usr/mpi/gcc4/ 
<br>
openmpi-1.2.2-1/tests/IMB-2.3/IMB-MPI1
<br>
<p>That looks more like a path to a binary than a path to a hostfile. Is  
<br>
there a missing space or filename somewhere?
<br>
<p>If not, then I would have expected this to error out since the  
<br>
argument would be taken as the hostfile, leaving no executable  
<br>
specified.
<br>
<p>If you get that straightened out, then try adding -mca btl  
<br>
openib,sm,self to the cmd line. This will direct mpirun to use only  
<br>
the OpenIB, shared memory, and loopback transports, so you shouldn't  
<br>
pick up uDAPL any more.
<br>
<p>Ralph
<br>
<p><p>On Nov 20, 2008, at 12:38 PM, Michael Oevermann wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have &quot;inherited&quot; a small cluster with a head node and four compute
</span><br>
<span class="quotelev1">&gt; nodes which I have to administer.  The nodes are connected via  
</span><br>
<span class="quotelev1">&gt; infiniband (OFED), but the head is not.
</span><br>
<span class="quotelev1">&gt; I am a complete novice to the infiniband stuff and here is my problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The infiniband configuration seems to be OK. The usual tests  
</span><br>
<span class="quotelev1">&gt; suggested in the OFED install guide give
</span><br>
<span class="quotelev1">&gt; the expected output, e.g.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ibv_devinfo on the nodes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ************************* oscar_cluster *************************
</span><br>
<span class="quotelev1">&gt; --------- n01---------
</span><br>
<span class="quotelev1">&gt; hca_id: mthca0
</span><br>
<span class="quotelev1">&gt; fw_ver: 1.2.0
</span><br>
<span class="quotelev1">&gt; node_guid: 0002:c902:0025:930c
</span><br>
<span class="quotelev1">&gt; sys_image_guid: 0002:c902:0025:930f
</span><br>
<span class="quotelev1">&gt; vendor_id: 0x02c9
</span><br>
<span class="quotelev1">&gt; vendor_part_id: 25204
</span><br>
<span class="quotelev1">&gt; hw_ver: 0xA0
</span><br>
<span class="quotelev1">&gt; board_id: MT_03B0140001
</span><br>
<span class="quotelev1">&gt; phys_port_cnt: 1
</span><br>
<span class="quotelev1">&gt; port: 1
</span><br>
<span class="quotelev1">&gt; state: PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt; max_mtu: 2048 (4)
</span><br>
<span class="quotelev1">&gt; active_mtu: 2048 (4)
</span><br>
<span class="quotelev1">&gt; sm_lid: 2
</span><br>
<span class="quotelev1">&gt; port_lid: 1
</span><br>
<span class="quotelev1">&gt; port_lmc: 0x00
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; etc. for the other nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sminfo on the nodes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ************************* oscar_cluster *************************
</span><br>
<span class="quotelev1">&gt; --------- n01---------
</span><br>
<span class="quotelev1">&gt; sminfo: sm lid 2 sm guid 0x2c90200259201, activity count 6881  
</span><br>
<span class="quotelev1">&gt; priority 0 state 3 SMINFO_MASTER
</span><br>
<span class="quotelev1">&gt; --------- n02---------
</span><br>
<span class="quotelev1">&gt; sminfo: sm lid 2 sm guid 0x2c90200259201, activity count 6882  
</span><br>
<span class="quotelev1">&gt; priority 0 state 3 SMINFO_MASTER
</span><br>
<span class="quotelev1">&gt; --------- n03---------
</span><br>
<span class="quotelev1">&gt; sminfo: sm lid 2 sm guid 0x2c90200259201, activity count 6883  
</span><br>
<span class="quotelev1">&gt; priority 0 state 3 SMINFO_MASTER
</span><br>
<span class="quotelev1">&gt; --------- n04---------
</span><br>
<span class="quotelev1">&gt; sminfo: sm lid 2 sm guid 0x2c90200259201, activity count 6884  
</span><br>
<span class="quotelev1">&gt; priority 0 state 3 SMINFO_MASTER
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, when I directly start a mpi job (without using a scheduler)  
</span><br>
<span class="quotelev1">&gt; via:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc4/openmpi-1.2.2-1/bin/mpirun -np 4 -hostfile /home/ 
</span><br>
<span class="quotelev1">&gt; sysgen/infiniband-mpi-test/machine/usr/mpi/gcc4/openmpi-1.2.2-1/ 
</span><br>
<span class="quotelev1">&gt; tests/IMB-2.3/IMB-MPI1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  0,1,0]: uDAPL on host n01 was unable to find any NICs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,1,2]: uDAPL on host n01 was unable to find any NICs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,1,3]: uDAPL on host n02 was unable to find any NICs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [0,1,1]: uDAPL on host n02 was unable to find any NICs.
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI with normal GB Etherrnet and IP networking just works fine, but  
</span><br>
<span class="quotelev1">&gt; the infinband doesn't. The MPI libs I am using
</span><br>
<span class="quotelev1">&gt; for the test are definitely compiled with IB support and the tests  
</span><br>
<span class="quotelev1">&gt; have been run successfully on
</span><br>
<span class="quotelev1">&gt; the cluster before.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions what is going wrong here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards and thanks for any help!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7362/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7363.php">Michael Oevermann: "Re: [OMPI users] infiniband problem"</a>
<li><strong>Previous message:</strong> <a href="7361.php">Michael Oevermann: "[OMPI users] infiniband problem"</a>
<li><strong>In reply to:</strong> <a href="7361.php">Michael Oevermann: "[OMPI users] infiniband problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7363.php">Michael Oevermann: "Re: [OMPI users] infiniband problem"</a>
<li><strong>Reply:</strong> <a href="7363.php">Michael Oevermann: "Re: [OMPI users] infiniband problem"</a>
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
