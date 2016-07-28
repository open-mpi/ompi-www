<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 21 08:24:46 2005" -->
<!-- isoreceived="20050921132446" -->
<!-- sent="Wed, 21 Sep 2005 07:24:42 -0600" -->
<!-- isosent="20050921132442" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re:  Fwd: [O-MPI users] HOWTO turn of &amp;quot;multi-rail&amp;quot; support at runtime?" -->
<!-- id="43315F1A.3080606_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="69E78FC9-8BA9-498B-A3A0-F98F976E8BF4_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-09-21 08:24:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0387.php">Tim S. Woodall: "Re:  Registration Cache changes"</a>
<li><strong>Previous message:</strong> <a href="0385.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<li><strong>In reply to:</strong> <a href="0384.php">Brian Barrett: "Fwd: [O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at runtime?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thats correct. Not sure why TCP would have been used - unless IB
<br>
interfaces weren't up..
<br>
<p><p>Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; Tim -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to make sure I&quot;m not losing it - if any of the &quot;high speed&quot;  
</span><br>
<span class="quotelev1">&gt; networks is found between peers, tcp shouldn't be used between that  
</span><br>
<span class="quotelev1">&gt; pair, right?  I was pretty sure that's what the priority code did  
</span><br>
<span class="quotelev1">&gt; now, but wanted to make sure I wasn't losing it ;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;From: &quot;Tim S. Woodall&quot; &lt;twoodall_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Date: September 20, 2005 7:51:42 PM GMT+02:00
</span><br>
<span class="quotelev2">&gt;&gt;To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Subject: Re: [O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at  
</span><br>
<span class="quotelev2">&gt;&gt;runtime?
</span><br>
<span class="quotelev2">&gt;&gt;Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Daryl,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Try setting:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-mca btl_base_include self,mvapi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;To specify that only lookback (self) and mvapi btls should be used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Can you forward me the config.log from your build?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;Tim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Daryl W. Grunau wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Hi, I've got a dual-homed IB + GigE connected cluster for which  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;I've built
</span><br>
<span class="quotelev3">&gt;&gt;&gt;a very recent drop of OpenMPI (w/ mvapi support).  I'm having  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;difficulty
</span><br>
<span class="quotelev3">&gt;&gt;&gt;making OMPI solely use native verbs as it's communication between  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;I've tried all incantations of the following mca parameters to no  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;avail:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --mca btl_tcp_if_exclude &quot;lo,eth0,eth1,ib0,ib1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --mca ptl_tcp_if_include &quot;lo,eth0,eth1,ib0,ib1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Note I'm putting ib in the list because I really don't wish to use  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;IP/IB;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;OMPI should be able to communicate at the native verbs level,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;right?  If I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;leave ib0/1 unconfigured on my host, OMPI uses eth0 for its  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;communication.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;If I bring up ib0, OMPI uses both eth0 and ib0!  Is there any way  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;I can
</span><br>
<span class="quotelev3">&gt;&gt;&gt;specify for it to use none of these TCP interfaces?  TIA!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Daryl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;P.s.  I can send output of ompi_info if that is helpful.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0387.php">Tim S. Woodall: "Re:  Registration Cache changes"</a>
<li><strong>Previous message:</strong> <a href="0385.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<li><strong>In reply to:</strong> <a href="0384.php">Brian Barrett: "Fwd: [O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at runtime?"</a>
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
