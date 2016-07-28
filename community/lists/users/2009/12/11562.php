<?
$subject_val = "Re: [OMPI users] Pointers for understanding failure messages on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 00:03:47 2009" -->
<!-- isoreceived="20091217050347" -->
<!-- sent="Thu, 17 Dec 2009 18:03:41 +1300" -->
<!-- isosent="20091217050341" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pointers for understanding failure messages on NetBSD" -->
<!-- id="10d31222c1ba22cdd9121cf6c63d46fd.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="E11FF3C1-F993-4ADD-859C-0EE15D446353_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-12-17 00:03:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11563.php">jody: "Re: [OMPI users] Debugging spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11561.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11561.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; You could confirm that it is the IPv6 loop by simply disabling IPv6
</span><br>
<span class="quotelev1">&gt; support - configure with --disable-ipv6 and see if you still get the error
</span><br>
<span class="quotelev1">&gt; messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for continuing to pursue this!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yeah, but if you disable the IPv6 stuff then there's a completely
<br>
different path taken through the routine in question.
<br>
<p>It just does a simple:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;inet_ntoa(((struct sockaddr_in*) addr)-&gt;sin_addr);
<br>
<p>as opposed to the
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;error = getnameinfo(addr, addrlen,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;name, NI_MAXHOST, NULL, 0, NI_NUMERICHOST);
<br>
<p><p>that gets invoked, for EVERY addr, if you do enable IPv6, which
<br>
seems a little odd.
<br>
<p>Actually, looking at the logic of how execution happens in that
<br>
routine, it's not clear that an IPv6 addr on NetBSD should get
<br>
into the code where the getnameinfo() is called anyway !
<br>
<p>A comment just above there even says:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* hotfix for netbsd: on my netbsd machine, getnameinfo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;returns an unkown error code. */
<br>
<p><p>Turning off IPv6 therefore doesn't actual tickle the previous error
<br>
in a different way for IPv4, it simply routes around it altogether.
<br>
<p>I still reckon that the &quot;sa_len = 0&quot; is the key here and that must
<br>
be being set elsewhere when the addr that is blowing things up is
<br>
allowed through.
<br>
<p>I'll try recompiling the PETSc/PISM stuff on top of an --disable-ipv6
<br>
OpenMPI and see what happens. Certainly, when running the SkaMPI tests
<br>
the error messages go away, but then they aren't in the code that is
<br>
being compiled anymore, so one might expect that !!!
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
<li><strong>Next message:</strong> <a href="11563.php">jody: "Re: [OMPI users] Debugging spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11561.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11561.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
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
