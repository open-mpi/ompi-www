<?
$subject_val = "Re: [OMPI users] MPI loop problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 19 11:59:29 2009" -->
<!-- isoreceived="20090819155929" -->
<!-- sent="Wed, 19 Aug 2009 08:59:25 -0700 (PDT)" -->
<!-- isosent="20090819155925" -->
<!-- name="Julia He" -->
<!-- email="springwater4he_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI loop problem" -->
<!-- id="375423.12035.qm_at_web51312.mail.re2.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4A8AF53E.1040105_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI loop problem<br>
<strong>From:</strong> Julia He (<em>springwater4he_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-19 11:59:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10436.php">Eugene Loh: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>Previous message:</strong> <a href="10434.php">Jean Potsam: "Re: [OMPI users] problem with LD_LIBRARY_PATH???"</a>
<li><strong>In reply to:</strong> <a href="10414.php">Eugene Loh: "Re: [OMPI users] MPI loop problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10436.php">Eugene Loh: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>Reply:</strong> <a href="10436.php">Eugene Loh: "Re: [OMPI users] MPI loop problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you very much for your help. I have tried all of them. Here are the answers.
<br>
<p><p>My answer: Yes, the problem is independent of the number of MPI processes.
<br>
<p><p>My answer: Yes, the problem shows up even with np=1 (a single MPI process).
<br>
<p><p>My answer: Yes and No. Yes, when I used ifort compiler. But the problem did not show up when I used gfortran, which was much slower.
<br>
<p>So, I think I can conclude that the problem is related to the Intel compiler -- ifort. I guess the mpif90 and mpif77 are wrappers to ifort. So, the problem shows up when MPI is included in the code.
<br>
<p>Do you know how to solve this problem? Is there any flag that I need to use in ifort?
<br>
<p>Thanks again.
<br>
<p>Julia
<br>
<p>--- On Tue, 8/18/09, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p>From: Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] MPI loop problem
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Tuesday, August 18, 2009, 2:38 PM
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p>-----Inline Attachment Follows-----
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

__________________________________________________
Do You Yahoo!?
Tired of spam?  Yahoo! Mail has the best spam protection around 
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10435/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10436.php">Eugene Loh: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>Previous message:</strong> <a href="10434.php">Jean Potsam: "Re: [OMPI users] problem with LD_LIBRARY_PATH???"</a>
<li><strong>In reply to:</strong> <a href="10414.php">Eugene Loh: "Re: [OMPI users] MPI loop problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10436.php">Eugene Loh: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>Reply:</strong> <a href="10436.php">Eugene Loh: "Re: [OMPI users] MPI loop problem"</a>
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
