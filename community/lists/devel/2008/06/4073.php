<?
$subject_val = "Re: [OMPI devel] r18551 - brakes ob1 compilation on Sles10";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  2 08:47:09 2008" -->
<!-- isoreceived="20080602124709" -->
<!-- sent="Mon, 2 Jun 2008 14:47:00 +0200" -->
<!-- isosent="20080602124700" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r18551 - brakes ob1 compilation on Sles10" -->
<!-- id="20080602124700.GC2303_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4843E6A9.1020305_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] r18551 - brakes ob1 compilation on Sles10<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-02 08:47:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4074.php">Pavel Shamis (Pasha): "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<li><strong>Previous message:</strong> <a href="4072.php">Pavel Shamis (Pasha): "[OMPI devel] r18551 - brakes ob1 compilation on Sles10"</a>
<li><strong>In reply to:</strong> <a href="4072.php">Pavel Shamis (Pasha): "[OMPI devel] r18551 - brakes ob1 compilation on Sles10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4074.php">Pavel Shamis (Pasha): "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<li><strong>Reply:</strong> <a href="4074.php">Pavel Shamis (Pasha): "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Pavel Shamis (Pasha) wrote on Mon, Jun 02, 2008 at 02:25:13PM CEST:
<br>
<span class="quotelev1">&gt; r18551 brakes ompi compilation on SLES10 gcc 4.1.0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got follow error on my systems  
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.open-mpi.org/mtt/index.php?do_redir=672">http://www.open-mpi.org/mtt/index.php?do_redir=672</a> ):
</span><br>
<p>[...]
<br>
<span class="quotelev1">&gt; /usr/lib64/gcc/x86_64-suse-linux/4.1.0/../../../../x86_64-suse-linux/bin/ld: 
</span><br>
<span class="quotelev1">&gt; .libs/pml_ob1_sendreq.o: relocation R_X86_64_PC32 against  
</span><br>
<span class="quotelev1">&gt; `mca_pml_ob1_rndv_completion' can not be used when making a shared  
</span><br>
<span class="quotelev1">&gt; object; recompile with -fPIC
</span><br>
<p>The build log shows that your clock isn't set properly, so I'd first fix
<br>
that and do a complete rebuild afterwards.  The log also shows that
<br>
.libs/pml_ob1_sendreq.o is compiled with -fPIC, so second I'd assume a
<br>
compiler or binutils bug.  The GCC bugzilla lists
<br>
<a href="http://gcc.gnu.org/bugzilla/show_bug.cgi?id=30153">http://gcc.gnu.org/bugzilla/show_bug.cgi?id=30153</a>
<br>
<a href="http://gcc.gnu.org/bugzilla/show_bug.cgi?id=28781">http://gcc.gnu.org/bugzilla/show_bug.cgi?id=28781</a>
<br>
<a href="http://gcc.gnu.org/bugzilla/show_bug.cgi?id=21382">http://gcc.gnu.org/bugzilla/show_bug.cgi?id=21382</a>
<br>
as possible starting points for further investigation.  Maybe your
<br>
distributor has fixed or newer binutils packages for you.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4074.php">Pavel Shamis (Pasha): "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<li><strong>Previous message:</strong> <a href="4072.php">Pavel Shamis (Pasha): "[OMPI devel] r18551 - brakes ob1 compilation on Sles10"</a>
<li><strong>In reply to:</strong> <a href="4072.php">Pavel Shamis (Pasha): "[OMPI devel] r18551 - brakes ob1 compilation on Sles10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4074.php">Pavel Shamis (Pasha): "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<li><strong>Reply:</strong> <a href="4074.php">Pavel Shamis (Pasha): "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
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
