<?
$subject_val = "[OMPI devel] cleanup of rr_byobj";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 20:38:21 2014" -->
<!-- isoreceived="20140326003821" -->
<!-- sent="Wed, 26 Mar 2014 09:37:32 +0900" -->
<!-- isosent="20140326003732" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI devel] cleanup of rr_byobj" -->
<!-- id="OF643AA896.034B31AB-ON49257CA7.0001D247-49257CA7.000382B3_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> [OMPI devel] cleanup of rr_byobj<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20cleanup%20of%20rr_byobj"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-03-25 20:37:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14394.php">Ralph Castain: "Re: [OMPI devel] cleanup of rr_byobj"</a>
<li><strong>Previous message:</strong> <a href="14392.php">Jeff Squyres (jsquyres): "[OMPI devel] Update your MTT to use v1.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14394.php">Ralph Castain: "Re: [OMPI devel] cleanup of rr_byobj"</a>
<li><strong>Reply:</strong> <a href="14394.php">Ralph Castain: "Re: [OMPI devel] cleanup of rr_byobj"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, I moved on to the development list.
<br>
<p>I'm not sure why add_one flag is used in the rr_byobj.
<br>
Here, if oversubscribed, proc is mapped to each object
<br>
one by one. So, I think the add_one is not necesarry.
<br>
<p>Instead, when the user doesn't permit oversubscription,
<br>
the second pass should be skipped.
<br>
<p>I made the logic a bit clear based upon this idea and
<br>
removed some outputs to synchronize it with the 1.7 branch.
<br>
<p>Please take a look at attached patch file.
<br>
<p>Tetsuya
<br>
<p>(See attached file: patch.byobj)
<br>

<br><p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14393/patch.byobj">patch.byobj</a>
</ul>
<!-- attachment="patch.byobj" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14394.php">Ralph Castain: "Re: [OMPI devel] cleanup of rr_byobj"</a>
<li><strong>Previous message:</strong> <a href="14392.php">Jeff Squyres (jsquyres): "[OMPI devel] Update your MTT to use v1.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14394.php">Ralph Castain: "Re: [OMPI devel] cleanup of rr_byobj"</a>
<li><strong>Reply:</strong> <a href="14394.php">Ralph Castain: "Re: [OMPI devel] cleanup of rr_byobj"</a>
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
