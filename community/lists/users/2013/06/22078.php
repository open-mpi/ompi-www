<?
$subject_val = "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 11 10:58:16 2013" -->
<!-- isoreceived="20130611145816" -->
<!-- sent="Tue, 11 Jun 2013 07:58:09 -0700" -->
<!-- isosent="20130611145809" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0" -->
<!-- id="23D3BE56-701F-465A-BFC8-0B737B0878E1_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51B736DB.7040102_at_dsi.uclm.es" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-11 10:58:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22079.php">eblosch_at_[hidden]: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
<li><strong>Previous message:</strong> <a href="22077.php">Jes&#250;s Escudero Sahuquillo: "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<li><strong>In reply to:</strong> <a href="22077.php">Jes&#250;s Escudero Sahuquillo: "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Couple of things stand out. You should remove the following configure options:
<br>
<p>--enable-mpi-thread-multiple
<br>
--with-threads
<br>
--enable-heterogeneous
<br>
<p>Thread multiple is not ready yet in OMPI (and openib doesn't support threaded operations anyway), and the support for hetero systems really isn't working. Not saying that's the sole source of the problem, but it may well be contributing if you are trying to run a multi-threaded app and it exposes alternative code paths that may not be fully debugged.
<br>
<p><p>On Jun 11, 2013, at 7:40 AM, Jes&#250;s Escudero Sahuquillo &lt;jescudero_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; In fact, I also have tried to configure the OpenMPI with this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --with-sge --with-openib --enable-mpi-thread-multiple --with-threads --with-hwloc --enable-heterogeneous --disable-vt --enable-openib-dynamic-sl --prefix=/home/jescudero/opt/openmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And the problem is still present
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; El 11/06/13 15:32, Mike Dubman escribi&#243;:
</span><br>
<span class="quotelev2">&gt;&gt; --mca btl_openib_ib_path_record_service_level 1 flag controls openib btl, you need to remove  --mca mtl mxm  from command line.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Have you compiled OpenMPI with rhel6.4 inbox ofed driver? AFAIK, the MOFED 2.x does not have XRC and you mentioned &quot;--enable-openib-connectx-xrc&quot; flag in configure.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jun 11, 2013 at 3:02 PM, Jes&#250;s Escudero Sahuquillo &lt;jescudero_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I have a 16-node Mellanox cluster built with Mellanox ConnectX3 cards. Recently I have updated the MLNX_OFED to the 2.0.5 version. The reason of this e-mail to the OpenMPI users list is that I am not able to run MPI applications using the service levels (SLs) feature of the OpenMPI driver.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Currently, the nodes have the Red-Hat 6.4 with the kernel 2.6.32-358.el6.x86_64. I have compiled OpenMPI 1.6.4 with:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  ./configure --with-sge --with-openib=/usr --enable-openib-connectx-xrc --enable-mpi-thread-multiple --with-threads --with-hwloc --enable-heterogeneous --with-fca=/opt/mellanox/fca --with-mxm-libdir=/opt/mellanox/mxm/lib --with-mxm=/opt/mellanox/mxm --prefix=/home/jescudero/opt/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have modified the OpenSM code (which is based on 3.3.15) in order to include a special routing algorithm based on &quot;ftree&quot;. Apparently all is correct with the OpenSM since it returns the SLs when I execute the command &quot;saquery --src-to-dst slid:dlid&quot;. Anyway, I have also tried to run the OpenSM with the DFSSSP algorithm.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, when I try to run MPI applications (i.e. HPCC, OSU or even alltoall.c -included in the OpenMPI sources-) I experience some errors if the &quot;btl_openib_path_record_info&quot; is set to &quot;1&quot;, otherwise (i.e. if the btl_openib_path_record_info is not enabled) the application execution ends correctly. I run the MPI application with the next command:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -display-allocation -display-map -np 8 -machinefile maquinas.aux --mca btl openib,self,sm --mca mtl mxm --mca btl_openib_ib_path_record_service_level 1 --mca btl_openib_cpc_include oob hpcc
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I obtain the next trace:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [nodo20.XXXXX][[31227,1],6][connect/btl_openib_connect_sl.c:239:get_pathrecord_info] error posting receive on QP [0x16db] errno says: Success [0]
</span><br>
<span class="quotelev2">&gt;&gt; [nodo15.XXXXX][[31227,1],4][connect/btl_openib_connect_sl.c:239:get_pathrecord_info] error posting receive on QP [0x1749] errno says: Success [0]
</span><br>
<span class="quotelev2">&gt;&gt; [nodo17.XXXXX][[31227,1],5][connect/btl_openib_connect_sl.c:239:get_pathrecord_info] error posting receive on QP [0x1783] errno says: Success [0]
</span><br>
<span class="quotelev2">&gt;&gt; [nodo21.XXXXX][[31227,1],7][connect/btl_openib_connect_sl.c:239:get_pathrecord_info] error posting receive on QP [0x1838] errno says: Success [0]
</span><br>
<span class="quotelev2">&gt;&gt; [nodo21.XXXXX][[31227,1],7][connect/btl_openib_connect_oob.c:885:rml_recv_cb] endpoint connect error: -1
</span><br>
<span class="quotelev2">&gt;&gt; [nodo17.XXXXX][[31227,1],5][connect/btl_openib_connect_oob.c:885:rml_recv_cb] endpoint connect error: -1
</span><br>
<span class="quotelev2">&gt;&gt; [nodo15.XXXXX][[31227,1],4][connect/btl_openib_connect_oob.c:885:rml_recv_cb] endpoint connect error: -1
</span><br>
<span class="quotelev2">&gt;&gt; [nodo20.XXXXX][[31227,1],6][connect/btl_openib_connect_oob.c:885:rml_recv_cb] endpoint connect error: -1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone know what I am doing wrong?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; All the best,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22078/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22079.php">eblosch_at_[hidden]: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
<li><strong>Previous message:</strong> <a href="22077.php">Jes&#250;s Escudero Sahuquillo: "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<li><strong>In reply to:</strong> <a href="22077.php">Jes&#250;s Escudero Sahuquillo: "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<!-- nextthread="start" -->
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
