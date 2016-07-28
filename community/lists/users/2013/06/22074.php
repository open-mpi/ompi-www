<?
$subject_val = "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 11 09:32:37 2013" -->
<!-- isoreceived="20130611133237" -->
<!-- sent="Tue, 11 Jun 2013 16:32:31 +0300" -->
<!-- isosent="20130611133231" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0" -->
<!-- id="CAAO1KyYdO4ijgrP9TZeGNSvD8U34WXHTz7twp2ZUh=V44hb=CA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51B711CD.7060205_at_dsi.uclm.es" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-11 09:32:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22075.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
<li><strong>Previous message:</strong> <a href="22073.php">Jes&#250;s Escudero Sahuquillo: "[OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<li><strong>In reply to:</strong> <a href="22073.php">Jes&#250;s Escudero Sahuquillo: "[OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22077.php">Jesús Escudero Sahuquillo: "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<li><strong>Reply:</strong> <a href="22077.php">Jesús Escudero Sahuquillo: "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
--mca btl_openib_ib_path_record_**service_level 1 flag controls openib btl,
<br>
you need to remove  --mca mtl mxm  from command line.
<br>
<p>Have you compiled OpenMPI with rhel6.4 inbox ofed driver? AFAIK, the MOFED
<br>
2.x does not have XRC and you mentioned &quot;--enable-openib-connectx-xrc&quot; flag
<br>
in configure.
<br>
<p><p>On Tue, Jun 11, 2013 at 3:02 PM, Jes&#250;s Escudero Sahuquillo &lt;
<br>
jescudero_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have a 16-node Mellanox cluster built with Mellanox ConnectX3 cards.
</span><br>
<span class="quotelev1">&gt; Recently I have updated the MLNX_OFED to the 2.0.5 version. The reason of
</span><br>
<span class="quotelev1">&gt; this e-mail to the OpenMPI users list is that I am not able to run MPI
</span><br>
<span class="quotelev1">&gt; applications using the service levels (SLs) feature of the OpenMPI driver.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently, the nodes have the Red-Hat 6.4 with the kernel
</span><br>
<span class="quotelev1">&gt; 2.6.32-358.el6.x86_64. I have compiled OpenMPI 1.6.4 with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ./configure --with-sge --with-openib=/usr --enable-openib-connectx-xrc
</span><br>
<span class="quotelev1">&gt; --enable-mpi-thread-multiple --with-threads --with-hwloc
</span><br>
<span class="quotelev1">&gt; --enable-heterogeneous --with-fca=/opt/mellanox/fca --with-mxm-libdir=/opt/
</span><br>
<span class="quotelev1">&gt; **mellanox/mxm/lib --with-mxm=/opt/mellanox/mxm
</span><br>
<span class="quotelev1">&gt; --prefix=/home/jescudero/opt/**openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have modified the OpenSM code (which is based on 3.3.15) in order to
</span><br>
<span class="quotelev1">&gt; include a special routing algorithm based on &quot;ftree&quot;. Apparently all is
</span><br>
<span class="quotelev1">&gt; correct with the OpenSM since it returns the SLs when I execute the command
</span><br>
<span class="quotelev1">&gt; &quot;saquery --src-to-dst slid:dlid&quot;. Anyway, I have also tried to run the
</span><br>
<span class="quotelev1">&gt; OpenSM with the DFSSSP algorithm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, when I try to run MPI applications (i.e. HPCC, OSU or even
</span><br>
<span class="quotelev1">&gt; alltoall.c -included in the OpenMPI sources-) I experience some errors if
</span><br>
<span class="quotelev1">&gt; the &quot;btl_openib_path_record_info&quot; is set to &quot;1&quot;, otherwise (i.e. if the
</span><br>
<span class="quotelev1">&gt; btl_openib_path_record_info is not enabled) the application execution ends
</span><br>
<span class="quotelev1">&gt; correctly. I run the MPI application with the next command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -display-allocation -display-map -np 8 -machinefile maquinas.aux
</span><br>
<span class="quotelev1">&gt; --mca btl openib,self,sm --mca mtl mxm --mca btl_openib_ib_path_record_**service_level
</span><br>
<span class="quotelev1">&gt; 1 --mca btl_openib_cpc_include oob hpcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I obtain the next trace:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [nodo20.XXXXX][[31227,1],6][**connect/btl_openib_connect_sl.**c:239:get_pathrecord_info]
</span><br>
<span class="quotelev1">&gt; error posting receive on QP [0x16db] errno says: Success [0]
</span><br>
<span class="quotelev1">&gt; [nodo15.XXXXX][[31227,1],4][**connect/btl_openib_connect_sl.**c:239:get_pathrecord_info]
</span><br>
<span class="quotelev1">&gt; error posting receive on QP [0x1749] errno says: Success [0]
</span><br>
<span class="quotelev1">&gt; [nodo17.XXXXX][[31227,1],5][**connect/btl_openib_connect_sl.**c:239:get_pathrecord_info]
</span><br>
<span class="quotelev1">&gt; error posting receive on QP [0x1783] errno says: Success [0]
</span><br>
<span class="quotelev1">&gt; [nodo21.XXXXX][[31227,1],7][**connect/btl_openib_connect_sl.**c:239:get_pathrecord_info]
</span><br>
<span class="quotelev1">&gt; error posting receive on QP [0x1838] errno says: Success [0]
</span><br>
<span class="quotelev1">&gt; [nodo21.XXXXX][[31227,1],7][**connect/btl_openib_connect_**oob.c:885:rml_recv_cb]
</span><br>
<span class="quotelev1">&gt; endpoint connect error: -1
</span><br>
<span class="quotelev1">&gt; [nodo17.XXXXX][[31227,1],5][**connect/btl_openib_connect_**oob.c:885:rml_recv_cb]
</span><br>
<span class="quotelev1">&gt; endpoint connect error: -1
</span><br>
<span class="quotelev1">&gt; [nodo15.XXXXX][[31227,1],4][**connect/btl_openib_connect_**oob.c:885:rml_recv_cb]
</span><br>
<span class="quotelev1">&gt; endpoint connect error: -1
</span><br>
<span class="quotelev1">&gt; [nodo20.XXXXX][[31227,1],6][**connect/btl_openib_connect_**oob.c:885:rml_recv_cb]
</span><br>
<span class="quotelev1">&gt; endpoint connect error: -1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone know what I am doing wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All the best,
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ______________________________**_________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22074/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22075.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
<li><strong>Previous message:</strong> <a href="22073.php">Jes&#250;s Escudero Sahuquillo: "[OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<li><strong>In reply to:</strong> <a href="22073.php">Jes&#250;s Escudero Sahuquillo: "[OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22077.php">Jesús Escudero Sahuquillo: "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<li><strong>Reply:</strong> <a href="22077.php">Jesús Escudero Sahuquillo: "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
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
