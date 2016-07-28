<?
$subject_val = "Re: [OMPI users] Test works with 3 computers, but not 4?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 30 09:46:43 2009" -->
<!-- isoreceived="20090730134643" -->
<!-- sent="Thu, 30 Jul 2009 07:46:27 -0600" -->
<!-- isosent="20090730134627" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Test works with 3 computers, but not 4?" -->
<!-- id="1AB1BF89-6632-420F-A409-255D902E3BA1_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c19fcadc0907300536v4d4ba17n563154f80f39f90f_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-30 09:46:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10143.php">George Bosilca: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Previous message:</strong> <a href="10141.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>In reply to:</strong> <a href="10141.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10134.php">Nifty Tom Mitchell: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 30, 2009, at 6:36 AM, David Doria wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 29, 2009 at 4:57 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Ah, so there is a firewall involved? That is always a problem. I  
</span><br>
<span class="quotelev1">&gt; gather that node 126 has clear access to all other nodes, but nodes  
</span><br>
<span class="quotelev1">&gt; 122, 123, and 125 do not all have access to each other?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See if your admin is willing to open at least one port on each node  
</span><br>
<span class="quotelev1">&gt; that can reach all other nodes. It is easiest if it is the same port  
</span><br>
<span class="quotelev1">&gt; for every node, but not required. Then you can try setting the mca  
</span><br>
<span class="quotelev1">&gt; params oob_tcp_port_minv4 and oob_tcp_port_rangev4. This should  
</span><br>
<span class="quotelev1">&gt; allow the daemons to communicate.
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
<span class="quotelev1">&gt; Machine 125 had the default fedora firewall turned on. I turned it  
</span><br>
<span class="quotelev1">&gt; off and it works now with simply
</span><br>
<span class="quotelev1">&gt; mpirun -H 10.1.2.126,10.1.2.122,10.1.2.123,10.1.2.125 hello-mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (the firewalls on the rest of the machines were already off in an  
</span><br>
<span class="quotelev1">&gt; attempt to avoid problems like this - I guess I just forgot one!)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a &quot;standard&quot; port I can open on these local firewalls so I  
</span><br>
<span class="quotelev1">&gt; don't have to disable them completely and so I don't have to set mca  
</span><br>
<span class="quotelev1">&gt; params oob_tcp_port_X ?
</span><br>
<p>I'm afraid not - however, you can set those params inside the default  
<br>
MCA param file so you never have to type them again.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10142/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10143.php">George Bosilca: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Previous message:</strong> <a href="10141.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>In reply to:</strong> <a href="10141.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10134.php">Nifty Tom Mitchell: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
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
