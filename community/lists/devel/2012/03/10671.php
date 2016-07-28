<?
$subject_val = "[OMPI devel] trunk regression in mpirun (no --prefix) r26081";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar  3 18:06:56 2012" -->
<!-- isoreceived="20120303230656" -->
<!-- sent="Sat, 03 Mar 2012 18:06:47 -0500" -->
<!-- isosent="20120303230647" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk regression in mpirun (no --prefix) r26081" -->
<!-- id="4F52A407.3030603_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] trunk regression in mpirun (no --prefix) r26081<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-03 18:06:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10672.php">Ralph Castain: "Re: [OMPI devel] trunk regression in mpirun (no --prefix) r26081"</a>
<li><strong>Previous message:</strong> <a href="10670.php">George Bosilca: "Re: [OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10672.php">Ralph Castain: "Re: [OMPI devel] trunk regression in mpirun (no --prefix) r26081"</a>
<li><strong>Reply:</strong> <a href="10672.php">Ralph Castain: "Re: [OMPI devel] trunk regression in mpirun (no --prefix) r26081"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll look at this some more, but for now I'll note that the trunk has an 
<br>
apparent regression in r26081.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure                          \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-shared                    \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-orterun-prefix-by-default \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-peruse                   \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--disable-mpi-thread-multiple      \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-contrib-no-build=vt       \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--prefix=...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setenv OPAL_PREFIX ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;set path = ( $OPAL_PREFIX/bin $path )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setenv LD_LIBRARY_PATH $OPAL_PREFIX/lib
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun [--prefix $OPAL_PREFIX] hostname
<br>
<p>Up to 26080, the mpirun line runs fine, whether with the --prefix option 
<br>
or not.  Starting in 26081, I get a seg fault when I do *NOT* use 
<br>
--prefix.  (Still runs fine *with* --prefix.)  I've seen the problem on 
<br>
SunOS and on Linux, with Studio, GCC, and Intel compilers.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10672.php">Ralph Castain: "Re: [OMPI devel] trunk regression in mpirun (no --prefix) r26081"</a>
<li><strong>Previous message:</strong> <a href="10670.php">George Bosilca: "Re: [OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10672.php">Ralph Castain: "Re: [OMPI devel] trunk regression in mpirun (no --prefix) r26081"</a>
<li><strong>Reply:</strong> <a href="10672.php">Ralph Castain: "Re: [OMPI devel] trunk regression in mpirun (no --prefix) r26081"</a>
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
