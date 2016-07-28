<?
$subject_val = "Re: [OMPI users] Can compute, but can not output files";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  3 11:56:52 2010" -->
<!-- isoreceived="20100503155652" -->
<!-- sent="Mon, 03 May 2010 10:56:46 -0500" -->
<!-- isosent="20100503155646" -->
<!-- name="Mohamad Chaarawi" -->
<!-- email="mschaara_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can compute, but can not output files" -->
<!-- id="4BDEF23E.5020900_at_cs.uh.edu" -->
<!-- charset="x-gbk" -->
<!-- inreplyto="44390eb8.c9f.12851b88df4.Coremail.jzhj01_at_126.com" -->
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
<strong>From:</strong> Mohamad Chaarawi (<em>mschaara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-03 11:56:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12864.php">Pooja Varshneya: "[OMPI users] MPIError:MPI_Recv: MPI_ERR_TRUNCATE:"</a>
<li><strong>Previous message:</strong> <a href="12862.php">Paul Kapinos: "[OMPI users] MPI_Comm_set_errhandler: error in Fortran90 Interface mpi.mod"</a>
<li><strong>In reply to:</strong> <a href="../../2010/04/12856.php">JiangjunZheng: "[OMPI users] Can compute, but can not output files"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One thing to check for is that you specified the cflags/ldflags/libs for
<br>
pvfs2 when u configured OMPI:
<br>
<p>that's what i do to get ompi to work over pvfs2 on our cluster:
<br>
<p>./configure CFLAGS=-I/path-to-pvfs2/include/
<br>
LDFLAGS=-L/path-to-pvfs2/lib/ LIBS=&quot;-lpvfs2 -lpthread&quot;
<br>
--with-wrapper-cflags=-I/path-to-pvfs2/include/
<br>
--with-wrapper-ldflags=-L/path-to-pvfs2/lib/
<br>
--with-wrapper-libs=&quot;-lpvfs2 -lpthread&quot;
<br>
--with-io-romio-flags=&quot;--with-file-system=pvfs2+ufs+nfs
<br>
--with-pvfs2=/path-to-pvfs2/&quot; ...
<br>
<p>Thanks
<br>
Mohamad
<br>
<p>JiangjunZheng wrote:
<br>
<span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using Rocks+openmpi+hdf5+pvfs2. The soft on the rocks+pvfs2
</span><br>
<span class="quotelev1">&gt; cluster will output hdf5 files after computing. However, when the
</span><br>
<span class="quotelev1">&gt; output starts, it shows errors:
</span><br>
<span class="quotelev1">&gt; [root_at_nanohv pvfs2]# ./hdf5_mpio DH-ey-001400.20.h5
</span><br>
<span class="quotelev1">&gt; Testing simple C MPIO program with 1 processes accessing file
</span><br>
<span class="quotelev1">&gt; DH-ey-001400.20.h5
</span><br>
<span class="quotelev1">&gt; (Filename can be specified via program argument)
</span><br>
<span class="quotelev1">&gt; Proc 0: hostname=nanohv.columbia.edu
</span><br>
<span class="quotelev1">&gt; Proc 0: MPI_File_open failed (MPI_ERR_IO: input/output error)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD with
</span><br>
<span class="quotelev1">&gt; errorcode 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If run in a none shared folder on the main node, the program goes
</span><br>
<span class="quotelev1">&gt; well. it shows:
</span><br>
<span class="quotelev1">&gt; Proc 0: hostname=nanohv.columbia.edu
</span><br>
<span class="quotelev1">&gt; Proc 0: all tests passed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following is the setting of the PATH and LD_LIBRARY_PATH on one of
</span><br>
<span class="quotelev1">&gt; the nodes (I don't know whether it is because the hdf5 program can not
</span><br>
<span class="quotelev1">&gt; find something from openmpi I/O. What will be needed when it is going
</span><br>
<span class="quotelev1">&gt; to input and output files?):
</span><br>
<span class="quotelev1">&gt; [root_at_compute-0-3 ~]# $PATH
</span><br>
<span class="quotelev1">&gt; -bash: /usr/kerberos/sbin:/usr/kerberos/bin:/usr/java/latest/bin:/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin:/opt/rocks/bin:/opt/rocks/sbin:/opt/gm/bin:/opt/hdf5/bin:/opt/meep-mpi/bin:/opt/openmpi/bin:/opt/pvfs2/bin:/root/bin:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_compute-0-3 ~]# $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; -bash: :/opt/gm/lib:/opt/hdf5/lib:/opt/meep-mpi/lib:/opt/openmpi/lib:/opt/pvfs2/lib: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_compute-0-3 ~]# mount -t pvfs2
</span><br>
<span class="quotelev1">&gt; tcp://nanohv:3334/pvfs2-fs on /mnt/pvfs2 type pvfs2 (rw)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_compute-0-3 ~]# ompi_info | grep gm
</span><br>
<span class="quotelev1">&gt;                  MCA btl: gm (MCA v2.0, API v2.0, Component v1.4.1)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The attached &quot;log.out&quot; is obtained by &quot;./configure --with-gm
</span><br>
<span class="quotelev1">&gt; --prefix=/opt/openmpi | tee log.out&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone give some suggestions what is the reason of the
</span><br>
<span class="quotelev1">&gt; input/output error? MANY THANKS!!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Jiangjun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &#205;&#248;&#210;&#215;&#206;&#170;&#214;&#208;&#208;&#161;&#198;&#243;&#210;&#181;&#195;&#226;&#183;&#209;&#204;&#225;&#185;&#169;&#198;&#243;&#210;&#181;&#211;&#202;&#207;&#228;&#163;&#168;&#215;&#212;&#214;&#247;&#211;&#242;&#195;&#251;&#163;&#169; &lt;<a href="http://ym.163.com/?from=od3">http://ym.163.com/?from=od3</a>&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12864.php">Pooja Varshneya: "[OMPI users] MPIError:MPI_Recv: MPI_ERR_TRUNCATE:"</a>
<li><strong>Previous message:</strong> <a href="12862.php">Paul Kapinos: "[OMPI users] MPI_Comm_set_errhandler: error in Fortran90 Interface mpi.mod"</a>
<li><strong>In reply to:</strong> <a href="../../2010/04/12856.php">JiangjunZheng: "[OMPI users] Can compute, but can not output files"</a>
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
