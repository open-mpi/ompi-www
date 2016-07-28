<?
$subject_val = "Re: [OMPI users] redirecting output";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  2 11:27:25 2012" -->
<!-- isoreceived="20120402152725" -->
<!-- sent="Mon, 02 Apr 2012 11:27:20 -0400" -->
<!-- isosent="20120402152720" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] redirecting output" -->
<!-- id="4F79C558.30700_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F75CD52.6030909_at_aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] redirecting output<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-02 11:27:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18908.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>Previous message:</strong> <a href="18906.php">R&#195;&#169;mi Palancher: "[OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18890.php">Tim Prince: "Re: [OMPI users] redirecting output"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/30/2012 11:12 AM, Tim Prince wrote:
<br>
<span class="quotelev1">&gt;  On 03/30/2012 10:41 AM, tyler.balson_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using the command mpirun -np nprocs -machinefile machines.arch
</span><br>
<span class="quotelev2">&gt;&gt; Pcrystal and my output strolls across my terminal I would like to
</span><br>
<span class="quotelev2">&gt;&gt; send this output to a file and I cannot figure out how to do so....I
</span><br>
<span class="quotelev2">&gt;&gt; have tried the general &gt; FILENAME and &gt; log &amp; ....these generate
</span><br>
<span class="quotelev2">&gt;&gt; files however they are empty.....any help would be appreciated.
</span><br>
<p>If you see the output on your screen, but it's not being redirected to a
<br>
file, it must be printing to STDERR and not STDOUT. The '&gt;' by itself
<br>
redirects STDOUT only, so it doesn't redirect error messages. To
<br>
redirect STDERR, you can use '2&gt;', which says redirect filehandle # 2,
<br>
which is stderr.
<br>
<p>some_command 2&gt; myerror.log
<br>
<p>or
<br>
<p>some_command &gt;myoutput.log 2&gt;myerror.log
<br>
<p>&nbsp;To redirect both STDOUT and STDERR to the same place, use the syntax
<br>
&quot;2&gt;&amp;1&quot; to tie STDERR to STDOUT:
<br>
<p>some_command &gt; myoutput.log 2&gt;&amp;1
<br>
<p>I prefer to see the ouput on the screen at the same time I write it to a
<br>
file. That way, if the command hangs for some reason, I know it
<br>
immediately. I find the 'tee' command priceless for this:
<br>
<p>some_command 2&gt;&amp;1 | tee myoutput.log
<br>
<p>Google for 'bash output redirection' and you'll find many helpful pages
<br>
with better explanation and examples, like this one:
<br>
<p><a href="http://tldp.org/HOWTO/Bash-Prog-Intro-HOWTO-3.html">http://tldp.org/HOWTO/Bash-Prog-Intro-HOWTO-3.html</a>
<br>
<p>If you don't you bash, those results will be much less helpful.
<br>
<p>I hope that helps, or at least gets you pointed in the right direction.
<br>
<p><pre>
--
Prentice
&gt;
&gt; If you run under screen your terminal output should be collected in
&gt; screenlog.  Beats me why some sysadmins don't see fit to install screen.
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18908.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>Previous message:</strong> <a href="18906.php">R&#195;&#169;mi Palancher: "[OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/03/18890.php">Tim Prince: "Re: [OMPI users] redirecting output"</a>
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
