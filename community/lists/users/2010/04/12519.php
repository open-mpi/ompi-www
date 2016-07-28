<?
$subject_val = "Re: [OMPI users] Hide Abort output";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  1 22:38:26 2010" -->
<!-- isoreceived="20100402023826" -->
<!-- sent="Fri, 2 Apr 2010 04:38:16 +0200" -->
<!-- isosent="20100402023816" -->
<!-- name="Yves Caniou" -->
<!-- email="yves.caniou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hide Abort output" -->
<!-- id="201004020438.16102.yves.caniou_at_ens-lyon.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="58D723FE08DC6A4398E6596E38F3FA1705674B_at_XMB-RCD-205.cisco.com" -->
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
<strong>Date:</strong> 2010-04-01 22:38:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12520.php">longbow leo: "Re: [OMPI users] mpiblast only run in one node"</a>
<li><strong>Previous message:</strong> <a href="12518.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12523.php">Ralph Castain: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Reply:</strong> <a href="12523.php">Ralph Castain: "Re: [OMPI users] Hide Abort output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For information, I use the debian-packaged OpenMPI 1.4.1.
<br>
<p>Cheers.
<br>
<p>.Yves.
<br>
<p>Le Wednesday 31 March 2010 12:41:34 Jeff Squyres (jsquyres), vous avez &#195;&#169;crit&#194;&#160;:
<br>
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
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
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
<span class="quotelev2">&gt; &gt; Dear all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am using the MPI_Abort() command in a MPI program.
</span><br>
<span class="quotelev2">&gt; &gt; I would like to not see the note explaining that the command caused Open
</span><br>
<span class="quotelev2">&gt; &gt; MPI to kill all the jobs and so on.
</span><br>
<span class="quotelev2">&gt; &gt; I thought that I could find a --mca parameter, but couldn't grep it. The
</span><br>
<span class="quotelev2">&gt; &gt; only ones deal with the delay and printing more information (the stack).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there a mean to avoid the printing of the note (except the 2&gt;/dev/null
</span><br>
<span class="quotelev2">&gt; &gt; tips)? Or to delay this printing?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; .Yves.
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
Associate Professor at Universit&#195;&#169; Lyon 1,
Member of the team project INRIA GRAAL in the LIP ENS-Lyon,
D&#195;&#169;l&#195;&#169;gation CNRS in Japan French Laboratory of Informatics (JFLI),
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
<li><strong>Next message:</strong> <a href="12520.php">longbow leo: "Re: [OMPI users] mpiblast only run in one node"</a>
<li><strong>Previous message:</strong> <a href="12518.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12523.php">Ralph Castain: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Reply:</strong> <a href="12523.php">Ralph Castain: "Re: [OMPI users] Hide Abort output"</a>
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
