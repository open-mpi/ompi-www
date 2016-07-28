<?
$subject_val = "Re: [MTT devel] mpi_details section with different scenarios for command line params";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 01:18:22 2008" -->
<!-- isoreceived="20081104061822" -->
<!-- sent="Tue, 4 Nov 2008 08:18:17 +0200" -->
<!-- isosent="20081104061817" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [MTT devel] mpi_details section with different scenarios for command line params" -->
<!-- id="b20b52800811032218k6c51773asd5ea9903dac6295a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1981B8FE-C7D1-4738-9A8E-9E931657F763_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] mpi_details section with different scenarios for command line params<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-04 01:18:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0298.php">Jeff Squyres: "Re: [MTT devel] mpi_details section with different scenarios for command line params"</a>
<li><strong>Previous message:</strong> <a href="0296.php">Mike Dubman: "Re: [MTT devel] mpi_details section with different scenarios for command line params"</a>
<li><strong>In reply to:</strong> <a href="0295.php">Jeff Squyres: "Re: [MTT devel] mpi_details section with different scenarios for	command line params"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0298.php">Jeff Squyres: "Re: [MTT devel] mpi_details section with different scenarios for command line params"</a>
<li><strong>Reply:</strong> <a href="0298.php">Jeff Squyres: "Re: [MTT devel] mpi_details section with different scenarios for command line params"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff,
<br>
Do you mean that you have a huge &quot;&amp;enumerate&quot; funclet with different command
<br>
lines for mpirun inside mpi_details section or smth else?
<br>
<p>Mike.
<br>
<p>On Mon, Nov 3, 2008 at 7:55 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; What exactly do you want to do?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, Cisco's MTT files simply list a huge number of different
</span><br>
<span class="quotelev1">&gt; mpirun command lines in the MPI Details section (25, in one case, IIRC).  So
</span><br>
<span class="quotelev1">&gt; I run lots of different cases for each MPI test (e.g., with leave pinned,
</span><br>
<span class="quotelev1">&gt; without leave pinned, ...etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 3, 2008, at 10:45 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Mon, Nov/03/2008 09:34:07AM, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Hello Guys,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Please suggest the proper way to handle the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Is there any way to run &quot;test run&quot; section with a list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  of &quot;mpi_details&quot; sections?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mike,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is currently no way to iterate over multiple
</span><br>
<span class="quotelev2">&gt;&gt; mpi_details sections, but there might be an acceptable
</span><br>
<span class="quotelev2">&gt;&gt; workaround. You can create a simple wrapper script to
</span><br>
<span class="quotelev2">&gt;&gt; iterate over variations of your MPI details section using
</span><br>
<span class="quotelev2">&gt;&gt; command line INI file overrides (see
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/mtt/wiki/INIOverrides">https://svn.open-mpi.org/trac/mtt/wiki/INIOverrides</a>). E.g.,
</span><br>
<span class="quotelev2">&gt;&gt; say you have the following MPI details section:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  [MPI details: Open MPI]
</span><br>
<span class="quotelev2">&gt;&gt;  foo = some default value
</span><br>
<span class="quotelev2">&gt;&gt;  bar = some default value
</span><br>
<span class="quotelev2">&gt;&gt;  exec = mpirun @foo@ @bar@ ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Using command-line INI overrides, you can iterate over a
</span><br>
<span class="quotelev2">&gt;&gt; series of values for &quot;foo&quot; and/or &quot;bar&quot;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  $ client/mtt --scratch /some/dir ...
</span><br>
<span class="quotelev2">&gt;&gt;  $ client/mtt --scratch /some/dir --test-run foo=abc ...
</span><br>
<span class="quotelev2">&gt;&gt;  $ client/mtt --scratch /some/dir --test-run foo=def ...
</span><br>
<span class="quotelev2">&gt;&gt;  $ client/mtt --scratch /some/dir --test-run bar=uvw ...
</span><br>
<span class="quotelev2">&gt;&gt;  $ client/mtt --scratch /some/dir --test-run bar=xyz ...
</span><br>
<span class="quotelev2">&gt;&gt;  ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note in the above example, we use the same scratch directory
</span><br>
<span class="quotelev2">&gt;&gt; for all the runs, and we run only the test run phase (via
</span><br>
<span class="quotelev2">&gt;&gt; the --test-run option) since we do not need to reinstall or
</span><br>
<span class="quotelev2">&gt;&gt; rebuild anything as we iterate over different command lines.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could the above be of use for what you're trying to do?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Or how to execute specific &quot;Test run&quot; section against
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  specific &quot;mpi_details&quot; section, where &quot;mpi_details&quot; can
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  have many different scenarios of command line
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  parameters (i.e. single mpi_details should be executed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  a number of times equal to the number of available
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  scenarios for this mpi_details)? Is that possible? (it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  is similar to the @np param treatment available inside
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  mpi_details section)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Mike.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0297/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0298.php">Jeff Squyres: "Re: [MTT devel] mpi_details section with different scenarios for command line params"</a>
<li><strong>Previous message:</strong> <a href="0296.php">Mike Dubman: "Re: [MTT devel] mpi_details section with different scenarios for command line params"</a>
<li><strong>In reply to:</strong> <a href="0295.php">Jeff Squyres: "Re: [MTT devel] mpi_details section with different scenarios for	command line params"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0298.php">Jeff Squyres: "Re: [MTT devel] mpi_details section with different scenarios for command line params"</a>
<li><strong>Reply:</strong> <a href="0298.php">Jeff Squyres: "Re: [MTT devel] mpi_details section with different scenarios for command line params"</a>
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
