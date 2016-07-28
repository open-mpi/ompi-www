<?
$subject_val = "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 20 10:44:26 2011" -->
<!-- isoreceived="20110420144426" -->
<!-- sent="Wed, 20 Apr 2011 09:44:21 -0500" -->
<!-- isosent="20110420144421" -->
<!-- name="Ormiston, Scott J." -->
<!-- email="SJ_Ormiston_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux" -->
<!-- id="20110420094421.69425y5xfaomo10k_at_webtools.cc.umanitoba.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4DADE2E1.6020904_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Ormiston, Scott J. (<em>SJ_Ormiston_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-20 10:44:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16296.php">Jeff Squyres: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="16294.php">mohd naseem: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="16286.php">Gus Correa: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16297.php">Gus Correa: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<li><strong>Reply:</strong> <a href="16297.php">Gus Correa: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<li><strong>Reply:</strong> <a href="16307.php">Jeff Squyres: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At Tue, 19 Apr 2011 15:30:41 -0400, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Is it possible that the Intel compiler environment is not set?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just in case, did you source the right Intel scripts to setup
</span><br>
<span class="quotelev1">&gt; the icc, icpc, and ifort environment?
</span><br>
<span class="quotelev1">&gt; Something like this (for a 64-bit machine):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; source /opt/intel/composerxe-2011.1.107/bin/compilervars.csh intel64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and perhaps a similar command for icc/icpc.
</span><br>
<span class="quotelev1">&gt; Check the compiler documentation for details.
</span><br>
<p>I did source that same startup file.
<br>
<p><span class="quotelev1">&gt; I only have ifort 12.0 in one of our machines here, no icc or icpc.
</span><br>
<span class="quotelev1">&gt; However, the OS is CentOS 5.4 64-bit,
</span><br>
<span class="quotelev1">&gt; and I compiled OpenMPI 1.4.3 there with gcc, g++ and ifort
</span><br>
<span class="quotelev1">&gt; without any problem.
</span><br>
<span class="quotelev1">&gt; I would guess you can do it with icc, icpc and ifort too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another possibility is some name mangling issue.
</span><br>
<span class="quotelev1">&gt; Maybe the leading double underscore on the C symbols?
</span><br>
<p>I the OS is Centos 5 (not sure which version), 64bit, and OpenMPI 1.4.3.
<br>
<p>I originally thought the configure was fine, but now tht I check  
<br>
through the config.log, I see that it had errors:
<br>
<p>conftest.c(49): error #2379: cannot open source file &quot;ac_nonexistent.h&quot;
<br>
&nbsp;&nbsp;&nbsp;#include &lt;ac_nonexistent.h&gt;
<br>
<p>conftest.c(58): catastrophic error: $error directive: Normal Unix environment
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#error Normal Unix environment
<br>
<p>conftest.c (102): error :expected and expression
<br>
&nbsp;&nbsp;if (sizeof (( long long )))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
conftest.c (103): error :expected and expression
<br>
&nbsp;&nbsp;if (sizeof (( long double )))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>conftest.c (104): error :expected and expression
<br>
&nbsp;&nbsp;if (sizeof (( int8_t )))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>conftest.c (105): error :expected and expression
<br>
&nbsp;&nbsp;if (sizeof (( uint8_t )))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
conftest.c (106): error :expected and expression
<br>
&nbsp;&nbsp;if (sizeof (( int16_t )))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
conftest.c (107): error :expected and expression
<br>
&nbsp;&nbsp;if (sizeof (( uint16_t )))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
and so on. Other errors occurred in
<br>
conftest.cpp
<br>
conftest.f
<br>
<p><p>conftest.F
<br>
conftest.f90
<br>
<p>Does anyone know what I am missing here?
<br>
<p>Thanks.
<br>
Scott Ormiston
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16296.php">Jeff Squyres: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="16294.php">mohd naseem: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="16286.php">Gus Correa: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16297.php">Gus Correa: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<li><strong>Reply:</strong> <a href="16297.php">Gus Correa: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<li><strong>Reply:</strong> <a href="16307.php">Jeff Squyres: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
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
