<?
$subject_val = "[OMPI users] How to use a wrapper for ssh?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 16:34:29 2011" -->
<!-- isoreceived="20110712203429" -->
<!-- sent="Tue, 12 Jul 2011 22:34:24 +0200" -->
<!-- isosent="20110712203424" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] How to use a wrapper for ssh?" -->
<!-- id="4E1CAFD0.8070003_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] How to use a wrapper for ssh?<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-12 16:34:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16901.php">Mohan, Ashwin: "[OMPI users] OpenMPI vs Intel Efficiency question"</a>
<li><strong>Previous message:</strong> <a href="16899.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16908.php">Ralph Castain: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
<li><strong>Reply:</strong> <a href="16908.php">Ralph Castain: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi OpenMPI folks,
<br>
<p>Using the version 1.4.3 of OpenMPI, I wanna to wrap the 'ssh' calls, 
<br>
which are made from the OpenMPIs 'mpiexec'. For this purpose, at least 
<br>
two ways seem to be possible for me:
<br>
<p>1. let the wrapper have the name 'ssh' and paste the path where it is 
<br>
into the PATH envvar *before* the path to real ssh
<br>
<p>Q1: Would this work?
<br>
<p>2. use MCA parameters described in
<br>
<a href="http://www.open-mpi.org/faq/?category=rsh#rsh-not-ssh">http://www.open-mpi.org/faq/?category=rsh#rsh-not-ssh</a>
<br>
to bend the call to my wrapper, e.g.
<br>
export OMPI_MCA_plm_rsh_agent=WrapPer
<br>
export OMPI_MCA_orte_rsh_agent=WrapPer
<br>
<p>the oddly thing is, that the OMPI_MCA_orte_rsh_agent envvar seem not to 
<br>
have any effect, whereas OMPI_MCA_plm_rsh_agent works.
<br>
Why I believe so?
<br>
<p>Because &quot;strace -f mpiexec ...&quot; says still trying for opening 'ssh' if 
<br>
OMPI_MCA_orte_rsh_agent is set, and correctly trying to open the 
<br>
'WrapPer' iff OMPI_MCA_plm_rsh_agent is set.
<br>
<p>Q2: Is the supposed non-functionality of OMPI_MCA_orte_rsh_agent a bug, 
<br>
or do I have just misunderstood something?
<br>
<p>Best wishes,
<br>
Paul
<br>
<p>P.S. reproducing: just set the envvars and do 'strace -f mpiexec ...'
<br>
<p>example:
<br>
<p>export OMPI_MCA_plm_rsh_agent=WrapPer
<br>
---&gt; look'n for 'WrapPer';
<br>
stat64(&quot;/opt/lsf/8.0/linux2.6-glibc2.3-x86_64/bin/WrapPer&quot;, 0xffff8324) 
<br>
= -1 ENOENT (No such file or directory)
<br>
<p>export OMPI_MCA_orte_rsh_agent=WrapPer
<br>
(do not forget to unset OMPI_MCA_plm_rsh_agent :o)
<br>
---&gt; still looking for 'ssh'
<br>
stat64(&quot;/opt/lsf/8.0/linux2.6-glibc2.3-x86_64/bin/ssh&quot;, 0xffff8324) = -1 
<br>
ENOENT (No such file or directory)
<br>
<p>===&gt; OMPI_MCA_orte_rsh_agent does not work?!
<br>
<p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16900/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16901.php">Mohan, Ashwin: "[OMPI users] OpenMPI vs Intel Efficiency question"</a>
<li><strong>Previous message:</strong> <a href="16899.php">Steve Kargl: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16908.php">Ralph Castain: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
<li><strong>Reply:</strong> <a href="16908.php">Ralph Castain: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
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
