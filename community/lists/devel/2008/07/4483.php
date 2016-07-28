<?
$subject_val = "Re: [OMPI devel] trunk hangs since r19010";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 09:47:27 2008" -->
<!-- isoreceived="20080729134727" -->
<!-- sent="Tue, 29 Jul 2008 09:47:21 -0400" -->
<!-- isosent="20080729134721" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk hangs since r19010" -->
<!-- id="1E72A295-812F-456E-8DAD-7F9250F6BCBA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AE9E9698-7DAC-4FF9-B97E-8D1039CF1F50_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk hangs since r19010<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-29 09:47:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4484.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Previous message:</strong> <a href="4482.php">George Bosilca: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>In reply to:</strong> <a href="4482.php">George Bosilca: "Re: [OMPI devel] trunk hangs since r19010"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4484.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Reply:</strong> <a href="4484.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok.  FWIW, Pasha and I think that openib has supported &quot;send-to-self&quot;  
<br>
for a while (we don't know exactly when; but Pasha thinks it is very  
<br>
old code that we don't check for self in add_procs).  But it only  
<br>
broke recently.
<br>
<p><p>On Jul 29, 2008, at 9:31 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I ran few tests and the only combination leading to a deadlock is  
</span><br>
<span class="quotelev1">&gt; openib and self. As openib is the only BTL supporting self  
</span><br>
<span class="quotelev1">&gt; communications (except self of course), I guess it interfere with  
</span><br>
<span class="quotelev1">&gt; self in some more or less strange ways. I didn't had the time to dig  
</span><br>
<span class="quotelev1">&gt; deeper yet to see what exactly happens there, I'll schedule this  
</span><br>
<span class="quotelev1">&gt; later today.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 29, 2008, at 8:52 AM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This used to be true, but I think we changed it a while ago  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Pasha: do you remember?) because Mellanox HCAs are capable of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; send-to-self (process) and there were no code changes necessary to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable it.  So it allowed a slightly simpler command line.  This  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was quite a while ago, IIRC.
</span><br>
<span class="quotelev2">&gt;&gt; Yep, Correct.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FYI. In my MTT testing I also see a lot of killed tests.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4484.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Previous message:</strong> <a href="4482.php">George Bosilca: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>In reply to:</strong> <a href="4482.php">George Bosilca: "Re: [OMPI devel] trunk hangs since r19010"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4484.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Reply:</strong> <a href="4484.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
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
