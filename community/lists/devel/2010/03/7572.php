<?
$subject_val = "[OMPI devel] how to add a component in the ompi?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 11:53:52 2010" -->
<!-- isoreceived="20100310165352" -->
<!-- sent="Thu, 11 Mar 2010 00:53:45 +0800" -->
<!-- isosent="20100310165345" -->
<!-- name="hu yaohui" -->
<!-- email="loki2441_at_[hidden]" -->
<!-- subject="[OMPI devel] how to add a component in the ompi?" -->
<!-- id="632a27d11003100853o24c290f0tf6010ea0fab96a2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] how to add a component in the ompi?<br>
<strong>From:</strong> hu yaohui (<em>loki2441_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-10 11:53:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7573.php">Jeff Squyres: "Re: [OMPI devel] RFC: increase default AC/AM/LT requirements"</a>
<li><strong>Previous message:</strong> <a href="7571.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7580.php">Jeff Squyres: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Reply:</strong> <a href="7580.php">Jeff Squyres: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff &amp; All
<br>
i want to add a new component in the ompi,
<br>
1: i make a dir ~/mca/btl/ht
<br>
2:Then,i have made sure some basic functions i need to implement.
<br>
such as:
<br>
mca_btl_ht_add_procs,
<br>
mca_btl_ht_del_procs,
<br>
mca_btl_ht_alloc
<br>
mca_btl_ht_free
<br>
mca_btl_ht_finalize.
<br>
3:after these functions,i must compile these funcitons,i copied the makefire
<br>
under ~/mca/btl/tcp/,
<br>
i have seen these:
<br>
&lt;snip&gt;
<br>
&nbsp;MCA_btl_ALL_COMPONENTS =  self sm elan gm mx ofud openib portals tcp udapl
<br>
&nbsp;MCA_btl_ALL_SUBDIRS =  mca/btl/self mca/btl/sm mca/btl/elan mca/btl/gm
<br>
mca/btl/mx mca/btl/o
<br>
fud mca/btl/openib mca/btl/portals mca/btl/tcp mca/btl/udapl
<br>
&lt;/snip&gt;
<br>
add my component into these two lines is just not enough.
<br>
Can you help me out on making a right Makefile for my component under folder
<br>
~/mca/blt/ht?
<br>
<p>Thanks &amp; Regards,
<br>
Yaohui Hu
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7572/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7573.php">Jeff Squyres: "Re: [OMPI devel] RFC: increase default AC/AM/LT requirements"</a>
<li><strong>Previous message:</strong> <a href="7571.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7580.php">Jeff Squyres: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Reply:</strong> <a href="7580.php">Jeff Squyres: "Re: [OMPI devel] how to add a component in the ompi?"</a>
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
