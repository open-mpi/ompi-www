<?
$subject_val = "Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 21 05:42:21 2014" -->
<!-- isoreceived="20140721094221" -->
<!-- sent="Mon, 21 Jul 2014 10:42:16 +0100" -->
<!-- isosent="20140721094216" -->
<!-- name="Dirk Schubert" -->
<!-- email="dschubert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)" -->
<!-- id="53CCE078.6020109_at_allinea.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.11.1405785602.31141.users_at_open-mpi.org" -->
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
<strong>From:</strong> Dirk Schubert (<em>dschubert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-21 05:42:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24835.php">Shamis, Pavel: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<li><strong>Previous message:</strong> <a href="24833.php">Syed Ahsan Ali: "[OMPI users] Errors for openib, mpirun fails"</a>
<li><strong>Maybe in reply to:</strong> <a href="24812.php">Dirk Schubert: "[OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24850.php">Ralph Castain: "Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
<li><strong>Reply:</strong> <a href="24850.php">Ralph Castain: "Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralph,
<br>
<p>thanks for your answer.
<br>
<p><span class="quotelev1"> &gt; I can look to see if there is something generic we can do (perhaps 
</span><br>
enclosing each param in quotes to avoid any special character issues) - 
<br>
will see if something like that might help. Best that will happen, 
<br>
however, is that we launch the app and then have those procs spit out 
<br>
the error.
<br>
<p>Yes, that makes sense.
<br>
<p><span class="quotelev1"> &gt; The space isn't a &quot;special character&quot; in that sense, and actually 
</span><br>
exists in some params.
<br>
<p>Yes, and that's what I tried to show: That arguments with spaces are not 
<br>
correctly passed around, maybe the example is bad, because it produces 
<br>
an error in both cases. However, one error is expected the other not.
<br>
<p>Maybe this will show it more clearly. Sorry for using an error case 
<br>
again, but I can't find a simpler way to reproduce at the moment:
<br>
<p>Run: $ mpirun -mca mpi_show_handle_leaks &quot;1 --foo&quot; -n 1 -hostfile hosts 
<br>
example/mpi/code
<br>
<p>This will give the *expected* error output (the argument including 
<br>
spaces is correctly passed around):
<br>
<p>--------------------------------------------------------------------------
<br>
An invalid value was supplied for an enum variable.
<br>
<p>&nbsp;&nbsp;&nbsp;Variable     : mpi_show_handle_leaks
<br>
&nbsp;&nbsp;&nbsp;Value        : 1 --foo
<br>
&nbsp;&nbsp;&nbsp;Valid values : 0: f|false|disabled, 1: t|true|enabled
<br>
--------------------------------------------------------------------------
<br>
...
<br>
<p>Now run: $ OMPI_MCA_mpi_show_handle_leaks=&quot;1 --foo&quot; mpirun -n 1 
<br>
-hostfile hosts example/mpi/code
<br>
<p>This will give another *unexptected* error output:
<br>
<p>orted: Error: unknown option &quot;--foo&quot;
<br>
Type 'orted --help' for usage.
<br>
Usage: orted [OPTION]...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-am &lt;arg0&gt;            Aggregate MCA parameter set file list
<br>
-d|--debug               Debug the OpenRTE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--daemonize           Daemonize the orted into the background
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--debug-daemons       Enable debugging of OpenRTE daemons
<br>
...
<br>
<p>For whatever reason --foo is suddenly part of the orted options, which 
<br>
is wrong IMHO.
<br>
<p>Why is there a difference if an option is passed via --mca and via an 
<br>
environment variable?
<br>
<p>It's quite clear if I look in ./orte/mca/plm/rsh/plm_rsh_module.c 
<br>
(version 1.8.1):
<br>
<p>/* in the rsh environment, we can append multi-word arguments
<br>
&nbsp;&nbsp;* by enclosing them in quotes. Check for any multi-word
<br>
&nbsp;&nbsp;* mca params passed to mpirun and include them
<br>
&nbsp;&nbsp;*/
<br>
cnt = opal_argv_count(orted_cmd_line);
<br>
for (i=0; i &lt; cnt; i+=3) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* check if the specified option is more than one word - all
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* others have already been passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != strchr(orted_cmd_line[i+2], ' ')) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* must add quotes around it */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;asprintf(&amp;param, &quot;\&quot;%s\&quot;&quot;, orted_cmd_line[i+2]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* now pass it along */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_argv_append(&amp;argc, &amp;argv, orted_cmd_line[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_argv_append(&amp;argc, &amp;argv, orted_cmd_line[i+1]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_argv_append(&amp;argc, &amp;argv, param);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(param);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<p>However, env vars are handled like this:
<br>
<p>/* if the value has a special character in it,
<br>
&nbsp;&nbsp;* then protect it with quotes
<br>
&nbsp;&nbsp;*/
<br>
if (NULL != strchr(value, ';')) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *p2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;asprintf(&amp;p2, &quot;\&quot;%s\&quot;&quot;, value);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_argv_append(&amp;argc, &amp;argv, p2);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(p2);
<br>
} else ...
<br>
<p>Regards,
<br>
Dirk
<br>
<p><span class="quotelev1">&gt; Message: 3
</span><br>
<span class="quotelev1">&gt; Date: Fri, 18 Jul 2014 11:21:55 -0700
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Incorrect escaping of OMPI_MCA environment
</span><br>
<span class="quotelev1">&gt; 	variables with spaces (for rsh?)
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;285B2F53-EB4D-4E26-A901-901186F243E2_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not exactly sure how to fix what you described. The semicolon is escaped because otherwise the cmd line would think it had been separated - the orted cmd line is ssh'd to the remote node and cannot include an unescaped terminator. The space isn't a &quot;special character&quot; in that sense, and actually exists in some params.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The reason you didn't get an immediate error is that the MCA param you flubbed is only read/used by the MPI layer, and mpirun isn't an MPI application. So mpirun has no visibility into that param. It gets included on the orted cmd line solely because it was given in the environment, and we don't have any current method for separating params out to say &quot;this one doesn't apply to an orted&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So it got passed to the remote end. I can look to see if there is something generic we can do (perhaps enclosing each param in quotes to avoid any special character issues) - will see if something like that might help. Best that will happen, however, is that we launch the app and then have those procs spit out the error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 18, 2014, at 9:45 AM, Dirk Schubert &lt;dschubert_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems that OMPI_MCA environment variables with spaces (for rsh?) are incorrectly escaped.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This happens with version 1.8 and 1.8.1. I did not try Version 1.7!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To reproduce:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 0) ./configure &amp;&amp; make &amp;&amp; make install # no special configure flags required
</span><br>
<span class="quotelev2">&gt;&gt; 1) Create a host file, with a couple of hostnames in it.
</span><br>
<span class="quotelev2">&gt;&gt; 2) export OMPI_MCA_mpi_show_handle_leaks=&quot;1 --foo&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 3) mpirun -hostfile /path/to/hostfile -n 1 /code/to/mpi.exe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Expected:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; An invalid value was supplied for an enum variable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Variable     : mpi_show_handle_leaks
</span><br>
<span class="quotelev2">&gt;&gt;   Value        : 1 --foo
</span><br>
<span class="quotelev2">&gt;&gt;   Valid values : 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actual:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; orted: Error: unknown option &quot;--foo&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Type 'orted --help' for usage.
</span><br>
<span class="quotelev2">&gt;&gt; Usage: orted [OPTION]...
</span><br>
<span class="quotelev2">&gt;&gt;    -am &lt;arg0&gt;            Aggregate MCA parameter set file list
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A potential patch that fixes the problem (but then I don't know why &quot;;&quot; would be considered a special character in the first place).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- ./orte/mca/plm/rsh/plm_rsh_module.c.orig    2014-07-18 17:25:38.477318000 +0100
</span><br>
<span class="quotelev2">&gt;&gt; +++ ./orte/mca/plm/rsh/plm_rsh_module.c    2014-07-18 17:25:06.936780000 +0100
</span><br>
<span class="quotelev2">&gt;&gt; @@ -618,7 +618,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                      /* if the value has a special character in it,
</span><br>
<span class="quotelev2">&gt;&gt;                       * then protect it with quotes
</span><br>
<span class="quotelev2">&gt;&gt;                       */
</span><br>
<span class="quotelev2">&gt;&gt; -                    if (NULL != strchr(value, ';')) {
</span><br>
<span class="quotelev2">&gt;&gt; +                    if (NULL != strchr(value, ' ')) {
</span><br>
<span class="quotelev2">&gt;&gt;                          char *p2;
</span><br>
<span class="quotelev2">&gt;&gt;                          asprintf(&amp;p2, &quot;\&quot;%s\&quot;&quot;, value);
</span><br>
<span class="quotelev2">&gt;&gt;                          opal_argv_append(&amp;argc, &amp;argv, p2);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Dirk
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24812.php">http://www.open-mpi.org/community/lists/users/2014/07/24812.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24835.php">Shamis, Pavel: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<li><strong>Previous message:</strong> <a href="24833.php">Syed Ahsan Ali: "[OMPI users] Errors for openib, mpirun fails"</a>
<li><strong>Maybe in reply to:</strong> <a href="24812.php">Dirk Schubert: "[OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24850.php">Ralph Castain: "Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
<li><strong>Reply:</strong> <a href="24850.php">Ralph Castain: "Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
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
