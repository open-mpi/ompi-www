<?
$subject_val = "Re: [OMPI users] IPoIB";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 09:12:16 2010" -->
<!-- isoreceived="20100406131216" -->
<!-- sent="Tue, 6 Apr 2010 09:12:12 -0400" -->
<!-- isosent="20100406131212" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IPoIB" -->
<!-- id="B9071A1E-DBCE-44EE-9F82-D29BDED27D72_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ECB4E151-0902-4A75-A3B6-11E0DACD0FEE_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] IPoIB<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 09:12:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12553.php">Jeff Squyres: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12551.php">Jeff Squyres: "Re: [OMPI users] Trouble building openmpi 1.2.8 with intelcompilers 10.0.23"</a>
<li><strong>In reply to:</strong> <a href="12540.php">Ralph Castain: "Re: [OMPI users] IPoIB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
More specifically, Open MPI still uses a TCP layer for its run-time setup/teardown.  That TCP can be regular ethernet, IPoIB, or any other emulation layer.  Ralph's referring to the oob_tcp_if_in|exclude flags allows you to specify using your IPoIB devices, pure ethernet devices, etc.
<br>
<p><p>On Apr 5, 2010, at 6:05 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; If it is available, yes - though you can control that by setting the oob_tcp_if_include[exclude] flags
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 5, 2010, at 3:44 PM, David Turner wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please, some clarification.  I have built Open MPI 1.4.1 against
</span><br>
<span class="quotelev2">&gt; &gt; our IB verbs layer, and all seems well.  But a question has come
</span><br>
<span class="quotelev2">&gt; &gt; up about IPoIB.  While all communications are using the &quot;native&quot;
</span><br>
<span class="quotelev2">&gt; &gt; IB interface (verbs), will mpirun use IPoIB during job launch
</span><br>
<span class="quotelev2">&gt; &gt; and teardown?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If it matters, resource allocation is via torque.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Best regards,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; David Turner
</span><br>
<span class="quotelev2">&gt; &gt; User Services Group        email: dpturner_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; NERSC Division             phone: (510) 486-4027
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley Lab        fax: (510) 486-4316
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
<li><strong>Next message:</strong> <a href="12553.php">Jeff Squyres: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12551.php">Jeff Squyres: "Re: [OMPI users] Trouble building openmpi 1.2.8 with intelcompilers 10.0.23"</a>
<li><strong>In reply to:</strong> <a href="12540.php">Ralph Castain: "Re: [OMPI users] IPoIB"</a>
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
