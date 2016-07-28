<?
$subject_val = "Re: [OMPI users] openmpi over tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 29 15:32:40 2009" -->
<!-- isoreceived="20090129203240" -->
<!-- sent="Thu, 29 Jan 2009 15:32:40 -0500" -->
<!-- isosent="20090129203240" -->
<!-- name="Joe Landman" -->
<!-- email="landman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi over tcp" -->
<!-- id="49821268.9060706_at_scalableinformatics.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20090129201847.GA27890_at_yakko.bartol.udel.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi over tcp<br>
<strong>From:</strong> Joe Landman (<em>landman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-29 15:32:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7886.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Previous message:</strong> <a href="7884.php">Brock Palen: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>In reply to:</strong> <a href="7883.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7887.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Reply:</strong> <a href="7887.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Daniel De Marco wrote:
<br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Ralph Castain &lt;rhc_at_[hidden]&gt; [01/29/2009 14:27]:
</span><br>
<span class="quotelev2">&gt;&gt; It is quite likely that you have IPoIB on your system. In that case, the 
</span><br>
<span class="quotelev2">&gt;&gt; TCP BTL will pickup that interface and use it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you have a specific interface you want to use, try -mca 
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_if_include eth0 (or whatever that interface is). This tell the TCP 
</span><br>
<span class="quotelev2">&gt;&gt; BTL to only use the specified interface, so it will either fail (if that 
</span><br>
<span class="quotelev2">&gt;&gt; interface isn't available or doesn't exist) or use only that one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; no, I don't have IPoIB configured. I tried anyway your suggestion and I
</span><br>
<p>If you do an
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ifconfig ib0
<br>
<p>what does it respond with?
<br>
<p><span class="quotelev1">&gt; got the same results as before. The weird thing is that even if use
</span><br>
<span class="quotelev1">&gt; 	-mca btl_tcp_if_include eth2
</span><br>
<span class="quotelev1">&gt; where eth2 doesn't exist I get the same results...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, Daniel.
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
Joseph Landman, Ph.D
Founder and CEO
Scalable Informatics LLC,
email: landman_at_[hidden]
web  : <a href="http://www.scalableinformatics.com">http://www.scalableinformatics.com</a>
        <a href="http://jackrabbit.scalableinformatics.com">http://jackrabbit.scalableinformatics.com</a>
phone: +1 734 786 8423 x121
fax  : +1 866 888 3112
cell : +1 734 612 4615
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7886.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Previous message:</strong> <a href="7884.php">Brock Palen: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>In reply to:</strong> <a href="7883.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7887.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Reply:</strong> <a href="7887.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
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
