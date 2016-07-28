<?
$subject_val = "Re: [OMPI users] Missing -enable-crdebug option in configure step";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  1 10:08:46 2014" -->
<!-- isoreceived="20140701140846" -->
<!-- sent="Tue, 1 Jul 2014 09:08:46 -0500" -->
<!-- isosent="20140701140846" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Missing -enable-crdebug option in configure step" -->
<!-- id="CAANzjE=gjUUu4c0h=Q4zj97OK2qaTt+GY3t-oXz7GTH=fd_61Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="7529F663-4CA4-498A-A8E6-3DDBF41BCDDA_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Missing -enable-crdebug option in configure step<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-01 10:08:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24737.php">Brock Palen: "[OMPI users] HugeTLB messages from mpi code"</a>
<li><strong>Previous message:</strong> <a href="24735.php">George Bosilca: "[OMPI users] EuroMPI/Asia 2014 Call for Participation"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/06/24730.php">Ralph Castain: "Re: [OMPI users] Missing -enable-crdebug option in configure step"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The C/R Debugging feature (the ability to do reversible debugging or
<br>
backward stepping with gdb and/or DDT) was added on 8/10/2010 in the commit
<br>
below:
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/23587">https://svn.open-mpi.org/trac/ompi/changeset/23587</a>
<br>
<p>This feature never made it into a release so it was only ever available on
<br>
the trunk. However, since that time the C/R functionality has fallen into
<br>
disrepair. It is most likely broken in the trunk today.
<br>
<p>There is an effort to bring back the checkpoint/restart functionality in
<br>
the Open MPI trunk. Once that is stable we might revisit bringing back this
<br>
feature if there is time and interest.
<br>
<p>-- Josh
<br>
<p><p><p>On Mon, Jun 30, 2014 at 8:35 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I don't recall ever seeing such an option in Open MPI - what makes you
</span><br>
<span class="quotelev1">&gt; believe it should exist?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 29, 2014, at 9:25 PM, &#196;&#144;&#225;&#187;&#151; Mai Anh T&#195;&#186; &lt;anhtuce1993_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to run the checkpoint/restart enabled debugging code in Open
</span><br>
<span class="quotelev1">&gt; MPI. This requires configure this option at the set up step :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --with-ft=cr --enable-crdebug
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But no matter which version of Open MPI, I can't not find any option as
</span><br>
<span class="quotelev1">&gt; --enable-crdebug (I have tried all versions from 1.5 to the newest one
</span><br>
<span class="quotelev1">&gt; 1.8.1). Anyone could  help me fingure out this prolems. Was this option no
</span><br>
<span class="quotelev1">&gt; longer belong or it has been replaced by the other term ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I appreciate all your helps and thanks all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; &#196;&#144;&#225;&#187;&#151; Mai Anh T&#195;&#186; - Student ID 51104066
</span><br>
<span class="quotelev1">&gt; Department of Computer Engineering
</span><br>
<span class="quotelev1">&gt; Faculty of Computer Science and Engineering
</span><br>
<span class="quotelev1">&gt; HCMC University of Technology.
</span><br>
<span class="quotelev1">&gt; Viet Nam National University
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/06/24729.php">http://www.open-mpi.org/community/lists/users/2014/06/24729.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/06/24730.php">http://www.open-mpi.org/community/lists/users/2014/06/24730.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Assistant Professor of Computer Science
University of Wisconsin-La Crosse
<a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24736/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24737.php">Brock Palen: "[OMPI users] HugeTLB messages from mpi code"</a>
<li><strong>Previous message:</strong> <a href="24735.php">George Bosilca: "[OMPI users] EuroMPI/Asia 2014 Call for Participation"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/06/24730.php">Ralph Castain: "Re: [OMPI users] Missing -enable-crdebug option in configure step"</a>
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
