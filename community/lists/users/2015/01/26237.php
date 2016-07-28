<?
$subject_val = "Re: [OMPI users] TCP BTL and virtual network interfaces, bug #3339";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 15:19:41 2015" -->
<!-- isoreceived="20150126201941" -->
<!-- sent="Mon, 26 Jan 2015 15:19:40 -0500" -->
<!-- isosent="20150126201940" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TCP BTL and virtual network interfaces, bug #3339" -->
<!-- id="CAMJJpkX0J37xiYTT6Mm8mRyjW6hsSWorPQ66=ReqEp_riJbNhg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="57EC03262F730743B98EC55F5CD407D96A61D2_at_CFWEX01.americas.cray.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] TCP BTL and virtual network interfaces, bug #3339<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-26 15:19:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26238.php">Kris Kersten: "Re: [OMPI users] TCP BTL and virtual network interfaces, bug #3339"</a>
<li><strong>Previous message:</strong> <a href="26236.php">Kris Kersten: "[OMPI users] TCP BTL and virtual network interfaces, bug #3339"</a>
<li><strong>In reply to:</strong> <a href="26236.php">Kris Kersten: "[OMPI users] TCP BTL and virtual network interfaces, bug #3339"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26238.php">Kris Kersten: "Re: [OMPI users] TCP BTL and virtual network interfaces, bug #3339"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Use mpirun --mca btl_tcp_if_exclude eth0 should fix your problem. Otherwise
<br>
you can add it to your configuration file. Everything is extensively
<br>
described in the FAQ.
<br>
<p>George.
<br>
On Jan 26, 2015 12:11 PM, &quot;Kris Kersten&quot; &lt;kkersten_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  I'm working on an ethernet cluster that uses virtual eth0:* interfaces
</span><br>
<span class="quotelev1">&gt; on the compute nodes for IPMI and system management.  As described in Trac
</span><br>
<span class="quotelev1">&gt; ticket #3339 (<a href="https://svn.open-mpi.org/trac/ompi/ticket/3339">https://svn.open-mpi.org/trac/ompi/ticket/3339</a> ), this
</span><br>
<span class="quotelev1">&gt; setup confuses the TCP BTL which can't differentiate between the physical
</span><br>
<span class="quotelev1">&gt; and virtual interfaces.  Verbose BTL output confirms this, showing
</span><br>
<span class="quotelev1">&gt; attempted communication on both the physical and virtual IP addresses
</span><br>
<span class="quotelev1">&gt; followed by a hang.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has there been any progress on this bug?  Or has anyone managed to figure
</span><br>
<span class="quotelev1">&gt; out a workaround?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kris
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26236.php">http://www.open-mpi.org/community/lists/users/2015/01/26236.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26237/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26238.php">Kris Kersten: "Re: [OMPI users] TCP BTL and virtual network interfaces, bug #3339"</a>
<li><strong>Previous message:</strong> <a href="26236.php">Kris Kersten: "[OMPI users] TCP BTL and virtual network interfaces, bug #3339"</a>
<li><strong>In reply to:</strong> <a href="26236.php">Kris Kersten: "[OMPI users] TCP BTL and virtual network interfaces, bug #3339"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26238.php">Kris Kersten: "Re: [OMPI users] TCP BTL and virtual network interfaces, bug #3339"</a>
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
