<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 12 00:03:48 2007" -->
<!-- isoreceived="20070612040348" -->
<!-- sent="Tue, 12 Jun 2007 00:03:09 -0400 (Eastern Daylight Time)" -->
<!-- isosent="20070612040309" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mixing MX and TCP" -->
<!-- id="Pine.WNT.4.64.0706120001220.1488_at_voyager" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="66bc01c7ac62$fdde3840$58c31fac_at_bart" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-12 00:03:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3468.php">George Bosilca: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Previous message:</strong> <a href="3466.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>In reply to:</strong> <a href="3460.php">Reese Faucette: "Re: [OMPI users] mixing MX and TCP"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, as expected this call is not documented ... and I get to it only 
<br>
with some help from Loic. On the version of MX I have tested it is not 
<br>
required to add the 3th and 4th arguments as I don't want to set anything. 
<br>
The NIC is already specified through the mx_btl-&gt;mx_endpoint isn't it ?
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Mon, 11 Jun 2007, Reese Faucette wrote:
<br>
<p><span class="quotelev2">&gt;&gt; !         if( (status = mx_get_info( mx_btl-&gt;mx_endpoint, MX_LINE_SPEED,
</span><br>
<span class="quotelev2">&gt;&gt; !                                    &amp;nic_id, sizeof(nic_id),
</span><br>
<span class="quotelev2">&gt;&gt;                                      &amp;value, sizeof(int))) != MX_SUCCESS )
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yes, a NIC ID is required for this call because a host may have multiple
</span><br>
<span class="quotelev1">&gt; NICs with different linespeeds, e.g. a 2G card and a 10G card.
</span><br>
<span class="quotelev1">&gt; -reese
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3468.php">George Bosilca: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Previous message:</strong> <a href="3466.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>In reply to:</strong> <a href="3460.php">Reese Faucette: "Re: [OMPI users] mixing MX and TCP"</a>
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
