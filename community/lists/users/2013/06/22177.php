<?
$subject_val = "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 04:36:04 2013" -->
<!-- isoreceived="20130621083604" -->
<!-- sent="Fri, 21 Jun 2013 10:35:59 +0200" -->
<!-- isosent="20130621083559" -->
<!-- name="Stefano Zaghi" -->
<!-- email="stefano.zaghi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so" -->
<!-- id="CACDq=fqDpbfqhTKoWZOXkxx_byYiimhS_fVcwi5mOzJuS+GTpw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="54D6E696-D303-490A-B2EB-26F4D8B71621_at_ulstein.com" -->
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
<strong>Date:</strong> 2013-06-21 04:35:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22178.php">Iliev, Hristo: "Re: [OMPI users] Trouble with Sending Multiple messages to the Same	Machine"</a>
<li><strong>Previous message:</strong> <a href="22176.php">thomas.forde_at_[hidden]: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>In reply to:</strong> <a href="22176.php">thomas.forde_at_[hidden]: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22182.php">Gus Correa: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Reply:</strong> <a href="22182.php">Gus Correa: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow... I think you are right... I will am check after the job I have just
<br>
started will finish.
<br>
<p>Thank you again.
<br>
<p>See you soon
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
<p><p>2013/6/21 &lt;thomas.forde_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; hi Stefano
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/stefano/opt/intel/2013.4.183/lib/intel64/ is also the wrong path, as
</span><br>
<span class="quotelev1">&gt; the file is in ..183/lib/ and not ...183/lib/intel64/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is that why?
</span><br>
<span class="quotelev1">&gt; ./Thomas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Den 21. juni 2013 kl. 10:26 skrev &quot;Stefano Zaghi&quot; &lt;stefano.zaghi_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Thomas,
</span><br>
<span class="quotelev1">&gt; thank you again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Symlink in /usr/lib64 is not enough, I have symlinked also
</span><br>
<span class="quotelev1">&gt; in /home/stefano/opt/mpi/openmpi/1.6.4/intel/lib and, as expected, not only
</span><br>
<span class="quotelev1">&gt; libimf.so but also ibirng.so and libintlc.so.5 are necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now also remote runs works, but this is only a workaround, I still not
</span><br>
<span class="quotelev1">&gt; understand why mpirun do not find intel library even if LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; contains also  /home/stefano/opt/intel/2013.4.183/lib/intel64. Can you try
</span><br>
<span class="quotelev1">&gt; explain again?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much.
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
<span class="quotelev1">&gt; *Lib_VTK_IO* &lt;<a href="https://github.com/szaghi/Lib_VTK_IO">https://github.com/szaghi/Lib_VTK_IO</a>&gt;, a  would Fortran
</span><br>
<span class="quotelev1">&gt; library to write and read data conforming the VTK standard
</span><br>
<span class="quotelev1">&gt; *IR_Precision* &lt;<a href="https://github.com/szaghi/IR_Precision">https://github.com/szaghi/IR_Precision</a>&gt;, a Fortran
</span><br>
<span class="quotelev1">&gt; (standard 2003) module to develop portable codes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2013/6/21 &lt;thomas.forde_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; your settings are as following:
</span><br>
<span class="quotelev2">&gt;&gt; export MPI=/home/stefano/opt/mpi/openmpi/1.6.4/intel
</span><br>
<span class="quotelev2">&gt;&gt; export PATH=${MPI}/bin:$PATH
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH=${MPI}/lib/openmpi:${MPI}/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; export LD_RUN_PATH=${MPI}/lib/openmpi:${MPI}/lib:$LD_RUN_PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and your path to libimf.so file is
</span><br>
<span class="quotelev2">&gt;&gt; /home/stefano/opt/intel/2013.4.183/lib/libimf.so
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; your export LD_LIbrary_PATH if i can decude it right would be because you
</span><br>
<span class="quotelev2">&gt;&gt; use the $MPI first.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/stefano/opt/mpi/openmpi/1.64./intel/lib/openmpi and
</span><br>
<span class="quotelev2">&gt;&gt; /home/stefano/opt/mpi/openmpi/1.64./intel/lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; as you can see it doesnt look for the files int he right place.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the simplest thing i would try is to symlink the libimf.so file to
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64 and should give you a workaround.
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
<span class="quotelev2">&gt;&gt; From:        Stefano Zaghi &lt;stefano.zaghi_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To:        Open MPI Users &lt;users_at_[hidden]&gt;,
</span><br>
<span class="quotelev2">&gt;&gt; Date:        21.06.2013 09:45
</span><br>
<span class="quotelev2">&gt;&gt; Subject:        Re: [OMPI users] OpenMPI 1.6.4 and Intel
</span><br>
<span class="quotelev2">&gt;&gt; Composer_xe_2013.4.183: problem with remote runs, orted: error while
</span><br>
<span class="quotelev2">&gt;&gt; loading shared libraries: libimf.so
</span><br>
<span class="quotelev2">&gt;&gt; Sent by:        users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Thomas,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thank you very much for your very fast replay.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes I have that library in the correct place:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 stefano users 3.0M May 20 14:22
</span><br>
<span class="quotelev2">&gt;&gt; opt/intel/2013.4.183/lib/intel64/libimf.so
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stefano Zaghi
</span><br>
<span class="quotelev2">&gt;&gt; Ph.D. Aerospace Engineer,
</span><br>
<span class="quotelev2">&gt;&gt; Research Scientist, Dept. of Computational Hydrodynamics at *CNR-INSEAN*&lt;<a href="http://www.insean.cnr.it/en/content/cnr-insean">http://www.insean.cnr.it/en/content/cnr-insean</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The Italian Ship Model Basin
</span><br>
<span class="quotelev2">&gt;&gt; (+39) 06.50299297 (Office)
</span><br>
<span class="quotelev2">&gt;&gt; My codes:
</span><br>
<span class="quotelev2">&gt;&gt; *OFF* &lt;<a href="https://github.com/szaghi/OFF">https://github.com/szaghi/OFF</a>&gt;, Open source Finite volumes Fluid
</span><br>
<span class="quotelev2">&gt;&gt; dynamics code
</span><br>
<span class="quotelev2">&gt;&gt; *Lib_VTK_IO* &lt;<a href="https://github.com/szaghi/Lib_VTK_IO">https://github.com/szaghi/Lib_VTK_IO</a>&gt;, a Fortran library
</span><br>
<span class="quotelev2">&gt;&gt; to write and read data conforming the VTK standard
</span><br>
<span class="quotelev2">&gt;&gt; *IR_Precision* &lt;<a href="https://github.com/szaghi/IR_Precision">https://github.com/szaghi/IR_Precision</a>&gt;, a Fortran
</span><br>
<span class="quotelev2">&gt;&gt; (standard 2003) module to develop portable codes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2013/6/21 &lt;*thomas.forde_at_[hidden]* &lt;thomas.forde_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hi Stefano
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; your error message show that you are missing a shared library, not
</span><br>
<span class="quotelev2">&gt;&gt; necessary that library path is wrong.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; do you actually have libimf.so, can you find the file on your system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./Thomas
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From:        Stefano Zaghi &lt;*stefano.zaghi_at_[hidden]*&lt;stefano.zaghi_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; To:        *users_at_[hidden]* &lt;users_at_[hidden]&gt;,
</span><br>
<span class="quotelev2">&gt;&gt; Date:        21.06.2013 09:27
</span><br>
<span class="quotelev2">&gt;&gt; Subject:        [OMPI users] OpenMPI 1.6.4 and Intel
</span><br>
<span class="quotelev2">&gt;&gt; Composer_xe_2013.4.183: problem with remote runs, orted: error while
</span><br>
<span class="quotelev2">&gt;&gt; loading shared libraries: libimf.so
</span><br>
<span class="quotelev2">&gt;&gt; Sent by:        *users-bounces_at_[hidden]* &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear All,
</span><br>
<span class="quotelev2">&gt;&gt; I have compiled OpenMPI 1.6.4 with Intel Composer_xe_2013.4.183.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My configure is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/home/stefano/opt/mpi/openmpi/1.6.4/intel CC=icc
</span><br>
<span class="quotelev2">&gt;&gt; CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Intel Composer has been installed in:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/stefano/opt/intel/2013.4.183/composer_xe_2013.4.183
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Into the .bashrc and .profile in all nodes there is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; source /home/stefano/opt/intel/2013.4.183/bin/compilervars.sh intel64
</span><br>
<span class="quotelev2">&gt;&gt; export MPI=/home/stefano/opt/mpi/openmpi/1.6.4/intel
</span><br>
<span class="quotelev2">&gt;&gt; export PATH=${MPI}/bin:$PATH
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH=${MPI}/lib/openmpi:${MPI}/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; export LD_RUN_PATH=${MPI}/lib/openmpi:${MPI}/lib:$LD_RUN_PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I run parallel job into each single node (e.g. mpirun -np 8 myprog)
</span><br>
<span class="quotelev2">&gt;&gt; all works well. However, when I tried to run parallel job in more nodes of
</span><br>
<span class="quotelev2">&gt;&gt; the cluster (remote runs) like the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 16 --bynode --machinefile nodi.txt -x LD_LIBRARY_PATH -x
</span><br>
<span class="quotelev2">&gt;&gt; LD_RUN_PATH myprog
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I got the following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/stefano/opt/mpi/openmpi/1.6.4/intel/bin/orted: error while loading
</span><br>
<span class="quotelev2">&gt;&gt; shared libraries: libimf.so: cannot open shared object file: No such file
</span><br>
<span class="quotelev2">&gt;&gt; or directory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have read many FAQs and online resources, all indicating
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH as the possible problem (wrong setting). However I am not
</span><br>
<span class="quotelev2">&gt;&gt; able to figure out what is going wrong, the LD_LIBRARY_PATH seems to set
</span><br>
<span class="quotelev2">&gt;&gt; right in all nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is worth noting that in the same cluster I have successful installed
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.4.3 with Intel Composer_xe_2011_sp1.6.233 following exactly the
</span><br>
<span class="quotelev2">&gt;&gt; same procedure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you in advance for all suggestion,
</span><br>
<span class="quotelev2">&gt;&gt; sincerely
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Stefano Zaghi
</span><br>
<span class="quotelev2">&gt;&gt; Ph.D. Aerospace Engineer,
</span><br>
<span class="quotelev2">&gt;&gt; Research Scientist, Dept. of Computational Hydrodynamics at *CNR-INSEAN*&lt;<a href="http://www.insean.cnr.it/en/content/cnr-insean">http://www.insean.cnr.it/en/content/cnr-insean</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The Italian Ship Model Basin
</span><br>
<span class="quotelev2">&gt;&gt; (+39) 06.50299297 (Office)
</span><br>
<span class="quotelev2">&gt;&gt; My codes: *
</span><br>
<span class="quotelev2">&gt;&gt; **OFF* &lt;<a href="https://github.com/szaghi/OFF">https://github.com/szaghi/OFF</a>&gt;, Open source Finite volumes Fluid
</span><br>
<span class="quotelev2">&gt;&gt; dynamics code *
</span><br>
<span class="quotelev2">&gt;&gt; **Lib_VTK_IO* &lt;<a href="https://github.com/szaghi/Lib_VTK_IO">https://github.com/szaghi/Lib_VTK_IO</a>&gt;, a Fortran library
</span><br>
<span class="quotelev2">&gt;&gt; to write and read data conforming the VTK standard
</span><br>
<span class="quotelev2">&gt;&gt; *IR_Precision* &lt;<a href="https://github.com/szaghi/IR_Precision">https://github.com/szaghi/IR_Precision</a>&gt;, a Fortran
</span><br>
<span class="quotelev2">&gt;&gt; (standard 2003) module to develop portable codes
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list*
</span><br>
<span class="quotelev2">&gt;&gt; **users_at_[hidden]* &lt;users_at_[hidden]&gt;*
</span><br>
<span class="quotelev2">&gt;&gt; **<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users*<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users*<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Denne e-posten kan innehalde informasjon som er konfidensiell
</span><br>
<span class="quotelev2">&gt;&gt; og/eller underlagt lovbestemt teieplikt. Kun den tiltenkte adressat har
</span><br>
<span class="quotelev2">&gt;&gt; adgang
</span><br>
<span class="quotelev2">&gt;&gt; til &#229; lese eller vidareformidle denne e-posten eller tilh&#248;yrande vedlegg.
</span><br>
<span class="quotelev2">&gt;&gt; Dersom De ikkje er den tiltenkte mottakar, vennligst kontakt avsendar pr
</span><br>
<span class="quotelev2">&gt;&gt; e-post, slett denne e-posten med vedlegg og makuler samtlige utskrifter og
</span><br>
<span class="quotelev2">&gt;&gt; kopiar av den.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This e-mail may contain confidential information, or otherwise
</span><br>
<span class="quotelev2">&gt;&gt; be protected against unauthorised use. Any disclosure, distribution or
</span><br>
<span class="quotelev2">&gt;&gt; other use of the information by anyone but the intended recipient is
</span><br>
<span class="quotelev2">&gt;&gt; strictly prohibited.
</span><br>
<span class="quotelev2">&gt;&gt; If you have received this e-mail in error, please advise the sender by
</span><br>
<span class="quotelev2">&gt;&gt; immediate reply and destroy the received documents and any copies hereof.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PBefore
</span><br>
<span class="quotelev2">&gt;&gt; printing, think about the environment
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list*
</span><br>
<span class="quotelev2">&gt;&gt; **users_at_[hidden]* &lt;users_at_[hidden]&gt;*
</span><br>
<span class="quotelev2">&gt;&gt; **<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users*<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users*<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
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
<span class="quotelev2">&gt;&gt; Denne e-posten kan innehalde informasjon som er konfidensiell
</span><br>
<span class="quotelev2">&gt;&gt; og/eller underlagt lovbestemt teieplikt. Kun den tiltenkte adressat har
</span><br>
<span class="quotelev2">&gt;&gt; adgang
</span><br>
<span class="quotelev2">&gt;&gt; til &#229; lese eller vidareformidle denne e-posten eller tilh&#248;yrande vedlegg.
</span><br>
<span class="quotelev2">&gt;&gt; Dersom De ikkje er den tiltenkte mottakar, vennligst kontakt avsendar pr
</span><br>
<span class="quotelev2">&gt;&gt; e-post, slett denne e-posten med vedlegg og makuler samtlige utskrifter og
</span><br>
<span class="quotelev2">&gt;&gt; kopiar av den.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This e-mail may contain confidential information, or otherwise
</span><br>
<span class="quotelev2">&gt;&gt; be protected against unauthorised use. Any disclosure, distribution or
</span><br>
<span class="quotelev2">&gt;&gt; other use of the information by anyone but the intended recipient is
</span><br>
<span class="quotelev2">&gt;&gt; strictly prohibited.
</span><br>
<span class="quotelev2">&gt;&gt; If you have received this e-mail in error, please advise the sender by
</span><br>
<span class="quotelev2">&gt;&gt; immediate reply and destroy the received documents and any copies hereof.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PBefore
</span><br>
<span class="quotelev2">&gt;&gt; printing, think about the environment
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Denne e-posten kan innehalde informasjon som er konfidensiell og/eller
</span><br>
<span class="quotelev1">&gt; underlagt lovbestemt teieplikt. Kun den tiltenkte adressat har adgang til &#229;
</span><br>
<span class="quotelev1">&gt; lese eller vidareformidle denne e-posten eller tilh&#248;yrande vedlegg. Dersom
</span><br>
<span class="quotelev1">&gt; De ikkje er den tiltenkte mottakar, vennligst kontakt avsendar pr e-post,
</span><br>
<span class="quotelev1">&gt; slett denne e-posten med vedlegg og makuler samtlige utskrifter og kopiar
</span><br>
<span class="quotelev1">&gt; av den.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This e-mail may contain confidential information, or otherwise be
</span><br>
<span class="quotelev1">&gt; protected against unauthorised use. Any disclosure, distribution or other
</span><br>
<span class="quotelev1">&gt; use of the information by anyone but the intended recipient is strictly
</span><br>
<span class="quotelev1">&gt; prohibited. If you have received this e-mail in error, please advise the
</span><br>
<span class="quotelev1">&gt; sender by immediate reply and destroy the received documents and any copies
</span><br>
<span class="quotelev1">&gt; hereof.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PBefore printing, think about the environment
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22177/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22178.php">Iliev, Hristo: "Re: [OMPI users] Trouble with Sending Multiple messages to the Same	Machine"</a>
<li><strong>Previous message:</strong> <a href="22176.php">thomas.forde_at_[hidden]: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>In reply to:</strong> <a href="22176.php">thomas.forde_at_[hidden]: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22182.php">Gus Correa: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Reply:</strong> <a href="22182.php">Gus Correa: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
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
