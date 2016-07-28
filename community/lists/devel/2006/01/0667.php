<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 11 03:43:05 2006" -->
<!-- isoreceived="20060111084305" -->
<!-- sent="Wed, 11 Jan 2006 09:05:46 +0100" -->
<!-- isosent="20060111080546" -->
<!-- name="Rainer Keller" -->
<!-- email="Keller_at_[hidden]" -->
<!-- subject="while-loop around opal_condition_wait" -->
<!-- id="200601110905.47000.Keller_at_hlrs.de" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Rainer Keller (<em>Keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-11 03:05:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0668.php">Brian Barrett: "Re:  configure warning"</a>
<li><strong>Previous message:</strong> <a href="0666.php">Ralf Wildenhues: "Re:  configure warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0669.php">Tim S. Woodall: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="0669.php">Tim S. Woodall: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="0670.php">George Bosilca: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="0689.php">Brian Barrett: "Re:  while-loop around opal_condition_wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello dear all,
<br>
I had a point on the tbd-list, that I would like to ask here:
<br>
&nbsp;- Shouldn't we have a while-loop condition around every occurence
<br>
&nbsp;&nbsp;&nbsp;of opal_condition_wait (spurious wake-ups)
<br>
&nbsp;&nbsp;&nbsp;As we may do a pthread_cond_wait,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;e.g. in opal_free_list.h and OPAL_FREE_LIST_WAIT ?
<br>
<p>Occurrences:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi/class/ompi_free_list.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal/class/opal_free_list.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi/request/req_wait.c          /* Two Occurences: not a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;must, but... */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte/mca/gpr/proxy/gpr_proxy_compound_cmd.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte/mca/iof/base/iof_base_flush.c:108
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte/mca/pls/rsh/pls_rsh_module.c:892
<br>
<p>May I check in the patch attached below?
<br>
<p>Thanks,
<br>
Rainer
<br>
<pre>
-- 
---------------------------------------------------------------------
Dipl.-Inf. Rainer Keller       email: keller_at_[hidden]
  High Performance Computing     Tel: ++49 (0)711-685 5858
    Center Stuttgart (HLRS)        Fax: ++49 (0)711-685 5832
  POSTAL:Nobelstrasse 19             <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
  ACTUAL:Allmandring 30, R. O.030      AIM:rusraink
  70550 Stuttgart

</pre>
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-0667/ompi_condition_wait-2006.01.11.diff">ompi_condition_wait-2006.01.11.diff</a>
</ul>
<!-- attachment="ompi_condition_wait-2006.01.11.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0668.php">Brian Barrett: "Re:  configure warning"</a>
<li><strong>Previous message:</strong> <a href="0666.php">Ralf Wildenhues: "Re:  configure warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0669.php">Tim S. Woodall: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="0669.php">Tim S. Woodall: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="0670.php">George Bosilca: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="0689.php">Brian Barrett: "Re:  while-loop around opal_condition_wait"</a>
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
