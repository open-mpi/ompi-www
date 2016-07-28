<?
$subject_val = "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv...";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 13 13:26:53 2009" -->
<!-- isoreceived="20090513172653" -->
<!-- sent="Wed, 13 May 2009 13:26:47 -0400" -->
<!-- isosent="20090513172647" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..." -->
<!-- id="f869b68c0905131026k22ec04d7k14abfbc72ca17351_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="863786.46893.qm_at_web58206.mail.re3.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv...<br>
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-13 13:26:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9326.php">Jeff Squyres: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<li><strong>Previous message:</strong> <a href="9324.php">Le Duy Khanh: "[OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<li><strong>In reply to:</strong> <a href="9324.php">Le Duy Khanh: "[OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9326.php">Jeff Squyres: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You could use a separate namespace (if you are using C++) and define
<br>
your functions there...
<br>
<p>Durga
<br>
<p>On Wed, May 13, 2009 at 1:20 PM, Le Duy Khanh &lt;khanhtn24_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Dear,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;I intend to override some MPI functions such as MPI_Init, MPI_Recv... but I
</span><br>
<span class="quotelev1">&gt; don't want to dig into OpenMPI source code.Therefore, I am thinking of a way
</span><br>
<span class="quotelev1">&gt; to create a lib called &quot;mympi.h&quot; in which I will #include &quot;mpi.h&quot; to
</span><br>
<span class="quotelev1">&gt; override those functions. I will create a new interface with exactly the
</span><br>
<span class="quotelev1">&gt; same signatures like MPI_Init (because users are familiar with those
</span><br>
<span class="quotelev1">&gt; functions). However, the problem is that I don't know how to override those
</span><br>
<span class="quotelev1">&gt; functions because as I know, C/C++ doesn't allow us to override functions
</span><br>
<span class="quotelev1">&gt; (only overload them).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;Could you please show me how to override OMPI functions but still keep the
</span><br>
<span class="quotelev1">&gt; same function names and signatures?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;Thank you so much for your time and consideration
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le , Duy Khanh
</span><br>
<span class="quotelev1">&gt; Cellphone: (+84)958521704
</span><br>
<span class="quotelev1">&gt; Faculty of Computer Science and Engineering
</span><br>
<span class="quotelev1">&gt; Ho Chi Minh city University of Technology , Viet Nam
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9326.php">Jeff Squyres: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<li><strong>Previous message:</strong> <a href="9324.php">Le Duy Khanh: "[OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<li><strong>In reply to:</strong> <a href="9324.php">Le Duy Khanh: "[OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9326.php">Jeff Squyres: "Re: [OMPI users] How to override MPI functions such as MPI_Init, MPI_Recv..."</a>
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
