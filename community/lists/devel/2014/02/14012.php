<?
$subject_val = "[OMPI devel] singleton appears to be broken";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  6 18:53:05 2014" -->
<!-- isoreceived="20140206235305" -->
<!-- sent="Fri, 7 Feb 2014 00:53:02 +0100" -->
<!-- isosent="20140206235302" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] singleton appears to be broken" -->
<!-- id="B72D0C49-8BB9-4B1F-ADA4-B73D4E30F259_at_icl.utk.edu" -->
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
<strong>Subject:</strong> [OMPI devel] singleton appears to be broken<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-06 18:53:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14013.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] singleton appears to be broken"</a>
<li><strong>Previous message:</strong> <a href="14011.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14013.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] singleton appears to be broken"</a>
<li><strong>Reply:</strong> <a href="14013.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] singleton appears to be broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A singleton hello_world assert with the following output:
<br>
<p>&nbsp;Warning :: opal_list_remove_item - the item 0x1211fc0 is not on the list 0x7f2cd9161ae0
<br>
hello: ../../../../ompi/orte/mca/rml/base/rml_base_msg_handlers.c:75: orte_rml_base_post_recv: Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) == ((opal_object_t *) (recv))-&gt;obj_magic_id' failed.
<br>
[dancer:00698] *** Process received signal ***
<br>
[dancer:00698] Signal: Aborted (6)
<br>
[dancer:00698] Signal code:  (-6)
<br>
[dancer:00698] [ 0] /lib64/libpthread.so.0[0x3d8480f710]
<br>
[dancer:00698] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x3d83c32925]
<br>
[dancer:00698] [ 2] /lib64/libc.so.6(abort+0x175)[0x3d83c34105]
<br>
[dancer:00698] [ 3] /lib64/libc.so.6[0x3d83c2ba4e]
<br>
[dancer:00698] [ 4] /lib64/libc.so.6(__assert_perror_fail+0x0)[0x3d83c2bb10]
<br>
[dancer:00698] [ 5] /home/bosilca/opt/trunk/lib/libopen-rte.so.0(orte_rml_base_post_recv+0x252)[0x7f2cd8e76d55]
<br>
[dancer:00698] [ 6] /home/bosilca/opt/trunk/lib/libopen-pal.so.0(+0xcca5d)[0x7f2cd89e8a5d]
<br>
[dancer:00698] [ 7] /home/bosilca/opt/trunk/lib/libopen-pal.so.0(+0xcce53)[0x7f2cd89e8e53]
<br>
[dancer:00698] [ 8] /home/bosilca/opt/trunk/lib/libopen-pal.so.0(opal_libevent2021_event_base_loop+0x4eb)[0x7f2cd89e99ea]
<br>
[dancer:00698] [ 9] /home/bosilca/opt/trunk/lib/libopen-rte.so.0(+0x28725)[0x7f2cd8d1b725]
<br>
[dancer:00698] [10] /lib64/libpthread.so.0[0x3d848079d1]
<br>
[dancer:00698] [11] /lib64/libc.so.6(clone+0x6d)[0x3d83ce8b6d]
<br>
[dancer:00698] *** End of error message ***
<br>
<p>The same executable run via mpirun with a single process succeed. This is with trunk, I did not tried with the release.
<br>
<p>George.<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14013.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] singleton appears to be broken"</a>
<li><strong>Previous message:</strong> <a href="14011.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14013.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] singleton appears to be broken"</a>
<li><strong>Reply:</strong> <a href="14013.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] singleton appears to be broken"</a>
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
