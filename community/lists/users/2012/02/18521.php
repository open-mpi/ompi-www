<?
$subject_val = "Re: [OMPI users] Problems with gridengine integration on RHEL 6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 17 16:28:30 2012" -->
<!-- isoreceived="20120217212830" -->
<!-- sent="Fri, 17 Feb 2012 13:28:25 -0800" -->
<!-- isosent="20120217212825" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with gridengine integration on RHEL 6" -->
<!-- id="CAMD57ofn2PN0LkJ9Cz4CYdwviJvRGpVf2KeSjJu1yoyg0BK_aw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F3EADA0.4030105_at_uw.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with gridengine integration on RHEL 6<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-17 16:28:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18522.php">Jeff Squyres: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>Previous message:</strong> <a href="18520.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>In reply to:</strong> <a href="18520.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys
<br>
<p>Our apologies - the rshd launcher isn't supposed to be in a release branch.
<br>
We've removed it for the next release.
<br>
<p>Sorry for the problem... :-(
<br>
<p><p>On Fri, Feb 17, 2012 at 11:42 AM, Brian McNally &lt;bmcnally_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dave,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the suggestion, adding &quot;-mca plm ^rshd&quot; did force mpirun to
</span><br>
<span class="quotelev1">&gt; spawn things via qrsh rather than SSH. My problem is solved!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Brian McNally
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 02/16/2012 03:05 AM, Dave Love wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian McNally&lt;bmcnally_at_[hidden]&gt;  writes:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi Dave,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I looked through the INSTALL, VERSION, NEWS, and README files in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.5.4 openmpi tarball but didn't see what you were referring to.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can't access the web site, but there's an item in the notes on the
</span><br>
<span class="quotelev2">&gt;&gt; download page about the bug.  It must also be in the mail archive in a
</span><br>
<span class="quotelev2">&gt;&gt; thread with me included.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you suggesting that I launch mpirun similar to this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mpirun -mca plm ^rshd ...?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, or put it in openmpi-mca-params.conf.  It's harmless with 1.4.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  What I meant by &quot;the same parallel environment setup&quot; was that the PE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in SGE was defined the same way:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ qconf -sp orte
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pe_name            orte
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slots              9999
</span><br>
<span class="quotelev3">&gt;&gt;&gt; user_lists         NONE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xuser_lists        NONE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; start_proc_args    /bin/true
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stop_proc_args     /bin/true
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocation_rule    $round_robin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; control_slaves     TRUE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; urgency_slots      min
</span><br>
<span class="quotelev3">&gt;&gt;&gt; accounting_summary FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Even though I have RHEL 5 and RHEL 6 nodes in the same cluster they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; never run the same MPI job; it's always either all RHEL 5 nodes or all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RHEL 6.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OK.  (I'd expect a separate PE for each node set to enforce that.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ______________________________**_________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; ______________________________**_________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18521/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18522.php">Jeff Squyres: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>Previous message:</strong> <a href="18520.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>In reply to:</strong> <a href="18520.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
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
