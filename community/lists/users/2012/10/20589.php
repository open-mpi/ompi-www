<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 30 09:51:56 2012" -->
<!-- isoreceived="20121030135156" -->
<!-- sent="Tue, 30 Oct 2012 13:51:45 +0000" -->
<!-- isosent="20121030135145" -->
<!-- name="Hodge, Gary C" -->
<!-- email="gary.c.hodge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature" -->
<!-- id="3258BBCAE92D924BB7419ABF3554AC041271B7_at_HVXDSP24.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1351356436.80862.YahooMailNeo_at_web111707.mail.gq1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature<br>
<strong>From:</strong> Hodge, Gary C (<em>gary.c.hodge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-30 09:51:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20590.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<li><strong>Previous message:</strong> <a href="20588.php">Jeff Squyres: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>In reply to:</strong> <a href="20560.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20590.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<li><strong>Reply:</strong> <a href="20590.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI, recently, I was tracking down the source of page faults in our application that has real-time requirements.  I found that disabling the sm component (--mca btl ^sm) eliminated many page faults I was seeing.  I now have much better deterministic performance in that I no longer see outlier measurements (jobs that usually take 3 ms would sometimes take 15 ms).  I did not notice a performance penalty using a network stack.
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Mahmood Naderan
<br>
Sent: Saturday, October 27, 2012 12:47 PM
<br>
To: Jeff Squyres
<br>
Cc: users_at_[hidden]
<br>
Subject: EXTERNAL: Re: [OMPI users] openmpi shared memory feature
<br>
<p><p><span class="quotelev1">&gt;Because communicating through shared memory when sending messages between processes on the same server is far faster than going through a network stack.
</span><br>
<p>I see... But that is not good for diskless clusters. Am I right? assume processes are on a node (which has no disk). In this case, their communication go though network (from computing node to server) then IO and then network again (from server to computing node).
<br>
Regards,
<br>
Mahmood
<br>
<p>________________________________
<br>
From: Jeff Squyres &lt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt;
<br>
To: Mahmood Naderan &lt;nt_mahmood_at_[hidden]&lt;mailto:nt_mahmood_at_[hidden]&gt;&gt;; Open MPI Users &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>
Sent: Saturday, October 27, 2012 6:19 PM
<br>
Subject: Re: [OMPI users] openmpi shared memory feature
<br>
<p>On Oct 27, 2012, at 10:49 AM, Mahmood Naderan wrote:
<br>
<p><span class="quotelev1">&gt; Why openmpi uses shared memory model?
</span><br>
<p>Because communicating through shared memory when sending messages between processes on the same server is far faster than going through a network stack.
<br>
<p><span class="quotelev1">&gt; this can be disabled though by setting &quot;--mca ^sm&quot;.
</span><br>
<span class="quotelev1">&gt; It seems that by default openmpi uses such feature (shared memory backing files) which is strange.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Mahmood
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20589/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20590.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<li><strong>Previous message:</strong> <a href="20588.php">Jeff Squyres: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>In reply to:</strong> <a href="20560.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20590.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<li><strong>Reply:</strong> <a href="20590.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
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
