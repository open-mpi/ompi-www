<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 28 13:06:03 2007" -->
<!-- isoreceived="20070928170603" -->
<!-- sent="Fri, 28 Sep 2007 13:05:57 -0400 (EDT)" -->
<!-- isosent="20070928170557" -->
<!-- name="Jelena Pjesivac-Grbovic" -->
<!-- email="pjesa_at_[hidden]" -->
<!-- subject="Re: [MTT users] Problems running MTT with already installed	MPICH-MX" -->
<!-- id="Pine.LNX.4.62.0709281305040.10138_at_reliant.cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070928163543.GJ1914_at_sun.com" -->
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
<strong>From:</strong> Jelena Pjesivac-Grbovic (<em>pjesa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-28 13:05:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0437.php">Tim Mattox: "Re: [MTT users] Problems running MTT with already installed MPICH-MX"</a>
<li><strong>Previous message:</strong> <a href="0435.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] Problems running MTT with already installed	MPICH-MX"</a>
<li><strong>In reply to:</strong> <a href="0434.php">Ethan Mallove: "Re: [MTT users] Problems running MTT with already installed	MPICH-MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0437.php">Tim Mattox: "Re: [MTT users] Problems running MTT with already installed MPICH-MX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Disregard the previous email... the mpich-mx works well but the MTT is 
<br>
still not running tests with it :(
<br>
<p><p>Thanks,
<br>
Jelena
<br>
<p>On Fri, 28 Sep 2007, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jelena,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Change this line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  alreadyinstalled_dir = /usr/local/mpich-mx/bin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  alreadyinstalled_dir = /usr/local/mpich-mx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does that work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Sep/27/2007 10:46:55PM, Jelena Pjesivac-Grbovic wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to test the MPICH-MX using MTT on our clusters and I am hitting
</span><br>
<span class="quotelev2">&gt;&gt; the wall.
</span><br>
<span class="quotelev2">&gt;&gt; I was able to get Open MPI to run (did not try trunk yet - but nightly
</span><br>
<span class="quotelev2">&gt;&gt; builds worked).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that all phases seem to go through (including Test RUN and
</span><br>
<span class="quotelev2">&gt;&gt; Reported) but nothing happens.
</span><br>
<span class="quotelev2">&gt;&gt; I have attached the stripped down ini file (only with mpich-mx stuff)
</span><br>
<span class="quotelev2">&gt;&gt; and output of the command
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    ./client/mtt --scratch /home/pjesa/mtt/scratch2 \
</span><br>
<span class="quotelev2">&gt;&gt;    --file
</span><br>
<span class="quotelev2">&gt;&gt; /home/pjesa/mtt/collective-bakeoff/samples/ompi-core-perf-testing_mpich-mx.ini
</span><br>
<span class="quotelev2">&gt;&gt; \
</span><br>
<span class="quotelev2">&gt;&gt;    --debug --verbose --print-time --no-section 'skampi imb osu'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think that it must be something stupid because the almost same script
</span><br>
<span class="quotelev2">&gt;&gt; which downloads nightly open mpi build works.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; Jelena
</span><br>
<span class="quotelev2">&gt;&gt;  --
</span><br>
<span class="quotelev2">&gt;&gt; Jelena Pjesivac-Grbovic -- Pjesa, Ph.D.
</span><br>
<span class="quotelev2">&gt;&gt; Graduate Research Assistant
</span><br>
<span class="quotelev2">&gt;&gt; Innovative Computing Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department, UTK
</span><br>
<span class="quotelev2">&gt;&gt; Claxton Complex 350
</span><br>
<span class="quotelev2">&gt;&gt; (865) 974 - 6722 (865) 974 - 6321
</span><br>
<span class="quotelev2">&gt;&gt; jpjesiva_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;The only difference between a problem and a solution is that
</span><br>
<span class="quotelev2">&gt;&gt;  people understand the solution.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                                       -- Charles Kettering
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Content-Description: simplified ini file
</span><br>
<span class="quotelev2">&gt;&gt; #======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; # Generic OMPI core performance testing template configuration
</span><br>
<span class="quotelev2">&gt;&gt; #======================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [MTT]
</span><br>
<span class="quotelev2">&gt;&gt; # Leave this string so that we can identify this data subset in the
</span><br>
<span class="quotelev2">&gt;&gt; # database
</span><br>
<span class="quotelev2">&gt;&gt; # OMPI Core: Use a &quot;test&quot; label until we're ready to run real results
</span><br>
<span class="quotelev2">&gt;&gt; description = [testbake]
</span><br>
<span class="quotelev2">&gt;&gt; #description = [2007 collective performance bakeoff]
</span><br>
<span class="quotelev2">&gt;&gt; # OMPI Core: Use the &quot;trial&quot; flag until we're ready to run real results
</span><br>
<span class="quotelev2">&gt;&gt; trial = 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Put other values here as relevant to your environment.
</span><br>
<span class="quotelev2">&gt;&gt; #hostfile = PBS_NODEFILE
</span><br>
<span class="quotelev2">&gt;&gt; hostfile = /home/pjesa/mtt/runs/machinefile
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Lock]
</span><br>
<span class="quotelev2">&gt;&gt; # Put values here as relevant to your environment.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; # MPI get phase
</span><br>
<span class="quotelev2">&gt;&gt; #======================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [MPI get: MPICH-MX]
</span><br>
<span class="quotelev2">&gt;&gt; mpi_details = MPICH-MX
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; module = AlreadyInstalled
</span><br>
<span class="quotelev2">&gt;&gt; alreadyinstalled_dir = /usr/local/mpich-mx/bin
</span><br>
<span class="quotelev2">&gt;&gt; alreadyinstalled_version = 1.2.7
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #module = Download
</span><br>
<span class="quotelev2">&gt;&gt; #download_url = <a href="http://www.myri.com/ftp/pub/MPICH-MX/mpich-mx_1.2.7..5.tar.gz">http://www.myri.com/ftp/pub/MPICH-MX/mpich-mx_1.2.7..5.tar.gz</a>
</span><br>
<span class="quotelev2">&gt;&gt; ## You need to obtain the username and password from Myricom
</span><br>
<span class="quotelev2">&gt;&gt; #download_username = &lt;OBTAIN THIS FROM MYRICOM&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #download_password = &lt;OBTAIN THIS FROM MYRICOM&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; # Install MPI phase
</span><br>
<span class="quotelev2">&gt;&gt; #======================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [MPI install: MPICH-MX]
</span><br>
<span class="quotelev2">&gt;&gt; mpi_get = mpich-mx
</span><br>
<span class="quotelev2">&gt;&gt; module = MPICH2
</span><br>
<span class="quotelev2">&gt;&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev2">&gt;&gt; merge_stdout_stderr = 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; # MPI run details
</span><br>
<span class="quotelev2">&gt;&gt; #======================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [MPI Details: MPICH-MX]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # You may need different hostfiles for running by slot/by node.
</span><br>
<span class="quotelev2">&gt;&gt; exec = mpirun --machinefile &amp;hostfile() -np &amp;test_np() &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev2">&gt;&gt; network = mx
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; # Test get phase
</span><br>
<span class="quotelev2">&gt;&gt; #======================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Test get: netpipe]
</span><br>
<span class="quotelev2">&gt;&gt; module = Download
</span><br>
<span class="quotelev2">&gt;&gt; download_url = <a href="http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz">http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Test get: osu]
</span><br>
<span class="quotelev2">&gt;&gt; module = SVN
</span><br>
<span class="quotelev2">&gt;&gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/osu">https://svn.open-mpi.org/svn/ompi-tests/trunk/osu</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Test get: imb]
</span><br>
<span class="quotelev2">&gt;&gt; module = SVN
</span><br>
<span class="quotelev2">&gt;&gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3">https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Test get: skampi]
</span><br>
<span class="quotelev2">&gt;&gt; module = SVN
</span><br>
<span class="quotelev2">&gt;&gt; svn_url = <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/skampi-5.0.1">https://svn.open-mpi.org/svn/ompi-tests/trunk/skampi-5.0.1</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; # Test build phase
</span><br>
<span class="quotelev2">&gt;&gt; #======================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Test build: netpipe]
</span><br>
<span class="quotelev2">&gt;&gt; test_get = netpipe
</span><br>
<span class="quotelev2">&gt;&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev2">&gt;&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev2">&gt;&gt; stderr_save_lines = 100
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; module = Shell
</span><br>
<span class="quotelev2">&gt;&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev2">&gt;&gt; make mpi
</span><br>
<span class="quotelev2">&gt;&gt; EOT
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Test build: osu]
</span><br>
<span class="quotelev2">&gt;&gt; test_get = osu
</span><br>
<span class="quotelev2">&gt;&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev2">&gt;&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev2">&gt;&gt; stderr_save_lines = 100
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; module = Shell
</span><br>
<span class="quotelev2">&gt;&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev2">&gt;&gt; make osu_latency osu_bw osu_bibw
</span><br>
<span class="quotelev2">&gt;&gt; EOT
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Test build: imb]
</span><br>
<span class="quotelev2">&gt;&gt; test_get = imb
</span><br>
<span class="quotelev2">&gt;&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev2">&gt;&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; module = Shell
</span><br>
<span class="quotelev2">&gt;&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev2">&gt;&gt; cd src
</span><br>
<span class="quotelev2">&gt;&gt; make clean IMB-MPI1
</span><br>
<span class="quotelev2">&gt;&gt; EOT
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Test build: skampi]
</span><br>
<span class="quotelev2">&gt;&gt; test_get = skampi
</span><br>
<span class="quotelev2">&gt;&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev2">&gt;&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev2">&gt;&gt; stderr_save_lines = 100
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; module = Shell
</span><br>
<span class="quotelev2">&gt;&gt; # Set EVERYONE_CAN_MPI_IO for HP MPI
</span><br>
<span class="quotelev2">&gt;&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev2">&gt;&gt; make CFLAGS=&quot;-O2 -DPRODUCE_SPARSE_OUTPUT -DEVERYONE_CAN_MPI_IO&quot;
</span><br>
<span class="quotelev2">&gt;&gt; EOT
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; # Test Run phase
</span><br>
<span class="quotelev2">&gt;&gt; #======================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Test run: netpipe]
</span><br>
<span class="quotelev2">&gt;&gt; test_build = netpipe
</span><br>
<span class="quotelev2">&gt;&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev2">&gt;&gt; # Timeout hueristic: 10 minutes
</span><br>
<span class="quotelev2">&gt;&gt; timeout = 10:00
</span><br>
<span class="quotelev2">&gt;&gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev2">&gt;&gt; # Ensure to leave this value as &quot;-1&quot;, or performance results could be lost!
</span><br>
<span class="quotelev2">&gt;&gt; stdout_save_lines = -1
</span><br>
<span class="quotelev2">&gt;&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev2">&gt;&gt; np = 2
</span><br>
<span class="quotelev2">&gt;&gt; alloc = node
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; specify_module = Simple
</span><br>
<span class="quotelev2">&gt;&gt; analyze_module = NetPipe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; simple_pass:tests = NPmpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Test run: osu]
</span><br>
<span class="quotelev2">&gt;&gt; test_build = osu
</span><br>
<span class="quotelev2">&gt;&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev2">&gt;&gt; # Timeout hueristic: 10 minutes
</span><br>
<span class="quotelev2">&gt;&gt; timeout = 10:00
</span><br>
<span class="quotelev2">&gt;&gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev2">&gt;&gt; # Ensure to leave this value as &quot;-1&quot;, or performance results could be lost!
</span><br>
<span class="quotelev2">&gt;&gt; stdout_save_lines = -1
</span><br>
<span class="quotelev2">&gt;&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev2">&gt;&gt; np = 2
</span><br>
<span class="quotelev2">&gt;&gt; alloc = node
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; specify_module = Simple
</span><br>
<span class="quotelev2">&gt;&gt; analyze_module = OSU
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; simple_pass:tests = osu_bw osu_latency osu_bibw
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Test run: imb]
</span><br>
<span class="quotelev2">&gt;&gt; test_build = imb
</span><br>
<span class="quotelev2">&gt;&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev2">&gt;&gt; # Timeout hueristic: 10 minutes
</span><br>
<span class="quotelev2">&gt;&gt; timeout = 10:00
</span><br>
<span class="quotelev2">&gt;&gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev2">&gt;&gt; # Ensure to leave this value as &quot;-1&quot;, or performance results could be lost!
</span><br>
<span class="quotelev2">&gt;&gt; stdout_save_lines = -1
</span><br>
<span class="quotelev2">&gt;&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev2">&gt;&gt; np = &amp;env_max_procs()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; argv = -npmin &amp;test_np() &amp;enumerate(&quot;PingPong&quot;, &quot;PingPing&quot;, &quot;Sendrecv&quot;, &quot;Exchange&quot;, &quot;Allreduce&quot;, &quot;Reduce&quot;, &quot;Reduce_scatter&quot;, &quot;Allgather&quot;, &quot;Allgatherv&quot;, &quot;Alltoall&quot;, &quot;Bcast&quot;, &quot;Barrier&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; specify_module = Simple
</span><br>
<span class="quotelev2">&gt;&gt; analyze_module = IMB
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; simple_pass:tests = src/IMB-MPI1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Test run: skampi]
</span><br>
<span class="quotelev2">&gt;&gt; test_build = skampi
</span><br>
<span class="quotelev2">&gt;&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev2">&gt;&gt; # Timeout hueristic: 10 minutes
</span><br>
<span class="quotelev2">&gt;&gt; timeout = 10:00
</span><br>
<span class="quotelev2">&gt;&gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev2">&gt;&gt; # Ensure to leave this value as &quot;-1&quot;, or performance results could be lost!
</span><br>
<span class="quotelev2">&gt;&gt; stdout_save_lines = -1
</span><br>
<span class="quotelev2">&gt;&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev2">&gt;&gt; np = &amp;env_max_procs()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; argv = -i &amp;find(&quot;mtt_.+.ski&quot;, &quot;input_files_bakeoff&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; specify_module = Simple
</span><br>
<span class="quotelev2">&gt;&gt; analyze_module = SKaMPI
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; simple_pass:tests = skampi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; # Reporter phase
</span><br>
<span class="quotelev2">&gt;&gt; #======================================================================
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
<span class="quotelev2">&gt;&gt; # Change this to be the username and password for your submit user.
</span><br>
<span class="quotelev2">&gt;&gt; # Get this from the OMPI MTT administrator.
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_username = utk
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_password = utk0mp1mtt
</span><br>
<span class="quotelev2">&gt;&gt; # Change this to be some short string identifying your cluster.
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_platform = grig
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_debug_filename = mttdb_debug_file_perf
</span><br>
<span class="quotelev2">&gt;&gt; mttdatabase_keep_debug_files = 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # This is a backup reporter; it also writes results to a local text
</span><br>
<span class="quotelev2">&gt;&gt; # file
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Reporter: text file backup]
</span><br>
<span class="quotelev2">&gt;&gt; module = TextFile
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; textfile_filename = $phase-$section-$mpi_name-$mpi_version.txt
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; textfile_summary_header = &lt;&lt;EOT
</span><br>
<span class="quotelev2">&gt;&gt; Hostname: &amp;shell(&quot;hostname&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; EOT
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; textfile_summary_footer =
</span><br>
<span class="quotelev2">&gt;&gt; textfile_detail_header =
</span><br>
<span class="quotelev2">&gt;&gt; textfile_detail_footer =
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; textfile_textwrap = 78
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Content-Description: output of the MTT command
</span><br>
<span class="quotelev2">&gt;&gt; Debug is 1, Verbose is 1
</span><br>
<span class="quotelev2">&gt;&gt; *** MTT: ./client/mtt --scratch /home/pjesa/mtt/scratch2 --file
</span><br>
<span class="quotelev2">&gt;&gt;   /home/pjesa/mtt/collective-bakeoff/samples/ompi-core-perf-testing_mpich-m
</span><br>
<span class="quotelev2">&gt;&gt;   x.ini --debug --verbose --print-time --no-section skampi imb osu
</span><br>
<span class="quotelev2">&gt;&gt; chdir ./client
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/collective-bakeoff
</span><br>
<span class="quotelev2">&gt;&gt; Copying:
</span><br>
<span class="quotelev2">&gt;&gt;    /home/pjesa/mtt/collective-bakeoff/samples/ompi-core-perf-testing_mpich-
</span><br>
<span class="quotelev2">&gt;&gt;    mx.ini to /tmp/yy79ezjkh0.ini
</span><br>
<span class="quotelev2">&gt;&gt; Reading ini file:
</span><br>
<span class="quotelev2">&gt;&gt;    /home/pjesa/mtt/collective-bakeoff/samples/ompi-core-perf-testing_mpich-
</span><br>
<span class="quotelev2">&gt;&gt;    mx.ini
</span><br>
<span class="quotelev2">&gt;&gt; Validating INI inifile: /tmp/yy79ezjkh0.ini
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=mpi get: mpich-mx): $section =~ /skampi/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=mpi get: mpich-mx): $section =~ /imb/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=mpi get: mpich-mx): $section =~ /osu/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=mpi install: mpich-mx): $section =~ /skampi/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=mpi install: mpich-mx): $section =~ /imb/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=mpi install: mpich-mx): $section =~ /osu/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=mpi details: mpich-mx): $section =~ /skampi/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=mpi details: mpich-mx): $section =~ /imb/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=mpi details: mpich-mx): $section =~ /osu/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=test get: netpipe): $section =~ /skampi/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=test get: netpipe): $section =~ /imb/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=test get: netpipe): $section =~ /osu/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=test get: osu): $section =~ /skampi/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=test get: osu): $section =~ /imb/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=test get: osu): $section =~ /osu/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=test get: imb): $section =~ /skampi/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=test get: imb): $section =~ /imb/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=test get: skampi): $section =~ /skampi/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=test build: netpipe): $section =~ /skampi/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=test build: netpipe): $section =~ /imb/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=test build: netpipe): $section =~ /osu/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=test build: osu): $section =~ /skampi/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=test build: osu): $section =~ /imb/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=test build: osu): $section =~ /osu/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=test build: imb): $section =~ /skampi/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=test build: imb): $section =~ /imb/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=test build: skampi): $section =~ /skampi/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=test run: netpipe): $section =~ /skampi/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=test run: netpipe): $section =~ /imb/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=test run: netpipe): $section =~ /osu/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=test run: osu): $section =~ /skampi/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=test run: osu): $section =~ /imb/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=test run: osu): $section =~ /osu/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=test run: imb): $section =~ /skampi/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=test run: imb): $section =~ /imb/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=test run: skampi): $section =~ /skampi/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=reporter: iu database): $section =~ /skampi/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=reporter: iu database): $section =~ /imb/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=reporter: iu database): $section =~ /osu/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=reporter: text file backup): $section =~
</span><br>
<span class="quotelev2">&gt;&gt;    /skampi/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=reporter: text file backup): $section =~ /imb/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: regexp (section=reporter: text file backup): $section =~ /osu/i
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Delete: 0 (del on match: 1, del on mismatch: 0)
</span><br>
<span class="quotelev2">&gt;&gt; FilterINI: Final list of sections:
</span><br>
<span class="quotelev2">&gt;&gt;        [mtt]
</span><br>
<span class="quotelev2">&gt;&gt;        [lock]
</span><br>
<span class="quotelev2">&gt;&gt;        [mpi get: mpich-mx]
</span><br>
<span class="quotelev2">&gt;&gt;        [mpi install: mpich-mx]
</span><br>
<span class="quotelev2">&gt;&gt;        [mpi details: mpich-mx]
</span><br>
<span class="quotelev2">&gt;&gt;        [test get: netpipe]
</span><br>
<span class="quotelev2">&gt;&gt;        [test build: netpipe]
</span><br>
<span class="quotelev2">&gt;&gt;        [test run: netpipe]
</span><br>
<span class="quotelev2">&gt;&gt;        [reporter: iu database]
</span><br>
<span class="quotelev2">&gt;&gt;        [reporter: text file backup]
</span><br>
<span class="quotelev2">&gt;&gt; Scratch: /home/pjesa/mtt/scratch2
</span><br>
<span class="quotelev2">&gt;&gt; Making dir: /home/pjesa/mtt/scratch2 (cwd:
</span><br>
<span class="quotelev2">&gt;&gt;    /home/pjesa/mtt/collective-bakeoff)
</span><br>
<span class="quotelev2">&gt;&gt; /home/pjesa/mtt/scratch2 does not exist -- creating
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2/
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/collective-bakeoff
</span><br>
<span class="quotelev2">&gt;&gt; Scratch resolved: /home/pjesa/mtt/scratch2
</span><br>
<span class="quotelev2">&gt;&gt; Value: force
</span><br>
<span class="quotelev2">&gt;&gt; Making dir: /home/pjesa/mtt/scratch2/sources (cwd:
</span><br>
<span class="quotelev2">&gt;&gt;    /home/pjesa/mtt/scratch2)
</span><br>
<span class="quotelev2">&gt;&gt; /home/pjesa/mtt/scratch2/sources does not exist -- creating
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2/sources/
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2
</span><br>
<span class="quotelev2">&gt;&gt; Making dir: /home/pjesa/mtt/scratch2/installs (cwd:
</span><br>
<span class="quotelev2">&gt;&gt;    /home/pjesa/mtt/scratch2)
</span><br>
<span class="quotelev2">&gt;&gt; /home/pjesa/mtt/scratch2/installs does not exist -- creating
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2/installs/
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2
</span><br>
<span class="quotelev2">&gt;&gt; Making dir: /home/pjesa/mtt/scratch2/test_runs (cwd:
</span><br>
<span class="quotelev2">&gt;&gt;    /home/pjesa/mtt/scratch2)
</span><br>
<span class="quotelev2">&gt;&gt; /home/pjesa/mtt/scratch2/test_runs does not exist -- creating
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2/test_runs/
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2
</span><br>
<span class="quotelev2">&gt;&gt; Value: funclet_files
</span><br>
<span class="quotelev2">&gt;&gt; Value: hostfile
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: /home/pjesa/mtt/runs/machinefile
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section MTT: /home/pjesa/mtt/runs/machinefile
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: /home/pjesa/mtt/runs/machinefile
</span><br>
<span class="quotelev2">&gt;&gt; Returning: /home/pjesa/mtt/runs/machinefile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Got default hostfile: /home/pjesa/mtt/runs/machinefile, max_np: 4
</span><br>
<span class="quotelev2">&gt;&gt; Value: hostlist
</span><br>
<span class="quotelev2">&gt;&gt; Value: max_np
</span><br>
<span class="quotelev2">&gt;&gt; Value: textwrap
</span><br>
<span class="quotelev2">&gt;&gt; Value: drain_timeout
</span><br>
<span class="quotelev2">&gt;&gt; Value: trim_save_successful
</span><br>
<span class="quotelev2">&gt;&gt; Value: trim_save_failed
</span><br>
<span class="quotelev2">&gt;&gt; Value: trial
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: 1
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section MTT: 1
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: 1
</span><br>
<span class="quotelev2">&gt;&gt; Returning: 1
</span><br>
<span class="quotelev2">&gt;&gt; Value: http_proxy
</span><br>
<span class="quotelev2">&gt;&gt; Value: https_proxy
</span><br>
<span class="quotelev2">&gt;&gt; Value: ftp_proxy
</span><br>
<span class="quotelev2">&gt;&gt; Value: terminate_files
</span><br>
<span class="quotelev2">&gt;&gt; Value: before_all_exec
</span><br>
<span class="quotelev2">&gt;&gt; Value: before_all_exec_timeout
</span><br>
<span class="quotelev2">&gt;&gt; Value: before_all_exec_pass
</span><br>
<span class="quotelev2">&gt;&gt; Value: before_each_exec
</span><br>
<span class="quotelev2">&gt;&gt; Value: before_each_exec_timeout
</span><br>
<span class="quotelev2">&gt;&gt; Value: before_each_exec_pass
</span><br>
<span class="quotelev2">&gt;&gt; Value: after_all_exec
</span><br>
<span class="quotelev2">&gt;&gt; Value: after_all_exec_timeout
</span><br>
<span class="quotelev2">&gt;&gt; Value: after_all_exec_pass
</span><br>
<span class="quotelev2">&gt;&gt; Value: after_each_exec
</span><br>
<span class="quotelev2">&gt;&gt; Value: after_each_exec_timeout
</span><br>
<span class="quotelev2">&gt;&gt; Value: after_each_exec_pass
</span><br>
<span class="quotelev2">&gt;&gt; Value: module
</span><br>
<span class="quotelev2">&gt;&gt; Value: log_file
</span><br>
<span class="quotelev2">&gt;&gt; Value: logfile
</span><br>
<span class="quotelev2">&gt;&gt; *** Reporter initializing
</span><br>
<span class="quotelev2">&gt;&gt; Value: module
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: MTTDatabase
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section reporter: iu database: MTTDatabase
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: MTTDatabase
</span><br>
<span class="quotelev2">&gt;&gt; Returning: MTTDatabase
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Initializing reporter module: MTTDatabase
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: require MTT::Reporter::MTTDatabase
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: $ret = &amp;MTT::Reporter::MTTDatabase::Init(@args)
</span><br>
<span class="quotelev2">&gt;&gt; Value: mttdatabase_username
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: utk
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section reporter: iu database: utk
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: utk
</span><br>
<span class="quotelev2">&gt;&gt; Returning: utk
</span><br>
<span class="quotelev2">&gt;&gt; Value: mttdatabase_password
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: utk0mp1mtt
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section reporter: iu database: utk0mp1mtt
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: utk0mp1mtt
</span><br>
<span class="quotelev2">&gt;&gt; Returning: utk0mp1mtt
</span><br>
<span class="quotelev2">&gt;&gt; Value: mttdatabase_url
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section reporter: iu database:
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<span class="quotelev2">&gt;&gt; Returning: <a href="https://www.open-mpi.org/mtt/submit/">https://www.open-mpi.org/mtt/submit/</a>
</span><br>
<span class="quotelev2">&gt;&gt; Value: mttdatabase_realm
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: OMPI
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section reporter: iu database: OMPI
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: OMPI
</span><br>
<span class="quotelev2">&gt;&gt; Returning: OMPI
</span><br>
<span class="quotelev2">&gt;&gt; Value: mttdatabase_email_errors_to
</span><br>
<span class="quotelev2">&gt;&gt; Value: mttdatabase_debug_filename
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: mttdb_debug_file_perf
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section reporter: iu database: mttdb_debug_file_perf
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: mttdb_debug_file_perf
</span><br>
<span class="quotelev2">&gt;&gt; Returning: mttdb_debug_file_perf
</span><br>
<span class="quotelev2">&gt;&gt; Value: mttdatabase_keep_debug_files
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: 1
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section reporter: iu database: 1
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: 1
</span><br>
<span class="quotelev2">&gt;&gt; Returning: 1
</span><br>
<span class="quotelev2">&gt;&gt; Value: mttdatabase_hostname
</span><br>
<span class="quotelev2">&gt;&gt; Value: local_username
</span><br>
<span class="quotelev2">&gt;&gt; Value: mttdatabase_platform
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: grig
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section reporter: iu database: grig
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: grig
</span><br>
<span class="quotelev2">&gt;&gt; Returning: grig
</span><br>
<span class="quotelev2">&gt;&gt;    Set HTTP credentials for realm &quot;OMPI&quot;
</span><br>
<span class="quotelev2">&gt;&gt; MTTDatabase getting a client serial number...
</span><br>
<span class="quotelev2">&gt;&gt; MTTDatabase trying proxy:  / Default (none)
</span><br>
<span class="quotelev2">&gt;&gt; MTTDatabase got response:
</span><br>
<span class="quotelev2">&gt;&gt;    === client_serial = 6320 ===
</span><br>
<span class="quotelev2">&gt;&gt; MTTDatabase parsed invocation serial: 6320
</span><br>
<span class="quotelev2">&gt;&gt; Making dir: /home/pjesa/mtt/scratch2/mttdatabase-submit (cwd:
</span><br>
<span class="quotelev2">&gt;&gt;    /home/pjesa/mtt/scratch2)
</span><br>
<span class="quotelev2">&gt;&gt; /home/pjesa/mtt/scratch2/mttdatabase-submit does not exist -- creating
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2/mttdatabase-submit/
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2
</span><br>
<span class="quotelev2">&gt;&gt; MTTDatabase reporter writing to debug file
</span><br>
<span class="quotelev2">&gt;&gt;    (/home/pjesa/mtt/scratch2/mttdatabase-submit/mttdb_debug_file_perf)
</span><br>
<span class="quotelev2">&gt;&gt; MTTDatabase reporter initialized (OMPI, utk, XXXXXX,
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="https://www.open-mpi.org:443/mtt/submit/">https://www.open-mpi.org:443/mtt/submit/</a>, grig)
</span><br>
<span class="quotelev2">&gt;&gt; Value: module
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: TextFile
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section reporter: text file backup: TextFile
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: TextFile
</span><br>
<span class="quotelev2">&gt;&gt; Returning: TextFile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Initializing reporter module: TextFile
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: require MTT::Reporter::TextFile
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: $ret = &amp;MTT::Reporter::TextFile::Init(@args)
</span><br>
<span class="quotelev2">&gt;&gt; Value: textfile_summary_header
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: Hostname: &amp;shell(&quot;hostname&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;    uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section reporter: text file backup: Hostname:
</span><br>
<span class="quotelev2">&gt;&gt;    &amp;shell(&quot;hostname&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;    uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Prefix now: Hostname:
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Remaining (after &amp;): shell(&quot;hostname&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;    uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found func name: shell
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found beginning of arguments: &quot;hostname&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;    uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Initial param search: &quot;hostname&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;    uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Loop: trimmed search: &quot;hostname&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;    uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Examining char: &quot; (pos 0)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found beginning quote
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found last quote
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Examining char: ) (pos 10)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found end of arg (pos 10)
</span><br>
<span class="quotelev2">&gt;&gt; Found argument: &quot;hostname&quot;
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Remainder:
</span><br>
<span class="quotelev2">&gt;&gt;    uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Calling: $ret = MTT::Values::Functions::shell(&quot;hostname&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; &amp;shell: got hostname
</span><br>
<span class="quotelev2">&gt;&gt; &amp;shell: returning grig-head
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; After eval(string), remaining: grig-head
</span><br>
<span class="quotelev2">&gt;&gt;    uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section reporter: text file backup: grig-head
</span><br>
<span class="quotelev2">&gt;&gt;    uname: &amp;shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Prefix now: Hostname: grig-head
</span><br>
<span class="quotelev2">&gt;&gt;    uname:
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Remaining (after &amp;): shell(&quot;uname -a&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found func name: shell
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found beginning of arguments: &quot;uname -a&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Initial param search: &quot;uname -a&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Loop: trimmed search: &quot;uname -a&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Examining char: &quot; (pos 0)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found beginning quote
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found last quote
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Examining char: ) (pos 10)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found end of arg (pos 10)
</span><br>
<span class="quotelev2">&gt;&gt; Found argument: &quot;uname -a&quot;
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Remainder:
</span><br>
<span class="quotelev2">&gt;&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Calling: $ret = MTT::Values::Functions::shell(&quot;uname -a&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; &amp;shell: got uname -a
</span><br>
<span class="quotelev2">&gt;&gt; &amp;shell: returning Linux grig-head 2.6.8 #1 SMP Fri Oct 20 17:13:21 EDT 2006
</span><br>
<span class="quotelev2">&gt;&gt;    x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; After eval(string), remaining: Linux grig-head 2.6.8 #1 SMP Fri Oct 20
</span><br>
<span class="quotelev2">&gt;&gt;    17:13:21 EDT 2006 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section reporter: text file backup: Linux grig-head
</span><br>
<span class="quotelev2">&gt;&gt;    2.6.8 #1 SMP Fri Oct 20 17:13:21 EDT 2006 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt;    Username: &amp;shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Prefix now: Hostname: grig-head
</span><br>
<span class="quotelev2">&gt;&gt;    uname: Linux grig-head 2.6.8 #1 SMP Fri Oct 20 17:13:21 EDT 2006 x86_64
</span><br>
<span class="quotelev2">&gt;&gt;    GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt;    Username:
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Remaining (after &amp;): shell(&quot;who am i&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found func name: shell
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found beginning of arguments: &quot;who am i&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Initial param search: &quot;who am i&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Loop: trimmed search: &quot;who am i&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Examining char: &quot; (pos 0)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found beginning quote
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found last quote
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Examining char: ) (pos 10)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found end of arg (pos 10)
</span><br>
<span class="quotelev2">&gt;&gt; Found argument: &quot;who am i&quot;
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Remainder:
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Calling: $ret = MTT::Values::Functions::shell(&quot;who am i&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; &amp;shell: got who am i
</span><br>
<span class="quotelev2">&gt;&gt; &amp;shell: returning pjesa    pts/8	Sep 18 15:45 (reliant.cs.utk.edu)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; After eval(string), remaining: pjesa    pts/8	 Sep 18 15:45
</span><br>
<span class="quotelev2">&gt;&gt;    (reliant.cs.utk.edu)
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section reporter: text file backup: pjesa	 pts/8
</span><br>
<span class="quotelev2">&gt;&gt;      Sep 18 15:45 (reliant.cs.utk.edu)
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: pjesa    pts/8	Sep 18 15:45
</span><br>
<span class="quotelev2">&gt;&gt;    (reliant.cs.utk.edu)
</span><br>
<span class="quotelev2">&gt;&gt; Returning: Hostname: grig-head
</span><br>
<span class="quotelev2">&gt;&gt;    uname: Linux grig-head 2.6.8 #1 SMP Fri Oct 20 17:13:21 EDT 2006 x86_64
</span><br>
<span class="quotelev2">&gt;&gt;    GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt;    Username: pjesa    pts/8	   Sep 18 15:45 (reliant.cs.utk.edu)
</span><br>
<span class="quotelev2">&gt;&gt; Value: textfile_summary_footer
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating:
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section reporter: text file backup:
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes:
</span><br>
<span class="quotelev2">&gt;&gt; Returning:
</span><br>
<span class="quotelev2">&gt;&gt; Value: textfile_detail_header
</span><br>
<span class="quotelev2">&gt;&gt; Value: textfile_detail_footer
</span><br>
<span class="quotelev2">&gt;&gt; Value: textfile_textwrap
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: 78
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section reporter: text file backup: 78
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: 78
</span><br>
<span class="quotelev2">&gt;&gt; Returning: 78
</span><br>
<span class="quotelev2">&gt;&gt; File reporter initialized (/home/pjesa/mtt/scratch2/)
</span><br>
<span class="quotelev2">&gt;&gt; *** Reporter initialized
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: &amp;getenv(&quot;HOME&quot;)/mtt-stop
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Prefix now:
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Remaining (after &amp;): getenv(&quot;HOME&quot;)/mtt-stop
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found func name: getenv
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found beginning of arguments: &quot;HOME&quot;)/mtt-stop
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Initial param search: &quot;HOME&quot;)/mtt-stop
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Loop: trimmed search: &quot;HOME&quot;)/mtt-stop
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Examining char: &quot; (pos 0)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found beginning quote
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found last quote
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Examining char: ) (pos 6)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found end of arg (pos 6)
</span><br>
<span class="quotelev2">&gt;&gt; Found argument: &quot;HOME&quot;
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Remainder: /mtt-stop
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Calling: $ret = MTT::Values::Functions::getenv(&quot;HOME&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; &amp;getenv(HOME) returning: /home/pjesa
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; After eval(string), remaining: /home/pjesa/mtt-stop
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: /home/pjesa/mtt-stop
</span><br>
<span class="quotelev2">&gt;&gt; Returning: /home/pjesa/mtt-stop
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: &amp;scratch_root()/mtt-stop
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Prefix now:
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Remaining (after &amp;): scratch_root()/mtt-stop
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found func name: scratch_root
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found beginning of arguments: )/mtt-stop
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Initial param search: )/mtt-stop
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Loop: trimmed search: )/mtt-stop
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Examining char: ) (pos 0)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found end of arg (pos 0)
</span><br>
<span class="quotelev2">&gt;&gt; Found empty argument
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Remainder: /mtt-stop
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Calling: $ret = MTT::Values::Functions::scratch_root();
</span><br>
<span class="quotelev2">&gt;&gt; &amp;scratch_root() returning: /home/pjesa/mtt/scratch2
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; After eval(string), remaining: /home/pjesa/mtt/scratch2/mtt-stop
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: /home/pjesa/mtt/scratch2/mtt-stop
</span><br>
<span class="quotelev2">&gt;&gt; Returning: /home/pjesa/mtt/scratch2/mtt-stop
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI get phase starting
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2/sources
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI get: [mpi get: mpich-mx]
</span><br>
<span class="quotelev2">&gt;&gt;    Checking for new MPI sources...
</span><br>
<span class="quotelev2">&gt;&gt; Value: module
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: AlreadyInstalled
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section mpi get: mpich-mx: AlreadyInstalled
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: AlreadyInstalled
</span><br>
<span class="quotelev2">&gt;&gt; Returning: AlreadyInstalled
</span><br>
<span class="quotelev2">&gt;&gt; Value: mpi_details
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: MPICH-MX
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section mpi get: mpich-mx: MPICH-MX
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: MPICH-MX
</span><br>
<span class="quotelev2">&gt;&gt; Returning: MPICH-MX
</span><br>
<span class="quotelev2">&gt;&gt; Value: env_module
</span><br>
<span class="quotelev2">&gt;&gt; Value: setenv
</span><br>
<span class="quotelev2">&gt;&gt; Value: unsetenv
</span><br>
<span class="quotelev2">&gt;&gt; Value: prepend_path
</span><br>
<span class="quotelev2">&gt;&gt; Value: append_path
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2/sources
</span><br>
<span class="quotelev2">&gt;&gt; Making dir: mpi_get__mpich-mx (cwd: /home/pjesa/mtt/scratch2/sources)
</span><br>
<span class="quotelev2">&gt;&gt; mpi_get__mpich-mx does not exist -- creating
</span><br>
<span class="quotelev2">&gt;&gt; chdir mpi_get__mpich-mx/
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2/sources
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2/sources/mpi_get__mpich-mx
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: require MTT::MPI::Get::AlreadyInstalled
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: $ret = &amp;MTT::MPI::Get::AlreadyInstalled::Get(@args)
</span><br>
<span class="quotelev2">&gt;&gt; Value: alreadyinstalled_dir
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: /usr/local/mpich-mx/bin
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section mpi get: mpich-mx: /usr/local/mpich-mx/bin
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: /usr/local/mpich-mx/bin
</span><br>
<span class="quotelev2">&gt;&gt; Returning: /usr/local/mpich-mx/bin
</span><br>
<span class="quotelev2">&gt;&gt;    Using MPI in: /usr/local/mpich-mx/bin
</span><br>
<span class="quotelev2">&gt;&gt; Value: alreadyinstalled_version
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: 1.2.7
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section mpi get: mpich-mx: 1.2.7
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: 1.2.7
</span><br>
<span class="quotelev2">&gt;&gt; Returning: 1.2.7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MTT::MPI::Get::AlreadyInstalled complete
</span><br>
<span class="quotelev2">&gt;&gt;    Got new MPI sources: version 1.2.7
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI get phase complete
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Phase: MPI Get
</span><br>
<span class="quotelev2">&gt;&gt;    Started:       Thu Sep 27 22:39:37 2007
</span><br>
<span class="quotelev2">&gt;&gt;    Stopped:       Thu Sep 27 22:39:37 2007
</span><br>
<span class="quotelev2">&gt;&gt;    Elapsed:       00:00:00
</span><br>
<span class="quotelev2">&gt;&gt;    Total elapsed: 00:00:00
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI install phase starting
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2/installs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI install [mpi install: mpich-mx]
</span><br>
<span class="quotelev2">&gt;&gt; Value: mpi_get
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: mpich-mx
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section mpi install: mpich-mx: mpich-mx
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: mpich-mx
</span><br>
<span class="quotelev2">&gt;&gt; Returning: mpich-mx
</span><br>
<span class="quotelev2">&gt;&gt; Checking for [mpich-mx] / [1.2.7] / [mpich-mx]
</span><br>
<span class="quotelev2">&gt;&gt;    Installing MPI: [mpich-mx] / [1.2.7] / [mpich-mx]...
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2/installs
</span><br>
<span class="quotelev2">&gt;&gt; Unique directory: CoY6
</span><br>
<span class="quotelev2">&gt;&gt; Making dir: CoY6 (cwd: /home/pjesa/mtt/scratch2/installs)
</span><br>
<span class="quotelev2">&gt;&gt; CoY6 does not exist -- creating
</span><br>
<span class="quotelev2">&gt;&gt; chdir CoY6/
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2/installs
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2/installs/CoY6
</span><br>
<span class="quotelev2">&gt;&gt; Value: module
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: MPICH2
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section mpi install: mpich-mx: MPICH2
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: MPICH2
</span><br>
<span class="quotelev2">&gt;&gt; Returning: MPICH2
</span><br>
<span class="quotelev2">&gt;&gt; Value: description
</span><br>
<span class="quotelev2">&gt;&gt; Value: description
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: [testbake]
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section MTT: [testbake]
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: [testbake]
</span><br>
<span class="quotelev2">&gt;&gt; Returning: [testbake]
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2/installs/CoY6
</span><br>
<span class="quotelev2">&gt;&gt; chdir ..
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2/installs/CoY6
</span><br>
<span class="quotelev2">&gt;&gt; Sym linked: CoY6 to mpich-mx#mpich-mx#1.2.7
</span><br>
<span class="quotelev2">&gt;&gt; Value: env_module
</span><br>
<span class="quotelev2">&gt;&gt; Value: setenv
</span><br>
<span class="quotelev2">&gt;&gt; Value: unsetenv
</span><br>
<span class="quotelev2">&gt;&gt; Value: prepend_path
</span><br>
<span class="quotelev2">&gt;&gt; Value: append_path
</span><br>
<span class="quotelev2">&gt;&gt; Value: configure_arguments
</span><br>
<span class="quotelev2">&gt;&gt; Value: vpath_mode
</span><br>
<span class="quotelev2">&gt;&gt; Value: make_all_arguments
</span><br>
<span class="quotelev2">&gt;&gt; Value: make_check
</span><br>
<span class="quotelev2">&gt;&gt; Value: compiler_name
</span><br>
<span class="quotelev2">&gt;&gt; Value: compiler_version
</span><br>
<span class="quotelev2">&gt;&gt; Value: save_stdout_on_success
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: 1
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section mpi install: mpich-mx: 1
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: 1
</span><br>
<span class="quotelev2">&gt;&gt; Returning: 1
</span><br>
<span class="quotelev2">&gt;&gt; Value: merge_stdout_stderr
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: 0
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section mpi install: mpich-mx: 0
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: 0
</span><br>
<span class="quotelev2">&gt;&gt; Returning: 0
</span><br>
<span class="quotelev2">&gt;&gt; Value: stderr_save_lines
</span><br>
<span class="quotelev2">&gt;&gt; Value: stdout_save_lines
</span><br>
<span class="quotelev2">&gt;&gt; Running command: rm -rf src
</span><br>
<span class="quotelev2">&gt;&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev2">&gt;&gt; Making dir: src (cwd: /home/pjesa/mtt/scratch2/installs/CoY6)
</span><br>
<span class="quotelev2">&gt;&gt; src does not exist -- creating
</span><br>
<span class="quotelev2">&gt;&gt; chdir src/
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2/installs/CoY6
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2/installs/CoY6/src
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: require MTT::MPI::Get::AlreadyInstalled
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: $ret =
</span><br>
<span class="quotelev2">&gt;&gt;    &amp;MTT::MPI::Get::AlreadyInstalled::PrepareForInstall(@args)
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2/installs/CoY6/src
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2/installs/CoY6/src
</span><br>
<span class="quotelev2">&gt;&gt; Making dir: /home/pjesa/mtt/scratch2/installs/CoY6/install (cwd:
</span><br>
<span class="quotelev2">&gt;&gt;    /home/pjesa/mtt/scratch2/installs/CoY6/src)
</span><br>
<span class="quotelev2">&gt;&gt; /home/pjesa/mtt/scratch2/installs/CoY6/install does not exist -- creating
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2/installs/CoY6/install/
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2/installs/CoY6/src
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: require MTT::MPI::Install::MPICH2
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: $ret = &amp;MTT::MPI::Install::MPICH2::Install(@args)
</span><br>
<span class="quotelev2">&gt;&gt; Value: mpich2_make_all_arguments
</span><br>
<span class="quotelev2">&gt;&gt; Value: mpich2_compiler_name
</span><br>
<span class="quotelev2">&gt;&gt; Value: bitness
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: &amp;get_mpi_install_bitness(&quot;&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Prefix now:
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Remaining (after &amp;): get_mpi_install_bitness(&quot;&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found func name: get_mpi_install_bitness
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found beginning of arguments: &quot;&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Initial param search: &quot;&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Loop: trimmed search: &quot;&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Examining char: &quot; (pos 0)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found beginning quote
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found last quote
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Examining char: ) (pos 2)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found end of arg (pos 2)
</span><br>
<span class="quotelev2">&gt;&gt; Found argument: &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Remainder:
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Calling: $ret = MTT::Values::Functions::get_mpi_install_bitness(&quot;&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; &amp;get_mpi_intall_bitness
</span><br>
<span class="quotelev2">&gt;&gt; &amp;_find_libmpi returning:
</span><br>
<span class="quotelev2">&gt;&gt; Couldn't find libmpi!
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; After eval(string), remaining: 0
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: 0
</span><br>
<span class="quotelev2">&gt;&gt; Returning: 0
</span><br>
<span class="quotelev2">&gt;&gt; Value: endian
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: &amp;get_mpi_install_endian(&quot;&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Prefix now:
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Remaining (after &amp;): get_mpi_install_endian(&quot;&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found func name: get_mpi_install_endian
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found beginning of arguments: &quot;&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Initial param search: &quot;&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Loop: trimmed search: &quot;&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Examining char: &quot; (pos 0)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found beginning quote
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found last quote
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Examining char: ) (pos 2)
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Found end of arg (pos 2)
</span><br>
<span class="quotelev2">&gt;&gt; Found argument: &quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Remainder:
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Calling: $ret = MTT::Values::Functions::get_mpi_install_endian(&quot;&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; &amp;get_mpi_intall_endian
</span><br>
<span class="quotelev2">&gt;&gt; &amp;_find_libmpi returning:
</span><br>
<span class="quotelev2">&gt;&gt; *** Could not find libmpi to calculate endian-ness
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; After eval(string), remaining: 0
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: 0
</span><br>
<span class="quotelev2">&gt;&gt; Returning: 0
</span><br>
<span class="quotelev2">&gt;&gt; Found whatami: /home/pjesa/mtt/collective-bakeoff/client/whatami/whatami
</span><br>
<span class="quotelev2">&gt;&gt; Value: platform_type
</span><br>
<span class="quotelev2">&gt;&gt; Value: platform_type
</span><br>
<span class="quotelev2">&gt;&gt; Value: platform_hardware
</span><br>
<span class="quotelev2">&gt;&gt; Value: platform_hardware
</span><br>
<span class="quotelev2">&gt;&gt; Value: os_name
</span><br>
<span class="quotelev2">&gt;&gt; Value: os_name
</span><br>
<span class="quotelev2">&gt;&gt; Value: os_version
</span><br>
<span class="quotelev2">&gt;&gt; Value: os_version
</span><br>
<span class="quotelev2">&gt;&gt;    Skipped MPI install
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI install phase complete
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Phase: MPI Install
</span><br>
<span class="quotelev2">&gt;&gt;    Started:       Thu Sep 27 22:39:37 2007
</span><br>
<span class="quotelev2">&gt;&gt;    Stopped:       Thu Sep 27 22:39:38 2007
</span><br>
<span class="quotelev2">&gt;&gt;    Elapsed:       00:00:01
</span><br>
<span class="quotelev2">&gt;&gt;    Total elapsed: 00:00:01
</span><br>
<span class="quotelev2">&gt;&gt; *** Test get phase starting
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2/sources
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Test get: [test get: netpipe]
</span><br>
<span class="quotelev2">&gt;&gt;    Checking for new test sources...
</span><br>
<span class="quotelev2">&gt;&gt; Value: module
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: Download
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section test get: netpipe: Download
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: Download
</span><br>
<span class="quotelev2">&gt;&gt; Returning: Download
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2/sources
</span><br>
<span class="quotelev2">&gt;&gt; Making dir: test_get__netpipe (cwd: /home/pjesa/mtt/scratch2/sources)
</span><br>
<span class="quotelev2">&gt;&gt; test_get__netpipe does not exist -- creating
</span><br>
<span class="quotelev2">&gt;&gt; chdir test_get__netpipe/
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2/sources
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2/sources/test_get__netpipe
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: require MTT::Test::Get::Download
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: $ret = &amp;MTT::Test::Get::Download::Get(@args)
</span><br>
<span class="quotelev2">&gt;&gt; Value: download_url
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: <a href="http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz">http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz</a>
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section test get: netpipe:
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz">http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz</a>
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes:
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz">http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz</a>
</span><br>
<span class="quotelev2">&gt;&gt; Returning: <a href="http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz">http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Download got url:
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz">http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz</a>
</span><br>
<span class="quotelev2">&gt;&gt; Value: download_username
</span><br>
<span class="quotelev2">&gt;&gt; Value: download_password
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MTT::FindProgram::FindProgram returning /usr/bin/wget
</span><br>
<span class="quotelev2">&gt;&gt; Running command: wget -nv
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz">http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz</a>
</span><br>
<span class="quotelev2">&gt;&gt; OUT:22:39:55
</span><br>
<span class="quotelev2">&gt;&gt;    URL:<a href="http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz">http://www.scl.ameslab.gov/netpipe/code/NetPIPE_3.6.2.tar.gz</a>
</span><br>
<span class="quotelev2">&gt;&gt;    [369585/369585] -&gt; &quot;NetPIPE_3.6.2.tar.gz&quot; [1]
</span><br>
<span class="quotelev2">&gt;&gt; Command complete, exit status: 0
</span><br>
<span class="quotelev2">&gt;&gt; Value: download_version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Download complete
</span><br>
<span class="quotelev2">&gt;&gt;    Got new test sources
</span><br>
<span class="quotelev2">&gt;&gt; *** Test get phase complete
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Phase: Test Get
</span><br>
<span class="quotelev2">&gt;&gt;    Started:       Thu Sep 27 22:39:38 2007
</span><br>
<span class="quotelev2">&gt;&gt;    Stopped:       Thu Sep 27 22:39:55 2007
</span><br>
<span class="quotelev2">&gt;&gt;    Elapsed:       00:00:17
</span><br>
<span class="quotelev2">&gt;&gt;    Total elapsed: 00:00:18
</span><br>
<span class="quotelev2">&gt;&gt; *** Test build phase starting
</span><br>
<span class="quotelev2">&gt;&gt; chdir /home/pjesa/mtt/scratch2/installs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Test build [test build: netpipe]
</span><br>
<span class="quotelev2">&gt;&gt; Value: test_get
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: netpipe
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section test build: netpipe: netpipe
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: netpipe
</span><br>
<span class="quotelev2">&gt;&gt; Returning: netpipe
</span><br>
<span class="quotelev2">&gt;&gt; *** Test build phase complete
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Phase: Test Build
</span><br>
<span class="quotelev2">&gt;&gt;    Started:       Thu Sep 27 22:39:55 2007
</span><br>
<span class="quotelev2">&gt;&gt;    Stopped:       Thu Sep 27 22:39:55 2007
</span><br>
<span class="quotelev2">&gt;&gt;    Elapsed:       00:00:00
</span><br>
<span class="quotelev2">&gt;&gt;    Total elapsed: 00:00:18
</span><br>
<span class="quotelev2">&gt;&gt; *** Run test phase starting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Test run [netpipe]
</span><br>
<span class="quotelev2">&gt;&gt; Value: test_build
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: netpipe
</span><br>
<span class="quotelev2">&gt;&gt; Replacing vars from section test run: netpipe: netpipe
</span><br>
<span class="quotelev2">&gt;&gt; Got final version before escapes: netpipe
</span><br>
<span class="quotelev2">&gt;&gt; Returning: netpipe
</span><br>
<span class="quotelev2">&gt;&gt; *** Run test phase complete
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Phase: Test Run
</span><br>
<span class="quotelev2">&gt;&gt;    Started:       Thu Sep 27 22:39:55 2007
</span><br>
<span class="quotelev2">&gt;&gt;    Stopped:       Thu Sep 27 22:39:55 2007
</span><br>
<span class="quotelev2">&gt;&gt;    Elapsed:       00:00:00
</span><br>
<span class="quotelev2">&gt;&gt;    Total elapsed: 00:00:18
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Phase: Trim
</span><br>
<span class="quotelev2">&gt;&gt;    Started:       Thu Sep 27 22:39:55 2007
</span><br>
<span class="quotelev2">&gt;&gt;    Stopped:       Thu Sep 27 22:39:55 2007
</span><br>
<span class="quotelev2">&gt;&gt;    Elapsed:       00:00:00
</span><br>
<span class="quotelev2">&gt;&gt;    Total elapsed: 00:00:18
</span><br>
<span class="quotelev2">&gt;&gt; *** Reporter finalizing
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: require MTT::Reporter::MTTDatabase
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: $ret = &amp;MTT::Reporter::MTTDatabase::Finalize(@args)
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: require MTT::Reporter::TextFile
</span><br>
<span class="quotelev2">&gt;&gt; Evaluating: $ret = &amp;MTT::Reporter::TextFile::Finalize(@args)
</span><br>
<span class="quotelev2">&gt;&gt; *** Reporter finalized
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
--
Jelena Pjesivac-Grbovic -- Pjesa, Ph.D.
Graduate Research Assistant
Innovative Computing Laboratory
Computer Science Department, UTK
Claxton Complex 350
(865) 974 - 6722 
(865) 974 - 6321
jpjesiva_at_[hidden]
&quot;The only difference between a problem and a solution is that
  people understand the solution.&quot;
                                       -- Charles Kettering
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0437.php">Tim Mattox: "Re: [MTT users] Problems running MTT with already installed MPICH-MX"</a>
<li><strong>Previous message:</strong> <a href="0435.php">Jelena Pjesivac-Grbovic: "Re: [MTT users] Problems running MTT with already installed	MPICH-MX"</a>
<li><strong>In reply to:</strong> <a href="0434.php">Ethan Mallove: "Re: [MTT users] Problems running MTT with already installed	MPICH-MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0437.php">Tim Mattox: "Re: [MTT users] Problems running MTT with already installed MPICH-MX"</a>
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
