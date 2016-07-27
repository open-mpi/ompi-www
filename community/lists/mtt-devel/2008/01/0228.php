<?
$subject_val = "Re: [MTT devel] Reporter Slowness";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 17:09:09 2008" -->
<!-- isoreceived="20080130220909" -->
<!-- sent="Wed, 30 Jan 2008 17:09:07 -0500" -->
<!-- isosent="20080130220907" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Reporter Slowness" -->
<!-- id="AB3C5179-7DD7-4344-A5C7-79D2E07A0251_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6EBD5FA3-9246-437A-8197-056AEF6E63C1_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-30 17:09:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0229.php">Josh Hursey: "Re: [MTT devel] Reporter Slowness"</a>
<li><strong>Previous message:</strong> <a href="0227.php">Jeff Squyres: "Re: [MTT devel] Reporter Slowness"</a>
<li><strong>In reply to:</strong> <a href="0227.php">Jeff Squyres: "Re: [MTT devel] Reporter Slowness"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0229.php">Josh Hursey: "Re: [MTT devel] Reporter Slowness"</a>
<li><strong>Reply:</strong> <a href="0229.php">Josh Hursey: "Re: [MTT devel] Reporter Slowness"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've started the script running.
<br>
<p>Below is a short version, and a trilogy of the gory details. I wanted  
<br>
to write up the details so if it ever happens again to us (or someone  
<br>
else) they can see what we did to fix it.
<br>
<p><p>The Short Version:
<br>
------------------
<br>
The Slowness(tm) was caused by the recent shifting of data in the  
<br>
database to resolve the partition table problems seen earlier this  
<br>
month.
<br>
<p>The bad news is that it will take about 14 hours to finish.
<br>
<p>The good news is that I confirmed that this will fix the performance  
<br>
problem that we are seeing. In the small run this technique reduce the  
<br>
'24 hour' query execution time from ~40 sec back down to ~8 sec.
<br>
<p>This may slow down client submits this evening, but should not prevent  
<br>
them from being able to submit. The 'DELETE' operations do not require  
<br>
an exclusive lock, so the 'INSERT' operations should proceed fine  
<br>
concurrently. The 'INSERT' operations will need to be blocked while  
<br>
the 'VACUUM FULL' operation is progressing since it *does* require an  
<br>
exclusive lock. The 'INSERT' operations will proceed normally once  
<br>
this lock is released resulting in a temporary slowdown for clients  
<br>
that submit during these windows of time (about 20 min or so).
<br>
<p><p><p>The Details: Part 1: What I did earlier this week:
<br>
(more than you wanted to know for prosperity purposes)
<br>
--------------------------------------------------
<br>
The original problem was that the master partition tables accidently  
<br>
started storing data because I forgot to load the 2008 partition  
<br>
tables into the database before the first of the year. :( So we loaded  
<br>
the partition tables, but we still needed to move the misplaced data.
<br>
<p>To move the misplaced data we have to duplicate the row (so it is  
<br>
stored properly this time), but we also need to take care in assigning  
<br>
row IDs to the duplicate rows. We cannot give the dup'ed rows the same  
<br>
ID or we will be unable to differentiate the original and the dup'ed  
<br>
row. So I created a dummy table for mpi_install/test_build/test_run to  
<br>
translate between the orig row ID and the dup'ed row ID. I used the  
<br>
nextval on the sequence to populate the values for the dup'ed rows in  
<br>
the dummy table.
<br>
<p>Now that I had translation I joined the dummy table with it's  
<br>
corresponding master table (e.g. &quot;mpi_install join mpi_install_dummy  
<br>
on mpi_install.mpi_install_id = mpi_install_dummy.orig_id&quot;), and  
<br>
instead of selecting the original ID from the dummy table I selected  
<br>
the new dup'ed ID. I inserted this selection back in to the  
<br>
mpi_install table. (Cool little trick that PostgreSQL lets you get  
<br>
away with sometimes).
<br>
<p>Once I have duplicated all of the effected rows, then I updated all  
<br>
references to the original ID and set it to the duplicated ID in the  
<br>
test_build/test_run tables. This removed all internal reference to the  
<br>
original ID, and replaced it with the duplicated so we retain  
<br>
integrity of the data.
<br>
<p>Once I have verified that no tables references the original row I  
<br>
delete those rows from the mpi_install/test_build/test_run tables.
<br>
<p><p><p>The Details: Part 2: What I forgot to do:
<br>
-----------------------------------------
<br>
When rows are deleted from PostgreSQL the disk space used continues to  
<br>
be reserved for this table, and is not reclaimed unless you 'VACUUM  
<br>
FULL' this table. PostgreSQL does this for many good reasons which are  
<br>
described in their documentation. However in the case of the master  
<br>
partition tables we want them to release all of their disk space since  
<br>
we should never be storing data in this particular table.
<br>
<p>I did a 'VACUUM FULL' on the mpi_install and test_build tables  
<br>
originally, but did not do it on the test_run table since this  
<br>
operation requires an exclusive lock on the table and can take a long  
<br>
time to finish. Further I only completed about 1% of the deletions for  
<br>
test_run before I stopped this operation choosing to wait for the  
<br>
weekend since it will take a long time to complete.
<br>
<p>By only deleting part of the test_run master table (which contained  
<br>
about 1.2 Million rows) this caused the queries on this table to slow  
<br>
down considerably. The Query Planner estimated the execution of the  
<br>
'24 hour' query at 322,924 and it completed in about 40 seconds. I ran  
<br>
'VACUUM FULL test_run' which only Vacuums the master table, and then  
<br>
re-ran the query. This time the Query Planner estimated the execution  
<br>
at 151,430 and it completed in about 8 seconds.
<br>
<p><p><p>The Details: Part 3: What I am doing now:
<br>
-----------------------------------------
<br>
Currently I am deleting the rest of the old rows from test_run. There  
<br>
are approx. 1.2 million rows, and this should complete in about 13  
<br>
hours.
<br>
<p>After every 100 K deletions I'm running a 'VACUUM FULL' on test_run.  
<br>
My hope is that by doing it this way instead of just once at the end  
<br>
of all 1.2 M will cause each one to take less time. I hope this will  
<br>
limit the interruptions seen by the MTT clients submitting results  
<br>
this evening.
<br>
<p>I'll send email once the script is complete, and things seem back to  
<br>
normal.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Jan 30, 2008, at 4:12 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I'd go ahead and do it now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 30, 2008, at 4:04 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems the reporter has gotten slower :( Now it is working in the
</span><br>
<span class="quotelev2">&gt;&gt; range of 40 - 50 seconds for the 24 hour query which is not
</span><br>
<span class="quotelev2">&gt;&gt; reasonable. This should be much lower.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looking at the explain of the query I have some ideas on how to make
</span><br>
<span class="quotelev2">&gt;&gt; things better, but this will slow things down a for a while as I do
</span><br>
<span class="quotelev2">&gt;&gt; this work (maybe a day or two, can't say for sure).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The question is should I wait until Friday COB to start this or  
</span><br>
<span class="quotelev2">&gt;&gt; should
</span><br>
<span class="quotelev2">&gt;&gt; I do it immediately?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me know,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
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
<li><strong>Next message:</strong> <a href="0229.php">Josh Hursey: "Re: [MTT devel] Reporter Slowness"</a>
<li><strong>Previous message:</strong> <a href="0227.php">Jeff Squyres: "Re: [MTT devel] Reporter Slowness"</a>
<li><strong>In reply to:</strong> <a href="0227.php">Jeff Squyres: "Re: [MTT devel] Reporter Slowness"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0229.php">Josh Hursey: "Re: [MTT devel] Reporter Slowness"</a>
<li><strong>Reply:</strong> <a href="0229.php">Josh Hursey: "Re: [MTT devel] Reporter Slowness"</a>
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
