<?
$subject_val = "Re: [OMPI users] intermittent node file error running with torque/maui integration";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 11:52:12 2013" -->
<!-- isoreceived="20130920155212" -->
<!-- sent="Fri, 20 Sep 2013 11:52:11 -0400" -->
<!-- isosent="20130920155211" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] intermittent node file error running with torque/maui integration" -->
<!-- id="523C6F2B.60401_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B695C61E-461C-47E1-8634-FB492CA04947_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] intermittent node file error running with torque/maui integration<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-20 11:52:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22699.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-1.7.3a1r29213 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="22697.php">Jeff Squyres (jsquyres): "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>In reply to:</strong> <a href="22686.php">Noam Bernstein: "[OMPI users] intermittent node file error running with torque/maui integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22702.php">Noam Bernstein: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<li><strong>Reply:</strong> <a href="22702.php">Noam Bernstein: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Noam
<br>
<p>Could it be that Torque, or probably more likely NFS,
<br>
is too slow to create/make available the PBS_NODEFILE?
<br>
<p>What if you insert a &quot;sleep 2&quot;,
<br>
or whatever number of seconds you want,
<br>
before the mpiexec command line?
<br>
Or maybe better, a &quot;ls -l $PBS_NODEFILE; cat $PBS_NODEFILE&quot;,
<br>
just to make sure the file it is available and
<br>
filled with the node list, before mpiexec takes over?
<br>
<p>My two cents,
<br>
Gus Correa
<br>
<p>On 09/20/2013 09:55 AM, Noam Bernstein wrote:
<br>
<span class="quotelev1">&gt; Hi - we've been using openmpi for a while, but only for the last few months
</span><br>
<span class="quotelev1">&gt; with torque/maui.  Intermittently (maybe 1/10 jobs), we get mpi jobs that fail with the error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compute-2-4:32448] [[52041,0],0] ORTE_ERROR_LOG: File open failure in file ras_tm_module.c at line 142
</span><br>
<span class="quotelev1">&gt; [compute-2-4:32448] [[52041,0],0] ORTE_ERROR_LOG: File open failure in file ras_tm_module.c at line 82
</span><br>
<span class="quotelev1">&gt; [compute-2-4:32448] [[52041,0],0] ORTE_ERROR_LOG: File open failure in file base/ras_base_allocate.c at line 149
</span><br>
<span class="quotelev1">&gt; [compute-2-4:32448] [[52041,0],0] ORTE_ERROR_LOG: File open failure in file base/plm_base_launch_support.c at line 99
</span><br>
<span class="quotelev1">&gt; [compute-2-4:32448] [[52041,0],0] ORTE_ERROR_LOG: File open failure in file plm_tm_module.c at line 194
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is completely unrepeatable - resubmitting the same job almost
</span><br>
<span class="quotelev1">&gt; always works the second time around.  The line appears to be
</span><br>
<span class="quotelev1">&gt; associated with looking for the torque/maui generated node file,
</span><br>
<span class="quotelev1">&gt; and when I do something like
</span><br>
<span class="quotelev1">&gt;    echo $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt;    cat $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt; it appears that the file is present and correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We're running OpenMPI 1.6.4, configured with
</span><br>
<span class="quotelev1">&gt; ./configure \
</span><br>
<span class="quotelev1">&gt;          --prefix=${DEST} \
</span><br>
<span class="quotelev1">&gt;          --with-tm=/usr/local/torque \
</span><br>
<span class="quotelev1">&gt;          --enable-mpirun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt;          --with-openib=/usr \
</span><br>
<span class="quotelev1">&gt;          --with-openib-libdir=/usr/lib64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone seen anything like this before, or has any ideas of what might
</span><br>
<span class="quotelev1">&gt; be happening?  It appears to be a line where openmpi looks for
</span><br>
<span class="quotelev1">&gt; the PBS node file, which is on a local filesystem (e.g. PBS_NODEFILE=/var/spool/torque/aux//4600.tin).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 									thanks,
</span><br>
<span class="quotelev1">&gt; 									Noam
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Noam Bernstein
</span><br>
<span class="quotelev1">&gt; Center for Computational Materials Science
</span><br>
<span class="quotelev1">&gt; NRL Code 6390
</span><br>
<span class="quotelev1">&gt; noam.bernstein_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22699.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-1.7.3a1r29213 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="22697.php">Jeff Squyres (jsquyres): "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>In reply to:</strong> <a href="22686.php">Noam Bernstein: "[OMPI users] intermittent node file error running with torque/maui integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22702.php">Noam Bernstein: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
<li><strong>Reply:</strong> <a href="22702.php">Noam Bernstein: "Re: [OMPI users] intermittent node file error running with torque/maui integration"</a>
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
