<?
$subject_val = "Re: [OMPI devel] debugger confusion";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  8 10:37:50 2011" -->
<!-- isoreceived="20111108153750" -->
<!-- sent="Tue, 8 Nov 2011 10:37:45 -0500" -->
<!-- isosent="20111108153745" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] debugger confusion" -->
<!-- id="013DC1C6-CD73-4FD5-8CF8-3D00FB4F6E36_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C0D0271C-4720-47EF-A766-93299B61D836_at_eecs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-08 10:37:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9947.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>Previous message:</strong> <a href="9945.php">Nathan T. Hjelm: "Re: [OMPI devel] Remote key sizes"</a>
<li><strong>In reply to:</strong> <a href="9943.php">George Bosilca: "Re: [OMPI devel] debugger confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9947.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>Reply:</strong> <a href="9947.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 8, 2011, at 10:25 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; However, based on what we have in the trunk today, Open MPI doesn't follow that document. As Ralph pinpointed it, the current version work with several tools (tv, stat, padb) as is, so that means the tools do not really follow that document either. 
</span><br>
<p>This is not quite accurate.
<br>
<p>What the tools did over the past decade was make it so that they work with the 5-6 MPIR variants that are out there.  So yes, they work with OMPI, but they work with the others who aren't quite &quot;right,&quot; either.  Because before this, there was no central definition of &quot;right.&quot;
<br>
<p>The intent of the document was to make that central definition of &quot;right&quot; and gradually have everyone move to it.  AFAIK, all the tools have been updated to work with the &quot;right&quot; definition of MPIR.
<br>
<p>Keep in mind that this is pretty much the same rationale as to why MPI still supports functions like MPI_ATTR_SET: even though it's deprecated, there's apps out there that still use it and will take a long time to adapt.  Hence, the tools will keep supporting the &quot;old&quot; / &quot;not-quite-right&quot; definitions of MPIR for a long time.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="9947.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>Previous message:</strong> <a href="9945.php">Nathan T. Hjelm: "Re: [OMPI devel] Remote key sizes"</a>
<li><strong>In reply to:</strong> <a href="9943.php">George Bosilca: "Re: [OMPI devel] debugger confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9947.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>Reply:</strong> <a href="9947.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
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
