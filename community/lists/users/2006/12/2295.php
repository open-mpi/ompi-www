<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec  4 14:46:52 2006" -->
<!-- isoreceived="20061204194652" -->
<!-- sent="Mon, 4 Dec 2006 14:46:39 -0500" -->
<!-- isosent="20061204194639" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multiple LIDs" -->
<!-- id="08CC85BB-5D3F-4D7C-9951-D1522EF81C4A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1c16cdf90612041027w646448a8r4ded6f4e95dc7aa_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-04 14:46:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2296.php">Jeff Squyres: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Previous message:</strong> <a href="2294.php">Gleb Natapov: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>In reply to:</strong> <a href="2292.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2307.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>Reply:</strong> <a href="2307.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are two distinct layers of software being discussed here:
<br>
<p>- the PML (basically the back-end to MPI_SEND and friends)
<br>
- the BTL (byte transfer layer, the back-end bit movers for the ob1  
<br>
and dr PMLs -- this distinction is important because there is nothing  
<br>
in the PML design that forces the use of BTL's; indeed, there is at  
<br>
least one current PML that does not use BTL's as the back-end bit  
<br>
mover [the cm PML])
<br>
<p>The ob1 and dr PMLs know nothing about how the back-end bitmovers  
<br>
work (BTL components) -- the BTLs are given considerable freedom to  
<br>
operate within their specific interface contracts.
<br>
<p>Generally, ob1/dr queries each BTL component when Open MPI starts  
<br>
up.  Each BTL responds with whether it wants to run or not.  If it  
<br>
does, it gives back the one or more modules (think of a module as an  
<br>
&quot;instance&quot; of a component).  Typically, these modules correspond to  
<br>
multiple NICs / HCAs / network endpoints.  For example, if you have 2  
<br>
ethernet cards, the tcp BTL will create and return 2 modules.  ob1 /  
<br>
dr will treat these as two paths to send data (reachability is  
<br>
computed as well, of course -- ob1/dr will only send data down btls  
<br>
for which the target peer is reachable).  In general, ob1/dr will  
<br>
round-robin across all available BTL modules when sending large  
<br>
messages (as Gleb has described).  See <a href="http://www.open-mpi.org/papers/">http://www.open-mpi.org/papers/</a> 
<br>
euro-pvmmpi-2006-hpc-protocols/ for a general description of the ob1/ 
<br>
dr protocols.
<br>
<p>The openib BTL can return multiple modules if multiple LIDs are  
<br>
available.  So the ob1/dr doesn't know that these are not physical  
<br>
devices -- it just treats each module as an equivalent mechanism to  
<br>
send data.
<br>
<p>This is actually somewhat lame as a scheme, and we talked internally  
<br>
about doing something more intelligent.  But we decided to hold off  
<br>
and let people (like you!) with real-world apps and networks give  
<br>
this stuff a try and see what really works (and what doesn't work)  
<br>
before trying to implement anything else.
<br>
<p>So -- all that explanation aside -- we'd love to hear your feedback  
<br>
with regards to the multi-LID stuff in Open MPI.  :-)
<br>
<p><p><p>On Dec 4, 2006, at 1:27 PM, Chevchenkovic Chevchenkovic wrote:
<br>
<p><span class="quotelev1">&gt;  Thanks for that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Suppose,  if there there are multiple interconnects, say ethernet and
</span><br>
<span class="quotelev1">&gt; infiniband  and a million byte of data is to be sent, then in this
</span><br>
<span class="quotelev1">&gt; case the data will be sent through infiniband (since its a fast path
</span><br>
<span class="quotelev1">&gt; .. please correct me here if i m wrong).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   If there are mulitple such sends, do you mean to say that each send
</span><br>
<span class="quotelev1">&gt; will go  through  different BTLs in a RR manner if they are connected
</span><br>
<span class="quotelev1">&gt; to the same port?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -chev
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/4/06, Gleb Natapov &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Dec 04, 2006 at 10:53:26PM +0530, Chevchenkovic  
</span><br>
<span class="quotelev2">&gt;&gt; Chevchenkovic wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  It is not clear from the code as mentioned by you from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/mca/pml/ob1/  where exactly the selection of BTL bound to a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; particular LID occurs. Could you please specify the file/function  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; name
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for the same?
</span><br>
<span class="quotelev2">&gt;&gt; There is no such code there. OB1 knows nothing about LIDs. It does RR
</span><br>
<span class="quotelev2">&gt;&gt; over all available interconnects. It can do RR between ethernet, IB
</span><br>
<span class="quotelev2">&gt;&gt; and Myrinet for instance. BTL presents each LID as different  
</span><br>
<span class="quotelev2">&gt;&gt; virtual HCA
</span><br>
<span class="quotelev2">&gt;&gt; to OB1 and it does round-robin between them without event knowing  
</span><br>
<span class="quotelev2">&gt;&gt; this
</span><br>
<span class="quotelev2">&gt;&gt; is the same port of the same HCA.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you explain what are you trying to achieve?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -chev
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 12/4/06, Gleb Natapov &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mon, Dec 04, 2006 at 01:07:08AM +0530, Chevchenkovic  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Chevchenkovic wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Also could you please tell me which part of the openMPI code  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; needs to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be touched so that I can do some modifications in it to  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; incorporate
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; changes regarding LID selection...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It depend what do you want to do. The part that does RR over all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available LIDs is in OB1 PML (ompi/mca/pml/ob1/), but the code  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; doesn't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; aware of the fact that it is doing RR over different LIDs and not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; different NICs (yet?).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The code that controls what LIDs will be used is in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi/mca/btl/openib/btl_openib_component.c.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 12/4/06, Chevchenkovic Chevchenkovic  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;chevchenkovic_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Is it possible to control the LID where the send and recvs are
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; posted.. on either ends?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 12/3/06, Gleb Natapov &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Sun, Dec 03, 2006 at 07:03:33PM +0530, Chevchenkovic  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Chevchenkovic
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  I had this query. I hope some expert replies to it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have 2 nodes connected point-to-point using infiniband  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cable. There
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; are multiple LIDs for each of the end node ports.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    When I give an MPI_Send, Are the sends are posted on  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; different LIDs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; on each of the end nodes OR they are they posted on the same  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; LID?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Awaiting your reply,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; It depend what version of Open MPI your are using. If you are  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; using
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; trunk or v1.2 beta then all available LIDs are used in RR  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; fashion. The
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; early
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; versions don't support LMC.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                   Gleb.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                        Gleb.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;                        Gleb.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2296.php">Jeff Squyres: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Previous message:</strong> <a href="2294.php">Gleb Natapov: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>In reply to:</strong> <a href="2292.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2307.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>Reply:</strong> <a href="2307.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
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
