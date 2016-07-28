<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 21 01:37:08 2005" -->
<!-- isoreceived="20050921063708" -->
<!-- sent="Wed, 21 Sep 2005 08:37:00 +0200" -->
<!-- isosent="20050921063700" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Fwd: [O-MPI users] HOWTO turn of &amp;quot;multi-rail&amp;quot; support at runtime?" -->
<!-- id="69E78FC9-8BA9-498B-A3A0-F98F976E8BF4_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43304C2E.3090702_at_lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-21 01:37:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0385.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<li><strong>Previous message:</strong> <a href="0383.php">David Daniel: "totalview"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0386.php">Tim S. Woodall: "Re:  Fwd: [O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at runtime?"</a>
<li><strong>Reply:</strong> <a href="0386.php">Tim S. Woodall: "Re:  Fwd: [O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at runtime?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim -
<br>
<p>Just to make sure I&quot;m not losing it - if any of the &quot;high speed&quot;  
<br>
networks is found between peers, tcp shouldn't be used between that  
<br>
pair, right?  I was pretty sure that's what the priority code did  
<br>
now, but wanted to make sure I wasn't losing it ;).
<br>
<p>Brian
<br>
<p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: &quot;Tim S. Woodall&quot; &lt;twoodall_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: September 20, 2005 7:51:42 PM GMT+02:00
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at  
</span><br>
<span class="quotelev1">&gt; runtime?
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Daryl,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try setting:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca btl_base_include self,mvapi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To specify that only lookback (self) and mvapi btls should be used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you forward me the config.log from your build?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Daryl W. Grunau wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi, I've got a dual-homed IB + GigE connected cluster for which  
</span><br>
<span class="quotelev2">&gt;&gt; I've built
</span><br>
<span class="quotelev2">&gt;&gt; a very recent drop of OpenMPI (w/ mvapi support).  I'm having  
</span><br>
<span class="quotelev2">&gt;&gt; difficulty
</span><br>
<span class="quotelev2">&gt;&gt; making OMPI solely use native verbs as it's communication between  
</span><br>
<span class="quotelev2">&gt;&gt; nodes.
</span><br>
<span class="quotelev2">&gt;&gt; I've tried all incantations of the following mca parameters to no  
</span><br>
<span class="quotelev2">&gt;&gt; avail:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    --mca btl_tcp_if_exclude &quot;lo,eth0,eth1,ib0,ib1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    --mca ptl_tcp_if_include &quot;lo,eth0,eth1,ib0,ib1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note I'm putting ib in the list because I really don't wish to use  
</span><br>
<span class="quotelev2">&gt;&gt; IP/IB;
</span><br>
<span class="quotelev2">&gt;&gt; OMPI should be able to communicate at the native verbs level,  
</span><br>
<span class="quotelev2">&gt;&gt; right?  If I
</span><br>
<span class="quotelev2">&gt;&gt; leave ib0/1 unconfigured on my host, OMPI uses eth0 for its  
</span><br>
<span class="quotelev2">&gt;&gt; communication.
</span><br>
<span class="quotelev2">&gt;&gt; If I bring up ib0, OMPI uses both eth0 and ib0!  Is there any way  
</span><br>
<span class="quotelev2">&gt;&gt; I can
</span><br>
<span class="quotelev2">&gt;&gt; specify for it to use none of these TCP interfaces?  TIA!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Daryl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; P.s.  I can send output of ompi_info if that is helpful.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="0385.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<li><strong>Previous message:</strong> <a href="0383.php">David Daniel: "totalview"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0386.php">Tim S. Woodall: "Re:  Fwd: [O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at runtime?"</a>
<li><strong>Reply:</strong> <a href="0386.php">Tim S. Woodall: "Re:  Fwd: [O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at runtime?"</a>
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
