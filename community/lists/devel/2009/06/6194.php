<?
$subject_val = "Re: [OMPI devel] Multi-rail on openib";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 05:24:02 2009" -->
<!-- isoreceived="20090609092402" -->
<!-- sent="Tue, 9 Jun 2009 11:23:47 +0200 (CEST)" -->
<!-- isosent="20090609092347" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multi-rail on openib" -->
<!-- id="alpine.DEB.2.00.0906091051570.4598_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="88815dc10906081434k6bbdb597id1f7f783b018308a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Multi-rail on openib<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-09 05:23:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6195.php">Terry Dontje: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Previous message:</strong> <a href="6193.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>In reply to:</strong> <a href="6190.php">NiftyOMPI Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6202.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Reply:</strong> <a href="6202.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Multi-rail on openib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 8 Jun 2009, NiftyOMPI Tom Mitchell wrote:
<br>
<p><span class="quotelev1">&gt; ??? dual rail does double the number of switch ports. If you want to 
</span><br>
<span class="quotelev1">&gt; address switch failure each rail must connect to a different switch. 
</span><br>
<span class="quotelev1">&gt; If you do not want to have isolated fabrics you must have some 
</span><br>
<span class="quotelev1">&gt; additional ports on all switches to connect the two fabrics and enough 
</span><br>
<span class="quotelev1">&gt; of them to maintain sufficient bandwidth and connectivity when a switch 
</span><br>
<span class="quotelev1">&gt; fails. Thus, You are doubling the fabric unless I am missing something.
</span><br>
Well, it is pretty much research for now. But yes, we want each port to be 
<br>
connected to a different switch so that both cable and switch failures can 
<br>
be survived.
<br>
<p>Open MPI currently needs to have connected fabrics, but maybe that's 
<br>
something we will like to change in the future, having two separate rails. 
<br>
(Btw Pasha, will your current work enable this ?)
<br>
<p><span class="quotelev1">&gt; Is your second set of switches so minimally connected that the second 
</span><br>
<span class="quotelev1">&gt; tree can be installed with a small switch count.
</span><br>
That's the idea, yes. For example, you could have a primary QDR fat-tree 
<br>
network and a failover non fat-tree DDR one (potentially recycled from a 
<br>
previous machine).
<br>
<p><span class="quotelev1">&gt; What are the odds when port 1 fails that port 2 is going to
</span><br>
<span class="quotelev1">&gt; be live.  Cable/ connector errors would be the most likely
</span><br>
<span class="quotelev1">&gt; case where port 2 would be live.  In general if port 1 fails
</span><br>
<span class="quotelev1">&gt; I would expect port 2 to have issues too.
</span><br>
Well, depending on the errors you want to be able to survive, you may have 
<br>
2 cards, in which case there is no reason why port1 failure would cause 
<br>
port2 to fail too. But in all cases, switches and cable errors are a 
<br>
concern to us.
<br>
<p>Sylvain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6195.php">Terry Dontje: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Previous message:</strong> <a href="6193.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>In reply to:</strong> <a href="6190.php">NiftyOMPI Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6202.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Reply:</strong> <a href="6202.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Multi-rail on openib"</a>
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
