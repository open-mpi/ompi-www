<?
$subject_val = "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its	IP is 127.0.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 20 10:27:28 2013" -->
<!-- isoreceived="20130620142728" -->
<!-- sent="Thu, 20 Jun 2013 14:27:19 +0000" -->
<!-- isosent="20130620142719" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its	IP is 127.0.1.1" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F693B75_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BLU0-SMTP189A3A2EE6216FFCE80E71CCB8E0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its	IP is 127.0.1.1<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-20 10:27:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22162.php">Lorenzo Donà: "[OMPI users] error running with mpirun"</a>
<li><strong>Previous message:</strong> <a href="22160.php">Lorenzo Don&#224;: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>In reply to:</strong> <a href="22160.php">Lorenzo Don&#224;: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22141.php">Reuti: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Er... are you having problems with host IP addresses 127.0.1.1, or did you reply to the wrong thread?  
<br>
<p>I thought you were asking about problems with multiple mpf90's in your PATH, etc. -- not 127.0.1.1 IP address issues.  IIRC, there were a bunch of suggestions over on that thread about how to fix your problem.  If those were not helpful to you, it might be easier to find a local Linux/OS X/shell guru and get them to help you setup your PATH / LD_LIBRARY_PATH correctly, and give you a quick tutorial on shell basics.
<br>
<p><p>On Jun 20, 2013, at 10:04 AM, Lorenzo Don&#224; &lt;lorechimica91_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all that help me thanks to everyone.
</span><br>
<span class="quotelev1">&gt; I compiled open MPI with all yours advices posted but the error is always the same I'm also able to run the examples found with the package.
</span><br>
<span class="quotelev1">&gt; but really I don't know what can I do to solve the problem.
</span><br>
<span class="quotelev1">&gt; I trust in you to help me.
</span><br>
<span class="quotelev1">&gt; Dearly Lorenzo.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Il giorno 20/giu/2013, alle ore 06.33, Ralph Castain ha scritto:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Been trying to decipher this problem, and think maybe I'm beginning to understand it. Just to clarify:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * when you execute &quot;hostname&quot;, you get the &lt;name&gt;.local response?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * you somewhere have it setup so that 10.x.x.x resolves to &lt;name&gt;, with no &quot;.local&quot; extension?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Correct?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jun 19, 2013 at 1:17 PM, Riccardo Murri &lt;riccardo.murri_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 19 June 2013 20:42, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'm assuming that the offending host has some other address besides
</span><br>
<span class="quotelev3">&gt;&gt; &gt; just 127.0.1.1 as otherwise it couldn't connect to anything.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, it has an IP on some 10.x.x.x network.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'm heading out the door for a couple of weeks, but can try to look at it when I return.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have a workaround (just create the hostfile using FQDNs -- actually
</span><br>
<span class="quotelev2">&gt;&gt; FQDNs or UQDNS depending on what `uname -n` returns), so it's
</span><br>
<span class="quotelev2">&gt;&gt; definitely not urgent for us.  But if you think it's a bug worth
</span><br>
<span class="quotelev2">&gt;&gt; fixing, I can provide details and/or test code.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Riccardo
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22162.php">Lorenzo Donà: "[OMPI users] error running with mpirun"</a>
<li><strong>Previous message:</strong> <a href="22160.php">Lorenzo Don&#224;: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>In reply to:</strong> <a href="22160.php">Lorenzo Don&#224;: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22141.php">Reuti: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
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
