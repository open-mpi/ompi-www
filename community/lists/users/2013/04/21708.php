<?
$subject_val = "Re: [OMPI users] Problem with MPI functions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 11 08:29:56 2013" -->
<!-- isoreceived="20130411122956" -->
<!-- sent="Thu, 11 Apr 2013 12:29:51 +0000" -->
<!-- isosent="20130411122951" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI functions" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4400241B_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="COL126-W2153AF7893431B63DF32F2FEDF0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI functions<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-11 08:29:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21709.php">Rodrigo Gómez Vázquez: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<li><strong>Previous message:</strong> <a href="21707.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Is Open MPI 1.6.4 viable on Mac OS X 10.6.8 ?"</a>
<li><strong>In reply to:</strong> <a href="21650.php">Ng Shi Wei: "[OMPI users] Problem with MPI functions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying.
<br>
<p>If you have non-contiguous buffers, you might want to investigate using MPI datatypes to describe the memory that you want to send/receive.  Google around; you'll find bunches of tutorials on these kinds of things.
<br>
<p>However, be aware that for a large 2D array, this generally only works well if your 2D array is uniformly distributed throughout memory.
<br>
<p>It would be best if you could actually malloc/new your 2D array as one giant 1D array and then setup the 2nd dimension/row pointers to point to the Right Places in that 1D array.  Then you can both treat it as a large, contiguous buffer as well as make your own custom datatypes (e.g., a datatype for columns in the array).
<br>
<p><p>On Apr 2, 2013, at 3:28 AM, Ng Shi Wei &lt;nsw_1216_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am new in OpenMPI and writing a parallel processing program using openmpi in C++ language. I would like to use the function MPI_Allreduce() but my sendbuf and recvbuf datatype are pointers/arrays (2D). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it possible to pass in and out the pointers/arrays using the MPI_Allreduce() ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If yes, hope can have some guidelines provided on how to write the command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Shi Wei
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21709.php">Rodrigo Gómez Vázquez: "Re: [OMPI users] mpirun hangs: &quot;hello&quot; test in single machine"</a>
<li><strong>Previous message:</strong> <a href="21707.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Is Open MPI 1.6.4 viable on Mac OS X 10.6.8 ?"</a>
<li><strong>In reply to:</strong> <a href="21650.php">Ng Shi Wei: "[OMPI users] Problem with MPI functions"</a>
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
