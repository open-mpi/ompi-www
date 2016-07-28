<?
$subject_val = "[OMPI devel] how do openmpi organize network components?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 04:18:20 2010" -->
<!-- isoreceived="20100204091820" -->
<!-- sent="Thu, 4 Feb 2010 17:18:15 +0800" -->
<!-- isosent="20100204091815" -->
<!-- name="hu yaohui" -->
<!-- email="loki2441_at_[hidden]" -->
<!-- subject="[OMPI devel] how do openmpi organize network components?" -->
<!-- id="632a27d11002040118x88b4d66t37667fb1ed174da0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] how do openmpi organize network components?<br>
<strong>From:</strong> hu yaohui (<em>loki2441_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-04 04:18:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7376.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="7374.php">Jeff Squyres: "[OMPI devel] New feature for SVN commit messages"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi everyone,
<br>
i am reading some openmpi source code right now, i am just confused by the
<br>
network components(modules) organization in
<br>
(ompi/mca/pml/base/pml_base_select.c/mpimca_pml_ob1_add_procs)
<br>
(ompi/mca/pml/ob1/pml_ob1.c/mpimca_pml_ob1_add_procs)
<br>
(ompi/mca/btl/tcp/btl_tcp.c/mca_btl_tcp_add_procs)
<br>
(ompi/mca/btl/tcp/btl_tcp_proc.c/mca_btl_tcp_proc_insert)
<br>
is there someone could tell me the details about the selection of the btls
<br>
,and how they are organized in the above functions,is there some doucument
<br>
about network components organization i can refer to ?
<br>
Thanks &amp; Regards,
<br>
Loki
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7375/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7376.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="7374.php">Jeff Squyres: "[OMPI devel] New feature for SVN commit messages"</a>
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
