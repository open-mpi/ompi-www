<?
$subject_val = "Re: [OMPI users] OpenMPI - compilation";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 15 09:35:46 2007" -->
<!-- isoreceived="20071115143546" -->
<!-- sent="Thu, 15 Nov 2007 06:34:51 -0800" -->
<!-- isosent="20071115143451" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI - compilation" -->
<!-- id="06D4D7E3-7B89-45FA-80FD-668BA1FF9DD4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="941193370711142248r601677dem967f35d4fff3e8c0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI - compilation<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-15 09:34:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4475.php">Clement Kam Man Chu: "[OMPI users] Error on running large number of processes"</a>
<li><strong>Previous message:</strong> <a href="4473.php">Sajjad: "[OMPI users] OpenMPI - compilation"</a>
<li><strong>In reply to:</strong> <a href="4473.php">Sajjad: "[OMPI users] OpenMPI - compilation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4479.php">Tim Prins: "Re: [OMPI users] OpenMPI - compilation"</a>
<li><strong>Reply:</strong> <a href="4479.php">Tim Prins: "Re: [OMPI users] OpenMPI - compilation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 14, 2007, at 10:48 PM, Sajjad wrote:
<br>
<p><span class="quotelev1">&gt; No i didn't find any executable after the issued the command &quot;mpicc
</span><br>
<span class="quotelev1">&gt; mpitest1.c -o mpitest1&quot;
</span><br>
<p>If you're not finding the executable at all, then something else is  
<br>
very wrong.  The &quot;mpicc&quot; command is just a &quot;wrapper&quot; compiler, meaning  
<br>
that it takes your command line, adds some more flags, and then  
<br>
invokes the underlying compiler (e.g., gcc).  You can use the &quot;-- 
<br>
showme&quot; flag to see exactly what command mpicc actually invokes:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpicc mpitest1.c -o mpitest1 --showme
<br>
<p>Then try running the command that that shows manually and see what  
<br>
happens.  If your compiler is not producing executables at all, then  
<br>
you have some other (non-MPI) system-level issue.
<br>
<p><span class="quotelev1">&gt; And sorry for dumping such an irrelevant chunk of data to  the  
</span><br>
<span class="quotelev1">&gt; mailing list.
</span><br>
<p><p>We actually request the output from ompi_info from users who are  
<br>
having run-time problems.  See the &quot;getting help&quot; page on the OMPI web  
<br>
site.
<br>
<p>Also, I still strongly recommend upgrading to the latest stable  
<br>
version of Open MPI if possible.  The version you have (v1.1) should  
<br>
not be responsible for you not being able to create executables,  
<br>
though -- you may need to fix that independently of upgrading Open MPI.
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
<li><strong>Next message:</strong> <a href="4475.php">Clement Kam Man Chu: "[OMPI users] Error on running large number of processes"</a>
<li><strong>Previous message:</strong> <a href="4473.php">Sajjad: "[OMPI users] OpenMPI - compilation"</a>
<li><strong>In reply to:</strong> <a href="4473.php">Sajjad: "[OMPI users] OpenMPI - compilation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4479.php">Tim Prins: "Re: [OMPI users] OpenMPI - compilation"</a>
<li><strong>Reply:</strong> <a href="4479.php">Tim Prins: "Re: [OMPI users] OpenMPI - compilation"</a>
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
