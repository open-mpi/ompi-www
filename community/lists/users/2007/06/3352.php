<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  1 12:48:51 2007" -->
<!-- isoreceived="20070601164851" -->
<!-- sent="Fri, 1 Jun 2007 09:46:43 -0700" -->
<!-- isosent="20070601164643" -->
<!-- name="Reese Faucette" -->
<!-- email="reese_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mixing MX and TCP" -->
<!-- id="1cb601c7a46c$6f8419a0$58c31fac_at_bart" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="37029C8D-CEE1-48D8-A78E-4E9A2E31F114_at_cs.utk.edu" -->
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
<strong>From:</strong> Reese Faucette (<em>reese_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-01 12:46:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3353.php">Daniel Pfenniger: "[OMPI users] Compilation bug in libtool"</a>
<li><strong>Previous message:</strong> <a href="3351.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>In reply to:</strong> <a href="3351.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3365.php">Jeff Squyres: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Reply:</strong> <a href="3365.php">Jeff Squyres: "Re: [OMPI users] mixing MX and TCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to brainstorm on this a little - the two different clusters will have 
<br>
different &quot;mapper IDs&quot;, and this can be learned via the attached code 
<br>
snippet.  As long as fma is the mapper (as opposed the the older, deprecated 
<br>
&quot;gm_mapper&quot; or &quot;mx_mapper&quot;), then Myrinet topology rules ensure that NIC 0, 
<br>
port 0 is all you need to examine.  All nodes with the same mapper can then 
<br>
be considered &quot;on the same fabric&quot;
<br>
<p>Except, of course, when you have two fabrics A and B with many nodes each 
<br>
but only one node in common - then, all will have the same mapper ID, but 
<br>
are effectively two disjoint fabrics.  This is rare, but i have seen it 
<br>
once.
<br>
<p>Perhaps a more general solution is for the MX MTL to look in the MX peer 
<br>
table for a requested peer  (or simply try mx_connect() and notice it 
<br>
fails?) and report &quot;cannot reach&quot; back up the chain and have higher level 
<br>
code retry with a different medium on a per-peer basis?  This would be 
<br>
independent of IB or MX or ...
<br>
<p>===================================
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &quot;myriexpress.h&quot;
<br>
#include &quot;mx_io.h&quot;
<br>
<p>main()
<br>
{
<br>
&nbsp;&nbsp;mx_return_t ret;
<br>
&nbsp;&nbsp;mx_endpt_handle_t h;
<br>
&nbsp;&nbsp;mx_mapper_state_t ms;
<br>
&nbsp;&nbsp;int board = 0;                /* whichever board you want */
<br>
<p>&nbsp;&nbsp;mx_init();
<br>
&nbsp;&nbsp;ret = mx_open_board(board, &amp;h);
<br>
&nbsp;&nbsp;if (ret != MX_SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;Unable to open board %d\n&quot;, board);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;ms.board_number = board;
<br>
&nbsp;&nbsp;ms.iport = 0;
<br>
&nbsp;&nbsp;ret = mx__get_mapper_state(h, &amp;ms);
<br>
&nbsp;&nbsp;if (ret != MX_SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;get_mapper_state failed for board %d: %s\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;board, mx_strerror(ret));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;printf(&quot;mapper = %2.2x:%2.2x:%2.2x:%2.2x:%2.2x:%2.2x\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ms.mapper_mac[0] &amp; 0xff, ms.mapper_mac[1] &amp; 0xff,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ms.mapper_mac[2] &amp; 0xff, ms.mapper_mac[3] &amp; 0xff,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ms.mapper_mac[4] &amp; 0xff, ms.mapper_mac[5] &amp; 0xff);
<br>
&nbsp;&nbsp;exit(0);
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3353.php">Daniel Pfenniger: "[OMPI users] Compilation bug in libtool"</a>
<li><strong>Previous message:</strong> <a href="3351.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>In reply to:</strong> <a href="3351.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3365.php">Jeff Squyres: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Reply:</strong> <a href="3365.php">Jeff Squyres: "Re: [OMPI users] mixing MX and TCP"</a>
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
