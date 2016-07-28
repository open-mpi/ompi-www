<?
$subject_val = "Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 12 21:33:55 2010" -->
<!-- isoreceived="20101113023355" -->
<!-- sent="Fri, 12 Nov 2010 21:33:50 -0500" -->
<!-- isosent="20101113023350" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Question about adding executable tests to the &amp;quot;Test Run&amp;quot; phase" -->
<!-- id="76CAEE47-5E61-4D27-B692-59F98D1C2E95_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-12 21:33:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0539.php">DongInn Kim: "Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<li><strong>Previous message:</strong> <a href="0537.php">DongInn Kim: "Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<li><strong>In reply to:</strong> <a href="0536.php">DongInn Kim: "[MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0539.php">DongInn Kim: "Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<li><strong>Reply:</strong> <a href="0539.php">DongInn Kim: "Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 12, 2010, at 11:08 AM, DongInn Kim wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MTT::Test::Specify::Simple::Specify(/nfs/rinfs/san/homedirs/ftbteam/svn/mtt_trunk/lib/MTT/Test/Specify/Simple.pm:130):
</span><br>
<span class="quotelev1">&gt; 130:                if (-x $t or $MTT::DoCommand::no_execute) {
</span><br>
<span class="quotelev1">&gt;  DB&lt;51&gt; p $t
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
<p>Where is this executable built -- during MPI::Install?  Is it installed somewhere?  If you're using the GNU configure install module (or something that uses that module), then MTT should call &quot;./configure --prefix=&lt;foo&gt;&quot;, where &lt;foo&gt; is a directory that MTT created for installation.  It should then automatically add &lt;foo&gt;/bin to $PATH, etc.
<br>
<p>So I think the real question is: who makes the ftb_watchdog executable?  Is it part of ./configure &amp;&amp; make in MPI::Install, or something else?
<br>
<p><span class="quotelev1">&gt; What does &quot;$MTT::DoCommand::no_execute&quot; do actually?
</span><br>
<p>It is the mtt_client's --no-execute flag.  It is basically like &quot;show me what you would do if you executed&quot; (but not quite).
<br>
<p><span class="quotelev1">&gt; For your convenience, I just copy and paste the part related to adding the executable tests to the hash reference in MTT/Test/Specify/Simple.pm
</span><br>
<span class="quotelev1">&gt;    # Now go through those groups and make the final list of tests to pass
</span><br>
<span class="quotelev1">&gt;    # upwards
</span><br>
<span class="quotelev1">&gt;    foreach my $group (keys %$params) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        # Go through the list of tests and create an entry for each
</span><br>
<span class="quotelev1">&gt;        foreach my $t (@{$params-&gt;{$group}-&gt;{tests}}) {
</span><br>
<span class="quotelev1">&gt;            # If it's good, add a hash with all the values into the
</span><br>
<span class="quotelev1">&gt;            # list of tests
</span><br>
<span class="quotelev1">&gt;            if (-x $t or $MTT::DoCommand::no_execute) {
</span><br>
<span class="quotelev1">&gt;                my $one;
</span><br>
<span class="quotelev1">&gt;                # Do a deep copy of the defaults
</span><br>
<span class="quotelev1">&gt;                %{$one} = %{$config};
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                # Set the test name
</span><br>
<span class="quotelev1">&gt;                $one-&gt;{executable} = $t;
</span><br>
<span class="quotelev1">&gt;                Debug(&quot;   Adding test: $t (group: $group)\n&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                # Set all the other names that were specified for this
</span><br>
<span class="quotelev1">&gt;                # group
</span><br>
<span class="quotelev1">&gt;                foreach my $key (keys %{$params-&gt;{$group}}) {
</span><br>
<span class="quotelev1">&gt;                    next
</span><br>
<span class="quotelev1">&gt;                        if ($key eq &quot;tests&quot;);
</span><br>
<span class="quotelev1">&gt;                    if ($key =~ /^mpi_details:/) {
</span><br>
<span class="quotelev1">&gt;                        $key =~ m/^mpi_details:(.+)/;
</span><br>
<span class="quotelev1">&gt;                        $one-&gt;{mpi_details}-&gt;{$1} = $params-&gt;{$group}-&gt;{$key};
</span><br>
<span class="quotelev1">&gt;                    } else {
</span><br>
<span class="quotelev1">&gt;                        $one-&gt;{$key} = $params-&gt;{$group}-&gt;{$key};
</span><br>
<span class="quotelev1">&gt;                    }
</span><br>
<span class="quotelev1">&gt;                }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                # Save it on the final list of tests
</span><br>
<span class="quotelev1">&gt;                push(@{$ret-&gt;{tests}}, $one);
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    # All done
</span><br>
<span class="quotelev1">&gt;    $ret-&gt;{test_result} = 1;
</span><br>
<span class="quotelev1">&gt;    return $ret;
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; - DongInn
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0539.php">DongInn Kim: "Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<li><strong>Previous message:</strong> <a href="0537.php">DongInn Kim: "Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<li><strong>In reply to:</strong> <a href="0536.php">DongInn Kim: "[MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0539.php">DongInn Kim: "Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<li><strong>Reply:</strong> <a href="0539.php">DongInn Kim: "Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
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
