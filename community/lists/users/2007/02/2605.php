<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb  5 11:58:48 2007" -->
<!-- isoreceived="20070205165848" -->
<!-- sent="Mon, 5 Feb 2007 11:58:41 -0500" -->
<!-- isosent="20070205165841" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] -prefix not working" -->
<!-- id="EBE2F6E7-4FBC-49A1-A025-AB863A2A8520_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45C3C915.1000402_at_mscsoftware.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-05 11:58:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2606.php">Joe Griffin: "Re: [OMPI users] -prefix not working"</a>
<li><strong>Previous message:</strong> <a href="2604.php">Heywood, Todd: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>In reply to:</strong> <a href="2596.php">Joe Griffin: "[OMPI users] -prefix not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2606.php">Joe Griffin: "Re: [OMPI users] -prefix not working"</a>
<li><strong>Reply:</strong> <a href="2606.php">Joe Griffin: "Re: [OMPI users] -prefix not working"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3054.php">Joe Griffin: "Re: [OMPI users] -prefix not working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings Joe.
<br>
<p>What we did was to make 2 sets of environment variables that you can  
<br>
use to modify OMPI's internal path behavior:
<br>
<p>1. OPAL_DESTDIR: If you want to use staged builds (a la RPM builds),  
<br>
you can set the environment variable OPAL_DESTDIR.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure --prefix=/opt/ompi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make install DESTDIR=/tmp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# at this point, OMPI is installed into /tmp/opt/ompi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setenv OPAL_DESTDIR /tmp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# put /tmp/opt/ompi in your path, then run ompi_info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_info
<br>
<p>Hence, OPAL_DESTDIR simply prefixes every internal path with the  
<br>
destdir.
<br>
<p>2. OPAL_PREFIX: If you want to wholly override where the OMPI  
<br>
installation is, set OPAL_PREFIX to the new prefix value (quite  
<br>
similar to the LAMHOME environment variable, but slightly better).   
<br>
For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure --prefix=/opt/ompi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make install
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mv /opt/ompi /home/ompi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setenv OPAL_PREFIX /home/ompi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_info
<br>
<p>This will re-base all of OMPI's internal directories to key off the  
<br>
new prefix value.  Similarly, OPAL_* environment variables exist for  
<br>
all other GNU-standard directories (OPAL_BINDIR,  
<br>
OPAL_INCLUEDIR, ...etc.).  Note that the default values of these  
<br>
variables are their GNU counterparts, so OMPI_BINDIR defaults to $ 
<br>
{prefix}/bin -- which requires resolving ${prefix} first (i.e.,  
<br>
OPAL_PREFIX).  Hence, setting OPAL_PREFIX will effectively change all  
<br>
the others.  We anticipate that most people will likely only ever use  
<br>
OPAL_PREFIX.
<br>
<p>-----
<br>
<p>We've been calling this work &quot;the installdirs patch&quot; internally.  It  
<br>
got finalized on a private branch literally just before we closed the  
<br>
1.2 tree for release, so it's not going to make it into the final  
<br>
v1.2 -- it was just too late in the release process.  It's not even  
<br>
on the OMPI trunk yet; we wanted to get OMPI v1.2 out before putting  
<br>
this patch on the trunk (to keep the trunk and v1.2 &quot;somewhat  
<br>
similar&quot;).  We haven't yet discussed 1.2.1 as a group yet -- it's  
<br>
possible that the installdirs patch will make it into there (but I  
<br>
can't guarantee that).
<br>
<p>That being said, I will be releasing OMPI v1.2ofed as part of the  
<br>
OpenFabrics Enterprise Distribution (OFED -- the open source  
<br>
InfiniBand stack) that will be the final community OMPI v1.2 release  
<br>
plus the installdirs patch.  We need this installdirs stuff in the  
<br>
OFED installer for DESTDIR reasons.
<br>
<p>I'd be happy to share the installdirs patch with anyone who wants it;  
<br>
it just won't make it into OMPI v1.2.
<br>
<p><p><p>On Feb 2, 2007, at 6:28 PM, Joe Griffin wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can see that Patrick posted my same error on:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2006/12/1230.php">http://www.open-mpi.org/community/lists/devel/2006/12/1230.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can I please find out the status?   I have a simple test case which
</span><br>
<span class="quotelev1">&gt; demonstrates the --prefix is not working on mpirun.  I build into
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.1.3
</span><br>
<span class="quotelev1">&gt; and it works.  However, if I copy the files, remove the
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.1.3/lib
</span><br>
<span class="quotelev1">&gt; and try to point to my new directory of /tmp/openmpi-1.1.3, it fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; prompt &lt;154&gt; /usr/local/openmpi-1.1.3/bin/mpirun -n 1 --host em64t  
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev1">&gt; em64t
</span><br>
<span class="quotelev1">&gt; prompt &lt;155&gt; cp -r /usr/local/openmpi-1.1.3 /tmp
</span><br>
<span class="quotelev1">&gt; prompt &lt;156&gt; /tmp/openmpi-1.1.3/bin/mpirun -n 1 --host em64t hostname
</span><br>
<span class="quotelev1">&gt; em64t
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # As ROOT:
</span><br>
<span class="quotelev1">&gt; [root_at_em64t openmpi-1.1.3]# mv /usr/local/openmpi-1.1.3/lib
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.1.3/LLL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; prompt &lt;157&gt; /tmp/openmpi-1.1.3/bin/mpirun -n 1 --host em64t --prefix
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-1.1.3 hostname
</span><br>
<span class="quotelev1">&gt; [em64t:26023] [NO-NAME] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init_stage1.c at line 214
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   orte_sds_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -13 instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; [em64t:26023] [NO-NAME] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_system_init.c at line 42
</span><br>
<span class="quotelev1">&gt; [em64t:26023] [NO-NAME] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c at line 49
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Open RTE was unable to initialize properly.  The error occured while
</span><br>
<span class="quotelev1">&gt; attempting to orte_init().  Returned value -13 instead of  
</span><br>
<span class="quotelev1">&gt; ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The man page implies that --prefix would work.   I know my example is
</span><br>
<span class="quotelev1">&gt; silly.  The real case
</span><br>
<span class="quotelev1">&gt; involves going over a cluster, but the above is the simpliest case I
</span><br>
<span class="quotelev1">&gt; could create.
</span><br>
<span class="quotelev1">&gt;  From the man page:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    --prefix &lt;dir&gt;
</span><br>
<span class="quotelev1">&gt;                  Prefix directory that will  be  used  to  set  the
</span><br>
<span class="quotelev1">&gt; PATH  and
</span><br>
<span class="quotelev1">&gt;                  LD_LIBRARY_PATH  on  the remote node before invoking
</span><br>
<span class="quotelev1">&gt; Open MPI
</span><br>
<span class="quotelev1">&gt;                  or the target process.  See the &quot;Remote  Execution&quot;
</span><br>
<span class="quotelev1">&gt; section,
</span><br>
<span class="quotelev1">&gt;                  below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW - I am trying to migrate from LAM to OpenMPI.  The switch was
</span><br>
<span class="quotelev1">&gt; very painless.   Thanks for the good work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Joe
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2606.php">Joe Griffin: "Re: [OMPI users] -prefix not working"</a>
<li><strong>Previous message:</strong> <a href="2604.php">Heywood, Todd: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>In reply to:</strong> <a href="2596.php">Joe Griffin: "[OMPI users] -prefix not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2606.php">Joe Griffin: "Re: [OMPI users] -prefix not working"</a>
<li><strong>Reply:</strong> <a href="2606.php">Joe Griffin: "Re: [OMPI users] -prefix not working"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3054.php">Joe Griffin: "Re: [OMPI users] -prefix not working"</a>
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
