<?
$subject_val = "Re: [OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 26 18:04:30 2014" -->
<!-- isoreceived="20140726220430" -->
<!-- sent="Sat, 26 Jul 2014 15:04:27 -0700" -->
<!-- isosent="20140726220427" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K" -->
<!-- id="06722C9F-B4D3-4123-89B6-4BFDC70972C8_at_nvidia.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAMJJpkWFD+KhsptM9LiDh-hVnn+_yFOrCEnY1EAfeA_g-HwTpQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-26 18:04:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15275.php">George Bosilca: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15273.php">George Bosilca: "Re: [OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K"</a>
<li><strong>In reply to:</strong> <a href="15273.php">George Bosilca: "Re: [OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes (my mistake)
<br>

<br>

<br>
Sent from my iPhone
<br>

<br>
On Jul 26, 2014, at 3:19 PM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
<br>

<br>
We are talking MB not KB isn't it?
<br>

<br>
&nbsp;&nbsp;George.
<br>

<br>

<br>

<br>
On Thu, Jul 24, 2014 at 2:57 PM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&lt;mailto:rvandevaart_at_[hidden]&gt;&gt; wrote:
<br>
WHAT: Bump up the minimum sm pool size to 128K from 64K.
<br>
WHY: When running OSU benchmark on 2 nodes and utilizing a larger btl_smcuda_max_send_size, we can run into the case where the free list cannot grow.  This is not a common case, but it is something that folks sometimes experiment with.  Also note that this minimum was set back 5 years ago so it seems that it could be time to bump it up.
<br>
WHEN: Tuesday, July 29, 2014 after weekly concall if there are no objections.
<br>

<br>

<br>
[rvandevaart_at_ivy0 ompi-trunk-regerror]$ svn diff ompi/mca/mpool/sm/mpool_sm_component.c
<br>
Index: ompi/mca/mpool/sm/mpool_sm_component.c
<br>
===================================================================
<br>
--- ompi/mca/mpool/sm/mpool_sm_component.c      (revision 32293)
<br>
+++ ompi/mca/mpool/sm/mpool_sm_component.c      (working copy)
<br>
@@ -80,7 +80,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;};
<br>

<br>
-static long default_min = 67108864;
<br>
+static long default_min = 134217728;
<br>
&nbsp;static unsigned long long ompi_mpool_sm_min_size;
<br>
&nbsp;static int ompi_mpool_sm_verbose;
<br>

<br>
[rvandevaart_at_drossetti-ivy0 ompi-trunk-regerror]$
<br>
-----------------------------------------------------------------------------------
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
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15257.php">http://www.open-mpi.org/community/lists/devel/2014/07/15257.php</a>
<br>

<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15273.php">http://www.open-mpi.org/community/lists/devel/2014/07/15273.php</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15274/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15275.php">George Bosilca: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15273.php">George Bosilca: "Re: [OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K"</a>
<li><strong>In reply to:</strong> <a href="15273.php">George Bosilca: "Re: [OMPI devel] RFC: Bump minimum sm pool size to 128K from 64K"</a>
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
