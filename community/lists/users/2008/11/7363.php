<?
$subject_val = "Re: [OMPI users] infiniband problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 16:16:14 2008" -->
<!-- isoreceived="20081120211614" -->
<!-- sent="Thu, 20 Nov 2008 22:16:08 +0100" -->
<!-- isosent="20081120211608" -->
<!-- name="Michael Oevermann" -->
<!-- email="michael.oevermann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] infiniband problem" -->
<!-- id="4925D398.2050509_at_tu-berlin.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6210C62F-BB93-4D63-A14B-D513360AF85A_at_lanl.gov" -->
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
<strong>From:</strong> Michael Oevermann (<em>michael.oevermann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-20 16:16:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7364.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Previous message:</strong> <a href="7362.php">Ralph Castain: "Re: [OMPI users] infiniband problem"</a>
<li><strong>In reply to:</strong> <a href="7362.php">Ralph Castain: "Re: [OMPI users] infiniband problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7365.php">Tim Mattox: "Re: [OMPI users] infiniband problem"</a>
<li><strong>Reply:</strong> <a href="7365.php">Tim Mattox: "Re: [OMPI users] infiniband problem"</a>
<li><strong>Reply:</strong> <a href="7367.php">Jeff Squyres: "Re: [OMPI users] infiniband problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>that was indeed a typo, the command is of course
<br>
<p>/usr/mpi/gcc4/openmpi-1.2.2-1/bin/mpirun -np 4 -hostfile 
<br>
/home/sysgen/infiniband-mpi-test/machine       
<br>
/usr/mpi/gcc4/openmpi-1.2.2-1/tests/IMB-2.3/IMB-MPI1
<br>
<p>with a blank behind /machine. Anyway, your suggested options -mca btl 
<br>
openib,sm,self
<br>
did help!!! Right now I am not able to check the performance results as 
<br>
the cluster is busy with jobs so  I cannot
<br>
compare with the old benchmark results.
<br>
<p>Thanks for help!
<br>
<p>Michael
<br>
<p><p>Ralph Castain schrieb:
<br>
<span class="quotelev1">&gt; Your command line may have just come across with a typo, but something 
</span><br>
<span class="quotelev1">&gt; isn't right:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -hostfile 
</span><br>
<span class="quotelev1">&gt; /home/sysgen/infiniband-mpi-test/machine/usr/mpi/gcc4/openmpi-1.2.2-1/tests/IMB-2.3/IMB-MPI1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That looks more like a path to a binary than a path to a hostfile. Is 
</span><br>
<span class="quotelev1">&gt; there a missing space or filename somewhere?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If not, then I would have expected this to error out since the 
</span><br>
<span class="quotelev1">&gt; argument would be taken as the hostfile, leaving no executable specified.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you get that straightened out, then try adding -mca btl 
</span><br>
<span class="quotelev1">&gt; openib,sm,self to the cmd line. This will direct mpirun to use only 
</span><br>
<span class="quotelev1">&gt; the OpenIB, shared memory, and loopback transports, so you shouldn't 
</span><br>
<span class="quotelev1">&gt; pick up uDAPL any more.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 20, 2008, at 12:38 PM, Michael Oevermann wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have &quot;inherited&quot; a small cluster with a head node and four compute
</span><br>
<span class="quotelev2">&gt;&gt; nodes which I have to administer.  The nodes are connected via infiniband (OFED), but the head is not. 
</span><br>
<span class="quotelev2">&gt;&gt; I am a complete novice to the infiniband stuff and here is my problem:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The infiniband configuration seems to be OK. The usual tests suggested in the OFED install guide give 
</span><br>
<span class="quotelev2">&gt;&gt; the expected output, e.g.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ibv_devinfo on the nodes:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ************************* oscar_cluster *************************
</span><br>
<span class="quotelev2">&gt;&gt; --------- n01---------
</span><br>
<span class="quotelev2">&gt;&gt; hca_id: mthca0
</span><br>
<span class="quotelev2">&gt;&gt; fw_ver: 1.2.0
</span><br>
<span class="quotelev2">&gt;&gt; node_guid: 0002:c902:0025:930c
</span><br>
<span class="quotelev2">&gt;&gt; sys_image_guid: 0002:c902:0025:930f
</span><br>
<span class="quotelev2">&gt;&gt; vendor_id: 0x02c9
</span><br>
<span class="quotelev2">&gt;&gt; vendor_part_id: 25204
</span><br>
<span class="quotelev2">&gt;&gt; hw_ver: 0xA0
</span><br>
<span class="quotelev2">&gt;&gt; board_id: MT_03B0140001
</span><br>
<span class="quotelev2">&gt;&gt; phys_port_cnt: 1
</span><br>
<span class="quotelev2">&gt;&gt; port: 1
</span><br>
<span class="quotelev2">&gt;&gt; state: PORT_ACTIVE (4)
</span><br>
<span class="quotelev2">&gt;&gt; max_mtu: 2048 (4)
</span><br>
<span class="quotelev2">&gt;&gt; active_mtu: 2048 (4)
</span><br>
<span class="quotelev2">&gt;&gt; sm_lid: 2
</span><br>
<span class="quotelev2">&gt;&gt; port_lid: 1
</span><br>
<span class="quotelev2">&gt;&gt; port_lmc: 0x00
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; etc. for the other nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sminfo on the nodes:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ************************* oscar_cluster *************************
</span><br>
<span class="quotelev2">&gt;&gt; --------- n01---------
</span><br>
<span class="quotelev2">&gt;&gt; sminfo: sm lid 2 sm guid 0x2c90200259201, activity count 6881 
</span><br>
<span class="quotelev2">&gt;&gt; priority 0 state 3 SMINFO_MASTER
</span><br>
<span class="quotelev2">&gt;&gt; --------- n02---------
</span><br>
<span class="quotelev2">&gt;&gt; sminfo: sm lid 2 sm guid 0x2c90200259201, activity count 6882 
</span><br>
<span class="quotelev2">&gt;&gt; priority 0 state 3 SMINFO_MASTER
</span><br>
<span class="quotelev2">&gt;&gt; --------- n03---------
</span><br>
<span class="quotelev2">&gt;&gt; sminfo: sm lid 2 sm guid 0x2c90200259201, activity count 6883 
</span><br>
<span class="quotelev2">&gt;&gt; priority 0 state 3 SMINFO_MASTER
</span><br>
<span class="quotelev2">&gt;&gt; --------- n04---------
</span><br>
<span class="quotelev2">&gt;&gt; sminfo: sm lid 2 sm guid 0x2c90200259201, activity count 6884 
</span><br>
<span class="quotelev2">&gt;&gt; priority 0 state 3 SMINFO_MASTER
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, when I directly start a mpi job (without using a scheduler) via:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/mpi/gcc4/openmpi-1.2.2-1/bin/mpirun -np 4 -hostfile 
</span><br>
<span class="quotelev2">&gt;&gt; /home/sysgen/infiniband-mpi-test/machine/usr/mpi/gcc4/openmpi-1.2.2-1/tests/IMB-2.3/IMB-MPI1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get the error message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 0,1,0]: uDAPL on host n01 was unable to find any NICs.
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,2]: uDAPL on host n01 was unable to find any NICs.
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,3]: uDAPL on host n02 was unable to find any NICs.
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,1]: uDAPL on host n02 was unable to find any NICs.
</span><br>
<span class="quotelev2">&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev2">&gt;&gt; lower performance.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; MPI with normal GB Etherrnet and IP networking just works fine, but 
</span><br>
<span class="quotelev2">&gt;&gt; the infinband doesn't. The MPI libs I am using
</span><br>
<span class="quotelev2">&gt;&gt; for the test are definitely compiled with IB support and the tests 
</span><br>
<span class="quotelev2">&gt;&gt; have been run successfully on
</span><br>
<span class="quotelev2">&gt;&gt; the cluster before.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestions what is going wrong here?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards and thanks for any help!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Michael
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7364.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Previous message:</strong> <a href="7362.php">Ralph Castain: "Re: [OMPI users] infiniband problem"</a>
<li><strong>In reply to:</strong> <a href="7362.php">Ralph Castain: "Re: [OMPI users] infiniband problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7365.php">Tim Mattox: "Re: [OMPI users] infiniband problem"</a>
<li><strong>Reply:</strong> <a href="7365.php">Tim Mattox: "Re: [OMPI users] infiniband problem"</a>
<li><strong>Reply:</strong> <a href="7367.php">Jeff Squyres: "Re: [OMPI users] infiniband problem"</a>
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
