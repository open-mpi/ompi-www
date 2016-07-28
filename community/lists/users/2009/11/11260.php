<?
$subject_val = "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 23 16:49:22 2009" -->
<!-- isoreceived="20091123214922" -->
<!-- sent="Mon, 23 Nov 2009 15:49:17 -0600" -->
<!-- isosent="20091123214917" -->
<!-- name="Natarajan CS" -->
<!-- email="csnataraj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend" -->
<!-- id="c4b5a27c0911231349i5bef916fr65ef4f2a50da21b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.BSF.2.00.0911231328520.66127_at_hurl.aict.ualberta.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend<br>
<strong>From:</strong> Natarajan CS (<em>csnataraj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-23 16:49:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11261.php">Eugene Loh: "Re: [OMPI users] Program hangs"</a>
<li><strong>Previous message:</strong> <a href="11259.php">Edmund Sumbar: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>In reply to:</strong> <a href="11259.php">Edmund Sumbar: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11267.php">George Bosilca: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>Reply:</strong> <a href="11267.php">George Bosilca: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>Reply:</strong> <a href="11268.php">Jeff Squyres: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh okay that explains the behaviour of MPI_SHORT, guess sizeof is going to
<br>
give me the same value no matter what MPI_Datatype I use? Thanks for the
<br>
quick response!
<br>
<p>On Mon, Nov 23, 2009 at 2:33 PM, Edmund Sumbar &lt;esumbar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, 23 Nov 2009, Natarajan CS wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  1) When I use MPI_SHORT instead of short to count the number of data
</span><br>
<span class="quotelev2">&gt;&gt; transferred I get an array that is half the size. (ie
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Isend(&amp;data2[0][0][0], (int) (sizeof(data2)/sizeof(MPI_SHORT)),
</span><br>
<span class="quotelev2">&gt;&gt; MPI_SHORT, rank, 123,
</span><br>
<span class="quotelev2">&gt;&gt; cartcomm,&amp;request[rank-1]);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_SHORT and the other data types are actually macros that resolve to
</span><br>
<span class="quotelev1">&gt; MPI_Datatype which is a pointer to a struct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Edmund Sumbar
</span><br>
<span class="quotelev1">&gt; AICT Research Support Group
</span><br>
<span class="quotelev1">&gt; esumbar_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 780.492.9360
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11260/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11261.php">Eugene Loh: "Re: [OMPI users] Program hangs"</a>
<li><strong>Previous message:</strong> <a href="11259.php">Edmund Sumbar: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>In reply to:</strong> <a href="11259.php">Edmund Sumbar: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11267.php">George Bosilca: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>Reply:</strong> <a href="11267.php">George Bosilca: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>Reply:</strong> <a href="11268.php">Jeff Squyres: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
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
