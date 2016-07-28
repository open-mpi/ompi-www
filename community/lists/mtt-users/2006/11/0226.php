<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 13 13:19:46 2006" -->
<!-- isoreceived="20061113181946" -->
<!-- sent="Mon, 13 Nov 2006 13:19:40 -0500" -->
<!-- isosent="20061113181940" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Corrupted MTT database or incorrucet query" -->
<!-- id="20061113181939.GH1608_at_sr1-ubur-03.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="15E64F89-43E8-4931-B8E6-04EF1AFF3D47_at_open-mpi.org" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-13 13:19:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0227.php">Ethan Mallove: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>Previous message:</strong> <a href="0225.php">Josh Hursey: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>In reply to:</strong> <a href="0225.php">Josh Hursey: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0227.php">Ethan Mallove: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Nov/13/2006 10:56:06AM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 13, 2006, at 10:27 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;I can infer that you have an MPI Install section labeled
</span><br>
<span class="quotelev2">&gt; &gt;&quot;odin 64 bit gcc&quot;. A few questions:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;* What is the mpi_get for that section (or how does that
</span><br>
<span class="quotelev2">&gt; &gt;  parameter get filled in by your automated scripts)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I attached the generated INI file for you to look at.
</span><br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is the same value for all parallel runs of GCC+64bit (same value  
</span><br>
<span class="quotelev1">&gt; for all branches)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;* Do you start with a fresh scratch tree every run?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yep. Every run, and all of the parallel runs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;* Could you email me your scratch/installs/mpi_installs.xml
</span><br>
<span class="quotelev2">&gt; &gt;  files?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; &lt;mpi_installs&gt;
</span><br>
<span class="quotelev1">&gt;   &lt;mpi_get simple_section_name=&quot;ompi-nightly-trunk&quot;&gt;
</span><br>
<span class="quotelev1">&gt;     &lt;mpi_version version=&quot;1.3a1r12559&quot;&gt;
</span><br>
<span class="quotelev1">&gt;       &lt;mpi_install simple_section_name=&quot;odin 64 bit gcc&quot;
</span><br>
<span class="quotelev1">&gt;                    append_path=&quot;&quot;
</span><br>
<span class="quotelev1">&gt;                    bindir=&quot;/san/homedirs/mpiteam/mtt-runs/odin/20061112-Nightly/parallel-block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12559/install/bin&quot;
</span><br>
<span class="quotelev1">&gt;                    c_bindings=&quot;1&quot;
</span><br>
<span class="quotelev1">&gt;                    compiler_name=&quot;gnu&quot;
</span><br>
<span class="quotelev1">&gt;                    compiler_version=&quot;3.4.6&quot;
</span><br>
<span class="quotelev1">&gt;                    configure_arguments=&quot;FCFLAGS=-m64 FFLAGS=-m64 CFLAGS=-m64 CXXFLAGS=-m64 --with-wrapper-cflags=-m64 --with-wrapper-cxxflags=-m64 --with-wrapper-fflags=-m64 --with-wrapper-fcflags=-m64&quot;
</span><br>
<span class="quotelev1">&gt;                    cxx_bindings=&quot;1&quot;
</span><br>
<span class="quotelev1">&gt;                    f77_bindings=&quot;1&quot;
</span><br>
<span class="quotelev1">&gt;                    f90_bindings=&quot;1&quot;
</span><br>
<span class="quotelev1">&gt;                    full_section_name=&quot;mpi install: odin 64 bit gcc&quot;
</span><br>
<span class="quotelev1">&gt;                    installdir=&quot;/san/homedirs/mpiteam/mtt-runs/odin/20061112-Nightly/parallel-block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12559/install&quot;
</span><br>
<span class="quotelev1">&gt;                    libdir=&quot;/san/homedirs/mpiteam/mtt-runs/odin/20061112-Nightly/parallel-block-1/installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12559/install/lib&quot;
</span><br>
<span class="quotelev1">&gt;                    merge_stdout_stderr=&quot;1&quot;
</span><br>
<span class="quotelev1">&gt;                    mpi_details=&quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt;                    mpi_get_full_section_name=&quot;mpi get: ompi-nightly-trunk&quot;
</span><br>
<span class="quotelev1">&gt;                    mpi_get_simple_section_name=&quot;ompi-nightly-trunk&quot;
</span><br>
<span class="quotelev1">&gt;                    mpi_version=&quot;1.3a1r12559&quot;
</span><br>
<span class="quotelev1">&gt;                    prepend_path=&quot;&quot;
</span><br>
<span class="quotelev1">&gt;                    result_message=&quot;Success&quot;
</span><br>
<span class="quotelev1">&gt;                    setenv=&quot;&quot;
</span><br>
<span class="quotelev1">&gt;                    success=&quot;1&quot;
</span><br>
<span class="quotelev1">&gt;                    test_status=&quot;installed&quot;
</span><br>
<span class="quotelev1">&gt;                    timestamp=&quot;1163316821&quot;
</span><br>
<span class="quotelev1">&gt;                    unsetenv=&quot;&quot;
</span><br>
<span class="quotelev1">&gt;                    vpath_mode=&quot;none&quot; /&gt;
</span><br>
<span class="quotelev1">&gt;     &lt;/mpi_version&gt;
</span><br>
<span class="quotelev1">&gt;   &lt;/mpi_get&gt;
</span><br>
<span class="quotelev1">&gt; &lt;/mpi_installs&gt;
</span><br>
<p><span class="quotelev1">&gt; The attached mpi_installs.xml is from the trunk+gcc+64bit parallel  
</span><br>
<span class="quotelev1">&gt; scratch directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I checked on how widespread this issue is, and found that
</span><br>
<span class="quotelev2">&gt; &gt;18,700 out of 474,000 Test Run rows in the past month have a
</span><br>
<span class="quotelev2">&gt; &gt;mpi_version/command (v1.2-trunk) mismatch. Occuring in both
</span><br>
<span class="quotelev2">&gt; &gt;directions (version=1.2, command=trunk and vice versa).
</span><br>
<span class="quotelev2">&gt; &gt;They occur on these clusters:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cisco MPI development cluster
</span><br>
<span class="quotelev2">&gt; &gt; IU Odin
</span><br>
<span class="quotelev2">&gt; &gt; IU - Thor - TESTING
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Interesting...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;There *is* that race condition in which one mtt submitting
</span><br>
<span class="quotelev2">&gt; &gt;could overwrite another's index. Do you have &quot;trunk&quot; and
</span><br>
<span class="quotelev2">&gt; &gt;&quot;1.2&quot; runs submitting to the database at the same time?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes we do. :(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The parallel blocks as we call them are separate scratch directories  
</span><br>
<span class="quotelev1">&gt; in which MTT is running concurrently. Meaning that we have N parallel  
</span><br>
<span class="quotelev1">&gt; block scratch directories each running one instance of MTT. So it is  
</span><br>
<span class="quotelev1">&gt; possible (and highly likely) that when the reporter phase fires all  
</span><br>
<span class="quotelev1">&gt; of the N parallel blocks are firing it about the same time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Likely, because the mtt runs start at the same time? Or because you
<br>
do the [Reporter:IU database] section for trunk/v1.2 at the same time?
<br>
<p><span class="quotelev1">&gt; Without knowing how the reporter is doing the inserts into the  
</span><br>
<span class="quotelev1">&gt; database I don't think I can help much more than that on debugging.  
</span><br>
<span class="quotelev1">&gt; When the reporter fires for the DB:
</span><br>
<span class="quotelev1">&gt;  - Does it start a transaction for the connection, do the inserts,  
</span><br>
<span class="quotelev1">&gt; then commit?
</span><br>
<span class="quotelev1">&gt;  - Does it ship the inserts to the server then allow it to run them,  
</span><br>
<span class="quotelev1">&gt; or does the client do all of the individual inserts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>lib/MTT/Reporter/MTTDatabase.pm HTTP POSTs the results to
<br>
server/php/submit/index.php.  index.php iterates over all of
<br>
the results and INSERTs them one at a time, but for each
<br>
result it checks to see if that MPI Install (hardware, os,
<br>
mpi_version, ...) is already in the database. If it is, it
<br>
reuses that existing row, otherwise it creates a new row
<br>
(and the problem is the SELECT/INSERT is not atomic on that
<br>
index).
<br>
<p>I'm having a tough time tracking down the race condition in
<br>
the postgres logs, so I'm going to change that index to a
<br>
serial type now, and see if the problem goes away.
<br>
<p><p><span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;On Sun, Nov/12/2006 06:04:17PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   I feel somewhat better now.  Ethan - can you fix?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   From:   Tim Mattox [[1]mailto:timattox_at_[hidden]]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Sent:   Sunday, November 12, 2006 05:34 PM Eastern Standard Time
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   To:     General user list for the MPI Testing Tool
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Subject:        [MTT users] Corrupted MTT database or  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;incorrucet query
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Hello,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   I just noticed that the MTT summary page is presenting
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   incorrect information for our recent runs at IU.  It is
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   showing failures for the 1.2b1 that actaully came from
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   the trunk!  See the first entry in this table:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   <a href="http://www.open-mpi.org/mtt/reporter.php">http://www.open-mpi.org/mtt/reporter.php</a>? 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&amp;maf_start_test_timestamp=200
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   6-11-12%2019:12:02%20through%202006-11-12% 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;2022:12:02&amp;ft_platform_id=co
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;ntains&amp;tf_platform_id=IU&amp;maf_phase=runs&amp;maf_success=fail&amp;by_atom=*by_ 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;t
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   est_case&amp;go=Table&amp;maf_agg_timestamp=- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&amp;mef_mpi_name=All&amp;mef_mpi_version
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;=All&amp;mef_os_name=All&amp;mef_os_version=All&amp;mef_platform_hardware=All&amp;mef 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;_
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   platform_id=All&amp;agg_platform_id=off&amp;1- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;page=off&amp;no_bookmarks&amp;no_bookmar
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   ks
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Click on the [i] in the upper right (the first entry)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   to get the popup window which shows the MPIRrun cmd as:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   mpirun -mca btl tcp,sm,self -np 6 --prefix
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   /san/homedirs/mpiteam/mtt-runs/odin/20061112-Testing-NOCLN/ 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;parallel-bl
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   ock-3/installs/ompi-nightly-trunk/odin_64_bit_gcc/1.3a1r12559/ 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;install
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   dynamic/spawn Note the path has &quot;1.3a1r12559&quot; in the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   name... it's a run from the trunk, yet the table showed
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   this as a 1.2b1 run.  There are several of these
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   missattributed errors.  This would explain why Jeff saw
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   some ddt errors on the 1.2 brach yesterday, but was
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   unable to reproduce them.  They were from the trunk!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Tim Mattox - [2]<a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       I'm a bright... [3]<a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   mtt-users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   [4]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;References
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   1. mailto:timattox_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   2. <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   3. <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   4. <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;mtt-users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;-- 
</span><br>
<span class="quotelev2">&gt; &gt;-Ethan
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Josh Hursey
</span><br>
<span class="quotelev1">&gt; jjhursey_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
-Ethan
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0227.php">Ethan Mallove: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>Previous message:</strong> <a href="0225.php">Josh Hursey: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>In reply to:</strong> <a href="0225.php">Josh Hursey: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0227.php">Ethan Mallove: "Re: [MTT users] Corrupted MTT database or incorrucet query"</a>
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
