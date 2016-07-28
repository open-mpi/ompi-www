<?
$subject_val = "Re: [OMPI users] Qlogic &amp; openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 28 23:53:50 2011" -->
<!-- isoreceived="20111129045350" -->
<!-- sent="Tue, 29 Nov 2011 07:53:15 +0300" -->
<!-- isosent="20111129045315" -->
<!-- name="arnaud Heritier" -->
<!-- email="arnaud.heritier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Qlogic &amp;amp; openmpi" -->
<!-- id="CAJ9JPxFZ5V6KHcG7yQdPQ1_iySwOQa6gX-x1911=cK6rJYj9gQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="63CF4C86-8B89-4404-BB54-50255B398C34_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Qlogic &amp; openmpi<br>
<strong>From:</strong> arnaud Heritier (<em>arnaud.heritier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-28 23:53:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17855.php">Martin Santa María: "[OMPI users] FW:  Problem launching application on windows"</a>
<li><strong>Previous message:</strong> <a href="17853.php">Jeff Squyres: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<li><strong>In reply to:</strong> <a href="17853.php">Jeff Squyres: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17860.php">Jeff Squyres: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<li><strong>Reply:</strong> <a href="17860.php">Jeff Squyres: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I do have a contract and i tried to open a case, but their support is
<br>
......Anyway. I'm stii working on the strange error message from mpirun
<br>
saying it can't allocate memory when at the same time it also reports that
<br>
the memory is unlimited ...
<br>
<p><p>Arnaud
<br>
<p>On Tue, Nov 29, 2011 at 4:23 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm afraid we don't have any contacts left at QLogic to ask them any
</span><br>
<span class="quotelev1">&gt; more... do you have a support contract, perchance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 27, 2011, at 3:11 PM, Arnaud Heritier wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I run into a stange problem with qlogic OFED and openmpi. When i submit
</span><br>
<span class="quotelev1">&gt; (through SGE) 2 jobs on the same node, the second job ends up with:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (ipath/PSM)[10292]: can't open /dev/ipath, network down (err=26)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm pretty sure the infiniband is working well as the other job runs
</span><br>
<span class="quotelev1">&gt; fine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is details about the configuration:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Qlogic HCA: InfiniPath_QMH7342 (2 ports but only one connected to a
</span><br>
<span class="quotelev1">&gt; switch)
</span><br>
<span class="quotelev2">&gt; &gt; qlogic_ofed-1.5.3-7.0.0.0.35 (rocks cluster roll)
</span><br>
<span class="quotelev2">&gt; &gt; openmpi 1.5.4 (./configure --with-psm --with-openib --with-sge)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In order to fix this problem i recompiled openmpi without psm support,
</span><br>
<span class="quotelev1">&gt; but i faced an other problem:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The OpenFabrics (openib) BTL failed to initialize while trying to
</span><br>
<span class="quotelev2">&gt; &gt; allocate some locked memory.  This typically can indicate that the
</span><br>
<span class="quotelev2">&gt; &gt; memlock limits are set too low.  For most HPC installations, the
</span><br>
<span class="quotelev2">&gt; &gt; memlock limits should be set to &quot;unlimited&quot;.  The failure occured
</span><br>
<span class="quotelev2">&gt; &gt; here:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Local host:    compute-0-6.local
</span><br>
<span class="quotelev2">&gt; &gt;   OMPI source:   btl_openib.c:329
</span><br>
<span class="quotelev2">&gt; &gt;   Function:      ibv_create_srq()
</span><br>
<span class="quotelev2">&gt; &gt;   Device:        qib0
</span><br>
<span class="quotelev2">&gt; &gt;   Memlock limit: unlimited
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17854/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17855.php">Martin Santa María: "[OMPI users] FW:  Problem launching application on windows"</a>
<li><strong>Previous message:</strong> <a href="17853.php">Jeff Squyres: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<li><strong>In reply to:</strong> <a href="17853.php">Jeff Squyres: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17860.php">Jeff Squyres: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<li><strong>Reply:</strong> <a href="17860.php">Jeff Squyres: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
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
