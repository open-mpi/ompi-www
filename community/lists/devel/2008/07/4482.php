<?
$subject_val = "Re: [OMPI devel] trunk hangs since r19010";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 09:31:51 2008" -->
<!-- isoreceived="20080729133151" -->
<!-- sent="Tue, 29 Jul 2008 15:31:28 +0200" -->
<!-- isosent="20080729133128" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk hangs since r19010" -->
<!-- id="AE9E9698-7DAC-4FF9-B97E-8D1039CF1F50_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="488EBE1E.4010107_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-29 09:31:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4483.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Previous message:</strong> <a href="4481.php">Jeff Squyres: "Re: [OMPI devel] Change in hostfile behavior"</a>
<li><strong>In reply to:</strong> <a href="4479.php">Pavel Shamis (Pasha): "Re: [OMPI devel] trunk hangs since r19010"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4483.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Reply:</strong> <a href="4483.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I ran few tests and the only combination leading to a deadlock is  
<br>
openib and self. As openib is the only BTL supporting self  
<br>
communications (except self of course), I guess it interfere with self  
<br>
in some more or less strange ways. I didn't had the time to dig deeper  
<br>
yet to see what exactly happens there, I'll schedule this later today.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 29, 2008, at 8:52 AM, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This used to be true, but I think we changed it a while ago (Pasha:  
</span><br>
<span class="quotelev2">&gt;&gt; do you remember?) because Mellanox HCAs are capable of send-to-self  
</span><br>
<span class="quotelev2">&gt;&gt; (process) and there were no code changes necessary to enable it.   
</span><br>
<span class="quotelev2">&gt;&gt; So it allowed a slightly simpler command line.  This was quite a  
</span><br>
<span class="quotelev2">&gt;&gt; while ago, IIRC.
</span><br>
<span class="quotelev1">&gt; Yep, Correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FYI. In my MTT testing I also see a lot of killed tests.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4482/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4483.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Previous message:</strong> <a href="4481.php">Jeff Squyres: "Re: [OMPI devel] Change in hostfile behavior"</a>
<li><strong>In reply to:</strong> <a href="4479.php">Pavel Shamis (Pasha): "Re: [OMPI devel] trunk hangs since r19010"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4483.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Reply:</strong> <a href="4483.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
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
