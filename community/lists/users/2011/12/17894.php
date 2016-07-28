<?
$subject_val = "Re: [OMPI users] How are the Open MPI processes spawned?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  6 15:28:55 2011" -->
<!-- isoreceived="20111206202855" -->
<!-- sent="Tue, 06 Dec 2011 21:28:50 +0100" -->
<!-- isosent="20111206202850" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How are the Open MPI processes spawned?" -->
<!-- id="4EDE7B02.3090305_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="95DE6BE9-DD52-4548-9483-B3C171F6D9C6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How are the Open MPI processes spawned?<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-06 15:28:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17895.php">Paul Kapinos: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<li><strong>Previous message:</strong> <a href="17893.php">Jeff Squyres: "Re: [OMPI users] OSU_latency_mt is failing"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17851.php">Jeff Squyres: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17898.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Reply:</strong> <a href="17898.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff, Ralph, all!
<br>
<p><span class="quotelev3">&gt;&gt;&gt; Meaning that per my output from above, what Paul was trying should have worked, no?  I.e., setenv'ing OMPI_&lt;whatever&gt;, and those env vars should magically show up in the launched process.
</span><br>
<span class="quotelev2">&gt;&gt; In the -launched process- yes. However, his problem was that they do not show up for the -orteds-, and thus the orteds don't wireup correctly.
</span><br>
<p>Sorry for latency, too many issues on too many area needing improvement :-/
<br>
Well, just to clarify the long story about what I have seen:
<br>
<p>1. got a strange start-up problem (based on bogus configuration of eth0 
<br>
+  known (for you, experts :o) bug in /1.5.x
<br>
<p>2. got a workaround for (1.) by setting  '-mca oob_tcp_if_include ib0 
<br>
-mca btl_tcp_if_include ib0' on the command line of mpiexec =&gt; WORKS! 
<br>
Many thanks guys!
<br>
<p>3. remembered that any MCA Parameters can also be defined over 
<br>
OMP_MCA_... envvars, tried out to set =&gt; works NOT, the hang-ups were 
<br>
again here. Checking how the MCA parameters are set by ompi_info - all 
<br>
clear, but doesn't work. My blind guess was, mpiexec does not understood 
<br>
there envvars in this case.
<br>
See also <a href="http://www.open-mpi.org/community/lists/users/2011/11/17823.php">http://www.open-mpi.org/community/lists/users/2011/11/17823.php</a>
<br>
<p>Thus this issue is not about forwarding some or any OMPI_* envvars to 
<br>
the _processes_, but on someone step _before_ (the processes were not 
<br>
started correctly at all in my problem case), as Ralph wrote.
<br>
<p>The difference in behaviour if setting parameters on command line or 
<br>
over OMPI_*envvars matters!
<br>
<p><p>Ralph Castain wrote:
<br>
<span class="quotelev2"> &gt;&gt; Did you filed it, or someone else, or should I do it in some way?
</span><br>
<span class="quotelev1"> &gt; I'll take care of it, and copy you on the ticket so you can see
</span><br>
<span class="quotelev1"> &gt; what happens. I'll also do the same for the connection bug
</span><br>
<span class="quotelev1"> &gt; - sorry for the problem :-(
</span><br>
<p>Ralph, many thanks for this!
<br>
<p>Best wishes and a nice evening/day/whatever time you have!
<br>
<p>Paul Kapinos
<br>
<p><p><p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17894/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17895.php">Paul Kapinos: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<li><strong>Previous message:</strong> <a href="17893.php">Jeff Squyres: "Re: [OMPI users] OSU_latency_mt is failing"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17851.php">Jeff Squyres: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17898.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Reply:</strong> <a href="17898.php">Ralph Castain: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
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
