<?
$subject_val = "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 31 19:01:37 2008" -->
<!-- isoreceived="20080201000137" -->
<!-- sent="Thu, 31 Jan 2008 16:01:29 -0800" -->
<!-- isosent="20080201000129" -->
<!-- name="Adam Moody" -->
<!-- email="moody20_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6" -->
<!-- id="47A26159.4070001_at_llnl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47A254ED.9030508_at_llnl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6<br>
<strong>From:</strong> Adam Moody (<em>moody20_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-31 19:01:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/4942.php">흆e Sandgren: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI	v7.0-6"</a>
<li><strong>Previous message:</strong> <a href="4940.php">Adam Moody: "[OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6"</a>
<li><strong>In reply to:</strong> <a href="4940.php">Adam Moody: "[OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/4942.php">흆e Sandgren: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI	v7.0-6"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/4942.php">흆e Sandgren: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI	v7.0-6"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/4943.php">Jeff Squyres: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is some more info.  The build works if I do either of:
<br>
<p>(1)  Build with PGI v7.1-3 instead of PGI v7.0-3
<br>
(2)  Or, drop the &quot;-g&quot; option in CXXFLAGS, i.e.,
<br>
change:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CXXFLAGS=&quot;-Msignextend -g -O2&quot;
<br>
to just:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CXXFLAGS=&quot;-Msignextend -O2&quot;
<br>
<p>I'd still like to know if there is a better fix (I need a 7.0-3 build 
<br>
and would prefer to have -g set).  Anyone know a better fix?
<br>
Thanks again,
<br>
-Adam
<br>
<p><p>Adam Moody wrote:
<br>
<p><span class="quotelev1">&gt;Hello,
</span><br>
<span class="quotelev1">&gt;I'm trying to build OpenMPI v1.2.4 with the PGI v7.0-6 compilers on an 
</span><br>
<span class="quotelev1">&gt;Opteron cluster.  It fails during the configure trying to check the size 
</span><br>
<span class="quotelev1">&gt;of a boolean datatype.  I've included details below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Anyone know how to resolve this problem?
</span><br>
<span class="quotelev1">&gt;Thanks,
</span><br>
<span class="quotelev1">&gt;-Adam Moody
</span><br>
<span class="quotelev1">&gt;MPI Support
</span><br>
<span class="quotelev1">&gt;Lawrence Livermore National Laboratory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm building with the 7.0-6 version of the PGI compilers on Opteron:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;:  pgcc -V
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    pgcc 7.0-6 64-bit target on x86-64 Linux
</span><br>
<span class="quotelev1">&gt;    Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
</span><br>
<span class="quotelev1">&gt;    Copyright 2000-2007, STMicroelectronics, Inc.  All Rights Reserved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Here is the environment and configure line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    export CC=pgcc
</span><br>
<span class="quotelev1">&gt;    export CXX=pgCC
</span><br>
<span class="quotelev1">&gt;    export F77=pgf77
</span><br>
<span class="quotelev1">&gt;    export FC=pgf90
</span><br>
<span class="quotelev1">&gt;    export CFLAGS=&quot;-Msignextend -g -O2&quot;
</span><br>
<span class="quotelev1">&gt;    export CXXFLAGS=&quot;-Msignextend -g -O2&quot;
</span><br>
<span class="quotelev1">&gt;    export FFLAGS=&quot;-g -O2&quot;
</span><br>
<span class="quotelev1">&gt;    export FCFLAGAS=&quot;-g -O2&quot;
</span><br>
<span class="quotelev1">&gt;    export PGI_PATH=&quot;/usr/local/tools/pgi-7.0.6/bin&quot; # this was 
</span><br>
<span class="quotelev1">&gt;necessary to get the PGI to build
</span><br>
<span class="quotelev1">&gt;    export LD_LIBRARY_PATH=&quot;/usr/local/tools/pgi-7.0.6/lib&quot; # this was 
</span><br>
<span class="quotelev1">&gt;necessary to get the PGI to build
</span><br>
<span class="quotelev1">&gt;    export PATH=&quot;$PGI_PATH:$PATH&quot;
</span><br>
<span class="quotelev1">&gt;    export CONFIG_FLAGS=&quot;--with-wrapper-cflags='-Msignextend' 
</span><br>
<span class="quotelev1">&gt;--with-wrapper-cxxflags='-Msignextend'&quot;
</span><br>
<span class="quotelev1">&gt;    PREFIX=${ROOT}/pgi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ./configure --prefix=$PREFIX $CONFIG_FLAGS --enable-mpi-f77 
</span><br>
<span class="quotelev1">&gt;--enable-mpi-f90 --disable-heterogeneous --with-openib=/usr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The configure fails with this message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    checking for bool... yes
</span><br>
<span class="quotelev1">&gt;    checking size of bool... configure: error: cannot compute sizeof (bool)
</span><br>
<span class="quotelev1">&gt;    See `config.log' for more details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Looking in config.log, this is what I see:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    configure:23445: checking size of bool
</span><br>
<span class="quotelev1">&gt;    configure:23747: pgCC -o conftest -DNDEBUG -Msignextend -g -O2   
</span><br>
<span class="quotelev1">&gt;conftest.cpp  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt;    &quot;conftest.cpp&quot;, line 157: warning: statement is unreachable
</span><br>
<span class="quotelev1">&gt;        return 0;
</span><br>
<span class="quotelev1">&gt;        ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    /var/tmp/moody20/pgCCw95dctdp-LtG.o:(.debug_info+0xd1e): undefined 
</span><br>
<span class="quotelev1">&gt;reference to `.LB822'
</span><br>
<span class="quotelev1">&gt;    /var/tmp/moody20/pgCCw95dctdp-LtG.o:(.debug_info+0xd26): undefined 
</span><br>
<span class="quotelev1">&gt;reference to `.LB828'
</span><br>
<span class="quotelev1">&gt;    /var/tmp/moody20/pgCCw95dctdp-LtG.o:(.debug_info+0xd3c): undefined 
</span><br>
<span class="quotelev1">&gt;reference to `.LB832'
</span><br>
<span class="quotelev1">&gt;    /var/tmp/moody20/pgCCw95dctdp-LtG.o:(.debug_info+0xd44): undefined 
</span><br>
<span class="quotelev1">&gt;reference to `.LB837'
</span><br>
<span class="quotelev1">&gt;    configure:23750: $? = 2
</span><br>
<span class="quotelev1">&gt;    configure: program exited with status 2
</span><br>
<span class="quotelev1">&gt;    configure: failed program was:
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/4942.php">흆e Sandgren: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI	v7.0-6"</a>
<li><strong>Previous message:</strong> <a href="4940.php">Adam Moody: "[OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6"</a>
<li><strong>In reply to:</strong> <a href="4940.php">Adam Moody: "[OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/4942.php">흆e Sandgren: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI	v7.0-6"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/4942.php">흆e Sandgren: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI	v7.0-6"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/4943.php">Jeff Squyres: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6"</a>
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
