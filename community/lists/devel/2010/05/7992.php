<?
$subject_val = "Re: [OMPI devel] BTL add procs errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 27 08:49:01 2010" -->
<!-- isoreceived="20100527124901" -->
<!-- sent="Thu, 27 May 2010 06:48:46 -0600" -->
<!-- isosent="20100527124846" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL add procs errors" -->
<!-- id="EF22ADF8-CCEF-4B25-A368-011077B14F4E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.DEB.2.00.1005270940590.3698_at_jeaugeys.frec.bull.fr" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-27 08:48:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7993.php">Barrett, Brian W: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="7991.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="7991.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7993.php">Barrett, Brian W: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 27, 2010, at 1:47 AM, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; I don't think what the openib BTL is doing is that bad. It is returning an error because something really went bad in IB. So yes, it could blank the bitmask and return success, but would you really want IB to fail and fallback on TCP once in a while without any notice ?
</span><br>
<p>As a sys admin - no, I would want to know it happened.
<br>
<p>As a user - heck yeah! I don't care how the problem gets done, I just want the answer. It will probably take longer to complete, but that is better than having to start all over just because the cluster hiccups.
<br>
<p>I believe this is what the notifier is intended to resolve.
<br>
<p><span class="quotelev1">&gt; I wouldn't.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, as it seems that all &quot;normal&quot; problems can be handled through the reachable bitmask, it seems a good idea to me that BTLs returning errors
</span><br>
<span class="quotelev1">&gt; make the application stop.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, 26 May 2010, Barrett, Brian W wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George -
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure I agree - the return code should indicate a failure beyond &quot;something prohibited me from talking to the remote side&quot; - something occurred that resulted in it being highly unlikely the app can successfully run to completion (such as malloc failing).  On the other hand, I also think that the OpenIB BTL is probably doing the wrong thing - I can't imagine that the error returned reaches that state of badness, and it should probably zero out the bitmask and quietly return rather than try to cause the app to abort.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just my $0.02.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 25, 2010, at 12:27 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The BTLs are allowed to fail adding procs without major consequences in the short term. As you noticed each BTL returns a bit mask array containing all procs reachable through this particular instance of the BTL. Later (in the same file line 395) we check for the complete coverage for all procs, and only complain if one of the peers is unreachable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you replace the continue statement by a return, we will never give a chance to the other BTLs and we will complain about lack of connectivity as soon as one BTL fails (for some reasons). Without talking about the fact that all the eager, send and rmda endpoint arrays will not be built.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 25, 2010, at 05:10 , Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm currently trying to have Open MPI exit more gracefully when a BTL returns an error during the &quot;add procs&quot; phase.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The current bml/r2 code silently ignores btl-&gt;add_procs() error codes with the following comment :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---- ompi/mca/bml/r2/bml_r2.c:208 ----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /* This BTL has troubles adding the nodes. Let's continue maybe some other BTL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * can take care of this task. */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; continue;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This seems wrong to me : either a proc is reached (the &quot;reachable&quot; bit field is therefore updated), either it is not (and nothing is done). Any error code should denote a fatal error needing a clean abort.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In the current openib btl code, the &quot;reachable&quot; bit is set but an error is returned - then ignored by r2. The next call to the openib BTL results in a segmentation fault.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, maybe this simple fix would do the trick :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ========================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; diff -r 96e0793d7885 ompi/mca/bml/r2/bml_r2.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- a/ompi/mca/bml/r2/bml_r2.c  Wed May 19 14:35:27 2010 +0200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ b/ompi/mca/bml/r2/bml_r2.c  Tue May 25 10:54:19 2010 +0200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -210,7 +210,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           /* This BTL has troubles adding the nodes. Let's continue maybe some other BTL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            * can take care of this task.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;            */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -            continue;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +            return rc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       /* for each proc that is reachable */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ========================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does anyone see a case (with a specific btl) where add_procs returns an error but we still want to continue ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sylvain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt; Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev2">&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="7993.php">Barrett, Brian W: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="7991.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="7991.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7993.php">Barrett, Brian W: "Re: [OMPI devel] BTL add procs errors"</a>
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
