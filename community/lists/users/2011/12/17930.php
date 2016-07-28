<?
$subject_val = "Re: [OMPI users] MPI_COMM_split hanging";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 12 09:45:36 2011" -->
<!-- isoreceived="20111212144536" -->
<!-- sent="Mon, 12 Dec 2011 09:45:31 -0500" -->
<!-- isosent="20111212144531" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMM_split hanging" -->
<!-- id="CAANzjEnWhdnQmGAytUehm5w3uA0CUJR+notv2LSf32kZPc8xRg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="p06240826cb084f1308d2_at_192.168.1.68" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_COMM_split hanging<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-12 09:45:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17931.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_split hanging"</a>
<li><strong>Previous message:</strong> <a href="17929.php">amjad ali: "Re: [OMPI users] How to justify the use MPI codes on multicore systems/PCs?"</a>
<li><strong>Maybe in reply to:</strong> <a href="17922.php">Gary Gorbet: "[OMPI users] MPI_COMM_split hanging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17931.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_split hanging"</a>
<li><strong>Reply:</strong> <a href="17931.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_split hanging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For MPI_Comm_split, all processes in the input communicator (oldcomm
<br>
or MPI_COMM_WORLD in your case) must call the operation since it is
<br>
collective over the input communicator. In your program rank 0 is not
<br>
calling the operation, so MPI_Comm_split is waiting for it to
<br>
participate.
<br>
<p>If you want rank 0 to be excluded from the any of the communicators,
<br>
you can give it a special color that is distinct from all other ranks.
<br>
Upon return from MPI_Comm_split, rank 0 will be given a new
<br>
communicator containing just one processes, itself. If you do not
<br>
intend to use that communicator you can free it immediately
<br>
afterwards.
<br>
<p>Hope that helps,
<br>
Josh
<br>
<p><p>On Fri, Dec 9, 2011 at 6:52 PM, Gary Gorbet &lt;gegorbet_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I am attempting to split my application into multiple master+workers
</span><br>
<span class="quotelev1">&gt; groups using MPI_COMM_split. My MPI revision is shown as:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --tag-output ompi_info -v ompi full --parsable
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:package:Open MPI root_at_build-x86-64 Distribution
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:ompi:version:full:1.4.3
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:ompi:version:svn:r23834
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:ompi:version:release_date:Oct 05, 2010
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:orte:version:full:1.4.3
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:orte:version:svn:r23834
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:orte:version:release_date:Oct 05, 2010
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:opal:version:full:1.4.3
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:opal:version:svn:r23834
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:opal:version:release_date:Oct 05, 2010
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stdout&gt;:ident:1.4.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The basic problem I am having is that none of processor instances ever
</span><br>
<span class="quotelev1">&gt; returns from the MPI_COMM_split call. I am pretty new to MPI and it is
</span><br>
<span class="quotelev1">&gt; likely I am not doing things quite correctly. I'd appreciate some guidance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am working with an application that has functioned nicely for a while
</span><br>
<span class="quotelev1">&gt; now. It only uses a single MPI_COMM_WORLD communicator. It is standard
</span><br>
<span class="quotelev1">&gt; stuff: &#160;a master that hands out tasks to many workers, receives output
</span><br>
<span class="quotelev1">&gt; and keeps track of workers that are ready to receive another task. The
</span><br>
<span class="quotelev1">&gt; tasks are quite compute-intensive. When running a variation of the
</span><br>
<span class="quotelev1">&gt; process that uses Monte Carlo iterations, jobs can exceed the 30 hours
</span><br>
<span class="quotelev1">&gt; they are limited to. The MC iterations are independent of each other -
</span><br>
<span class="quotelev1">&gt; adding random noise to an input - so I would like to run multiple
</span><br>
<span class="quotelev1">&gt; iterations simultaneously so that 4 times the cores runs in a fourth of
</span><br>
<span class="quotelev1">&gt; the time. This would entail a supervisor interacting with multiple
</span><br>
<span class="quotelev1">&gt; master+workers groups.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had thought that I would just have to declare a communicator for each
</span><br>
<span class="quotelev1">&gt; group so that broadcasts and syncs would work within a single group.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; MPI_Comm_size( MPI_COMM_WORLD, &amp;total_proc_count );
</span><br>
<span class="quotelev1">&gt; &#160; MPI_Comm_rank( MPI_COMM_WORLD, &amp;my_rank );
</span><br>
<span class="quotelev1">&gt; &#160; ...
</span><br>
<span class="quotelev1">&gt; &#160; cores_per_group = total_proc_count / groups_count;
</span><br>
<span class="quotelev1">&gt; &#160; my_group = my_rank / cores_per_group; &#160; &#160; // e.g., 0, 1, ...
</span><br>
<span class="quotelev1">&gt; &#160; group_rank = my_rank - my_group * cores_per_group; &#160;// rank within a
</span><br>
<span class="quotelev1">&gt; group
</span><br>
<span class="quotelev1">&gt; &#160; if ( my_rank == 0 ) &#160; &#160;continue; &#160; &#160;// Do not create group for supervisor
</span><br>
<span class="quotelev1">&gt; &#160; MPI_Comm oldcomm = MPI_COMM_WORLD;
</span><br>
<span class="quotelev1">&gt; &#160; MPI_Comm my_communicator; &#160; &#160;// Actually declared as a class variable
</span><br>
<span class="quotelev1">&gt; &#160; int sstat = MPI_Comm_split( oldcomm, my_group, group_rank,
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; &amp;my_communicator );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is never a return from the above _split() call. Do I need to do
</span><br>
<span class="quotelev1">&gt; something else to set this up? I would have expected perhaps a non-zero
</span><br>
<span class="quotelev1">&gt; status return, but not that I would get no return at all. I would
</span><br>
<span class="quotelev1">&gt; appreciate any comments or guidance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Gary
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17931.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_split hanging"</a>
<li><strong>Previous message:</strong> <a href="17929.php">amjad ali: "Re: [OMPI users] How to justify the use MPI codes on multicore systems/PCs?"</a>
<li><strong>Maybe in reply to:</strong> <a href="17922.php">Gary Gorbet: "[OMPI users] MPI_COMM_split hanging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17931.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_split hanging"</a>
<li><strong>Reply:</strong> <a href="17931.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_split hanging"</a>
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
