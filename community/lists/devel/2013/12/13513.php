<?
$subject_val = "[OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 21:42:52 2013" -->
<!-- isoreceived="20131220024252" -->
<!-- sent="Thu, 19 Dec 2013 18:42:51 -0800" -->
<!-- isosent="20131220024251" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)" -->
<!-- id="CAAvDA169REnYKDWyDYpQAAHLLLmKzm2DA4fAbvwaUyUD2HJ+fA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 21:42:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13514.php">Paul Hargrove: "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<li><strong>Previous message:</strong> <a href="13512.php">Paul Hargrove: "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13517.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)"</a>
<li><strong>Reply:</strong> <a href="13517.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Testing with Solaris 10 on SPARC, I was expecting to encounter the bus
<br>
error reported previously by Siegman Gross.  Instead I see the following
<br>
hwloc-related abort:
<br>
<p>$ env
<br>
PATH=/home/hargrove/OMPI/openmpi-1.7.4rc1-solaris10-sparcT2-ss12u3-v9/INST/bin:$PATH
<br>
&nbsp;LD_LIBRARY_PATH_64=/home/hargrove/OMPI/openmpi-1.7.4rc1-solaris10-sparcT2-ss12u3-v9/INST/lib:$LD_LIBRARY_PATH_64
<br>
&nbsp;OMPI_MCA_shmem_mmap_enable_nfs_warning=0
<br>
&nbsp;/home/hargrove/OMPI/openmpi-1.7.4rc1-solaris10-sparcT2-ss12u3-v9/INST/bin/mpirun
<br>
-mca btl sm,self -np 2 examples/ring_c
<br>
--------------------------------------------------------------------------
<br>
Open MPI tried to bind a new process, but something went wrong.  The
<br>
process was killed without launching the target application.  Your job
<br>
will now abort.
<br>
<p>&nbsp;&nbsp;Local host:        niagara1
<br>
&nbsp;&nbsp;Application name:  examples/ring_c
<br>
&nbsp;&nbsp;Error message:     hwloc indicates cpu binding cannot be enforced
<br>
&nbsp;&nbsp;Location:
<br>
&nbsp;/home/hargrove/OMPI/openmpi-1.7.4rc1-solaris10-sparcT2-ss12u3-v9/openmpi-1.7.4rc1/orte/mca/odls/default/odls_default_module.c:478
<br>
--------------------------------------------------------------------------
<br>
2 total processes failed to start
<br>
<p><p>I am assuming I just need some magic pixie dust to disable cpu binding.
<br>
I'd appreciate some corresponding instructions.
<br>
<p>However, if this is NOT an expected/desired/known behavior please let me
<br>
know what I can/should do to help determine the root cause.
<br>
<p><p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13513/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13514.php">Paul Hargrove: "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<li><strong>Previous message:</strong> <a href="13512.php">Paul Hargrove: "Re: [OMPI devel] 1.74rc1 build failure: Solaris 11 / x86_64 / Sun Studio 12.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13517.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)"</a>
<li><strong>Reply:</strong> <a href="13517.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 run failure on Solaris 10 / SPARC (not SIGBUS)"</a>
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
