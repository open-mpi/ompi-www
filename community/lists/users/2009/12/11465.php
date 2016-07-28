<?
$subject_val = "Re: [OMPI users] Pointers for understanding failure messages on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 23:51:53 2009" -->
<!-- isoreceived="20091209045153" -->
<!-- sent="Wed, 9 Dec 2009 17:51:34 +1300" -->
<!-- isosent="20091209045134" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pointers for understanding failure messages on NetBSD" -->
<!-- id="cde255d6e6f93be8ba36117b9a98b5d7.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="04bd4ebe58341a8a2a55927367dba6cc.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>Date:</strong> 2009-12-08 23:51:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11466.php">Aleksej Saushev: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11464.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11459.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11466.php">Aleksej Saushev: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; I attach a patch, but it doesn't work and I don't see where the
</span><br>
<span class="quotelev2">&gt;&gt; error lies now. It may be that I'm doing something stupid.
</span><br>
<span class="quotelev2">&gt;&gt; It produces working OpenMPI-1.3.4 package on Dragonfly though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, I'll try and merge it in to the working stuff we have here.
</span><br>
<span class="quotelev1">&gt; I, obviously, just #ifdef'd for NetBSD as that is all I have to
</span><br>
<span class="quotelev1">&gt; try stuff out against.
</span><br>
<p>I mereged your __DragonFly__ stuff into my patch and applied it
<br>
against the NetBSD build.
<br>
<p>Things are still running on NetBSD albeit with the temporary name
<br>
resolution issues. These come from a routine in opal/util/net.c
<br>
<p>opal/util/net.c:opal_net_get_hostname()
<br>
<p>and it is being called from:
<br>
<p>orte/mca/oob/tcp/oob_tcp.c:mca_oob_tcp_parse_uri()
<br>
<p>I've looked at these routines before, it was how I discovered
<br>
that the s_len was not being set, so I'll have another dig
<br>
around and see if I can see why the temporary errors  occur, and,
<br>
indeed, if they are actually temporary.
<br>
<p>The contents of the NetBSD patches directory I have been using,
<br>
including your stuff, is now here:
<br>
<p><a href="http://www.ecs.vuw.ac.nz/~kevin/forMPI/openmpi-1.3.4-20091209-netbsd.tar.gz">http://www.ecs.vuw.ac.nz/~kevin/forMPI/openmpi-1.3.4-20091209-netbsd.tar.gz</a>
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
<li><strong>Next message:</strong> <a href="11466.php">Aleksej Saushev: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11464.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="11459.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11466.php">Aleksej Saushev: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
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
