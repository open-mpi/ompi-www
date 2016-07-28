<?
$subject_val = "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 25 03:35:51 2013" -->
<!-- isoreceived="20130625073551" -->
<!-- sent="Tue, 25 Jun 2013 09:35:45 +0200" -->
<!-- isosent="20130625073545" -->
<!-- name="Stefano Zaghi" -->
<!-- email="stefano.zaghi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so" -->
<!-- id="CACDq=foy0x=e5d9cgZ456NL57X+rUTk4VcKnpp8GYi86Jmhcew_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CACDq=fpy00rWiPNyTtjeZL2_DqxZY0rCPqF487c-H6cv_H05fA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so<br>
<strong>From:</strong> Stefano Zaghi (<em>stefano.zaghi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-25 03:35:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22212.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Previous message:</strong> <a href="22210.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows - policy"</a>
<li><strong>In reply to:</strong> <a href="22171.php">Stefano Zaghi: "[OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
I have performed some tests and I finally run successfully mpiexec without
<br>
simlinks. As Thomas said my error was the LD_LIBRARY_PATH setting. The
<br>
correct setup is the following:
<br>
<p>source /home/stefano/opt/intel/2013.4.183/bin/compilervars.sh intel64
<br>
export MPI=/home/stefano/opt/mpi/openmpi/1.6.4/intel
<br>
export PATH=${MPI}/bin:$PATH
<br>
export LD_LIBRARY_PATH=*/home/stefano/opt/intel/2013.4.183/lib*
<br>
:${MPI}/lib/openmpi:${MPI}/lib:$LD_LIBRARY_PATH
<br>
export LD_RUN_PATH=${MPI}/lib/openmpi:${MPI}/lib:$LD_RUN_PATH
<br>
<p>Using the above setting mpiexec (orted) finds all its shared library also
<br>
with remote node runs. My previous setups were wrong because:
<br>
<p>1) in the first test I have forgot
<br>
*/home/stefano/opt/intel/2013.4.183/lib*in the LD_LIBRARY_PATH;
<br>
2) in the second test I have used *
<br>
/home/stefano/opt/intel/2013.4.183/lib/intel64* in the LD_LIBRARY_PATH.
<br>
<p>It seems that the source of *compilervars.sh* does not set the correct
<br>
LD_LIBRARY_PATH.
<br>
<p>Thanks you for all suggestions,
<br>
sincerely
<br>
<p><p>Stefano Zaghi
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
<p><p>2013/6/21 Stefano Zaghi &lt;stefano.zaghi_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt; I have compiled OpenMPI 1.6.4 with Intel Composer_xe_2013.4.183.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My configure is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/stefano/opt/mpi/openmpi/1.6.4/intel CC=icc
</span><br>
<span class="quotelev1">&gt; CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Intel Composer has been installed in:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/stefano/opt/intel/2013.4.183/composer_xe_2013.4.183
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Into the .bashrc and .profile in all nodes there is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; source /home/stefano/opt/intel/2013.4.183/bin/compilervars.sh intel64
</span><br>
<span class="quotelev1">&gt; export MPI=/home/stefano/opt/mpi/openmpi/1.6.4/intel
</span><br>
<span class="quotelev1">&gt; export PATH=${MPI}/bin:$PATH
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=${MPI}/lib/openmpi:${MPI}/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; export LD_RUN_PATH=${MPI}/lib/openmpi:${MPI}/lib:$LD_RUN_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I run parallel job into each single node (e.g. mpirun -np 8 myprog) all
</span><br>
<span class="quotelev1">&gt; works well. However, when I tried to run parallel job in more nodes of the
</span><br>
<span class="quotelev1">&gt; cluster (remote runs) like the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 16 --bynode --machinefile nodi.txt -x LD_LIBRARY_PATH -x
</span><br>
<span class="quotelev1">&gt; LD_RUN_PATH myprog
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/stefano/opt/mpi/openmpi/1.6.4/intel/bin/orted: error while loading
</span><br>
<span class="quotelev1">&gt; shared libraries: libimf.so: cannot open shared object file: No such file
</span><br>
<span class="quotelev1">&gt; or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have read many FAQs and online resources, all indicating LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; as the possible problem (wrong setting). However I am not able to figure
</span><br>
<span class="quotelev1">&gt; out what is going wrong, the LD_LIBRARY_PATH seems to set right in all
</span><br>
<span class="quotelev1">&gt; nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is worth noting that in the same cluster I have successful installed
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.4.3 with Intel Composer_xe_2011_sp1.6.233 following exactly the
</span><br>
<span class="quotelev1">&gt; same procedure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you in advance for all suggestion,
</span><br>
<span class="quotelev1">&gt; sincerely
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stefano Zaghi
</span><br>
<span class="quotelev1">&gt; Ph.D. Aerospace Engineer,
</span><br>
<span class="quotelev1">&gt; Research Scientist, Dept. of Computational Hydrodynamics at *CNR-INSEAN*&lt;<a href="http://www.insean.cnr.it/en/content/cnr-insean">http://www.insean.cnr.it/en/content/cnr-insean</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Italian Ship Model Basin
</span><br>
<span class="quotelev1">&gt; (+39) 06.50299297 (Office)
</span><br>
<span class="quotelev1">&gt; My codes:
</span><br>
<span class="quotelev1">&gt; *OFF* &lt;<a href="https://github.com/szaghi/OFF">https://github.com/szaghi/OFF</a>&gt;, Open source Finite volumes Fluid
</span><br>
<span class="quotelev1">&gt; dynamics code
</span><br>
<span class="quotelev1">&gt; *Lib_VTK_IO* &lt;<a href="https://github.com/szaghi/Lib_VTK_IO">https://github.com/szaghi/Lib_VTK_IO</a>&gt;, a Fortran library to
</span><br>
<span class="quotelev1">&gt; write and read data conforming the VTK standard
</span><br>
<span class="quotelev1">&gt; *IR_Precision* &lt;<a href="https://github.com/szaghi/IR_Precision">https://github.com/szaghi/IR_Precision</a>&gt;, a Fortran
</span><br>
<span class="quotelev1">&gt; (standard 2003) module to develop portable codes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22211/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22212.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Previous message:</strong> <a href="22210.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows - policy"</a>
<li><strong>In reply to:</strong> <a href="22171.php">Stefano Zaghi: "[OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
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
