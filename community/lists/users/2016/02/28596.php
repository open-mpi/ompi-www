<?
$subject_val = "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 27 05:42:09 2016" -->
<!-- isoreceived="20160227104209" -->
<!-- sent="Sat, 27 Feb 2016 11:42:07 +0100" -->
<!-- isosent="20160227104207" -->
<!-- name="Emmanuel Thom&#195;&#169;" -->
<!-- email="emmanuel.thome_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks" -->
<!-- id="CAPLAFj79558o4gBV6H_NLpg4ZnLwgzn2P8hYV+tJeFT=r_Ehng_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="DE070272-A909-4C19-B6CB-CF33E32F0F5C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks<br>
<strong>From:</strong> Emmanuel Thom&#195;&#169; (<em>emmanuel.thome_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-27 05:42:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28597.php">Gilles Gouaillardet: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Previous message:</strong> <a href="28595.php">Ralph Castain: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>In reply to:</strong> <a href="28595.php">Ralph Castain: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28597.php">Gilles Gouaillardet: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Reply:</strong> <a href="28597.php">Gilles Gouaillardet: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Reply:</strong> <a href="28598.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Reply:</strong> <a href="28603.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Thanks for your answer.
<br>
<p>I have no LD_LIBRARY_PATH. I am not sure it should matter anyway,
<br>
though: the objdump command looks at what the object file requests,
<br>
not necessarily what happens at runtime as if we were using ldd.
<br>
<p>This seems to be related to the MOFED debian packages including a .la
<br>
file for the stuff they install (which is against debian practice,
<br>
although not exactly for the same reason:
<br>
<a href="https://wiki.debian.org/ReleaseGoals/LAFileRemoval">https://wiki.debian.org/ReleaseGoals/LAFileRemoval</a> ).
<br>
<p>Specifically, I have /usr/lib/libosmcomp.la. If I delete that file,
<br>
then no -L/usr/lib shows up in the relink command for libmpi; libtool
<br>
just emits -losmcomp alone, which is fine. Then the subsequent
<br>
-lopen-rte finds the one installed for the library being build, not
<br>
the /usr one.
<br>
<p>It still does not look good that the libmpi.la file has the following:
<br>
<p>dependency_libs=' -losmcomp -libverbs
<br>
/tmp/openmpi-1.10.2/orte/libopen-rte.la
<br>
/tmp/openmpi-1.10.2/opal/libopen-pal.la -lnuma -ldl -lrt -lm -lutil'
<br>
<p>(here on a machine without /usr/lib/libosmcomp.la ; when the .la file
<br>
exists, -loscomp is replaced by /usr/lib/libosmcomp.la).
<br>
<p>I have the impression that having -losmcomp -libverbs *after* the opal
<br>
and orte .la files would be better. I don't see how to achieve this,
<br>
though (just playing with ompi/Makefile.am at the moment, to no avail
<br>
so far).
<br>
<p>E.
<br>
<p>On Sat, Feb 27, 2016 at 5:58 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Out of curiosity, do you have your version of OMPI at the _beginning_ of your LD_LIBRARY_PATH?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 26, 2016, at 8:24 AM, Emmanuel Thom&#195;&#169; &lt;emmanuel.thome_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Feb 26, 2016 at 5:21 PM, Emmanuel Thom&#195;&#169;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;emmanuel.thome_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; happens to have an openmpi-1.6.5 installation in /usr, as well as .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for copy-paste failure. 1.6.5 is only in /usr, of course.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; E.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28592.php">http://www.open-mpi.org/community/lists/users/2016/02/28592.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28595.php">http://www.open-mpi.org/community/lists/users/2016/02/28595.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28597.php">Gilles Gouaillardet: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Previous message:</strong> <a href="28595.php">Ralph Castain: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>In reply to:</strong> <a href="28595.php">Ralph Castain: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28597.php">Gilles Gouaillardet: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Reply:</strong> <a href="28597.php">Gilles Gouaillardet: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Reply:</strong> <a href="28598.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Reply:</strong> <a href="28603.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
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
