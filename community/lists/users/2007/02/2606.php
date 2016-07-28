<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb  5 12:20:36 2007" -->
<!-- isoreceived="20070205172036" -->
<!-- sent="Mon, 05 Feb 2007 09:19:03 -0800" -->
<!-- isosent="20070205171903" -->
<!-- name="Joe Griffin" -->
<!-- email="joe.griffin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] -prefix not working" -->
<!-- id="45C76707.6080504_at_mscsoftware.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EBE2F6E7-4FBC-49A1-A025-AB863A2A8520_at_cisco.com" -->
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
<strong>From:</strong> Joe Griffin (<em>joe.griffin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-05 12:19:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2607.php">Bo Peng: "Re: [OMPI users] Choices on how to implement a python module in MPI."</a>
<li><strong>Previous message:</strong> <a href="2605.php">Jeff Squyres: "Re: [OMPI users] -prefix not working"</a>
<li><strong>In reply to:</strong> <a href="2605.php">Jeff Squyres: "Re: [OMPI users] -prefix not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2608.php">Jeff Squyres: "Re: [OMPI users] -prefix not working"</a>
<li><strong>Reply:</strong> <a href="2608.php">Jeff Squyres: "Re: [OMPI users] -prefix not working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Thanks.   As always .. you are a perl.
<br>
I will try that with 1.2.
<br>
<p>Joe
<br>
<p>Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;Greetings Joe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;What we did was to make 2 sets of environment variables that you can  
</span><br>
<span class="quotelev1">&gt;use to modify OMPI's internal path behavior:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;1. OPAL_DESTDIR: If you want to use staged builds (a la RPM builds),  
</span><br>
<span class="quotelev1">&gt;you can set the environment variable OPAL_DESTDIR.  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ./configure --prefix=/opt/ompi
</span><br>
<span class="quotelev1">&gt;     make install DESTDIR=/tmp
</span><br>
<span class="quotelev1">&gt;     # at this point, OMPI is installed into /tmp/opt/ompi
</span><br>
<span class="quotelev1">&gt;     setenv OPAL_DESTDIR /tmp
</span><br>
<span class="quotelev1">&gt;     # put /tmp/opt/ompi in your path, then run ompi_info
</span><br>
<span class="quotelev1">&gt;     ompi_info
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hence, OPAL_DESTDIR simply prefixes every internal path with the  
</span><br>
<span class="quotelev1">&gt;destdir.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2. OPAL_PREFIX: If you want to wholly override where the OMPI  
</span><br>
<span class="quotelev1">&gt;installation is, set OPAL_PREFIX to the new prefix value (quite  
</span><br>
<span class="quotelev1">&gt;similar to the LAMHOME environment variable, but slightly better).   
</span><br>
<span class="quotelev1">&gt;For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ./configure --prefix=/opt/ompi
</span><br>
<span class="quotelev1">&gt;     make install
</span><br>
<span class="quotelev1">&gt;     mv /opt/ompi /home/ompi
</span><br>
<span class="quotelev1">&gt;     setenv OPAL_PREFIX /home/ompi
</span><br>
<span class="quotelev1">&gt;     ompi_info
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This will re-base all of OMPI's internal directories to key off the  
</span><br>
<span class="quotelev1">&gt;new prefix value.  Similarly, OPAL_* environment variables exist for  
</span><br>
<span class="quotelev1">&gt;all other GNU-standard directories (OPAL_BINDIR,  
</span><br>
<span class="quotelev1">&gt;OPAL_INCLUEDIR, ...etc.).  Note that the default values of these  
</span><br>
<span class="quotelev1">&gt;variables are their GNU counterparts, so OMPI_BINDIR defaults to $ 
</span><br>
<span class="quotelev1">&gt;{prefix}/bin -- which requires resolving ${prefix} first (i.e.,  
</span><br>
<span class="quotelev1">&gt;OPAL_PREFIX).  Hence, setting OPAL_PREFIX will effectively change all  
</span><br>
<span class="quotelev1">&gt;the others.  We anticipate that most people will likely only ever use  
</span><br>
<span class="quotelev1">&gt;OPAL_PREFIX.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We've been calling this work &quot;the installdirs patch&quot; internally.  It  
</span><br>
<span class="quotelev1">&gt;got finalized on a private branch literally just before we closed the  
</span><br>
<span class="quotelev1">&gt;1.2 tree for release, so it's not going to make it into the final  
</span><br>
<span class="quotelev1">&gt;v1.2 -- it was just too late in the release process.  It's not even  
</span><br>
<span class="quotelev1">&gt;on the OMPI trunk yet; we wanted to get OMPI v1.2 out before putting  
</span><br>
<span class="quotelev1">&gt;this patch on the trunk (to keep the trunk and v1.2 &quot;somewhat  
</span><br>
<span class="quotelev1">&gt;similar&quot;).  We haven't yet discussed 1.2.1 as a group yet -- it's  
</span><br>
<span class="quotelev1">&gt;possible that the installdirs patch will make it into there (but I  
</span><br>
<span class="quotelev1">&gt;can't guarantee that).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;That being said, I will be releasing OMPI v1.2ofed as part of the  
</span><br>
<span class="quotelev1">&gt;OpenFabrics Enterprise Distribution (OFED -- the open source  
</span><br>
<span class="quotelev1">&gt;InfiniBand stack) that will be the final community OMPI v1.2 release  
</span><br>
<span class="quotelev1">&gt;plus the installdirs patch.  We need this installdirs stuff in the  
</span><br>
<span class="quotelev1">&gt;OFED installer for DESTDIR reasons.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'd be happy to share the installdirs patch with anyone who wants it;  
</span><br>
<span class="quotelev1">&gt;it just won't make it into OMPI v1.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Feb 2, 2007, at 6:28 PM, Joe Griffin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I can see that Patrick posted my same error on:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/community/lists/devel/2006/12/1230.php">http://www.open-mpi.org/community/lists/devel/2006/12/1230.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Can I please find out the status?   I have a simple test case which
</span><br>
<span class="quotelev2">&gt;&gt;demonstrates the --prefix is not working on mpirun.  I build into
</span><br>
<span class="quotelev2">&gt;&gt;/usr/local/openmpi-1.1.3
</span><br>
<span class="quotelev2">&gt;&gt;and it works.  However, if I copy the files, remove the
</span><br>
<span class="quotelev2">&gt;&gt;/usr/local/openmpi-1.1.3/lib
</span><br>
<span class="quotelev2">&gt;&gt;and try to point to my new directory of /tmp/openmpi-1.1.3, it fails.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;prompt &lt;154&gt; /usr/local/openmpi-1.1.3/bin/mpirun -n 1 --host em64t  
</span><br>
<span class="quotelev2">&gt;&gt;hostname
</span><br>
<span class="quotelev2">&gt;&gt;em64t
</span><br>
<span class="quotelev2">&gt;&gt;prompt &lt;155&gt; cp -r /usr/local/openmpi-1.1.3 /tmp
</span><br>
<span class="quotelev2">&gt;&gt;prompt &lt;156&gt; /tmp/openmpi-1.1.3/bin/mpirun -n 1 --host em64t hostname
</span><br>
<span class="quotelev2">&gt;&gt;em64t
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;# As ROOT:
</span><br>
<span class="quotelev2">&gt;&gt;[root_at_em64t openmpi-1.1.3]# mv /usr/local/openmpi-1.1.3/lib
</span><br>
<span class="quotelev2">&gt;&gt;/usr/local/openmpi-1.1.3/LLL
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;prompt &lt;157&gt; /tmp/openmpi-1.1.3/bin/mpirun -n 1 --host em64t --prefix
</span><br>
<span class="quotelev2">&gt;&gt;/tmp/openmpi-1.1.3 hostname
</span><br>
<span class="quotelev2">&gt;&gt;[em64t:26023] [NO-NAME] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt;runtime/orte_init_stage1.c at line 214
</span><br>
<span class="quotelev2">&gt;&gt;---------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;----
</span><br>
<span class="quotelev2">&gt;&gt;It looks like orte_init failed for some reason; your parallel  
</span><br>
<span class="quotelev2">&gt;&gt;process is
</span><br>
<span class="quotelev2">&gt;&gt;likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt;fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt;environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt;here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt;Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  orte_sds_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;  --&gt; Returned value -13 instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;---------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;----
</span><br>
<span class="quotelev2">&gt;&gt;[em64t:26023] [NO-NAME] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt;runtime/orte_system_init.c at line 42
</span><br>
<span class="quotelev2">&gt;&gt;[em64t:26023] [NO-NAME] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt;runtime/orte_init.c at line 49
</span><br>
<span class="quotelev2">&gt;&gt;---------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;----
</span><br>
<span class="quotelev2">&gt;&gt;Open RTE was unable to initialize properly.  The error occured while
</span><br>
<span class="quotelev2">&gt;&gt;attempting to orte_init().  Returned value -13 instead of  
</span><br>
<span class="quotelev2">&gt;&gt;ORTE_SUCCESS.
</span><br>
<span class="quotelev2">&gt;&gt;---------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;The man page implies that --prefix would work.   I know my example is
</span><br>
<span class="quotelev2">&gt;&gt;silly.  The real case
</span><br>
<span class="quotelev2">&gt;&gt;involves going over a cluster, but the above is the simpliest case I
</span><br>
<span class="quotelev2">&gt;&gt;could create.
</span><br>
<span class="quotelev2">&gt;&gt; From the man page:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   --prefix &lt;dir&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Prefix directory that will  be  used  to  set  the
</span><br>
<span class="quotelev2">&gt;&gt;PATH  and
</span><br>
<span class="quotelev2">&gt;&gt;                 LD_LIBRARY_PATH  on  the remote node before invoking
</span><br>
<span class="quotelev2">&gt;&gt;Open MPI
</span><br>
<span class="quotelev2">&gt;&gt;                 or the target process.  See the &quot;Remote  Execution&quot;
</span><br>
<span class="quotelev2">&gt;&gt;section,
</span><br>
<span class="quotelev2">&gt;&gt;                 below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;BTW - I am trying to migrate from LAM to OpenMPI.  The switch was
</span><br>
<span class="quotelev2">&gt;&gt;very painless.   Thanks for the good work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Regards,
</span><br>
<span class="quotelev2">&gt;&gt;Joe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2607.php">Bo Peng: "Re: [OMPI users] Choices on how to implement a python module in MPI."</a>
<li><strong>Previous message:</strong> <a href="2605.php">Jeff Squyres: "Re: [OMPI users] -prefix not working"</a>
<li><strong>In reply to:</strong> <a href="2605.php">Jeff Squyres: "Re: [OMPI users] -prefix not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2608.php">Jeff Squyres: "Re: [OMPI users] -prefix not working"</a>
<li><strong>Reply:</strong> <a href="2608.php">Jeff Squyres: "Re: [OMPI users] -prefix not working"</a>
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
