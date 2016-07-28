<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 27 13:40:18 2007" -->
<!-- isoreceived="20070927174018" -->
<!-- sent="Thu, 27 Sep 2007 19:40:10 +0200" -->
<!-- isosent="20070927174010" -->
<!-- name="Murat Knecht" -->
<!-- email="murat.knecht_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGSEG in ompi_comm_start_processes" -->
<!-- id="46FBEAFA.1050008_at_student.hpi.uni-potsdam.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46FBE6B3.5010502_at_student.hpi.uni-potsdam.de" -->
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
<strong>From:</strong> Murat Knecht (<em>murat.knecht_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-27 13:40:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4077.php">Tim Prins: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<li><strong>Previous message:</strong> <a href="4075.php">Murat Knecht: "[OMPI users] SIGSEG in ompi_comm_start_processes"</a>
<li><strong>In reply to:</strong> <a href="4075.php">Murat Knecht: "[OMPI users] SIGSEG in ompi_comm_start_processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4083.php">Tim Prins: "Re: [OMPI users] SIGSEG in ompi_comm_start_processes"</a>
<li><strong>Reply:</strong> <a href="4083.php">Tim Prins: "Re: [OMPI users] SIGSEG in ompi_comm_start_processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Copy-and-paste-error: The second part of the fix ought to be:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( !have_wdir ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(cwd);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>Murat
<br>
<p><p><p><p>Murat Knecht schrieb:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think, I found a bug and a fix for it.
</span><br>
<span class="quotelev1">&gt; Could someone verify the rationale behind this bug, as I have this
</span><br>
<span class="quotelev1">&gt; SIGSEG on only one of two machines, and I don't quite see why it doesn't
</span><br>
<span class="quotelev1">&gt; occur always. (Same testprogram, equally compiled 1.2.4 OpenMPI).
</span><br>
<span class="quotelev1">&gt; Though the fix does prevent the segmentation fault. :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where:
</span><br>
<span class="quotelev1">&gt; Bug:
</span><br>
<span class="quotelev1">&gt; free() crashes when trying to free stack memory
</span><br>
<span class="quotelev1">&gt; ompi/communicator/comm_dyn.c:630
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     OBJ_RELEASE(apps[i]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SIGSEG:
</span><br>
<span class="quotelev1">&gt; orte/mca/rmgr/rmgr_types.h:113
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         free (app_context-&gt;cwd);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; There are two ways that apps[i]-&gt;cwd is filled:
</span><br>
<span class="quotelev1">&gt; 1. dynamically allocated memory
</span><br>
<span class="quotelev1">&gt; 548     if ( !have_wdir ) {
</span><br>
<span class="quotelev1">&gt;             getcwd(cwd, OMPI_PATH_MAX);
</span><br>
<span class="quotelev1">&gt;             apps[i]-&gt;cwd = strdup(cwd);    // &lt;--
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. stack
</span><br>
<span class="quotelev1">&gt; 354    char cwd[OMPI_PATH_MAX];
</span><br>
<span class="quotelev1">&gt; // ...
</span><br>
<span class="quotelev1">&gt; 516         /* check for 'wdir' */
</span><br>
<span class="quotelev1">&gt;             ompi_info_get (array_of_info[i], &quot;wdir&quot;, valuelen, cwd, &amp;flag);
</span><br>
<span class="quotelev1">&gt;             if ( flag ) {
</span><br>
<span class="quotelev1">&gt;                 apps[i]-&gt;cwd = cwd;  // &lt;--
</span><br>
<span class="quotelev1">&gt;                 have_wdir = 1;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fix: Allocate cwd always manually and make sure, it is deleted afterwards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.
</span><br>
<span class="quotelev1">&gt; &lt;    char cwd[OMPI_PATH_MAX];
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;    char *cwd = (char*)malloc(OMPI_PATH_MAX);
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. And on cleanup (somewhere below line 624)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;        if ( !have_wdir ) {
</span><br>
<span class="quotelev2">&gt;&gt;            getcwd(cwd, OMPI_PATH_MAX);
</span><br>
<span class="quotelev2">&gt;&gt;            apps[i]-&gt;cwd = strdup(cwd);
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;     
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
<span class="quotelev1">&gt;   
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4076/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4077.php">Tim Prins: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<li><strong>Previous message:</strong> <a href="4075.php">Murat Knecht: "[OMPI users] SIGSEG in ompi_comm_start_processes"</a>
<li><strong>In reply to:</strong> <a href="4075.php">Murat Knecht: "[OMPI users] SIGSEG in ompi_comm_start_processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4083.php">Tim Prins: "Re: [OMPI users] SIGSEG in ompi_comm_start_processes"</a>
<li><strong>Reply:</strong> <a href="4083.php">Tim Prins: "Re: [OMPI users] SIGSEG in ompi_comm_start_processes"</a>
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
