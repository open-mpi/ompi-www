<?
$subject_val = "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 31 21:39:15 2015" -->
<!-- isoreceived="20160101023915" -->
<!-- sent="Thu, 31 Dec 2015 18:39:10 -0800" -->
<!-- isosent="20160101023910" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers" -->
<!-- id="6CDF6B77-1A37-49F9-B1C0-EDDB17E535CD_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAFb48S-wP=0VezatcArGQ3juSi=O-qEbTb3ZdoFrGE0VN4us+A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-31 21:39:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/01/28212.php">Rob Latham: "[OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<li><strong>Previous message:</strong> <a href="28210.php">Matt Thompson: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<li><strong>In reply to:</strong> <a href="28210.php">Matt Thompson: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have no idea what ESMF is and am too lazy to google it, but I would consider a failure to build with dynamic OpenMPI libs to be a bug in EMSF, OpenMPI, the Intel compiler or the linker and devote the least amount of time possible to mitigating it. I guess that static linking is the easiest fix, but you should nonetheless be unforgiving of whoever broke your user experience. 
<br>
<p>Jeff
<br>
<p>Sent from my iPhone
<br>
<p><span class="quotelev1">&gt; On Dec 31, 2015, at 3:10 PM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Dec 31, 2015 at 4:37 PM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Try using the same LDFLAGS for PGI. I think you got exactly what you asked for from PGI when you used -Bstatic_pgi. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure what value there is to having mpirun be a static binary, other than enabling users to be ignorant of how LD_LIBRARY_PATH works and 
</span><br>
<span class="quotelev2">&gt;&gt; wasting space in your filesystem. You should instead consider rpath. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found one excuse. On a desktop of mine I build Open MPI with gfortran, PGI, and Intel. It turns out if I built Intel Fortran + Open MPI with --enable-shared, it would not compile ESMF correctly. I'm going to try and revisit it next week because I want Intel OpenMPI as shared so I can easily use Allinea MAP. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll try and make a good report for you/ESMF.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Matt Thompson
</span><br>
<span class="quotelev1">&gt; Man Among Men
</span><br>
<span class="quotelev1">&gt; Fulcrum of History
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28210.php">http://www.open-mpi.org/community/lists/users/2015/12/28210.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28211/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/01/28212.php">Rob Latham: "[OMPI users] cleaning up old ROMIO (MPI-IO) drivers"</a>
<li><strong>Previous message:</strong> <a href="28210.php">Matt Thompson: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<li><strong>In reply to:</strong> <a href="28210.php">Matt Thompson: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
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
