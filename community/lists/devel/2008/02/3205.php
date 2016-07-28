<?
$subject_val = "Re: [OMPI devel] C++ build failures";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 09:23:45 2008" -->
<!-- isoreceived="20080212142345" -->
<!-- sent="Tue, 12 Feb 2008 09:23:42 -0500" -->
<!-- isosent="20080212142342" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] C++ build failures" -->
<!-- id="47B1ABEE.4010804_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="082645D7-1F6E-47CA-A7A6-888F3B75126A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] C++ build failures<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-12 09:23:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3206.php">Jeff Squyres: "Re: [OMPI devel] C++ build failures"</a>
<li><strong>Previous message:</strong> <a href="3204.php">Josh Hursey: "Re: [OMPI devel] VT integration: make distclean problem"</a>
<li><strong>In reply to:</strong> <a href="3202.php">Jeff Squyres: "[OMPI devel] C++ build failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3206.php">Jeff Squyres: "Re: [OMPI devel] C++ build failures"</a>
<li><strong>Reply:</strong> <a href="3206.php">Jeff Squyres: "Re: [OMPI devel] C++ build failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just talked to Jeff about this. The problem was that on Sif we use 
<br>
--enable-visibility, and apparently the new c++ bindings access 
<br>
ompi_errhandler_create, which was not OMPI_DECLSPEC'd. Jeff will fix 
<br>
this soon.
<br>
<p>Tim
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I'm a little concerned about the C++ test build failures from last  
</span><br>
<span class="quotelev1">&gt; night:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/mtt/index.php?do_redir=530">http://www.open-mpi.org/mtt/index.php?do_redir=530</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They are likely due to the C++ changes that came in over the weekend,  
</span><br>
<span class="quotelev1">&gt; but they *only* showed up at IU, which is somewhat odd.  I'm trying to  
</span><br>
<span class="quotelev1">&gt; replicate now (doing a fresh build of the trunk and will build the  
</span><br>
<span class="quotelev1">&gt; tests that failed for you), but I'm kinda guessing it's going to work  
</span><br>
<span class="quotelev1">&gt; fine on my platforms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IU: do you have any idea what caused these failures?  Does sif have a  
</span><br>
<span class="quotelev1">&gt; newer compiler that is somehow picking up on a latent bug that we  
</span><br>
<span class="quotelev1">&gt; missed in the C++ stuff?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3206.php">Jeff Squyres: "Re: [OMPI devel] C++ build failures"</a>
<li><strong>Previous message:</strong> <a href="3204.php">Josh Hursey: "Re: [OMPI devel] VT integration: make distclean problem"</a>
<li><strong>In reply to:</strong> <a href="3202.php">Jeff Squyres: "[OMPI devel] C++ build failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3206.php">Jeff Squyres: "Re: [OMPI devel] C++ build failures"</a>
<li><strong>Reply:</strong> <a href="3206.php">Jeff Squyres: "Re: [OMPI devel] C++ build failures"</a>
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
