<?
$subject_val = "[OMPI devel] Something wrong with vt?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 04:42:09 2008" -->
<!-- isoreceived="20080211094209" -->
<!-- sent="Mon, 11 Feb 2008 11:42:03 +0200" -->
<!-- isosent="20080211094203" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="[OMPI devel] Something wrong with vt?" -->
<!-- id="20080211094202.GI10354_at_minantech.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Something wrong with vt?<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-11 04:42:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3179.php">Eric Jones: "[OMPI devel] status of LSF integration work?"</a>
<li><strong>Previous message:</strong> <a href="3177.php">Jeff Squyres: "[OMPI devel] more vt woes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3197.php">Matthias Jurenz: "Re: [OMPI devel] Something wrong with vt?"</a>
<li><strong>Reply:</strong> <a href="3197.php">Matthias Jurenz: "Re: [OMPI devel] Something wrong with vt?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I get the following error while &quot;make install&quot;:
<br>
<p>make[2]: Entering directory `/home_local/glebn/build_dbg/ompi/contrib/vt'
<br>
Making install in vt
<br>
make[3]: Entering directory `/home_local/glebn/build_dbg/ompi/contrib/vt/vt'
<br>
make[3]: *** No rule to make target `install'.  Stop.
<br>
make[3]: Leaving directory `/home_local/glebn/build_dbg/ompi/contrib/vt/vt'
<br>
make[2]: *** [install-recursive] Error 1
<br>
make[2]: Leaving directory `/home_local/glebn/build_dbg/ompi/contrib/vt'
<br>
make[1]: *** [install-recursive] Error 1
<br>
make[1]: Leaving directory `/home_local/glebn/build_dbg/ompi'
<br>
make: *** [install-recursive] Error 1
<br>
<p>ompi/contrib/vt/vt/Makefile is empty!
<br>
<pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3179.php">Eric Jones: "[OMPI devel] status of LSF integration work?"</a>
<li><strong>Previous message:</strong> <a href="3177.php">Jeff Squyres: "[OMPI devel] more vt woes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3197.php">Matthias Jurenz: "Re: [OMPI devel] Something wrong with vt?"</a>
<li><strong>Reply:</strong> <a href="3197.php">Matthias Jurenz: "Re: [OMPI devel] Something wrong with vt?"</a>
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
