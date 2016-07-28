<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 27 18:59:24 2007" -->
<!-- isoreceived="20070927225924" -->
<!-- sent="Thu, 27 Sep 2007 18:59:25 -0400" -->
<!-- isosent="20070927225925" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bundling OpenMPI" -->
<!-- id="46FC35CD.8010807_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DC733DD7-DC93-4FED-962E-40FB831FF71A_at_gmail.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-27 18:59:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4083.php">Tim Prins: "Re: [OMPI users] SIGSEG in ompi_comm_start_processes"</a>
<li><strong>Previous message:</strong> <a href="4081.php">Tim Prins: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>In reply to:</strong> <a href="4072.php">Teng Lin: "[OMPI users] Bundling OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Teng,
<br>
<p>Teng Lin wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We would like to distribute OpenMPI along with our software  to  
</span><br>
<span class="quotelev1">&gt; customers, is there any legal issue we need to know about?
</span><br>
Not that I know of (disclaimer: IANAL). Open MPI is licensed under the 
<br>
new BSD license. Open MPI's license is here:
<br>
<a href="http://www.open-mpi.org/community/license.php">http://www.open-mpi.org/community/license.php</a>
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We can successfully build OpenMPI using
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/some_path;make;make install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, if we do
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cp -r /some_path /other_path
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and try to run
</span><br>
<span class="quotelev1">&gt; /other_path/bin/orterun,
</span><br>
<span class="quotelev1">&gt; below error message is thrown:
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;      orterun:usage
</span><br>
<span class="quotelev1">&gt; from the file:
</span><br>
<span class="quotelev1">&gt;      help-orterun.txt
</span><br>
<span class="quotelev1">&gt; But I couldn't find any file matching that name.  Sorry!
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------ 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Apparently, the path is hard-coded in the executable. Is there any  
</span><br>
<span class="quotelev1">&gt; way to fix it (such as using an environment variable etc)?
</span><br>
There is. See:
<br>
<a href="http://www.open-mpi.org/faq/?category=building#installdirs">http://www.open-mpi.org/faq/?category=building#installdirs</a>
<br>
<p>Hope this helps,
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4083.php">Tim Prins: "Re: [OMPI users] SIGSEG in ompi_comm_start_processes"</a>
<li><strong>Previous message:</strong> <a href="4081.php">Tim Prins: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>In reply to:</strong> <a href="4072.php">Teng Lin: "[OMPI users] Bundling OpenMPI"</a>
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
