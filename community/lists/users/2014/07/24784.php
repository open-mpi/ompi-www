<?
$subject_val = "Re: [OMPI users] MPI_Isend with no recieve";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 09:42:54 2014" -->
<!-- isoreceived="20140716134254" -->
<!-- sent="Wed, 16 Jul 2014 14:42:53 +0100" -->
<!-- isosent="20140716134253" -->
<!-- name="Matthieu Brucher" -->
<!-- email="matthieu.brucher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Isend with no recieve" -->
<!-- id="CAHCaCkLPyS6zwez=nioFkNOnC6rY=UT801xiCzf4pY6-QD8hOw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAGmz4LHaiGcXe-Q=Ha2Ob7-HZYuhhmTiTDV=jpA4o9JYdp1okg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Isend with no recieve<br>
<strong>From:</strong> Matthieu Brucher (<em>matthieu.brucher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-16 09:42:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24785.php">Ziv Aginsky: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>Previous message:</strong> <a href="24783.php">Ziv Aginsky: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>In reply to:</strong> <a href="24783.php">Ziv Aginsky: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24785.php">Ziv Aginsky: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>Reply:</strong> <a href="24785.php">Ziv Aginsky: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you are using Iscatterv (I guess it is that one), it handles the
<br>
pairs itself. You shouldn't bypass it because you think it is better.
<br>
You don't know how it is implemented, so just call Iscatterv for all
<br>
ranks.
<br>
<p>2014-07-16 14:33 GMT+01:00 Ziv Aginsky &lt;zivaginsky_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; I know the standard, but what if I can not bypass the send message. For
</span><br>
<span class="quotelev1">&gt; example if I have MPI_Iscatter and for some ranks the send buffer has zero
</span><br>
<span class="quotelev1">&gt; size. At those ranks it will jump the MPI_Iscatter routine, which means I
</span><br>
<span class="quotelev1">&gt; have some zero size send and no receive.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 16, 2014 at 3:28 PM, Matthieu Brucher
</span><br>
<span class="quotelev1">&gt; &lt;matthieu.brucher_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The easiest would also to bypass the Isend as well! The standard is
</span><br>
<span class="quotelev2">&gt;&gt; clear, you need a pair of Isend/Irecv.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2014-07-16 14:27 GMT+01:00 Ziv Aginsky &lt;zivaginsky_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have a loop in which I will do some MPI_Isend. According to the MPI
</span><br>
<span class="quotelev3">&gt;&gt; &gt; standard, for every send you need a recv!!!!
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If one or several of my MPI_Isend have zero size buffer, should I still
</span><br>
<span class="quotelev3">&gt;&gt; &gt; have
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the mpi_recv or I can do it without recv? I mean on the processor which
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I
</span><br>
<span class="quotelev3">&gt;&gt; &gt; should recv the data I know priory that my buffer is with zero size. Can
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I
</span><br>
<span class="quotelev3">&gt;&gt; &gt; jump from MPI_Recv.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The question is because of the format of the program I am using if it
</span><br>
<span class="quotelev3">&gt;&gt; &gt; knows
</span><br>
<span class="quotelev3">&gt;&gt; &gt; that the receiving buffer is zero it will not call the routine which
</span><br>
<span class="quotelev3">&gt;&gt; &gt; contains mpi_Recv.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24781.php">http://www.open-mpi.org/community/lists/users/2014/07/24781.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Information System Engineer, Ph.D.
</span><br>
<span class="quotelev2">&gt;&gt; Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
</span><br>
<span class="quotelev2">&gt;&gt; LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</span><br>
<span class="quotelev2">&gt;&gt; Music band: <a href="http://liliejay.com/">http://liliejay.com/</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24782.php">http://www.open-mpi.org/community/lists/users/2014/07/24782.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24783.php">http://www.open-mpi.org/community/lists/users/2014/07/24783.php</a>
</span><br>
<p><p><p><pre>
-- 
Information System Engineer, Ph.D.
Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
Music band: <a href="http://liliejay.com/">http://liliejay.com/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24785.php">Ziv Aginsky: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>Previous message:</strong> <a href="24783.php">Ziv Aginsky: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>In reply to:</strong> <a href="24783.php">Ziv Aginsky: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24785.php">Ziv Aginsky: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>Reply:</strong> <a href="24785.php">Ziv Aginsky: "Re: [OMPI users] MPI_Isend with no recieve"</a>
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
