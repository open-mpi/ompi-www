<?
$subject_val = "Re: [OMPI users] Simple Doubt about MPI_Gather in C";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 17 15:24:25 2012" -->
<!-- isoreceived="20120717192425" -->
<!-- sent="Tue, 17 Jul 2012 16:24:00 -0300" -->
<!-- isosent="20120717192400" -->
<!-- name="Maginot Junior" -->
<!-- email="maginot.junior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Simple Doubt about MPI_Gather in C" -->
<!-- id="CA+HOVZhkS3G0futUyT5N8Kt3O9Fvg6WuqNogeebpQ1On2UU_eA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAEx1Rm_f2NJGdmqhWuQW1Y=JpANUp6ifqGpJeZvxoqHiTWjXLw_at_mail.gmail.com" -->
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
<strong>From:</strong> Maginot Junior (<em>maginot.junior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-17 15:24:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19783.php">Anne M. Hammond: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>Previous message:</strong> <a href="19781.php">Ghobad Zarrinchian: "Re: [OMPI users] Simple Doubt about MPI_Gather in C"</a>
<li><strong>In reply to:</strong> <a href="19781.php">Ghobad Zarrinchian: "Re: [OMPI users] Simple Doubt about MPI_Gather in C"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jul 17, 2012 at 4:14 PM, Ghobad Zarrinchian
<br>
&lt;gzarrin.edu_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Dear friend
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Generally, if you have an array with x elements of a given type (e.g.
</span><br>
<span class="quotelev1">&gt; MPI_Int) you should use x as your SENDCOUNT parameter. Providing the name of
</span><br>
<span class="quotelev1">&gt; the SEND buffer just determine the start address of the buffer and you
</span><br>
<span class="quotelev1">&gt; should expilicitly specify how many elements should be sent.
</span><br>
<span class="quotelev1">&gt; Tu be sure, execute some sample programs and check the behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 17, 2012 at 10:24 PM, Maginot Junior &lt;maginot.junior_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello, I'm starting with openmpi and still have some doubts and I
</span><br>
<span class="quotelev2">&gt;&gt; think I'm making some confusion around here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When using MPI_Gather, if SENDBUF is an array of x elements SENDCOUNT
</span><br>
<span class="quotelev2">&gt;&gt; should be 1 if I want to send this entire array or should I use x as
</span><br>
<span class="quotelev2">&gt;&gt; SENDCOUNT parameter (telling to fetch x elements of SENDTYPE from
</span><br>
<span class="quotelev2">&gt;&gt; SENDBUF)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Maginot J&#250;nior
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>Thank you for answering.
<br>
<p>best regards,
<br>
<p><p><pre>
--
Maginot Jr.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19783.php">Anne M. Hammond: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>Previous message:</strong> <a href="19781.php">Ghobad Zarrinchian: "Re: [OMPI users] Simple Doubt about MPI_Gather in C"</a>
<li><strong>In reply to:</strong> <a href="19781.php">Ghobad Zarrinchian: "Re: [OMPI users] Simple Doubt about MPI_Gather in C"</a>
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
