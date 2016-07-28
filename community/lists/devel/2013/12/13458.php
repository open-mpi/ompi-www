<?
$subject_val = "[OMPI devel] Default mapping / binding";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 17 17:19:07 2013" -->
<!-- isoreceived="20131217221907" -->
<!-- sent="Tue, 17 Dec 2013 22:19:05 +0000" -->
<!-- isosent="20131217221905" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Default mapping / binding" -->
<!-- id="FA2058F2-C6F6-47E4-98BE-C493AB43C1F7_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Default mapping / binding<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-17 17:19:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13459.php">Ralph Castain: "Re: [OMPI devel] Default mapping / binding"</a>
<li><strong>Previous message:</strong> <a href="13457.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13459.php">Ralph Castain: "Re: [OMPI devel] Default mapping / binding"</a>
<li><strong>Reply:</strong> <a href="13459.php">Ralph Castain: "Re: [OMPI devel] Default mapping / binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I actually asked Ralph to make one more change.  The default MCW rank ordering was to match the mapping.  So in the np&gt;2 case, on a 2 socket system, we'd order like this:
<br>
<p>-----
<br>
[savbu-usnic-a:01121] MCW rank 0 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../../../..][../../../../../../../..]
<br>
[savbu-usnic-a:01121] MCW rank 1 bound to socket 1[core 8[hwt 0-1]]: [../../../../../../../..][BB/../../../../../../..]
<br>
[savbu-usnic-a:01121] MCW rank 2 bound to socket 0[core 1[hwt 0-1]]: [../BB/../../../../../..][../../../../../../../..]
<br>
[savbu-usnic-a:01121] MCW rank 3 bound to socket 1[core 9[hwt 0-1]]: [../../../../../../../..][../BB/../../../../../..]
<br>
-----
<br>
<p>I think in this case, we want to order MCW 0,1 on the same socket, and MCW 2,3 on the other socket (vs. MCW 0,2 on one socket and MCW 1,3 on the other socket).
<br>
<p>(of course, this is all *by default*, meaning that you can change it with mpirun CLI options to do whatever you want)
<br>
<p>Speak now if you disagree...
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
<li><strong>Next message:</strong> <a href="13459.php">Ralph Castain: "Re: [OMPI devel] Default mapping / binding"</a>
<li><strong>Previous message:</strong> <a href="13457.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13459.php">Ralph Castain: "Re: [OMPI devel] Default mapping / binding"</a>
<li><strong>Reply:</strong> <a href="13459.php">Ralph Castain: "Re: [OMPI devel] Default mapping / binding"</a>
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
