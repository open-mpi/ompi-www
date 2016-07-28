<?
$subject_val = "[OMPI devel] 1.8.2rc3 cosmetic issues in configure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 03:47:26 2014" -->
<!-- isoreceived="20140804074726" -->
<!-- sent="Mon, 4 Aug 2014 00:47:25 -0700" -->
<!-- isosent="20140804074725" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.8.2rc3 cosmetic issues in configure" -->
<!-- id="CAAvDA149AT0wJAKAFO7C6ZQiAYMBawbsZhfe1sK4WVcLP8hvdw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.8.2rc3 cosmetic issues in configure<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-04 03:47:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15494.php">Yossi Etigin: "[OMPI devel] canceling buffered send request with pml/cm"</a>
<li><strong>Previous message:</strong> <a href="15492.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15515.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc3 cosmetic issues in configure"</a>
<li><strong>Reply:</strong> <a href="15515.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc3 cosmetic issues in configure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like four instances of AC_MSG_CHECKING are missing an
<br>
AC_MSG_RESULT or have other configure macros improperly nested between the
<br>
two:
<br>
<p>checking for epoll support... checking for epoll_ctl... yes
<br>
yes
<br>
checking for working epoll library interface... yes
<br>
yes
<br>
<p>checking if user requested CMA build... checking --with-knem value...
<br>
simple ok (unspecified)
<br>
<p>checking if user requested CMA build... checking if MCA component btl:vader
<br>
can compile... yes
<br>
<p>checking orte configuration args... checking if MCA component dpm:orte can
<br>
compile... yes
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15493/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15494.php">Yossi Etigin: "[OMPI devel] canceling buffered send request with pml/cm"</a>
<li><strong>Previous message:</strong> <a href="15492.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc3] static linking fails on linux when not building ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15515.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc3 cosmetic issues in configure"</a>
<li><strong>Reply:</strong> <a href="15515.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc3 cosmetic issues in configure"</a>
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
