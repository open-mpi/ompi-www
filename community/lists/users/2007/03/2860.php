<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 21 13:09:23 2007" -->
<!-- isoreceived="20070321170923" -->
<!-- sent="Wed, 21 Mar 2007 11:09:19 -0600" -->
<!-- isosent="20070321170919" -->
<!-- name="Mohammad Huwaidi" -->
<!-- email="mohammad_at_[hidden]" -->
<!-- subject="[OMPI users] Fault Tolerance" -->
<!-- id="460166BF.2030406_at_kelman.com" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Mohammad Huwaidi (<em>mohammad_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-21 13:09:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2861.php">Thomas Spraggins: "Re: [OMPI users] Fault Tolerance"</a>
<li><strong>Previous message:</strong> <a href="2859.php">Mohammad Huwaidi: "Re: [OMPI users] users Digest, Vol 536, Issue 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2861.php">Thomas Spraggins: "Re: [OMPI users] Fault Tolerance"</a>
<li><strong>Reply:</strong> <a href="2861.php">Thomas Spraggins: "Re: [OMPI users] Fault Tolerance"</a>
<li><strong>Reply:</strong> <a href="2862.php">George Bosilca: "Re: [OMPI users] Fault Tolerance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello folks,
<br>
<p>I am trying to write some fault-tolerance systems with the following 
<br>
criteria:
<br>
1) Recover any software/hardware crashes
<br>
2) Dynamically Shrink and grow.
<br>
3) Migrate processes among machines.
<br>
<p>Does anyone has examples of code? What MPI platform is recommended to 
<br>
accomplish such requirements?
<br>
<p>I am using three MPI platforms and each has it own issues:
<br>
1) MPICH2 - good multi-threading support, but bad fault-tolerance 
<br>
mechanisms.
<br>
2) OpenMPI - Does not support multi-threading properly and cannot have 
<br>
it trap exceptions yet.
<br>
3) FT-MPI - Old and does not support multi-threading at all.
<br>
<p>Any suggestions?
<br>
<pre>
-- 
Regards,
Mohammad Huwaidi
We can't resolve problems by using the same kind of thinking we used
when we created them.
                                                 --Albert Einstein
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2861.php">Thomas Spraggins: "Re: [OMPI users] Fault Tolerance"</a>
<li><strong>Previous message:</strong> <a href="2859.php">Mohammad Huwaidi: "Re: [OMPI users] users Digest, Vol 536, Issue 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2861.php">Thomas Spraggins: "Re: [OMPI users] Fault Tolerance"</a>
<li><strong>Reply:</strong> <a href="2861.php">Thomas Spraggins: "Re: [OMPI users] Fault Tolerance"</a>
<li><strong>Reply:</strong> <a href="2862.php">George Bosilca: "Re: [OMPI users] Fault Tolerance"</a>
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
