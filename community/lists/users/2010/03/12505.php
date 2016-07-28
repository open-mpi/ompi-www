<?
$subject_val = "Re: [OMPI users] Hide Abort output";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 31 18:34:05 2010" -->
<!-- isoreceived="20100331223405" -->
<!-- sent="Thu, 01 Apr 2010 09:33:58 +1100" -->
<!-- isosent="20100331223358" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hide Abort output" -->
<!-- id="4BB3CDD6.9020401_at_anu.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="26691_1270044841_4BB358A9_26691_3078_1_OF37DE310B.06DEA447-ON852576F7.004D8535-852576F7.004E15AC_at_us.ibm.com" -->
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
<strong>Date:</strong> 2010-03-31 18:33:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12506.php">Addepalli, Srirangam V: "[OMPI users] ompi-checkpoint  --term"</a>
<li><strong>Previous message:</strong> <a href="12504.php">Abhishek Gupta: "[OMPI users] openmpi.ld.conf file"</a>
<li><strong>Maybe in reply to:</strong> <a href="12489.php">Yves Caniou: "[OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12518.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12518.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12536.php">Prentice Bisbal: "Re: [OMPI users] Hide Abort output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, Dick has isolated the issue - novice users often believe Open MPI
<br>
(not their application) had a problem.  Anything along the lines he suggests
<br>
can only help.
<br>
<p>David
<br>
<p>On 04/01/2010 01:12 AM, Richard Treumann wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not know what the OpenMPI message looks like or why people want to
</span><br>
<span class="quotelev1">&gt; hide it. It should be phrased to avoid any implication of a problem with
</span><br>
<span class="quotelev1">&gt; OpenMPI itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How about something like this which:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;The application has called MPI_Abort. The application is terminated by
</span><br>
<span class="quotelev1">&gt; OpenMPI as the application demanded&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dick Treumann  -  MPI Team
</span><br>
<span class="quotelev1">&gt; IBM Systems&amp;  Technology Group
</span><br>
<span class="quotelev1">&gt; Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev1">&gt; Tele (845) 433-7846         Fax (845) 433-8363
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    From:       &quot;Jeff Squyres (jsquyres)&quot;&lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    To:&lt;David.Singleton_at_[hidden]&gt;,&lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Date:       03/31/2010 06:43 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Subject:    Re: [OMPI users] Hide Abort output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Sent by:    users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At present there is no such feature, but it should not be hard to add.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you guys be a little more specific about exactly what you are seeing
</span><br>
<span class="quotelev1">&gt; and exactly what you want to see?  (And what version you're working with -
</span><br>
<span class="quotelev1">&gt; I'll caveat my discussion that this may be a 1.5-and-forward thing)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -jms
</span><br>
<span class="quotelev1">&gt; Sent from my PDA.  No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden]&lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users&lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Wed Mar 31 05:38:48 2010
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Hide Abort output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have to say this is a very common issue for our users.  They repeatedly
</span><br>
<span class="quotelev1">&gt; report the long Open MPI MPI_Abort() message in help queries and fail to
</span><br>
<span class="quotelev1">&gt; look for the application error message about the root cause.  A short
</span><br>
<span class="quotelev1">&gt; MPI_Abort() message that said &quot;look elsewhere for the real error message&quot;
</span><br>
<span class="quotelev1">&gt; would be useful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 03/31/2010 07:58 PM, Yves Caniou wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using the MPI_Abort() command in a MPI program.
</span><br>
<span class="quotelev2">&gt;&gt; I would like to not see the note explaining that the command caused Open
</span><br>
<span class="quotelev1">&gt; MPI
</span><br>
<span class="quotelev2">&gt;&gt; to kill all the jobs and so on.
</span><br>
<span class="quotelev2">&gt;&gt; I thought that I could find a --mca parameter, but couldn't grep it. The
</span><br>
<span class="quotelev1">&gt; only
</span><br>
<span class="quotelev2">&gt;&gt; ones deal with the delay and printing more information (the stack).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a mean to avoid the printing of the note (except the 2&gt;/dev/null
</span><br>
<span class="quotelev2">&gt;&gt; tips)? Or to delay this printing?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; .Yves.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12506.php">Addepalli, Srirangam V: "[OMPI users] ompi-checkpoint  --term"</a>
<li><strong>Previous message:</strong> <a href="12504.php">Abhishek Gupta: "[OMPI users] openmpi.ld.conf file"</a>
<li><strong>Maybe in reply to:</strong> <a href="12489.php">Yves Caniou: "[OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12518.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12518.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12536.php">Prentice Bisbal: "Re: [OMPI users] Hide Abort output"</a>
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
