<?
$subject_val = "Re: [OMPI devel] FreeBSD Support?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  6 21:31:06 2007" -->
<!-- isoreceived="20071107023106" -->
<!-- sent="Tue, 6 Nov 2007 21:30:58 -0500" -->
<!-- isosent="20071107023058" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] FreeBSD Support?" -->
<!-- id="6812A0D1-C72F-40A0-AE69-565721AF519F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="472B72C5.2090501_at_cs.ubc.ca" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-06 21:30:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2559.php">Sharon Melamed: "[OMPI devel] carto framework requirements"</a>
<li><strong>Previous message:</strong> <a href="2557.php">Terry Dontje: "Re: [OMPI devel] accessors to context id and message id's"</a>
<li><strong>In reply to:</strong> <a href="2537.php">Karol Mroz: "Re: [OMPI devel] FreeBSD Support?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Done: <a href="https://svn.open-mpi.org/trac/ompi/changeset/16683">https://svn.open-mpi.org/trac/ompi/changeset/16683</a>
<br>
<p>Thanks!
<br>
<p><p>On Nov 2, 2007, at 2:56 PM, Karol Mroz wrote:
<br>
<p><span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi everyone. So I noticed, after doing a build of the latest ompi- 
</span><br>
<span class="quotelev1">&gt; trunk
</span><br>
<span class="quotelev1">&gt; (rev. 16641) on a FreeBSD 6.2 machine, that the autogen.sh script is
</span><br>
<span class="quotelev1">&gt; still dying due to a configure script permissions issue. I'm pasting a
</span><br>
<span class="quotelev1">&gt; diff that solves the problem on my machine. Are there any foreseeable
</span><br>
<span class="quotelev1">&gt; problems with committing this change to ompi-trunk?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - -------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: autogen.sh
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; - --- autogen.sh  (revision 16641)
</span><br>
<span class="quotelev1">&gt; +++ autogen.sh  (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -435,6 +435,7 @@
</span><br>
<span class="quotelev1">&gt;                 pushd opal/libltdl &gt; /dev/null 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;                 run_and_check $ompi_aclocal
</span><br>
<span class="quotelev1">&gt;                 run_and_check $ompi_automake
</span><br>
<span class="quotelev1">&gt; +                chmod u+w configure # Need this for FreeBSD.
</span><br>
<span class="quotelev1">&gt;                 run_and_check $ompi_autoconf
</span><br>
<span class="quotelev1">&gt;                 popd &gt; /dev/null 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;                 unset indent
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - -------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; - --
</span><br>
<span class="quotelev1">&gt; Karol Mroz
</span><br>
<span class="quotelev1">&gt; kmroz_at_[hidden]
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v1.4.6 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; iD8DBQFHK3LFuoug78g/Mz8RAvIDAJ9+XiEdY24ToQeaZkLxVvMK2FNuqQCcDDPU
</span><br>
<span class="quotelev1">&gt; 5lMQijN9Y9ldt+zGpm/ZcJU=
</span><br>
<span class="quotelev1">&gt; =eSQ/
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2559.php">Sharon Melamed: "[OMPI devel] carto framework requirements"</a>
<li><strong>Previous message:</strong> <a href="2557.php">Terry Dontje: "Re: [OMPI devel] accessors to context id and message id's"</a>
<li><strong>In reply to:</strong> <a href="2537.php">Karol Mroz: "Re: [OMPI devel] FreeBSD Support?"</a>
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
