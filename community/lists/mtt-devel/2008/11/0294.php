<?
$subject_val = "Re: [MTT devel] mpi_details section with different scenarios for	command line params";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 10:46:01 2008" -->
<!-- isoreceived="20081103154601" -->
<!-- sent="Mon, 3 Nov 2008 10:45:56 -0500" -->
<!-- isosent="20081103154556" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] mpi_details section with different scenarios for	command line params" -->
<!-- id="20081103154556.GJ12131_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="b20b52800811022334t3f4ccdebu5cf6ff8eb0455e30_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] mpi_details section with different scenarios for	command line params<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-03 10:45:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0295.php">Jeff Squyres: "Re: [MTT devel] mpi_details section with different scenarios for	command line params"</a>
<li><strong>Previous message:</strong> <a href="0293.php">Mike Dubman: "[MTT devel] mpi_details section with different scenarios for command line params"</a>
<li><strong>In reply to:</strong> <a href="0293.php">Mike Dubman: "[MTT devel] mpi_details section with different scenarios for command line params"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0295.php">Jeff Squyres: "Re: [MTT devel] mpi_details section with different scenarios for	command line params"</a>
<li><strong>Reply:</strong> <a href="0295.php">Jeff Squyres: "Re: [MTT devel] mpi_details section with different scenarios for	command line params"</a>
<li><strong>Reply:</strong> <a href="0296.php">Mike Dubman: "Re: [MTT devel] mpi_details section with different scenarios for command line params"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Nov/03/2008 09:34:07AM, Mike Dubman wrote:
<br>
<span class="quotelev1">&gt;    Hello Guys, 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Please suggest the proper way to handle the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Is there any way to run &quot;test run&quot; section with a list
</span><br>
<span class="quotelev1">&gt;    of &quot;mpi_details&quot; sections?
</span><br>
<p>Mike,
<br>
<p>There is currently no way to iterate over multiple
<br>
mpi_details sections, but there might be an acceptable
<br>
workaround. You can create a simple wrapper script to
<br>
iterate over variations of your MPI details section using
<br>
command line INI file overrides (see
<br>
<a href="https://svn.open-mpi.org/trac/mtt/wiki/INIOverrides">https://svn.open-mpi.org/trac/mtt/wiki/INIOverrides</a>). E.g.,
<br>
say you have the following MPI details section:
<br>
<p>&nbsp;&nbsp;[MPI details: Open MPI]
<br>
&nbsp;&nbsp;foo = some default value
<br>
&nbsp;&nbsp;bar = some default value
<br>
&nbsp;&nbsp;exec = mpirun @foo@ @bar@ ...
<br>
&nbsp;&nbsp;
<br>
Using command-line INI overrides, you can iterate over a
<br>
series of values for &quot;foo&quot; and/or &quot;bar&quot;:
<br>
<p>&nbsp;&nbsp;$ client/mtt --scratch /some/dir ...
<br>
&nbsp;&nbsp;$ client/mtt --scratch /some/dir --test-run foo=abc ...
<br>
&nbsp;&nbsp;$ client/mtt --scratch /some/dir --test-run foo=def ...
<br>
&nbsp;&nbsp;$ client/mtt --scratch /some/dir --test-run bar=uvw ...
<br>
&nbsp;&nbsp;$ client/mtt --scratch /some/dir --test-run bar=xyz ...
<br>
&nbsp;&nbsp;...
<br>
<p>Note in the above example, we use the same scratch directory
<br>
for all the runs, and we run only the test run phase (via
<br>
the --test-run option) since we do not need to reinstall or
<br>
rebuild anything as we iterate over different command lines.
<br>
<p>Could the above be of use for what you're trying to do?
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Or how to execute specific &quot;Test run&quot; section against
</span><br>
<span class="quotelev1">&gt;    specific &quot;mpi_details&quot; section, where &quot;mpi_details&quot; can
</span><br>
<span class="quotelev1">&gt;    have many different scenarios of command line
</span><br>
<span class="quotelev1">&gt;    parameters (i.e. single mpi_details should be executed
</span><br>
<span class="quotelev1">&gt;    a number of times equal to the number of available
</span><br>
<span class="quotelev1">&gt;    scenarios for this mpi_details)? Is that possible? (it
</span><br>
<span class="quotelev1">&gt;    is similar to the @np param treatment available inside
</span><br>
<span class="quotelev1">&gt;    mpi_details section)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Mike.
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0295.php">Jeff Squyres: "Re: [MTT devel] mpi_details section with different scenarios for	command line params"</a>
<li><strong>Previous message:</strong> <a href="0293.php">Mike Dubman: "[MTT devel] mpi_details section with different scenarios for command line params"</a>
<li><strong>In reply to:</strong> <a href="0293.php">Mike Dubman: "[MTT devel] mpi_details section with different scenarios for command line params"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0295.php">Jeff Squyres: "Re: [MTT devel] mpi_details section with different scenarios for	command line params"</a>
<li><strong>Reply:</strong> <a href="0295.php">Jeff Squyres: "Re: [MTT devel] mpi_details section with different scenarios for	command line params"</a>
<li><strong>Reply:</strong> <a href="0296.php">Mike Dubman: "Re: [MTT devel] mpi_details section with different scenarios for command line params"</a>
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
