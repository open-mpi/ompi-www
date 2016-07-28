<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 27 19:31:32 2007" -->
<!-- isoreceived="20070927233132" -->
<!-- sent="Thu, 27 Sep 2007 19:31:33 -0400" -->
<!-- isosent="20070927233133" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGSEG in ompi_comm_start_processes" -->
<!-- id="46FC3D55.6060002_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46FBEAFA.1050008_at_student.hpi.uni-potsdam.de" -->
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
<strong>Date:</strong> 2007-09-27 19:31:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4084.php">Mostyn Lewis: "[OMPI users] --enable-mca-no-build broken or bad docs?"</a>
<li><strong>Previous message:</strong> <a href="4082.php">Tim Prins: "Re: [OMPI users] Bundling OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="4076.php">Murat Knecht: "Re: [OMPI users] SIGSEG in ompi_comm_start_processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Murat,
<br>
<p>Thanks for the bug report. I have fixed (slightly differently than you 
<br>
suggested) this in the Open MPI trunk in r16265 and it should be 
<br>
available in the nightly trunk tarball tonight.
<br>
<p>I will ask to have this moved into the next release of Open MPI.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p>Murat Knecht wrote:
<br>
<span class="quotelev1">&gt; Copy-and-paste-error: The second part of the fix ought to be:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         if ( !have_wdir ) {
</span><br>
<span class="quotelev1">&gt;           free(cwd);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Murat
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Murat Knecht schrieb:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think, I found a bug and a fix for it.
</span><br>
<span class="quotelev2">&gt;&gt; Could someone verify the rationale behind this bug, as I have this
</span><br>
<span class="quotelev2">&gt;&gt; SIGSEG on only one of two machines, and I don't quite see why it doesn't
</span><br>
<span class="quotelev2">&gt;&gt; occur always. (Same testprogram, equally compiled 1.2.4 OpenMPI).
</span><br>
<span class="quotelev2">&gt;&gt; Though the fix does prevent the segmentation fault. :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Murat
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Where:
</span><br>
<span class="quotelev2">&gt;&gt; Bug:
</span><br>
<span class="quotelev2">&gt;&gt; free() crashes when trying to free stack memory
</span><br>
<span class="quotelev2">&gt;&gt; ompi/communicator/comm_dyn.c:630
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;     OBJ_RELEASE(apps[i]);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SIGSEG:
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/rmgr/rmgr_types.h:113
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         free (app_context-&gt;cwd);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; There are two ways that apps[i]-&gt;cwd is filled:
</span><br>
<span class="quotelev2">&gt;&gt; 1. dynamically allocated memory
</span><br>
<span class="quotelev2">&gt;&gt; 548     if ( !have_wdir ) {
</span><br>
<span class="quotelev2">&gt;&gt;             getcwd(cwd, OMPI_PATH_MAX);
</span><br>
<span class="quotelev2">&gt;&gt;             apps[i]-&gt;cwd = strdup(cwd);    // &lt;--
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. stack
</span><br>
<span class="quotelev2">&gt;&gt; 354    char cwd[OMPI_PATH_MAX];
</span><br>
<span class="quotelev2">&gt;&gt; // ...
</span><br>
<span class="quotelev2">&gt;&gt; 516         /* check for 'wdir' */
</span><br>
<span class="quotelev2">&gt;&gt;             ompi_info_get (array_of_info[i], &quot;wdir&quot;, valuelen, cwd, &amp;flag);
</span><br>
<span class="quotelev2">&gt;&gt;             if ( flag ) {
</span><br>
<span class="quotelev2">&gt;&gt;                 apps[i]-&gt;cwd = cwd;  // &lt;--
</span><br>
<span class="quotelev2">&gt;&gt;                 have_wdir = 1;
</span><br>
<span class="quotelev2">&gt;&gt;             }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Fix: Allocate cwd always manually and make sure, it is deleted afterwards.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1.
</span><br>
<span class="quotelev2">&gt;&gt; &lt;    char cwd[OMPI_PATH_MAX];
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    char *cwd = (char*)malloc(OMPI_PATH_MAX);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. And on cleanup (somewhere below line 624)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        if ( !have_wdir ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            getcwd(cwd, OMPI_PATH_MAX);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            apps[i]-&gt;cwd = strdup(cwd);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4084.php">Mostyn Lewis: "[OMPI users] --enable-mca-no-build broken or bad docs?"</a>
<li><strong>Previous message:</strong> <a href="4082.php">Tim Prins: "Re: [OMPI users] Bundling OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="4076.php">Murat Knecht: "Re: [OMPI users] SIGSEG in ompi_comm_start_processes"</a>
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
