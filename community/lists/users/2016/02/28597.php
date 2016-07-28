<?
$subject_val = "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 27 06:20:32 2016" -->
<!-- isoreceived="20160227112032" -->
<!-- sent="Sat, 27 Feb 2016 20:20:31 +0900" -->
<!-- isosent="20160227112031" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks" -->
<!-- id="CAAkFZ5sq_fs-Kg39hxm2R9Bn0P8p1RFkrmVgftGtZaaWkYxSLQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAPLAFj79558o4gBV6H_NLpg4ZnLwgzn2P8hYV+tJeFT=r_Ehng_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-27 06:20:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28598.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Previous message:</strong> <a href="28596.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>In reply to:</strong> <a href="28596.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28601.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Reply:</strong> <a href="28601.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Emmanuel,
<br>
<p>By any chance, does libosmcomp.la contains a -rpath line ?
<br>
<p>FWIW, you can simply
<br>
make V=1
<br>
In order to see how libtool is invoked, and how it will invoke bcc
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Saturday, February 27, 2016, Emmanuel Thom&#195;&#169; &lt;emmanuel.thome_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your answer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have no LD_LIBRARY_PATH. I am not sure it should matter anyway,
</span><br>
<span class="quotelev1">&gt; though: the objdump command looks at what the object file requests,
</span><br>
<span class="quotelev1">&gt; not necessarily what happens at runtime as if we were using ldd.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems to be related to the MOFED debian packages including a .la
</span><br>
<span class="quotelev1">&gt; file for the stuff they install (which is against debian practice,
</span><br>
<span class="quotelev1">&gt; although not exactly for the same reason:
</span><br>
<span class="quotelev1">&gt; <a href="https://wiki.debian.org/ReleaseGoals/LAFileRemoval">https://wiki.debian.org/ReleaseGoals/LAFileRemoval</a> ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically, I have /usr/lib/libosmcomp.la. If I delete that file,
</span><br>
<span class="quotelev1">&gt; then no -L/usr/lib shows up in the relink command for libmpi; libtool
</span><br>
<span class="quotelev1">&gt; just emits -losmcomp alone, which is fine. Then the subsequent
</span><br>
<span class="quotelev1">&gt; -lopen-rte finds the one installed for the library being build, not
</span><br>
<span class="quotelev1">&gt; the /usr one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It still does not look good that the libmpi.la file has the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; dependency_libs=' -losmcomp -libverbs
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-1.10.2/orte/libopen-rte.la
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-1.10.2/opal/libopen-pal.la -lnuma -ldl -lrt -lm -lutil'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (here on a machine without /usr/lib/libosmcomp.la ; when the .la file
</span><br>
<span class="quotelev1">&gt; exists, -loscomp is replaced by /usr/lib/libosmcomp.la).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have the impression that having -losmcomp -libverbs *after* the opal
</span><br>
<span class="quotelev1">&gt; and orte .la files would be better. I don't see how to achieve this,
</span><br>
<span class="quotelev1">&gt; though (just playing with ompi/Makefile.am at the moment, to no avail
</span><br>
<span class="quotelev1">&gt; so far).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; E.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Feb 27, 2016 at 5:58 AM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Out of curiosity, do you have your version of OMPI at the _beginning_ of
</span><br>
<span class="quotelev1">&gt; your LD_LIBRARY_PATH?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Feb 26, 2016, at 8:24 AM, Emmanuel Thom&#195;&#169; &lt;emmanuel.thome_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Fri, Feb 26, 2016 at 5:21 PM, Emmanuel Thom&#195;&#169;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;emmanuel.thome_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; happens to have an openmpi-1.6.5 installation in /usr, as well as .
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sorry for copy-paste failure. 1.6.5 is only in /usr, of course.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; E.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28592.php">http://www.open-mpi.org/community/lists/users/2016/02/28592.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28595.php">http://www.open-mpi.org/community/lists/users/2016/02/28595.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28596.php">http://www.open-mpi.org/community/lists/users/2016/02/28596.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28597/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28598.php">Jeff Squyres (jsquyres): "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Previous message:</strong> <a href="28596.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>In reply to:</strong> <a href="28596.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28601.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
<li><strong>Reply:</strong> <a href="28601.php">Emmanuel Thomé: "Re: [OMPI users] wrong library version for dependent open-rte lib when libtool relinks"</a>
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
