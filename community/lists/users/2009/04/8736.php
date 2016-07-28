<?
$subject_val = "Re: [OMPI users] Issues on install 1.3.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  2 07:46:36 2009" -->
<!-- isoreceived="20090402114636" -->
<!-- sent="Thu, 2 Apr 2009 07:46:31 -0400" -->
<!-- isosent="20090402114631" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues on install 1.3.1" -->
<!-- id="9EED9126-FB01-4B9E-A432-A6EF91693749_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b87c422a0904020421y322bd9bete43266958b417ffd_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-02 07:46:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8737.php">Douglas Guptill: "Re: [OMPI users] Open MPI 2009 released"</a>
<li><strong>Previous message:</strong> <a href="8735.php">Dave Love: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>In reply to:</strong> <a href="8733.php">Francesco Pietra: "[OMPI users] Issues on install 1.3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8741.php">Gus Correa: "Re: [OMPI users] Issues on install 1.3.1"</a>
<li><strong>Reply:</strong> <a href="8741.php">Gus Correa: "Re: [OMPI users] Issues on install 1.3.1"</a>
<li><strong>Reply:</strong> <a href="8758.php">Francesco Pietra: "Re: [OMPI users] Issues on install 1.3.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 2, 2009, at 7:21 AM, Francesco Pietra wrote:
<br>
<p><span class="quotelev1">&gt; Hi:
</span><br>
<span class="quotelev1">&gt; With debian linux amd64 lenny I tried to install openmpi-1.3.1 instead
</span><br>
<span class="quotelev1">&gt; of using the executables openmpi-1.2.6 of previous disks. I configured
</span><br>
<span class="quotelev1">&gt; as for 1.2.6 (wrong ?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CC=/opt/intel/cce/10.1.015/bin/icc CXX=opt/intel/cce/10.1.015/bin/icpc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Don't you need a / in the beginning of the CXX definition?
<br>
<p><span class="quotelev1">&gt; F77=/opt/intel/fce/10.1.015/bin/ifort
</span><br>
<span class="quotelev1">&gt; FC=/opt/intel/fce/10.1.015/bin/ifort --with-libnuma=/usr/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; getting:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking whether using GNU C++ compiler .. yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; dependency style icpc ...  gcc3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking how to run C++ preprocessor ... /lib/cpp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking for compiler vendor ... intel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheching if C++ compiler works .. NO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it is not clear to me to which compiler NO refers: gcc or intel? I
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I would assume the C++ compiler is icpc since it's in your  
<br>
(abbreviated) output shown above.
<br>
<p><span class="quotelev1">&gt; would also appreciate very much a direction how to chech gcc and intel
</span><br>
<span class="quotelev1">&gt; C++ independently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I'm not sure what you're asking here..?  Open MPI's configure has 2  
<br>
independent sections checking characteristics of the C and C++  
<br>
compilers.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8737.php">Douglas Guptill: "Re: [OMPI users] Open MPI 2009 released"</a>
<li><strong>Previous message:</strong> <a href="8735.php">Dave Love: "Re: [OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>In reply to:</strong> <a href="8733.php">Francesco Pietra: "[OMPI users] Issues on install 1.3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8741.php">Gus Correa: "Re: [OMPI users] Issues on install 1.3.1"</a>
<li><strong>Reply:</strong> <a href="8741.php">Gus Correa: "Re: [OMPI users] Issues on install 1.3.1"</a>
<li><strong>Reply:</strong> <a href="8758.php">Francesco Pietra: "Re: [OMPI users] Issues on install 1.3.1"</a>
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
