<?
$subject_val = "Re: [MTT devel] mpi_details section with different scenarios for command line params";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 01:13:48 2008" -->
<!-- isoreceived="20081104061348" -->
<!-- sent="Tue, 4 Nov 2008 08:13:42 +0200" -->
<!-- isosent="20081104061342" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [MTT devel] mpi_details section with different scenarios for command line params" -->
<!-- id="b20b52800811032213o35065df4yc689bb34c51fb6bd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20081103154556.GJ12131_at_sun.com" -->
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
<strong>Date:</strong> 2008-11-04 01:13:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0297.php">Mike Dubman: "Re: [MTT devel] mpi_details section with different scenarios for command line params"</a>
<li><strong>Previous message:</strong> <a href="0295.php">Jeff Squyres: "Re: [MTT devel] mpi_details section with different scenarios for	command line params"</a>
<li><strong>In reply to:</strong> <a href="0294.php">Ethan Mallove: "Re: [MTT devel] mpi_details section with different scenarios for	command line params"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ethan,
<br>
Thanks for the tip, nice way to achieve multi-scenarios for single
<br>
mpi_details section.
<br>
<p><p>Mike.
<br>
<p>On Mon, Nov 3, 2008 at 5:45 PM, Ethan Mallove &lt;ethan.mallove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, Nov/03/2008 09:34:07AM, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    Hello Guys,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Please suggest the proper way to handle the following:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Is there any way to run &quot;test run&quot; section with a list
</span><br>
<span class="quotelev2">&gt; &gt;    of &quot;mpi_details&quot; sections?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mike,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is currently no way to iterate over multiple
</span><br>
<span class="quotelev1">&gt; mpi_details sections, but there might be an acceptable
</span><br>
<span class="quotelev1">&gt; workaround. You can create a simple wrapper script to
</span><br>
<span class="quotelev1">&gt; iterate over variations of your MPI details section using
</span><br>
<span class="quotelev1">&gt; command line INI file overrides (see
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/mtt/wiki/INIOverrides">https://svn.open-mpi.org/trac/mtt/wiki/INIOverrides</a>). E.g.,
</span><br>
<span class="quotelev1">&gt; say you have the following MPI details section:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  [MPI details: Open MPI]
</span><br>
<span class="quotelev1">&gt;  foo = some default value
</span><br>
<span class="quotelev1">&gt;  bar = some default value
</span><br>
<span class="quotelev1">&gt;  exec = mpirun @foo@ @bar@ ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using command-line INI overrides, you can iterate over a
</span><br>
<span class="quotelev1">&gt; series of values for &quot;foo&quot; and/or &quot;bar&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  $ client/mtt --scratch /some/dir ...
</span><br>
<span class="quotelev1">&gt;  $ client/mtt --scratch /some/dir --test-run foo=abc ...
</span><br>
<span class="quotelev1">&gt;  $ client/mtt --scratch /some/dir --test-run foo=def ...
</span><br>
<span class="quotelev1">&gt;  $ client/mtt --scratch /some/dir --test-run bar=uvw ...
</span><br>
<span class="quotelev1">&gt;  $ client/mtt --scratch /some/dir --test-run bar=xyz ...
</span><br>
<span class="quotelev1">&gt;  ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note in the above example, we use the same scratch directory
</span><br>
<span class="quotelev1">&gt; for all the runs, and we run only the test run phase (via
</span><br>
<span class="quotelev1">&gt; the --test-run option) since we do not need to reinstall or
</span><br>
<span class="quotelev1">&gt; rebuild anything as we iterate over different command lines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could the above be of use for what you're trying to do?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Or how to execute specific &quot;Test run&quot; section against
</span><br>
<span class="quotelev2">&gt; &gt;    specific &quot;mpi_details&quot; section, where &quot;mpi_details&quot; can
</span><br>
<span class="quotelev2">&gt; &gt;    have many different scenarios of command line
</span><br>
<span class="quotelev2">&gt; &gt;    parameters (i.e. single mpi_details should be executed
</span><br>
<span class="quotelev2">&gt; &gt;    a number of times equal to the number of available
</span><br>
<span class="quotelev2">&gt; &gt;    scenarios for this mpi_details)? Is that possible? (it
</span><br>
<span class="quotelev2">&gt; &gt;    is similar to the @np param treatment available inside
</span><br>
<span class="quotelev2">&gt; &gt;    mpi_details section)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Mike.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0296/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0297.php">Mike Dubman: "Re: [MTT devel] mpi_details section with different scenarios for command line params"</a>
<li><strong>Previous message:</strong> <a href="0295.php">Jeff Squyres: "Re: [MTT devel] mpi_details section with different scenarios for	command line params"</a>
<li><strong>In reply to:</strong> <a href="0294.php">Ethan Mallove: "Re: [MTT devel] mpi_details section with different scenarios for	command line params"</a>
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
