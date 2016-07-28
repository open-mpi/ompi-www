<?
$subject_val = "[OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 11 08:02:29 2013" -->
<!-- isoreceived="20130611120229" -->
<!-- sent="Tue, 11 Jun 2013 14:02:21 +0200" -->
<!-- isosent="20130611120221" -->
<!-- name="Jes&#250;s Escudero Sahuquillo" -->
<!-- email="jescudero_at_[hidden]" -->
<!-- subject="[OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0" -->
<!-- id="51B711CD.7060205_at_dsi.uclm.es" -->
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
<strong>Subject:</strong> [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0<br>
<strong>From:</strong> Jes&#250;s Escudero Sahuquillo (<em>jescudero_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-11 08:02:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22074.php">Mike Dubman: "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<li><strong>Previous message:</strong> <a href="22072.php">Iliev, Hristo: "Re: [OMPI users] Sandy Bridge performance question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22074.php">Mike Dubman: "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<li><strong>Reply:</strong> <a href="22074.php">Mike Dubman: "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a 16-node Mellanox cluster built with Mellanox ConnectX3 cards. 
<br>
Recently I have updated the MLNX_OFED to the 2.0.5 version. The reason 
<br>
of this e-mail to the OpenMPI users list is that I am not able to run 
<br>
MPI applications using the service levels (SLs) feature of the OpenMPI 
<br>
driver.
<br>
<p>Currently, the nodes have the Red-Hat 6.4 with the kernel 
<br>
2.6.32-358.el6.x86_64. I have compiled OpenMPI 1.6.4 with:
<br>
<p>&nbsp;&nbsp;./configure --with-sge --with-openib=/usr --enable-openib-connectx-xrc 
<br>
--enable-mpi-thread-multiple --with-threads --with-hwloc 
<br>
--enable-heterogeneous --with-fca=/opt/mellanox/fca 
<br>
--with-mxm-libdir=/opt/mellanox/mxm/lib --with-mxm=/opt/mellanox/mxm 
<br>
--prefix=/home/jescudero/opt/openmpi
<br>
<p>I have modified the OpenSM code (which is based on 3.3.15) in order to 
<br>
include a special routing algorithm based on &quot;ftree&quot;. Apparently all is 
<br>
correct with the OpenSM since it returns the SLs when I execute the 
<br>
command &quot;saquery --src-to-dst slid:dlid&quot;. Anyway, I have also tried to 
<br>
run the OpenSM with the DFSSSP algorithm.
<br>
<p>However, when I try to run MPI applications (i.e. HPCC, OSU or even 
<br>
alltoall.c -included in the OpenMPI sources-) I experience some errors 
<br>
if the &quot;btl_openib_path_record_info&quot; is set to &quot;1&quot;, otherwise (i.e. if 
<br>
the btl_openib_path_record_info is not enabled) the application 
<br>
execution ends correctly. I run the MPI application with the next command:
<br>
<p>mpirun -display-allocation -display-map -np 8 -machinefile maquinas.aux 
<br>
--mca btl openib,self,sm --mca mtl mxm --mca 
<br>
btl_openib_ib_path_record_service_level 1 --mca btl_openib_cpc_include 
<br>
oob hpcc
<br>
<p>I obtain the next trace:
<br>
<p>[nodo20.XXXXX][[31227,1],6][connect/btl_openib_connect_sl.c:239:get_pathrecord_info] 
<br>
error posting receive on QP [0x16db] errno says: Success [0]
<br>
[nodo15.XXXXX][[31227,1],4][connect/btl_openib_connect_sl.c:239:get_pathrecord_info] 
<br>
error posting receive on QP [0x1749] errno says: Success [0]
<br>
[nodo17.XXXXX][[31227,1],5][connect/btl_openib_connect_sl.c:239:get_pathrecord_info] 
<br>
error posting receive on QP [0x1783] errno says: Success [0]
<br>
[nodo21.XXXXX][[31227,1],7][connect/btl_openib_connect_sl.c:239:get_pathrecord_info] 
<br>
error posting receive on QP [0x1838] errno says: Success [0]
<br>
[nodo21.XXXXX][[31227,1],7][connect/btl_openib_connect_oob.c:885:rml_recv_cb] 
<br>
endpoint connect error: -1
<br>
[nodo17.XXXXX][[31227,1],5][connect/btl_openib_connect_oob.c:885:rml_recv_cb] 
<br>
endpoint connect error: -1
<br>
[nodo15.XXXXX][[31227,1],4][connect/btl_openib_connect_oob.c:885:rml_recv_cb] 
<br>
endpoint connect error: -1
<br>
[nodo20.XXXXX][[31227,1],6][connect/btl_openib_connect_oob.c:885:rml_recv_cb] 
<br>
endpoint connect error: -1
<br>
<p>Does anyone know what I am doing wrong?
<br>
<p>All the best,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22074.php">Mike Dubman: "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<li><strong>Previous message:</strong> <a href="22072.php">Iliev, Hristo: "Re: [OMPI users] Sandy Bridge performance question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22074.php">Mike Dubman: "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<li><strong>Reply:</strong> <a href="22074.php">Mike Dubman: "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
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
