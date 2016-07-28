<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 15 11:28:06 2007" -->
<!-- isoreceived="20070615152806" -->
<!-- sent="Fri, 15 Jun 2007 11:27:51 -0400" -->
<!-- isosent="20070615152751" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] flags in openib btl" -->
<!-- id="B982AC91-2B83-4D2D-8C21-B8963753D107_at_cisco.com" -->
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
<strong>Date:</strong> 2007-06-15 11:27:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1723.php">Galen Shipman: "Re: [OMPI devel] flags in openib btl"</a>
<li><strong>Previous message:</strong> <a href="1721.php">Jeff Squyres: "[OMPI devel] 1.2.3rc1 is released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1723.php">Galen Shipman: "Re: [OMPI devel] flags in openib btl"</a>
<li><strong>Reply:</strong> <a href="1723.php">Galen Shipman: "Re: [OMPI devel] flags in openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I notice that our help message for the btl_openib_flags MCA parameter  
<br>
seems to be a bit out of date:
<br>
<p>CHECK(reg_int(&quot;flags&quot;, &quot;BTL flags, added together: SEND=1, PUT=2,  
<br>
GET=4 &quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;(cannot be 0)&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BTL_FLAGS_RDMA | MCA_BTL_FLAGS_NEED_ACK |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BTL_FLAGS_NEED_CSUM, &amp;ival, REGINT_GE_ZERO));
<br>
mca_btl_openib_module.super.btl_flags = (uint32_t) ival;
<br>
<p>Specifically, we only list values of 1, 2, and 4.  But the default  
<br>
value is 54.  So clearly, there's quite a few more flags that can be  
<br>
set there.
<br>
<p>What are they?
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
<li><strong>Next message:</strong> <a href="1723.php">Galen Shipman: "Re: [OMPI devel] flags in openib btl"</a>
<li><strong>Previous message:</strong> <a href="1721.php">Jeff Squyres: "[OMPI devel] 1.2.3rc1 is released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1723.php">Galen Shipman: "Re: [OMPI devel] flags in openib btl"</a>
<li><strong>Reply:</strong> <a href="1723.php">Galen Shipman: "Re: [OMPI devel] flags in openib btl"</a>
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
