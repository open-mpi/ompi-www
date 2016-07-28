<?
$subject_val = "Re: [OMPI users] Wrappers should put include path *after* user args";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 16:20:29 2009" -->
<!-- isoreceived="20091204212029" -->
<!-- sent="Fri, 4 Dec 2009 16:20:23 -0500" -->
<!-- isosent="20091204212023" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Wrappers should put include path *after* user args" -->
<!-- id="C3C3C592-0870-4507-B90D-784C0C9085A3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87zl5yy5lh.fsf_at_59A2.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-04 16:20:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11429.php">Jed Brown: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<li><strong>Previous message:</strong> <a href="11427.php">Jeff Squyres: "Re: [OMPI users] Typo in mpirun man page"</a>
<li><strong>In reply to:</strong> <a href="11419.php">Jed Brown: "[OMPI users] Wrappers should put include path *after* user args"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11429.php">Jed Brown: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<li><strong>Reply:</strong> <a href="11429.php">Jed Brown: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11821.php">Justin Bronder: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oy -- more specifically, we should not be putting -I/usr/include on the command line *at all* (because it's special and already included by the compiler search paths; similar for /usr/lib and /usr/lib64).  We should have some special case code that looks for /usr/include and simply drops it.  Let me check and see what's going on...
<br>
<p>Can you send the contents of your $prefix/share/openmpi/mpif90-wrapper-data.txt?  (it is *likely* in that directory, but it could be somewhere else under prefix as well -- the mpif90-wrapper-data.txt file is the important one)
<br>
<p><p><p>On Dec 4, 2009, at 1:08 PM, Jed Brown wrote:
<br>
<p><span class="quotelev1">&gt; Open MPI is installed by the distro with headers in /usr/include
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   $ mpif90 -showme:compile -I/some/special/path
</span><br>
<span class="quotelev1">&gt;   -I/usr/include -pthread -I/usr/lib/openmpi -I/some/special/path
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's why it's a problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HDF5 is also installed in /usr with modules at /usr/include/h5*.mod.  A
</span><br>
<span class="quotelev1">&gt; new HDF5 cannot be compiled using the wrappers because it will always
</span><br>
<span class="quotelev1">&gt; resolve the USE statements to /usr/include which is binary-incompatible
</span><br>
<span class="quotelev1">&gt; with the the new version (at a minimum, they &quot;fixed&quot; the size of an
</span><br>
<span class="quotelev1">&gt; argument to H5Lget_info_f between 1.8.3 and 1.8.4).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To build the library, the current choices are
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   (a) get rid of the system copy before building
</span><br>
<span class="quotelev1">&gt;   (b) not use mpif90 wrapper
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just checked that MPICH2 wrappers consistently put command-line args
</span><br>
<span class="quotelev1">&gt; before the wrapper args.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jed
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11429.php">Jed Brown: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<li><strong>Previous message:</strong> <a href="11427.php">Jeff Squyres: "Re: [OMPI users] Typo in mpirun man page"</a>
<li><strong>In reply to:</strong> <a href="11419.php">Jed Brown: "[OMPI users] Wrappers should put include path *after* user args"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11429.php">Jed Brown: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<li><strong>Reply:</strong> <a href="11429.php">Jed Brown: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11821.php">Justin Bronder: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
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
