<?
$subject_val = "[OMPI users] Can compute, but can not output files";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 30 22:36:52 2010" -->
<!-- isoreceived="20100501023652" -->
<!-- sent="Sat, 1 May 2010 10:36:09 +0800 (CST)" -->
<!-- isosent="20100501023609" -->
<!-- name="JiangjunZheng" -->
<!-- email="jzhj01_at_[hidden]" -->
<!-- subject="[OMPI users] Can compute, but can not output files" -->
<!-- id="44390eb8.c9f.12851b88df4.Coremail.jzhj01_at_126.com" -->
<!-- charset="gbk" -->
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
<strong>Subject:</strong> [OMPI users] Can compute, but can not output files<br>
<strong>From:</strong> JiangjunZheng (<em>jzhj01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-30 22:36:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/12864.php">Dave Love: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12862.php">Ralph Castain: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/12868.php">Jeff Squyres: "Re: [OMPI users] Can compute, but can not output files"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/12868.php">Jeff Squyres: "Re: [OMPI users] Can compute, but can not output files"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/12870.php">Mohamad Chaarawi: "Re: [OMPI users] Can compute, but can not output files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>I am using Rocks+openmpi+hdf5+pvfs2. The soft on the rocks+pvfs2 cluster will output hdf5 files after computing. However, when the output starts, it shows errors:
<br>
[root_at_nanohv pvfs2]# ./hdf5_mpio DH-ey-001400.20.h5
<br>
Testing simple C MPIO program with 1 processes accessing file DH-ey-001400.20.h5
<br>
(Filename can be specified via program argument)
<br>
Proc 0: hostname=nanohv.columbia.edu
<br>
Proc 0: MPI_File_open failed (MPI_ERR_IO: input/output error)
<br>
--------------------------------------------------------------------------
<br>
MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD with errorcode 1.
<br>
<p>If run in a none shared folder on the main node, the program goes well. it shows:
<br>
Proc 0: hostname=nanohv.columbia.edu
<br>
Proc 0: all tests passed
<br>
<p>The following is the setting of the PATH and LD_LIBRARY_PATH on one of the nodes (I don't know whether it is because the hdf5 program can not find something from openmpi I/O. What will be needed when it is going to input and output files?):
<br>
<p>[root_at_compute-0-3 ~]# $PATH
<br>
-bash: /usr/kerberos/sbin:/usr/kerberos/bin:/usr/java/latest/bin:/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin:/opt/rocks/bin:/opt/rocks/sbin:/opt/gm/bin:/opt/hdf5/bin:/opt/meep-mpi/bin:/opt/openmpi/bin:/opt/pvfs2/bin:/root/bin:
<br>
<p>[root_at_compute-0-3 ~]# $LD_LIBRARY_PATH
<br>
-bash: :/opt/gm/lib:/opt/hdf5/lib:/opt/meep-mpi/lib:/opt/openmpi/lib:/opt/pvfs2/lib: No such file or directory
<br>
<p>[root_at_compute-0-3 ~]# mount -t pvfs2
<br>
tcp://nanohv:3334/pvfs2-fs on /mnt/pvfs2 type pvfs2 (rw)
<br>
<p>[root_at_compute-0-3 ~]# ompi_info | grep gm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: gm (MCA v2.0, API v2.0, Component v1.4.1)
<br>
<p><p>The attached &quot;log.out&quot; is obtained by &quot;./configure --with-gm --prefix=/opt/openmpi | tee log.out&quot;
<br>
<p>Can anyone give some suggestions what is the reason of the input/output error?  MANY THANKS!!!
<br>
<p>Best,
<br>
Jiangjun
<br>
<p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12863/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12863/log.out">log.out</a>
</ul>
<!-- attachment="log.out" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/12864.php">Dave Love: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12862.php">Ralph Castain: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/12868.php">Jeff Squyres: "Re: [OMPI users] Can compute, but can not output files"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/12868.php">Jeff Squyres: "Re: [OMPI users] Can compute, but can not output files"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/12870.php">Mohamad Chaarawi: "Re: [OMPI users] Can compute, but can not output files"</a>
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
