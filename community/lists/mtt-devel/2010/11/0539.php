<?
$subject_val = "Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 12 21:46:19 2010" -->
<!-- isoreceived="20101113024619" -->
<!-- sent="Fri, 12 Nov 2010 21:46:13 -0500" -->
<!-- isosent="20101113024613" -->
<!-- name="DongInn Kim" -->
<!-- email="dikim_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Question about adding executable tests to the &amp;quot;Test Run&amp;quot; phase" -->
<!-- id="4CDDFBF5.5030504_at_osl.iu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="76CAEE47-5E61-4D27-B692-59F98D1C2E95_at_cisco.com" -->
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
<strong>Date:</strong> 2010-11-12 21:46:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/12/0540.php">Joshua Hursey: "Re: [MTT devel] MTT Database Maintenance:  Yearly Reminder"</a>
<li><strong>Previous message:</strong> <a href="0538.php">Jeff Squyres: "Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<li><strong>In reply to:</strong> <a href="0538.php">Jeff Squyres: "Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ftb_watchdog is one of the ftb test programs and it is built during Test Build phase so it is compiled in MTT/Test/Build.pm.
<br>
It is installed installs/ftb-nightly-trunk--platform--0.6.2/tests/ftb-test/components where installs/ftb-nightly-trunk--platform--0.6.2/install is the place for the ftb installation.
<br>
<p><span class="quotelev1">&gt; So I think the real question is: who makes the ftb_watchdog executable?  Is it part of ./configure &amp;&amp; make in MPI::Install, or something else?
</span><br>
I believe that it is built in the Test Build phase and it is using the ompi_configure_argument option.
<br>
<p>#======================================================================                                               
<br>
# Install FTB phase
<br>
#======================================================================                                               
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
[MPI install: Platform]                                                                                               
<br>
mpi_get = ftb-nightly-trunk
<br>
mpi_details = OMPI                                                                                                    
<br>
save_stdout_on_success = 1
<br>
merge_stdout_stderr = 0                                                                                               
<br>
<p>module = OMPI                                                                                                         
<br>
ompi_vpath_mode = none
<br>
# CUSTOM: FTB supports parallel builds; you may want to tweak the j                                                   
<br>
# value up or down, depending on your IO environment.                                                                 
<br>
ompi_make_all_arguments = -j 4
<br>
ompi_make_check = 0                                                                                                   
<br>
# CUSTOM: Tweak this configuration line as necessary to specify what
<br>
# is relevant for your environment.  The lines between the EOT markers                                                
<br>
# will be squashed into a single line before running.                                                                 
<br>
ompi_compiler_name = gnu
<br>
ompi_compiler_version = &amp;get_gcc_version()                                                                            
<br>
ompi_configure_arguments = &lt;&lt;EOT                                                                                      
<br>
&quot;CFLAGS=-g -pipe&quot; --enable-debug \                                                                                    
<br>
--with-bstrap-server=&quot;odin.cs.indiana.edu&quot; \                                                                          
<br>
--with-bstrap-port=14455 \                                                                                            
<br>
--with-agent-port=10809                                                                                               
<br>
EOT
<br>
<p><p><p>Regards,
<br>
<p><p>On 11/12/10 9:33 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Nov 12, 2010, at 11:08 AM, DongInn Kim wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MTT::Test::Specify::Simple::Specify(/nfs/rinfs/san/homedirs/ftbteam/svn/mtt_trunk/lib/MTT/Test/Specify/Simple.pm:130):
</span><br>
<span class="quotelev2">&gt;&gt; 130:                if (-x $t or $MTT::DoCommand::no_execute) {
</span><br>
<span class="quotelev2">&gt;&gt;  DB&lt;51&gt; p $t
</span><br>
<span class="quotelev2">&gt;&gt; ftb_watchdog
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the step to add a executable test to a hash reference($ret) if $t is executable or $MTT::DoCommand::no_execute is true.
</span><br>
<span class="quotelev2">&gt;&gt; $t is pointing to &quot;ftb_watchdog&quot; which is one of the FTB test program, executable, but not on $PATH.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are we supposed to setup the $PATH to make the test program executable at this time? If so, does mtt have a simple way to do so?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Where is this executable built -- during MPI::Install?  Is it installed somewhere?  If you're using the GNU configure install module (or something that uses that module), then MTT should call &quot;./configure --prefix=&lt;foo&gt;&quot;, where &lt;foo&gt; is a directory that MTT created for installation.  It should then automatically add &lt;foo&gt;/bin to $PATH, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I think the real question is: who makes the ftb_watchdog executable?  Is it part of ./configure &amp;&amp; make in MPI::Install, or something else?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What does &quot;$MTT::DoCommand::no_execute&quot; do actually?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is the mtt_client's --no-execute flag.  It is basically like &quot;show me what you would do if you executed&quot; (but not quite).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For your convenience, I just copy and paste the part related to adding the executable tests to the hash reference in MTT/Test/Specify/Simple.pm
</span><br>
<span class="quotelev2">&gt;&gt;    # Now go through those groups and make the final list of tests to pass
</span><br>
<span class="quotelev2">&gt;&gt;    # upwards
</span><br>
<span class="quotelev2">&gt;&gt;    foreach my $group (keys %$params) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        # Go through the list of tests and create an entry for each
</span><br>
<span class="quotelev2">&gt;&gt;        foreach my $t (@{$params-&gt;{$group}-&gt;{tests}}) {
</span><br>
<span class="quotelev2">&gt;&gt;            # If it's good, add a hash with all the values into the
</span><br>
<span class="quotelev2">&gt;&gt;            # list of tests
</span><br>
<span class="quotelev2">&gt;&gt;            if (-x $t or $MTT::DoCommand::no_execute) {
</span><br>
<span class="quotelev2">&gt;&gt;                my $one;
</span><br>
<span class="quotelev2">&gt;&gt;                # Do a deep copy of the defaults
</span><br>
<span class="quotelev2">&gt;&gt;                %{$one} = %{$config};
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                # Set the test name
</span><br>
<span class="quotelev2">&gt;&gt;                $one-&gt;{executable} = $t;
</span><br>
<span class="quotelev2">&gt;&gt;                Debug(&quot;   Adding test: $t (group: $group)\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                # Set all the other names that were specified for this
</span><br>
<span class="quotelev2">&gt;&gt;                # group
</span><br>
<span class="quotelev2">&gt;&gt;                foreach my $key (keys %{$params-&gt;{$group}}) {
</span><br>
<span class="quotelev2">&gt;&gt;                    next
</span><br>
<span class="quotelev2">&gt;&gt;                        if ($key eq &quot;tests&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;                    if ($key =~ /^mpi_details:/) {
</span><br>
<span class="quotelev2">&gt;&gt;                        $key =~ m/^mpi_details:(.+)/;
</span><br>
<span class="quotelev2">&gt;&gt;                        $one-&gt;{mpi_details}-&gt;{$1} = $params-&gt;{$group}-&gt;{$key};
</span><br>
<span class="quotelev2">&gt;&gt;                    } else {
</span><br>
<span class="quotelev2">&gt;&gt;                        $one-&gt;{$key} = $params-&gt;{$group}-&gt;{$key};
</span><br>
<span class="quotelev2">&gt;&gt;                    }
</span><br>
<span class="quotelev2">&gt;&gt;                }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                # Save it on the final list of tests
</span><br>
<span class="quotelev2">&gt;&gt;                push(@{$ret-&gt;{tests}}, $one);
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    # All done
</span><br>
<span class="quotelev2">&gt;&gt;    $ret-&gt;{test_result} = 1;
</span><br>
<span class="quotelev2">&gt;&gt;    return $ret;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; - DongInn
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/12/0540.php">Joshua Hursey: "Re: [MTT devel] MTT Database Maintenance:  Yearly Reminder"</a>
<li><strong>Previous message:</strong> <a href="0538.php">Jeff Squyres: "Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
<li><strong>In reply to:</strong> <a href="0538.php">Jeff Squyres: "Re: [MTT devel] Question about adding executable tests to the &quot;Test Run&quot; phase"</a>
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
