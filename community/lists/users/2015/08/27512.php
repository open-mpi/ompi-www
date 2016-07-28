<?
$subject_val = "Re: [OMPI users] Multiple windows for the same communicator at thesame time";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 31 14:34:10 2015" -->
<!-- isoreceived="20150831183410" -->
<!-- sent="Mon, 31 Aug 2015 18:33:44 +0000" -->
<!-- isosent="20150831183344" -->
<!-- name="Barrett, Brian" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multiple windows for the same communicator at thesame time" -->
<!-- id="D209EBA2.11ACD%bbarrett_at_amazon.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAGhmpEEE6KABOUWK-ETUH6X6mWoOp5f2j8FUwALpw3PSz7A=2g_at_mail.gmail.com" -->
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
<strong>From:</strong> Barrett, Brian (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-31 14:33:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27513.php">Saliya Ekanayake: "[OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<li><strong>Previous message:</strong> <a href="27511.php">abhisekpan_at_[hidden]: "Re: [OMPI users] Multiple windows for the same communicator at thesame time"</a>
<li><strong>In reply to:</strong> <a href="27511.php">abhisekpan_at_[hidden]: "Re: [OMPI users] Multiple windows for the same communicator at thesame time"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah; the cid needs to be unique from the communicator passed to win_create because the win functions will call collectives on their communicator.  It would be unfortunate to have user collectives and window collectives colliding (unfortunate meaning violating the standard here).  It just makes a heap of things easier to get a unique CID per window, although it does limit both the total number of windows and the total number of communicators you can have.
<br>
<p>Brian
<br>
<p>On 8/31/15, 7:28 AM, &quot;users on behalf of abhisekpan_at_[hidden]&lt;mailto:abhisekpan_at_[hidden]&gt;&quot; &lt;users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; on behalf of abhisekpan_at_[hidden]&lt;mailto:abhisekpan_at_[hidden]&gt;&gt; wrote:
<br>
<p>RIght, my mistake, I missed the new cid generation in the comm duplicator calls. Thanks a lot!
<br>
<p><p><pre>
--
Abhisek
Live Long and Prosper
On Mon, Aug 31, 2015 at 9:25 AM, Todd Kordenbrock &lt;thkgcode_at_[hidden]&lt;mailto:thkgcode_at_[hidden]&gt;&gt; wrote:
Hi Abhisek,
Both the portals4 and pt2pt OSC components call ompi_comm_dup() near the beginning of component_select(), so each window has it's own communicator.  The duplicated communicator has a unique contextid and therefore the window has unique match bits/hash key.
Thanks,
todd
On Mon, Aug 31, 2015 at 5:59 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
On Aug 27, 2015, at 11:55 AM, abhisekpan_at_[hidden]&lt;mailto:abhisekpan_at_[hidden]&gt; wrote:
&gt;
&gt; I want to know if it is allowed in MPI one-sided communication to open multiple windows simultaneously using  the same communicator.
Yes.
&gt; The standard does not seem to forbid it as far as I can see, but when I look at the open mpi  osc components (rdma and portals4) it looks like a window is always identified by the context-id in the communicator (for example the match bits in portals4 component use the communicator cid to distinguish among windows, there is a hash-table in the rdma component that uses the communicator cid as the key to store open modules). It seems to me that these components may not be able to support multiple open windows opened with the same communicator.
Nathan/Todd will have to answer that.  I'd be (very) surprised if the code did not support multiple windows that were generated from the same communicator.
--
Jeff Squyres
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27509.php">http://www.open-mpi.org/community/lists/users/2015/08/27509.php</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27510.php">http://www.open-mpi.org/community/lists/users/2015/08/27510.php</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27512/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27513.php">Saliya Ekanayake: "[OMPI users] OpenMPI optimizations for intra-node process communication"</a>
<li><strong>Previous message:</strong> <a href="27511.php">abhisekpan_at_[hidden]: "Re: [OMPI users] Multiple windows for the same communicator at thesame time"</a>
<li><strong>In reply to:</strong> <a href="27511.php">abhisekpan_at_[hidden]: "Re: [OMPI users] Multiple windows for the same communicator at thesame time"</a>
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
