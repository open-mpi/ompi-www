<?
$subject_val = "Re: [OMPI users] fortran program with integer kind=8 using openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 28 20:37:37 2012" -->
<!-- isoreceived="20120629003737" -->
<!-- sent="Thu, 28 Jun 2012 17:37:28 -0700" -->
<!-- isosent="20120629003728" -->
<!-- name="David Warren" -->
<!-- email="warren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fortran program with integer kind=8 using openmpi" -->
<!-- id="4FECF8C8.8000304_at_atmos.washington.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-W617577862188B5DB705FDBD3E60_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] fortran program with integer kind=8 using openmpi<br>
<strong>From:</strong> David Warren (<em>warren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-28 20:37:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19701.php">Sébastien Boisvert: "[OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>Previous message:</strong> <a href="19699.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>In reply to:</strong> <a href="19698.php">William Au: "[OMPI users] fortran program with integer kind=8 using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19702.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>Reply:</strong> <a href="19702.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You should not have to recompile openmpi, but you do have to use the 
<br>
correct type. You can check the size of integers in your fortrana nd use 
<br>
MPI_INTEGER4 or MPI_INTEGER8 depending on what you get.
<br>
in gfortran use
<br>
integer i
<br>
if(sizeof(i) .eq. 8) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_int_type=MPI_INTEGER8
<br>
else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_int_type=MPI_INTEGER4
<br>
endif
<br>
then use mpi_int_type for the type in the calls
<br>
<p><p><p>On 06/28/12 16:00, William Au wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I try to compile my fortran program in linux with gfortran44 using 
</span><br>
<span class="quotelev1">&gt; option  -fdefault-integer-8,
</span><br>
<span class="quotelev1">&gt; then all my integer will of kind=8.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is what should I do with openmpi? I am using 1.6, should I 
</span><br>
<span class="quotelev1">&gt; compile openmpi
</span><br>
<span class="quotelev1">&gt; with the same options? Will it get the correct size of MPI_INTEGER and 
</span><br>
<span class="quotelev1">&gt; MPI_INTEGER2?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; William
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19700/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19701.php">Sébastien Boisvert: "[OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>Previous message:</strong> <a href="19699.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>In reply to:</strong> <a href="19698.php">William Au: "[OMPI users] fortran program with integer kind=8 using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19702.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>Reply:</strong> <a href="19702.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
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
