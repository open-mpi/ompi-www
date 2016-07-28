<?
$subject_val = "Re: [OMPI users] users Digest, Vol 3510, Issue 2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 26 19:28:19 2016" -->
<!-- isoreceived="20160526232819" -->
<!-- sent="Thu, 26 May 2016 23:28:17 +0000" -->
<!-- isosent="20160526232817" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 3510, Issue 2" -->
<!-- id="441F803D-FDBB-443D-82AA-74FF3845A329_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="777077126.2222461.1464291963715.JavaMail.yahoo_at_mail.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 3510, Issue 2<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-26 19:28:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29319.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Previous message:</strong> <a href="29317.php">Megdich Islem: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="29317.php">Megdich Islem: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You're still intermingling your Open MPI and MPICH installations.
<br>

<br>
You need to ensure to use the wrapper compilers and mpirun/mpiexec from the same MPI implementation.
<br>

<br>
For example, if you use mpicc/mpifort from Open MPI to build your program, then you must use Open MPI's mpirun/mpiexec.
<br>

<br>
If you absolutely need to have both MPI implementations in your PATH / LD_LIBRARY_PATH, you might want to use absolute path names to for mpicc/mpifort/mpirun/mpiexec.
<br>

<br>

<br>

<br>
<span class="quotelev1">&gt; On May 26, 2016, at 3:46 PM, Megdich Islem &lt;megdich_islem_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you all for your suggestions !!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found an answer to a similar case in Open MPI FAQ (Question 15)
</span><br>
<span class="quotelev1">&gt; FAQ: Running MPI jobs
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
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; FAQ: Running MPI jobs
</span><br>
<span class="quotelev1">&gt; Table of contents: What pre-requisites are necessary for running an Open MPI job? What ABI guarantees does Open MPI provide? Do I need a common filesystem on a...
</span><br>
<span class="quotelev1">&gt; Afficher sur www.open-mpi.org
</span><br>
<span class="quotelev1">&gt; Aper&#195;&#167;u par Yahoo
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; which suggests to use mpirun's  prefix command line option or to use the mpirun wrapper.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I modified my command  to the following
</span><br>
<span class="quotelev1">&gt;  mpirun --prefix /opt/openfoam30/platforms/linux64GccDPInt32Opt/lib/Openmpi-system -np 1 pimpleDyMFoam -case OF
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, I got an error (see attached picture). Is the syntax correct? How can I solve the problem? That first method seems to be easier than using the mpirun wrapper.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Otherwise, how can I use the mpirun wrapper?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; islem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le Mercredi 25 mai 2016 16h40, Dave Love &lt;d.love_at_[hidden]&gt; a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; You could wrap one (set of) program(s) in a script to set the
</span><br>
<span class="quotelev2">&gt; &gt; appropriate environment before invoking the real program. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I realize I should have said something like &quot;program invocations&quot;,
</span><br>
<span class="quotelev1">&gt; i.e. if you have no control over something invoking mpirun for programs
</span><br>
<span class="quotelev1">&gt; using different MPIs, then an mpirun wrapper needs to check what it's
</span><br>
<span class="quotelev1">&gt; being asked to run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;mpirun-error.png&gt;&lt;path-to-open-mpi.png&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29317.php">http://www.open-mpi.org/community/lists/users/2016/05/29317.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29319.php">Siegmar Gross: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Previous message:</strong> <a href="29317.php">Megdich Islem: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="29317.php">Megdich Islem: "Re: [OMPI users] users Digest, Vol 3510, Issue 2"</a>
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
