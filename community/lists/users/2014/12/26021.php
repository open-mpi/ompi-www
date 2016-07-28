<?
$subject_val = "Re: [OMPI users] OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 19:36:04 2014" -->
<!-- isoreceived="20141218003604" -->
<!-- sent="Thu, 18 Dec 2014 09:35:53 +0900" -->
<!-- isosent="20141218003553" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)" -->
<!-- id="nho7liew17srsvltg2f6faod.1418862633515_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 19:35:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26022.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Previous message:</strong> <a href="26020.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Operators for MPI handles not correctly overloaded	with Intel Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26026.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Reply:</strong> <a href="26026.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alex,
<br>
<p>You do not want to spawn mpirun.
<br>
Or if this is really what you want, then just use system(&quot;env -i ...&quot;)
<br>
<p>I think what you need is spawn a shell that do the redirection and then invoke your app.
<br>
This is something like
<br>
MPI_Comm_spawn(&quot;/bin/sh&quot;, &quot;-c&quot;, &quot;siesta &lt; infile&quot;)
<br>
<p>That being said, i strongly recommend you patch siesta so it can be invoked like this
<br>
siesta -in infile
<br>
(plus the MPI_Comm_disconnect call explained by George)
<br>
That would make everything so much easier
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>&quot;Alex A. Schmidt&quot; &lt;aas_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;Let me rephrase the previous message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Putting &quot;/bin/sh&quot; in command with info key &quot;ompi_non_mpi&quot;&#194;&#160; set to&#194;&#160; &quot;.true.&quot; 
</span><br>
<span class="quotelev1">&gt;(if command is empty, mpi_comm_spawn tries to execute ' ') of 
</span><br>
<span class="quotelev1">&gt;mpi_comm_spawn and &quot;-c&quot; &quot;mpirun -n 1 myapp&quot; in args results in 
</span><br>
<span class="quotelev1">&gt;this message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;**********************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Open MPI does not support recursive calls of mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;**********************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Putting a single string in args as &quot;-c mpirun -n 1 myapp&quot; or&#194;&#160; &quot;-c 'mpirun -n 1 myapp' &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;returns
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;/usr/bin/sh: - : invalid option
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2014-12-17 21:47 GMT-02:00 Alex A. Schmidt &lt;aas_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Putting &quot;/bin/sh&quot; in command with info key &quot;ompi_non_mpi&quot;&#194;&#160; set to&#194;&#160; &quot;.true.&quot; 
</span><br>
<span class="quotelev1">&gt;(if command is empty, mpi_comm_spawn tries to execute ' ') of 
</span><br>
<span class="quotelev1">&gt;mpi_comm_spawn and &quot;-c&quot; &quot;mpirun -n 1 myapp&quot; in args results in 
</span><br>
<span class="quotelev1">&gt;this message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;/usr/bin/sh: -c: option requires an argument
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Putting a single string in args as &quot;-c mpirun -n 1 myapp&quot; or&#194;&#160; &quot;-c 'mpirun -n 1 myapp' &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;returns
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;/usr/bin/sh: - : invalid option
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2014-12-17 20:17 GMT-02:00 George Bosilca &lt;bosilca_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I don't think this has any chance of working. The redirection is something interpreted by the shell, and when Open MPI &quot;fork-exec&quot; a process it does not behave as the shell.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thus a potentially non-portable solution would be to instead of launching the mpirun directly to launch it through a shell. Maybe something like &quot;/bin/sh&quot;, &quot;-c&quot;,&#194;&#160;&quot;mpirun -n 1 myapp&quot;.&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Wed, Dec 17, 2014 at 5:02 PM, Alex A. Schmidt &lt;aas_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Sorry, &quot;&lt;&quot; as an element of argv to mpi_comm_spawn is interpreted just the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;same, as another parameter by the spawnee process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;But I am confused: wouldn't it be redundant to put &quot;mpirun&quot; &quot;-n&quot; &quot;1&quot; &quot;myapp&quot; 
</span><br>
<span class="quotelev1">&gt;as elements of argv, considering role of the other parameters of mpi_comm_spawn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;like the 1st and 3rd ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Imho, it seems to me that stdin and stdout should be keys to &quot;info&quot; and the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;respective filenames the values of those keys, if that is possible to implement...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2014-12-17 15:16 GMT-02:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Have you tried putting the &quot;&lt;&quot; as a separate parameter? In other words, since you are specifying the argv, you have to specify each of them separately. So it looks more like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&quot;mpirun&quot;, &quot;-n&quot;, &quot;1&quot;, &quot;myapp&quot;, &quot;&lt;&quot;, &quot;stdinfile&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Does that work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Wed, Dec 17, 2014 at 8:07 AM, Alex A. Schmidt &lt;aas_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am afraid I will have to insist on i/o redirection matter 
</span><br>
<span class="quotelev1">&gt;for the spawnee process. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I have a &quot;child&quot; mpi code that do just 2 things: read the 3 parameters
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;passed to it and print them, and then read data from stdin and show it. 
</span><br>
<span class="quotelev1">&gt;So, if &quot;stdin_file&quot; is a text file with two lines, say:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;10
</span><br>
<span class="quotelev1">&gt;20
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;executing &quot;mpirun -n 1 child A B &lt; stdin_file&quot; wiil ouput two lines:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[A]&#194;&#160; [B]&#194;&#160; []&#194;&#160; 
</span><br>
<span class="quotelev1">&gt;10&#194;&#160; 20
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On the other hand , calling &quot;child&quot; from MPI_Comm_spawn(&quot;child&quot;,args,...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;where
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;args(1) = &quot;A&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;args(2) = &quot;B&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;args(3) =&quot;&lt; stdin_file&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;args(4) = &quot; &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;will make &quot;child&quot; outputs only 1 line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[A] [B] [&lt; stdin_file]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;and then fails because there is not stdin data to read from. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Please, note that surprisingly the whole string &quot;&lt; stdin_file&quot; is interpreted 
</span><br>
<span class="quotelev1">&gt;as a third parameter to &quot;child&quot; and not a stdin...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2014-12-15 17:26 GMT-02:00 Alex A. Schmidt &lt;aas_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ralph, 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I guess you mean &quot;call mpi_comm_spawn( 'siesta', '&lt; infile' , 2 ,...)&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;to execute 'mpirun -n 2 siesta &lt; infile' on the spawnee side. That was 
</span><br>
<span class="quotelev1">&gt;my first choice. Well, siesta behaves as if no stdin file was present...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2014-12-15 17:07 GMT-02:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;You should be able to just include that in your argv that you pass to the Comm_spawn API.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Mon, Dec 15, 2014 at 9:27 AM, Alex A. Schmidt &lt;aas_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks for the tip. In fact, calling mpi_comm_spawn right away with MPI_COMM_SELF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;has worked for me just as well -- no subgroups needed at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am testing this openmpi app named &quot;siesta&quot; in parallel. The source code is available,
</span><br>
<span class="quotelev1">&gt;so making it &quot;spawn ready&quot; by adding the pair mpi_comm_get_parent + mpi_comm_disconnect 
</span><br>
<span class="quotelev1">&gt;into the main code can be done.&#194;&#160; If it works, maybe the siesta's developers can be convinced 
</span><br>
<span class="quotelev1">&gt;to add this feature in a future release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;However, siesta is launched only by specifying input/output files with i/o redirection like 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;mpirun -n &lt;some number&gt;&#194;&#160; siesta &lt; infile &gt; outfile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;So far, I could not find anything about how to set an stdin file for an spawnee process. 
</span><br>
<span class="quotelev1">&gt;Specifiyng it in a app context file doesn't seem to work. Can it be done? Maybe through 
</span><br>
<span class="quotelev1">&gt;an MCA parameter?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2014-12-15 2:43 GMT-02:00 George Bosilca &lt;bosilca_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Alex,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The code looks good, and is 100% MPI standard accurate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I would change the way you create the subcoms in the parent. You do a lot of useless operations, as you can achieve exactly the same outcome (one communicator per node), either by duplicating MPI_COMM_SELF or doing an MPI_Comm_split with the color equal to your rank.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Sun, Dec 14, 2014 at 2:20 AM, Alex A. Schmidt &lt;aas_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Sorry, guys. I don't think the newbie here can follow any discussion 
</span><br>
<span class="quotelev1">&gt;beyond basic mpi... 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Anyway, if I add the pair &#194;&#160;&#194;&#160;&#194;&#160; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;call MPI_COMM_GET_PARENT(mpi_comm_parent,ierror)
</span><br>
<span class="quotelev1">&gt;call MPI_COMM_DISCONNECT(mpi_comm_parent,ierror)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;on the spawnee side I get the proper response in the spawning processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Please, take a look at the attached toy codes parent.F and child.F 
</span><br>
<span class="quotelev1">&gt;I've been playing with. 'mpirun -n 2 parent' seems to work as expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2014-12-13 23:46 GMT-02:00 Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Alex,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Are you calling MPI_Comm_disconnect in the 3 &quot;master&quot; tasks and with the same remote communicator ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I also read the man page again, and MPI_Comm_disconnect does not ensure the remote processes have finished or called MPI_Comm_disconnect, so that might not be the thing you need.
</span><br>
<span class="quotelev1">&gt;George, can you please comment on that ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;MPI_Comm_disconnect should be a local operation, there is no reason for it to deadlock. I looked at the code and everything is local with the exception of a call to PMIX.FENCE. Can you attach to your deadlocked processes and confirm that they are stopped in the pmix.fence?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Sat, Dec 13, 2014 at 8:47 AM, Alex A. Schmidt &lt;aas_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Sorry, I was calling mpi_comm_disconnect on the group comm handler, not
</span><br>
<span class="quotelev1">&gt;on the intercomm handler returned from the spawn call as it should be.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Well, calling the disconnect on the intercomm handler does halt the spwaner
</span><br>
<span class="quotelev1">&gt;side but the wait is never completed since, as George points out, there is no
</span><br>
<span class="quotelev1">&gt;disconnect call being made on the spawnee side.... and that brings me back
</span><br>
<span class="quotelev1">&gt;to the beginning of the problem since, being a third party app, that call would
</span><br>
<span class="quotelev1">&gt;never be there. I guess an mpi wrapper to deal with that could be made for
</span><br>
<span class="quotelev1">&gt;the app, but I fell the wrapper itself, at the end, would face the same problem
</span><br>
<span class="quotelev1">&gt;we face right now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;My application is a genetic algorithm code that search optimal configuration
</span><br>
<span class="quotelev1">&gt;(minimum or maximum energy) of cluster of atoms. The work flow bottleneck
</span><br>
<span class="quotelev1">&gt;is the calculation of the cluster energy. For the cases which an analytical
</span><br>
<span class="quotelev1">&gt;potential is available the calculation can be made internally and the workload
</span><br>
<span class="quotelev1">&gt;is distributed among slaves nodes from a master node. This is also done
</span><br>
<span class="quotelev1">&gt;when an analytical potential is not available and the energy calculation must
</span><br>
<span class="quotelev1">&gt;be done externally by a quantum chemistry code like dftb+, siesta and Gaussian.
</span><br>
<span class="quotelev1">&gt;So far, we have been running these codes in serial mode. No need to say that
</span><br>
<span class="quotelev1">&gt;we could do a lot better if they could be executed in parallel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am not familiar with DMRAA but it seems to be the right choice to deal with
</span><br>
<span class="quotelev1">&gt;job schedulers as it covers the ones I am interested in (pbs/torque and loadlever).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2014-12-13 7:49 GMT-02:00 Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;George is right about the semantic
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;However i am surprised it returns immediatly...
</span><br>
<span class="quotelev1">&gt;That should either work or hang imho
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The second point is no more mpi related, and is batch manager specific.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;You will likely find a submit parameter to make the command block until the job completes. Or you can write your own wrapper.
</span><br>
<span class="quotelev1">&gt;Or you can retrieve the jobid and qstat periodically to get the job state.
</span><br>
<span class="quotelev1">&gt;If an api is available, this is also an option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;You have to call MPI_Comm_disconnect on both sides of the intercommunicator. On the spawner processes you should call it on the intercom, while on the spawnees you should call it on the MPI_Comm_get_parent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Dec 12, 2014, at 20:43 , Alex A. Schmidt &lt;aas_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;MPI_comm_disconnect seem to work but not quite.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The call to it returns almost immediatly while
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;the spawn processes keep piling up in the background
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;until they are all done...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I think system('env -i qsub...') to launch the third party apps
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;would take the execution of every call back to the scheduler 
</span><br>
<span class="quotelev1">&gt;queue. How would I track each one for their completion?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2014-12-12 22:35 GMT-02:00 Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Alex,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;You need MPI_Comm_disconnect at least.
</span><br>
<span class="quotelev1">&gt;I am not sure if this is 100% correct nor working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;If you are using third party apps, why dont you do something like
</span><br>
<span class="quotelev1">&gt;system(&quot;env -i qsub ...&quot;)
</span><br>
<span class="quotelev1">&gt;with the right options to make qsub blocking or you manually wait for the end of the job ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;That looks like a much cleaner and simpler approach to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&quot;Alex A. Schmidt&quot; &lt;aas_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hello Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ok, I believe I have a simple toy app running as I think it should:
</span><br>
<span class="quotelev1">&gt;'n' parent processes running under mpi_comm_world, each one
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;spawning its own 'm' child processes (each child group work 
</span><br>
<span class="quotelev1">&gt;together nicely, returning the expected result for an mpi_allreduce call).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Now, as I mentioned before, the apps I want to run in the spawned 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;processes are third party mpi apps and I don't think it will be possible 
</span><br>
<span class="quotelev1">&gt;to exchange messages with them from my app. So, I do I tell 
</span><br>
<span class="quotelev1">&gt;when the spawned processes have finnished running? All I have to work
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;with is the intercommunicator returned from the mpi_comm_spawn call...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2014-12-12 2:42 GMT-02:00 Alex A. Schmidt &lt;aas_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Well, yes, I guess....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'll do tests with the real third party apps and let you know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;These are huge quantum chemistry codes (dftb+, siesta and Gaussian)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;which greatly benefits from a parallel environment. My code is just
</span><br>
<span class="quotelev1">&gt;a front end to use those, but since we have a lot of data to process
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;it also benefits from a parallel environment. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2014-12-12 2:30 GMT-02:00 Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Alex,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;just to make sure ...
</span><br>
<span class="quotelev1">&gt;this is the behavior you expected, right ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 2014/12/12 13:27, Alex A. Schmidt wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles, Ok, very nice! When I excute do rank=1,3 call MPI_Comm_spawn('hello_world',' ',5,MPI_INFO_NULL,rank,MPI_COMM_WORLD,my_intercomm,MPI_ERRCODES_IGNORE,status) enddo I do get 15 instances of the 'hello_world' app running: 5 for each parent rank 1, 2 and 3. Thanks a lot, Gilles. Best regargs, Alex 2014-12-12 1:32 GMT-02:00 Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden] 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;: Alex, just ask MPI_Comm_spawn to start (up to) 5 tasks via the maxprocs parameter : int MPI_Comm_spawn(char *command, char *argv[], int maxprocs, MPI_Info info, int root, MPI_Comm comm, MPI_Comm *intercomm, int array_of_errcodes[]) INPUT PARAMETERS maxprocs - maximum number of processes to start (integer, significant only at root) Cheers, Gilles On 2014/12/12 12:23, Alex A. Schmidt wrote: Hello Gilles, Thanks for your reply. The &quot;env -i PATH=...&quot; stuff seems to work!!! call system(&quot;sh -c 'env -i PATH=/usr/lib64/openmpi/bin:/bin mpirun -n 2 hello_world' &quot;) did produce the expected result with a simple openmi &quot;hello_world&quot; code I wrote. I might be harder though with the real third party app I have in mind. And I realize getting passed over a job scheduler with this approach might not work at all... I have looked at the MPI_Comm_spawn call but I failed to understand how it could help here. For instance, can I use it to launch an mpi app with the option &quot;-n 5&quot; ? Alex 2014-12-12 0:36 GMT-02:00 Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;: Alex, can you try something like call system(sh -c 'env -i /.../mpirun -np 2 /.../app_name') -i start with an empty environment that being said, you might need to set a few environment variables manually : env -i PATH=/bin ... and that being also said, this &quot;trick&quot; could be just a bad idea : you might be using a scheduler, and if you empty the environment, the scheduler will not be aware of the &quot;inside&quot; run. on top of that, invoking system might fail depending on the interconnect you use. Bottom line, i believe Ralph's reply is still valid, even if five years have passed : changing your workflow, or using MPI_Comm_spawn is a much better approach. Cheers, Gilles On 2014/12/12 11:22, Alex A. Schmidt wrote: Dear OpenMPI users, Regarding to this previous post&lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2009/06/9560.php">http://www.open-mpi.org/community/lists/users/2009/06/9560.php</a>&gt; from 2009, I wonder if the reply from Ralph Castain is still valid. My need is similar but quite simpler: to make a system call from an openmpi fortran application to run a third party openmpi application. I don't need to exchange mpi messages with the application. I just need to read the resulting output file generated by it. I have tried to do the following system call from my fortran openmpi code: call system(&quot;sh -c 'mpirun -n 2 app_name&quot;) but I get ********************************************************** Open MPI does not support recursive calls of mpirun ********************************************************** Is there a way to make this work? Best regards, Alex _______________________________________________ users mailing listusers_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25966.php">http://www.open-mpi.org/community/lists/users/2014/12/25966.php</a> _______________________________________________ users mailing listusers_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/12/25967.php">http://www.open-mpi.org/community/lists/users/2014/12/25967.php</a> _______________________________________________ users mailing listusers_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25968.php">http://www.open-mpi.org/community/lists/users/2014/12/25968.php</a> _______________________________________________ users mailing list users_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25969.php">http://www.open-mpi.org/community/lists/users/2014/12/25969.php</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________ users mailing list users_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25970.php">http://www.open-mpi.org/community/lists/users/2014/12/25970.php</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25971.php">http://www.open-mpi.org/community/lists/users/2014/12/25971.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25974.php">http://www.open-mpi.org/community/lists/users/2014/12/25974.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25975.php">http://www.open-mpi.org/community/lists/users/2014/12/25975.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25978.php">http://www.open-mpi.org/community/lists/users/2014/12/25978.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25979.php">http://www.open-mpi.org/community/lists/users/2014/12/25979.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25981.php">http://www.open-mpi.org/community/lists/users/2014/12/25981.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25982.php">http://www.open-mpi.org/community/lists/users/2014/12/25982.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25991.php">http://www.open-mpi.org/community/lists/users/2014/12/25991.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26002.php">http://www.open-mpi.org/community/lists/users/2014/12/26002.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26003.php">http://www.open-mpi.org/community/lists/users/2014/12/26003.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26010.php">http://www.open-mpi.org/community/lists/users/2014/12/26010.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26011.php">http://www.open-mpi.org/community/lists/users/2014/12/26011.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26013.php">http://www.open-mpi.org/community/lists/users/2014/12/26013.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26014.php">http://www.open-mpi.org/community/lists/users/2014/12/26014.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26021/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26022.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Previous message:</strong> <a href="26020.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Operators for MPI handles not correctly overloaded	with Intel Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26026.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Reply:</strong> <a href="26026.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
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
