<?
$subject_val = "Re: [OMPI users] Pointers for understanding failure messages on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 20:43:26 2009" -->
<!-- isoreceived="20091202014326" -->
<!-- sent="Wed, 2 Dec 2009 14:43:20 +1300" -->
<!-- isosent="20091202014320" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pointers for understanding failure messages on NetBSD" -->
<!-- id="fa5f0d8d0510af84a330eea91a8cf821.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="07F41ED0-1BD8-4CD9-B9A6-D79D8BB95DE8_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-12-01 20:43:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11350.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11348.php">John R. Cary: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>In reply to:</strong> <a href="11346.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11350.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11350.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oy.  This is ick, because this error code is coming from horrendously
</span><br>
<span class="quotelev1">&gt; complex code deep in the depths of OMPI that is probing the OS to
</span><br>
<span class="quotelev1">&gt; figure out what ethernet interfaces you have.  It may or may not be
</span><br>
<span class="quotelev1">&gt; simple to fix this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you mind diving into the OMPI code a bit to figure this out?  I'm
</span><br>
<span class="quotelev1">&gt; afraid that none of the developers are likely to have access to
</span><br>
<span class="quotelev1">&gt; NetBSD.  :-(  I can point you right where to look.
</span><br>
<p>and
<br>
<p><span class="quotelev1">&gt; &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I  believe what this is saying is that we are not finding any TCP
</span><br>
<span class="quotelev1">&gt; interfaces - the ioctl itself is failing. So yes - miprun failing
</span><br>
<span class="quotelev1">&gt; at that point is going to happen because we have no way to communicate
</span><br>
<span class="quotelev1">&gt; for launch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you see interfaces if you do an /sbin/ifconfig? Do they have valid
</span><br>
<span class="quotelev1">&gt; IP addresses?
</span><br>
<p><p>Yes, all the machines participating in the grid have valid IP addresses
<br>
on their interfaces.
<br>
<p><p>I assume that both of you have seen the reply from Aleksej Saushev,
<br>
who seems to be the bloke looking after the port of OpenMPI to the
<br>
NetBSD platform.
<br>
<p><p>Aleksej suggested some mods he had partially looked at, in
<br>
<p>opal/util/if.c
<br>
<p>was that were you would have told me to go Jeff ?
<br>
<p>I have not as yet tried anything.
<br>
<p>I am awaiting being given the local ability to build the OpenMPI
<br>
within the NetBSD PkgSrc environment and am building externally
<br>
to it at present, so would be happy/able to try any suggestions
<br>
out.
<br>
<p>Kevin
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
<li><strong>Next message:</strong> <a href="11350.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11348.php">John R. Cary: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>In reply to:</strong> <a href="11346.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11350.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11350.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
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
