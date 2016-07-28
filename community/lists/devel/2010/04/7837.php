<?
$subject_val = "Re: [OMPI devel] Porting OpenMPI to a new system";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 29 02:02:33 2010" -->
<!-- isoreceived="20100429060233" -->
<!-- sent="Thu, 29 Apr 2010 08:02:26 +0200" -->
<!-- isosent="20100429060226" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Porting OpenMPI to a new system" -->
<!-- id="20100429060226.GB25584_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BD85597.7010008_at_capsl.udel.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Porting OpenMPI to a new system<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-29 02:02:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7838.php">Ioannis E. Venetis: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<li><strong>Previous message:</strong> <a href="7836.php">Ralph Castain: "[OMPI devel] OMPI 1.4.2rc3"</a>
<li><strong>In reply to:</strong> <a href="7835.php">Ioannis E. Venetis: "[OMPI devel]  Porting OpenMPI to a new system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7838.php">Ioannis E. Venetis: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<li><strong>Reply:</strong> <a href="7838.php">Ioannis E. Venetis: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ioannis,
<br>
<p>* Ioannis E. Venetis wrote on Wed, Apr 28, 2010 at 05:34:47PM CEST:
<br>
<span class="quotelev1">&gt;   b) The cross-compilation environment should be run on a Linux x86_64
</span><br>
<span class="quotelev1">&gt; system. The cross-compiler, libraries, etc are already working, which
</span><br>
<span class="quotelev1">&gt; means that only OpenMPI needs to be ported right now. We use this
</span><br>
<span class="quotelev1">&gt; environment together with a simulator of the system, in order to
</span><br>
<span class="quotelev1">&gt; evaluate any changes in the architecture of the system. Using the
</span><br>
<span class="quotelev1">&gt; typical configure options of most applications, we would like to have
</span><br>
<span class="quotelev1">&gt; something like the following options in this case when building OpenMPI:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --host=x86_64-linux-gnu --build=&lt;our system triplet&gt;
</span><br>
<p>It looks like you are mixing up host and build.  build is the system you
<br>
run configure on, host is the system the generated OpenMPI will run on.
<br>
Also, x86_64-linux-gnu is not a valid triplet, as it is missing the
<br>
vendor bit.  x86_64-unknown-linux-gnu is valid.
<br>
<p>If your new system is sufficiently different from existing systems, then
<br>
all kinds of files from the build system may need updating: config.guess
<br>
and config.sub (email to send patches to is listed in the files), the
<br>
Libtool macro files (write to bug-libtool_at_[hidden]).  But if you already
<br>
have a working cross compiler it doesn't seem to me like these steps
<br>
would be necessary.
<br>
<p>For proper OpenMPI code I can't tell you which parts would need
<br>
adjustment.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7838.php">Ioannis E. Venetis: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<li><strong>Previous message:</strong> <a href="7836.php">Ralph Castain: "[OMPI devel] OMPI 1.4.2rc3"</a>
<li><strong>In reply to:</strong> <a href="7835.php">Ioannis E. Venetis: "[OMPI devel]  Porting OpenMPI to a new system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7838.php">Ioannis E. Venetis: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<li><strong>Reply:</strong> <a href="7838.php">Ioannis E. Venetis: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
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
