<?
$subject_val = "Re: [OMPI users] MPI_Isend with no recieve";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 09:34:12 2014" -->
<!-- isoreceived="20140716133412" -->
<!-- sent="Wed, 16 Jul 2014 15:33:51 +0200" -->
<!-- isosent="20140716133351" -->
<!-- name="Ziv Aginsky" -->
<!-- email="zivaginsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Isend with no recieve" -->
<!-- id="CAGmz4LHaiGcXe-Q=Ha2Ob7-HZYuhhmTiTDV=jpA4o9JYdp1okg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHCaCkKiFDjesYNyjDPR_PxG+ZqOtA9cLCiacSCn087gVzaNLA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ziv Aginsky (<em>zivaginsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-16 09:33:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24784.php">Matthieu Brucher: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>Previous message:</strong> <a href="24782.php">Matthieu Brucher: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>In reply to:</strong> <a href="24782.php">Matthieu Brucher: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24784.php">Matthieu Brucher: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>Reply:</strong> <a href="24784.php">Matthieu Brucher: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know the standard, but what if I can not bypass the send message. For
<br>
example if I have MPI_Iscatter and for some ranks the send buffer has zero
<br>
size. At those ranks it will jump the MPI_Iscatter routine, which means I
<br>
have some zero size send and no receive.
<br>
<p><p><p><p>On Wed, Jul 16, 2014 at 3:28 PM, Matthieu Brucher &lt;
<br>
matthieu.brucher_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The easiest would also to bypass the Isend as well! The standard is
</span><br>
<span class="quotelev1">&gt; clear, you need a pair of Isend/Irecv.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2014-07-16 14:27 GMT+01:00 Ziv Aginsky &lt;zivaginsky_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt; I have a loop in which I will do some MPI_Isend. According to the MPI
</span><br>
<span class="quotelev2">&gt; &gt; standard, for every send you need a recv!!!!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If one or several of my MPI_Isend have zero size buffer, should I still
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev2">&gt; &gt; the mpi_recv or I can do it without recv? I mean on the processor which I
</span><br>
<span class="quotelev2">&gt; &gt; should recv the data I know priory that my buffer is with zero size. Can
</span><br>
<span class="quotelev1">&gt; I
</span><br>
<span class="quotelev2">&gt; &gt; jump from MPI_Recv.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The question is because of the format of the program I am using if it
</span><br>
<span class="quotelev1">&gt; knows
</span><br>
<span class="quotelev2">&gt; &gt; that the receiving buffer is zero it will not call the routine which
</span><br>
<span class="quotelev2">&gt; &gt; contains mpi_Recv.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24781.php">http://www.open-mpi.org/community/lists/users/2014/07/24781.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Information System Engineer, Ph.D.
</span><br>
<span class="quotelev1">&gt; Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
</span><br>
<span class="quotelev1">&gt; LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</span><br>
<span class="quotelev1">&gt; Music band: <a href="http://liliejay.com/">http://liliejay.com/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24782.php">http://www.open-mpi.org/community/lists/users/2014/07/24782.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24783/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24784.php">Matthieu Brucher: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>Previous message:</strong> <a href="24782.php">Matthieu Brucher: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>In reply to:</strong> <a href="24782.php">Matthieu Brucher: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24784.php">Matthieu Brucher: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>Reply:</strong> <a href="24784.php">Matthieu Brucher: "Re: [OMPI users] MPI_Isend with no recieve"</a>
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
