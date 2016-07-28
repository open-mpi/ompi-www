<?
$subject_val = "[OMPI users] building openmpi 1.8.1 with intel 14.0.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 15:36:10 2014" -->
<!-- isoreceived="20140821193610" -->
<!-- sent="Thu, 21 Aug 2014 19:35:37 +0000" -->
<!-- isosent="20140821193537" -->
<!-- name="Bosler, Peter Andrew" -->
<!-- email="pabosle_at_[hidden]" -->
<!-- subject="[OMPI users] building openmpi 1.8.1 with intel 14.0.1" -->
<!-- id="D01BA627.268%pabosle_at_sandia.gov" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] building openmpi 1.8.1 with intel 14.0.1<br>
<strong>From:</strong> Bosler, Peter Andrew (<em>pabosle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-21 15:35:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25123.php">Gus Correa: "Re: [OMPI users] building openmpi 1.8.1 with intel 14.0.1"</a>
<li><strong>Previous message:</strong> <a href="25121.php">Mike Dubman: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25123.php">Gus Correa: "Re: [OMPI users] building openmpi 1.8.1 with intel 14.0.1"</a>
<li><strong>Reply:</strong> <a href="25123.php">Gus Correa: "Re: [OMPI users] building openmpi 1.8.1 with intel 14.0.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good afternoon,
<br>
<p>I'm having trouble configuring OpenMPI for use with the Intel compilers.  I run the command &quot;./configure -prefix=/opt/openmpi/intel CC=icc CXX=icpc FC=ifort 2&gt;&amp;1 | tee ~/openmpi-config.out&quot; and I notice three problems:
<br>
<p>&nbsp;&nbsp;1.  I get two instances of &quot;Report this to <a href="http://www.open-mpi.org/community/help">http://www.open-mpi.org/community/help</a>&quot; with regard to netinet/in.h and netinit/tcp.h in the output (attached)
<br>
&nbsp;&nbsp;2.  I receive a note about Vampire Trace being broken and finally a failed configure warning
<br>
&nbsp;&nbsp;3.  Configure ultimately fails because it failed to build GNU libltdl.
<br>
<p>I'm running Mac OS X 10.9.4 on a 3.5 Ghz 6-core Intel Xeon E5 with Intel compilers version 14.0.1.  The OpenMPI version I'm trying to build is 1.8.1.
<br>
<p>My environment is set with LD_LIBRARY_PATH=/opt/intel/lib/intel64
<br>
<p>As an aside, if there are any configuration options for OpenMPI that will take special advantage of the Xeon processor, I would love to know more about them.
<br>
<p>Thank you very much for your time.
<br>
<p>Pete Bosler
<br>
<p><p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25122/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25122/ompi-config-output.tar.bz2">ompi-config-output.tar.bz2</a>
</ul>
<!-- attachment="ompi-config-output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25123.php">Gus Correa: "Re: [OMPI users] building openmpi 1.8.1 with intel 14.0.1"</a>
<li><strong>Previous message:</strong> <a href="25121.php">Mike Dubman: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25123.php">Gus Correa: "Re: [OMPI users] building openmpi 1.8.1 with intel 14.0.1"</a>
<li><strong>Reply:</strong> <a href="25123.php">Gus Correa: "Re: [OMPI users] building openmpi 1.8.1 with intel 14.0.1"</a>
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
