<?
$subject_val = "Re: [OMPI devel] coll ml error with some nonblocking collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 15 20:46:53 2014" -->
<!-- isoreceived="20140916004653" -->
<!-- sent="Tue, 16 Sep 2014 09:46:50 +0900" -->
<!-- isosent="20140916004650" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] coll ml error with some nonblocking collectives" -->
<!-- id="CAAkFZ5uRZaVuMjnoiPPPHrsOmX7NxdS6ZEsh_FDM_AE9kf+Zzw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5F6FB0CDAF4F98419A0D970E1F65ED05B2EE8F_at_ECS-EXG-P-MB05.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] coll ml error with some nonblocking collectives<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-15 20:46:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15836.php">Gilles Gouaillardet: "[OMPI devel] race condition in oob/tcp"</a>
<li><strong>Previous message:</strong> <a href="15834.php">Pritchard Jr., Howard: "Re: [OMPI devel] coll ml error with some nonblocking collectives"</a>
<li><strong>In reply to:</strong> <a href="15834.php">Pritchard Jr., Howard: "Re: [OMPI devel] coll ml error with some nonblocking collectives"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Howard, and Rolf,
<br>
<p>i initially reported the issue at
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/09/15767.php">http://www.open-mpi.org/community/lists/devel/2014/09/15767.php</a>
<br>
<p>r32659 is not a fix nor a regression, it simply aborts instead of
<br>
OBJ_RELEASE(mpi_comm_world).
<br>
/* my point here is we should focus on the root cause and not the
<br>
consequence */
<br>
<p>first, this is a race condition, so one run is not enough to conclude the
<br>
problem is fixed.
<br>
second, if you do not configure with --enable-debug, there might be a
<br>
silent data corruption with undefined results if the bug is hit. undefined
<br>
result can mean the test success.
<br>
<p>bottom line and imho :
<br>
- if your test success without r32659, it just means you were lucky ...
<br>
- an abort with an understandable error message is better than a silent
<br>
corruption
<br>
<p>last but not least, r32659 was acked for v1.8 8 #4888).
<br>
coll/ml priority is now zero in v1.8 and this is likely the only reason why
<br>
you do not see any errors in this branch.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tue, Sep 16, 2014 at 8:33 AM, Pritchard Jr., Howard &lt;howardp_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;  HI Rolf,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay.  I&#226;&#128;&#153;ll work with ORNL folks to see how to really fix this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
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
<span class="quotelev1">&gt; *From:* devel [mailto:devel-bounces_at_[hidden]] *On Behalf Of *Rolf
</span><br>
<span class="quotelev1">&gt; vandeVaart
</span><br>
<span class="quotelev1">&gt; *Sent:* Monday, September 15, 2014 3:10 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Developers
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI devel] coll ml error with some nonblocking
</span><br>
<span class="quotelev1">&gt; collectives
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Confirmed that trunk version r32658 does pass the test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* devel [mailto:devel-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;devel-bounces_at_[hidden]&gt;] *On Behalf Of *Pritchard Jr., Howard
</span><br>
<span class="quotelev1">&gt; *Sent:* Monday, September 15, 2014 4:16 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Developers
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI devel] coll ml error with some nonblocking
</span><br>
<span class="quotelev1">&gt; collectives
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Rolf,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be related to change set 32659.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you back this change out, do the tests pass?
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
<span class="quotelev1">&gt; Howard
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* devel [mailto:devel-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;devel-bounces_at_[hidden]&gt;] *On Behalf Of *Rolf vandeVaart
</span><br>
<span class="quotelev1">&gt; *Sent:* Monday, September 15, 2014 8:55 AM
</span><br>
<span class="quotelev1">&gt; *To:* devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; *Subject:* [OMPI devel] coll ml error with some nonblocking collectives
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wonder if anyone else is seeing this failure. Not sure when this started
</span><br>
<span class="quotelev1">&gt; but it is only on the trunk. Here is a link to my failures as well as an
</span><br>
<span class="quotelev1">&gt; example below that. There are a variety of nonblocking collectives failing
</span><br>
<span class="quotelev1">&gt; like this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://mtt.open-mpi.org/index.php?do_redir=2208">http://mtt.open-mpi.org/index.php?do_redir=2208</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [rvandevaart_at_drossetti-ivy0 collective]$ mpirun --mca btl self,sm,tcp
</span><br>
<span class="quotelev1">&gt; -host drossetti-ivy0,drossetti-ivy0,drossetti-ivy1,drossetti-ivy1 iallreduce
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ML detected an unrecoverable error on intrinsic communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program will now abort
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [drossetti-ivy0.nvidia.com:04664] 3 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-coll-ml.txt / coll-ml-check-fatal-error
</span><br>
<span class="quotelev1">&gt; [rvandevaart_at_drossetti-ivy0 collective]$
</span><br>
<span class="quotelev1">&gt;   ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and
</span><br>
<span class="quotelev1">&gt; may contain confidential information.  Any unauthorized review, use,
</span><br>
<span class="quotelev1">&gt; disclosure or distribution is prohibited.  If you are not the intended
</span><br>
<span class="quotelev1">&gt; recipient, please contact the sender by reply email and destroy all copies
</span><br>
<span class="quotelev1">&gt; of the original message.
</span><br>
<span class="quotelev1">&gt;   ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15834.php">http://www.open-mpi.org/community/lists/devel/2014/09/15834.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15835/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15836.php">Gilles Gouaillardet: "[OMPI devel] race condition in oob/tcp"</a>
<li><strong>Previous message:</strong> <a href="15834.php">Pritchard Jr., Howard: "Re: [OMPI devel] coll ml error with some nonblocking collectives"</a>
<li><strong>In reply to:</strong> <a href="15834.php">Pritchard Jr., Howard: "Re: [OMPI devel] coll ml error with some nonblocking collectives"</a>
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
