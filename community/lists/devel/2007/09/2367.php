<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 26 13:13:09 2007" -->
<!-- isoreceived="20070926171309" -->
<!-- sent="Wed, 26 Sep 2007 13:12:59 -0400" -->
<!-- isosent="20070926171259" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Use of the ompi free list" -->
<!-- id="46FA931B.5060104_at_Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C32008F7.F1AF%rlgraham_at_ornl.gov" -->
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
<strong>From:</strong> Don Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-26 13:12:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2368.php">Richard Graham: "Re: [OMPI devel] Use of the ompi free list"</a>
<li><strong>Previous message:</strong> <a href="2366.php">Richard Graham: "[OMPI devel] Use of the ompi free list"</a>
<li><strong>In reply to:</strong> <a href="2366.php">Richard Graham: "[OMPI devel] Use of the ompi free list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2368.php">Richard Graham: "Re: [OMPI devel] Use of the ompi free list"</a>
<li><strong>Reply:</strong> <a href="2368.php">Richard Graham: "Re: [OMPI devel] Use of the ompi free list"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rich,
<br>
<p>It appears the the udapl btl is not even building in your tmp branch.
<br>
<p>-DON
<br>
<p>&nbsp;...
<br>
&nbsp;&nbsp;&quot;btl_udapl.c&quot;, line 305: syntax error before or at: ;
<br>
&nbsp;&nbsp;&quot;btl_udapl.c&quot;, line 315: syntax error before or at: )
<br>
&nbsp;&nbsp;&quot;btl_udapl.c&quot;, line 374: cannot recover from previous errors
<br>
&nbsp;&nbsp;cc: acomp failed for btl_udapl.c
<br>
&nbsp;&nbsp;make[2]: *** [btl_udapl.lo] Error 1
<br>
&nbsp;&nbsp;make[2]: *** Waiting for unfinished jobs....
<br>
&nbsp;&nbsp;make[2]: Leaving directory
<br>
&nbsp;&nbsp;`/opt/mtt/64/non-threaded/free-list-branch-testing/installs/3m5g/src/free_list/ompi/mca/btl/udapl'
<br>
&nbsp;&nbsp;make[1]: *** [all-recursive] Error 1
<br>
&nbsp;&nbsp;make[1]: Leaving directory
<br>
&nbsp;&nbsp;`/opt/mtt/64/non-threaded/free-list-branch-testing/installs/3m5g/src/free_list/ompi'
<br>
&nbsp;&nbsp;make: *** [all-recursive] Error 1
<br>
<p><p><p><p>Richard Graham wrote:
<br>
<p><span class="quotelev1">&gt;We are looking at making some changes to the ompi free list in ompi/class/
</span><br>
<span class="quotelev1">&gt;ompi_free_list.[c,h] , and are trying to decide if to go ahead with an
</span><br>
<span class="quotelev1">&gt;interface change that will allow separate control over alignment of the frag
</span><br>
<span class="quotelev1">&gt;and payload data structures.  We are aware of several implementations of
</span><br>
<span class="quotelev1">&gt;btl's and mtl's that are not part of the Open MPI repository, and want to
</span><br>
<span class="quotelev1">&gt;minimize changes to these.  We have an option to make these changes by
</span><br>
<span class="quotelev1">&gt;duplicating code, and creating a new set of functions to handle the
</span><br>
<span class="quotelev1">&gt;alignment (and other cleanup) issues, not perturbing existing code.  The
</span><br>
<span class="quotelev1">&gt;questions are, does anyone have code out there that uses the ompi free
</span><br>
<span class="quotelev1">&gt;lists, and if so would would an interface change to the init functions cause
</span><br>
<span class="quotelev1">&gt;you trouble ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks,
</span><br>
<span class="quotelev1">&gt;Rich
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2368.php">Richard Graham: "Re: [OMPI devel] Use of the ompi free list"</a>
<li><strong>Previous message:</strong> <a href="2366.php">Richard Graham: "[OMPI devel] Use of the ompi free list"</a>
<li><strong>In reply to:</strong> <a href="2366.php">Richard Graham: "[OMPI devel] Use of the ompi free list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2368.php">Richard Graham: "Re: [OMPI devel] Use of the ompi free list"</a>
<li><strong>Reply:</strong> <a href="2368.php">Richard Graham: "Re: [OMPI devel] Use of the ompi free list"</a>
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
