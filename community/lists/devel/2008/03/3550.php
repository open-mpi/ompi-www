<?
$subject_val = "Re: [OMPI devel] trunk segfault";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 08:13:23 2008" -->
<!-- isoreceived="20080327121323" -->
<!-- sent="Thu, 27 Mar 2008 14:13:15 +0200" -->
<!-- isosent="20080327121315" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk segfault" -->
<!-- id="453d39990803270513t46caa221mdfefae11de28bce3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BE80011F-3A20-4DAA-8FA4-740D514088B2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk segfault<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-27 08:13:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3551.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17941"</a>
<li><strong>Previous message:</strong> <a href="3549.php">Lenny Verkhovsky: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>In reply to:</strong> <a href="3548.php">Jeff Squyres: "Re: [OMPI devel] trunk segfault"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
yes, thanks.
<br>
<p><p><p>On Thu, Mar 27, 2008 at 2:07 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Lenny --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did this get fixed?  We were mucking with some mca param stuff on the
</span><br>
<span class="quotelev1">&gt; trunk yesterday; not sure if it was related to this failure or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 26, 2008, at 10:34 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi, all
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I compiled and builded source from trunk
</span><br>
<span class="quotelev2">&gt; &gt; and it causes segfault
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /home/USERS/lenny/OMPI_ORTE_NEW/bin/mpirun -np 1 -H witch17 /home/
</span><br>
<span class="quotelev2">&gt; &gt; USERS/lenny/TESTS/ORTE/mpi_p01_NEW -t lt
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; It looks like MPI_INIT failed for some reason; your parallel process
</span><br>
<span class="quotelev2">&gt; &gt; is
</span><br>
<span class="quotelev2">&gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt; environment
</span><br>
<span class="quotelev2">&gt; &gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt; &gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; developer):
</span><br>
<span class="quotelev2">&gt; &gt;   mca_mpi_register_params() failed
</span><br>
<span class="quotelev2">&gt; &gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [witch17:01220] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [witch17:01220] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; [witch17:01220] Signal code:  (128)
</span><br>
<span class="quotelev2">&gt; &gt; [witch17:01220] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt; &gt; [witch17:01220] [ 0] /lib64/libpthread.so.0 [0x2aadf7072c10]
</span><br>
<span class="quotelev2">&gt; &gt; [witch17:01220] [ 1] /home/USERS/lenny/OMPI_ORTE_NEW/lib/libopen-
</span><br>
<span class="quotelev2">&gt; &gt; pal.so.0(free+0x56) [0x2aadf6acb6d6]
</span><br>
<span class="quotelev2">&gt; &gt; [witch17:01220] [ 2] /home/USERS/lenny/OMPI_ORTE_NEW/lib/libopen-
</span><br>
<span class="quotelev2">&gt; &gt; pal.so.0(opal_argv_free+0x25) [0x2aadf6ab9635]
</span><br>
<span class="quotelev2">&gt; &gt; [witch17:01220] [ 3] /home/USERS/lenny/OMPI_ORTE_NEW/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt; &gt; [0x2aadf67f4206]
</span><br>
<span class="quotelev2">&gt; &gt; [witch17:01220] [ 4] /home/USERS/lenny/OMPI_ORTE_NEW/lib/libmpi.so.
</span><br>
<span class="quotelev2">&gt; &gt; 0(MPI_Init+0xf0) [0x2aadf68117c0]
</span><br>
<span class="quotelev2">&gt; &gt; [witch17:01220] [ 5] /home/USERS/lenny/TESTS/ORTE/mpi_p01_NEW(main
</span><br>
<span class="quotelev2">&gt; &gt; +0xef) [0x40109f]
</span><br>
<span class="quotelev2">&gt; &gt; [witch17:01220] [ 6] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev2">&gt; &gt; [0x2aadf7199154]
</span><br>
<span class="quotelev2">&gt; &gt; [witch17:01220] [ 7] /home/USERS/lenny/TESTS/ORTE/mpi_p01_NEW
</span><br>
<span class="quotelev2">&gt; &gt; [0x400ee9]
</span><br>
<span class="quotelev2">&gt; &gt; [witch17:01220] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that process rank 0 with PID 1220 on node witch17
</span><br>
<span class="quotelev2">&gt; &gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3550/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3551.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17941"</a>
<li><strong>Previous message:</strong> <a href="3549.php">Lenny Verkhovsky: "Re: [OMPI devel] RMAPS rank_file component patch and modifications for review"</a>
<li><strong>In reply to:</strong> <a href="3548.php">Jeff Squyres: "Re: [OMPI devel] trunk segfault"</a>
<!-- nextthread="start" -->
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
