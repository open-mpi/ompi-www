<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  9 09:50:59 2007" -->
<!-- isoreceived="20071009135059" -->
<!-- sent="Tue, 9 Oct 2007 08:50:44 -0500" -->
<!-- isosent="20071009135044" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="18187.34612.506871.628615_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="45980878-7787-41F7-955A-57EC5736F7E5_at_cisco.com" -->
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
<strong>Date:</strong> 2007-10-09 09:50:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4183.php">Torsten Hoefler: "Re: [OMPI users] libnbc compilation"</a>
<li><strong>Previous message:</strong> <a href="4181.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4176.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4185.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4185.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9 October 2007 at 08:08, Jeff Squyres wrote:
<br>
| On Oct 7, 2007, at 12:53 AM, Dirk Eddelbuettel wrote:
<br>
| 
<br>
| &gt; | Not that I can tell.  What else could I test?  The build-logs  
<br>
| &gt; don't reveal
<br>
| &gt; | anything fishy -- all pt2pt occurrences look fine.  The build itself
<br>
| &gt; | proceeded fine (and this was the Debian package build I then uplod)
<br>
| &gt;
<br>
| &gt; Two more observations:
<br>
| &gt; -- the message does not appear on my Ubuntu system
<br>
| &gt; -- but it appears on Hao's Debian machine which does not use the  
<br>
| &gt; Debian package
<br>
| &gt;
<br>
| &gt; Could this be some dynamic loading issue?  How can we go about  
<br>
| &gt; solving this?
<br>
| 
<br>
| I'm disconnected from the network for the moment and can't test a  
<br>
| tarball build myself (i.e., I don't have ready access to a  
<br>
| distribution tarball), but I think that we disable showing dlopen  
<br>
| errors for optimized/tarball builds.  Try running with this MCA  
<br>
| parameter:
<br>
| 
<br>
|    mpriun --mca mca_component_show_load_errors 1 ...
<br>
<p>Does not reveal much. Using my Debian system:
<br>
<p>orterun -n 2 --mca mca_component_show_load_errors 1 r -e 'library(Rmpi);
<br>
print(mpi.comm.rank(0))'
<br>
<p>edd_at_ron:~$ orterun -n 2 --mca mca_component_show_load_errors 1 r -e 'library(Rmpi); print(mpi.comm.rank(0))'
<br>
[ron:18360] mca: base: component_find: unable to open osc pt2pt: file not found (ignored)
<br>
[ron:18361] mca: base: component_find: unable to open osc pt2pt: file not found (ignored)
<br>
[1] 0
<br>
[1] 1
<br>
edd_at_ron:~$ 
<br>
<p>and using my Ubuntu system -- same code, same compile options -- 
<br>
<p>foo:~&gt; orterun -n 2 --mca mca_component_show_load_errors 1 r -e
<br>
'library(Rmpi); print(mpi.comm.rank(0))'
<br>
[1] 0
<br>
[1] 1
<br>
foo:~&gt;
<br>
<p><p>Dirk
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4183.php">Torsten Hoefler: "Re: [OMPI users] libnbc compilation"</a>
<li><strong>Previous message:</strong> <a href="4181.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4176.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4185.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4185.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
