<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 20 12:51:48 2005" -->
<!-- isoreceived="20050920175148" -->
<!-- sent="Tue, 20 Sep 2005 11:51:42 -0600" -->
<!-- isosent="20050920175142" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] HOWTO turn of &amp;quot;multi-rail&amp;quot; support at runtime?" -->
<!-- id="43304C2E.3090702_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20050920164137.GA7216_at_lanl.gov" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-20 12:51:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0157.php">Borenstein, Bernard S: "[O-MPI users] problem running on a myrinet linux cluster"</a>
<li><strong>Previous message:</strong> <a href="0155.php">Daryl W. Grunau: "[O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at runtime?"</a>
<li><strong>In reply to:</strong> <a href="0155.php">Daryl W. Grunau: "[O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at runtime?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Daryl,
<br>
<p>Try setting:
<br>
<p>-mca btl_base_include self,mvapi
<br>
<p>To specify that only lookback (self) and mvapi btls should be used.
<br>
<p>Can you forward me the config.log from your build?
<br>
<p>Thanks,
<br>
Tim
<br>
<p>Daryl W. Grunau wrote:
<br>
<span class="quotelev1">&gt; Hi, I've got a dual-homed IB + GigE connected cluster for which I've built
</span><br>
<span class="quotelev1">&gt; a very recent drop of OpenMPI (w/ mvapi support).  I'm having difficulty
</span><br>
<span class="quotelev1">&gt; making OMPI solely use native verbs as it's communication between nodes.
</span><br>
<span class="quotelev1">&gt; I've tried all incantations of the following mca parameters to no avail:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    --mca btl_tcp_if_exclude &quot;lo,eth0,eth1,ib0,ib1&quot;
</span><br>
<span class="quotelev1">&gt;    --mca ptl_tcp_if_include &quot;lo,eth0,eth1,ib0,ib1&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note I'm putting ib in the list because I really don't wish to use IP/IB;
</span><br>
<span class="quotelev1">&gt; OMPI should be able to communicate at the native verbs level, right?  If I
</span><br>
<span class="quotelev1">&gt; leave ib0/1 unconfigured on my host, OMPI uses eth0 for its communication.
</span><br>
<span class="quotelev1">&gt; If I bring up ib0, OMPI uses both eth0 and ib0!  Is there any way I can
</span><br>
<span class="quotelev1">&gt; specify for it to use none of these TCP interfaces?  TIA!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Daryl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.s.  I can send output of ompi_info if that is helpful.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0157.php">Borenstein, Bernard S: "[O-MPI users] problem running on a myrinet linux cluster"</a>
<li><strong>Previous message:</strong> <a href="0155.php">Daryl W. Grunau: "[O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at runtime?"</a>
<li><strong>In reply to:</strong> <a href="0155.php">Daryl W. Grunau: "[O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at runtime?"</a>
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
