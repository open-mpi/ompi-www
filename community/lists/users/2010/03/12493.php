<?
$subject_val = "Re: [OMPI users] Hide Abort output";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 31 06:41:39 2010" -->
<!-- isoreceived="20100331104139" -->
<!-- sent="Wed, 31 Mar 2010 05:41:34 -0500" -->
<!-- isosent="20100331104134" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hide Abort output" -->
<!-- id="58D723FE08DC6A4398E6596E38F3FA1705674B_at_XMB-RCD-205.cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] Hide Abort output" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-31 06:41:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12494.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Previous message:</strong> <a href="12492.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Maybe in reply to:</strong> <a href="12489.php">Yves Caniou: "[OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12500.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Reply:</strong> <a href="12500.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12519.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At present there is no such feature, but it should not be hard to add. 
<br>

<br>
Can you guys be a little more specific about exactly what you are seeing and exactly what you want to see?  (And what version you're working with - I'll caveat my discussion that this may be a 1.5-and-forward thing)
<br>

<br>
-jms
<br>
Sent from my PDA.  No type good.
<br>

<br>
----- Original Message -----
<br>
From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Sent: Wed Mar 31 05:38:48 2010
<br>
Subject: Re: [OMPI users] Hide Abort output
<br>

<br>

<br>
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

<br>
Cheers,
<br>
David
<br>

<br>
On 03/31/2010 07:58 PM, Yves Caniou wrote:
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

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12493/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12494.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Previous message:</strong> <a href="12492.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Maybe in reply to:</strong> <a href="12489.php">Yves Caniou: "[OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12500.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Reply:</strong> <a href="12500.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12519.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
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
