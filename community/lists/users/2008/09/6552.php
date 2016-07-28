<?
$subject_val = "Re: [OMPI users] errors returned from openmpi-1.2.7 source code";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 15 16:56:57 2008" -->
<!-- isoreceived="20080915205657" -->
<!-- sent="Mon, 15 Sep 2008 13:56:53 -0700 (PDT)" -->
<!-- isosent="20080915205653" -->
<!-- name="Shafagh Jafer" -->
<!-- email="barfy27_at_[hidden]" -->
<!-- subject="Re: [OMPI users] errors returned from openmpi-1.2.7 source code" -->
<!-- id="51464.28856.qm_at_web34807.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1CCB5F86-5D4C-4873-9270-693778F89EE6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] errors returned from openmpi-1.2.7 source code<br>
<strong>From:</strong> Shafagh Jafer (<em>barfy27_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-15 16:56:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6553.php">Robert Latham: "Re: [OMPI users] bug in MPI_File_get_position_shared ?"</a>
<li><strong>Previous message:</strong> <a href="6551.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6547.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6585.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>Reply:</strong> <a href="6585.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
i am sending you my simulator's Makefile.common which points to openmpi, please take a look at it. Thanks a lot.
<br>
<p>--- On Mon, 9/15/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] errors returned from openmpi-1.2.7 source code
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Monday, September 15, 2008, 11:21 AM
<br>
<p>On Sep 14, 2008, at 1:24 PM, Shafagh Jafer wrote:
<br>
<p><span class="quotelev1">&gt; I installed openmpi-1.2.7 and tested the hello_c and ring_c examples  
</span><br>
<span class="quotelev1">&gt; on single and multiple node and worked fine. However, when I use  
</span><br>
<span class="quotelev1">&gt; openmpi with my simulator (by replacing the old mpich path with the  
</span><br>
<span class="quotelev1">&gt; new openmpi ) I get many errors reported from &quot;/openMPI/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/*.h&quot; . Please see the  
</span><br>
<span class="quotelev1">&gt; following snap shots:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It's not clear exactly what you did here.  Did you just replace  
<br>
MPICH's &quot;mpiCC&quot; with OMPI's &quot;mpiCC&quot;?  FWIW, this is
<br>
almost always the  
<br>
easiest way to compile MPI applications: use that implementation's  
<br>
&quot;wrapper&quot; compiler (I'm assuming you have a C++ code in this
<br>
case).
<br>
<p>These errors should not normally happen; they look kinda like you're  
<br>
somehow inadvertently mixing Open MPI and MPICH.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6552/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6552/Makefile.common">Makefile.common</a>
</ul>
<!-- attachment="Makefile.common" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6553.php">Robert Latham: "Re: [OMPI users] bug in MPI_File_get_position_shared ?"</a>
<li><strong>Previous message:</strong> <a href="6551.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6547.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6585.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>Reply:</strong> <a href="6585.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
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
