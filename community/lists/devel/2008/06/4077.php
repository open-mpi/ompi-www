<?
$subject_val = "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  3 11:34:23 2008" -->
<!-- isoreceived="20080603153423" -->
<!-- sent="Tue, 3 Jun 2008 11:34:12 -0400" -->
<!-- isosent="20080603153412" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10" -->
<!-- id="F5C8AE01-BA58-49FC-8C2A-CE06BD188AC6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4845516A.9080801_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-03 11:34:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4078.php">Brian W. Barrett: "[OMPI devel] memory manager RFC"</a>
<li><strong>Previous message:</strong> <a href="4076.php">Pavel Shamis (Pasha): "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<li><strong>In reply to:</strong> <a href="4076.php">Pavel Shamis (Pasha): "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4079.php">George Bosilca: "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Updates on this issue from the call today:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1323">https://svn.open-mpi.org/trac/ompi/ticket/1323</a>
<br>
<p><p><p>On Jun 3, 2008, at 10:12 AM, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev1">&gt; The compilation passed on SLES 10 SP1.
</span><br>
<span class="quotelev1">&gt; So SP1 resolves the gcc/binutils issue.
</span><br>
<span class="quotelev1">&gt; We need to add somewhere notice that &quot; ompi 1.3 can not be compiled on
</span><br>
<span class="quotelev1">&gt; SLES10 , please update ... &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Pasha
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ralf Wildenhues wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Pavel Shamis (Pasha) wrote on Mon, Jun 02, 2008 at 02:25:13PM  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CEST:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; r18551 brakes ompi compilation on SLES10 gcc 4.1.0.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I got follow error on my systems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (<a href="http://www.open-mpi.org/mtt/index.php?do_redir=672">http://www.open-mpi.org/mtt/index.php?do_redir=672</a> ):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/lib64/gcc/x86_64-suse-linux/4.1.0/../../../../x86_64-suse- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linux/bin/ld:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .libs/pml_ob1_sendreq.o: relocation R_X86_64_PC32 against
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `mca_pml_ob1_rndv_completion' can not be used when making a shared
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; object; recompile with -fPIC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The build log shows that your clock isn't set properly, so I'd  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; first fix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that and do a complete rebuild afterwards.
</span><br>
<span class="quotelev2">&gt;&gt; I fixed the clock and the problem still was there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The log also shows that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .libs/pml_ob1_sendreq.o is compiled with -fPIC, so second I'd  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assume a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler or binutils bug.  The GCC bugzilla lists
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://gcc.gnu.org/bugzilla/show_bug.cgi?id=30153">http://gcc.gnu.org/bugzilla/show_bug.cgi?id=30153</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://gcc.gnu.org/bugzilla/show_bug.cgi?id=28781">http://gcc.gnu.org/bugzilla/show_bug.cgi?id=28781</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://gcc.gnu.org/bugzilla/show_bug.cgi?id=21382">http://gcc.gnu.org/bugzilla/show_bug.cgi?id=21382</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as possible starting points for further investigation.  Maybe your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; distributor has fixed or newer binutils packages for you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will check for SLES 10 updates.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4078.php">Brian W. Barrett: "[OMPI devel] memory manager RFC"</a>
<li><strong>Previous message:</strong> <a href="4076.php">Pavel Shamis (Pasha): "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<li><strong>In reply to:</strong> <a href="4076.php">Pavel Shamis (Pasha): "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4079.php">George Bosilca: "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
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
