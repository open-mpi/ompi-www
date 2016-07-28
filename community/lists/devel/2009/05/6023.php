<?
$subject_val = "[OMPI devel] OMPI 1.3 branch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 11:24:55 2009" -->
<!-- isoreceived="20090514152455" -->
<!-- sent="Thu, 14 May 2009 09:24:49 -0600" -->
<!-- isosent="20090514152449" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] OMPI 1.3 branch" -->
<!-- id="71d2d8cc0905140824u55a84ab0la630d26d5672c630_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] OMPI 1.3 branch<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 11:24:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6024.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6022.php">Ashley Pittman: "[OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6026.php">Terry Dontje: "Re: [OMPI devel] OMPI 1.3 branch"</a>
<li><strong>Reply:</strong> <a href="6026.php">Terry Dontje: "Re: [OMPI devel] OMPI 1.3 branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I encourage people to please look at your MTT outputs. As we are preparing
<br>
to roll the 1.3.3 release, I am seeing a lot of problems on the branch:
<br>
<p>1. timeouts, coming in two forms: (a) MPI_Abort hanging, and (b) collectives
<br>
hanging (this is mostly on Solaris)
<br>
<p>2. segfaults - mostly on sif, but occasionally elsewhere
<br>
<p>3. daemon failed to report back - this was only on sif
<br>
<p>We will need to correct many of these for the release - unless it proves to
<br>
be due to trivial errors, I don't see how we will be ready to roll release
<br>
candidates next week.
<br>
<p>So let's please start taking a look at these?!
<br>
<p>Ralph
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6023/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6024.php">Jeff Squyres: "Re: [OMPI devel] Build failures on trunk? r21235"</a>
<li><strong>Previous message:</strong> <a href="6022.php">Ashley Pittman: "[OMPI devel] Build failures on trunk? r21235"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6026.php">Terry Dontje: "Re: [OMPI devel] OMPI 1.3 branch"</a>
<li><strong>Reply:</strong> <a href="6026.php">Terry Dontje: "Re: [OMPI devel] OMPI 1.3 branch"</a>
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
