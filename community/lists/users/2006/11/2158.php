<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov  8 12:49:09 2006" -->
<!-- isoreceived="20061108174909" -->
<!-- sent="Wed, 8 Nov 2006 12:48:59 -0500" -->
<!-- isosent="20061108174859" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="[OMPI users] Running in a heterogeneous environment (Opteron Head + Athlon nodes)" -->
<!-- id="200611081748.59773.kyron_at_neuralbs.com" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-08 12:48:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2159.php">shane kennedy: "Re: [OMPI users] are there any gotchas to running over myrinet"</a>
<li><strong>Previous message:</strong> <a href="2157.php">Brian Barrett: "Re: [OMPI users] are there any gotchas to running over myrinet"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am having a hard time getting OpenMPI (1.1.2) to run in a heterogeneous environment. In short, here is my command line:
<br>
<p>orterun --prefix ~/openmpi_x86_64/ -hostfile head -np 2 mandelbrot-mpi_x86_64 10000 400 400 0 : --prefix ~/openmpi_i686/ -hostfile nodes -np `wc -l&lt;nodes ` mandelbrot-mpi_i686 10000 400 400 0
<br>
<p>On execution, I get the followin error:
<br>
bash: /export/home/eric/openmpi_x86_64/bin/orted: cannot execute binary file
<br>
bash: /export/home/eric/openmpi_x86_64/bin/orted: cannot execute binary file
<br>
[headless:06930] ERROR: A daemon on node thinkbig2 failed to start as expected.
<br>
[headless:06930] ERROR: There may be more information available from
<br>
[headless:06930] ERROR: the remote shell (see above).
<br>
[headless:06930] ERROR: The daemon exited unexpectedly with status 126.
<br>
[headless:06930] ERROR: A daemon on node thinkbig12 failed to start as expected.
<br>
[headless:06930] ERROR: There may be more information available from
<br>
[headless:06930] ERROR: the remote shell (see above).
<br>
[headless:06930] ERROR: The daemon exited unexpectedly with status 126.
<br>
<p>After which I have to cancel the excution with CTRL-C. 
<br>
<p>I am still trying to investigate this problem and I am coming up with the following. It would seem that orterun mixes the executables across the commands. For example, the follwoing command line should essentially return the contents of the host files &quot;head&quot; _and_ &quot;nodes&quot;:
<br>
<p>First, the contents of the head and nodes files:
<br>
<p>eric_at_headless ~/1_Files/1_ETS/1_Maitrise/MGL810/Devoir2 $ cat head
<br>
headless slots=2
<br>
eric_at_headless ~/1_Files/1_ETS/1_Maitrise/MGL810/Devoir2 $ cat nodes
<br>
thinkbig12
<br>
thinkbig2
<br>
thinkbig3
<br>
thinkbig5
<br>
thinkbig6
<br>
thinkbig9
<br>
thinkbig10
<br>
thinkbig11
<br>
thinkbig4
<br>
thinkbig7
<br>
<p>Second, the execution of the command:
<br>
<p>orterun --prefix ~/openmpi_x86_64/ -hostfile head -np 2 hostname : --prefix ~/openmpi_i686/ -hostfile nodes -np `wc -l&lt;nodes ` hostname
<br>
bash: /export/home/eric/openmpi_x86_64/bin/orted: cannot execute binary file
<br>
bash: /export/home/eric/openmpi_x86_64/bin/orted: cannot execute binary file
<br>
[headless:07196] ERROR: A daemon on node thinkbig2 failed to start as expected.
<br>
[headless:07196] ERROR: There may be more information available from
<br>
[headless:07196] ERROR: the remote shell (see above).
<br>
[headless:07196] ERROR: The daemon exited unexpectedly with status 126.
<br>
[headless:07196] ERROR: A daemon on node thinkbig12 failed to start as expected.
<br>
[headless:07196] ERROR: There may be more information available from
<br>
[headless:07196] ERROR: the remote shell (see above).
<br>
[headless:07196] ERROR: The daemon exited unexpectedly with status 126.
<br>
thinkbig10
<br>
thinkbig11
<br>
thinkbig4
<br>
thinkbig7
<br>
thinkbig6
<br>
thinkbig9
<br>
thinkbig5
<br>
thinkbig3
<br>
<p>Now, if I remove the --prefix for the first par, I get the following:
<br>
eric_at_headless ~/1_Files/1_ETS/1_Maitrise/MGL810/Devoir2 $ orterun -hostfile head -np 2 hostname : --prefix ~/openmpi_i686/ -hostfile nodes -np `wc -l&lt;nodes ` hostname
<br>
thinkbig9
<br>
thinkbig2
<br>
thinkbig2
<br>
thinkbig12
<br>
thinkbig12
<br>
thinkbig4
<br>
thinkbig7
<br>
thinkbig10
<br>
thinkbig11
<br>
thinkbig5
<br>
thinkbig3
<br>
thinkbig6
<br>
<p>Immediately, we notice that &quot;hostname&quot; is never runned on the &quot;headless&quot; node but runned twice on thinkbig2 and thinkbig12. This tells me that the first -hostfile is being ignored entirely and we fall into the round-robin schema. What am-I doing wrong? I would like to read up documentation on this but the manpage and web pages are very superficial on the subject of heterogeneous environments and I found no documentation on writing up an appfile as would be used with --app.
<br>
<p>Thanks,
<br>
<p><pre>
-- 
Eric Thibodeau
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2158/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2159.php">shane kennedy: "Re: [OMPI users] are there any gotchas to running over myrinet"</a>
<li><strong>Previous message:</strong> <a href="2157.php">Brian Barrett: "Re: [OMPI users] are there any gotchas to running over myrinet"</a>
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
