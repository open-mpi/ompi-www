<?
$subject_val = "Re: [OMPI users] PGI 10.9 build failures";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 15 08:26:01 2011" -->
<!-- isoreceived="20110315122601" -->
<!-- sent="Tue, 15 Mar 2011 08:25:55 -0400" -->
<!-- isosent="20110315122555" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI 10.9 build failures" -->
<!-- id="FA0C92E3-5665-4085-AA28-96AEFBDE544B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D7F48E2.3010108_at_mail.eecis.udel.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] PGI 10.9 build failures<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-15 08:25:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15866.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Previous message:</strong> <a href="15864.php">Ben Miller: "[OMPI users] PGI 10.9 build failures"</a>
<li><strong>In reply to:</strong> <a href="15864.php">Ben Miller: "[OMPI users] PGI 10.9 build failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid that this is a bug in the PGI compiler -- Open MPI uses the offsetof() macro in several places throughout its code base.
<br>
<p>This is why we put in the configure test that tells you that your compiler does not support it -- we got a lot of reports of this issue during the build phase of Open MPI, so we decided to put in a specific configure test that would tell you if your compiler was buggy.
<br>
<p>Sorry.  :-(
<br>
<p><p>On Mar 15, 2011, at 7:09 AM, Ben Miller wrote:
<br>
<p><span class="quotelev1">&gt; I am building OFED-1.5.3 on CentOS 5.5 (OFED-1.5.2 build fine) and succeeds
</span><br>
<span class="quotelev1">&gt; except for openmpi_pgi (OpenMPI 1.4.3).  For version 10.9 of the pgi compilers I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Your compiler does not support offsetof macro
</span><br>
<span class="quotelev1">&gt; configure: error: Configure: Cannot continue
</span><br>
<span class="quotelev1">&gt; error: Bad exit status from /var/tmp/rpm-tmp.66872 (%build)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried two fixes I found in the web for this offsetof error (about a year
</span><br>
<span class="quotelev1">&gt; old), but they both failed in the same way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are licensed up to 11.1 for pgi, but both mvapich2 and openmpi fail for it.
</span><br>
<span class="quotelev1">&gt; Looks like that bug is fixed in 11.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea what is wrong with openmpi and pgi 10.9?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; Ben
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15866.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Previous message:</strong> <a href="15864.php">Ben Miller: "[OMPI users] PGI 10.9 build failures"</a>
<li><strong>In reply to:</strong> <a href="15864.php">Ben Miller: "[OMPI users] PGI 10.9 build failures"</a>
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
