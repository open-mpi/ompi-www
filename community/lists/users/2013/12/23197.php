<?
$subject_val = "Re: [OMPI users] Configuration for rendezvous and eager protocols: two-sided comm";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 16 03:49:42 2013" -->
<!-- isoreceived="20131216084942" -->
<!-- sent="Mon, 16 Dec 2013 02:49:01 -0600" -->
<!-- isosent="20131216084901" -->
<!-- name="Siddhartha Jana" -->
<!-- email="siddharthajana24_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configuration for rendezvous and eager protocols: two-sided comm" -->
<!-- id="CAPkf6e11tW5c+ttfz7DRjkJmyVMbSmc9y5y3-i_VSCGqU+PheQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2094114483.51493.1387183282958.JavaMail.root_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configuration for rendezvous and eager protocols: two-sided comm<br>
<strong>From:</strong> Siddhartha Jana (<em>siddharthajana24_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-16 03:49:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23198.php">Ake Sandgren: "[OMPI users] typo in opal/memoryhooks/memory.h (1.6.5)"</a>
<li><strong>Previous message:</strong> <a href="23196.php">Christoph Niethammer: "Re: [OMPI users] Configuration for rendezvous and eager protocols:	two-sided comm"</a>
<li><strong>In reply to:</strong> <a href="23196.php">Christoph Niethammer: "Re: [OMPI users] Configuration for rendezvous and eager protocols:	two-sided comm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23201.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
<li><strong>Reply:</strong> <a href="23201.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Christoph.
<br>
I should have looked into the FAQ section on MCA params setting @ :
<br>
<a href="http://www.open-mpi.org/faq/?category=tuning#available-mca-params">http://www.open-mpi.org/faq/?category=tuning#available-mca-params</a>
<br>
<p>Thanks again,
<br>
-- Siddhartha
<br>
<p><p>On 16 December 2013 02:41, Christoph Niethammer &lt;niethammer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Siddhartha,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Send/Recv in Open MPI implements both protocols and chooses based on
</span><br>
<span class="quotelev1">&gt; the message size which one to use.
</span><br>
<span class="quotelev1">&gt; You can use the mca parameter &quot;btl_sm_eager_limit&quot; to modify the behaviour.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here the corresponding info obtained from the ompi_info tool:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;btl_sm_eager_limit&quot; (current value: &lt;4096&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt; Maximum size (in bytes) of &quot;short&quot; messages (must be &gt;= 1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Christoph Niethammer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Christoph Niethammer
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt; 70569 Stuttgart
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tel: ++49(0)711-685-87203
</span><br>
<span class="quotelev1">&gt; email: niethammer_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- Urspr&#252;ngliche Mail -----
</span><br>
<span class="quotelev1">&gt; Von: &quot;Siddhartha Jana&quot; &lt;siddharthajana24_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; An: &quot;OpenMPI users mailing list&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Gesendet: Samstag, 14. Dezember 2013 13:44:12
</span><br>
<span class="quotelev1">&gt; Betreff: [OMPI users] Configuration for rendezvous and eager protocols:
</span><br>
<span class="quotelev1">&gt; two-sided comm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In OpenMPI, are MPI_Send, MPI_Recv (and friends) implemented using
</span><br>
<span class="quotelev1">&gt; rendezvous protocol or eager protocol?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If both, is there a way to choose one or the other during runtime or while
</span><br>
<span class="quotelev1">&gt; building the library?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If there is a threshold of the message size that dictates the protocol to
</span><br>
<span class="quotelev1">&gt; be used, is there a way I can alter that threshold value?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If different protocols were used for different versions of the library in
</span><br>
<span class="quotelev1">&gt; the past, could someone please direct me to the exact version numbers of
</span><br>
<span class="quotelev1">&gt; the implementations that used one or the other protocol?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot,
</span><br>
<span class="quotelev1">&gt; Siddhartha
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23197/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23198.php">Ake Sandgren: "[OMPI users] typo in opal/memoryhooks/memory.h (1.6.5)"</a>
<li><strong>Previous message:</strong> <a href="23196.php">Christoph Niethammer: "Re: [OMPI users] Configuration for rendezvous and eager protocols:	two-sided comm"</a>
<li><strong>In reply to:</strong> <a href="23196.php">Christoph Niethammer: "Re: [OMPI users] Configuration for rendezvous and eager protocols:	two-sided comm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23201.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
<li><strong>Reply:</strong> <a href="23201.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
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
