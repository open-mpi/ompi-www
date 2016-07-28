<?
$subject_val = "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 04:22:18 2013" -->
<!-- isoreceived="20130621082218" -->
<!-- sent="Fri, 21 Jun 2013 10:22:13 +0200" -->
<!-- isosent="20130621082213" -->
<!-- name="Stefano Zaghi" -->
<!-- email="stefano.zaghi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so" -->
<!-- id="CACDq=fqoQoKZdV2qTwo8T9deeHkoCtpicK_s638XZYbbhmymLA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OFEE224FAD.306087EB-ONC1257B91.002B127F-C1257B91.002B8CB2_at_ulstein.com" -->
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
<strong>Date:</strong> 2013-06-21 04:22:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22176.php">thomas.forde_at_[hidden]: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Previous message:</strong> <a href="22174.php">thomas.forde_at_[hidden]: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>In reply to:</strong> <a href="22174.php">thomas.forde_at_[hidden]: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22176.php">thomas.forde_at_[hidden]: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Reply:</strong> <a href="22176.php">thomas.forde_at_[hidden]: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Thomas,
<br>
thank you again.
<br>
<p>Symlink in /usr/lib64 is not enough, I have symlinked also
<br>
in /home/stefano/opt/mpi/openmpi/1.6.4/intel/lib and, as expected, not only
<br>
libimf.so but also ibirng.so and libintlc.so.5 are necessary.
<br>
<p>Now also remote runs works, but this is only a workaround, I still not
<br>
understand why mpirun do not find intel library even if LD_LIBRARY_PATH
<br>
contains also  /home/stefano/opt/intel/2013.4.183/lib/intel64. Can you try
<br>
explain again?
<br>
<p>Thank you very much.
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
<p><span class="quotelev1">&gt; your settings are as following:
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
<span class="quotelev1">&gt; and your path to libimf.so file is
</span><br>
<span class="quotelev1">&gt; /home/stefano/opt/intel/2013.4.183/lib/libimf.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; your export LD_LIbrary_PATH if i can decude it right would be because you
</span><br>
<span class="quotelev1">&gt; use the $MPI first.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/stefano/opt/mpi/openmpi/1.64./intel/lib/openmpi and
</span><br>
<span class="quotelev1">&gt; /home/stefano/opt/mpi/openmpi/1.64./intel/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as you can see it doesnt look for the files int he right place.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the simplest thing i would try is to symlink the libimf.so file to
</span><br>
<span class="quotelev1">&gt; /usr/lib64 and should give you a workaround.
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
<span class="quotelev1">&gt; From:        Stefano Zaghi &lt;stefano.zaghi_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To:        Open MPI Users &lt;users_at_[hidden]&gt;,
</span><br>
<span class="quotelev1">&gt; Date:        21.06.2013 09:45
</span><br>
<span class="quotelev1">&gt; Subject:        Re: [OMPI users] OpenMPI 1.6.4 and Intel
</span><br>
<span class="quotelev1">&gt; Composer_xe_2013.4.183: problem with remote runs, orted: error while
</span><br>
<span class="quotelev1">&gt; loading shared libraries: libimf.so
</span><br>
<span class="quotelev1">&gt; Sent by:        users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Thomas,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thank you very much for your very fast replay.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes I have that library in the correct place:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x 1 stefano users 3.0M May 20 14:22
</span><br>
<span class="quotelev1">&gt; opt/intel/2013.4.183/lib/intel64/libimf.so
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2013/6/21 &lt;*thomas.forde_at_[hidden]* &lt;thomas.forde_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; hi Stefano
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; your error message show that you are missing a shared library, not
</span><br>
<span class="quotelev1">&gt; necessary that library path is wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; do you actually have libimf.so, can you find the file on your system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./Thomas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From:        Stefano Zaghi &lt;*stefano.zaghi_at_[hidden]*&lt;stefano.zaghi_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; To:        *users_at_[hidden]* &lt;users_at_[hidden]&gt;,
</span><br>
<span class="quotelev1">&gt; Date:        21.06.2013 09:27
</span><br>
<span class="quotelev1">&gt; Subject:        [OMPI users] OpenMPI 1.6.4 and Intel
</span><br>
<span class="quotelev1">&gt; Composer_xe_2013.4.183: problem with remote runs, orted: error while
</span><br>
<span class="quotelev1">&gt; loading shared libraries: libimf.so
</span><br>
<span class="quotelev1">&gt; Sent by:        *users-bounces_at_[hidden]* &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;  ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear All,
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
<span class="quotelev1">&gt; My codes: *
</span><br>
<span class="quotelev1">&gt; **OFF* &lt;<a href="https://github.com/szaghi/OFF">https://github.com/szaghi/OFF</a>&gt;, Open source Finite volumes Fluid
</span><br>
<span class="quotelev1">&gt; dynamics code *
</span><br>
<span class="quotelev1">&gt; **Lib_VTK_IO* &lt;<a href="https://github.com/szaghi/Lib_VTK_IO">https://github.com/szaghi/Lib_VTK_IO</a>&gt;, a Fortran library
</span><br>
<span class="quotelev1">&gt; to write and read data conforming the VTK standard
</span><br>
<span class="quotelev1">&gt; *IR_Precision* &lt;<a href="https://github.com/szaghi/IR_Precision">https://github.com/szaghi/IR_Precision</a>&gt;, a Fortran
</span><br>
<span class="quotelev1">&gt; (standard 2003) module to develop portable codes
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list*
</span><br>
<span class="quotelev1">&gt; **users_at_[hidden]* &lt;users_at_[hidden]&gt;*
</span><br>
<span class="quotelev1">&gt; **<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users*<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users*<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Denne e-posten kan innehalde informasjon som er konfidensiell
</span><br>
<span class="quotelev1">&gt; og/eller underlagt lovbestemt teieplikt. Kun den tiltenkte adressat har
</span><br>
<span class="quotelev1">&gt; adgang
</span><br>
<span class="quotelev1">&gt; til &#229; lese eller vidareformidle denne e-posten eller tilh&#248;yrande vedlegg.
</span><br>
<span class="quotelev1">&gt; Dersom De ikkje er den tiltenkte mottakar, vennligst kontakt avsendar pr
</span><br>
<span class="quotelev1">&gt; e-post, slett denne e-posten med vedlegg og makuler samtlige utskrifter og
</span><br>
<span class="quotelev1">&gt; kopiar av den.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This e-mail may contain confidential information, or otherwise
</span><br>
<span class="quotelev1">&gt; be protected against unauthorised use. Any disclosure, distribution or
</span><br>
<span class="quotelev1">&gt; other use of the information by anyone but the intended recipient is
</span><br>
<span class="quotelev1">&gt; strictly prohibited.
</span><br>
<span class="quotelev1">&gt; If you have received this e-mail in error, please advise the sender by
</span><br>
<span class="quotelev1">&gt; immediate reply and destroy the received documents and any copies hereof.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PBefore
</span><br>
<span class="quotelev1">&gt; printing, think about the environment
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list*
</span><br>
<span class="quotelev1">&gt; **users_at_[hidden]* &lt;users_at_[hidden]&gt;*
</span><br>
<span class="quotelev1">&gt; **<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users*<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users*<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Denne e-posten kan innehalde informasjon som er konfidensiell
</span><br>
<span class="quotelev1">&gt; og/eller underlagt lovbestemt teieplikt. Kun den tiltenkte adressat har
</span><br>
<span class="quotelev1">&gt; adgang
</span><br>
<span class="quotelev1">&gt; til &#229; lese eller vidareformidle denne e-posten eller tilh&#248;yrande vedlegg.
</span><br>
<span class="quotelev1">&gt; Dersom De ikkje er den tiltenkte mottakar, vennligst kontakt avsendar pr
</span><br>
<span class="quotelev1">&gt; e-post, slett denne e-posten med vedlegg og makuler samtlige utskrifter og
</span><br>
<span class="quotelev1">&gt; kopiar av den.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This e-mail may contain confidential information, or otherwise
</span><br>
<span class="quotelev1">&gt; be protected against unauthorised use. Any disclosure, distribution or
</span><br>
<span class="quotelev1">&gt; other use of the information by anyone but the intended recipient is
</span><br>
<span class="quotelev1">&gt; strictly prohibited.
</span><br>
<span class="quotelev1">&gt; If you have received this e-mail in error, please advise the sender by
</span><br>
<span class="quotelev1">&gt; immediate reply and destroy the received documents and any copies hereof.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PBefore
</span><br>
<span class="quotelev1">&gt; printing, think about the environment
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22175/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22176.php">thomas.forde_at_[hidden]: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Previous message:</strong> <a href="22174.php">thomas.forde_at_[hidden]: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>In reply to:</strong> <a href="22174.php">thomas.forde_at_[hidden]: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22176.php">thomas.forde_at_[hidden]: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Reply:</strong> <a href="22176.php">thomas.forde_at_[hidden]: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
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
