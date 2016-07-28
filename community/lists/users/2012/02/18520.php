<?
$subject_val = "Re: [OMPI users] Problems with gridengine integration on RHEL 6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 17 14:42:40 2012" -->
<!-- isoreceived="20120217194240" -->
<!-- sent="Fri, 17 Feb 2012 11:42:24 -0800" -->
<!-- isosent="20120217194224" -->
<!-- name="Brian McNally" -->
<!-- email="bmcnally_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with gridengine integration on RHEL 6" -->
<!-- id="4F3EADA0.4030105_at_uw.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="871upvm419.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>From:</strong> Brian McNally (<em>bmcnally_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-17 14:42:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18521.php">Ralph Castain: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Previous message:</strong> <a href="18519.php">Jingcha Joba: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>In reply to:</strong> <a href="18504.php">Dave Love: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18521.php">Ralph Castain: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Reply:</strong> <a href="18521.php">Ralph Castain: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave,
<br>
<p>Thanks for the suggestion, adding &quot;-mca plm ^rshd&quot; did force mpirun to 
<br>
spawn things via qrsh rather than SSH. My problem is solved!
<br>
<p><pre>
--
Brian McNally
On 02/16/2012 03:05 AM, Dave Love wrote:
&gt; Brian McNally&lt;bmcnally_at_[hidden]&gt;  writes:
&gt;
&gt;&gt; Hi Dave,
&gt;&gt;
&gt;&gt; I looked through the INSTALL, VERSION, NEWS, and README files in the
&gt;&gt; 1.5.4 openmpi tarball but didn't see what you were referring to.
&gt;
&gt; I can't access the web site, but there's an item in the notes on the
&gt; download page about the bug.  It must also be in the mail archive in a
&gt; thread with me included.
&gt;
&gt;&gt; Are
&gt;&gt; you suggesting that I launch mpirun similar to this?
&gt;&gt;
&gt;&gt;     mpirun -mca plm ^rshd ...?
&gt;
&gt; Yes, or put it in openmpi-mca-params.conf.  It's harmless with 1.4.
&gt;
&gt;&gt; What I meant by &quot;the same parallel environment setup&quot; was that the PE
&gt;&gt; in SGE was defined the same way:
&gt;&gt;
&gt;&gt; $ qconf -sp orte
&gt;&gt; pe_name            orte
&gt;&gt; slots              9999
&gt;&gt; user_lists         NONE
&gt;&gt; xuser_lists        NONE
&gt;&gt; start_proc_args    /bin/true
&gt;&gt; stop_proc_args     /bin/true
&gt;&gt; allocation_rule    $round_robin
&gt;&gt; control_slaves     TRUE
&gt;&gt; job_is_first_task  FALSE
&gt;&gt; urgency_slots      min
&gt;&gt; accounting_summary FALSE
&gt;&gt;
&gt;&gt; Even though I have RHEL 5 and RHEL 6 nodes in the same cluster they
&gt;&gt; never run the same MPI job; it's always either all RHEL 5 nodes or all
&gt;&gt; RHEL 6.
&gt;
&gt; OK.  (I'd expect a separate PE for each node set to enforce that.)
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18521.php">Ralph Castain: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Previous message:</strong> <a href="18519.php">Jingcha Joba: "Re: [OMPI users] Problem running an mpi applicatio&#226;&#128;&#139;n on nodes with more than one interface"</a>
<li><strong>In reply to:</strong> <a href="18504.php">Dave Love: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18521.php">Ralph Castain: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Reply:</strong> <a href="18521.php">Ralph Castain: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
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
