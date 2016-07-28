<?
$subject_val = "Re: [OMPI users] Hide Abort output";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 16:40:34 2010" -->
<!-- isoreceived="20100406204034" -->
<!-- sent="Tue, 6 Apr 2010 16:40:29 -0400" -->
<!-- isosent="20100406204029" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hide Abort output" -->
<!-- id="17C6C6D0-8D50-4CE0-846D-B41E79CA03B9_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="9E386605-1672-478D-BDAE-E5D9E71BDA00_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 16:40:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12567.php">David Turner: "[OMPI users] excluding hosts"</a>
<li><strong>Previous message:</strong> <a href="12565.php">Jeff Squyres: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>In reply to:</strong> <a href="12525.php">Ralph Castain: "Re: [OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12573.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Reply:</strong> <a href="12573.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BTW, we diverged quite a bit on this thread -- Yves -- does the functionality that was fixed by Ralph address your original issue?
<br>
<p><p>On Apr 2, 2010, at 10:21 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Testing found that I had missed a spot here, so we weren't fully suppressing messages (including MPI_Abort). So the corrected fix is in r22926, and will be included in tonight's tarball.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also made --quiet be a new MCA param orte_execute_quiet so you can put it in your environment instead of only on the cmd line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 2, 2010, at 1:18 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Actually, a cmd line option to mpirun already existed for this purpose. Unfortunately, it wasn't properly being respected, so even knowing about it wouldn't have helped.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have fixed this as of r22925 on our developer's trunk and started the script to generate a fresh nightly tarball. Give it a little time and then you can find it on the web site:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Use the -q or --quiet option and the message will be suppressed. I will request that this be included in the upcoming 1.4.2 and 1.5.0 releases.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 1, 2010, at 8:38 PM, Yves Caniou wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For information, I use the debian-packaged OpenMPI 1.4.1.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cheers.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; .Yves.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Le Wednesday 31 March 2010 12:41:34 Jeff Squyres (jsquyres), vous avez &#233;crit :
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; At present there is no such feature, but it should not be hard to add.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Can you guys be a little more specific about exactly what you are seeing
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; and exactly what you want to see?  (And what version you're working with -
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'll caveat my discussion that this may be a 1.5-and-forward thing)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -jms
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sent from my PDA.  No type good.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sent: Wed Mar 31 05:38:48 2010
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subject: Re: [OMPI users] Hide Abort output
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have to say this is a very common issue for our users.  They repeatedly
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; report the long Open MPI MPI_Abort() message in help queries and fail to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; look for the application error message about the root cause.  A short
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI_Abort() message that said &quot;look elsewhere for the real error message&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; would be useful.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; David
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On 03/31/2010 07:58 PM, Yves Caniou wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I am using the MPI_Abort() command in a MPI program.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I would like to not see the note explaining that the command caused Open
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; MPI to kill all the jobs and so on.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I thought that I could find a --mca parameter, but couldn't grep it. The
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; only ones deal with the delay and printing more information (the stack).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Is there a mean to avoid the printing of the note (except the 2&gt;/dev/null
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; tips)? Or to delay this printing?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; .Yves.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Yves Caniou
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Associate Professor at Universit&#233; Lyon 1,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Member of the team project INRIA GRAAL in the LIP ENS-Lyon,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; D&#233;l&#233;gation CNRS in Japan French Laboratory of Informatics (JFLI),
</span><br>
<span class="quotelev3">&gt; &gt;&gt; * in Information Technology Center, The University of Tokyo,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   2-11-16 Yayoi, Bunkyo-ku, Tokyo 113-8658, Japan
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   tel: +81-3-5841-0540
</span><br>
<span class="quotelev3">&gt; &gt;&gt; * in National Institute of Informatics
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   2-1-2 Hitotsubashi, Chiyoda-ku, Tokyo 101-8430, Japan
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   tel: +81-3-4212-2412
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://graal.ens-lyon.fr/~ycaniou/">http://graal.ens-lyon.fr/~ycaniou/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12567.php">David Turner: "[OMPI users] excluding hosts"</a>
<li><strong>Previous message:</strong> <a href="12565.php">Jeff Squyres: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>In reply to:</strong> <a href="12525.php">Ralph Castain: "Re: [OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12573.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Reply:</strong> <a href="12573.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
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
