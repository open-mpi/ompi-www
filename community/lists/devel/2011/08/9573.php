<?
$subject_val = "[OMPI devel] cross-platform execution";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  1 15:04:04 2011" -->
<!-- isoreceived="20110801190404" -->
<!-- sent="Mon, 01 Aug 2011 12:03:51 -0700" -->
<!-- isosent="20110801190351" -->
<!-- name="Maurice Feskanich" -->
<!-- email="maurice.feskanich_at_[hidden]" -->
<!-- subject="[OMPI devel] cross-platform execution" -->
<!-- id="4E36F897.20005_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] cross-platform execution<br>
<strong>From:</strong> Maurice Feskanich (<em>maurice.feskanich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-01 15:03:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9574.php">Jeff Squyres: "[OMPI devel] 1.5.4rc1 is (finally) posted"</a>
<li><strong>Previous message:</strong> <a href="9572.php">Chris Samuel: "Re: [OMPI devel] [TIPC BTL] test programmes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>Is there any advice/documentation/FAQs/whatever that talks about 
<br>
cross-platform issues?  Say, for instance, my users run mpirun on 
<br>
Solaris and they want their jobs to run on Linux.  I'm looking for any 
<br>
and all parameters/settings that I need to be aware of, tweak, clear, 
<br>
etc. to make sure this works.  Through a bit of trial-and-error, I know 
<br>
that I need to pass the right prefix to find the orted, and 
<br>
~/.openmpi/mca-params.conf (mca_component_path at least) needs to match 
<br>
the platform at both ends.  I'm sure there are many others.
<br>
<p>I can't imagine I'm the first one to try this, so any info or pointers 
<br>
would be greatly appreciated.
<br>
<p>Thanks,
<br>
<p>Maury Feskanich
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9574.php">Jeff Squyres: "[OMPI devel] 1.5.4rc1 is (finally) posted"</a>
<li><strong>Previous message:</strong> <a href="9572.php">Chris Samuel: "Re: [OMPI devel] [TIPC BTL] test programmes"</a>
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
