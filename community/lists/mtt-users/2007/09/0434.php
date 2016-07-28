<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 28 12:35:49 2007" -->
<!-- isoreceived="20070928163549" -->
<!-- sent="Fri, 28 Sep 2007 12:35:44 -0400" -->
<!-- isosent="20070928163544" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Problems running MTT with already installed	MPICH-MX" -->
<!-- id="20070928163543.GJ1914_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.LNX.4.62.0709272242550.10138_at_reliant.cs.utk.edu" -->
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
<strong>Date:</strong> 2007-09-28 12:35:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0435.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] Problems running MTT with already installed	MPICH-MX"</a>
<li><strong>Previous message:</strong> <a href="0433.php">Jelena Pjesivac-Grbovic: "[MTT users] Problems running MTT with already installed MPICH-MX"</a>
<li><strong>In reply to:</strong> <a href="0433.php">Jelena Pjesivac-Grbovic: "[MTT users] Problems running MTT with already installed MPICH-MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0435.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] Problems running MTT with already installed	MPICH-MX"</a>
<li><strong>Reply:</strong> <a href="0435.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] Problems running MTT with already installed	MPICH-MX"</a>
<li><strong>Reply:</strong> <a href="0436.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] Problems running MTT with already installed	MPICH-MX"</a>
<li><strong>Reply:</strong> <a href="0437.php">Tim Mattox: "Re: [MTT users] Problems running MTT with already installed MPICH-MX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jelena,
<br>
<p>Change this line:
<br>
<p>&nbsp;&nbsp;alreadyinstalled_dir = /usr/local/mpich-mx/bin
<br>
<p>To this:
<br>
<p>&nbsp;&nbsp;alreadyinstalled_dir = /usr/local/mpich-mx
<br>
<p>Does that work?
<br>
<p>-Ethan
<br>
<p><p>On Thu, Sep/27/2007 10:46:55PM, Jelena Pjesivac-Grbovic wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to test the MPICH-MX using MTT on our clusters and I am hitting 
</span><br>
<span class="quotelev1">&gt; the wall.
</span><br>
<span class="quotelev1">&gt; I was able to get Open MPI to run (did not try trunk yet - but nightly 
</span><br>
<span class="quotelev1">&gt; builds worked).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is that all phases seem to go through (including Test RUN and 
</span><br>
<span class="quotelev1">&gt; Reported) but nothing happens.
</span><br>
<span class="quotelev1">&gt; I have attached the stripped down ini file (only with mpich-mx stuff)
</span><br>
<span class="quotelev1">&gt; and output of the command
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ./client/mtt --scratch /home/pjesa/mtt/scratch2 \
</span><br>
<span class="quotelev1">&gt;    --file 
</span><br>
<span class="quotelev1">&gt; /home/pjesa/mtt/collective-bakeoff/samples/ompi-core-perf-testing_mpich-mx.ini 
</span><br>
<span class="quotelev1">&gt; \
</span><br>
<span class="quotelev1">&gt;    --debug --verbose --print-time --no-section 'skampi imb osu'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that it must be something stupid because the almost same script 
</span><br>
<span class="quotelev1">&gt; which downloads nightly open mpi build works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Jelena
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt; Jelena Pjesivac-Grbovic -- Pjesa, Ph.D.
</span><br>
<span class="quotelev1">&gt; Graduate Research Assistant
</span><br>
<span class="quotelev1">&gt; Innovative Computing Laboratory
</span><br>
<span class="quotelev1">&gt; Computer Science Department, UTK
</span><br>
<span class="quotelev1">&gt; Claxton Complex 350
</span><br>
<span class="quotelev1">&gt; (865) 974 - 6722 (865) 974 - 6321
</span><br>
<span class="quotelev1">&gt; jpjesiva_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;The only difference between a problem and a solution is that
</span><br>
<span class="quotelev1">&gt;  people understand the solution.&quot;
</span><br>
<span class="quotelev1">&gt;                                       -- Charles Kettering
</span><br>
<p>Content-Description: simplified ini file
<br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # Generic OMPI core performance testing template configuration
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MTT]
</span><br>
<span class="quotelev1">&gt; # Leave this string so that we can identify this data subset in the
</span><br>
<span class="quotelev1">&gt; # database
</span><br>
<span class="quotelev1">&gt; # OMPI Core: Use a &quot;test&quot; label until we're ready to run real results
</span><br>
<span class="quotelev1">&gt; description = [testbake]
</span><br>
<span class="quotelev1">&gt; #description = [2007 collective performance bakeoff]
</span><br>
<span class="quotelev1">&gt; # OMPI Core: Use the &quot;trial&quot; flag until we're ready to run real results
</span><br>
<span class="quotelev1">&gt; trial = 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Put other values here as relevant to your environment.
</span><br>
<span class="quotelev1">&gt; #hostfile = PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt; hostfile = /home/pjesa/mtt/runs/machinefile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Lock]
</span><br>
<span class="quotelev1">&gt; # Put values here as relevant to your environment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # MPI get phase
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI get: MPICH-MX]
</span><br>
<span class="quotelev1">&gt; mpi_details = MPICH-MX
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = AlreadyInstalled
</span><br>
<span class="quotelev1">&gt; alreadyinstalled_dir = /usr/local/mpich-mx/bin
</span><br>
<span class="quotelev1">&gt; alreadyinstalled_version = 1.2.7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #module = Download
</span><br>
<span class="quotelev1">&gt; #download_url = <a href="http://www.myri.com/ftp/pub/MPICH-MX/mpich-mx_1.2.7..5.tar.gz">http://www.myri.com/ftp/pub/MPICH-MX/mpich-mx_1.2.7..5.tar.gz</a>
</span><br>
<span class="quotelev1">&gt; ## You need to obtain the username and password from Myricom
</span><br>
<span class="quotelev1">&gt; #download_username = &lt;OBTAIN THIS FROM MYRICOM&gt;
</span><br>
<span class="quotelev1">&gt; #download_password = &lt;OBTAIN THIS FROM MYRICOM&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # Install MPI phase
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [MPI install: MPICH-MX]
</span><br>
<span class="quotelev1">&gt; mpi_get = mpich-mx
</span><br>
<span class="quotelev1">&gt; module = MPICH2
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # MPI run details
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [MPI Details: MPICH-MX]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # You may need different hostfiles for running by slot/by node.
</span><br>
<span class="quotelev1">&gt; exec = mpirun --machinefile &amp;hostfile() -np &amp;test_np() &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev1">&gt; network = mx
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # Test get phase
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test get: netpipe]
</span><br>
<span class="quotelev1">&gt; module = Download
</span><br>
<span class="quotelev1">&gt; download_url = <a href="http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz">http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test get: osu]
</span><br>
<span class="quotelev1">&gt; module = SVN
</span><br>
<span class="quotelev1">&gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/osu">https://svn.open-mpi.org/svn/ompi-tests/trunk/osu</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test get: imb]
</span><br>
<span class="quotelev1">&gt; module = SVN
</span><br>
<span class="quotelev1">&gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3">https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test get: skampi]
</span><br>
<span class="quotelev1">&gt; module = SVN
</span><br>
<span class="quotelev1">&gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/skampi-5.0.1">https://svn.open-mpi.org/svn/ompi-tests/trunk/skampi-5.0.1</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # Test build phase
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test build: netpipe]
</span><br>
<span class="quotelev1">&gt; test_get = netpipe
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; stderr_save_lines = 100
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = Shell
</span><br>
<span class="quotelev1">&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; make mpi
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test build: osu]
</span><br>
<span class="quotelev1">&gt; test_get = osu
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; stderr_save_lines = 100
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = Shell
</span><br>
<span class="quotelev1">&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; make osu_latency osu_bw osu_bibw
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test build: imb]
</span><br>
<span class="quotelev1">&gt; test_get = imb
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = Shell
</span><br>
<span class="quotelev1">&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; cd src
</span><br>
<span class="quotelev1">&gt; make clean IMB-MPI1
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test build: skampi]
</span><br>
<span class="quotelev1">&gt; test_get = skampi
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; stderr_save_lines = 100
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module = Shell
</span><br>
<span class="quotelev1">&gt; # Set EVERYONE_CAN_MPI_IO for HP MPI
</span><br>
<span class="quotelev1">&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; make CFLAGS=&quot;-O2 -DPRODUCE_SPARSE_OUTPUT -DEVERYONE_CAN_MPI_IO&quot;
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # Test Run phase
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test run: netpipe]
</span><br>
<span class="quotelev1">&gt; test_build = netpipe
</span><br>
<span class="quotelev1">&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev1">&gt; # Timeout hueristic: 10 minutes
</span><br>
<span class="quotelev1">&gt; timeout = 10:00
</span><br>
<span class="quotelev1">&gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev1">&gt; # Ensure to leave this value as &quot;-1&quot;, or performance results could be lost!
</span><br>
<span class="quotelev1">&gt; stdout_save_lines = -1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; np = 2
</span><br>
<span class="quotelev1">&gt; alloc = node
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt; analyze_module = NetPipe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; simple_pass:tests = NPmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test run: osu]
</span><br>
<span class="quotelev1">&gt; test_build = osu
</span><br>
<span class="quotelev1">&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev1">&gt; # Timeout hueristic: 10 minutes
</span><br>
<span class="quotelev1">&gt; timeout = 10:00
</span><br>
<span class="quotelev1">&gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev1">&gt; # Ensure to leave this value as &quot;-1&quot;, or performance results could be lost!
</span><br>
<span class="quotelev1">&gt; stdout_save_lines = -1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; np = 2
</span><br>
<span class="quotelev1">&gt; alloc = node
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt; analyze_module = OSU
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; simple_pass:tests = osu_bw osu_latency osu_bibw
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test run: imb]
</span><br>
<span class="quotelev1">&gt; test_build = imb
</span><br>
<span class="quotelev1">&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev1">&gt; # Timeout hueristic: 10 minutes
</span><br>
<span class="quotelev1">&gt; timeout = 10:00
</span><br>
<span class="quotelev1">&gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev1">&gt; # Ensure to leave this value as &quot;-1&quot;, or performance results could be lost!
</span><br>
<span class="quotelev1">&gt; stdout_save_lines = -1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; np = &amp;env_max_procs()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; argv = -npmin &amp;test_np() &amp;enumerate(&quot;PingPong&quot;, &quot;PingPing&quot;, &quot;Sendrecv&quot;, &quot;Exchange&quot;, &quot;Allreduce&quot;, &quot;Reduce&quot;, &quot;Reduce_scatter&quot;, &quot;Allgather&quot;, &quot;Allgatherv&quot;, &quot;Alltoall&quot;, &quot;Bcast&quot;, &quot;Barrier&quot;) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt; analyze_module = IMB
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; simple_pass:tests = src/IMB-MPI1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test run: skampi]
</span><br>
<span class="quotelev1">&gt; test_build = skampi
</span><br>
<span class="quotelev1">&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev1">&gt; # Timeout hueristic: 10 minutes
</span><br>
<span class="quotelev1">&gt; timeout = 10:00
</span><br>
<span class="quotelev1">&gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev1">&gt; # Ensure to leave this value as &quot;-1&quot;, or performance results could be lost!
</span><br>
<span class="quotelev1">&gt; stdout_save_lines = -1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; np = &amp;env_max_procs()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; argv = -i &amp;find(&quot;mtt_.+.ski&quot;, &quot;input_files_bakeoff&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt; analyze_module = SKaMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; simple_pass:tests = skampi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; # Reporter phase
</span><br>
<span class="quotelev1">&gt; #======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Reporter: IU database]
</span><br>
<span class="quotelev1">&gt; module = MTTDatabase
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mttdatabase_realm = OMPI
</span><br>
<span class="quotelev1">&gt; mttdatabase_url = <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<span class="quotelev1">&gt; # Change this to be the username and password for your submit user.
</span><br>
<span class="quotelev1">&gt; # Get this from the OMPI MTT administrator.
</span><br>
<span class="quotelev1">&gt; mttdatabase_username = utk
</span><br>
<span class="quotelev1">&gt; mttdatabase_password = utk0mp1mtt
</span><br>
<span class="quotelev1">&gt; # Change this to be some short string identifying your cluster.
</span><br>
<span class="quotelev1">&gt; mttdatabase_platform = grig
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mttdatabase_debug_filename = mttdb_debug_file_perf
</span><br>
<span class="quotelev1">&gt; mttdatabase_keep_debug_files = 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # This is a backup reporter; it also writes results to a local text
</span><br>
<span class="quotelev1">&gt; # file
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Reporter: text file backup]
</span><br>
<span class="quotelev1">&gt; module = TextFile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; textfile_filename = $phase-$section-$mpi_name-$mpi_version.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; textfile_summary_header = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; Hostname: &amp;shell(&quot;hostname&quot;)
</span><br>
<span class="quotelev1">&gt; uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev1">&gt; Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; textfile_summary_footer =
</span><br>
<span class="quotelev1">&gt; textfile_detail_header =
</span><br>
<span class="quotelev1">&gt; textfile_detail_footer =
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; textfile_textwrap = 78
</span><br>
<p>Content-Description: output of the MTT command
<br>
<span class="quotelev1">&gt; Debug is 1, Verbose is 1
</span><br>
<span class="quotelev1">&gt; *** MTT: ./client/mtt --scratch /home/pjesa/mtt/scratch2 --file
</span><br>
<span class="quotelev1">&gt;   /home/pjesa/mtt/collective-bakeoff/samples/ompi-core-perf-testing_mpich-m
</span><br>
<span class="quotelev1">&gt;   x.ini --debug --verbose --print-time --no-section skampi imb osu
</span><br>
<span class="quotelev1">&gt; chdir ./client
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/collective-bakeoff
</span><br>
<span class="quotelev1">&gt; Copying:
</span><br>
<span class="quotelev1">&gt;    /home/pjesa/mtt/collective-bakeoff/samples/ompi-core-perf-testing_mpich-
</span><br>
<span class="quotelev1">&gt;    mx.ini to /tmp/yy79ezjkh0.ini
</span><br>
<span class="quotelev1">&gt; Reading ini file:
</span><br>
<span class="quotelev1">&gt;    /home/pjesa/mtt/collective-bakeoff/samples/ompi-core-perf-testing_mpich-
</span><br>
<span class="quotelev1">&gt;    mx.ini
</span><br>
<span class="quotelev1">&gt; Validating INI inifile: /tmp/yy79ezjkh0.ini
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=mpi get: mpich-mx): $section =~ /skampi/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=mpi get: mpich-mx): $section =~ /imb/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=mpi get: mpich-mx): $section =~ /osu/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=mpi install: mpich-mx): $section =~ /skampi/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=mpi install: mpich-mx): $section =~ /imb/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=mpi install: mpich-mx): $section =~ /osu/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=mpi details: mpich-mx): $section =~ /skampi/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=mpi details: mpich-mx): $section =~ /imb/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=mpi details: mpich-mx): $section =~ /osu/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=test get: netpipe): $section =~ /skampi/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=test get: netpipe): $section =~ /imb/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=test get: netpipe): $section =~ /osu/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=test get: osu): $section =~ /skampi/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=test get: osu): $section =~ /imb/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=test get: osu): $section =~ /osu/i
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=test get: imb): $section =~ /skampi/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=test get: imb): $section =~ /imb/i
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=test get: skampi): $section =~ /skampi/i
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=test build: netpipe): $section =~ /skampi/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=test build: netpipe): $section =~ /imb/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=test build: netpipe): $section =~ /osu/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=test build: osu): $section =~ /skampi/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=test build: osu): $section =~ /imb/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=test build: osu): $section =~ /osu/i
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=test build: imb): $section =~ /skampi/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=test build: imb): $section =~ /imb/i
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=test build: skampi): $section =~ /skampi/i
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=test run: netpipe): $section =~ /skampi/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=test run: netpipe): $section =~ /imb/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=test run: netpipe): $section =~ /osu/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=test run: osu): $section =~ /skampi/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=test run: osu): $section =~ /imb/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=test run: osu): $section =~ /osu/i
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=test run: imb): $section =~ /skampi/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=test run: imb): $section =~ /imb/i
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=test run: skampi): $section =~ /skampi/i
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=reporter: iu database): $section =~ /skampi/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=reporter: iu database): $section =~ /imb/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=reporter: iu database): $section =~ /osu/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=reporter: text file backup): $section =~
</span><br>
<span class="quotelev1">&gt;    /skampi/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=reporter: text file backup): $section =~ /imb/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: regexp (section=reporter: text file backup): $section =~ /osu/i
</span><br>
<span class="quotelev1">&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev1">&gt; FilterINI: Final list of sections:
</span><br>
<span class="quotelev1">&gt;        [mtt]
</span><br>
<span class="quotelev1">&gt;        [lock]
</span><br>
<span class="quotelev1">&gt;        [mpi get: mpich-mx]
</span><br>
<span class="quotelev1">&gt;        [mpi install: mpich-mx]
</span><br>
<span class="quotelev1">&gt;        [mpi details: mpich-mx]
</span><br>
<span class="quotelev1">&gt;        [test get: netpipe]
</span><br>
<span class="quotelev1">&gt;        [test build: netpipe]
</span><br>
<span class="quotelev1">&gt;        [test run: netpipe]
</span><br>
<span class="quotelev1">&gt;        [reporter: iu database]
</span><br>
<span class="quotelev1">&gt;        [reporter: text file backup]
</span><br>
<span class="quotelev1">&gt; Scratch: /home/pjesa/mtt/scratch2
</span><br>
<span class="quotelev1">&gt; Making dir: /home/pjesa/mtt/scratch2 (cwd:
</span><br>
<span class="quotelev1">&gt;    /home/pjesa/mtt/collective-bakeoff)
</span><br>
<span class="quotelev1">&gt; /home/pjesa/mtt/scratch2 does not exist -- creating
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2/
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/collective-bakeoff
</span><br>
<span class="quotelev1">&gt; Scratch resolved: /home/pjesa/mtt/scratch2
</span><br>
<span class="quotelev1">&gt; Value: force
</span><br>
<span class="quotelev1">&gt; Making dir: /home/pjesa/mtt/scratch2/sources (cwd:
</span><br>
<span class="quotelev1">&gt;    /home/pjesa/mtt/scratch2)
</span><br>
<span class="quotelev1">&gt; /home/pjesa/mtt/scratch2/sources does not exist -- creating
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2/sources/
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2
</span><br>
<span class="quotelev1">&gt; Making dir: /home/pjesa/mtt/scratch2/installs (cwd:
</span><br>
<span class="quotelev1">&gt;    /home/pjesa/mtt/scratch2)
</span><br>
<span class="quotelev1">&gt; /home/pjesa/mtt/scratch2/installs does not exist -- creating
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2/installs/
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2
</span><br>
<span class="quotelev1">&gt; Making dir: /home/pjesa/mtt/scratch2/test_runs (cwd:
</span><br>
<span class="quotelev1">&gt;    /home/pjesa/mtt/scratch2)
</span><br>
<span class="quotelev1">&gt; /home/pjesa/mtt/scratch2/test_runs does not exist -- creating
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2/test_runs/
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2
</span><br>
<span class="quotelev1">&gt; Value: funclet_files
</span><br>
<span class="quotelev1">&gt; Value: hostfile
</span><br>
<span class="quotelev1">&gt; Evaluating: /home/pjesa/mtt/runs/machinefile
</span><br>
<span class="quotelev1">&gt; Replacing vars from section MTT: /home/pjesa/mtt/runs/machinefile
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: /home/pjesa/mtt/runs/machinefile
</span><br>
<span class="quotelev1">&gt; Returning: /home/pjesa/mtt/runs/machinefile
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Got default hostfile: /home/pjesa/mtt/runs/machinefile, max_np: 4
</span><br>
<span class="quotelev1">&gt; Value: hostlist
</span><br>
<span class="quotelev1">&gt; Value: max_np
</span><br>
<span class="quotelev1">&gt; Value: textwrap
</span><br>
<span class="quotelev1">&gt; Value: drain_timeout
</span><br>
<span class="quotelev1">&gt; Value: trim_save_successful
</span><br>
<span class="quotelev1">&gt; Value: trim_save_failed
</span><br>
<span class="quotelev1">&gt; Value: trial
</span><br>
<span class="quotelev1">&gt; Evaluating: 1
</span><br>
<span class="quotelev1">&gt; Replacing vars from section MTT: 1
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: 1
</span><br>
<span class="quotelev1">&gt; Returning: 1
</span><br>
<span class="quotelev1">&gt; Value: http_proxy
</span><br>
<span class="quotelev1">&gt; Value: https_proxy
</span><br>
<span class="quotelev1">&gt; Value: ftp_proxy
</span><br>
<span class="quotelev1">&gt; Value: terminate_files
</span><br>
<span class="quotelev1">&gt; Value: before_all_exec
</span><br>
<span class="quotelev1">&gt; Value: before_all_exec_timeout
</span><br>
<span class="quotelev1">&gt; Value: before_all_exec_pass
</span><br>
<span class="quotelev1">&gt; Value: before_each_exec
</span><br>
<span class="quotelev1">&gt; Value: before_each_exec_timeout
</span><br>
<span class="quotelev1">&gt; Value: before_each_exec_pass
</span><br>
<span class="quotelev1">&gt; Value: after_all_exec
</span><br>
<span class="quotelev1">&gt; Value: after_all_exec_timeout
</span><br>
<span class="quotelev1">&gt; Value: after_all_exec_pass
</span><br>
<span class="quotelev1">&gt; Value: after_each_exec
</span><br>
<span class="quotelev1">&gt; Value: after_each_exec_timeout
</span><br>
<span class="quotelev1">&gt; Value: after_each_exec_pass
</span><br>
<span class="quotelev1">&gt; Value: module
</span><br>
<span class="quotelev1">&gt; Value: log_file
</span><br>
<span class="quotelev1">&gt; Value: logfile
</span><br>
<span class="quotelev1">&gt; *** Reporter initializing
</span><br>
<span class="quotelev1">&gt; Value: module
</span><br>
<span class="quotelev1">&gt; Evaluating: MTTDatabase
</span><br>
<span class="quotelev1">&gt; Replacing vars from section reporter: iu database: MTTDatabase
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: MTTDatabase
</span><br>
<span class="quotelev1">&gt; Returning: MTTDatabase
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Initializing reporter module: MTTDatabase
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Reporter::MTTDatabase
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Reporter::MTTDatabase::Init(@args)
</span><br>
<span class="quotelev1">&gt; Value: mttdatabase_username
</span><br>
<span class="quotelev1">&gt; Evaluating: utk
</span><br>
<span class="quotelev1">&gt; Replacing vars from section reporter: iu database: utk
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: utk
</span><br>
<span class="quotelev1">&gt; Returning: utk
</span><br>
<span class="quotelev1">&gt; Value: mttdatabase_password
</span><br>
<span class="quotelev1">&gt; Evaluating: utk0mp1mtt
</span><br>
<span class="quotelev1">&gt; Replacing vars from section reporter: iu database: utk0mp1mtt
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: utk0mp1mtt
</span><br>
<span class="quotelev1">&gt; Returning: utk0mp1mtt
</span><br>
<span class="quotelev1">&gt; Value: mttdatabase_url
</span><br>
<span class="quotelev1">&gt; Evaluating: <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<span class="quotelev1">&gt; Replacing vars from section reporter: iu database:
</span><br>
<span class="quotelev1">&gt;    <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<span class="quotelev1">&gt; Returning: <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<span class="quotelev1">&gt; Value: mttdatabase_realm
</span><br>
<span class="quotelev1">&gt; Evaluating: OMPI
</span><br>
<span class="quotelev1">&gt; Replacing vars from section reporter: iu database: OMPI
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: OMPI
</span><br>
<span class="quotelev1">&gt; Returning: OMPI
</span><br>
<span class="quotelev1">&gt; Value: mttdatabase_email_errors_to
</span><br>
<span class="quotelev1">&gt; Value: mttdatabase_debug_filename
</span><br>
<span class="quotelev1">&gt; Evaluating: mttdb_debug_file_perf
</span><br>
<span class="quotelev1">&gt; Replacing vars from section reporter: iu database: mttdb_debug_file_perf
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: mttdb_debug_file_perf
</span><br>
<span class="quotelev1">&gt; Returning: mttdb_debug_file_perf
</span><br>
<span class="quotelev1">&gt; Value: mttdatabase_keep_debug_files
</span><br>
<span class="quotelev1">&gt; Evaluating: 1
</span><br>
<span class="quotelev1">&gt; Replacing vars from section reporter: iu database: 1
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: 1
</span><br>
<span class="quotelev1">&gt; Returning: 1
</span><br>
<span class="quotelev1">&gt; Value: mttdatabase_hostname
</span><br>
<span class="quotelev1">&gt; Value: local_username
</span><br>
<span class="quotelev1">&gt; Value: mttdatabase_platform
</span><br>
<span class="quotelev1">&gt; Evaluating: grig
</span><br>
<span class="quotelev1">&gt; Replacing vars from section reporter: iu database: grig
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: grig
</span><br>
<span class="quotelev1">&gt; Returning: grig
</span><br>
<span class="quotelev1">&gt;    Set HTTP credentials for realm &quot;OMPI&quot;
</span><br>
<span class="quotelev1">&gt; MTTDatabase getting a client serial number...
</span><br>
<span class="quotelev1">&gt; MTTDatabase trying proxy:  / Default (none)
</span><br>
<span class="quotelev1">&gt; MTTDatabase got response: 
</span><br>
<span class="quotelev1">&gt;    === client_serial = 6320 ===
</span><br>
<span class="quotelev1">&gt; MTTDatabase parsed invocation serial: 6320
</span><br>
<span class="quotelev1">&gt; Making dir: /home/pjesa/mtt/scratch2/mttdatabase-submit (cwd:
</span><br>
<span class="quotelev1">&gt;    /home/pjesa/mtt/scratch2)
</span><br>
<span class="quotelev1">&gt; /home/pjesa/mtt/scratch2/mttdatabase-submit does not exist -- creating
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2/mttdatabase-submit/
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2
</span><br>
<span class="quotelev1">&gt; MTTDatabase reporter writing to debug file
</span><br>
<span class="quotelev1">&gt;    (/home/pjesa/mtt/scratch2/mttdatabase-submit/mttdb_debug_file_perf)
</span><br>
<span class="quotelev1">&gt; MTTDatabase reporter initialized (OMPI, utk, XXXXXX,
</span><br>
<span class="quotelev1">&gt;    <a href="https://www.open-mpi.org:443/mtt/submit/">https://www.open-mpi.org:443/mtt/submit/</a>, grig)
</span><br>
<span class="quotelev1">&gt; Value: module
</span><br>
<span class="quotelev1">&gt; Evaluating: TextFile
</span><br>
<span class="quotelev1">&gt; Replacing vars from section reporter: text file backup: TextFile
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: TextFile
</span><br>
<span class="quotelev1">&gt; Returning: TextFile
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Initializing reporter module: TextFile
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Reporter::TextFile
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Reporter::TextFile::Init(@args)
</span><br>
<span class="quotelev1">&gt; Value: textfile_summary_header
</span><br>
<span class="quotelev1">&gt; Evaluating: Hostname: &amp;shell(&quot;hostname&quot;)
</span><br>
<span class="quotelev1">&gt;    uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev1">&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; Replacing vars from section reporter: text file backup: Hostname:
</span><br>
<span class="quotelev1">&gt;    &amp;shell(&quot;hostname&quot;)
</span><br>
<span class="quotelev1">&gt;    uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev1">&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; --&gt; Prefix now: Hostname: 
</span><br>
<span class="quotelev1">&gt; --&gt; Remaining (after &amp;): shell(&quot;hostname&quot;)
</span><br>
<span class="quotelev1">&gt;    uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev1">&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; --&gt; Found func name: shell
</span><br>
<span class="quotelev1">&gt; --&gt; Found beginning of arguments: &quot;hostname&quot;)
</span><br>
<span class="quotelev1">&gt;    uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev1">&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; --&gt; Initial param search: &quot;hostname&quot;)
</span><br>
<span class="quotelev1">&gt;    uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev1">&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; --&gt; Loop: trimmed search: &quot;hostname&quot;)
</span><br>
<span class="quotelev1">&gt;    uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev1">&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; --&gt; Examining char: &quot; (pos 0)
</span><br>
<span class="quotelev1">&gt; --&gt; Found beginning quote
</span><br>
<span class="quotelev1">&gt; --&gt; Found last quote
</span><br>
<span class="quotelev1">&gt; --&gt; Examining char: ) (pos 10)
</span><br>
<span class="quotelev1">&gt; --&gt; Found end of arg (pos 10)
</span><br>
<span class="quotelev1">&gt; Found argument: &quot;hostname&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Remainder: 
</span><br>
<span class="quotelev1">&gt;    uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev1">&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; --&gt; Calling: $ret = MTT::Values::Functions::shell(&quot;hostname&quot;);
</span><br>
<span class="quotelev1">&gt; &amp;shell: got hostname
</span><br>
<span class="quotelev1">&gt; &amp;shell: returning grig-head
</span><br>
<span class="quotelev1">&gt; --&gt; After eval(string), remaining: grig-head
</span><br>
<span class="quotelev1">&gt;    uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev1">&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; Replacing vars from section reporter: text file backup: grig-head
</span><br>
<span class="quotelev1">&gt;    uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev1">&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; --&gt; Prefix now: Hostname: grig-head
</span><br>
<span class="quotelev1">&gt;    uname: 
</span><br>
<span class="quotelev1">&gt; --&gt; Remaining (after &amp;): shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev1">&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; --&gt; Found func name: shell
</span><br>
<span class="quotelev1">&gt; --&gt; Found beginning of arguments: &quot;uname -a&quot;)
</span><br>
<span class="quotelev1">&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; --&gt; Initial param search: &quot;uname -a&quot;)
</span><br>
<span class="quotelev1">&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; --&gt; Loop: trimmed search: &quot;uname -a&quot;)
</span><br>
<span class="quotelev1">&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; --&gt; Examining char: &quot; (pos 0)
</span><br>
<span class="quotelev1">&gt; --&gt; Found beginning quote
</span><br>
<span class="quotelev1">&gt; --&gt; Found last quote
</span><br>
<span class="quotelev1">&gt; --&gt; Examining char: ) (pos 10)
</span><br>
<span class="quotelev1">&gt; --&gt; Found end of arg (pos 10)
</span><br>
<span class="quotelev1">&gt; Found argument: &quot;uname -a&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Remainder: 
</span><br>
<span class="quotelev1">&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; --&gt; Calling: $ret = MTT::Values::Functions::shell(&quot;uname -a&quot;);
</span><br>
<span class="quotelev1">&gt; &amp;shell: got uname -a
</span><br>
<span class="quotelev1">&gt; &amp;shell: returning Linux grig-head 2.6.8 #1 SMP Fri Oct 20 17:13:21 EDT 2006
</span><br>
<span class="quotelev1">&gt;    x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; --&gt; After eval(string), remaining: Linux grig-head 2.6.8 #1 SMP Fri Oct 20
</span><br>
<span class="quotelev1">&gt;    17:13:21 EDT 2006 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; Replacing vars from section reporter: text file backup: Linux grig-head
</span><br>
<span class="quotelev1">&gt;    2.6.8 #1 SMP Fri Oct 20 17:13:21 EDT 2006 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; --&gt; Prefix now: Hostname: grig-head
</span><br>
<span class="quotelev1">&gt;    uname: Linux grig-head 2.6.8 #1 SMP Fri Oct 20 17:13:21 EDT 2006 x86_64
</span><br>
<span class="quotelev1">&gt;    GNU/Linux
</span><br>
<span class="quotelev1">&gt;    Username: 
</span><br>
<span class="quotelev1">&gt; --&gt; Remaining (after &amp;): shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; --&gt; Found func name: shell
</span><br>
<span class="quotelev1">&gt; --&gt; Found beginning of arguments: &quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; --&gt; Initial param search: &quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; --&gt; Loop: trimmed search: &quot;who am i&quot;)
</span><br>
<span class="quotelev1">&gt; --&gt; Examining char: &quot; (pos 0)
</span><br>
<span class="quotelev1">&gt; --&gt; Found beginning quote
</span><br>
<span class="quotelev1">&gt; --&gt; Found last quote
</span><br>
<span class="quotelev1">&gt; --&gt; Examining char: ) (pos 10)
</span><br>
<span class="quotelev1">&gt; --&gt; Found end of arg (pos 10)
</span><br>
<span class="quotelev1">&gt; Found argument: &quot;who am i&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Remainder: 
</span><br>
<span class="quotelev1">&gt; --&gt; Calling: $ret = MTT::Values::Functions::shell(&quot;who am i&quot;);
</span><br>
<span class="quotelev1">&gt; &amp;shell: got who am i
</span><br>
<span class="quotelev1">&gt; &amp;shell: returning pjesa    pts/8	Sep 18 15:45 (reliant.cs.utk.edu)
</span><br>
<span class="quotelev1">&gt; --&gt; After eval(string), remaining: pjesa    pts/8	 Sep 18 15:45
</span><br>
<span class="quotelev1">&gt;    (reliant.cs.utk.edu)
</span><br>
<span class="quotelev1">&gt; Replacing vars from section reporter: text file backup: pjesa	 pts/8	   
</span><br>
<span class="quotelev1">&gt;      Sep 18 15:45 (reliant.cs.utk.edu)
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: pjesa    pts/8	Sep 18 15:45
</span><br>
<span class="quotelev1">&gt;    (reliant.cs.utk.edu)
</span><br>
<span class="quotelev1">&gt; Returning: Hostname: grig-head
</span><br>
<span class="quotelev1">&gt;    uname: Linux grig-head 2.6.8 #1 SMP Fri Oct 20 17:13:21 EDT 2006 x86_64
</span><br>
<span class="quotelev1">&gt;    GNU/Linux
</span><br>
<span class="quotelev1">&gt;    Username: pjesa    pts/8	   Sep 18 15:45 (reliant.cs.utk.edu)
</span><br>
<span class="quotelev1">&gt; Value: textfile_summary_footer
</span><br>
<span class="quotelev1">&gt; Evaluating: 
</span><br>
<span class="quotelev1">&gt; Replacing vars from section reporter: text file backup: 
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: 
</span><br>
<span class="quotelev1">&gt; Returning: 
</span><br>
<span class="quotelev1">&gt; Value: textfile_detail_header 
</span><br>
<span class="quotelev1">&gt; Value: textfile_detail_footer 
</span><br>
<span class="quotelev1">&gt; Value: textfile_textwrap
</span><br>
<span class="quotelev1">&gt; Evaluating: 78
</span><br>
<span class="quotelev1">&gt; Replacing vars from section reporter: text file backup: 78
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: 78
</span><br>
<span class="quotelev1">&gt; Returning: 78
</span><br>
<span class="quotelev1">&gt; File reporter initialized (/home/pjesa/mtt/scratch2/)
</span><br>
<span class="quotelev1">&gt; *** Reporter initialized
</span><br>
<span class="quotelev1">&gt; Evaluating: &amp;getenv(&quot;HOME&quot;)/mtt-stop
</span><br>
<span class="quotelev1">&gt; --&gt; Prefix now: 
</span><br>
<span class="quotelev1">&gt; --&gt; Remaining (after &amp;): getenv(&quot;HOME&quot;)/mtt-stop
</span><br>
<span class="quotelev1">&gt; --&gt; Found func name: getenv
</span><br>
<span class="quotelev1">&gt; --&gt; Found beginning of arguments: &quot;HOME&quot;)/mtt-stop
</span><br>
<span class="quotelev1">&gt; --&gt; Initial param search: &quot;HOME&quot;)/mtt-stop
</span><br>
<span class="quotelev1">&gt; --&gt; Loop: trimmed search: &quot;HOME&quot;)/mtt-stop
</span><br>
<span class="quotelev1">&gt; --&gt; Examining char: &quot; (pos 0)
</span><br>
<span class="quotelev1">&gt; --&gt; Found beginning quote
</span><br>
<span class="quotelev1">&gt; --&gt; Found last quote
</span><br>
<span class="quotelev1">&gt; --&gt; Examining char: ) (pos 6)
</span><br>
<span class="quotelev1">&gt; --&gt; Found end of arg (pos 6)
</span><br>
<span class="quotelev1">&gt; Found argument: &quot;HOME&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Remainder: /mtt-stop
</span><br>
<span class="quotelev1">&gt; --&gt; Calling: $ret = MTT::Values::Functions::getenv(&quot;HOME&quot;);
</span><br>
<span class="quotelev1">&gt; &amp;getenv(HOME) returning: /home/pjesa
</span><br>
<span class="quotelev1">&gt; --&gt; After eval(string), remaining: /home/pjesa/mtt-stop
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: /home/pjesa/mtt-stop
</span><br>
<span class="quotelev1">&gt; Returning: /home/pjesa/mtt-stop
</span><br>
<span class="quotelev1">&gt; Evaluating: &amp;scratch_root()/mtt-stop
</span><br>
<span class="quotelev1">&gt; --&gt; Prefix now: 
</span><br>
<span class="quotelev1">&gt; --&gt; Remaining (after &amp;): scratch_root()/mtt-stop
</span><br>
<span class="quotelev1">&gt; --&gt; Found func name: scratch_root
</span><br>
<span class="quotelev1">&gt; --&gt; Found beginning of arguments: )/mtt-stop
</span><br>
<span class="quotelev1">&gt; --&gt; Initial param search: )/mtt-stop
</span><br>
<span class="quotelev1">&gt; --&gt; Loop: trimmed search: )/mtt-stop
</span><br>
<span class="quotelev1">&gt; --&gt; Examining char: ) (pos 0)
</span><br>
<span class="quotelev1">&gt; --&gt; Found end of arg (pos 0)
</span><br>
<span class="quotelev1">&gt; Found empty argument
</span><br>
<span class="quotelev1">&gt; --&gt; Remainder: /mtt-stop
</span><br>
<span class="quotelev1">&gt; --&gt; Calling: $ret = MTT::Values::Functions::scratch_root();
</span><br>
<span class="quotelev1">&gt; &amp;scratch_root() returning: /home/pjesa/mtt/scratch2
</span><br>
<span class="quotelev1">&gt; --&gt; After eval(string), remaining: /home/pjesa/mtt/scratch2/mtt-stop
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: /home/pjesa/mtt/scratch2/mtt-stop
</span><br>
<span class="quotelev1">&gt; Returning: /home/pjesa/mtt/scratch2/mtt-stop
</span><br>
<span class="quotelev1">&gt; *** MPI get phase starting
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2/sources
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI get: [mpi get: mpich-mx]
</span><br>
<span class="quotelev1">&gt;    Checking for new MPI sources...
</span><br>
<span class="quotelev1">&gt; Value: module
</span><br>
<span class="quotelev1">&gt; Evaluating: AlreadyInstalled
</span><br>
<span class="quotelev1">&gt; Replacing vars from section mpi get: mpich-mx: AlreadyInstalled
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: AlreadyInstalled
</span><br>
<span class="quotelev1">&gt; Returning: AlreadyInstalled
</span><br>
<span class="quotelev1">&gt; Value: mpi_details
</span><br>
<span class="quotelev1">&gt; Evaluating: MPICH-MX
</span><br>
<span class="quotelev1">&gt; Replacing vars from section mpi get: mpich-mx: MPICH-MX
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: MPICH-MX
</span><br>
<span class="quotelev1">&gt; Returning: MPICH-MX
</span><br>
<span class="quotelev1">&gt; Value: env_module
</span><br>
<span class="quotelev1">&gt; Value: setenv
</span><br>
<span class="quotelev1">&gt; Value: unsetenv
</span><br>
<span class="quotelev1">&gt; Value: prepend_path
</span><br>
<span class="quotelev1">&gt; Value: append_path
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2/sources
</span><br>
<span class="quotelev1">&gt; Making dir: mpi_get__mpich-mx (cwd: /home/pjesa/mtt/scratch2/sources)
</span><br>
<span class="quotelev1">&gt; mpi_get__mpich-mx does not exist -- creating
</span><br>
<span class="quotelev1">&gt; chdir mpi_get__mpich-mx/
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2/sources
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2/sources/mpi_get__mpich-mx
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::MPI::Get::AlreadyInstalled
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::MPI::Get::AlreadyInstalled::Get(@args)
</span><br>
<span class="quotelev1">&gt; Value: alreadyinstalled_dir
</span><br>
<span class="quotelev1">&gt; Evaluating: /usr/local/mpich-mx/bin
</span><br>
<span class="quotelev1">&gt; Replacing vars from section mpi get: mpich-mx: /usr/local/mpich-mx/bin
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: /usr/local/mpich-mx/bin
</span><br>
<span class="quotelev1">&gt; Returning: /usr/local/mpich-mx/bin
</span><br>
<span class="quotelev1">&gt;    Using MPI in: /usr/local/mpich-mx/bin
</span><br>
<span class="quotelev1">&gt; Value: alreadyinstalled_version
</span><br>
<span class="quotelev1">&gt; Evaluating: 1.2.7
</span><br>
<span class="quotelev1">&gt; Replacing vars from section mpi get: mpich-mx: 1.2.7
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: 1.2.7
</span><br>
<span class="quotelev1">&gt; Returning: 1.2.7
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MTT::MPI::Get::AlreadyInstalled complete
</span><br>
<span class="quotelev1">&gt;    Got new MPI sources: version 1.2.7
</span><br>
<span class="quotelev1">&gt; *** MPI get phase complete
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Phase: MPI Get
</span><br>
<span class="quotelev1">&gt;    Started:       Thu Sep 27 22:39:37 2007
</span><br>
<span class="quotelev1">&gt;    Stopped:       Thu Sep 27 22:39:37 2007
</span><br>
<span class="quotelev1">&gt;    Elapsed:       00:00:00
</span><br>
<span class="quotelev1">&gt;    Total elapsed: 00:00:00
</span><br>
<span class="quotelev1">&gt; *** MPI install phase starting
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2/installs
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI install [mpi install: mpich-mx]
</span><br>
<span class="quotelev1">&gt; Value: mpi_get
</span><br>
<span class="quotelev1">&gt; Evaluating: mpich-mx
</span><br>
<span class="quotelev1">&gt; Replacing vars from section mpi install: mpich-mx: mpich-mx
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: mpich-mx
</span><br>
<span class="quotelev1">&gt; Returning: mpich-mx
</span><br>
<span class="quotelev1">&gt; Checking for [mpich-mx] / [1.2.7] / [mpich-mx]
</span><br>
<span class="quotelev1">&gt;    Installing MPI: [mpich-mx] / [1.2.7] / [mpich-mx]...
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2/installs
</span><br>
<span class="quotelev1">&gt; Unique directory: CoY6
</span><br>
<span class="quotelev1">&gt; Making dir: CoY6 (cwd: /home/pjesa/mtt/scratch2/installs)
</span><br>
<span class="quotelev1">&gt; CoY6 does not exist -- creating
</span><br>
<span class="quotelev1">&gt; chdir CoY6/
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2/installs
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2/installs/CoY6
</span><br>
<span class="quotelev1">&gt; Value: module
</span><br>
<span class="quotelev1">&gt; Evaluating: MPICH2
</span><br>
<span class="quotelev1">&gt; Replacing vars from section mpi install: mpich-mx: MPICH2
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: MPICH2
</span><br>
<span class="quotelev1">&gt; Returning: MPICH2
</span><br>
<span class="quotelev1">&gt; Value: description
</span><br>
<span class="quotelev1">&gt; Value: description
</span><br>
<span class="quotelev1">&gt; Evaluating: [testbake]
</span><br>
<span class="quotelev1">&gt; Replacing vars from section MTT: [testbake]
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: [testbake]
</span><br>
<span class="quotelev1">&gt; Returning: [testbake]
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2/installs/CoY6
</span><br>
<span class="quotelev1">&gt; chdir ..
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2/installs/CoY6
</span><br>
<span class="quotelev1">&gt; Sym linked: CoY6 to mpich-mx#mpich-mx#1.2.7
</span><br>
<span class="quotelev1">&gt; Value: env_module
</span><br>
<span class="quotelev1">&gt; Value: setenv
</span><br>
<span class="quotelev1">&gt; Value: unsetenv
</span><br>
<span class="quotelev1">&gt; Value: prepend_path
</span><br>
<span class="quotelev1">&gt; Value: append_path
</span><br>
<span class="quotelev1">&gt; Value: configure_arguments
</span><br>
<span class="quotelev1">&gt; Value: vpath_mode
</span><br>
<span class="quotelev1">&gt; Value: make_all_arguments
</span><br>
<span class="quotelev1">&gt; Value: make_check
</span><br>
<span class="quotelev1">&gt; Value: compiler_name
</span><br>
<span class="quotelev1">&gt; Value: compiler_version
</span><br>
<span class="quotelev1">&gt; Value: save_stdout_on_success
</span><br>
<span class="quotelev1">&gt; Evaluating: 1
</span><br>
<span class="quotelev1">&gt; Replacing vars from section mpi install: mpich-mx: 1
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: 1
</span><br>
<span class="quotelev1">&gt; Returning: 1
</span><br>
<span class="quotelev1">&gt; Value: merge_stdout_stderr
</span><br>
<span class="quotelev1">&gt; Evaluating: 0
</span><br>
<span class="quotelev1">&gt; Replacing vars from section mpi install: mpich-mx: 0
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: 0
</span><br>
<span class="quotelev1">&gt; Returning: 0
</span><br>
<span class="quotelev1">&gt; Value: stderr_save_lines
</span><br>
<span class="quotelev1">&gt; Value: stdout_save_lines
</span><br>
<span class="quotelev1">&gt; Running command: rm -rf src
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Making dir: src (cwd: /home/pjesa/mtt/scratch2/installs/CoY6)
</span><br>
<span class="quotelev1">&gt; src does not exist -- creating
</span><br>
<span class="quotelev1">&gt; chdir src/
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2/installs/CoY6
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2/installs/CoY6/src
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::MPI::Get::AlreadyInstalled
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret =
</span><br>
<span class="quotelev1">&gt;    &amp;MTT::MPI::Get::AlreadyInstalled::PrepareForInstall(@args)
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2/installs/CoY6/src
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2/installs/CoY6/src
</span><br>
<span class="quotelev1">&gt; Making dir: /home/pjesa/mtt/scratch2/installs/CoY6/install (cwd:
</span><br>
<span class="quotelev1">&gt;    /home/pjesa/mtt/scratch2/installs/CoY6/src)
</span><br>
<span class="quotelev1">&gt; /home/pjesa/mtt/scratch2/installs/CoY6/install does not exist -- creating
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2/installs/CoY6/install/
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2/installs/CoY6/src
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::MPI::Install::MPICH2
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::MPI::Install::MPICH2::Install(@args)
</span><br>
<span class="quotelev1">&gt; Value: mpich2_make_all_arguments
</span><br>
<span class="quotelev1">&gt; Value: mpich2_compiler_name
</span><br>
<span class="quotelev1">&gt; Value: bitness
</span><br>
<span class="quotelev1">&gt; Evaluating: &amp;get_mpi_install_bitness(&quot;&quot;)
</span><br>
<span class="quotelev1">&gt; --&gt; Prefix now: 
</span><br>
<span class="quotelev1">&gt; --&gt; Remaining (after &amp;): get_mpi_install_bitness(&quot;&quot;)
</span><br>
<span class="quotelev1">&gt; --&gt; Found func name: get_mpi_install_bitness
</span><br>
<span class="quotelev1">&gt; --&gt; Found beginning of arguments: &quot;&quot;)
</span><br>
<span class="quotelev1">&gt; --&gt; Initial param search: &quot;&quot;)
</span><br>
<span class="quotelev1">&gt; --&gt; Loop: trimmed search: &quot;&quot;)
</span><br>
<span class="quotelev1">&gt; --&gt; Examining char: &quot; (pos 0)
</span><br>
<span class="quotelev1">&gt; --&gt; Found beginning quote
</span><br>
<span class="quotelev1">&gt; --&gt; Found last quote
</span><br>
<span class="quotelev1">&gt; --&gt; Examining char: ) (pos 2)
</span><br>
<span class="quotelev1">&gt; --&gt; Found end of arg (pos 2)
</span><br>
<span class="quotelev1">&gt; Found argument: &quot;&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Remainder: 
</span><br>
<span class="quotelev1">&gt; --&gt; Calling: $ret = MTT::Values::Functions::get_mpi_install_bitness(&quot;&quot;);
</span><br>
<span class="quotelev1">&gt; &amp;get_mpi_intall_bitness
</span><br>
<span class="quotelev1">&gt; &amp;_find_libmpi returning: 
</span><br>
<span class="quotelev1">&gt; Couldn't find libmpi!
</span><br>
<span class="quotelev1">&gt; --&gt; After eval(string), remaining: 0
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: 0
</span><br>
<span class="quotelev1">&gt; Returning: 0
</span><br>
<span class="quotelev1">&gt; Value: endian
</span><br>
<span class="quotelev1">&gt; Evaluating: &amp;get_mpi_install_endian(&quot;&quot;)
</span><br>
<span class="quotelev1">&gt; --&gt; Prefix now: 
</span><br>
<span class="quotelev1">&gt; --&gt; Remaining (after &amp;): get_mpi_install_endian(&quot;&quot;)
</span><br>
<span class="quotelev1">&gt; --&gt; Found func name: get_mpi_install_endian
</span><br>
<span class="quotelev1">&gt; --&gt; Found beginning of arguments: &quot;&quot;)
</span><br>
<span class="quotelev1">&gt; --&gt; Initial param search: &quot;&quot;)
</span><br>
<span class="quotelev1">&gt; --&gt; Loop: trimmed search: &quot;&quot;)
</span><br>
<span class="quotelev1">&gt; --&gt; Examining char: &quot; (pos 0)
</span><br>
<span class="quotelev1">&gt; --&gt; Found beginning quote
</span><br>
<span class="quotelev1">&gt; --&gt; Found last quote
</span><br>
<span class="quotelev1">&gt; --&gt; Examining char: ) (pos 2)
</span><br>
<span class="quotelev1">&gt; --&gt; Found end of arg (pos 2)
</span><br>
<span class="quotelev1">&gt; Found argument: &quot;&quot;
</span><br>
<span class="quotelev1">&gt; --&gt; Remainder: 
</span><br>
<span class="quotelev1">&gt; --&gt; Calling: $ret = MTT::Values::Functions::get_mpi_install_endian(&quot;&quot;);
</span><br>
<span class="quotelev1">&gt; &amp;get_mpi_intall_endian
</span><br>
<span class="quotelev1">&gt; &amp;_find_libmpi returning: 
</span><br>
<span class="quotelev1">&gt; *** Could not find libmpi to calculate endian-ness
</span><br>
<span class="quotelev1">&gt; --&gt; After eval(string), remaining: 0
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: 0
</span><br>
<span class="quotelev1">&gt; Returning: 0
</span><br>
<span class="quotelev1">&gt; Found whatami: /home/pjesa/mtt/collective-bakeoff/client/whatami/whatami
</span><br>
<span class="quotelev1">&gt; Value: platform_type
</span><br>
<span class="quotelev1">&gt; Value: platform_type
</span><br>
<span class="quotelev1">&gt; Value: platform_hardware
</span><br>
<span class="quotelev1">&gt; Value: platform_hardware
</span><br>
<span class="quotelev1">&gt; Value: os_name
</span><br>
<span class="quotelev1">&gt; Value: os_name
</span><br>
<span class="quotelev1">&gt; Value: os_version
</span><br>
<span class="quotelev1">&gt; Value: os_version
</span><br>
<span class="quotelev1">&gt;    Skipped MPI install
</span><br>
<span class="quotelev1">&gt; *** MPI install phase complete
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Phase: MPI Install
</span><br>
<span class="quotelev1">&gt;    Started:       Thu Sep 27 22:39:37 2007
</span><br>
<span class="quotelev1">&gt;    Stopped:       Thu Sep 27 22:39:38 2007
</span><br>
<span class="quotelev1">&gt;    Elapsed:       00:00:01
</span><br>
<span class="quotelev1">&gt;    Total elapsed: 00:00:01
</span><br>
<span class="quotelev1">&gt; *** Test get phase starting
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2/sources
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Test get: [test get: netpipe]
</span><br>
<span class="quotelev1">&gt;    Checking for new test sources...
</span><br>
<span class="quotelev1">&gt; Value: module
</span><br>
<span class="quotelev1">&gt; Evaluating: Download
</span><br>
<span class="quotelev1">&gt; Replacing vars from section test get: netpipe: Download
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: Download
</span><br>
<span class="quotelev1">&gt; Returning: Download
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2/sources
</span><br>
<span class="quotelev1">&gt; Making dir: test_get__netpipe (cwd: /home/pjesa/mtt/scratch2/sources)
</span><br>
<span class="quotelev1">&gt; test_get__netpipe does not exist -- creating
</span><br>
<span class="quotelev1">&gt; chdir test_get__netpipe/
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2/sources
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2/sources/test_get__netpipe
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Test::Get::Download
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Test::Get::Download::Get(@args)
</span><br>
<span class="quotelev1">&gt; Value: download_url
</span><br>
<span class="quotelev1">&gt; Evaluating: <a href="http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz">http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz</a>
</span><br>
<span class="quotelev1">&gt; Replacing vars from section test get: netpipe:
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz">http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz</a>
</span><br>
<span class="quotelev1">&gt; Got final version before escapes:
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz">http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz</a>
</span><br>
<span class="quotelev1">&gt; Returning: <a href="http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz">http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Download got url:
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz">http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz</a>
</span><br>
<span class="quotelev1">&gt; Value: download_username
</span><br>
<span class="quotelev1">&gt; Value: download_password
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MTT::FindProgram::FindProgram returning /usr/bin/wget
</span><br>
<span class="quotelev1">&gt; Running command: wget -nv
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz">http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz</a>
</span><br>
<span class="quotelev1">&gt; OUT:22:39:55
</span><br>
<span class="quotelev1">&gt;    URL:<a href="http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz">http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz</a>
</span><br>
<span class="quotelev1">&gt;    [369585/369585] -&gt; &quot;NetPIPE_3.6.2.tar.gz&quot; [1]
</span><br>
<span class="quotelev1">&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev1">&gt; Value: download_version
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Download complete
</span><br>
<span class="quotelev1">&gt;    Got new test sources
</span><br>
<span class="quotelev1">&gt; *** Test get phase complete
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Phase: Test Get
</span><br>
<span class="quotelev1">&gt;    Started:       Thu Sep 27 22:39:38 2007
</span><br>
<span class="quotelev1">&gt;    Stopped:       Thu Sep 27 22:39:55 2007
</span><br>
<span class="quotelev1">&gt;    Elapsed:       00:00:17
</span><br>
<span class="quotelev1">&gt;    Total elapsed: 00:00:18
</span><br>
<span class="quotelev1">&gt; *** Test build phase starting
</span><br>
<span class="quotelev1">&gt; chdir /home/pjesa/mtt/scratch2/installs
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Test build [test build: netpipe]
</span><br>
<span class="quotelev1">&gt; Value: test_get
</span><br>
<span class="quotelev1">&gt; Evaluating: netpipe
</span><br>
<span class="quotelev1">&gt; Replacing vars from section test build: netpipe: netpipe
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: netpipe
</span><br>
<span class="quotelev1">&gt; Returning: netpipe
</span><br>
<span class="quotelev1">&gt; *** Test build phase complete
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Phase: Test Build
</span><br>
<span class="quotelev1">&gt;    Started:       Thu Sep 27 22:39:55 2007
</span><br>
<span class="quotelev1">&gt;    Stopped:       Thu Sep 27 22:39:55 2007
</span><br>
<span class="quotelev1">&gt;    Elapsed:       00:00:00
</span><br>
<span class="quotelev1">&gt;    Total elapsed: 00:00:18
</span><br>
<span class="quotelev1">&gt; *** Run test phase starting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Test run [netpipe]
</span><br>
<span class="quotelev1">&gt; Value: test_build
</span><br>
<span class="quotelev1">&gt; Evaluating: netpipe
</span><br>
<span class="quotelev1">&gt; Replacing vars from section test run: netpipe: netpipe
</span><br>
<span class="quotelev1">&gt; Got final version before escapes: netpipe
</span><br>
<span class="quotelev1">&gt; Returning: netpipe
</span><br>
<span class="quotelev1">&gt; *** Run test phase complete
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Phase: Test Run
</span><br>
<span class="quotelev1">&gt;    Started:       Thu Sep 27 22:39:55 2007
</span><br>
<span class="quotelev1">&gt;    Stopped:       Thu Sep 27 22:39:55 2007
</span><br>
<span class="quotelev1">&gt;    Elapsed:       00:00:00
</span><br>
<span class="quotelev1">&gt;    Total elapsed: 00:00:18
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Phase: Trim
</span><br>
<span class="quotelev1">&gt;    Started:       Thu Sep 27 22:39:55 2007
</span><br>
<span class="quotelev1">&gt;    Stopped:       Thu Sep 27 22:39:55 2007
</span><br>
<span class="quotelev1">&gt;    Elapsed:       00:00:00
</span><br>
<span class="quotelev1">&gt;    Total elapsed: 00:00:18
</span><br>
<span class="quotelev1">&gt; *** Reporter finalizing
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Reporter::MTTDatabase
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Reporter::MTTDatabase::Finalize(@args)
</span><br>
<span class="quotelev1">&gt; Evaluating: require MTT::Reporter::TextFile
</span><br>
<span class="quotelev1">&gt; Evaluating: $ret = &amp;MTT::Reporter::TextFile::Finalize(@args)
</span><br>
<span class="quotelev1">&gt; *** Reporter finalized
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="0435.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] Problems running MTT with already installed	MPICH-MX"</a>
<li><strong>Previous message:</strong> <a href="0433.php">Jelena Pjesivac-Grbovic: "[MTT users] Problems running MTT with already installed MPICH-MX"</a>
<li><strong>In reply to:</strong> <a href="0433.php">Jelena Pjesivac-Grbovic: "[MTT users] Problems running MTT with already installed MPICH-MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0435.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] Problems running MTT with already installed	MPICH-MX"</a>
<li><strong>Reply:</strong> <a href="0435.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] Problems running MTT with already installed	MPICH-MX"</a>
<li><strong>Reply:</strong> <a href="0436.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] Problems running MTT with already installed	MPICH-MX"</a>
<li><strong>Reply:</strong> <a href="0437.php">Tim Mattox: "Re: [MTT users] Problems running MTT with already installed MPICH-MX"</a>
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
