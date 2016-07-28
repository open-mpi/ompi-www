<?
$subject_val = "Re: [OMPI users] restarting checkpointed applications";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 13 11:28:05 2013" -->
<!-- isoreceived="20130113162805" -->
<!-- sent="Sun, 13 Jan 2013 08:27:58 -0800" -->
<!-- isosent="20130113162758" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] restarting checkpointed applications" -->
<!-- id="A42A961F-2EF4-47D2-B604-0CDD77774FDC_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="321E9E17D18E084488F038FCE6624C3EBB815555_at_IBWMBX04" -->
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
<strong>Subject:</strong> Re: [OMPI users] restarting checkpointed applications<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-13 11:27:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21118.php">Iliev, Hristo: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Previous message:</strong> <a href="21116.php">Jerry Mersel: "[OMPI users] restarting checkpointed applications"</a>
<li><strong>In reply to:</strong> <a href="21116.php">Jerry Mersel: "[OMPI users] restarting checkpointed applications"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Our c/r support is unfortunately deprecated due to loss of the person who wrote and supported it. So I'm afraid we are unable to really help with it, and c/r support will not be included in future releases unless someone becomes available to support it again.
<br>
<p><p>On Jan 13, 2013, at 4:37 AM, Jerry Mersel &lt;jerry.mersel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; checkpointing and restarting openmpi applications don't work for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a redhat version 5U6 system with blcr checkpointing version 0.8.4
</span><br>
<span class="quotelev1">&gt; and openmpi version 1.6.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a simple parallel application that I want to checkpoint and restart.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see that the blcr modules are loaded (with lsmod).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I run:
</span><br>
<span class="quotelev1">&gt; mpirun  -np 1 -hostfile hostfile -am ft-enable-cr  EXECUTABLE
</span><br>
<span class="quotelev1">&gt; ompi-checkpoint -v -s &lt;PID of mpirun&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then I kill mpirun.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then:
</span><br>
<span class="quotelev1">&gt; ompi-restart -v ompi_global_snapshot_&lt;PID&gt;.ckpt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; here is my results:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error: Unable to obtain the proper restart command to restart from the 
</span><br>
<span class="quotelev1">&gt;        checkpoint file (opal_snapshot_0.ckpt). Returned -1.
</span><br>
<span class="quotelev1">&gt;        Check the installation of the none checkpoint/restart service
</span><br>
<span class="quotelev1">&gt;        on all of the machines in your system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I try using the blcr utilities (cr_run, cr_checkpoint, cr_run) then it runs on the local machine,  it won't on more then one machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please help me with this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With Blessings, always,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Jerry Mersel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    System Administrator
</span><br>
<span class="quotelev1">&gt;    IT Infrastructure Branch | Division of Information Systems
</span><br>
<span class="quotelev1">&gt;     Weizmann Institute of Science
</span><br>
<span class="quotelev1">&gt;     Rehovot 76100, Israel
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;    Tel:  +972-8-9342363
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21117/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21118.php">Iliev, Hristo: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Previous message:</strong> <a href="21116.php">Jerry Mersel: "[OMPI users] restarting checkpointed applications"</a>
<li><strong>In reply to:</strong> <a href="21116.php">Jerry Mersel: "[OMPI users] restarting checkpointed applications"</a>
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
