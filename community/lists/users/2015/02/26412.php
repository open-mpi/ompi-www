<?
$subject_val = "Re: [OMPI users] mpirun fails across cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 27 12:07:56 2015" -->
<!-- isoreceived="20150227170756" -->
<!-- sent="Fri, 27 Feb 2015 12:07:44 -0500" -->
<!-- isosent="20150227170744" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun fails across cluster" -->
<!-- id="54F0A460.5020501_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAMvdAsLUusTdy_8mg8XjoBtTs0ieWXeBBkXW+n5WGjqAzWawwg_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-27 12:07:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26413.php">Syed Ahsan Ali: "Re: [OMPI users] mpirun fails across cluster"</a>
<li><strong>Previous message:</strong> <a href="26411.php">Syed Ahsan Ali: "[OMPI users] mpirun fails across cluster"</a>
<li><strong>In reply to:</strong> <a href="26411.php">Syed Ahsan Ali: "[OMPI users] mpirun fails across cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26413.php">Syed Ahsan Ali: "Re: [OMPI users] mpirun fails across cluster"</a>
<li><strong>Reply:</strong> <a href="26413.php">Syed Ahsan Ali: "Re: [OMPI users] mpirun fails across cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Syed
<br>
<p>This really sounds as a problem specific to Rocks Clusters,
<br>
not an issue with Open MPI.
<br>
A confusion related to mount points, and soft links used by Rocks.
<br>
<p>I haven't used Rocks Clusters in a while,
<br>
and I don't remember the details anymore, so please take my
<br>
suggestions with a grain of salt, and check them out
<br>
before committing to them
<br>
<p>Which --prefix did you use when you configured Open MPI?
<br>
My suggestion is that you don't use &quot;/export/apps&quot; as a prefix
<br>
(and this goes to any application that you install).
<br>
but instead use a /share/apps subdirectory, something like:
<br>
<p>--prefix=/share/apps/openmpi-1.8.4_gcc-4.9.2
<br>
<p>This is because /export/apps is just a mount point on the
<br>
frontend/head node, whereas /share/apps is a mount point
<br>
across all nodes in the cluster (and, IIRR, a soft link on the
<br>
head node).
<br>
<p>My recollection is that the Rocks documentation was obscure
<br>
about this, not making clear the difference between
<br>
/export/apps and /share/apps.
<br>
<p>Issuing the Rocks commands:
<br>
&quot;tentakel 'ls -d /export/apps'&quot;
<br>
&quot;tentakel 'ls -d /share/apps'&quot;
<br>
may show something useful.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 02/27/2015 11:47 AM, Syed Ahsan Ali wrote:
<br>
<span class="quotelev1">&gt; I am trying to run openmpi application on my cluster.  But the mpirun
</span><br>
<span class="quotelev1">&gt; fails, simple hostname command gives this error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [pmdtest_at_hpc bin]$ mpirun --host compute-0-0 hostname
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;      opal_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev1">&gt;      /export/apps/openmpi-1.8.4_gcc-4.9.2/share/openmpi/help-opal-runtime.txt:
</span><br>
<span class="quotelev1">&gt; No such file or directory.  Sorry!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;      orte_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev1">&gt;      /export/apps/openmpi-1.8.4_gcc-4.9.2/share/openmpi/help-orte-runtime:
</span><br>
<span class="quotelev1">&gt; No such file or directory.  Sorry!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-0-0.local:03410] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in
</span><br>
<span class="quotelev1">&gt; file orted/orted_main.c at line 369
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using Environment modules to load OpenMPI 1.8.4 and PATH and
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH points to same openmpi on nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [pmdtest_at_hpc bin]$ which mpirun
</span><br>
<span class="quotelev1">&gt; /share/apps/openmpi-1.8.4_gcc-4.9.2/bin/mpirun
</span><br>
<span class="quotelev1">&gt; [pmdtest_at_hpc bin]$ ssh compute-0-0
</span><br>
<span class="quotelev1">&gt; Last login: Sat Feb 28 02:15:50 2015 from hpc.local
</span><br>
<span class="quotelev1">&gt; Rocks Compute Node
</span><br>
<span class="quotelev1">&gt; Rocks 6.1.1 (Sand Boa)
</span><br>
<span class="quotelev1">&gt; Profile built 01:53 28-Feb-2015
</span><br>
<span class="quotelev1">&gt; Kickstarted 01:59 28-Feb-2015
</span><br>
<span class="quotelev1">&gt; [pmdtest_at_compute-0-0 ~]$ which mpirun
</span><br>
<span class="quotelev1">&gt; /share/apps/openmpi-1.8.4_gcc-4.9.2/bin/mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only this I notice important is that in the error it is referring to
</span><br>
<span class="quotelev1">&gt;      /export/apps/openmpi-1.8.4_gcc-4.9.2/share/openmpi/help-opal-runtime.txt:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While it should have shown
</span><br>
<span class="quotelev1">&gt; /share/apps/openmpi-1.8.4_gcc-4.9.2/share/openmpi/help-opal-runtime.txt:
</span><br>
<span class="quotelev1">&gt; which is the path compute nodes see.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please help!
</span><br>
<span class="quotelev1">&gt; Ahsan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26411.php">http://www.open-mpi.org/community/lists/users/2015/02/26411.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26413.php">Syed Ahsan Ali: "Re: [OMPI users] mpirun fails across cluster"</a>
<li><strong>Previous message:</strong> <a href="26411.php">Syed Ahsan Ali: "[OMPI users] mpirun fails across cluster"</a>
<li><strong>In reply to:</strong> <a href="26411.php">Syed Ahsan Ali: "[OMPI users] mpirun fails across cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26413.php">Syed Ahsan Ali: "Re: [OMPI users] mpirun fails across cluster"</a>
<li><strong>Reply:</strong> <a href="26413.php">Syed Ahsan Ali: "Re: [OMPI users] mpirun fails across cluster"</a>
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
