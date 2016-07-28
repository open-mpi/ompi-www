<?
$subject_val = "Re: [MTT devel] Analysis of hung jobs.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  8 10:46:42 2009" -->
<!-- isoreceived="20091008144642" -->
<!-- sent="Thu, 8 Oct 2009 10:46:35 -0400" -->
<!-- isosent="20091008144635" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Analysis of hung jobs." -->
<!-- id="20091008144634.GA14468_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1255011488.5945.2.camel_at_alpha" -->
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
<strong>Subject:</strong> Re: [MTT devel] Analysis of hung jobs.<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-08 10:46:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0456.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Previous message:</strong> <a href="0454.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>In reply to:</strong> <a href="0454.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0456.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Reply:</strong> <a href="0456.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Oct/08/2009 03:18:07PM, Ashley Pittman wrote:
<br>
<span class="quotelev1">&gt; On Thu, 2009-10-08 at 09:51 -0400, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ padb --verbose --debug=all --config-option rmgr=mpirun --full-report=6336
</span><br>
<span class="quotelev2">&gt; &gt;   ...
</span><br>
<span class="quotelev2">&gt; &gt;   full job report for job 6336
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   Attaching to job 6336
</span><br>
<span class="quotelev2">&gt; &gt;   mpirun resource manager requires pdsh to be installed
</span><br>
<span class="quotelev2">&gt; &gt;   Use of uninitialized value in printf at padb line 729.
</span><br>
<span class="quotelev2">&gt; &gt;   Use of uninitialized value in printf at padb line 729.
</span><br>
<span class="quotelev2">&gt; &gt;   DEBUG (verbose):   0: There are 0 processes over 0 hosts
</span><br>
<span class="quotelev2">&gt; &gt;   Fatal problem setting up the resource manager: mpirun
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I assume it's referring to the below &quot;pdsh&quot;?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   <a href="http://sourceforge.net/projects/pdsh">http://sourceforge.net/projects/pdsh</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, you'll need to able to ssh freely around from the node where
</span><br>
<span class="quotelev1">&gt; padb/pdsh is running to all compute nodes as well.  For debian I had to
</span><br>
<span class="quotelev1">&gt; add &quot;export PDSH_RCMD_TYPE=ssh&quot; to my .bashrc to tell it to use ssh
</span><br>
<span class="quotelev1">&gt; rather than rsh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you update to r283 as well, the &quot;mpirun&quot; resource manager is new
</span><br>
<span class="quotelev1">&gt; and I discovered this morning that it didn't like digits in hostnames.
</span><br>
<span class="quotelev1">&gt; As an added benefit it won't use pdsh or ssh if all processes are local.
</span><br>
<p>It looks like it's using a bad option to pdsh?
<br>
<p>&nbsp;&nbsp;$ padb --debug=all --verbose --config-option rmgr=mpirun --full-report=24303
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;padb version 3.n (Revision 283)
<br>
&nbsp;&nbsp;full job report for job 24303
<br>
<p>&nbsp;&nbsp;Attaching to job 24303
<br>
&nbsp;&nbsp;Use of uninitialized value in string ne at padb line 2720.
<br>
&nbsp;&nbsp;Job has 1 process(es)
<br>
&nbsp;&nbsp;Job spans 0 host(s)
<br>
&nbsp;&nbsp;DEBUG (verbose):   0: There are 1 processes over 0 hosts
<br>
&nbsp;&nbsp;DEBUG (verbose):   0: Remote process data available on frontend
<br>
&nbsp;&nbsp;DEBUG (show_cmd):   0: pdsh -w  padb --inner --outer=&quot;burl-ct-v20z-0:52314&quot;
<br>
&nbsp;&nbsp;einner: pdsh: illegal option -- -
<br>
&nbsp;&nbsp;einner: Usage: pdsh [-options] command ...
<br>
&nbsp;&nbsp;einner: -S                return largest of remote command return values
<br>
&nbsp;&nbsp;einner: -h                output usage menu and quit
<br>
&nbsp;&nbsp;einner: -V                output version information and quit
<br>
&nbsp;&nbsp;einner: -q                list the option settings and quit
<br>
&nbsp;&nbsp;einner: -b                disable ^C status feature (batch mode)
<br>
&nbsp;&nbsp;einner: -d                enable extra debug information from ^C status
<br>
&nbsp;&nbsp;einner: -l user           execute remote commands as user
<br>
&nbsp;&nbsp;einner: -t seconds        set connect timeout (default is 10 sec)
<br>
&nbsp;&nbsp;einner: -u seconds        set command timeout (no default)
<br>
&nbsp;&nbsp;einner: -f n              use fanout of n nodes
<br>
&nbsp;&nbsp;einner: -w host,host,...  set target node list on command line
<br>
&nbsp;&nbsp;einner: -x host,host,...  set node exclusion list on command line
<br>
&nbsp;&nbsp;einner: -R name           set rcmd module to name
<br>
&nbsp;&nbsp;einner: -N                disable hostname: labels on output lines
<br>
&nbsp;&nbsp;einner: -L                list info on all loaded modules and exit
<br>
&nbsp;&nbsp;einner: available rcmd modules: rsh,exec (default: rsh)
<br>
&nbsp;&nbsp;Unexpected EOF from Inner stdout (connecting)
<br>
&nbsp;&nbsp;Unexpected EOF from Inner stderr (connecting)
<br>
&nbsp;&nbsp;Unexpected exit from parallel command (state=connecting)
<br>
&nbsp;&nbsp;result from parallel command is 256 (state=connecting)
<br>
&nbsp;&nbsp;Bad exit code from parallel command (exit_code=1)
<br>
&nbsp;&nbsp;DEBUG (verbose):   5: Completed command
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0456.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Previous message:</strong> <a href="0454.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>In reply to:</strong> <a href="0454.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0456.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Reply:</strong> <a href="0456.php">Ashley Pittman: "Re: [MTT devel] Analysis of hung jobs."</a>
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
