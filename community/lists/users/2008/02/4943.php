<?
$subject_val = "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  1 07:23:29 2008" -->
<!-- isoreceived="20080201122329" -->
<!-- sent="Fri, 1 Feb 2008 07:23:05 -0500" -->
<!-- isosent="20080201122305" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6" -->
<!-- id="3539CFB7-57E7-4B7B-A526-474A5B00BE8F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47A26159.4070001_at_llnl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-01 07:23:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4944.php">Thomas Ropars: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>Previous message:</strong> <a href="4942.php">&#197;ke Sandgren: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI	v7.0-6"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4941.php">Adam Moody: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can replicate the problem even with 7.0-7.  Unfortunately, we're  
<br>
using a standard GNU Autoconf test in OMPI's configure to get the size:
<br>
<p>&nbsp;&nbsp;&nbsp;AC_CHECK_SIZE(bool)
<br>
<p>I'm not quite sure why it doesn't work with the PGI 7.0 compiler  
<br>
series and those particular options.  :-\
<br>
<p><p>On Jan 31, 2008, at 7:01 PM, Adam Moody wrote:
<br>
<p><span class="quotelev1">&gt; Here is some more info.  The build works if I do either of:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (1)  Build with PGI v7.1-3 instead of PGI v7.0-3
</span><br>
<span class="quotelev1">&gt; (2)  Or, drop the &quot;-g&quot; option in CXXFLAGS, i.e.,
</span><br>
<span class="quotelev1">&gt; change:
</span><br>
<span class="quotelev1">&gt;    CXXFLAGS=&quot;-Msignextend -g -O2&quot;
</span><br>
<span class="quotelev1">&gt; to just:
</span><br>
<span class="quotelev1">&gt;    CXXFLAGS=&quot;-Msignextend -O2&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd still like to know if there is a better fix (I need a 7.0-3 build
</span><br>
<span class="quotelev1">&gt; and would prefer to have -g set).  Anyone know a better fix?
</span><br>
<span class="quotelev1">&gt; Thanks again,
</span><br>
<span class="quotelev1">&gt; -Adam
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Adam Moody wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to build OpenMPI v1.2.4 with the PGI v7.0-6 compilers on  
</span><br>
<span class="quotelev2">&gt;&gt; an
</span><br>
<span class="quotelev2">&gt;&gt; Opteron cluster.  It fails during the configure trying to check the  
</span><br>
<span class="quotelev2">&gt;&gt; size
</span><br>
<span class="quotelev2">&gt;&gt; of a boolean datatype.  I've included details below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyone know how to resolve this problem?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; -Adam Moody
</span><br>
<span class="quotelev2">&gt;&gt; MPI Support
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Livermore National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm building with the 7.0-6 version of the PGI compilers on Opteron:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; :  pgcc -V
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   pgcc 7.0-6 64-bit target on x86-64 Linux
</span><br>
<span class="quotelev2">&gt;&gt;   Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
</span><br>
<span class="quotelev2">&gt;&gt;   Copyright 2000-2007, STMicroelectronics, Inc.  All Rights Reserved.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the environment and configure line:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   export CC=pgcc
</span><br>
<span class="quotelev2">&gt;&gt;   export CXX=pgCC
</span><br>
<span class="quotelev2">&gt;&gt;   export F77=pgf77
</span><br>
<span class="quotelev2">&gt;&gt;   export FC=pgf90
</span><br>
<span class="quotelev2">&gt;&gt;   export CFLAGS=&quot;-Msignextend -g -O2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   export CXXFLAGS=&quot;-Msignextend -g -O2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   export FFLAGS=&quot;-g -O2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   export FCFLAGAS=&quot;-g -O2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   export PGI_PATH=&quot;/usr/local/tools/pgi-7.0.6/bin&quot; # this was
</span><br>
<span class="quotelev2">&gt;&gt; necessary to get the PGI to build
</span><br>
<span class="quotelev2">&gt;&gt;   export LD_LIBRARY_PATH=&quot;/usr/local/tools/pgi-7.0.6/lib&quot; # this was
</span><br>
<span class="quotelev2">&gt;&gt; necessary to get the PGI to build
</span><br>
<span class="quotelev2">&gt;&gt;   export PATH=&quot;$PGI_PATH:$PATH&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   export CONFIG_FLAGS=&quot;--with-wrapper-cflags='-Msignextend'
</span><br>
<span class="quotelev2">&gt;&gt; --with-wrapper-cxxflags='-Msignextend'&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   PREFIX=${ROOT}/pgi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   ./configure --prefix=$PREFIX $CONFIG_FLAGS --enable-mpi-f77
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpi-f90 --disable-heterogeneous --with-openib=/usr
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The configure fails with this message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   checking for bool... yes
</span><br>
<span class="quotelev2">&gt;&gt;   checking size of bool... configure: error: cannot compute sizeof  
</span><br>
<span class="quotelev2">&gt;&gt; (bool)
</span><br>
<span class="quotelev2">&gt;&gt;   See `config.log' for more details.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looking in config.log, this is what I see:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   configure:23445: checking size of bool
</span><br>
<span class="quotelev2">&gt;&gt;   configure:23747: pgCC -o conftest -DNDEBUG -Msignextend -g -O2
</span><br>
<span class="quotelev2">&gt;&gt; conftest.cpp  &gt;&amp;5
</span><br>
<span class="quotelev2">&gt;&gt;   &quot;conftest.cpp&quot;, line 157: warning: statement is unreachable
</span><br>
<span class="quotelev2">&gt;&gt;       return 0;
</span><br>
<span class="quotelev2">&gt;&gt;       ^
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   /var/tmp/moody20/pgCCw95dctdp-LtG.o:(.debug_info+0xd1e): undefined
</span><br>
<span class="quotelev2">&gt;&gt; reference to `.LB822'
</span><br>
<span class="quotelev2">&gt;&gt;   /var/tmp/moody20/pgCCw95dctdp-LtG.o:(.debug_info+0xd26): undefined
</span><br>
<span class="quotelev2">&gt;&gt; reference to `.LB828'
</span><br>
<span class="quotelev2">&gt;&gt;   /var/tmp/moody20/pgCCw95dctdp-LtG.o:(.debug_info+0xd3c): undefined
</span><br>
<span class="quotelev2">&gt;&gt; reference to `.LB832'
</span><br>
<span class="quotelev2">&gt;&gt;   /var/tmp/moody20/pgCCw95dctdp-LtG.o:(.debug_info+0xd44): undefined
</span><br>
<span class="quotelev2">&gt;&gt; reference to `.LB837'
</span><br>
<span class="quotelev2">&gt;&gt;   configure:23750: $? = 2
</span><br>
<span class="quotelev2">&gt;&gt;   configure: program exited with status 2
</span><br>
<span class="quotelev2">&gt;&gt;   configure: failed program was:
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4944.php">Thomas Ropars: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>Previous message:</strong> <a href="4942.php">&#197;ke Sandgren: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI	v7.0-6"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4941.php">Adam Moody: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6"</a>
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
