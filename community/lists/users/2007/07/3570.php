<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul  4 12:54:29 2007" -->
<!-- isoreceived="20070704165429" -->
<!-- sent="Wed, 4 Jul 2007 17:52:55 +0100 (WEST)" -->
<!-- isosent="20070704165255" -->
<!-- name="Ricardo Reis" -->
<!-- email="rreis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)" -->
<!-- id="alpine.DEB.0.99.0707041702250.2445_at_localhost" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="mailman.15.1183564824.32719.users_at_open-mpi.org" -->
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
<strong>From:</strong> Ricardo Reis (<em>rreis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-04 12:52:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3571.php">Graham Jenkins: "[OMPI users] Unable to find any HCAs .."</a>
<li><strong>Previous message:</strong> <a href="3569.php">Jeff Squyres: "Re: [OMPI users] mpi with icc,icpc and ifort :: segfault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3574.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3574.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you be a bit more specific than &quot;it dies&quot;?  Are you talking about
</span><br>
<span class="quotelev1">&gt; mpif90/mpif77, or your app?
</span><br>
<p>Sorry, tuspid me. When executing mpif90 or mpif77 I have a segfault and it 
<br>
doesn't compile. I've tried both with or without input (i.e., giving it 
<br>
something to compile or just executing it expecting to see the normal &quot;no 
<br>
files given&quot; kind of message). The intel suite compiled openmpi without 
<br>
problems.
<br>
<p>Going through the posting guidelines:
<br>
<p>5005.0 $ ompi_info --all
<br>
Segmentation fault
<br>
<p>(added an strace of this execution in attach).
<br>
(also added config.log e make.log)
<br>
<p>I have compiled lam 7.1.3 with this set of compilers and have no problem 
<br>
at all.
<br>
<p>&nbsp;&nbsp;thanks,
<br>
<p>&nbsp;&nbsp;Ricardo Reis
<br>
<p>&nbsp;&nbsp;'Non Serviam'
<br>
<p>&nbsp;&nbsp;PhD student @ Lasef
<br>
&nbsp;&nbsp;Computational Fluid Dynamics, High Performance Computing, Turbulence
<br>
&nbsp;&nbsp;&lt;<a href="http://www.lasef.ist.utl.pt">http://www.lasef.ist.utl.pt</a>&gt;
<br>
<p>&nbsp;&nbsp;&amp;
<br>
<p>&nbsp;&nbsp;Cultural Instigator @ R&#225;dio Zero
<br>
&nbsp;&nbsp;<a href="http://radio.ist.utl.pt">http://radio.ist.utl.pt</a>
<br>



<br><hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3570/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3570/make.log.bz2">make.log.bz2</a>
</ul>
<!-- attachment="make.log.bz2" -->
<hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3570/ompi_info.log.bz2">ompi_info.log.bz2</a>
</ul>
<!-- attachment="ompi_info.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3571.php">Graham Jenkins: "[OMPI users] Unable to find any HCAs .."</a>
<li><strong>Previous message:</strong> <a href="3569.php">Jeff Squyres: "Re: [OMPI users] mpi with icc,icpc and ifort :: segfault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3574.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3574.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
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
