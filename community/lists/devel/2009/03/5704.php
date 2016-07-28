<?
$subject_val = "[OMPI devel] MCA component dependency";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 18:09:47 2009" -->
<!-- isoreceived="20090325220947" -->
<!-- sent="Wed, 25 Mar 2009 18:09:37 -0400" -->
<!-- isosent="20090325220937" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="[OMPI devel] MCA component dependency" -->
<!-- id="43B8587C-2C7E-4627-9B3C-FB128D0C4101_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] MCA component dependency<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-25 18:09:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5705.php">Ralph Castain: "[OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5703.php">George Bosilca: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5727.php">Jeff Squyres: "Re: [OMPI devel] MCA component dependency"</a>
<li><strong>Reply:</strong> <a href="5727.php">Jeff Squyres: "Re: [OMPI devel] MCA component dependency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>I'm trying to state that a particular component depends on another  
<br>
that should therefore be dlopened automatically when it is loaded. I  
<br>
found some code doing exactly that in  
<br>
mca_base_component_find:open_component, but can't find any example of  
<br>
how to actually trigger that code path. Does anybody have a clue of  
<br>
what should I do to declare the list of dependencies of my component ?
<br>
<p>Thanks,
<br>
Aurelien
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5705.php">Ralph Castain: "[OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5703.php">George Bosilca: "Re: [OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative	Value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5727.php">Jeff Squyres: "Re: [OMPI devel] MCA component dependency"</a>
<li><strong>Reply:</strong> <a href="5727.php">Jeff Squyres: "Re: [OMPI devel] MCA component dependency"</a>
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
