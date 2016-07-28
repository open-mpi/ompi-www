<?
$subject_val = "Re: [OMPI users] Problem building OpenMPI with PGI compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 11 15:55:37 2009" -->
<!-- isoreceived="20091211205537" -->
<!-- sent="Fri, 11 Dec 2009 12:55:02 -0800" -->
<!-- isosent="20091211205502" -->
<!-- name="David Turner" -->
<!-- email="dpturner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem building OpenMPI with PGI compilers" -->
<!-- id="4B22B1A6.2040105_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.1488.1260459775.15697.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem building OpenMPI with PGI compilers<br>
<strong>From:</strong> David Turner (<em>dpturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-11 15:55:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11523.php">Kritiraj Sajadah: "[OMPI users] Problem with checkpointing multihosts, multiprocesses MPI application"</a>
<li><strong>Previous message:</strong> <a href="11521.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.4 RPM Spec file problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="11484.php">David Turner: "[OMPI users] Problem building OpenMPI with PGI compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p><span class="quotelev1">&gt; Subject: Re: [OMPI users] Problem building OpenMPI with PGI compilers
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Thu, 10 Dec 2009 10:20:32 -0500
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
...
<br>
<span class="quotelev1">&gt; Actually, I was wrong.  You *can't* just take the SVN trunk's autogen.sh and use it with a v1.4 tarball (for various uninteresting reasons).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Given that we haven't moved this patch to the v1.4 branch yet (i.e., it's not yet in a nightly v1.4 tarball), probably the easiest thing to do is to apply the attached patch to a v1.4 tarball.  I tried it with my PGI 10.0 install and it seems to work.  So -- forget everything about autogen.sh and just apply the attached patch.
</span><br>
<p>Thanks; I was able to complete the make process using the provided
<br>
patch.
<br>
<p><pre>
-- 
Best regards,
David Turner
User Services Group        email: dpturner_at_[hidden]
NERSC Division             phone: (510) 486-4027
Lawrence Berkeley Lab        fax: (510) 486-4316
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11523.php">Kritiraj Sajadah: "[OMPI users] Problem with checkpointing multihosts, multiprocesses MPI application"</a>
<li><strong>Previous message:</strong> <a href="11521.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.4 RPM Spec file problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="11484.php">David Turner: "[OMPI users] Problem building OpenMPI with PGI compilers"</a>
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
