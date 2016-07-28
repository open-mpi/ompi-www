<?
$subject_val = "[OMPI devel] How to read OPAL_OUTPUT-ed strings";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 17 03:21:46 2014" -->
<!-- isoreceived="20140217082146" -->
<!-- sent="Mon, 17 Feb 2014 10:21:45 +0200" -->
<!-- isosent="20140217082145" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="[OMPI devel] How to read OPAL_OUTPUT-ed strings" -->
<!-- id="CAAoBEv=Sgd7JEfCKP=K2qKAAGM7381aJxMVFXXQ14_pvzf8pAg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] How to read OPAL_OUTPUT-ed strings<br>
<strong>From:</strong> Alex Margolin (<em>alex.margolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-17 03:21:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14154.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to read OPAL_OUTPUT-ed strings"</a>
<li><strong>Previous message:</strong> <a href="14152.php">Andreas Schwab: "[OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14154.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to read OPAL_OUTPUT-ed strings"</a>
<li><strong>Reply:</strong> <a href="14154.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to read OPAL_OUTPUT-ed strings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm having trouble getting the OPAL_OUTPUT to print. I'm trying the
<br>
following command line (with no success):
<br>
<p>`pwd`/osh_install/bin/oshrun --map-by node  -np 2 -mca orte_debug true -mca
<br>
orte_debug_verbose 100 -mca orte_report_silent_errors true -mca
<br>
orte_map_stddiag_to_stderr true ./examples/ring_oshmem
<br>
<p>How can I get it to print these strings? Online search was surprisingly
<br>
fruitless.
<br>
<p>Thanks,
<br>
Alex
<br>
<p>P.S. all the mca params are available if I look at &quot;oshmem_info -a&quot;, so I
<br>
suppose I can use them, but there are a lot more params so I'm not sure
<br>
what I need to add here...
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14153/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14154.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to read OPAL_OUTPUT-ed strings"</a>
<li><strong>Previous message:</strong> <a href="14152.php">Andreas Schwab: "[OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14154.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to read OPAL_OUTPUT-ed strings"</a>
<li><strong>Reply:</strong> <a href="14154.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to read OPAL_OUTPUT-ed strings"</a>
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
