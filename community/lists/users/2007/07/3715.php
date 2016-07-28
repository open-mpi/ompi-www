<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 14:15:10 2007" -->
<!-- isoreceived="20070718181510" -->
<!-- sent="Wed, 18 Jul 2007 12:15:00 -0600" -->
<!-- isosent="20070718181500" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hanging followup" -->
<!-- id="C2C3B4C4.A0BA%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="480425.67297.qm_at_web57605.mail.re1.yahoo.com" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-18 14:15:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3716.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Previous message:</strong> <a href="3714.php">Ralph H Castain: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>In reply to:</strong> <a href="3713.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3716.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/18/07 11:46 AM, &quot;Bill Johnstone&quot; &lt;beejstone3_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; --- Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No, the session directory is created in the tmpdir - we don't create
</span><br>
<span class="quotelev2">&gt;&gt; anything anywhere else, nor do we write any executables anywhere.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the case where the TMPDIR env variable isn't specified, what is the
</span><br>
<span class="quotelev1">&gt; default assumed by Open MPI/orte?
</span><br>
<p>It rattles through a logic chain:
<br>
<p>1. ompi mca param value
<br>
<p>2. TMPDIR in environ
<br>
<p>3. TMP in environ
<br>
<p>4. default to /tmp just so we have something to work with...
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just out of curiosity: although I know you have different arch's on
</span><br>
<span class="quotelev2">&gt;&gt; your
</span><br>
<span class="quotelev2">&gt;&gt; nodes, the tests you are running are all executing on the same arch,
</span><br>
<span class="quotelev2">&gt;&gt; correct???
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, tests all execute on the same arch, although I am led to another
</span><br>
<span class="quotelev1">&gt; question.  Can I use a headnode of a particular arch, but in my mpirun
</span><br>
<span class="quotelev1">&gt; hostfile, specify only nodes of another arch, and launch from the
</span><br>
<span class="quotelev1">&gt; headnode?  In other words, no computation is done on the headnode of
</span><br>
<span class="quotelev1">&gt; arch A, all computation is done on nodes of arch B, but the job is
</span><br>
<span class="quotelev1">&gt; launched from the headnode -- would that be acceptable?
</span><br>
<p>As long as the prefix is set such that the correct binary executables can be
<br>
found, then you should be fine.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I should be clear that for the problem you are helping me with, *all*
</span><br>
<span class="quotelev1">&gt; the nodes involved are running the same arch, OS, compiler, system
</span><br>
<span class="quotelev1">&gt; libraries, etc.  The multiple arch question is for edification for the
</span><br>
<span class="quotelev1">&gt; future.
</span><br>
<p>No problem - I just wanted to eliminate one possible complication for now.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        
</span><br>
<span class="quotelev1">&gt; ______________________________________________________________________________
</span><br>
<span class="quotelev1">&gt; ______
</span><br>
<span class="quotelev1">&gt; Got a little couch potato?
</span><br>
<span class="quotelev1">&gt; Check out fun summer activities for kids.
</span><br>
<span class="quotelev1">&gt; <a href="http://search.yahoo.com/search?fr=oni_on_mail&amp;p=summer+activities+for+kids&amp;cs">http://search.yahoo.com/search?fr=oni_on_mail&amp;p=summer+activities+for+kids&amp;cs</a>=
</span><br>
<span class="quotelev1">&gt; bz 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3716.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<li><strong>Previous message:</strong> <a href="3714.php">Ralph H Castain: "Re: [OMPI users] orte_pls_base_select fails"</a>
<li><strong>In reply to:</strong> <a href="3713.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3716.php">Bill Johnstone: "Re: [OMPI users] mpirun hanging followup"</a>
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
