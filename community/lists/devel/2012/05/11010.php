<?
$subject_val = "[OMPI devel] Modified files after autogen";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 14:10:17 2012" -->
<!-- isoreceived="20120523181017" -->
<!-- sent="Wed, 23 May 2012 11:10:10 -0700" -->
<!-- isosent="20120523181010" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Modified files after autogen" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E84D32F90_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> [OMPI devel] Modified files after autogen<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-23 14:10:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11011.php">Ralph Castain: "Re: [OMPI devel] Modified files after autogen"</a>
<li><strong>Previous message:</strong> <a href="11009.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11011.php">Ralph Castain: "Re: [OMPI devel] Modified files after autogen"</a>
<li><strong>Reply:</strong> <a href="11011.php">Ralph Castain: "Re: [OMPI devel] Modified files after autogen"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After doing a fresh checkout of the trunk, and then running autogen, I see this:
<br>
<p>M       opal/mca/event/libevent2019/libevent/Makefile.in
<br>
M       opal/mca/event/libevent2019/libevent/depcomp
<br>
M       opal/mca/event/libevent2019/libevent/include/Makefile.in
<br>
M       opal/mca/event/libevent2019/libevent/configure
<br>
M       opal/mca/event/libevent2019/libevent/config.guess
<br>
M       opal/mca/event/libevent2019/libevent/config.sub
<br>
M       opal/mca/event/libevent2019/libevent/missing
<br>
M       opal/mca/event/libevent2019/libevent/aclocal.m4
<br>
M       opal/mca/event/libevent2019/libevent/install-sh
<br>
?       orte/mca/common/Makefile.in
<br>
?       orte/mca/common/pmi/Makefile.in
<br>
<p>It looks like the autogen that gets run in libevent makes a variety of modifications to these files so they showed up as modified under svn.
<br>
<p>I am just curious if this is the expected behavior as this seems somewhat new to me.
<br>
<p>Rolf
<br>
<p><p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11010/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11011.php">Ralph Castain: "Re: [OMPI devel] Modified files after autogen"</a>
<li><strong>Previous message:</strong> <a href="11009.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11011.php">Ralph Castain: "Re: [OMPI devel] Modified files after autogen"</a>
<li><strong>Reply:</strong> <a href="11011.php">Ralph Castain: "Re: [OMPI devel] Modified files after autogen"</a>
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
