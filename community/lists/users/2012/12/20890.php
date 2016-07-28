<?
$subject_val = "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 16:06:09 2012" -->
<!-- isoreceived="20121206210609" -->
<!-- sent="Thu, 6 Dec 2012 21:06:04 +0000" -->
<!-- isosent="20121206210604" -->
<!-- name="Gunter, David O" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2" -->
<!-- id="C46B47ADFA319D40ACFA4CDBB76AC2BF099C0555_at_ECS-EXG-P-MB01.win.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="F0658F4E7C8A084AB7E7895A257838CC5AB7C01AE6_at_ADMMBX5.adf.bham.ac.uk" -->
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
<strong>From:</strong> Gunter, David O (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-06 16:06:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20891.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Previous message:</strong> <a href="20889.php">Jeff Squyres: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>In reply to:</strong> <a href="20888.php">Paul Hatton: "[OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20893.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Reply:</strong> <a href="20893.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just tried with the following:
<br>
<p>$ gcc --version
<br>
gcc (GCC) 4.7.2
<br>
Copyright (C) 2012 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p>$ ./configure  --prefix=/tmp/dog/openmpi/1.6.3-gcc-4.7.2 F77=gfortran FC=gfortran CC=gcc CXX=c++ --with-platform=contrib/platform/lanl/tlcc2/optimized-panasas 2&gt;&amp;1 | tee test.log
<br>
<p>configure completed without error as did the subsequent make.
<br>
<p>Here's the relevant part of the configure output:
<br>
<p>...
<br>
checking Fortran 90 kind of MPI_INTEGER_KIND (selected_int_kind(9))... 4
<br>
checking Fortran 90 kind of MPI_ADDRESS_KIND (selected_int_kind(18))... 8
<br>
checking Fortran 90 kind of MPI_OFFSET_KIND (selected_int_kind(18))... (cached) 8
<br>
...
<br>
<p><pre>
--
David Gunter
HPC-3: Infrastructure Team
Los Alamos National Laboratory
On Dec 6, 2012, at 1:42 PM, Paul Hatton wrote:
&gt; I've searched the FAQ but not come up with anything about this ... with OpenMPI 1.6.3 and gcc 4.7.2, when I
&gt; 
&gt; ./configure  --prefix=/gpfs/apps/openmpi/1.6.3/gcc_4.7.2-tm-ib \
&gt;  F77=gfortran FC=gfortran CC=gcc CXX=c++ \
&gt;  --with-tm=/gpfs/sysapps/torque/4.1.2 \
&gt;  --with-openib \
&gt;  2&gt;&amp;1|tee ../logs/configure-`date +%y_%m_%d_%Hh%Mm`.log
&gt; 
&gt; configure fails with
&gt; 
&gt; checking Fortran 90 kind of MPI_INTEGER_KIND (selected_int_kind(9))...
&gt;    configure: error: Could not determine kind of selected_int_kind(MPI_INTEGER_KIND)
&gt; 
&gt; Has anyone built 1.6.3 with gcc 4.7.2? It build fine with Intel 2013.0.079 and also the system (Scientific Linux 6.3) gcc which is 4.4.6
&gt; 
&gt; I've attached the output from the configure command.
&gt; 
&gt; Thanks
&gt; 
&gt; -- 
&gt; Paul Hatton
&gt; High Performance Computing and Visualisation Specialist
&gt; IT Services, The University of Birmingham
&gt; Ph: 0121-414-3994  Mob: 07785-977340  Skype: P.S.Hatton
&gt; [Service Manager, Birmingham Environment for Academic Research]
&gt; [Also Technical Director, IBM Visual and Spatial Technology Centre]
&gt; 
&gt; &lt;configure-12_12_06_19h48m.log&gt;_______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20891.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Previous message:</strong> <a href="20889.php">Jeff Squyres: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>In reply to:</strong> <a href="20888.php">Paul Hatton: "[OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20893.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
<li><strong>Reply:</strong> <a href="20893.php">Paul Hatton: "Re: [OMPI users] error configuring OpenMPI 1.6.3 with gcc 4.7.2"</a>
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
