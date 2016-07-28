<?
$subject_val = "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  7 10:50:13 2011" -->
<!-- isoreceived="20110107155013" -->
<!-- sent="Fri, 7 Jan 2011 16:50:07 +0100" -->
<!-- isosent="20110107155007" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="Gilbert.Grosdidier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)" -->
<!-- id="2081910B-2AD2-44A7-BC79-54780E1948EB_at_cern.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F56A246-9EE9-41F4-A90C-B2FB587F2BD6_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)<br>
<strong>From:</strong> Gilbert Grosdidier (<em>Gilbert.Grosdidier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-07 10:50:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15319.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="15317.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<li><strong>In reply to:</strong> <a href="15311.php">Shamis, Pavel: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15340.php">Shamis, Pavel: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="15340.php">Shamis, Pavel: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bonjour Pavel,
<br>
<p>&nbsp;&nbsp;Here is the output of the ofed_info command :
<br>
<p>==================================================
<br>
OFED-1.4.1
<br>
libibverbs:
<br>
git://git.openfabrics.org/ofed_1_4/libibverbs.git ofed_1_4
<br>
commit b00dc7d2f79e0660ac40160607c9c4937a895433
<br>
libmthca:
<br>
git://git.kernel.org/pub/scm/libs/infiniband/libmthca.git master
<br>
commit be5eef3895eb7864db6395b885a19f770fde7234
<br>
libmlx4:
<br>
git://git.openfabrics.org/ofed_1_4/libmlx4.git ofed_1_4
<br>
commit d5e5026e2bd3bbd7648199a48c4245daf313aa48
<br>
libehca:
<br>
git://git.openfabrics.org/ofed_1_4/libehca.git ofed_1_4
<br>
commit 0249815e9b6f134f33546da6fa2e84e1185eea6d
<br>
libipathverbs:
<br>
git://git.openfabrics.org/~ralphc/libipathverbs ofed_1_4
<br>
commit 337df3c1cbe43c3e9cb58e7f6e91f44603dd23fb
<br>
libcxgb3:
<br>
git://git.openfabrics.org/~swise/libcxgb3.git ofed_1_4
<br>
commit f685c8fe7e77e64614d825e563dd9f02a0b1ae16
<br>
libnes:
<br>
git://git.openfabrics.org/~glenn/libnes.git master
<br>
commit 379cccb4484f39b99c974eb6910d3a0407c0bbd1
<br>
libibcm:
<br>
git://git.openfabrics.org/~shefty/libibcm.git master
<br>
commit 7fb57e005b3eae2feb83b3fd369aeba700a5bcf8
<br>
librdmacm:
<br>
git://git.openfabrics.org/~shefty/librdmacm.git master
<br>
commit 62c2bddeaf5275425e1a7e3add59c3913ccdb4e9
<br>
libsdp:
<br>
git://git.openfabrics.org/ofed_1_4/libsdp.git ofed_1_4
<br>
commit b1eaecb7806d60922b2fe7a2592cea4ae56cc2ab
<br>
sdpnetstat:
<br>
git://git.openfabrics.org/~amirv/sdpnetstat.git ofed_1_4
<br>
commit 798e44f6d5ff8b15b2a86bc36768bd2ad473a6d7
<br>
srptools:
<br>
git://git.openfabrics.org/~ishai/srptools.git master
<br>
commit ce1f64c8dd63c93d56c1cc5fbcdaaadd4f74a1e3
<br>
perftest:
<br>
git://git.openfabrics.org/~orenmeron/perftest.git master
<br>
commit 1cd38e844dc50d670b48200bcda91937df5f5a92
<br>
qlvnictools:
<br>
git://git.openfabrics.org/~ramachandrak/qlvnictools.git ofed_1_4
<br>
commit 4ce9789273896d0e67430c330eb3703405b59951
<br>
tvflash:
<br>
git://git.openfabrics.org/ofed_1_4/tvflash.git ofed_1_4
<br>
commit e1b50b3b8af52b0bc55b2825bb4d6ce699d5c43b
<br>
mstflint:
<br>
git://git.openfabrics.org/~orenk/mstflint.git master
<br>
commit 3352f8997591c6955430b3e68adba33e80a974e3
<br>
qperf:
<br>
git://git.openfabrics.org/~johann/qperf.git/.git master
<br>
commit 18e1c1e8af96cd8bcacced3c4c2a4fd90f880792
<br>
ibutils:
<br>
git://git.openfabrics.org/~kliteyn/ibutils.git ofed_1_4
<br>
commit 9d4bfc3ba19875dfa4583dfaef6f0f579bb013bb
<br>
ibsim:
<br>
git://git.openfabrics.org/ofed_1_4/ibsim.git ofed_1_4
<br>
commit a76132ae36dde8302552d896e35bd29608ac9524
<br>
<p>ofa_kernel-1.4.1:
<br>
Git:
<br>
git://git.openfabrics.org/ofed_1_4/linux-2.6.git ofed_kernel
<br>
commit 868661b127c355c64066a796460a7380a722dd84
<br>
================================================
<br>
<p>&nbsp;&nbsp;Does this mean the resize_cq function should be available, please ?
<br>
<p>&nbsp;&nbsp;Thanks,   Regards,     Gilbert.
<br>
<p><p>Le 7 janv. 11 &#224; 16:14, Shamis, Pavel a &#233;crit :
<br>
<p><span class="quotelev1">&gt; The FW version looks ok. But it may be driver issues as well. I  
</span><br>
<span class="quotelev1">&gt; guess that OFED 1.4.X or 1.5.x driver should be ok.
</span><br>
<span class="quotelev1">&gt; To check driver version , you may run ofed_info command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Application Performance Tools Group
</span><br>
<span class="quotelev1">&gt; Computer Science and Math Division
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; Email: shamisp_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 17, 2010, at 12:30 PM, Gilbert Grosdidier wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; John,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, more info below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 17/12/2010 17:32, John Hearns a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 17 December 2010 15:47, Gilbert Grosdidier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;Gilbert.Grosdidier_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gg= I don't know, and firmware_revs does not seem to be available.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Only thing I got on a worker node was with lspci :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you log into a compute node the command is     /usr/sbin/ibstat
</span><br>
<span class="quotelev2">&gt;&gt; gg= Here it is :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/sbin/ibstat
</span><br>
<span class="quotelev2">&gt;&gt; CA 'mlx4_0'
</span><br>
<span class="quotelev2">&gt;&gt;    CA type: MT26418
</span><br>
<span class="quotelev2">&gt;&gt;    Number of ports: 2
</span><br>
<span class="quotelev2">&gt;&gt;    Firmware version: 2.7.0
</span><br>
<span class="quotelev2">&gt;&gt;    Hardware version: a0
</span><br>
<span class="quotelev2">&gt;&gt;    Node GUID: 0x003048fffff036c4
</span><br>
<span class="quotelev2">&gt;&gt;    System image GUID: 0x003048fffff036c7
</span><br>
<span class="quotelev2">&gt;&gt;    Port 1:
</span><br>
<span class="quotelev2">&gt;&gt;        State: Active
</span><br>
<span class="quotelev2">&gt;&gt;        Physical state: LinkUp
</span><br>
<span class="quotelev2">&gt;&gt;        Rate: 20
</span><br>
<span class="quotelev2">&gt;&gt;        Base lid: 6611
</span><br>
<span class="quotelev2">&gt;&gt;        LMC: 0
</span><br>
<span class="quotelev2">&gt;&gt;        SM lid: 1
</span><br>
<span class="quotelev2">&gt;&gt;        Capability mask: 0x02510868
</span><br>
<span class="quotelev2">&gt;&gt;        Port GUID: 0x003048fffff036c5
</span><br>
<span class="quotelev2">&gt;&gt;    Port 2:
</span><br>
<span class="quotelev2">&gt;&gt;        State: Active
</span><br>
<span class="quotelev2">&gt;&gt;        Physical state: LinkUp
</span><br>
<span class="quotelev2">&gt;&gt;        Rate: 20
</span><br>
<span class="quotelev2">&gt;&gt;        Base lid: 6612
</span><br>
<span class="quotelev2">&gt;&gt;        LMC: 0
</span><br>
<span class="quotelev2">&gt;&gt;        SM lid: 1
</span><br>
<span class="quotelev2">&gt;&gt;        Capability mask: 0x02510868
</span><br>
<span class="quotelev2">&gt;&gt;        Port GUID: 0x003048fffff036c6
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does this mean resize_cq should be available, please ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,    Best,      G.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The firmware_revs command is on the cluster admin node, and is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; provided by the sgi-admin-node RPM package.
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
<p><pre>
--
*---------------------------------------------------------------------*
   Gilbert Grosdidier                 Gilbert.Grosdidier_at_[hidden]
   LAL / IN2P3 / CNRS                 Phone : +33 1 6446 8909
   Facult&#233; des Sciences, Bat. 200     Fax   : +33 1 6446 8546
   B.P. 34, F-91898 Orsay Cedex (FRANCE)
*---------------------------------------------------------------------*
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15318/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15319.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>Previous message:</strong> <a href="15317.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] change between openmpi 1.4.1 and 1.5.1 about MPI2 publish name"</a>
<li><strong>In reply to:</strong> <a href="15311.php">Shamis, Pavel: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15340.php">Shamis, Pavel: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="15340.php">Shamis, Pavel: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
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
