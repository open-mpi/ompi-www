<?
$subject_val = "Re: [OMPI users] MPI_Isend with no recieve";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 09:54:12 2014" -->
<!-- isoreceived="20140716135412" -->
<!-- sent="Wed, 16 Jul 2014 15:53:50 +0200" -->
<!-- isosent="20140716135350" -->
<!-- name="Ziv Aginsky" -->
<!-- email="zivaginsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Isend with no recieve" -->
<!-- id="CAGmz4LH-8i9DvueXw1cGrKy+1+AhB_8QurnrVzF701mm=Y1S1Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHCaCkLPyS6zwez=nioFkNOnC6rY=UT801xiCzf4pY6-QD8hOw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-07-16 09:53:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24786.php">Matthieu Brucher: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>Previous message:</strong> <a href="24784.php">Matthieu Brucher: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>In reply to:</strong> <a href="24784.php">Matthieu Brucher: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24786.php">Matthieu Brucher: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>Reply:</strong> <a href="24786.php">Matthieu Brucher: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot.
<br>
You are right I am using MPI_Iscatterv, in a domain decomposition code, but
<br>
the problem is that for the domain which I have no data to send fro, the
<br>
program will jump the routine. I can not redesign the whole program.
<br>
Do you know what will happen to send call with zero size buffer? Can I just
<br>
set the request to MPI_SUCCESS for ranks which I will send zero buffer to
<br>
and have no receive call?
<br>
Is there any other MPI routine that can do MPI_Scatterv on selected ranks?
<br>
without creating a new communicator?
<br>
<p><p><p><p>On Wed, Jul 16, 2014 at 3:42 PM, Matthieu Brucher &lt;
<br>
matthieu.brucher_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; If you are using Iscatterv (I guess it is that one), it handles the
</span><br>
<span class="quotelev1">&gt; pairs itself. You shouldn't bypass it because you think it is better.
</span><br>
<span class="quotelev1">&gt; You don't know how it is implemented, so just call Iscatterv for all
</span><br>
<span class="quotelev1">&gt; ranks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2014-07-16 14:33 GMT+01:00 Ziv Aginsky &lt;zivaginsky_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt; I know the standard, but what if I can not bypass the send message. For
</span><br>
<span class="quotelev2">&gt; &gt; example if I have MPI_Iscatter and for some ranks the send buffer has
</span><br>
<span class="quotelev1">&gt; zero
</span><br>
<span class="quotelev2">&gt; &gt; size. At those ranks it will jump the MPI_Iscatter routine, which means I
</span><br>
<span class="quotelev2">&gt; &gt; have some zero size send and no receive.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Jul 16, 2014 at 3:28 PM, Matthieu Brucher
</span><br>
<span class="quotelev2">&gt; &gt; &lt;matthieu.brucher_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The easiest would also to bypass the Isend as well! The standard is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; clear, you need a pair of Isend/Irecv.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2014-07-16 14:27 GMT+01:00 Ziv Aginsky &lt;zivaginsky_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I have a loop in which I will do some MPI_Isend. According to the MPI
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; standard, for every send you need a recv!!!!
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; If one or several of my MPI_Isend have zero size buffer, should I
</span><br>
<span class="quotelev1">&gt; still
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; have
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; the mpi_recv or I can do it without recv? I mean on the processor
</span><br>
<span class="quotelev1">&gt; which
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; should recv the data I know priory that my buffer is with zero size.
</span><br>
<span class="quotelev1">&gt; Can
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; jump from MPI_Recv.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; The question is because of the format of the program I am using if it
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; knows
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; that the receiving buffer is zero it will not call the routine which
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; contains mpi_Recv.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24781.php">http://www.open-mpi.org/community/lists/users/2014/07/24781.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Information System Engineer, Ph.D.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Music band: <a href="http://liliejay.com/">http://liliejay.com/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24782.php">http://www.open-mpi.org/community/lists/users/2014/07/24782.php</a>
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
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24783.php">http://www.open-mpi.org/community/lists/users/2014/07/24783.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24784.php">http://www.open-mpi.org/community/lists/users/2014/07/24784.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24785/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24786.php">Matthieu Brucher: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>Previous message:</strong> <a href="24784.php">Matthieu Brucher: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>In reply to:</strong> <a href="24784.php">Matthieu Brucher: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24786.php">Matthieu Brucher: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>Reply:</strong> <a href="24786.php">Matthieu Brucher: "Re: [OMPI users] MPI_Isend with no recieve"</a>
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
