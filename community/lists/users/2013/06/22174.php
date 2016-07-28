<?
$subject_val = "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 03:56:02 2013" -->
<!-- isoreceived="20130621075602" -->
<!-- sent="Fri, 21 Jun 2013 09:55:41 +0200" -->
<!-- isosent="20130621075541" -->
<!-- name="thomas.forde_at_[hidden]" -->
<!-- email="thomas.forde_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so" -->
<!-- id="OFEE224FAD.306087EB-ONC1257B91.002B127F-C1257B91.002B8CB2_at_ulstein.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CACDq=fqVowv=QBmtO7K1-4HknH=_rr+CvS97cPzRux0rJJwJ9g_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-06-21 03:55:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22175.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Previous message:</strong> <a href="22173.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>In reply to:</strong> <a href="22173.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22175.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Reply:</strong> <a href="22175.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
your settings are as following:
<br>
export MPI=/home/stefano/opt/mpi/openmpi/1.6.4/intel 
<br>
export PATH=${MPI}/bin:$PATH 
<br>
export LD_LIBRARY_PATH=${MPI}/lib/openmpi:${MPI}/lib:$LD_LIBRARY_PATH 
<br>
export LD_RUN_PATH=${MPI}/lib/openmpi:${MPI}/lib:$LD_RUN_PATH 
<br>
<p>and your path to libimf.so file is 
<br>
/home/stefano/opt/intel/2013.4.183/lib/libimf.so
<br>
<p>your export LD_LIbrary_PATH if i can decude it right would be because you 
<br>
use the $MPI first.
<br>
<p>/home/stefano/opt/mpi/openmpi/1.64./intel/lib/openmpi and
<br>
/home/stefano/opt/mpi/openmpi/1.64./intel/lib
<br>
<p>as you can see it doesnt look for the files int he right place.
<br>
<p>the simplest thing i would try is to symlink the libimf.so file to 
<br>
/usr/lib64 and should give you a workaround.
<br>
<p><p><p><p><p><p>From:   Stefano Zaghi &lt;stefano.zaghi_at_[hidden]&gt;
<br>
To:     Open MPI Users &lt;users_at_[hidden]&gt;, 
<br>
Date:   21.06.2013 09:45
<br>
Subject:        Re: [OMPI users] OpenMPI 1.6.4 and Intel 
<br>
Composer_xe_2013.4.183: problem with remote runs, orted: error while 
<br>
loading shared libraries: libimf.so
<br>
Sent by:        users-bounces_at_[hidden]
<br>
<p><p><p>Dear Thomas,
<br>
<p>thank you very much for your very fast replay. 
<br>
<p>Yes I have that library in the correct place:
<br>
<p>-rwxr-xr-x 1 stefano users 3.0M May 20 14:22 
<br>
opt/intel/2013.4.183/lib/intel64/libimf.so
<br>
<p>Stefano Zaghi
<br>
Ph.D. Aerospace Engineer,
<br>
Research Scientist, Dept. of Computational Hydrodynamics at CNR-INSEAN 
<br>
The Italian Ship Model Basin
<br>
(+39) 06.50299297 (Office)
<br>
My codes:
<br>
OFF, Open source Finite volumes Fluid dynamics code
<br>
Lib_VTK_IO, a Fortran library to write and read data conforming the VTK 
<br>
standard
<br>
IR_Precision, a Fortran (standard 2003) module to develop portable codes
<br>
<p><p>2013/6/21 &lt;thomas.forde_at_[hidden]&gt;
<br>
hi Stefano 
<br>
<p>your error message show that you are missing a shared library, not 
<br>
necessary that library path is wrong. 
<br>
<p>do you actually have libimf.so, can you find the file on your system. 
<br>
<p>./Thomas 
<br>
<p><p><p><p>From:        Stefano Zaghi &lt;stefano.zaghi_at_[hidden]&gt; 
<br>
To:        users_at_[hidden], 
<br>
Date:        21.06.2013 09:27 
<br>
Subject:        [OMPI users] OpenMPI 1.6.4 and Intel 
<br>
Composer_xe_2013.4.183: problem with remote runs, orted: error while 
<br>
loading shared libraries: libimf.so 
<br>
Sent by:        users-bounces_at_[hidden] 
<br>
<p><p><p><p>Dear All, 
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
Research Scientist, Dept. of Computational Hydrodynamics at CNR-INSEAN 
<br>
The Italian Ship Model Basin
<br>
(+39) 06.50299297 (Office) 
<br>
My codes: 
<br>
OFF, Open source Finite volumes Fluid dynamics code 
<br>
Lib_VTK_IO, a Fortran library to write and read data conforming the VTK 
<br>
standard 
<br>
IR_Precision, a Fortran (standard 2003) module to develop portable codes
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
<br>
<p><p><p><p><p><p><p><p>Denne e-posten kan innehalde informasjon som er konfidensiell 
<br>
og/eller underlagt lovbestemt teieplikt. Kun den tiltenkte adressat har 
<br>
adgang 
<br>
til &#229; lese eller vidareformidle denne e-posten eller tilh&#248;yrande vedlegg. 
<br>
Dersom De ikkje er den tiltenkte mottakar, vennligst kontakt avsendar pr 
<br>
e-post, slett denne e-posten med vedlegg og makuler samtlige utskrifter og 
<br>
kopiar av den. 
<br>
This e-mail may contain confidential information, or otherwise 
<br>
be protected against unauthorised use. Any disclosure, distribution or 
<br>
other use of the information by anyone but the intended recipient is 
<br>
strictly prohibited. 
<br>
If you have received this e-mail in error, please advise the sender by 
<br>
immediate reply and destroy the received documents and any copies hereof. 
<br>
<p>PBefore 
<br>
printing, think about the environment 
<br>
<p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p><p><p><p><p><p>Denne e-posten kan innehalde informasjon som er konfidensiell 
<br>
og/eller underlagt lovbestemt teieplikt. Kun den tiltenkte adressat har 
<br>
adgang 
<br>
til &#229; lese eller vidareformidle denne e-posten eller tilh&#248;yrande vedlegg. 
<br>
Dersom De ikkje er den tiltenkte mottakar, vennligst kontakt avsendar pr 
<br>
e-post, slett denne e-posten med vedlegg og makuler samtlige utskrifter og 
<br>
kopiar av den.
<br>
<p>This e-mail may contain confidential information, or otherwise 
<br>
be protected against unauthorised use. Any disclosure, distribution or 
<br>
other use of the information by anyone but the intended recipient is 
<br>
strictly prohibited. 
<br>
If you have received this e-mail in error, please advise the sender by 
<br>
immediate reply and destroy the received documents and any copies hereof.
<br>
<p><p>PBefore 
<br>
printing, think about the environment
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22174/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22175.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Previous message:</strong> <a href="22173.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>In reply to:</strong> <a href="22173.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22175.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>Reply:</strong> <a href="22175.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
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
