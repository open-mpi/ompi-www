<?
$subject_val = "Re: [OMPI users] Problem specifying compiler (pgi)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 11:03:45 2009" -->
<!-- isoreceived="20090904150345" -->
<!-- sent="Fri, 4 Sep 2009 09:03:39 -0600" -->
<!-- isosent="20090904150339" -->
<!-- name="Ben Mayer" -->
<!-- email="bmayer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem specifying compiler (pgi)" -->
<!-- id="23557971-6DFD-4CA9-A58F-8C08B916581C_at_ucar.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="66F175CD-450F-45F8-A1BE-21E7FE32CBD2_at_ucar.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem specifying compiler (pgi)<br>
<strong>From:</strong> Ben Mayer (<em>bmayer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-04 11:03:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10573.php">Gus Correa: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>Previous message:</strong> <a href="10571.php">Greg Fischer: "[OMPI users] error compiling OpenMPI 1.3.3 with Intel compiler suite 11.1 on Linux"</a>
<li><strong>In reply to:</strong> <a href="10570.php">Ben Mayer: "[OMPI users] Problem specifying compiler (pgi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10574.php">Gus Correa: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>Reply:</strong> <a href="10574.php">Gus Correa: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have received two private emails saying to check my PATH and  
<br>
LD_LIBRARY_PATH.
<br>
<p>The path is OK and I am using the full pathname to make sure I get the  
<br>
right exe. I also checked the LD_LIBRARY_PATH and that appears to be OK.
<br>
<p><p><p>On Sep 4, 2009, at 7:28 AM, Ben Mayer wrote:
<br>
<p><span class="quotelev1">&gt; I am using PGI 9.0-1 to compile OpenMPI 1.3.3. I use the following  
</span><br>
<span class="quotelev1">&gt; command to configure OpenMPI:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure CC=pgcc CXX=pgCC FC=pgf90 F90=pgf90 --prefix=/shared/ben/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The PGI compilers are in the path. The make and make install  
</span><br>
<span class="quotelev1">&gt; complete successfully. The problem that I am having is that why I  
</span><br>
<span class="quotelev1">&gt; actually run mpif90 (or any of other mpi* executables) it returns a  
</span><br>
<span class="quotelev1">&gt; message like &quot;gfortran: no input files&quot;. When I compiler when those  
</span><br>
<span class="quotelev1">&gt; files it is calling gcc compilers. There is also some vt* files  
</span><br>
<span class="quotelev1">&gt; (vtf90, etc) which appear to be for VampirTrace integration. They  
</span><br>
<span class="quotelev1">&gt; point to the proper pgi compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea what is going on here and how to fix it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ben Mayer
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10572/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10573.php">Gus Correa: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>Previous message:</strong> <a href="10571.php">Greg Fischer: "[OMPI users] error compiling OpenMPI 1.3.3 with Intel compiler suite 11.1 on Linux"</a>
<li><strong>In reply to:</strong> <a href="10570.php">Ben Mayer: "[OMPI users] Problem specifying compiler (pgi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10574.php">Gus Correa: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>Reply:</strong> <a href="10574.php">Gus Correa: "Re: [OMPI users] Problem specifying compiler (pgi)"</a>
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
