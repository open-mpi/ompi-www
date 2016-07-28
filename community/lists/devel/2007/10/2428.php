<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 11 17:17:53 2007" -->
<!-- isoreceived="20071011211753" -->
<!-- sent="Thu, 11 Oct 2007 17:17:41 -0400" -->
<!-- isosent="20071011211741" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts" -->
<!-- id="F26A966C-C064-4149-817D-D86B015FBFAE_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C333F715.FA14%rlgraham_at_ornl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-11 17:17:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2429.php">Jeff Squyres: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<li><strong>Previous message:</strong> <a href="2427.php">Josh Aune: "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<li><strong>In reply to:</strong> <a href="2425.php">Richard Graham: "[OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2429.php">Jeff Squyres: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<li><strong>Reply:</strong> <a href="2429.php">Jeff Squyres: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know that [with few exception] nobody cares about our Windows  
<br>
support, but we finally have a working Open MPI software stack there  
<br>
and this approach will definitively break our &quot;Unix like&quot;  
<br>
friendliness on Windows.
<br>
<p>As a temporary solution and until we can figure out how many people  
<br>
use mpicc (and friends) on Windows, I suggest we keep around the old  
<br>
wrapper compilers, together with the new shell scripts.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 11, 2007, at 3:51 PM, Richard Graham wrote:
<br>
<p><span class="quotelev1">&gt; What:  Change the mpicc/mpicxx/mpif77/mpif90 from being binaries to  
</span><br>
<span class="quotelev1">&gt; being
</span><br>
<span class="quotelev1">&gt; shell scripts
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why: Our build environment assumes that wrapper compilers will use  
</span><br>
<span class="quotelev1">&gt; the same
</span><br>
<span class="quotelev1">&gt; binary format that the Open MPI libraries do.  In cross-compile  
</span><br>
<span class="quotelev1">&gt; environment,
</span><br>
<span class="quotelev1">&gt; the MPI wrapper compilers will run on the front-end and need to run  
</span><br>
<span class="quotelev1">&gt; on the
</span><br>
<span class="quotelev1">&gt; front-end, and not the back-end.  Jeff has suggested this as the  
</span><br>
<span class="quotelev1">&gt; simplest
</span><br>
<span class="quotelev1">&gt; way to build back-end libraries, and front-end wrapper-compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When: within the next several weeks (for the 1.3 release)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Timeout: 10/19/2007
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rich
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2428/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2429.php">Jeff Squyres: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<li><strong>Previous message:</strong> <a href="2427.php">Josh Aune: "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<li><strong>In reply to:</strong> <a href="2425.php">Richard Graham: "[OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2429.php">Jeff Squyres: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<li><strong>Reply:</strong> <a href="2429.php">Jeff Squyres: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
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
