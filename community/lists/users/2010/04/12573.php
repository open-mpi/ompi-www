<?
$subject_val = "Re: [OMPI users] Hide Abort output";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  7 00:29:00 2010" -->
<!-- isoreceived="20100407042900" -->
<!-- sent="Wed, 7 Apr 2010 06:26:55 +0200" -->
<!-- isosent="20100407042655" -->
<!-- name="Yves Caniou" -->
<!-- email="yves.caniou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hide Abort output" -->
<!-- id="201004070626.55117.yves.caniou_at_ens-lyon.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="17C6C6D0-8D50-4CE0-846D-B41E79CA03B9_at_cisco.com" -->
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
<strong>Date:</strong> 2010-04-07 00:26:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12574.php">Piero Lanucara: "[OMPI users] OpenMPI multithreaded performance"</a>
<li><strong>Previous message:</strong> <a href="12572.php">Ralph Castain: "Re: [OMPI users] excluding hosts"</a>
<li><strong>In reply to:</strong> <a href="12566.php">Jeff Squyres: "Re: [OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12505.php">David Singleton: "Re: [OMPI users] Hide Abort output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Indeed, it seems that it addresses what I want!
<br>
<p>I read the discussions on the MPI Forum list, which is very interesting.
<br>
I began to develop a terminaison code before seeing that the use of 
<br>
MPI_Abort() should be sufficient. 
<br>
But I didn't post anything, since my case is particular: I have iterative 
<br>
computations. Thus, I can check if any terminaison message has been received 
<br>
at some points (with the async receive at the beginning of the program) -- 
<br>
the sending of messages has to be done in a &quot;recursive&quot; way to ensure a 
<br>
smaller number of messages exchanged between tasks, because there's 
<br>
not &quot;multicast&quot; way of sending something.
<br>
<p>In my case, I don't need special ending requirements if tasks share files, 
<br>
etc., which is not the general case of the standardization of an API.
<br>
But I still think that an MPI_Quit() would be very usefull.
<br>
<p>Thank you very much!
<br>
<p>.Yves.
<br>
<p>Le Tuesday 06 April 2010 22:40:29 Jeff Squyres, vous avez &#233;crit&#160;:
<br>
<span class="quotelev1">&gt; BTW, we diverged quite a bit on this thread -- Yves -- does the
</span><br>
<span class="quotelev1">&gt; functionality that was fixed by Ralph address your original issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 2, 2010, at 10:21 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Testing found that I had missed a spot here, so we weren't fully
</span><br>
<span class="quotelev2">&gt; &gt; suppressing messages (including MPI_Abort). So the corrected fix is in
</span><br>
<span class="quotelev2">&gt; &gt; r22926, and will be included in tonight's tarball.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I also made --quiet be a new MCA param orte_execute_quiet so you can put
</span><br>
<span class="quotelev2">&gt; &gt; it in your environment instead of only on the cmd line.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; HTH
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 2, 2010, at 1:18 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Actually, a cmd line option to mpirun already existed for this purpose.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Unfortunately, it wasn't properly being respected, so even knowing
</span><br>
<span class="quotelev3">&gt; &gt; &gt; about it wouldn't have helped.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have fixed this as of r22925 on our developer's trunk and started the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; script to generate a fresh nightly tarball. Give it a little time and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; then you can find it on the web site:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Use the -q or --quiet option and the message will be suppressed. I will
</span><br>
<span class="quotelev3">&gt; &gt; &gt; request that this be included in the upcoming 1.4.2 and 1.5.0 releases.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Apr 1, 2010, at 8:38 PM, Yves Caniou wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; For information, I use the debian-packaged OpenMPI 1.4.1.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Cheers.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; .Yves.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Le Wednesday 31 March 2010 12:41:34 Jeff Squyres (jsquyres), vous avez 
</span><br>
&#233;crit :
<br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; At present there is no such feature, but it should not be hard to
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; add.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Can you guys be a little more specific about exactly what you are
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; seeing and exactly what you want to see?  (And what version you're
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; working with - I'll caveat my discussion that this may be a
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; 1.5-and-forward thing)
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; -jms
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Sent from my PDA.  No type good.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Sent: Wed Mar 31 05:38:48 2010
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Subject: Re: [OMPI users] Hide Abort output
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; I have to say this is a very common issue for our users.  They
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; repeatedly report the long Open MPI MPI_Abort() message in help
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; queries and fail to look for the application error message about the
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; root cause.  A short MPI_Abort() message that said &quot;look elsewhere
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; for the real error message&quot; would be useful.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; David
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; On 03/31/2010 07:58 PM, Yves Caniou wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; I am using the MPI_Abort() command in a MPI program.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; I would like to not see the note explaining that the command caused
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Open MPI to kill all the jobs and so on.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; I thought that I could find a --mca parameter, but couldn't grep it.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; The only ones deal with the delay and printing more information (the
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; stack).
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Is there a mean to avoid the printing of the note (except the
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; 2&gt;/dev/null tips)? Or to delay this printing?
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; .Yves.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Yves Caniou
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Associate Professor at Universit&#233; Lyon 1,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Member of the team project INRIA GRAAL in the LIP ENS-Lyon,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; D&#233;l&#233;gation CNRS in Japan French Laboratory of Informatics (JFLI),
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; * in Information Technology Center, The University of Tokyo,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   2-11-16 Yayoi, Bunkyo-ku, Tokyo 113-8658, Japan
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   tel: +81-3-5841-0540
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; * in National Institute of Informatics
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   2-1-2 Hitotsubashi, Chiyoda-ku, Tokyo 101-8430, Japan
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;   tel: +81-3-4212-2412
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://graal.ens-lyon.fr/~ycaniou/">http://graal.ens-lyon.fr/~ycaniou/</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="12574.php">Piero Lanucara: "[OMPI users] OpenMPI multithreaded performance"</a>
<li><strong>Previous message:</strong> <a href="12572.php">Ralph Castain: "Re: [OMPI users] excluding hosts"</a>
<li><strong>In reply to:</strong> <a href="12566.php">Jeff Squyres: "Re: [OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12505.php">David Singleton: "Re: [OMPI users] Hide Abort output"</a>
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
