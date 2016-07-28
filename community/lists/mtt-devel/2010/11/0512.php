<?
$subject_val = "Re: [MTT devel] question about the test run";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  4 08:46:19 2010" -->
<!-- isoreceived="20101104124619" -->
<!-- sent="Thu, 4 Nov 2010 08:46:12 -0400" -->
<!-- isosent="20101104124612" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] question about the test run" -->
<!-- id="668F2204-DFD3-4AB9-B9BA-905E35181DFC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CD25D68.7060808_at_osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [MTT devel] question about the test run<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-04 08:46:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0513.php">Joshua Hursey: "Re: [MTT devel] questions about MTT database from HDF"</a>
<li><strong>Previous message:</strong> <a href="0511.php">Jeff Squyres: "[MTT devel] questions about MTT database from HDF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0514.php">Jeff Squyres: "Re: [MTT devel] question about the test run"</a>
<li><strong>Reply:</strong> <a href="0514.php">Jeff Squyres: "Re: [MTT devel] question about the test run"</a>
<li><strong>Maybe reply:</strong> <a href="0515.php">DongInn Kim: "Re: [MTT devel] question about the test run"</a>
<li><strong>Maybe reply:</strong> <a href="0517.php">Jeff Squyres: "Re: [MTT devel] question about the test run"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm including the mtt-devel list in this conversation since Ethan/Jeff know the MTT client much better than I do, and might have some insight. DongInn/Abhishek it might be useful, considering some of the patches that you already have, to subscribe to the mtt-devel list.
<br>
<p>Just for context. DongInn and Abhishek are working on support for testing of the CIFTS FTB project with MTT. So this would be a non-MPI testing target. They are currently working through some of the issues with supporting an FTB target in the MTT client. I am working with them on getting a new server setup (i.e., database, reporter) for that project.
<br>
<p><p>On Nov 4, 2010, at 3:14 AM, DongInn Kim wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found that the several keys of the hash($MTT::Test::builds) are empty in the middle of mtt/lib/MTT/Test/Run.pm:123 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  DB&lt;12&gt; p Dumper(\%{$MTT::Test::builds})
</span><br>
<span class="quotelev1">&gt; $VAR1 = {
</span><br>
<span class="quotelev1">&gt;          '' =&gt; {
</span><br>
<span class="quotelev1">&gt;                  '' =&gt; {
</span><br>
<span class="quotelev1">&gt;                          'platform' =&gt; {
</span><br>
<span class="quotelev1">&gt;                                          'ftb-examples' =&gt; {
</span><br>
<span class="quotelev1">&gt;                                                              'mpi_version' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;                                                              'full_section_name' =&gt; 'test build: ftb-examples',
</span><br>
<span class="quotelev1">&gt;                                                              'prepend_path' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;                                                              'mpi_name' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;                                                              'refcount' =&gt; 0,
</span><br>
<span class="quotelev1">&gt;                                                              'env_modules' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;                                                              'unsetenv' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;                                                              'result_message' =&gt; 'Success',
</span><br>
<span class="quotelev1">&gt;                                                              'append_path' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;                                                              'mpi_install_simple_section_name' =&gt; 'platform',
</span><br>
<span class="quotelev1">&gt;                                                              'test_result' =&gt; 1,
</span><br>
<span class="quotelev1">&gt;                                                              'description' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;                                                              'exit_status' =&gt; 0,
</span><br>
<span class="quotelev1">&gt;                                                              'mpi_get_simple_section_name' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;                                                              'setenv' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;                                                              'simple_section_name' =&gt; 'ftb-examples',
</span><br>
<span class="quotelev1">&gt;                                                              'srcdir' =&gt; '/nfs/rinfs/san/homedirs/ftbteam/ftt-runs/odin/20101104-Nightly/pb_0/installs/5MsQ/tests/ftb-examples/components',
</span><br>
<span class="quotelev1">&gt;                                                              'start_timestamp' =&gt; 1288852206,
</span><br>
<span class="quotelev1">&gt;                                                              'mpi_install_id' =&gt; undef,
</span><br>
<span class="quotelev1">&gt;                                                              'test_get_simple_section_name' =&gt; 'ftb-examples'
</span><br>
<span class="quotelev1">&gt;                                                            }
</span><br>
<span class="quotelev1">&gt;                                        }
</span><br>
<span class="quotelev1">&gt;                        }
</span><br>
<span class="quotelev1">&gt;                }
</span><br>
<span class="quotelev1">&gt;        };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you know why the keys are empty and what keys should be added? After looking at the foreach loop, I could guess the first key would be for &quot;mpi-get-key&quot; and the second one for version (probably ftb version).
</span><br>
<span class="quotelev1">&gt; Those missing key entries are expected or something is wrong? If so, what did I wrong here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And also, I see several entries are undef in the &quot;ftb-examples&quot; hash. Is it normal or what?
</span><br>
<p>Ethan/Jeff probably know the hash structure better than I, so they might have some insight.
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; - DongInn
</span><br>
<p>------------------------------------
<br>
Joshua Hursey
<br>
Postdoctoral Research Associate
<br>
Oak Ridge National Laboratory
<br>
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0513.php">Joshua Hursey: "Re: [MTT devel] questions about MTT database from HDF"</a>
<li><strong>Previous message:</strong> <a href="0511.php">Jeff Squyres: "[MTT devel] questions about MTT database from HDF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0514.php">Jeff Squyres: "Re: [MTT devel] question about the test run"</a>
<li><strong>Reply:</strong> <a href="0514.php">Jeff Squyres: "Re: [MTT devel] question about the test run"</a>
<li><strong>Maybe reply:</strong> <a href="0515.php">DongInn Kim: "Re: [MTT devel] question about the test run"</a>
<li><strong>Maybe reply:</strong> <a href="0517.php">Jeff Squyres: "Re: [MTT devel] question about the test run"</a>
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
