<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  2 15:53:20 2006" -->
<!-- isoreceived="20061102205320" -->
<!-- sent="Thu, 02 Nov 2006 21:53:11 +0100" -->
<!-- isosent="20061102205311" -->
<!-- name="Pierre Valiron" -->
<!-- email="Pierre.Valiron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tickets 39 &amp;amp; 55" -->
<!-- id="454A5AB7.60702_at_obs.ujf-grenoble.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A6B8E9A1-8496-489E-9E46-2F1FD3374EDC_at_ieee.org" -->
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
<strong>From:</strong> Pierre Valiron (<em>Pierre.Valiron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-02 15:53:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2125.php">Jeff Squyres: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>Previous message:</strong> <a href="2123.php">Gleb Natapov: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>In reply to:</strong> <a href="2122.php">Michael Kluskens: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2126.php">Jeff Squyres: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
All this seems a terrific effort. <br>
Is it really justified, especially if it can't cope with the diversity
of real-world applications ?<br>
<br>
I suspect that people who are clever enough to code complex parallel
codes involving collective primitives might be able to check arguments.
<br>
If possible, I suggest that "easy" arguments (codes) should be checked,
and that multidimensional ones (buffers) should not. And of course the
doc should make the point clear enough.<br>
<br>
If f03 standard allows a full argument check, let it be for a f03
interface only.<br>
<br>
Pierre V. <br>
<br>
<br>
Michael Kluskens wrote:
<blockquote cite="midA6B8E9A1-8496-489E-9E46-2F1FD3374EDC@ieee.org"
 type="cite">
  <pre wrap="">On Nov 2, 2006, at 11:53 AM, Jeff Squyres wrote:

  </pre>
  <blockquote type="cite">
    <pre wrap="">Adding Craig Rasmussen from LANL into the CC list...

On Oct 31, 2006, at 10:26 AM, Michael Kluskens wrote:

    </pre>
    <blockquote type="cite">
      <pre wrap="">OpenMPI tickets 39 &amp; 55 deal with problems with the Fortran 90
large interface with regards to:

#39: MPI_IN_PLACE in MPI_REDUCE <a class="moz-txt-link-rfc2396E" href="https://svn.open-mpi.org/trac/ompi/ticket/39">&lt;https://svn.open-mpi.org/trac/ompi/
ticket/39&gt;</a>
#55: MPI_GATHER with arrays of different dimensions <a class="moz-txt-link-rfc2396E" href="https://svn.open-mpi.org/trac/ompi/ticket/55">&lt;https://
svn.open-mpi.org/trac/ompi/ticket/55&gt;</a>

Attached is a patch to deal with these two issues as applied
against OpenMPI-1.3a1r12364.
      </pre>
    </blockquote>
    <pre wrap="">Thanks for the patch!  Before committing this, though, I think more
needs to be done and I want to understand it before doing so (part of
this is me thinking it out while I write this e-mail...).  Also, be
aware that SC is 1.5 weeks away, so I may not be able to get to
address this issue before then (SC tends to be all-consuming).
    </pre>
  </blockquote>
  <pre wrap=""><!---->
Understood, just didn't wish to see this die or get worse.

  </pre>
  <blockquote type="cite">
    <pre wrap="">1. The "same type" heuristic for the "large" F90 module was not
intended to cover all possible scenarios.  You're absolutely right
that assuming the same
    </pre>
  </blockquote>
  <pre wrap=""><!---->dimension (sp)
  </pre>
  <blockquote type="cite">
    <pre wrap="">makes no sense for some of the
interfaces.  The problem is that the obvious alternative (all
possible scenarios) creates an exponential number of interfaces (in
the millions).
    </pre>
  </blockquote>
  <pre wrap=""><!---->
I think it can be limited by including reasonable scenarios.  As is  
it's not very useful but as is it at least can be patched by the end- 
builder.

  </pre>
  <blockquote type="cite">
    <pre wrap="">  So "large" was an attempt to provide *some* of the
interfaces -- but [your] experience has shown that this can do more
harm than good (i.e., make some legal MPI applications uncompilable
because we provide *some* interfaces to MPI_GATHER, but not all).
    </pre>
  </blockquote>
  <pre wrap=""><!---->
This is a serious issue in my opinion.  I suspect that virtually  
every use of MPI_GATHER and the others would fail with the large  
interfaces as is, there by making sure no one would be able to use  
the large interfaces on a multiuser system.

  </pre>
  <blockquote type="cite">
    <pre wrap="">1a. It gets worse because of MPI's semantics for MPI_GATHER.  You
pointed out one scenario -- it doesn't make sense to supply "integer"
for both the sendbuf and recvbuf because the root will need an
integer array to receive all the values (similar logic applies to
MPI_SCATTER and other collectives -- so what you did for MPI_GATHER
would need to be applied to several others as well).
    </pre>
  </blockquote>
  <pre wrap=""><!---->
Agreed.  I limited my patch to that which I could test with working  
code and could justify work time wise.

  </pre>
  <blockquote type="cite">
    <pre wrap="">1b. But even worse than that is the fact that, for MPI_GATHER, the
receive buffer is not relevant on non-root processes.  So it's valid
for *any* type to be passed for non-root processes (leading to the
exponential interface explosion described above).
    </pre>
  </blockquote>
  <pre wrap=""><!---->
I would consider this to be very bad programming practice and not a  
good idea to support in the large interface regardless of the cost.

One issue is that derived datatypes will never (?) work with the  
large interfaces, for that matter I would guess that derived  
datatypes probably don't work with medium and possibly small  
interfaces.  I don't know if there is away around that issue at all  
in F90/F95, some places may have to do two installations.  I don't  
think giving up on all interfaces that conflict with derived types is  
a good solution.

  </pre>
  <blockquote type="cite">
    <pre wrap="">So having *some* interfaces for MPI_GATHER can be a problem for both
1a and 1b -- perfectly valid/legal MPI apps will fail to compile.

I'm not sure what the right balance is here -- how do we allow for
both 1a and 1b without creating millions of interfaces?  Your patch
created MPI_GATHER interfaces for all the same types, but allowing
any dimension mix.  With the default max dimension level of 4 in
OMPI's interfaces, this created 90 new interfaces for MPI_GATHER,
calculated (and verified with some grep/wc'ing):

For src buffer of dimension:    0   1   2   3   4
Create this many recvbuf types: 4 + 4 + 3 + 2 + 1 = 14
    </pre>
  </blockquote>
  <pre wrap=""><!---->
An alternative would be to allow same and one less dimension for  
large (called dim+1 below), and make all dimensions be optional some  
way.  I know that having these extra interfaces allowed me to find  
serious oversights on my part by permitting me to compile with the  
large interfaces.

  </pre>
  <blockquote type="cite">
    <pre wrap="">For each src/recvbuf combination, create this many interfaces:

(char + logical + (integer * 4) + (real * 2) + (complex * 2)) = 10

Where 4, 2, and 2 are the number of integer, real, and complex types
supported by the compiler on my machines (e.g., gfortran on OSX/intel
and Linux/EM64T).

So this created 14 * 10 = 140 interfaces, as opposed to the 50 that
were there before the patch (5 dimensions of src/recvbuf * 10 types =
50), resulting in 90 new interfaces.

This effort will need to be duplicated by several other collectives:

- allgather, allgatherv
- alltoall, alltoallv, alltoallw
- gather, gatherv
- scatter, scatterv

So an increase of 9 * 90 = 810 new interfaces.  Not too bad,
considering the alternative (exponential).  But consider that the
"large" interface only has (by my count via egrep/wc) 4013
interfaces.  This would be increasing its size by about 20%.  This is
certainly not a show-stopper, but something to consider.
    </pre>
  </blockquote>
  <pre wrap=""><!---->
Without some increase (all or dim+1) I suspect large interfaces will  
be useless for anyone (or any site) accessing one of these 10  
routines anywhere in their program.

  </pre>
  <blockquote type="cite">
    <pre wrap="">Note that if you go higher than OMPI's default 4 dimensions, the
number of new interfaces gets considerably larger (e.g., for 7
dimensions you get 35 send/recv type combinations instead of 14, so
(35 * 10 * 9) = 3150 total interfaces (just for the collectives), if
I did my math right.

2. You also identified another scenario that needs to be fixed --
support for MPI_IN_PLACE in certain collectives (MPI_REDUCE is not
the only collective that supports it).  It doesn't seem to be a Good
Idea to allow the INTEGER type to be mixed with any other type for
send/recvbuf combinations, just to allow MPI_IN_PLACE.  This
potentially adds in send/recvbuf signatures that we want to disallow
(even though they are potentially valid MPI applications!) -- e.g.,
INTEGER and FLOAT.  What if a user accidentally supplied an INTEGER
for the sendbuf that wasn't MPI_IN_PLACE?  That's what the type
system is supposed to be preventing.

I don't know enough about the type system of F90, but it strikes me
that we should be able to create a unique type for MPI_IN_PLACE
(don't know why I didn't think of this before for some of the MPI
sentinel values... :-\ ) and therefore have a safe mechanism for this
sentinel value.
    </pre>
  </blockquote>
  <pre wrap=""><!---->
This would be very good approach, allowing large interfaces to be  
used with MPI_IN_PLACE but preventing this alternative error.  That's  
a bit more complicated then I'm ready to patch myself.

  </pre>
  <blockquote type="cite">
    <pre wrap="">This would add 10 interfaces for every function that supports
MPI_IN_PLACE; a pretty small increase.

This same technique should probably be applied to some of the other
sentinel values, such as MPI_ARGVS_NULL and MPI_STATUSES_IGNORE.
    </pre>
  </blockquote>
  <pre wrap=""><!---->
I agree on that as well, but don't have experience using these to  
understand all their issues.

  </pre>
  <blockquote type="cite">
    <pre wrap="">---------------

All that being said, what does it mean?

I think #2 is easily enough fixed (just require the time to do so),
and has minimal impact on the number of interfaces.  Implementing MPI
sentinel values with unique types also makes user apps that much more
safe (i.e., they won't accidentally pass in an incorrect type that
would be mistaken -- by the interface -- for a valid signature).
    </pre>
  </blockquote>
  <pre wrap=""><!---->
Or pass the sentinel values into places they should not be passed.

  </pre>
  <blockquote type="cite">
    <pre wrap="">#1 is still a problem.  No matter how we slice it, we're going to
leave out valid combinations of send/recv buffers that will prevent
potentially legal MPI applications from compiling.  This is as
opposed to not having F90 interfaces for the 2-choice-buffer
functions at all, which would mean that F90 apps using MPI_GATHER
(for example) would simply fall back to the F77 interfaces where no
type checking is done.  End result: all MPI F90 apps can compile.

Simply put, with the trivial, small, and medium module sizes, all
valid MPI F90 applications can compile and run.
    </pre>
  </blockquote>
  <pre wrap=""><!---->
Well maybe not as I point out above with derived types, again not a  
reason to ditch interfaces completely, they do more good then harm.

  </pre>
  <blockquote type="cite">
    <pre wrap="">  With the large size,
unless we do the exponential interface explosion, we will be
potentially excluding some legal MPI F90 applications -- they *will
not be able to compile* (without workarounds).  This is what I meant
by ticket 55's title "F90 "large" interface may not entirely make
sense".

So there are multiple options here:

1. Keep chasing a "good" definition of "large" such that most/all
current MPI F90 apps can compile.  The problem is that this target
can change over time, and keep requiring maintenance.

2. Stop pursuing "large" because of the problems mentioned above.
This has the potential problem of not providing type safety to F90
MPI apps for the MPI collective interfaces, but at least all apps can
compile, and there's only a small number of 2-choice-buffer functions
that do not get the type safety from F90 (i.e., several MPI
collective functions).

3. Start implementing the proposed F03 MPI interfaces that don't have
the same problems as the F90 MPI interfaces.

I have to admit that I'm leaning more towards #2 (and I wish that
someone who has the time would do #3!) and discarding #1...
    </pre>
  </blockquote>
  <pre wrap=""><!---->

I dislike #2 intensely because then I and others couldn't at least  
patch the interface scripts before building OpenMPI.

#1 is preferred and just give the users/builders clear notice they  
may not cover everything and perhaps a hint as to what directory has  
the files to be patched to extend the large interface a bit further.

#3 would be nice but I don't see enough F03 support in enough  
compilers at this time.  I don't even have a book on the F03 changes  
and I program Fortran most of the day virtually every weekday.  It  
took our group till about 2000 to start using Fortran 90 and almost  
everything we do is in Fortran.

Michael

_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
  </pre>
</blockquote>
<br>
<br>
<pre class="moz-signature" cols="72">-- 
Soutenez le mouvement SAUVONS LA RECHERCHE :
<a class="moz-txt-link-freetext" href="http://recherche-en-danger.apinc.org/">http://recherche-en-danger.apinc.org/</a>

       _/_/_/_/    _/       _/       Dr. Pierre VALIRON
      _/     _/   _/      _/   Laboratoire d'Astrophysique
     _/     _/   _/     _/    Observatoire de Grenoble / UJF
    _/_/_/_/    _/    _/    BP 53  F-38041 Grenoble Cedex 9 (France)
   _/          _/   _/    <a class="moz-txt-link-freetext" href="http://www-laog.obs.ujf-grenoble.fr/~valiron/">http://www-laog.obs.ujf-grenoble.fr/~valiron/</a>
  _/          _/  _/     Mail: <a class="moz-txt-link-abbreviated" href="mailto:Pierre.Valiron@obs.ujf-grenoble.fr">Pierre.Valiron@obs.ujf-grenoble.fr</a>
 _/          _/ _/      Phone: +33 4 7651 4787  Fax: +33 4 7644 8821
_/          _/_/        

</pre>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2125.php">Jeff Squyres: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>Previous message:</strong> <a href="2123.php">Gleb Natapov: "Re: [OMPI users] dma using infiniband protocol"</a>
<li><strong>In reply to:</strong> <a href="2122.php">Michael Kluskens: "Re: [OMPI users] tickets 39 &amp; 55"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2126.php">Jeff Squyres: "Re: [OMPI users] tickets 39 &amp; 55"</a>
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
