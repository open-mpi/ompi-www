<?
$subject_val = "Re: [OMPI users] MPI_Isend with no recieve";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 10:06:26 2014" -->
<!-- isoreceived="20140716140626" -->
<!-- sent="Wed, 16 Jul 2014 15:06:25 +0100" -->
<!-- isosent="20140716140625" -->
<!-- name="Matthieu Brucher" -->
<!-- email="matthieu.brucher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Isend with no recieve" -->
<!-- id="CAHCaCk+7_XxW7LyAiFBQ_f80VOz8Y729zsFV3WbsU+hUpBq75Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAGmz4LH-8i9DvueXw1cGrKy+1+AhB_8QurnrVzF701mm=Y1S1Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-07-16 10:06:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24787.php">MM: "[OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Previous message:</strong> <a href="24785.php">Ziv Aginsky: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>In reply to:</strong> <a href="24785.php">Ziv Aginsky: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem is that for the moment, the implementation uses
<br>
Isend/Irecv, but you don't know what will happen in the future
<br>
(hopefully, it will use something else).
<br>
If your program bypasses the required call to MPI_Iscatterv, then you
<br>
only have one option: implement MPI_Iscatterv yourself, with only the
<br>
required parts. It's not that complicated, it can be done with an
<br>
empty array of requests, and then for each required Isend, increment
<br>
the request counter, same for the Irecv, and wait for all at the end.
<br>
<p>2014-07-16 15:53 GMT+02:00 Ziv Aginsky &lt;zivaginsky_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt; You are right I am using MPI_Iscatterv, in a domain decomposition code, but
</span><br>
<span class="quotelev1">&gt; the problem is that for the domain which I have no data to send fro, the
</span><br>
<span class="quotelev1">&gt; program will jump the routine. I can not redesign the whole program.
</span><br>
<span class="quotelev1">&gt; Do you know what will happen to send call with zero size buffer? Can I just
</span><br>
<span class="quotelev1">&gt; set the request to MPI_SUCCESS for ranks which I will send zero buffer to
</span><br>
<span class="quotelev1">&gt; and have no receive call?
</span><br>
<span class="quotelev1">&gt; Is there any other MPI routine that can do MPI_Scatterv on selected ranks?
</span><br>
<span class="quotelev1">&gt; without creating a new communicator?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 16, 2014 at 3:42 PM, Matthieu Brucher
</span><br>
<span class="quotelev1">&gt; &lt;matthieu.brucher_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you are using Iscatterv (I guess it is that one), it handles the
</span><br>
<span class="quotelev2">&gt;&gt; pairs itself. You shouldn't bypass it because you think it is better.
</span><br>
<span class="quotelev2">&gt;&gt; You don't know how it is implemented, so just call Iscatterv for all
</span><br>
<span class="quotelev2">&gt;&gt; ranks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2014-07-16 14:33 GMT+01:00 Ziv Aginsky &lt;zivaginsky_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I know the standard, but what if I can not bypass the send message. For
</span><br>
<span class="quotelev3">&gt;&gt; &gt; example if I have MPI_Iscatter and for some ranks the send buffer has
</span><br>
<span class="quotelev3">&gt;&gt; &gt; zero
</span><br>
<span class="quotelev3">&gt;&gt; &gt; size. At those ranks it will jump the MPI_Iscatter routine, which means
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I
</span><br>
<span class="quotelev3">&gt;&gt; &gt; have some zero size send and no receive.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Wed, Jul 16, 2014 at 3:28 PM, Matthieu Brucher
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &lt;matthieu.brucher_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; The easiest would also to bypass the Isend as well! The standard is
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; clear, you need a pair of Isend/Irecv.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 2014-07-16 14:27 GMT+01:00 Ziv Aginsky &lt;zivaginsky_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; I have a loop in which I will do some MPI_Isend. According to the MPI
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; standard, for every send you need a recv!!!!
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; If one or several of my MPI_Isend have zero size buffer, should I
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; still
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; have
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; the mpi_recv or I can do it without recv? I mean on the processor
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; which
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; I
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; should recv the data I know priory that my buffer is with zero size.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Can
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; I
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; jump from MPI_Recv.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; The question is because of the format of the program I am using if it
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; knows
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; that the receiving buffer is zero it will not call the routine which
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; contains mpi_Recv.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24781.php">http://www.open-mpi.org/community/lists/users/2014/07/24781.php</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Information System Engineer, Ph.D.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Music band: <a href="http://liliejay.com/">http://liliejay.com/</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24782.php">http://www.open-mpi.org/community/lists/users/2014/07/24782.php</a>
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
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24783.php">http://www.open-mpi.org/community/lists/users/2014/07/24783.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24784.php">http://www.open-mpi.org/community/lists/users/2014/07/24784.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24785.php">http://www.open-mpi.org/community/lists/users/2014/07/24785.php</a>
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
<li><strong>Next message:</strong> <a href="24787.php">MM: "[OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Previous message:</strong> <a href="24785.php">Ziv Aginsky: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>In reply to:</strong> <a href="24785.php">Ziv Aginsky: "Re: [OMPI users] MPI_Isend with no recieve"</a>
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
