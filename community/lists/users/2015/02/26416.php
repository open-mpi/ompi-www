<?
$subject_val = "Re: [OMPI users] mpirun fails across cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 27 12:44:07 2015" -->
<!-- isoreceived="20150227174407" -->
<!-- sent="Fri, 27 Feb 2015 22:44:07 +0500" -->
<!-- isosent="20150227174407" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun fails across cluster" -->
<!-- id="CAMvdAsKic9yqQ=g7znVnOz6RhhdsCPkhMBws0Vu9GmNSkb41QQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="54F0A695.7090007_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun fails across cluster<br>
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-27 12:44:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26417.php">Syed Ahsan Ali: "Re: [OMPI users] mpirun fails across cluster"</a>
<li><strong>Previous message:</strong> <a href="26415.php">Gus Correa: "Re: [OMPI users] mpirun fails across cluster"</a>
<li><strong>In reply to:</strong> <a href="26415.php">Gus Correa: "Re: [OMPI users] mpirun fails across cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26417.php">Syed Ahsan Ali: "Re: [OMPI users] mpirun fails across cluster"</a>
<li><strong>Reply:</strong> <a href="26417.php">Syed Ahsan Ali: "Re: [OMPI users] mpirun fails across cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Gus
<br>
<p>Thanks once again for suggestion. Yes I did that before installation
<br>
to new path. I am getting error now about some library
<br>
tstint2lm: error while loading shared libraries:
<br>
libmpi_usempif08.so.0: cannot open shared object file: No such file or
<br>
directory
<br>
<p>While library is present
<br>
[pmdtest_at_hpc bin]$ locate libmpi_usempif08.so.0
<br>
/state/partition1/apps/openmpi-1.8.4_gcc-4.9.2/lib/libmpi_usempif08.so.0
<br>
/state/partition1/apps/openmpi-1.8.4_gcc-4.9.2/lib/libmpi_usempif08.so.0.6.0
<br>
in path as well
<br>
<p>echo $LD_LIBRARY_PATH
<br>
/share/apps/openmpi-1.8.4_gcc-4.9.2/lib:/share/apps/libpng-1.6.16/lib:/share/apps/netcdf-fortran-4.4.1_gcc-4.9.2_wo_hdf5/lib:/share/apps/netcdf-4.3.2_gcc_wo_hdf5/lib:/share/apps/grib_api-1.11.0/lib:/share/apps/jasper-1.900.1/lib:/share/apps/zlib-1.2.8_gcc-4.9.2/lib:/share/apps/gcc-4.9.2/lib64:/share/apps/gcc-4.9.2/lib:/usr/lib64:/usr/share/Modules/lib:/opt/python/lib
<br>
[pmdtest_at_hpc bin]$
<br>
<p>Ahsan
<br>
<p>On Fri, Feb 27, 2015 at 10:17 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Syed Ahsan Ali
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To avoid any leftovers and further confusion,
</span><br>
<span class="quotelev1">&gt; I suggest that you delete completely the old installation directory.
</span><br>
<span class="quotelev1">&gt; Then start fresh from the configure step with the prefix pointing to
</span><br>
<span class="quotelev1">&gt; --prefix=/share/apps/openmpi-1.8.4_gcc-4.9.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 02/27/2015 12:11 PM, Syed Ahsan Ali wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gus
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for prompt response. Well judged, I compiled with /export/apps
</span><br>
<span class="quotelev2">&gt;&gt; prefix so that is most probably the reason. I'll check and update you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best wishes
</span><br>
<span class="quotelev2">&gt;&gt; Ahsan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Feb 27, 2015 at 10:07 PM, Gus Correa &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Syed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This really sounds as a problem specific to Rocks Clusters,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not an issue with Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A confusion related to mount points, and soft links used by Rocks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I haven't used Rocks Clusters in a while,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and I don't remember the details anymore, so please take my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suggestions with a grain of salt, and check them out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before committing to them
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Which --prefix did you use when you configured Open MPI?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My suggestion is that you don't use &quot;/export/apps&quot; as a prefix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (and this goes to any application that you install).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but instead use a /share/apps subdirectory, something like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --prefix=/share/apps/openmpi-1.8.4_gcc-4.9.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is because /export/apps is just a mount point on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; frontend/head node, whereas /share/apps is a mount point
</span><br>
<span class="quotelev3">&gt;&gt;&gt; across all nodes in the cluster (and, IIRR, a soft link on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; head node).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My recollection is that the Rocks documentation was obscure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; about this, not making clear the difference between
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export/apps and /share/apps.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Issuing the Rocks commands:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;tentakel 'ls -d /export/apps'&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;tentakel 'ls -d /share/apps'&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may show something useful.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 02/27/2015 11:47 AM, Syed Ahsan Ali wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am trying to run openmpi application on my cluster.  But the mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fails, simple hostname command gives this error
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pmdtest_at_hpc bin]$ mpirun --host compute-0-0 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       opal_init:startup:internal-failure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /export/apps/openmpi-1.8.4_gcc-4.9.2/share/openmpi/help-opal-runtime.txt:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No such file or directory.  Sorry!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       orte_init:startup:internal-failure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /export/apps/openmpi-1.8.4_gcc-4.9.2/share/openmpi/help-orte-runtime:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No such file or directory.  Sorry!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compute-0-0.local:03410] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; file orted/orted_main.c at line 369
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am using Environment modules to load OpenMPI 1.8.4 and PATH and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LD_LIBRARY_PATH points to same openmpi on nodes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pmdtest_at_hpc bin]$ which mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /share/apps/openmpi-1.8.4_gcc-4.9.2/bin/mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pmdtest_at_hpc bin]$ ssh compute-0-0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Last login: Sat Feb 28 02:15:50 2015 from hpc.local
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rocks Compute Node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rocks 6.1.1 (Sand Boa)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Profile built 01:53 28-Feb-2015
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kickstarted 01:59 28-Feb-2015
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pmdtest_at_compute-0-0 ~]$ which mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /share/apps/openmpi-1.8.4_gcc-4.9.2/bin/mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The only this I notice important is that in the error it is referring to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /export/apps/openmpi-1.8.4_gcc-4.9.2/share/openmpi/help-opal-runtime.txt:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; While it should have shown
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /share/apps/openmpi-1.8.4_gcc-4.9.2/share/openmpi/help-opal-runtime.txt:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which is the path compute nodes see.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please help!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ahsan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26411.php">http://www.open-mpi.org/community/lists/users/2015/02/26411.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26412.php">http://www.open-mpi.org/community/lists/users/2015/02/26412.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26415.php">http://www.open-mpi.org/community/lists/users/2015/02/26415.php</a>
</span><br>
<p><p><p><pre>
-- 
Syed Ahsan Ali Bokhari
Electronic Engineer (EE)
Research &amp; Development Division
Pakistan Meteorological Department H-8/4, Islamabad.
Phone # off  +92518358714
Cell # +923155145014
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26417.php">Syed Ahsan Ali: "Re: [OMPI users] mpirun fails across cluster"</a>
<li><strong>Previous message:</strong> <a href="26415.php">Gus Correa: "Re: [OMPI users] mpirun fails across cluster"</a>
<li><strong>In reply to:</strong> <a href="26415.php">Gus Correa: "Re: [OMPI users] mpirun fails across cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26417.php">Syed Ahsan Ali: "Re: [OMPI users] mpirun fails across cluster"</a>
<li><strong>Reply:</strong> <a href="26417.php">Syed Ahsan Ali: "Re: [OMPI users] mpirun fails across cluster"</a>
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
