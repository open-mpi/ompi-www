<?
$subject_val = "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 14:03:20 2012" -->
<!-- isoreceived="20120523180320" -->
<!-- sent="Wed, 23 May 2012 18:03:16 +0000" -->
<!-- isosent="20120523180316" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release" -->
<!-- id="DB2ACE10-4117-4A40-9AD2-E11DB26AA088_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E8E3890-E730-41B1-9DAA-B7A9CF9E60AB_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-23 14:03:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11010.php">Rolf vandeVaart: "[OMPI devel] Modified files after autogen"</a>
<li><strong>Previous message:</strong> <a href="11008.php">Gunter, David O: "[OMPI devel] Unable to set flags using platform files in the 1.6 release"</a>
<li><strong>In reply to:</strong> <a href="11008.php">Gunter, David O: "[OMPI devel] Unable to set flags using platform files in the 1.6 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11012.php">Gunter, David O: "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release"</a>
<li><strong>Reply:</strong> <a href="11012.php">Gunter, David O: "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send some output showing that those flags aren't passed through, like some output from &quot;make V=1&quot; and or from config.log?
<br>
<p>Offhand, I don't know if we ever formally supported setting env variables other than enable and with flag variables in the platform files...?
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On May 23, 2012, at 12:49 PM, &quot;Gunter, David O&quot; &lt;dog_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to set LDFLAGS, CFLAGS, etc, in a platform file but the 1.6 release does not seem to pick these up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the tail end of one of our platform files, for building with the latest PGI compilers:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; LDFLAGS=&quot;-nomp -lnuma&quot;
</span><br>
<span class="quotelev1">&gt; CFLAGS=&quot;-I/opt/panfs/include&quot;
</span><br>
<span class="quotelev1">&gt; CXXFLAGS=&quot;-I/opt/panfs/include&quot;
</span><br>
<span class="quotelev1">&gt; FCFLAGS=&quot;-I/opt/panfs/include&quot;
</span><br>
<span class="quotelev1">&gt; FFLAGS=&quot;-I/opt/panfs/include&quot;
</span><br>
<span class="quotelev1">&gt; CCASFLAGS=&quot;-I/opt/panfs/include&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same platform file will configure the 1.4.5 release just fine but does not work with 1.6. If I set these variables in my environment and then run configure, it works just fine - as expected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anyone else noticed this behavior?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -david
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; David Gunter
</span><br>
<span class="quotelev1">&gt; HPC-3: Infrastructure Team
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
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
<li><strong>Next message:</strong> <a href="11010.php">Rolf vandeVaart: "[OMPI devel] Modified files after autogen"</a>
<li><strong>Previous message:</strong> <a href="11008.php">Gunter, David O: "[OMPI devel] Unable to set flags using platform files in the 1.6 release"</a>
<li><strong>In reply to:</strong> <a href="11008.php">Gunter, David O: "[OMPI devel] Unable to set flags using platform files in the 1.6 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11012.php">Gunter, David O: "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release"</a>
<li><strong>Reply:</strong> <a href="11012.php">Gunter, David O: "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release"</a>
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
