<?
$subject_val = "[OMPI devel] need help when make";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 23 09:32:48 2010" -->
<!-- isoreceived="20100323133248" -->
<!-- sent="Tue, 23 Mar 2010 21:32:43 +0800" -->
<!-- isosent="20100323133243" -->
<!-- name="hu yaohui" -->
<!-- email="loki2441_at_[hidden]" -->
<!-- subject="[OMPI devel] need help when make" -->
<!-- id="632a27d11003230632x286c2847ga1b93770d746f42f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] need help when make<br>
<strong>From:</strong> hu yaohui (<em>loki2441_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-23 09:32:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7653.php">Jeff Squyres: "Re: [OMPI devel] need help when make"</a>
<li><strong>Previous message:</strong> <a href="7651.php">Joshua Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7653.php">Jeff Squyres: "Re: [OMPI devel] need help when make"</a>
<li><strong>Reply:</strong> <a href="7653.php">Jeff Squyres: "Re: [OMPI devel] need help when make"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,Jeff and All
<br>
Recently i add a component into the btl,named HT,it is very similar to sm.i
<br>
meet a problem when make.
<br>
steps to reproduce
<br>
1:make three ht directories under
<br>
~/ompi/mca/btl/ht ~/ompi/mca/mpool/ht ~/ompi/mca/common/ht,
<br>
2:i copy most code and file from sm component
<br>
3:i run ./autogen.sh no problem
<br>
4:run make i get the follow error
<br>
&lt;snip&gt;
<br>
make[2]: Entering directory `/home/loki/openmpi-1.4-ht/ompi/mca/common/ht'
<br>
/bin/sh ../../../../libtool --tag=CC   --mode=link gcc  -g
<br>
-finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden
<br>
-version-info  -export-dynamic   -o libmca_common_ht.la -rpath
<br>
/usr/local/ompiht/lib  common_ht_mmap.lo  -lnsl -lutil  -lm
<br>
libtool: link: CURRENT `-export-dynamic' must be a nonnegative integer
<br>
libtool: link: `-export-dynamic' is not valid version information
<br>
&lt;/snip&gt;
<br>
can you tell me why?my libtool is the latest version 2.2.6b.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7652/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7653.php">Jeff Squyres: "Re: [OMPI devel] need help when make"</a>
<li><strong>Previous message:</strong> <a href="7651.php">Joshua Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7653.php">Jeff Squyres: "Re: [OMPI devel] need help when make"</a>
<li><strong>Reply:</strong> <a href="7653.php">Jeff Squyres: "Re: [OMPI devel] need help when make"</a>
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
