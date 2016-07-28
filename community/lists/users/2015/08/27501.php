<?
$subject_val = "[OMPI users] Multiple windows for the same communicator at thesame time";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 11:55:23 2015" -->
<!-- isoreceived="20150827155523" -->
<!-- sent="Thu, 27 Aug 2015 10:55:22 -0500" -->
<!-- isosent="20150827155522" -->
<!-- name="abhisekpan_at_[hidden]" -->
<!-- email="abhisekpan_at_[hidden]" -->
<!-- subject="[OMPI users] Multiple windows for the same communicator at thesame time" -->
<!-- id="CAGhmpEEE2P0WFkfHvobRNx6KK0UOWBr4HY6UcYwu3BDnrB9Xbw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Multiple windows for the same communicator at thesame time<br>
<strong>From:</strong> <a href="mailto:abhisekpan_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Multiple%20windows%20for%20the%20same%20communicator%20at%20thesame%20time"><em>abhisekpan_at_[hidden]</em></a><br>
<strong>Date:</strong> 2015-08-27 11:55:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27502.php">George Bosilca: "Re: [OMPI users] MPI_LB in a recursive type"</a>
<li><strong>Previous message:</strong> <a href="27500.php">Gilles Gouaillardet: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27509.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Multiple windows for the same communicator at thesame	time"</a>
<li><strong>Reply:</strong> <a href="27509.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Multiple windows for the same communicator at thesame	time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I want to know if it is allowed in MPI one-sided communication to open
<br>
multiple windows simultaneously using  the same communicator.
<br>
<p>The standard does not seem to forbid it as far as I can see, but when I
<br>
look at the open mpi  osc components (rdma and portals4) it looks like a
<br>
window is always identified by the context-id in the communicator (for
<br>
example the match bits in portals4 component use the communicator cid to
<br>
distinguish among windows, there is a hash-table in the rdma component that
<br>
uses the communicator cid as the key to store open modules). It seems to me
<br>
that these components may not be able to support multiple open windows
<br>
opened with the same communicator.
<br>
<p>Thanks,
<br>
<pre>
-- 
Abhisek
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27501/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27502.php">George Bosilca: "Re: [OMPI users] MPI_LB in a recursive type"</a>
<li><strong>Previous message:</strong> <a href="27500.php">Gilles Gouaillardet: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27509.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Multiple windows for the same communicator at thesame	time"</a>
<li><strong>Reply:</strong> <a href="27509.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Multiple windows for the same communicator at thesame	time"</a>
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
