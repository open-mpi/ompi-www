<?
$subject_val = "Re: [OMPI users] infiniband problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 16:35:54 2008" -->
<!-- isoreceived="20081120213554" -->
<!-- sent="Thu, 20 Nov 2008 15:35:49 -0600" -->
<!-- isosent="20081120213549" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI users] infiniband problem" -->
<!-- id="ea86ce220811201335i26436456k3cdb5604194145d3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4925D398.2050509_at_tu-berlin.de" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-20 16:35:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7366.php">John Hearns: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Previous message:</strong> <a href="7364.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<li><strong>In reply to:</strong> <a href="7363.php">Michael Oevermann: "Re: [OMPI users] infiniband problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7368.php">Pavel Shamis (Pasha): "Re: [OMPI users] infiniband problem"</a>
<li><strong>Reply:</strong> <a href="7368.php">Pavel Shamis (Pasha): "Re: [OMPI users] infiniband problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BTW - after you get more comfortable with your new-to-you cluster, I
<br>
recommend you upgrade your Open MPI installation.  v1.2.8 has
<br>
a lot of bugfixes relative to v1.2.2. Also, Open MPI 1.3 should be
<br>
available &quot;next month&quot;...  so watch for an announcement on that front.
<br>
<p>On Thu, Nov 20, 2008 at 3:16 PM, Michael Oevermann
<br>
&lt;michael.oevermann_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that was indeed a typo, the command is of course
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc4/openmpi-1.2.2-1/bin/mpirun -np 4 -hostfile
</span><br>
<span class="quotelev1">&gt; /home/sysgen/infiniband-mpi-test/machine
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc4/openmpi-1.2.2-1/tests/IMB-2.3/IMB-MPI1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with a blank behind /machine. Anyway, your suggested options -mca btl
</span><br>
<span class="quotelev1">&gt; openib,sm,self
</span><br>
<span class="quotelev1">&gt; did help!!! Right now I am not able to check the performance results as the
</span><br>
<span class="quotelev1">&gt; cluster is busy with jobs so  I cannot
</span><br>
<span class="quotelev1">&gt; compare with the old benchmark results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for help!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain schrieb:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your command line may have just come across with a typo, but something
</span><br>
<span class="quotelev2">&gt;&gt; isn't right:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -hostfile
</span><br>
<span class="quotelev2">&gt;&gt; /home/sysgen/infiniband-mpi-test/machine/usr/mpi/gcc4/openmpi-1.2.2-1/tests/IMB-2.3/IMB-MPI1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That looks more like a path to a binary than a path to a hostfile. Is
</span><br>
<span class="quotelev2">&gt;&gt; there a missing space or filename somewhere?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If not, then I would have expected this to error out since the argument
</span><br>
<span class="quotelev2">&gt;&gt; would be taken as the hostfile, leaving no executable specified.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you get that straightened out, then try adding -mca btl openib,sm,self
</span><br>
<span class="quotelev2">&gt;&gt; to the cmd line. This will direct mpirun to use only the OpenIB, shared
</span><br>
<span class="quotelev2">&gt;&gt; memory, and loopback transports, so you shouldn't pick up uDAPL any more.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 20, 2008, at 12:38 PM, Michael Oevermann wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have &quot;inherited&quot; a small cluster with a head node and four compute
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes which I have to administer.  The nodes are connected via infiniband
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (OFED), but the head is not. I am a complete novice to the infiniband stuff
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and here is my problem:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The infiniband configuration seems to be OK. The usual tests suggested in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the OFED install guide give the expected output, e.g.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ibv_devinfo on the nodes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ************************* oscar_cluster *************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------- n01---------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hca_id: mthca0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fw_ver: 1.2.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node_guid: 0002:c902:0025:930c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sys_image_guid: 0002:c902:0025:930f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vendor_id: 0x02c9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vendor_part_id: 25204
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hw_ver: 0xA0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; board_id: MT_03B0140001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; phys_port_cnt: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; port: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; state: PORT_ACTIVE (4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; max_mtu: 2048 (4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; active_mtu: 2048 (4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sm_lid: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; port_lid: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; port_lmc: 0x00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; etc. for the other nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sminfo on the nodes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ************************* oscar_cluster *************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------- n01---------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sminfo: sm lid 2 sm guid 0x2c90200259201, activity count 6881 priority 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; state 3 SMINFO_MASTER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------- n02---------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sminfo: sm lid 2 sm guid 0x2c90200259201, activity count 6882 priority 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; state 3 SMINFO_MASTER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------- n03---------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sminfo: sm lid 2 sm guid 0x2c90200259201, activity count 6883 priority 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; state 3 SMINFO_MASTER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------- n04---------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sminfo: sm lid 2 sm guid 0x2c90200259201, activity count 6884 priority 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; state 3 SMINFO_MASTER
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, when I directly start a mpi job (without using a scheduler) via:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/mpi/gcc4/openmpi-1.2.2-1/bin/mpirun -np 4 -hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/sysgen/infiniband-mpi-test/machine/usr/mpi/gcc4/openmpi-1.2.2-1/tests/IMB-2.3/IMB-MPI1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get the error message:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0,1,0]: uDAPL on host n01 was unable to find any NICs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lower performance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0,1,2]: uDAPL on host n01 was unable to find any NICs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lower performance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0,1,3]: uDAPL on host n02 was unable to find any NICs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lower performance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0,1,1]: uDAPL on host n02 was unable to find any NICs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lower performance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI with normal GB Etherrnet and IP networking just works fine, but the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; infinband doesn't. The MPI libs I am using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for the test are definitely compiled with IB support and the tests have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; been run successfully on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the cluster before.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any suggestions what is going wrong here?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards and thanks for any help!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Michael
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7366.php">John Hearns: "Re: [OMPI users] /dev/shm"</a>
<li><strong>Previous message:</strong> <a href="7364.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<li><strong>In reply to:</strong> <a href="7363.php">Michael Oevermann: "Re: [OMPI users] infiniband problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7368.php">Pavel Shamis (Pasha): "Re: [OMPI users] infiniband problem"</a>
<li><strong>Reply:</strong> <a href="7368.php">Pavel Shamis (Pasha): "Re: [OMPI users] infiniband problem"</a>
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
