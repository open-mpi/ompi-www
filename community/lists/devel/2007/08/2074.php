<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug  2 19:28:04 2007" -->
<!-- isoreceived="20070802232804" -->
<!-- sent="Thu, 2 Aug 2007 18:28:11 -0500 (CDT)" -->
<!-- isosent="20070802232811" -->
<!-- name="Mohamad Chaarawi" -->
<!-- email="mschaara_at_[hidden]" -->
<!-- subject="[OMPI devel] Sparse Branch (Heads up Commit)" -->
<!-- id="4182.128.107.248.220.1186097291.squirrel_at_mail.cs.uh.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Mohamad Chaarawi (<em>mschaara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-02 19:28:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2075.php">Jeff Squyres: "[OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<li><strong>Previous message:</strong> <a href="2073.php">Brian Barrett: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The modifications:
<br>
* to remove the #ifs
<br>
* put the sparse paramters in structs, and a union of them to the group
<br>
struct
<br>
<p>are all there in the branch since yesterday. I tested the branch with the
<br>
ibm and intel test suites again, using all the different formats when
<br>
possible, and they passed.
<br>
<p>I just need to add a line to ompi_info to indicate wether the sparse
<br>
groups are indicated in the build or not.
<br>
<p>I will most probably commit tomorrow afternoon or sometime in the weekend,
<br>
Unless someone objects..
<br>
<p>Thank you,
<br>
<p><p><p><pre>
-- 
Mohamad Chaarawi
Instructional Assistant		  <a href="http://www.cs.uh.edu/~mschaara">http://www.cs.uh.edu/~mschaara</a>
Department of Computer Science	  University of Houston
4800 Calhoun, PGH Room 526        Houston, TX 77204, USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2075.php">Jeff Squyres: "[OMPI devel] [RFC] Upgrade to newer libtool 2.1 snapshot"</a>
<li><strong>Previous message:</strong> <a href="2073.php">Brian Barrett: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
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
