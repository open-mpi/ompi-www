<?
$subject_val = "Re: [OMPI users] Test works with 3 computers, but not 4?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 30 08:36:28 2009" -->
<!-- isoreceived="20090730123628" -->
<!-- sent="Thu, 30 Jul 2009 08:36:20 -0400" -->
<!-- isosent="20090730123620" -->
<!-- name="David Doria" -->
<!-- email="daviddoria+openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Test works with 3 computers, but not 4?" -->
<!-- id="c19fcadc0907300536v4d4ba17n563154f80f39f90f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="98BEA77A-7310-4BC6-89C1-D7B8553E61B5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Test works with 3 computers, but not 4?<br>
<strong>From:</strong> David Doria (<em>daviddoria+openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-30 08:36:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10142.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Previous message:</strong> <a href="10140.php">Pavel Shamis (Pasha): "Re: [OMPI users] Using dual infiniband HCA cards"</a>
<li><strong>In reply to:</strong> <a href="10136.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10142.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Reply:</strong> <a href="10142.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 29, 2009 at 4:57 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ah, so there is a firewall involved? That is always a problem. I gather
</span><br>
<span class="quotelev1">&gt; that node 126 has clear access to all other nodes, but nodes 122, 123, and
</span><br>
<span class="quotelev1">&gt; 125 do not all have access to each other?
</span><br>
<span class="quotelev1">&gt; See if your admin is willing to open at least one port on each
</span><br>
<span class="quotelev1">&gt; node that can reach all other nodes. It is easiest if it is the same port for every node,
</span><br>
<span class="quotelev1">&gt; but not required. Then you can try setting
</span><br>
<span class="quotelev1">&gt; the mca params oob_tcp_port_minv4 and
</span><br>
<span class="quotelev1">&gt; oob_tcp_port_rangev4. This should allow the daemons to communicate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check ompi_info --param oob tcp for info on those (and other) params.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 29, 2009, at 2:46 PM, David Doria wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Machine 125 had the default fedora firewall turned on. I turned it off and
<br>
it works now with simply
<br>
mpirun -H 10.1.2.126,10.1.2.122,10.1.2.123,10.1.2.125 hello-mpi
<br>
<p>(the firewalls on the rest of the machines were already off in an attempt to
<br>
avoid problems like this - I guess I just forgot one!)
<br>
<p>Is there a &quot;standard&quot; port I can open on these local firewalls so I don't
<br>
have to disable them completely and so I don't have to set mca params
<br>
oob_tcp_port_X ?
<br>
<p>Thanks,
<br>
<p>David
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10141/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10142.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Previous message:</strong> <a href="10140.php">Pavel Shamis (Pasha): "Re: [OMPI users] Using dual infiniband HCA cards"</a>
<li><strong>In reply to:</strong> <a href="10136.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10142.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Reply:</strong> <a href="10142.php">Ralph Castain: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
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
