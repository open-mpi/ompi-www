<?
$subject_val = "Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 09:25:12 2007" -->
<!-- isoreceived="20071101132512" -->
<!-- sent="Thu, 1 Nov 2007 06:25:03 -0700" -->
<!-- isosent="20071101132503" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue" -->
<!-- id="EB531B26-7887-4F25-911A-0EC68012DF5F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1193836938.S.6287.25008.webmail13.rediffmail.com.1193892728.14599_at_webmail.rediffmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-01 09:25:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4379.php">Jeff Squyres: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Previous message:</strong> <a href="4377.php">Amit Kumar Saha: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>In reply to:</strong> <a href="4376.php">Neeraj Chourasia: "[OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2012/07/19790.php">Jack Galloway: "Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
<li><strong>Reply:</strong> <a href="../../2012/07/19790.php">Jack Galloway: "Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 31, 2007, at 9:52 PM, Neeraj Chourasia wrote:
<br>
<p><span class="quotelev1">&gt;     but the program is running on TCP interconnect with same  
</span><br>
<span class="quotelev1">&gt; datasize and also on IB with small datasize say 1MB. So i dont  
</span><br>
<span class="quotelev1">&gt; think problem is in OpenMPI, it has to do something with IB logic,  
</span><br>
<span class="quotelev1">&gt; which probably doesnt work well with threads.
</span><br>
<p>Open MPi's TCP nominally supports threads, but I'd be surprised if it  
<br>
works consistently (i.e., it has not been tested thoroughly).  The  
<br>
Open MPI IB code definitely does not yet work with threads.
<br>
<p><span class="quotelev1">&gt; I also tried the program with MPI_THREAD_SERIALIZED, but in vain.
</span><br>
<p>Open MPI currently treats this as no different than THREAD_SINGLE;  
<br>
the problem is that you'll still have multiple different threads  
<br>
calling MPI simultaneously with your program.
<br>
<p><span class="quotelev1">&gt;  When is the version 1.3 scheduled to be released? Would it fix  
</span><br>
<span class="quotelev1">&gt; such issues?
</span><br>
<p>No.  We had been planning to make THREAD_MULTIPLE support available  
<br>
in the 1.3 series, but there honestly has not been enough customer  
<br>
demand for it such that we could not justify putting the resources /  
<br>
spending the time to finish it in Open MPI.  :-(  THREAD_MULTIPLE is  
<br>
still on the long-term roadmap, but it will not be included in the  
<br>
1.4 series.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4379.php">Jeff Squyres: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Previous message:</strong> <a href="4377.php">Amit Kumar Saha: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>In reply to:</strong> <a href="4376.php">Neeraj Chourasia: "[OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2012/07/19790.php">Jack Galloway: "Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
<li><strong>Reply:</strong> <a href="../../2012/07/19790.php">Jack Galloway: "Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
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
