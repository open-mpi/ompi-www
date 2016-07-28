<?
$subject_val = "Re: [OMPI users] Issues on install 1.3.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  2 12:10:32 2009" -->
<!-- isoreceived="20090402161032" -->
<!-- sent="Thu, 02 Apr 2009 12:10:23 -0400" -->
<!-- isosent="20090402161023" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues on install 1.3.1" -->
<!-- id="49D4E36F.9090105_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9EED9126-FB01-4B9E-A432-A6EF91693749_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Issues on install 1.3.1<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-02 12:10:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8742.php">Francesco Pietra: "Re: [OMPI users] Issues on install 1.3.1"</a>
<li><strong>Previous message:</strong> <a href="8740.php">Elvedin Trnjanin: "Re: [OMPI users] Open MPI 2009 released"</a>
<li><strong>In reply to:</strong> <a href="8736.php">Jeff Squyres: "Re: [OMPI users] Issues on install 1.3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8742.php">Francesco Pietra: "Re: [OMPI users] Issues on install 1.3.1"</a>
<li><strong>Reply:</strong> <a href="8742.php">Francesco Pietra: "Re: [OMPI users] Issues on install 1.3.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Francesco, list
<br>
<p>Francesco:
<br>
Besides the typo that Jeff found on your
<br>
CXX definition, I would guess you want
<br>
--with-libnuma=/usr/lib64
<br>
(since your machine is amd64,
<br>
and you are using the 64-bit Intel compilers: cce, fce).
<br>
That is instead of --with-libnuma=/usr/lib (32-bit).
<br>
The /usr/lib64 path also works for other extra libraries
<br>
(e.g. Torque, Infiniband) on Linux x86_64.
<br>
<p>This is what I used on our AMD x86_64 with CentOS 5.2, and it works.
<br>
<p>My two cents,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Apr 2, 2009, at 7:21 AM, Francesco Pietra wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi:
</span><br>
<span class="quotelev2">&gt;&gt; With debian linux amd64 lenny I tried to install openmpi-1.3.1 instead
</span><br>
<span class="quotelev2">&gt;&gt; of using the executables openmpi-1.2.6 of previous disks. I configured
</span><br>
<span class="quotelev2">&gt;&gt; as for 1.2.6 (wrong ?)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CC=/opt/intel/cce/10.1.015/bin/icc CXX=opt/intel/cce/10.1.015/bin/icpc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Don't you need a / in the beginning of the CXX definition?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; F77=/opt/intel/fce/10.1.015/bin/ifort
</span><br>
<span class="quotelev2">&gt;&gt; FC=/opt/intel/fce/10.1.015/bin/ifort --with-libnuma=/usr/lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; getting:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; checking whether using GNU C++ compiler .. yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; dependency style icpc ...  gcc3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; checking how to run C++ preprocessor ... /lib/cpp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; checking for compiler vendor ... intel
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cheching if C++ compiler works .. NO
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it is not clear to me to which compiler NO refers: gcc or intel? I
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would assume the C++ compiler is icpc since it's in your (abbreviated) 
</span><br>
<span class="quotelev1">&gt; output shown above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; would also appreciate very much a direction how to chech gcc and intel
</span><br>
<span class="quotelev2">&gt;&gt; C++ independently.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure what you're asking here..?  Open MPI's configure has 2 
</span><br>
<span class="quotelev1">&gt; independent sections checking characteristics of the C and C++ compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8742.php">Francesco Pietra: "Re: [OMPI users] Issues on install 1.3.1"</a>
<li><strong>Previous message:</strong> <a href="8740.php">Elvedin Trnjanin: "Re: [OMPI users] Open MPI 2009 released"</a>
<li><strong>In reply to:</strong> <a href="8736.php">Jeff Squyres: "Re: [OMPI users] Issues on install 1.3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8742.php">Francesco Pietra: "Re: [OMPI users] Issues on install 1.3.1"</a>
<li><strong>Reply:</strong> <a href="8742.php">Francesco Pietra: "Re: [OMPI users] Issues on install 1.3.1"</a>
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
