<?
$subject_val = "[OMPI devel] openib btl - fatal errors don't abort the job";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  1 16:47:32 2010" -->
<!-- isoreceived="20100901204732" -->
<!-- sent="Wed, 01 Sep 2010 15:47:28 -0500" -->
<!-- isosent="20100901204728" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="[OMPI devel] openib btl - fatal errors don't abort the job" -->
<!-- id="4C7EBBE0.50400_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> [OMPI devel] openib btl - fatal errors don't abort the job<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-01 16:47:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8443.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8441.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8449.php">Jeff Squyres: "Re: [OMPI devel] openib btl - fatal errors don't abort the job"</a>
<li><strong>Reply:</strong> <a href="8449.php">Jeff Squyres: "Re: [OMPI devel] openib btl - fatal errors don't abort the job"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was wondering what the logic is behind allowing an MPI job to continue 
<br>
in the presence of a fatal qp error?
<br>
<p>Note the &quot;will try to continue&quot; sentence:
<br>
<p><p>--------------------------------------------------------------------------
<br>
The OpenFabrics stack has reported a network error event.  Open MPI
<br>
will try to continue, but your job may end up failing.
<br>
<p>&nbsp;&nbsp;&nbsp;Local host:        escher
<br>
&nbsp;&nbsp;&nbsp;MPI process PID:   19136
<br>
&nbsp;&nbsp;&nbsp;Error number:      1 (IBV_EVENT_QP_FATAL)
<br>
<p>This error may indicate connectivity problems within the fabric;
<br>
please contact your system administrator.
<br>
--------------------------------------------------------------------------
<br>
<p><p>Due to other bugs I'm chasing, I get these sorts of errors, and I notice 
<br>
the job just hangs even though the connections have been disconnected, 
<br>
the qps flushed, and all pending WRs completed with status == FLUSH.
<br>
<p>Thoughts?
<br>
<p>Thanks,
<br>
<p>Steve.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8443.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<li><strong>Previous message:</strong> <a href="8441.php">Larry Baker: "Re: [OMPI devel] 1.5rc5 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8449.php">Jeff Squyres: "Re: [OMPI devel] openib btl - fatal errors don't abort the job"</a>
<li><strong>Reply:</strong> <a href="8449.php">Jeff Squyres: "Re: [OMPI devel] openib btl - fatal errors don't abort the job"</a>
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
