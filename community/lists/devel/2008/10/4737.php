<?
$subject_val = "Re: [OMPI devel] rdma_connect() failure";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct  5 14:46:04 2008" -->
<!-- isoreceived="20081005184604" -->
<!-- sent="Sun, 5 Oct 2008 20:45:59 +0200" -->
<!-- isosent="20081005184559" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] rdma_connect() failure" -->
<!-- id="453d39990810051145y170b88edwbcff2440e62e8373_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50EBFBCA-09C7-44F8-B2E7-3B778D70A167_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] rdma_connect() failure<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-05 14:45:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4738.php">Jeff Squyres: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Previous message:</strong> <a href="4736.php">Ralf Wildenhues: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>I tried to test the latest hg tree but it failes from time to time
<br>
<p>it happens on different machines with different errors ( see attached file )
<br>
<p>It also failes when ib0 is set to slave mode due to bonding, but I am sure
<br>
that it happens &quot;by design&quot;.
<br>
<p>Lenny.
<br>
<p>On 9/29/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Annnnddd.... the pendulum swings back the other way now.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See the ticket for details: <a href="https://svn.open-mpi.org/trac/ompi/ticket/1540">https://svn.open-mpi.org/trac/ompi/ticket/1540</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Short version: OMPI now just &quot;figures it out&quot; and does the right thing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 28, 2008, at 7:27 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Actually, I thought about this one more, and I have concluded that we do
</span><br>
<span class="quotelev2">&gt;&gt; *not* want to do this (i.e., allow RDMA CM to send requests for port A from
</span><br>
<span class="quotelev2">&gt;&gt; port B.  If we do this, then it would be possible that *all* traffic will go
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;wrong&quot; way.  More specifically, OMPI will not have direct control over
</span><br>
<span class="quotelev2">&gt;&gt; what traffic goes over what port -- and that would be Bad.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So we'll still lookup the peer based on the address where the connect
</span><br>
<span class="quotelev2">&gt;&gt; request came from, and I'll eventually add a FAQ item about it (because IP
</span><br>
<span class="quotelev2">&gt;&gt; addressing is much more flexible than IB addressing, and netadmins may be
</span><br>
<span class="quotelev2">&gt;&gt; tempted to use a &quot;flat&quot; address space).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 26, 2008, at 5:53 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  On Sep 26, 2008, at 5:45 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I actually spent all afternoon diagnosing something that I'll turn into
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a FAQ entry (OMPI's RDMA CM TCP addressing requirements are stronger than
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; TCP's legal addressing rules).  In short, OMPI needs the RDMA CM to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; guarantee that requests to connect to port A come from port A.  If you have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a &quot;flat&quot; network address space, RDMA CM may actually issue a connect request
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for port A from port B.  This causes OMPI to get confused because it will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not find the right BTL openib endpoint to connect to.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And... crap.  We can fix this one, too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Right now, we use the IP address from the incoming RDMA CM event ID to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; determine who the caller is.  But we could easily embed the IP address
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (i.e., endpoint designator) in the private data in the event so that the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; peer can look at *that* address to identify who the peer is (rather than the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; address embedded in the event ID).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is actually what the IB CM CPC does, IIRC.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Blah.  This is also not hard, but it's another task for later.  :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4737/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4737/rdma_cm_error.log">rdma_cm_error.log</a>
</ul>
<!-- attachment="rdma_cm_error.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4738.php">Jeff Squyres: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
<li><strong>Previous message:</strong> <a href="4736.php">Ralf Wildenhues: "Re: [OMPI devel] Should visibility and memchecker abort configure?"</a>
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
