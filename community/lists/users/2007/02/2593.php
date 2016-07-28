<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb  2 17:20:15 2007" -->
<!-- isoreceived="20070202222015" -->
<!-- sent="Fri, 02 Feb 2007 15:20:06 -0700" -->
<!-- isosent="20070202222006" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] large jobs hang on startup (deadlock?)" -->
<!-- id="C1E90726.17F9%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44233CA5B57295409DA4423AECEFFEE701E64DCB_at_mailbox01.cshl.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-02 17:20:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2594.php">Dennis McRitchie: "[OMPI users] Can't run simple job with openmpi using the Intel compiler"</a>
<li><strong>Previous message:</strong> <a href="2592.php">Ivan de Jesus Deras Tabora: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>In reply to:</strong> <a href="2588.php">Heywood, Todd: "[OMPI users] large jobs hang on startup (deadlock?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2594.php">Dennis McRitchie: "[OMPI users] Can't run simple job with openmpi using the Intel compiler"</a>
<li><strong>Reply:</strong> <a href="2594.php">Dennis McRitchie: "[OMPI users] Can't run simple job with openmpi using the Intel compiler"</a>
<li><strong>Reply:</strong> <a href="2604.php">Heywood, Todd: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Todd
<br>
<p>To help us provide advice, could you tell us what version of OpenMPI you are
<br>
using?
<br>
<p>Meantime, try adding &#179;-mca pls_rsh_num_concurrent 200&#178; to your mpirun
<br>
command line. You can up the number of concurrent daemons we launch to
<br>
anything your system will support &#173; basically, we limit the number only
<br>
because some systems have limits on the number of ssh calls we can have
<br>
active at any one time. Because we hold stdio open when running with
<br>
&#139;debug-daemons, the number of concurrent daemons must match or exceed the
<br>
number of nodes you are trying to launch on.
<br>
<p>I have a &#179;fix&#178; in the works that will help relieve some of that restriction,
<br>
but that won&#185;t come out until a later release.
<br>
<p>Hopefully, that will allow you to obtain more debug info about why/where
<br>
things are hanging.
<br>
<p>Ralph
<br>
<p><p>On 2/2/07 11:41 AM, &quot;Heywood, Todd&quot; &lt;heywood_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have OpenMPI running fine for a small/medium number of tasks (simple hello
</span><br>
<span class="quotelev1">&gt; or cpi program). But when I try 700 or 800 tasks, it hangs, apparently on
</span><br>
<span class="quotelev1">&gt; startup. I think this might be related to LDAP, since if I try to log into my
</span><br>
<span class="quotelev1">&gt; account while the job is hung, I get told my username doesn&#185;t exist. However,
</span><br>
<span class="quotelev1">&gt; I tried adding &#173;debug to the mpirun, and got the same sequence of output as
</span><br>
<span class="quotelev1">&gt; for successful smaller runs, until it hung again. So I added &#173;-debug-daemons
</span><br>
<span class="quotelev1">&gt; and got this (with an exit, i.e. no hanging):
</span><br>
<span class="quotelev1">&gt; &#138;
</span><br>
<span class="quotelev1">&gt; [blade1:31733] [0,0,0] wrote setup file
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The rsh launcher has been given a number of 128 concurrent daemons to
</span><br>
<span class="quotelev1">&gt; launch and is in a debug-daemons option. However, the total number of
</span><br>
<span class="quotelev1">&gt; daemons to launch (200) is greater than this value. This is a scenario that
</span><br>
<span class="quotelev1">&gt; will cause the system to deadlock.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; To avoid deadlock, either increase the number of concurrent daemons, or
</span><br>
<span class="quotelev1">&gt; remove the debug-daemons flag.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [blade1:31733] [0,0,0] ORTE_ERROR_LOG: Fatal in file
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/rmgr/urm/
</span><br>
<span class="quotelev1">&gt; rmgr_urm.c at line 455
</span><br>
<span class="quotelev1">&gt; [blade1:31733] mpirun: spawn failed with errno=-6
</span><br>
<span class="quotelev1">&gt; [blade1:31733] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Any ideas or suggestions appreciated.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Todd Heywood
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
<p><p><p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2593/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2594.php">Dennis McRitchie: "[OMPI users] Can't run simple job with openmpi using the Intel compiler"</a>
<li><strong>Previous message:</strong> <a href="2592.php">Ivan de Jesus Deras Tabora: "Re: [OMPI users] MPI_Type_create_subarray fails!"</a>
<li><strong>In reply to:</strong> <a href="2588.php">Heywood, Todd: "[OMPI users] large jobs hang on startup (deadlock?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2594.php">Dennis McRitchie: "[OMPI users] Can't run simple job with openmpi using the Intel compiler"</a>
<li><strong>Reply:</strong> <a href="2594.php">Dennis McRitchie: "[OMPI users] Can't run simple job with openmpi using the Intel compiler"</a>
<li><strong>Reply:</strong> <a href="2604.php">Heywood, Todd: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
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
