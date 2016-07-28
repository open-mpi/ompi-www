<?
$subject_val = "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  3 16:53:05 2012" -->
<!-- isoreceived="20120103215305" -->
<!-- sent="Tue, 3 Jan 2012 13:52:52 -0800 (PST)" -->
<!-- isosent="20120103215252" -->
<!-- name="Tim Carlson" -->
<!-- email="tim.carlson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..." -->
<!-- id="alpine.LRH.2.00.1201031343520.22438_at_scorpion.emsl.pnl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="762096C11C5A044A9D92961C2E1A7CE8192A4BE9_at_MBOX1.FLAS.CSI.CUNY.EDU" -->
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
<strong>From:</strong> Tim Carlson (<em>tim.carlson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-03 16:52:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18087.php">Yvan Fournier: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues"</a>
<li><strong>Previous message:</strong> <a href="18085.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>In reply to:</strong> <a href="18085.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18091.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Reply:</strong> <a href="18091.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 3 Jan 2012, Richard Walsh wrote:
<br>
<p>OPAL has problems with the default optimization. See this thread on one of 
<br>
the Intel lists.
<br>
<p>vi opal/mca/memory/linux/malloc.c
<br>
add #pragma optimize(&quot;&quot;, off)
<br>
<p><a href="http://software.intel.com/en-us/forums/showthread.php?t=87132">http://software.intel.com/en-us/forums/showthread.php?t=87132</a>
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus/All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps there is some confusion as to which 'new' Intel compiler release/version I
</span><br>
<span class="quotelev1">&gt; am using. I am not using '12.0'  ... I am using '12.1' ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OLD one that builds a working opal_wrapper:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [richard.walsh_at_athena ~]$ icc -V
</span><br>
<span class="quotelev1">&gt; Intel(R) C Intel(R) 64 Compiler XE for applications running on Intel(R) 64, Version 12.0.0.084 Build 20101006
</span><br>
<span class="quotelev1">&gt; Copyright (C) 1985-2010 Intel Corporation.  All rights reserved.                             ^^^^^^^^^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NEW one that FAILS to build a working opal_wrapper:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_zeus .libs]# icc -V
</span><br>
<span class="quotelev1">&gt; Intel(R) C Intel(R) 64 Compiler XE for applications running on Intel(R) 64, Version 12.1.0.233 Build 20110811
</span><br>
<span class="quotelev1">&gt; Copyright (C) 1985-2011 Intel Corporation.  All rights reserved.                             ^^^^^^^^^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This was in my original email.  NOTE: that the non-working version is 12.1  &gt;&gt;NOT&lt;&lt; 12.0  This '12.1'
</span><br>
<span class="quotelev1">&gt; version was released by Intel JUST BEFORE SC11 in October of 2011.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rbw
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Richard Walsh
</span><br>
<span class="quotelev1">&gt; Parallel Applications and Systems Manager
</span><br>
<span class="quotelev1">&gt; CUNY HPC Center, Staten Island, NY
</span><br>
<span class="quotelev1">&gt; W: 718-982-3319
</span><br>
<span class="quotelev1">&gt; M: 612-382-4620
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right, as the world goes, is only in question between equals in power, while the strong do what they can and the weak suffer what they must.  -- Thucydides, 400 BC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Gustavo Correa [gus_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, January 03, 2012 4:28 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Latest Intel Compilers (ICS,  version 12.1.0.233 Build 20110811) issues ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Richard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have 1.4.4 built with Intel 12.0.  It works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any chance that  your Intel-based OpenMPI was built from a source
</span><br>
<span class="quotelev1">&gt; directory that had been previously used to build the PGI-based OpenMPI,
</span><br>
<span class="quotelev1">&gt; and no 'make distclean' was issued in between the two builds,
</span><br>
<span class="quotelev1">&gt; nor a fresh build done from a brand new tarball?
</span><br>
<span class="quotelev1">&gt; Just a wild guess.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope it helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 3, 2012, at 11:23 AM, Richard Walsh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jonathan/All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the information, but I continue to have problems.  I dropped the
</span><br>
<span class="quotelev2">&gt;&gt; 'openib' option to simplify things and focused my attention only on OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; version 1.4.4 because you suggested it works.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On the strength of the fact that the PGI 11.10 compiler works fine (all systems
</span><br>
<span class="quotelev2">&gt;&gt; and all versions of OpenMPI), I ran a PGI build of 1.4.4 with the '-showme'
</span><br>
<span class="quotelev2">&gt;&gt; option (Intel fails immediately, even with '-showme' ... ).  I then substituted all
</span><br>
<span class="quotelev2">&gt;&gt; the PGI-related strings with Intel-related strings to compile directly and explicitly
</span><br>
<span class="quotelev2">&gt;&gt; outside the 'opal' wrapper using code and libraries in the Intel build tree of 1.4.4,
</span><br>
<span class="quotelev2">&gt;&gt; as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; pgcc -o ./hw2.exe hw2.c -I/share/apps/openmpi-pgi/1.4.4/include -L/share/apps/openmpi-pgi/1.4.4/lib -lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil -ldl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; becomes ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; icc -o ./hw2.exe hw2.c -I/share/apps/openmpi-intel/1.4.4/include -L/share/apps/openmpi-intel/1.4.4/lib -lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil -ldl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Interestingly, this direct-explicit Intel compile &gt;&gt;WORKS FINE&lt;&lt; (no segment fault like with the wrapped version)
</span><br>
<span class="quotelev2">&gt;&gt; and the executable produced also &gt;&gt;RUNS FINE&lt;&lt;.  So ... it looks to me like there is something wrong with using
</span><br>
<span class="quotelev2">&gt;&gt; the 'opal' wrappper generated-used in the Intel build.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can someone make a suggestion ... ?? I would like to use the wrappers of course.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rbw
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Richard Walsh
</span><br>
<span class="quotelev2">&gt;&gt; Parallel Applications and Systems Manager
</span><br>
<span class="quotelev2">&gt;&gt; CUNY HPC Center, Staten Island, NY
</span><br>
<span class="quotelev2">&gt;&gt; W: 718-982-3319
</span><br>
<span class="quotelev2">&gt;&gt; M: 612-382-4620
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Right, as the world goes, is only in question between equals in power, while the strong do what they can and the weak suffer what they must.  -- Thucydides, 400 BC
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Jonathan Dursi [ljdursi_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, December 20, 2011 4:48 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Latest Intel Compilers (ICS,  version 12.1.0.233 Build 20110811) issues ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For what it's worth, 1.4.4 built with the intel 12.1.0.233 compilers has been  the default mpi at our centre for over a month and we haven't had any problems...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   - jonathan
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jonathan Dursi; SciNet, Compute/Calcul Canada
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: Richard Walsh &lt;Richard.Walsh_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sender: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tue, 20 Dec 2011 21:14:44
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users&lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Latest Intel Compilers (ICS,
</span><br>
<span class="quotelev2">&gt;&gt; version 12.1.0.233 Build 20110811) issues ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have not heard anything back on the inquiry below, so I take it
</span><br>
<span class="quotelev2">&gt;&gt; that no one has had any issues with Intel's latest compiler release,
</span><br>
<span class="quotelev2">&gt;&gt; or perhaps has not tried it yet.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rbw
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Richard Walsh
</span><br>
<span class="quotelev2">&gt;&gt; Parallel Applications and Systems Manager
</span><br>
<span class="quotelev2">&gt;&gt; CUNY HPC Center, Staten Island, NY
</span><br>
<span class="quotelev2">&gt;&gt; W: 718-982-3319
</span><br>
<span class="quotelev2">&gt;&gt; M: 612-382-4620
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Right, as the world goes, is only in question between equals in power, while the strong do what they can and the weak suffer what they must.  -- Thucydides, 400 BC
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Richard Walsh [Richard.Walsh_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, December 16, 2011 3:12 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Working through a stock rebuild of OpenMPI 1.5.4 and 1.4.4 with
</span><br>
<span class="quotelev2">&gt;&gt; the most current compiler suites from both PGI and Intel:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   1.  PGI,  Version 11.10
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   2.  Intel,  Version 12.1.0.233 Build 20110811
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My 1.5.4 'config.log' header looks like this for Intel:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure CC=icc CXX=icpc F77=ifort FC=ifort --with-openib --prefix=/share/apps/openmpi-intel/1.5.4 --with-tm=/share/apps/pbs/11.1.0.111761
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and this for PGI:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90 --with-openib --prefix=/share/apps/openmpi-pgi/1.5.4 --with-tm=/share/apps/pbs/11.1.0.111761
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This configure line has been used successfully before.  Configuration, build, and install
</span><br>
<span class="quotelev2">&gt;&gt; for BOTH compilers seems to work OK; however, my 'mpicc' build of my basic test
</span><br>
<span class="quotelev2">&gt;&gt; program ONLY works with the PGI built version of 'mpicc' for either the 1.4.4 or the 1.5.4
</span><br>
<span class="quotelev2">&gt;&gt; will compile the code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The Intel 1.4.4 and 1.5.4 'mpicc' wrapper-compilers produce an immediate segmentation
</span><br>
<span class="quotelev2">&gt;&gt; fault:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; .[richard.walsh_at_bob pbs]$ ./compile_it
</span><br>
<span class="quotelev2">&gt;&gt; ./compile_it: line 10: 19163 Segmentation fault      /share/apps/openmpi-intel/1.5.4/bin/mpicc -o ./hello_mpi.exe hello_mpi.c
</span><br>
<span class="quotelev2">&gt;&gt; [richard.walsh_at_bob pbs]$
</span><br>
<span class="quotelev2">&gt;&gt; [richard.walsh_at_bob pbs]$ ./compile_it
</span><br>
<span class="quotelev2">&gt;&gt; ./compile_it: line 10: 19515 Segmentation fault      /share/apps/openmpi-intel/1.4.4/bin/mpicc -o ./hello_mpi.exe hello_mpi.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This Intel stack is from the most recent release of their ICS released
</span><br>
<span class="quotelev2">&gt;&gt; in late October before SC11:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [richard.walsh_at_bob pbs]$ icc -V
</span><br>
<span class="quotelev2">&gt;&gt; Intel(R) C Intel(R) 64 Compiler XE for applications running on Intel(R) 64, Version 12.1.0.233 Build 20110811
</span><br>
<span class="quotelev2">&gt;&gt; Copyright (C) 1985-2011 Intel Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [richard.walsh_at_bob pbs]$ ifort -V
</span><br>
<span class="quotelev2">&gt;&gt; Intel(R) Fortran Intel(R) 64 Compiler XE for applications running on Intel(R) 64, Version 12.1.0.233 Build 20110811
</span><br>
<span class="quotelev2">&gt;&gt; Copyright (C) 1985-2011 Intel Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Has anyone else encountered this problem ... ??  Suggestions ... ??
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rbw
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Richard Walsh
</span><br>
<span class="quotelev2">&gt;&gt; Parallel Applications and Systems Manager
</span><br>
<span class="quotelev2">&gt;&gt; CUNY HPC Center, Staten Island, NY
</span><br>
<span class="quotelev2">&gt;&gt; W: 718-982-3319
</span><br>
<span class="quotelev2">&gt;&gt; M: 612-382-4620
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Right, as the world goes, is only in question between equals in power, while the strong do what they can and the weak suffer what they must.  -- Thucydides, 400 BC
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Change is in the Air - Smoking in Designated Areas Only in effect.&lt;<a href="http://www.csi.cuny.edu/tobaccofree">http://www.csi.cuny.edu/tobaccofree</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tobacco-Free Campus as of July 1, 2012.
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
<span class="quotelev2">&gt;&gt; ________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Change is in the Air - Smoking in Designated Areas Only in effect.&lt;<a href="http://www.csi.cuny.edu/tobaccofree">http://www.csi.cuny.edu/tobaccofree</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tobacco-Free Campus as of July 1, 2012.
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
<span class="quotelev2">&gt;&gt; ________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Change is in the Air - Smoking in Designated Areas Only in effect.&lt;<a href="http://www.csi.cuny.edu/tobaccofree">http://www.csi.cuny.edu/tobaccofree</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tobacco-Free Campus as of July 1, 2012.
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
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Change is in the Air - Smoking in Designated Areas Only in effect.&lt;<a href="http://www.csi.cuny.edu/tobaccofree">http://www.csi.cuny.edu/tobaccofree</a>&gt;
</span><br>
<span class="quotelev1">&gt; Tobacco-Free Campus as of July 1, 2012.
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
<p><pre>
-- 
-------------------------------------------
Tim Carlson, PhD
Senior Research Scientist
Environmental Molecular Sciences Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18087.php">Yvan Fournier: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues"</a>
<li><strong>Previous message:</strong> <a href="18085.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>In reply to:</strong> <a href="18085.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18091.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Reply:</strong> <a href="18091.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
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
