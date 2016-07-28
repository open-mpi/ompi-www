<?
$subject_val = "[OMPI devel] oshmem: put does not work with btl/vader if knem is enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 05:56:02 2014" -->
<!-- isoreceived="20141112105602" -->
<!-- sent="Wed, 12 Nov 2014 19:56:08 +0900" -->
<!-- isosent="20141112105608" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] oshmem: put does not work with btl/vader if knem is enabled" -->
<!-- id="54633CC8.90605_at_iferc.org" -->
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
<strong>Subject:</strong> [OMPI devel] oshmem: put does not work with btl/vader if knem is enabled<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-12 05:56:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16301.php">Alexander Mikheev: "Re: [OMPI devel] oshmem: put does not work with btl/vader if knem is	enabled"</a>
<li><strong>Previous message:</strong> <a href="16299.php">Rainer Keller: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16301.php">Alexander Mikheev: "Re: [OMPI devel] oshmem: put does not work with btl/vader if knem is	enabled"</a>
<li><strong>Reply:</strong> <a href="16301.php">Alexander Mikheev: "Re: [OMPI devel] oshmem: put does not work with btl/vader if knem is	enabled"</a>
<li><strong>Reply:</strong> <a href="16305.php">Nathan Hjelm: "Re: [OMPI devel] oshmem: put does not work with btl/vader if knem is enabled"</a>
<li><strong>Reply:</strong> <a href="16306.php">Nathan Hjelm: "Re: [OMPI devel] oshmem: put does not work with btl/vader if knem is enabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>I found (at least) two issues with oshmem put if btl/vader is used with
<br>
knem enabled :
<br>
<p>$ oshrun -np 2 --mca btl vader,self ./oshmem_max_reduction
<br>
--------------------------------------------------------------------------
<br>
SHMEM_ABORT was invoked on rank 0 (pid 11936, host=soleil) with
<br>
errorcode -1.
<br>
--------------------------------------------------------------------------
<br>
[soleil.iferc.local:11934] 1 more process has sent help message
<br>
help-shmem-api.txt / shmem-abort
<br>
[soleil.iferc.local:11934] Set MCA parameter &quot;orte_base_help_aggregate&quot;
<br>
to 0 to see all help / error messages
<br>
<p><p>the error message is not helpful at all ...
<br>
the abort happens in the vader btl in mca_btl_vader_put_knem
<br>
&nbsp;&nbsp;&nbsp;if (OPAL_UNLIKELY(0 != ioctl (mca_btl_vader.knem_fd,
<br>
KNEM_CMD_INLINE_COPY, &amp;icopy))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OPAL_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
ioctl fails with EACCES
<br>
<p>the root cause is the symmetric memory was &quot;prepared&quot; with
<br>
vader_prepare_src that uses
<br>
knem_cr.protection = PROT_READ;
<br>
<p>a trivial workaround (probably not good for production) is to
<br>
knem_cr.protection = PROT_READ|PROT_WRITE;
<br>
<p><p>then we run into the second issue :
<br>
<p>in mca_btl_vader_put_knem :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;icopy.remote_offset     = 0;
<br>
<p>and this is clearly not what we want ...
<br>
in my environment, we want to put to 0x0600df0, so the remote_offset
<br>
should be 0xdf0 since the symmetric memory was &quot;prepared&quot; starting at
<br>
0x0600000
<br>
<p>i do not think the vader btl is to be blamed here ... i'd rather think
<br>
yoda way to use the btl is not correct (but only for put with vader btl
<br>
when knem is used)
<br>
<p>i can get the test program run correctly by manually setting
<br>
icopy.remote_offset with a debugger.
<br>
<p>please note i fixed a typo in the vader btl so make sure you update the
<br>
master.
<br>
<p><p>in the mean time, what about forcing put_via_send to 1 in
<br>
mca_spml_yoda_put_internal ?
<br>
/* an other option is to unset the MCA_BTL_FLAGS_PUT flag in the vader
<br>
btl if knem is used, but i do not believe this is a vader issue */
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16301.php">Alexander Mikheev: "Re: [OMPI devel] oshmem: put does not work with btl/vader if knem is	enabled"</a>
<li><strong>Previous message:</strong> <a href="16299.php">Rainer Keller: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16301.php">Alexander Mikheev: "Re: [OMPI devel] oshmem: put does not work with btl/vader if knem is	enabled"</a>
<li><strong>Reply:</strong> <a href="16301.php">Alexander Mikheev: "Re: [OMPI devel] oshmem: put does not work with btl/vader if knem is	enabled"</a>
<li><strong>Reply:</strong> <a href="16305.php">Nathan Hjelm: "Re: [OMPI devel] oshmem: put does not work with btl/vader if knem is enabled"</a>
<li><strong>Reply:</strong> <a href="16306.php">Nathan Hjelm: "Re: [OMPI devel] oshmem: put does not work with btl/vader if knem is enabled"</a>
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
