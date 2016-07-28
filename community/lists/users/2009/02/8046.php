<?
$subject_val = "Re: [OMPI users] OpenMPI and Valgrind";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 16:30:33 2009" -->
<!-- isoreceived="20090212213033" -->
<!-- sent="Thu, 12 Feb 2009 16:30:27 -0500" -->
<!-- isosent="20090212213027" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and Valgrind" -->
<!-- id="E88D2D46-18AF-41EB-833A-5D337D71A741_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200902121623.35678.techlist_at_pathfinder.phys.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI and Valgrind<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-12 16:30:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8047.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>Previous message:</strong> <a href="8045.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>In reply to:</strong> <a href="8044.php">Reuben D. Budiardja: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8047.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>Reply:</strong> <a href="8047.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>Reply:</strong> <a href="8049.php">Rainer Keller: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Some of the configure options changed their name for the 1.3. Here is  
<br>
the updated list you should use in order to get valgrind support for  
<br>
the 1.3:
<br>
<p>--enable-memchecker --with-valgrind --with-memory-manager=none
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 12, 2009, at 16:23 , Reuben D. Budiardja wrote:
<br>
<p><span class="quotelev1">&gt; On Thursday 12 February 2009 11:50:07 am Ashley Pittman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using OpenMPI-1.2.8 with all the default configure option. What
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do to be able use Valgrind with program compiled by OpenMPI ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From memory and reading the above links (i.e. untested advice):
</span><br>
<span class="quotelev2">&gt;&gt; 1) Use OpenMPI 1.3 where the default is not to include this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried it with OpenMPI 1.3, I didn't give any configure option
</span><br>
<span class="quotelev1">&gt; except --prefix, and Valgrind still does not work as expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) Configure Open MPI 1.2.8 with the --disable-memory-manager option
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tried this, no luck either. The option doesn't seem to be doing  
</span><br>
<span class="quotelev1">&gt; anything, and
</span><br>
<span class="quotelev1">&gt; it's not even listed as option with &quot;./configure --help&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3) Compile you application without the -lopen-pal otion.  In practice
</span><br>
<span class="quotelev2">&gt;&gt; this means running &quot;mpicc --show&quot; and cut-and pasting the underlying
</span><br>
<span class="quotelev2">&gt;&gt; compile line without the -lopen-pal into your application build
</span><br>
<span class="quotelev2">&gt;&gt; procedure.  I was able to do this for hello world but I can image  
</span><br>
<span class="quotelev2">&gt;&gt; it'll
</span><br>
<span class="quotelev2">&gt;&gt; be a real PITA for anything larger.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I tried this before, and for a very small test program this  
</span><br>
<span class="quotelev1">&gt; seems to
</span><br>
<span class="quotelev1">&gt; work. But as you said, this would a real pain to do..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; RDB
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Reuben D. Budiardja
</span><br>
<span class="quotelev1">&gt; Dept. Physics and Astronomy
</span><br>
<span class="quotelev1">&gt; University of Tennessee, Knoxville, TN
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
<li><strong>Next message:</strong> <a href="8047.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>Previous message:</strong> <a href="8045.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>In reply to:</strong> <a href="8044.php">Reuben D. Budiardja: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8047.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>Reply:</strong> <a href="8047.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>Reply:</strong> <a href="8049.php">Rainer Keller: "Re: [OMPI users] OpenMPI and Valgrind"</a>
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
