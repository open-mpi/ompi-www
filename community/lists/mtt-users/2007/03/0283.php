<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  1 14:14:30 2007" -->
<!-- isoreceived="20070301191430" -->
<!-- sent="Thu, 1 Mar 2007 14:14:06 -0500" -->
<!-- isosent="20070301191406" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] script to resubmit results" -->
<!-- id="1CDEC920-CF63-4C07-B002-EEB50B21AD10_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070301190326.GC10113_at_sun.com" -->
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
<strong>Date:</strong> 2007-03-01 14:14:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0284.php">Jeff Squyres: "[MTT users] Fwd: [all-osl-users] Migration of milliways"</a>
<li><strong>Previous message:</strong> <a href="0282.php">Ethan Mallove: "Re: [MTT users] script to resubmit results"</a>
<li><strong>In reply to:</strong> <a href="0282.php">Ethan Mallove: "Re: [MTT users] script to resubmit results"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 1, 2007, at 2:03 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Good point.  If the mtt client couldn't contact the
</span><br>
<span class="quotelev1">&gt; database, then Test Builds and Test Runs will not contain
</span><br>
<span class="quotelev1">&gt; their required mpi_install and test_build ID's (you'll see
</span><br>
<span class="quotelev1">&gt; FOREIGN KEY constraint errors in the output).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not being able to contact the database is an Abort condition
</span><br>
<span class="quotelev1">&gt; at startup, but we need to sit in a waiting loop if we can't
</span><br>
<span class="quotelev1">&gt; get these prior phase ID's, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OR to avoid the waiting loop *and* make it robust, we could
</span><br>
<span class="quotelev1">&gt; point to a filename containing the data of a prior phase
</span><br>
<span class="quotelev1">&gt; submission in the absence of database connectivity.  Then we
</span><br>
<span class="quotelev1">&gt; would need to add logic to mtt-submit so that we re-submit
</span><br>
<span class="quotelev1">&gt; prior phases in cases of missing prior phase ID's.
</span><br>
<p>Yes, this is what I think would be best -- create a chain of data  
<br>
that was not submitted.  Then the re-submit tool would be able to  
<br>
grok the chain, get relevant ID numbers, paste them in downstream  
<br>
(or, more likely, submit early phases, and have downstream phases  
<br>
look upstream to get the relevant IDs -- just like it occurs in the  
<br>
MTT client).
<br>
<p>The more I think about this, the more that I think that having a  
<br>
&quot;submitted&quot; flag in the local meta data in the MTT client might be  
<br>
easiest.  This might reduce the amount of logic we have to write  
<br>
(i.e., the logic of grabbing the upstream phase IDs might be able to  
<br>
be re-used and be less susceptible to breakage if we change formats/ 
<br>
protocols in the future -- i.e., it would only be 1 place to update,  
<br>
not 2).
<br>
<p>I know we have talked about this concept before, but it was always a  
<br>
time/monkeys argument to actually implement it.
<br>
<p><a href="https://svn.open-mpi.org/trac/mtt/ticket/158">https://svn.open-mpi.org/trac/mtt/ticket/158</a>
<br>
<p>(not quite the &quot;submitted&quot; flag idea, but just the desire to be able  
<br>
to resubmit)
<br>
<p>Also similar to
<br>
<p><a href="https://svn.open-mpi.org/trac/mtt/ticket/32">https://svn.open-mpi.org/trac/mtt/ticket/32</a>
<br>
<p>A short term fix for Cisco might be to be able to try multiple  
<br>
proxies in the event of &quot;connection refused&quot; (we have multiple  
<br>
proxies available -- probably greatly reduces the chances of failure  
<br>
if we have the ability to fail over to try others).  This does not  
<br>
help SVN checkouts, though -- we cannot configure those [easily] via  
<br>
the INI file.  That would take a bit more work (SVN checkouts do not  
<br>
obey environment variable proxy settings -- you have to change a SVN  
<br>
config file).
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Mar/01/2007 01:20:53PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ethan -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Will this work to submit results for phases that don't have
</span><br>
<span class="quotelev2">&gt;&gt; corresponding prior phase IDs?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I.e., if I did an MPI install, Test build, and Test run phases -- and
</span><br>
<span class="quotelev2">&gt;&gt; none of them were successfully submitted -- will submitted the test
</span><br>
<span class="quotelev2">&gt;&gt; build/run data work, since they don't have a corresponding ID for the
</span><br>
<span class="quotelev2">&gt;&gt; MPI install phase?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 1, 2007, at 12:40 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just added a client/mtt-submit script to the mtt/trunk SVN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; repository which will help you.  You'll need to use it like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ client/mtt-submit -f '/directory/where/results/are/*.txt' -g -u
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cisco -p &lt;cisco-password&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /directory/where/results/are/ is specified in your INI file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as mttdatabase_debug_filename.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CAUTION: Use this script with care!  For example, you could
</span><br>
<span class="quotelev3">&gt;&gt;&gt; end up with duplicate test results in the database if you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used mtt-submit twice on the same file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Mar/01/2007 08:40:17AM, Bill D'amico wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    We had a proxy server fail during the night and may have had  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    results get lost. Jeff asked me to check for existence of a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    resubmission script - is there one, and if so where is it?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Bill D'Amico
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    [1]bdamico_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Server virtualization Business Unit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; References
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    1. mailto:bdamico_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0284.php">Jeff Squyres: "[MTT users] Fwd: [all-osl-users] Migration of milliways"</a>
<li><strong>Previous message:</strong> <a href="0282.php">Ethan Mallove: "Re: [MTT users] script to resubmit results"</a>
<li><strong>In reply to:</strong> <a href="0282.php">Ethan Mallove: "Re: [MTT users] script to resubmit results"</a>
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
