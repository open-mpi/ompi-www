<?
$subject_val = "Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 12 20:49:23 2010" -->
<!-- isoreceived="20101113014923" -->
<!-- sent="Fri, 12 Nov 2010 20:49:17 -0500" -->
<!-- isosent="20101113014917" -->
<!-- name="DongInn Kim" -->
<!-- email="dikim_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Question about adding executable tests to the &amp;quot;Test Run&amp;quot; phase" -->
<!-- id="4CDDEE9D.9080300_at_osl.iu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CDD6688.8020008_at_osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase<br>
<strong>From:</strong> DongInn Kim (<em>dikim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-12 20:49:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0538.php">Jeff Squyres: "Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<li><strong>Previous message:</strong> <a href="0536.php">DongInn Kim: "[MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<li><strong>In reply to:</strong> <a href="0536.php">DongInn Kim: "[MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0538.php">Jeff Squyres: "Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I even tried to add my test dir containing the executable file ftb_watchdog to $ENV{PATH} but still mtt can not see ftb_watchdog executable.
<br>
<p>MTT::Test::Specify::Simple::Specify(/nfs/rinfs/san/homedirs/ftbteam/svn/mtt_trunk/lib/MTT/Test/Specify/Simple.pm:130):
<br>
130:                if (-x $t or $MTT::DoCommand::no_execute) {
<br>
&nbsp;&nbsp;DB&lt;4&gt; p $ENV{PATH}
<br>
/nfs/rinfs/san/homedirs/ftbteam/ftt-runs/odin/tmp/installs/Mw54/tests/ftb-test/components/examples:/nfs/rinfs/san/homedirs/ftbteam/ftt-runs/odin/tmp/installs/Mw54/install/sbin:/u/ftbteam/install/sbin/:/u/ftbteam/install/bin/:/u/ftbteam/bin/:/usr/lib64/qt-3.3/bin:/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin:/opt/CodeAnalyst/bin:/opt/CodeAnalyst/bin
<br>
&nbsp;&nbsp;DB&lt;5&gt; n
<br>
MTT::Test::Specify::Simple::Specify(/nfs/rinfs/san/homedirs/ftbteam/svn/mtt_trunk/lib/MTT/Test/Specify/Simple.pm:159):
<br>
159:        $ret-&gt;{test_result} = 1;
<br>
&nbsp;&nbsp;DB&lt;5&gt;
<br>
<p>Any help would be really appreciated.
<br>
<p>On 11/12/10 11:08 AM, DongInn Kim wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MTT::Test::Specify::Simple::Specify(/nfs/rinfs/san/homedirs/ftbteam/svn/mtt_trunk/lib/MTT/Test/Specify/Simple.pm:130):
</span><br>
<span class="quotelev1">&gt; 130:                if (-x $t or $MTT::DoCommand::no_execute) {
</span><br>
<span class="quotelev1">&gt;   DB&lt;51&gt; p $t
</span><br>
<span class="quotelev1">&gt; ftb_watchdog
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the step to add a executable test to a hash reference($ret) if $t is executable or $MTT::DoCommand::no_execute is true.
</span><br>
<span class="quotelev1">&gt; $t is pointing to &quot;ftb_watchdog&quot; which is one of the FTB test program, executable, but not on $PATH.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are we supposed to setup the $PATH to make the test program executable at this time? If so, does mtt have a simple way to do so?
</span><br>
<span class="quotelev1">&gt; What does &quot;$MTT::DoCommand::no_execute&quot; do actually?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For your convenience, I just copy and paste the part related to adding the executable tests to the hash reference in MTT/Test/Specify/Simple.pm
</span><br>
<span class="quotelev1">&gt;     # Now go through those groups and make the final list of tests to pass
</span><br>
<span class="quotelev1">&gt;     # upwards
</span><br>
<span class="quotelev1">&gt;     foreach my $group (keys %$params) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         # Go through the list of tests and create an entry for each
</span><br>
<span class="quotelev1">&gt;         foreach my $t (@{$params-&gt;{$group}-&gt;{tests}}) {
</span><br>
<span class="quotelev1">&gt;             # If it's good, add a hash with all the values into the
</span><br>
<span class="quotelev1">&gt;             # list of tests
</span><br>
<span class="quotelev1">&gt;             if (-x $t or $MTT::DoCommand::no_execute) {
</span><br>
<span class="quotelev1">&gt;                 my $one;
</span><br>
<span class="quotelev1">&gt;                 # Do a deep copy of the defaults
</span><br>
<span class="quotelev1">&gt;                 %{$one} = %{$config};
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 # Set the test name
</span><br>
<span class="quotelev1">&gt;                 $one-&gt;{executable} = $t;
</span><br>
<span class="quotelev1">&gt;                 Debug(&quot;   Adding test: $t (group: $group)\n&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 # Set all the other names that were specified for this
</span><br>
<span class="quotelev1">&gt;                 # group
</span><br>
<span class="quotelev1">&gt;                 foreach my $key (keys %{$params-&gt;{$group}}) {
</span><br>
<span class="quotelev1">&gt;                     next
</span><br>
<span class="quotelev1">&gt;                         if ($key eq &quot;tests&quot;);
</span><br>
<span class="quotelev1">&gt;                     if ($key =~ /^mpi_details:/) {
</span><br>
<span class="quotelev1">&gt;                         $key =~ m/^mpi_details:(.+)/;
</span><br>
<span class="quotelev1">&gt;                         $one-&gt;{mpi_details}-&gt;{$1} = $params-&gt;{$group}-&gt;{$key};
</span><br>
<span class="quotelev1">&gt;                     } else {
</span><br>
<span class="quotelev1">&gt;                         $one-&gt;{$key} = $params-&gt;{$group}-&gt;{$key};
</span><br>
<span class="quotelev1">&gt;                     }
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 # Save it on the final list of tests
</span><br>
<span class="quotelev1">&gt;                 push(@{$ret-&gt;{tests}}, $one);
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     # All done
</span><br>
<span class="quotelev1">&gt;     $ret-&gt;{test_result} = 1;
</span><br>
<span class="quotelev1">&gt;     return $ret;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
- DongInn
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0538.php">Jeff Squyres: "Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<li><strong>Previous message:</strong> <a href="0536.php">DongInn Kim: "[MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<li><strong>In reply to:</strong> <a href="0536.php">DongInn Kim: "[MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0538.php">Jeff Squyres: "Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
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
