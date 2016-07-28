<?
$subject_val = "Re: [OMPI devel] openib btl_openib_async_thread poll question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 21 19:11:22 2010" -->
<!-- isoreceived="20101222001122" -->
<!-- sent="Tue, 21 Dec 2010 19:11:17 -0500" -->
<!-- isosent="20101222001117" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl_openib_async_thread poll question" -->
<!-- id="35517172-4699-4409-B106-F6BFDC30F775_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D10D1C6.7010904_at_oracle.com" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-21 19:11:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8815.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (16)"</a>
<li><strong>Previous message:</strong> <a href="8813.php">George Bosilca: "Re: [OMPI devel] Datatype question"</a>
<li><strong>In reply to:</strong> <a href="8811.php">Terry Dontje: "Re: [OMPI devel] openib btl_openib_async_thread poll question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
According to man pages, only POLLIN or Errors maybe returned in the specific case:
<br>
<p>The bits returned in revents can include any of those specified in events, or one of the values POLLERR, POLLHUP, or POLLNVAL.  (These three bits are meaningless
<br>
&nbsp;in the events field, and will be set in the revents field whenever the corresponding condition is true.)
<br>
<p>Since POLLRDNORM was not specified in the even mask, it is &quot;unexpected&quot; event that handled as error.
<br>
<p><p>Regards,
<br>
Pasha
<br>
<p>On Dec 21, 2010, at 11:11 AM, Terry Dontje wrote:
<br>
<p>After further inspection I saw that events is being set to POLLIN only.  Is that suppose to mask out any other bits from being set (like POLLRDNORM)?
<br>
<p>--td
<br>
On 12/21/2010 10:35 AM, Terry Dontje wrote:
<br>
We're doing some testing with openib btl on a system with Solaris.  It looks like Solaris can return POLLIN|POLLRDNORM in revents from a poll call.  I looked at the manpages for Linux and it reads like Linux could possibly do this too.  However the code in btl_openib_async_thread that checks for valid revents is only checking for POLLIN and in the case it gets POLLIN|POLLRDNORM the btl ends up throwing an error.  I think erroring out on the POLLIN|POLLRDNORM case is a bug.
<br>
<p>Does anyone feel otherwise and can explain to me why we should not consider POLLIN|POLLRDNORM as a valid condition?  I have the same question pertaining to POLLRDBAND too but I don't believe we've seen this set.
<br>
<p>thanks,
<br>
<pre>
--
&lt;ATT00001.gif&gt;
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle - Performance Technologies
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden]&lt;mailto:terry.dontje_at_[hidden]&gt;
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
--
&lt;ATT00002.gif&gt;
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle - Performance Technologies
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden]&lt;mailto:terry.dontje_at_[hidden]&gt;
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8815.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (16)"</a>
<li><strong>Previous message:</strong> <a href="8813.php">George Bosilca: "Re: [OMPI devel] Datatype question"</a>
<li><strong>In reply to:</strong> <a href="8811.php">Terry Dontje: "Re: [OMPI devel] openib btl_openib_async_thread poll question"</a>
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
