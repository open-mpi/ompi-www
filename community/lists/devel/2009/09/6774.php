<?
$subject_val = "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 10:05:04 2009" -->
<!-- isoreceived="20090904140504" -->
<!-- sent="Fri, 04 Sep 2009 15:59:13 +0200" -->
<!-- isosent="20090904135913" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC - &amp;quot;system-wide-only&amp;quot; MCA parameters" -->
<!-- id="1252072753.2636.289.camel_at_frecb000730.frec.bull.fr" -->
<!-- inreplyto="A632D11D-5F2E-488C-92EE-A200B72BED27_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters<br>
<strong>From:</strong> Nadia Derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 09:59:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6775.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6773.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="6771.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6775.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Reply:</strong> <a href="6775.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2009-09-04 at 07:50 -0600, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Let me point out the obvious since this has plagued us at LANL with  
</span><br>
<span class="quotelev1">&gt; regard to this concept. If a user wants to do something different, all  
</span><br>
<span class="quotelev1">&gt; they have to do is download and build their own copy of OMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Amazingly enough, that is exactly what they do. When we build our  
</span><br>
<span class="quotelev1">&gt; production versions, we actually &quot;no-build&quot; modules we don't want them  
</span><br>
<span class="quotelev1">&gt; using (e.g., certain BTL's that use privileged network interfaces) so  
</span><br>
<span class="quotelev1">&gt; even MCA params won't let them do something undesirable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No good - they just try until they realize it won't work, then  
</span><br>
<span class="quotelev1">&gt; download and build their own version...and merrily hose the system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My point here: this concept can help, but it should in no way be  
</span><br>
<span class="quotelev1">&gt; viewed as a solution to the problem you are trying to solve. It is at  
</span><br>
<span class="quotelev1">&gt; best a minor obstacle as we made it very simple for a user to  
</span><br>
<span class="quotelev1">&gt; circumvent such measures.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which is why I never made the effort to actually implement what was in  
</span><br>
<span class="quotelev1">&gt; that ticket. It was decided that it really wouldn't help us here, and  
</span><br>
<span class="quotelev1">&gt; would only result in further encouraging user-owned builds.
</span><br>
<p>Ralph,
<br>
<p>Let's forget those people who intentionally do bad things: it's true
<br>
that they will always find a way to bypass whatever has been done...
<br>
<p>We are not talking about security here, but there are client sites where
<br>
people do not want to care about some mca params values and where those
<br>
system-wide params should not be *unintentionally* set to different
<br>
values.
<br>
<p>Regards,
<br>
Nadia
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 4, 2009, at 12:42 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 4, 2009, at 8:26 AM, Nadia Derbey wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Can the file name ( openmpi-priv-mca-params.conf ) also be  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configurable ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No, it isn't, presently, but this can be changed if needed.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If it's configurable, it must be configurable at configure time --  
</span><br>
<span class="quotelev2">&gt; &gt; not run time -- otherwise, a user could just give a different  
</span><br>
<span class="quotelev2">&gt; &gt; filename at runtime and get around all the &quot;privileged&quot; values.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; 
</span><br>
<pre>
-- 
Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6775.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Previous message:</strong> <a href="6773.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="6771.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6775.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
<li><strong>Reply:</strong> <a href="6775.php">Ralph Castain: "Re: [OMPI devel] RFC - &quot;system-wide-only&quot; MCA parameters"</a>
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
