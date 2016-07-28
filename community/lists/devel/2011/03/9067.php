<?
$subject_val = "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 15 15:54:48 2011" -->
<!-- isoreceived="20110315195448" -->
<!-- sent="Tue, 15 Mar 2011 15:54:36 -0400" -->
<!-- isosent="20110315195436" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c" -->
<!-- id="3EE6593D-B857-4C24-B625-ADFC312C72A1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D7FA457.1020303_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-15 15:54:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9068.php">Ralph Castain: "[OMPI devel] Old Linux kernels"</a>
<li><strong>Previous message:</strong> <a href="9066.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>In reply to:</strong> <a href="9065.php">Terry Dontje: "[OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9073.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>Reply:</strong> <a href="9073.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Which Linux / OFED are you using?
<br>
<p>I am not seeing this with vanilla RHEL5.
<br>
<p><p><p>On Mar 15, 2011, at 1:39 PM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; While compiling btl_openib_connect_oob.c I am getting identifier redeclared: ib_gid_t.  Looks like infiniband/mad.h defines this and then iba/types.h tries to redefine it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am on Linux compiling with gcc.  Is anyone else seeing the same issue or am I possibly dealing with some old s/w?
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
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
<li><strong>Next message:</strong> <a href="9068.php">Ralph Castain: "[OMPI devel] Old Linux kernels"</a>
<li><strong>Previous message:</strong> <a href="9066.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>In reply to:</strong> <a href="9065.php">Terry Dontje: "[OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9073.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
<li><strong>Reply:</strong> <a href="9073.php">Terry Dontje: "Re: [OMPI devel] trunk not compiling for btl_openib_connect_oob.c"</a>
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
