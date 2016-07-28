<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  1 14:03:34 2007" -->
<!-- isoreceived="20070301190334" -->
<!-- sent="Thu, 1 Mar 2007 14:03:27 -0500" -->
<!-- isosent="20070301190327" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] script to resubmit results" -->
<!-- id="20070301190326.GC10113_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6DBD3B28-C6CB-46BC-BDFC-13408B1ED37F_at_cisco.com" -->
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
<strong>Date:</strong> 2007-03-01 14:03:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0283.php">Jeff Squyres: "Re: [MTT users] script to resubmit results"</a>
<li><strong>Previous message:</strong> <a href="0281.php">Jeff Squyres: "Re: [MTT users] script to resubmit results"</a>
<li><strong>In reply to:</strong> <a href="0281.php">Jeff Squyres: "Re: [MTT users] script to resubmit results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0283.php">Jeff Squyres: "Re: [MTT users] script to resubmit results"</a>
<li><strong>Reply:</strong> <a href="0283.php">Jeff Squyres: "Re: [MTT users] script to resubmit results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good point.  If the mtt client couldn't contact the
<br>
database, then Test Builds and Test Runs will not contain
<br>
their required mpi_install and test_build ID's (you'll see
<br>
FOREIGN KEY constraint errors in the output).
<br>
<p>Not being able to contact the database is an Abort condition
<br>
at startup, but we need to sit in a waiting loop if we can't
<br>
get these prior phase ID's, right?
<br>
<p>OR to avoid the waiting loop *and* make it robust, we could
<br>
point to a filename containing the data of a prior phase
<br>
submission in the absence of database connectivity.  Then we
<br>
would need to add logic to mtt-submit so that we re-submit
<br>
prior phases in cases of missing prior phase ID's.
<br>
<p><p>On Thu, Mar/01/2007 01:20:53PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Ethan -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Will this work to submit results for phases that don't have  
</span><br>
<span class="quotelev1">&gt; corresponding prior phase IDs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I.e., if I did an MPI install, Test build, and Test run phases -- and  
</span><br>
<span class="quotelev1">&gt; none of them were successfully submitted -- will submitted the test  
</span><br>
<span class="quotelev1">&gt; build/run data work, since they don't have a corresponding ID for the  
</span><br>
<span class="quotelev1">&gt; MPI install phase?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 1, 2007, at 12:40 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I just added a client/mtt-submit script to the mtt/trunk SVN
</span><br>
<span class="quotelev2">&gt; &gt; repository which will help you.  You'll need to use it like
</span><br>
<span class="quotelev2">&gt; &gt; this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ client/mtt-submit -f '/directory/where/results/are/*.txt' -g -u  
</span><br>
<span class="quotelev2">&gt; &gt; cisco -p &lt;cisco-password&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /directory/where/results/are/ is specified in your INI file
</span><br>
<span class="quotelev2">&gt; &gt; as mttdatabase_debug_filename.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; CAUTION: Use this script with care!  For example, you could
</span><br>
<span class="quotelev2">&gt; &gt; end up with duplicate test results in the database if you
</span><br>
<span class="quotelev2">&gt; &gt; used mtt-submit twice on the same file.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Ethan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Mar/01/2007 08:40:17AM, Bill D'amico wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    We had a proxy server fail during the night and may have had some
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    results get lost. Jeff asked me to check for existence of a
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    resubmission script - is there one, and if so where is it?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Bill D'Amico
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    [1]bdamico_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Server virtualization Business Unit
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; References
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    1. mailto:bdamico_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0283.php">Jeff Squyres: "Re: [MTT users] script to resubmit results"</a>
<li><strong>Previous message:</strong> <a href="0281.php">Jeff Squyres: "Re: [MTT users] script to resubmit results"</a>
<li><strong>In reply to:</strong> <a href="0281.php">Jeff Squyres: "Re: [MTT users] script to resubmit results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0283.php">Jeff Squyres: "Re: [MTT users] script to resubmit results"</a>
<li><strong>Reply:</strong> <a href="0283.php">Jeff Squyres: "Re: [MTT users] script to resubmit results"</a>
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
