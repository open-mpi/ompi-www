<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 26 13:36:09 2007" -->
<!-- isoreceived="20070926173609" -->
<!-- sent="Wed, 26 Sep 2007 13:36:05 -0400" -->
<!-- isosent="20070926173605" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Use of the ompi free list" -->
<!-- id="C32010C5.F1B9%rlgraham_at_ornl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46FA931B.5060104_at_Sun.COM" -->
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
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-26 13:36:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2369.php">Don Kerr: "Re: [OMPI devel] Use of the ompi free list"</a>
<li><strong>Previous message:</strong> <a href="2367.php">Don Kerr: "Re: [OMPI devel] Use of the ompi free list"</a>
<li><strong>In reply to:</strong> <a href="2367.php">Don Kerr: "Re: [OMPI devel] Use of the ompi free list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2369.php">Don Kerr: "Re: [OMPI devel] Use of the ompi free list"</a>
<li><strong>Reply:</strong> <a href="2369.php">Don Kerr: "Re: [OMPI devel] Use of the ompi free list"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just made a fix &#173; there was a semi-colon instead of a comma.  I can&#185;t build
<br>
this, so 
<br>
&nbsp;it you want to give it a shot, I would appreciate this.
<br>
<p>Rich
<br>
<p><p>On 9/26/07 1:12 PM, &quot;Don Kerr&quot; &lt;Don.Kerr_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Rich,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It appears the the udapl btl is not even building in your tmp branch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -DON
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ...
</span><br>
<span class="quotelev1">&gt;   &quot;btl_udapl.c&quot;, line 305: syntax error before or at: ;
</span><br>
<span class="quotelev1">&gt;   &quot;btl_udapl.c&quot;, line 315: syntax error before or at: )
</span><br>
<span class="quotelev1">&gt;   &quot;btl_udapl.c&quot;, line 374: cannot recover from previous errors
</span><br>
<span class="quotelev1">&gt;   cc: acomp failed for btl_udapl.c
</span><br>
<span class="quotelev1">&gt;   make[2]: *** [btl_udapl.lo] Error 1
</span><br>
<span class="quotelev1">&gt;   make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt;   make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; `/opt/mtt/64/non-threaded/free-list-branch-testing/installs/3m5g/src/free_list
</span><br>
<span class="quotelev1">&gt; /ompi/mca/btl/udapl'
</span><br>
<span class="quotelev1">&gt;   make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;   make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; `/opt/mtt/64/non-threaded/free-list-branch-testing/installs/3m5g/src/free_list
</span><br>
<span class="quotelev1">&gt; /ompi'
</span><br>
<span class="quotelev1">&gt;   make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Richard Graham wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;We are looking at making some changes to the ompi free list in ompi/class/
</span><br>
<span class="quotelev3">&gt;&gt; &gt;ompi_free_list.[c,h] , and are trying to decide if to go ahead with an
</span><br>
<span class="quotelev3">&gt;&gt; &gt;interface change that will allow separate control over alignment of the frag
</span><br>
<span class="quotelev3">&gt;&gt; &gt;and payload data structures.  We are aware of several implementations of
</span><br>
<span class="quotelev3">&gt;&gt; &gt;btl's and mtl's that are not part of the Open MPI repository, and want to
</span><br>
<span class="quotelev3">&gt;&gt; &gt;minimize changes to these.  We have an option to make these changes by
</span><br>
<span class="quotelev3">&gt;&gt; &gt;duplicating code, and creating a new set of functions to handle the
</span><br>
<span class="quotelev3">&gt;&gt; &gt;alignment (and other cleanup) issues, not perturbing existing code.  The
</span><br>
<span class="quotelev3">&gt;&gt; &gt;questions are, does anyone have code out there that uses the ompi free
</span><br>
<span class="quotelev3">&gt;&gt; &gt;lists, and if so would would an interface change to the init functions cause
</span><br>
<span class="quotelev3">&gt;&gt; &gt;you trouble ?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Thanks,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Rich
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt;devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt;devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2368/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2369.php">Don Kerr: "Re: [OMPI devel] Use of the ompi free list"</a>
<li><strong>Previous message:</strong> <a href="2367.php">Don Kerr: "Re: [OMPI devel] Use of the ompi free list"</a>
<li><strong>In reply to:</strong> <a href="2367.php">Don Kerr: "Re: [OMPI devel] Use of the ompi free list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2369.php">Don Kerr: "Re: [OMPI devel] Use of the ompi free list"</a>
<li><strong>Reply:</strong> <a href="2369.php">Don Kerr: "Re: [OMPI devel] Use of the ompi free list"</a>
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
