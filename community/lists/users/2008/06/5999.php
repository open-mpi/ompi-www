<?
$subject_val = "Re: [OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 27 14:04:52 2008" -->
<!-- isoreceived="20080627180452" -->
<!-- sent="Fri, 27 Jun 2008 14:04:44 -0400" -->
<!-- isosent="20080627180444" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory" -->
<!-- id="5C161409-5A6F-4EE7-A88D-D94A34B66A9B_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="93414.4699.qm_at_web56302.mail.re3.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-27 14:04:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6000.php">Reuti: "Re: [OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory"</a>
<li><strong>Previous message:</strong> <a href="5998.php">Azhar Ali Shah: "[OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory"</a>
<li><strong>In reply to:</strong> <a href="5998.php">Azhar Ali Shah: "[OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6000.php">Reuti: "Re: [OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess you just have to make sure the machine file you're trying to  
<br>
use is there. What &quot;ls -l $TMPDIR/machines&quot; is showing ?
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 27, 2008, at 2:00 PM, Azhar Ali Shah wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using openmpi-1.2.6 with SGE 6.1u3 when I submit a job script  
</span><br>
<span class="quotelev1">&gt; containing:
</span><br>
<span class="quotelev1">&gt; mpirun -n $NSLOTS -machinefile $TMPDIR/machines ~/openmpi_test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it produces following error in the output file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat: /tmp/174.1.all.q/machines: No such file or directory
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Open RTE was unable to open the hostfile:
</span><br>
<span class="quotelev1">&gt;     /tmp/174.1.all.q/machines
</span><br>
<span class="quotelev1">&gt; Check to make sure the path and filename are correct.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [comp5...] [0,0,0] ORTE_ERROR_LOG: Not found in file rmgr_urm.c at  
</span><br>
<span class="quotelev1">&gt; line 358
</span><br>
<span class="quotelev1">&gt; [comp5....] mpirun: spawn failed with errno=-13
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Earlier I had been running jobs with MPICH2 without any problem.
</span><br>
<span class="quotelev1">&gt; Any ideas on how to get arround it please?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; Azhar
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5999/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6000.php">Reuti: "Re: [OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory"</a>
<li><strong>Previous message:</strong> <a href="5998.php">Azhar Ali Shah: "[OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory"</a>
<li><strong>In reply to:</strong> <a href="5998.php">Azhar Ali Shah: "[OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6000.php">Reuti: "Re: [OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory"</a>
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
