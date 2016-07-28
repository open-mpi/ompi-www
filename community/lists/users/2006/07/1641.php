<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 18 06:20:37 2006" -->
<!-- isoreceived="20060718102037" -->
<!-- sent="Tue, 18 Jul 2006 11:20:31 +0100" -->
<!-- isosent="20060718102031" -->
<!-- name="Keith Refson" -->
<!-- email="Keith.lists_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi, LSF and GM" -->
<!-- id="44BCB5EF.4080107_at_ntlworld.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C8990D81-E107-428B-B294-6E2002308FAC_at_open-mpi.org" -->
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
<strong>From:</strong> Keith Refson (<em>Keith.lists_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-18 06:20:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1642.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Openmpi, LSF and GM"</a>
<li><strong>Previous message:</strong> <a href="1640.php">Bert Wesarg: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<li><strong>In reply to:</strong> <a href="1626.php">Brian Barrett: "Re: [OMPI users] Openmpi, LSF and GM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1642.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Openmpi, LSF and GM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Brian,
<br>
<p>Thanks for the help
<br>
<p>Brian Barrett wrote:
<br>
<p><p><span class="quotelev2">&gt; &gt; The arguments you want would look like:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    mpirun -np X -mca btl gm,sm,self -mca btl_base_verbose 1 -mca
</span><br>
<span class="quotelev2">&gt; &gt; btl_gm_debug 1 &lt;other arguments&gt;
</span><br>
<p>Aha.  I think I had misunderstood the syntax slightly, which explains why
<br>
I previously saw no debugging information.  I has also omitted the &quot;sm&quot;
<br>
btl - though I'm not sure what that one is....
<br>
<p>I am now getting some debugging output
<br>
<p>[scarf-cn008.rl.ac.uk:04291] [0,1,0] gm_port 017746B0, board 545460846592, global 3712550725 node
<br>
180388626433 port 180388626436
<br>
[scarf-cn010.rl.ac.uk:13964] [0,1,2] gm_port 017746B0, board 545460846592, global 3712549034 node
<br>
180388626433 port 180388626436
<br>
[scarf-cn010.rl.ac.uk:13965] [0,1,3] gm_port 017746D0, board 545460846592, global 3712549034 node
<br>
180388626433 port 180388626437
<br>
[scarf-cn008.rl.ac.uk:04292] [0,1,1] gm_port 017746D0, board 545460846592, global 3712550725 node
<br>
180388626433 port 180388626437
<br>
[scarf-cn010.rl.ac.uk:13965] [0,1,3] mapped global id 3712550725 to node id 28
<br>
[scarf-cn010.rl.ac.uk:13965] [0,1,3] mapped global id 3712550725 to node id 180388626460
<br>
[scarf-cn010.rl.ac.uk:13965] [0,1,3] mapped global id 3712549034 to node id 180388626433
<br>
[scarf-cn008.rl.ac.uk:04292] [0,1,1] mapped global id 3712550725 to node id 1
<br>
[scarf-cn008.rl.ac.uk:04292] [0,1,1] mapped global id 3712549034 to node id 180388626455
<br>
[scarf-cn008.rl.ac.uk:04292] [0,1,1] mapped global id 3712549034 to node id 180388626455
<br>
[scarf-cn010.rl.ac.uk:13964] [0,1,2] mapped global id 3712550725 to node id 28
<br>
[scarf-cn010.rl.ac.uk:13964] [0,1,2] mapped global id 3712550725 to node id 180388626460
<br>
[scarf-cn010.rl.ac.uk:13964] [0,1,2] mapped global id 3712549034 to node id 180388626433
<br>
[scarf-cn008.rl.ac.uk:04291] [0,1,0] mapped global id 3712550725 to node id 1
<br>
[scarf-cn008.rl.ac.uk:04291] [0,1,0] mapped global id 3712549034 to node id 180388626455
<br>
[scarf-cn008.rl.ac.uk:04291] [0,1,0] mapped global id 3712549034 to node id 180388626455
<br>
<p>which I home means that I am using the GM btl.  The run is also about 20% quicker than
<br>
before which may suggest that I was not previously using gm.
<br>
<p>I have also noticed that if I simply specify --mca btl ^tcp + the debugging options
<br>
the run works apparently uses gm, and as quickly.  It was (and is) the combination
<br>
&nbsp;&nbsp;-mca btl gm,sm,self,^tcp
<br>
that fails with
<br>
&nbsp;&nbsp;&nbsp;No available btl components were found!
<br>
<p><p><p><p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Q3:  Is there a way to make openmpi work with the LSF commands?  So
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; far
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;      I have constructed a hostfile from the LSF environment variable
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;      LSB_HOSTS and used the openmpi mpirun command to start the
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;      parallel executable.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Currently, we do not have tight LSF integration for Open MPI, like we
</span><br>
<span class="quotelev2">&gt; &gt; do for PBS, SLURM, and BProc.  This is mainly because the only LSF
</span><br>
<span class="quotelev2">&gt; &gt; machines the development team regularly uses are BProc machines,
</span><br>
<span class="quotelev2">&gt; &gt; which do not use the traditional startup and allocation mechanisms of
</span><br>
<span class="quotelev2">&gt; &gt; LSF.  I believe it is on our feature request list, but I also don't
</span><br>
<span class="quotelev2">&gt; &gt; believe we have a timeline for implementation.
</span><br>
<p>OK.  It is actually quite easy to construct a hostfile from the LSF
<br>
environment and start the processes using the openmpi mpirun command.
<br>
I don't know how this will interact with for larger scale usage,
<br>
job termination etc but I plan to experiment.
<br>
<p>One further question.  My run times are still noticably longer than
<br>
with mpich_gm.  I saw in the mailing list archives that there was
<br>
a new implementation of the collective routines in 1.0, (which my application
<br>
depends on rather heavil.  Is this the default in openmpi 1.1 or is
<br>
it still necessary to specify this manually?  And if anyone has a comparison
<br>
of MPI_AlltoallV performance with other MPI implementations I'd like to
<br>
hear the numbers.
<br>
<p>Thanks again for all the work.  Openmpi looks very promising and it is
<br>
definitely the easiest to install and get running of any MPI implementation
<br>
I have tried so far.
<br>
<p>Keith Refson
<br>
<pre>
-- 
Dr Keith Refson,
Building R3
Rutherford Appleton Laboratory
Chilton
Didcot
Oxfordshire OX11 0QX
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1642.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Openmpi, LSF and GM"</a>
<li><strong>Previous message:</strong> <a href="1640.php">Bert Wesarg: "Re: [OMPI users] Why should the attached code wait on MPI_Bcast"</a>
<li><strong>In reply to:</strong> <a href="1626.php">Brian Barrett: "Re: [OMPI users] Openmpi, LSF and GM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1642.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Openmpi, LSF and GM"</a>
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
