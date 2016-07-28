<?
$subject_val = "Re: [OMPI devel] openib btl_openib_async_thread poll question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 21 11:11:24 2010" -->
<!-- isoreceived="20101221161124" -->
<!-- sent="Tue, 21 Dec 2010 11:11:50 -0500" -->
<!-- isosent="20101221161150" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl_openib_async_thread poll question" -->
<!-- id="4D10D1C6.7010904_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D10C927.1000607_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib btl_openib_async_thread poll question<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-21 11:11:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8812.php">Barrett, Brian W: "[OMPI devel] Datatype question"</a>
<li><strong>Previous message:</strong> <a href="8810.php">Ralph Castain: "Re: [OMPI devel] Connect/Accept and Disconnect"</a>
<li><strong>In reply to:</strong> <a href="8809.php">Terry Dontje: "[OMPI devel] openib btl_openib_async_thread poll question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8814.php">Shamis, Pavel: "Re: [OMPI devel] openib btl_openib_async_thread poll question"</a>
<li><strong>Reply:</strong> <a href="8814.php">Shamis, Pavel: "Re: [OMPI devel] openib btl_openib_async_thread poll question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After further inspection I saw that events is being set to POLLIN only.  
<br>
Is that suppose to mask out any other bits from being set (like 
<br>
POLLRDNORM)?
<br>
<p>--td
<br>
On 12/21/2010 10:35 AM, Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; We're doing some testing with openib btl on a system with Solaris.  It 
</span><br>
<span class="quotelev1">&gt; looks like Solaris can return POLLIN|POLLRDNORM in revents from a poll 
</span><br>
<span class="quotelev1">&gt; call.  I looked at the manpages for Linux and it reads like Linux 
</span><br>
<span class="quotelev1">&gt; could possibly do this too.  However the code in 
</span><br>
<span class="quotelev1">&gt; btl_openib_async_thread that checks for valid revents is only checking 
</span><br>
<span class="quotelev1">&gt; for POLLIN and in the case it gets POLLIN|POLLRDNORM the btl ends up 
</span><br>
<span class="quotelev1">&gt; throwing an error.  I think erroring out on the POLLIN|POLLRDNORM case 
</span><br>
<span class="quotelev1">&gt; is a bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone feel otherwise and can explain to me why we should not 
</span><br>
<span class="quotelev1">&gt; consider POLLIN|POLLRDNORM as a valid condition?  I have the same 
</span><br>
<span class="quotelev1">&gt; question pertaining to POLLRDBAND too but I don't believe we've seen 
</span><br>
<span class="quotelev1">&gt; this set.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Oracle
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle *- Performance Technologies*
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8811/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-8811/02-part" alt="picture">
<!-- attachment="02-part" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-8811/03-part" alt="picture">
<!-- attachment="03-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8812.php">Barrett, Brian W: "[OMPI devel] Datatype question"</a>
<li><strong>Previous message:</strong> <a href="8810.php">Ralph Castain: "Re: [OMPI devel] Connect/Accept and Disconnect"</a>
<li><strong>In reply to:</strong> <a href="8809.php">Terry Dontje: "[OMPI devel] openib btl_openib_async_thread poll question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8814.php">Shamis, Pavel: "Re: [OMPI devel] openib btl_openib_async_thread poll question"</a>
<li><strong>Reply:</strong> <a href="8814.php">Shamis, Pavel: "Re: [OMPI devel] openib btl_openib_async_thread poll question"</a>
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
