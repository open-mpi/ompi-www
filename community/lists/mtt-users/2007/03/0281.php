<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  1 13:21:21 2007" -->
<!-- isoreceived="20070301182121" -->
<!-- sent="Thu, 1 Mar 2007 13:20:53 -0500" -->
<!-- isosent="20070301182053" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] script to resubmit results" -->
<!-- id="6DBD3B28-C6CB-46BC-BDFC-13408B1ED37F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070301174024.GA10113_at_sun.com" -->
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
<strong>Date:</strong> 2007-03-01 13:20:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0282.php">Ethan Mallove: "Re: [MTT users] script to resubmit results"</a>
<li><strong>Previous message:</strong> <a href="0280.php">Ethan Mallove: "Re: [MTT users] script to resubmit results"</a>
<li><strong>In reply to:</strong> <a href="0280.php">Ethan Mallove: "Re: [MTT users] script to resubmit results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0282.php">Ethan Mallove: "Re: [MTT users] script to resubmit results"</a>
<li><strong>Reply:</strong> <a href="0282.php">Ethan Mallove: "Re: [MTT users] script to resubmit results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ethan -
<br>
<p>Will this work to submit results for phases that don't have  
<br>
corresponding prior phase IDs?
<br>
<p>I.e., if I did an MPI install, Test build, and Test run phases -- and  
<br>
none of them were successfully submitted -- will submitted the test  
<br>
build/run data work, since they don't have a corresponding ID for the  
<br>
MPI install phase?
<br>
<p><p>On Mar 1, 2007, at 12:40 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; I just added a client/mtt-submit script to the mtt/trunk SVN
</span><br>
<span class="quotelev1">&gt; repository which will help you.  You'll need to use it like
</span><br>
<span class="quotelev1">&gt; this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ client/mtt-submit -f '/directory/where/results/are/*.txt' -g -u  
</span><br>
<span class="quotelev1">&gt; cisco -p &lt;cisco-password&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /directory/where/results/are/ is specified in your INI file
</span><br>
<span class="quotelev1">&gt; as mttdatabase_debug_filename.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CAUTION: Use this script with care!  For example, you could
</span><br>
<span class="quotelev1">&gt; end up with duplicate test results in the database if you
</span><br>
<span class="quotelev1">&gt; used mtt-submit twice on the same file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Mar/01/2007 08:40:17AM, Bill D'amico wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    We had a proxy server fail during the night and may have had some
</span><br>
<span class="quotelev2">&gt;&gt;    results get lost. Jeff asked me to check for existence of a
</span><br>
<span class="quotelev2">&gt;&gt;    resubmission script - is there one, and if so where is it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    --
</span><br>
<span class="quotelev2">&gt;&gt;    Bill D'Amico
</span><br>
<span class="quotelev2">&gt;&gt;    [1]bdamico_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;    Server virtualization Business Unit
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; References
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    1. mailto:bdamico_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="0282.php">Ethan Mallove: "Re: [MTT users] script to resubmit results"</a>
<li><strong>Previous message:</strong> <a href="0280.php">Ethan Mallove: "Re: [MTT users] script to resubmit results"</a>
<li><strong>In reply to:</strong> <a href="0280.php">Ethan Mallove: "Re: [MTT users] script to resubmit results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0282.php">Ethan Mallove: "Re: [MTT users] script to resubmit results"</a>
<li><strong>Reply:</strong> <a href="0282.php">Ethan Mallove: "Re: [MTT users] script to resubmit results"</a>
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
