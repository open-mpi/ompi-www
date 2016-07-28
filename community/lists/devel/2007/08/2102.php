<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 10 08:53:25 2007" -->
<!-- isoreceived="20070810125325" -->
<!-- sent="Fri, 10 Aug 2007 14:54:08 +0200" -->
<!-- isosent="20070810125408" -->
<!-- name="Andreas Kn&#252;pfer" -->
<!-- email="andreas.knuepfer_at_[hidden]" -->
<!-- subject="[OMPI devel] VampirTrace within OpenMPI" -->
<!-- id="200708101454.12751.andreas.knuepfer_at_tu-dresden.de" -->
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
<strong>From:</strong> Andreas Kn&#252;pfer (<em>andreas.knuepfer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-10 08:54:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2103.php">Jeff Squyres: "Re: [OMPI devel] VampirTrace within OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2101.php">Brian Barrett: "[OMPI devel] Collectives interface change"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2103.php">Jeff Squyres: "Re: [OMPI devel] VampirTrace within OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2103.php">Jeff Squyres: "Re: [OMPI devel] VampirTrace within OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Finally, VampirTrace is usable from within OpenMPI. From the 
<br>
tmp/vt-integration/ repository you can get an extended OMPI version:
<br>
<p>#&gt; svn co <a href="http://svn.open-mpi.org/svn/ompi/tmp/vt-integration">http://svn.open-mpi.org/svn/ompi/tmp/vt-integration</a>
<br>
#&gt; cd vt-integration
<br>
#&gt; ./autogen.sh
<br>
#&gt; ./configure --prefix=/tmp/openmpi_with_vampirtrace/
<br>
#&gt; make
<br>
#&gt; make install
<br>
<p>Then you should be able to compile a small MPI example with 'mpicc' and run it 
<br>
with 'mpirun'. Now simply change 'mpicc' to 'mpicc-vt'. The run command is 
<br>
still the default 'mpirun'. If you run the new executable again you'll find 
<br>
an 'a.otf' file plus 'a.0.def' plus some 'a.*.events' files. Some files may 
<br>
have a '.z' suffix which is optional (additional zlib compression).
<br>
<p>There are a few issues left however.
<br>
<p><p>- we need to add a ''---disable-vampirtrace&quot; configure parameter
<br>
<p>- So far, the configure option '--platform=optimized' makes vampirtrace use 
<br>
the same very strict compiler warnings as openmpi. thus, it will stop with an 
<br>
error because of &quot;-Werror'. 
<br>
we'll check this but so far without '--platform=optimized' everything is fine.
<br>
<p>- Sometimes vampirtrace detects another installed MPI lib and wants to link it 
<br>
which results in linker errors when building your mpi app. This is because 
<br>
vampirtrace is configured and build before mpi is ready, which is unusual. 
<br>
this is another thing for us to fix.
<br>
<p>- 'make dist' seems to work fine including all necessary vampirtrace files. 
<br>
maybe this needs to be tested, however
<br>
<p>- updating the included vampirtrace version should be as simple as extracting 
<br>
a new tarball in the subdir 'tracing'. we  could even check + fetch the 
<br>
latest tarball via wget when one does 'make update-vampirtrace in 
<br>
subdir 'tracing'. what's your opinion?
<br>
<p>- we need an new configure option which simply passes special optionto 
<br>
vampirtrace's configure script
<br>
<p><p>So much for the most important issues. If you're interested please try it and 
<br>
send us your results. @Jeff, can we give read access to the 
<br>
tmp/vt-integration/ subtree of SVN?
<br>
<p><p>best regards, andreas
<br>
<p><p>ps: I'll be out of office for next three weeks but Matthias 
<br>
&lt;matthias.jurenz_at_[hidden]&gt; will respond (at least for a part of this 
<br>
time).
<br>
<p><pre>
-- 
Dipl. Math. Andreas Knuepfer, 
Center for Information Services and 
High Performance Computing (ZIH), TU Dresden, 
Willersbau A114, Zellescher Weg 12, 01062 Dresden
phone +49-351-463-38323, fax +49-351-463-37773

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2102/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2103.php">Jeff Squyres: "Re: [OMPI devel] VampirTrace within OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2101.php">Brian Barrett: "[OMPI devel] Collectives interface change"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2103.php">Jeff Squyres: "Re: [OMPI devel] VampirTrace within OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2103.php">Jeff Squyres: "Re: [OMPI devel] VampirTrace within OpenMPI"</a>
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
