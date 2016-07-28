<?
$subject_val = "[OMPI users] Wrappers should put include path *after* user args";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 13:08:02 2009" -->
<!-- isoreceived="20091204180802" -->
<!-- sent="Fri, 04 Dec 2009 19:08:42 +0100" -->
<!-- isosent="20091204180842" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="[OMPI users] Wrappers should put include path *after* user args" -->
<!-- id="87zl5yy5lh.fsf_at_59A2.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Wrappers should put include path *after* user args<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-04 13:08:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11420.php">Jeff Squyres: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11418.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11428.php">Jeff Squyres: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<li><strong>Reply:</strong> <a href="11428.php">Jeff Squyres: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI is installed by the distro with headers in /usr/include
<br>
<p>&nbsp;&nbsp;$ mpif90 -showme:compile -I/some/special/path
<br>
&nbsp;&nbsp;-I/usr/include -pthread -I/usr/lib/openmpi -I/some/special/path
<br>
<p>Here's why it's a problem:
<br>
<p>HDF5 is also installed in /usr with modules at /usr/include/h5*.mod.  A
<br>
new HDF5 cannot be compiled using the wrappers because it will always
<br>
resolve the USE statements to /usr/include which is binary-incompatible
<br>
with the the new version (at a minimum, they &quot;fixed&quot; the size of an
<br>
argument to H5Lget_info_f between 1.8.3 and 1.8.4).
<br>
<p>To build the library, the current choices are 
<br>
<p>&nbsp;&nbsp;(a) get rid of the system copy before building
<br>
&nbsp;&nbsp;(b) not use mpif90 wrapper
<br>
<p><p>I just checked that MPICH2 wrappers consistently put command-line args
<br>
before the wrapper args.
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11420.php">Jeff Squyres: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11418.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11428.php">Jeff Squyres: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<li><strong>Reply:</strong> <a href="11428.php">Jeff Squyres: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
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
