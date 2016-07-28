<?
$subject_val = "Re: [OMPI devel] BTL add procs errors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 25 12:27:55 2010" -->
<!-- isoreceived="20100525162755" -->
<!-- sent="Tue, 25 May 2010 12:27:50 -0400" -->
<!-- isosent="20100525162750" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL add procs errors" -->
<!-- id="B9FE3D05-CD36-41DC-9858-F32EFF7192DC_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.DEB.2.00.1005251055360.3698_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] BTL add procs errors<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-25 12:27:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7990.php">Barrett, Brian W: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="7988.php">Sylvain Jeaugey: "[OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="7988.php">Sylvain Jeaugey: "[OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7990.php">Barrett, Brian W: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="7990.php">Barrett, Brian W: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The BTLs are allowed to fail adding procs without major consequences in the short term. As you noticed each BTL returns a bit mask array containing all procs reachable through this particular instance of the BTL. Later (in the same file line 395) we check for the complete coverage for all procs, and only complain if one of the peers is unreachable.
<br>
<p>If you replace the continue statement by a return, we will never give a chance to the other BTLs and we will complain about lack of connectivity as soon as one BTL fails (for some reasons). Without talking about the fact that all the eager, send and rmda endpoint arrays will not be built.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On May 25, 2010, at 05:10 , Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm currently trying to have Open MPI exit more gracefully when a BTL returns an error during the &quot;add procs&quot; phase.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The current bml/r2 code silently ignores btl-&gt;add_procs() error codes with the following comment :
</span><br>
<span class="quotelev1">&gt; ---- ompi/mca/bml/r2/bml_r2.c:208 ----
</span><br>
<span class="quotelev1">&gt;  /* This BTL has troubles adding the nodes. Let's continue maybe some other BTL
</span><br>
<span class="quotelev1">&gt;   * can take care of this task. */
</span><br>
<span class="quotelev1">&gt;  continue;
</span><br>
<span class="quotelev1">&gt; --------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This seems wrong to me : either a proc is reached (the &quot;reachable&quot; bit field is therefore updated), either it is not (and nothing is done). Any error code should denote a fatal error needing a clean abort.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the current openib btl code, the &quot;reachable&quot; bit is set but an error is returned - then ignored by r2. The next call to the openib BTL results in a segmentation fault.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, maybe this simple fix would do the trick :
</span><br>
<span class="quotelev1">&gt; ========================================================================
</span><br>
<span class="quotelev1">&gt; diff -r 96e0793d7885 ompi/mca/bml/r2/bml_r2.c
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/bml/r2/bml_r2.c  Wed May 19 14:35:27 2010 +0200
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/bml/r2/bml_r2.c  Tue May 25 10:54:19 2010 +0200
</span><br>
<span class="quotelev1">&gt; @@ -210,7 +210,7 @@
</span><br>
<span class="quotelev1">&gt;             /* This BTL has troubles adding the nodes. Let's continue maybe some other BTL
</span><br>
<span class="quotelev1">&gt;              * can take care of this task.
</span><br>
<span class="quotelev1">&gt;              */
</span><br>
<span class="quotelev1">&gt; -            continue;
</span><br>
<span class="quotelev1">&gt; +            return rc;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         /* for each proc that is reachable */
</span><br>
<span class="quotelev1">&gt; ========================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone see a case (with a specific btl) where add_procs returns an error but we still want to continue ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7990.php">Barrett, Brian W: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="7988.php">Sylvain Jeaugey: "[OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="7988.php">Sylvain Jeaugey: "[OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7990.php">Barrett, Brian W: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="7990.php">Barrett, Brian W: "Re: [OMPI devel] BTL add procs errors"</a>
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
