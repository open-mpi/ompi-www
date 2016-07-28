<?
$subject_val = "[OMPI devel] TRUNK error ( MAN page ) since r19120";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  3 08:53:31 2008" -->
<!-- isoreceived="20080803125331" -->
<!-- sent="Sun, 3 Aug 2008 15:53:23 +0300" -->
<!-- isosent="20080803125323" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="[OMPI devel] TRUNK error ( MAN page ) since r19120" -->
<!-- id="453d39990808030553g5dba89d0n26174b64f2f38aef_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] TRUNK error ( MAN page ) since r19120<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-03 08:53:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4507.php">Jeff Squyres: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Previous message:</strong> <a href="4505.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4507.php">Jeff Squyres: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Reply:</strong> <a href="4507.php">Jeff Squyres: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I experience this error since r19120
<br>
<p>#make all install
<br>
<p>( a lot of output )
<br>
<p>creating libmpi.la
<br>
(cd .libs &amp;&amp; rm -f libmpi.la &amp;&amp; ln -s ../libmpi.la libmpi.la)
<br>
Creating mpi/man/man3/MPI.3 man page...
<br>
/bin/sh: mpi/man/man3/MPI.3: No such file or directory
<br>
make[2]: *** [mpi/man/man3/MPI.3] Error 1
<br>
make[2]: Leaving directory
<br>
`/home/USERS/lenny/OMPI_ORTE_CODE/ompi-trunk_19120/build/ompi'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/home/USERS/lenny/OMPI_ORTE_CODE/ompi-trunk_19120/build/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p>p.s. of course I  run autogen and configure.
<br>
<p><p>Lenny.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4506/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4507.php">Jeff Squyres: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Previous message:</strong> <a href="4505.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4507.php">Jeff Squyres: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Reply:</strong> <a href="4507.php">Jeff Squyres: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
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
