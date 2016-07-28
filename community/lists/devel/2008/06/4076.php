<?
$subject_val = "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  3 10:13:11 2008" -->
<!-- isoreceived="20080603141311" -->
<!-- sent="Tue, 03 Jun 2008 17:12:58 +0300" -->
<!-- isosent="20080603141258" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10" -->
<!-- id="4845516A.9080801_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4843ED0B.4090603_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2008-06-03 10:12:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4077.php">Jeff Squyres: "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<li><strong>Previous message:</strong> <a href="4075.php">Lenny Verkhovsky: "[OMPI devel]  SM BTL NUMA awareness patches"</a>
<li><strong>In reply to:</strong> <a href="4074.php">Pavel Shamis (Pasha): "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4077.php">Jeff Squyres: "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<li><strong>Reply:</strong> <a href="4077.php">Jeff Squyres: "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<li><strong>Reply:</strong> <a href="4079.php">George Bosilca: "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The compilation passed on SLES 10 SP1.
<br>
So SP1 resolves the gcc/binutils issue.
<br>
We need to add somewhere notice that &quot; ompi 1.3 can not be compiled on 
<br>
SLES10 , please update ... &quot;
<br>
<p>Regards,
<br>
Pasha
<br>
<p>Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev1">&gt; Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt;&gt; * Pavel Shamis (Pasha) wrote on Mon, Jun 02, 2008 at 02:25:13PM CEST:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; r18551 brakes ompi compilation on SLES10 gcc 4.1.0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I got follow error on my systems  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (<a href="http://www.open-mpi.org/mtt/index.php?do_redir=672">http://www.open-mpi.org/mtt/index.php?do_redir=672</a> ):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.1.0/../../../../x86_64-suse-linux/bin/ld: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .libs/pml_ob1_sendreq.o: relocation R_X86_64_PC32 against  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `mca_pml_ob1_rndv_completion' can not be used when making a shared  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; object; recompile with -fPIC
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The build log shows that your clock isn't set properly, so I'd first fix
</span><br>
<span class="quotelev2">&gt;&gt; that and do a complete rebuild afterwards.  
</span><br>
<span class="quotelev1">&gt; I fixed the clock and the problem still was there.
</span><br>
<span class="quotelev2">&gt;&gt; The log also shows that
</span><br>
<span class="quotelev2">&gt;&gt; .libs/pml_ob1_sendreq.o is compiled with -fPIC, so second I'd assume a
</span><br>
<span class="quotelev2">&gt;&gt; compiler or binutils bug.  The GCC bugzilla lists
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gcc.gnu.org/bugzilla/show_bug.cgi?id=30153">http://gcc.gnu.org/bugzilla/show_bug.cgi?id=30153</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gcc.gnu.org/bugzilla/show_bug.cgi?id=28781">http://gcc.gnu.org/bugzilla/show_bug.cgi?id=28781</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gcc.gnu.org/bugzilla/show_bug.cgi?id=21382">http://gcc.gnu.org/bugzilla/show_bug.cgi?id=21382</a>
</span><br>
<span class="quotelev2">&gt;&gt; as possible starting points for further investigation.  Maybe your
</span><br>
<span class="quotelev2">&gt;&gt; distributor has fixed or newer binutils packages for you.
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; I will check for SLES 10 updates.
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Ralf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4077.php">Jeff Squyres: "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<li><strong>Previous message:</strong> <a href="4075.php">Lenny Verkhovsky: "[OMPI devel]  SM BTL NUMA awareness patches"</a>
<li><strong>In reply to:</strong> <a href="4074.php">Pavel Shamis (Pasha): "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4077.php">Jeff Squyres: "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<li><strong>Reply:</strong> <a href="4077.php">Jeff Squyres: "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<li><strong>Reply:</strong> <a href="4079.php">George Bosilca: "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
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
