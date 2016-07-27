<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct  6 15:02:20 2007" -->
<!-- isoreceived="20071006190220" -->
<!-- sent="Sat, 6 Oct 2007 21:02:15 +0200" -->
<!-- isosent="20071006190215" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Run MTT with MTT" -->
<!-- id="41CBF67C-C34A-4EB9-A24D-0A2BB064BD7F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070928220437.GE1913_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-06 15:02:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0154.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<li><strong>Previous message:</strong> <a href="0152.php">Jeff Squyres: "Re: [MTT devel] Toy of the day: Cacti"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/09/0136.php">Ethan Mallove: "[MTT devel] Run MTT with MTT"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ethan and I talked about this in Paris.
<br>
<p>I think it's Whacky.  :-)  But hey, whacky can be good.  :-)
<br>
<p>I'm not a big fan of the --run-engine idea; my counter-proposal was  
<br>
to make a --get-value option where you could query the value of any  
<br>
field in any section (subject to full expansion rules).  Hence, you  
<br>
could have a shell script that does something like:
<br>
<p>mtt --get-value &quot;mpi_details: test-matrix&quot; exec &gt; stuff_to_run
<br>
<p>Then iterate over the lines in stuff_to_run and execute each of them.
<br>
<p><p>On Sep 29, 2007, at 12:04 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had this wacky idea the other day.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a collection of scripts that I've accumulated to run
</span><br>
<span class="quotelev1">&gt; MTT with parameter combinations that MTT does not iterate on
</span><br>
<span class="quotelev1">&gt; (see #245). E.g., I have a dozen or so scripts that do
</span><br>
<span class="quotelev1">&gt; variations on something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Do a 32-bit mtt run with compiler X, on 2 nodes
</span><br>
<span class="quotelev1">&gt;   Do a 32-bit mtt run with compiler Y, on 2 nodes
</span><br>
<span class="quotelev1">&gt;   Do a 64-bit mtt run with compiler X, on 2 nodes
</span><br>
<span class="quotelev1">&gt;   Do a 64-bit mtt run with compiler Y, on 2 nodes
</span><br>
<span class="quotelev1">&gt;   Do a 32-bit mtt run with compiler X, on 1 node
</span><br>
<span class="quotelev1">&gt;   Do a 32-bit mtt run with compiler Y, on 1 node
</span><br>
<span class="quotelev1">&gt;   Do a 64-bit mtt run with compiler X, on 1 node
</span><br>
<span class="quotelev1">&gt;   Do a 64-bit mtt run with compiler Y, on 1 node
</span><br>
<span class="quotelev1">&gt;   ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I thought, &quot;can I somehow harness xargs to do this
</span><br>
<span class="quotelev1">&gt; instead of creating another shell script every time I have
</span><br>
<span class="quotelev1">&gt; another testing combination I want to run?&quot; xargs doesn't
</span><br>
<span class="quotelev1">&gt; seem powerful enough. Then I realized that the MTT run
</span><br>
<span class="quotelev1">&gt; engine *itself* does exactly what I want. Xargs on steroids.
</span><br>
<span class="quotelev1">&gt; So I created the following &quot;MPI&quot; details section to get MTT
</span><br>
<span class="quotelev1">&gt; to run itself:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   [MPI Details: test-matrix]
</span><br>
<span class="quotelev1">&gt;   exec = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt;     client/mtt
</span><br>
<span class="quotelev1">&gt;         --debug
</span><br>
<span class="quotelev1">&gt;         --trial
</span><br>
<span class="quotelev1">&gt;         --file @INI_NAME@
</span><br>
<span class="quotelev1">&gt;         --section &quot;mpi.get.*ompi-nightly-trunk mtt  
</span><br>
<span class="quotelev1">&gt; mpi.details.*open.mpi reporter.*iu.database  
</span><br>
<span class="quotelev1">&gt; mpi.install.*autotools ...&quot;
</span><br>
<span class="quotelev1">&gt;         --scratch /opt/mtt/@bitness@/@compiler@/&amp;mpi_details_name()/ 
</span><br>
<span class="quotelev1">&gt; my-scratch-area
</span><br>
<span class="quotelev1">&gt;         prepend_path=&quot;PATH /path/to/my/compiler/@compiler@&quot;
</span><br>
<span class="quotelev1">&gt;         bitness=@bitness@
</span><br>
<span class="quotelev1">&gt;         run_on_single_node=@run_on_single_node@
</span><br>
<span class="quotelev1">&gt;   EOT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   bitness = &amp;enumerate(32,64)
</span><br>
<span class="quotelev1">&gt;   run_on_single_node = &amp;enumerate(0, 1)
</span><br>
<span class="quotelev1">&gt;   compiler = &amp;enumerate(&quot;A&quot;, &quot;B&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The above expands to 8 MTT runs (2 compilers x 2 bitnesses x
</span><br>
<span class="quotelev1">&gt; 2 hostlists). Then, I had to fake MTT out in order to *use*
</span><br>
<span class="quotelev1">&gt; the run engine. So I created some Noop.pm modules that do
</span><br>
<span class="quotelev1">&gt; nothing but scoot MTT along to the RunEngine phase:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   [MPI get: noop]
</span><br>
<span class="quotelev1">&gt;   # Fill this in from the command line
</span><br>
<span class="quotelev1">&gt;   mpi_details =
</span><br>
<span class="quotelev1">&gt;   module = Noop
</span><br>
<span class="quotelev1">&gt;   [MPI install: noop]
</span><br>
<span class="quotelev1">&gt;   mpi_get = noop
</span><br>
<span class="quotelev1">&gt;   module = Noop
</span><br>
<span class="quotelev1">&gt;   [Test get: noop]
</span><br>
<span class="quotelev1">&gt;   module = Noop
</span><br>
<span class="quotelev1">&gt;   [Test build: noop]
</span><br>
<span class="quotelev1">&gt;   test_get = noop
</span><br>
<span class="quotelev1">&gt;   module = Noop
</span><br>
<span class="quotelev1">&gt;   [Test run: noop]
</span><br>
<span class="quotelev1">&gt;   test_build = noop
</span><br>
<span class="quotelev1">&gt;   module = Noop
</span><br>
<span class="quotelev1">&gt;   timeout = -1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Finally, I can kick off a series of MTT runs like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   $ client/mtt --section &quot;noop test-matrix&quot; mpi_details=test-matrix
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do you think?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd like to make this use case even easier. E.g., create a
</span><br>
<span class="quotelev1">&gt; --run-engine (?) option for the specific purpose of skipping
</span><br>
<span class="quotelev1">&gt; all the phases in order to simply execute commands. Or maybe
</span><br>
<span class="quotelev1">&gt; there is another tool to do what I am trying to do?  In
</span><br>
<span class="quotelev1">&gt; which case, this has been an exercise :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0154.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: cisco)"</a>
<li><strong>Previous message:</strong> <a href="0152.php">Jeff Squyres: "Re: [MTT devel] Toy of the day: Cacti"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/09/0136.php">Ethan Mallove: "[MTT devel] Run MTT with MTT"</a>
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
