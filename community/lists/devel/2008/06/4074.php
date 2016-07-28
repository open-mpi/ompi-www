<?
$subject_val = "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  2 08:52:35 2008" -->
<!-- isoreceived="20080602125235" -->
<!-- sent="Mon, 02 Jun 2008 15:52:27 +0300" -->
<!-- isosent="20080602125227" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10" -->
<!-- id="4843ED0B.4090603_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080602124700.GC2303_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-02 08:52:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4075.php">Lenny Verkhovsky: "[OMPI devel]  SM BTL NUMA awareness patches"</a>
<li><strong>Previous message:</strong> <a href="4073.php">Ralf Wildenhues: "Re: [OMPI devel] r18551 - brakes ob1 compilation on Sles10"</a>
<li><strong>In reply to:</strong> <a href="4073.php">Ralf Wildenhues: "Re: [OMPI devel] r18551 - brakes ob1 compilation on Sles10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4076.php">Pavel Shamis (Pasha): "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<li><strong>Reply:</strong> <a href="4076.php">Pavel Shamis (Pasha): "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralf Wildenhues wrote:
<br>
<span class="quotelev1">&gt; * Pavel Shamis (Pasha) wrote on Mon, Jun 02, 2008 at 02:25:13PM CEST:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; r18551 brakes ompi compilation on SLES10 gcc 4.1.0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I got follow error on my systems  
</span><br>
<span class="quotelev2">&gt;&gt; (<a href="http://www.open-mpi.org/mtt/index.php?do_redir=672">http://www.open-mpi.org/mtt/index.php?do_redir=672</a> ):
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.1.0/../../../../x86_64-suse-linux/bin/ld: 
</span><br>
<span class="quotelev2">&gt;&gt; .libs/pml_ob1_sendreq.o: relocation R_X86_64_PC32 against  
</span><br>
<span class="quotelev2">&gt;&gt; `mca_pml_ob1_rndv_completion' can not be used when making a shared  
</span><br>
<span class="quotelev2">&gt;&gt; object; recompile with -fPIC
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The build log shows that your clock isn't set properly, so I'd first fix
</span><br>
<span class="quotelev1">&gt; that and do a complete rebuild afterwards.  
</span><br>
I fixed the clock and the problem still was there.
<br>
<span class="quotelev1">&gt; The log also shows that
</span><br>
<span class="quotelev1">&gt; .libs/pml_ob1_sendreq.o is compiled with -fPIC, so second I'd assume a
</span><br>
<span class="quotelev1">&gt; compiler or binutils bug.  The GCC bugzilla lists
</span><br>
<span class="quotelev1">&gt; <a href="http://gcc.gnu.org/bugzilla/show_bug.cgi?id=30153">http://gcc.gnu.org/bugzilla/show_bug.cgi?id=30153</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://gcc.gnu.org/bugzilla/show_bug.cgi?id=28781">http://gcc.gnu.org/bugzilla/show_bug.cgi?id=28781</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://gcc.gnu.org/bugzilla/show_bug.cgi?id=21382">http://gcc.gnu.org/bugzilla/show_bug.cgi?id=21382</a>
</span><br>
<span class="quotelev1">&gt; as possible starting points for further investigation.  Maybe your
</span><br>
<span class="quotelev1">&gt; distributor has fixed or newer binutils packages for you.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I will check for SLES 10 updates.
<br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4075.php">Lenny Verkhovsky: "[OMPI devel]  SM BTL NUMA awareness patches"</a>
<li><strong>Previous message:</strong> <a href="4073.php">Ralf Wildenhues: "Re: [OMPI devel] r18551 - brakes ob1 compilation on Sles10"</a>
<li><strong>In reply to:</strong> <a href="4073.php">Ralf Wildenhues: "Re: [OMPI devel] r18551 - brakes ob1 compilation on Sles10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4076.php">Pavel Shamis (Pasha): "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<li><strong>Reply:</strong> <a href="4076.php">Pavel Shamis (Pasha): "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
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
