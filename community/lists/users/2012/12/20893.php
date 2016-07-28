<?
$subject_val = "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 16:18:37 2012" -->
<!-- isoreceived="20121206211837" -->
<!-- sent="Thu, 6 Dec 2012 21:18:28 +0000" -->
<!-- isosent="20121206211828" -->
<!-- name="Paul Hatton" -->
<!-- email="p.s.hatton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2" -->
<!-- id="F0658F4E7C8A084AB7E7895A257838CC5AB7C01AE9_at_ADMMBX5.adf.bham.ac.uk" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C46B47ADFA319D40ACFA4CDBB76AC2BF099C0555_at_ECS-EXG-P-MB01.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2<br>
<strong>From:</strong> Paul Hatton (<em>p.s.hatton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-06 16:18:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20894.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Previous message:</strong> <a href="20892.php">Jeff Squyres: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>In reply to:</strong> <a href="20890.php">Gunter, David O: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20897.php">Gunter, David O: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Reply:</strong> <a href="20897.php">Gunter, David O: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks. Is this with gcc in the default location (/usr/bin/gcc) or elsewhere? It may not be relevant, but I built v4.7.2 and installed it outside of the system area:
<br>
<p>[appmaint_at_bb2login04 openmpi-1.6.3]$ which gcc
<br>
/gpfs/apps/gcc/v4.7.2/bin/gcc
<br>
[appmaint_at_bb2login04 openmpi-1.6.3]$ gcc -v
<br>
Using built-in specs.
<br>
COLLECT_GCC=gcc
<br>
COLLECT_LTO_WRAPPER=/gpfs/apps/gcc/v4.7.2/libexec/gcc/x86_64-unknown-linux-gnu/4.7.2/lto-wrapper
<br>
Target: x86_64-unknown-linux-gnu
<br>
Configured with: ./configure --prefix=/gpfs/apps/gcc/v4.7.2 --disable-multilib
<br>
Thread model: posix
<br>
gcc version 4.7.2 (GCC)
<br>
[appmaint_at_bb2login04 openmpi-1.6.3]$ module unload apps/gcc
<br>
[appmaint_at_bb2login04 openmpi-1.6.3]$ which gcc
<br>
/usr/bin/gcc
<br>
<p>clutching at straws a bit here ... but I have built it with Intel 2013.0.079 which is also installed in the applications area and loaded with a module.
<br>
<p><pre>
-- 
Paul Hatton
High Performance Computing and Visualisation Specialist
IT Services, The University of Birmingham
Ph: 0121-414-3994&#160; Mob: 07785-977340&#160; Skype: P.S.Hatton
[Service Manager, Birmingham Environment for Academic Research]
[Also Technical Director, IBM Visual and Spatial Technology Centre]
&gt; -----Original Message-----
&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
&gt; Behalf Of Gunter, David O
&gt; Sent: 06 December 2012 21:06
&gt; To: Open MPI Users
&gt; Subject: Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc
&gt; 4.7.2
&gt; 
&gt; I just tried with the following:
&gt; 
&gt; $ gcc --version
&gt; gcc (GCC) 4.7.2
&gt; Copyright (C) 2012 Free Software Foundation, Inc.
&gt; This is free software; see the source for copying conditions.  There is
&gt; NO
&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR
&gt; PURPOSE.
&gt; 
&gt; $ ./configure  --prefix=/tmp/dog/openmpi/1.6.3-gcc-4.7.2 F77=gfortran
&gt; FC=gfortran CC=gcc CXX=c++ --with-
&gt; platform=contrib/platform/lanl/tlcc2/optimized-panasas 2&gt;&amp;1 | tee
&gt; test.log
&gt; 
&gt; configure completed without error as did the subsequent make.
&gt; 
&gt; Here's the relevant part of the configure output:
&gt; 
&gt; ...
&gt; checking Fortran 90 kind of MPI_INTEGER_KIND (selected_int_kind(9))...
&gt; 4
&gt; checking Fortran 90 kind of MPI_ADDRESS_KIND (selected_int_kind(18))...
&gt; 8
&gt; checking Fortran 90 kind of MPI_OFFSET_KIND (selected_int_kind(18))...
&gt; (cached) 8
&gt; ...
&gt; 
&gt; --
&gt; David Gunter
&gt; HPC-3: Infrastructure Team
&gt; Los Alamos National Laboratory
&gt; 
&gt; 
&gt; 
&gt; 
&gt; On Dec 6, 2012, at 1:42 PM, Paul Hatton wrote:
&gt; 
&gt; &gt; I've searched the FAQ but not come up with anything about this ...
&gt; with OpenMPI 1.6.3 and gcc 4.7.2, when I
&gt; &gt;
&gt; &gt; ./configure  --prefix=/gpfs/apps/openmpi/1.6.3/gcc_4.7.2-tm-ib \
&gt; &gt;  F77=gfortran FC=gfortran CC=gcc CXX=c++ \
&gt; &gt;  --with-tm=/gpfs/sysapps/torque/4.1.2 \
&gt; &gt;  --with-openib \
&gt; &gt;  2&gt;&amp;1|tee ../logs/configure-`date +%y_%m_%d_%Hh%Mm`.log
&gt; &gt;
&gt; &gt; configure fails with
&gt; &gt;
&gt; &gt; checking Fortran 90 kind of MPI_INTEGER_KIND
&gt; (selected_int_kind(9))...
&gt; &gt;    configure: error: Could not determine kind of
&gt; selected_int_kind(MPI_INTEGER_KIND)
&gt; &gt;
&gt; &gt; Has anyone built 1.6.3 with gcc 4.7.2? It build fine with Intel
&gt; 2013.0.079 and also the system (Scientific Linux 6.3) gcc which is
&gt; 4.4.6
&gt; &gt;
&gt; &gt; I've attached the output from the configure command.
&gt; &gt;
&gt; &gt; Thanks
&gt; &gt;
&gt; &gt; --
&gt; &gt; Paul Hatton
&gt; &gt; High Performance Computing and Visualisation Specialist
&gt; &gt; IT Services, The University of Birmingham
&gt; &gt; Ph: 0121-414-3994  Mob: 07785-977340  Skype: P.S.Hatton
&gt; &gt; [Service Manager, Birmingham Environment for Academic Research]
&gt; &gt; [Also Technical Director, IBM Visual and Spatial Technology Centre]
&gt; &gt;
&gt; &gt; &lt;configure-
&gt; 12_12_06_19h48m.log&gt;_______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20894.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Previous message:</strong> <a href="20892.php">Jeff Squyres: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>In reply to:</strong> <a href="20890.php">Gunter, David O: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20897.php">Gunter, David O: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Reply:</strong> <a href="20897.php">Gunter, David O: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
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
