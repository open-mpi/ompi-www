<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 12 13:51:23 2006" -->
<!-- isoreceived="20060112185123" -->
<!-- sent="Thu, 12 Jan 2006 13:50:35 -0500" -->
<!-- isosent="20060112185035" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re:  while-loop around opal_condition_wait" -->
<!-- id="9965D5E8-4494-4872-8493-2B8FC6F6E066_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200601110905.47000.Keller_at_hlrs.de" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-12 13:50:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0671.php">Ralf Wildenhues: "f77_check.m4 changes"</a>
<li><strong>Previous message:</strong> <a href="0669.php">Tim S. Woodall: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>In reply to:</strong> <a href="0667.php">Rainer Keller: "while-loop around opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0689.php">Brian Barrett: "Re:  while-loop around opal_condition_wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Which spurious wake-ups ? What is the problem with pthread_cond_wait ?
<br>
<p>Anyway, my point is that the patch is not correct. It will lead to  
<br>
deadlocks in nearly all the situations. Let's just look at the  
<br>
req_wait.c file. Here is the diff:
<br>
<p>Modified: trunk/ompi/request/req_wait.c
<br>
===================================================================
<br>
--- trunk/ompi/request/req_wait.c	2006-01-12 04:05:02 UTC (rev 8681)
<br>
+++ trunk/ompi/request/req_wait.c	2006-01-12 17:13:08 UTC (rev 8682)
<br>
@@ -66,7 +66,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* give up and sleep until completion */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_LOCK(&amp;ompi_request_lock);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_request_waiting++;
<br>
-    do {
<br>
+    /*
<br>
+     * We will break out of while{} as soon as all requests have  
<br>
completed.
<br>
+     */
<br>
+    while (1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rptr = requests;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;num_requests_null_inactive = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; count; i++, rptr++) {
<br>
@@ -87,10 +90,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(num_requests_null_inactive == count)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
-        if (completed &lt; 0) {
<br>
+        while (completed &lt; 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_condition_wait(&amp;ompi_request_cond,  
<br>
&amp;ompi_request_lock);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-    } while (completed &lt; 0);
<br>
+    }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_request_waiting--;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_UNLOCK(&amp;ompi_request_lock);
<br>
<p>Imagine one thread goes in the ompi_request_wait_any function. It set  
<br>
completed to -1 (initialization) then it test the status of the  
<br>
requests ... and let's suppose they are all actives. completed is  
<br>
still set to -1 in this case. Then the thread reach the for loop  
<br>
around the requests starting at line 72. As any of the requests are  
<br>
completed when it goes out of this loop completed is still set to -1.  
<br>
Now the thread will reach the
<br>
+        while (completed &lt; 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_condition_wait(&amp;ompi_request_cond,  
<br>
&amp;ompi_request_lock);
<br>
As completed is a local variable the only thread that can modify it  
<br>
is the thread that will be in the opal_condition_wait. As now we look  
<br>
around the condition as long as the completed is less than zero ...  
<br>
it look like we will loop there forever ... Basically, the if that  
<br>
was there before allow the thread to redo the check every time it get  
<br>
out from the opal_condition_wait, giving a chance to modify the  
<br>
completed variable.
<br>
<p>Similar behavior happens in all the patched places. Tell me if I'm  
<br>
wrong ... otherwise the patch should be rolled-back ASAP as we are  
<br>
not thread safe anymore ...
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p><p>On Jan 11, 2006, at 3:05 AM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; Hello dear all,
</span><br>
<span class="quotelev1">&gt; I had a point on the tbd-list, that I would like to ask here:
</span><br>
<span class="quotelev1">&gt;  - Shouldn't we have a while-loop condition around every occurence
</span><br>
<span class="quotelev1">&gt;    of opal_condition_wait (spurious wake-ups)
</span><br>
<span class="quotelev1">&gt;    As we may do a pthread_cond_wait,
</span><br>
<span class="quotelev1">&gt;     e.g. in opal_free_list.h and OPAL_FREE_LIST_WAIT ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Occurrences:
</span><br>
<span class="quotelev1">&gt;       ompi/class/ompi_free_list.h
</span><br>
<span class="quotelev1">&gt;       opal/class/opal_free_list.h
</span><br>
<span class="quotelev1">&gt;       ompi/request/req_wait.c          /* Two Occurences: not a
</span><br>
<span class="quotelev1">&gt;                must, but... */
</span><br>
<span class="quotelev1">&gt;       orte/mca/gpr/proxy/gpr_proxy_compound_cmd.c
</span><br>
<span class="quotelev1">&gt;       orte/mca/iof/base/iof_base_flush.c:108
</span><br>
<span class="quotelev1">&gt;       orte/mca/pls/rsh/pls_rsh_module.c:892
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; May I check in the patch attached below?
</span><br>
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0671.php">Ralf Wildenhues: "f77_check.m4 changes"</a>
<li><strong>Previous message:</strong> <a href="0669.php">Tim S. Woodall: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>In reply to:</strong> <a href="0667.php">Rainer Keller: "while-loop around opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0689.php">Brian Barrett: "Re:  while-loop around opal_condition_wait"</a>
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
