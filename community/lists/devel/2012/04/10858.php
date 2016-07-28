<?
$subject_val = "[OMPI devel] r26255 has made openib unusable on Solaris platforms";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 13 10:45:58 2012" -->
<!-- isoreceived="20120413144558" -->
<!-- sent="Fri, 13 Apr 2012 10:45:51 -0400" -->
<!-- isosent="20120413144551" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] r26255 has made openib unusable on Solaris platforms" -->
<!-- id="4F883C1F.50703_at_oracle.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] r26255 has made openib unusable on Solaris platforms<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-13 10:45:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10859.php">TERRY DONTJE: "Re: [OMPI devel] r26255 has made openib unusable on Solaris platforms"</a>
<li><strong>Previous message:</strong> <a href="10857.php">Yevgeny Kliteynik: "Re: [OMPI devel] Set alignment for openib internal buffers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10859.php">TERRY DONTJE: "Re: [OMPI devel] r26255 has made openib unusable on Solaris platforms"</a>
<li><strong>Reply:</strong> <a href="10859.php">TERRY DONTJE: "Re: [OMPI devel] r26255 has made openib unusable on Solaris platforms"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
r26255 is forcing the use of __malloc_hook which is implemented in 
<br>
opal/mca/memory/linux however that is not compiled in the library when 
<br>
built on Solaris thus causing a referenced symbol not found when libmpi 
<br>
tries to load the openib btl.
<br>
<p>I am looking how to fix this now but if someone has a good idea how to 
<br>
detect when __malloc_hook is used (or not) I'd be interested in hearing it.
<br>
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10858/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10859.php">TERRY DONTJE: "Re: [OMPI devel] r26255 has made openib unusable on Solaris platforms"</a>
<li><strong>Previous message:</strong> <a href="10857.php">Yevgeny Kliteynik: "Re: [OMPI devel] Set alignment for openib internal buffers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10859.php">TERRY DONTJE: "Re: [OMPI devel] r26255 has made openib unusable on Solaris platforms"</a>
<li><strong>Reply:</strong> <a href="10859.php">TERRY DONTJE: "Re: [OMPI devel] r26255 has made openib unusable on Solaris platforms"</a>
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
