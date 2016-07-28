<?
$subject_val = "Re: [OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 08:38:59 2009" -->
<!-- isoreceived="20090423123859" -->
<!-- sent="Thu, 23 Apr 2009 08:38:53 -0400" -->
<!-- isosent="20090423123853" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running openMPI program" -->
<!-- id="DAD8CE57-93FE-4E1E-9A21-4A066D85D3EA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="a599d60e0904230504xd074da3m464cd24c817e0c01_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with running openMPI program<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-23 08:38:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9067.php">viral.vkm_at_[hidden]: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>Previous message:</strong> <a href="9065.php">shan axida: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9063.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9060.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI is an API specification, meaning that correctly-written MPI  
<br>
applications are source-code compatible across all MPI  
<br>
implementations.  Hence, these tutorial examples will compile and run  
<br>
with Open MPI just as well as they will with LAM/MPI (I actually  
<br>
helped write those tutorial examples several years ago :-) ).
<br>
<p>You just need to be sure to recompile/re-link each MPI application  
<br>
with the MPI implementation that you want to use.  For example, you  
<br>
can't compile an MPI application with LAM and use Open MPI's &quot;mpirun&quot;  
<br>
to run it -- you need to compile with Open MPI and run with Open MPI's  
<br>
mpirun.
<br>
<p>Make sense?
<br>
<p><p>On Apr 23, 2009, at 8:04 AM, Ankush Kaul wrote:
<br>
<p><span class="quotelev1">&gt; i have gone through that course, but i still am not at a stage where  
</span><br>
<span class="quotelev1">&gt; i can develop a MPI program, so was looking for some IP programs on  
</span><br>
<span class="quotelev1">&gt; the net.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will try the imageproc.c program which i found <a href="http://lam-mpi.lzu.edu.cn/tutorials/nd/part1/">http://lam-mpi.lzu.edu.cn/tutorials/nd/part1/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hope it runs on openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Apr 23, 2009 at 5:07 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Yes, they will run.  Note that these are toy image processing  
</span><br>
<span class="quotelev1">&gt; examples; they are no substitute for a real image processing  
</span><br>
<span class="quotelev1">&gt; application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might want to look at a full MPI tutorial to get an  
</span><br>
<span class="quotelev1">&gt; understanding of MPI itself:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  <a href="http://ci-tutor.ncsa.uiuc.edu/login.php">http://ci-tutor.ncsa.uiuc.edu/login.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Register (it's free), login, and look for the Introduction to MPI  
</span><br>
<span class="quotelev1">&gt; tutorial.  It's quite good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 23, 2009, at 6:59 AM, Ankush Kaul wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found some programs on this link : <a href="http://lam-mpi.lzu.edu.cn/tutorials/nd/part1/">http://lam-mpi.lzu.edu.cn/tutorials/nd/part1/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; will these program run on my openmpi cluster?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; actually i want to run some image processing program on my cluster,  
</span><br>
<span class="quotelev1">&gt; as i cannot write the entire code of the program can anyone tell  
</span><br>
<span class="quotelev1">&gt; where can i get ip programs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know this is the wrong place to ask but thought would give it a  
</span><br>
<span class="quotelev1">&gt; try as i cannot find anything on the net.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9067.php">viral.vkm_at_[hidden]: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>Previous message:</strong> <a href="9065.php">shan axida: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9063.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9060.php">Jeff Squyres: "Re: [OMPI users] Problem with running openMPI program"</a>
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
