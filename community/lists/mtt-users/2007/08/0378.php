<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 28 10:17:12 2007" -->
<!-- isoreceived="20070828141712" -->
<!-- sent="Tue, 28 Aug 2007 10:16:51 -0400" -->
<!-- isosent="20070828141651" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Database submit error" -->
<!-- id="460FF844-E539-4675-8F40-6083A6F4A4B1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4457922D-E8A8-4DE5-942F-A9688480756B_at_cisco.com" -->
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
<strong>Date:</strong> 2007-08-28 10:16:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0379.php">Jeff Squyres: "Re: [MTT users] Please, forward this question to open-mpi developers"</a>
<li><strong>Previous message:</strong> <a href="0377.php">Jeff Squyres: "Re: [MTT users] Database submit error"</a>
<li><strong>In reply to:</strong> <a href="0377.php">Jeff Squyres: "Re: [MTT users] Database submit error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0380.php">Josh Hursey: "Re: [MTT users] Database submit error"</a>
<li><strong>Reply:</strong> <a href="0380.php">Josh Hursey: "Re: [MTT users] Database submit error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh found the problem and is in the process of fixing it.  DB  
<br>
submits are currently disabled while Josh is working on the fix.   
<br>
More specific details coming soon.
<br>
<p>Unfortunately, it looks like all data from last night will be  
<br>
junk.  :-(  You might as well kill any MTT scripts that are still  
<br>
running from last night.
<br>
<p><p>On Aug 28, 2007, at 9:14 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Josh and I are investigating -- the total runs in the db in the
</span><br>
<span class="quotelev1">&gt; summary report from this morning is far too low.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 28, 2007, at 9:13 AM, Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It installed and the tests built and made it into the database:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mtt/reporter.php?do_redir=293">http://www.open-mpi.org/mtt/reporter.php?do_redir=293</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you get a correct MPI install section for mpich2?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 28, 2007, at 9:05 AM, Tim Prins wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am working with the jms branch, and when trying to use mpich2,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the following submit error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** WARNING: MTTDatabase server notice: mpi_install_section_name is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      mtt database.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      MTTDatabase server notice: number_of_results is not in mtt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; database.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      MTTDatabase server notice: phase is not in mtt database.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      MTTDatabase server notice: test_type is not in mtt database.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      MTTDatabase server notice: test_build_section_name is not in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      database.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      MTTDatabase server notice: variant is not in mtt database.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      MTTDatabase server notice: command is not in mtt database.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      MTTDatabase server notice: fields is not in mtt database.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      MTTDatabase server notice: resource_manager is not in mtt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; database.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      MTT submission for test run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      MTTDatabase server notice: Invalid test_build_id (47368)  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; given.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Guessing that it should be -1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      MTTDatabase server error: ERROR: Unable to find a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; test_build to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      associate with this test_run.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      MTTDatabase abort: (Tried to send HTTP error) 400
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      MTTDatabase abort:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      No test_build associated with this test_run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** WARNING: MTTDatabase did not get a serial; phases will be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; isolated from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      each other in the reports
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Reported to MTTDatabase: 1 successful submit, 0 failed submits
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (total of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    12 results)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This happens for each test run section.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
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
<li><strong>Next message:</strong> <a href="0379.php">Jeff Squyres: "Re: [MTT users] Please, forward this question to open-mpi developers"</a>
<li><strong>Previous message:</strong> <a href="0377.php">Jeff Squyres: "Re: [MTT users] Database submit error"</a>
<li><strong>In reply to:</strong> <a href="0377.php">Jeff Squyres: "Re: [MTT users] Database submit error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0380.php">Josh Hursey: "Re: [MTT users] Database submit error"</a>
<li><strong>Reply:</strong> <a href="0380.php">Josh Hursey: "Re: [MTT users] Database submit error"</a>
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
