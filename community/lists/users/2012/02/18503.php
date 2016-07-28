<?
$subject_val = "Re: [OMPI users] Problems with gridengine integration on RHEL 6";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 20:04:07 2012" -->
<!-- isoreceived="20120216010407" -->
<!-- sent="Wed, 15 Feb 2012 17:00:11 -0800" -->
<!-- isosent="20120216010011" -->
<!-- name="Brian McNally" -->
<!-- email="bmcnally_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with gridengine integration on RHEL 6" -->
<!-- id="4F3C551B.5010808_at_uw.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="95C83C18-FA08-4702-A1FF-60F3DFC5C22A_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2012-02-15 20:00:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18504.php">Dave Love: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Previous message:</strong> <a href="18502.php">Reuti: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>In reply to:</strong> <a href="18502.php">Reuti: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18504.php">Dave Love: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Reply:</strong> <a href="18504.php">Dave Love: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Dave,
<br>
<p>I looked through the INSTALL, VERSION, NEWS, and README files in the 
<br>
1.5.4 openmpi tarball but didn't see what you were referring to. Are you 
<br>
suggesting that I launch mpirun similar to this?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun -mca plm ^rshd ...?
<br>
<p>What I meant by &quot;the same parallel environment setup&quot; was that the PE in 
<br>
SGE was defined the same way:
<br>
<p>$ qconf -sp orte
<br>
pe_name            orte
<br>
slots              9999
<br>
user_lists         NONE
<br>
xuser_lists        NONE
<br>
start_proc_args    /bin/true
<br>
stop_proc_args     /bin/true
<br>
allocation_rule    $round_robin
<br>
control_slaves     TRUE
<br>
job_is_first_task  FALSE
<br>
urgency_slots      min
<br>
accounting_summary FALSE
<br>
<p>Even though I have RHEL 5 and RHEL 6 nodes in the same cluster they 
<br>
never run the same MPI job; it's always either all RHEL 5 nodes or all 
<br>
RHEL 6.
<br>
<p><pre>
--
Brian McNally
On 02/15/2012 04:08 PM, Reuti wrote:
&gt; Am 16.02.2012 um 00:41 schrieb Dave Love:
&gt;
&gt;&gt; Brian McNally&lt;bmcnally_at_[hidden]&gt;  writes:
&gt;&gt;
&gt;&gt;&gt; Hello Open MPI community,
&gt;&gt;&gt;
&gt;&gt;&gt; I'm running the openmpi 1.5.3 package as provided by Redhat Enterprise
&gt;&gt;&gt; Linux 6, along with SGE 6.2u3. I've discovered that under RHEL 5 orted
&gt;&gt;&gt; gets spawned via qrsh and under RHEL 6 orted gets spanwed via
&gt;&gt;&gt; SSH. This is happening in the same cluster environment with the same
&gt;&gt;&gt; parallel environment setup. I want orted to get spawned via qrsh
&gt;&gt;&gt; because we impose memory limits if a job is spawned through SSH.
&gt;&gt;
&gt;&gt; [I'd have thought you'd want qrsh to get tight integration regardless.]
&gt;&gt;
&gt;&gt;&gt; I cannot determine WHY the behavior is different from RHEL 5 to RHEL
&gt;&gt;&gt; 6. In the former I'm using the openmpi 1.4.3 package, in the latter
&gt;&gt;&gt; I'm using openmpi 1.5.3. Both are supposedly built to support the
&gt;&gt;&gt; gridengine ras.
&gt;&gt;
&gt;&gt; See the release notes for 1.5.4.  The workaround I was given is
&gt;&gt;   plm = ^rshd
&gt;
&gt; Aha, thx for reminding me of it - so it's still broken.
&gt;
&gt; -- Reuti
&gt;
&gt;
&gt;&gt; Does &quot;the same parallel environment setup&quot; mean mixing 1.4 and 1.5?  I
&gt;&gt; thought they weren't binary compatible.
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="18504.php">Dave Love: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Previous message:</strong> <a href="18502.php">Reuti: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>In reply to:</strong> <a href="18502.php">Reuti: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18504.php">Dave Love: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Reply:</strong> <a href="18504.php">Dave Love: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
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
