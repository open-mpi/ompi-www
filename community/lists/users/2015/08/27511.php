<?
$subject_val = "Re: [OMPI users] Multiple windows for the same communicator at thesame time";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 31 10:29:00 2015" -->
<!-- isoreceived="20150831142900" -->
<!-- sent="Mon, 31 Aug 2015 09:28:59 -0500" -->
<!-- isosent="20150831142859" -->
<!-- name="abhisekpan_at_[hidden]" -->
<!-- email="abhisekpan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multiple windows for the same communicator at thesame time" -->
<!-- id="CAGhmpEEE6KABOUWK-ETUH6X6mWoOp5f2j8FUwALpw3PSz7A=2g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAEGOymCwByb5+HL3f4ObZEgyRzaY8PPYmsnO67FZeQHuGbbsRQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Multiple windows for the same communicator at thesame time<br>
<strong>From:</strong> <a href="mailto:abhisekpan_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Multiple%20windows%20for%20the%20same%20communicator%20at%20thesame%20time"><em>abhisekpan_at_[hidden]</em></a><br>
<strong>Date:</strong> 2015-08-31 10:28:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27512.php">Barrett, Brian: "Re: [OMPI users] Multiple windows for the same communicator at thesame time"</a>
<li><strong>Previous message:</strong> <a href="27510.php">Todd Kordenbrock: "Re: [OMPI users] Multiple windows for the same communicator at thesame time"</a>
<li><strong>In reply to:</strong> <a href="27510.php">Todd Kordenbrock: "Re: [OMPI users] Multiple windows for the same communicator at thesame time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27512.php">Barrett, Brian: "Re: [OMPI users] Multiple windows for the same communicator at thesame time"</a>
<li><strong>Reply:</strong> <a href="27512.php">Barrett, Brian: "Re: [OMPI users] Multiple windows for the same communicator at thesame time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
RIght, my mistake, I missed the new cid generation in the comm duplicator
<br>
calls. Thanks a lot!
<br>
<p><p><pre>
-- 
Abhisek
Live Long and Prosper
On Mon, Aug 31, 2015 at 9:25 AM, Todd Kordenbrock &lt;thkgcode_at_[hidden]&gt;
wrote:
&gt; Hi Abhisek,
&gt;
&gt; Both the portals4 and pt2pt OSC components call ompi_comm_dup() near the
&gt; beginning of component_select(), so each window has it's own communicator.
&gt; The duplicated communicator has a unique contextid and therefore the window
&gt; has unique match bits/hash key.
&gt;
&gt; Thanks,
&gt; todd
&gt;
&gt;
&gt;
&gt; On Mon, Aug 31, 2015 at 5:59 AM, Jeff Squyres (jsquyres) &lt;
&gt; jsquyres_at_[hidden]&gt; wrote:
&gt;
&gt;&gt; On Aug 27, 2015, at 11:55 AM, abhisekpan_at_[hidden] wrote:
&gt;&gt; &gt;
&gt;&gt; &gt; I want to know if it is allowed in MPI one-sided communication to open
&gt;&gt; multiple windows simultaneously using  the same communicator.
&gt;&gt;
&gt;&gt; Yes.
&gt;&gt;
&gt;&gt; &gt; The standard does not seem to forbid it as far as I can see, but when I
&gt;&gt; look at the open mpi  osc components (rdma and portals4) it looks like a
&gt;&gt; window is always identified by the context-id in the communicator (for
&gt;&gt; example the match bits in portals4 component use the communicator cid to
&gt;&gt; distinguish among windows, there is a hash-table in the rdma component that
&gt;&gt; uses the communicator cid as the key to store open modules). It seems to me
&gt;&gt; that these components may not be able to support multiple open windows
&gt;&gt; opened with the same communicator.
&gt;&gt;
&gt;&gt; Nathan/Todd will have to answer that.  I'd be (very) surprised if the
&gt;&gt; code did not support multiple windows that were generated from the same
&gt;&gt; communicator.
&gt;&gt;
&gt;&gt; --
&gt;&gt; Jeff Squyres
&gt;&gt; jsquyres_at_[hidden]
&gt;&gt; For corporate legal information go to:
&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; Link to this post:
&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27509.php">http://www.open-mpi.org/community/lists/users/2015/08/27509.php</a>
&gt;&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post:
&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27510.php">http://www.open-mpi.org/community/lists/users/2015/08/27510.php</a>
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27511/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27512.php">Barrett, Brian: "Re: [OMPI users] Multiple windows for the same communicator at thesame time"</a>
<li><strong>Previous message:</strong> <a href="27510.php">Todd Kordenbrock: "Re: [OMPI users] Multiple windows for the same communicator at thesame time"</a>
<li><strong>In reply to:</strong> <a href="27510.php">Todd Kordenbrock: "Re: [OMPI users] Multiple windows for the same communicator at thesame time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27512.php">Barrett, Brian: "Re: [OMPI users] Multiple windows for the same communicator at thesame time"</a>
<li><strong>Reply:</strong> <a href="27512.php">Barrett, Brian: "Re: [OMPI users] Multiple windows for the same communicator at thesame time"</a>
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
