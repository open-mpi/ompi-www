<?
$subject_val = "[OMPI devel] trunk - ibverbs configure error on Solaris-11";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  8 20:38:46 2014" -->
<!-- isoreceived="20140109013846" -->
<!-- sent="Wed, 8 Jan 2014 17:38:44 -0800" -->
<!-- isosent="20140109013844" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk - ibverbs configure error on Solaris-11" -->
<!-- id="CAAvDA174sxVS2sJ4jD+i7YqZGVONwzis35ari6+u-41h-TVdeg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] trunk - ibverbs configure error on Solaris-11<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-08 20:38:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13599.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30148 - implicit decl of bzero on Solaris"</a>
<li><strong>Previous message:</strong> <a href="13597.php">Paul Hargrove: "[OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13640.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<li><strong>Reply:</strong> <a href="13640.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When trying to configure the OMPI trunk on a Solaris-11/x86-64 with
<br>
--enable-openib, I see the following error not seen with the 1.7 branch:
<br>
<p>*** Compiler flags
<br>
checking which of CFLAGS are ok for debugger modules...  -DNDEBUG -m64 -mt
<br>
checking for debugger extra CFLAGS... -g
<br>
checking for the C compiler vendor... (cached) sun
<br>
checking if want to add padding to the openib BTL control header... no
<br>
checking for fcntl.h... (cached) yes
<br>
checking for sys/poll.h... (cached) yes
<br>
checking infiniband/verbs.h usability... yes
<br>
checking infiniband/verbs.h presence... yes
<br>
checking for infiniband/verbs.h... yes
<br>
looking for library without search path
<br>
checking for ibv_open_device in -libverbs... no
<br>
checking if ConnectX XRC support is enabled... no
<br>
checking if dynamic SL is enabled... no
<br>
configure: WARNING: Verbs support requested (via --with-verbs) but not
<br>
found.
<br>
configure: WARNING: If you are using libibverbs v1.0 (i.e., OFED v1.0 or
<br>
v1.1), you *MUST* have both the libsysfs headers and libraries installed.
<br>
&nbsp;Later versions of libibverbs do not require libsysfs.
<br>
configure: error: Aborting.
<br>
<p>This is despite an earlier:
<br>
checking if MCA component btl:openib can compile... yes
<br>
<p>The error above is with the Solaris Studio compilers, but the same happens
<br>
with the GNU compilers.
<br>
The (compressed) full configure output for the GNU case is attached.
<br>
<p>This is a regression relative to the current 1.7.4rc, in which the openib
<br>
btl works fine on Solaris-11/x86-64, by which I mean I can configure with
<br>
--enable-openib and the following command line works:
<br>
mpirun -host pcp-j-19,pcp-j-20 -mca btl openib,self -np 2 examples/ring_c
<br>
<p>My best guess is that either the libsysfs requirement itself OR its
<br>
associated test is Linux-specific.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13598/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13598/configure.log.bz2">configure.log.bz2</a>
</ul>
<!-- attachment="configure.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13599.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30148 - implicit decl of bzero on Solaris"</a>
<li><strong>Previous message:</strong> <a href="13597.php">Paul Hargrove: "[OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13640.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<li><strong>Reply:</strong> <a href="13640.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
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
