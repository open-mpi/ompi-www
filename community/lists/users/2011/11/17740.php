<?
$subject_val = "[OMPI users] wiki and &quot;man mpirun&quot; odds, and a question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 10 06:02:53 2011" -->
<!-- isoreceived="20111110110253" -->
<!-- sent="Thu, 10 Nov 2011 12:02:48 +0100" -->
<!-- isosent="20111110110248" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] wiki and &amp;quot;man mpirun&amp;quot; odds, and a question" -->
<!-- id="4EBBAF58.5010506_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-10 06:02:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17741.php">Mudassar Majeed: "[OMPI users] Process Migration"</a>
<li><strong>Previous message:</strong> <a href="17739.php">Brock Palen: "[OMPI users] numactl with torque cpusets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17742.php">Ralph Castain: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<li><strong>Reply:</strong> <a href="17742.php">Ralph Castain: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<li><strong>Reply:</strong> <a href="17746.php">Jeff Squyres: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks,
<br>
I.  looked for ways to tell to &quot;mpiexec&quot; to forward some environment 
<br>
variables, I saw a mismatch:
<br>
<p>-------------------------------------------------------------------
<br>
<a href="http://www.open-mpi.org/faq/?category=running#mpirun-options">http://www.open-mpi.org/faq/?category=running#mpirun-options</a>
<br>
...
<br>
--x &lt;env-variable-names&gt;: A comma-delimited list of environment 
<br>
variables to export to the parallel application.
<br>
-------------------------------------------------------------------
<br>
(Open MPI/1.5.3)
<br>
$ man mpirun
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-x &lt;env&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export  the  specified environment variables to the 
<br>
remote nodes before executing the program.  Only one environment 
<br>
variable can
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^^^^^^^^^^^
<br>
be  specified per -x option.
<br>
-------------------------------------------------------------------
<br>
<p>So, either the info is outdated somewhre, or -x and --x have different 
<br>
meaning - but then there is a lack of info, too :o)
<br>
<p>Maybe you could update the Wiki and/or the man page?
<br>
<p>II. Now the question. Defaultly no non-OpenMPI environmet variables are 
<br>
exported to the parallel application, AFAIK.
<br>
<p>With -x option of mpiexec it is possible to export one (or a list of, 
<br>
see below) environment variable. But, it's a bit tedious to type a 
<br>
[long] list of variables.
<br>
<p>Is there someone envvar, by setting which to a list of names of other 
<br>
envvars the same effect could be achieved as by setting -x on command 
<br>
line of mpirun?
<br>
<p>Best wishes
<br>
Paul Kapinos
<br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17740/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17741.php">Mudassar Majeed: "[OMPI users] Process Migration"</a>
<li><strong>Previous message:</strong> <a href="17739.php">Brock Palen: "[OMPI users] numactl with torque cpusets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17742.php">Ralph Castain: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<li><strong>Reply:</strong> <a href="17742.php">Ralph Castain: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<li><strong>Reply:</strong> <a href="17746.php">Jeff Squyres: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
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
