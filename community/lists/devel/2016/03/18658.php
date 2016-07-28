<?
$subject_val = "Re: [OMPI devel] RFC: warn if running a debug build";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 23:43:53 2016" -->
<!-- isoreceived="20160302044353" -->
<!-- sent="Tue, 1 Mar 2016 22:43:51 -0600" -->
<!-- isosent="20160302044351" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: warn if running a debug build" -->
<!-- id="A1516DD6-0F74-447A-91DB-A1214CA03E85_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="56D66B9E.8070608_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: warn if running a debug build<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-01 23:43:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18659.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Previous message:</strong> <a href="18657.php">Ralph Castain: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>In reply to:</strong> <a href="18656.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18659.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Reply:</strong> <a href="18659.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Mar 1, 2016, at 22:27 , Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; be &quot;me-friendly&quot; :-)
</span><br>
<span class="quotelev1">&gt; i explicitly configure with --enable-debug --enable-picky from git, so i (hopefully) know what i am doing and do not want any warning.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iirc, cisco mtt does that too, and i am not sure you would want a warning and/or update your mtt config.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this is not a strong opinion, and i am fine with setting a parameter (i will likely soon forget i set that) in a config file.
</span><br>
<p>And you will be painfully reminded about that ;)
<br>
<p>The emitted message was supposed to contain the MCA parameter that need to be set to silence the warning.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 3/2/2016 1:21 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 1, 2016, at 10:17 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In this case, should we only display the warning if debug build was implicit ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for example, ./configure from git would display the warning (implicit debug),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but ./configure --enable-debug would not (explicit debug), regardless we built from git or a tarball
</span><br>
<span class="quotelev2">&gt;&gt; We don't currently distinguish between these two cases.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What is the rationale for only warning on implicit debug builds?
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18656.php">http://www.open-mpi.org/community/lists/devel/2016/03/18656.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18659.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Previous message:</strong> <a href="18657.php">Ralph Castain: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>In reply to:</strong> <a href="18656.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18659.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Reply:</strong> <a href="18659.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
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
