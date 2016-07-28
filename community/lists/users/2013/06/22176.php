<?
$subject_val = "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 04:32:05 2013" -->
<!-- isoreceived="20130621083205" -->
<!-- sent="Fri, 21 Jun 2013 10:31:43 +0200" -->
<!-- isosent="20130621083143" -->
<!-- name="thomas.forde_at_[hidden]" -->
<!-- email="thomas.forde_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so" -->
<!-- id="54D6E696-D303-490A-B2EB-26F4D8B71621_at_ulstein.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CACDq=fqoQoKZdV2qTwo8T9deeHkoCtpicK_s638XZYbbhmymLA_at_mail.gmail.com" -->
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
<strong>From:</strong> <a href="mailto:thomas.forde_at_[hidden]?Subject=Re:%20[OMPI%20users]%20OpenMPI%201.6.4%20and%20Intel%20Composer_xe_2013.4.183:%20problem%20with%20remote%20runs,%20orted:%20error%20while%20loading%20shared%20libraries:%20libimf.so"><em>thomas.forde_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-06-21 04:31:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22177.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Previous message:</strong> <a href="22175.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>In reply to:</strong> <a href="22175.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22177.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Reply:</strong> <a href="22177.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi Stefano
<br>
<p>/home/stefano/opt/intel/2013.4.183/lib/intel64/ is also the wrong path, as the file is in ..183/lib/ and not ...183/lib/intel64/
<br>
<p>is that why?
<br>
./Thomas
<br>
<p><p>Den 21. juni 2013 kl. 10:26 skrev &quot;Stefano Zaghi&quot; &lt;stefano.zaghi_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Dear Thomas,
</span><br>
<span class="quotelev1">&gt; thank you again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Symlink in /usr/lib64 is not enough, I have symlinked also in /home/stefano/opt/mpi/openmpi/1.6.4/intel/lib and, as expected, not only libimf.so but also ibirng.so and libintlc.so.5 are necessary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now also remote runs works, but this is only a workaround, I still not understand why mpirun do not find intel library even if LD_LIBRARY_PATH contains also  /home/stefano/opt/intel/2013.4.183/lib/intel64. Can you try explain again?
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
<span class="quotelev1">&gt; Research Scientist, Dept. of Computational Hydrodynamics at CNR-INSEAN 
</span><br>
<span class="quotelev1">&gt; The Italian Ship Model Basin
</span><br>
<span class="quotelev1">&gt; (+39) 06.50299297 (Office)
</span><br>
<span class="quotelev1">&gt; My codes:
</span><br>
<span class="quotelev1">&gt; OFF, Open source Finite volumes Fluid dynamics code
</span><br>
<span class="quotelev1">&gt; Lib_VTK_IO, a  would Fortran library to write and read data conforming the VTK standard
</span><br>
<span class="quotelev1">&gt; IR_Precision, a Fortran (standard 2003) module to develop portable codes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2013/6/21 &lt;thomas.forde_at_[hidden]&gt;
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
<span class="quotelev2">&gt;&gt; your export LD_LIbrary_PATH if i can decude it right would be because you use the $MPI first. 
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
<span class="quotelev2">&gt;&gt; the simplest thing i would try is to symlink the libimf.so file to /usr/lib64 and should give you a workaround. 
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
<span class="quotelev2">&gt;&gt; Subject:        Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so 
</span><br>
<span class="quotelev2">&gt;&gt; Sent by:        users-bounces_at_[hidden] 
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
<span class="quotelev2">&gt;&gt; -rwxr-xr-x 1 stefano users 3.0M May 20 14:22 opt/intel/2013.4.183/lib/intel64/libimf.so 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Stefano Zaghi
</span><br>
<span class="quotelev2">&gt;&gt; Ph.D. Aerospace Engineer,
</span><br>
<span class="quotelev2">&gt;&gt; Research Scientist, Dept. of Computational Hydrodynamics at CNR-INSEAN 
</span><br>
<span class="quotelev2">&gt;&gt; The Italian Ship Model Basin
</span><br>
<span class="quotelev2">&gt;&gt; (+39) 06.50299297 (Office) 
</span><br>
<span class="quotelev2">&gt;&gt; My codes: 
</span><br>
<span class="quotelev2">&gt;&gt; OFF, Open source Finite volumes Fluid dynamics code 
</span><br>
<span class="quotelev2">&gt;&gt; Lib_VTK_IO, a Fortran library to write and read data conforming the VTK standard 
</span><br>
<span class="quotelev2">&gt;&gt; IR_Precision, a Fortran (standard 2003) module to develop portable codes 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2013/6/21 &lt;thomas.forde_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; hi Stefano 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; your error message show that you are missing a shared library, not necessary that library path is wrong. 
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
<span class="quotelev2">&gt;&gt; From:        Stefano Zaghi &lt;stefano.zaghi_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; To:        users_at_[hidden], 
</span><br>
<span class="quotelev2">&gt;&gt; Date:        21.06.2013 09:27 
</span><br>
<span class="quotelev2">&gt;&gt; Subject:        [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so 
</span><br>
<span class="quotelev2">&gt;&gt; Sent by:        users-bounces_at_[hidden] 
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
<span class="quotelev2">&gt;&gt; ./configure --prefix=/home/stefano/opt/mpi/openmpi/1.6.4/intel CC=icc CXX=icpc F77=ifort FC=ifort 
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
<span class="quotelev2">&gt;&gt; If I run parallel job into each single node (e.g. mpirun -np 8 myprog) all works well. However, when I tried to run parallel job in more nodes of the cluster (remote runs) like the following: 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 16 --bynode --machinefile nodi.txt -x LD_LIBRARY_PATH -x LD_RUN_PATH myprog  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I got the following error: 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /home/stefano/opt/mpi/openmpi/1.6.4/intel/bin/orted: error while loading shared libraries: libimf.so: cannot open shared object file: No such file or directory 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have read many FAQs and online resources, all indicating LD_LIBRARY_PATH as the possible problem (wrong setting). However I am not able to figure out what is going wrong, the LD_LIBRARY_PATH seems to set right in all nodes. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It is worth noting that in the same cluster I have successful installed OpenMPI 1.4.3 with Intel Composer_xe_2011_sp1.6.233 following exactly the same procedure. 
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
<span class="quotelev2">&gt;&gt; Research Scientist, Dept. of Computational Hydrodynamics at CNR-INSEAN 
</span><br>
<span class="quotelev2">&gt;&gt; The Italian Ship Model Basin
</span><br>
<span class="quotelev2">&gt;&gt; (+39) 06.50299297 (Office) 
</span><br>
<span class="quotelev2">&gt;&gt; My codes: 
</span><br>
<span class="quotelev2">&gt;&gt; OFF, Open source Finite volumes Fluid dynamics code 
</span><br>
<span class="quotelev2">&gt;&gt; Lib_VTK_IO, a Fortran library to write and read data conforming the VTK standard 
</span><br>
<span class="quotelev2">&gt;&gt; IR_Precision, a Fortran (standard 2003) module to develop portable codes_______________________________________________
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
<span class="quotelev2">&gt;&gt; Denne e-posten kan innehalde informasjon som er konfidensiell 
</span><br>
<span class="quotelev2">&gt;&gt; og/eller underlagt lovbestemt teieplikt. Kun den tiltenkte adressat har adgang 
</span><br>
<span class="quotelev2">&gt;&gt; til &#195;&#165; lese eller vidareformidle denne e-posten eller tilh&#195;&#184;yrande vedlegg. Dersom De ikkje er den tiltenkte mottakar, vennligst kontakt avsendar pr e-post, slett denne e-posten med vedlegg og makuler samtlige utskrifter og kopiar av den.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This e-mail may contain confidential information, or otherwise 
</span><br>
<span class="quotelev2">&gt;&gt; be protected against unauthorised use. Any disclosure, distribution or other use of the information by anyone but the intended recipient is strictly prohibited. 
</span><br>
<span class="quotelev2">&gt;&gt; If you have received this e-mail in error, please advise the sender by immediate reply and destroy the received documents and any copies hereof.
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Denne e-posten kan innehalde informasjon som er konfidensiell 
</span><br>
<span class="quotelev2">&gt;&gt; og/eller underlagt lovbestemt teieplikt. Kun den tiltenkte adressat har adgang 
</span><br>
<span class="quotelev2">&gt;&gt; til &#195;&#165; lese eller vidareformidle denne e-posten eller tilh&#195;&#184;yrande vedlegg. Dersom De ikkje er den tiltenkte mottakar, vennligst kontakt avsendar pr e-post, slett denne e-posten med vedlegg og makuler samtlige utskrifter og kopiar av den.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This e-mail may contain confidential information, or otherwise 
</span><br>
<span class="quotelev2">&gt;&gt; be protected against unauthorised use. Any disclosure, distribution or other use of the information by anyone but the intended recipient is strictly prohibited. 
</span><br>
<span class="quotelev2">&gt;&gt; If you have received this e-mail in error, please advise the sender by immediate reply and destroy the received documents and any copies hereof.
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
<p>Denne e-posten kan innehalde informasjon som er konfidensiell og/eller underlagt lovbestemt teieplikt. Kun den tiltenkte adressat har adgang til &#195;&#165; lese eller vidareformidle denne e-posten eller tilh&#195;&#184;yrande vedlegg. Dersom De ikkje er den tiltenkte mottakar, vennligst kontakt avsendar pr e-post, slett denne e-posten med vedlegg og makuler samtlige utskrifter og kopiar av den. 
<br>
This e-mail may contain confidential information, or otherwise be protected against unauthorised use. Any disclosure, distribution or other use of the information by anyone but the intended recipient is strictly prohibited. If you have received this e-mail in error, please advise the sender by immediate reply and destroy the received documents and any copies hereof. P Before printing, think about the environment 
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22176/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22177.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Previous message:</strong> <a href="22175.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>In reply to:</strong> <a href="22175.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22177.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Reply:</strong> <a href="22177.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
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
