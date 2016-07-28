<?
$subject_val = "[OMPI devel] noticing odd message";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 20 18:34:11 2015" -->
<!-- isoreceived="20150420223411" -->
<!-- sent="Mon, 20 Apr 2015 16:34:10 -0600" -->
<!-- isosent="20150420223410" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="[OMPI devel] noticing odd message" -->
<!-- id="CAF1Cqj666DJkrQ8CRE+in7sGaKRPtHy3aySiMmV7z6_CGvL4yg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] noticing odd message<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-20 18:34:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17280.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] noticing odd message"</a>
<li><strong>Previous message:</strong> <a href="17278.php">Nathan Hjelm: "Re: [OMPI devel] Master appears broken on the Mac"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17280.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] noticing odd message"</a>
<li><strong>Reply:</strong> <a href="17280.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] noticing odd message"</a>
<li><strong>Reply:</strong> <a href="17281.php">Nathan Hjelm: "Re: [OMPI devel] noticing odd message"</a>
<li><strong>Reply:</strong> <a href="17284.php">Nathan Hjelm: "Re: [OMPI devel] noticing odd message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>Working on master, I&quot;m getting an odd message:
<br>
<p>malloc debug: Request for 1 zeroed elements of size 0 (mca_base_var.c, 170)
<br>
<p>whenever I launch a job.
<br>
<p>It looks like this can be traced back to this line in
<br>
orte_ess_singleton_component_register:
<br>
<p>mca_base_var_register_synonym(ret &quot;orte&quot;, NULL, NULL, &quot;server&quot;, 0);
<br>
<p>this just recently started appearing, perhaps today, but I've not been
<br>
running
<br>
anything over the weekend.
<br>
<p>Howard
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17279/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17280.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] noticing odd message"</a>
<li><strong>Previous message:</strong> <a href="17278.php">Nathan Hjelm: "Re: [OMPI devel] Master appears broken on the Mac"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17280.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] noticing odd message"</a>
<li><strong>Reply:</strong> <a href="17280.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] noticing odd message"</a>
<li><strong>Reply:</strong> <a href="17281.php">Nathan Hjelm: "Re: [OMPI devel] noticing odd message"</a>
<li><strong>Reply:</strong> <a href="17284.php">Nathan Hjelm: "Re: [OMPI devel] noticing odd message"</a>
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
