<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 15 13:54:40 2007" -->
<!-- isoreceived="20070215185440" -->
<!-- sent="Thu, 15 Feb 2007 19:53:46 +0100" -->
<!-- isosent="20070215185346" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] build problem with 1.1.4" -->
<!-- id="45D4AC3A.3080805_at_informatik.uni-halle.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E36B04A-2BA6-45BA-8A6F-6A9B07C73DE8_at_lanl.gov" -->
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
<strong>From:</strong> Bert Wesarg (<em>wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-15 13:53:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1308.php">Brian Barrett: "Re: [OMPI devel] installed wrappers"</a>
<li><strong>Previous message:</strong> <a href="1306.php">Brian Barrett: "Re: [OMPI devel] build problem with 1.1.4"</a>
<li><strong>In reply to:</strong> <a href="1306.php">Brian Barrett: "Re: [OMPI devel] build problem with 1.1.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Feb 15, 2007, at 3:07 AM, Bert Wesarg wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this with a SVN checkout or the release tarball?
</span><br>
Fifty-Fifty. I did a diff from the 1.1.2 tarball to the 1.1.4 tarball. And
<br>
after applying the diff it sounds logical, that the build system was
<br>
rebuilding itself and i have autoconf 2.61 installed. So thanks for the
<br>
clarification.
<br>
<p>Bert
<br>
<p><span class="quotelev1">&gt; The issue you  
</span><br>
<span class="quotelev1">&gt; are seeing is a known issue if you use Autoconf 2.60 or higher to  
</span><br>
<span class="quotelev1">&gt; create the build system for Open MPI 1.1.x.  The release tarball is  
</span><br>
<span class="quotelev1">&gt; built with Autoconf 2.59 and I just checked to verify that 1.1.4 was  
</span><br>
<span class="quotelev1">&gt; in fact using AC 2.59 and not creating the bad datadir defines.  You  
</span><br>
<span class="quotelev1">&gt; might want to make sure that some part of your build was not  
</span><br>
<span class="quotelev1">&gt; rerunning autoconf in the release source code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1308.php">Brian Barrett: "Re: [OMPI devel] installed wrappers"</a>
<li><strong>Previous message:</strong> <a href="1306.php">Brian Barrett: "Re: [OMPI devel] build problem with 1.1.4"</a>
<li><strong>In reply to:</strong> <a href="1306.php">Brian Barrett: "Re: [OMPI devel] build problem with 1.1.4"</a>
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
