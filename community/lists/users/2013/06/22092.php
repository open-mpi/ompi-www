<?
$subject_val = "Re: [OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 14 09:32:26 2013" -->
<!-- isoreceived="20130614133226" -->
<!-- sent="Fri, 14 Jun 2013 06:32:19 -0700" -->
<!-- isosent="20130614133219" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unknow option &amp;quot;--tree-spawn&amp;quot; with OpenMPI-1.7.1" -->
<!-- id="1A09436C-E478-467A-AD0A-5EC9D9DA8C72_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CALr9+a7tv3PrQyMKV8Dwe1Y6-FfchpUxzcjPWWJNomGw8TLnUQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-14 09:32:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22093.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>Previous message:</strong> <a href="22091.php">Reem Alraddadi: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>In reply to:</strong> <a href="22090.php">Zehan Cui: "[OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22094.php">Zehan Cui: "Re: [OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1"</a>
<li><strong>Reply:</strong> <a href="22094.php">Zehan Cui: "Re: [OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You aren't setting the path correctly on your backend machines, and so they are picking up an older version of OMPI.
<br>
<p>On Jun 14, 2013, at 2:08 AM, Zehan Cui &lt;zehan.cui_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have just install OpenMPI-1.7.1 and cannot get it running.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the error messages:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [cmy_at_gLoginNode1 test_nbc]$ mpirun -n 4 -host gnode100 ./hello
</span><br>
<span class="quotelev1">&gt; [gnode100:31789] Error: unknown option &quot;--tree-spawn&quot;
</span><br>
<span class="quotelev1">&gt; input in flex scanner failed
</span><br>
<span class="quotelev1">&gt; [gLoginNode1:14920] [[62542,0],0] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file rml_oob_send.c at line 362
</span><br>
<span class="quotelev1">&gt; [gLoginNode1:14920] [[62542,0],0] attempted to send to [[62542,0],1]: tag 15
</span><br>
<span class="quotelev1">&gt; [gLoginNode1:14920] [[62542,0],0] ORTE_ERROR_LOG: A message is attempting to be sent to a process whose contact information is unknown in file base/grpcomm_base_xcast.c at line 166
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have run it on several nodes, and got the same messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Zehan Cui
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
<li><strong>Next message:</strong> <a href="22093.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>Previous message:</strong> <a href="22091.php">Reem Alraddadi: "Re: [OMPI users] Error when build openmpi on Mac Pro"</a>
<li><strong>In reply to:</strong> <a href="22090.php">Zehan Cui: "[OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22094.php">Zehan Cui: "Re: [OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1"</a>
<li><strong>Reply:</strong> <a href="22094.php">Zehan Cui: "Re: [OMPI users] unknow option &quot;--tree-spawn&quot; with OpenMPI-1.7.1"</a>
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
