<?
$subject_val = "Re: [OMPI users] How to restart a job twice";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 18 09:03:41 2008" -->
<!-- isoreceived="20080418130341" -->
<!-- sent="Fri, 18 Apr 2008 09:03:38 -0400" -->
<!-- isosent="20080418130338" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to restart a job twice" -->
<!-- id="F04FB6FC-94A7-4141-A67A-E79B5442B9B6_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="104A81D1-02E0-4968-BA65-ED63028E7E04_at_caltech.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to restart a job twice<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-18 09:03:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5416.php">Tamer: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>Previous message:</strong> <a href="5414.php">Tamer: "[OMPI users] How to restart a job twice"</a>
<li><strong>In reply to:</strong> <a href="5414.php">Tamer: "[OMPI users] How to restart a job twice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5416.php">Tamer: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>Reply:</strong> <a href="5416.php">Tamer: "Re: [OMPI users] How to restart a job twice"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When you use 'ompi-restart' to restart a job it fork/execs the  
<br>
completely new job using the restarted processes for the ranks.  
<br>
However instead of calling the 'mpirun' process ompi-restart currently  
<br>
calls 'orterun'. These two programs are exactly the same (mpirun is a  
<br>
symbolic link to orterun). So if you look for the PID of 'orterun'  
<br>
that can be used to checkpoint the process.
<br>
<p>However it is confusing that Open MPI makes this switch. So I  
<br>
committed in r18208 a fix for this that uses the 'mpirun' binary name  
<br>
instead of the 'orterun' binary name. This fits with the typical use  
<br>
case of checkpoint/restart in Open MPI in which users expect to find  
<br>
the 'mpirun' process on restart instead of the lesser known 'orterun'  
<br>
process.
<br>
<p>Sorry for the confusion.
<br>
<p>Josh
<br>
<p>On Apr 18, 2008, at 1:14 AM, Tamer wrote:
<br>
<p><span class="quotelev1">&gt; Dear all, I installed the developer's version r14519 and was able to
</span><br>
<span class="quotelev1">&gt; get it running. I successfully checkpointed a parallel job and
</span><br>
<span class="quotelev1">&gt; restarted it. My question is how can I checkpoint the restarted job?
</span><br>
<span class="quotelev1">&gt; The problem is once the original job is terminated and restarted later
</span><br>
<span class="quotelev1">&gt; on, the mpirun does not exist anymore (ps -efa|grep mpirun) and hence
</span><br>
<span class="quotelev1">&gt; I do not know which PID I should use when I run the ompi-checkpoint on
</span><br>
<span class="quotelev1">&gt; the restarted job. Any help would be greatly appreciated.
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
<li><strong>Next message:</strong> <a href="5416.php">Tamer: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>Previous message:</strong> <a href="5414.php">Tamer: "[OMPI users] How to restart a job twice"</a>
<li><strong>In reply to:</strong> <a href="5414.php">Tamer: "[OMPI users] How to restart a job twice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5416.php">Tamer: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>Reply:</strong> <a href="5416.php">Tamer: "Re: [OMPI users] How to restart a job twice"</a>
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
