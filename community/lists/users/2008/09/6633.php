<?
$subject_val = "Re: [OMPI users] MPI Finalize";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 19:49:10 2008" -->
<!-- isoreceived="20080919234910" -->
<!-- sent="Fri, 19 Sep 2008 19:49:06 -0400" -->
<!-- isosent="20080919234906" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Finalize" -->
<!-- id="ea86ce220809191649t65de7829qaac87e7d7cb9759e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3a37617f0809191510x5ca21dcjf946180c3bc47394_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Finalize<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-19 19:49:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6634.php">Shafagh Jafer: "[OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<li><strong>Previous message:</strong> <a href="6632.php">Jeroen Kleijer: "[OMPI users] TCP BTL in different subnets?"</a>
<li><strong>In reply to:</strong> <a href="6629.php">Gabriele Fatigati: "[OMPI users] MPI Finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6634.php">Shafagh Jafer: "[OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<li><strong>Reply:</strong> <a href="6634.php">Shafagh Jafer: "[OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<li><strong>Reply:</strong> <a href="6636.php">Gabriele Fatigati: "Re: [OMPI users] MPI Finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This sounds like you have left a file open when using the MPI-2 I/O.
<br>
You need to MPI_File_close() any files you have opened.
<br>
<p>On Fri, Sep 19, 2008 at 6:10 PM, Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; i'm developing a C code under OpenMPI 1.2.5 with parallel I/O by MPI-2.
</span><br>
<span class="quotelev1">&gt; I have a strange problem in the MPI_Finalize() routine. The code generates
</span><br>
<span class="quotelev1">&gt; message reported below :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Barrier
</span><br>
<span class="quotelev1">&gt; *** after MPI was finalized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my code, i don't use MPI_Barrier. So, this error is caused by internal
</span><br>
<span class="quotelev1">&gt; MPI_Barrier into MPI_Finalize. I've noted that if i disable MPI-2 I/O
</span><br>
<span class="quotelev1">&gt; routine, application works well. Is there a strange effect of MPI_Finalize
</span><br>
<span class="quotelev1">&gt; under MPI2 related MPI_File_open, MPI_File_close, MPI_File_Reat_at routines?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it Tel: +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati_at_[hidden]
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
<p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6634.php">Shafagh Jafer: "[OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<li><strong>Previous message:</strong> <a href="6632.php">Jeroen Kleijer: "[OMPI users] TCP BTL in different subnets?"</a>
<li><strong>In reply to:</strong> <a href="6629.php">Gabriele Fatigati: "[OMPI users] MPI Finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6634.php">Shafagh Jafer: "[OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<li><strong>Reply:</strong> <a href="6634.php">Shafagh Jafer: "[OMPI users] Segmentation Fault--libc.so.6(__libc_start_main..."</a>
<li><strong>Reply:</strong> <a href="6636.php">Gabriele Fatigati: "Re: [OMPI users] MPI Finalize"</a>
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
