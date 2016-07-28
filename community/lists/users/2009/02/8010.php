<?
$subject_val = "Re: [OMPI users] Problem redirecting standard input";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 10 12:21:51 2009" -->
<!-- isoreceived="20090210172151" -->
<!-- sent="Tue, 10 Feb 2009 10:21:41 -0700" -->
<!-- isosent="20090210172141" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem redirecting standard input" -->
<!-- id="3640044E-A5EC-440E-9DFB-43F0B68D3CE8_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="03261C2B265B89439DB2B424167AD39621D2760CD2_at_NDJSSCC01.ndc.nasa.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem redirecting standard input<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-10 12:21:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8011.php">Douglas Guptill: "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<li><strong>Previous message:</strong> <a href="8009.php">Champagne, Nathan J. (JSC-EV)[ESCG]: "[OMPI users] Problem redirecting standard input"</a>
<li><strong>In reply to:</strong> <a href="8009.php">Champagne, Nathan J. (JSC-EV)[ESCG]: "[OMPI users] Problem redirecting standard input"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8014.php">Champagne, Nathan J. (JSC-EV)[ESCG]: "Re: [OMPI users] Problem redirecting standard input"</a>
<li><strong>Reply:</strong> <a href="8014.php">Champagne, Nathan J. (JSC-EV)[ESCG]: "Re: [OMPI users] Problem redirecting standard input"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's a known race condition problem that has been fixed for the 1.3.1  
<br>
release - hope to have that out in the near future.
<br>
<p>Sorry
<br>
Ralph
<br>
<p><p>On Feb 10, 2009, at 10:16 AM, Champagne, Nathan J. (JSC-EV)[ESCG] wrote:
<br>
<p><span class="quotelev1">&gt; I have searched for solutions to this problem, but have not been  
</span><br>
<span class="quotelev1">&gt; successful. The following command works okay when using Open MPI  
</span><br>
<span class="quotelev1">&gt; 1.2.8:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       shell$ mpirun --hostfile procs -np 5 my_app &lt; my_input
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, the above command produces the following error message when  
</span><br>
<span class="quotelev1">&gt; using Open MPI 1.3:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       forrtl: severe (24): end-of-file during read, unit -4, file  
</span><br>
<span class="quotelev1">&gt; stdin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that all the processes have access to the &quot;my_input&quot; file.  
</span><br>
<span class="quotelev1">&gt; Also, I have tried different process ranks for the &quot;--stdin&quot; flag to  
</span><br>
<span class="quotelev1">&gt; no avail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone have any ideas or can point me to a solution?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8010/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8011.php">Douglas Guptill: "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<li><strong>Previous message:</strong> <a href="8009.php">Champagne, Nathan J. (JSC-EV)[ESCG]: "[OMPI users] Problem redirecting standard input"</a>
<li><strong>In reply to:</strong> <a href="8009.php">Champagne, Nathan J. (JSC-EV)[ESCG]: "[OMPI users] Problem redirecting standard input"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8014.php">Champagne, Nathan J. (JSC-EV)[ESCG]: "Re: [OMPI users] Problem redirecting standard input"</a>
<li><strong>Reply:</strong> <a href="8014.php">Champagne, Nathan J. (JSC-EV)[ESCG]: "Re: [OMPI users] Problem redirecting standard input"</a>
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
