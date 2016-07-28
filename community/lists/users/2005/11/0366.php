<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov 18 09:37:50 2005" -->
<!-- isoreceived="20051118143750" -->
<!-- sent="Fri, 18 Nov 2005 06:37:42 -0800" -->
<!-- isosent="20051118143742" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] --with-wrapper-ldflags question" -->
<!-- id="90CC2D58-43EF-4051-BECA-B327C5F4BB6A_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="437DB2E5.5030209_at_cs.kuleuven.be" -->
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
<strong>Date:</strong> 2005-11-18 09:37:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0367.php">Daryl W. Grunau: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>Previous message:</strong> <a href="0365.php">Dries Kimpe: "[O-MPI users] --with-wrapper-ldflags question"</a>
<li><strong>In reply to:</strong> <a href="0365.php">Dries Kimpe: "[O-MPI users] --with-wrapper-ldflags question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0371.php">Brian Barrett: "Re: [O-MPI users] --with-wrapper-ldflags question"</a>
<li><strong>Reply:</strong> <a href="0371.php">Brian Barrett: "Re: [O-MPI users] --with-wrapper-ldflags question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 18, 2005, at 2:54 AM, Dries Kimpe wrote:
<br>
<p><span class="quotelev1">&gt; I have a question about the --with-wrapper-ldflags option;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need to pass 2 different rpaths to the wrapper compilers,
</span><br>
<span class="quotelev1">&gt; so I tried
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - --with-wrapper-ldflags=&quot;-Wl,-rpath -Wl,pathA -Wl,-rpath -Wl,pathB&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, it seems that the second Wl,-rpath gets filtered out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (config/ompi_setup_wrappers.m4 contains a call to OMPI_UNIQUE for  
</span><br>
<span class="quotelev1">&gt; the flags)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The result is that mpicc/c++/... is no longer functional because the
</span><br>
<span class="quotelev1">&gt; linker gets passed a -Wl,-rpath -Wl,pathA -Wl,pathB ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this intentional?
</span><br>
<p>No, not intentional at all.  Instead, you have the honor of the first  
<br>
reported bug in Open MPI v1.0 ;).  Unfortunately, OMPI_UNIQ is pretty  
<br>
nasty, so it is going to take a little while to work out a patch for  
<br>
fixing this.  In the mean time, I believe that doing something like:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-wrapper-ldflags=&quot;-Wl,-rpath,pathA -Wl,-rpath,pathB&quot;
<br>
<p>will do essentially the same thing and get you past the OMPI_UNIQ  
<br>
bug.  I believe (again, could be wrong) that most compilers will  
<br>
parse that into the correct number of options to pass to the linker.
<br>
<p>Hope this helps,
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
<li><strong>Next message:</strong> <a href="0367.php">Daryl W. Grunau: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>Previous message:</strong> <a href="0365.php">Dries Kimpe: "[O-MPI users] --with-wrapper-ldflags question"</a>
<li><strong>In reply to:</strong> <a href="0365.php">Dries Kimpe: "[O-MPI users] --with-wrapper-ldflags question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0371.php">Brian Barrett: "Re: [O-MPI users] --with-wrapper-ldflags question"</a>
<li><strong>Reply:</strong> <a href="0371.php">Brian Barrett: "Re: [O-MPI users] --with-wrapper-ldflags question"</a>
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
