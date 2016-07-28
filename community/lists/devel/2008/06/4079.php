<?
$subject_val = "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  3 12:05:28 2008" -->
<!-- isoreceived="20080603160528" -->
<!-- sent="Tue, 3 Jun 2008 12:05:14 -0400" -->
<!-- isosent="20080603160514" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10" -->
<!-- id="58596B15-59EA-4E1E-A24A-EB142C61FED4_at_eecs.utk.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-03 12:05:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4080.php">Ralf Wildenhues: "[OMPI devel] parallel make install"</a>
<li><strong>Previous message:</strong> <a href="4078.php">Brian W. Barrett: "[OMPI devel] memory manager RFC"</a>
<li><strong>In reply to:</strong> <a href="4076.php">Pavel Shamis (Pasha): "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pasha,
<br>
<p>Your patch correctly solve the issue. Today these callback functions  
<br>
do not require the inline flag, so I just applied your patch to the  
<br>
trunk.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 3, 2008, at 10:12 AM, Pavel Shamis (Pasha) wrote:
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4079/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4080.php">Ralf Wildenhues: "[OMPI devel] parallel make install"</a>
<li><strong>Previous message:</strong> <a href="4078.php">Brian W. Barrett: "[OMPI devel] memory manager RFC"</a>
<li><strong>In reply to:</strong> <a href="4076.php">Pavel Shamis (Pasha): "Re: [OMPI devel] r18551 - brakes ob1 compilation on SLES10"</a>
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
