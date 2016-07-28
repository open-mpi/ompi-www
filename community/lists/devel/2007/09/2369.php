<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 26 13:42:37 2007" -->
<!-- isoreceived="20070926174237" -->
<!-- sent="Wed, 26 Sep 2007 13:42:25 -0400" -->
<!-- isosent="20070926174225" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Use of the ompi free list" -->
<!-- id="46FA9A01.4030303_at_Sun.COM" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C32010C5.F1B9%rlgraham_at_ornl.gov" -->
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
<strong>Date:</strong> 2007-09-26 13:42:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2370.php">Dirk Eddelbuettel: "[OMPI devel] Small manual page patches from Debian package"</a>
<li><strong>Previous message:</strong> <a href="2368.php">Richard Graham: "Re: [OMPI devel] Use of the ompi free list"</a>
<li><strong>In reply to:</strong> <a href="2368.php">Richard Graham: "Re: [OMPI devel] Use of the ompi free list"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
will do
<br>
<p>Richard Graham wrote:
<br>
<p><span class="quotelev1">&gt; Just made a fix &#150; there was a semi-colon instead of a comma. I can&#146;t 
</span><br>
<span class="quotelev1">&gt; build this, so
</span><br>
<span class="quotelev1">&gt; it you want to give it a shot, I would appreciate this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/26/07 1:12 PM, &quot;Don Kerr&quot; &lt;Don.Kerr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Rich,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     It appears the the udapl btl is not even building in your tmp branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -DON
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ...
</span><br>
<span class="quotelev1">&gt;     &quot;btl_udapl.c&quot;, line 305: syntax error before or at: ;
</span><br>
<span class="quotelev1">&gt;     &quot;btl_udapl.c&quot;, line 315: syntax error before or at: )
</span><br>
<span class="quotelev1">&gt;     &quot;btl_udapl.c&quot;, line 374: cannot recover from previous errors
</span><br>
<span class="quotelev1">&gt;     cc: acomp failed for btl_udapl.c
</span><br>
<span class="quotelev1">&gt;     make[2]: *** [btl_udapl.lo] Error 1
</span><br>
<span class="quotelev1">&gt;     make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt;     make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt;     `/opt/mtt/64/non-threaded/free-list-branch-testing/installs/3m5g/src/free_list/ompi/mca/btl/udapl'
</span><br>
<span class="quotelev1">&gt;     make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;     make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;     `/opt/mtt/64/non-threaded/free-list-branch-testing/installs/3m5g/src/free_list/ompi'
</span><br>
<span class="quotelev1">&gt;     make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Richard Graham wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;We are looking at making some changes to the ompi free list in
</span><br>
<span class="quotelev1">&gt;     ompi/class/
</span><br>
<span class="quotelev2">&gt;&gt;ompi_free_list.[c,h] , and are trying to decide if to go ahead with an
</span><br>
<span class="quotelev2">&gt;&gt;interface change that will allow separate control over alignment
</span><br>
<span class="quotelev1">&gt;     of the frag
</span><br>
<span class="quotelev2">&gt;&gt;and payload data structures. We are aware of several
</span><br>
<span class="quotelev1">&gt;     implementations of
</span><br>
<span class="quotelev2">&gt;&gt;btl's and mtl's that are not part of the Open MPI repository, and
</span><br>
<span class="quotelev1">&gt;     want to
</span><br>
<span class="quotelev2">&gt;&gt;minimize changes to these. We have an option to make these changes by
</span><br>
<span class="quotelev2">&gt;&gt;duplicating code, and creating a new set of functions to handle the
</span><br>
<span class="quotelev2">&gt;&gt;alignment (and other cleanup) issues, not perturbing existing
</span><br>
<span class="quotelev1">&gt;     code. The
</span><br>
<span class="quotelev2">&gt;&gt;questions are, does anyone have code out there that uses the ompi free
</span><br>
<span class="quotelev2">&gt;&gt;lists, and if so would would an interface change to the init
</span><br>
<span class="quotelev1">&gt;     functions cause
</span><br>
<span class="quotelev2">&gt;&gt;you trouble ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;Rich
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="2370.php">Dirk Eddelbuettel: "[OMPI devel] Small manual page patches from Debian package"</a>
<li><strong>Previous message:</strong> <a href="2368.php">Richard Graham: "Re: [OMPI devel] Use of the ompi free list"</a>
<li><strong>In reply to:</strong> <a href="2368.php">Richard Graham: "Re: [OMPI devel] Use of the ompi free list"</a>
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
