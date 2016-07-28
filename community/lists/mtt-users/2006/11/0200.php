<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov  6 10:16:04 2006" -->
<!-- isoreceived="20061106151604" -->
<!-- sent="Mon, 6 Nov 2006 09:59:02 -0500" -->
<!-- isosent="20061106145902" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT users] Valid INI file and MPI Details section" -->
<!-- id="C8DD2475-97E4-4A0D-A837-CF418E8A221C_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DAF0345A-43EF-4431-91B4-4A75BCE59419_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-06 09:59:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0201.php">Ethan Mallove: "Re: [MTT users] reporter weirdness"</a>
<li><strong>Previous message:</strong> <a href="0199.php">Jeff Squyres: "Re: [MTT users] Valid INI file and MPI Details section"</a>
<li><strong>In reply to:</strong> <a href="0199.php">Jeff Squyres: "Re: [MTT users] Valid INI file and MPI Details section"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0205.php">Jeff Squyres: "Re: [MTT users] Valid INI file and MPI Details section"</a>
<li><strong>Reply:</strong> <a href="0205.php">Jeff Squyres: "Re: [MTT users] Valid INI file and MPI Details section"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 6, 2006, at 7:45 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Nov 3, 2006, at 2:25 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have an INI File that looks something like what is enclose at the
</span><br>
<span class="quotelev2">&gt;&gt; end of this message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I have multiple MPI Details sections. It seems like only the first
</span><br>
<span class="quotelev2">&gt;&gt; one is running. Do I have to list them out somewhere?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes.  In the MPI Get section, you have to list an &quot;mpi_details&quot; field
</span><br>
<span class="quotelev1">&gt; that says which MPI Details section applies to this MPI.  We don't
</span><br>
<span class="quotelev1">&gt; currently allow a comma-delimited list of Details section names, but
</span><br>
<span class="quotelev1">&gt; that could be added if you want/need.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As a side question:
</span><br>
<span class="quotelev2">&gt;&gt; Instead of using multiple MPI Details sections, if I use a single MPI
</span><br>
<span class="quotelev2">&gt;&gt; Details section and told MTT to iterate over the parameters to mpirun
</span><br>
<span class="quotelev2">&gt;&gt; at what point in the aggregation chain does this happen?
</span><br>
<span class="quotelev2">&gt;&gt; Meaning will I see something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We hadn't really anticipated having multiple MPI details sections
</span><br>
<span class="quotelev1">&gt; that were relevant for a single MPI -- we had intended the MPI
</span><br>
<span class="quotelev1">&gt; details section to provide the generic method of how to run with that
</span><br>
<span class="quotelev1">&gt; MPI (e.g., mpirun command line differences between different MPI
</span><br>
<span class="quotelev1">&gt; implementations).  But that could be changed if it would be helpful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ethan made a relevant comment here as well.
</span><br>
<p>So if I were to want to do this &lt;in a kludgy way&gt; I would have to  
<br>
have something like:
<br>
mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
<br>
[MPI Get: trunk BTL_V1]
<br>
MPI_Details= Open MPI BTL V1
<br>
[MPI Get: trunk BTL_V2]
<br>
MPI_Details= Open MPI BTL V2
<br>
<p>[MPI Details: Open MPI BTL V1]
<br>
mpirun -mca btl tcp,self
<br>
[MPI Details: Open MPI BTL V2]
<br>
mpirun -mca btl mx,self
<br>
mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
<br>
<p>Similar to what we would have to do in order to list a run with Open  
<br>
MPI and LAM/MPI in the same INI file:
<br>
mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
<br>
[MPI Get: trunk OMPI]
<br>
MPI_Details= Open MPI
<br>
[MPI Get: trunk LAM]
<br>
MPI_Details= LAM/MPI
<br>
<p>[MPI Details: Open MPI]
<br>
mpirun -mca btl tcp,self
<br>
[MPI Details: LAM/MPI]
<br>
mpirun -ssi rpi tcp
<br>
mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Building trunk
</span><br>
<span class="quotelev2">&gt;&gt; Running trivial
</span><br>
<span class="quotelev2">&gt;&gt; Runing mpirun -mca btl tcp,self
</span><br>
<span class="quotelev2">&gt;&gt; Runing mpirun -mca btl mx,self
</span><br>
<span class="quotelev2">&gt;&gt; Runing mpirun -mca btl mvapi,self
</span><br>
<span class="quotelev2">&gt;&gt; Running intel
</span><br>
<span class="quotelev2">&gt;&gt; Runing mpirun -mca btl tcp,self
</span><br>
<span class="quotelev2">&gt;&gt; Runing mpirun -mca btl mx,self
</span><br>
<span class="quotelev2">&gt;&gt; Runing mpirun -mca btl mvapi,self
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You will see this ^^^.  The way it works is that the Test Run phase
</span><br>
<span class="quotelev1">&gt; will iterate through the successful Test Builds (which depends on the
</span><br>
<span class="quotelev1">&gt; successful Test Gets and MPI Installs, which, in turn, depends on
</span><br>
<span class="quotelev1">&gt; successful MPI Gets).  When it identifies a test to run, it looks up
</span><br>
<span class="quotelev1">&gt; the corresponding MPI Install section, gets the MPI Details section,
</span><br>
<span class="quotelev1">&gt; and creates one or more command lines to execute.  So a single Test
</span><br>
<span class="quotelev1">&gt; Run corresponds to a single Test Build / MPI Install / MPI Get tuple,
</span><br>
<span class="quotelev1">&gt; and therefore results in a single functlet for the command line to
</span><br>
<span class="quotelev1">&gt; execute.
</span><br>
<p>Cool. Just wanted to know what to expect from MTT.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; or will I see
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Building trunk
</span><br>
<span class="quotelev2">&gt;&gt; Runing mpirun -mca btl tcp,self
</span><br>
<span class="quotelev2">&gt;&gt; Running trivial
</span><br>
<span class="quotelev2">&gt;&gt; Running intel
</span><br>
<span class="quotelev2">&gt;&gt; Runing mpirun -mca btl mx,self
</span><br>
<span class="quotelev2">&gt;&gt; Running trivial
</span><br>
<span class="quotelev2">&gt;&gt; Running intel
</span><br>
<span class="quotelev2">&gt;&gt; Runing mpirun -mca btl mvapi,self
</span><br>
<span class="quotelev2">&gt;&gt; Running trivial
</span><br>
<span class="quotelev2">&gt;&gt; Running intel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not quite sure I understand this above example ordering -- I see
</span><br>
<span class="quotelev1">&gt; the &quot;mpirun&quot; lines before the &quot;Running &lt;testname&gt;&quot; lines.  Did you  
</span><br>
<span class="quotelev1">&gt; mean:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Building trunk
</span><br>
<span class="quotelev1">&gt; Running trivial
</span><br>
<span class="quotelev1">&gt; Runing mpirun -mca btl tcp,self
</span><br>
<span class="quotelev1">&gt; Running intel
</span><br>
<span class="quotelev1">&gt; Runing mpirun -mca btl tcp,self
</span><br>
<span class="quotelev1">&gt; Running trivial
</span><br>
<span class="quotelev1">&gt; Runing mpirun -mca btl mx,self
</span><br>
<span class="quotelev1">&gt; Running intel
</span><br>
<span class="quotelev1">&gt; Runing mpirun -mca btl mx,self
</span><br>
<span class="quotelev1">&gt; Running trivial
</span><br>
<span class="quotelev1">&gt; Runing mpirun -mca btl mvapi,self
</span><br>
<span class="quotelev1">&gt; Running intel
</span><br>
<span class="quotelev1">&gt; Runing mpirun -mca btl mvapi,self
</span><br>
<p>Yea that's what I was thinking.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would actually prefer the last because if something is broken with
</span><br>
<span class="quotelev2">&gt;&gt; the IB interconnect it doesn't slow down the other tests from
</span><br>
<span class="quotelev2">&gt;&gt; reporting. E.g. I can prioritize a bit in the INI file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I could see that.  Unfortunately, that's not currently how the run
</span><br>
<span class="quotelev1">&gt; engine is structured.
</span><br>
<p>Thanks :)
<br>
<p>We'll find a way to make it work, though that maybe a good task for  
<br>
some one else to experiment with at IU.
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mmmmmmmmmmmmmmmmmmmmmmmmmmmmmm
</span><br>
<span class="quotelev2">&gt;&gt; #==================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; # Overall configuration
</span><br>
<span class="quotelev2">&gt;&gt; #==================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [MTT]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hostfile =
</span><br>
<span class="quotelev2">&gt;&gt; hostlist =
</span><br>
<span class="quotelev2">&gt;&gt; max_np =
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #==================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; # MPI get phase
</span><br>
<span class="quotelev2">&gt;&gt; #==================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [MPI get: ompi-nightly-trunk]
</span><br>
<span class="quotelev2">&gt;&gt; mpi_details = Open MPI
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; module = OMPI_Snapshot
</span><br>
<span class="quotelev2">&gt;&gt; ompi_snapshot_url = <a href="http://www.open-mpi.org/nightly/trunk">http://www.open-mpi.org/nightly/trunk</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #==================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; # Install MPI phase
</span><br>
<span class="quotelev2">&gt;&gt; #==================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [MPI install: odin 32 bit gcc]
</span><br>
<span class="quotelev2">&gt;&gt; mpi_get = ompi-nightly-trunk
</span><br>
<span class="quotelev2">&gt;&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev2">&gt;&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev2">&gt;&gt; vpath_mode = none
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make_all_arguments = -j 6
</span><br>
<span class="quotelev2">&gt;&gt; make_check = 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; compiler_name = gnu
</span><br>
<span class="quotelev2">&gt;&gt; compiler_version = &amp;shell(&quot;gcc --version | head -n 1 | awk '{ print \
</span><br>
<span class="quotelev2">&gt;&gt; $3 }'&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; configure_arguments = \
</span><br>
<span class="quotelev2">&gt;&gt; FCFLAGS=-m32 FFLAGS=-m32 CFLAGS=-m32 CXXFLAGS=-m32 \
</span><br>
<span class="quotelev2">&gt;&gt; --with-wrapper-cflags=-m32 --with-wrapper-cxxflags=-m32 --with-
</span><br>
<span class="quotelev2">&gt;&gt; wrapper-fflags=-m32 --with-wrapper-fcflags=-m32
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; module = OMPI
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #==================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; # MPI run details
</span><br>
<span class="quotelev2">&gt;&gt; #==================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [MPI Details: Open MPI tcp sm]
</span><br>
<span class="quotelev2">&gt;&gt; exec = mpirun @hosts@ -mca btl tcp,sm,self -np &amp;test_np() --prefix
</span><br>
<span class="quotelev2">&gt;&gt; &amp;test_prefix() &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Yes, all these quotes are necessary.  Don't mess with them!
</span><br>
<span class="quotelev2">&gt;&gt; hosts = &amp;if(&amp;have_hostfile(), &quot;&amp;join(&quot;--hostfile &quot;, &quot;&amp;hostfile 
</span><br>
<span class="quotelev2">&gt;&gt; ()&quot;)&quot;, \
</span><br>
<span class="quotelev2">&gt;&gt;              &quot;&amp;if(&amp;have_hostlist(), &quot;&amp;join(&quot;--host &quot;, &quot;&amp;hostlist
</span><br>
<span class="quotelev2">&gt;&gt; ()&quot;)&quot;, &quot;&quot;)&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; after_each_exec = &lt;&lt;EOT
</span><br>
<span class="quotelev2">&gt;&gt; if test &quot;$MTT_TEST_HOSTFILE&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev2">&gt;&gt;      args=&quot;--hostfile $MTT_TEST_HOSTFILE&quot;
</span><br>
<span class="quotelev2">&gt;&gt; elif test &quot;$MTT_TEST_HOSTLIST&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev2">&gt;&gt;      args=&quot;--host $MTT_TEST_HOSTLIST&quot;
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt; orterun $args -np $MTT_TEST_NP --prefix $MTT_TEST_PREFIX
</span><br>
<span class="quotelev2">&gt;&gt; mtt_ompi_cleanup.pl
</span><br>
<span class="quotelev2">&gt;&gt; EOT
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [MPI Details: Open MPI mx sm]
</span><br>
<span class="quotelev2">&gt;&gt; exec = mpirun @hosts@ -mca btl mx,sm,self -np &amp;test_np() --prefix
</span><br>
<span class="quotelev2">&gt;&gt; &amp;test_prefix() &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Yes, all these quotes are necessary.  Don't mess with them!
</span><br>
<span class="quotelev2">&gt;&gt; hosts = &amp;if(&amp;have_hostfile(), &quot;&amp;join(&quot;--hostfile &quot;, &quot;&amp;hostfile 
</span><br>
<span class="quotelev2">&gt;&gt; ()&quot;)&quot;, \
</span><br>
<span class="quotelev2">&gt;&gt;              &quot;&amp;if(&amp;have_hostlist(), &quot;&amp;join(&quot;--host &quot;, &quot;&amp;hostlist
</span><br>
<span class="quotelev2">&gt;&gt; ()&quot;)&quot;, &quot;&quot;)&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; after_each_exec = &lt;&lt;EOT
</span><br>
<span class="quotelev2">&gt;&gt; if test &quot;$MTT_TEST_HOSTFILE&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev2">&gt;&gt;      args=&quot;--hostfile $MTT_TEST_HOSTFILE&quot;
</span><br>
<span class="quotelev2">&gt;&gt; elif test &quot;$MTT_TEST_HOSTLIST&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev2">&gt;&gt;      args=&quot;--host $MTT_TEST_HOSTLIST&quot;
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt; orterun $args -np $MTT_TEST_NP --prefix $MTT_TEST_PREFIX
</span><br>
<span class="quotelev2">&gt;&gt; mtt_ompi_cleanup.pl
</span><br>
<span class="quotelev2">&gt;&gt; EOT
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [MPI Details: Open MPI mvapi sm]
</span><br>
<span class="quotelev2">&gt;&gt; exec = mpirun @hosts@ -mca btl mvapi,sm,self -np &amp;test_np() --prefix
</span><br>
<span class="quotelev2">&gt;&gt; &amp;test_prefix() &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Yes, all these quotes are necessary.  Don't mess with them!
</span><br>
<span class="quotelev2">&gt;&gt; hosts = &amp;if(&amp;have_hostfile(), &quot;&amp;join(&quot;--hostfile &quot;, &quot;&amp;hostfile 
</span><br>
<span class="quotelev2">&gt;&gt; ()&quot;)&quot;, \
</span><br>
<span class="quotelev2">&gt;&gt;              &quot;&amp;if(&amp;have_hostlist(), &quot;&amp;join(&quot;--host &quot;, &quot;&amp;hostlist
</span><br>
<span class="quotelev2">&gt;&gt; ()&quot;)&quot;, &quot;&quot;)&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; after_each_exec = &lt;&lt;EOT
</span><br>
<span class="quotelev2">&gt;&gt; if test &quot;$MTT_TEST_HOSTFILE&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev2">&gt;&gt;      args=&quot;--hostfile $MTT_TEST_HOSTFILE&quot;
</span><br>
<span class="quotelev2">&gt;&gt; elif test &quot;$MTT_TEST_HOSTLIST&quot; != &quot;&quot;; then
</span><br>
<span class="quotelev2">&gt;&gt;      args=&quot;--host $MTT_TEST_HOSTLIST&quot;
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt; orterun $args -np $MTT_TEST_NP --prefix $MTT_TEST_PREFIX
</span><br>
<span class="quotelev2">&gt;&gt; mtt_ompi_cleanup.pl
</span><br>
<span class="quotelev2">&gt;&gt; EOT
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #==================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; # Test get phase
</span><br>
<span class="quotelev2">&gt;&gt; #==================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Test get: trivial]
</span><br>
<span class="quotelev2">&gt;&gt; module = Trivial
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #==================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; # Test build phase
</span><br>
<span class="quotelev2">&gt;&gt; #==================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Test build: trivial]
</span><br>
<span class="quotelev2">&gt;&gt; test_get = trivial
</span><br>
<span class="quotelev2">&gt;&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev2">&gt;&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev2">&gt;&gt; stderr_save_lines = -1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; module = Trivial
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #==================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; # Test Run phase
</span><br>
<span class="quotelev2">&gt;&gt; #==================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Test run: trivial]
</span><br>
<span class="quotelev2">&gt;&gt; test_build = trivial
</span><br>
<span class="quotelev2">&gt;&gt; pass = &amp;eq(&amp;test_exit_status(), 0)
</span><br>
<span class="quotelev2">&gt;&gt; timeout = &amp;multiply(2, test_np())
</span><br>
<span class="quotelev2">&gt;&gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev2">&gt;&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev2">&gt;&gt; stdout_save_lines = 100
</span><br>
<span class="quotelev2">&gt;&gt; np = &amp;env_max_procs()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; module = Simple
</span><br>
<span class="quotelev2">&gt;&gt; simple_only:tests = &amp;find_executables(&quot;.&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #==================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; # Reporter phase
</span><br>
<span class="quotelev2">&gt;&gt; #==================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Reporter: IU database]
</span><br>
<span class="quotelev2">&gt;&gt; module = MTTDatabase
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_realm = OMPI
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_url = <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<span class="quotelev2">&gt;&gt; # OMPI Core: Change this to be the username and password for your
</span><br>
<span class="quotelev2">&gt;&gt; # submit user.  Get this from the OMPI MTT administrator.
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_username = XX
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_password = XX
</span><br>
<span class="quotelev2">&gt;&gt; # OMPI Core: Change this to be some short string identifying your
</span><br>
<span class="quotelev2">&gt;&gt; # cluster.
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_platform = IU - Thor - TESTING
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # This is a backup for while debugging MTT; it also writes results to
</span><br>
<span class="quotelev2">&gt;&gt; # a local text file
</span><br>
<span class="quotelev2">&gt;&gt; [Reporter: text file backup]
</span><br>
<span class="quotelev2">&gt;&gt; module = TextFile
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; textfile_filename = mtt-debug-report-2-$phase-$section-$mpi_name-
</span><br>
<span class="quotelev2">&gt;&gt; $mpi_version.txt
</span><br>
<span class="quotelev2">&gt;&gt; textfile_separator =
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------&lt;&lt;&lt;&lt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #-------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0201.php">Ethan Mallove: "Re: [MTT users] reporter weirdness"</a>
<li><strong>Previous message:</strong> <a href="0199.php">Jeff Squyres: "Re: [MTT users] Valid INI file and MPI Details section"</a>
<li><strong>In reply to:</strong> <a href="0199.php">Jeff Squyres: "Re: [MTT users] Valid INI file and MPI Details section"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0205.php">Jeff Squyres: "Re: [MTT users] Valid INI file and MPI Details section"</a>
<li><strong>Reply:</strong> <a href="0205.php">Jeff Squyres: "Re: [MTT users] Valid INI file and MPI Details section"</a>
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
