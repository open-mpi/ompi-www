<?
$subject_val = "Re: [OMPI devel] hcoll destruction via MPI attribute";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 11:36:48 2014" -->
<!-- isoreceived="20140110163648" -->
<!-- sent="Fri, 10 Jan 2014 16:36:47 +0000" -->
<!-- isosent="20140110163647" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hcoll destruction via MPI attribute" -->
<!-- id="90AB5285-9A7C-432D-8B67-64309F9585BC_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="261EB0E6-14E6-4195-9EEF-D01ABD8EFF10_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] hcoll destruction via MPI attribute<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 11:36:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13706.php">Nathan Hjelm: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>Previous message:</strong> <a href="13704.php">Adrian Reber: "[OMPI devel] callback debugging"</a>
<li><strong>In reply to:</strong> <a href="13703.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 10, 2014, at 10:57 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This is not the same example as before. This example is correct, it does not rely on the send being eagerly completed.
</span><br>
<p>I know.  :-)
<br>
<p>Just to tie up this thread for the web archives:
<br>
<p><span class="quotelev2">&gt;&gt; My point (which I guess I didn't make well) is that COMM_FREE is collective, which we all know does not necessarily mean synchronizing.  If hcoll teardown is going to add synchronization, there could be situations that might be dangerous (if OMPI doesn't already synchronize during COMM_FREE, which is why I asked the question).
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
<li><strong>Next message:</strong> <a href="13706.php">Nathan Hjelm: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>Previous message:</strong> <a href="13704.php">Adrian Reber: "[OMPI devel] callback debugging"</a>
<li><strong>In reply to:</strong> <a href="13703.php">George Bosilca: "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
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
