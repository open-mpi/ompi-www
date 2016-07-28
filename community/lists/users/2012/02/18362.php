<?
$subject_val = "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 11:17:54 2012" -->
<!-- isoreceived="20120201161754" -->
<!-- sent="Wed, 01 Feb 2012 17:17:50 +0100" -->
<!-- isosent="20120201161750" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpirun: How to print STDOUT of just one process?" -->
<!-- id="4F2965AE.7010206_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAKpxCzL4perw6hz+zGGC52NaaTKx1g14R2kK9wo=aeHmLWbEbw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mpirun: How to print STDOUT of just one process?<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 11:17:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18363.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18361.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18357.php">Frank: "[OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18365.php">Frank: "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<li><strong>Reply:</strong> <a href="18365.php">Frank: "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try out the attached wrapper:
<br>
$ mpiexec -np 2 masterstdout &lt;prg&gt;
<br>
<p><span class="quotelev1">&gt; mpirun -n 2 &lt;prg&gt;
</span><br>
<p><span class="quotelev1">&gt; Is there a way to have mpirun just merger STDOUT of one process to its
</span><br>
<span class="quotelev1">&gt; STDOUT stream?
</span><br>
<p><p><p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<p>
#!/bin/sh
<br>
ARGS=$@
<br>
if [[ $OMPI_COMM_WORLD_RANK == 0 ]] 
<br>
then 
<br>
&nbsp;&nbsp;$ARGS
<br>
else
<br>
&nbsp;&nbsp;$ARGS 1&gt;/dev/null 2&gt;/dev/null
<br>
fi
<br>
<p><p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18362/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18363.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18361.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18357.php">Frank: "[OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18365.php">Frank: "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
<li><strong>Reply:</strong> <a href="18365.php">Frank: "Re: [OMPI users] Mpirun: How to print STDOUT of just one process?"</a>
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
