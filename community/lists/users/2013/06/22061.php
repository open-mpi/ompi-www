<?
$subject_val = "Re: [OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  7 09:06:47 2013" -->
<!-- isoreceived="20130607130647" -->
<!-- sent="Fri, 7 Jun 2013 06:06:36 -0700" -->
<!-- isosent="20130607130636" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&amp;quot; errors during mpirun" -->
<!-- id="E0168FA7-6EA2-4944-BA4D-A1AAE71FF9A7_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CANxn1WUK9ZBLaNt083pvdF6T_HN4UeCxwyKfoVT-fBhYM5Njyg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-07 09:06:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22062.php">Shamis, Pavel: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<li><strong>Previous message:</strong> <a href="22060.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sandy Bridge performance question"</a>
<li><strong>In reply to:</strong> <a href="22056.php">vacate: "Re: [OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 6, 2013, at 10:33 PM, vacate &lt;vacatehoping_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello Castain,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your reply!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, the thing I'm doing now is that I want to see how many OpenMPI jobs can be handled in one computer at the same ...
</span><br>
<p>That is a simple question to answer. If you don't care about performance, the number is limited solely by the OS limit on the number of open file descriptors you are allowed to have.
<br>
<p><a href="http://www.open-mpi.org/faq/?category=large-clusters#fd-limits">http://www.open-mpi.org/faq/?category=large-clusters#fd-limits</a>
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I'm trying to figure out the reason of the problem that I meet now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that it's not the limit of OpenMPI, and the real reason is my computer can't handle a huge amount of connection in a short time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is that right?
</span><br>
<p>Running it the way you are, yes - you're simply overwhelming the ssh system.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much again!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt; Jen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jun 6, 2013 at 5:24 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; It has nothing to do with OMPI - this is an ssh issue. I suspect you are simply overwhelming the connection system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe you could tell us what you are actually trying to accomplish - running thousands of mpiruns in parallel seems a tad extreme.
</span><br>
<span class="quotelev1">&gt; 
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22061/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22062.php">Shamis, Pavel: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<li><strong>Previous message:</strong> <a href="22060.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sandy Bridge performance question"</a>
<li><strong>In reply to:</strong> <a href="22056.php">vacate: "Re: [OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun"</a>
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
