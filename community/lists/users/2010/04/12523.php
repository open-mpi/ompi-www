<?
$subject_val = "Re: [OMPI users] Hide Abort output";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  2 03:18:40 2010" -->
<!-- isoreceived="20100402071840" -->
<!-- sent="Fri, 2 Apr 2010 01:18:31 -0600" -->
<!-- isosent="20100402071831" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hide Abort output" -->
<!-- id="3B36AB8E-CE10-4E24-B7A0-20F2EE20C70A_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201004020438.16102.yves.caniou_at_ens-lyon.fr" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-02 03:18:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12524.php">Jeff Squyres: "Re: [OMPI users] mpiblast only run in one node"</a>
<li><strong>Previous message:</strong> <a href="12522.php">longbow leo: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>In reply to:</strong> <a href="12519.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12525.php">Ralph Castain: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Reply:</strong> <a href="12525.php">Ralph Castain: "Re: [OMPI users] Hide Abort output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, a cmd line option to mpirun already existed for this purpose. Unfortunately, it wasn't properly being respected, so even knowing about it wouldn't have helped.
<br>
<p>I have fixed this as of r22925 on our developer's trunk and started the script to generate a fresh nightly tarball. Give it a little time and then you can find it on the web site:
<br>
<p><a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
<br>
<p>Use the -q or --quiet option and the message will be suppressed. I will request that this be included in the upcoming 1.4.2 and 1.5.0 releases.
<br>
<p><p>On Apr 1, 2010, at 8:38 PM, Yves Caniou wrote:
<br>
<p><span class="quotelev1">&gt; For information, I use the debian-packaged OpenMPI 1.4.1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; .Yves.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le Wednesday 31 March 2010 12:41:34 Jeff Squyres (jsquyres), vous avez &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; At present there is no such feature, but it should not be hard to add.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you guys be a little more specific about exactly what you are seeing
</span><br>
<span class="quotelev2">&gt;&gt; and exactly what you want to see?  (And what version you're working with -
</span><br>
<span class="quotelev2">&gt;&gt; I'll caveat my discussion that this may be a 1.5-and-forward thing)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -jms
</span><br>
<span class="quotelev2">&gt;&gt; Sent from my PDA.  No type good.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wed Mar 31 05:38:48 2010
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Hide Abort output
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have to say this is a very common issue for our users.  They repeatedly
</span><br>
<span class="quotelev2">&gt;&gt; report the long Open MPI MPI_Abort() message in help queries and fail to
</span><br>
<span class="quotelev2">&gt;&gt; look for the application error message about the root cause.  A short
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Abort() message that said &quot;look elsewhere for the real error message&quot;
</span><br>
<span class="quotelev2">&gt;&gt; would be useful.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; David
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 03/31/2010 07:58 PM, Yves Caniou wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using the MPI_Abort() command in a MPI program.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would like to not see the note explaining that the command caused Open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI to kill all the jobs and so on.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I thought that I could find a --mca parameter, but couldn't grep it. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only ones deal with the delay and printing more information (the stack).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a mean to avoid the printing of the note (except the 2&gt;/dev/null
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tips)? Or to delay this printing?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .Yves.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Yves Caniou
</span><br>
<span class="quotelev1">&gt; Associate Professor at Universit&#233; Lyon 1,
</span><br>
<span class="quotelev1">&gt; Member of the team project INRIA GRAAL in the LIP ENS-Lyon,
</span><br>
<span class="quotelev1">&gt; D&#233;l&#233;gation CNRS in Japan French Laboratory of Informatics (JFLI),
</span><br>
<span class="quotelev1">&gt;  * in Information Technology Center, The University of Tokyo,
</span><br>
<span class="quotelev1">&gt;    2-11-16 Yayoi, Bunkyo-ku, Tokyo 113-8658, Japan
</span><br>
<span class="quotelev1">&gt;    tel: +81-3-5841-0540
</span><br>
<span class="quotelev1">&gt;  * in National Institute of Informatics
</span><br>
<span class="quotelev1">&gt;    2-1-2 Hitotsubashi, Chiyoda-ku, Tokyo 101-8430, Japan
</span><br>
<span class="quotelev1">&gt;    tel: +81-3-4212-2412 
</span><br>
<span class="quotelev1">&gt; <a href="http://graal.ens-lyon.fr/~ycaniou/">http://graal.ens-lyon.fr/~ycaniou/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12524.php">Jeff Squyres: "Re: [OMPI users] mpiblast only run in one node"</a>
<li><strong>Previous message:</strong> <a href="12522.php">longbow leo: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>In reply to:</strong> <a href="12519.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12525.php">Ralph Castain: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Reply:</strong> <a href="12525.php">Ralph Castain: "Re: [OMPI users] Hide Abort output"</a>
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
