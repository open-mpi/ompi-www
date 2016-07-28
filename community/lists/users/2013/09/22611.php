<?
$subject_val = "Re: [OMPI users] Changing directory from /tmp";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  4 19:39:05 2013" -->
<!-- isoreceived="20130904233905" -->
<!-- sent="Wed, 04 Sep 2013 16:39:21 -0700" -->
<!-- isosent="20130904233921" -->
<!-- name="Lee-Ping Wang" -->
<!-- email="leeping_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Changing directory from /tmp" -->
<!-- id="5227C4A9.5000901_at_stanford.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="22AB96EE-26BC-471C-BFB6-B878EF81346E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Changing directory from /tmp<br>
<strong>From:</strong> Lee-Ping Wang (<em>leeping_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-04 19:39:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22612.php">Huangwei: "[OMPI users] mpi_bcast"</a>
<li><strong>Previous message:</strong> <a href="22610.php">John Hearns: "Re: [OMPI users] Changing directory from /tmp"</a>
<li><strong>In reply to:</strong> <a href="22609.php">Ralph Castain: "Re: [OMPI users] Changing directory from /tmp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22607.php">Gus Correa: "Re: [OMPI users] Changing directory from /tmp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>Thanks for the help!  As Gus pointed out, I could also have found the 
<br>
answer from the FAQ but it might have taken me longer to find.
<br>
<p>- Lee-Ping
<br>
<p>On 09/04/2013 10:29 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Yep - sure would. Lots of ways to specify it :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 4, 2013, at 10:24 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 04.09.2013 um 19:21 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you can specify it with OMPI_TMPDIR in your environment, or &quot;-mca orte_tmpdir_base &lt;foo&gt;&quot; on your cmd line
</span><br>
<span class="quotelev2">&gt;&gt; Wouldn't --tmpdir=... do the same with `mpirun` for way the latter you mentioned?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 4, 2013, at 10:13 AM, Lee-Ping Wang &lt;leeping_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi there,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On a few clusters I am running into an issue where a temporary directory cannot be created due to the root filesystem being full, causing mpirun to crash.  Would it be possible to change the location where this directory is being created?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compute-109-4.local:12055] opal_os_dirpath_create: Error: Unable to create the sub-directory (/tmp/openmpi-sessions-leeping_at_compute-109-4.local_0) of (/tmp/openmpi-sessions-leeping_at_compute-109-4.local_0/28512/0/0), mkdir failed [1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Lee-Ping
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="22612.php">Huangwei: "[OMPI users] mpi_bcast"</a>
<li><strong>Previous message:</strong> <a href="22610.php">John Hearns: "Re: [OMPI users] Changing directory from /tmp"</a>
<li><strong>In reply to:</strong> <a href="22609.php">Ralph Castain: "Re: [OMPI users] Changing directory from /tmp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22607.php">Gus Correa: "Re: [OMPI users] Changing directory from /tmp"</a>
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
