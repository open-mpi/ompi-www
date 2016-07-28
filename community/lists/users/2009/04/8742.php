<?
$subject_val = "Re: [OMPI users] Issues on install 1.3.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  2 12:22:58 2009" -->
<!-- isoreceived="20090402162258" -->
<!-- sent="Thu, 2 Apr 2009 18:22:53 +0200" -->
<!-- isosent="20090402162253" -->
<!-- name="Francesco Pietra" -->
<!-- email="chiendarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues on install 1.3.1" -->
<!-- id="b87c422a0904020922x51f500eay61b19e37f286b3ac_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="49D4E36F.9090105_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Francesco Pietra (<em>chiendarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-02 12:22:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8743.php">Jerome BENOIT: "[OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Previous message:</strong> <a href="8741.php">Gus Correa: "Re: [OMPI users] Issues on install 1.3.1"</a>
<li><strong>In reply to:</strong> <a href="8741.php">Gus Correa: "Re: [OMPI users] Issues on install 1.3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8745.php">Gus Correa: "Re: [OMPI users] Issues on install 1.3.1"</a>
<li><strong>Reply:</strong> <a href="8745.php">Gus Correa: "Re: [OMPI users] Issues on install 1.3.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gustavo:
<br>
Does this imply that a compilation with &quot;--with-libnuma=/usr/lib64&quot;
<br>
may afford better performance?
<br>
<p>Am asking that because in the meantime I have taken previous
<br>
compilation of openmpi-1.2.6 and use it (one disk of raid1 died and I
<br>
changed both with larger ones). If better performance I can try to
<br>
replace openmpi with the latest version and libnuma pointing to 64.
<br>
<p>thanks
<br>
francesco
<br>
<p><p>On Thu, Apr 2, 2009 at 6:10 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Francesco, list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Francesco:
</span><br>
<span class="quotelev1">&gt; Besides the typo that Jeff found on your
</span><br>
<span class="quotelev1">&gt; CXX definition, I would guess you want
</span><br>
<span class="quotelev1">&gt; --with-libnuma=/usr/lib64
</span><br>
<span class="quotelev1">&gt; (since your machine is amd64,
</span><br>
<span class="quotelev1">&gt; and you are using the 64-bit Intel compilers: cce, fce).
</span><br>
<span class="quotelev1">&gt; That is instead of --with-libnuma=/usr/lib (32-bit).
</span><br>
<span class="quotelev1">&gt; The /usr/lib64 path also works for other extra libraries
</span><br>
<span class="quotelev1">&gt; (e.g. Torque, Infiniband) on Linux x86_64.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is what I used on our AMD x86_64 with CentOS 5.2, and it works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My two cents,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 2, 2009, at 7:21 AM, Francesco Pietra wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With debian linux amd64 lenny I tried to install openmpi-1.3.1 instead
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of using the executables openmpi-1.2.6 of previous disks. I configured
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as for 1.2.6 (wrong ?)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC=/opt/intel/cce/10.1.015/bin/icc CXX=opt/intel/cce/10.1.015/bin/icpc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Don't you need a / in the beginning of the CXX definition?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; F77=/opt/intel/fce/10.1.015/bin/ifort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FC=/opt/intel/fce/10.1.015/bin/ifort --with-libnuma=/usr/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; getting:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking whether using GNU C++ compiler .. yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dependency style icpc ... &#194;&#160;gcc3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking how to run C++ preprocessor ... /lib/cpp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for compiler vendor ... intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cheching if C++ compiler works .. NO
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it is not clear to me to which compiler NO refers: gcc or intel? I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would assume the C++ compiler is icpc since it's in your (abbreviated)
</span><br>
<span class="quotelev2">&gt;&gt; output shown above.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would also appreciate very much a direction how to chech gcc and intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C++ independently.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure what you're asking here..? &#194;&#160;Open MPI's configure has 2
</span><br>
<span class="quotelev2">&gt;&gt; independent sections checking characteristics of the C and C++ compilers.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8743.php">Jerome BENOIT: "[OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Previous message:</strong> <a href="8741.php">Gus Correa: "Re: [OMPI users] Issues on install 1.3.1"</a>
<li><strong>In reply to:</strong> <a href="8741.php">Gus Correa: "Re: [OMPI users] Issues on install 1.3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8745.php">Gus Correa: "Re: [OMPI users] Issues on install 1.3.1"</a>
<li><strong>Reply:</strong> <a href="8745.php">Gus Correa: "Re: [OMPI users] Issues on install 1.3.1"</a>
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
