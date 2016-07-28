<?
$subject_val = "[OMPI devel] 1.7.4rc: yet another launch failure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 22 22:02:11 2014" -->
<!-- isoreceived="20140123030211" -->
<!-- sent="Wed, 22 Jan 2014 19:02:09 -0800" -->
<!-- isosent="20140123030209" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc: yet another launch failure" -->
<!-- id="CAAvDA16j8Nhh62N2rafbcrxSw7V9f_kKbXhGQHw_sNY5yh2=Gg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc: yet another launch failure<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-22 22:02:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13859.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Previous message:</strong> <a href="13857.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 status update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13861.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<li><strong>Reply:</strong> <a href="13861.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On yet another test platform I see the following:
<br>
<p>$ mpirun -mca btl sm,self -np 1 examples/ring_c
<br>
--------------------------------------------------------------------------
<br>
Open MPI was unable to obtain the username in order to create a path
<br>
for its required temporary directories.  This type of error is usually
<br>
caused by a transient failure of network-based authentication services
<br>
(e.g., LDAP or NIS failure due to network congestion), but can also be
<br>
an indication of system misconfiguration.
<br>
<p>Please consult your system administrator about these issues and try
<br>
again.
<br>
--------------------------------------------------------------------------
<br>
[biou2.rice.edu:30021] [[40214,0],0] ORTE_ERROR_LOG: Out of resource in
<br>
file
<br>
/home/phh1/SCRATCH/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/openmpi-1.7.4rc2r30361/orte/util/session_dir.c
<br>
at line 380
<br>
[biou2.rice.edu:30021] [[40214,0],0] ORTE_ERROR_LOG: Out of resource in
<br>
file
<br>
/home/phh1/SCRATCH/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/openmpi-1.7.4rc2r30361/orte/mca/ess/hnp/ess_hnp_module.c
<br>
at line 599
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_session_dir failed
<br>
&nbsp;&nbsp;--&gt; Returned value Out of resource (-2) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
<p><p>An &quot;-np 2&quot; run fails in the same manner.
<br>
This is a production system and there is no problem with &quot;whoami&quot; or &quot;id&quot;,
<br>
leaving me doubting the explanation provided by the error message.
<br>
<p>[phh1_at_biou2 ~]$ whoami
<br>
phh1
<br>
[phh1_at_biou2 ~]$ id
<br>
uid=44154(phh1) gid=2016(hpc)
<br>
groups=2016(hpc),3803(hpcusers),3805(sshgw),3808(biou)
<br>
<p>The &quot;ompi_info --all&quot; output is attached.
<br>
Please let me know what additional info is needed.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13858/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13858/biou2_info.txt.bz2">biou2_info.txt.bz2</a>
</ul>
<!-- attachment="biou2_info.txt.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13859.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Previous message:</strong> <a href="13857.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 status update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13861.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<li><strong>Reply:</strong> <a href="13861.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
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
