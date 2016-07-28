<?
$subject_val = "Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 18 14:22:52 2014" -->
<!-- isoreceived="20140718182252" -->
<!-- sent="Fri, 18 Jul 2014 11:21:55 -0700" -->
<!-- isosent="20140718182155" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)" -->
<!-- id="285B2F53-EB4D-4E26-A901-901186F243E2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53C94F35.8020508_at_allinea.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-18 14:21:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24815.php">Lane, William: "[OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<li><strong>Previous message:</strong> <a href="24813.php">Fab Tillier: "Re: [OMPI users] latest stable and win7/msvc2013 and shared memory feature"</a>
<li><strong>In reply to:</strong> <a href="24812.php">Dirk Schubert: "[OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24834.php">Dirk Schubert: "Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not exactly sure how to fix what you described. The semicolon is escaped because otherwise the cmd line would think it had been separated - the orted cmd line is ssh'd to the remote node and cannot include an unescaped terminator. The space isn't a &quot;special character&quot; in that sense, and actually exists in some params.
<br>
<p>The reason you didn't get an immediate error is that the MCA param you flubbed is only read/used by the MPI layer, and mpirun isn't an MPI application. So mpirun has no visibility into that param. It gets included on the orted cmd line solely because it was given in the environment, and we don't have any current method for separating params out to say &quot;this one doesn't apply to an orted&quot;.
<br>
<p>So it got passed to the remote end. I can look to see if there is something generic we can do (perhaps enclosing each param in quotes to avoid any special character issues) - will see if something like that might help. Best that will happen, however, is that we launch the app and then have those procs spit out the error.
<br>
<p>On Jul 18, 2014, at 9:45 AM, Dirk Schubert &lt;dschubert_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that OMPI_MCA environment variables with spaces (for rsh?) are incorrectly escaped.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This happens with version 1.8 and 1.8.1. I did not try Version 1.7!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To reproduce:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 0) ./configure &amp;&amp; make &amp;&amp; make install # no special configure flags required
</span><br>
<span class="quotelev1">&gt; 1) Create a host file, with a couple of hostnames in it.
</span><br>
<span class="quotelev1">&gt; 2) export OMPI_MCA_mpi_show_handle_leaks=&quot;1 --foo&quot;
</span><br>
<span class="quotelev1">&gt; 3) mpirun -hostfile /path/to/hostfile -n 1 /code/to/mpi.exe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Expected:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An invalid value was supplied for an enum variable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Variable     : mpi_show_handle_leaks
</span><br>
<span class="quotelev1">&gt;  Value        : 1 --foo
</span><br>
<span class="quotelev1">&gt;  Valid values : 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actual:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; orted: Error: unknown option &quot;--foo&quot;
</span><br>
<span class="quotelev1">&gt; Type 'orted --help' for usage.
</span><br>
<span class="quotelev1">&gt; Usage: orted [OPTION]...
</span><br>
<span class="quotelev1">&gt;   -am &lt;arg0&gt;            Aggregate MCA parameter set file list
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A potential patch that fixes the problem (but then I don't know why &quot;;&quot; would be considered a special character in the first place).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- ./orte/mca/plm/rsh/plm_rsh_module.c.orig    2014-07-18 17:25:38.477318000 +0100
</span><br>
<span class="quotelev1">&gt; +++ ./orte/mca/plm/rsh/plm_rsh_module.c    2014-07-18 17:25:06.936780000 +0100
</span><br>
<span class="quotelev1">&gt; @@ -618,7 +618,7 @@
</span><br>
<span class="quotelev1">&gt;                     /* if the value has a special character in it,
</span><br>
<span class="quotelev1">&gt;                      * then protect it with quotes
</span><br>
<span class="quotelev1">&gt;                      */
</span><br>
<span class="quotelev1">&gt; -                    if (NULL != strchr(value, ';')) {
</span><br>
<span class="quotelev1">&gt; +                    if (NULL != strchr(value, ' ')) {
</span><br>
<span class="quotelev1">&gt;                         char *p2;
</span><br>
<span class="quotelev1">&gt;                         asprintf(&amp;p2, &quot;\&quot;%s\&quot;&quot;, value);
</span><br>
<span class="quotelev1">&gt;                         opal_argv_append(&amp;argc, &amp;argv, p2);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Dirk
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24812.php">http://www.open-mpi.org/community/lists/users/2014/07/24812.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24815.php">Lane, William: "[OMPI users] Mpirun 1.5.4  problems when request &gt; 28 slots"</a>
<li><strong>Previous message:</strong> <a href="24813.php">Fab Tillier: "Re: [OMPI users] latest stable and win7/msvc2013 and shared memory feature"</a>
<li><strong>In reply to:</strong> <a href="24812.php">Dirk Schubert: "[OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24834.php">Dirk Schubert: "Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
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
