<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 24 13:47:02 2006" -->
<!-- isoreceived="20060524174702" -->
<!-- sent="Wed, 24 May 2006 13:46:57 -0400" -->
<!-- isosent="20060524174657" -->
<!-- name="Terry Reeves" -->
<!-- email="reeves.2_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran support not installing" -->
<!-- id="EB250F69-E912-4630-8C4A-D5369EEF3B32_at_osu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.25.1148486406.1549.users_at_open-mpi.org" -->
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
<strong>From:</strong> Terry Reeves (<em>reeves.2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-24 13:46:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1273.php">Jens Klostermann: "[OMPI users] spawn failed with errno=-7"</a>
<li><strong>Previous message:</strong> <a href="1271.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] .bashrc or .bash_profile"</a>
<li><strong>Maybe in reply to:</strong> <a href="1267.php">Terry Reeves: "[OMPI users] Fortran support not installing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1300.php">Brian W. Barrett: "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Reply:</strong> <a href="1300.php">Brian W. Barrett: "Re: [OMPI users] Fortran support not installing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is the out put for both g95 and gfortran
<br>
<p>&#239;&#191;&#188;
<br>
<span class="quotelev2">&gt;&gt; From the output you sent, you ran &quot;./configure FC=g95&quot;.  Configure  
</span><br>
<span class="quotelev2">&gt;&gt; did
</span><br>
<span class="quotelev1">&gt; not find a valid F77 compiler, and therefore skipped both the F77 and
</span><br>
<span class="quotelev1">&gt; F90 bindings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you try:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ./configure FC=g95 F77=g95
</span><br>
<span class="quotelev1">&gt; and/or
</span><br>
<span class="quotelev1">&gt;     ./configure FC=gfortran F77=gfortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You said you tried the formed but it died in configure -- can you send
</span><br>
<span class="quotelev1">&gt; the configure output and config.log from that run?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p>--------------------------------------------------------
<br>
Terry Reeves 2-1013 - reeves.2_at_[hidden]
<br>
Computing Services
<br>
Office of Information Technology
<br>
The Ohio State University
<br>
<p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1272/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1272/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1272/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1273.php">Jens Klostermann: "[OMPI users] spawn failed with errno=-7"</a>
<li><strong>Previous message:</strong> <a href="1271.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] .bashrc or .bash_profile"</a>
<li><strong>Maybe in reply to:</strong> <a href="1267.php">Terry Reeves: "[OMPI users] Fortran support not installing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1300.php">Brian W. Barrett: "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Reply:</strong> <a href="1300.php">Brian W. Barrett: "Re: [OMPI users] Fortran support not installing"</a>
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
