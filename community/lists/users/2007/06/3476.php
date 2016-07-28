<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 12 15:22:36 2007" -->
<!-- isoreceived="20070612192236" -->
<!-- sent="Tue, 12 Jun 2007 20:22:32 +0100" -->
<!-- isosent="20070612192232" -->
<!-- name="Jonathan Underwood" -->
<!-- email="jonathan.underwood_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TCP connection errors" -->
<!-- id="645d17210706121222u138a7f8ar140360a3db52d051_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.WNT.4.64.0706120005310.1488_at_voyager" -->
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
<strong>From:</strong> Jonathan Underwood (<em>jonathan.underwood_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-12 15:22:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3477.php">George Bosilca: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Previous message:</strong> <a href="3475.php">Jeff Pummill: "Re: [OMPI users] f90 support not built with gfortran?"</a>
<li><strong>In reply to:</strong> <a href="3468.php">George Bosilca: "Re: [OMPI users] TCP connection errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3477.php">George Bosilca: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Reply:</strong> <a href="3477.php">George Bosilca: "Re: [OMPI users] TCP connection errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/06/07, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Jonathan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It will be difficult to make it works in this configuration. The problem
</span><br>
<span class="quotelev1">&gt; is that on the head node the network interface that have to be used is
</span><br>
<span class="quotelev1">&gt; eth1 while on the compute nodes is eth0. Therefore, the tcp_if_include
</span><br>
<span class="quotelev1">&gt; will not help ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, if you only start processes on the compute nodes you will not have to
</span><br>
<span class="quotelev1">&gt; face this problem. Right now, I think this is the safest approach.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have a patch for this kind of problems, but it's not yet in the trunk.
</span><br>
<span class="quotelev1">&gt; I let you know as soon as we commit it and then you will have to use the
</span><br>
<span class="quotelev1">&gt; unstable version until the patch make its way into a stable version.
</span><br>
<p>OK, thanks very much for letting me know.
<br>
<p>Presumably switching the two interfaces on the frontend (eth0&lt;-&gt;eth1)
<br>
would also solve this problem?
<br>
<p>Cheers,
<br>
Jonathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3477.php">George Bosilca: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Previous message:</strong> <a href="3475.php">Jeff Pummill: "Re: [OMPI users] f90 support not built with gfortran?"</a>
<li><strong>In reply to:</strong> <a href="3468.php">George Bosilca: "Re: [OMPI users] TCP connection errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3477.php">George Bosilca: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Reply:</strong> <a href="3477.php">George Bosilca: "Re: [OMPI users] TCP connection errors"</a>
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
