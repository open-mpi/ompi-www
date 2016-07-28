<?
$subject_val = "Re: [OMPI users] Debugging spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 21 07:38:49 2009" -->
<!-- isoreceived="20091221123849" -->
<!-- sent="Mon, 21 Dec 2009 13:38:44 +0100" -->
<!-- isosent="20091221123844" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging spawned processes" -->
<!-- id="9b0da5ce0912210438q74916e50k2dbb7f6c9a5147dd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1261172760.25929.37.camel_at_alpha" -->
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
<strong>Subject:</strong> Re: [OMPI users] Debugging spawned processes<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-21 07:38:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11620.php">jody: "[OMPI users] man-files not installed"</a>
<li><strong>Previous message:</strong> <a href="11618.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>In reply to:</strong> <a href="11605.php">Ashley Pittman: "Re: [OMPI users] Debugging spawned processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph
<br>
<p>I finally got around to install version 1.4.
<br>
The xterm works fine.
<br>
<p>And in order to get gdb going on the spawned processes, i need to add
<br>
an argument &quot;--args&quot;
<br>
in the argument list of the spawner so that the parameters of the
<br>
spawned processes are getting through gdb.
<br>
<p>Thanks again
<br>
&nbsp;&nbsp;Jody
<br>
<p><p>On Fri, Dec 18, 2009 at 10:46 PM, Ashley Pittman &lt;ashley_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Wed, 2009-12-16 at 12:06 +0100, jody wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Has anybody got some hints on how to debug spawned processes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you can live with the processes starting normally and attaching gdb
</span><br>
<span class="quotelev1">&gt; to them after they have started then you could use padb.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Assuming you only have one job active (replace -a with the job-id if you
</span><br>
<span class="quotelev1">&gt; don't) and watch to target the first spawned job then the following
</span><br>
<span class="quotelev1">&gt; command will launch an xterm for each rank in the job and automatically
</span><br>
<span class="quotelev1">&gt; attach to the process for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; padb -Oorte-job-step=2 --command -Ocommand=&quot;xterm -T %r -e 'gdb -p %p'&quot;
</span><br>
<span class="quotelev1">&gt; -a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You'll need to use the SVN version of padb for this, the &quot;orte-job-step&quot;
</span><br>
<span class="quotelev1">&gt; option tells it to attach to the first spawned job, use orte-ps to see
</span><br>
<span class="quotelev1">&gt; the list of job steps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11620.php">jody: "[OMPI users] man-files not installed"</a>
<li><strong>Previous message:</strong> <a href="11618.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>In reply to:</strong> <a href="11605.php">Ashley Pittman: "Re: [OMPI users] Debugging spawned processes"</a>
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
