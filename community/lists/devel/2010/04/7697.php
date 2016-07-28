<?
$subject_val = "Re: [OMPI devel] inquiry about mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 06:12:18 2010" -->
<!-- isoreceived="20100406101218" -->
<!-- sent="Tue, 06 Apr 2010 06:10:31 -0400" -->
<!-- isosent="20100406101031" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] inquiry about mpirun" -->
<!-- id="4BBB0897.50105_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Prayer.1.3.2.1004061027350.29691_at_hermes-2.csi.cam.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI devel] inquiry about mpirun<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 06:10:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7698.php">Oliver Geisler: "[OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7696.php">N.M. Maclaren: "Re: [OMPI devel] inquiry about mpirun"</a>
<li><strong>In reply to:</strong> <a href="7696.php">N.M. Maclaren: "Re: [OMPI devel] inquiry about mpirun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
N.M. Maclaren wrote:
<br>
<span class="quotelev1">&gt; On Apr 6 2010, luyang dong wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regardless of  any mpi implementation , there is always a command 
</span><br>
<span class="quotelev2">&gt;&gt; named mpirun. And correspondingly there is a source file called 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun.c.(at least in lam/mpi),but i can not find this file in 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi. can you tell me how to  produce this command in openmpi. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Er, no.  There are some that I have used that do not have such a
</span><br>
<span class="quotelev1">&gt; command at all, and some where it is a script in some shell language,
</span><br>
<span class="quotelev1">&gt; Python or Perl.  I believe that OpenMPI usually makes it a symbolic link
</span><br>
<span class="quotelev1">&gt; to some other command (orterun or mpiexec), and so do some others.
</span><br>
<span class="quotelev1">&gt;
</span><br>
I believe mpiexec is actually the command specified in the MPI spec 
<br>
which can be a link.  However, the command, in OMPI,  that ends up doing 
<br>
the real business orterun and its base source is 
<br>
orte/tools/orterun/orterun.c.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; It's trivial to write a simple wrapper for mpiexec for your own use and
</span><br>
<span class="quotelev1">&gt; call it mpirun.  Or just create a symbolic link.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Someone else has indicated that OpenMPI intends to set up such a command,
</span><br>
<span class="quotelev1">&gt; but I am not commenting on that aspect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nick Maclaren.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.650.633.7054
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7697/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-7697/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7698.php">Oliver Geisler: "[OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="7696.php">N.M. Maclaren: "Re: [OMPI devel] inquiry about mpirun"</a>
<li><strong>In reply to:</strong> <a href="7696.php">N.M. Maclaren: "Re: [OMPI devel] inquiry about mpirun"</a>
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
