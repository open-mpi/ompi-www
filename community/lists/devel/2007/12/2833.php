<?
$subject_val = "Re: [OMPI devel] SCTP noisy failure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 19:16:38 2007" -->
<!-- isoreceived="20071213001638" -->
<!-- sent="Wed, 12 Dec 2007 16:16:30 -0800" -->
<!-- isosent="20071213001630" -->
<!-- name="Brad Penoff" -->
<!-- email="penoff_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SCTP noisy failure" -->
<!-- id="b89c3c270712121616t2445dc81kb1aa71c79a25e1a0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9F4EC53A-DEC5-4DBE-9E26-EB3DA9B46FB3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SCTP noisy failure<br>
<strong>From:</strong> Brad Penoff (<em>penoff_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 19:16:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2834.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)"</a>
<li><strong>Previous message:</strong> <a href="2832.php">Jeff Squyres: "[OMPI devel] SCTP noisy failure"</a>
<li><strong>In reply to:</strong> <a href="2832.php">Jeff Squyres: "[OMPI devel] SCTP noisy failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2835.php">Jeff Squyres: "Re: [OMPI devel] SCTP noisy failure"</a>
<li><strong>Reply:</strong> <a href="2835.php">Jeff Squyres: "Re: [OMPI devel] SCTP noisy failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hey Jeff,
<br>
<p>Does your system have sctp in the kernel as a module?  This is the
<br>
default for most Linux systems so you may have to &quot;modprobe sctp&quot; to
<br>
get rid of the ESOCKTNOSUPPORT...
<br>
<p>brad
<br>
<p>On Dec 12, 2007 3:57 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; After the exclusivity change today, I notice that I am getting
</span><br>
<span class="quotelev1">&gt; warnings for *every* mpirun from the SCTP BTL on RHEL4:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [15:52] svbu-mpi:~/mpi % mpirun -np 2 hello
</span><br>
<span class="quotelev1">&gt; [svbu-mpi.cisco.com][1,0][btl_sctp_component.c:
</span><br>
<span class="quotelev1">&gt; 615:mca_btl_sctp_component_create_listen] socket() failed with errno=94
</span><br>
<span class="quotelev1">&gt; [svbu-mpi.cisco.com][1,1][btl_sctp_component.c:
</span><br>
<span class="quotelev1">&gt; 615:mca_btl_sctp_component_create_listen] socket() failed with errno=94
</span><br>
<span class="quotelev1">&gt; Hello, world!  I am 0 of 2 (svbu-mpi.cisco.com)
</span><br>
<span class="quotelev1">&gt; Hello, world!  I am 1 of 2 (svbu-mpi.cisco.com)
</span><br>
<span class="quotelev1">&gt; [15:52] svbu-mpi:~/mpi %
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can these be turned off?  I have a default RHEL4 system -- I haven't
</span><br>
<span class="quotelev1">&gt; done anything special to enable / disable SCTP.  Is there a less noisy
</span><br>
<span class="quotelev1">&gt; way to tell that SCTP is not enabled on a system?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2834.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16909 (f77_hello compiler error)"</a>
<li><strong>Previous message:</strong> <a href="2832.php">Jeff Squyres: "[OMPI devel] SCTP noisy failure"</a>
<li><strong>In reply to:</strong> <a href="2832.php">Jeff Squyres: "[OMPI devel] SCTP noisy failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2835.php">Jeff Squyres: "Re: [OMPI devel] SCTP noisy failure"</a>
<li><strong>Reply:</strong> <a href="2835.php">Jeff Squyres: "Re: [OMPI devel] SCTP noisy failure"</a>
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
