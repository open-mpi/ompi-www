<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 27 16:03:12 2007" -->
<!-- isoreceived="20070827200312" -->
<!-- sent="Mon, 27 Aug 2007 16:03:05 -0400" -->
<!-- isosent="20070827200305" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT devel] jms-new-parser / submit.php error" -->
<!-- id="20070827200303.GF24027_at_sun.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-27 16:03:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0025.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>Previous message:</strong> <a href="0023.php">Ethan Mallove: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action	Required**"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0025.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>Reply:</strong> <a href="0025.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm running into the below error running with the jms-new-parser branch
<br>
(see attached MTTDatabase error file).
<br>
<p>*** WARNING: MTTDatabase server notice: mpi_install_section_name is not in mtt database.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase server notice: number_of_results is not in mtt database.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase server notice: phase is not in mtt database.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase server notice: fields is not in mtt database.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase server notice: mpi_get_section_name is not in mtt database.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTT submission for test build
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase server error: 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;SQL QUERY: SELECT mpi_install_id 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;FROM mpi_install NATURAL JOIN 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_get     NATURAL JOIN 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compiler    NATURAL JOIN 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compute_cluster NATURAL JOIN 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;submit 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;WHERE 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_version = DEFAULT AND 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_name	= 'clustertools-7-iso-sdn-0907' AND 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compiler_version = '5.9 2007/05/03;' AND 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compiler_name    = 'sun' AND 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostname	     = 'burl-ct-v440-2' AND 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mtt_client_version = '2.1devel' AND 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;local_username   = 'emallove' AND 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;platform_name    = 'burl-ct-v440-2' 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORDER BY mpi_install_id DESC limit 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;SQL ERROR: ERROR:  syntax error at or near &quot;DEFAULT&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;LINE 8:  mpi_version = DEFAULT AND 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
&nbsp;&nbsp;&nbsp;&nbsp;SQL ERROR: 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase server notice: Invalid mpi_install_id (9790) given. Guessing that it should be -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase server error: ERROR: Unable to find a mpi_install to associate with this test_build.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase abort: (Tried to send HTTP error) 400
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase abort: 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;No mpi_install associated with this test_build
<br>
MTTDatabase got response: MTTDatabase server notice: mpi_install_section_name is not in mtt database.
<br>
&nbsp;&nbsp;&nbsp;MTTDatabase server notice: number_of_results is not in mtt database.
<br>
&nbsp;&nbsp;&nbsp;MTTDatabase server notice: phase is not in mtt database.
<br>
&nbsp;&nbsp;&nbsp;MTTDatabase server notice: fields is not in mtt database.
<br>
&nbsp;&nbsp;&nbsp;MTTDatabase server notice: mpi_get_section_name is not in mtt database.
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;MTT submission for test build
<br>
&nbsp;&nbsp;&nbsp;MTTDatabase server error: 
<br>
&nbsp;&nbsp;&nbsp;SQL QUERY: SELECT mpi_install_id 
<br>
&nbsp;&nbsp;&nbsp;FROM mpi_install NATURAL JOIN 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_get     NATURAL JOIN 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compiler    NATURAL JOIN 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compute_cluster NATURAL JOIN 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;submit 
<br>
&nbsp;&nbsp;&nbsp;WHERE 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_version = DEFAULT AND 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_name    = 'clustertools-7-iso-sdn-0907' AND 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compiler_version = '5.9 2007/05/03;' AND 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compiler_name    = 'sun' AND 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostname	    = 'burl-ct-v440-2' AND 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mtt_client_version = '2.1devel' AND 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;local_username   = 'emallove' AND 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;platform_name    = 'burl-ct-v440-2' 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORDER BY mpi_install_id DESC limit 1
<br>
&nbsp;&nbsp;&nbsp;SQL ERROR: ERROR:  syntax error at or near &quot;DEFAULT&quot;
<br>
&nbsp;&nbsp;&nbsp;LINE 8:  mpi_version = DEFAULT AND 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
&nbsp;&nbsp;&nbsp;SQL ERROR: 
<br>
&nbsp;&nbsp;&nbsp;MTTDatabase server notice: Invalid mpi_install_id (9790) given. Guessing that it should be -1
<br>
&nbsp;&nbsp;&nbsp;MTTDatabase server error: ERROR: Unable to find a mpi_install to associate with this test_build.
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;MTTDatabase abort: (Tried to send HTTP error) 400
<br>
&nbsp;&nbsp;&nbsp;MTTDatabase abort: 
<br>
&nbsp;&nbsp;&nbsp;No mpi_install associated with this test_build
<br>
*** WARNING: MTTDatabase did not get a serial; phases will be isolated from each other in the reports
<br>
MTTDatabase submit complete
<br>
Writing to MTTDatabase debug file: /home/em162155/mtt-utils/logs/debug/mttdatabase.burl-ct-v440-2.20070827.153417.1.1188243271-error.txt
<br>
Debug MTTDatabase file write complete
<br>
<span class="quotelev2">&gt;&gt; Reported to MTTDatabase: 1 successful submit, 0 failed submits (total of 1 result)
</span><br>
<p>############################################################################
<br>
# *** WARNING: 
<br>
# 2 MTTDatabase server errors
<br>
# The data that failed to submit is in /home/em162155/mtt-utils/logs/debug/mttdatabase.burl-ct-v440-2.20070827.153417.*.txt.
<br>
# See the above output for more info.
<br>
############################################################################
<br>
<p>
<br><p>
<p><hr>
<ul>
<li>text/plain attachment: <a href="../../att-0024/mttdatabase-error.txt">mttdatabase-error.txt</a>
</ul>
<!-- attachment="mttdatabase-error.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0025.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>Previous message:</strong> <a href="0023.php">Ethan Mallove: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action	Required**"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0025.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>Reply:</strong> <a href="0025.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
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
