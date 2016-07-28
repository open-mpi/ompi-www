<?
$subject_val = "Re: [OMPI devel] RFC: warn if running a debug build";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 23:51:19 2016" -->
<!-- isoreceived="20160302045119" -->
<!-- sent="Wed, 2 Mar 2016 13:51:21 +0900" -->
<!-- isosent="20160302045121" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: warn if running a debug build" -->
<!-- id="56D67149.3060908_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="A1516DD6-0F74-447A-91DB-A1214CA03E85_at_icl.utk.edu" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-01 23:51:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18660.php">George Bosilca: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Previous message:</strong> <a href="18658.php">George Bosilca: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>In reply to:</strong> <a href="18658.php">George Bosilca: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18660.php">George Bosilca: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Reply:</strong> <a href="18660.php">George Bosilca: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me rephrase that.
<br>
<p>i will set the parameter in the etc/openmpi-mca-params.conf of my 
<br>
install directory,
<br>
and i will very likely forget about it (etc/openmpi-mca-params.conf is 
<br>
not overwritten by make install, right ?)
<br>
<p>if one day, i decide to configure without --enable-debug and run a 
<br>
performance benchmark, then i will not get the warning i need (and yes, 
<br>
i will be the only one to blame ... but isn't it something we want to 
<br>
avoid here ?)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 3/2/2016 1:43 PM, George Bosilca wrote:
<br>
<span class="quotelev2">&gt;&gt; On Mar 1, 2016, at 22:27 , Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; be &quot;me-friendly&quot; :-)
</span><br>
<span class="quotelev2">&gt;&gt; i explicitly configure with --enable-debug --enable-picky from git, so i (hopefully) know what i am doing and do not want any warning.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; iirc, cisco mtt does that too, and i am not sure you would want a warning and/or update your mtt config.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; this is not a strong opinion, and i am fine with setting a parameter (i will likely soon forget i set that) in a config file.
</span><br>
<span class="quotelev1">&gt; And you will be painfully reminded about that ;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The emitted message was supposed to contain the MCA parameter that need to be set to silence the warning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 3/2/2016 1:21 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 1, 2016, at 10:17 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In this case, should we only display the warning if debug build was implicit ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for example, ./configure from git would display the warning (implicit debug),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but ./configure --enable-debug would not (explicit debug), regardless we built from git or a tarball
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We don't currently distinguish between these two cases.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is the rationale for only warning on implicit debug builds?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18656.php">http://www.open-mpi.org/community/lists/devel/2016/03/18656.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18658.php">http://www.open-mpi.org/community/lists/devel/2016/03/18658.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18660.php">George Bosilca: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Previous message:</strong> <a href="18658.php">George Bosilca: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>In reply to:</strong> <a href="18658.php">George Bosilca: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18660.php">George Bosilca: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Reply:</strong> <a href="18660.php">George Bosilca: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
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
