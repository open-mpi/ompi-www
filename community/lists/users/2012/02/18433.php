<?
$subject_val = "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 10 15:50:41 2012" -->
<!-- isoreceived="20120210205041" -->
<!-- sent="Fri, 10 Feb 2012 15:50:34 -0500" -->
<!-- isosent="20120210205034" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list" -->
<!-- id="FAB253FB-3275-4C83-8E2F-3F49F274C258_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F33926A.23060.481A2FF0_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-10 15:50:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18434.php">Alex Margolin: "[OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<li><strong>Previous message:</strong> <a href="18432.php">Jeff Squyres: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18425.php">yanyg_at_[hidden]: "[OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18447.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you provide a specific example?
<br>
<p>I'm able to do this just fine, for example (with the upcoming OMPI 1.4.5):
<br>
<p>mpirun --host svbu-mpi001,svbu-mpi001,svbu-mpi002,svbu-mpi002 --mca btl sm,openib,self ring
<br>
<p><p>On Feb 9, 2012, at 9:31 AM, yanyg_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good morning!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have trouble to communicate through sm btl in open MPI, please 
</span><br>
<span class="quotelev1">&gt; check the attached file for my system information. I am using open 
</span><br>
<span class="quotelev1">&gt; MPI 1.4.3, intel compilers V11.1, on linux RHEL 5.4 with kernel 2.6.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The tests are the following: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1) if I specify the btl to mpirun by &quot;--mca btl self,sm,openib&quot;, if I did 
</span><br>
<span class="quotelev1">&gt; not specify any of my computing nodes twice or more in the node 
</span><br>
<span class="quotelev1">&gt; list, my job runs fine. However, if I specify any of the computing 
</span><br>
<span class="quotelev1">&gt; nodes twice or more in the node list, it will hang there forever. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (2) if I did not specify the sm btl to mpirun as &quot;--mca btl 
</span><br>
<span class="quotelev1">&gt; self,openib&quot;, I could run my job smoothly, either put any of the 
</span><br>
<span class="quotelev1">&gt; computing nodes twice or more in the node list, or not. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From above 2 tests, apparently something wrong with sm btl 
</span><br>
<span class="quotelev1">&gt; interface on my system. As I checked the user archive, sm btl 
</span><br>
<span class="quotelev1">&gt; issue has been encountered due to the comm_spawned 
</span><br>
<span class="quotelev1">&gt; parent/child processes. But this seems not the case here, if I do 
</span><br>
<span class="quotelev1">&gt; not use any of my MPI based solver, only with MPI initialization and 
</span><br>
<span class="quotelev1">&gt; finalization procedures called, it still has this issue. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any comments?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Yiguang
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following section of this message contains a file attachment
</span><br>
<span class="quotelev1">&gt; prepared for transmission using the Internet MIME message format.
</span><br>
<span class="quotelev1">&gt; If you are using Pegasus Mail, or any another MIME-compliant system,
</span><br>
<span class="quotelev1">&gt; you should be able to save it or view it from within your mailer.
</span><br>
<span class="quotelev1">&gt; If you cannot, please ask your system administrator for assistance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   ---- File information -----------
</span><br>
<span class="quotelev1">&gt;     File:  ompiinfo-config-uname-output.tgz
</span><br>
<span class="quotelev1">&gt;     Date:  9 Feb 2012, 8:58
</span><br>
<span class="quotelev1">&gt;     Size:  126316 bytes.
</span><br>
<span class="quotelev1">&gt;     Type:  Unknown
</span><br>
<span class="quotelev1">&gt; &lt;ompiinfo-config-uname-output.tgz&gt;_______________________________________________
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18434.php">Alex Margolin: "[OMPI users] OpenMPI build fails with &quot;undefined reference to symbol 'opal_cmd_line_get_usage_msg'&quot;"</a>
<li><strong>Previous message:</strong> <a href="18432.php">Jeff Squyres: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18425.php">yanyg_at_[hidden]: "[OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18447.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
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
