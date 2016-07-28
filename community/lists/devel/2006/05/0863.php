<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May  8 13:28:05 2006" -->
<!-- isoreceived="20060508172805" -->
<!-- sent="Mon, 08 May 2006 19:27:55 +0200" -->
<!-- isosent="20060508172755" -->
<!-- name="Dries Kimpe" -->
<!-- email="Dries.Kimpe_at_[hidden]" -->
<!-- subject="[OMPI devel] bug in Makefile.in" -->
<!-- id="445F7F9B.2050105_at_cs.kuleuven.be" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Date:</strong> 2006-05-08 13:27:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0864.php">Dries Kimpe: "Re: [OMPI devel] bug in Makefile.in"</a>
<li><strong>Previous message:</strong> <a href="0862.php">Brian Barrett: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0864.php">Dries Kimpe: "Re: [OMPI devel] bug in Makefile.in"</a>
<li><strong>Reply:</strong> <a href="0864.php">Dries Kimpe: "Re: [OMPI devel] bug in Makefile.in"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p><p>&nbsp;&nbsp;Sorry to keep you busy,
<br>
<p>but I found another problem with the Open MPI &lt;-&gt; ROMIO integration:
<br>
<p>mca/io/romio/romio/Makefile.in:
<br>
<p># Open MPI: setup the AM_CONDITIONALs to build the different adio devices
<br>
AM_CONDITIONAL(BUILD_GRIDFTP, [test -n &quot;`echo $FILE_SYSTEM | grep gridftp`&quot;])
<br>
AM_CONDITIONAL(BUILD_HFS, [test -n &quot;`echo $FILE_SYSTEM | grep hfs`&quot;])
<br>
AM_CONDITIONAL(BUILD_NFS, [test -n &quot;`echo $FILE_SYSTEM | grep nfs`&quot;])
<br>
AM_CONDITIONAL(BUILD_PANFS, [test -n &quot;`echo $FILE_SYSTEM | grep panfs`&quot;])
<br>
AM_CONDITIONAL(BUILD_PFS, [test -n &quot;`echo $FILE_SYSTEM | grep pfs`&quot;])
<br>
AM_CONDITIONAL(BUILD_PIOFS, [test -n &quot;`echo $FILE_SYSTEM | grep piofs`&quot;])
<br>
AM_CONDITIONAL(BUILD_PVFS, [test -n &quot;`echo $FILE_SYSTEM | grep pvfs$`&quot;])
<br>
AM_CONDITIONAL(BUILD_PVFS2, [test -n &quot;`echo $FILE_SYSTEM | grep pvfs2`&quot;])
<br>
AM_CONDITIONAL(BUILD_SFS, [test -n &quot;`echo $FILE_SYSTEM | grep sfs`&quot;])
<br>
AM_CONDITIONAL(BUILD_TESTFS, [test -n &quot;`echo $FILE_SYSTEM | grep testfs`&quot;])
<br>
AM_CONDITIONAL(BUILD_UFS, [test -n &quot;`echo $FILE_SYSTEM | grep ufs`&quot;])
<br>
AM_CONDITIONAL(BUILD_XFS, [test -n &quot;`echo $FILE_SYSTEM | grep xfs`&quot;])
<br>
<p>When the ROMIO's configure finds support for a filesystem, it sets
<br>
file_system_&lt;name&gt; to 1. (This is done by checking support for each of the
<br>
filesystems listed in $FILE_SYSTEM (passed from --with-filesystems))
<br>
<p>In my case, I want PVFS2 so file_system_pvfs2=1 (because configure found
<br>
all the needed headers)
<br>
<p>However, two things are wrong with the AM_CONDITIONAL code:
<br>
<p>1) FILE_SYSTEM is tested, meaning that if the user demanded pvfs2 but didn't have
<br>
the headers/tools to build it, ROMIO's configure would have set file_system_pvfs2 to 0,
<br>
and the code above would still try to build the PVFS2 AD because it only tests if the name was
<br>
specified.
<br>
<p>2) If grep pvfs2 matches, grep pvfs also matches... ;-)
<br>
<p><p>&nbsp;&nbsp;&nbsp;Greetings,
<br>
&nbsp;&nbsp;&nbsp;Dries
<br>
-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.2.2 (GNU/Linux)
<br>
<p>iD8DBQFEX3+bv/8puanD4GoRAnFbAJ9R0FmSrc/CTrrJ4XX75xOgsafQ8wCgmgq4
<br>
IMGFB2OakHVUlPoyugTkoec=
<br>
=AOJX
<br>
-----END PGP SIGNATURE-----
<br>
<p>Disclaimer: <a href="http://www.kuleuven.be/cwis/email_disclaimer.htm">http://www.kuleuven.be/cwis/email_disclaimer.htm</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0864.php">Dries Kimpe: "Re: [OMPI devel] bug in Makefile.in"</a>
<li><strong>Previous message:</strong> <a href="0862.php">Brian Barrett: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0864.php">Dries Kimpe: "Re: [OMPI devel] bug in Makefile.in"</a>
<li><strong>Reply:</strong> <a href="0864.php">Dries Kimpe: "Re: [OMPI devel] bug in Makefile.in"</a>
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
