<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun  5 08:50:57 2007" -->
<!-- isoreceived="20070605125057" -->
<!-- sent="Tue, 5 Jun 2007 08:50:39 -0400" -->
<!-- isosent="20070605125039" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mixing MX and TCP" -->
<!-- id="28BBA566-ACBE-4BE2-A13A-8E8447C37DFA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1cb601c7a46c$6f8419a0$58c31fac_at_bart" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-05 08:50:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3366.php">Ralph H Castain: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Previous message:</strong> <a href="3364.php">Prakash Velayutham: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>In reply to:</strong> <a href="3352.php">Reese Faucette: "Re: [OMPI users] mixing MX and TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3422.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, we do something similar in the openib BTL -- we use the subnet  
<br>
ID to determine if two IB ports are connected (we have the rule in  
<br>
OMPI that physically disconnected subnets must have different ID's --  
<br>
this is more stringent than the IB spec calls for).  See:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid">http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-which-subnet-id">http://www.open-mpi.org/faq/?category=openfabrics#ofa-which-subnet-id</a>
<br>
<p><p>On Jun 1, 2007, at 12:46 PM, Reese Faucette wrote:
<br>
<p><span class="quotelev1">&gt; Just to brainstorm on this a little - the two different clusters  
</span><br>
<span class="quotelev1">&gt; will have
</span><br>
<span class="quotelev1">&gt; different &quot;mapper IDs&quot;, and this can be learned via the attached code
</span><br>
<span class="quotelev1">&gt; snippet.  As long as fma is the mapper (as opposed the the older,  
</span><br>
<span class="quotelev1">&gt; deprecated
</span><br>
<span class="quotelev1">&gt; &quot;gm_mapper&quot; or &quot;mx_mapper&quot;), then Myrinet topology rules ensure  
</span><br>
<span class="quotelev1">&gt; that NIC 0,
</span><br>
<span class="quotelev1">&gt; port 0 is all you need to examine.  All nodes with the same mapper  
</span><br>
<span class="quotelev1">&gt; can then
</span><br>
<span class="quotelev1">&gt; be considered &quot;on the same fabric&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Except, of course, when you have two fabrics A and B with many  
</span><br>
<span class="quotelev1">&gt; nodes each
</span><br>
<span class="quotelev1">&gt; but only one node in common - then, all will have the same mapper  
</span><br>
<span class="quotelev1">&gt; ID, but
</span><br>
<span class="quotelev1">&gt; are effectively two disjoint fabrics.  This is rare, but i have  
</span><br>
<span class="quotelev1">&gt; seen it
</span><br>
<span class="quotelev1">&gt; once.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps a more general solution is for the MX MTL to look in the MX  
</span><br>
<span class="quotelev1">&gt; peer
</span><br>
<span class="quotelev1">&gt; table for a requested peer  (or simply try mx_connect() and notice it
</span><br>
<span class="quotelev1">&gt; fails?) and report &quot;cannot reach&quot; back up the chain and have higher  
</span><br>
<span class="quotelev1">&gt; level
</span><br>
<span class="quotelev1">&gt; code retry with a different medium on a per-peer basis?  This would be
</span><br>
<span class="quotelev1">&gt; independent of IB or MX or ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ===================================
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;myriexpress.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;mx_io.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; main()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   mx_return_t ret;
</span><br>
<span class="quotelev1">&gt;   mx_endpt_handle_t h;
</span><br>
<span class="quotelev1">&gt;   mx_mapper_state_t ms;
</span><br>
<span class="quotelev1">&gt;   int board = 0;                /* whichever board you want */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   mx_init();
</span><br>
<span class="quotelev1">&gt;   ret = mx_open_board(board, &amp;h);
</span><br>
<span class="quotelev1">&gt;   if (ret != MX_SUCCESS) {
</span><br>
<span class="quotelev1">&gt;     fprintf(stderr, &quot;Unable to open board %d\n&quot;, board);
</span><br>
<span class="quotelev1">&gt;     exit(1);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ms.board_number = board;
</span><br>
<span class="quotelev1">&gt;   ms.iport = 0;
</span><br>
<span class="quotelev1">&gt;   ret = mx__get_mapper_state(h, &amp;ms);
</span><br>
<span class="quotelev1">&gt;   if (ret != MX_SUCCESS) {
</span><br>
<span class="quotelev1">&gt;     fprintf(stderr, &quot;get_mapper_state failed for board %d: %s\n&quot;,
</span><br>
<span class="quotelev1">&gt;         board, mx_strerror(ret));
</span><br>
<span class="quotelev1">&gt;     exit(1);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   printf(&quot;mapper = %2.2x:%2.2x:%2.2x:%2.2x:%2.2x:%2.2x\n&quot;,
</span><br>
<span class="quotelev1">&gt;          ms.mapper_mac[0] &amp; 0xff, ms.mapper_mac[1] &amp; 0xff,
</span><br>
<span class="quotelev1">&gt;          ms.mapper_mac[2] &amp; 0xff, ms.mapper_mac[3] &amp; 0xff,
</span><br>
<span class="quotelev1">&gt;          ms.mapper_mac[4] &amp; 0xff, ms.mapper_mac[5] &amp; 0xff);
</span><br>
<span class="quotelev1">&gt;   exit(0);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3366.php">Ralph H Castain: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>Previous message:</strong> <a href="3364.php">Prakash Velayutham: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>In reply to:</strong> <a href="3352.php">Reese Faucette: "Re: [OMPI users] mixing MX and TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3422.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
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
