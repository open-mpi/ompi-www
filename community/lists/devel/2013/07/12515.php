<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  1 12:15:13 2013" -->
<!-- isoreceived="20130701161513" -->
<!-- sent="Mon, 1 Jul 2013 16:14:48 +0000" -->
<!-- isosent="20130701161448" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist" -->
<!-- id="CDF702AE.11CEF%bwbarre_at_sandia.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8EDEBDDE2C39D447A738659597BBB63A1AC333B9_at_MTIDAG02.mtl.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-01 12:14:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12516.php">Vasiliy: "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
<li><strong>Previous message:</strong> <a href="12514.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] aclocal-1.14:	error:	../../config/autogen_found_items.m4:274:	file	'opal/mca/backtrace/configure.m4' does not exist"</a>
<li><strong>In reply to:</strong> <a href="12513.php">Joshua Ladd: "Re: [OMPI devel] aclocal-1.14: error:	../../config/autogen_found_items.m4:274: file	'opal/mca/backtrace/configure.m4' does not exist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12507.php">Vasiliy: "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/1/13 9:52 AM, &quot;Joshua Ladd&quot; &lt;joshual_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;I think we (MLNX) are getting corrupted/truncated checkouts. Lately, I
</span><br>
<span class="quotelev1">&gt;have been running into the following error on our internal systems when
</span><br>
<span class="quotelev1">&gt;doing a secure checkout:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;svn co <a href="https://svn.open-mpi.org/svn/ompi/trunk">https://svn.open-mpi.org/svn/ompi/trunk</a> ompi-trunk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;svn: E175002: REPORT of '/svn/ompi/!svn/vcc/default': Could not read
</span><br>
<span class="quotelev1">&gt;response body: Secure connection truncated (<a href="https://svn.open-mpi.org">https://svn.open-mpi.org</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Googling around, seems like a problem with our SVN server timing out. Has
</span><br>
<span class="quotelev1">&gt;anyone in the community seen this before?
</span><br>
<p>We (at Sandia) see this all the time.  Our proxy server gets overloaded
<br>
(or bored, hard to tell) and drops the persistent connection SVN creates
<br>
with the Apache server at IU.  SVN doesn't try to re-establish the
<br>
connection once it drops, so it aborts.  I've never had a case where svn
<br>
up (or multiple svn ups) in the checkout didn't resolve the problem
<br>
eventually.
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories

</pre>
<p>
<p><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12515/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12516.php">Vasiliy: "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
<li><strong>Previous message:</strong> <a href="12514.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] aclocal-1.14:	error:	../../config/autogen_found_items.m4:274:	file	'opal/mca/backtrace/configure.m4' does not exist"</a>
<li><strong>In reply to:</strong> <a href="12513.php">Joshua Ladd: "Re: [OMPI devel] aclocal-1.14: error:	../../config/autogen_found_items.m4:274: file	'opal/mca/backtrace/configure.m4' does not exist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12507.php">Vasiliy: "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
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
