<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec  4 13:00:16 2006" -->
<!-- isoreceived="20061204180016" -->
<!-- sent="Mon, 4 Dec 2006 20:00:06 +0200" -->
<!-- isosent="20061204180006" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multiple LIDs" -->
<!-- id="20061204180006.GA32140_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1c16cdf90612040923g34a7c20fk358e9484bff4a0f4_at_mail.gmail.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-04 13:00:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2292.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>Previous message:</strong> <a href="2290.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>In reply to:</strong> <a href="2290.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2292.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>Reply:</strong> <a href="2292.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Dec 04, 2006 at 10:53:26PM +0530, Chevchenkovic Chevchenkovic wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  It is not clear from the code as mentioned by you from
</span><br>
<span class="quotelev1">&gt; ompi/mca/pml/ob1/  where exactly the selection of BTL bound to a
</span><br>
<span class="quotelev1">&gt; particular LID occurs. Could you please specify the file/function name
</span><br>
<span class="quotelev1">&gt; for the same?
</span><br>
There is no such code there. OB1 knows nothing about LIDs. It does RR
<br>
over all available interconnects. It can do RR between ethernet, IB
<br>
and Myrinet for instance. BTL presents each LID as different virtual HCA
<br>
to OB1 and it does round-robin between them without event knowing this
<br>
is the same port of the same HCA.
<br>
<p>Can you explain what are you trying to achieve?
<br>
<p><span class="quotelev1">&gt;  -chev
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/4/06, Gleb Natapov &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Dec 04, 2006 at 01:07:08AM +0530, Chevchenkovic Chevchenkovic wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Also could you please tell me which part of the openMPI code needs to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; be touched so that I can do some modifications in it to incorporate
</span><br>
<span class="quotelev3">&gt; &gt; &gt; changes regarding LID selection...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It depend what do you want to do. The part that does RR over all
</span><br>
<span class="quotelev2">&gt; &gt; available LIDs is in OB1 PML (ompi/mca/pml/ob1/), but the code doesn't
</span><br>
<span class="quotelev2">&gt; &gt; aware of the fact that it is doing RR over different LIDs and not
</span><br>
<span class="quotelev2">&gt; &gt; different NICs (yet?).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The code that controls what LIDs will be used is in
</span><br>
<span class="quotelev2">&gt; &gt; ompi/mca/btl/openib/btl_openib_component.c.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On 12/4/06, Chevchenkovic Chevchenkovic &lt;chevchenkovic_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Is it possible to control the LID where the send and recvs are
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; posted.. on either ends?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On 12/3/06, Gleb Natapov &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; On Sun, Dec 03, 2006 at 07:03:33PM +0530, Chevchenkovic Chevchenkovic
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;  I had this query. I hope some expert replies to it.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; I have 2 nodes connected point-to-point using infiniband cable. There
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; are multiple LIDs for each of the end node ports.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;    When I give an MPI_Send, Are the sends are posted on different LIDs
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; on each of the end nodes OR they are they posted on the same LID?
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;  Awaiting your reply,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; It depend what version of Open MPI your are using. If you are using
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; trunk or v1.2 beta then all available LIDs are used in RR fashion. The
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; early
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; versions don't support LMC.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; --
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;                   Gleb.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;                        Gleb.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2292.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>Previous message:</strong> <a href="2290.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>In reply to:</strong> <a href="2290.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2292.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
<li><strong>Reply:</strong> <a href="2292.php">Chevchenkovic Chevchenkovic: "Re: [OMPI users] multiple LIDs"</a>
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
