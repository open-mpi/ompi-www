<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 19 16:51:06 2006" -->
<!-- isoreceived="20060119215106" -->
<!-- sent="Thu, 19 Jan 2006 16:50:50 -0500" -->
<!-- isosent="20060119215050" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re:  while-loop around opal_condition_wait" -->
<!-- id="E70B2B52-88E1-44D4-9C96-E141EDABED77_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200601191823.53285.Keller_at_hlrs.de" -->
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
<strong>Date:</strong> 2006-01-19 16:50:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0702.php">Brian Barrett: "Re:  ompi_get_version"</a>
<li><strong>Previous message:</strong> <a href="0700.php">Andrew Friedley: "Re:  debugging methods"</a>
<li><strong>In reply to:</strong> <a href="0697.php">Rainer Keller: "Re:  while-loop around opal_condition_wait"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rainer,
<br>
<p>I found it. Please update to revision 8760. Now it look like we are  
<br>
completely multi-threaded ... at least on all the tests I run :)
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jan 19, 2006, at 12:23 PM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; Hi George,
</span><br>
<span class="quotelev1">&gt; On Thursday 19 January 2006 17:22, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I was hopping my patch solve the problem completely ... look like
</span><br>
<span class="quotelev2">&gt;&gt; it's not the case :( How exactly you get the dead-lock in the
</span><br>
<span class="quotelev2">&gt;&gt; mpi_test_suite ? Which configure options ? Only --enable-progress-
</span><br>
<span class="quotelev2">&gt;&gt; threads ?
</span><br>
<span class="quotelev1">&gt; This happens with both --enable-progress-threads and an additional
</span><br>
<span class="quotelev1">&gt; --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="0702.php">Brian Barrett: "Re:  ompi_get_version"</a>
<li><strong>Previous message:</strong> <a href="0700.php">Andrew Friedley: "Re:  debugging methods"</a>
<li><strong>In reply to:</strong> <a href="0697.php">Rainer Keller: "Re:  while-loop around opal_condition_wait"</a>
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
