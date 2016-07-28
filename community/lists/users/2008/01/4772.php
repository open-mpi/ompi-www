<?
$subject_val = "Re: [OMPI users] orte in persistent mode";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  2 08:48:45 2008" -->
<!-- isoreceived="20080102134845" -->
<!-- sent="Wed, 02 Jan 2008 06:48:32 -0700" -->
<!-- isosent="20080102134832" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte in persistent mode" -->
<!-- id="C3A0E440.BAF6%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071231082606.10706.qmail_at_webmail46.rediffmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] orte in persistent mode<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-02 08:48:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4773.php">Jeff Squyres: "Re: [OMPI users] No output from mpirun"</a>
<li><strong>Previous message:</strong> <a href="4771.php">Doug Reeder: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/12/4759.php">Neeraj Chourasia: "[OMPI users] orte in persistent mode"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Neeraj
<br>
<p>No, we still don't support having a persistent set of daemons acting as some
<br>
kind of &quot;virtual machine&quot; like LAM/MPI did. We at one time had talked about
<br>
adding it. However, our most recent efforts have actually taken us away from
<br>
supporting that mode of operation. As a result, I very much doubt we will
<br>
support it anytime in the foreseeable future.
<br>
<p>Just to clarify: this isn't a &quot;problem&quot; with the existing system. It was a
<br>
design decision not to support that mode of operation. We had considered
<br>
revising that decision, but other considerations have led us further from a
<br>
design that would support it. It seems doubtful that we will do so anytime
<br>
soon.
<br>
<p>Ralph
<br>
<p><p><p><p>On 12/31/07 1:26 AM, &quot;Neeraj Chourasia&quot; &lt;neeraj_ch1_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      I am wondering if ORTE can be run in persistent mode. It has
</span><br>
<span class="quotelev1">&gt; already been raised in Mailing list (
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2006/03/0939.php">http://www.open-mpi.org/community/lists/users/2006/03/0939.php</a>)
</span><br>
<span class="quotelev1">&gt; ,  where it was said that the problem is still there. I just want to
</span><br>
<span class="quotelev1">&gt; know, if its fixed or being fixed ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Reason, why i am looking at is in large clusters, mpirun takes lot
</span><br>
<span class="quotelev1">&gt; of time starting orted (by ssh) on remote nodes. If orte is already
</span><br>
<span class="quotelev1">&gt; running, hopefully we can save considerable time.
</span><br>
<span class="quotelev1">&gt; Any comments is appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Neeraj
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="4773.php">Jeff Squyres: "Re: [OMPI users] No output from mpirun"</a>
<li><strong>Previous message:</strong> <a href="4771.php">Doug Reeder: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/12/4759.php">Neeraj Chourasia: "[OMPI users] orte in persistent mode"</a>
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
