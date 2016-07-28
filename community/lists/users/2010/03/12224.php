<?
$subject_val = "Re: [OMPI users] Limit to number of processes on one node?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 13:28:43 2010" -->
<!-- isoreceived="20100303182843" -->
<!-- sent="Wed, 03 Mar 2010 10:30:24 -0800" -->
<!-- isosent="20100303183024" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Limit to number of processes on one node?" -->
<!-- id="4B8EAAC0.9050100_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B8EA6B5.60705_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Limit to number of processes on one node?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 13:30:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12225.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Previous message:</strong> <a href="12223.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>In reply to:</strong> <a href="12223.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12225.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Reply:</strong> <a href="12225.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
Prentice Bisbal wrote:
<blockquote cite="mid4B8EA6B5.60705@ias.edu" type="cite">
  <pre wrap="">Eugene Loh wrote:
  </pre>
  <blockquote type="cite">
    <pre wrap="">Prentice Bisbal wrote:
    </pre>
    <blockquote type="cite">
      <pre wrap="">Is there a limit on how many MPI processes can run on a single host?
      </pre>
    </blockquote>
  </blockquote>
</blockquote>
Depending on which OMPI release you're using, I think you need
something like 4*np up to 7*np (plus a few) descriptors.&nbsp; So, with 256,
you need 1000+ descriptors.&nbsp; You're quite possibly up against your
limit, though I don't know for sure that that's the problem here.<br>
<br>
You say you're running 1.2.8.&nbsp; That's "a while ago", so would you
consider updating as a first step?&nbsp; Among other things, newer OMPIs
will generate a much clearer error message if the descriptor limit is
the problem.<br>
<blockquote cite="mid4B8EA6B5.60705@ias.edu" type="cite">
  <blockquote type="cite">
    <blockquote type="cite">
      <pre wrap="">
I have a user trying to test his code on the command-line on a single
host before running it on our cluster like so:

mpirun -np X foo

When he tries to run it on large number of process (X = 256, 512), the
program fails, and I can reproduce this with a simple "Hello, World"
program:

$ mpirun -np 256 mpihello
mpirun noticed that job rank 0 with PID 0 on node juno.sns.ias.edu
exited on signal 15 (Terminated).
252 additional processes aborted (not shown)

I've done some testing and found that X &lt;155 for this program to work.
Is this a bug, part of the standard, or design/implementation decision?
 

      </pre>
    </blockquote>
    <pre wrap="">One possible issue is the limit on the number of descriptors.  The error
message should be pretty helpful and descriptive, but perhaps you're
using an older version of OMPI.  If this is your problem, one workaround
is something like this:

unlimit descriptors
mpirun -np 256 mpihello
    </pre>
  </blockquote>
  <pre wrap=""><!---->
Looks like I'm not allowed to set that as a regular user:

$ ulimit -n 2048
-bash: ulimit: open files: cannot modify limit: Operation not permitted

Since I am the admin, I could change that elsewhere, but I'd rather not
do that system-wide unless absolutely necessary.
  </pre>
  <blockquote type="cite">
    <pre wrap="">though I guess the syntax depends on what shell you're running.  Another
is to set the MCA parameter opal_set_max_sys_limits to 1.
    </pre>
  </blockquote>
  <pre wrap="">That didn't work either:

$ mpirun -mca opal_set_max_sys_limits 1 -np 256 mpihello
mpirun noticed that job rank 0 with PID 0 on node juno.sns.ias.edu
exited on signal 15 (Terminated).
252 additional processes aborted (not shown)

  </pre>
</blockquote>
<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12225.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Previous message:</strong> <a href="12223.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>In reply to:</strong> <a href="12223.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12225.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
<li><strong>Reply:</strong> <a href="12225.php">Prentice Bisbal: "Re: [OMPI users] Limit to number of processes on one node?"</a>
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
