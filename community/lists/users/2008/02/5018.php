<?
$subject_val = "[OMPI users] Info needed for building Open-MPI against external ROMIO";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 16:33:31 2008" -->
<!-- isoreceived="20080211213331" -->
<!-- sent="Mon, 11 Feb 2008 14:33:21 -0700" -->
<!-- isosent="20080211213321" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="[OMPI users] Info needed for building Open-MPI against external ROMIO" -->
<!-- id="8B9101BC-A214-482E-AEDA-0FFC5F558564_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Info needed for building Open-MPI against external ROMIO<br>
<strong>From:</strong> David Gunter (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-11 16:33:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5019.php">Brian W. Barrett: "Re: [OMPI users] Info needed for building Open-MPI against external ROMIO"</a>
<li><strong>Previous message:</strong> <a href="5017.php">Stefan Knecht: "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5019.php">Brian W. Barrett: "Re: [OMPI users] Info needed for building Open-MPI against external ROMIO"</a>
<li><strong>Reply:</strong> <a href="5019.php">Brian W. Barrett: "Re: [OMPI users] Info needed for building Open-MPI against external ROMIO"</a>
<li><strong>Reply:</strong> <a href="5021.php">Jeff Squyres: "Re: [OMPI users] Info needed for building Open-MPI against external ROMIO"</a>
<li><strong>Reply:</strong> <a href="5060.php">Bill Wichser: "[OMPI users] ofa-default-subnet-gid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have a number of patches and files to be added to ROMIO to make it  
<br>
work with recent releases of the Panasas file system.  We have reached  
<br>
a point where the stock ROMIO included in Open-MPI no longer works for  
<br>
what we need.  I know that the version of ROMIO forged into the bowels  
<br>
of OMPI is a beast to try and patch or mend so that is something we  
<br>
won't attempt.
<br>
<p>Thus we have two choices here at LANL.  Either we drop support and no  
<br>
longer provide OMPI to our user community and switch to MVAPICH2 for  
<br>
our only MPI on systems, or we can try and build OMPI against an  
<br>
externally maintained ROMIO.
<br>
<p>In an August 2007 email Jeff Squyres hinted that there is a way to do  
<br>
the latter:
<br>
<p>| Continual re-integration of ROMIO is definitely a logistics problem
<br>
| that we have not solved. And it's becoming a bigger problem. :-(
<br>
|
<br>
| Normally, we're quite open to accepting patches to Open MPI to put
<br>
| them into the main distribution to ease the whole &quot;millions of MPI
<br>
| distros&quot; issue, but with ROMIO it becomes quite difficult because we
<br>
| have to source from Argonne's copy. Trying to manage what patches
<br>
| need to go in is already quite difficult because:
<br>
|
<br>
| - ROMIO is not on our release schedule
<br>
| - OMPI adds its own integration patches to ROMIO
<br>
| - All the OMPI developers have other work to do ;-)
<br>
|
<br>
| Adding 3rd party patches in there for something that we already know
<br>
| is complex and understaffed has unfortunately been a low priority. :-(
<br>
|
<br>
| One thing that may make things a little better is that Brian recently
<br>
| integrated some work onto the OMPI trunk that allows ROMIO to be
<br>
| built outside of OMPI. Hence, if you have a standalone ROMIO, OMPI
<br>
| can use it. I don't know the details (i.e., if you can still use
<br>
| mpi.h / MPI_Request / MPI_Test / MPI_Wait like you can with the
<br>
| default OMPI ROMIO integration) -- Brian will have to chime in here...
<br>
|
<br>
| So I don't know what the real solution is here -- I'm just trying to
<br>
| give some of the OMPI perspective. Suggestions are welcome.
<br>
| Probably the best solution would be someone to volunteer to actually
<br>
| spend the cycles to maintain ROMIO in Open MPI (I am pretty sure that
<br>
| Brian simply does not have them)...
<br>
|
<br>
| --
<br>
| Jeff Squyres
<br>
| Cisco Systems
<br>
<p>Since Brian no longer works on these issues I'm wondering if and how  
<br>
it is possible.
<br>
<p>Thanks,
<br>
david
<br>
<pre>
--
David Gunter
HPC-3: Parallel Tools Team
Los Alamos National Laboraotry
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5019.php">Brian W. Barrett: "Re: [OMPI users] Info needed for building Open-MPI against external ROMIO"</a>
<li><strong>Previous message:</strong> <a href="5017.php">Stefan Knecht: "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5019.php">Brian W. Barrett: "Re: [OMPI users] Info needed for building Open-MPI against external ROMIO"</a>
<li><strong>Reply:</strong> <a href="5019.php">Brian W. Barrett: "Re: [OMPI users] Info needed for building Open-MPI against external ROMIO"</a>
<li><strong>Reply:</strong> <a href="5021.php">Jeff Squyres: "Re: [OMPI users] Info needed for building Open-MPI against external ROMIO"</a>
<li><strong>Reply:</strong> <a href="5060.php">Bill Wichser: "[OMPI users] ofa-default-subnet-gid"</a>
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
