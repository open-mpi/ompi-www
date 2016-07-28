<?
$subject_val = "[OMPI devel] problem in the ORTE notifier framework";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 11:03:30 2009" -->
<!-- isoreceived="20090526150330" -->
<!-- sent="Tue, 26 May 2009 16:59:41 +0200" -->
<!-- isosent="20090526145941" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="[OMPI devel] problem in the ORTE notifier framework" -->
<!-- id="1243349986.2634.28.camel_at_frecb000730.frec.bull.fr" -->
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
<strong>Subject:</strong> [OMPI devel] problem in the ORTE notifier framework<br>
<strong>From:</strong> Nadia Derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-26 10:59:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6093.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6091.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6093.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6093.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>While having a look at the notifier framework under orte, I noticed that
<br>
the way it is written, the init routine for the selected module cannot
<br>
be called.
<br>
<p>Attached is a small patch that fixes this issue.
<br>
<p>Regards,
<br>
Nadia
<br>
<p>
<br><p>
<p><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6092/orte_notifier_fix_select.patch__charset_UTF-8">orte_notifier_fix_select.patch__charset_UTF-8</a>
</ul>
<!-- attachment="orte_notifier_fix_select.patch__charset_UTF-8" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6093.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6091.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6093.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Reply:</strong> <a href="6093.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
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
