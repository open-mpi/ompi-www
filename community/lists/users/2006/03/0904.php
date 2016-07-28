<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 24 19:17:18 2006" -->
<!-- isoreceived="20060325001718" -->
<!-- sent="Fri, 24 Mar 2006 19:17:09 -0500" -->
<!-- isosent="20060325001709" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PBS Professional" -->
<!-- id="9A98CFB5-4B83-4422-93D9-1CAFEBA76F64_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="op.s6xyudbjies9li_at_rygel.lnxi.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-24 19:17:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0905.php">Troy Telford: "Re: [OMPI users] PBS Professional"</a>
<li><strong>Previous message:</strong> <a href="0903.php">Troy Telford: "Re: [OMPI users] PBS Professional"</a>
<li><strong>In reply to:</strong> <a href="0903.php">Troy Telford: "Re: [OMPI users] PBS Professional"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0905.php">Troy Telford: "Re: [OMPI users] PBS Professional"</a>
<li><strong>Reply:</strong> <a href="0905.php">Troy Telford: "Re: [OMPI users] PBS Professional"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 24, 2006, at 6:43 PM, Troy Telford wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, 24 Mar 2006 16:30:37 -0700, Brian Barrett &lt;brbarret_at_open- 
</span><br>
<span class="quotelev1">&gt; mpi.org&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev2">&gt;&gt;   The freely available derivatives of PBS all
</span><br>
<span class="quotelev2">&gt;&gt; seemed more than happy to help with building the tm libraries with -
</span><br>
<span class="quotelev2">&gt;&gt; fPIC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's a pity that I'm not in a position where I don't have to deal  
</span><br>
<span class="quotelev1">&gt; with PBS
</span><br>
<span class="quotelev1">&gt; Professional.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Still, thanks for the info; I guess when PBS Pro is there, there's  
</span><br>
<span class="quotelev1">&gt; only
</span><br>
<span class="quotelev1">&gt; one option...
</span><br>
<p>Unfortunately, I think so.  We have the same problem on some of our  
<br>
University-wide systems that use PBS Pro.  Thankfully, just one  
<br>
system is x86_64, so not a big deal.  But still less than ideal (if  
<br>
only because I usually only remember to add the --enable-static -- 
<br>
disable-shared after the build aborts).
<br>
<p>One thought that occurs to me that *might* work, but would be really  
<br>
icky, would be to build a complete build of Open MPI (binaries and  
<br>
all) with --enable-static --disable-shared and with TM.  This means  
<br>
all the *Open MPI* binaries (mpirun, the wrapper compilers) will be  
<br>
built statically and not be able load components.  Then do another  
<br>
build with --enable-shared, without tm, but all the other flags the  
<br>
same.  Just install the headers and libraries for this build.  This  
<br>
build will be able to load components, since it's shared.  Since  
<br>
Linux prefers shared libraries over static libraries, the user codes  
<br>
will be linked against the shared libraries and able to be load  
<br>
dynamic modules.
<br>
<p>I think this might break MPI_COMM_SPAWN, which is unfortunately (more  
<br>
to the point, MPI_COMM_SPAWN would not use TM to start new procs).   
<br>
But it would allow loadable modules for things like the point-to- 
<br>
point network support, which I'm guessing is what you're really after.
<br>
<p>I'm not sure we could do something like this internally in Open MPI's  
<br>
build system and we definitely don't have the developer time to look  
<br>
into it in the foreseeable future.
<br>
<p>Thinking about it some more, there is one even more icky solution to  
<br>
the problem.  Again, this is not something the Open MPI development  
<br>
team can put cycles into.  Last I heard / looked, the TM interface  
<br>
and the wire protocol to the pbs_mom hadn't changed much in years and  
<br>
years.  There's an open source version of PBS out there that includes  
<br>
code to implement this wire protocol.  There's no reason Open MPI pls  
<br>
and ras components couldn't be developed that talked directly to the  
<br>
pbs_mom rather than using the published API.  Nasty, yes.  But it  
<br>
might work.  And since the PBS Pro libraries wouldn't need to be  
<br>
linked in, the -fPIC problem is avoided.
<br>
<p>If you're interested in having a stab at either work-around approach,  
<br>
let me know (might be easiest to post to the devel mailing list so  
<br>
that we don't bore all the users with the awful details).  I'd be  
<br>
interested in seeing if something couldn't be done between now and  
<br>
when Altair releases PBS Pro libraries for the Opteron compiled with - 
<br>
fPIC.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0905.php">Troy Telford: "Re: [OMPI users] PBS Professional"</a>
<li><strong>Previous message:</strong> <a href="0903.php">Troy Telford: "Re: [OMPI users] PBS Professional"</a>
<li><strong>In reply to:</strong> <a href="0903.php">Troy Telford: "Re: [OMPI users] PBS Professional"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0905.php">Troy Telford: "Re: [OMPI users] PBS Professional"</a>
<li><strong>Reply:</strong> <a href="0905.php">Troy Telford: "Re: [OMPI users] PBS Professional"</a>
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
