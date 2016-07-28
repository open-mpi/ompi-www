<?
$subject_val = "Re: [OMPI users] Hide Abort output";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  1 22:37:10 2010" -->
<!-- isoreceived="20100402023710" -->
<!-- sent="Fri, 2 Apr 2010 04:36:55 +0200" -->
<!-- isosent="20100402023655" -->
<!-- name="Yves Caniou" -->
<!-- email="yves.caniou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hide Abort output" -->
<!-- id="201004020436.55186.yves.caniou_at_ens-lyon.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4BB3CDD6.9020401_at_anu.edu.au" -->
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
<strong>From:</strong> Yves Caniou (<em>yves.caniou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-01 22:36:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12519.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12517.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12505.php">David Singleton: "Re: [OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12536.php">Prentice Bisbal: "Re: [OMPI users] Hide Abort output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Indeed, the small paragraph can be misunderstood, but that wasn't the goal of 
<br>
my question.
<br>
<p>The fact is that the message can appear in the middle of logs, which means 
<br>
post-treatments of outputs even if the end of the program is normal (the 
<br>
worflow does not end by a join node). I just want to be able to get rid of 
<br>
the message, maybe with a special option -- or no message by default, and the 
<br>
message appears when mpirun is invocated with a special debug option?
<br>
<p>.Yves.
<br>
<p>Le Thursday 01 April 2010 00:33:58 David Singleton, vous avez &#233;crit&#160;:
<br>
<span class="quotelev1">&gt; Yes, Dick has isolated the issue - novice users often believe Open MPI
</span><br>
<span class="quotelev1">&gt; (not their application) had a problem.  Anything along the lines he
</span><br>
<span class="quotelev1">&gt; suggests can only help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 04/01/2010 01:12 AM, Richard Treumann wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I do not know what the OpenMPI message looks like or why people want to
</span><br>
<span class="quotelev2">&gt; &gt; hide it. It should be phrased to avoid any implication of a problem with
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI itself.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; How about something like this which:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;The application has called MPI_Abort. The application is terminated by
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI as the application demanded&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dick Treumann  -  MPI Team
</span><br>
<span class="quotelev2">&gt; &gt; IBM Systems&amp;  Technology Group
</span><br>
<span class="quotelev2">&gt; &gt; Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev2">&gt; &gt; Tele (845) 433-7846         Fax (845) 433-8363
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    From:       &quot;Jeff Squyres (jsquyres)&quot;&lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    To:&lt;David.Singleton_at_[hidden]&gt;,&lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Date:       03/31/2010 06:43 AM
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Subject:    Re: [OMPI users] Hide Abort output
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Sent by:    users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; At present there is no such feature, but it should not be hard to add.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you guys be a little more specific about exactly what you are seeing
</span><br>
<span class="quotelev2">&gt; &gt; and exactly what you want to see?  (And what version you're working with
</span><br>
<span class="quotelev2">&gt; &gt; - I'll caveat my discussion that this may be a 1.5-and-forward thing)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -jms
</span><br>
<span class="quotelev2">&gt; &gt; Sent from my PDA.  No type good.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----- Original Message -----
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden]&lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users&lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Wed Mar 31 05:38:48 2010
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Hide Abort output
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have to say this is a very common issue for our users.  They repeatedly
</span><br>
<span class="quotelev2">&gt; &gt; report the long Open MPI MPI_Abort() message in help queries and fail to
</span><br>
<span class="quotelev2">&gt; &gt; look for the application error message about the root cause.  A short
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Abort() message that said &quot;look elsewhere for the real error message&quot;
</span><br>
<span class="quotelev2">&gt; &gt; would be useful.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt; David
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 03/31/2010 07:58 PM, Yves Caniou wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am using the MPI_Abort() command in a MPI program.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I would like to not see the note explaining that the command caused Open
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to kill all the jobs and so on.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I thought that I could find a --mca parameter, but couldn't grep it. The
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; only
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ones deal with the delay and printing more information (the stack).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is there a mean to avoid the printing of the note (except the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2&gt;/dev/null tips)? Or to delay this printing?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thank you.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; .Yves.
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
<p><p><p><pre>
-- 
Yves Caniou
Associate Professor at Universit&#233; Lyon 1,
Member of the team project INRIA GRAAL in the LIP ENS-Lyon,
D&#233;l&#233;gation CNRS in Japan French Laboratory of Informatics (JFLI),
  * in Information Technology Center, The University of Tokyo,
    2-11-16 Yayoi, Bunkyo-ku, Tokyo 113-8658, Japan
    tel: +81-3-5841-0540
  * in National Institute of Informatics
    2-1-2 Hitotsubashi, Chiyoda-ku, Tokyo 101-8430, Japan
    tel: +81-3-4212-2412 
<a href="http://graal.ens-lyon.fr/~ycaniou/">http://graal.ens-lyon.fr/~ycaniou/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12519.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12517.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12505.php">David Singleton: "Re: [OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12536.php">Prentice Bisbal: "Re: [OMPI users] Hide Abort output"</a>
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
