<?
$subject_val = "Re: [OMPI users] Wrappers should put include path *after* user args";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 19 13:39:16 2010" -->
<!-- isoreceived="20100119183916" -->
<!-- sent="Tue, 19 Jan 2010 13:39:08 -0500" -->
<!-- isosent="20100119183908" -->
<!-- name="Justin Bronder" -->
<!-- email="jsbronder_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Wrappers should put include path *after* user args" -->
<!-- id="20100119183908.GA20938_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C3C3C592-0870-4507-B90D-784C0C9085A3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Wrappers should put include path *after* user args<br>
<strong>From:</strong> Justin Bronder (<em>jsbronder_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-19 13:39:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11822.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn_multiple with MPI_Info object"</a>
<li><strong>Previous message:</strong> <a href="11820.php">Federico Golfr&#232; Andreasi: "[OMPI users] MPI_Comm_spawn_multiple with MPI_Info object"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11428.php">Jeff Squyres: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11908.php">Jeff Squyres: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<li><strong>Reply:</strong> <a href="11908.php">Jeff Squyres: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04/12/09 16:20 -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Oy -- more specifically, we should not be putting -I/usr/include on the command line *at all* (because it's special and already included by the compiler search paths; similar for /usr/lib and /usr/lib64).  We should have some special case code that looks for /usr/include and simply drops it.  Let me check and see what's going on...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I believe this was initially added here: <a href="https://svn.open-mpi.org/trac/ompi/ticket/870">https://svn.open-mpi.org/trac/ompi/ticket/870</a>
<br>
<p><span class="quotelev1">&gt; Can you send the contents of your $prefix/share/openmpi/mpif90-wrapper-data.txt?  (it is *likely* in that directory, but it could be somewhere else under prefix as well -- the mpif90-wrapper-data.txt file is the important one)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 4, 2009, at 1:08 PM, Jed Brown wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI is installed by the distro with headers in /usr/include
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   $ mpif90 -showme:compile -I/some/special/path
</span><br>
<span class="quotelev2">&gt; &gt;   -I/usr/include -pthread -I/usr/lib/openmpi -I/some/special/path
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Here's why it's a problem:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; HDF5 is also installed in /usr with modules at /usr/include/h5*.mod.  A
</span><br>
<span class="quotelev2">&gt; &gt; new HDF5 cannot be compiled using the wrappers because it will always
</span><br>
<span class="quotelev2">&gt; &gt; resolve the USE statements to /usr/include which is binary-incompatible
</span><br>
<span class="quotelev2">&gt; &gt; with the the new version (at a minimum, they &quot;fixed&quot; the size of an
</span><br>
<span class="quotelev2">&gt; &gt; argument to H5Lget_info_f between 1.8.3 and 1.8.4).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; To build the library, the current choices are
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   (a) get rid of the system copy before building
</span><br>
<span class="quotelev2">&gt; &gt;   (b) not use mpif90 wrapper
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I just checked that MPICH2 wrappers consistently put command-line args
</span><br>
<span class="quotelev2">&gt; &gt; before the wrapper args.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Jed
</span><br>
<p>Any news on this?  It doesn't look like it made it into the 1.4.1 release.
<br>
Also, it's not just /usr/include that is a problem, but the fact that the
<br>
wrappers are passing their paths before the user specified ones.  Here's an
<br>
example using mpich2 and openmpi with non-standard install paths.
<br>
<p>Mpich2 (Some output stripped as mpicc -compile_info prints everything):
<br>
jbronder_at_mejis ~ $ which mpicc
<br>
/usr/lib64/mpi/mpi-mpich2/usr/bin/mpicc
<br>
jbronder_at_mejis ~ $ mpicc -compile_info -I/bleh
<br>
x86_64-pc-linux-gnu-gcc -I/bleh -I/usr/lib64/mpi/mpi-mpich2/usr/include 
<br>
<p>OpenMPI:
<br>
jbronder_at_mejis ~ $ which mpicc
<br>
/usr/lib64/mpi/mpi-openmpi/usr/bin/mpicc
<br>
jbronder_at_mejis ~ $ mpicc -showme:compile -I/bleh
<br>
-I/usr/lib64/mpi/mpi-openmpi/usr/include/openmpi -pthread -I/bleh
<br>
<p><p>Thanks,
<br>
<p><pre>
-- 
Justin Bronder

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11821/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11822.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn_multiple with MPI_Info object"</a>
<li><strong>Previous message:</strong> <a href="11820.php">Federico Golfr&#232; Andreasi: "[OMPI users] MPI_Comm_spawn_multiple with MPI_Info object"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11428.php">Jeff Squyres: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11908.php">Jeff Squyres: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<li><strong>Reply:</strong> <a href="11908.php">Jeff Squyres: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
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
