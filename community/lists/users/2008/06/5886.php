<?
$subject_val = "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 16 12:49:52 2008" -->
<!-- isoreceived="20080616164952" -->
<!-- sent="Mon, 16 Jun 2008 09:42:55 -0700" -->
<!-- isosent="20080616164255" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] gfortran bindings apparently not built on mac os leopard" -->
<!-- id="08B5C06D-8B64-4189-ADAE-E9FBE6BE567F_at_rain.org" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="C47BF017.5D40%vgweirs_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] gfortran bindings apparently not built on mac os leopard<br>
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-16 12:42:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5887.php">Tony Smith: "[OMPI users] help me please, about Open MPI"</a>
<li><strong>Previous message:</strong> <a href="5885.php">Doug Reeder: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>In reply to:</strong> <a href="5883.php">Weirs, V Gregory: "[OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5890.php">Weirs, V Gregory: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greg,
<br>
<p>In your run_output file you don't appear to be using the openmpi  
<br>
versions that you built. From your make-install.out file it looks  
<br>
like your versions are in /usr/local/openmpi/1.2.6-gcc4.0/bin. You  
<br>
need to use that absolute path or prepend that path to your PATH  
<br>
environment variable.
<br>
<p>Doug Reeder
<br>
On Jun 16, 2008, at 9:25 AM, Weirs, V Gregory wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am having trouble building mpif77/mpif90 with gfortran on Mac OS  
</span><br>
<span class="quotelev1">&gt; 10.5. Or maybe just running. The configure, make all, and make  
</span><br>
<span class="quotelev1">&gt; install seemed to go just fine, finding my gfortran and apparently  
</span><br>
<span class="quotelev1">&gt; using it, but the scripts mpif77 and mpif90 give the error that my  
</span><br>
<span class="quotelev1">&gt; openmpi was not built with fortran bindings. Mpicc and mpicxx don&#146;t  
</span><br>
<span class="quotelev1">&gt; give this error.  Ompi_info says the f77 and f90 bindings were built.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know that OS X 10.5 comes with openmpi mpicc and mpicxx  
</span><br>
<span class="quotelev1">&gt; installed, but not fortran bindings, and I was careful to put the  
</span><br>
<span class="quotelev1">&gt; openmpi I built first in the path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some run output (mpif77 &#151;version, ompi_info), config.log,  
</span><br>
<span class="quotelev1">&gt; configure.log, make.out, make-install.out are in the attached tarball.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any clues?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; V. Gregory Weirs
</span><br>
<span class="quotelev1">&gt; Sandia National Laboratories                vgweirs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; P.O.Box 5800, MS 0378                        phone: 505 845 2032
</span><br>
<span class="quotelev1">&gt; Albuquerque, NM 87185-0378              fax: 505 284 0154
</span><br>
<span class="quotelev1">&gt; &lt;dig.tar.gz&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5886/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5887.php">Tony Smith: "[OMPI users] help me please, about Open MPI"</a>
<li><strong>Previous message:</strong> <a href="5885.php">Doug Reeder: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>In reply to:</strong> <a href="5883.php">Weirs, V Gregory: "[OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5890.php">Weirs, V Gregory: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
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
