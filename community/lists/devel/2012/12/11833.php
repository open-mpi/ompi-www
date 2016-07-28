<?
$subject_val = "[OMPI devel] CRIU checkpoint support in Open-MPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 21:57:01 2012" -->
<!-- isoreceived="20121206025701" -->
<!-- sent="Thu, 06 Dec 2012 13:56:54 +1100" -->
<!-- isosent="20121206025654" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="[OMPI devel] CRIU checkpoint support in Open-MPI?" -->
<!-- id="50C00976.30606_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> [OMPI devel] CRIU checkpoint support in Open-MPI?<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-05 21:56:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11834.php">Cao, Jimmy: "[OMPI devel] how to compile codes in orte/test/system"</a>
<li><strong>Previous message:</strong> <a href="11832.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r27580 - in trunk: ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml opal/util/keyval orte/mca/rmaps/rank_file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11836.php">George Bosilca: "Re: [OMPI devel] CRIU checkpoint support in Open-MPI?"</a>
<li><strong>Reply:</strong> <a href="11836.php">George Bosilca: "Re: [OMPI devel] CRIU checkpoint support in Open-MPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Hi folks,
<br>
<p>I don't know if people have seen that the Linux kernel community is
<br>
following its own different checkpoint/restart path to those currently
<br>
supported by OMPI, namely that of the OpenVZ developers
<br>
&quot;checkpoint/restore in user space&quot; project (CRIU).
<br>
<p>You can read more about its current state here:
<br>
<p>&nbsp;<a href="https://lwn.net/Articles/525675/">https://lwn.net/Articles/525675/</a>
<br>
<p>The CRIU website is here:
<br>
<p>&nbsp;<a href="http://criu.org/">http://criu.org/</a>
<br>
<p>CRIU will also be up for discussion at LCA2013 in Canberra this year
<br>
(though I won't be there):
<br>
<p><a href="http://linux.conf.au/schedule/30116/view_talk?day=thursday">http://linux.conf.au/schedule/30116/view_talk?day=thursday</a>
<br>
<p>Is there interest from OMPI in supporting this, given it looks like
<br>
it's quite likely to make it into the mainline kernel?
<br>
<p>Or is better to wait for it to be merged, and then take a look?
<br>
<p>All the best,
<br>
Chris
<br>
- -- 
<br>
&nbsp;Christopher Samuel        Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computation Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;<a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.11 (GNU/Linux)
<br>
Comment: Using GnuPG with undefined - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
<br>
<p>iEYEARECAAYFAlDACXYACgkQO2KABBYQAh8LIQCfagfyZNzK3KVKb+W0etJV4tyL
<br>
AxwAn0z6q7TVNcOTom0tmvy7brfFf4QV
<br>
=SLvF
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11834.php">Cao, Jimmy: "[OMPI devel] how to compile codes in orte/test/system"</a>
<li><strong>Previous message:</strong> <a href="11832.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r27580 - in trunk: ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml opal/util/keyval orte/mca/rmaps/rank_file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11836.php">George Bosilca: "Re: [OMPI devel] CRIU checkpoint support in Open-MPI?"</a>
<li><strong>Reply:</strong> <a href="11836.php">George Bosilca: "Re: [OMPI devel] CRIU checkpoint support in Open-MPI?"</a>
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
