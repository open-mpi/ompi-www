<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 28 09:05:11 2007" -->
<!-- isoreceived="20070828130511" -->
<!-- sent="Tue, 28 Aug 2007 09:05:12 -0400" -->
<!-- isosent="20070828130512" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="[MTT users] Database submit error" -->
<!-- id="46D41D88.5090808_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Date:</strong> 2007-08-28 09:05:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0375.php">Jeff Squyres: "Re: [MTT users] Database submit error"</a>
<li><strong>Previous message:</strong> <a href="0373.php">Shai Venter: "[MTT users] Please, forward this question to open-mpi developers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0375.php">Jeff Squyres: "Re: [MTT users] Database submit error"</a>
<li><strong>Reply:</strong> <a href="0375.php">Jeff Squyres: "Re: [MTT users] Database submit error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I am working with the jms branch, and when trying to use mpich2, I get 
<br>
the following submit error:
<br>
<p>*** WARNING: MTTDatabase server notice: mpi_install_section_name is not in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mtt database.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase server notice: number_of_results is not in mtt database.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase server notice: phase is not in mtt database.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase server notice: test_type is not in mtt database.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase server notice: test_build_section_name is not in mtt
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;database.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase server notice: variant is not in mtt database.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase server notice: command is not in mtt database.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase server notice: fields is not in mtt database.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase server notice: resource_manager is not in mtt database.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTT submission for test run
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase server notice: Invalid test_build_id (47368) given.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Guessing that it should be -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase server error: ERROR: Unable to find a test_build to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;associate with this test_run.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase abort: (Tried to send HTTP error) 400
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTTDatabase abort:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No test_build associated with this test_run
<br>
*** WARNING: MTTDatabase did not get a serial; phases will be isolated from
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;each other in the reports
<br>
<span class="quotelev2"> &gt;&gt; Reported to MTTDatabase: 1 successful submit, 0 failed submits (total of
</span><br>
&nbsp;&nbsp;&nbsp;12 results)
<br>
<p>This happens for each test run section.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0375.php">Jeff Squyres: "Re: [MTT users] Database submit error"</a>
<li><strong>Previous message:</strong> <a href="0373.php">Shai Venter: "[MTT users] Please, forward this question to open-mpi developers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0375.php">Jeff Squyres: "Re: [MTT users] Database submit error"</a>
<li><strong>Reply:</strong> <a href="0375.php">Jeff Squyres: "Re: [MTT users] Database submit error"</a>
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
