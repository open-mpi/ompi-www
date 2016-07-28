<?
$subject_val = "Re: [OMPI users] configure error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 24 08:59:27 2010" -->
<!-- isoreceived="20100224135927" -->
<!-- sent="Wed, 24 Feb 2010 08:59:30 -0500" -->
<!-- isosent="20100224135930" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure error" -->
<!-- id="201002240859.30308.keller_at_ornl.gov" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="213237F0-0543-4891-990D-86768B463748_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] configure error<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-24 08:59:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12134.php">Gabriele Fatigati: "Re: [OMPI users] MPi Abort verbosity"</a>
<li><strong>Previous message:</strong> <a href="12132.php">Ralph Castain: "Re: [OMPI users] MPi Abort verbosity"</a>
<li><strong>In reply to:</strong> <a href="12129.php">Admin: "[OMPI users] configure error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Rockhee Sung,
<br>
Your explanation on which variant (1,2 or 3) gave which error message. I 
<br>
assume, the output You provided is from variant 1. 
<br>
<p>Not having an Apple MAC at hand, the F77 compiler gfortran here complains 
<br>
about:
<br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
configure:35830: gfortran -o conftest   conftest.f conftest_c.o  &gt;&amp;5
<br>
ld: warning: in conftest_c.o, file is not of required architecture
<br>
Undefined symbols:
<br>
&nbsp;&nbsp;&quot;_testfunc_&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_MAIN__ in ccx8DXUy.o
<br>
ld: symbol(s) not found
<br>
collect2: ld returned 1 exit status
<br>
configure:35837: $? = 1
<br>
configure: failed program was:
<br>
|       program main
<br>
|
<br>
|        external testfunc
<br>
|        call testfunc(1)
<br>
|
<br>
|       end
<br>
configure:35875: result: no
<br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<p><p><p>You may want to pass the same -arch flags for non-fat binaries to the F90 
<br>
compiler (here again gfortran) using FCFLAGS, aka:
<br>
<p>../configure FCFLAGS='-arch x86_64' FFLAGS='-arch x86_64' CFLAGS='-arch 
<br>
x86_64' CXXFLAGS='-arch x86_64'
<br>
<p><p><p>Best regards,
<br>
Rainer
<br>
<p><p><p>On Wednesday 24 February 2010 08:01:53 am Admin wrote:
<br>
<span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried 3 different ways.
</span><br>
<span class="quotelev1">&gt; (1)./configure
</span><br>
<span class="quotelev1">&gt; (2)../configure CFLAGS='-arch x86_64' CXXFLAGS='-arch x86_64'
</span><br>
<span class="quotelev1">&gt; (3)../configure FFLAGS='-arch x86_64' CFLAGS='-arch x86_64' CXXFLAGS='-arch
</span><br>
<span class="quotelev1">&gt;  x86_64'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1) and (2) gave same error but for (3), error shows such as below..
</span><br>
<span class="quotelev1">&gt; Does it mean different default build options between compilers? If so, how
</span><br>
<span class="quotelev1">&gt;  can I solve it out then?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Fortran 77 compiler
</span><br>
<span class="quotelev1">&gt; checking for gfortran... gfortran
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU Fortran 77 compiler... no
</span><br>
<span class="quotelev1">&gt; checking whether gfortran accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 compiler works... no
</span><br>
<span class="quotelev1">&gt; **********************************************************************
</span><br>
<span class="quotelev1">&gt; * It appears that your Fortran 77 compiler is unable to produce working
</span><br>
<span class="quotelev1">&gt; * executables.  A simple test application failed to properly
</span><br>
<span class="quotelev1">&gt; * execute.  Note that this is likely not a problem with Open MPI,
</span><br>
<span class="quotelev1">&gt; * but a problem with the local compiler installation.  More
</span><br>
<span class="quotelev1">&gt; * information (including exactly what command was given to the
</span><br>
<span class="quotelev1">&gt; * compiler and what error resulted when the command was executed) is
</span><br>
<span class="quotelev1">&gt; * available in the config.log file in this directory.
</span><br>
<span class="quotelev1">&gt; **********************************************************************
</span><br>
<span class="quotelev1">&gt; configure: error: Could not run a simple Fortran 77 program.  Aborting.
</span><br>
<span class="quotelev1">&gt; -------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12134.php">Gabriele Fatigati: "Re: [OMPI users] MPi Abort verbosity"</a>
<li><strong>Previous message:</strong> <a href="12132.php">Ralph Castain: "Re: [OMPI users] MPi Abort verbosity"</a>
<li><strong>In reply to:</strong> <a href="12129.php">Admin: "[OMPI users] configure error"</a>
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
