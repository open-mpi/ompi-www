<?
$subject_val = "Re: [OMPI users] MPI_Isend with no recieve";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 09:28:52 2014" -->
<!-- isoreceived="20140716132852" -->
<!-- sent="Wed, 16 Jul 2014 14:28:52 +0100" -->
<!-- isosent="20140716132852" -->
<!-- name="Matthieu Brucher" -->
<!-- email="matthieu.brucher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Isend with no recieve" -->
<!-- id="CAHCaCkKiFDjesYNyjDPR_PxG+ZqOtA9cLCiacSCn087gVzaNLA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAGmz4LHazOzMpGAXoV1f41S8dNuYA46+9iHHrryBrB1RK64HxA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-07-16 09:28:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24783.php">Ziv Aginsky: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>Previous message:</strong> <a href="24781.php">Ziv Aginsky: "[OMPI users] MPI_Isend with no recieve"</a>
<li><strong>In reply to:</strong> <a href="24781.php">Ziv Aginsky: "[OMPI users] MPI_Isend with no recieve"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24783.php">Ziv Aginsky: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>Reply:</strong> <a href="24783.php">Ziv Aginsky: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>The easiest would also to bypass the Isend as well! The standard is
<br>
clear, you need a pair of Isend/Irecv.
<br>
<p>Cheers,
<br>
<p>2014-07-16 14:27 GMT+01:00 Ziv Aginsky &lt;zivaginsky_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; I have a loop in which I will do some MPI_Isend. According to the MPI
</span><br>
<span class="quotelev1">&gt; standard, for every send you need a recv!!!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If one or several of my MPI_Isend have zero size buffer, should I still have
</span><br>
<span class="quotelev1">&gt; the mpi_recv or I can do it without recv? I mean on the processor which I
</span><br>
<span class="quotelev1">&gt; should recv the data I know priory that my buffer is with zero size. Can I
</span><br>
<span class="quotelev1">&gt; jump from MPI_Recv.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The question is because of the format of the program I am using if it knows
</span><br>
<span class="quotelev1">&gt; that the receiving buffer is zero it will not call the routine which
</span><br>
<span class="quotelev1">&gt; contains mpi_Recv.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24781.php">http://www.open-mpi.org/community/lists/users/2014/07/24781.php</a>
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
<li><strong>Next message:</strong> <a href="24783.php">Ziv Aginsky: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>Previous message:</strong> <a href="24781.php">Ziv Aginsky: "[OMPI users] MPI_Isend with no recieve"</a>
<li><strong>In reply to:</strong> <a href="24781.php">Ziv Aginsky: "[OMPI users] MPI_Isend with no recieve"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24783.php">Ziv Aginsky: "Re: [OMPI users] MPI_Isend with no recieve"</a>
<li><strong>Reply:</strong> <a href="24783.php">Ziv Aginsky: "Re: [OMPI users] MPI_Isend with no recieve"</a>
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
