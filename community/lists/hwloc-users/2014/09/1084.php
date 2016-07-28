<?
$subject_val = "Re: [hwloc-users] more detailed errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 13:16:46 2014" -->
<!-- isoreceived="20140917171646" -->
<!-- sent="Wed, 17 Sep 2014 19:16:44 +0200" -->
<!-- isosent="20140917171644" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] more detailed errors" -->
<!-- id="5419C1FC.1000000_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="D03F0F62.16F40%rta_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-users] more detailed errors<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-17 13:16:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1085.php">Brice Goglin: "Re: [hwloc-users] problem with X11 using Solaris"</a>
<li><strong>Previous message:</strong> <a href="1083.php">Brice Goglin: "Re: [hwloc-users] more detailed errors"</a>
<li><strong>Maybe in reply to:</strong> <a href="1081.php">Aulwes, Rob: "[hwloc-users] more detailed errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
$ errno 24
<br>
EMFILE 24 Too many open files
<br>
<p>Ohoh that's a new one :)
<br>
<p>Can you do a strace of the program and send the output?
<br>
If the file is big, you can send it to me in a private mail.
<br>
<p>Brice
<br>
<p><p><p>Le 17/09/2014 18:14, Aulwes, Rob a &#233;crit :
<br>
<span class="quotelev1">&gt; ERRNO = 24.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Brice Goglin &lt;brice.goglin_at_[hidden] &lt;mailto:brice.goglin_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Date: Wed, 17 Sep 2014 18:07:08 +0200
</span><br>
<span class="quotelev1">&gt; To: Hardware locality user list &lt;hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:hwloc-users_at_[hidden]&gt;&gt;, Rob Aulwes &lt;rta_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:rta_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [hwloc-users] more detailed errors
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is errno after load() failing?
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 17 septembre 2014 17:43:13 UTC+02:00, &quot;Aulwes, Rob&quot; &lt;rta_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:rta_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     A call to hwloc_topology_load is failing, but all that is returned
</span><br>
<span class="quotelev1">&gt;     is &#150;1.  Are there error reporting routines that can be called to
</span><br>
<span class="quotelev1">&gt;     get more details about the error?  The doc for hwloc_topology_load
</span><br>
<span class="quotelev1">&gt;     only says that &#150;1 is returned on error, but doesn't give any hints
</span><br>
<span class="quotelev1">&gt;     about what could cause an error (I already check that a topology
</span><br>
<span class="quotelev1">&gt;     object was initialized with hwloc_topology_init).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks,
</span><br>
<span class="quotelev1">&gt;     Rob Aulwes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt;     hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1081.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1081.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1084/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1085.php">Brice Goglin: "Re: [hwloc-users] problem with X11 using Solaris"</a>
<li><strong>Previous message:</strong> <a href="1083.php">Brice Goglin: "Re: [hwloc-users] more detailed errors"</a>
<li><strong>Maybe in reply to:</strong> <a href="1081.php">Aulwes, Rob: "[hwloc-users] more detailed errors"</a>
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
