<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 19 18:56:40 2007" -->
<!-- isoreceived="20070319225640" -->
<!-- sent="Mon, 19 Mar 2007 17:56:30 -0500" -->
<!-- isosent="20070319225630" -->
<!-- name="Marius Schamschula" -->
<!-- email="marius_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9" -->
<!-- id="05A87C6E-B93A-4BA3-973A-417553900D61_at_physics.aamu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2CFF38E3-BBA2-417D-9EE8-CB6CDE0AC1DA_at_lanl.gov" -->
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
<strong>From:</strong> Marius Schamschula (<em>marius_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-19 18:56:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2845.php">Bill Saphir: "[OMPI users] mpirun exit status for non-existent executable"</a>
<li><strong>Previous message:</strong> <a href="2843.php">George Bosilca: "Re: [OMPI users] quadrics"</a>
<li><strong>In reply to:</strong> <a href="2842.php">Brian Barrett: "Re: [OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Brian,
<br>
<p>The patch worked for finishing the Mac OS X 10.3 build.
<br>
<p>Also, thanks for the hint for setting FC. It was sitting there in  
<br>
plain sight, but I was looking for F95...
<br>
<p>On Mar 19, 2007, at 12:28 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; Hi -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the bug report.  I've fixed the problem in SVN and it  
</span><br>
<span class="quotelev1">&gt; will likely be part of the 1.2.1 release (whenever that happens).   
</span><br>
<span class="quotelev1">&gt; In the mean time, I've attached a patch that should apply to the  
</span><br>
<span class="quotelev1">&gt; 1.2 tarball that will also fix the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The environment variables you want for specifying the Fortran  
</span><br>
<span class="quotelev1">&gt; compilers are F77 for Fortran 77 and FC for Fortran 90/95/03.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ompi_1.2_osx_10.3.diff&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Marius
<br>
<pre>
--
Marius Schamschula,  Alabama A &amp; M University, Department of Physics
     The Center for Hydrology Soil Climatology and Remote Sensing
    <a href="http://optics.physics.aamu.edu/">http://optics.physics.aamu.edu/</a> - <a href="http://www.physics.aamu.edu/">http://www.physics.aamu.edu/</a>
           <a href="http://wx.aamu.edu/">http://wx.aamu.edu/</a> - <a href="http://www.aamu.edu/hscars/">http://www.aamu.edu/hscars/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2844/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2845.php">Bill Saphir: "[OMPI users] mpirun exit status for non-existent executable"</a>
<li><strong>Previous message:</strong> <a href="2843.php">George Bosilca: "Re: [OMPI users] quadrics"</a>
<li><strong>In reply to:</strong> <a href="2842.php">Brian Barrett: "Re: [OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9"</a>
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
