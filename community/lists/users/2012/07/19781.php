<?
$subject_val = "Re: [OMPI users] Simple Doubt about MPI_Gather in C";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 17 15:15:03 2012" -->
<!-- isoreceived="20120717191503" -->
<!-- sent="Tue, 17 Jul 2012 22:44:59 +0330" -->
<!-- isosent="20120717191459" -->
<!-- name="Ghobad Zarrinchian" -->
<!-- email="gzarrin.edu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Simple Doubt about MPI_Gather in C" -->
<!-- id="CAEx1Rm_f2NJGdmqhWuQW1Y=JpANUp6ifqGpJeZvxoqHiTWjXLw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA+HOVZgLCn29Eh=Aza0Zf1mqN5X1_XCpoqdn2+h-5jfzkHpNEQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Simple Doubt about MPI_Gather in C<br>
<strong>From:</strong> Ghobad Zarrinchian (<em>gzarrin.edu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-17 15:14:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19782.php">Maginot Junior: "Re: [OMPI users] Simple Doubt about MPI_Gather in C"</a>
<li><strong>Previous message:</strong> <a href="19780.php">Maginot Junior: "[OMPI users] Simple Doubt about MPI_Gather in C"</a>
<li><strong>In reply to:</strong> <a href="19780.php">Maginot Junior: "[OMPI users] Simple Doubt about MPI_Gather in C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19782.php">Maginot Junior: "Re: [OMPI users] Simple Doubt about MPI_Gather in C"</a>
<li><strong>Reply:</strong> <a href="19782.php">Maginot Junior: "Re: [OMPI users] Simple Doubt about MPI_Gather in C"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear friend
<br>
<p>Generally, if you have an array with x elements of a given type (e.g.
<br>
MPI_Int) you should use x as your SENDCOUNT parameter. Providing the name
<br>
of the SEND buffer just determine the start address of the buffer and you
<br>
should expilicitly specify how many elements should be sent.
<br>
Tu be sure, execute some sample programs and check the behavior.
<br>
<p>On Tue, Jul 17, 2012 at 10:24 PM, Maginot Junior
<br>
&lt;maginot.junior_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hello, I'm starting with openmpi and still have some doubts and I
</span><br>
<span class="quotelev1">&gt; think I'm making some confusion around here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When using MPI_Gather, if SENDBUF is an array of x elements SENDCOUNT
</span><br>
<span class="quotelev1">&gt; should be 1 if I want to send this entire array or should I use x as
</span><br>
<span class="quotelev1">&gt; SENDCOUNT parameter (telling to fetch x elements of SENDTYPE from
</span><br>
<span class="quotelev1">&gt; SENDBUF)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Maginot J&#250;nior
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19781/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19782.php">Maginot Junior: "Re: [OMPI users] Simple Doubt about MPI_Gather in C"</a>
<li><strong>Previous message:</strong> <a href="19780.php">Maginot Junior: "[OMPI users] Simple Doubt about MPI_Gather in C"</a>
<li><strong>In reply to:</strong> <a href="19780.php">Maginot Junior: "[OMPI users] Simple Doubt about MPI_Gather in C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19782.php">Maginot Junior: "Re: [OMPI users] Simple Doubt about MPI_Gather in C"</a>
<li><strong>Reply:</strong> <a href="19782.php">Maginot Junior: "Re: [OMPI users] Simple Doubt about MPI_Gather in C"</a>
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
