<?
$subject_val = "Re: [OMPI users] Qlogic &amp; openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  5 10:12:19 2011" -->
<!-- isoreceived="20111205151219" -->
<!-- sent="Mon, 5 Dec 2011 08:12:10 -0700" -->
<!-- isosent="20111205151210" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Qlogic &amp;amp; openmpi" -->
<!-- id="1F06E7C0-D6DE-4A0D-BCAA-A57ECD4A6DCC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJ9JPxFjwAmaqRsxWjDWY8Bg8m9uBvEboh0xHmpJvFNeC2BKLw_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-05 10:12:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17880.php">arnaud Heritier: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<li><strong>Previous message:</strong> <a href="17878.php">arnaud Heritier: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<li><strong>In reply to:</strong> <a href="17878.php">arnaud Heritier: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17880.php">arnaud Heritier: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<li><strong>Reply:</strong> <a href="17880.php">arnaud Heritier: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<li><strong>Reply:</strong> <a href="17882.php">Bogdan Costescu: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 5, 2011, at 5:49 AM, arnaud Heritier wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found the solution, thanks to Qlogic support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The &quot;can't open /dev/ipath, network down (err=26)&quot; message from the ipath driver is really misleading.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, this is an hardware context problem on the Qlogic PSM. PSM can't allocate any hardware context for the job because  other(s) MPI job(s) have already used all available contexts. In order to avoid this problem, every MPI jobs have to use the  PSM_SHAREDCONTEXTS_MAX variable set with the good value, according to the number of processes that will run on the node. If we don't use this variable, PSM will &quot;greedily&quot; use all contexts with the first mpi job spawned on the node.
</span><br>
<p>Sounds like we should be setting this value when starting the process - yes? If so, what is the &quot;good&quot; value, and how do we compute it?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Arnaud
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Nov 29, 2011 at 6:44 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Nov 28, 2011, at 11:53 PM, arnaud Heritier wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I do have a contract and i tried to open a case, but their support is ......
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What happens if you put a delay between the two jobs?  E.g., if you just delay a few seconds before the 2nd job starts?  Perhaps the ipath device just needs a little time before it will be available...?  (that's a total guess)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suggest this because the PSM device will definitely give you better overall performance than the QLogic verbs support.  Their verbs support basically barely works -- PSM is their primary device and the one that we always recommend.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Anyway. I'm stii working on the strange error message from mpirun saying it can't allocate memory when at the same time it also reports that the memory is unlimited ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Arnaud
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Nov 29, 2011 at 4:23 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I'm afraid we don't have any contacts left at QLogic to ask them any more... do you have a support contract, perchance?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 27, 2011, at 3:11 PM, Arnaud Heritier wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I run into a stange problem with qlogic OFED and openmpi. When i submit (through SGE) 2 jobs on the same node, the second job ends up with:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (ipath/PSM)[10292]: can't open /dev/ipath, network down (err=26)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm pretty sure the infiniband is working well as the other job runs fine.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Here is details about the configuration:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Qlogic HCA: InfiniPath_QMH7342 (2 ports but only one connected to a switch)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; qlogic_ofed-1.5.3-7.0.0.0.35 (rocks cluster roll)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; openmpi 1.5.4 (./configure --with-psm --with-openib --with-sge)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In order to fix this problem i recompiled openmpi without psm support, but i faced an other problem:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The OpenFabrics (openib) BTL failed to initialize while trying to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; allocate some locked memory.  This typically can indicate that the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; memlock limits are set too low.  For most HPC installations, the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; memlock limits should be set to &quot;unlimited&quot;.  The failure occured
</span><br>
<span class="quotelev3">&gt; &gt; &gt; here:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Local host:    compute-0-6.local
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   OMPI source:   btl_openib.c:329
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Function:      ibv_create_srq()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Device:        qib0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Memlock limit: unlimited
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-17879/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17880.php">arnaud Heritier: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<li><strong>Previous message:</strong> <a href="17878.php">arnaud Heritier: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<li><strong>In reply to:</strong> <a href="17878.php">arnaud Heritier: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17880.php">arnaud Heritier: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<li><strong>Reply:</strong> <a href="17880.php">arnaud Heritier: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<li><strong>Reply:</strong> <a href="17882.php">Bogdan Costescu: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
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
