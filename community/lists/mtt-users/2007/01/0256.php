<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 16 10:47:17 2007" -->
<!-- isoreceived="20070116154717" -->
<!-- sent="Tue, 16 Jan 2007 10:47:12 -0500" -->
<!-- isosent="20070116154712" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT users] MCA parameters reporting" -->
<!-- id="20070116154711.GM33474_at_sr1-ubur-07.East.Sun.COM" -->
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
<strong>Date:</strong> 2007-01-16 10:47:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0257.php">Ethan Mallove: "[MTT users] MTT 2.0 switchover status"</a>
<li><strong>Previous message:</strong> <a href="0255.php">Ethan Mallove: "Re: [MTT users] reserved key words ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>One of the questions that came up during the teleconference
<br>
last Tuesday was, &quot;how can we use reporter.php to display
<br>
e.g., the performance of different BTLs&quot;?  At the time there
<br>
was little to cover that use case, but now there's
<br>
something.
<br>
<p>If you type a regular expression into the Command text
<br>
field, the first pattern that matches the expression is
<br>
captured and will show up in the Summary table.  Thus, you
<br>
can type e.g., &quot;tcp|openib&quot; into the Command field and there
<br>
will be a Command column differentiating the rows by
<br>
displaying the occurrence of the pattern &quot;tcp&quot; and &quot;openib&quot;
<br>
in the mpirun command.
<br>
<p>Go here for an example:
<br>
<a href="http://www.open-mpi.org/~emallove/mtt/reporter.php?do_redir=65">http://www.open-mpi.org/~emallove/mtt/reporter.php?do_redir=65</a>
<br>
<p>Note: In addition to the Command field, all *large* fields
<br>
have this behavior, and can be identified in reporter.php as
<br>
*not* having an adjacent Show/Hide menu. (They are &quot;Stdout&quot;,
<br>
&quot;Stderr&quot;, &quot;Environment&quot;, &quot;Result message&quot;, &quot;Configure
<br>
arguments&quot;, and &quot;Command&quot;). Here's another example with a
<br>
&quot;Configure arguments&quot; filter:
<br>
<p><a href="http://www.open-mpi.org/~emallove/mtt/reporter.php?do_redir=66">http://www.open-mpi.org/~emallove/mtt/reporter.php?do_redir=66</a>
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0257.php">Ethan Mallove: "[MTT users] MTT 2.0 switchover status"</a>
<li><strong>Previous message:</strong> <a href="0255.php">Ethan Mallove: "Re: [MTT users] reserved key words ?"</a>
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
