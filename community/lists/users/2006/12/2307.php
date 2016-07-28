<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec  6 01:44:43 2006" -->
<!-- isoreceived="20061206064443" -->
<!-- sent="Wed, 6 Dec 2006 12:14:35 +0530" -->
<!-- isosent="20061206064435" -->
<!-- name="Chevchenkovic Chevchenkovic" -->
<!-- email="chevchenkovic_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multiple LIDs" -->
<!-- id="1c16cdf90612052244g219b6b67pbca85532ffa67852_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="08CC85BB-5D3F-4D7C-9951-D1522EF81C4A_at_cisco.com" -->
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
<strong>From:</strong> Chevchenkovic Chevchenkovic (<em>chevchenkovic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-06 01:44:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2308.php">Gleb Natapov: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>Previous message:</strong> <a href="2306.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>In reply to:</strong> <a href="2295.php">Jeff Squyres: "Re: [OMPI users] multiple LIDs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2308.php">Gleb Natapov: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>Reply:</strong> <a href="2308.php">Gleb Natapov: "Re: [OMPI users] multiple LIDs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;Actually I was wondering why there is a facility for having multiple
<br>
LIDs for the same port. This led me to the entire series of questions.
<br>
&nbsp;&nbsp;&nbsp;It is still not very clear to, as to what is the advantage of
<br>
assigning multiple LIDs to the same port. Does it give some
<br>
performance advantages?
<br>
-Chev
<br>
<p><p>On 12/5/06, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; There are two distinct layers of software being discussed here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - the PML (basically the back-end to MPI_SEND and friends)
</span><br>
<span class="quotelev1">&gt; - the BTL (byte transfer layer, the back-end bit movers for the ob1
</span><br>
<span class="quotelev1">&gt; and dr PMLs -- this distinction is important because there is nothing
</span><br>
<span class="quotelev1">&gt; in the PML design that forces the use of BTL's; indeed, there is at
</span><br>
<span class="quotelev1">&gt; least one current PML that does not use BTL's as the back-end bit
</span><br>
<span class="quotelev1">&gt; mover [the cm PML])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ob1 and dr PMLs know nothing about how the back-end bitmovers
</span><br>
<span class="quotelev1">&gt; work (BTL components) -- the BTLs are given considerable freedom to
</span><br>
<span class="quotelev1">&gt; operate within their specific interface contracts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Generally, ob1/dr queries each BTL component when Open MPI starts
</span><br>
<span class="quotelev1">&gt; up.  Each BTL responds with whether it wants to run or not.  If it
</span><br>
<span class="quotelev1">&gt; does, it gives back the one or more modules (think of a module as an
</span><br>
<span class="quotelev1">&gt; &quot;instance&quot; of a component).  Typically, these modules correspond to
</span><br>
<span class="quotelev1">&gt; multiple NICs / HCAs / network endpoints.  For example, if you have 2
</span><br>
<span class="quotelev1">&gt; ethernet cards, the tcp BTL will create and return 2 modules.  ob1 /
</span><br>
<span class="quotelev1">&gt; dr will treat these as two paths to send data (reachability is
</span><br>
<span class="quotelev1">&gt; computed as well, of course -- ob1/dr will only send data down btls
</span><br>
<span class="quotelev1">&gt; for which the target peer is reachable).  In general, ob1/dr will
</span><br>
<span class="quotelev1">&gt; round-robin across all available BTL modules when sending large
</span><br>
<span class="quotelev1">&gt; messages (as Gleb has described).  See <a href="http://www.open-mpi.org/papers/">http://www.open-mpi.org/papers/</a>
</span><br>
<span class="quotelev1">&gt; euro-pvmmpi-2006-hpc-protocols/ for a general description of the ob1/
</span><br>
<span class="quotelev1">&gt; dr protocols.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The openib BTL can return multiple modules if multiple LIDs are
</span><br>
<span class="quotelev1">&gt; available.  So the ob1/dr doesn't know that these are not physical
</span><br>
<span class="quotelev1">&gt; devices -- it just treats each module as an equivalent mechanism to
</span><br>
<span class="quotelev1">&gt; send data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is actually somewhat lame as a scheme, and we talked internally
</span><br>
<span class="quotelev1">&gt; about doing something more intelligent.  But we decided to hold off
</span><br>
<span class="quotelev1">&gt; and let people (like you!) with real-world apps and networks give
</span><br>
<span class="quotelev1">&gt; this stuff a try and see what really works (and what doesn't work)
</span><br>
<span class="quotelev1">&gt; before trying to implement anything else.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So -- all that explanation aside -- we'd love to hear your feedback
</span><br>
<span class="quotelev1">&gt; with regards to the multi-LID stuff in Open MPI.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 4, 2006, at 1:27 PM, Chevchenkovic Chevchenkovic wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Thanks for that.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Suppose,  if there there are multiple interconnects, say ethernet and
</span><br>
<span class="quotelev2">&gt; &gt; infiniband  and a million byte of data is to be sent, then in this
</span><br>
<span class="quotelev2">&gt; &gt; case the data will be sent through infiniband (since its a fast path
</span><br>
<span class="quotelev2">&gt; &gt; .. please correct me here if i m wrong).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   If there are mulitple such sends, do you mean to say that each send
</span><br>
<span class="quotelev2">&gt; &gt; will go  through  different BTLs in a RR manner if they are connected
</span><br>
<span class="quotelev2">&gt; &gt; to the same port?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  -chev
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 12/4/06, Gleb Natapov &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mon, Dec 04, 2006 at 10:53:26PM +0530, Chevchenkovic
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Chevchenkovic wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  It is not clear from the code as mentioned by you from
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ompi/mca/pml/ob1/  where exactly the selection of BTL bound to a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; particular LID occurs. Could you please specify the file/function
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; name
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; for the same?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; There is no such code there. OB1 knows nothing about LIDs. It does RR
</span><br>
<span class="quotelev3">&gt; &gt;&gt; over all available interconnects. It can do RR between ethernet, IB
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and Myrinet for instance. BTL presents each LID as different
</span><br>
<span class="quotelev3">&gt; &gt;&gt; virtual HCA
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to OB1 and it does round-robin between them without event knowing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is the same port of the same HCA.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can you explain what are you trying to achieve?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  -chev
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On 12/4/06, Gleb Natapov &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Mon, Dec 04, 2006 at 01:07:08AM +0530, Chevchenkovic
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Chevchenkovic wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Also could you please tell me which part of the openMPI code
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; needs to
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; be touched so that I can do some modifications in it to
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; incorporate
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; changes regarding LID selection...
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; It depend what do you want to do. The part that does RR over all
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; available LIDs is in OB1 PML (ompi/mca/pml/ob1/), but the code
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; doesn't
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; aware of the fact that it is doing RR over different LIDs and not
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; different NICs (yet?).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The code that controls what LIDs will be used is in
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ompi/mca/btl/openib/btl_openib_component.c.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On 12/4/06, Chevchenkovic Chevchenkovic
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &lt;chevchenkovic_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Is it possible to control the LID where the send and recvs are
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; posted.. on either ends?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; On 12/3/06, Gleb Natapov &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sun, Dec 03, 2006 at 07:03:33PM +0530, Chevchenkovic
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Chevchenkovic
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  I had this query. I hope some expert replies to it.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have 2 nodes connected point-to-point using infiniband
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cable. There
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; are multiple LIDs for each of the end node ports.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    When I give an MPI_Send, Are the sends are posted on
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; different LIDs
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; on each of the end nodes OR they are they posted on the same
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; LID?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Awaiting your reply,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; It depend what version of Open MPI your are using. If you are
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; using
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; trunk or v1.2 beta then all available LIDs are used in RR
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; fashion. The
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; early
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; versions don't support LMC.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;                   Gleb.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                        Gleb.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                        Gleb.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2308.php">Gleb Natapov: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>Previous message:</strong> <a href="2306.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>In reply to:</strong> <a href="2295.php">Jeff Squyres: "Re: [OMPI users] multiple LIDs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2308.php">Gleb Natapov: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>Reply:</strong> <a href="2308.php">Gleb Natapov: "Re: [OMPI users] multiple LIDs"</a>
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
