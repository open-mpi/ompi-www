<?
$subject_val = "Re: [OMPI devel] C++ build failures";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 09:33:11 2008" -->
<!-- isoreceived="20080212143311" -->
<!-- sent="Tue, 12 Feb 2008 09:32:50 -0500" -->
<!-- isosent="20080212143250" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] C++ build failures" -->
<!-- id="142FBFE8-D33B-4813-B59A-E1852ADC5521_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47B1ABEE.4010804_at_cs.indiana.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-12 09:32:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3207.php">Josh Hursey: "Re: [OMPI devel] 1.3 Release schedule and contents"</a>
<li><strong>Previous message:</strong> <a href="3205.php">Tim Prins: "Re: [OMPI devel] C++ build failures"</a>
<li><strong>In reply to:</strong> <a href="3205.php">Tim Prins: "Re: [OMPI devel] C++ build failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I filed a ticket: <a href="https://svn.open-mpi.org/trac/ompi/ticket/1213">https://svn.open-mpi.org/trac/ompi/ticket/1213</a>
<br>
<p>Am looking into the problem, but ran into the memchecker trunk build  
<br>
breakage first (<a href="https://svn.open-mpi.org/trac/ompi/ticket/1211">https://svn.open-mpi.org/trac/ompi/ticket/1211</a>).  #$%#@ 
<br>
%#@$%....
<br>
<p><p><p>On Feb 12, 2008, at 9:23 AM, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; I just talked to Jeff about this. The problem was that on Sif we use
</span><br>
<span class="quotelev1">&gt; --enable-visibility, and apparently the new c++ bindings access
</span><br>
<span class="quotelev1">&gt; ompi_errhandler_create, which was not OMPI_DECLSPEC'd. Jeff will fix
</span><br>
<span class="quotelev1">&gt; this soon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm a little concerned about the C++ test build failures from last
</span><br>
<span class="quotelev2">&gt;&gt; night:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mtt/index.php?do_redir=530">http://www.open-mpi.org/mtt/index.php?do_redir=530</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; They are likely due to the C++ changes that came in over the weekend,
</span><br>
<span class="quotelev2">&gt;&gt; but they *only* showed up at IU, which is somewhat odd.  I'm trying  
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; replicate now (doing a fresh build of the trunk and will build the
</span><br>
<span class="quotelev2">&gt;&gt; tests that failed for you), but I'm kinda guessing it's going to work
</span><br>
<span class="quotelev2">&gt;&gt; fine on my platforms.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IU: do you have any idea what caused these failures?  Does sif have a
</span><br>
<span class="quotelev2">&gt;&gt; newer compiler that is somehow picking up on a latent bug that we
</span><br>
<span class="quotelev2">&gt;&gt; missed in the C++ stuff?
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
<li><strong>Next message:</strong> <a href="3207.php">Josh Hursey: "Re: [OMPI devel] 1.3 Release schedule and contents"</a>
<li><strong>Previous message:</strong> <a href="3205.php">Tim Prins: "Re: [OMPI devel] C++ build failures"</a>
<li><strong>In reply to:</strong> <a href="3205.php">Tim Prins: "Re: [OMPI devel] C++ build failures"</a>
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
