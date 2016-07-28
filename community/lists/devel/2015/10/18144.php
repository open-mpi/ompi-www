<?
$subject_val = "[OMPI devel] opal_progress() and finalize";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  6 14:17:15 2015" -->
<!-- isoreceived="20151006181715" -->
<!-- sent="Tue, 6 Oct 2015 23:47:10 +0530" -->
<!-- isosent="20151006181710" -->
<!-- name="Nysal Jan K A" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="[OMPI devel] opal_progress() and finalize" -->
<!-- id="CAMQsnoZYckzn45Q4JeiECpOoTckJT03eEJYNzTbwtn+eL1iCiA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] opal_progress() and finalize<br>
<strong>From:</strong> Nysal Jan K A (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-06 14:17:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18145.php">Ralph Castain: "Re: [OMPI devel] opal_progress() and finalize"</a>
<li><strong>Previous message:</strong> <a href="18143.php">Dahai Guo: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18145.php">Ralph Castain: "Re: [OMPI devel] opal_progress() and finalize"</a>
<li><strong>Reply:</strong> <a href="18145.php">Ralph Castain: "Re: [OMPI devel] opal_progress() and finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In v1.8 there is a RTE barrier in finalize. OMPI_LAZY_WAIT_FOR_COMPLETION
<br>
waits for the barrier to complete. Internally opal_progress() is invoked.
<br>
In the master branch we call PMIX fence instead. PMIX_WAIT_FOR_COMPLETION
<br>
seems to only call usleep. How will ompi progress outstanding operations ?
<br>
<p>Regards
<br>
--Nysal
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18144/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18145.php">Ralph Castain: "Re: [OMPI devel] opal_progress() and finalize"</a>
<li><strong>Previous message:</strong> <a href="18143.php">Dahai Guo: "Re: [OMPI devel] trace the openmpi internal function calls in MPI user program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18145.php">Ralph Castain: "Re: [OMPI devel] opal_progress() and finalize"</a>
<li><strong>Reply:</strong> <a href="18145.php">Ralph Castain: "Re: [OMPI devel] opal_progress() and finalize"</a>
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
