<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 11 18:15:03 2006" -->
<!-- isoreceived="20060911221503" -->
<!-- sent="Tue, 12 Sep 2006 00:15:01 +0200" -->
<!-- isosent="20060911221501" -->
<!-- name="Christian Siebert" -->
<!-- email="christian.siebert_at_[hidden]" -->
<!-- subject="[OMPI devel] fatal bug in coll_tuned_bcast.c" -->
<!-- id="20060912001501.of6aki3gysok0gwc_at_mail.tu-chemnitz.de" -->
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
<strong>From:</strong> Christian Siebert (<em>christian.siebert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-11 18:15:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1060.php">Graham E Fagg: "Re: [OMPI devel] fatal bug in coll_tuned_bcast.c"</a>
<li><strong>Previous message:</strong> <a href="1058.php">Sven Stork: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1060.php">Graham E Fagg: "Re: [OMPI devel] fatal bug in coll_tuned_bcast.c"</a>
<li><strong>Reply:</strong> <a href="1060.php">Graham E Fagg: "Re: [OMPI devel] fatal bug in coll_tuned_bcast.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I stumbled across a serious bug in the tuned component of Open MPI, 
<br>
which crashes for example the well-known HPL benchmark in conjunction 
<br>
with the &quot;native MPI_Bcast() patch&quot; [1].
<br>
<p>The problem is within the function ompi_coll_tuned_bcast_intra_chain(), 
<br>
which does mainly the following:
<br>
<p>&nbsp;&nbsp;ompi_ddt_type_size( datatype, &amp;typelng );
<br>
&nbsp;&nbsp;segcount = segsize / typelng;
<br>
&nbsp;&nbsp;num_segments = count / segcount;
<br>
<p>Whenever you have a constructed type with a size larger than 'segsize' 
<br>
(16384), you'll get a 'seqcount' of zero and finally a division by zero.
<br>
<p>Happy fixing!
<br>
<p>&nbsp;&nbsp;Christian
<br>
<p>[1] <a href="http://www-user.tu-chemnitz.de/~chsi/hpl/">http://www-user.tu-chemnitz.de/~chsi/hpl/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1060.php">Graham E Fagg: "Re: [OMPI devel] fatal bug in coll_tuned_bcast.c"</a>
<li><strong>Previous message:</strong> <a href="1058.php">Sven Stork: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1060.php">Graham E Fagg: "Re: [OMPI devel] fatal bug in coll_tuned_bcast.c"</a>
<li><strong>Reply:</strong> <a href="1060.php">Graham E Fagg: "Re: [OMPI devel] fatal bug in coll_tuned_bcast.c"</a>
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
