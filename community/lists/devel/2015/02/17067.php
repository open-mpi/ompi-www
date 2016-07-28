<?
$subject_val = "[OMPI devel] mtl:psm configury build broken in master";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 19:12:26 2015" -->
<!-- isoreceived="20150227001226" -->
<!-- sent="Thu, 26 Feb 2015 16:12:24 -0800" -->
<!-- isosent="20150227001224" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] mtl:psm configury build broken in master" -->
<!-- id="CAAvDA14vSWWF=HF35rBj73rY8JZ4vzOxDiYPqjCtmQ4U4d0NSQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] mtl:psm configury build broken in master<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-26 19:12:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17068.php">Paul Hargrove: "[OMPI devel] CORRECTION: mtl:psm configury broken (but NOT on master)"</a>
<li><strong>Previous message:</strong> <a href="17066.php">George Bosilca: "Re: [OMPI devel] opal_verbs_want_fork_support question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mtl:psm configury build broken in master"</a>
<li><strong>Reply:</strong> <a href="17070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mtl:psm configury build broken in master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have been testing mtl:psm on a very old system.
<br>
Sometime pretty recently (this week I think), this started to break at
<br>
configure time:
<br>
<p>--- MCA component mtl:psm (m4 configuration macro)
<br>
checking for MCA component mtl:psm compile mode... dso
<br>
checking --with-psm value... sanity check ok (/usr/local/Infinipath)
<br>
checking --with-psm-libdir value... simple ok (unspecified)
<br>
checking psm.h usability... yes
<br>
checking psm.h presence... yes
<br>
checking for psm.h... yes
<br>
looking for library in lib
<br>
checking for library containing psm_finalize... no
<br>
looking for library in lib64
<br>
checking for library containing psm_finalize... (cached) no
<br>
configure: error: PSM support requested but not found.  Aborting
<br>
<p><p>I strongly suspect that &quot;(cached) no&quot; is a sign of the real problem.
<br>
The test didn't find /usr/local/Infinipath/lib64/libpsm_infinipath.so.1.0
<br>
because it didn't actually try to!
<br>
<p>For comparison here is the same section of configure output archived from
<br>
testing of 1.8.4rc5:
<br>
<p>--- MCA component mtl:psm (m4 configuration macro)
<br>
checking for MCA component mtl:psm compile mode... dso
<br>
checking --with-psm value... sanity check ok (/usr/local/Infinipath)
<br>
checking --with-psm-libdir value... simple ok (unspecified)
<br>
checking psm.h usability... yes
<br>
checking psm.h presence... yes
<br>
checking for psm.h... yes
<br>
looking for library in lib
<br>
checking for psm_finalize in -lpsm_infinipath... no
<br>
looking for library in lib64
<br>
checking for psm_finalize in -lpsm_infinipath... yes
<br>
checking if MCA component mtl:psm can compile... yes
<br>
checking for index in endpoint array for tag MTL... 1
<br>
<p><p>Note the &quot;yes&quot; rather than &quot;(cached) no&quot; AND the different checking
<br>
description (specific lib vs any).
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17067/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17068.php">Paul Hargrove: "[OMPI devel] CORRECTION: mtl:psm configury broken (but NOT on master)"</a>
<li><strong>Previous message:</strong> <a href="17066.php">George Bosilca: "Re: [OMPI devel] opal_verbs_want_fork_support question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mtl:psm configury build broken in master"</a>
<li><strong>Reply:</strong> <a href="17070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mtl:psm configury build broken in master"</a>
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
