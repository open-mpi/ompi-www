<?
$subject_val = "Re: [OMPI devel] MPI_Bcast using TIPC";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 29 07:49:00 2011" -->
<!-- isoreceived="20110929114900" -->
<!-- sent="Thu, 29 Sep 2011 13:47:17 +0200" -->
<!-- isosent="20110929114717" -->
<!-- name="Xin He" -->
<!-- email="xin.i.he_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Bcast using TIPC" -->
<!-- id="4E845AC5.3040505_at_ericsson.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110927174915.701436wmc78gbxx7_at_mail.tu-chemnitz.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Bcast using TIPC<br>
<strong>From:</strong> Xin He (<em>xin.i.he_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-29 07:47:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/10/9776.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<li><strong>Previous message:</strong> <a href="9774.php">S&#233;bastien Boisvert: "[OMPI devel] RE :  RE :  RE :  Implementation of MPI_Iprobe"</a>
<li><strong>Maybe in reply to:</strong> <a href="9761.php">Xin He: "[OMPI devel] MPI_Bcast using TIPC"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you all for replying, I think I know where to start now. I will 
<br>
post when I get more information :)
<br>
<p>/Xin
<br>
<p>On 09/27/2011 05:49 PM, Christian Siebert wrote:
<br>
<span class="quotelev1">&gt; Hi Xin,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think you are referring to the multicast functionality of TIPC, right?
</span><br>
<span class="quotelev1">&gt; That would be great if it works properly. You might also want to
</span><br>
<span class="quotelev1">&gt; compare to existing work that has been done some years ago - see this
</span><br>
<span class="quotelev1">&gt; anncouncement:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2007/03/1358.php">http://www.open-mpi.org/community/lists/devel/2007/03/1358.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good luck!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Christian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sorry that it takes so long for paper works of TIPC BTL. Hopefully I
</span><br>
<span class="quotelev2">&gt;&gt; can get some feedback this week.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, I would like to do some work while waiting. For future
</span><br>
<span class="quotelev2">&gt;&gt; work, I would like to add TIPC_broadcast
</span><br>
<span class="quotelev2">&gt;&gt; to support MPI_Bcast. But as I looked into TCP BTL code, I could not
</span><br>
<span class="quotelev2">&gt;&gt; find any code doing broadcast. Does
</span><br>
<span class="quotelev2">&gt;&gt; that mean MPI_Bcast is actually done by sending one by one? In that
</span><br>
<span class="quotelev2">&gt;&gt; case, in I want to add actual broadcast
</span><br>
<span class="quotelev2">&gt;&gt; support, which part should I change, I guess not just adding a BTL
</span><br>
<span class="quotelev2">&gt;&gt; but also modify PML as well?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you in advance!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /Xin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/10/9776.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<li><strong>Previous message:</strong> <a href="9774.php">S&#233;bastien Boisvert: "[OMPI devel] RE :  RE :  RE :  Implementation of MPI_Iprobe"</a>
<li><strong>Maybe in reply to:</strong> <a href="9761.php">Xin He: "[OMPI devel] MPI_Bcast using TIPC"</a>
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
