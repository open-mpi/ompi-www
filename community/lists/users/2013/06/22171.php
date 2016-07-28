<?
$subject_val = "[OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 03:26:13 2013" -->
<!-- isoreceived="20130621072613" -->
<!-- sent="Fri, 21 Jun 2013 09:26:08 +0200" -->
<!-- isosent="20130621072608" -->
<!-- name="Stefano Zaghi" -->
<!-- email="stefano.zaghi_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so" -->
<!-- id="CACDq=fpy00rWiPNyTtjeZL2_DqxZY0rCPqF487c-H6cv_H05fA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so<br>
<strong>From:</strong> Stefano Zaghi (<em>stefano.zaghi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-21 03:26:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22172.php">thomas.forde_at_[hidden]: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Previous message:</strong> <a href="22170.php">thomas.forde_at_[hidden]: "[OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22172.php">thomas.forde_at_[hidden]: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Reply:</strong> <a href="22172.php">thomas.forde_at_[hidden]: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Reply:</strong> <a href="22211.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
I have compiled OpenMPI 1.6.4 with Intel Composer_xe_2013.4.183.
<br>
<p>My configure is:
<br>
<p>./configure --prefix=/home/stefano/opt/mpi/openmpi/1.6.4/intel CC=icc
<br>
CXX=icpc F77=ifort FC=ifort
<br>
<p>Intel Composer has been installed in:
<br>
<p>/home/stefano/opt/intel/2013.4.183/composer_xe_2013.4.183
<br>
<p>Into the .bashrc and .profile in all nodes there is:
<br>
<p>source /home/stefano/opt/intel/2013.4.183/bin/compilervars.sh intel64
<br>
export MPI=/home/stefano/opt/mpi/openmpi/1.6.4/intel
<br>
export PATH=${MPI}/bin:$PATH
<br>
export LD_LIBRARY_PATH=${MPI}/lib/openmpi:${MPI}/lib:$LD_LIBRARY_PATH
<br>
export LD_RUN_PATH=${MPI}/lib/openmpi:${MPI}/lib:$LD_RUN_PATH
<br>
<p>If I run parallel job into each single node (e.g. mpirun -np 8 myprog) all
<br>
works well. However, when I tried to run parallel job in more nodes of the
<br>
cluster (remote runs) like the following:
<br>
<p>mpirun -np 16 --bynode --machinefile nodi.txt -x LD_LIBRARY_PATH -x
<br>
LD_RUN_PATH myprog
<br>
<p>I got the following error:
<br>
<p>/home/stefano/opt/mpi/openmpi/1.6.4/intel/bin/orted: error while loading
<br>
shared libraries: libimf.so: cannot open shared object file: No such file
<br>
or directory
<br>
<p>I have read many FAQs and online resources, all indicating LD_LIBRARY_PATH
<br>
as the possible problem (wrong setting). However I am not able to figure
<br>
out what is going wrong, the LD_LIBRARY_PATH seems to set right in all
<br>
nodes.
<br>
<p>It is worth noting that in the same cluster I have successful installed
<br>
OpenMPI 1.4.3 with Intel Composer_xe_2011_sp1.6.233 following exactly the
<br>
same procedure.
<br>
<p>Thank you in advance for all suggestion,
<br>
sincerely
<br>
<p>Stefano Zaghi
<br>
Ph.D. Aerospace Engineer,
<br>
Research Scientist, Dept. of Computational Hydrodynamics at
<br>
*CNR-INSEAN*&lt;<a href="http://www.insean.cnr.it/en/content/cnr-insean">http://www.insean.cnr.it/en/content/cnr-insean</a>&gt;
<br>
<p>The Italian Ship Model Basin
<br>
(+39) 06.50299297 (Office)
<br>
My codes:
<br>
*OFF* &lt;<a href="https://github.com/szaghi/OFF">https://github.com/szaghi/OFF</a>&gt;, Open source Finite volumes Fluid
<br>
dynamics code
<br>
*Lib_VTK_IO* &lt;<a href="https://github.com/szaghi/Lib_VTK_IO">https://github.com/szaghi/Lib_VTK_IO</a>&gt;, a Fortran library to
<br>
write and read data conforming the VTK standard
<br>
*IR_Precision* &lt;<a href="https://github.com/szaghi/IR_Precision">https://github.com/szaghi/IR_Precision</a>&gt;, a Fortran
<br>
(standard 2003) module to develop portable codes
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22171/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22172.php">thomas.forde_at_[hidden]: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Previous message:</strong> <a href="22170.php">thomas.forde_at_[hidden]: "[OMPI users] New Cluster Centos 6.4 with Openmpi 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22172.php">thomas.forde_at_[hidden]: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Reply:</strong> <a href="22172.php">thomas.forde_at_[hidden]: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Reply:</strong> <a href="22211.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
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
