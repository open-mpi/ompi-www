<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct  5 07:46:26 2007" -->
<!-- isoreceived="20071005114626" -->
<!-- sent="Fri, 5 Oct 2007 13:46:22 +0200" -->
<!-- isosent="20071005114622" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: delete mvapi BTL for v1.3" -->
<!-- id="A2AA9E54-A141-4E75-BA53-2D51CF81FE24_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-05 07:46:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2385.php">Richard Graham: "[OMPI devel] FW: Meeting at SC'07"</a>
<li><strong>Previous message:</strong> <a href="2383.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2424.php">Jeff Squyres: "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<li><strong>Reply:</strong> <a href="2424.php">Jeff Squyres: "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<li><strong>Maybe reply:</strong> <a href="2435.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Remove the mvapi BTL for the v1.3 release.
<br>
<p>WHY: None of the IB vendors want to maintain it anymore; our future  
<br>
is OFED.  If someone still has mvapi IB drivers, they can use the  
<br>
OMPI v1.2 series.
<br>
<p>WHERE: svn rm ompi/mca/btl/mvapi
<br>
<p>WHEN: Before the v1.3 release.
<br>
<p>TIMEOUT: COB, Thurs, Oct 11, 2007
<br>
<p>-----
<br>
<p>None of the IB vendors are interested in maintaining the &quot;mvapi&quot; BTL  
<br>
anymore.  Indeed, none of us have updated it with any of the new/ 
<br>
interesting/better performance features that went into the openib BTL  
<br>
over the past year (or more).  Additionally, some changes may be  
<br>
coming in the OMPI infrastructure that would *require* some revamping  
<br>
in the mvapi BTL -- and no one of Cisco, Voltaire, Mellanox is  
<br>
willing to do it.
<br>
<p>So we'd like to ditch the mvapi BTL starting with v1.3 and have the  
<br>
official guidance be that if you have mvapi, you need to use the OMPI  
<br>
v1.2 series (i.e., remove this from the SVN trunk in the Very Near  
<br>
Future).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2385.php">Richard Graham: "[OMPI devel] FW: Meeting at SC'07"</a>
<li><strong>Previous message:</strong> <a href="2383.php">Jeff Squyres: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2424.php">Jeff Squyres: "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<li><strong>Reply:</strong> <a href="2424.php">Jeff Squyres: "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<li><strong>Maybe reply:</strong> <a href="2435.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
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
