<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 10 13:27:08 2007" -->
<!-- isoreceived="20071010172708" -->
<!-- sent="Wed, 10 Oct 2007 12:27:02 -0500" -->
<!-- isosent="20071010172702" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="18189.2918.953533.934053_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EAABDC05-3C69-429E-9556-1D51DF4C6B42_at_cisco.com" -->
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
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-10 13:27:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4191.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4189.php">Jim Kusznir: "Re: [OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
<li><strong>In reply to:</strong> <a href="4185.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4191.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4191.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Thanks for the reply.  I have gotten much closer, and it looks like all
<br>
wounds were self-inflicted.  More below.
<br>
<p>On 9 October 2007 at 22:01, Jeff Squyres wrote:
<br>
| On Oct 9, 2007, at 3:50 PM, Dirk Eddelbuettel wrote:
<br>
| 
<br>
| &gt; edd_at_ron:~$ orterun -n 2 --mca mca_component_show_load_errors 1 r -e  
<br>
| &gt; 'library(Rmpi); print(mpi.comm.rank(0))'
<br>
| &gt; [ron:18360] mca: base: component_find: unable to open osc pt2pt:  
<br>
| &gt; file not found (ignored)
<br>
| &gt; [ron:18361] mca: base: component_find: unable to open osc pt2pt:  
<br>
| &gt; file not found (ignored)
<br>
| 
<br>
| Truly odd.  Looking in the code, this error message is displayed when  
<br>
| lt_dlopen() of the component fails for some reason (the Libtool  
<br>
| portable wrapper library around dlopen() and friends).  We print out  
<br>
| the error string that libltdl returns to us, and it's apparently  
<br>
| &quot;file not found&quot;.  This *usually* refers to the fact that a  
<br>
| dependency of the DSO that we're trying to open wasn't found (not  
<br>
| that the DSO itself wasn't found).
<br>
| 
<br>
| Your list of ldd dependencies didn't show anything odd, so I can't  
<br>
| imagine why it would get a &quot;file not found&quot; kind of error.
<br>
| 
<br>
| An off the wall question: are you compiling / building Open MPI on  
<br>
| one system and running it on another, where perhaps the dependencies  
<br>
| are slightly different and therefore causing a failure?  This is a  
<br>
| pretty weak question to ask, because I assume that *many* OMPI  
<br>
| components would fail to open if this were the case, but I thought  
<br>
| I'd ask anyway...
<br>
<p>It's a fair question, but the Debian dependencies are usually good enough.  [
<br>
The answer is 'yes and no' as I build what gets onto Debian's mirrors, but
<br>
using a standardised chroot whereas I then run it on my normal system. So the
<br>
the same-yet-different machine. And there can be differences, but this is
<br>
typically caught by the package management layer. ]
<br>
<p>| Another whacky question: does the error happen when you start your  
<br>
| test program manually (without mpirun)?
<br>
<p>That made no difference.
<br>
<p>| Does this happen for all MPI programs (potentially only those that  
<br>
| use the MPI-2 one-sided stuff), or just your R environment?
<br>
<p>This is the likely winner. 
<br>
<p>It seems indeed due to R's Rmpi package. Running a simple mpitest.c shows no
<br>
error message. We will look at the Rmpi initialization to see what could
<br>
cause this.
<br>
&nbsp;
<br>
| At this point, all I can suggest is firing up a debugger and stepping  
<br>
| through the code in ld_dlopenext() to see why exactly it is failing.   
<br>
<p>Seems like I avoided that trip to the dentist. ;-)
<br>
<p>Moreover, despite my attempts at checking and double checking, my apparent
<br>
'works on Debian but not on Ubuntu' was due to a LAM / OpenMPI mix on my
<br>
Ubuntu machine at work.  Sorry, that was another false alarm.
<br>
<p>| Sorry I don't have a better suggestion than this...  :-\
<br>
<p>You were spot-on and most helpful. Thanks a bunch.
<br>
<p>Cheers, Dirk
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4191.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4189.php">Jim Kusznir: "Re: [OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
<li><strong>In reply to:</strong> <a href="4185.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4191.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4191.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
