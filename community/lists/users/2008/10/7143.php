<?
$subject_val = "Re: [OMPI users] Equivalent .h files";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 11:11:29 2008" -->
<!-- isoreceived="20081030151129" -->
<!-- sent="Thu, 30 Oct 2008 15:11:19 +0000" -->
<!-- isosent="20081030151119" -->
<!-- name="Benjamin Lamptey" -->
<!-- email="bllamptey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Equivalent .h files" -->
<!-- id="71ec5a370810300811n6147f5efob9230b7d6b6bb457_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="270E8A4B-04D7-4A7C-A278-5BA60DFE780B_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Equivalent .h files<br>
<strong>From:</strong> Benjamin Lamptey (<em>bllamptey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-30 11:11:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7144.php">Brock Palen: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>Previous message:</strong> <a href="7142.php">Gus Correa: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>In reply to:</strong> <a href="7139.php">Brock Palen: "Re: [OMPI users] Equivalent .h files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7144.php">Brock Palen: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>Reply:</strong> <a href="7144.php">Brock Palen: "Re: [OMPI users] Equivalent .h files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brock,
<br>
I am using the g95 compiler on Mac OS X.
<br>
<p>I had
<br>
include 'mpif.h'
<br>
<p>and I got the message &quot;could not open mpif.h&quot;.
<br>
<p>At your suggestion, I have added
<br>
USE mpi
<br>
include 'mpif.h'
<br>
<p>I get the message &quot;Can't open module file 'mpi.mod'
<br>
<p>What am I doing wrong?
<br>
Thanks
<br>
Ben
<br>
<p>On Thu, Oct 30, 2008 at 2:38 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; If your using fortran 90 the mpi module is best:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; use mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If 77 (or don't have a working module)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just like any other MPI library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp &lt;<a href="http://www.umich.edu/%7Ebrockp">http://www.umich.edu/%7Ebrockp</a>&gt;
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 30, 2008, at 10:33 AM, Benjamin Lamptey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hello,
</span><br>
<span class="quotelev2">&gt;&gt; I am new at using open-mpi and will like to know something basic.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What is the equivalent of the &quot;mpif.h&quot; in open-mpi which is normally
</span><br>
<span class="quotelev2">&gt;&gt; &quot;included&quot; at
</span><br>
<span class="quotelev2">&gt;&gt; the beginning of mpi codes (fortran in this case).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I shall appreciate that for cpp as well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ben
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7143/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7144.php">Brock Palen: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>Previous message:</strong> <a href="7142.php">Gus Correa: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>In reply to:</strong> <a href="7139.php">Brock Palen: "Re: [OMPI users] Equivalent .h files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7144.php">Brock Palen: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>Reply:</strong> <a href="7144.php">Brock Palen: "Re: [OMPI users] Equivalent .h files"</a>
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
