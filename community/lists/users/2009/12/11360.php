<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn lots of times";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 22:58:41 2009" -->
<!-- isoreceived="20091202035841" -->
<!-- sent="Tue, 1 Dec 2009 20:58:16 -0700" -->
<!-- isosent="20091202035816" -->
<!-- name="Nicolas Bock" -->
<!-- email="nicolasbock_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn lots of times" -->
<!-- id="dcf611bd0912011958m64c9303bkb60cc5c385aad1d4_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="8222185C-C6F0-4B6B-92BE-D65DF122BC15_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_spawn lots of times<br>
<strong>From:</strong> Nicolas Bock (<em>nicolasbock_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 22:58:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11361.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11359.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11347.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11372.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Reply:</strong> <a href="11372.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Dec 1, 2009 at 18:03, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You may want to check your limits as defined by the shell/system. I can
</span><br>
<span class="quotelev1">&gt; also run this for as long as I'm willing to let it run, so something else
</span><br>
<span class="quotelev1">&gt; appears to be going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Is that with 1.3.3? I found that with 1.3.4 I can run the example much
<br>
longer until I hit this error message:
<br>
<p><p>[master] (31996) forking processes
<br>
[mujo:14273] opal_os_dirpath_create: Error: Unable to create the
<br>
sub-directory (/tmp/.private/nbock/openmpi-sessions-nbock_at_mujo_0/13386/31998)
<br>
of (/tmp/.private/nbock/openmpi-sessions-nbock_at_mujo_0/13386/31998/0), mkdir
<br>
failed [1]
<br>
[mujo:14273] [[13386,31998],0] ORTE_ERROR_LOG: Error in file
<br>
util/session_dir.c at line 101
<br>
[mujo:14273] [[13386,31998],0] ORTE_ERROR_LOG: Error in file
<br>
util/session_dir.c at line 425
<br>
[mujo:14273] [[13386,31998],0] ORTE_ERROR_LOG: Error in file
<br>
base/ess_base_std_app.c at line 132
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_session_dir failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
<p><p><p><p><p><span class="quotelev1">&gt; On Dec 1, 2009, at 4:38 PM, Nicolas Bock wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 1, 2009 at 16:28, Abhishek Kulkarni &lt;abbyzcool_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Dec 1, 2009 at 6:15 PM, Nicolas Bock &lt;nicolasbock_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; After reading Anthony's question again, I am not sure now that we are
</span><br>
<span class="quotelev2">&gt;&gt; having
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the same problem, but we might. In any case, the attached example
</span><br>
<span class="quotelev2">&gt;&gt; programs
</span><br>
<span class="quotelev3">&gt;&gt; &gt; trigger the issue of running out of pipes. I don't see how orted could,
</span><br>
<span class="quotelev2">&gt;&gt; even
</span><br>
<span class="quotelev3">&gt;&gt; &gt; if it was reused. There is only a very limited number of processes
</span><br>
<span class="quotelev2">&gt;&gt; running
</span><br>
<span class="quotelev3">&gt;&gt; &gt; at any given time. Once slave terminates, how would it still have open
</span><br>
<span class="quotelev3">&gt;&gt; &gt; pipes? Shouldn't the total number of open files, or pipes, be very
</span><br>
<span class="quotelev2">&gt;&gt; limited
</span><br>
<span class="quotelev3">&gt;&gt; &gt; in this situation? And yet, after maybe 20 or so iterations in master.c,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; orted complains about running out of pipes.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; nick
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What version of OMPI are you trying it with? I can easily run it up to
</span><br>
<span class="quotelev2">&gt;&gt; more
</span><br>
<span class="quotelev2">&gt;&gt; than 200 iterations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, how many nodes are you running this on?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is on one node with 4 cores. I am using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 1
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11360/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11361.php">Ralph Castain: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11359.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11347.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11372.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
<li><strong>Reply:</strong> <a href="11372.php">Nicolas Bock: "Re: [OMPI users] MPI_Comm_spawn lots of times"</a>
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
