<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 23 18:03:19 2007" -->
<!-- isoreceived="20070123230319" -->
<!-- sent="Tue, 23 Jan 2007 18:03:09 -0500" -->
<!-- isosent="20070123230309" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] [devel-core] first steps with MTT" -->
<!-- id="34EE7CF3-D0DA-4388-92A7-862747FFFC25_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070123154109.GA42208_at_sr1-ubur-07.East.Sun.COM" -->
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
<strong>Date:</strong> 2007-01-23 18:03:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0270.php">Ethan Mallove: "[MTT users] Deadline to go back to &quot;testers&quot; branch"</a>
<li><strong>Previous message:</strong> <a href="0268.php">Ethan Mallove: "Re: [MTT users] [devel-core] first steps with MTT"</a>
<li><strong>In reply to:</strong> <a href="0268.php">Ethan Mallove: "Re: [MTT users] [devel-core] first steps with MTT"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 23, 2007, at 10:41 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev2">&gt;&gt; After our first experiments with MTT I'd like to ask a
</span><br>
<span class="quotelev2">&gt;&gt; couple of questions. I guess, if I put them here the
</span><br>
<span class="quotelev2">&gt;&gt; answers will go to the list archive as well.  maybe I can
</span><br>
<span class="quotelev2">&gt;&gt; write a wiki page for the first steps towards MTT, too.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This leads me to the first question? what's the
</span><br>
<span class="quotelev2">&gt;&gt; login/passwd for the wiki?  And how about the central data
</span><br>
<span class="quotelev2">&gt;&gt; base for results? probably that answers should not go to
</span><br>
<span class="quotelev2">&gt;&gt; the list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's anonymous read-only access to the wiki.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/mtt/wiki">https://svn.open-mpi.org/trac/mtt/wiki</a>
</span><br>
<p>Also, if you have an SVN account with Open MPI, you should be able to  
<br>
login to the wiki and write to the pages, submit tickets, etc.  I  
<br>
honestly don't remember if we set you up with an SVN account -- did we?
<br>
<p><span class="quotelev1">&gt; You need an HTTP account for sending up results to the
</span><br>
<span class="quotelev1">&gt; database. username's are organization names (e.g., cisco,
</span><br>
<span class="quotelev1">&gt; sun, lanl, etc.). What do you want as your username?
</span><br>
<span class="quotelev1">&gt; &quot;tu-dresden&quot; or &quot;zih&quot;?
</span><br>
<p>These are suggestions, btw.  Feel free to pick your organization's  
<br>
username, but we try to make them related to the actual organization  
<br>
name (e.g., mine is &quot;cisco&quot;).
<br>
<p><span class="quotelev2">&gt;&gt; So far I'm using text output only. How can I set up an own
</span><br>
<span class="quotelev2">&gt;&gt; data base? There are some PHP files in the MTT tarball. Do
</span><br>
<span class="quotelev2">&gt;&gt; they initialize data base and tables and so on? is there
</span><br>
<span class="quotelev2">&gt;&gt; any script for this? Does is require mysql or postgres or
</span><br>
<span class="quotelev2">&gt;&gt; any of the two?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Postgres, but the server-side is already taken care of.
</span><br>
<span class="quotelev1">&gt; There's a centralized database setup at Indiana Univ, and
</span><br>
<span class="quotelev1">&gt; the MTT test results can be viewed here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mtt">http://www.open-mpi.org/mtt</a>.
</span><br>
<p>We *could* tell you how to setup your own db at Dresden (that's the  
<br>
eventual goal -- let anyone host their own MTT database who wants  
<br>
to), but it would be great if you could use our central database to  
<br>
do more testing of OMPI.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I did my own test scripts for a simple test
</span><br>
<span class="quotelev2">&gt;&gt; application I followed the example INI files provided and
</span><br>
<span class="quotelev2">&gt;&gt; some pieces of documentation and the Perl code. Is there a
</span><br>
<span class="quotelev2">&gt;&gt; &quot;real&quot; documentation about all bells and whistles? If not,
</span><br>
<span class="quotelev2">&gt;&gt; could we write one or at least provide a step-by-step
</span><br>
<span class="quotelev2">&gt;&gt; guide for beginners?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The wiki is a good starting point. There's links to a bunch
</span><br>
<span class="quotelev1">&gt; of stuff on the MTT home wiki page here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/mtt/wiki">https://svn.open-mpi.org/trac/mtt/wiki</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The closest thing to a Beginner's Guide to using the MTT
</span><br>
<span class="quotelev1">&gt; client would be:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/mtt/wiki/MTTOverview">https://svn.open-mpi.org/trac/mtt/wiki/MTTOverview</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I want to do some tests whether a test run was
</span><br>
<span class="quotelev2">&gt;&gt; successful of not, which way would you suggest. Either
</span><br>
<span class="quotelev2">&gt;&gt; doing it in bash commands placed in the INI file or rather
</span><br>
<span class="quotelev2">&gt;&gt; write new Perl modules that will be specific to my
</span><br>
<span class="quotelev2">&gt;&gt; application? The trivial test case does part of both,
</span><br>
<span class="quotelev2">&gt;&gt; doesn't it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; B. new Perl modules :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But the test suites that are listed in the
</span><br>
<span class="quotelev1">&gt; samples/ompi-core-templates.ini file already have modules in
</span><br>
<span class="quotelev1">&gt; place to Get (e.g., svn export), Build (e.g., make), Run
</span><br>
<span class="quotelev1">&gt; (mpirun), and Analyze (prepare test results for the
</span><br>
<span class="quotelev1">&gt; database).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you add a *new* test suite to ompi-tests, the existing
</span><br>
<span class="quotelev1">&gt; modules should be able to do all of the above (with the
</span><br>
<span class="quotelev1">&gt; exception of Analyze, if the test outputs performance data).
</span><br>
<span class="quotelev1">&gt; You just might need to add some special conditions in the [Test
</span><br>
<span class="quotelev1">&gt; run: foo] section of the INI file to indicate e.g., whether
</span><br>
<span class="quotelev1">&gt; some tests are *supposed* to fail, some tests take longer
</span><br>
<span class="quotelev1">&gt; time span to run, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Furthermore, there is a caching scheme for test results
</span><br>
<span class="quotelev2">&gt;&gt; between successive runs. MTT avoids test that were run
</span><br>
<span class="quotelev2">&gt;&gt; before. Where does it store this information? How to
</span><br>
<span class="quotelev2">&gt;&gt; explicitly clear it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The cached data is stored as serialized Perl variables
</span><br>
<span class="quotelev1">&gt; down in the scratch directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The --force option &quot;forces&quot; MTT to run everything,
</span><br>
<span class="quotelev1">&gt; regardless of whether it's been run before.
</span><br>
<p>Or you can whack the scratch directory and then all the cached data  
<br>
is also whacked.
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As one of our current goals, I'm integrating VampirTrace
</span><br>
<span class="quotelev2">&gt;&gt; into the MTT test cycle. The most straight forward way
</span><br>
<span class="quotelev2">&gt;&gt; would be to have a test application tarball which includes
</span><br>
<span class="quotelev2">&gt;&gt; VampirTrace sources, wouldn't it? Would it be feasible to
</span><br>
<span class="quotelev2">&gt;&gt; have two download clauses in a single test-get phase and
</span><br>
<span class="quotelev2">&gt;&gt; two successive build clauses in a single test-build
</span><br>
<span class="quotelev2">&gt;&gt; phase? Could this work with the current macros?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know of a user that's done two fetches/compiles in a
</span><br>
<span class="quotelev1">&gt; single section yet. Why do you need to download/build twice
</span><br>
<span class="quotelev1">&gt; for a single test suite?  (There's nothing preventing this,
</span><br>
<span class="quotelev1">&gt; just wondering.) I think what you want would look something
</span><br>
<span class="quotelev1">&gt; like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test get: VampirTrace]
</span><br>
<span class="quotelev1">&gt; url1 = <a href="http://www.foo.com">http://www.foo.com</a>
</span><br>
<span class="quotelev1">&gt; url2 = <a href="http://www.bar.com">http://www.bar.com</a>
</span><br>
<span class="quotelev1">&gt; module = Tarball
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test build: VampirTrace]
</span><br>
<span class="quotelev1">&gt; module = Shell
</span><br>
<span class="quotelev1">&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; make this
</span><br>
<span class="quotelev1">&gt; make that
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note: all the test suites currently setup to be used with
</span><br>
<span class="quotelev1">&gt; MTT, are fetched with &quot;svn export&quot; out of the ompi-tests SVN
</span><br>
<span class="quotelev1">&gt; repository (except the trivial tests, which has its test
</span><br>
<span class="quotelev1">&gt; sources embedded in MTT).  We'd need to create a
</span><br>
<span class="quotelev1">&gt; Test/Get/Tarball.pm module, if you don't want VampirTrace
</span><br>
<span class="quotelev1">&gt; added to ompi-tests.
</span><br>
<p>This shouldn't be a problem.  And we'll need to add support for the  
<br>
multiple downloads, but that should not be hard at all.  Let us know  
<br>
what you need and we can do it.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0270.php">Ethan Mallove: "[MTT users] Deadline to go back to &quot;testers&quot; branch"</a>
<li><strong>Previous message:</strong> <a href="0268.php">Ethan Mallove: "Re: [MTT users] [devel-core] first steps with MTT"</a>
<li><strong>In reply to:</strong> <a href="0268.php">Ethan Mallove: "Re: [MTT users] [devel-core] first steps with MTT"</a>
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
