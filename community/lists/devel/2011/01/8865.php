<?
$subject_val = "Re: [OMPI devel] Back-porting components from SVN trunk to v1.5 branch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 13 07:46:35 2011" -->
<!-- isoreceived="20110113124635" -->
<!-- sent="Thu, 13 Jan 2011 07:46:30 -0500" -->
<!-- isosent="20110113124630" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Back-porting components from SVN trunk to v1.5 branch" -->
<!-- id="7E18235F-DCBB-4BB2-9861-3B64A21020E1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C1B123B-5954-4016-B2DC-DF4FBCEF1F7E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Back-porting components from SVN trunk to v1.5 branch<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-13 07:46:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8866.php">Pascal Deveze: "Re: [OMPI devel] Problem with attributes attached to communicators"</a>
<li><strong>Previous message:</strong> <a href="8864.php">Nysal Jan: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<li><strong>In reply to:</strong> <a href="8863.php">Ralph Castain: "Re: [OMPI devel] Back-porting components from SVN trunk to v1.5 branch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For the moment, that's true.  
<br>
<p>Abhishek's working on bringing over SOS and the notifier...
<br>
<p><p>On Jan 12, 2011, at 5:57 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; You also have to remove all references to OPAL SOS...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 12, 2011, at 1:25 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I back-ported the trunk's paffinity/hwloc component to the v1.5 branch today.  Here's the things that you need to look out for if you undertake back-porting a component from the trunk to the v1.5 branch...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Remember: the whole autogen.pl infrastructure was not (and will not be) ported to the v1.5 branch.  So there's some things that you need to change in your component's build system:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - You need to add a configure.params file
</span><br>
<span class="quotelev2">&gt;&gt; - In your component's configure.m4 file:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    - Rename your m4 define from MCA_&lt;project&gt;_&lt;fw&gt;_&lt;component&gt;_CONFIG to MCA_&lt;fw&gt;_&lt;component&gt;_CONFIG
</span><br>
<span class="quotelev2">&gt;&gt;    - Same for _POST_CONFIG
</span><br>
<span class="quotelev2">&gt;&gt;    - Remove AC_CONFIG_FILES (they should now be in configure.params)
</span><br>
<span class="quotelev2">&gt;&gt;    - We renamed a few m4 macros on the trunk; e.g., it's OPAL_VAR_SCOPE_PUSH on the trunk and OMPI_VAR_SCOPE_PUSH on v1.5.  So if you run &quot;configure&quot; and it says that commands are not found and they're un-expanded m4 names, look to see if they have changed names.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - In your component's Makefile.am:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    - Rename any &quot;if&quot; variables from the form MCA_BUILD_&lt;project&gt;_&lt;fw&gt;_&lt;component&gt;_DSO to OMPI_BUILD_&lt;fw&gt;_&lt;COMPONENT&gt;_DSO
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think those are the main points to watch out for.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8866.php">Pascal Deveze: "Re: [OMPI devel] Problem with attributes attached to communicators"</a>
<li><strong>Previous message:</strong> <a href="8864.php">Nysal Jan: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<li><strong>In reply to:</strong> <a href="8863.php">Ralph Castain: "Re: [OMPI devel] Back-porting components from SVN trunk to v1.5 branch"</a>
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
