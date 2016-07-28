<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 28 09:13:18 2007" -->
<!-- isoreceived="20070828131318" -->
<!-- sent="Tue, 28 Aug 2007 09:13:19 -0400" -->
<!-- isosent="20070828131319" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [MTT users] Database submit error" -->
<!-- id="46D41F6F.3060901_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F01AD1D3-0779-4088-89B1-764861D18254_at_cisco.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-28 09:13:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0377.php">Jeff Squyres: "Re: [MTT users] Database submit error"</a>
<li><strong>Previous message:</strong> <a href="0375.php">Jeff Squyres: "Re: [MTT users] Database submit error"</a>
<li><strong>In reply to:</strong> <a href="0375.php">Jeff Squyres: "Re: [MTT users] Database submit error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0377.php">Jeff Squyres: "Re: [MTT users] Database submit error"</a>
<li><strong>Reply:</strong> <a href="0377.php">Jeff Squyres: "Re: [MTT users] Database submit error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It installed and the tests built and made it into the database:
<br>
<a href="http://www.open-mpi.org/mtt/reporter.php?do_redir=293">http://www.open-mpi.org/mtt/reporter.php?do_redir=293</a>
<br>
<p>Tim
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Did you get a correct MPI install section for mpich2?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 28, 2007, at 9:05 AM, Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am working with the jms branch, and when trying to use mpich2, I get
</span><br>
<span class="quotelev2">&gt;&gt; the following submit error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** WARNING: MTTDatabase server notice: mpi_install_section_name is  
</span><br>
<span class="quotelev2">&gt;&gt; not in
</span><br>
<span class="quotelev2">&gt;&gt;      mtt database.
</span><br>
<span class="quotelev2">&gt;&gt;      MTTDatabase server notice: number_of_results is not in mtt  
</span><br>
<span class="quotelev2">&gt;&gt; database.
</span><br>
<span class="quotelev2">&gt;&gt;      MTTDatabase server notice: phase is not in mtt database.
</span><br>
<span class="quotelev2">&gt;&gt;      MTTDatabase server notice: test_type is not in mtt database.
</span><br>
<span class="quotelev2">&gt;&gt;      MTTDatabase server notice: test_build_section_name is not in mtt
</span><br>
<span class="quotelev2">&gt;&gt;      database.
</span><br>
<span class="quotelev2">&gt;&gt;      MTTDatabase server notice: variant is not in mtt database.
</span><br>
<span class="quotelev2">&gt;&gt;      MTTDatabase server notice: command is not in mtt database.
</span><br>
<span class="quotelev2">&gt;&gt;      MTTDatabase server notice: fields is not in mtt database.
</span><br>
<span class="quotelev2">&gt;&gt;      MTTDatabase server notice: resource_manager is not in mtt  
</span><br>
<span class="quotelev2">&gt;&gt; database.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      MTT submission for test run
</span><br>
<span class="quotelev2">&gt;&gt;      MTTDatabase server notice: Invalid test_build_id (47368) given.
</span><br>
<span class="quotelev2">&gt;&gt;      Guessing that it should be -1
</span><br>
<span class="quotelev2">&gt;&gt;      MTTDatabase server error: ERROR: Unable to find a test_build to
</span><br>
<span class="quotelev2">&gt;&gt;      associate with this test_run.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      MTTDatabase abort: (Tried to send HTTP error) 400
</span><br>
<span class="quotelev2">&gt;&gt;      MTTDatabase abort:
</span><br>
<span class="quotelev2">&gt;&gt;      No test_build associated with this test_run
</span><br>
<span class="quotelev2">&gt;&gt; *** WARNING: MTTDatabase did not get a serial; phases will be  
</span><br>
<span class="quotelev2">&gt;&gt; isolated from
</span><br>
<span class="quotelev2">&gt;&gt;      each other in the reports
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Reported to MTTDatabase: 1 successful submit, 0 failed submits  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (total of
</span><br>
<span class="quotelev2">&gt;&gt;    12 results)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This happens for each test run section.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0377.php">Jeff Squyres: "Re: [MTT users] Database submit error"</a>
<li><strong>Previous message:</strong> <a href="0375.php">Jeff Squyres: "Re: [MTT users] Database submit error"</a>
<li><strong>In reply to:</strong> <a href="0375.php">Jeff Squyres: "Re: [MTT users] Database submit error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0377.php">Jeff Squyres: "Re: [MTT users] Database submit error"</a>
<li><strong>Reply:</strong> <a href="0377.php">Jeff Squyres: "Re: [MTT users] Database submit error"</a>
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
