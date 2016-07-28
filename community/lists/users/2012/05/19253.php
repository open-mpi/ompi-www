<?
$subject_val = "Re: [OMPI users] call to fork() error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 10 14:10:36 2012" -->
<!-- isoreceived="20120510181036" -->
<!-- sent="Thu, 10 May 2012 11:10:28 -0700" -->
<!-- isosent="20120510181028" -->
<!-- name="Don Armstrong" -->
<!-- email="don_at_[hidden]" -->
<!-- subject="Re: [OMPI users] call to fork() error" -->
<!-- id="20120510181028.GZ3458_at_rzlab.ucr.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4FAB77FE.8010108_at_uea.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] call to fork() error<br>
<strong>From:</strong> Don Armstrong (<em>don_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-10 14:10:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19254.php">Ghobad Zarrinchian: "[OMPI users] starting open-mpi"</a>
<li><strong>Previous message:</strong> <a href="19252.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>In reply to:</strong> <a href="19243.php">Jim Maas: "[OMPI users] call to fork() error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 10 May 2012, Jim Maas wrote:
<br>
<span class="quotelev1">&gt; I'm getting the following error when running an open-mpi job on a
</span><br>
<span class="quotelev1">&gt; LSF cluster using a new version of R 2.15. I didn't get the error
</span><br>
<span class="quotelev1">&gt; message when running previously using R 2.13. Could anyone point me
</span><br>
<span class="quotelev1">&gt; to the possible cause, or how to find the offending code? I'm not a
</span><br>
<span class="quotelev1">&gt; sysop, just a user.
</span><br>
<p>Presumably some call that R is making is invoking system() when it
<br>
used to handle it internally. strace'ing the R process will tell you
<br>
what call it is making, and from that you can track down the code that
<br>
makes that call.
<br>
<p><p>Don Armstrong
<br>
<p><pre>
-- 
6: I'm human. I have a thousand flaws. I break down. I get up or I
don't get up. I get lost. I make the same mistakes over and over. I
have scars and wounds. Sometimes when I can't bear them anymore, I
drink. You can't fix me. You can't fix any of us. You can't make us
perfect.
 -- &quot;The Prisoner (2009 Miniseries)&quot; _Checkmate_
<a href="http://www.donarmstrong.com">http://www.donarmstrong.com</a>              <a href="http://rzlab.ucr.edu">http://rzlab.ucr.edu</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19254.php">Ghobad Zarrinchian: "[OMPI users] starting open-mpi"</a>
<li><strong>Previous message:</strong> <a href="19252.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>In reply to:</strong> <a href="19243.php">Jim Maas: "[OMPI users] call to fork() error"</a>
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
