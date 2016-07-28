<?
$subject_val = "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 20 11:14:30 2011" -->
<!-- isoreceived="20110420151430" -->
<!-- sent="Wed, 20 Apr 2011 11:14:15 -0400" -->
<!-- isosent="20110420151415" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux" -->
<!-- id="4DAEF847.6050003_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110420094421.69425y5xfaomo10k_at_webtools.cc.umanitoba.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-20 11:14:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16298.php">Brock Palen: "[OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16296.php">Jeff Squyres: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="16295.php">Ormiston, Scott J.: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16307.php">Jeff Squyres: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ormiston, Scott J. wrote:
<br>
<span class="quotelev1">&gt; At Tue, 19 Apr 2011 15:30:41 -0400, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is it possible that the Intel compiler environment is not set?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just in case, did you source the right Intel scripts to setup
</span><br>
<span class="quotelev2">&gt;&gt; the icc, icpc, and ifort environment?
</span><br>
<span class="quotelev2">&gt;&gt; Something like this (for a 64-bit machine):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; source /opt/intel/composerxe-2011.1.107/bin/compilervars.csh intel64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and perhaps a similar command for icc/icpc.
</span><br>
<span class="quotelev2">&gt;&gt; Check the compiler documentation for details.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did source that same startup file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I only have ifort 12.0 in one of our machines here, no icc or icpc.
</span><br>
<span class="quotelev2">&gt;&gt; However, the OS is CentOS 5.4 64-bit,
</span><br>
<span class="quotelev2">&gt;&gt; and I compiled OpenMPI 1.4.3 there with gcc, g++ and ifort
</span><br>
<span class="quotelev2">&gt;&gt; without any problem.
</span><br>
<span class="quotelev2">&gt;&gt; I would guess you can do it with icc, icpc and ifort too.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another possibility is some name mangling issue.
</span><br>
<span class="quotelev2">&gt;&gt; Maybe the leading double underscore on the C symbols?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I the OS is Centos 5 (not sure which version), 64bit, and OpenMPI 1.4.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I originally thought the configure was fine, but now tht I check through 
</span><br>
<span class="quotelev1">&gt; the config.log, I see that it had errors:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; conftest.c(49): error #2379: cannot open source file &quot;ac_nonexistent.h&quot;
</span><br>
<span class="quotelev1">&gt;   #include &lt;ac_nonexistent.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; conftest.c(58): catastrophic error: $error directive: Normal Unix 
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt;         #error Normal Unix environment
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; conftest.c (102): error :expected and expression
</span><br>
<span class="quotelev1">&gt;  if (sizeof (( long long )))
</span><br>
<span class="quotelev1">&gt;                           ^
</span><br>
<span class="quotelev1">&gt; conftest.c (103): error :expected and expression
</span><br>
<span class="quotelev1">&gt;  if (sizeof (( long double )))
</span><br>
<span class="quotelev1">&gt;                             ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; conftest.c (104): error :expected and expression
</span><br>
<span class="quotelev1">&gt;  if (sizeof (( int8_t )))
</span><br>
<span class="quotelev1">&gt;                        ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; conftest.c (105): error :expected and expression
</span><br>
<span class="quotelev1">&gt;  if (sizeof (( uint8_t )))
</span><br>
<span class="quotelev1">&gt;                         ^
</span><br>
<span class="quotelev1">&gt; conftest.c (106): error :expected and expression
</span><br>
<span class="quotelev1">&gt;  if (sizeof (( int16_t )))
</span><br>
<span class="quotelev1">&gt;                         ^
</span><br>
<span class="quotelev1">&gt; conftest.c (107): error :expected and expression
</span><br>
<span class="quotelev1">&gt;  if (sizeof (( uint16_t )))
</span><br>
<span class="quotelev1">&gt;                          ^
</span><br>
<span class="quotelev1">&gt; and so on. Other errors occurred in
</span><br>
<span class="quotelev1">&gt; conftest.cpp
</span><br>
<span class="quotelev1">&gt; conftest.f
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; conftest.F
</span><br>
<span class="quotelev1">&gt; conftest.f90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone know what I am missing here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Scott Ormiston
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>Hi Scott
<br>
<p>I would guess ac_nonexistent.h is supposed to be what the name says,
<br>
a non-existent file.
<br>
A little googling around gave me this wisdom!  :)
<br>
In any case, I have the same message on my config.log,
<br>
but no harm was caused, and OpenMPI built correctly.
<br>
<p>However, as for the 'catastrophic error', I don't have it here.
<br>
<p>Would you perhaps be missing some RPMs on your system e.g. 
<br>
autoconf,automake,libtool, or gmake, or some 'devel' or 'compat' RPMs 
<br>
for gcc and friends?
<br>
Anyway, this is just a wild guess.
<br>
For one thing, on some computers here we always have to install
<br>
some of these 'devel' and 'compat' packages
<br>
to build the Intel compiler right.
<br>
The standard CentOS (and Fedora, and RHEL)
<br>
installation skips quite a bit of the code development tools.
<br>
See the compiler release notes and other documentation for details.
<br>
<p>I think it may be time for the OpenMPI developers
<br>
to take over this thread and give you a hand.
<br>
<p>My two meager and useless cents,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16298.php">Brock Palen: "[OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16296.php">Jeff Squyres: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="16295.php">Ormiston, Scott J.: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16307.php">Jeff Squyres: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
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
