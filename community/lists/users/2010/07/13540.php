<?
$subject_val = "Re: [OMPI users] configure options";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  8 10:04:31 2010" -->
<!-- isoreceived="20100708140431" -->
<!-- sent="Thu, 08 Jul 2010 10:04:22 -0400" -->
<!-- isosent="20100708140422" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure options" -->
<!-- id="4C35DAE6.7030704_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201007072013127655858_at_nd.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] configure options<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-08 10:04:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13541.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>Previous message:</strong> <a href="13539.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>In reply to:</strong> <a href="13524.php">Zhigang Wei: "[OMPI users] configure options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13542.php">Zhigang Wei: "Re: [OMPI users] configure options"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Zhigang
<br>
<p>Are  you talking about a run time failure?
<br>
<p>If you are, I think what is missing is just to set the PATH and the 
<br>
LD_LIBRARY_PATH environment variables to point to the OpenMPI directories.
<br>
This can be done in your .[t]cshrc / .profile / .bashrc
<br>
file in your home directory (assuming it is accessible by all computers
<br>
that you're using to run the program).
<br>
Hopefully it will override the default OpenMPI 1.3.2 in your HPC.
<br>
<p>See this FAQ:
<br>
<a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
<br>
<p>There are other ways to do it, which you can find with
<br>
&quot;man $MY_OWN_DIR/share/man/man1/mpiexec&quot;.
<br>
(You could also set MANPATH to get the right man pages.)
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p><p>Zhigang Wei wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; How can I decide the configure options? I am greatly confused.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am using school's high performance computer.
</span><br>
<span class="quotelev1">&gt; But the openmpi there is version 1.3.2, old, so I want to build the new one.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am new to openmpi, I have built the openmpi and it doesn't work, I 
</span><br>
<span class="quotelev1">&gt; built and installed it to my own directory.
</span><br>
<span class="quotelev1">&gt; I use the following configure options,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ./configure --with-sge --prefix=$MY_OWN_DIR --with-psm
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; but it won't work and failed with somelines like
</span><br>
<span class="quotelev1">&gt; ......lib/openmpi/mca_ess_hnp: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; in the output file.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I guess my configure is wrong, could you tell me the meaning of 
</span><br>
<span class="quotelev1">&gt; --with-psm, --with-sge, do I need to add other options? I guess the 
</span><br>
<span class="quotelev1">&gt; computing nodes are using infiniband, but how to build with that? If I 
</span><br>
<span class="quotelev1">&gt; don't have the su right, can I build it? What should I pay attettion if 
</span><br>
<span class="quotelev1">&gt; I want to build and use my own openmpi?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; You see, in a personal multicore computer, building is so easy and 
</span><br>
<span class="quotelev1">&gt; mpirun the program without any problems. But in school's hpc, it fails 
</span><br>
<span class="quotelev1">&gt; all the time.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Please help. Thank you all.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Zhigang Wei
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt; NatHaz Modeling Laboratory
</span><br>
<span class="quotelev1">&gt; University of Notre Dame
</span><br>
<span class="quotelev1">&gt; 112J FitzPatrick Hall
</span><br>
<span class="quotelev1">&gt; Notre Dame, IN 46556 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 2010-07-07
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13541.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>Previous message:</strong> <a href="13539.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>In reply to:</strong> <a href="13524.php">Zhigang Wei: "[OMPI users] configure options"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13542.php">Zhigang Wei: "Re: [OMPI users] configure options"</a>
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
