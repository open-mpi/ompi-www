<?
$subject_val = "Re: [OMPI devel] BTL add procs errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 27 03:46:29 2010" -->
<!-- isoreceived="20100527074629" -->
<!-- sent="Thu, 27 May 2010 09:47:04 +0200 (CEST)" -->
<!-- isosent="20100527074704" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL add procs errors" -->
<!-- id="alpine.DEB.2.00.1005270940590.3698_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CAAA1019-0769-43FF-BF8F-107036913A08_at_sandia.gov" -->
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
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-27 03:47:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7992.php">Ralph Castain: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="7990.php">Barrett, Brian W: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="7990.php">Barrett, Brian W: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7992.php">Ralph Castain: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="7992.php">Ralph Castain: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="7993.php">Barrett, Brian W: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think what the openib BTL is doing is that bad. It is returning an 
<br>
error because something really went bad in IB. So yes, it could blank the 
<br>
bitmask and return success, but would you really want IB to fail and 
<br>
fallback on TCP once in a while without any notice ? I wouldn't.
<br>
<p>So, as it seems that all &quot;normal&quot; problems can be handled through the 
<br>
reachable bitmask, it seems a good idea to me that BTLs returning errors
<br>
make the application stop.
<br>
<p>Sylvain
<br>
<p>On Wed, 26 May 2010, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; George -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure I agree - the return code should indicate a failure beyond 
</span><br>
<span class="quotelev1">&gt; &quot;something prohibited me from talking to the remote side&quot; - something 
</span><br>
<span class="quotelev1">&gt; occurred that resulted in it being highly unlikely the app can 
</span><br>
<span class="quotelev1">&gt; successfully run to completion (such as malloc failing).  On the other 
</span><br>
<span class="quotelev1">&gt; hand, I also think that the OpenIB BTL is probably doing the wrong thing 
</span><br>
<span class="quotelev1">&gt; - I can't imagine that the error returned reaches that state of badness, 
</span><br>
<span class="quotelev1">&gt; and it should probably zero out the bitmask and quietly return rather 
</span><br>
<span class="quotelev1">&gt; than try to cause the app to abort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just my $0.02.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 25, 2010, at 12:27 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The BTLs are allowed to fail adding procs without major consequences in 
</span><br>
<span class="quotelev2">&gt;&gt; the short term. As you noticed each BTL returns a bit mask array 
</span><br>
<span class="quotelev2">&gt;&gt; containing all procs reachable through this particular instance of the 
</span><br>
<span class="quotelev2">&gt;&gt; BTL. Later (in the same file line 395) we check for the complete 
</span><br>
<span class="quotelev2">&gt;&gt; coverage for all procs, and only complain if one of the peers is 
</span><br>
<span class="quotelev2">&gt;&gt; unreachable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you replace the continue statement by a return, we will never give a 
</span><br>
<span class="quotelev2">&gt;&gt; chance to the other BTLs and we will complain about lack of 
</span><br>
<span class="quotelev2">&gt;&gt; connectivity as soon as one BTL fails (for some reasons). Without 
</span><br>
<span class="quotelev2">&gt;&gt; talking about the fact that all the eager, send and rmda endpoint 
</span><br>
<span class="quotelev2">&gt;&gt; arrays will not be built.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 25, 2010, at 05:10 , Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm currently trying to have Open MPI exit more gracefully when a BTL returns an error during the &quot;add procs&quot; phase.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The current bml/r2 code silently ignores btl-&gt;add_procs() error codes with the following comment :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---- ompi/mca/bml/r2/bml_r2.c:208 ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* This BTL has troubles adding the nodes. Let's continue maybe some other BTL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  * can take care of this task. */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; continue;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This seems wrong to me : either a proc is reached (the &quot;reachable&quot; bit field is therefore updated), either it is not (and nothing is done). Any error code should denote a fatal error needing a clean abort.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the current openib btl code, the &quot;reachable&quot; bit is set but an error is returned - then ignored by r2. The next call to the openib BTL results in a segmentation fault.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, maybe this simple fix would do the trick :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ========================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diff -r 96e0793d7885 ompi/mca/bml/r2/bml_r2.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- a/ompi/mca/bml/r2/bml_r2.c  Wed May 19 14:35:27 2010 +0200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ b/ompi/mca/bml/r2/bml_r2.c  Tue May 25 10:54:19 2010 +0200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -210,7 +210,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            /* This BTL has troubles adding the nodes. Let's continue maybe some other BTL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             * can take care of this task.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -            continue;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            return rc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        /* for each proc that is reachable */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ========================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anyone see a case (with a specific btl) where add_procs returns an error but we still want to continue ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sylvain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7992.php">Ralph Castain: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="7990.php">Barrett, Brian W: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="7990.php">Barrett, Brian W: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7992.php">Ralph Castain: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="7992.php">Ralph Castain: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="7993.php">Barrett, Brian W: "Re: [OMPI devel] BTL add procs errors"</a>
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
