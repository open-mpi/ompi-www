<?
$subject_val = "Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 22 14:24:20 2014" -->
<!-- isoreceived="20140722182420" -->
<!-- sent="Tue, 22 Jul 2014 11:23:08 -0700" -->
<!-- isosent="20140722182308" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)" -->
<!-- id="35A699E6-5F88-4A38-89DA-A9112E78690A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53CCE078.6020109_at_allinea.com" -->
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
<strong>Date:</strong> 2014-07-22 14:23:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24851.php">Ralph Castain: "Re: [OMPI users] Salloc and mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="24849.php">Ralph Castain: "Re: [OMPI users] Question on process and memory affinity with 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="24834.php">Dirk Schubert: "Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks - I revised the module so it quotes all params and envar values, and CMRd it for 1.8.2 (added you on the ticket)
<br>
<p>On Jul 21, 2014, at 2:42 AM, Dirk Schubert &lt;dschubert_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks for your answer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I can look to see if there is something generic we can do (perhaps enclosing each param in quotes to avoid any special character issues) - will see if something like that might help. Best that will happen, however, is that we launch the app and then have those procs spit out the error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, that makes sense.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The space isn't a &quot;special character&quot; in that sense, and actually exists in some params.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, and that's what I tried to show: That arguments with spaces are not correctly passed around, maybe the example is bad, because it produces an error in both cases. However, one error is expected the other not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe this will show it more clearly. Sorry for using an error case again, but I can't find a simpler way to reproduce at the moment:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Run: $ mpirun -mca mpi_show_handle_leaks &quot;1 --foo&quot; -n 1 -hostfile hosts example/mpi/code
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This will give the *expected* error output (the argument including spaces is correctly passed around):
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
<span class="quotelev1">&gt; Now run: $ OMPI_MCA_mpi_show_handle_leaks=&quot;1 --foo&quot; mpirun -n 1 -hostfile hosts example/mpi/code
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This will give another *unexptected* error output:
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
<span class="quotelev1">&gt; -d|--debug               Debug the OpenRTE
</span><br>
<span class="quotelev1">&gt;   --daemonize           Daemonize the orted into the background
</span><br>
<span class="quotelev1">&gt;   --debug-daemons       Enable debugging of OpenRTE daemons
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For whatever reason --foo is suddenly part of the orted options, which is wrong IMHO.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why is there a difference if an option is passed via --mca and via an environment variable?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's quite clear if I look in ./orte/mca/plm/rsh/plm_rsh_module.c (version 1.8.1):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* in the rsh environment, we can append multi-word arguments
</span><br>
<span class="quotelev1">&gt; * by enclosing them in quotes. Check for any multi-word
</span><br>
<span class="quotelev1">&gt; * mca params passed to mpirun and include them
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; cnt = opal_argv_count(orted_cmd_line);
</span><br>
<span class="quotelev1">&gt; for (i=0; i &lt; cnt; i+=3) {
</span><br>
<span class="quotelev1">&gt;    /* check if the specified option is more than one word - all
</span><br>
<span class="quotelev1">&gt;     * others have already been passed
</span><br>
<span class="quotelev1">&gt;     */
</span><br>
<span class="quotelev1">&gt;    if (NULL != strchr(orted_cmd_line[i+2], ' ')) {
</span><br>
<span class="quotelev1">&gt;        /* must add quotes around it */
</span><br>
<span class="quotelev1">&gt;        asprintf(&amp;param, &quot;\&quot;%s\&quot;&quot;, orted_cmd_line[i+2]);
</span><br>
<span class="quotelev1">&gt;        /* now pass it along */
</span><br>
<span class="quotelev1">&gt;        opal_argv_append(&amp;argc, &amp;argv, orted_cmd_line[i]);
</span><br>
<span class="quotelev1">&gt;        opal_argv_append(&amp;argc, &amp;argv, orted_cmd_line[i+1]);
</span><br>
<span class="quotelev1">&gt;        opal_argv_append(&amp;argc, &amp;argv, param);
</span><br>
<span class="quotelev1">&gt;        free(param);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, env vars are handled like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* if the value has a special character in it,
</span><br>
<span class="quotelev1">&gt; * then protect it with quotes
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; if (NULL != strchr(value, ';')) {
</span><br>
<span class="quotelev1">&gt;    char *p2;
</span><br>
<span class="quotelev1">&gt;    asprintf(&amp;p2, &quot;\&quot;%s\&quot;&quot;, value);
</span><br>
<span class="quotelev1">&gt;    opal_argv_append(&amp;argc, &amp;argv, p2);
</span><br>
<span class="quotelev1">&gt;    free(p2);
</span><br>
<span class="quotelev1">&gt; } else ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Dirk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Message: 3
</span><br>
<span class="quotelev2">&gt;&gt; Date: Fri, 18 Jul 2014 11:21:55 -0700
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Incorrect escaping of OMPI_MCA environment
</span><br>
<span class="quotelev2">&gt;&gt; 	variables with spaces (for rsh?)
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;285B2F53-EB4D-4E26-A901-901186F243E2_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not exactly sure how to fix what you described. The semicolon is escaped because otherwise the cmd line would think it had been separated - the orted cmd line is ssh'd to the remote node and cannot include an unescaped terminator. The space isn't a &quot;special character&quot; in that sense, and actually exists in some params.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The reason you didn't get an immediate error is that the MCA param you flubbed is only read/used by the MPI layer, and mpirun isn't an MPI application. So mpirun has no visibility into that param. It gets included on the orted cmd line solely because it was given in the environment, and we don't have any current method for separating params out to say &quot;this one doesn't apply to an orted&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So it got passed to the remote end. I can look to see if there is something generic we can do (perhaps enclosing each param in quotes to avoid any special character issues) - will see if something like that might help. Best that will happen, however, is that we launch the app and then have those procs spit out the error.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 18, 2014, at 9:45 AM, Dirk Schubert &lt;dschubert_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems that OMPI_MCA environment variables with spaces (for rsh?) are incorrectly escaped.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This happens with version 1.8 and 1.8.1. I did not try Version 1.7!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To reproduce:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0) ./configure &amp;&amp; make &amp;&amp; make install # no special configure flags required
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) Create a host file, with a couple of hostnames in it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) export OMPI_MCA_mpi_show_handle_leaks=&quot;1 --foo&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) mpirun -hostfile /path/to/hostfile -n 1 /code/to/mpi.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Expected:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; An invalid value was supplied for an enum variable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Variable     : mpi_show_handle_leaks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Value        : 1 --foo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Valid values : 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Actual:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orted: Error: unknown option &quot;--foo&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Type 'orted --help' for usage.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Usage: orted [OPTION]...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -am &lt;arg0&gt;            Aggregate MCA parameter set file list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A potential patch that fixes the problem (but then I don't know why &quot;;&quot; would be considered a special character in the first place).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- ./orte/mca/plm/rsh/plm_rsh_module.c.orig    2014-07-18 17:25:38.477318000 +0100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ ./orte/mca/plm/rsh/plm_rsh_module.c    2014-07-18 17:25:06.936780000 +0100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -618,7 +618,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     /* if the value has a special character in it,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      * then protect it with quotes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -                    if (NULL != strchr(value, ';')) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +                    if (NULL != strchr(value, ' ')) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         char *p2;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         asprintf(&amp;p2, &quot;\&quot;%s\&quot;&quot;, value);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         opal_argv_append(&amp;argc, &amp;argv, p2);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dirk
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24812.php">http://www.open-mpi.org/community/lists/users/2014/07/24812.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24834.php">http://www.open-mpi.org/community/lists/users/2014/07/24834.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24851.php">Ralph Castain: "Re: [OMPI users] Salloc and mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="24849.php">Ralph Castain: "Re: [OMPI users] Question on process and memory affinity with 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="24834.php">Dirk Schubert: "Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
<!-- nextthread="start" -->
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
