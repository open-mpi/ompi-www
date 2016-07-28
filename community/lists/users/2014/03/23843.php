<?
$subject_val = "Re: [OMPI users] Question about '--mca btl tcp,self'";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 14 10:11:58 2014" -->
<!-- isoreceived="20140314141158" -->
<!-- sent="Fri, 14 Mar 2014 07:11:04 -0700" -->
<!-- isosent="20140314141104" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about '--mca btl tcp,self'" -->
<!-- id="FFA159D4-C2C0-4F42-9B65-1AB74064F7FE_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BAY174-W1663322B5EAF28976D52F88A700_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about '--mca btl tcp,self'<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-14 10:11:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23844.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Previous message:</strong> <a href="23842.php">Jianyu Liu: "[OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>In reply to:</strong> <a href="23842.php">Jianyu Liu: "[OMPI users] Question about '--mca btl tcp,self'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23844.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Reply:</strong> <a href="23844.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 14, 2014, at 6:50 AM, Jianyu Liu &lt;jerry_leo_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Sir/Madam,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 1. If specified '--mca btl tcp,self',   which interface application will run on,  use GigE adaper OR use the OpenFabrics interface in IP over IB mode (just like a high performance GigE adapter) ?
</span><br>
<p>Both - ip over ib looks just like an Ethernet adaptor
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 2. If  '--mca btl tcp,self'  forced application to use GigE adapter, how to force application to use OpenFabrics interface in IP over IB mode 
</span><br>
<p>--mca btl_tcp_if_include &lt;ipoib-adaptor&gt;
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. Does app run slower in IP over IB mode than RDMA mode?
</span><br>
<p>of course - IPoIB invokes the entire TCP software stack
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Appreciating your kindly help
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Jianyu
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23843/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23844.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Previous message:</strong> <a href="23842.php">Jianyu Liu: "[OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>In reply to:</strong> <a href="23842.php">Jianyu Liu: "[OMPI users] Question about '--mca btl tcp,self'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23844.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Reply:</strong> <a href="23844.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
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
