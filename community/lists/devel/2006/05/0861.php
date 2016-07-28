<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May  8 12:58:34 2006" -->
<!-- isoreceived="20060508165834" -->
<!-- sent="Mon, 08 May 2006 19:00:40 +0200" -->
<!-- isosent="20060508170040" -->
<!-- name="Dries Kimpe" -->
<!-- email="Dries.Kimpe_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?" -->
<!-- id="445F7938.2080409_at_cs.kuleuven.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="445F2B6A.9080001_at_cs.kuleuven.be" -->
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
<strong>From:</strong> Dries Kimpe (<em>Dries.Kimpe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-08 13:00:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0862.php">Brian Barrett: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>Previous message:</strong> <a href="0860.php">Brian Barrett: "Re: [OMPI devel] [OMPI users] pnetcdf &amp; Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0856.php">Dries Kimpe: "[OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0862.php">Brian Barrett: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>Reply:</strong> <a href="0862.php">Brian Barrett: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p><p>&nbsp;&nbsp;Hi,
<br>
<p>There is another small problem in that file:
<br>
<p>- --with-io-romio-flags is not being passed either. This is needed to pass --with-filesystems for
<br>
enabling ROMIO support for more than NFS and UFS.
<br>
<p>Problem is the
<br>
io_romio_flags=
<br>
line clearing the previously stored value:
<br>
<p>(same file, comments inbetween)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test -n &quot;$with_io_romio_flags&quot; -a &quot;$with_io_romio_flags&quot; != &quot;no&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[io_romio_flags=&quot;$with_io_romio_flags $io_romio_flags&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[io_romio_flags=])
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;[...snip...]
<br>
<p><p><span class="quotelev1">&gt;                   io_romio_flags=
</span><br>
<span class="quotelev1">&gt;                   ^^^^^^^^^^^^^^^^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Probably the line above had to go BEFORE the first AS_IF
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test &quot;$cross_compiling&quot; = &quot;yes&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AS_IF([test ! -z $build], [io_romio_flags=&quot;$io_romio_flags --build=$build&quot;])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test ! -z $host], [io_romio_flags=&quot;$io_romio_flags --host=$host&quot;])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test ! -z $target], [io_romio_flags=&quot;$io_romio_flags
<br>
- --target=$target&quot;])])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;io_romio_flags=&quot;$io_romio_flags CFLAGS=&quot;'&quot;'&quot;$CFLAGS&quot;'&quot;'&quot;
<br>
CPPFLAGS=&quot;'&quot;'&quot;$CPPFLAGS&quot;'&quot;'&quot; FFLAGS=&quot;'&quot;'&quot;$FFLAGS&quot;'&quot;'&quot; LDFLAGS=&quot;'&quot;'&quot;$LDFLAGS&quot;'&quot;'&quot;
<br>
- --$io_romio_shared-shared --$io_romio_static-static $io_romio_flags $io_romio_prefix_arg
<br>
- --with-mpi=open_mpi&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Greetings,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Dries
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.2.2 (GNU/Linux)
<br>
<p>iD8DBQFEX3k4v/8puanD4GoRAqdUAKCRE7t7TY2eKtRnqzMhV9bjVfvFQACbBYgp
<br>
ftrnSJlg3wBbTTwl+8Meupg=
<br>
=wPOj
<br>
-----END PGP SIGNATURE-----
<br>
<p>Disclaimer: <a href="http://www.kuleuven.be/cwis/email_disclaimer.htm">http://www.kuleuven.be/cwis/email_disclaimer.htm</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0862.php">Brian Barrett: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>Previous message:</strong> <a href="0860.php">Brian Barrett: "Re: [OMPI devel] [OMPI users] pnetcdf &amp; Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0856.php">Dries Kimpe: "[OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0862.php">Brian Barrett: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>Reply:</strong> <a href="0862.php">Brian Barrett: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
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
