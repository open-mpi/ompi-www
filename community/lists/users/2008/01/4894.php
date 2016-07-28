<?
$subject_val = "Re: [OMPI users] compilation with intel fortran compiller problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 26 14:58:15 2008" -->
<!-- isoreceived="20080126195815" -->
<!-- sent="Sat, 26 Jan 2008 11:57:54 -0800 (PST)" -->
<!-- isosent="20080126195754" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation with intel fortran compiller problem" -->
<!-- id="Pine.GSO.4.64.0801261154580.12440_at_aragorn.brc.West.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="650c70740801260247h481b63e6he18073381d0cf61d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] compilation with intel fortran compiller problem<br>
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-26 14:57:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4895.php">Jeff Squyres: "Re: [OMPI users] Topology functions from MPI 1.1"</a>
<li><strong>Previous message:</strong> <a href="4893.php">Andrei Neamtu: "[OMPI users] compilation with intel fortran compiller problem"</a>
<li><strong>In reply to:</strong> <a href="4893.php">Andrei Neamtu: "[OMPI users] compilation with intel fortran compiller problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, Intel 10.0 (and some say 10.1) have this problem with gcc 4.2.X (which
<br>
it is using) - it works with 4.1.2 as in SuSE SLES 10.
<br>
<p>A workaround is to include in your flags (CXXFLAGS, presumably), the following:
<br>
<p>-D &quot;__sync_fetch_and_add(ptr,addend)=_InterlockedExchangeAdd(const_cast&lt;void*&gt;(reinterpret_cast&lt;volatile void*&gt;(ptr)), addend)&quot;
<br>
<p>Regards,
<br>
Mostyn
<br>
<p>On Sat, 26 Jan 2008, Andrei Neamtu wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will be quick:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to compile open-mpi using Intel C, C++, Fortran compillers suite.
</span><br>
<span class="quotelev1">&gt; With Fortran and C compiler it works fine but when I enable C++ Intel
</span><br>
<span class="quotelev1">&gt; compiler got errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is what I done:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define the environmet variables
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; shell&gt; export FC=/opt/intel/fce/10.1.008/bin/ifort
</span><br>
<span class="quotelev1">&gt; shell&gt; export F77=/opt/intel/fce/10.1.008/bin/ifort
</span><br>
<span class="quotelev1">&gt; shell&gt; export CC=/opt/intel/cce/10.1.008/bin/icc
</span><br>
<span class="quotelev1">&gt; shell&gt; export CXX=/opt/intel/cce/10.1.008/bin/icpc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #after that issue the configure script
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; shell&gt; ./configure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It works fine until the C++ compiler setup and it ends up with the message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** C++ compiler and preprocessor
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU C++ compiler... yes
</span><br>
<span class="quotelev1">&gt; checking whether /opt/intel/cce/10.1.008/bin/icpc accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking dependency style of /opt/intel/cce/10.1.008/bin/icpc... gcc3
</span><br>
<span class="quotelev1">&gt; checking how to run the C++ preprocessor... /opt/intel/cce/10.1.008/bin/icpc -E
</span><br>
<span class="quotelev1">&gt; checking for the C++ compiler vendor... intel
</span><br>
<span class="quotelev1">&gt; checking if C++ compiler works... no
</span><br>
<span class="quotelev1">&gt; **********************************************************************
</span><br>
<span class="quotelev1">&gt; * It appears that your C++ compiler is unable to produce working
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
<span class="quotelev1">&gt; configure: error: Could not run a simple C++ program.  Aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also attached the config.log file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am new to open-mpi (I used lam-mpi and GNU compilers) but I want to
</span><br>
<span class="quotelev1">&gt; use the Intel compilers because they give more than 20% performance
</span><br>
<span class="quotelev1">&gt; gaining in my specific parallel application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help or suggestion will be greatly appreciated !!!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Andrei
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>

<br><p>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>TEXT/X-LOG attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4894/config.log">config.log</a>
</ul>
<!-- attachment="config.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4895.php">Jeff Squyres: "Re: [OMPI users] Topology functions from MPI 1.1"</a>
<li><strong>Previous message:</strong> <a href="4893.php">Andrei Neamtu: "[OMPI users] compilation with intel fortran compiller problem"</a>
<li><strong>In reply to:</strong> <a href="4893.php">Andrei Neamtu: "[OMPI users] compilation with intel fortran compiller problem"</a>
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
