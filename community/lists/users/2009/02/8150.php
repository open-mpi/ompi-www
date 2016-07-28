<?
$subject_val = "Re: [OMPI users] Is this an OpenMPI bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 21 01:14:38 2009" -->
<!-- isoreceived="20090221061438" -->
<!-- sent="Sat, 21 Feb 2009 17:14:24 +1100" -->
<!-- isosent="20090221061424" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Is this an OpenMPI bug?" -->
<!-- id="1235196864.5834.30.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="fcfc36b90902201554r1265a60dhfed7b6e8ede5df2f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Is this an OpenMPI bug?<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-21 01:14:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8151.php">Raymond Wan: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<li><strong>Previous message:</strong> <a href="8149.php">-Gim: "[OMPI users] Is this an OpenMPI bug?"</a>
<li><strong>In reply to:</strong> <a href="8149.php">-Gim: "[OMPI users] Is this an OpenMPI bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8157.php">Jeff Squyres: "Re: [OMPI users] Is this an OpenMPI bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When you say &quot;a real variable&quot;, you mean default real, no crazy implicit
<br>
typing or anything?
<br>
<p>I think if x is real(8) you'd see what you say you see.
<br>
<p><p>On Fri, 2009-02-20 at 18:54 -0500, -Gim wrote:
<br>
<span class="quotelev1">&gt; I am trying to use the mpi_bcast function in fortran.  I am using
</span><br>
<span class="quotelev1">&gt; open-mpi-v-1.2.7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Say x is a real variable of size 100. np =100  I try to bcast this to
</span><br>
<span class="quotelev1">&gt; all the processors. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use call mpi_bcast(x,np,mpi_real,0,ierr) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I do this and try to print the value from the resultant
</span><br>
<span class="quotelev1">&gt; processor, exactly half the values gets broadcast.  In this case, I
</span><br>
<span class="quotelev1">&gt; get 50 correct values in the resultant processor and rest are junk.
</span><br>
<span class="quotelev1">&gt; Same happened when i tried with np=20.. Exactly 10 values gets
</span><br>
<span class="quotelev1">&gt; populated and rest are junk.!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ps: I am running this in a single processor. ( Just testing purposes )
</span><br>
<span class="quotelev1">&gt; I run this with &quot;mpirun -np 4 &lt;filename&gt; &quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheerio,
</span><br>
<span class="quotelev1">&gt; Gim
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8151.php">Raymond Wan: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<li><strong>Previous message:</strong> <a href="8149.php">-Gim: "[OMPI users] Is this an OpenMPI bug?"</a>
<li><strong>In reply to:</strong> <a href="8149.php">-Gim: "[OMPI users] Is this an OpenMPI bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8157.php">Jeff Squyres: "Re: [OMPI users] Is this an OpenMPI bug?"</a>
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
