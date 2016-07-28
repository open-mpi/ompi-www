<?
$subject_val = "[OMPI devel] ompi_procs_cutoff, jobid and vpid";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  5 09:26:58 2016" -->
<!-- isoreceived="20160205142658" -->
<!-- sent="Fri, 5 Feb 2016 23:26:57 +0900" -->
<!-- isosent="20160205142657" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] ompi_procs_cutoff, jobid and vpid" -->
<!-- id="CAAkFZ5uq3aHRC+XGxs1CBDzzJPaLkyCf_RYtH9twuPjW+knX8A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] ompi_procs_cutoff, jobid and vpid<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-05 09:26:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18557.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>Previous message:</strong> <a href="18555.php">Ralph Castain: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18557.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>Reply:</strong> <a href="18557.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>i was unable to start a simple MPI job using the TCP btl on an
<br>
heterogeneous cluster and using --mca mpi_procs_cutoff 0.
<br>
The root cause was the most significant bit of the jobid was set on
<br>
some nodes but not on others.
<br>
<p>This is what we have :
<br>
<p>from opal/dss/dss_types.h
<br>
<p>typedef uint32_t opal_jobid_t;
<br>
typedef uint32_t opal_vpid_t;
<br>
typedef struct {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_jobid_t jobid;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_vpid_t vpid;
<br>
} opal_process_name_t;
<br>
<p><p>and from ompi/proc/proc.h
<br>
<p>static inline intptr_t ompi_proc_name_to_sentinel (opal_process_name_t name)
<br>
{
<br>
&nbsp;&nbsp;return (*((intptr_t *) &amp;name) &lt;&lt; 1) | 0x1;
<br>
}
<br>
<p>static inline opal_process_name_t ompi_proc_sentinel_to_name (intptr_t sentinel)
<br>
{
<br>
&nbsp;&nbsp;sentinel &gt;&gt;= 1;
<br>
&nbsp;&nbsp;sentinel &amp;= 0x7FFFFFFFFFFFFFFF;
<br>
&nbsp;&nbsp;return *((opal_process_name_t *) &amp;sentinel);
<br>
}
<br>
<p><p>from a pragmatic point of view, that means that one bit is lost when
<br>
we use cutoff.
<br>
on a little endian machine, this is the MSB of the vpid, so we are
<br>
just fine until two billion tasks in a job
<br>
on a big endian machine, this is the MSB of the jobid, and the MSB of
<br>
my jobids happen to be set :-(
<br>
<p>note the jobid is internally used as two 16 bits unsigned int.
<br>
the most significant part is a hash of mpirun pid and hostname,
<br>
and the least significant part is the job &quot;step&quot;
<br>
on a big endian machine, this is the MSB of the hash that is lost.
<br>
<p><p>how should we move forward ?
<br>
<p>- the simplest option is to always clear the MSB of the hash, and keep
<br>
in mind the vpid might only be 31 bits.
<br>
- an other option is to reimplement ompi_proc_name_to_sentinel and
<br>
friend (depending on the endianness) so we always lose the same bit
<br>
this bit could be the MSB of
<br>
- vpid, if 2 billion tasks is an acceptable limit
<br>
- job hash, if a 15 bits job hash is acceptable
<br>
- job &quot;step&quot;, if we really want a 16 bits job hash
<br>
<p><p>any thoughts ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18557.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>Previous message:</strong> <a href="18555.php">Ralph Castain: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18557.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<li><strong>Reply:</strong> <a href="18557.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
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
