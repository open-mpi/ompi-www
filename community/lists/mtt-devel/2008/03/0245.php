<?
$subject_val = "[MTT devel] Weird MTT test names";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 09:39:20 2008" -->
<!-- isoreceived="20080306143920" -->
<!-- sent="Thu, 6 Mar 2008 09:39:16 -0500" -->
<!-- isosent="20080306143916" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[MTT devel] Weird MTT test names" -->
<!-- id="B297DAB6-AA2A-415C-A8EC-9C8123A4AF54_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [MTT devel] Weird MTT test names<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-06 09:39:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0246.php">Ethan Mallove: "Re: [MTT devel] Weird MTT test names"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/02/0244.php">Josh Hursey: "Re: [MTT devel] two recent commits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0246.php">Ethan Mallove: "Re: [MTT devel] Weird MTT test names"</a>
<li><strong>Reply:</strong> <a href="0246.php">Ethan Mallove: "Re: [MTT devel] Weird MTT test names"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to cleanup the test_suite/test_name tables in the database,  
<br>
removing some test names that are invalid and unreferenced.
<br>
<p>In the process I found a whole series of test_names of the following  
<br>
form:
<br>
test_suite = trivial
<br>
test_name  = MXIQNeaG8e-ping
<br>
<p>For this particular one it points to Ethan:
<br>
mtt=&gt; select submit.* from submit natural join test_run where  
<br>
test_name_id = 3947;
<br>
&nbsp;&nbsp;submit_id |    hostname    | local_username | http_username |  
<br>
mtt_client_version
<br>
-----------+----------------+----------------+--------------- 
<br>
+--------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2938 | burl-ct-v20z-2 | emallove       | sun           | 3.0a1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2938 | burl-ct-v20z-2 | emallove       | sun           | 3.0a1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2938 | burl-ct-v20z-2 | emallove       | sun           | 3.0a1
<br>
(3 rows)
<br>
<p>This particular data was submitted on Jan 1, 2008.
<br>
<p>Any idea why we are seeing such cryptic names being submitted to the  
<br>
database?
<br>
<p>-- Josh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0246.php">Ethan Mallove: "Re: [MTT devel] Weird MTT test names"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/02/0244.php">Josh Hursey: "Re: [MTT devel] two recent commits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0246.php">Ethan Mallove: "Re: [MTT devel] Weird MTT test names"</a>
<li><strong>Reply:</strong> <a href="0246.php">Ethan Mallove: "Re: [MTT devel] Weird MTT test names"</a>
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
