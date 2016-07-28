<?
$subject_val = "[OMPI users] Issue with QLogic IBA7322 QDR InfiniBand HCA";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 22:06:34 2014" -->
<!-- isoreceived="20140401020634" -->
<!-- sent="Mon, 31 Mar 2014 23:06:31 -0300" -->
<!-- isosent="20140401020631" -->
<!-- name="Fabricio Cannini" -->
<!-- email="fcannini_at_[hidden]" -->
<!-- subject="[OMPI users] Issue with QLogic IBA7322 QDR InfiniBand HCA" -->
<!-- id="533A1F27.9040606_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Issue with QLogic IBA7322 QDR InfiniBand HCA<br>
<strong>From:</strong> Fabricio Cannini (<em>fcannini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-31 22:06:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/04/24023.php">Blosch, Edwin L: "[OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<li><strong>Previous message:</strong> <a href="24021.php">Hamid Saeed: "Re: [OMPI users] problem for multiple clusters using mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/04/24028.php">Fabricio Cannini: "Re: [OMPI users] Issue with QLogic IBA7322 QDR InfiniBand HCA"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/04/24028.php">Fabricio Cannini: "Re: [OMPI users] Issue with QLogic IBA7322 QDR InfiniBand HCA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there
<br>
<p>i'm facing a strange issue with this HCA. A cluster I support has been 
<br>
recently expanded with 4 new nodes, all using the mentioned HCA. 3 nodes 
<br>
are working fine, but one will not use the IB network when running jobs. 
<br>
Let's call 'node a' the working one, and 'node b' the not working one. 
<br>
Here's my scenario :
<br>
<p><p><p>OS: Rocks Linux 6.1 ( Centos 6.5 x86_64 )
<br>
<p>MPI: Stock Centos rpm. 'ompi_info' output below:
<br>
package:Open MPI mockbuild_at_[hidden] Distribution
<br>
ompi:version:full:1.5.4
<br>
ompi:version:svn:r25060
<br>
ompi:version:release_date:Aug 18, 2011
<br>
orte:version:full:1.5.4
<br>
orte:version:svn:r25060
<br>
orte:version:release_date:Aug 18, 2011
<br>
opal:version:full:1.5.4
<br>
opal:version:svn:r25060
<br>
opal:version:release_date:Aug 18, 2011
<br>
ident:1.5.4
<br>
<p>PATH: 
<br>
/usr/lib64/openmpi/bin:/usr/lib64/qt-3.3/bin:/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin:/opt/ganglia/bin:/opt/ganglia/sbin:/usr/java/latest/bin:/opt/maui/bin:/opt/torque/bin:/opt/torque/sbin:/opt/rocks/bin:/opt/rocks/sbin:/root/bin
<br>
<p>LD_LIBRARY_PATH: /usr/lib64/openmpi/lib
<br>
<p>OpenFabrics: Stock centos rpm
<br>
libibumad-1.3.8-1.el6.x86_64
<br>
libibmad-1.3.9-1.el6.x86_64
<br>
libibverbs-utils-1.1.7-1.el6.x86_64
<br>
libibverbs-1.1.7-1.el6.x86_64
<br>
librdmacm-1.0.17-1.el6.x86_64
<br>
infinipath-psm-3.0.1-115.1015_open.2.el6.x86_64
<br>
<p>ulimit -l :
<br>
'unlimited' in both nodes
<br>
<p><p><p>Here's where things get interesting. On all nodes with qlogic HCA, 
<br>
'ibv_devinfo' does not outputs what is expected, only :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;libibverbs: Warning: no userspace device-specific driver found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for /sys/class/infiniband_verbs/uverbs0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No IB devices found&quot;
<br>
<p>But i've successfully ran tests on 'node a' , like IMB ping and hello 
<br>
world, from other working nodes of the cluster, so despite the output of 
<br>
'ibv_devinfo', 'node a' HCA is working.
<br>
<p>I can run 'hello world' from 'node b' to 'node a' without problems,
<br>
but the opposite does not work.
<br>
<p>So this is my question: why only 'node b' HCA is not working ?
<br>
Is there any other tests i can make to get closer to the source of the 
<br>
problem ?
<br>
<p><p>TIA
<br>
Fabricio
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/04/24023.php">Blosch, Edwin L: "[OMPI users] Problem building OpenMPI 1.8 on RHEL6"</a>
<li><strong>Previous message:</strong> <a href="24021.php">Hamid Saeed: "Re: [OMPI users] problem for multiple clusters using mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/04/24028.php">Fabricio Cannini: "Re: [OMPI users] Issue with QLogic IBA7322 QDR InfiniBand HCA"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/04/24028.php">Fabricio Cannini: "Re: [OMPI users] Issue with QLogic IBA7322 QDR InfiniBand HCA"</a>
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
