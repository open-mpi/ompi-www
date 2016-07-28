<?
$subject_val = "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  3 11:23:08 2012" -->
<!-- isoreceived="20120103162308" -->
<!-- sent="Tue, 3 Jan 2012 16:23:02 +0000" -->
<!-- isosent="20120103162302" -->
<!-- name="Richard Walsh" -->
<!-- email="Richard.Walsh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..." -->
<!-- id="762096C11C5A044A9D92961C2E1A7CE8192A4B52_at_MBOX1.FLAS.CSI.CUNY.EDU" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="807530281-1324417721-cardhu_decombobulator_blackberry.rim.net-1066909787-_at_b25.c28.bise6.blackberry" -->
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
<strong>Subject:</strong> Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ...<br>
<strong>From:</strong> Richard Walsh (<em>Richard.Walsh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-03 11:23:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18084.php">Gustavo Correa: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/18082.php">devendra rai: "[OMPI users] MPI::Request::Test not working"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/18017.php">Jonathan Dursi: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18084.php">Gustavo Correa: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Reply:</strong> <a href="18084.php">Gustavo Correa: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jonathan/All,
<br>
<p>Thanks for the information, but I continue to have problems.  I dropped the
<br>
'openib' option to simplify things and focused my attention only on OpenMPI
<br>
version 1.4.4 because you suggested it works.
<br>
<p>On the strength of the fact that the PGI 11.10 compiler works fine (all systems
<br>
and all versions of OpenMPI), I ran a PGI build of 1.4.4 with the '-showme'
<br>
option (Intel fails immediately, even with '-showme' ... ).  I then substituted all
<br>
the PGI-related strings with Intel-related strings to compile directly and explicitly
<br>
outside the 'opal' wrapper using code and libraries in the Intel build tree of 1.4.4,
<br>
as follows:
<br>
<p>pgcc -o ./hw2.exe hw2.c -I/share/apps/openmpi-pgi/1.4.4/include -L/share/apps/openmpi-pgi/1.4.4/lib -lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil -ldl
<br>
<p>becomes ...
<br>
<p>icc -o ./hw2.exe hw2.c -I/share/apps/openmpi-intel/1.4.4/include -L/share/apps/openmpi-intel/1.4.4/lib -lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil -ldl
<br>
<p>Interestingly, this direct-explicit Intel compile &gt;&gt;WORKS FINE&lt;&lt; (no segment fault like with the wrapped version)
<br>
and the executable produced also &gt;&gt;RUNS FINE&lt;&lt;.  So ... it looks to me like there is something wrong with using
<br>
the 'opal' wrappper generated-used in the Intel build.
<br>
<p>Can someone make a suggestion ... ?? I would like to use the wrappers of course.
<br>
<p>Thanks,
<br>
<p>rbw
<br>
<p>Richard Walsh
<br>
Parallel Applications and Systems Manager
<br>
CUNY HPC Center, Staten Island, NY
<br>
W: 718-982-3319
<br>
M: 612-382-4620
<br>
<p>Right, as the world goes, is only in question between equals in power, while the strong do what they can and the weak suffer what they must.  -- Thucydides, 400 BC
<br>
<p>________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Jonathan Dursi [ljdursi_at_[hidden]]
<br>
Sent: Tuesday, December 20, 2011 4:48 PM
<br>
To: Open Users
<br>
Subject: Re: [OMPI users] Latest Intel Compilers (ICS,  version 12.1.0.233 Build 20110811) issues ...
<br>
<p>For what it's worth, 1.4.4 built with the intel 12.1.0.233 compilers has been  the default mpi at our centre for over a month and we haven't had any problems...
<br>
<p>&nbsp;&nbsp;&nbsp;- jonathan
<br>
<pre>
--
Jonathan Dursi; SciNet, Compute/Calcul Canada
-----Original Message-----
From: Richard Walsh &lt;Richard.Walsh_at_[hidden]&gt;
Sender: users-bounces_at_[hidden]
Date: Tue, 20 Dec 2011 21:14:44
To: Open MPI Users&lt;users_at_[hidden]&gt;
Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
Subject: Re: [OMPI users] Latest Intel Compilers (ICS,
 version 12.1.0.233 Build 20110811) issues ...
All,
I have not heard anything back on the inquiry below, so I take it
that no one has had any issues with Intel's latest compiler release,
or perhaps has not tried it yet.
Thanks,
rbw
Richard Walsh
Parallel Applications and Systems Manager
CUNY HPC Center, Staten Island, NY
W: 718-982-3319
M: 612-382-4620
Right, as the world goes, is only in question between equals in power, while the strong do what they can and the weak suffer what they must.  -- Thucydides, 400 BC
________________________________________
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Richard Walsh [Richard.Walsh_at_[hidden]]
Sent: Friday, December 16, 2011 3:12 PM
To: Open MPI Users
Subject: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ...
All,
Working through a stock rebuild of OpenMPI 1.5.4 and 1.4.4 with
the most current compiler suites from both PGI and Intel:
   1.  PGI,  Version 11.10
   2.  Intel,  Version 12.1.0.233 Build 20110811
My 1.5.4 'config.log' header looks like this for Intel:
./configure CC=icc CXX=icpc F77=ifort FC=ifort --with-openib --prefix=/share/apps/openmpi-intel/1.5.4 --with-tm=/share/apps/pbs/11.1.0.111761
and this for PGI:
./configure CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90 --with-openib --prefix=/share/apps/openmpi-pgi/1.5.4 --with-tm=/share/apps/pbs/11.1.0.111761
This configure line has been used successfully before.  Configuration, build, and install
for BOTH compilers seems to work OK; however, my 'mpicc' build of my basic test
program ONLY works with the PGI built version of 'mpicc' for either the 1.4.4 or the 1.5.4
will compile the code.
The Intel 1.4.4 and 1.5.4 'mpicc' wrapper-compilers produce an immediate segmentation
fault:
.[richard.walsh_at_bob pbs]$ ./compile_it
./compile_it: line 10: 19163 Segmentation fault      /share/apps/openmpi-intel/1.5.4/bin/mpicc -o ./hello_mpi.exe hello_mpi.c
[richard.walsh_at_bob pbs]$
[richard.walsh_at_bob pbs]$ ./compile_it
./compile_it: line 10: 19515 Segmentation fault      /share/apps/openmpi-intel/1.4.4/bin/mpicc -o ./hello_mpi.exe hello_mpi.c
This Intel stack is from the most recent release of their ICS released
in late October before SC11:
[richard.walsh_at_bob pbs]$ icc -V
Intel(R) C Intel(R) 64 Compiler XE for applications running on Intel(R) 64, Version 12.1.0.233 Build 20110811
Copyright (C) 1985-2011 Intel Corporation.  All rights reserved.
[richard.walsh_at_bob pbs]$ ifort -V
Intel(R) Fortran Intel(R) 64 Compiler XE for applications running on Intel(R) 64, Version 12.1.0.233 Build 20110811
Copyright (C) 1985-2011 Intel Corporation.  All rights reserved.
Has anyone else encountered this problem ... ??  Suggestions ... ??
Thanks,
rbw
Richard Walsh
Parallel Applications and Systems Manager
CUNY HPC Center, Staten Island, NY
W: 718-982-3319
M: 612-382-4620
Right, as the world goes, is only in question between equals in power, while the strong do what they can and the weak suffer what they must.  -- Thucydides, 400 BC
________________________________
Change is in the Air - Smoking in Designated Areas Only in effect.&lt;<a href="http://www.csi.cuny.edu/tobaccofree">http://www.csi.cuny.edu/tobaccofree</a>&gt;
Tobacco-Free Campus as of July 1, 2012.
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
________________________________
Change is in the Air - Smoking in Designated Areas Only in effect.&lt;<a href="http://www.csi.cuny.edu/tobaccofree">http://www.csi.cuny.edu/tobaccofree</a>&gt;
Tobacco-Free Campus as of July 1, 2012.
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
________________________________
Change is in the Air - Smoking in Designated Areas Only in effect.&lt;<a href="http://www.csi.cuny.edu/tobaccofree">http://www.csi.cuny.edu/tobaccofree</a>&gt;
Tobacco-Free Campus as of July 1, 2012.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18084.php">Gustavo Correa: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/18082.php">devendra rai: "[OMPI users] MPI::Request::Test not working"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/18017.php">Jonathan Dursi: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18084.php">Gustavo Correa: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Reply:</strong> <a href="18084.php">Gustavo Correa: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
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
