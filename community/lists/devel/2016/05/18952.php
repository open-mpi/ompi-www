<?
$subject_val = "[OMPI devel] [v2.x] opal_list debug ref-count bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 13:38:19 2016" -->
<!-- isoreceived="20160510173819" -->
<!-- sent="Tue, 10 May 2016 10:38:11 -0700" -->
<!-- isosent="20160510173811" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [v2.x] opal_list debug ref-count bug?" -->
<!-- id="CAAvDA15209Co6hPTdq07yst7R=mgF3AQ7Bkesn4miqaoKooV6Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] [v2.x] opal_list debug ref-count bug?<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-10 13:38:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18953.php">George Bosilca: "Re: [OMPI devel] [v2.x] opal_list debug ref-count bug?"</a>
<li><strong>Previous message:</strong> <a href="18951.php">Edgar Gabriel: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18953.php">George Bosilca: "Re: [OMPI devel] [v2.x] opal_list debug ref-count bug?"</a>
<li><strong>Reply:</strong> <a href="18953.php">George Bosilca: "Re: [OMPI devel] [v2.x] opal_list debug ref-count bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am currently working with the v2.x branch, rather than tarballs.
<br>
<p>While attempting to build on AIX (which is ILP32 by default), I encountered
<br>
an unexpected undefined reference to __sync_add_and_fetch_8() from
<br>
opal/class/opal_list.h.
<br>
<p>I found that when debugging is enabled (as in almost every build I try)
<br>
there is the following code:
<br>
#if OPAL_ENABLE_DEBUG
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Spot check: ensure this item is only on the list that we
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;just insertted it into */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(void)opal_atomic_add( &amp;(item-&gt;opal_list_item_refcount), 1 );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert(1 == item-&gt;opal_list_item_refcount);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item-&gt;opal_list_item_belong_to = list;
<br>
#endif
<br>
<p>I am not sure why (and it may be an AIX-specific issue), but that
<br>
&quot;opal_atomic_add()&quot; is attempting a 64-bit add.
<br>
That is a problem, given that 'opal_list_item_refcount' is 32-bits!
<br>
<p>Noting that all other accesses to this field are OPAL_THREAD_ADD32(), I
<br>
suggest the following (with a bonus spell-check at no additional charge):
<br>
<p>--- opal/class/opal_list.c~     2016-05-10 10:20:19.000000000 -0700
<br>
+++ opal/class/opal_list.c      2016-05-10 10:29:14.000000000 -0700
<br>
@@ -142,9 +142,9 @@
<br>
<p>&nbsp;&nbsp;#if OPAL_ENABLE_DEBUG
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Spot check: ensure this item is only on the list that we
<br>
-            just insertted it into */
<br>
+            just inserted it into */
<br>
<p>-         (void)opal_atomic_add( &amp;(item-&gt;opal_list_item_refcount), 1 );
<br>
+         (void)OPAL_THREAD_ADD32( &amp;(item-&gt;opal_list_item_refcount), 1 );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert(1 == item-&gt;opal_list_item_refcount);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item-&gt;opal_list_item_belong_to = list;
<br>
&nbsp;&nbsp;#endif
<br>
<p><p>Source inspection shows the same mixing or opal_atomic_add() vs
<br>
OPAL_THREAD_ADD32() in master.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18952/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18953.php">George Bosilca: "Re: [OMPI devel] [v2.x] opal_list debug ref-count bug?"</a>
<li><strong>Previous message:</strong> <a href="18951.php">Edgar Gabriel: "Re: [OMPI devel] OMPIO vs ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18953.php">George Bosilca: "Re: [OMPI devel] [v2.x] opal_list debug ref-count bug?"</a>
<li><strong>Reply:</strong> <a href="18953.php">George Bosilca: "Re: [OMPI devel] [v2.x] opal_list debug ref-count bug?"</a>
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
