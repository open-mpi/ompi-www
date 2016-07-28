<?
$subject_val = "Re: [OMPI users] OpenMPI and Valgrind";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 16:23:40 2009" -->
<!-- isoreceived="20090212212340" -->
<!-- sent="Thu, 12 Feb 2009 16:23:35 -0500" -->
<!-- isosent="20090212212335" -->
<!-- name="Reuben D. Budiardja" -->
<!-- email="techlist_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and Valgrind" -->
<!-- id="200902121623.35678.techlist_at_pathfinder.phys.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="82d52253323009053eef887d33dbf6a5_at_pittman.co.uk" -->
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
<strong>From:</strong> Reuben D. Budiardja (<em>techlist_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-12 16:23:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8045.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>Previous message:</strong> <a href="8043.php">jobic: "Re: [OMPI users] strange error, seems inable to launch job"</a>
<li><strong>In reply to:</strong> <a href="8042.php">Ashley Pittman: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8045.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>Reply:</strong> <a href="8045.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>Reply:</strong> <a href="8046.php">George Bosilca: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thursday 12 February 2009 11:50:07 am Ashley Pittman wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am using OpenMPI-1.2.8 with all the default configure option. What
</span><br>
<span class="quotelev2">&gt; &gt; should I
</span><br>
<span class="quotelev2">&gt; &gt; do to be able use Valgrind with program compiled by OpenMPI ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  From memory and reading the above links (i.e. untested advice):
</span><br>
<span class="quotelev1">&gt; 1) Use OpenMPI 1.3 where the default is not to include this.
</span><br>
<p>I tried it with OpenMPI 1.3, I didn't give any configure option 
<br>
except --prefix, and Valgrind still does not work as expected.
<br>
<p><span class="quotelev1">&gt; 2) Configure Open MPI 1.2.8 with the --disable-memory-manager option
</span><br>
<p>Tried this, no luck either. The option doesn't seem to be doing anything, and 
<br>
it's not even listed as option with &quot;./configure --help&quot;.
<br>
<p><span class="quotelev1">&gt; 3) Compile you application without the -lopen-pal otion.  In practice
</span><br>
<span class="quotelev1">&gt; this means running &quot;mpicc --show&quot; and cut-and pasting the underlying
</span><br>
<span class="quotelev1">&gt; compile line without the -lopen-pal into your application build
</span><br>
<span class="quotelev1">&gt; procedure.  I was able to do this for hello world but I can image it'll
</span><br>
<span class="quotelev1">&gt; be a real PITA for anything larger.
</span><br>
<p>Yes, I tried this before, and for a very small test program this seems to 
<br>
work. But as you said, this would a real pain to do..
<br>
<p>Thanks.
<br>
RDB
<br>
<pre>
-- 
Reuben D. Budiardja
Dept. Physics and Astronomy
University of Tennessee, Knoxville, TN
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8045.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>Previous message:</strong> <a href="8043.php">jobic: "Re: [OMPI users] strange error, seems inable to launch job"</a>
<li><strong>In reply to:</strong> <a href="8042.php">Ashley Pittman: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8045.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>Reply:</strong> <a href="8045.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Valgrind"</a>
<li><strong>Reply:</strong> <a href="8046.php">George Bosilca: "Re: [OMPI users] OpenMPI and Valgrind"</a>
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
