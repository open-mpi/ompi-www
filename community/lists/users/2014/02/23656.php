<?
$subject_val = "Re: [OMPI users] Binding to Core Warning";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 26 10:06:32 2014" -->
<!-- isoreceived="20140226150632" -->
<!-- sent="Wed, 26 Feb 2014 07:04:48 -0800" -->
<!-- isosent="20140226150448" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Binding to Core Warning" -->
<!-- id="6AF0A0FF-D83C-4C21-9AE5-F6A069A22EAB_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+ssbKWzA90E-Qg=PyfbsvKLQm_H5NieC36C3YJyXtJCEc6+fQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Binding to Core Warning<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-26 10:04:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23657.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax"</a>
<li><strong>Previous message:</strong> <a href="23655.php">Filippo Spiga: "Re: [OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax"</a>
<li><strong>In reply to:</strong> <a href="23646.php">Saliya Ekanayake: "[OMPI users] Binding to Core Warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23659.php">Saliya Ekanayake: "Re: [OMPI users] Binding to Core Warning"</a>
<li><strong>Reply:</strong> <a href="23659.php">Saliya Ekanayake: "Re: [OMPI users] Binding to Core Warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It means that OMPI didn't get built against libnuma, and so we can't ensure that memory is being bound local to the proc binding. Check to see if numactl and numactl-devel are installed, or you can turn off the warning using &quot;-mca hwloc_base_mem_bind_failure_action silent&quot;
<br>
<p><p>On Feb 25, 2014, at 10:32 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to run an MPI Java program with --bind-to core. I receive the following warning and wonder how to fix this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev1">&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev1">&gt; support binding memory to the process location.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Node:  192.168.0.19
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a warning only; your job will continue, though performance may
</span><br>
<span class="quotelev1">&gt; be degraded.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23656/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23657.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax"</a>
<li><strong>Previous message:</strong> <a href="23655.php">Filippo Spiga: "Re: [OMPI users] OpenMPI 1.7.5 and &quot;--map-by&quot; new syntax"</a>
<li><strong>In reply to:</strong> <a href="23646.php">Saliya Ekanayake: "[OMPI users] Binding to Core Warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23659.php">Saliya Ekanayake: "Re: [OMPI users] Binding to Core Warning"</a>
<li><strong>Reply:</strong> <a href="23659.php">Saliya Ekanayake: "Re: [OMPI users] Binding to Core Warning"</a>
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
