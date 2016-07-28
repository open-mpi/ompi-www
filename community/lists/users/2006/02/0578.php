<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Feb  4 11:29:36 2006" -->
<!-- isoreceived="20060204162936" -->
<!-- sent="Sat, 4 Feb 2006 10:29:30 -0600" -->
<!-- isosent="20060204162930" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4" -->
<!-- id="C1B903DB-887E-4DA8-9C48-2A8F0CD8BE20_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="37EB5F44-DB91-417B-BCC3-DBAF8895DF6E_at_scu.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-04 11:29:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0579.php">Konstantin Kudin: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>Previous message:</strong> <a href="0577.php">Jeff Squyres: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<li><strong>In reply to:</strong> <a href="0576.php">Brian Granger: "Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0587.php">Xiaoning (David) Yang: "Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
<li><strong>Reply:</strong> <a href="0587.php">Xiaoning (David) Yang: "Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian Granger is correct - the problem is with your Fortran  
<br>
installation.  Since you are trying to use gfortran instead of g77,  
<br>
you do not need to use the GCC 3.3 toolchain - the GCC 4.0 chain is  
<br>
the right one to use.
<br>
<p>However, gfortran is installed incorrectly on your system.  Compiling  
<br>
a simple code results in warnings that should not be there (from  
<br>
config.log):
<br>
<p>&nbsp;&nbsp;&nbsp;configure:20505: gfortran -c  conftest.f &gt;&amp;5
<br>
&nbsp;&nbsp;&nbsp;gfortran: spec failure: unrecognized spec option 'y'
<br>
<p>And running a simple code results in even worse problems:
<br>
<p>&nbsp;&nbsp;&nbsp;configure:20670: gfortran  conftestf.f conftest.o -o conftest
<br>
&nbsp;&nbsp;&nbsp;gfortran: spec failure: unrecognized spec option 'y'
<br>
&nbsp;&nbsp;&nbsp;gfortran: spec failure: unrecognized spec option 'M'
<br>
&nbsp;&nbsp;&nbsp;/usr/bin/ld: warning suggest use of -bind_at_load, as lazy binding  
<br>
may result in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;errors or different symbols being used
<br>
&nbsp;&nbsp;&nbsp;symbol _clogf used from dynamic library /usr/lib/libSystem.dylib 
<br>
(complex.o) not
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from earlier dynamic library /usr/lib/libmx.A.dylib(single module)
<br>
&nbsp;&nbsp;&nbsp;...  and so on with a large number of symbols ...
<br>
<p>I'd try making sure you have the latest version of the gfortran build  
<br>
you downloaded.  I've found that the one on hpc.sourceforge.net works  
<br>
pretty well for me, but I rarely do anything more intensive than  
<br>
making sure the MPI bindings work properly.
<br>
<p>Slightly off-topic, but future releases of Open MPI will have a more  
<br>
clear report when the compiler fails to produce useable executables.   
<br>
We're aware that the current warnings are a bit misleading.
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<p><p>On Feb 3, 2006, at 4:55 PM, Brian Granger wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like it could be a problem with either using gcc 4.x or with
</span><br>
<span class="quotelev1">&gt; the fortran you are using.  I have compiled OpenMPI on  10.4.4. using
</span><br>
<span class="quotelev1">&gt; the compilers:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; myhost$ g77 -v
</span><br>
<span class="quotelev1">&gt; Reading specs from /usr/local/lib/gcc/powerpc-apple-darwin7.9.0/3.4.4/
</span><br>
<span class="quotelev1">&gt; specs
</span><br>
<span class="quotelev1">&gt; Configured with: ../gcc/configure --enable-threads=posix --enable-
</span><br>
<span class="quotelev1">&gt; languages=f77
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 3.4.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; myhost$ gcc -v
</span><br>
<span class="quotelev1">&gt; Reading specs from /usr/libexec/gcc/darwin/ppc/3.3/specs
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 3.3 20030304 (Apple Computer, Inc. build 1809)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might want to download g77 and switch gcc to version 3.3 using
</span><br>
<span class="quotelev1">&gt; the command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sudo gcc_select 3.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 3, 2006, at 2:20 PM, Xiaoning (David) Yang wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to configure OPEN MPI 1.0.1 under MAC OS X 10.4.4 and
</span><br>
<span class="quotelev2">&gt;&gt; was not
</span><br>
<span class="quotelev2">&gt;&gt; successful. Attached are the output from './configure --prefix=/usr/
</span><br>
<span class="quotelev2">&gt;&gt; local'
</span><br>
<span class="quotelev2">&gt;&gt; and the configure log flle in a tarball. Any help is appreciated!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; David
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ***** Correspondence *****
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;configure_out.tar.bz2&gt;
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
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0579.php">Konstantin Kudin: "Re: [O-MPI users] Open-MPI all-to-all performance"</a>
<li><strong>Previous message:</strong> <a href="0577.php">Jeff Squyres: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<li><strong>In reply to:</strong> <a href="0576.php">Brian Granger: "Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0587.php">Xiaoning (David) Yang: "Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
<li><strong>Reply:</strong> <a href="0587.php">Xiaoning (David) Yang: "Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
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
