<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 28 09:17:30 2007" -->
<!-- isoreceived="20070828131730" -->
<!-- sent="Tue, 28 Aug 2007 09:17:25 -0400" -->
<!-- isosent="20070828131725" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] jms-new-parser / submit.php error" -->
<!-- id="20070828131541.GO12598_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F4C4F1FD-C4DD-4B60-9A93-70D225B6673D_at_cisco.com" -->
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
<strong>Date:</strong> 2007-08-28 09:17:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0033.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>Previous message:</strong> <a href="0031.php">Jeff Squyres: "[MTT devel] Broken &amp;find()?"</a>
<li><strong>In reply to:</strong> <a href="0030.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0033.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>Reply:</strong> <a href="0033.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Aug/27/2007 07:36:35PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 27, 2007, at 5:32 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Well that's fun -- why are there no mpi_install values in the .txt  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; file?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Because Functions/MPI/OMPI::get_version() does not know
</span><br>
<span class="quotelev2">&gt; &gt; what my $bindir is. Should an &amp;installdir() funclet be
</span><br>
<span class="quotelev2">&gt; &gt; created to get around this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's a chicken-n-egg problem here that I didn't solve and  
</span><br>
<span class="quotelev1">&gt; therefore ended up hard-coding for the pre-installed MPIs (HP,  
</span><br>
<span class="quotelev1">&gt; Intel, ...).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The MPI Get phase is the one responsible for getting the MPI  
</span><br>
<span class="quotelev1">&gt; version.  But AlreadyInstalled applies to a bunch of different MPIs  
</span><br>
<span class="quotelev1">&gt; -- each one has a different way of obtaining the version number  
</span><br>
<span class="quotelev1">&gt; (e.g., in OMPI, we call ompi_info).  So it makes sense to have a  
</span><br>
<span class="quotelev1">&gt; funclet to get the version number for each different MPI (which I did).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But the problem is that you need to know the $bindir in order to call  
</span><br>
<span class="quotelev1">&gt; the MPI's utility to get the version number.  You *could* do  
</span><br>
<span class="quotelev1">&gt; something like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; alreadyinstalled_version = &amp;MPI::OMPI::get_version(&amp;mpi_install_bindir 
</span><br>
<span class="quotelev1">&gt; ())
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But there's two problems with this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Then you have to ensure that &amp;mpi_install_bindir() is valid from  
</span><br>
<span class="quotelev1">&gt; anywhere, meaning that we need to set some global variable that  
</span><br>
<span class="quotelev1">&gt; corresponds to the MPI install in use throughout the code base (e.g.,  
</span><br>
<span class="quotelev1">&gt; even if you call it from within test get, test build, test  
</span><br>
<span class="quotelev1">&gt; run, ...).   This is a PITA, but it's solvable; it's just annoying/ 
</span><br>
<span class="quotelev1">&gt; menial work to go track down everywhere in the code that needs to  
</span><br>
<span class="quotelev1">&gt; have this variable set.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. We're trying to use an attribute from the MPI install phase (the  
</span><br>
<span class="quotelev1">&gt; bindir) in the MPI get phase (to get the version).  This is a huge  
</span><br>
<span class="quotelev1">&gt; break in abstraction.  All these funclets take a single param (the  
</span><br>
<span class="quotelev1">&gt; $bindir), but we won't know that until the MPI Install phase.  How  
</span><br>
<span class="quotelev1">&gt; can we pass it during the MPI Get phase?  I hadn't figured out how to  
</span><br>
<span class="quotelev1">&gt; do that without megga-ick/abstration breaks, so I gave up and hard- 
</span><br>
<span class="quotelev1">&gt; coded for HP/Intel MPI, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So were you using AlreadyInstalled for OMPI to report back to the  
</span><br>
<span class="quotelev1">&gt; DB?  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I was using AlreadyInstalled for ClusterTools. I guess I can
<br>
live with this:
<br>
<p>alreadyinstalled_dir = /opt/SUNWhpc/HPC7.0
<br>
alreadyinstalled_version = &amp;MPI::OMPI::get_version(@alreadyinstalled_dir@)
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Because I guess I thought we all understood that this was  
</span><br>
<span class="quotelev1">&gt; currently broken (per prior discussions on the phone).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Ethan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I assume you had successful MPI installs before this?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Aug 27, 2007, at 4:03 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'm running into the below error running with the jms-new-parser
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; branch
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (see attached MTTDatabase error file).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; *** WARNING: MTTDatabase server notice: mpi_install_section_name is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; not in mtt database.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     MTTDatabase server notice: number_of_results is not in mtt
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; database.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     MTTDatabase server notice: phase is not in mtt database.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     MTTDatabase server notice: fields is not in mtt database.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     MTTDatabase server notice: mpi_get_section_name is not in mtt
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; database.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     MTT submission for test build
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     MTTDatabase server error:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     SQL QUERY: SELECT mpi_install_id
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     FROM mpi_install NATURAL JOIN
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	 mpi_get     NATURAL JOIN
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	 compiler    NATURAL JOIN
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	 compute_cluster NATURAL JOIN
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	 submit
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     WHERE
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	    mpi_version = DEFAULT AND
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	    mpi_name	= 'clustertools-7-iso-sdn-0907' AND
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	    compiler_version = '5.9 2007/05/03;' AND
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	    compiler_name    = 'sun' AND
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	    hostname	     = 'burl-ct-v440-2' AND
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	    mtt_client_version = '2.1devel' AND
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	    local_username   = 'emallove' AND
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	    platform_name    = 'burl-ct-v440-2'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	    ORDER BY mpi_install_id DESC limit 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     SQL ERROR: ERROR:  syntax error at or near &quot;DEFAULT&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     LINE 8:  mpi_version = DEFAULT AND
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 			   ^
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     SQL ERROR:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     MTTDatabase server notice: Invalid mpi_install_id (9790) given.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Guessing that it should be -1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     MTTDatabase server error: ERROR: Unable to find a mpi_install
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; to associate with this test_build.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     MTTDatabase abort: (Tried to send HTTP error) 400
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     MTTDatabase abort:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     No mpi_install associated with this test_build
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MTTDatabase got response: MTTDatabase server notice:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpi_install_section_name is not in mtt database.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    MTTDatabase server notice: number_of_results is not in mtt
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; database.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    MTTDatabase server notice: phase is not in mtt database.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    MTTDatabase server notice: fields is not in mtt database.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    MTTDatabase server notice: mpi_get_section_name is not in mtt
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; database.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    MTT submission for test build
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    MTTDatabase server error:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    SQL QUERY: SELECT mpi_install_id
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    FROM mpi_install NATURAL JOIN
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	mpi_get     NATURAL JOIN
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	compiler    NATURAL JOIN
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	compute_cluster NATURAL JOIN
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	submit
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    WHERE
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	   mpi_version = DEFAULT AND
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	   mpi_name    = 'clustertools-7-iso-sdn-0907' AND
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	   compiler_version = '5.9 2007/05/03;' AND
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	   compiler_name    = 'sun' AND
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	   hostname	    = 'burl-ct-v440-2' AND
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	   mtt_client_version = '2.1devel' AND
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	   local_username   = 'emallove' AND
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	   platform_name    = 'burl-ct-v440-2'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	   ORDER BY mpi_install_id DESC limit 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    SQL ERROR: ERROR:  syntax error at or near &quot;DEFAULT&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    LINE 8:  mpi_version = DEFAULT AND
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 			  ^
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    SQL ERROR:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    MTTDatabase server notice: Invalid mpi_install_id (9790) given.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Guessing that it should be -1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    MTTDatabase server error: ERROR: Unable to find a mpi_install to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; associate with this test_build.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    MTTDatabase abort: (Tried to send HTTP error) 400
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    MTTDatabase abort:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    No mpi_install associated with this test_build
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; *** WARNING: MTTDatabase did not get a serial; phases will be
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; isolated from each other in the reports
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MTTDatabase submit complete
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Writing to MTTDatabase debug file: /home/em162155/mtt-utils/logs/
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; debug/mttdatabase.burl-ct-v440-2.20070827.153417.1.1188243271-
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; error.txt
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Debug MTTDatabase file write complete
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Reported to MTTDatabase: 1 successful submit, 0 failed submits
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; (total of 1 result)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #################################################################### 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ##
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ######
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; # *** WARNING:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; # 2 MTTDatabase server errors
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; # The data that failed to submit is in /home/em162155/mtt-utils/
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; logs/debug/mttdatabase.burl-ct-v440-2.20070827.153417.*.txt.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; # See the above output for more info.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #################################################################### 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ##
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ######
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &lt;mttdatabase-error.txt&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<li><strong>Next message:</strong> <a href="0033.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>Previous message:</strong> <a href="0031.php">Jeff Squyres: "[MTT devel] Broken &amp;find()?"</a>
<li><strong>In reply to:</strong> <a href="0030.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0033.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>Reply:</strong> <a href="0033.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
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
