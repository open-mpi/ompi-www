<?
$subject_val = "Re: [OMPI users] OS X - Can't find the absoft directory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 21 08:41:08 2010" -->
<!-- isoreceived="20100421124108" -->
<!-- sent="Wed, 21 Apr 2010 08:41:03 -0400" -->
<!-- isosent="20100421124103" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OS X - Can't find the absoft directory" -->
<!-- id="63C60958-D1C1-4169-8E3D-A8A4AE155115_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="876F37A6-B7B8-4D5F-9820-D4244527186D_at_mac.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OS X - Can't find the absoft directory<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-21 08:41:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12726.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Previous message:</strong> <a href="12724.php">Conboy, James: "[OMPI users] Totalview ( tvscript ) &amp; Open MPI problem with memory debugging"</a>
<li><strong>In reply to:</strong> <a href="12717.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12726.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Reply:</strong> <a href="12726.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 20, 2010, at 7:03 PM, Paul Cizmas wrote:
<br>
<p><span class="quotelev1">&gt; Is it possible to have two openmpi-s on the same computer?  
</span><br>
<p>Yes.  As an OMPI developer, I have dozens of different OMPI installs on my cluster (for various stages of development and testing, etc.).  The only real issue is to ensure that you set your PATH (and possibly LD_LIBRARY_PATH) correctly to point to the one that you want.  If you use the --enable-mpirun-prefix-by-default configure option, then you don't need to worry about paths on the remote nodes.
<br>
<p><span class="quotelev1">&gt; I have 
</span><br>
<span class="quotelev1">&gt; openmpi 1.3.2 working fine with gfortran but I cannot build openmpi 
</span><br>
<span class="quotelev1">&gt; 1.4.1 with Absoft - I get this message from libtool:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool   --mode=compile /Applications/Absoft11.0/bin/
</span><br>
<span class="quotelev1">&gt; f90 -I../../../ompi/include -I../../../ompi/include -p. -I. -I../../../
</span><br>
<span class="quotelev1">&gt; ompi/mpi/f90  -lU77 -c -o mpi.lo mpi.f90
</span><br>
<span class="quotelev1">&gt; libtool: compile:  /Applications/Absoft11.0/bin/f90 -I../../../ompi/
</span><br>
<span class="quotelev1">&gt; include -I../../../ompi/include -p. -I. -I../../../ompi/mpi/f90 -lU77 -
</span><br>
<span class="quotelev1">&gt; c mpi.f90  -o .libs/mpi.o
</span><br>
<span class="quotelev1">&gt; Can't find the absoft directory.
</span><br>
<span class="quotelev1">&gt; Please set the ABSOFT environment variable and try again.
</span><br>
<span class="quotelev1">&gt; make[4]: *** [mpi.lo] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that ABSOFT is properly set as in fact shown above on the first 
</span><br>
<span class="quotelev1">&gt; line.  In addition, the absolute address of the f90 (/Applications/
</span><br>
<span class="quotelev1">&gt; Absoft11.0/bin/f90) is correct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To recreate the problem I went to folder openmpi-1.4.1/ompi/mpi/f90, 
</span><br>
<span class="quotelev1">&gt; checked again ABSOFT variable and called libtool.  The result is 
</span><br>
<span class="quotelev1">&gt; obviously the same:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sudo /bin/sh ../../../libtool   --mode=compile /Applications/
</span><br>
<span class="quotelev1">&gt; Absoft11.0/bin/f90 -I../../../ompi/include -I../../../ompi/include -p. 
</span><br>
<span class="quotelev1">&gt; -I. -I../../../ompi/mpi/f90  -lU77 -c -o mpi.lo mpi.f90
</span><br>
<span class="quotelev1">&gt; Password:
</span><br>
<p>Why are you sudo'ing here?
<br>
<p>We just had another user on the list have a problem compiling because they were doing &quot;sudo make all&quot; instead of just &quot;make all&quot;.  I'm not sure what exactly happened, but &quot;sudo make all&quot; apparently had some weird side effects whereas &quot;make all&quot; did not.  
<br>
<p>FWIW: Most users compile Open MPI as a non-privlidged user and then only use sudo to &quot;make install&quot;.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12726.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Previous message:</strong> <a href="12724.php">Conboy, James: "[OMPI users] Totalview ( tvscript ) &amp; Open MPI problem with memory debugging"</a>
<li><strong>In reply to:</strong> <a href="12717.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12726.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Reply:</strong> <a href="12726.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
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
