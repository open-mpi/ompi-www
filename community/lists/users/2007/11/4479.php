<?
$subject_val = "Re: [OMPI users] OpenMPI - compilation";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 15 11:16:52 2007" -->
<!-- isoreceived="20071115161652" -->
<!-- sent="Thu, 15 Nov 2007 08:16:47 -0800" -->
<!-- isosent="20071115161647" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI - compilation" -->
<!-- id="473C70EF.50809_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="06D4D7E3-7B89-45FA-80FD-668BA1FF9DD4_at_cisco.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-15 11:16:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4480.php">Jim Kusznir: "[OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>Previous message:</strong> <a href="4478.php">Clement Kam Man Chu: "Re: [OMPI users] Tmpdir work for first process only"</a>
<li><strong>In reply to:</strong> <a href="4474.php">Jeff Squyres: "Re: [OMPI users] OpenMPI - compilation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4486.php">Brian W. Barrett: "Re: [OMPI users] OpenMPI - compilation"</a>
<li><strong>Reply:</strong> <a href="4486.php">Brian W. Barrett: "Re: [OMPI users] OpenMPI - compilation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have seen situations where after installing Open MPI, the wrapper 
<br>
compilers did not create any executables, and seemed to do nothing.
<br>
<p>I was never able to figure out why the wrappers were broken, and 
<br>
reinstalling Open MPI always seemed to make it work.
<br>
<p>If I recall correctly, when this happened 'mpicc --showme' returned nothing.
<br>
<p>FWIW, I only ever saw this on old versions of Open MPI, so I would 
<br>
second Jeff in recommending an upgrade.
<br>
<p>Tim
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Nov 14, 2007, at 10:48 PM, Sajjad wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No i didn't find any executable after the issued the command &quot;mpicc
</span><br>
<span class="quotelev2">&gt;&gt; mpitest1.c -o mpitest1&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you're not finding the executable at all, then something else is  
</span><br>
<span class="quotelev1">&gt; very wrong.  The &quot;mpicc&quot; command is just a &quot;wrapper&quot; compiler, meaning  
</span><br>
<span class="quotelev1">&gt; that it takes your command line, adds some more flags, and then  
</span><br>
<span class="quotelev1">&gt; invokes the underlying compiler (e.g., gcc).  You can use the &quot;-- 
</span><br>
<span class="quotelev1">&gt; showme&quot; flag to see exactly what command mpicc actually invokes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      mpicc mpitest1.c -o mpitest1 --showme
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then try running the command that that shows manually and see what  
</span><br>
<span class="quotelev1">&gt; happens.  If your compiler is not producing executables at all, then  
</span><br>
<span class="quotelev1">&gt; you have some other (non-MPI) system-level issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And sorry for dumping such an irrelevant chunk of data to  the  
</span><br>
<span class="quotelev2">&gt;&gt; mailing list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We actually request the output from ompi_info from users who are  
</span><br>
<span class="quotelev1">&gt; having run-time problems.  See the &quot;getting help&quot; page on the OMPI web  
</span><br>
<span class="quotelev1">&gt; site.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, I still strongly recommend upgrading to the latest stable  
</span><br>
<span class="quotelev1">&gt; version of Open MPI if possible.  The version you have (v1.1) should  
</span><br>
<span class="quotelev1">&gt; not be responsible for you not being able to create executables,  
</span><br>
<span class="quotelev1">&gt; though -- you may need to fix that independently of upgrading Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4480.php">Jim Kusznir: "[OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>Previous message:</strong> <a href="4478.php">Clement Kam Man Chu: "Re: [OMPI users] Tmpdir work for first process only"</a>
<li><strong>In reply to:</strong> <a href="4474.php">Jeff Squyres: "Re: [OMPI users] OpenMPI - compilation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4486.php">Brian W. Barrett: "Re: [OMPI users] OpenMPI - compilation"</a>
<li><strong>Reply:</strong> <a href="4486.php">Brian W. Barrett: "Re: [OMPI users] OpenMPI - compilation"</a>
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
