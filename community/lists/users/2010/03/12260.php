<?
$subject_val = "Re: [OMPI users] change hosts to restart the checkpoint";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  5 10:03:45 2010" -->
<!-- isoreceived="20100305150345" -->
<!-- sent="Fri, 5 Mar 2010 10:03:41 -0500" -->
<!-- isosent="20100305150341" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] change hosts to restart the checkpoint" -->
<!-- id="4C144D81-C3EB-446B-93C7-A6DED50C0FF5_at_open-mpi.org" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201003051606204849011_at_163.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] change hosts to restart the checkpoint<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-05 10:03:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12261.php">abc def: "Re: [OMPI users] running external program	on	same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12259.php">Ralph Castain: "Re: [OMPI users] running external program on	same	processor	(Fortran)"</a>
<li><strong>In reply to:</strong> <a href="12254.php">&#194;&#237;&#201;&#217;&#189;&#220;: "[OMPI users] change hosts to restart the checkpoint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12270.php">Fernando Lemos: "Re: [OMPI users] change hosts to restart the checkpoint"</a>
<li><strong>Reply:</strong> <a href="12270.php">Fernando Lemos: "Re: [OMPI users] change hosts to restart the checkpoint"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This type of failure is usually due to prelink'ing being left enabled  
<br>
on one or more of the systems. This has come up multiple times on the  
<br>
Open MPI list, but is actually a problem between BLCR and the Linux  
<br>
kernel. BLCR has a FAQ entry on this that you will want to check out:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://upc-bugs.lbl.gov//blcr/doc/html/FAQ.html#prelink">https://upc-bugs.lbl.gov//blcr/doc/html/FAQ.html#prelink</a>
<br>
<p>If that does not work, then we can look into other causes.
<br>
<p>-- Josh
<br>
<p>On Mar 5, 2010, at 3:06 AM, &#233;&#169;&#172;&#229;&#176;&#145;&#230;&#157;&#176; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2010-03-05
</span><br>
<span class="quotelev1">&gt; &#233;&#169;&#172;&#229;&#176;&#145;&#230;&#157;&#176;
</span><br>
<span class="quotelev1">&gt; Dear Sir:
</span><br>
<span class="quotelev1">&gt;    I want to use openmpi and blcr to checkpoint.However, I want  
</span><br>
<span class="quotelev1">&gt; restart the check point
</span><br>
<span class="quotelev1">&gt; on other hosts.  For example, I run mpi program using openmpi on
</span><br>
<span class="quotelev1">&gt; host1 and host2, and I save the checkpoint file at a nfs shared path.
</span><br>
<span class="quotelev1">&gt; Then I wan to restart the job (ompi-restart -machinefile ma  
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_15865.ckpt) on host3 and
</span><br>
<span class="quotelev1">&gt;  host4. The 4 host have same hardware and software. If I change the  
</span><br>
<span class="quotelev1">&gt; hostname (host3 and host4) on machinfile, the error always  occur,
</span><br>
<span class="quotelev1">&gt;  [node182:27278] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [node182:27278] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [node182:27278] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [node182:27278] Failing at address: 0x3b81009530
</span><br>
<span class="quotelev1">&gt; [node182:27275] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [node182:27275] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [node182:27275] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [node182:27275] Failing at address: 0x3b81009530
</span><br>
<span class="quotelev1">&gt; [node182:27274] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [node182:27274] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [node182:27274] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [node182:27274] Failing at address: 0x3b81009530
</span><br>
<span class="quotelev1">&gt; [node182:27276] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [node182:27276] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [node182:27276] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [node182:27276] Failing at address: 0x3b81009530
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 9 with PID 27973 on node node183  
</span><br>
<span class="quotelev1">&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   if I comeback the hostname as host1 and host2, it can restart  
</span><br>
<span class="quotelev1">&gt; succesfully.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  my openmpi version is 1.3.4
</span><br>
<span class="quotelev1">&gt;  ./configure  --with-ft=cr --enable-mpi-threads --enable-ft-thread -- 
</span><br>
<span class="quotelev1">&gt; with-blcr=$dir --with-blcr-libdir=/$dir/lib --prefix=$dir_ompi -- 
</span><br>
<span class="quotelev1">&gt; enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  the command run the mpi progrom as
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 --am ft-enable-cr --mca opal_cr_use_thread 0  - 
</span><br>
<span class="quotelev1">&gt; machinefile ma ./cpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; vim $HOME/.openmpi/mca-params.conf
</span><br>
<span class="quotelev1">&gt; crs_base_snapshot_dir=/tmp/cr
</span><br>
<span class="quotelev1">&gt; snapc_base_global_snapshot_dir=/disk/cr
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
<li><strong>Next message:</strong> <a href="12261.php">abc def: "Re: [OMPI users] running external program	on	same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12259.php">Ralph Castain: "Re: [OMPI users] running external program on	same	processor	(Fortran)"</a>
<li><strong>In reply to:</strong> <a href="12254.php">&#194;&#237;&#201;&#217;&#189;&#220;: "[OMPI users] change hosts to restart the checkpoint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12270.php">Fernando Lemos: "Re: [OMPI users] change hosts to restart the checkpoint"</a>
<li><strong>Reply:</strong> <a href="12270.php">Fernando Lemos: "Re: [OMPI users] change hosts to restart the checkpoint"</a>
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
