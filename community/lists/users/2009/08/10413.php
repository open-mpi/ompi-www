<?
$subject_val = "Re: [OMPI users] MPI loop problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 18 14:18:57 2009" -->
<!-- isoreceived="20090818181857" -->
<!-- sent="Tue, 18 Aug 2009 11:18:53 -0700 (PDT)" -->
<!-- isosent="20090818181853" -->
<!-- name="Julia He" -->
<!-- email="springwater4he_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI loop problem" -->
<!-- id="298232.94738.qm_at_web51311.mail.re2.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="71d2d8cc0908180732r4ff3ae36i11aa7518fa02c31e_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-08-18 14:18:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10414.php">Eugene Loh: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>Previous message:</strong> <a href="10412.php">Joe Landman: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>In reply to:</strong> <a href="10405.php">Ralph Castain: "Re: [OMPI users] MPI loop problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10414.php">Eugene Loh: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>Reply:</strong> <a href="10414.php">Eugene Loh: "Re: [OMPI users] MPI loop problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The OpenMPI version is 
<br>
<p>[julia.he_at_bob bin]$ mpirun --version
<br>
mpirun (Open MPI) 1.2.8
<br>
<p>Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>The platform is 
<br>
<p>[julia.he_at_bob bin]$ uname -a
<br>
Linux bob.csi.cuny.edu 2.6.18-92.1.13.el5 #1 SMP Wed Sep 24 19:32:05 EDT 2008 x86_64 x86_64 x86_64 GNU/Linux
<br>
<p>The my_sub is a modification of Radiative Transfer code 6S. <a href="http://6s.ltdri.org/">http://6s.ltdri.org/</a> The 6S code takes angles, atmospheric conditions, altitude, etc as inputs, and it returns top of the atmosphere reflectance as the output. The code I provided is a pseudo code because 6S code consists of plenty of subroutines and the main program has 3219 lines.
<br>
<p>What I need is to use MPI to parallel the jobs. So, each computing node computes one set of the inputs. But I found that the returned value were not correct after 570 instances. So, I passed the same inputs to each computing node. But the problem still exist. The first 570 returned values are correct(also same in this case), but after 570 the returned values are NaN.
<br>
<p>Can someone give a hint because our system administrator can't help with programming? But, I suspect if some setting in MPI prevents computing more than certain times? I know it sounds weird. But I have no clue why with the same inputs the returned value could be garbage after 570 instances.
<br>
<p>Julia
<br>
<p><p><p>--- On Tue, 8/18/09, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p>From: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] MPI loop problem
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Tuesday, August 18, 2009, 10:32 AM
<br>
<p>Sorry, but there is no way to answer this question with what is given. What is &quot;my_sub&quot; doing? Which version of OpenMPI are you talking about, and on what platform?
<br>
<p><p><p>On Tue, Aug 18, 2009 at 8:28 AM, Julia He &lt;springwater4he_at_[hidden]&gt; wrote:
<br>
<p><p>Hi,
<br>
<p>I found that the subroutine call inside a loop did not
<br>
return correct value after certain iterations. In order to simplify the
<br>
problem, the inputs to the subroutine are chosen to be constant, so the
<br>
output should be the same for every iteration on every computing node.
<br>
It is a fortran program, after the initialization the program goes like
<br>
this:
<br>
<p>do i = 1, N
<br>
&nbsp;&nbsp;call my_sub(A, B, C, re)
<br>
&nbsp;&nbsp;print *,  mypn, A, B, C, re
<br>
end do
<br>
<p>where re is the output value of the my_sub, A, B, C are inputs to my_sub.
<br>
<p>570
<br>
is the number of correct iterations. If the combined instances does not
<br>
exceed 570, the output is fine. For example, if I requested 10
<br>
computing nodes and N were 40, so it gives 10*40=400 instances, the
<br>
output would be fine. But if the combined instances exceeded 570, the
<br>
first 570 is fine, but the rest will return NaN value. For example, if
<br>
the number of computing nodes were 20 and N were 40, which gives
<br>
20*40=800 instances, then the first 570 are fine, but the rest are NaN
<br>
value.
<br>
<p>Does
<br>
someone know what might cause the problem? I googled it, but can't find
<br>
a clue where to start. Please also let me know what else you need to
<br>
debug the problem.
<br>
<p>Thanks.
<br>
<p>Julia
<br>
<p><p>__________________________________________________
<br>
Do You Yahoo!?
<br>
<p>Tired of spam?  Yahoo! Mail has the best spam protection around 
<br>
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
<br>
_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]
<br>
<p><a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p>-----Inline Attachment Follows-----
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10413/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10414.php">Eugene Loh: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>Previous message:</strong> <a href="10412.php">Joe Landman: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>In reply to:</strong> <a href="10405.php">Ralph Castain: "Re: [OMPI users] MPI loop problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10414.php">Eugene Loh: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>Reply:</strong> <a href="10414.php">Eugene Loh: "Re: [OMPI users] MPI loop problem"</a>
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
