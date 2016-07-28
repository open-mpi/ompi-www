<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 27 22:38:48 2006" -->
<!-- isoreceived="20060428023848" -->
<!-- sent="Thu, 27 Apr 2006 22:38:42 -0400" -->
<!-- isosent="20060428023842" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error running MPI" -->
<!-- id="8D2D025C-042C-4F19-8F88-48BD50172ECD_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0604271520440.8030_at_rhsvr03.ece.unm.edu" -->
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
<strong>Date:</strong> 2006-04-27 22:38:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1164.php">Bernard Knaepen: "[OMPI users] fortran mpi io malloc error"</a>
<li><strong>Previous message:</strong> <a href="1162.php">Jorge Parra: "[OMPI users] error running MPI"</a>
<li><strong>In reply to:</strong> <a href="1162.php">Jorge Parra: "[OMPI users] error running MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 27, 2006, at 5:26 PM, Jorge Parra wrote:
<br>
<p><span class="quotelev1">&gt; I configured and maked (make all install) succesfully (no errors) open
</span><br>
<span class="quotelev1">&gt; MPI. I am doing that for a crossplataform. The host is a ppc 405  
</span><br>
<span class="quotelev1">&gt; and the
</span><br>
<span class="quotelev1">&gt; build machine is a i686. Once I succesfully built it, I wanted to run
</span><br>
<span class="quotelev1">&gt; &quot;ompi_info&quot; to check the installation. So I copied all the prefix
</span><br>
<span class="quotelev1">&gt; directory to the host plataform and I executed ompi_info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; root_at_ml403:/opt/mpi-ppc-405-linux/exec/bin# ./ompi_info
</span><br>
<span class="quotelev1">&gt; ./ompi_info: error while loading shared libraries: libstdc++.so.6:  
</span><br>
<span class="quotelev1">&gt; cannot
</span><br>
<span class="quotelev1">&gt; open y
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The host platform is a minimal linux instalation (just the kernel, the
</span><br>
<span class="quotelev1">&gt; filesystem and a few commands). So I understand I should have  
</span><br>
<span class="quotelev1">&gt; something
</span><br>
<span class="quotelev1">&gt; else installed, Is that the problem? If so, what should I have  
</span><br>
<span class="quotelev1">&gt; installed
</span><br>
<span class="quotelev1">&gt; in the host platform to make it run?
</span><br>
<p>ompi_info is a C++ application, so it needs the C++ support libraries  
<br>
installed -- libstdc++.so.6.  I'm not sure how your host platform  
<br>
handles package management, but usually the library is provided in a  
<br>
package named libstdc++ or something similar.
<br>
<p><p>Hope this helps,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1164.php">Bernard Knaepen: "[OMPI users] fortran mpi io malloc error"</a>
<li><strong>Previous message:</strong> <a href="1162.php">Jorge Parra: "[OMPI users] error running MPI"</a>
<li><strong>In reply to:</strong> <a href="1162.php">Jorge Parra: "[OMPI users] error running MPI"</a>
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
