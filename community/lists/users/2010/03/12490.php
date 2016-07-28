<?
$subject_val = "Re: [OMPI users] Hide Abort output";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 31 05:38:55 2010" -->
<!-- isoreceived="20100331093855" -->
<!-- sent="Wed, 31 Mar 2010 20:38:48 +1100" -->
<!-- isosent="20100331093848" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hide Abort output" -->
<!-- id="4BB31828.5010405_at_anu.edu.au" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="25507_1270026067_4BB30F52_25507_6458_1_201003311058.59292.yves.caniou_at_ens-lyon.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hide Abort output<br>
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-31 05:38:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12491.php">uriz.49949_at_[hidden]: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Previous message:</strong> <a href="12489.php">Yves Caniou: "[OMPI users] Hide Abort output"</a>
<li><strong>Maybe in reply to:</strong> <a href="12489.php">Yves Caniou: "[OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Hide Abort output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have to say this is a very common issue for our users.  They repeatedly
<br>
report the long Open MPI MPI_Abort() message in help queries and fail to
<br>
look for the application error message about the root cause.  A short
<br>
MPI_Abort() message that said &quot;look elsewhere for the real error message&quot;
<br>
would be useful.
<br>
<p>Cheers,
<br>
David
<br>
<p>On 03/31/2010 07:58 PM, Yves Caniou wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using the MPI_Abort() command in a MPI program.
</span><br>
<span class="quotelev1">&gt; I would like to not see the note explaining that the command caused Open MPI
</span><br>
<span class="quotelev1">&gt; to kill all the jobs and so on.
</span><br>
<span class="quotelev1">&gt; I thought that I could find a --mca parameter, but couldn't grep it. The only
</span><br>
<span class="quotelev1">&gt; ones deal with the delay and printing more information (the stack).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a mean to avoid the printing of the note (except the 2&gt;/dev/null
</span><br>
<span class="quotelev1">&gt; tips)? Or to delay this printing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .Yves.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12491.php">uriz.49949_at_[hidden]: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Previous message:</strong> <a href="12489.php">Yves Caniou: "[OMPI users] Hide Abort output"</a>
<li><strong>Maybe in reply to:</strong> <a href="12489.php">Yves Caniou: "[OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Hide Abort output"</a>
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
