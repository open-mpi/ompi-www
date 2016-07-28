<?
$subject_val = "Re: [OMPI users] where is mpif.h ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 24 10:48:03 2008" -->
<!-- isoreceived="20080924144803" -->
<!-- sent="Wed, 24 Sep 2008 07:47:58 -0700 (PDT)" -->
<!-- isosent="20080924144758" -->
<!-- name="Shafagh Jafer" -->
<!-- email="barfy27_at_[hidden]" -->
<!-- subject="Re: [OMPI users] where is mpif.h ?" -->
<!-- id="189867.42022.qm_at_web34803.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5D1E39BC-14A0-4D79-8D0D-B0A8AE61B01C_at_cisco.com" -->
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
<strong>From:</strong> Shafagh Jafer (<em>barfy27_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-24 10:47:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6717.php">Shafagh Jafer: "[OMPI users] which gcc to compile openmpi with?"</a>
<li><strong>Previous message:</strong> <a href="6715.php">Thomas Ropars: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)"</a>
<li><strong>In reply to:</strong> <a href="6712.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6718.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>Reply:</strong> <a href="6718.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I am using the wrapper compilers. But in my simulator Makefile.common I am including the files from gcc and g++. Please see my attached makefile. I am also attaching my previouse Makefile.common which I was MPICH instead of openmpi. Please see both of them and see the defferences, you will see that in the new makefile, I am only commenting the MPICH related stuff and replacing gcc and g++ with mpicc and mpic++. Is there anything else I am doing wrong or I am not supposed not have in my new Make file??
<br>
<p>--- On Wed, 9/24/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] where is mpif.h ?
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Wednesday, September 24, 2008, 5:14 AM
<br>
<p>On Sep 24, 2008, at 12:15 AM, Shafagh Jafer wrote:
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
      


</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6716/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6716/OMPIMakefile.common">OMPIMakefile.common</a>
</ul>
<!-- attachment="OMPIMakefile.common" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6716/MPICHMakefile.common">MPICHMakefile.common</a>
</ul>
<!-- attachment="MPICHMakefile.common" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6717.php">Shafagh Jafer: "[OMPI users] which gcc to compile openmpi with?"</a>
<li><strong>Previous message:</strong> <a href="6715.php">Thomas Ropars: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)"</a>
<li><strong>In reply to:</strong> <a href="6712.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6718.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>Reply:</strong> <a href="6718.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
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
