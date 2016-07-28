<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 07:51:43 2007" -->
<!-- isoreceived="20071108125143" -->
<!-- sent="Thu, 8 Nov 2007 07:51:28 -0500" -->
<!-- isosent="20071108125128" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691" -->
<!-- id="26EEAD23-881A-4BEE-94CA-BF01DAFD908E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200711081244.lA8CiB3u001790_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-08 07:51:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2584.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691"</a>
<li><strong>Previous message:</strong> <a href="2582.php">Torje Henriksen: "[OMPI devel] Moving fragments in btl sm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2584.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691"</a>
<li><strong>Reply:</strong> <a href="2584.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Whoa; I'm not sure we want to apply this.
<br>
<p>All ROMIO patches *must* be coordinated with the ROMIO maintainers.   
<br>
Otherwise this becomes a complete nightmare of logistics.  There's  
<br>
already a few other ROMIO patches that we have consciously chosen not  
<br>
to apply because of the tangled issues that arise because of it, such  
<br>
as:
<br>
<p>- &quot;what version of ROMIO is in OMPI?&quot;
<br>
- &quot;do you have patch X?&quot;
<br>
- ...etc.
<br>
<p>Hence, it is best to coordinate all ROMIO patches with the upstream  
<br>
ROMIO maintainers.
<br>
<p><p><p>On Nov 8, 2007, at 7:44 AM, adi_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: adi
</span><br>
<span class="quotelev1">&gt; Date: 2007-11-08 07:44:10 EST (Thu, 08 Nov 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 16691
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/16691">https://svn.open-mpi.org/trac/ompi/changeset/16691</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; upstream patch, provided by Jiri Polach. Re #733
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/io/romio/romio/adio/common/ad_open.c |    32 +++++++ 
</span><br>
<span class="quotelev1">&gt; +++++++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;   1 files changed, 32 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/io/romio/romio/adio/common/ad_open.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/io/romio/romio/adio/common/ad_open.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/io/romio/romio/adio/common/ad_open.c	2007-11-08  
</span><br>
<span class="quotelev1">&gt; 07:44:10 EST (Thu, 08 Nov 2007)
</span><br>
<span class="quotelev1">&gt; @@ -172,6 +172,37 @@
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;     /* pvfs2 handles opens specially, so it is actually more  
</span><br>
<span class="quotelev1">&gt; efficent for that
</span><br>
<span class="quotelev1">&gt;      * file system if we skip this optimization */
</span><br>
<span class="quotelev1">&gt; +    /* NFS handles opens especially poorly, so we cannot use this  
</span><br>
<span class="quotelev1">&gt; optimization
</span><br>
<span class="quotelev1">&gt; +     * on that FS */
</span><br>
<span class="quotelev1">&gt; +    if (fd-&gt;file_system == ADIO_NFS) {
</span><br>
<span class="quotelev1">&gt; +        /* no optimizations for NFS: */
</span><br>
<span class="quotelev1">&gt; +       if ((access_mode &amp; ADIO_CREATE) &amp;&amp; (access_mode &amp;  
</span><br>
<span class="quotelev1">&gt; ADIO_EXCL)) {
</span><br>
<span class="quotelev1">&gt; +         /* the open should fail if the file exists. Only *1*  
</span><br>
<span class="quotelev1">&gt; process should
</span><br>
<span class="quotelev1">&gt; +          check this. Otherwise, if all processes try to check and  
</span><br>
<span class="quotelev1">&gt; the file
</span><br>
<span class="quotelev1">&gt; +          does not exist, one process will create the file and  
</span><br>
<span class="quotelev1">&gt; others who
</span><br>
<span class="quotelev1">&gt; +          reach later will return error. */
</span><br>
<span class="quotelev1">&gt; +           if(rank == fd-&gt;hints-&gt;ranklist[0]) {
</span><br>
<span class="quotelev1">&gt; +                fd-&gt;access_mode = access_mode;
</span><br>
<span class="quotelev1">&gt; +                (*(fd-&gt;fns-&gt;ADIOI_xxx_Open))(fd, error_code);
</span><br>
<span class="quotelev1">&gt; +                MPI_Bcast(error_code, 1, MPI_INT, \
</span><br>
<span class="quotelev1">&gt; +                                fd-&gt;hints-&gt;ranklist[0], fd-&gt;comm);
</span><br>
<span class="quotelev1">&gt; +                /* if no error, close the file and reopen normally  
</span><br>
<span class="quotelev1">&gt; below */
</span><br>
<span class="quotelev1">&gt; +                if (*error_code == MPI_SUCCESS)
</span><br>
<span class="quotelev1">&gt; +                        (*(fd-&gt;fns-&gt;ADIOI_xxx_Close))(fd,  
</span><br>
<span class="quotelev1">&gt; error_code);
</span><br>
<span class="quotelev1">&gt; +           }
</span><br>
<span class="quotelev1">&gt; +           else MPI_Bcast(error_code, 1, MPI_INT,
</span><br>
<span class="quotelev1">&gt; +                           fd-&gt;hints-&gt;ranklist[0], fd-&gt;comm);
</span><br>
<span class="quotelev1">&gt; +           if (*error_code != MPI_SUCCESS) {
</span><br>
<span class="quotelev1">&gt; +                   goto fn_exit;
</span><br>
<span class="quotelev1">&gt; +           }
</span><br>
<span class="quotelev1">&gt; +           else {
</span><br>
<span class="quotelev1">&gt; +               /* turn off EXCL for real open */
</span><br>
<span class="quotelev1">&gt; +               access_mode = access_mode ^ ADIO_EXCL;
</span><br>
<span class="quotelev1">&gt; +           }
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    } else {
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +           /* the actual optimized create on one, open on all */
</span><br>
<span class="quotelev1">&gt;     if (access_mode &amp; ADIO_CREATE &amp;&amp; fd-&gt;file_system != ADIO_PVFS2) {
</span><br>
<span class="quotelev1">&gt;        if(rank == fd-&gt;hints-&gt;ranklist[0]) {
</span><br>
<span class="quotelev1">&gt; 	   /* remove delete_on_close flag if set */
</span><br>
<span class="quotelev1">&gt; @@ -201,6 +232,7 @@
</span><br>
<span class="quotelev1">&gt; 		   access_mode ^= ADIO_EXCL;
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* if we are doing deferred open, non-aggregators should return  
</span><br>
<span class="quotelev1">&gt; now */
</span><br>
<span class="quotelev1">&gt;     if (fd-&gt;hints-&gt;deferred_open ) {
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2584.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691"</a>
<li><strong>Previous message:</strong> <a href="2582.php">Torje Henriksen: "[OMPI devel] Moving fragments in btl sm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2584.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691"</a>
<li><strong>Reply:</strong> <a href="2584.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16691"</a>
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
