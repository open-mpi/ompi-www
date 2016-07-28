<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 22 12:48:17 2007" -->
<!-- isoreceived="20070322164817" -->
<!-- sent="Thu, 22 Mar 2007 09:48:06 -0700" -->
<!-- isosent="20070322164806" -->
<!-- name="Mike Houston" -->
<!-- email="mhouston_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cell EIB support for OpenMPI" -->
<!-- id="4602B346.8080001_at_graphics.stanford.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4602AF2C.30803_at_lanl.gov" -->
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
<strong>From:</strong> Mike Houston (<em>mhouston_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-22 12:48:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2883.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Previous message:</strong> <a href="2881.php">Marcus G. Daniels: "[OMPI users] Cell EIB support for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2881.php">Marcus G. Daniels: "[OMPI users] Cell EIB support for OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2886.php">Marcus G. Daniels: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2886.php">Marcus G. Daniels: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's pretty cool.  The main issue with this, and addressed at the end 
<br>
of the report, is that the code size is going to be a problem as data 
<br>
and code must live in the same 256KB in each SPE.  They mention dynamic 
<br>
overlay loading, which is also how we deal with large code size, but 
<br>
things get tricky and slow with the potentially needed save and restore 
<br>
of registers and LS.  It would be interesting to see how much of MPI 
<br>
could be implemented and how much is really needed.  Maybe it's time to 
<br>
think about and MPI-ES spec?
<br>
<p>-Mike
<br>
<p>Marcus G. Daniels wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone investigated adding intra chip Cell EIB messaging to OpenMPI?
</span><br>
<span class="quotelev1">&gt; It seems like it ought to work.  This paper seems pretty convincing:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cs.fsu.edu/research/reports/TR-061215.pdf">http://www.cs.fsu.edu/research/reports/TR-061215.pdf</a>
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
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2883.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Previous message:</strong> <a href="2881.php">Marcus G. Daniels: "[OMPI users] Cell EIB support for OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2881.php">Marcus G. Daniels: "[OMPI users] Cell EIB support for OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2886.php">Marcus G. Daniels: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2886.php">Marcus G. Daniels: "Re: [OMPI users] Cell EIB support for OpenMPI"</a>
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
