<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 12 18:51:41 2006" -->
<!-- isoreceived="20060412225141" -->
<!-- sent="Wed, 12 Apr 2006 18:51:37 -0400" -->
<!-- isosent="20060412225137" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building 1.0.2 with Intel 9.0" -->
<!-- id="F6C70A08-95EC-4D81-BFC1-D915066532C2_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="443D7929.9000106_at_charter.net" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-12 18:51:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1045.php">Jorge Parra: "[OMPI users] Error in configuration for crosscompiler PowerPC"</a>
<li><strong>Previous message:</strong> <a href="1043.php">Jeffrey B. Layton: "Re: [OMPI users] Building 1.0.2 with Intel 9.0"</a>
<li><strong>In reply to:</strong> <a href="1043.php">Jeffrey B. Layton: "Re: [OMPI users] Building 1.0.2 with Intel 9.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm using the 8.0 and 9.0 intel compilers on a Xeon cluster without  
<br>
any problems. And I didn't have to specify any configure flags. Just  
<br>
the default one:
<br>
./configure --prefix=/usr/local/ompi/1.0.2 --with-mvapi=/usr/local/ 
<br>
topspin/ --enable-mpi-f90 --enable-mpi-f77 --enable-mpi-cxx --enable- 
<br>
mpi-profiling --enable-picky  --with-f90-max-array-dim=2 F77=/opt/ 
<br>
intel/fce/9.0/bin/ifort F90=/opt/intel/fce/9.0/bin/ifort CC=/opt/ 
<br>
intel/cce/9.0/bin/icc CXX=/opt/intel/cce/9.0/bin/icpc
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Apr 12, 2006, at 6:03 PM, Jeffrey B. Layton wrote:
<br>
<p><span class="quotelev1">&gt; Troy Telford wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, 12 Apr 2006 14:34:06 -0600, Jeffrey B. Layton
</span><br>
<span class="quotelev2">&gt;&gt; &lt;laytonjb_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Good afternoon,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    While we're on the subject of building OpenMPI-1.0.2 with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Intel, I'm having trouble building OpenMPI-1.0.2 with Intel 9.0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm starting to wonder if I'm doing something magical; I've compiled
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI 1.0.2 with Intel 9.0 (EM64T version) with no problems.  I do
</span><br>
<span class="quotelev2">&gt;&gt; use slightly different configure options, but you disable a few  
</span><br>
<span class="quotelev2">&gt;&gt; things
</span><br>
<span class="quotelev2">&gt;&gt; I don't.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can build it fine on the Opterons but some of the NPB codes fail
</span><br>
<span class="quotelev1">&gt; when running.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the Xeons, I can't seem to get it to build. I'll retry with your
</span><br>
<span class="quotelev1">&gt; configure options but I'll disable ROMIO.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1045.php">Jorge Parra: "[OMPI users] Error in configuration for crosscompiler PowerPC"</a>
<li><strong>Previous message:</strong> <a href="1043.php">Jeffrey B. Layton: "Re: [OMPI users] Building 1.0.2 with Intel 9.0"</a>
<li><strong>In reply to:</strong> <a href="1043.php">Jeffrey B. Layton: "Re: [OMPI users] Building 1.0.2 with Intel 9.0"</a>
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
