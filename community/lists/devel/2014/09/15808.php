<?
$subject_val = "Re: [OMPI devel] clang alignment warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 11 08:34:11 2014" -->
<!-- isoreceived="20140911123411" -->
<!-- sent="Thu, 11 Sep 2014 12:34:10 +0000" -->
<!-- isosent="20140911123410" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] clang alignment warnings" -->
<!-- id="0651C3B0-9ED4-496D-9DDC-EAE76C6E799A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkVAJr5AeUwgeuSspTMoRvr399DY330D02WT8FGs390yBg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] clang alignment warnings<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-11 08:34:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15809.php">Ralph Castain: "Re: [OMPI devel] clang alignment warnings"</a>
<li><strong>Previous message:</strong> <a href="15807.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Github migration plan"</a>
<li><strong>In reply to:</strong> <a href="15800.php">George Bosilca: "Re: [OMPI devel] clang alignment warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15809.php">Ralph Castain: "Re: [OMPI devel] clang alignment warnings"</a>
<li><strong>Reply:</strong> <a href="15809.php">Ralph Castain: "Re: [OMPI devel] clang alignment warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I re-ran the test, just to ensure I had the line numbers right (I have some local edits in my SVN copy):
<br>
<p>-----
<br>
mca_base_var.c:681:18: runtime error: member access within misaligned address 0x2aaaab338409 for type 'mca_base_var_storage_t', which requires 8 byte alignment
<br>
-----
<br>
<p>This is referring to the bool conversion.  According to opal_config.h, bool has an alignment of 1.  The ...8409 address is definitely 1-byte aligned.  :-)
<br>
<p>And this one:
<br>
<p>-----
<br>
mca_base_var.c:668:18: runtime error: member access within misaligned address 0x2aaaabc90ccc for type 'mca_base_var_storage_t', which requires 8 byte alignment
<br>
-----
<br>
<p>is referring to the int conversion.  According to opal_config, ints are 4-byte aligned.  The ...0ccc address is 4-byte aligned.
<br>
<p>Note that I also get similar warnings about OB1:
<br>
<p>-----
<br>
pml_ob1_hdr.h:462:17: runtime error: member access within misaligned address 0x2aaabb35f2cc for type 'mca_pml_ob1_hdr_t' (aka 'union mca_pml_ob1_hdr_t'), which requires 8 byte alignment
<br>
-----
<br>
<p>mca_pml_ob1_hdr_t is also a union.
<br>
<p>Is this a bug in the clang alignment sanitizer?
<br>
<p><p><p><p>On Sep 10, 2014, at 4:41 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It complains about 0x2aaaab1b1ed9 being misaligned which seems as a valid complaint. What is the dst value when this trigger? What is var-&gt;mbv_storage?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Sep 11, 2014 at 5:29 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Sep 10, 2014, at 4:23 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regardless, what do we do about this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To answer my own question, I guess we can replace:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    dst-&gt;intval = int_value
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    int *bogus = (int*) dst;
</span><br>
<span class="quotelev1">&gt;    *bogus = int_value;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and do a similar thing for the bool.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Seems kludgey, and kinda defeats the point of having a union, though.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15799.php">http://www.open-mpi.org/community/lists/devel/2014/09/15799.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15800.php">http://www.open-mpi.org/community/lists/devel/2014/09/15800.php</a>
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
<li><strong>Next message:</strong> <a href="15809.php">Ralph Castain: "Re: [OMPI devel] clang alignment warnings"</a>
<li><strong>Previous message:</strong> <a href="15807.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Github migration plan"</a>
<li><strong>In reply to:</strong> <a href="15800.php">George Bosilca: "Re: [OMPI devel] clang alignment warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15809.php">Ralph Castain: "Re: [OMPI devel] clang alignment warnings"</a>
<li><strong>Reply:</strong> <a href="15809.php">Ralph Castain: "Re: [OMPI devel] clang alignment warnings"</a>
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
