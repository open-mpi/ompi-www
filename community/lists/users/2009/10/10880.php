<?
$subject_val = "Re: [OMPI users] job fails with &quot;Signal: Bus error (7)&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct  3 07:12:47 2009" -->
<!-- isoreceived="20091003111247" -->
<!-- sent="Sat, 3 Oct 2009 07:12:42 -0400" -->
<!-- isosent="20091003111242" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] job fails with &amp;quot;Signal: Bus error (7)&amp;quot;" -->
<!-- id="8EC4303C-22DD-41F7-A6E8-075C31D11D88_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="cb60cbc40910010301i7ae39d2cv9f2e6241bbacea7d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] job fails with &quot;Signal: Bus error (7)&quot;<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-03 07:12:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10881.php">Jeff Squyres: "Re: [OMPI users] use additional interface for openmpi"</a>
<li><strong>Previous message:</strong> <a href="10879.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_accept()/connect() errors"</a>
<li><strong>In reply to:</strong> <a href="10843.php">Sangamesh B: "[OMPI users] job fails with &quot;Signal: Bus error (7)&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bus error usually means that there was an invalid address passed as a  
<br>
pointer somewhere in the code -- it's not usually a communications  
<br>
error.
<br>
<p>Without more information, it's rather difficult to speculate on what  
<br>
happened here.  Did you get corefiles?  If so, are there useful  
<br>
backtraces available?
<br>
<p><p>On Oct 1, 2009, at 6:01 AM, Sangamesh B wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      A fortran application which is compiled with ifort-10.1 and  
</span><br>
<span class="quotelev1">&gt; open mpi 1.3.1 on Cent OS 5.2 fails after running 4 days with  
</span><br>
<span class="quotelev1">&gt; following error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25430] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25433] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25433] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25433] Signal code:  (2)
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25433] Failing at address: 0x4217b8
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25431] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25431] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25431] Signal code:  (2)
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25431] Failing at address: 0x4217b8
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25432] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25432] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25432] Signal code:  (2)
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25432] Failing at address: 0x4217b8
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25430] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25430] Signal code:  (2)
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25430] Failing at address: 0x4217b8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25431] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25431] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25431] Signal code:  (128)
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25431] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25430] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25433] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25433] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25433] Signal code:  (128)
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25433] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25432] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25432] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25432] Signal code:  (128)
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25432] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25430] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25430] Signal code:  (128)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compute-0-7:25430] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 3 with PID 25433 on node  
</span><br>
<span class="quotelev1">&gt; compute-0-7.local exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This job is run with 4 open mpi processes, on the nodes which have  
</span><br>
<span class="quotelev1">&gt; interconnected with Gigabit.
</span><br>
<span class="quotelev1">&gt; The same job runs well on the nodes with infiniband connectivity.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What could be the reason for this? Is this due to loose physical  
</span><br>
<span class="quotelev1">&gt; connectivities, as its giving a bus error?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10881.php">Jeff Squyres: "Re: [OMPI users] use additional interface for openmpi"</a>
<li><strong>Previous message:</strong> <a href="10879.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_accept()/connect() errors"</a>
<li><strong>In reply to:</strong> <a href="10843.php">Sangamesh B: "[OMPI users] job fails with &quot;Signal: Bus error (7)&quot;"</a>
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
