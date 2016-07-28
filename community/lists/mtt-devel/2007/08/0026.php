<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 27 17:00:41 2007" -->
<!-- isoreceived="20070827210041" -->
<!-- sent="Mon, 27 Aug 2007 17:00:15 -0400" -->
<!-- isosent="20070827210015" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] jms-new-parser / submit.php error" -->
<!-- id="C6402E81-53E6-462C-821E-A804A5BB7239_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C5AEE1FA-BDB1-4AB6-8D93-057E5CD567DD_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-27 17:00:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0027.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>Previous message:</strong> <a href="0025.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>In reply to:</strong> <a href="0025.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0027.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>Reply:</strong> <a href="0027.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is odd. The test_build submission code is trying to guess the  
<br>
mpi_install_id, and since the &quot;mpi_version=''&quot; in the .txt file then  
<br>
this resolves as DEFAULT on the server which is no good.
<br>
<p>Was it that the mpi_version was never filled in by the client or was  
<br>
it improperly reported?
<br>
<p>-- Josh
<br>
<p>On Aug 27, 2007, at 4:07 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Well that's fun -- why are there no mpi_install values in the .txt  
</span><br>
<span class="quotelev1">&gt; file?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I assume you had successful MPI installs before this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 27, 2007, at 4:03 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm running into the below error running with the jms-new-parser
</span><br>
<span class="quotelev2">&gt;&gt; branch
</span><br>
<span class="quotelev2">&gt;&gt; (see attached MTTDatabase error file).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** WARNING: MTTDatabase server notice: mpi_install_section_name is
</span><br>
<span class="quotelev2">&gt;&gt; not in mtt database.
</span><br>
<span class="quotelev2">&gt;&gt;     MTTDatabase server notice: number_of_results is not in mtt
</span><br>
<span class="quotelev2">&gt;&gt; database.
</span><br>
<span class="quotelev2">&gt;&gt;     MTTDatabase server notice: phase is not in mtt database.
</span><br>
<span class="quotelev2">&gt;&gt;     MTTDatabase server notice: fields is not in mtt database.
</span><br>
<span class="quotelev2">&gt;&gt;     MTTDatabase server notice: mpi_get_section_name is not in mtt
</span><br>
<span class="quotelev2">&gt;&gt; database.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     MTT submission for test build
</span><br>
<span class="quotelev2">&gt;&gt;     MTTDatabase server error:
</span><br>
<span class="quotelev2">&gt;&gt;     SQL QUERY: SELECT mpi_install_id
</span><br>
<span class="quotelev2">&gt;&gt;     FROM mpi_install NATURAL JOIN
</span><br>
<span class="quotelev2">&gt;&gt; 	 mpi_get     NATURAL JOIN
</span><br>
<span class="quotelev2">&gt;&gt; 	 compiler    NATURAL JOIN
</span><br>
<span class="quotelev2">&gt;&gt; 	 compute_cluster NATURAL JOIN
</span><br>
<span class="quotelev2">&gt;&gt; 	 submit
</span><br>
<span class="quotelev2">&gt;&gt;     WHERE
</span><br>
<span class="quotelev2">&gt;&gt; 	    mpi_version = DEFAULT AND
</span><br>
<span class="quotelev2">&gt;&gt; 	    mpi_name	= 'clustertools-7-iso-sdn-0907' AND
</span><br>
<span class="quotelev2">&gt;&gt; 	    compiler_version = '5.9 2007/05/03;' AND
</span><br>
<span class="quotelev2">&gt;&gt; 	    compiler_name    = 'sun' AND
</span><br>
<span class="quotelev2">&gt;&gt; 	    hostname	     = 'burl-ct-v440-2' AND
</span><br>
<span class="quotelev2">&gt;&gt; 	    mtt_client_version = '2.1devel' AND
</span><br>
<span class="quotelev2">&gt;&gt; 	    local_username   = 'emallove' AND
</span><br>
<span class="quotelev2">&gt;&gt; 	    platform_name    = 'burl-ct-v440-2'
</span><br>
<span class="quotelev2">&gt;&gt; 	    ORDER BY mpi_install_id DESC limit 1
</span><br>
<span class="quotelev2">&gt;&gt;     SQL ERROR: ERROR:  syntax error at or near &quot;DEFAULT&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     LINE 8:  mpi_version = DEFAULT AND
</span><br>
<span class="quotelev2">&gt;&gt; 			   ^
</span><br>
<span class="quotelev2">&gt;&gt;     SQL ERROR:
</span><br>
<span class="quotelev2">&gt;&gt;     MTTDatabase server notice: Invalid mpi_install_id (9790) given.
</span><br>
<span class="quotelev2">&gt;&gt; Guessing that it should be -1
</span><br>
<span class="quotelev2">&gt;&gt;     MTTDatabase server error: ERROR: Unable to find a mpi_install
</span><br>
<span class="quotelev2">&gt;&gt; to associate with this test_build.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     MTTDatabase abort: (Tried to send HTTP error) 400
</span><br>
<span class="quotelev2">&gt;&gt;     MTTDatabase abort:
</span><br>
<span class="quotelev2">&gt;&gt;     No mpi_install associated with this test_build
</span><br>
<span class="quotelev2">&gt;&gt; MTTDatabase got response: MTTDatabase server notice:
</span><br>
<span class="quotelev2">&gt;&gt; mpi_install_section_name is not in mtt database.
</span><br>
<span class="quotelev2">&gt;&gt;    MTTDatabase server notice: number_of_results is not in mtt
</span><br>
<span class="quotelev2">&gt;&gt; database.
</span><br>
<span class="quotelev2">&gt;&gt;    MTTDatabase server notice: phase is not in mtt database.
</span><br>
<span class="quotelev2">&gt;&gt;    MTTDatabase server notice: fields is not in mtt database.
</span><br>
<span class="quotelev2">&gt;&gt;    MTTDatabase server notice: mpi_get_section_name is not in mtt
</span><br>
<span class="quotelev2">&gt;&gt; database.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MTT submission for test build
</span><br>
<span class="quotelev2">&gt;&gt;    MTTDatabase server error:
</span><br>
<span class="quotelev2">&gt;&gt;    SQL QUERY: SELECT mpi_install_id
</span><br>
<span class="quotelev2">&gt;&gt;    FROM mpi_install NATURAL JOIN
</span><br>
<span class="quotelev2">&gt;&gt; 	mpi_get     NATURAL JOIN
</span><br>
<span class="quotelev2">&gt;&gt; 	compiler    NATURAL JOIN
</span><br>
<span class="quotelev2">&gt;&gt; 	compute_cluster NATURAL JOIN
</span><br>
<span class="quotelev2">&gt;&gt; 	submit
</span><br>
<span class="quotelev2">&gt;&gt;    WHERE
</span><br>
<span class="quotelev2">&gt;&gt; 	   mpi_version = DEFAULT AND
</span><br>
<span class="quotelev2">&gt;&gt; 	   mpi_name    = 'clustertools-7-iso-sdn-0907' AND
</span><br>
<span class="quotelev2">&gt;&gt; 	   compiler_version = '5.9 2007/05/03;' AND
</span><br>
<span class="quotelev2">&gt;&gt; 	   compiler_name    = 'sun' AND
</span><br>
<span class="quotelev2">&gt;&gt; 	   hostname	    = 'burl-ct-v440-2' AND
</span><br>
<span class="quotelev2">&gt;&gt; 	   mtt_client_version = '2.1devel' AND
</span><br>
<span class="quotelev2">&gt;&gt; 	   local_username   = 'emallove' AND
</span><br>
<span class="quotelev2">&gt;&gt; 	   platform_name    = 'burl-ct-v440-2'
</span><br>
<span class="quotelev2">&gt;&gt; 	   ORDER BY mpi_install_id DESC limit 1
</span><br>
<span class="quotelev2">&gt;&gt;    SQL ERROR: ERROR:  syntax error at or near &quot;DEFAULT&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    LINE 8:  mpi_version = DEFAULT AND
</span><br>
<span class="quotelev2">&gt;&gt; 			  ^
</span><br>
<span class="quotelev2">&gt;&gt;    SQL ERROR:
</span><br>
<span class="quotelev2">&gt;&gt;    MTTDatabase server notice: Invalid mpi_install_id (9790) given.
</span><br>
<span class="quotelev2">&gt;&gt; Guessing that it should be -1
</span><br>
<span class="quotelev2">&gt;&gt;    MTTDatabase server error: ERROR: Unable to find a mpi_install to
</span><br>
<span class="quotelev2">&gt;&gt; associate with this test_build.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MTTDatabase abort: (Tried to send HTTP error) 400
</span><br>
<span class="quotelev2">&gt;&gt;    MTTDatabase abort:
</span><br>
<span class="quotelev2">&gt;&gt;    No mpi_install associated with this test_build
</span><br>
<span class="quotelev2">&gt;&gt; *** WARNING: MTTDatabase did not get a serial; phases will be
</span><br>
<span class="quotelev2">&gt;&gt; isolated from each other in the reports
</span><br>
<span class="quotelev2">&gt;&gt; MTTDatabase submit complete
</span><br>
<span class="quotelev2">&gt;&gt; Writing to MTTDatabase debug file: /home/em162155/mtt-utils/logs/
</span><br>
<span class="quotelev2">&gt;&gt; debug/mttdatabase.burl-ct-v440-2.20070827.153417.1.1188243271-
</span><br>
<span class="quotelev2">&gt;&gt; error.txt
</span><br>
<span class="quotelev2">&gt;&gt; Debug MTTDatabase file write complete
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Reported to MTTDatabase: 1 successful submit, 0 failed submits
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (total of 1 result)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ##################################################################### 
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; ######
</span><br>
<span class="quotelev2">&gt;&gt; # *** WARNING:
</span><br>
<span class="quotelev2">&gt;&gt; # 2 MTTDatabase server errors
</span><br>
<span class="quotelev2">&gt;&gt; # The data that failed to submit is in /home/em162155/mtt-utils/
</span><br>
<span class="quotelev2">&gt;&gt; logs/debug/mttdatabase.burl-ct-v440-2.20070827.153417.*.txt.
</span><br>
<span class="quotelev2">&gt;&gt; # See the above output for more info.
</span><br>
<span class="quotelev2">&gt;&gt; ##################################################################### 
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; ######
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mttdatabase-error.txt&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="0027.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>Previous message:</strong> <a href="0025.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>In reply to:</strong> <a href="0025.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0027.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>Reply:</strong> <a href="0027.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
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
