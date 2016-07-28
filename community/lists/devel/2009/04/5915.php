<?
$subject_val = "Re: [OMPI devel] vampirtrace on v1.3 branch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 08:08:59 2009" -->
<!-- isoreceived="20090430120859" -->
<!-- sent="Thu, 30 Apr 2009 14:08:53 +0200" -->
<!-- isosent="20090430120853" -->
<!-- name="Andreas Kn&#252;pfer" -->
<!-- email="andreas.knuepfer_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vampirtrace on v1.3 branch" -->
<!-- id="200904301408.53627.andreas.knuepfer_at_tu-dresden.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="49F71743.7050702_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] vampirtrace on v1.3 branch<br>
<strong>From:</strong> Andreas Kn&#252;pfer (<em>andreas.knuepfer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-30 08:08:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5916.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Previous message:</strong> <a href="5914.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>In reply to:</strong> <a href="5885.php">Terry Dontje: "[OMPI devel] vampirtrace on v1.3 branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5917.php">Terry Dontje: "Re: [OMPI devel] vampirtrace on v1.3 branch"</a>
<li><strong>Reply:</strong> <a href="5917.php">Terry Dontje: "Re: [OMPI devel] vampirtrace on v1.3 branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday 28 April 2009, Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; Has anyone tested running a simple program compiled with mpicc-vt that
</span><br>
<span class="quotelev1">&gt; was built on RHEL 5.1 or SLES-10 with gcc under 32 bits?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am seeing the following errors when running compiled code:
</span><br>
<span class="quotelev1">&gt; VampirTrace:  BFD:  bfd_get_file_flags():  failed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note the trunk seems to be working fine and I have other issues with 64
</span><br>
<span class="quotelev1">&gt; bit (that I haven't debugged). I see similar errors with Sun Studio.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<p>Hi Terry,
<br>
<p>this has to do with resolving the symbols in the executable themselves. In 
<br>
order to find the problem, could you please send me the output of 'ldd' with 
<br>
this executable.
<br>
<p>Do you need a workaround for the problem for now? There is an easy one, but I 
<br>
assume this was only a test, wasn't it?
<br>
<p>Andreas
<br>
<p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5915/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5916.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Previous message:</strong> <a href="5914.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>In reply to:</strong> <a href="5885.php">Terry Dontje: "[OMPI devel] vampirtrace on v1.3 branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5917.php">Terry Dontje: "Re: [OMPI devel] vampirtrace on v1.3 branch"</a>
<li><strong>Reply:</strong> <a href="5917.php">Terry Dontje: "Re: [OMPI devel] vampirtrace on v1.3 branch"</a>
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
