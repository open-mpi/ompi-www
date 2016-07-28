<?
$subject_val = "Re: [OMPI users] Multiple windows for the same communicator at thesame time";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 31 10:25:50 2015" -->
<!-- isoreceived="20150831142550" -->
<!-- sent="Mon, 31 Aug 2015 09:25:49 -0500" -->
<!-- isosent="20150831142549" -->
<!-- name="Todd Kordenbrock" -->
<!-- email="thkgcode_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multiple windows for the same communicator at thesame time" -->
<!-- id="CAEGOymCwByb5+HL3f4ObZEgyRzaY8PPYmsnO67FZeQHuGbbsRQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="71E851F6-4B6E-4F07-BC70-7847F81F1578_at_cisco.com" -->
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
<strong>From:</strong> Todd Kordenbrock (<em>thkgcode_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-31 10:25:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27511.php">abhisekpan_at_[hidden]: "Re: [OMPI users] Multiple windows for the same communicator at thesame time"</a>
<li><strong>Previous message:</strong> <a href="27509.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Multiple windows for the same communicator at thesame	time"</a>
<li><strong>In reply to:</strong> <a href="27509.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Multiple windows for the same communicator at thesame	time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27511.php">abhisekpan_at_[hidden]: "Re: [OMPI users] Multiple windows for the same communicator at thesame time"</a>
<li><strong>Reply:</strong> <a href="27511.php">abhisekpan_at_[hidden]: "Re: [OMPI users] Multiple windows for the same communicator at thesame time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Abhisek,
<br>
<p>Both the portals4 and pt2pt OSC components call ompi_comm_dup() near the
<br>
beginning of component_select(), so each window has it's own communicator.
<br>
The duplicated communicator has a unique contextid and therefore the window
<br>
has unique match bits/hash key.
<br>
<p>Thanks,
<br>
todd
<br>
<p><p><p>On Mon, Aug 31, 2015 at 5:59 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Aug 27, 2015, at 11:55 AM, abhisekpan_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I want to know if it is allowed in MPI one-sided communication to open
</span><br>
<span class="quotelev1">&gt; multiple windows simultaneously using  the same communicator.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; The standard does not seem to forbid it as far as I can see, but when I
</span><br>
<span class="quotelev1">&gt; look at the open mpi  osc components (rdma and portals4) it looks like a
</span><br>
<span class="quotelev1">&gt; window is always identified by the context-id in the communicator (for
</span><br>
<span class="quotelev1">&gt; example the match bits in portals4 component use the communicator cid to
</span><br>
<span class="quotelev1">&gt; distinguish among windows, there is a hash-table in the rdma component that
</span><br>
<span class="quotelev1">&gt; uses the communicator cid as the key to store open modules). It seems to me
</span><br>
<span class="quotelev1">&gt; that these components may not be able to support multiple open windows
</span><br>
<span class="quotelev1">&gt; opened with the same communicator.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nathan/Todd will have to answer that.  I'd be (very) surprised if the code
</span><br>
<span class="quotelev1">&gt; did not support multiple windows that were generated from the same
</span><br>
<span class="quotelev1">&gt; communicator.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27509.php">http://www.open-mpi.org/community/lists/users/2015/08/27509.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27510/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27511.php">abhisekpan_at_[hidden]: "Re: [OMPI users] Multiple windows for the same communicator at thesame time"</a>
<li><strong>Previous message:</strong> <a href="27509.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Multiple windows for the same communicator at thesame	time"</a>
<li><strong>In reply to:</strong> <a href="27509.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Multiple windows for the same communicator at thesame	time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27511.php">abhisekpan_at_[hidden]: "Re: [OMPI users] Multiple windows for the same communicator at thesame time"</a>
<li><strong>Reply:</strong> <a href="27511.php">abhisekpan_at_[hidden]: "Re: [OMPI users] Multiple windows for the same communicator at thesame time"</a>
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
