<?
$subject_val = "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 14 18:34:50 2011" -->
<!-- isoreceived="20110214233450" -->
<!-- sent="Mon, 14 Feb 2011 15:34:39 -0800" -->
<!-- isosent="20110214233439" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)" -->
<!-- id="C97EFACC.E59E%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="249B095A-259A-45A6-9E45-E826BDF54968_at_cisco.com" -->
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
<strong>From:</strong> Tena Sakai (<em>tsakai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-14 18:34:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15612.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15610.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15596.php">Jeff Squyres: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15607.php">Gus Correa: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Many thanks for your reply / post.
<br>
<p><span class="quotelev1">&gt; This is most telling to me (that you have a custom-built Linux)
</span><br>
I want to be clear that what I have is custom-built ami (Amazon
<br>
machine image), which is based on (run of the mill) centos 5.5.
<br>
<p><span class="quotelev1">&gt; - pointer is invalid (which is not the case here)
</span><br>
<span class="quotelev1">&gt; - process' file descriptor table is full
</span><br>
<span class="quotelev1">&gt; - kernel's file descriptor table is full
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It would be quite surprising to run into either of the last 2 cases in a stock
</span><br>
<span class="quotelev1">&gt; Linux kernel build.
</span><br>
<p>Point well taken.  I will re-verify that I don't have a permission
<br>
problem.
<br>
<p><span class="quotelev1">&gt; One further thought -- ensure that SELinux is disabled (all the extra security
</span><br>
<span class="quotelev1">&gt; stuff).  I'm guessing that Open MPI *can* run with SELinux if SELinux is
</span><br>
<span class="quotelev1">&gt; configured in a specific way, but I have no direct experience with that.
</span><br>
<p>I just checked and my ami does not have /etc/selinux/config file.  I will
<br>
update the ami, relaunch and will report back.
<br>
<p>Regards,
<br>
<p>Tena
<br>
<p><p>On 2/14/11 6:16 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 13, 2011, at 2:37 PM, Tena Sakai wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, here is an idea I came up in my sleep that I want to check
</span><br>
<span class="quotelev2">&gt;&gt; out.  The ami I have been using is a centos 5.5, which I have built
</span><br>
<span class="quotelev2">&gt;&gt; from ground up.  EC2 has something called Amazon Linux ami.  I
</span><br>
<span class="quotelev2">&gt;&gt; don't know what distribution that is and I am sure it doesn't have
</span><br>
<span class="quotelev2">&gt;&gt; R, nor openmpi.  But I thought I would load these components I
</span><br>
<span class="quotelev2">&gt;&gt; need to the Amazon Linux (again as you suggest by starting the
</span><br>
<span class="quotelev2">&gt;&gt; simplest case) and see if I can reproduce the behavior I have
</span><br>
<span class="quotelev2">&gt;&gt; been experiencing on different (and Amazon &quot;official&quot; ami).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is most telling to me (that you have a custom-built Linux).  Now that I'm
</span><br>
<span class="quotelev1">&gt; back at a proper keyboard, I checked why pipe(2) would fail, and it only has 3
</span><br>
<span class="quotelev1">&gt; reasons in both Linux and OS X:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - pointer is invalid (which is not the case here)
</span><br>
<span class="quotelev1">&gt; - process' file descriptor table is full
</span><br>
<span class="quotelev1">&gt; - kernel's file descriptor table is full
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It would be quite surprising to run into either of the last 2 cases in a stock
</span><br>
<span class="quotelev1">&gt; Linux kernel build.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One further thought -- ensure that SELinux is disabled (all the extra security
</span><br>
<span class="quotelev1">&gt; stuff).  I'm guessing that Open MPI *can* run with SELinux if SELinux is
</span><br>
<span class="quotelev1">&gt; configured in a specific way, but I have no direct experience with that.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15612.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>Previous message:</strong> <a href="15610.php">Tena Sakai: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15596.php">Jeff Squyres: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15607.php">Gus Correa: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
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
