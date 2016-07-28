<?
$subject_val = "Re: [OMPI users] Issues on install 1.3.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  3 07:00:12 2009" -->
<!-- isoreceived="20090403110012" -->
<!-- sent="Fri, 3 Apr 2009 13:00:07 +0200" -->
<!-- isosent="20090403110007" -->
<!-- name="Francesco Pietra" -->
<!-- email="chiendarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues on install 1.3.1" -->
<!-- id="b87c422a0904030400n1e58b2a5wb8fd36d2ffd79a1d_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Francesco Pietra (<em>chiendarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-03 07:00:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8759.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Previous message:</strong> <a href="8757.php">Francesco Pietra: "Re: [OMPI users] Issues on install 1.3.1"</a>
<li><strong>In reply to:</strong> <a href="8736.php">Jeff Squyres: "Re: [OMPI users] Issues on install 1.3.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for such pedestrian misprint.
<br>
<p>Corrected, the configure ended with error:
<br>
<p>&quot;Expected file /usr/lib/include/numa.h&quot;
<br>
<p>In debian amd64 lenny it has a different location:
<br>
<p>&quot;/usr/include/numa.h&quot;
<br>
<p><p>Can the configure script be modified safely to account for the
<br>
different location?
<br>
thanks
<br>
<p>francesco
<br>
<p>On Thu, Apr 2, 2009 at 1:46 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
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
<span class="quotelev2">&gt;&gt; dependency style icpc ... &#194;&#160;gcc3
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
<span class="quotelev1">&gt; I'm not sure what you're asking here..? &#194;&#160;Open MPI's configure has 2
</span><br>
<span class="quotelev1">&gt; independent sections checking characteristics of the C and C++ compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="8759.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.3.1: bind() failed: Permission denied (13)"</a>
<li><strong>Previous message:</strong> <a href="8757.php">Francesco Pietra: "Re: [OMPI users] Issues on install 1.3.1"</a>
<li><strong>In reply to:</strong> <a href="8736.php">Jeff Squyres: "Re: [OMPI users] Issues on install 1.3.1"</a>
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
