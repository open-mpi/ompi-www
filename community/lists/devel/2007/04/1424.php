<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 17 03:31:09 2007" -->
<!-- isoreceived="20070417073109" -->
<!-- sent="Tue, 17 Apr 2007 09:31:03 +0200" -->
<!-- isosent="20070417073103" -->
<!-- name="Christian Kauhaus" -->
<!-- email="ckauhaus_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ORTE scalability issues" -->
<!-- id="20070417073103.GA8725_at_ipc256.inf.uni-jena.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C2492B89.8B08%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Christian Kauhaus (<em>ckauhaus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-17 03:31:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1425.php">Ralph H Castain: "Re: [OMPI devel] ORTE scalability issues"</a>
<li><strong>Previous message:</strong> <a href="1423.php">Jeff Squyres: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>In reply to:</strong> <a href="1421.php">Ralph H Castain: "[OMPI devel] ORTE scalability issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1425.php">Ralph H Castain: "Re: [OMPI devel] ORTE scalability issues"</a>
<li><strong>Reply:</strong> <a href="1425.php">Ralph H Castain: "Re: [OMPI devel] ORTE scalability issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph H Castain &lt;rhc_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;even though the HNP isn't actually part of the MPI job itself, or the
</span><br>
<span class="quotelev1">&gt;processes are opening duplicate OOB sockets back to the HNP. I am not
</span><br>
<span class="quotelev1">&gt;certain which (or either) of these is the root cause, however - it needs
</span><br>
<span class="quotelev1">&gt;further investigation to identify the source of the extra sockets.
</span><br>
<p>If you are using the IPv6-ready code: in this case we need to create two
<br>
sockets for each OOB/TCP. One uses AF_INET and one uses AF_INET6.
<br>
IIRC, we close the superfluous socket once the connection attempt on
<br>
either one succeeds. Adrian, correct me if I'm wrong. :-)
<br>
Unfortunately, there's no easy way around this.
<br>
<p>Christian
<br>
<p><pre>
-- 
Dipl.-Inf. Christian Kauhaus                               &lt;&gt;&lt;
Lehrstuhl fuer Rechnerarchitektur und -kommunikation 
Institut fuer Informatik * Ernst-Abbe-Platz 1-2 * D-07743 Jena
Tel: +49 3641 9 46376  *  Fax: +49 3641 9 46372   *  Raum 3217
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1425.php">Ralph H Castain: "Re: [OMPI devel] ORTE scalability issues"</a>
<li><strong>Previous message:</strong> <a href="1423.php">Jeff Squyres: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>In reply to:</strong> <a href="1421.php">Ralph H Castain: "[OMPI devel] ORTE scalability issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1425.php">Ralph H Castain: "Re: [OMPI devel] ORTE scalability issues"</a>
<li><strong>Reply:</strong> <a href="1425.php">Ralph H Castain: "Re: [OMPI devel] ORTE scalability issues"</a>
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
