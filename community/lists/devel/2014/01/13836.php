<?
$subject_val = "[OMPI devel] 1.7.4rc: mpirun hangs on ia64";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 22 02:25:49 2014" -->
<!-- isoreceived="20140122072549" -->
<!-- sent="Tue, 21 Jan 2014 23:25:47 -0800" -->
<!-- isosent="20140122072547" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc: mpirun hangs on ia64" -->
<!-- id="CAAvDA14iup5h==iSXVFf5C=9y2JZxBg-Ry8VHAU7RqAO+-0ibw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc: mpirun hangs on ia64<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-22 02:25:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13837.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>Previous message:</strong> <a href="13835.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13837.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>Reply:</strong> <a href="13837.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, this is familiar. See:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2013/11/13182.php">http://www.open-mpi.org/community/lists/devel/2013/11/13182.php</a>
<br>
<p>If I understand correctly, the thread ended with:
<br>
<p>On 03 December 2013, Sylvestre Ledru wrote:
<br>
<p><span class="quotelev1">&gt; FYI, Debian has stopped supporting ia64 for its next release....
</span><br>
<span class="quotelev1">&gt; So, I stopped working on that issue.
</span><br>
<p><p>Well, I have access to a Linux/IA64 system and my trials with
<br>
openmpi-1.7.4rc2r30361 appear to hang, much as Sylvestre had reported w/
<br>
1.6.5.
<br>
<p>I am atatching output from a build W/O --enable debug for the command:
<br>
$ mpirun -mca plm_base_verbose 5 -mca ras_base_verbose 5 -mca
<br>
rmaps_base_verbose 5 -mca ess_base_verbose 5 -np 1 ./ring_c
<br>
<p>I will follow-up with an --enable-debug build when possible.
<br>
<p>-Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13836/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13836/log.txt.bz2">log.txt.bz2</a>
</ul>
<!-- attachment="log.txt.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13837.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>Previous message:</strong> <a href="13835.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13837.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>Reply:</strong> <a href="13837.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
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
