<?
$subject_val = "Re: [MTT devel] Reporter Slowness";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 31 12:57:45 2008" -->
<!-- isoreceived="20080131175745" -->
<!-- sent="Thu, 31 Jan 2008 12:57:24 -0500" -->
<!-- isosent="20080131175724" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Reporter Slowness" -->
<!-- id="B48F3083-062D-4121-B1A8-A1B33AEF4A24_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0EB358AF-B4EA-43D6-9BDD-CBBDC1A5B58D_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [MTT devel] Reporter Slowness<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-31 12:57:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0231.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1147"</a>
<li><strong>Previous message:</strong> <a href="0229.php">Josh Hursey: "Re: [MTT devel] Reporter Slowness"</a>
<li><strong>In reply to:</strong> <a href="0229.php">Josh Hursey: "Re: [MTT devel] Reporter Slowness"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Josh!
<br>
<p>On Jan 31, 2008, at 12:00 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Ok so the script is done. It took a bit longer than I had expected,
</span><br>
<span class="quotelev1">&gt; but when it finished then things sped back up ('24 hours' of data in 6
</span><br>
<span class="quotelev1">&gt; sec). There are a few more maintenance operations I want to run which
</span><br>
<span class="quotelev1">&gt; will help out a bit more, but I'll push those to this weekend.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your patience, and let me know if it feels sluggish again.
</span><br>
<span class="quotelev1">&gt; So as of this email things should be back to normal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 30, 2008, at 5:09 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've started the script running.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Below is a short version, and a trilogy of the gory details. I wanted
</span><br>
<span class="quotelev2">&gt;&gt; to write up the details so if it ever happens again to us (or someone
</span><br>
<span class="quotelev2">&gt;&gt; else) they can see what we did to fix it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The Short Version:
</span><br>
<span class="quotelev2">&gt;&gt; ------------------
</span><br>
<span class="quotelev2">&gt;&gt; The Slowness(tm) was caused by the recent shifting of data in the
</span><br>
<span class="quotelev2">&gt;&gt; database to resolve the partition table problems seen earlier this
</span><br>
<span class="quotelev2">&gt;&gt; month.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The bad news is that it will take about 14 hours to finish.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The good news is that I confirmed that this will fix the performance
</span><br>
<span class="quotelev2">&gt;&gt; problem that we are seeing. In the small run this technique reduce  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; '24 hour' query execution time from ~40 sec back down to ~8 sec.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may slow down client submits this evening, but should not  
</span><br>
<span class="quotelev2">&gt;&gt; prevent
</span><br>
<span class="quotelev2">&gt;&gt; them from being able to submit. The 'DELETE' operations do not  
</span><br>
<span class="quotelev2">&gt;&gt; require
</span><br>
<span class="quotelev2">&gt;&gt; an exclusive lock, so the 'INSERT' operations should proceed fine
</span><br>
<span class="quotelev2">&gt;&gt; concurrently. The 'INSERT' operations will need to be blocked while
</span><br>
<span class="quotelev2">&gt;&gt; the 'VACUUM FULL' operation is progressing since it *does* require an
</span><br>
<span class="quotelev2">&gt;&gt; exclusive lock. The 'INSERT' operations will proceed normally once
</span><br>
<span class="quotelev2">&gt;&gt; this lock is released resulting in a temporary slowdown for clients
</span><br>
<span class="quotelev2">&gt;&gt; that submit during these windows of time (about 20 min or so).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The Details: Part 1: What I did earlier this week:
</span><br>
<span class="quotelev2">&gt;&gt; (more than you wanted to know for prosperity purposes)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; The original problem was that the master partition tables accidently
</span><br>
<span class="quotelev2">&gt;&gt; started storing data because I forgot to load the 2008 partition
</span><br>
<span class="quotelev2">&gt;&gt; tables into the database before the first of the year. :( So we  
</span><br>
<span class="quotelev2">&gt;&gt; loaded
</span><br>
<span class="quotelev2">&gt;&gt; the partition tables, but we still needed to move the misplaced data.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To move the misplaced data we have to duplicate the row (so it is
</span><br>
<span class="quotelev2">&gt;&gt; stored properly this time), but we also need to take care in  
</span><br>
<span class="quotelev2">&gt;&gt; assigning
</span><br>
<span class="quotelev2">&gt;&gt; row IDs to the duplicate rows. We cannot give the dup'ed rows the  
</span><br>
<span class="quotelev2">&gt;&gt; same
</span><br>
<span class="quotelev2">&gt;&gt; ID or we will be unable to differentiate the original and the dup'ed
</span><br>
<span class="quotelev2">&gt;&gt; row. So I created a dummy table for mpi_install/test_build/test_run  
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; translate between the orig row ID and the dup'ed row ID. I used the
</span><br>
<span class="quotelev2">&gt;&gt; nextval on the sequence to populate the values for the dup'ed rows in
</span><br>
<span class="quotelev2">&gt;&gt; the dummy table.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now that I had translation I joined the dummy table with it's
</span><br>
<span class="quotelev2">&gt;&gt; corresponding master table (e.g. &quot;mpi_install join mpi_install_dummy
</span><br>
<span class="quotelev2">&gt;&gt; on mpi_install.mpi_install_id = mpi_install_dummy.orig_id&quot;), and
</span><br>
<span class="quotelev2">&gt;&gt; instead of selecting the original ID from the dummy table I selected
</span><br>
<span class="quotelev2">&gt;&gt; the new dup'ed ID. I inserted this selection back in to the
</span><br>
<span class="quotelev2">&gt;&gt; mpi_install table. (Cool little trick that PostgreSQL lets you get
</span><br>
<span class="quotelev2">&gt;&gt; away with sometimes).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Once I have duplicated all of the effected rows, then I updated all
</span><br>
<span class="quotelev2">&gt;&gt; references to the original ID and set it to the duplicated ID in the
</span><br>
<span class="quotelev2">&gt;&gt; test_build/test_run tables. This removed all internal reference to  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; original ID, and replaced it with the duplicated so we retain
</span><br>
<span class="quotelev2">&gt;&gt; integrity of the data.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Once I have verified that no tables references the original row I
</span><br>
<span class="quotelev2">&gt;&gt; delete those rows from the mpi_install/test_build/test_run tables.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The Details: Part 2: What I forgot to do:
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; When rows are deleted from PostgreSQL the disk space used continues  
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; be reserved for this table, and is not reclaimed unless you 'VACUUM
</span><br>
<span class="quotelev2">&gt;&gt; FULL' this table. PostgreSQL does this for many good reasons which  
</span><br>
<span class="quotelev2">&gt;&gt; are
</span><br>
<span class="quotelev2">&gt;&gt; described in their documentation. However in the case of the master
</span><br>
<span class="quotelev2">&gt;&gt; partition tables we want them to release all of their disk space  
</span><br>
<span class="quotelev2">&gt;&gt; since
</span><br>
<span class="quotelev2">&gt;&gt; we should never be storing data in this particular table.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I did a 'VACUUM FULL' on the mpi_install and test_build tables
</span><br>
<span class="quotelev2">&gt;&gt; originally, but did not do it on the test_run table since this
</span><br>
<span class="quotelev2">&gt;&gt; operation requires an exclusive lock on the table and can take a long
</span><br>
<span class="quotelev2">&gt;&gt; time to finish. Further I only completed about 1% of the deletions  
</span><br>
<span class="quotelev2">&gt;&gt; for
</span><br>
<span class="quotelev2">&gt;&gt; test_run before I stopped this operation choosing to wait for the
</span><br>
<span class="quotelev2">&gt;&gt; weekend since it will take a long time to complete.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; By only deleting part of the test_run master table (which contained
</span><br>
<span class="quotelev2">&gt;&gt; about 1.2 Million rows) this caused the queries on this table to slow
</span><br>
<span class="quotelev2">&gt;&gt; down considerably. The Query Planner estimated the execution of the
</span><br>
<span class="quotelev2">&gt;&gt; '24 hour' query at 322,924 and it completed in about 40 seconds. I  
</span><br>
<span class="quotelev2">&gt;&gt; ran
</span><br>
<span class="quotelev2">&gt;&gt; 'VACUUM FULL test_run' which only Vacuums the master table, and then
</span><br>
<span class="quotelev2">&gt;&gt; re-ran the query. This time the Query Planner estimated the execution
</span><br>
<span class="quotelev2">&gt;&gt; at 151,430 and it completed in about 8 seconds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The Details: Part 3: What I am doing now:
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Currently I am deleting the rest of the old rows from test_run. There
</span><br>
<span class="quotelev2">&gt;&gt; are approx. 1.2 million rows, and this should complete in about 13
</span><br>
<span class="quotelev2">&gt;&gt; hours.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After every 100 K deletions I'm running a 'VACUUM FULL' on test_run.
</span><br>
<span class="quotelev2">&gt;&gt; My hope is that by doing it this way instead of just once at the end
</span><br>
<span class="quotelev2">&gt;&gt; of all 1.2 M will cause each one to take less time. I hope this will
</span><br>
<span class="quotelev2">&gt;&gt; limit the interruptions seen by the MTT clients submitting results
</span><br>
<span class="quotelev2">&gt;&gt; this evening.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll send email once the script is complete, and things seem back to
</span><br>
<span class="quotelev2">&gt;&gt; normal.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 30, 2008, at 4:12 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd go ahead and do it now.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 30, 2008, at 4:04 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It seems the reporter has gotten slower :( Now it is working in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; range of 40 - 50 seconds for the 24 hour query which is not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reasonable. This should be much lower.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Looking at the explain of the query I have some ideas on how to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; things better, but this will slow things down a for a while as I do
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this work (maybe a day or two, can't say for sure).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The question is should I wait until Friday COB to start this or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; should
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I do it immediately?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Let me know,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="0231.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1147"</a>
<li><strong>Previous message:</strong> <a href="0229.php">Josh Hursey: "Re: [MTT devel] Reporter Slowness"</a>
<li><strong>In reply to:</strong> <a href="0229.php">Josh Hursey: "Re: [MTT devel] Reporter Slowness"</a>
<!-- nextthread="start" -->
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
