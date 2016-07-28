<?
$subject_val = "Re: [OMPI users] orted daemon no found! --- environment not passed to slave nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 28 17:41:28 2012" -->
<!-- isoreceived="20120228224128" -->
<!-- sent="Tue, 28 Feb 2012 17:41:22 -0500" -->
<!-- isosent="20120228224122" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted daemon no found! --- environment not passed to slave nodes?" -->
<!-- id="989C29F5-03BF-40A7-B75A-83B49A554475_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F4B5DF2.13971.C25FFA2_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] orted daemon no found! --- environment not passed to slave nodes?<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-28 17:41:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18585.php">Syed Ahsan Ali: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>Previous message:</strong> <a href="18583.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>In reply to:</strong> <a href="18562.php">yanyg_at_[hidden]: "[OMPI users] orted daemon no found! --- environment not passed to slave nodes?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The intent of the --prefix option (or using the full path name to mpirun) was exactly for the purpose of not requiring changes to the .bashrc.
<br>
<p>Can you run with &quot;--mca plm_base_verbose 100&quot; on your command line?  This will show us the exact rsh/ssh command line that is being executed -- it might shed some light on what is going on here.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca plm_base_verbose 100 --host A,B hostname
<br>
<p><p><p>On Feb 27, 2012, at 10:41 AM, yanyg_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Greetings!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have tried to run ring_c example test from a bash script. In this 
</span><br>
<span class="quotelev1">&gt; bash script, I setup PATH and LD_LIBRARY_PATH(I donot want to 
</span><br>
<span class="quotelev1">&gt; disturb ~/.bashrc, etc), then use a full path of mpirun to invoke mpi 
</span><br>
<span class="quotelev1">&gt; processes, the mpirun and orted are both on the PATH. However, 
</span><br>
<span class="quotelev1">&gt; from the Open MPI message, orted was not found, to me, it was 
</span><br>
<span class="quotelev1">&gt; not found only on slave nodes. Then I tried to set the --prefix or -x 
</span><br>
<span class="quotelev1">&gt; PATH -x LD_LIBRARY_PATH to hope these envars passed to 
</span><br>
<span class="quotelev1">&gt; slave nodes, but it turned out they are not forwarded to slave 
</span><br>
<span class="quotelev1">&gt; nodes. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the other hand, if I set the same PATH and 
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH in ~/.bashrc which shared by all nodes, 
</span><br>
<span class="quotelev1">&gt; mpirun from bash script runs fine and orted could be found. This is 
</span><br>
<span class="quotelev1">&gt; easy to understand though, but I realy do not want to change 
</span><br>
<span class="quotelev1">&gt; ~/.bashrc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems the non-interactive bash shell does not pass envars to 
</span><br>
<span class="quotelev1">&gt; slave nodes. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any comments and solutions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Yiguang
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18585.php">Syed Ahsan Ali: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>Previous message:</strong> <a href="18583.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>In reply to:</strong> <a href="18562.php">yanyg_at_[hidden]: "[OMPI users] orted daemon no found! --- environment not passed to slave nodes?"</a>
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
