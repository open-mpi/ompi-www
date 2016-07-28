<?
$subject_val = "Re: [OMPI users] Pointers for understanding failure messages on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  2 21:00:42 2009" -->
<!-- isoreceived="20091203020042" -->
<!-- sent="Thu, 3 Dec 2009 15:00:35 +1300" -->
<!-- isosent="20091203020035" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pointers for understanding failure messages on NetBSD" -->
<!-- id="fe58d41c5e0307c57288ffd1005141d3.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2173B4FF-7151-4433-A31C-FD881ABA05C7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pointers for understanding failure messages on NetBSD<br>
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Pointers%20for%20understanding%20failure%20messages%20on%20NetBSD"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-12-02 21:00:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11391.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11389.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11389.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11391.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; I would be leery of the hard-coded stuff.
</span><br>
<p>Indeed, so I changed it to:
<br>
<p>&nbsp;&nbsp;intf.if_mask = prefix( sin_addr-&gt;sin_addr.s_addr);
<br>
<p>which seems to match what the &quot;old&quot; code was doing: still blowing
<br>
up though.
<br>
<p><span class="quotelev1">&gt; Reason: the IPv6 code has been a continual source of trouble,
</span><br>
<span class="quotelev1">&gt; while the IPv4 code has worked quite well.
</span><br>
<p>I believe that the NetBSD getifaddrs-based loop should still get
<br>
the same info as the IPv4 code and stick it in the opal_list.
<br>
<p>It may just be that my conversion from the IPv6 block/structs to
<br>
an IPv4 &quot;version&quot; is missing something out.
<br>
<p>To be honest, I was surprised it compiled at all!
<br>
<p><pre>
-- 
Kevin M. Buckley                                  Room:  CO327
School of Engineering and                         Phone: +64 4 463 5971
 Computer Science
Victoria University of Wellington
New Zealand
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11391.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11389.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11389.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11391.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
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
