<?
$subject_val = "Re: [OMPI devel] BTL add procs errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 27 10:22:07 2010" -->
<!-- isoreceived="20100527142207" -->
<!-- sent="Thu, 27 May 2010 08:17:13 -0600" -->
<!-- isosent="20100527141713" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL add procs errors" -->
<!-- id="2D094A28F6B31745BE7B844EA0FF60963074AD22A5_at_ES04SNLNT.srn.sandia.gov" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-27 10:17:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7994.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="7992.php">Ralph Castain: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="7991.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7994.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="7994.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sylvain -
<br>
<p>I have to agree with Ralph.  The situation you describe (IB failing) may or may not be what the user wants.  And, in fact, we will print a warning message to the user that such a situation (falling back to TCP) has occurred.  However, it also does not fall under the category of &quot;fail the job&quot; bad according to the design goals of Open MPI -- we explicitly wanted to allow easy fallback to another interconnect when something bad happens.  The bml and pml have the opprotunity to determine if they like the BTL choices made, and this is the right level to make that decision.  Lower layer transports should not be implementing high level policy.  So I go back to: if the job can run to completion (even if slower), add_procs should not return an error.  If add_procs does return an error, the job should abort.
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
________________________________________
From: devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] On Behalf Of Sylvain Jeaugey [sylvain.jeaugey_at_[hidden]]
Sent: Thursday, May 27, 2010 1:47 AM
To: Open MPI Developers
Subject: Re: [OMPI devel] BTL add procs errors
I don't think what the openib BTL is doing is that bad. It is returning an
error because something really went bad in IB. So yes, it could blank the
bitmask and return success, but would you really want IB to fail and
fallback on TCP once in a while without any notice ? I wouldn't.
So, as it seems that all &quot;normal&quot; problems can be handled through the
reachable bitmask, it seems a good idea to me that BTLs returning errors
make the application stop.
Sylvain
On Wed, 26 May 2010, Barrett, Brian W wrote:
&gt; George -
&gt;
&gt; I'm not sure I agree - the return code should indicate a failure beyond
&gt; &quot;something prohibited me from talking to the remote side&quot; - something
&gt; occurred that resulted in it being highly unlikely the app can
&gt; successfully run to completion (such as malloc failing).  On the other
&gt; hand, I also think that the OpenIB BTL is probably doing the wrong thing
&gt; - I can't imagine that the error returned reaches that state of badness,
&gt; and it should probably zero out the bitmask and quietly return rather
&gt; than try to cause the app to abort.
&gt;
&gt; Just my $0.02.
&gt;
&gt; Brian
&gt;
&gt;
&gt; On May 25, 2010, at 12:27 PM, George Bosilca wrote:
&gt;
&gt;&gt; The BTLs are allowed to fail adding procs without major consequences in
&gt;&gt; the short term. As you noticed each BTL returns a bit mask array
&gt;&gt; containing all procs reachable through this particular instance of the
&gt;&gt; BTL. Later (in the same file line 395) we check for the complete
&gt;&gt; coverage for all procs, and only complain if one of the peers is
&gt;&gt; unreachable.
&gt;&gt;
&gt;&gt; If you replace the continue statement by a return, we will never give a
&gt;&gt; chance to the other BTLs and we will complain about lack of
&gt;&gt; connectivity as soon as one BTL fails (for some reasons). Without
&gt;&gt; talking about the fact that all the eager, send and rmda endpoint
&gt;&gt; arrays will not be built.
&gt;&gt;
&gt;&gt;  george.
&gt;&gt;
&gt;&gt; On May 25, 2010, at 05:10 , Sylvain Jeaugey wrote:
&gt;&gt;
&gt;&gt;&gt; Hi,
&gt;&gt;&gt;
&gt;&gt;&gt; I'm currently trying to have Open MPI exit more gracefully when a BTL returns an error during the &quot;add procs&quot; phase.
&gt;&gt;&gt;
&gt;&gt;&gt; The current bml/r2 code silently ignores btl-&gt;add_procs() error codes with the following comment :
&gt;&gt;&gt; ---- ompi/mca/bml/r2/bml_r2.c:208 ----
&gt;&gt;&gt; /* This BTL has troubles adding the nodes. Let's continue maybe some other BTL
&gt;&gt;&gt;  * can take care of this task. */
&gt;&gt;&gt; continue;
&gt;&gt;&gt; --------------------------------------
&gt;&gt;&gt;
&gt;&gt;&gt; This seems wrong to me : either a proc is reached (the &quot;reachable&quot; bit field is therefore updated), either it is not (and nothing is done). Any error code should denote a fatal error needing a clean abort.
&gt;&gt;&gt;
&gt;&gt;&gt; In the current openib btl code, the &quot;reachable&quot; bit is set but an error is returned - then ignored by r2. The next call to the openib BTL results in a segmentation fault.
&gt;&gt;&gt;
&gt;&gt;&gt; So, maybe this simple fix would do the trick :
&gt;&gt;&gt; ========================================================================
&gt;&gt;&gt; diff -r 96e0793d7885 ompi/mca/bml/r2/bml_r2.c
&gt;&gt;&gt; --- a/ompi/mca/bml/r2/bml_r2.c  Wed May 19 14:35:27 2010 +0200
&gt;&gt;&gt; +++ b/ompi/mca/bml/r2/bml_r2.c  Tue May 25 10:54:19 2010 +0200
&gt;&gt;&gt; @@ -210,7 +210,7 @@
&gt;&gt;&gt;            /* This BTL has troubles adding the nodes. Let's continue maybe some other BTL
&gt;&gt;&gt;             * can take care of this task.
&gt;&gt;&gt;             */
&gt;&gt;&gt; -            continue;
&gt;&gt;&gt; +            return rc;
&gt;&gt;&gt;        }
&gt;&gt;&gt;
&gt;&gt;&gt;        /* for each proc that is reachable */
&gt;&gt;&gt; ========================================================================
&gt;&gt;&gt;
&gt;&gt;&gt; Does anyone see a case (with a specific btl) where add_procs returns an error but we still want to continue ?
&gt;&gt;&gt;
&gt;&gt;&gt; Sylvain
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;
&gt;
&gt; --
&gt;  Brian W. Barrett
&gt;  Dept. 1423: Scalable System Software
&gt;  Sandia National Laboratories
&gt;
&gt;
&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;
&gt;
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7994.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="7992.php">Ralph Castain: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="7991.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7994.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="7994.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
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
