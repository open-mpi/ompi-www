<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb  5 12:43:01 2007" -->
<!-- isoreceived="20070205174301" -->
<!-- sent="Mon, 05 Feb 2007 09:41:35 -0800" -->
<!-- isosent="20070205174135" -->
<!-- name="Joe Griffin" -->
<!-- email="joe.griffin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] -prefix not working" -->
<!-- id="45C76C4F.8040008_at_mscsoftware.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0FEAE6EA-2FB8-4039-9D17-B9AE6112C1BC_at_cisco.com" -->
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
<strong>Date:</strong> 2007-02-05 12:41:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2610.php">Alex Tumanov: "[OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
<li><strong>Previous message:</strong> <a href="2608.php">Jeff Squyres: "Re: [OMPI users] -prefix not working"</a>
<li><strong>In reply to:</strong> <a href="2608.php">Jeff Squyres: "Re: [OMPI users] -prefix not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3054.php">Joe Griffin: "Re: [OMPI users] -prefix not working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;On Feb 5, 2007, at 12:19 PM, Joe Griffin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Thanks.   As always .. you are a perl.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;FWIW -- credit Brian on this one.  He did 98% of the work; I only did  
</span><br>
<span class="quotelev1">&gt;the final validation of it.  :-)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Thanks to Brian then also.
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I will try that with 1.2.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Are you saying you'd like me to ship you the patch?  Or you'll wait  
</span><br>
<span class="quotelev1">&gt;for v1.2ofed?  (one clarification: the v1.2ofed release will be a  
</span><br>
<span class="quotelev1">&gt;full OMPI SRPM -- not InfiniBand specific at all)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
I will wait.  I am just migrating from Lam to OpenMPI as per the
<br>
Lam notes. 
<br>
<p>Thanks again,
<br>
Joe
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Joe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Greetings Joe.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;What we did was to make 2 sets of environment variables that you can
</span><br>
<span class="quotelev3">&gt;&gt;&gt;use to modify OMPI's internal path behavior:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;1. OPAL_DESTDIR: If you want to use staged builds (a la RPM builds),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;you can set the environment variable OPAL_DESTDIR.  For example:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ./configure --prefix=/opt/ompi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    make install DESTDIR=/tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    # at this point, OMPI is installed into /tmp/opt/ompi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    setenv OPAL_DESTDIR /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    # put /tmp/opt/ompi in your path, then run ompi_info
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ompi_info
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Hence, OPAL_DESTDIR simply prefixes every internal path with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;destdir.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;2. OPAL_PREFIX: If you want to wholly override where the OMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;installation is, set OPAL_PREFIX to the new prefix value (quite
</span><br>
<span class="quotelev3">&gt;&gt;&gt;similar to the LAMHOME environment variable, but slightly better).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;For example:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ./configure --prefix=/opt/ompi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    make install
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mv /opt/ompi /home/ompi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    setenv OPAL_PREFIX /home/ompi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ompi_info
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;This will re-base all of OMPI's internal directories to key off the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;new prefix value.  Similarly, OPAL_* environment variables exist for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;all other GNU-standard directories (OPAL_BINDIR,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;OPAL_INCLUEDIR, ...etc.).  Note that the default values of these
</span><br>
<span class="quotelev3">&gt;&gt;&gt;variables are their GNU counterparts, so OMPI_BINDIR defaults to $
</span><br>
<span class="quotelev3">&gt;&gt;&gt;{prefix}/bin -- which requires resolving ${prefix} first (i.e.,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;OPAL_PREFIX).  Hence, setting OPAL_PREFIX will effectively change all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;the others.  We anticipate that most people will likely only ever use
</span><br>
<span class="quotelev3">&gt;&gt;&gt;OPAL_PREFIX.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;We've been calling this work &quot;the installdirs patch&quot; internally.  It
</span><br>
<span class="quotelev3">&gt;&gt;&gt;got finalized on a private branch literally just before we closed the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;1.2 tree for release, so it's not going to make it into the final
</span><br>
<span class="quotelev3">&gt;&gt;&gt;v1.2 -- it was just too late in the release process.  It's not even
</span><br>
<span class="quotelev3">&gt;&gt;&gt;on the OMPI trunk yet; we wanted to get OMPI v1.2 out before putting
</span><br>
<span class="quotelev3">&gt;&gt;&gt;this patch on the trunk (to keep the trunk and v1.2 &quot;somewhat
</span><br>
<span class="quotelev3">&gt;&gt;&gt;similar&quot;).  We haven't yet discussed 1.2.1 as a group yet -- it's
</span><br>
<span class="quotelev3">&gt;&gt;&gt;possible that the installdirs patch will make it into there (but I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;can't guarantee that).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;That being said, I will be releasing OMPI v1.2ofed as part of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;OpenFabrics Enterprise Distribution (OFED -- the open source
</span><br>
<span class="quotelev3">&gt;&gt;&gt;InfiniBand stack) that will be the final community OMPI v1.2 release
</span><br>
<span class="quotelev3">&gt;&gt;&gt;plus the installdirs patch.  We need this installdirs stuff in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;OFED installer for DESTDIR reasons.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;I'd be happy to share the installdirs patch with anyone who wants it;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;it just won't make it into OMPI v1.2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;On Feb 2, 2007, at 6:28 PM, Joe Griffin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I can see that Patrick posted my same error on:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/community/lists/devel/2006/12/1230.php">http://www.open-mpi.org/community/lists/devel/2006/12/1230.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Can I please find out the status?   I have a simple test case which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;demonstrates the --prefix is not working on mpirun.  I build into
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;/usr/local/openmpi-1.1.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;and it works.  However, if I copy the files, remove the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;/usr/local/openmpi-1.1.3/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;and try to point to my new directory of /tmp/openmpi-1.1.3, it  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;fails.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;prompt &lt;154&gt; /usr/local/openmpi-1.1.3/bin/mpirun -n 1 --host em64t
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;em64t
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;prompt &lt;155&gt; cp -r /usr/local/openmpi-1.1.3 /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;prompt &lt;156&gt; /tmp/openmpi-1.1.3/bin/mpirun -n 1 --host em64t  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;em64t
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;# As ROOT:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[root_at_em64t openmpi-1.1.3]# mv /usr/local/openmpi-1.1.3/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;/usr/local/openmpi-1.1.3/LLL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;prompt &lt;157&gt; /tmp/openmpi-1.1.3/bin/mpirun -n 1 --host em64t -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;prefix
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;/tmp/openmpi-1.1.3 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[em64t:26023] [NO-NAME] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;runtime/orte_init_stage1.c at line 214
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;It looks like orte_init failed for some reason; your parallel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;environment problems.  This failure appears to be an internal  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;failure;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Open MPI developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_sds_base_select failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --&gt; Returned value -13 instead of ORTE_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[em64t:26023] [NO-NAME] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;runtime/orte_system_init.c at line 42
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[em64t:26023] [NO-NAME] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;runtime/orte_init.c at line 49
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Open RTE was unable to initialize properly.  The error occured while
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;attempting to orte_init().  Returned value -13 instead of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;ORTE_SUCCESS.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;The man page implies that --prefix would work.   I know my  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;example is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;silly.  The real case
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;involves going over a cluster, but the above is the simpliest case I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;could create.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;From the man page:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --prefix &lt;dir&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                Prefix directory that will  be  used  to  set  the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;PATH  and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                LD_LIBRARY_PATH  on  the remote node before invoking
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Open MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                or the target process.  See the &quot;Remote  Execution&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;section,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                below.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;BTW - I am trying to migrate from LAM to OpenMPI.  The switch was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;very painless.   Thanks for the good work.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Joe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="2610.php">Alex Tumanov: "[OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
<li><strong>Previous message:</strong> <a href="2608.php">Jeff Squyres: "Re: [OMPI users] -prefix not working"</a>
<li><strong>In reply to:</strong> <a href="2608.php">Jeff Squyres: "Re: [OMPI users] -prefix not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3054.php">Joe Griffin: "Re: [OMPI users] -prefix not working"</a>
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
