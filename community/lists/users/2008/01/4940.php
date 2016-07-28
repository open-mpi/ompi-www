<?
$subject_val = "[OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 31 18:08:35 2008" -->
<!-- isoreceived="20080131230835" -->
<!-- sent="Thu, 31 Jan 2008 15:08:29 -0800" -->
<!-- isosent="20080131230829" -->
<!-- name="Adam Moody" -->
<!-- email="moody20_at_[hidden]" -->
<!-- subject="[OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6" -->
<!-- id="47A254ED.9030508_at_llnl.gov" -->
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
<strong>Subject:</strong> [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6<br>
<strong>From:</strong> Adam Moody (<em>moody20_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-31 18:08:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4941.php">Adam Moody: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6"</a>
<li><strong>Previous message:</strong> <a href="4939.php">Tim Prins: "Re: [OMPI users] OpenMPI/Myrinet dynamic process management"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4941.php">Adam Moody: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6"</a>
<li><strong>Reply:</strong> <a href="4941.php">Adam Moody: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I'm trying to build OpenMPI v1.2.4 with the PGI v7.0-6 compilers on an 
<br>
Opteron cluster.  It fails during the configure trying to check the size 
<br>
of a boolean datatype.  I've included details below.
<br>
<p>Anyone know how to resolve this problem?
<br>
Thanks,
<br>
-Adam Moody
<br>
MPI Support
<br>
Lawrence Livermore National Laboratory
<br>
<p><p>I'm building with the 7.0-6 version of the PGI compilers on Opteron:
<br>
<p><span class="quotelev2">    &gt;&gt;:  pgcc -V
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;pgcc 7.0-6 64-bit target on x86-64 Linux
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Copyright 2000-2007, STMicroelectronics, Inc.  All Rights Reserved.
<br>
<p>Here is the environment and configure line:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;export CC=pgcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;export CXX=pgCC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;export F77=pgf77
<br>
&nbsp;&nbsp;&nbsp;&nbsp;export FC=pgf90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;export CFLAGS=&quot;-Msignextend -g -O2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;export CXXFLAGS=&quot;-Msignextend -g -O2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;export FFLAGS=&quot;-g -O2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;export FCFLAGAS=&quot;-g -O2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;export PGI_PATH=&quot;/usr/local/tools/pgi-7.0.6/bin&quot; # this was 
<br>
necessary to get the PGI to build
<br>
&nbsp;&nbsp;&nbsp;&nbsp;export LD_LIBRARY_PATH=&quot;/usr/local/tools/pgi-7.0.6/lib&quot; # this was 
<br>
necessary to get the PGI to build
<br>
&nbsp;&nbsp;&nbsp;&nbsp;export PATH=&quot;$PGI_PATH:$PATH&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;export CONFIG_FLAGS=&quot;--with-wrapper-cflags='-Msignextend' 
<br>
--with-wrapper-cxxflags='-Msignextend'&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PREFIX=${ROOT}/pgi
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;./configure --prefix=$PREFIX $CONFIG_FLAGS --enable-mpi-f77 
<br>
--enable-mpi-f90 --disable-heterogeneous --with-openib=/usr
<br>
<p>The configure fails with this message:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;checking for bool... yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;checking size of bool... configure: error: cannot compute sizeof (bool)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;See `config.log' for more details.
<br>
<p>Looking in config.log, this is what I see:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;configure:23445: checking size of bool
<br>
&nbsp;&nbsp;&nbsp;&nbsp;configure:23747: pgCC -o conftest -DNDEBUG -Msignextend -g -O2   
<br>
conftest.cpp  &gt;&amp;5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&quot;conftest.cpp&quot;, line 157: warning: statement is unreachable
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/var/tmp/moody20/pgCCw95dctdp-LtG.o:(.debug_info+0xd1e): undefined 
<br>
reference to `.LB822'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/var/tmp/moody20/pgCCw95dctdp-LtG.o:(.debug_info+0xd26): undefined 
<br>
reference to `.LB828'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/var/tmp/moody20/pgCCw95dctdp-LtG.o:(.debug_info+0xd3c): undefined 
<br>
reference to `.LB832'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/var/tmp/moody20/pgCCw95dctdp-LtG.o:(.debug_info+0xd44): undefined 
<br>
reference to `.LB837'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;configure:23750: $? = 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;configure: program exited with status 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;configure: failed program was:
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4941.php">Adam Moody: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6"</a>
<li><strong>Previous message:</strong> <a href="4939.php">Tim Prins: "Re: [OMPI users] OpenMPI/Myrinet dynamic process management"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4941.php">Adam Moody: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6"</a>
<li><strong>Reply:</strong> <a href="4941.php">Adam Moody: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6"</a>
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
