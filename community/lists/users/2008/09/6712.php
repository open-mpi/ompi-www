<?
$subject_val = "Re: [OMPI users] where is mpif.h ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 24 08:17:20 2008" -->
<!-- isoreceived="20080924121720" -->
<!-- sent="Wed, 24 Sep 2008 08:14:07 -0400" -->
<!-- isosent="20080924121407" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] where is mpif.h ?" -->
<!-- id="5D1E39BC-14A0-4D79-8D0D-B0A8AE61B01C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="722150.59171.qm_at_web34802.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] where is mpif.h ?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-24 08:14:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6713.php">Samuel Sarholz: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)"</a>
<li><strong>Previous message:</strong> <a href="6711.php">Thomas Ropars: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)"</a>
<li><strong>In reply to:</strong> <a href="6708.php">Shafagh Jafer: "Re: [OMPI users] where is mpif.h ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6716.php">Shafagh Jafer: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>Reply:</strong> <a href="6716.php">Shafagh Jafer: "Re: [OMPI users] where is mpif.h ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 24, 2008, at 12:15 AM, Shafagh Jafer wrote:
<br>
<p><span class="quotelev1">&gt; Ok now after i have made sure that my code acutally goes and  
</span><br>
<span class="quotelev1">&gt; includes the mpi.h from openmpi and not mpich, now I get really  
</span><br>
<span class="quotelev1">&gt; wierd errors. Below I will paste my mpic++ configurations from -- 
</span><br>
<span class="quotelev1">&gt; showme and the errors i gert from running my code.
</span><br>
<span class="quotelev1">&gt; ====================
</span><br>
<span class="quotelev1">&gt; [sjafer_at_DeepThought latest_cd++_timewarp]$ /opt/openmpi/1.2.7/bin/ 
</span><br>
<span class="quotelev1">&gt; mpic++ --showme:compile
</span><br>
<span class="quotelev1">&gt; -I/opt/openmpi/1.2.7/include -pthread
</span><br>
<span class="quotelev1">&gt; ====================
</span><br>
<span class="quotelev1">&gt; [sjafer_at_DeepThought latest_cd++_timewarp]$ /opt/openmpi/1.2.7/bin/ 
</span><br>
<span class="quotelev1">&gt; mpic++ --showme:link
</span><br>
<span class="quotelev1">&gt; -pthread -L/opt/openmpi/1.2.7/lib -lmpi_cxx -lmpi -lopen-rte -lopen- 
</span><br>
<span class="quotelev1">&gt; pal -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt; ====================
</span><br>
<p>The above looks about right.
<br>
<p><span class="quotelev1">&gt; =====ERRORS===========
</span><br>
<span class="quotelev1">&gt; In file included from /usr/local/include/g++-3/stl_tree.h:57,
</span><br>
<span class="quotelev1">&gt;                  from /usr/local/include/g++-3/map:31,
</span><br>
<span class="quotelev1">&gt;                  from /opt/openmpi/1.2.7/include/openmpi/ompi/mpi/ 
</span><br>
<span class="quotelev1">&gt; cxx/mpicxx.h:35,
</span><br>
<span class="quotelev1">&gt;                  from /opt/openmpi/1.2.7/include/mpi.h:1795,
</span><br>
<span class="quotelev1">&gt;                  from CommPhyMPI.cc:36:
</span><br>
<span class="quotelev1">&gt; /usr/local/include/g++-3/stl_alloc.h: At top level:
</span><br>
<span class="quotelev1">&gt; /usr/local/include/g++-3/stl_alloc.h:142: template with C linkage
</span><br>
<p>Are you compiling your application with the same C++ compiler that you  
<br>
compiled Open MPI with?
<br>
<p>If you use the --showme:compile|link flags to put OMPI's required  
<br>
flags into a building process (i.e., if you're not using OMPI's  
<br>
wrapper compilers), it is still strongly recommended that you use the  
<br>
same compilers that you used to compile and build Open MPI.  Is there  
<br>
a reason you stopped using the wrapper compilers?
<br>
<p>Although some users have reported successes with mixing-n-matching  
<br>
compilers, it is untested by the Open MPI team and unsupported.
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
<li><strong>Next message:</strong> <a href="6713.php">Samuel Sarholz: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)"</a>
<li><strong>Previous message:</strong> <a href="6711.php">Thomas Ropars: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)"</a>
<li><strong>In reply to:</strong> <a href="6708.php">Shafagh Jafer: "Re: [OMPI users] where is mpif.h ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6716.php">Shafagh Jafer: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>Reply:</strong> <a href="6716.php">Shafagh Jafer: "Re: [OMPI users] where is mpif.h ?"</a>
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
