<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Nov 20 15:09:53 2005" -->
<!-- isoreceived="20051120200953" -->
<!-- sent="Sun, 20 Nov 2005 15:09:46 -0500" -->
<!-- isosent="20051120200946" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] --with-wrapper-ldflags question" -->
<!-- id="D4DFB454-ED3F-4DA8-B675-A936FD11B596_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="90CC2D58-43EF-4051-BECA-B327C5F4BB6A_at_open-mpi.org" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-20 15:09:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0372.php">Jeff Squyres: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<li><strong>Previous message:</strong> <a href="0370.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>In reply to:</strong> <a href="0366.php">Brian Barrett: "Re: [O-MPI users] --with-wrapper-ldflags question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 18, 2005, at 9:37 AM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Nov 18, 2005, at 2:54 AM, Dries Kimpe wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a question about the --with-wrapper-ldflags option;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I need to pass 2 different rpaths to the wrapper compilers,
</span><br>
<span class="quotelev2">&gt;&gt; so I tried
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - --with-wrapper-ldflags=&quot;-Wl,-rpath -Wl,pathA -Wl,-rpath -Wl,pathB&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, it seems that the second Wl,-rpath gets filtered out.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (config/ompi_setup_wrappers.m4 contains a call to OMPI_UNIQUE for
</span><br>
<span class="quotelev2">&gt;&gt; the flags)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The result is that mpicc/c++/... is no longer functional because the
</span><br>
<span class="quotelev2">&gt;&gt; linker gets passed a -Wl,-rpath -Wl,pathA -Wl,pathB ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this intentional?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, not intentional at all.  Instead, you have the honor of the first
</span><br>
<span class="quotelev1">&gt; reported bug in Open MPI v1.0 ;).  Unfortunately, OMPI_UNIQ is pretty
</span><br>
<span class="quotelev1">&gt; nasty, so it is going to take a little while to work out a patch for
</span><br>
<span class="quotelev1">&gt; fixing this.  In the mean time, I believe that doing something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      --with-wrapper-ldflags=&quot;-Wl,-rpath,pathA -Wl,-rpath,pathB&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; will do essentially the same thing and get you past the OMPI_UNIQ
</span><br>
<span class="quotelev1">&gt; bug.  I believe (again, could be wrong) that most compilers will
</span><br>
<span class="quotelev1">&gt; parse that into the correct number of options to pass to the linker.
</span><br>
<p>By the way, this has been fixed in SVN (you can download the nightly  
<br>
tarballs if the above solution doesn't work for you) and will be part  
<br>
of the next release of Open MPI (likely to be 1.0.1....).
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0372.php">Jeff Squyres: "Re: [O-MPI users] Minor issue: Failthrough of MCA components."</a>
<li><strong>Previous message:</strong> <a href="0370.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI debugging support"</a>
<li><strong>In reply to:</strong> <a href="0366.php">Brian Barrett: "Re: [O-MPI users] --with-wrapper-ldflags question"</a>
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
