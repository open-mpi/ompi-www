<?
$subject_val = "Re: [OMPI users] bulding rpm";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  9 07:34:54 2009" -->
<!-- isoreceived="20090709113454" -->
<!-- sent="Thu, 9 Jul 2009 07:34:49 -0400" -->
<!-- isosent="20090709113449" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bulding rpm" -->
<!-- id="553A987A-3824-44DD-A6AA-03A3285CEDCE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9701295.9331246944772761.JavaMail.root_at_mta.iut.ac.ir" -->
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
<strong>Subject:</strong> Re: [OMPI users] bulding rpm<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-09 07:34:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9897.php">rahmani: "Re: [OMPI users] bulding rpm"</a>
<li><strong>Previous message:</strong> <a href="9895.php">Jeff Squyres: "Re: [OMPI users] Segfault when using valgrind"</a>
<li><strong>In reply to:</strong> <a href="9854.php">rahmani: "[OMPI users] bulding rpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9897.php">rahmani: "Re: [OMPI users] bulding rpm"</a>
<li><strong>Reply:</strong> <a href="9897.php">rahmani: "Re: [OMPI users] bulding rpm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 7, 2009, at 1:32 AM, rahmani wrote:
<br>
<p><span class="quotelev1">&gt; it create openmpi-1.3.2-1.x86_64.rpm  with no error, but when I  
</span><br>
<span class="quotelev1">&gt; install it with rpm -ivh I see:
</span><br>
<span class="quotelev1">&gt; error: Failed dependencies:
</span><br>
<span class="quotelev1">&gt;         libifcoremt.so.5()(64bit) is needed by openmpi-1.3.2-1.x86_64
</span><br>
<span class="quotelev1">&gt;         libifport.so.5()(64bit) is needed by openmpi-1.3.2-1.x86_64
</span><br>
<span class="quotelev1">&gt;         libimf.so()(64bit) is needed by openmpi-1.3.2-1.x86_64
</span><br>
<span class="quotelev1">&gt;         libintlc.so.5()(64bit) is needed by openmpi-1.3.2-1.x86_64
</span><br>
<span class="quotelev1">&gt;         libiomp5.so()(64bit) is needed by openmpi-1.3.2-1.x86_64
</span><br>
<span class="quotelev1">&gt;         libsvml.so()(64bit) is needed by openmpi-1.3.2-1.x86_64
</span><br>
<span class="quotelev1">&gt;         libtorque.so.2()(64bit) is needed by openmpi-1.3.2-1.x86_64
</span><br>
<span class="quotelev1">&gt; but all above library are in my computer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Several of these look like they are the intel compiler libraries.  I  
<br>
think that libtorque is the Torque support library (resource manager)  
<br>
-- which seems weird because you explicitly built with SGE support.
<br>
<p>Where are these library files located -- can they all be found via  
<br>
your LD_LIBRARY_PATH?
<br>
<p><span class="quotelev1">&gt; I use rpm -ivh --nodeps and it install completely, but when I use  
</span><br>
<span class="quotelev1">&gt; mpif90 and mpirun I see:
</span><br>
<span class="quotelev1">&gt;   $ /usr/local/openmpi/intel/1.3.2/bin/mpif90
</span><br>
<span class="quotelev1">&gt; gfortran: no input files   (I compile with ifort!!!!)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>What does &quot;/usr/local/openmpi/intel/1.3.2/bin/mpif90 --showme&quot; show?
<br>
<p>Does your LD_LIBRARY_PATH include a directory where another Open MPI  
<br>
is installed?  E.g., could running mpif90 be picking up the &quot;wrong&quot;  
<br>
MPI installation?  (and therefore picking up the other OMPI's compiler  
<br>
preference -- gfortran in this case)
<br>
<p><span class="quotelev1">&gt;   $ /usr/local/openmpi/intel/1.3.2/bin/mpirun
</span><br>
<span class="quotelev1">&gt; usr/local/openmpi/intel/1.3.2/bin/mpirun: symbol lookup error: /usr/ 
</span><br>
<span class="quotelev1">&gt; local/openmpi/intel/1.3.2/bin/mpirun: undefined symbol: orted_cmd_line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>mpirun didn't complain that it couldn't find its supporting .so  
<br>
libraries, so I'm guessing LD_LIBRARY_PATH is pointing to *some* OMPI  
<br>
libraries, but the fact that it can't find a symbol that it wants  
<br>
leads me to believe that it's pointing to the &quot;wrong&quot; OMPI install.   
<br>
What does &quot;ldd /usr/local/openmpi/intel/1.3.2/bin/mpirun&quot; show?
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
<li><strong>Next message:</strong> <a href="9897.php">rahmani: "Re: [OMPI users] bulding rpm"</a>
<li><strong>Previous message:</strong> <a href="9895.php">Jeff Squyres: "Re: [OMPI users] Segfault when using valgrind"</a>
<li><strong>In reply to:</strong> <a href="9854.php">rahmani: "[OMPI users] bulding rpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9897.php">rahmani: "Re: [OMPI users] bulding rpm"</a>
<li><strong>Reply:</strong> <a href="9897.php">rahmani: "Re: [OMPI users] bulding rpm"</a>
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
