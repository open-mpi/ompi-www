<?
$subject_val = "[OMPI devel] malloc 0 warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 12:26:25 2014" -->
<!-- isoreceived="20140826162625" -->
<!-- sent="Tue, 26 Aug 2014 19:26:04 +0300" -->
<!-- isosent="20140826162604" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] malloc 0 warnings" -->
<!-- id="CAEcYPwAuY-VVWDoEs_0XTJZM8Nk0Mnt4z-ih_+t5DQmaLUZ9Hw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] malloc 0 warnings<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 12:26:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15715.php">Ralph Castain: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<li><strong>Previous message:</strong> <a href="15713.php">Lisandro Dalcin: "[OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15725.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] malloc 0 warnings"</a>
<li><strong>Reply:</strong> <a href="15725.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] malloc 0 warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm getting a bunch of the following messages. Are they signaling some
<br>
easy-to-fix internal issue? Do you need code to reproduce each one?
<br>
<p>malloc debug: Request for 0 bytes (coll_libnbc_ireduce_scatter_block.c, 67)
<br>
...
<br>
malloc debug: Request for 0 bytes (nbc_internal.h, 496)
<br>
...
<br>
malloc debug: Request for 0 bytes (osc_rdma_active_target.c, 74)
<br>
<p><p><pre>
-- 
Lisandro Dalcin
============
Research Scientist
Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
Numerical Porous Media Center (NumPor)
King Abdullah University of Science and Technology (KAUST)
<a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
4700 King Abdullah University of Science and Technology
al-Khawarizmi Bldg (Bldg 1), Office # 4332
Thuwal 23955-6900, Kingdom of Saudi Arabia
<a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
Office Phone: +966 12 808-0459
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15715.php">Ralph Castain: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<li><strong>Previous message:</strong> <a href="15713.php">Lisandro Dalcin: "[OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15725.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] malloc 0 warnings"</a>
<li><strong>Reply:</strong> <a href="15725.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] malloc 0 warnings"</a>
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
