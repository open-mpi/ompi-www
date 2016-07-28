<?
$subject_val = "Re: [OMPI devel] FreeBSD Support?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  2 14:56:31 2007" -->
<!-- isoreceived="20071102185631" -->
<!-- sent="Fri, 02 Nov 2007 11:56:05 -0700" -->
<!-- isosent="20071102185605" -->
<!-- name="Karol Mroz" -->
<!-- email="kmroz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] FreeBSD Support?" -->
<!-- id="472B72C5.2090501_at_cs.ubc.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46F15B26.9050901_at_cs.ubc.ca" -->
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
<strong>From:</strong> Karol Mroz (<em>kmroz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-02 14:56:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2538.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib currently broken"</a>
<li><strong>Previous message:</strong> <a href="2536.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/09/2333.php">Karol Mroz: "[OMPI devel] FreeBSD Support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2558.php">Jeff Squyres: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>Reply:</strong> <a href="2558.php">Jeff Squyres: "Re: [OMPI devel] FreeBSD Support?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Hi everyone. So I noticed, after doing a build of the latest ompi-trunk
<br>
(rev. 16641) on a FreeBSD 6.2 machine, that the autogen.sh script is
<br>
still dying due to a configure script permissions issue. I'm pasting a
<br>
diff that solves the problem on my machine. Are there any foreseeable
<br>
problems with committing this change to ompi-trunk?
<br>
<p>- -------------------------------------------------------------------
<br>
<p>Index: autogen.sh
<br>
===================================================================
<br>
- --- autogen.sh  (revision 16641)
<br>
+++ autogen.sh  (working copy)
<br>
@@ -435,6 +435,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pushd opal/libltdl &gt; /dev/null 2&gt;&amp;1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;run_and_check $ompi_aclocal
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;run_and_check $ompi_automake
<br>
+                chmod u+w configure # Need this for FreeBSD.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;run_and_check $ompi_autoconf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;popd &gt; /dev/null 2&gt;&amp;1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unset indent
<br>
<p>- -------------------------------------------------------------------
<br>
<p>Thanks.
<br>
- --
<br>
Karol Mroz
<br>
kmroz_at_[hidden]
<br>
-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.6 (GNU/Linux)
<br>
<p>iD8DBQFHK3LFuoug78g/Mz8RAvIDAJ9+XiEdY24ToQeaZkLxVvMK2FNuqQCcDDPU
<br>
5lMQijN9Y9ldt+zGpm/ZcJU=
<br>
=eSQ/
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2538.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib currently broken"</a>
<li><strong>Previous message:</strong> <a href="2536.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/09/2333.php">Karol Mroz: "[OMPI devel] FreeBSD Support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2558.php">Jeff Squyres: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>Reply:</strong> <a href="2558.php">Jeff Squyres: "Re: [OMPI devel] FreeBSD Support?"</a>
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
