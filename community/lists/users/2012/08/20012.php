<?
$subject_val = "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 26 22:23:18 2012" -->
<!-- isoreceived="20120827022318" -->
<!-- sent="Sun, 26 Aug 2012 22:23:13 -0400" -->
<!-- isosent="20120827022313" -->
<!-- name="Shanthini Kannan" -->
<!-- email="shanthinick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed" -->
<!-- id="CACY7q+kuxcCZTZiXvjGhqYKD5MVnwSV-nKx3=M+VqFvJrn6swQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D87C64DD-7A66-47EC-A8F4-972B94AAEC64_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed<br>
<strong>From:</strong> Shanthini Kannan (<em>shanthinick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-26 22:23:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20013.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<li><strong>Previous message:</strong> <a href="20011.php">devendra rai: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>In reply to:</strong> <a href="20007.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20013.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<li><strong>Reply:</strong> <a href="20013.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralph,
<br>
/usr/local/lib is in my LD_LIBRARY_PATH.
<br>
I am running the right version of mpirun and I do have all permissions on
<br>
them.
<br>
<p>Thanks!
<br>
Shanthini
<br>
<p>On Fri, Aug 24, 2012 at 7:30 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; And just to be sure - /usr/local/lib is in your ld_lib_path, yes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might also check the permissions to ensure you can read them. Also,
</span><br>
<span class="quotelev1">&gt; check &quot;which mpirun&quot; - let's make sure you are running the one you think!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 24, 2012, at 4:22 PM, Shanthini Kannan &lt;shanthinick_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks Ralph.
</span><br>
<span class="quotelev1">&gt; My prefix is /usr/local and I see that mca_ess_env.la is present in
</span><br>
<span class="quotelev1">&gt; /usr/local/lib directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -bash-4.2# pwd
</span><br>
<span class="quotelev1">&gt; /usr/local/lib
</span><br>
<span class="quotelev1">&gt; -bash-4.2# ls mca_ess*
</span><br>
<span class="quotelev1">&gt; mca_ess_env.la  mca_ess_singleton.la  mca_ess_slurm.la   mca_ess_tool.la
</span><br>
<span class="quotelev1">&gt; mca_ess_env.so  mca_ess_singleton.so  mca_ess_slurm.so   mca_ess_tool.so
</span><br>
<span class="quotelev1">&gt; mca_ess_hnp.la  mca_ess_slave.la      mca_ess_slurmd.la
</span><br>
<span class="quotelev1">&gt; mca_ess_hnp.so  mca_ess_slave.so      mca_ess_slurmd.so
</span><br>
<span class="quotelev1">&gt; -bash-4.2#
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Aug 24, 2012 at 7:13 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Check you &lt;prefix&gt;/lib directory - there should be an openmpi directory
</span><br>
<span class="quotelev2">&gt;&gt; under it, and that should have a bunch of libs in it. One of those should
</span><br>
<span class="quotelev2">&gt;&gt; be mca_ess_env.la
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it there?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 24, 2012, at 3:27 PM, Shanthini Kannan &lt;shanthinick_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I had the OMPI lib directory added in /etc/ld.so.conf.
</span><br>
<span class="quotelev2">&gt;&gt; I also added it in LD_LIBRARY_PATH, but it made no difference.
</span><br>
<span class="quotelev2">&gt;&gt; When I call mpirun, should I specify the MCA in command-line?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Aug 24, 2012 at 2:07 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I suspect your LD_LIBRARY_PATH doesn't include the OMPI lib location
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 24, 2012, at 10:58 AM, Shanthini Kannan &lt;shanthinick_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am running mpptest over Open MPI (v1.5.4).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get the following error saying component &quot;env&quot; in Framework &quot;ess&quot; is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not found. Am I missing something?  I am new to MPI and any help you can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; offer is appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev3">&gt;&gt;&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host:      AV8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Framework: ess
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Component: env
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [AV8:05354] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; runtime/orte_init.c at line 120
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   orte_ess_base_open failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Shanthini
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20012/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20013.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<li><strong>Previous message:</strong> <a href="20011.php">devendra rai: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>In reply to:</strong> <a href="20007.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20013.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<li><strong>Reply:</strong> <a href="20013.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
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
