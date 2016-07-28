<?
$subject_val = "Re: [OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 31 18:18:28 2013" -->
<!-- isoreceived="20130131231828" -->
<!-- sent="Thu, 31 Jan 2013 23:18:13 +0000" -->
<!-- isosent="20130131231813" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;pml_ob1_sendreq.c:188 FATAL&amp;quot; errors" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CC0A34_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B0609454-8103-400C-AAA7-521EE154FCA2_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-31 18:18:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12095.php">Nathan Hjelm: "[OMPI devel] RFC: shiny new variable subsystem"</a>
<li><strong>Previous message:</strong> <a href="12093.php">Ralph Castain: "Re: [OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors"</a>
<li><strong>In reply to:</strong> <a href="12093.php">Ralph Castain: "Re: [OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The show help bit doesn't look right -- opal_output on stream 0 will put the hostname and PID as the prefix.
<br>
<p><p>On Jan 31, 2013, at 6:13 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; I fixed it so that &quot;abort&quot; really aborts the job - see r28004
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 31, 2013, at 2:02 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm seeing a LOT of these on errors on the trunk:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   pml_ob1_sendreq.c:188 FATAL
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The job then hangs.  I see this starting at np=6 across 2 nodes, using only the TCP and SM BTLs.  This is not happening on v1.6 or v1.7.  Line 188 in pml_ob1_sendreq.c is when someone calls mca_pml_ob1_match_completion_free() with a non-OMPI_SUCCESS status.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *** Is anyone else seeing this?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My configure is very straightforward:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   ./configure --prefix=/home/jsquyres/bogus --disable-dlopen --disable-vt
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I notice that this is only happening in optimized builds; it is not happening when I do a normal developer / debug build.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12095.php">Nathan Hjelm: "[OMPI devel] RFC: shiny new variable subsystem"</a>
<li><strong>Previous message:</strong> <a href="12093.php">Ralph Castain: "Re: [OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors"</a>
<li><strong>In reply to:</strong> <a href="12093.php">Ralph Castain: "Re: [OMPI devel] &quot;pml_ob1_sendreq.c:188 FATAL&quot; errors"</a>
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
