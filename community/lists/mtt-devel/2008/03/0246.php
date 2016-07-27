<?
$subject_val = "Re: [MTT devel] Weird MTT test names";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 10:26:29 2008" -->
<!-- isoreceived="20080306152629" -->
<!-- sent="Thu, 6 Mar 2008 10:26:20 -0500" -->
<!-- isosent="20080306152620" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Weird MTT test names" -->
<!-- id="20080306152619.GH51303_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B297DAB6-AA2A-415C-A8EC-9C8123A4AF54_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [MTT devel] Weird MTT test names<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-06 10:26:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0247.php">Josh Hursey: "Re: [MTT devel] Weird MTT test names"</a>
<li><strong>Previous message:</strong> <a href="0245.php">Josh Hursey: "[MTT devel] Weird MTT test names"</a>
<li><strong>In reply to:</strong> <a href="0245.php">Josh Hursey: "[MTT devel] Weird MTT test names"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0247.php">Josh Hursey: "Re: [MTT devel] Weird MTT test names"</a>
<li><strong>Reply:</strong> <a href="0247.php">Josh Hursey: "Re: [MTT devel] Weird MTT test names"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can go ahead and delete those rows. (I believe they are
<br>
from the ORTE test suite I was working on.)
<br>
<p>-Ethan
<br>
<p>On Thu, Mar/06/2008 09:39:16AM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; I'm trying to cleanup the test_suite/test_name tables in the database,  
</span><br>
<span class="quotelev1">&gt; removing some test names that are invalid and unreferenced.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the process I found a whole series of test_names of the following  
</span><br>
<span class="quotelev1">&gt; form:
</span><br>
<span class="quotelev1">&gt; test_suite = trivial
</span><br>
<span class="quotelev1">&gt; test_name  = MXIQNeaG8e-ping
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For this particular one it points to Ethan:
</span><br>
<span class="quotelev1">&gt; mtt=&gt; select submit.* from submit natural join test_run where  
</span><br>
<span class="quotelev1">&gt; test_name_id = 3947;
</span><br>
<span class="quotelev1">&gt;   submit_id |    hostname    | local_username | http_username |  
</span><br>
<span class="quotelev1">&gt; mtt_client_version
</span><br>
<span class="quotelev1">&gt; -----------+----------------+----------------+--------------- 
</span><br>
<span class="quotelev1">&gt; +--------------------
</span><br>
<span class="quotelev1">&gt;        2938 | burl-ct-v20z-2 | emallove       | sun           | 3.0a1
</span><br>
<span class="quotelev1">&gt;        2938 | burl-ct-v20z-2 | emallove       | sun           | 3.0a1
</span><br>
<span class="quotelev1">&gt;        2938 | burl-ct-v20z-2 | emallove       | sun           | 3.0a1
</span><br>
<span class="quotelev1">&gt; (3 rows)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This particular data was submitted on Jan 1, 2008.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea why we are seeing such cryptic names being submitted to the  
</span><br>
<span class="quotelev1">&gt; database?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0247.php">Josh Hursey: "Re: [MTT devel] Weird MTT test names"</a>
<li><strong>Previous message:</strong> <a href="0245.php">Josh Hursey: "[MTT devel] Weird MTT test names"</a>
<li><strong>In reply to:</strong> <a href="0245.php">Josh Hursey: "[MTT devel] Weird MTT test names"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0247.php">Josh Hursey: "Re: [MTT devel] Weird MTT test names"</a>
<li><strong>Reply:</strong> <a href="0247.php">Josh Hursey: "Re: [MTT devel] Weird MTT test names"</a>
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
