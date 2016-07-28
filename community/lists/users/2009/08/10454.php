<?
$subject_val = "[OMPI users] RETRY EXCEEDED ERROR status number 12";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 21 14:42:43 2009" -->
<!-- isoreceived="20090821184243" -->
<!-- sent="Fri, 21 Aug 2009 14:42:38 -0400" -->
<!-- isosent="20090821184238" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="[OMPI users] RETRY EXCEEDED ERROR status number 12" -->
<!-- id="4A8EEA9E.8050506_at_ias.edu" -->
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
<strong>Subject:</strong> [OMPI users] RETRY EXCEEDED ERROR status number 12<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-21 14:42:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10455.php">Pavel Shamis (Pasha): "Re: [OMPI users] RETRY EXCEEDED ERROR status number 12"</a>
<li><strong>Previous message:</strong> <a href="10453.php">tomek: "Re: [OMPI users] Blocking communication a thread better thenasynchronous progress?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10455.php">Pavel Shamis (Pasha): "Re: [OMPI users] RETRY EXCEEDED ERROR status number 12"</a>
<li><strong>Reply:</strong> <a href="10455.php">Pavel Shamis (Pasha): "Re: [OMPI users] RETRY EXCEEDED ERROR status number 12"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Several jobs on my cluster just died with the error below.
<br>
<p>Are there any IB/Open MPI diagnostics I should use to diagnose, should I
<br>
just reboot the nodes, or should I have the user who submitted these
<br>
jobs just increase the retry count/timeout paramters?
<br>
<p><p>[0,1,6][../../../../../ompi/mca/btl/openib/btl_openib_component.c:1375:btl_openib_component_progress]
<br>
from node14.aurora to: node40.aurora error polling HP CQ with status
<br>
RETRY EXCEEDED ERROR status number 12 for wr_id 13606831800 opcode 11119
<br>
--------------------------------------------------------------------------
<br>
The InfiniBand retry count between two MPI processes has been
<br>
exceeded. &quot;Retry count&quot; is defined in the InfiniBand spec 1.2
<br>
(section 12.7.38):
<br>
<p>The total number of times that the sender wishes the receiver to
<br>
retry timeout, packet sequence, etc. errors before posting a
<br>
completion error.
<br>
<p>This error typically means that there is something awry within the
<br>
InfiniBand fabric itself. You should note the hosts on which this
<br>
error has occurred; it has been observed that rebooting or removing a
<br>
particular host from the job can sometimes resolve this issue.
<br>
<p>Two MCA parameters can be used to control Open MPI's behavior with
<br>
respect to the retry count:
<br>
<p>* btl_openib_ib_retry_count - The number of times the sender will
<br>
attempt to retry (defaulted to 7, the maximum value).
<br>
<p>* btl_openib_ib_timeout - The local ACK timeout parameter (defaulted
<br>
to 10). The actual timeout value used is calculated as:
<br>
<p>4.096 microseconds * (2^btl_openib_ib_timeout)
<br>
<p>See the InfiniBand spec 1.2 (section 12.7.34) for more details.
<br>
<p><pre>
-- 
Prentice Bisbal
Linux Software Support Specialist/System Administrator
School of Natural Sciences
Institute for Advanced Study
Princeton, NJ
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10455.php">Pavel Shamis (Pasha): "Re: [OMPI users] RETRY EXCEEDED ERROR status number 12"</a>
<li><strong>Previous message:</strong> <a href="10453.php">tomek: "Re: [OMPI users] Blocking communication a thread better thenasynchronous progress?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10455.php">Pavel Shamis (Pasha): "Re: [OMPI users] RETRY EXCEEDED ERROR status number 12"</a>
<li><strong>Reply:</strong> <a href="10455.php">Pavel Shamis (Pasha): "Re: [OMPI users] RETRY EXCEEDED ERROR status number 12"</a>
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
