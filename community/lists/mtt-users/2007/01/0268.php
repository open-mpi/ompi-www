<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 23 10:41:15 2007" -->
<!-- isoreceived="20070123154115" -->
<!-- sent="Tue, 23 Jan 2007 10:41:10 -0500" -->
<!-- isosent="20070123154110" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] [devel-core] first steps with MTT" -->
<!-- id="20070123154109.GA42208_at_sr1-ubur-07.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200701230912.59985.andreas.knuepfer_at_tu-dresden.de" -->
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
<strong>Date:</strong> 2007-01-23 10:41:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0269.php">Jeff Squyres: "Re: [MTT users] [devel-core] first steps with MTT"</a>
<li><strong>Previous message:</strong> <a href="0267.php">Ethan Mallove: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0269.php">Jeff Squyres: "Re: [MTT users] [devel-core] first steps with MTT"</a>
<li><strong>Reply:</strong> <a href="0269.php">Jeff Squyres: "Re: [MTT users] [devel-core] first steps with MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Andreas,
<br>
<p>mtt-users_at_[hidden] is where you want to send MTT-related
<br>
stuff.
<br>
<p>On Tue, Jan/23/2007 09:12:59AM, Andreas Kn?pfer wrote:
<br>
<span class="quotelev1">&gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After our first experiments with MTT I'd like to ask a
</span><br>
<span class="quotelev1">&gt; couple of questions. I guess, if I put them here the
</span><br>
<span class="quotelev1">&gt; answers will go to the list archive as well.  maybe I can
</span><br>
<span class="quotelev1">&gt; write a wiki page for the first steps towards MTT, too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This leads me to the first question? what's the
</span><br>
<span class="quotelev1">&gt; login/passwd for the wiki?  And how about the central data
</span><br>
<span class="quotelev1">&gt; base for results? probably that answers should not go to
</span><br>
<span class="quotelev1">&gt; the list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>There's anonymous read-only access to the wiki.
<br>
<p><a href="https://svn.open-mpi.org/trac/mtt/wiki">https://svn.open-mpi.org/trac/mtt/wiki</a>
<br>
<p>You need an HTTP account for sending up results to the
<br>
database. username's are organization names (e.g., cisco,
<br>
sun, lanl, etc.). What do you want as your username?
<br>
&quot;tu-dresden&quot; or &quot;zih&quot;?
<br>
<p><span class="quotelev1">&gt; So far I'm using text output only. How can I set up an own
</span><br>
<span class="quotelev1">&gt; data base? There are some PHP files in the MTT tarball. Do
</span><br>
<span class="quotelev1">&gt; they initialize data base and tables and so on? is there
</span><br>
<span class="quotelev1">&gt; any script for this? Does is require mysql or postgres or
</span><br>
<span class="quotelev1">&gt; any of the two?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Postgres, but the server-side is already taken care of.
<br>
There's a centralized database setup at Indiana Univ, and
<br>
the MTT test results can be viewed here:
<br>
<a href="http://www.open-mpi.org/mtt">http://www.open-mpi.org/mtt</a>.
<br>
<p><p><span class="quotelev1">&gt; When I did my own test scripts for a simple test
</span><br>
<span class="quotelev1">&gt; application I followed the example INI files provided and
</span><br>
<span class="quotelev1">&gt; some pieces of documentation and the Perl code. Is there a
</span><br>
<span class="quotelev1">&gt; &quot;real&quot; documentation about all bells and whistles? If not,
</span><br>
<span class="quotelev1">&gt; could we write one or at least provide a step-by-step
</span><br>
<span class="quotelev1">&gt; guide for beginners?
</span><br>
<p>The wiki is a good starting point. There's links to a bunch
<br>
of stuff on the MTT home wiki page here: 
<br>
<p><a href="https://svn.open-mpi.org/trac/mtt/wiki">https://svn.open-mpi.org/trac/mtt/wiki</a>
<br>
<p>The closest thing to a Beginner's Guide to using the MTT
<br>
client would be:
<br>
<p><a href="https://svn.open-mpi.org/trac/mtt/wiki/MTTOverview">https://svn.open-mpi.org/trac/mtt/wiki/MTTOverview</a>
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I want to do some tests whether a test run was
</span><br>
<span class="quotelev1">&gt; successful of not, which way would you suggest. Either
</span><br>
<span class="quotelev1">&gt; doing it in bash commands placed in the INI file or rather
</span><br>
<span class="quotelev1">&gt; write new Perl modules that will be specific to my
</span><br>
<span class="quotelev1">&gt; application? The trivial test case does part of both,
</span><br>
<span class="quotelev1">&gt; doesn't it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>B. new Perl modules :)
<br>
<p>But the test suites that are listed in the
<br>
samples/ompi-core-templates.ini file already have modules in
<br>
place to Get (e.g., svn export), Build (e.g., make), Run
<br>
(mpirun), and Analyze (prepare test results for the
<br>
database).
<br>
<p>If you add a *new* test suite to ompi-tests, the existing
<br>
modules should be able to do all of the above (with the
<br>
exception of Analyze, if the test outputs performance data).
<br>
You just might need to add some special conditions in the [Test
<br>
run: foo] section of the INI file to indicate e.g., whether
<br>
some tests are *supposed* to fail, some tests take longer
<br>
time span to run, etc.
<br>
<p><p><span class="quotelev1">&gt; Furthermore, there is a caching scheme for test results
</span><br>
<span class="quotelev1">&gt; between successive runs. MTT avoids test that were run
</span><br>
<span class="quotelev1">&gt; before. Where does it store this information? How to
</span><br>
<span class="quotelev1">&gt; explicitly clear it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>The cached data is stored as serialized Perl variables
<br>
down in the scratch directory.
<br>
<p>The --force option &quot;forces&quot; MTT to run everything,
<br>
regardless of whether it's been run before.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As one of our current goals, I'm integrating VampirTrace
</span><br>
<span class="quotelev1">&gt; into the MTT test cycle. The most straight forward way
</span><br>
<span class="quotelev1">&gt; would be to have a test application tarball which includes
</span><br>
<span class="quotelev1">&gt; VampirTrace sources, wouldn't it? Would it be feasible to
</span><br>
<span class="quotelev1">&gt; have two download clauses in a single test-get phase and
</span><br>
<span class="quotelev1">&gt; two successive build clauses in a single test-build
</span><br>
<span class="quotelev1">&gt; phase? Could this work with the current macros?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I don't know of a user that's done two fetches/compiles in a
<br>
single section yet. Why do you need to download/build twice
<br>
for a single test suite?  (There's nothing preventing this,
<br>
just wondering.) I think what you want would look something
<br>
like this:
<br>
<p>[Test get: VampirTrace]
<br>
url1 = <a href="http://www.foo.com">http://www.foo.com</a>
<br>
url2 = <a href="http://www.bar.com">http://www.bar.com</a>
<br>
module = Tarball
<br>
<p>[Test build: VampirTrace]
<br>
module = Shell
<br>
shell_build_command = &lt;&lt;EOT
<br>
make this
<br>
make that
<br>
EOT
<br>
<p>Note: all the test suites currently setup to be used with
<br>
MTT, are fetched with &quot;svn export&quot; out of the ompi-tests SVN
<br>
repository (except the trivial tests, which has its test
<br>
sources embedded in MTT).  We'd need to create a
<br>
Test/Get/Tarball.pm module, if you don't want VampirTrace
<br>
added to ompi-tests.
<br>
<p>Thanks,
<br>
Ethan
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for your answers! 
</span><br>
<span class="quotelev1">&gt; Andreas
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl. Math. Andreas Knuepfer, 
</span><br>
<span class="quotelev1">&gt; Center for Information Services and 
</span><br>
<span class="quotelev1">&gt; High Performance Computing (ZIH), TU Dresden, 
</span><br>
<span class="quotelev1">&gt; Willersbau A114, Zellescher Weg 12, 01062 Dresden
</span><br>
<span class="quotelev1">&gt; phone +49-351-463-38323, fax +49-351-463-37773
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel-core mailing list
</span><br>
<span class="quotelev1">&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0269.php">Jeff Squyres: "Re: [MTT users] [devel-core] first steps with MTT"</a>
<li><strong>Previous message:</strong> <a href="0267.php">Ethan Mallove: "Re: [MTT users] Minor bug found in MTT 2 client side."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0269.php">Jeff Squyres: "Re: [MTT users] [devel-core] first steps with MTT"</a>
<li><strong>Reply:</strong> <a href="0269.php">Jeff Squyres: "Re: [MTT users] [devel-core] first steps with MTT"</a>
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
