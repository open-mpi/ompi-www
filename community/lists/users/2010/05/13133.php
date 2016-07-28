<?
$subject_val = "Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 23 15:43:09 2010" -->
<!-- isoreceived="20100523194309" -->
<!-- sent="Sun, 23 May 2010 12:43:04 -0700" -->
<!-- isosent="20100523194304" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers" -->
<!-- id="A5884322-50AC-40C1-A1EA-FBD4927128A6_at_cox.net" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="C81EC5EB.94C9%mwglass_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers<br>
<strong>From:</strong> Doug Reeder (<em>dlr1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-23 15:43:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13134.php">Yves Caniou: "[OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="13132.php">Olivier Riff: "Re: [OMPI users] General question on the implementation ofa&quot;scheduler&quot; on client side..."</a>
<li><strong>In reply to:</strong> <a href="13131.php">Glass, Micheal W: "[OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13143.php">Glass, Micheal W: "Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike,
<br>
<p>Are you sure that you are getting the openmpi that you built and not  
<br>
the one supplied w/ OS X. I use modules to make sure that I am getting  
<br>
the openmpi version I build instead of the OS X suppleid version.
<br>
<p>Doug Reeder
<br>
On May 23, 2010, at 10:45 AM, Glass, Micheal W wrote:
<br>
<p><span class="quotelev1">&gt; I&#146;m having problems building a working version of openmpi 1.4.1/2 on  
</span><br>
<span class="quotelev1">&gt; a new Apple Mac Pro (dual quad-core nehalem processors) running snow  
</span><br>
<span class="quotelev1">&gt; leopard (10.6.3) with the Intel 11.1 compilers. I&#146;ve tried the Intel  
</span><br>
<span class="quotelev1">&gt; 11.1.084 and 11.1.088 versions of the compilers.  Everything appears  
</span><br>
<span class="quotelev1">&gt; to build just fine and some mpi test programs run but whenever I run  
</span><br>
<span class="quotelev1">&gt; a program with an MPI_Reduce() or MPI_Allreduce() I get a segfault  
</span><br>
<span class="quotelev1">&gt; (even with np=1).  I&#146;m building openmpi with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure &#151;without-xgrid &#151;prefix=&lt;my install path&gt; CC=icc CXX=icpc  
</span><br>
<span class="quotelev1">&gt; F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I build openmpi 1.4.1/2 with the GNU 4.3 compilers (installed  
</span><br>
<span class="quotelev1">&gt; via macports) using:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure &#151;without-xgrid &#151;prefix=&lt;my install path&gt; CC=gcc-mp-4.3  
</span><br>
<span class="quotelev1">&gt; CXX=g++-mp-4.3 F77=gfortran-mp-4.3 FC=gfortran-mp-4.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; all my mpi tests (6000+) run fine.  Any help would be appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Mike
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13133/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13134.php">Yves Caniou: "[OMPI users] Program does not finish after MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="13132.php">Olivier Riff: "Re: [OMPI users] General question on the implementation ofa&quot;scheduler&quot; on client side..."</a>
<li><strong>In reply to:</strong> <a href="13131.php">Glass, Micheal W: "[OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13143.php">Glass, Micheal W: "Re: [OMPI users] Building 1.4.x on mac snow leopard with intel compilers"</a>
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
