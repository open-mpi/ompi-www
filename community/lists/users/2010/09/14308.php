<?
$subject_val = "Re: [OMPI users] How to know which process is running on which core?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 23:10:43 2010" -->
<!-- isoreceived="20100924031043" -->
<!-- sent="Thu, 23 Sep 2010 21:10:38 -0600" -->
<!-- isosent="20100924031038" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to know which process is running on which core?" -->
<!-- id="AANLkTi=U=Z6C3bkdGWjkcUiO47j0_T=VAOMAtowQB4S__at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTi=mV_5gdZedQXwasya1eLbYQdZirpjL3f-bMmzn_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to know which process is running on which core?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-23 23:10:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14309.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14307.php">Ralph Castain: "Re: [OMPI users] Running on crashing nodes"</a>
<li><strong>In reply to:</strong> <a href="14300.php">Fernando Saez: "[OMPI users] How to know which process is running on which core?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14316.php">Jeff Squyres: "Re: [OMPI users] How to know which process is running on which core?"</a>
<li><strong>Reply:</strong> <a href="14316.php">Jeff Squyres: "Re: [OMPI users] How to know which process is running on which core?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You mean via an API of some kind? Not through an MPI call, but you can do it
<br>
(though your code will wind up OMPI-specific). Look at the OMPI source code
<br>
in opal/mca/paffinity/paffinity.h and you'll see the necessary calls as well
<br>
as some macros to help parse the results.
<br>
<p>Depending upon what version you are using, there may also be a function in
<br>
opal/mca/paffinity/base/base.h to pretty-print that info for you. I believe
<br>
it may only be in the developer's trunk right now, or it may have made it
<br>
into the 1.5.0 release candidate....
<br>
<p><p>On Thu, Sep 23, 2010 at 11:24 AM, Fernando Saez &lt;saezfernando_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi all, I'm new in the list. I don't know if this post has been treated
</span><br>
<span class="quotelev1">&gt; before.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way in the OMPI library to report which process is running
</span><br>
<span class="quotelev1">&gt; on which core in a SMP system? I need to know processor affinity for
</span><br>
<span class="quotelev1">&gt; optimizations issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fernando Saez
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14308/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14309.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14307.php">Ralph Castain: "Re: [OMPI users] Running on crashing nodes"</a>
<li><strong>In reply to:</strong> <a href="14300.php">Fernando Saez: "[OMPI users] How to know which process is running on which core?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14316.php">Jeff Squyres: "Re: [OMPI users] How to know which process is running on which core?"</a>
<li><strong>Reply:</strong> <a href="14316.php">Jeff Squyres: "Re: [OMPI users] How to know which process is running on which core?"</a>
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
