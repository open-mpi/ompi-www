<?
$subject_val = "Re: [OMPI users] New ib locked pages behavior?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 18:20:35 2014" -->
<!-- isoreceived="20141022222035" -->
<!-- sent="Wed, 22 Oct 2014 15:20:33 -0700" -->
<!-- isosent="20141022222033" -->
<!-- name="Bill Broadley" -->
<!-- email="bill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] New ib locked pages behavior?" -->
<!-- id="54482DB1.3040209_at_cse.ucdavis.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="21575.24224.519781.86628_at_gargle.gargle.HOWL" -->
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
<strong>Subject:</strong> Re: [OMPI users] New ib locked pages behavior?<br>
<strong>From:</strong> Bill Broadley (<em>bill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-22 18:20:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25555.php">Vinson Leung: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="25553.php">Siegmar Gross: "Re: [OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="25552.php">rf_at_[hidden]: "Re: [OMPI users] New ib locked pages behavior?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25557.php">rf_at_[hidden]: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Reply:</strong> <a href="25557.php">rf_at_[hidden]: "Re: [OMPI users] New ib locked pages behavior?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/22/2014 12:37 AM, rf_at_[hidden] wrote:
<br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;Bill&quot; == Bill Broadley &lt;bill_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems the half-life period of knowledge on the list has decayed to
</span><br>
<span class="quotelev1">&gt; two weeks on the list :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've commented in detail on this (non-)issue on 2014-08-20:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25090.php">http://www.open-mpi.org/community/lists/users/2014/08/25090.php</a>
</span><br>
<p>I read that.  It seems pretty clear what the problem is, but not so clear on
<br>
what a user experiencing this problem should do about it.
<br>
<p>So for people who are using ubuntu 14.04 and openmpi-1.6.5 and 64 GB nodes.
<br>
<p>Should they:
<br>
* bump log_mtts_per_seg from 3 to 4 (64GB) or 5 (128GB)?
<br>
* ignore the error message because it doesn't apply?
<br>
* ditch ubuntu's packagedopenmpi 1.6.5 and all the packages that depends on
<br>
&nbsp;&nbsp;it and install something newer than 1.8.2rc4?
<br>
<p>I also found:
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2013/02/21430.php">http://www.open-mpi.org/community/lists/users/2013/02/21430.php</a>
<br>
<p>It was similarly vague as to if it was a real problem and exactly what the fix is.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25555.php">Vinson Leung: "Re: [OMPI users] low CPU utilization with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="25553.php">Siegmar Gross: "Re: [OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="25552.php">rf_at_[hidden]: "Re: [OMPI users] New ib locked pages behavior?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25557.php">rf_at_[hidden]: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Reply:</strong> <a href="25557.php">rf_at_[hidden]: "Re: [OMPI users] New ib locked pages behavior?"</a>
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
