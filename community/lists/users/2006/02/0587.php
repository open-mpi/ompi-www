<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb  6 15:02:32 2006" -->
<!-- isoreceived="20060206200232" -->
<!-- sent="Mon, 06 Feb 2006 13:02:29 -0700" -->
<!-- isosent="20060206200229" -->
<!-- name="Xiaoning (David) Yang" -->
<!-- email="xyang_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4" -->
<!-- id="C00CF965.899C%xyang_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C1B903DB-887E-4DA8-9C48-2A8F0CD8BE20_at_open-mpi.org" -->
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
<strong>From:</strong> Xiaoning (David) Yang (<em>xyang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-06 15:02:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0588.php">Warner Yuen: "[O-MPI users] OpenMPI and Xgrid"</a>
<li><strong>Previous message:</strong> <a href="0586.php">Glenn Morris: "[O-MPI users] mpirun sets umask to 0"</a>
<li><strong>In reply to:</strong> <a href="0578.php">Brian Barrett: "Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Brian Barrett and Brian Granger. I downloaded and installed a new
<br>
version of gfortran from <a href="http://gcc.gnu.org/wiki/GFortranBinaries">http://gcc.gnu.org/wiki/GFortranBinaries</a> and the
<br>
install went without a problem. I had gfortran installed before from Fink.
<br>
<p>David
<br>
<p>***** Correspondence *****
<br>
<p><p><p><span class="quotelev1">&gt; From: Brian Barrett &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Sat, 4 Feb 2006 10:29:30 -0600
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian Granger is correct - the problem is with your Fortran
</span><br>
<span class="quotelev1">&gt; installation.  Since you are trying to use gfortran instead of g77,
</span><br>
<span class="quotelev1">&gt; you do not need to use the GCC 3.3 toolchain - the GCC 4.0 chain is
</span><br>
<span class="quotelev1">&gt; the right one to use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, gfortran is installed incorrectly on your system.  Compiling
</span><br>
<span class="quotelev1">&gt; a simple code results in warnings that should not be there (from
</span><br>
<span class="quotelev1">&gt; config.log):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    configure:20505: gfortran -c  conftest.f &gt;&amp;5
</span><br>
<span class="quotelev1">&gt;    gfortran: spec failure: unrecognized spec option 'y'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And running a simple code results in even worse problems:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    configure:20670: gfortran  conftestf.f conftest.o -o conftest
</span><br>
<span class="quotelev1">&gt;    gfortran: spec failure: unrecognized spec option 'y'
</span><br>
<span class="quotelev1">&gt;    gfortran: spec failure: unrecognized spec option 'M'
</span><br>
<span class="quotelev1">&gt;    /usr/bin/ld: warning suggest use of -bind_at_load, as lazy binding
</span><br>
<span class="quotelev1">&gt; may result in
</span><br>
<span class="quotelev1">&gt;       errors or different symbols being used
</span><br>
<span class="quotelev1">&gt;    symbol _clogf used from dynamic library /usr/lib/libSystem.dylib
</span><br>
<span class="quotelev1">&gt; (complex.o) not
</span><br>
<span class="quotelev1">&gt;      from earlier dynamic library /usr/lib/libmx.A.dylib(single module)
</span><br>
<span class="quotelev1">&gt;    ...  and so on with a large number of symbols ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd try making sure you have the latest version of the gfortran build
</span><br>
<span class="quotelev1">&gt; you downloaded.  I've found that the one on hpc.sourceforge.net works
</span><br>
<span class="quotelev1">&gt; pretty well for me, but I rarely do anything more intensive than
</span><br>
<span class="quotelev1">&gt; making sure the MPI bindings work properly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Slightly off-topic, but future releases of Open MPI will have a more
</span><br>
<span class="quotelev1">&gt; clear report when the compiler fails to produce useable executables.
</span><br>
<span class="quotelev1">&gt; We're aware that the current warnings are a bit misleading.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 3, 2006, at 4:55 PM, Brian Granger wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It looks like it could be a problem with either using gcc 4.x or with
</span><br>
<span class="quotelev2">&gt;&gt; the fortran you are using.  I have compiled OpenMPI on  10.4.4. using
</span><br>
<span class="quotelev2">&gt;&gt; the compilers:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; myhost$ g77 -v
</span><br>
<span class="quotelev2">&gt;&gt; Reading specs from /usr/local/lib/gcc/powerpc-apple-darwin7.9.0/3.4.4/
</span><br>
<span class="quotelev2">&gt;&gt; specs
</span><br>
<span class="quotelev2">&gt;&gt; Configured with: ../gcc/configure --enable-threads=posix --enable-
</span><br>
<span class="quotelev2">&gt;&gt; languages=f77
</span><br>
<span class="quotelev2">&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev2">&gt;&gt; gcc version 3.4.4
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; myhost$ gcc -v
</span><br>
<span class="quotelev2">&gt;&gt; Reading specs from /usr/libexec/gcc/darwin/ppc/3.3/specs
</span><br>
<span class="quotelev2">&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev2">&gt;&gt; gcc version 3.3 20030304 (Apple Computer, Inc. build 1809)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You might want to download g77 and switch gcc to version 3.3 using
</span><br>
<span class="quotelev2">&gt;&gt; the command:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; sudo gcc_select 3.3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 3, 2006, at 2:20 PM, Xiaoning (David) Yang wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to configure OPEN MPI 1.0.1 under MAC OS X 10.4.4 and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; successful. Attached are the output from './configure --prefix=/usr/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; local'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and the configure log flle in a tarball. Any help is appreciated!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; David
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ***** Correspondence *****
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;configure_out.tar.bz2&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0588.php">Warner Yuen: "[O-MPI users] OpenMPI and Xgrid"</a>
<li><strong>Previous message:</strong> <a href="0586.php">Glenn Morris: "[O-MPI users] mpirun sets umask to 0"</a>
<li><strong>In reply to:</strong> <a href="0578.php">Brian Barrett: "Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
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
