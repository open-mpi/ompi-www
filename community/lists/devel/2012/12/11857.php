<?
$subject_val = "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 20 08:18:40 2012" -->
<!-- isoreceived="20121220131840" -->
<!-- sent="Thu, 20 Dec 2012 14:18:33 +0100" -->
<!-- isosent="20121220131833" -->
<!-- name="marco atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches" -->
<!-- id="50D31029.30707_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="97D9FC53-01F9-4C99-84AE-18A30AA9D4D3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches<br>
<strong>From:</strong> marco atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-20 08:18:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11858.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Previous message:</strong> <a href="11856.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<li><strong>In reply to:</strong> <a href="11856.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11859.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<li><strong>Reply:</strong> <a href="11859.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/20/2012 1:59 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Thank you!  I've filed <a href="https://svn.open-mpi.org/trac/ompi/ticket/3437">https://svn.open-mpi.org/trac/ompi/ticket/3437</a> about this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have any Open MPI v1.6-specific patches that would be useful to merge upstream?  I've looked through my email and don't see any, but I could be missing them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hi Jeff,
<br>
these 3 are the one used on 1.6.x
<br>
<p><span class="quotelev2">&gt;&gt;   path_null.patch     : <a href="https://svn.open-mpi.org/trac/ompi/ticket/3371">https://svn.open-mpi.org/trac/ompi/ticket/3371</a>
</span><br>
<span class="quotelev2">&gt;&gt;   SHM.patch           : posix alternative at  &quot;SHM_R | SHM_W&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   cygwin-dlname.patch : cygwin specific for .dll instead of .so suffix
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p>path_null.patch is already in
<br>
<p>SHM.patch    is generic enough that should work on any platform.
<br>
&nbsp;&nbsp;&nbsp;Please check
<br>
<p>cygwin-dlname.patch   as written is windows only.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;It needs a configuration check for choosing the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;right shared library suffix for the platform
<br>
<p><p>Marco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11858.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>Previous message:</strong> <a href="11856.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<li><strong>In reply to:</strong> <a href="11856.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11859.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<li><strong>Reply:</strong> <a href="11859.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
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
