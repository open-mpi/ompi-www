<?
$subject_val = "Re: [OMPI users] Info needed for building Open-MPI against external ROMIO";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 21:51:21 2008" -->
<!-- isoreceived="20080212025121" -->
<!-- sent="Mon, 11 Feb 2008 20:51:02 -0600 (CST)" -->
<!-- isosent="20080212025102" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Info needed for building Open-MPI against external ROMIO" -->
<!-- id="Pine.LNX.4.64.0802112041020.663_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8B9101BC-A214-482E-AEDA-0FFC5F558564_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Info needed for building Open-MPI against external ROMIO<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-11 21:51:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5020.php">Anze Slosar: "[OMPI users] trouble building"</a>
<li><strong>Previous message:</strong> <a href="5018.php">David Gunter: "[OMPI users] Info needed for building Open-MPI against external ROMIO"</a>
<li><strong>In reply to:</strong> <a href="5018.php">David Gunter: "[OMPI users] Info needed for building Open-MPI against external ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5021.php">Jeff Squyres: "Re: [OMPI users] Info needed for building Open-MPI against external ROMIO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David -
<br>
<p>It looks like the code to do this was never pushed into the v1.2 release 
<br>
(although it is in the trunk).  I have no idea what time frame you're 
<br>
looking at, but if you need an updated ROMIO before 1.3 is available, 
<br>
someone would need to bring over the changes and do a 1.2.6 release.
<br>
<p>In v1.3, you'll be able to use the --disable-mpi-io option to configure to 
<br>
completely remove any traces of MPI I/O support from the stock Open MPI 
<br>
build (so that you could have an external ROMIO package).
<br>
<p>Brian
<br>
<p><p>On Mon, 11 Feb 2008, David Gunter wrote:
<br>
<p><span class="quotelev1">&gt; We have a number of patches and files to be added to ROMIO to make it
</span><br>
<span class="quotelev1">&gt; work with recent releases of the Panasas file system.  We have reached
</span><br>
<span class="quotelev1">&gt; a point where the stock ROMIO included in Open-MPI no longer works for
</span><br>
<span class="quotelev1">&gt; what we need.  I know that the version of ROMIO forged into the bowels
</span><br>
<span class="quotelev1">&gt; of OMPI is a beast to try and patch or mend so that is something we
</span><br>
<span class="quotelev1">&gt; won't attempt.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thus we have two choices here at LANL.  Either we drop support and no
</span><br>
<span class="quotelev1">&gt; longer provide OMPI to our user community and switch to MVAPICH2 for
</span><br>
<span class="quotelev1">&gt; our only MPI on systems, or we can try and build OMPI against an
</span><br>
<span class="quotelev1">&gt; externally maintained ROMIO.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In an August 2007 email Jeff Squyres hinted that there is a way to do
</span><br>
<span class="quotelev1">&gt; the latter:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; | Continual re-integration of ROMIO is definitely a logistics problem
</span><br>
<span class="quotelev1">&gt; | that we have not solved. And it's becoming a bigger problem. :-(
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | Normally, we're quite open to accepting patches to Open MPI to put
</span><br>
<span class="quotelev1">&gt; | them into the main distribution to ease the whole &quot;millions of MPI
</span><br>
<span class="quotelev1">&gt; | distros&quot; issue, but with ROMIO it becomes quite difficult because we
</span><br>
<span class="quotelev1">&gt; | have to source from Argonne's copy. Trying to manage what patches
</span><br>
<span class="quotelev1">&gt; | need to go in is already quite difficult because:
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | - ROMIO is not on our release schedule
</span><br>
<span class="quotelev1">&gt; | - OMPI adds its own integration patches to ROMIO
</span><br>
<span class="quotelev1">&gt; | - All the OMPI developers have other work to do ;-)
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | Adding 3rd party patches in there for something that we already know
</span><br>
<span class="quotelev1">&gt; | is complex and understaffed has unfortunately been a low priority. :-(
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | One thing that may make things a little better is that Brian recently
</span><br>
<span class="quotelev1">&gt; | integrated some work onto the OMPI trunk that allows ROMIO to be
</span><br>
<span class="quotelev1">&gt; | built outside of OMPI. Hence, if you have a standalone ROMIO, OMPI
</span><br>
<span class="quotelev1">&gt; | can use it. I don't know the details (i.e., if you can still use
</span><br>
<span class="quotelev1">&gt; | mpi.h / MPI_Request / MPI_Test / MPI_Wait like you can with the
</span><br>
<span class="quotelev1">&gt; | default OMPI ROMIO integration) -- Brian will have to chime in here...
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | So I don't know what the real solution is here -- I'm just trying to
</span><br>
<span class="quotelev1">&gt; | give some of the OMPI perspective. Suggestions are welcome.
</span><br>
<span class="quotelev1">&gt; | Probably the best solution would be someone to volunteer to actually
</span><br>
<span class="quotelev1">&gt; | spend the cycles to maintain ROMIO in Open MPI (I am pretty sure that
</span><br>
<span class="quotelev1">&gt; | Brian simply does not have them)...
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | --
</span><br>
<span class="quotelev1">&gt; | Jeff Squyres
</span><br>
<span class="quotelev1">&gt; | Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since Brian no longer works on these issues I'm wondering if and how
</span><br>
<span class="quotelev1">&gt; it is possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; david
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; David Gunter
</span><br>
<span class="quotelev1">&gt; HPC-3: Parallel Tools Team
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboraotry
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5020.php">Anze Slosar: "[OMPI users] trouble building"</a>
<li><strong>Previous message:</strong> <a href="5018.php">David Gunter: "[OMPI users] Info needed for building Open-MPI against external ROMIO"</a>
<li><strong>In reply to:</strong> <a href="5018.php">David Gunter: "[OMPI users] Info needed for building Open-MPI against external ROMIO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5021.php">Jeff Squyres: "Re: [OMPI users] Info needed for building Open-MPI against external ROMIO"</a>
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
