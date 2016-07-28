<?
$subject_val = "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 08:55:06 2014" -->
<!-- isoreceived="20141106135506" -->
<!-- sent="Thu, 6 Nov 2014 13:55:03 +0000" -->
<!-- isosent="20141106135503" -->
<!-- name="Michael.Rachner_at_[hidden]" -->
<!-- email="Michael.Rachner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF" -->
<!-- id="8337B490252F0944BF1D38541059627E17371053_at_DLREXMBX01.intra.dlr.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="6837EF03-401B-465E-BB68-9E6D450410FC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF<br>
<strong>From:</strong> <a href="mailto:Michael.Rachner_at_[hidden]?Subject=Re:%20[OMPI%20users]%20OPENMPI-1.8.3:%20missing%20fortran%20bindings%20for%20MPI_SIZEOF"><em>Michael.Rachner_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-11-06 08:55:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25700.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25698.php">Michael Di Domenico: "Re: [OMPI users] ipath_userinit errors"</a>
<li><strong>In reply to:</strong> <a href="25697.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25700.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25700.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Mr. Squyres,
<br>
<p>I agree fully with omitting the explicit interfaces from  mpif.h   . It is an important  resort for legacy codes.
<br>
But, in the mpi and mpi_f08 module  explicit interfaces are required for  all(!)  MPI-routines.
<br>
So far, this is not fulfilled in MPI-versions I know. 
<br>
I want to point out here, that this has a negative consequence for the Ftn-coding:
<br>
&nbsp;&nbsp;'If someone uses the mpi (or mpi_f08) module, then he cannot put the name of an MPI-routine in the &quot;only&quot;-list of the mpi module'.
<br>
<p>I explain that now: 
<br>
&nbsp;&nbsp;&nbsp;The following stmt is an example of a desirable stmt, because the programmer sees at a glance, which quantities are used from this module in his subroutine,
<br>
&nbsp;&nbsp;&nbsp;and this stmt limits the quantities in the mpi module only to those actually needed in the subroutine:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use MPI, only:   MPI_COMM_WORLD, MPI_IN_PLACE, MPI_REDUCE
<br>
&nbsp;&nbsp;&nbsp;However this stmt will work only, if the explicit interface for MPI_REDUCE is actually present in the mpi module.
<br>
&nbsp;&nbsp;&nbsp;Unfortunately the explicit interfaces are not complete in the MPI distributions I know,
<br>
&nbsp;&nbsp;&nbsp;so the programmer must use instead:   a)     use MPI, only:  MPI_COMM_WORLD, MPI_IN_PLACE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This has the drawback, that always the implicit interface for MPI_REDUCE will be used, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i.e. there is no control of the parameter list by the explicit interface, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;even if there exists an explicit interface in the mpi module
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or :   b)       use MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Here the explicit interface will be used if present in the module, otherwise the implicit interface will be used,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this is o.k., but the drawback is now, that the whole MPI world is (silently) present in the subroutine, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and the programmer cannot see at a glance, what quantities are really used from the module in the sbr.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
Greetings 
<br>
&nbsp;&nbsp;Michael Rachner
<br>
<p><p>-----Urspr&#252;ngliche Nachricht-----
<br>
Von: users [mailto:users-bounces_at_[hidden]] Im Auftrag von Jeff Squyres (jsquyres)
<br>
Gesendet: Donnerstag, 6. November 2014 12:42
<br>
An: Open MPI User's List
<br>
Betreff: Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF
<br>
<p>On Nov 6, 2014, at 5:37 AM, &lt;Michael.Rachner_at_[hidden]&gt; &lt;Michael.Rachner_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; a) When looking in your  mpi_sizeof_mpifh.f90  test program I found a little thing:  You may (but need not) change the name of the integer variable  size
</span><br>
<span class="quotelev1">&gt;    to e.g.   isize  , because   size   is just an intrinsic function in Fortran (you may see it already, if you have an editor with Fortran-highlighting).
</span><br>
<span class="quotelev1">&gt;   Although your type declaration overrides the intrinsic function, a renaming would make the coding unambiguous. 
</span><br>
<p>Good catch.  I'll do that.
<br>
<p><span class="quotelev1">&gt; b)  My idea was, that OPENMPI should provide always an declaration (interface) for each MPI-routine
</span><br>
<span class="quotelev1">&gt;    (and that's what the MPI-3.0 Standard document (Sept.21, 2012) prescribes (p. 599+601+603)),
</span><br>
<p>Note that MPI-3 p603 says (about mpif.h):
<br>
<p>&quot;For each MPI routine, an implementation can choose to use an implicit or explicit interface...&quot;
<br>
<p>I.e., it is *not* mandated that MPI implementations have explicit interfaces for mpif.h (although, obviously, it *is* mandated for the mpi and mpi_f08 modules).
<br>
<p>There are several reasons why MPI implementations have not added explicit interfaces to their mpif.h files, mostly boiling down to: they may/will break real world MPI programs.
<br>
<p>1. All modern compilers have ignore-TKR syntax, so it's at least not a problem for subroutines like MPI_SEND (with a choice buffer).  However: a) this was not true at the time when MPI-3 was written, and b) it's not standard fortran.
<br>
<p>2. There are (very) likely real-world programs out there that aren't quite right (i.e., would fail to compile with explicit interfaces), but still work fine.  On the one hand, it's terrible that we implementers continue to allow people to run &quot;incorrect&quot; programs.  But on the other hand, users *have* very simple option to run their codes through explicit interfaces (the mpi module), and can do so if they choose to.  Hence, the MPI Forum has decided that backwards compatibility is important enough for legacy codes -- some of which are tens of thousands of lines long (and more!), and there are no maintainers for them any more (!) -- to allow the &quot;good enough&quot; to keep going.
<br>
<p>3. But #1 and #2 are mostly trumped by: the goal is to deprecate mpif.h, anyway (perhaps in MPI-4?) -- so why bother spending any more time on it than we have to?  Ultimately, we'd like to get rid of the mpi module too (maybe in MPI-5?) -- the mpi_f08 module is the True Way Forward.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25697.php">http://www.open-mpi.org/community/lists/users/2014/11/25697.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25700.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25698.php">Michael Di Domenico: "Re: [OMPI users] ipath_userinit errors"</a>
<li><strong>In reply to:</strong> <a href="25697.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25700.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25700.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
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
