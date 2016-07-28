<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 26 13:04:28 2007" -->
<!-- isoreceived="20070926170428" -->
<!-- sent="Wed, 26 Sep 2007 13:04:22 -0400" -->
<!-- isosent="20070926170422" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT devel] Differing DoCommand::Cmd return values depending on caller" -->
<!-- id="20070926170421.GM60776_at_sun.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-26 13:04:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0135.php">Ethan Mallove: "Re: [MTT devel] Toy of the day: Cacti"</a>
<li><strong>Previous message:</strong> <a href="0133.php">Josh Hursey: "[MTT devel] Toy of the day: Cacti"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/10/0151.php">Jeff Squyres: "Re: [MTT devel] Differing DoCommand::Cmd return values depending on caller"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/10/0151.php">Jeff Squyres: "Re: [MTT devel] Differing DoCommand::Cmd return values depending on caller"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
DoCommand::Cmd() is returning successfully from my
<br>
funclet_file, and unsuccessfully from inside the main MTT
<br>
client. E.g.,
<br>
<p>&nbsp;&nbsp;Running command: mpicc -lmpi FZ2TaXqC0Q-hello.c
<br>
&nbsp;&nbsp;Command complete, exit status: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$x = $VAR1 = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'timed_out' =&gt; 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'pid' =&gt; 21698,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'result_stdout' =&gt; '',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'exit_status' =&gt; '0'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;};
<br>
<p>I stuck the identical command into client/mtt, and here's
<br>
what happened:
<br>
<p>&nbsp;&nbsp;Running command: mpicc -lmpi FZ2TaXqC0Q-hello.c
<br>
&nbsp;&nbsp;OUT:ld: fatal: library -lmpi: not found
<br>
&nbsp;&nbsp;OUT:ld: fatal: File processing errors. No output written to
<br>
&nbsp;&nbsp;OUT:a.out
<br>
&nbsp;&nbsp;Command complete, exit status: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$x = $VAR1 = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'timed_out' =&gt; 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'pid' =&gt; 8749,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'result_stdout' =&gt; 'ld: fatal: library -lmpi: not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ld: fatal: File processing errors. No output written to a.out
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'exit_status' =&gt; '256'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;};
<br>
<p>Why am I getting two different outcomes from the same command?
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0135.php">Ethan Mallove: "Re: [MTT devel] Toy of the day: Cacti"</a>
<li><strong>Previous message:</strong> <a href="0133.php">Josh Hursey: "[MTT devel] Toy of the day: Cacti"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/10/0151.php">Jeff Squyres: "Re: [MTT devel] Differing DoCommand::Cmd return values depending on caller"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/10/0151.php">Jeff Squyres: "Re: [MTT devel] Differing DoCommand::Cmd return values depending on caller"</a>
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
