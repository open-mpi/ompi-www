<?
$subject_val = "Re: [OMPI devel] SM backing file size";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 14:03:29 2008" -->
<!-- isoreceived="20081112190329" -->
<!-- sent="Wed, 12 Nov 2008 12:03:01 -0700" -->
<!-- isosent="20081112190301" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM backing file size" -->
<!-- id="40D5B7FE-7D7F-4E1A-9502-D6808C823BE3_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="491B275C.7030406_at_penguincomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM backing file size<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-12 14:03:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4885.php">Leonardo Fialho: "Re: [OMPI devel] Modex and others"</a>
<li><strong>Previous message:</strong> <a href="4883.php">Pak Lui: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>In reply to:</strong> <a href="4883.php">Pak Lui: "Re: [OMPI devel] SM backing file size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4892.php">Eugene Loh: "Re: [OMPI devel] SM backing file size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks - Brad also responded off-list. Problem was that our /tmp file  
<br>
constraint was quite a bit smaller.
<br>
<p><p>On Nov 12, 2008, at 11:58 AM, Pak Lui wrote:
<br>
<p><span class="quotelev1">&gt; Ralph, is it not the mpool_sm_max_size? 512MB seems to be the  
</span><br>
<span class="quotelev1">&gt; default max size per node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; devel-request_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Message: 1
</span><br>
<span class="quotelev2">&gt;&gt; Date: Wed, 12 Nov 2008 07:21:38 -0700
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI devel] SM backing file size
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;A19CEFFE-C532-4B2E-999E-0815F579340C_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev2">&gt;&gt; Yo folks
</span><br>
<span class="quotelev2">&gt;&gt; As has frequently been commented upon at one time or another, the   
</span><br>
<span class="quotelev2">&gt;&gt; shared memory backing file can be quite huge. There used to be a  
</span><br>
<span class="quotelev2">&gt;&gt; param  for controlling this size, but I can't find it in 1.3 - or  
</span><br>
<span class="quotelev2">&gt;&gt; at least,  the name or method for controlling file size has morphed  
</span><br>
<span class="quotelev2">&gt;&gt; into  something I don't recognize.
</span><br>
<span class="quotelev2">&gt;&gt; Can someone more familiar with that subsystem point me to one or  
</span><br>
<span class="quotelev2">&gt;&gt; more  params that will allow us to control the size of that file?  
</span><br>
<span class="quotelev2">&gt;&gt; It is  swamping our systems and causing OMPI to segfault.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Pak Lui
</span><br>
<span class="quotelev1">&gt; plui_at_[hidden]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4885.php">Leonardo Fialho: "Re: [OMPI devel] Modex and others"</a>
<li><strong>Previous message:</strong> <a href="4883.php">Pak Lui: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>In reply to:</strong> <a href="4883.php">Pak Lui: "Re: [OMPI devel] SM backing file size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4892.php">Eugene Loh: "Re: [OMPI devel] SM backing file size"</a>
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
