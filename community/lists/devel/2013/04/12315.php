<?
$subject_val = "Re: [OMPI devel] mpi_param_check value changed to false";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 26 20:13:06 2013" -->
<!-- isoreceived="20130427001306" -->
<!-- sent="Fri, 26 Apr 2013 17:12:59 -0700" -->
<!-- isosent="20130427001259" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpi_param_check value changed to false" -->
<!-- id="AB3873AA-439D-4294-B612-8DE87EB512C8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4B1C49BD_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpi_param_check value changed to false<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-26 20:12:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12316.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12314.php">Jeff Squyres (jsquyres): "[OMPI devel] mpi_param_check value changed to false"</a>
<li><strong>In reply to:</strong> <a href="12314.php">Jeff Squyres (jsquyres): "[OMPI devel] mpi_param_check value changed to false"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Simply a typo - fixed in r28407
<br>
<p>On Apr 26, 2013, at 4:04 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It looks like the value of the MCA param mpi_param_check was flipped from true to false in r28236, the recent MCA param update.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nathan -- did you mean to flip this value?  It means that we're running without MPI API param checking by default, which is a change from all prior versions of Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Changing the default back is as simple as deleting line 84 in ompi/runtime/ompi_mpi_params.c.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12316.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12314.php">Jeff Squyres (jsquyres): "[OMPI devel] mpi_param_check value changed to false"</a>
<li><strong>In reply to:</strong> <a href="12314.php">Jeff Squyres (jsquyres): "[OMPI devel] mpi_param_check value changed to false"</a>
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
