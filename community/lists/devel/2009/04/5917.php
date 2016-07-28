<?
$subject_val = "Re: [OMPI devel] vampirtrace on v1.3 branch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 09:58:25 2009" -->
<!-- isoreceived="20090430135825" -->
<!-- sent="Thu, 30 Apr 2009 09:57:41 -0400" -->
<!-- isosent="20090430135741" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vampirtrace on v1.3 branch" -->
<!-- id="49F9AE55.6070107_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200904301408.53627.andreas.knuepfer_at_tu-dresden.de" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-30 09:57:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5918.php">Jeff Squyres: "[OMPI devel] Fwd: [ROMIO Req #947] New version of ROMIO?"</a>
<li><strong>Previous message:</strong> <a href="5916.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>In reply to:</strong> <a href="5915.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] vampirtrace on v1.3 branch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andreas Kn&#252;pfer wrote:
<br>
<span class="quotelev1">&gt; On Tuesday 28 April 2009, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Has anyone tested running a simple program compiled with mpicc-vt that
</span><br>
<span class="quotelev2">&gt;&gt; was built on RHEL 5.1 or SLES-10 with gcc under 32 bits?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am seeing the following errors when running compiled code:
</span><br>
<span class="quotelev2">&gt;&gt; VampirTrace:  BFD:  bfd_get_file_flags():  failed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note the trunk seems to be working fine and I have other issues with 64
</span><br>
<span class="quotelev2">&gt;&gt; bit (that I haven't debugged). I see similar errors with Sun Studio.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Actually I have to do a little more research because I think I might 
<br>
have gotten confused between my 32 and 64 bit builds and what was 
<br>
happening.   If I am actually able to prove my concern on the above 
<br>
again I'll provide you with the information you asked for.
<br>
<p>thanks,
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Hi Terry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this has to do with resolving the symbols in the executable themselves. In 
</span><br>
<span class="quotelev1">&gt; order to find the problem, could you please send me the output of 'ldd' with 
</span><br>
<span class="quotelev1">&gt; this executable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you need a workaround for the problem for now? There is an easy one, but I 
</span><br>
<span class="quotelev1">&gt; assume this was only a test, wasn't it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andreas
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5918.php">Jeff Squyres: "[OMPI devel] Fwd: [ROMIO Req #947] New version of ROMIO?"</a>
<li><strong>Previous message:</strong> <a href="5916.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>In reply to:</strong> <a href="5915.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] vampirtrace on v1.3 branch"</a>
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
