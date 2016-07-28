<?
$subject_val = "Re: [OMPI devel] RFC: Well-known mca parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 13:09:35 2014" -->
<!-- isoreceived="20140429170935" -->
<!-- sent="Tue, 29 Apr 2014 17:09:34 +0000" -->
<!-- isosent="20140429170934" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Well-known mca parameters" -->
<!-- id="5CB5A30A-1EAC-4E6C-AD47-C4C4CA494162_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAO1KybS6iMyOaQmwjydGJZu5TV9p3D=BiLrfpo9RbksikW3Cg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Well-known mca parameters<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-29 13:09:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14652.php">Dave Goodell (dgoodell): "Re: [OMPI devel] MPI_Comm_create_group()"</a>
<li><strong>Previous message:</strong> <a href="14650.php">Edgar Gabriel: "Re: [OMPI devel] Wrong Endianness in Open MPI for external32 representation"</a>
<li><strong>In reply to:</strong> <a href="14644.php">Mike Dubman: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To close the loop for the web archives: we talked about this today on the call.  The consensus was to add a new MCA var type, like Ralph suggested.  It'll be a string, so you can put whatever you want in there.
<br>
<p>And they'll prettyprint/parsable print with &quot;version&quot; or something obvious in there -- something to differentiate them from regular MCA string vars.
<br>
<p><p><p>On Apr 29, 2014, at 12:33 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev4">&gt; &gt;&gt;&gt; I didn't see a reply to my question about the primary use case for this being for scripts, and therefore a slightly-more-than-trivial regexp...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The primary use-case:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; collect system related info w/ help of ompi_info and validate cluster setup is according to site/vendor rules.
</span><br>
<span class="quotelev1">&gt; Can be done manually with help of command line or with script provided by sysadmin or vendor.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 29, 2014 at 1:12 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Apr 27, 2014, at 9:22 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Changing/updating architecture to fulfill this specific use-case seems a overkill. The arch is powerfull to resolve it w/o adding specific class (IMHO).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Nobody would be changing the architecture of the system. All I'm suggesting is adding a new variable type. Something like &quot;MCA_BASE_VAR_TYPE_VERSION  _STRING&quot; instead of &quot;MCA_BASE_VAR_TYPE_STRING&quot;. This eliminates the need to force a standard param string format, and may provide a cleaner mechanism.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph and I chatted about this on the phone today.  In principle, I'm not opposed to this.  Indeed, it seems to have the added benefit that the OPAL/ORTE/OMPI/OSHMEM version numbers themselves could also be registered with this type (thereby removing some special case code from ompi_info).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, I just didn't want us to exclude the simple possibility first: using an MCA parameter naming convention.  I didn't see a reply to my question about the primary use case for this being for scripts, and therefore a slightly-more-than-trivial regexp...
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14643.php">http://www.open-mpi.org/community/lists/devel/2014/04/14643.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14644.php">http://www.open-mpi.org/community/lists/devel/2014/04/14644.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14652.php">Dave Goodell (dgoodell): "Re: [OMPI devel] MPI_Comm_create_group()"</a>
<li><strong>Previous message:</strong> <a href="14650.php">Edgar Gabriel: "Re: [OMPI devel] Wrong Endianness in Open MPI for external32 representation"</a>
<li><strong>In reply to:</strong> <a href="14644.php">Mike Dubman: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
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
