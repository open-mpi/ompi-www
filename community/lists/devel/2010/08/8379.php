<?
$subject_val = "Re: [OMPI devel] nit-pick: typo in README (1.4.3rc1 and 1.5rc5)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 08:54:46 2010" -->
<!-- isoreceived="20100826125446" -->
<!-- sent="Thu, 26 Aug 2010 08:54:27 -0400" -->
<!-- isosent="20100826125427" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] nit-pick: typo in README (1.4.3rc1 and 1.5rc5)" -->
<!-- id="76A9EA93-14FD-41FE-81BE-482FBD7DB6CF_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C758F97.6090803_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] nit-pick: typo in README (1.4.3rc1 and 1.5rc5)<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-26 08:54:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8380.php">Rolf vandeVaart: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8378.php">Joshua Hursey: "Re: [OMPI devel] Checkpoint/restart question"</a>
<li><strong>In reply to:</strong> <a href="8362.php">Paul H. Hargrove: "[OMPI devel] nit-pick: typo in README (1.4.3rc1 and 1.5rc5)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well that's slightly embarrassing. Thanks for the catch. I filed CMRs to have this patch applied to the v1.4 and 1.5 branches before the next releases. Tickets below:
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2548">https://svn.open-mpi.org/trac/ompi/ticket/2548</a>
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2549">https://svn.open-mpi.org/trac/ompi/ticket/2549</a>
<br>
<p>Thanks,
<br>
Josh
<br>
<p>On Aug 25, 2010, at 5:48 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; The following patch applies to both 1.4.3rc1 and 1.5rc5 to fix a typo in 
</span><br>
<span class="quotelev1">&gt; the README:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- README.orig        2010-08-25 14:45:09.000000000 -0700
</span><br>
<span class="quotelev1">&gt; +++ README     2010-08-25 14:45:20.000000000 -0700
</span><br>
<span class="quotelev1">&gt; @@ -69,7 +69,7 @@
</span><br>
<span class="quotelev1">&gt;     - Asynchronous, transparent checkpoint/restart support
</span><br>
<span class="quotelev1">&gt;       - Fully coordinated checkpoint/restart coordination component
</span><br>
<span class="quotelev1">&gt;       - Support for the following checkpoint/restart services:
</span><br>
<span class="quotelev1">&gt; -        - blcr: Berkley Lab's Checkpoint/Restart
</span><br>
<span class="quotelev1">&gt; +        - blcr: Berkeley Lab's Checkpoint/Restart
</span><br>
<span class="quotelev1">&gt;         - self: Application level callbacks
</span><br>
<span class="quotelev1">&gt;       - Support for the following interconnects:
</span><br>
<span class="quotelev1">&gt;         - tcp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
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
<p>------------------------------------
<br>
Joshua Hursey
<br>
Postdoctoral Research Associate
<br>
Oak Ridge National Laboratory
<br>
<a href="http://www.cs.indiana.edu/~jjhursey">http://www.cs.indiana.edu/~jjhursey</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8380.php">Rolf vandeVaart: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8378.php">Joshua Hursey: "Re: [OMPI devel] Checkpoint/restart question"</a>
<li><strong>In reply to:</strong> <a href="8362.php">Paul H. Hargrove: "[OMPI devel] nit-pick: typo in README (1.4.3rc1 and 1.5rc5)"</a>
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
