<?
$subject_val = "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 14 09:17:03 2011" -->
<!-- isoreceived="20110214141703" -->
<!-- sent="Mon, 14 Feb 2011 09:16:58 -0500" -->
<!-- isosent="20110214141658" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)" -->
<!-- id="249B095A-259A-45A6-9E45-E826BDF54968_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C97D71BA.E534%tsakai_at_gallo.ucsf.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-14 09:16:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15597.php">Jeff Squyres: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15595.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="15589.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15611.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Reply:</strong> <a href="15611.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 13, 2011, at 2:37 PM, Tena Sakai wrote:
<br>
<p><span class="quotelev1">&gt; Also, here is an idea I came up in my sleep that I want to check
</span><br>
<span class="quotelev1">&gt; out.  The ami I have been using is a centos 5.5, which I have built
</span><br>
<span class="quotelev1">&gt; from ground up.  EC2 has something called Amazon Linux ami.  I
</span><br>
<span class="quotelev1">&gt; don't know what distribution that is and I am sure it doesn't have
</span><br>
<span class="quotelev1">&gt; R, nor openmpi.  But I thought I would load these components I
</span><br>
<span class="quotelev1">&gt; need to the Amazon Linux (again as you suggest by starting the
</span><br>
<span class="quotelev1">&gt; simplest case) and see if I can reproduce the behavior I have
</span><br>
<span class="quotelev1">&gt; been experiencing on different (and Amazon &quot;official&quot; ami).
</span><br>
<p>This is most telling to me (that you have a custom-built Linux).  Now that I'm back at a proper keyboard, I checked why pipe(2) would fail, and it only has 3 reasons in both Linux and OS X:
<br>
<p>- pointer is invalid (which is not the case here)
<br>
- process' file descriptor table is full
<br>
- kernel's file descriptor table is full
<br>
<p>It would be quite surprising to run into either of the last 2 cases in a stock Linux kernel build.
<br>
<p>One further thought -- ensure that SELinux is disabled (all the extra security stuff).  I'm guessing that Open MPI *can* run with SELinux if SELinux is configured in a specific way, but I have no direct experience with that.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15597.php">Jeff Squyres: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15595.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="15589.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15611.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Reply:</strong> <a href="15611.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
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
