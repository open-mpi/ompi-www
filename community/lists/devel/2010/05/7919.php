<?
$subject_val = "Re: [OMPI devel] Open-MPI on TIPC";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 12 14:17:57 2010" -->
<!-- isoreceived="20100512181757" -->
<!-- sent="Wed, 12 May 2010 20:17:50 +0200" -->
<!-- isosent="20100512181750" -->
<!-- name="Nils Carlson" -->
<!-- email="nils.carlson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-MPI on TIPC" -->
<!-- id="5C72D4AA-6A54-432F-B4FC-6D1366A48560_at_ludd.ltu.se" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E241F928-1CD7-47EB-A353-4FFAAD44BA82_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open-MPI on TIPC<br>
<strong>From:</strong> Nils Carlson (<em>nils.carlson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-12 14:17:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7920.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Previous message:</strong> <a href="7918.php">Jeff Squyres: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>In reply to:</strong> <a href="7918.php">Jeff Squyres: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7917.php">David Gunter: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 12, 2010, at 7:50 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 12, 2010, at 1:21 PM, Nils Carlson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Probably not me personally, my employer is considering financing a
</span><br>
<span class="quotelev2">&gt;&gt; masters thesis with the aim of doing an implementation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a guide for adding support? I took a quick look at the tcp
</span><br>
<span class="quotelev2">&gt;&gt; code, and it wasn't all that straightforward,
</span><br>
<span class="quotelev2">&gt;&gt; though I suppose a lot of the code is aimed at maximising  
</span><br>
<span class="quotelev2">&gt;&gt; performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There has been a paper or two written about this kind of stuff (like  
</span><br>
<span class="quotelev1">&gt; what David mentioned; and I have a dim recollection of someone else  
</span><br>
<span class="quotelev1">&gt; writing their about their experiences of adding a BTL).  But nothing  
</span><br>
<span class="quotelev1">&gt; in the way of formal documentation, sorry.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd be happy to chat on the phone about it.
</span><br>
<p>I will have to discuss this with my manager on monday, but there does  
<br>
seem to be some potential here.
<br>
The background is that Ericsson (my employer) developed TIPC a few  
<br>
years ago, and let it loose.
<br>
Our goal has been to get the community more involved with TIPC and  
<br>
contributing support to OpenMPI
<br>
would perhaps be a good way forward. One thing that strongly  
<br>
recommends TIPC (besides very high performance
<br>
and low latency) is that it can handle failover (to a backup network)  
<br>
very gracefully (and transparently to the application),
<br>
something that MPI (at least when I last used it around 2007) did not.  
<br>
It is also extremely simple to configure.
<br>
<p>Using MPI on TIPC would also give us access to good benchmarking  
<br>
possibilities, good for future protocol-stack improvements.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How long do you think a basic implementation would take?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know much about the TIPC API to say.  Have a look at ompi/ 
</span><br>
<span class="quotelev1">&gt; mca/btl/btl.h -- that's the set of interfaces that need to be  
</span><br>
<span class="quotelev1">&gt; implemented.  They're mostly focused on connecting, disconnecting,  
</span><br>
<span class="quotelev1">&gt; and sending/receiving data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We do have a subsystem for monitoring fds for read and write events,  
</span><br>
<span class="quotelev1">&gt; so if TIPC is based on fd's, it could probably use our internal  
</span><br>
<span class="quotelev1">&gt; libevent to monitor for progress, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>TIPC uses a sockets API, plus some additional features and minus a few  
<br>
non-applicable features, so it should be feasible.
<br>
<p>/Nils
<br>
<p><span class="quotelev1">&gt; -- 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7920.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Previous message:</strong> <a href="7918.php">Jeff Squyres: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>In reply to:</strong> <a href="7918.php">Jeff Squyres: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7917.php">David Gunter: "Re: [OMPI devel] Open-MPI on TIPC"</a>
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
