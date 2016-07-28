<?
$subject_val = "Re: [OMPI users] MPI::WORLD_COMM.Send Complex class structure definedin boost::ptr_vector";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  2 16:01:27 2009" -->
<!-- isoreceived="20091202210127" -->
<!-- sent="Wed, 2 Dec 2009 16:01:22 -0500" -->
<!-- isosent="20091202210122" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI::WORLD_COMM.Send Complex class structure definedin boost::ptr_vector" -->
<!-- id="3C703C69-8DCE-443D-87FC-2D5B2E635561_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="751c63ee0912021137n6e1f2535tbd7d5589f50d99c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI::WORLD_COMM.Send Complex class structure definedin boost::ptr_vector<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-02 16:01:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11377.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Previous message:</strong> <a href="11375.php">Ivan Marin: "[OMPI users] MPI::WORLD_COMM.Send Complex class structure defined in boost::ptr_vector"</a>
<li><strong>In reply to:</strong> <a href="11375.php">Ivan Marin: "[OMPI users] MPI::WORLD_COMM.Send Complex class structure defined in boost::ptr_vector"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
boost.MPI is probably your best bet.  They export some nice C++ functionality through MPI.
<br>
<p>On Dec 2, 2009, at 2:37 PM, Ivan Marin wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm developing an groundwater simulation application that will use openmpi to distribute the data and solve a linear system. The problem is that my primary data structure is composed of a base class and derived classes, and they are inserted in a boost ptr_vector, as they are of different class types, with inheritance and pointers to other members of the vector. I would like to pass parts of this vector to the processes, to build locally the matrix, but I don't know how to do it. I followed the discussion on this thread (<a href="http://www.open-mpi.org/community/lists/users/2009/07/9852.php">http://www.open-mpi.org/community/lists/users/2009/07/9852.php</a>), and the route to use boost.MPI the only way out? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can provide the class template, if this would help. I'm using openmpi 1.3.3 on debian sid amd64. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ivan Marin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Laborat&#243;rio de Hidr&#225;ulica Computacional - LHC
</span><br>
<span class="quotelev1">&gt; Departamento de Hidr&#225;ulica e Saneamento - SHS
</span><br>
<span class="quotelev1">&gt; Escola de Engenharia de S&#227;o Carlos - EESC
</span><br>
<span class="quotelev1">&gt; Universidade de S&#227;o Paulo - USP
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://albatroz.shs.eesc.usp.br">http://albatroz.shs.eesc.usp.br</a>
</span><br>
<span class="quotelev1">&gt; +55 16 3373 8270
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
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11377.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Previous message:</strong> <a href="11375.php">Ivan Marin: "[OMPI users] MPI::WORLD_COMM.Send Complex class structure defined in boost::ptr_vector"</a>
<li><strong>In reply to:</strong> <a href="11375.php">Ivan Marin: "[OMPI users] MPI::WORLD_COMM.Send Complex class structure defined in boost::ptr_vector"</a>
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
