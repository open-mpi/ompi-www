<?
$subject_val = "[OMPI devel] Enabled threading tests in Cisco MTT";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 28 19:40:45 2016" -->
<!-- isoreceived="20160229004045" -->
<!-- sent="Mon, 29 Feb 2016 00:40:43 +0000" -->
<!-- isosent="20160229004043" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Enabled threading tests in Cisco MTT" -->
<!-- id="A7CE2D32-BE5F-4952-BDA3-F12299AEB4D1_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Enabled threading tests in Cisco MTT<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-28 19:40:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18642.php">George Bosilca: "[OMPI devel] Singletons"</a>
<li><strong>Previous message:</strong> <a href="18640.php">Ralph Castain: "Re: [OMPI devel] Crash in orte_iof_hnp_read_local_handler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per discussion in Dallas last week, I have enabled two sets of threading tests in Cisco's community MTT runs:
<br>
<p>- Gropp/Thakur &quot;thread tests v1.1&quot;
<br>
- Sun's old threaded tests
<br>
<p>Give it a day or three to shake out any bugs in the Cisco community MTT .ini files, and then others should feel free to copy these sections so that we can start getting widespread testing of THREAD_MULTIPLE support.
<br>
<p>Thanks.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18642.php">George Bosilca: "[OMPI devel] Singletons"</a>
<li><strong>Previous message:</strong> <a href="18640.php">Ralph Castain: "Re: [OMPI devel] Crash in orte_iof_hnp_read_local_handler"</a>
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
