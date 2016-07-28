<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 30 07:43:13 2007" -->
<!-- isoreceived="20070430114313" -->
<!-- sent="Mon, 30 Apr 2007 07:43:02 -0400" -->
<!-- isosent="20070430114302" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sockaddr* vs. sockaddr_storage*" -->
<!-- id="ea86ce220704300443i74e8c2edhdbbd753a8818d18c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070429160703.GF14385_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-30 07:43:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1468.php">Jun Hui Bu: "[OMPI devel] Jun Hui Bu is out of the office for Labor Day holiday."</a>
<li><strong>Previous message:</strong> <a href="1466.php">Adrian Knoth: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<li><strong>In reply to:</strong> <a href="1465.php">Adrian Knoth: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/05/1469.php">Jeff Squyres: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Adrian,
<br>
<p>On 4/29/07, Adrian Knoth &lt;adi_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Sun, Apr 29, 2007 at 10:18:01AM -0400, George Bosilca wrote:
</span><br>
<p>[snip]
<br>
<span class="quotelev1">&gt; BTW: How does multi TCP BTL works? I see num_links, but I wonder if
</span><br>
<span class="quotelev1">&gt; kernel channel bonding would achieve the same results...
</span><br>
<p>Unfortunately, kernel channel bonding is very unlikely to achieve the
<br>
same results as Open MPI's striping with multi TCP BTL.
<br>
<p>Here is a relevant snippet of the documentation for kernel channel bonding:
<br>
<p>========
<br>
balance-rr: This mode is the only mode that will permit a single
<br>
TCP/IP connection to stripe traffic across multiple
<br>
interfaces. It is therefore the only mode that will allow a
<br>
single TCP/IP stream to utilize more than one interface's
<br>
worth of throughput. This comes at a cost, however: the
<br>
striping often results in peer systems receiving packets out
<br>
of order, causing TCP/IP's congestion control system to kick
<br>
in, often by retransmitting segments.
<br>
========
<br>
<p>The Open MPI way avoids this packet reordering problem, since
<br>
any individual TCP stream is carried by only a single NIC at either
<br>
end of the transmission.  Since Open MPI splits the MPI traffic
<br>
across multiple TCP streams, additional throughput is possible
<br>
without the low-level packet reordering problem.
<br>
<p>If you really want to know more about this, I could go on at length,
<br>
but I'll spare the rest of the readers on the mailing list for now.
<br>
<pre>
-- 
Tim Mattox - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1468.php">Jun Hui Bu: "[OMPI devel] Jun Hui Bu is out of the office for Labor Day holiday."</a>
<li><strong>Previous message:</strong> <a href="1466.php">Adrian Knoth: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<li><strong>In reply to:</strong> <a href="1465.php">Adrian Knoth: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/05/1469.php">Jeff Squyres: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
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
