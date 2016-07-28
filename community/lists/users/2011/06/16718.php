<?
$subject_val = "[OMPI users] Conflicting versions of libgfortran.so with mpif90?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 14 12:02:09 2011" -->
<!-- isoreceived="20110614160209" -->
<!-- sent="Tue, 14 Jun 2011 17:02:27 +0100" -->
<!-- isosent="20110614160227" -->
<!-- name="Michael Cugley" -->
<!-- email="Michael.Cugley_at_[hidden]" -->
<!-- subject="[OMPI users] Conflicting versions of libgfortran.so with mpif90?" -->
<!-- id="4DF78613.6030100_at_Glasgow.ac.uk" -->
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
<strong>Subject:</strong> [OMPI users] Conflicting versions of libgfortran.so with mpif90?<br>
<strong>From:</strong> Michael Cugley (<em>Michael.Cugley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-14 12:02:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16719.php">Jeff Squyres: "Re: [OMPI users] Conflicting versions of libgfortran.so with mpif90?"</a>
<li><strong>Previous message:</strong> <a href="16717.php">Barnet Wagman: "[OMPI users] OMPI on EC2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16719.php">Jeff Squyres: "Re: [OMPI users] Conflicting versions of libgfortran.so with mpif90?"</a>
<li><strong>Reply:</strong> <a href="16719.php">Jeff Squyres: "Re: [OMPI users] Conflicting versions of libgfortran.so with mpif90?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I do IT support for people who are using OpenMPI for research.  However, 
<br>
they are reporting the following warnings when compiling code with mpif90:
<br>
<p>/usr/bin/ld: warning: libgfortran.so.1, needed by 
<br>
/usr/lib64/openmpi/1.4-gcc/lib/libmpi_f90.so, may conflict with 
<br>
libgfortran.so.3
<br>
<p>Running ldd on the resulting executable gives:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi_f90.so.0 =&gt; /usr/lib64/openmpi/1.4-gcc/lib/libmpi_f90.so.0 
<br>
(0x00002b5aac251000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi_f77.so.0 =&gt; /usr/lib64/openmpi/1.4-gcc/lib/libmpi_f77.so.0 
<br>
(0x00002b5aac454000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; /usr/lib64/openmpi/1.4-gcc/lib/libmpi.so.0 
<br>
(0x0000003df3600000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; /usr/lib64/openmpi/1.4-gcc/lib/libopen-rte.so.0 
<br>
(0x0000003df1a00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; /usr/lib64/openmpi/1.4-gcc/lib/libopen-pal.so.0 
<br>
(0x0000003df1e00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x0000003df2e00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000003df2200000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000003dff400000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgfortran.so.3 =&gt; /usr/lib64/libgfortran.so.3 (0x00002b5aac6a3000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x0000003df2a00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x0000003e02c00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x0000003df3200000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x0000003df2600000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgfortran.so.1 =&gt; /usr/lib64/libgfortran.so.1 (0x00002b5aac999000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x0000003df1600000)
<br>
<p>It looks like there are attempts to link to two versions of libgfortran, 
<br>
which aren't compatible.
<br>
<p>I'm not familiar with OpenMPI myself, but the people using it would like 
<br>
to know how these warnings can be dealt with.
<br>
<p><pre>
-- 
Michael Cugley
School of Engineering IT Support
M.Cugley_at_[hidden]
Please direct IT support queries to itsupport_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16719.php">Jeff Squyres: "Re: [OMPI users] Conflicting versions of libgfortran.so with mpif90?"</a>
<li><strong>Previous message:</strong> <a href="16717.php">Barnet Wagman: "[OMPI users] OMPI on EC2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16719.php">Jeff Squyres: "Re: [OMPI users] Conflicting versions of libgfortran.so with mpif90?"</a>
<li><strong>Reply:</strong> <a href="16719.php">Jeff Squyres: "Re: [OMPI users] Conflicting versions of libgfortran.so with mpif90?"</a>
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
