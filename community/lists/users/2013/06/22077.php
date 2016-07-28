<?
$subject_val = "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 11 10:40:38 2013" -->
<!-- isoreceived="20130611144038" -->
<!-- sent="Tue, 11 Jun 2013 16:40:27 +0200" -->
<!-- isosent="20130611144027" -->
<!-- name="Jes&#250;s Escudero Sahuquillo" -->
<!-- email="jescudero_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0" -->
<!-- id="51B736DB.7040102_at_dsi.uclm.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAO1KyYdO4ijgrP9TZeGNSvD8U34WXHTz7twp2ZUh=V44hb=CA_at_mail.gmail.com" -->
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
<strong>From:</strong> Jes&#250;s Escudero Sahuquillo (<em>jescudero_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-11 10:40:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22078.php">Ralph Castain: "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<li><strong>Previous message:</strong> <a href="22076.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
<li><strong>In reply to:</strong> <a href="22074.php">Mike Dubman: "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22078.php">Ralph Castain: "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<li><strong>Reply:</strong> <a href="22078.php">Ralph Castain: "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In fact, I also have tried to configure the OpenMPI with this:
<br>
<p>./configure --with-sge --with-openib --enable-mpi-thread-multiple 
<br>
--with-threads --with-hwloc --enable-heterogeneous --disable-vt 
<br>
--enable-openib-dynamic-sl --prefix=/home/jescudero/opt/openmpi
<br>
<p>And the problem is still present
<br>
<p>El 11/06/13 15:32, Mike Dubman escribi&#243;:
<br>
<span class="quotelev1">&gt; --mca btl_openib_ib_path_record_service_level 1 flag controls openib 
</span><br>
<span class="quotelev1">&gt; btl, you need to remove  --mca mtl mxm  from command line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you compiled OpenMPI with rhel6.4 inbox ofed driver? AFAIK, the 
</span><br>
<span class="quotelev1">&gt; MOFED 2.x does not have XRC and you mentioned 
</span><br>
<span class="quotelev1">&gt; &quot;--enable-openib-connectx-xrc&quot; flag in configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 11, 2013 at 3:02 PM, Jes&#250;s Escudero Sahuquillo 
</span><br>
<span class="quotelev1">&gt; &lt;jescudero_at_[hidden] &lt;mailto:jescudero_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I have a 16-node Mellanox cluster built with Mellanox ConnectX3
</span><br>
<span class="quotelev1">&gt;     cards. Recently I have updated the MLNX_OFED to the 2.0.5 version.
</span><br>
<span class="quotelev1">&gt;     The reason of this e-mail to the OpenMPI users list is that I am
</span><br>
<span class="quotelev1">&gt;     not able to run MPI applications using the service levels (SLs)
</span><br>
<span class="quotelev1">&gt;     feature of the OpenMPI driver.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Currently, the nodes have the Red-Hat 6.4 with the kernel
</span><br>
<span class="quotelev1">&gt;     2.6.32-358.el6.x86_64. I have compiled OpenMPI 1.6.4 with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      ./configure --with-sge --with-openib=/usr
</span><br>
<span class="quotelev1">&gt;     --enable-openib-connectx-xrc --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt;     --with-threads --with-hwloc --enable-heterogeneous
</span><br>
<span class="quotelev1">&gt;     --with-fca=/opt/mellanox/fca
</span><br>
<span class="quotelev1">&gt;     --with-mxm-libdir=/opt/mellanox/mxm/lib
</span><br>
<span class="quotelev1">&gt;     --with-mxm=/opt/mellanox/mxm --prefix=/home/jescudero/opt/openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I have modified the OpenSM code (which is based on 3.3.15) in
</span><br>
<span class="quotelev1">&gt;     order to include a special routing algorithm based on &quot;ftree&quot;.
</span><br>
<span class="quotelev1">&gt;     Apparently all is correct with the OpenSM since it returns the SLs
</span><br>
<span class="quotelev1">&gt;     when I execute the command &quot;saquery --src-to-dst slid:dlid&quot;.
</span><br>
<span class="quotelev1">&gt;     Anyway, I have also tried to run the OpenSM with the DFSSSP algorithm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     However, when I try to run MPI applications (i.e. HPCC, OSU or
</span><br>
<span class="quotelev1">&gt;     even alltoall.c -included in the OpenMPI sources-) I experience
</span><br>
<span class="quotelev1">&gt;     some errors if the &quot;btl_openib_path_record_info&quot; is set to &quot;1&quot;,
</span><br>
<span class="quotelev1">&gt;     otherwise (i.e. if the btl_openib_path_record_info is not enabled)
</span><br>
<span class="quotelev1">&gt;     the application execution ends correctly. I run the MPI
</span><br>
<span class="quotelev1">&gt;     application with the next command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mpirun -display-allocation -display-map -np 8 -machinefile
</span><br>
<span class="quotelev1">&gt;     maquinas.aux --mca btl openib,self,sm --mca mtl mxm --mca
</span><br>
<span class="quotelev1">&gt;     btl_openib_ib_path_record_service_level 1 --mca
</span><br>
<span class="quotelev1">&gt;     btl_openib_cpc_include oob hpcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I obtain the next trace:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [nodo20.XXXXX][[31227,1],6][connect/btl_openib_connect_sl.c:239:get_pathrecord_info]
</span><br>
<span class="quotelev1">&gt;     error posting receive on QP [0x16db] errno says: Success [0]
</span><br>
<span class="quotelev1">&gt;     [nodo15.XXXXX][[31227,1],4][connect/btl_openib_connect_sl.c:239:get_pathrecord_info]
</span><br>
<span class="quotelev1">&gt;     error posting receive on QP [0x1749] errno says: Success [0]
</span><br>
<span class="quotelev1">&gt;     [nodo17.XXXXX][[31227,1],5][connect/btl_openib_connect_sl.c:239:get_pathrecord_info]
</span><br>
<span class="quotelev1">&gt;     error posting receive on QP [0x1783] errno says: Success [0]
</span><br>
<span class="quotelev1">&gt;     [nodo21.XXXXX][[31227,1],7][connect/btl_openib_connect_sl.c:239:get_pathrecord_info]
</span><br>
<span class="quotelev1">&gt;     error posting receive on QP [0x1838] errno says: Success [0]
</span><br>
<span class="quotelev1">&gt;     [nodo21.XXXXX][[31227,1],7][connect/btl_openib_connect_oob.c:885:rml_recv_cb]
</span><br>
<span class="quotelev1">&gt;     endpoint connect error: -1
</span><br>
<span class="quotelev1">&gt;     [nodo17.XXXXX][[31227,1],5][connect/btl_openib_connect_oob.c:885:rml_recv_cb]
</span><br>
<span class="quotelev1">&gt;     endpoint connect error: -1
</span><br>
<span class="quotelev1">&gt;     [nodo15.XXXXX][[31227,1],4][connect/btl_openib_connect_oob.c:885:rml_recv_cb]
</span><br>
<span class="quotelev1">&gt;     endpoint connect error: -1
</span><br>
<span class="quotelev1">&gt;     [nodo20.XXXXX][[31227,1],6][connect/btl_openib_connect_oob.c:885:rml_recv_cb]
</span><br>
<span class="quotelev1">&gt;     endpoint connect error: -1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Does anyone know what I am doing wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     All the best,
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
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22077/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22078.php">Ralph Castain: "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<li><strong>Previous message:</strong> <a href="22076.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re:  Need advice on performance problem"</a>
<li><strong>In reply to:</strong> <a href="22074.php">Mike Dubman: "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22078.php">Ralph Castain: "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
<li><strong>Reply:</strong> <a href="22078.php">Ralph Castain: "Re: [OMPI users] Using Service Levels (SLs) with OpenMPI 1.6.4 + MLNX_OFED 2.0"</a>
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
