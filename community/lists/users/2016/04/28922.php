<?
$subject_val = "[OMPI users] orte has lost communication";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 03:37:12 2016" -->
<!-- isoreceived="20160412073712" -->
<!-- sent="Tue, 12 Apr 2016 09:37:04 +0200" -->
<!-- isosent="20160412073704" -->
<!-- name="Stefan Friedel" -->
<!-- email="stefan.friedel_at_[hidden]" -->
<!-- subject="[OMPI users] orte has lost communication" -->
<!-- id="20160412073704.GY1487_at_woyzeck" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] orte has lost communication<br>
<strong>From:</strong> Stefan Friedel (<em>stefan.friedel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-12 03:37:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28923.php">Gilles Gouaillardet: "Re: [OMPI users] orte has lost communication"</a>
<li><strong>Previous message:</strong> <a href="28921.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28923.php">Gilles Gouaillardet: "Re: [OMPI users] orte has lost communication"</a>
<li><strong>Reply:</strong> <a href="28923.php">Gilles Gouaillardet: "Re: [OMPI users] orte has lost communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good Morning List,
<br>
we have a problem on our cluster with bigger jobs (~&gt; 200 nodes) -
<br>
almost every job ends with a message like:
<br>
<p>###################
<br>
Starting at Mon Apr 11 15:54:06 CEST 2016
<br>
Running on hosts: stek[034-086,088-201,203-247,249-344,346-379,381-388]
<br>
Running on 350 nodes.
<br>
Current working directory is /export/homelocal/sfriedel/beff
<br>
--------------------------------------------------------------------------
<br>
ORTE has lost communication with its daemon located on node:
<br>
<p>&nbsp;&nbsp;hostname:  stek346=20
<br>
<p>This is usually due to either a failure of the TCP network
<br>
connection to the node, or possibly an internal failure of
<br>
the daemon itself. We cannot recover from this failure, and
<br>
therefore will terminate the job.
<br>
<p>--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
An ORTE daemon has unexpectedly failed after launch and before
<br>
communicating back to mpirun. This could be caused by a number
<br>
of factors, including an inability to create a connection back
<br>
to mpirun due to a lack of common network interfaces and/or no
<br>
route found between them. Please check network connectivity
<br>
(including firewalls and network routing requirements).
<br>
--------------------------------------------------------------------------
<br>
Program finished with exit code 0 at: Mon Apr 11 15:54:41 CEST 2016
<br>
##########################
<br>
<p>I found a similar question on the list by Emyr James (2015-10-01) but
<br>
nobody answered until now.
<br>
<p>Cluster: Dual-Intel Xeon E5-2630 v3 Haswell, Intel/Qlogic Truescale IB QDR,
<br>
Debian Jessie 3.16.0-4-amd64 #1 SMP Debian 3.16.7-ckt11-1+deb8u2,
<br>
openmpi-1.10.2, slurm-15.08.9; homes mounted via NFS/RDMA/ipoib, mpi messages
<br>
over psm/IB + 1G Ethernet (Mgmt, pxe boot, ssh, openmpi tcp network etc.)
<br>
<p>Jobs are started via slurm sbatch/script (mpirun --mca mtl psm ~/path/to/binary)
<br>
<p>Already tested:
<br>
*several mca settings (in ...many... combinations)
<br>
mtl_psm_connect_timeout 600
<br>
oob_tcp_keepalive_time 600
<br>
oob_tcp_if_include eth0
<br>
oob_tcp_listen_mode listen_thread=20
<br>
oob_tcp_keepalive_time 600
<br>
<p>*several network/sysctl settings (in ...many... combinations)
<br>
/sbin/sysctl -w net.core.somaxconn=3D20000
<br>
/sbin/sysctl -w net.core.netdev_max_backlog=3D200000
<br>
/sbin/sysctl -w net.ipv4.tcp_max_syn_backlog=3D102400
<br>
/sbin/sysctl -w net.ipv4.ip_local_port_range=3D&quot;15000 61000&quot;
<br>
/sbin/sysctl -w net.ipv4.tcp_fin_timeout=3D10
<br>
/sbin/sysctl -w net.ipv4.tcp_tw_recycle=3D1
<br>
/sbin/sysctl -w net.ipv4.tcp_tw_reuse=3D1
<br>
/sbin/sysctl -w net.ipv4.tcp_mem=3D&quot;383865   511820   2303190&quot;
<br>
echo 20000500 &gt; /proc/sys/fs/nr_open
<br>
<p>*ulimit stuff
<br>
<p>Routing on the nodes: two private networks 10.203.0.0/22 eth0 and 10.203.40.0/22
<br>
ib0, both with their routes, no default route.
<br>
<p>If I start the job with debugging/logging (--mca oob_tcp_debug 5 --mca
<br>
oob_base_verbose 8) it takes much longer until the error occurs and the job is
<br>
starting on the nodes (producing some timesteps of output) but it will fail at
<br>
some later point.
<br>
<p>Any hint? PSM? Some kernel number must be increased?  Wrong network/routing
<br>
(should not happen with --mca oob_tcp_if_include eth0)??
<br>
<p>MfG/Sincerely
<br>
Stefan Friedel
<br>
<pre>
--
IWR * 4.317 * INF205 * 69120 Heidelberg
T +49 6221 5414404 * F +49 6221 5414427
stefan.friedel_at_[hidden]

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28922/signature.asc">signature.asc</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28923.php">Gilles Gouaillardet: "Re: [OMPI users] orte has lost communication"</a>
<li><strong>Previous message:</strong> <a href="28921.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28923.php">Gilles Gouaillardet: "Re: [OMPI users] orte has lost communication"</a>
<li><strong>Reply:</strong> <a href="28923.php">Gilles Gouaillardet: "Re: [OMPI users] orte has lost communication"</a>
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
