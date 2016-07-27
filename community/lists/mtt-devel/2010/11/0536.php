<?
$subject_val = "[MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 12 11:08:45 2010" -->
<!-- isoreceived="20101112160845" -->
<!-- sent="Fri, 12 Nov 2010 11:08:40 -0500" -->
<!-- isosent="20101112160840" -->
<!-- name="DongInn Kim" -->
<!-- email="dikim_at_[hidden]" -->
<!-- subject="[MTT devel] Question about adding executable tests to the &amp;quot;Test Run&amp;quot; phase" -->
<!-- id="4CDD6688.8020008_at_osl.iu.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase<br>
<strong>From:</strong> DongInn Kim (<em>dikim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-12 11:08:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0537.php">DongInn Kim: "Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<li><strong>Previous message:</strong> <a href="0535.php">Jeff Squyres: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0537.php">DongInn Kim: "Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<li><strong>Reply:</strong> <a href="0537.php">DongInn Kim: "Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<li><strong>Reply:</strong> <a href="0538.php">Jeff Squyres: "Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>MTT::Test::Specify::Simple::Specify(/nfs/rinfs/san/homedirs/ftbteam/svn/mtt_trunk/lib/MTT/Test/Specify/Simple.pm:130):
<br>
130:                if (-x $t or $MTT::DoCommand::no_execute) {
<br>
&nbsp;&nbsp;DB&lt;51&gt; p $t
<br>
ftb_watchdog
<br>
<p><p>Here is the step to add a executable test to a hash reference($ret) if $t is executable or $MTT::DoCommand::no_execute is true.
<br>
$t is pointing to &quot;ftb_watchdog&quot; which is one of the FTB test program, executable, but not on $PATH.
<br>
<p>Are we supposed to setup the $PATH to make the test program executable at this time? If so, does mtt have a simple way to do so?
<br>
What does &quot;$MTT::DoCommand::no_execute&quot; do actually?
<br>
<p>For your convenience, I just copy and paste the part related to adding the executable tests to the hash reference in MTT/Test/Specify/Simple.pm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# Now go through those groups and make the final list of tests to pass
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# upwards
<br>
&nbsp;&nbsp;&nbsp;&nbsp;foreach my $group (keys %$params) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Go through the list of tests and create an entry for each
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach my $t (@{$params-&gt;{$group}-&gt;{tests}}) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# If it's good, add a hash with all the values into the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# list of tests
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (-x $t or $MTT::DoCommand::no_execute) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my $one;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Do a deep copy of the defaults
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;%{$one} = %{$config};
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Set the test name
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$one-&gt;{executable} = $t;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Debug(&quot;   Adding test: $t (group: $group)\n&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Set all the other names that were specified for this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# group
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foreach my $key (keys %{$params-&gt;{$group}}) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;next
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ($key eq &quot;tests&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ($key =~ /^mpi_details:/) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$key =~ m/^mpi_details:(.+)/;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$one-&gt;{mpi_details}-&gt;{$1} = $params-&gt;{$group}-&gt;{$key};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$one-&gt;{$key} = $params-&gt;{$group}-&gt;{$key};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Save it on the final list of tests
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;push(@{$ret-&gt;{tests}}, $one);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;# All done
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$ret-&gt;{test_result} = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return $ret;
<br>
}
<br>
<p><p><p>Regards,
<br>
<p><pre>
-- 
- DongInn
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0537.php">DongInn Kim: "Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<li><strong>Previous message:</strong> <a href="0535.php">Jeff Squyres: "Re: [MTT devel] Best way to run ftb_database_server and ftb_agent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0537.php">DongInn Kim: "Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<li><strong>Reply:</strong> <a href="0537.php">DongInn Kim: "Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<li><strong>Reply:</strong> <a href="0538.php">Jeff Squyres: "Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
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
