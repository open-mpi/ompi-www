<?
$subject_val = "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 12 13:28:54 2011" -->
<!-- isoreceived="20110112182854" -->
<!-- sent="Wed, 12 Jan 2011 13:28:48 -0500" -->
<!-- isosent="20110112182848" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)" -->
<!-- id="54C8583E-73C8-4761-9B9D-A9D1F71CFC76_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2081910B-2AD2-44A7-BC79-54780E1948EB_at_cern.ch" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-12 13:28:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15341.php">Tena Sakai: "Re: [OMPI users] Newbie question"</a>
<li><strong>Previous message:</strong> <a href="15339.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="15318.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/15188.php">John Hearns: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are running 1.4.1 version. If it does not work, I would contact your ib vendor, or ofa-general mail list to check what combination of Firmware / driver you have to use.
<br>
<p>Regards,
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
Email: shamisp_at_[hidden]&lt;mailto:shamisp_at_[hidden]&gt;
On Jan 7, 2011, at 10:50 AM, Gilbert Grosdidier wrote:
Bonjour Pavel,
 Here is the output of the ofed_info command :
==================================================
OFED-1.4.1
libibverbs:
git://git.openfabrics.org/ofed_1_4/libibverbs.git ofed_1_4
commit b00dc7d2f79e0660ac40160607c9c4937a895433
libmthca:
git://git.kernel.org/pub/scm/libs/infiniband/libmthca.git master
commit be5eef3895eb7864db6395b885a19f770fde7234
libmlx4:
git://git.openfabrics.org/ofed_1_4/libmlx4.git ofed_1_4
commit d5e5026e2bd3bbd7648199a48c4245daf313aa48
libehca:
git://git.openfabrics.org/ofed_1_4/libehca.git ofed_1_4
commit 0249815e9b6f134f33546da6fa2e84e1185eea6d
libipathverbs:
git://git.openfabrics.org/~ralphc/libipathverbs ofed_1_4
commit 337df3c1cbe43c3e9cb58e7f6e91f44603dd23fb
libcxgb3:
git://git.openfabrics.org/~swise/libcxgb3.git ofed_1_4
commit f685c8fe7e77e64614d825e563dd9f02a0b1ae16
libnes:
git://git.openfabrics.org/~glenn/libnes.git master
commit 379cccb4484f39b99c974eb6910d3a0407c0bbd1
libibcm:
git://git.openfabrics.org/~shefty/libibcm.git master
commit 7fb57e005b3eae2feb83b3fd369aeba700a5bcf8
librdmacm:
git://git.openfabrics.org/~shefty/librdmacm.git master
commit 62c2bddeaf5275425e1a7e3add59c3913ccdb4e9
libsdp:
git://git.openfabrics.org/ofed_1_4/libsdp.git ofed_1_4
commit b1eaecb7806d60922b2fe7a2592cea4ae56cc2ab
sdpnetstat:
git://git.openfabrics.org/~amirv/sdpnetstat.git ofed_1_4
commit 798e44f6d5ff8b15b2a86bc36768bd2ad473a6d7
srptools:
git://git.openfabrics.org/~ishai/srptools.git master
commit ce1f64c8dd63c93d56c1cc5fbcdaaadd4f74a1e3
perftest:
git://git.openfabrics.org/~orenmeron/perftest.git master
commit 1cd38e844dc50d670b48200bcda91937df5f5a92
qlvnictools:
git://git.openfabrics.org/~ramachandrak/qlvnictools.git ofed_1_4
commit 4ce9789273896d0e67430c330eb3703405b59951
tvflash:
git://git.openfabrics.org/ofed_1_4/tvflash.git ofed_1_4
commit e1b50b3b8af52b0bc55b2825bb4d6ce699d5c43b
mstflint:
git://git.openfabrics.org/~orenk/mstflint.git master
commit 3352f8997591c6955430b3e68adba33e80a974e3
qperf:
git://git.openfabrics.org/~johann/qperf.git/.git master
commit 18e1c1e8af96cd8bcacced3c4c2a4fd90f880792
ibutils:
git://git.openfabrics.org/~kliteyn/ibutils.git ofed_1_4
commit 9d4bfc3ba19875dfa4583dfaef6f0f579bb013bb
ibsim:
git://git.openfabrics.org/ofed_1_4/ibsim.git ofed_1_4
commit a76132ae36dde8302552d896e35bd29608ac9524
ofa_kernel-1.4.1:
Git:
git://git.openfabrics.org/ofed_1_4/linux-2.6.git ofed_kernel
commit 868661b127c355c64066a796460a7380a722dd84
================================================
 Does this mean the resize_cq function should be available, please ?
 Thanks,   Regards,     Gilbert.
Le 7 janv. 11 &#224; 16:14, Shamis, Pavel a &#233;crit :
The FW version looks ok. But it may be driver issues as well. I guess that OFED 1.4.X or 1.5.x driver should be ok.
To check driver version , you may run ofed_info command.
Regards,
Pavel (Pasha) Shamis
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
Email: shamisp_at_[hidden]&lt;mailto:shamisp_at_[hidden]&gt;
On Dec 17, 2010, at 12:30 PM, Gilbert Grosdidier wrote:
John,
Thanks, more info below.
Le 17/12/2010 17:32, John Hearns a &#233;crit :
On 17 December 2010 15:47, Gilbert Grosdidier
&lt;Gilbert.Grosdidier_at_[hidden]&lt;mailto:Gilbert.Grosdidier_at_[hidden]&gt;&gt;  wrote:
gg= I don't know, and firmware_revs does not seem to be available.
Only thing I got on a worker node was with lspci :
If you log into a compute node the command is     /usr/sbin/ibstat
gg= Here it is :
/usr/sbin/ibstat
CA 'mlx4_0'
   CA type: MT26418
   Number of ports: 2
   Firmware version: 2.7.0
   Hardware version: a0
   Node GUID: 0x003048fffff036c4
   System image GUID: 0x003048fffff036c7
   Port 1:
       State: Active
       Physical state: LinkUp
       Rate: 20
       Base lid: 6611
       LMC: 0
       SM lid: 1
       Capability mask: 0x02510868
       Port GUID: 0x003048fffff036c5
   Port 2:
       State: Active
       Physical state: LinkUp
       Rate: 20
       Base lid: 6612
       LMC: 0
       SM lid: 1
       Capability mask: 0x02510868
       Port GUID: 0x003048fffff036c6
Does this mean resize_cq should be available, please ?
Thanks,    Best,      G.
The firmware_revs command is on the cluster admin node, and is
provided by the sgi-admin-node RPM package.
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
--
*---------------------------------------------------------------------*
  Gilbert Grosdidier                 Gilbert.Grosdidier_at_[hidden]&lt;mailto:Gilbert.Grosdidier_at_[hidden]&gt;
  LAL / IN2P3 / CNRS                 Phone : +33 1 6446 8909
  Facult&#233; des Sciences, Bat. 200     Fax   : +33 1 6446 8546
  B.P. 34, F-91898 Orsay Cedex (FRANCE)
*---------------------------------------------------------------------*
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15341.php">Tena Sakai: "Re: [OMPI users] Newbie question"</a>
<li><strong>Previous message:</strong> <a href="15339.php">Michael Di Domenico: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="15318.php">Gilbert Grosdidier: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/15188.php">John Hearns: "Re: [OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
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
