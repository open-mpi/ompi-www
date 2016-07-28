<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 27 16:08:25 2007" -->
<!-- isoreceived="20070827200825" -->
<!-- sent="Mon, 27 Aug 2007 16:07:57 -0400" -->
<!-- isosent="20070827200757" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] jms-new-parser / submit.php error" -->
<!-- id="C5AEE1FA-BDB1-4AB6-8D93-057E5CD567DD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070827200303.GF24027_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-27 16:07:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0026.php">Josh Hursey: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>Previous message:</strong> <a href="0024.php">Ethan Mallove: "[MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>In reply to:</strong> <a href="0024.php">Ethan Mallove: "[MTT devel] jms-new-parser / submit.php error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0026.php">Josh Hursey: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>Reply:</strong> <a href="0026.php">Josh Hursey: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>Reply:</strong> <a href="0028.php">Ethan Mallove: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well that's fun -- why are there no mpi_install values in the .txt file?
<br>
<p>I assume you had successful MPI installs before this?
<br>
<p><p>On Aug 27, 2007, at 4:03 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; I'm running into the below error running with the jms-new-parser  
</span><br>
<span class="quotelev1">&gt; branch
</span><br>
<span class="quotelev1">&gt; (see attached MTTDatabase error file).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** WARNING: MTTDatabase server notice: mpi_install_section_name is  
</span><br>
<span class="quotelev1">&gt; not in mtt database.
</span><br>
<span class="quotelev1">&gt;     MTTDatabase server notice: number_of_results is not in mtt  
</span><br>
<span class="quotelev1">&gt; database.
</span><br>
<span class="quotelev1">&gt;     MTTDatabase server notice: phase is not in mtt database.
</span><br>
<span class="quotelev1">&gt;     MTTDatabase server notice: fields is not in mtt database.
</span><br>
<span class="quotelev1">&gt;     MTTDatabase server notice: mpi_get_section_name is not in mtt  
</span><br>
<span class="quotelev1">&gt; database.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MTT submission for test build
</span><br>
<span class="quotelev1">&gt;     MTTDatabase server error:
</span><br>
<span class="quotelev1">&gt;     SQL QUERY: SELECT mpi_install_id
</span><br>
<span class="quotelev1">&gt;     FROM mpi_install NATURAL JOIN
</span><br>
<span class="quotelev1">&gt; 	 mpi_get     NATURAL JOIN
</span><br>
<span class="quotelev1">&gt; 	 compiler    NATURAL JOIN
</span><br>
<span class="quotelev1">&gt; 	 compute_cluster NATURAL JOIN
</span><br>
<span class="quotelev1">&gt; 	 submit
</span><br>
<span class="quotelev1">&gt;     WHERE
</span><br>
<span class="quotelev1">&gt; 	    mpi_version = DEFAULT AND
</span><br>
<span class="quotelev1">&gt; 	    mpi_name	= 'clustertools-7-iso-sdn-0907' AND
</span><br>
<span class="quotelev1">&gt; 	    compiler_version = '5.9 2007/05/03;' AND
</span><br>
<span class="quotelev1">&gt; 	    compiler_name    = 'sun' AND
</span><br>
<span class="quotelev1">&gt; 	    hostname	     = 'burl-ct-v440-2' AND
</span><br>
<span class="quotelev1">&gt; 	    mtt_client_version = '2.1devel' AND
</span><br>
<span class="quotelev1">&gt; 	    local_username   = 'emallove' AND
</span><br>
<span class="quotelev1">&gt; 	    platform_name    = 'burl-ct-v440-2'
</span><br>
<span class="quotelev1">&gt; 	    ORDER BY mpi_install_id DESC limit 1
</span><br>
<span class="quotelev1">&gt;     SQL ERROR: ERROR:  syntax error at or near &quot;DEFAULT&quot;
</span><br>
<span class="quotelev1">&gt;     LINE 8:  mpi_version = DEFAULT AND
</span><br>
<span class="quotelev1">&gt; 			   ^
</span><br>
<span class="quotelev1">&gt;     SQL ERROR:
</span><br>
<span class="quotelev1">&gt;     MTTDatabase server notice: Invalid mpi_install_id (9790) given.  
</span><br>
<span class="quotelev1">&gt; Guessing that it should be -1
</span><br>
<span class="quotelev1">&gt;     MTTDatabase server error: ERROR: Unable to find a mpi_install  
</span><br>
<span class="quotelev1">&gt; to associate with this test_build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MTTDatabase abort: (Tried to send HTTP error) 400
</span><br>
<span class="quotelev1">&gt;     MTTDatabase abort:
</span><br>
<span class="quotelev1">&gt;     No mpi_install associated with this test_build
</span><br>
<span class="quotelev1">&gt; MTTDatabase got response: MTTDatabase server notice:  
</span><br>
<span class="quotelev1">&gt; mpi_install_section_name is not in mtt database.
</span><br>
<span class="quotelev1">&gt;    MTTDatabase server notice: number_of_results is not in mtt  
</span><br>
<span class="quotelev1">&gt; database.
</span><br>
<span class="quotelev1">&gt;    MTTDatabase server notice: phase is not in mtt database.
</span><br>
<span class="quotelev1">&gt;    MTTDatabase server notice: fields is not in mtt database.
</span><br>
<span class="quotelev1">&gt;    MTTDatabase server notice: mpi_get_section_name is not in mtt  
</span><br>
<span class="quotelev1">&gt; database.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MTT submission for test build
</span><br>
<span class="quotelev1">&gt;    MTTDatabase server error:
</span><br>
<span class="quotelev1">&gt;    SQL QUERY: SELECT mpi_install_id
</span><br>
<span class="quotelev1">&gt;    FROM mpi_install NATURAL JOIN
</span><br>
<span class="quotelev1">&gt; 	mpi_get     NATURAL JOIN
</span><br>
<span class="quotelev1">&gt; 	compiler    NATURAL JOIN
</span><br>
<span class="quotelev1">&gt; 	compute_cluster NATURAL JOIN
</span><br>
<span class="quotelev1">&gt; 	submit
</span><br>
<span class="quotelev1">&gt;    WHERE
</span><br>
<span class="quotelev1">&gt; 	   mpi_version = DEFAULT AND
</span><br>
<span class="quotelev1">&gt; 	   mpi_name    = 'clustertools-7-iso-sdn-0907' AND
</span><br>
<span class="quotelev1">&gt; 	   compiler_version = '5.9 2007/05/03;' AND
</span><br>
<span class="quotelev1">&gt; 	   compiler_name    = 'sun' AND
</span><br>
<span class="quotelev1">&gt; 	   hostname	    = 'burl-ct-v440-2' AND
</span><br>
<span class="quotelev1">&gt; 	   mtt_client_version = '2.1devel' AND
</span><br>
<span class="quotelev1">&gt; 	   local_username   = 'emallove' AND
</span><br>
<span class="quotelev1">&gt; 	   platform_name    = 'burl-ct-v440-2'
</span><br>
<span class="quotelev1">&gt; 	   ORDER BY mpi_install_id DESC limit 1
</span><br>
<span class="quotelev1">&gt;    SQL ERROR: ERROR:  syntax error at or near &quot;DEFAULT&quot;
</span><br>
<span class="quotelev1">&gt;    LINE 8:  mpi_version = DEFAULT AND
</span><br>
<span class="quotelev1">&gt; 			  ^
</span><br>
<span class="quotelev1">&gt;    SQL ERROR:
</span><br>
<span class="quotelev1">&gt;    MTTDatabase server notice: Invalid mpi_install_id (9790) given.  
</span><br>
<span class="quotelev1">&gt; Guessing that it should be -1
</span><br>
<span class="quotelev1">&gt;    MTTDatabase server error: ERROR: Unable to find a mpi_install to  
</span><br>
<span class="quotelev1">&gt; associate with this test_build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MTTDatabase abort: (Tried to send HTTP error) 400
</span><br>
<span class="quotelev1">&gt;    MTTDatabase abort:
</span><br>
<span class="quotelev1">&gt;    No mpi_install associated with this test_build
</span><br>
<span class="quotelev1">&gt; *** WARNING: MTTDatabase did not get a serial; phases will be  
</span><br>
<span class="quotelev1">&gt; isolated from each other in the reports
</span><br>
<span class="quotelev1">&gt; MTTDatabase submit complete
</span><br>
<span class="quotelev1">&gt; Writing to MTTDatabase debug file: /home/em162155/mtt-utils/logs/ 
</span><br>
<span class="quotelev1">&gt; debug/mttdatabase.burl-ct-v440-2.20070827.153417.1.1188243271- 
</span><br>
<span class="quotelev1">&gt; error.txt
</span><br>
<span class="quotelev1">&gt; Debug MTTDatabase file write complete
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reported to MTTDatabase: 1 successful submit, 0 failed submits  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (total of 1 result)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ###################################################################### 
</span><br>
<span class="quotelev1">&gt; ######
</span><br>
<span class="quotelev1">&gt; # *** WARNING:
</span><br>
<span class="quotelev1">&gt; # 2 MTTDatabase server errors
</span><br>
<span class="quotelev1">&gt; # The data that failed to submit is in /home/em162155/mtt-utils/ 
</span><br>
<span class="quotelev1">&gt; logs/debug/mttdatabase.burl-ct-v440-2.20070827.153417.*.txt.
</span><br>
<span class="quotelev1">&gt; # See the above output for more info.
</span><br>
<span class="quotelev1">&gt; ###################################################################### 
</span><br>
<span class="quotelev1">&gt; ######
</span><br>
<span class="quotelev1">&gt; &lt;mttdatabase-error.txt&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0026.php">Josh Hursey: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>Previous message:</strong> <a href="0024.php">Ethan Mallove: "[MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>In reply to:</strong> <a href="0024.php">Ethan Mallove: "[MTT devel] jms-new-parser / submit.php error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0026.php">Josh Hursey: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>Reply:</strong> <a href="0026.php">Josh Hursey: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>Reply:</strong> <a href="0028.php">Ethan Mallove: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
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
