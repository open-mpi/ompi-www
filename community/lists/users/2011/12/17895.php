<?
$subject_val = "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  6 15:29:00 2011" -->
<!-- isoreceived="20111206202900" -->
<!-- sent="Tue, 06 Dec 2011 21:28:56 +0100" -->
<!-- isosent="20111206202856" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wiki and &amp;quot;man mpirun&amp;quot; odds, and a question" -->
<!-- id="4EDE7B08.2060706_at_rz.rwth-aachen.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="6FA78F50-6300-4DEB-925D-A59E8A515CBF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-06 15:28:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17896.php">Paul Kapinos: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<li><strong>Previous message:</strong> <a href="17894.php">Paul Kapinos: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17746.php">Jeff Squyres: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17897.php">Ralph Castain: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<li><strong>Reply:</strong> <a href="17897.php">Ralph Castain: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p><span class="quotelev1">&gt; I don't see what you're referring to.  I see:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; &#149; -x &lt;env-variable-name&gt;: The name of an environment variable to export to the parallel application. The -x option can be specified multiple times to export multiple environment variables to the parallel application.
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (ok, I might have just changed it :-) )
</span><br>
<p>nice joke! :o)
<br>
<p><span class="quotelev1"> &gt; Queuing systems can forward the submitters environment if desired.
</span><br>
<span class="quotelev1"> &gt; For example, in SGE, the -V switch forwards all the environment
</span><br>
<span class="quotelev1"> &gt; variables to the job's environment, so if there's one you can use
</span><br>
<span class="quotelev1"> &gt; to launch your job, you might want to check it's documentation.
</span><br>
<p>This is known and not an option for us. There are too much variables in 
<br>
the interactive environment which should not be forwarded...
<br>
<p>What I asked for is something which could replace
<br>
<p>mpiexec -x FOO -x BAR -x FOBA -x BAFO -x RR -x ZZ ..
<br>
<p>(which is quite tedious to type and error-prone for the users) by 
<br>
setting some dreamlike value, e.g.
<br>
<p>export OMPI_PROVIDE_THIS_VARIABLES=&quot;FOO BAR FOBA BAFO RR ZZ&quot;
<br>
<p>At least some envvar, whose content would be simply added to the comand 
<br>
line, could help:
<br>
export OMPI_ADD_2_COMMLINE=&quot;-x FOO -x BAR -x FOBA -x BAFO -x RR -x ZZ&quot;
<br>
<p>Well, this are my user's dreams; but maybe this give an inspiration for 
<br>
Open MPI programmers. As said, the situation when a [long] list of 
<br>
envvars is to be provided is quite common, and typing everything on the 
<br>
command line is tedious and error-prone.
<br>
<p>Best wishes [and sorry for the noise],
<br>
<p>Paul Kapinos
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
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17895/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17896.php">Paul Kapinos: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<li><strong>Previous message:</strong> <a href="17894.php">Paul Kapinos: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17746.php">Jeff Squyres: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17897.php">Ralph Castain: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<li><strong>Reply:</strong> <a href="17897.php">Ralph Castain: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
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
