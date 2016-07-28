<?
$subject_val = "[OMPI devel] Grammar error in git master: 'You job will now abort'";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 01:49:49 2014" -->
<!-- isoreceived="20140813054949" -->
<!-- sent="Wed, 13 Aug 2014 15:49:45 +1000" -->
<!-- isosent="20140813054945" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="[OMPI devel] Grammar error in git master: 'You job will now abort'" -->
<!-- id="53EAFC79.5060804_at_unimelb.edu.au" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] Grammar error in git master: 'You job will now abort'<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-13 01:49:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15625.php">Gilles Gouaillardet: "Re: [OMPI devel] Grammar error in git master: 'You job will now abort'"</a>
<li><strong>Previous message:</strong> <a href="15623.php">Gilles Gouaillardet: "[OMPI devel] trunk hang when nodes have similar but private network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15625.php">Gilles Gouaillardet: "Re: [OMPI devel] Grammar error in git master: 'You job will now abort'"</a>
<li><strong>Reply:</strong> <a href="15625.php">Gilles Gouaillardet: "Re: [OMPI devel] Grammar error in git master: 'You job will now abort'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>We spotted this in 1.6.5 and git grep shows it's fixed in the
<br>
v1.8 branch but in master it's still there:
<br>
<p>samuel_at_haswell:~/Code/OMPI/ompi-svn-mirror$ git grep -n 'You job will now abort'
<br>
orte/tools/orterun/help-orterun.txt:679:You job will now abort.
<br>
samuel_at_haswell:~/Code/OMPI/ompi-svn-mirror$ 
<br>
<p>I'm using <a href="https://github.com/open-mpi/ompi-svn-mirror.git">https://github.com/open-mpi/ompi-svn-mirror.git</a> so
<br>
let me know if I should be using something else now.
<br>
<p>cheers,
<br>
Chris
<br>
<pre>
-- 
 Christopher Samuel        Senior Systems Administrator
 VLSCI - Victorian Life Sciences Computation Initiative
 Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
 <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15625.php">Gilles Gouaillardet: "Re: [OMPI devel] Grammar error in git master: 'You job will now abort'"</a>
<li><strong>Previous message:</strong> <a href="15623.php">Gilles Gouaillardet: "[OMPI devel] trunk hang when nodes have similar but private network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15625.php">Gilles Gouaillardet: "Re: [OMPI devel] Grammar error in git master: 'You job will now abort'"</a>
<li><strong>Reply:</strong> <a href="15625.php">Gilles Gouaillardet: "Re: [OMPI devel] Grammar error in git master: 'You job will now abort'"</a>
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
