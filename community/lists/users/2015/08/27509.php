<?
$subject_val = "Re: [OMPI users] Multiple windows for the same communicator at thesame	time";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 31 06:59:04 2015" -->
<!-- isoreceived="20150831105904" -->
<!-- sent="Mon, 31 Aug 2015 10:59:01 +0000" -->
<!-- isosent="20150831105901" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multiple windows for the same communicator at thesame	time" -->
<!-- id="71E851F6-4B6E-4F07-BC70-7847F81F1578_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAGhmpEEE2P0WFkfHvobRNx6KK0UOWBr4HY6UcYwu3BDnrB9Xbw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Multiple windows for the same communicator at thesame	time<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-31 06:59:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27510.php">Todd Kordenbrock: "Re: [OMPI users] Multiple windows for the same communicator at thesame time"</a>
<li><strong>Previous message:</strong> <a href="27508.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_LB in a recursive type"</a>
<li><strong>In reply to:</strong> <a href="27501.php">abhisekpan_at_[hidden]: "[OMPI users] Multiple windows for the same communicator at thesame time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27510.php">Todd Kordenbrock: "Re: [OMPI users] Multiple windows for the same communicator at thesame time"</a>
<li><strong>Reply:</strong> <a href="27510.php">Todd Kordenbrock: "Re: [OMPI users] Multiple windows for the same communicator at thesame time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 27, 2015, at 11:55 AM, abhisekpan_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I want to know if it is allowed in MPI one-sided communication to open multiple windows simultaneously using  the same communicator. 
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; The standard does not seem to forbid it as far as I can see, but when I look at the open mpi  osc components (rdma and portals4) it looks like a window is always identified by the context-id in the communicator (for example the match bits in portals4 component use the communicator cid to distinguish among windows, there is a hash-table in the rdma component that uses the communicator cid as the key to store open modules). It seems to me that these components may not be able to support multiple open windows opened with the same communicator. 
</span><br>
<p>Nathan/Todd will have to answer that.  I'd be (very) surprised if the code did not support multiple windows that were generated from the same communicator.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27510.php">Todd Kordenbrock: "Re: [OMPI users] Multiple windows for the same communicator at thesame time"</a>
<li><strong>Previous message:</strong> <a href="27508.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_LB in a recursive type"</a>
<li><strong>In reply to:</strong> <a href="27501.php">abhisekpan_at_[hidden]: "[OMPI users] Multiple windows for the same communicator at thesame time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27510.php">Todd Kordenbrock: "Re: [OMPI users] Multiple windows for the same communicator at thesame time"</a>
<li><strong>Reply:</strong> <a href="27510.php">Todd Kordenbrock: "Re: [OMPI users] Multiple windows for the same communicator at thesame time"</a>
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
