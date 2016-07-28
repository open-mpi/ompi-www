<?
$subject_val = "[OMPI devel] openib btl_openib_async_thread poll question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 21 10:34:45 2010" -->
<!-- isoreceived="20101221153445" -->
<!-- sent="Tue, 21 Dec 2010 10:35:03 -0500" -->
<!-- isosent="20101221153503" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] openib btl_openib_async_thread poll question" -->
<!-- id="4D10C927.1000607_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] openib btl_openib_async_thread poll question<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-21 10:35:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8810.php">Ralph Castain: "Re: [OMPI devel] Connect/Accept and Disconnect"</a>
<li><strong>Previous message:</strong> <a href="8808.php">Suraj Prabhakaran: "Re: [OMPI devel] Connect/Accept and Disconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8811.php">Terry Dontje: "Re: [OMPI devel] openib btl_openib_async_thread poll question"</a>
<li><strong>Reply:</strong> <a href="8811.php">Terry Dontje: "Re: [OMPI devel] openib btl_openib_async_thread poll question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We're doing some testing with openib btl on a system with Solaris.  It 
<br>
looks like Solaris can return POLLIN|POLLRDNORM in revents from a poll 
<br>
call.  I looked at the manpages for Linux and it reads like Linux could 
<br>
possibly do this too.  However the code in btl_openib_async_thread that 
<br>
checks for valid revents is only checking for POLLIN and in the case it 
<br>
gets POLLIN|POLLRDNORM the btl ends up throwing an error.  I think 
<br>
erroring out on the POLLIN|POLLRDNORM case is a bug.
<br>
<p>Does anyone feel otherwise and can explain to me why we should not 
<br>
consider POLLIN|POLLRDNORM as a valid condition?  I have the same 
<br>
question pertaining to POLLRDBAND too but I don't believe we've seen 
<br>
this set.
<br>
<p>thanks,
<br>
<pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8809/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-8809/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8810.php">Ralph Castain: "Re: [OMPI devel] Connect/Accept and Disconnect"</a>
<li><strong>Previous message:</strong> <a href="8808.php">Suraj Prabhakaran: "Re: [OMPI devel] Connect/Accept and Disconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8811.php">Terry Dontje: "Re: [OMPI devel] openib btl_openib_async_thread poll question"</a>
<li><strong>Reply:</strong> <a href="8811.php">Terry Dontje: "Re: [OMPI devel] openib btl_openib_async_thread poll question"</a>
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
