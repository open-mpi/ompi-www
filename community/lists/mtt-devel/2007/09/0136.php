<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 28 18:04:42 2007" -->
<!-- isoreceived="20070928220442" -->
<!-- sent="Fri, 28 Sep 2007 18:04:38 -0400" -->
<!-- isosent="20070928220438" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT devel] Run MTT with MTT" -->
<!-- id="20070928220437.GE1913_at_sun.com" -->
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
<strong>Date:</strong> 2007-09-28 18:04:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/10/0137.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1066"</a>
<li><strong>Previous message:</strong> <a href="0135.php">Ethan Mallove: "Re: [MTT devel] Toy of the day: Cacti"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/10/0153.php">Jeff Squyres: "Re: [MTT devel] Run MTT with MTT"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/10/0153.php">Jeff Squyres: "Re: [MTT devel] Run MTT with MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>I had this wacky idea the other day.
<br>
<p>I have a collection of scripts that I've accumulated to run
<br>
MTT with parameter combinations that MTT does not iterate on
<br>
(see #245). E.g., I have a dozen or so scripts that do
<br>
variations on something like this:
<br>
<p>&nbsp;&nbsp;Do a 32-bit mtt run with compiler X, on 2 nodes
<br>
&nbsp;&nbsp;Do a 32-bit mtt run with compiler Y, on 2 nodes
<br>
&nbsp;&nbsp;Do a 64-bit mtt run with compiler X, on 2 nodes
<br>
&nbsp;&nbsp;Do a 64-bit mtt run with compiler Y, on 2 nodes
<br>
&nbsp;&nbsp;Do a 32-bit mtt run with compiler X, on 1 node
<br>
&nbsp;&nbsp;Do a 32-bit mtt run with compiler Y, on 1 node
<br>
&nbsp;&nbsp;Do a 64-bit mtt run with compiler X, on 1 node
<br>
&nbsp;&nbsp;Do a 64-bit mtt run with compiler Y, on 1 node
<br>
&nbsp;&nbsp;...
<br>
<p>So I thought, &quot;can I somehow harness xargs to do this
<br>
instead of creating another shell script every time I have
<br>
another testing combination I want to run?&quot; xargs doesn't
<br>
seem powerful enough. Then I realized that the MTT run
<br>
engine *itself* does exactly what I want. Xargs on steroids.
<br>
So I created the following &quot;MPI&quot; details section to get MTT
<br>
to run itself:
<br>
<p>&nbsp;&nbsp;[MPI Details: test-matrix]
<br>
&nbsp;&nbsp;exec = &lt;&lt;EOT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;client/mtt
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--debug
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--trial
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--file @INI_NAME@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--section &quot;mpi.get.*ompi-nightly-trunk mtt mpi.details.*open.mpi reporter.*iu.database mpi.install.*autotools ...&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--scratch /opt/mtt/@bitness@/@compiler@/&amp;mpi_details_name()/my-scratch-area
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prepend_path=&quot;PATH /path/to/my/compiler/@compiler@&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bitness=@bitness@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;run_on_single_node=@run_on_single_node@
<br>
&nbsp;&nbsp;EOT
<br>
<p>&nbsp;&nbsp;bitness = &amp;enumerate(32,64)
<br>
&nbsp;&nbsp;run_on_single_node = &amp;enumerate(0, 1)
<br>
&nbsp;&nbsp;compiler = &amp;enumerate(&quot;A&quot;, &quot;B&quot;)
<br>
<p>The above expands to 8 MTT runs (2 compilers x 2 bitnesses x
<br>
2 hostlists). Then, I had to fake MTT out in order to *use*
<br>
the run engine. So I created some Noop.pm modules that do
<br>
nothing but scoot MTT along to the RunEngine phase:
<br>
<p>&nbsp;&nbsp;[MPI get: noop]
<br>
&nbsp;&nbsp;# Fill this in from the command line
<br>
&nbsp;&nbsp;mpi_details =
<br>
&nbsp;&nbsp;module = Noop
<br>
&nbsp;&nbsp;[MPI install: noop]
<br>
&nbsp;&nbsp;mpi_get = noop
<br>
&nbsp;&nbsp;module = Noop
<br>
&nbsp;&nbsp;[Test get: noop]
<br>
&nbsp;&nbsp;module = Noop
<br>
&nbsp;&nbsp;[Test build: noop]
<br>
&nbsp;&nbsp;test_get = noop
<br>
&nbsp;&nbsp;module = Noop
<br>
&nbsp;&nbsp;[Test run: noop]
<br>
&nbsp;&nbsp;test_build = noop
<br>
&nbsp;&nbsp;module = Noop
<br>
&nbsp;&nbsp;timeout = -1
<br>
<p>Finally, I can kick off a series of MTT runs like this:
<br>
<p>&nbsp;&nbsp;$ client/mtt --section &quot;noop test-matrix&quot; mpi_details=test-matrix
<br>
<p>What do you think? 
<br>
<p>I'd like to make this use case even easier. E.g., create a
<br>
--run-engine (?) option for the specific purpose of skipping
<br>
all the phases in order to simply execute commands. Or maybe
<br>
there is another tool to do what I am trying to do?  In
<br>
which case, this has been an exercise :-)
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/10/0137.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1066"</a>
<li><strong>Previous message:</strong> <a href="0135.php">Ethan Mallove: "Re: [MTT devel] Toy of the day: Cacti"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/10/0153.php">Jeff Squyres: "Re: [MTT devel] Run MTT with MTT"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/10/0153.php">Jeff Squyres: "Re: [MTT devel] Run MTT with MTT"</a>
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
