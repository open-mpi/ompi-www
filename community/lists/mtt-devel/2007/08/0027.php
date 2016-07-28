<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 27 17:04:22 2007" -->
<!-- isoreceived="20070827210422" -->
<!-- sent="Mon, 27 Aug 2007 17:04:02 -0400" -->
<!-- isosent="20070827210402" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] jms-new-parser / submit.php error" -->
<!-- id="940F6393-F27C-486F-8F4E-57C8FDB555F4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C6402E81-53E6-462C-821E-A804A5BB7239_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-08-27 17:04:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0028.php">Ethan Mallove: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>Previous message:</strong> <a href="0026.php">Josh Hursey: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>In reply to:</strong> <a href="0026.php">Josh Hursey: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0028.php">Ethan Mallove: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Blah -- I *meant* to say mpi_install_id, not mpi_install (i.e.,  
<br>
there's no mpi_install_id values).  *And* the mpi_version string is  
<br>
&quot;&quot;, as Josh noted.
<br>
<p>What happened with your prior MPI install's?
<br>
<p><p><p>On Aug 27, 2007, at 5:00 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; This is odd. The test_build submission code is trying to guess the
</span><br>
<span class="quotelev1">&gt; mpi_install_id, and since the &quot;mpi_version=''&quot; in the .txt file then
</span><br>
<span class="quotelev1">&gt; this resolves as DEFAULT on the server which is no good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was it that the mpi_version was never filled in by the client or was
</span><br>
<span class="quotelev1">&gt; it improperly reported?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 27, 2007, at 4:07 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well that's fun -- why are there no mpi_install values in the .txt
</span><br>
<span class="quotelev2">&gt;&gt; file?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I assume you had successful MPI installs before this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 27, 2007, at 4:03 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm running into the below error running with the jms-new-parser
</span><br>
<span class="quotelev3">&gt;&gt;&gt; branch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (see attached MTTDatabase error file).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** WARNING: MTTDatabase server notice: mpi_install_section_name is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not in mtt database.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MTTDatabase server notice: number_of_results is not in mtt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; database.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MTTDatabase server notice: phase is not in mtt database.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MTTDatabase server notice: fields is not in mtt database.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MTTDatabase server notice: mpi_get_section_name is not in mtt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; database.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MTT submission for test build
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MTTDatabase server error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     SQL QUERY: SELECT mpi_install_id
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     FROM mpi_install NATURAL JOIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	 mpi_get     NATURAL JOIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	 compiler    NATURAL JOIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	 compute_cluster NATURAL JOIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	 submit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     WHERE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	    mpi_version = DEFAULT AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	    mpi_name	= 'clustertools-7-iso-sdn-0907' AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	    compiler_version = '5.9 2007/05/03;' AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	    compiler_name    = 'sun' AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	    hostname	     = 'burl-ct-v440-2' AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	    mtt_client_version = '2.1devel' AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	    local_username   = 'emallove' AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	    platform_name    = 'burl-ct-v440-2'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	    ORDER BY mpi_install_id DESC limit 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     SQL ERROR: ERROR:  syntax error at or near &quot;DEFAULT&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     LINE 8:  mpi_version = DEFAULT AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 			   ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     SQL ERROR:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MTTDatabase server notice: Invalid mpi_install_id (9790) given.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Guessing that it should be -1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MTTDatabase server error: ERROR: Unable to find a mpi_install
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to associate with this test_build.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MTTDatabase abort: (Tried to send HTTP error) 400
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MTTDatabase abort:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     No mpi_install associated with this test_build
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MTTDatabase got response: MTTDatabase server notice:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_install_section_name is not in mtt database.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTTDatabase server notice: number_of_results is not in mtt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; database.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTTDatabase server notice: phase is not in mtt database.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTTDatabase server notice: fields is not in mtt database.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTTDatabase server notice: mpi_get_section_name is not in mtt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; database.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTT submission for test build
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTTDatabase server error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    SQL QUERY: SELECT mpi_install_id
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    FROM mpi_install NATURAL JOIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	mpi_get     NATURAL JOIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	compiler    NATURAL JOIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	compute_cluster NATURAL JOIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	submit
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    WHERE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	   mpi_version = DEFAULT AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	   mpi_name    = 'clustertools-7-iso-sdn-0907' AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	   compiler_version = '5.9 2007/05/03;' AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	   compiler_name    = 'sun' AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	   hostname	    = 'burl-ct-v440-2' AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	   mtt_client_version = '2.1devel' AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	   local_username   = 'emallove' AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	   platform_name    = 'burl-ct-v440-2'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	   ORDER BY mpi_install_id DESC limit 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    SQL ERROR: ERROR:  syntax error at or near &quot;DEFAULT&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    LINE 8:  mpi_version = DEFAULT AND
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 			  ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    SQL ERROR:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTTDatabase server notice: Invalid mpi_install_id (9790) given.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Guessing that it should be -1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTTDatabase server error: ERROR: Unable to find a mpi_install to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; associate with this test_build.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTTDatabase abort: (Tried to send HTTP error) 400
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MTTDatabase abort:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    No mpi_install associated with this test_build
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** WARNING: MTTDatabase did not get a serial; phases will be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; isolated from each other in the reports
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MTTDatabase submit complete
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Writing to MTTDatabase debug file: /home/em162155/mtt-utils/logs/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; debug/mttdatabase.burl-ct-v440-2.20070827.153417.1.1188243271-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Debug MTTDatabase file write complete
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Reported to MTTDatabase: 1 successful submit, 0 failed submits
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (total of 1 result)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #################################################################### 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ######
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # *** WARNING:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # 2 MTTDatabase server errors
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # The data that failed to submit is in /home/em162155/mtt-utils/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; logs/debug/mttdatabase.burl-ct-v440-2.20070827.153417.*.txt.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # See the above output for more info.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #################################################################### 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ######
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mttdatabase-error.txt&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="0028.php">Ethan Mallove: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>Previous message:</strong> <a href="0026.php">Josh Hursey: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>In reply to:</strong> <a href="0026.php">Josh Hursey: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0028.php">Ethan Mallove: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
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
