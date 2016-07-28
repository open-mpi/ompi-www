<?
$subject_val = "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 20 10:04:45 2013" -->
<!-- isoreceived="20130620140445" -->
<!-- sent="Thu, 20 Jun 2013 16:04:35 +0200" -->
<!-- isosent="20130620140435" -->
<!-- name="Lorenzo Don&#224;" -->
<!-- email="lorechimica91_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1" -->
<!-- id="BLU0-SMTP189A3A2EE6216FFCE80E71CCB8E0_at_phx.gbl" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57oc_GL1YPstU_64mYCOH4r8vLYUAQN749qr2MGs9HpK-sA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1<br>
<strong>From:</strong> Lorenzo Don&#224; (<em>lorechimica91_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-20 10:04:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22161.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its	IP is 127.0.1.1"</a>
<li><strong>Previous message:</strong> <a href="22159.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>In reply to:</strong> <a href="22157.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22161.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its	IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22161.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its	IP is 127.0.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all that help me thanks to everyone.
<br>
I compiled open MPI with all yours advices posted but the error is always the same I'm also able to run the examples found with the package.
<br>
but really I don't know what can I do to solve the problem.
<br>
I trust in you to help me.
<br>
Dearly Lorenzo.
<br>
&nbsp;
<br>
Il giorno 20/giu/2013, alle ore 06.33, Ralph Castain ha scritto:
<br>
<p><span class="quotelev1">&gt; Been trying to decipher this problem, and think maybe I'm beginning to understand it. Just to clarify:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * when you execute &quot;hostname&quot;, you get the &lt;name&gt;.local response?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * you somewhere have it setup so that 10.x.x.x resolves to &lt;name&gt;, with no &quot;.local&quot; extension?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Correct?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 19, 2013 at 1:17 PM, Riccardo Murri &lt;riccardo.murri_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On 19 June 2013 20:42, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I'm assuming that the offending host has some other address besides
</span><br>
<span class="quotelev2">&gt; &gt; just 127.0.1.1 as otherwise it couldn't connect to anything.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, it has an IP on some 10.x.x.x network.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm heading out the door for a couple of weeks, but can try to look at it when I return.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have a workaround (just create the hostfile using FQDNs -- actually
</span><br>
<span class="quotelev1">&gt; FQDNs or UQDNS depending on what `uname -n` returns), so it's
</span><br>
<span class="quotelev1">&gt; definitely not urgent for us.  But if you think it's a bug worth
</span><br>
<span class="quotelev1">&gt; fixing, I can provide details and/or test code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Riccardo
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22160/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22161.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its	IP is 127.0.1.1"</a>
<li><strong>Previous message:</strong> <a href="22159.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>In reply to:</strong> <a href="22157.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22161.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its	IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22161.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its	IP is 127.0.1.1"</a>
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
