<?
$subject_val = "Re: [OMPI devel] configuring with --enable-mpi-profile option";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 04:53:12 2008" -->
<!-- isoreceived="20080411085312" -->
<!-- sent="Fri, 11 Apr 2008 10:53:01 +0200" -->
<!-- isosent="20080411085301" -->
<!-- name="Andreas Kn&#252;pfer" -->
<!-- email="andreas.knuepfer_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] configuring with --enable-mpi-profile option" -->
<!-- id="200804111053.04814.andreas.knuepfer_at_tu-dresden.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="9FA59C95FFCBB34EA5E42C1A8573784F0107FA23_at_mtiexch01.mti.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] configuring with --enable-mpi-profile option<br>
<strong>From:</strong> Andreas Kn&#252;pfer (<em>andreas.knuepfer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-11 04:53:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3701.php">Jeff Squyres: "Re: [OMPI devel] configuring with --enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="3699.php">Ralph Castain: "[OMPI devel] Latest scaling test results available"</a>
<li><strong>In reply to:</strong> <a href="3697.php">Swati Kher: "[OMPI devel] configuring with --enable-mpi-profile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3701.php">Jeff Squyres: "Re: [OMPI devel] configuring with --enable-mpi-profile option"</a>
<li><strong>Reply:</strong> <a href="3701.php">Jeff Squyres: "Re: [OMPI devel] configuring with --enable-mpi-profile option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thursday 10 April 2008, Swati Kher wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2)       If vampire trace by default is built with openmpi, if I set
</span><br>
<span class="quotelev1">&gt; VT_CC flag for compiling my application, where I can view &quot;.vtf&quot; files
</span><br>
<span class="quotelev1">&gt; after a parallel run ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Let me answer the second question.
<br>
<p>First of all, there is no default VT_CC flag in OMPI's compiler wrappers. To 
<br>
compile your MPI application with VampirTrace support, please replace the MPI 
<br>
compiler wrappers in your Makefiles like this: 
<br>
<p>mpicc --&gt; mpicc-vt
<br>
mpicxx --&gt; mpicxx-vt
<br>
mpif90 --&gt; mpif90-vt
<br>
<p>and so on. After running the resulting executable you'll find an OTF trace 
<br>
(Open Trace Format) in your pwd. Note that it consists of multiple files 
<br>
which need to be copied/moved together. The former VTF format is still 
<br>
supported by VampirTrace, yet not in the version that comes with Open MPI.
<br>
<p>The Open Trace Format can be read by several performance analysis tools, e.g. 
<br>
Vampir and VampirServer, Kojak/Scalasca Tools, TAU tools and maybe already by 
<br>
OpenSpeedShop, which is going to have OTF support afaik.
<br>
<p>Best rgards, Andreas
<br>
<p><p><pre>
-- 
Dipl. Math. Andreas Knuepfer, 
Center for Information Services and 
High Performance Computing (ZIH), TU Dresden, 
Willersbau A114, Zellescher Weg 12, 01062 Dresden
phone +49-351-463-38323, fax +49-351-463-37773

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3700/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3701.php">Jeff Squyres: "Re: [OMPI devel] configuring with --enable-mpi-profile option"</a>
<li><strong>Previous message:</strong> <a href="3699.php">Ralph Castain: "[OMPI devel] Latest scaling test results available"</a>
<li><strong>In reply to:</strong> <a href="3697.php">Swati Kher: "[OMPI devel] configuring with --enable-mpi-profile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3701.php">Jeff Squyres: "Re: [OMPI devel] configuring with --enable-mpi-profile option"</a>
<li><strong>Reply:</strong> <a href="3701.php">Jeff Squyres: "Re: [OMPI devel] configuring with --enable-mpi-profile option"</a>
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
