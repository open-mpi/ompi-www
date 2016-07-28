<?
$subject_val = "Re: [OMPI devel] mtl:psm configury build broken in master";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 20:19:17 2015" -->
<!-- isoreceived="20150227011917" -->
<!-- sent="Fri, 27 Feb 2015 01:19:15 +0000" -->
<!-- isosent="20150227011915" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mtl:psm configury build broken in master" -->
<!-- id="37B61B56-BC8C-4961-A1B5-73F0D9689CC2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA14vSWWF=HF35rBj73rY8JZ4vzOxDiYPqjCtmQ4U4d0NSQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mtl:psm configury build broken in master<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-26 20:19:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17071.php">Paul Hargrove: "[OMPI devel] nearly-irrepoducable failure of master on Mac OS X 10.8"</a>
<li><strong>Previous message:</strong> <a href="17069.php">Paul Hargrove: "[OMPI devel] Master warning on oob:ud w/ PGI"</a>
<li><strong>In reply to:</strong> <a href="17067.php">Paul Hargrove: "[OMPI devel] mtl:psm configury build broken in master"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nite that there's a psm finalize check right before that that is not cached.
<br>
<p>Sent from my phone. No type good.
<br>
<p>On Feb 26, 2015, at 7:12 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
<br>
<p>I have been testing mtl:psm on a very old system.
<br>
Sometime pretty recently (this week I think), this started to break at configure time:
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
<p>I strongly suspect that &quot;(cached) no&quot; is a sign of the real problem.
<br>
The test didn't find /usr/local/Infinipath/lib64/libpsm_infinipath.so.1.0 because it didn't actually try to!
<br>
<p>For comparison here is the same section of configure output archived from testing of 1.8.4rc5:
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
<p>Note the &quot;yes&quot; rather than &quot;(cached) no&quot; AND the different checking description (specific lib vs any).
<br>
<p>-Paul
<br>
<p><pre>
--
Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17067.php">http://www.open-mpi.org/community/lists/devel/2015/02/17067.php</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17070/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17071.php">Paul Hargrove: "[OMPI devel] nearly-irrepoducable failure of master on Mac OS X 10.8"</a>
<li><strong>Previous message:</strong> <a href="17069.php">Paul Hargrove: "[OMPI devel] Master warning on oob:ud w/ PGI"</a>
<li><strong>In reply to:</strong> <a href="17067.php">Paul Hargrove: "[OMPI devel] mtl:psm configury build broken in master"</a>
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
