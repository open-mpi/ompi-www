<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 18 17:53:36 2007" -->
<!-- isoreceived="20070518215336" -->
<!-- sent="Fri, 18 May 2007 17:53:21 -0400" -->
<!-- isosent="20070518215321" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication" -->
<!-- id="1BA88196-1A31-43B6-9779-DB557984AE06_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070518212513.GD14385_at_drcomp.erfurt.thur.de" -->
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
<strong>Date:</strong> 2007-05-18 17:53:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3296.php">Steven Truong: "[OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>Previous message:</strong> <a href="3294.php">Adrian Knoth: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>In reply to:</strong> <a href="3294.php">Adrian Knoth: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3302.php">Adrian Knoth: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>Reply:</strong> <a href="3302.php">Adrian Knoth: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 18, 2007, at 5:25 PM, Adrian Knoth wrote:
<br>
<p><span class="quotelev1">&gt; If you don't want to parse dynamic ports or you don't want to lower  
</span><br>
<span class="quotelev1">&gt; your
</span><br>
<span class="quotelev1">&gt; MPI performance due to --enable-debug, you can easily change the  
</span><br>
<span class="quotelev1">&gt; code to
</span><br>
<span class="quotelev1">&gt; use a static port:
</span><br>
<p>As the linux kernel need some time before completely cleaning up the  
<br>
socket, this approach can lead to many problems. The most common is  
<br>
that a subsequent run will be unable to bind the port as it will be  
<br>
still considered in use by the kernel (even if the previous run  
<br>
closed the attached socket). There are solutions around these  
<br>
problems but they are not simple to implement. Another common problem  
<br>
is that you will be unable to have 2 processes of the same type (here  
<br>
I'm referring to MPI processes) on the same node.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the BTL, see btl_tcp_component.c:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Line 522, in function mca_btl_tcp_component_create_listen:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         if ((error = getaddrinfo(NULL, &quot;0&quot;, &amp;hints, &amp;res))) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; change the &quot;0&quot; to your desired port, or if you compile without IPv6,
</span><br>
<span class="quotelev1">&gt; change line 546:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     inaddr.sin_port = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the OOB (wire-up connection), change oob_tcp.c:445 and/or
</span><br>
<span class="quotelev1">&gt; oob_tcp.c:469, the code is absolutely the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can optionally create two parameters (one for oob_tcp and one  
</span><br>
<span class="quotelev1">&gt; for btl_tcp)
</span><br>
<span class="quotelev1">&gt; to set the ports from your mca-params.conf. Creating parameters isn't
</span><br>
<span class="quotelev1">&gt; that hard, you'll find examples inside the code (i.e.
</span><br>
<span class="quotelev1">&gt; btl_tcp_disable_family).
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3296.php">Steven Truong: "[OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>Previous message:</strong> <a href="3294.php">Adrian Knoth: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>In reply to:</strong> <a href="3294.php">Adrian Knoth: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3302.php">Adrian Knoth: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>Reply:</strong> <a href="3302.php">Adrian Knoth: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
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
