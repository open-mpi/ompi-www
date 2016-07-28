<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 10 01:36:58 2007" -->
<!-- isoreceived="20071010053658" -->
<!-- sent="Tue, 9 Oct 2007 22:01:20 +0200" -->
<!-- isosent="20071009200120" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="EAABDC05-3C69-429E-9556-1D51DF4C6B42_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="18187.34612.506871.628615_at_ron.nulle.part" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-09 16:01:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4186.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
<li><strong>Previous message:</strong> <a href="4184.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4182.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4190.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4190.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 9, 2007, at 3:50 PM, Dirk Eddelbuettel wrote:
<br>
<p><span class="quotelev1">&gt; edd_at_ron:~$ orterun -n 2 --mca mca_component_show_load_errors 1 r -e  
</span><br>
<span class="quotelev1">&gt; 'library(Rmpi); print(mpi.comm.rank(0))'
</span><br>
<span class="quotelev1">&gt; [ron:18360] mca: base: component_find: unable to open osc pt2pt:  
</span><br>
<span class="quotelev1">&gt; file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [ron:18361] mca: base: component_find: unable to open osc pt2pt:  
</span><br>
<span class="quotelev1">&gt; file not found (ignored)
</span><br>
<p>Truly odd.  Looking in the code, this error message is displayed when  
<br>
lt_dlopen() of the component fails for some reason (the Libtool  
<br>
portable wrapper library around dlopen() and friends).  We print out  
<br>
the error string that libltdl returns to us, and it's apparently  
<br>
&quot;file not found&quot;.  This *usually* refers to the fact that a  
<br>
dependency of the DSO that we're trying to open wasn't found (not  
<br>
that the DSO itself wasn't found).
<br>
<p>Your list of ldd dependencies didn't show anything odd, so I can't  
<br>
imagine why it would get a &quot;file not found&quot; kind of error.
<br>
<p>An off the wall question: are you compiling / building Open MPI on  
<br>
one system and running it on another, where perhaps the dependencies  
<br>
are slightly different and therefore causing a failure?  This is a  
<br>
pretty weak question to ask, because I assume that *many* OMPI  
<br>
components would fail to open if this were the case, but I thought  
<br>
I'd ask anyway...
<br>
<p>Another whacky question: does the error happen when you start your  
<br>
test program manually (without mpirun)?
<br>
<p>Does this happen for all MPI programs (potentially only those that  
<br>
use the MPI-2 one-sided stuff), or just your R environment?
<br>
<p>At this point, all I can suggest is firing up a debugger and stepping  
<br>
through the code in ld_dlopenext() to see why exactly it is failing.   
<br>
Since we call lt_dlopenext() many, many times (and you're only  
<br>
interested in when we call it for the osc pt2pt component), I'd  
<br>
suggest something like the following:
<br>
<p>- it is easier if the problem also occurs when you run the program  
<br>
serially (without mpirun) -- just run it in a debugger
<br>
- break in ompi_osc_base_open
<br>
- set a breakpoint for lt_dlopenext
<br>
- continue until you hit the lt_dlopenext function
<br>
- print the filename; it will be either the pt2pt or rdma osc components
<br>
- step through the lt_dlopenext function and see if you can track  
<br>
down the exact error
<br>
<p>Sorry I don't have a better suggestion than this...  :-\
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4186.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
<li><strong>Previous message:</strong> <a href="4184.php">Brian Granger: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4182.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4190.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4190.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
