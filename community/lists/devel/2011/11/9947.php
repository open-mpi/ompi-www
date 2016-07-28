<?
$subject_val = "Re: [OMPI devel] debugger confusion";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  8 10:49:41 2011" -->
<!-- isoreceived="20111108154941" -->
<!-- sent="Tue, 8 Nov 2011 08:49:33 -0700" -->
<!-- isosent="20111108154933" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] debugger confusion" -->
<!-- id="9D530A67-DF3A-406C-9EE7-FA44E81D8A61_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="013DC1C6-CD73-4FD5-8CF8-3D00FB4F6E36_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] debugger confusion<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-08 10:49:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9948.php">Larry Baker: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="9946.php">Jeff Squyres: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>In reply to:</strong> <a href="9946.php">Jeff Squyres: "Re: [OMPI devel] debugger confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9935.php">Ashley Pittman: "Re: [OMPI devel] debugger confusion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 8, 2011, at 8:37 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Nov 8, 2011, at 10:25 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, based on what we have in the trunk today, Open MPI doesn't follow that document. As Ralph pinpointed it, the current version work with several tools (tv, stat, padb) as is, so that means the tools do not really follow that document either. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is not quite accurate.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What the tools did over the past decade was make it so that they work with the 5-6 MPIR variants that are out there.  So yes, they work with OMPI, but they work with the others who aren't quite &quot;right,&quot; either.  Because before this, there was no central definition of &quot;right.&quot;
</span><br>
<p>Agreed, though with a slight variation. Not only were the MPIs variant, but so are the tools. Some tools support various MPIR extensions and combinations of features, and others don't. That was the motivation behind some of us &quot;pushing&quot; the tool vendors to create a &quot;standard&quot; MPIR definition - it was to get all those extensions defined. The base stuff was always pretty common.
<br>
<p>And yes - I was one of those &quot;twisting&quot; their arms because I got tired of dealing with all the bloody tool interface variations, providing special code to support someone's pet extension, etc.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The intent of the document was to make that central definition of &quot;right&quot; and gradually have everyone move to it.  AFAIK, all the tools have been updated to work with the &quot;right&quot; definition of MPIR.
</span><br>
<p>While I think people may generally support some of the basic MPIR definitions, I haven't seen movement to supporting the full range - but maybe I've missed it. I haven't been following it as much over the last year or so.
<br>
<p>Even if they have, though, there is no way for us to control what release someone is using. So we still have to support both the old and the new variations for some time.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Keep in mind that this is pretty much the same rationale as to why MPI still supports functions like MPI_ATTR_SET: even though it's deprecated, there's apps out there that still use it and will take a long time to adapt.  Hence, the tools will keep supporting the &quot;old&quot; / &quot;not-quite-right&quot; definitions of MPIR for a long time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="9948.php">Larry Baker: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="9946.php">Jeff Squyres: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>In reply to:</strong> <a href="9946.php">Jeff Squyres: "Re: [OMPI devel] debugger confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9935.php">Ashley Pittman: "Re: [OMPI devel] debugger confusion"</a>
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
