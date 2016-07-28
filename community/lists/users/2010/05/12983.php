<?
$subject_val = "Re: [OMPI users] Problem with mpi_comm_spawn_multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  7 18:30:17 2010" -->
<!-- isoreceived="20100507223017" -->
<!-- sent="Fri, 7 May 2010 18:30:12 -0400 (EDT)" -->
<!-- isosent="20100507223012" -->
<!-- name="Noam Bernstein" -->
<!-- email="noam.bernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with mpi_comm_spawn_multiple" -->
<!-- id="alpine.OSX.2.00.1005071816460.6629_at_magnesium-2.local" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20100507214459.GA2025_at_mefred01.me.ic.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with mpi_comm_spawn_multiple<br>
<strong>From:</strong> Noam Bernstein (<em>noam.bernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-07 18:30:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12984.php">Yves Caniou: "Re: [OMPI users] About the correct use of DIET_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="12982.php">Andrew J Marquis: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="12979.php">Andrew J Marquis: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13162.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="13162.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I haven't been following this whole discussion, but I do know
<br>
something about how Fortran allocates and passes string argument
<br>
(the joys of Fortran/C/python inter-language calls), for what
<br>
it's worth.
<br>
<p>By definition in the Fortran language all strings have a predefined
<br>
length, which Fortran magically knows.  Therefore, it doesn't need
<br>
termination (like null termination in C).  In practice, we've found
<br>
that most compilers, when you pass a string to a routine, also pass
<br>
its length, although you don't do so explicitly, so that &quot;character(len=*)
<br>
arg&quot; works.  In practice (and this is probably part of the standard),
<br>
Fortran ' ' pads all strings.  As usual, there's no default value
<br>
in new strings, so strings declared, string arrays declared, and
<br>
string arrays allocated may or may not have any particular value
<br>
at initialization.  But if you set a string to ' ', or even '',
<br>
it'll actually set it all to spaces, because of the padding.  There's
<br>
no null termination.  len(string) returns the overall (allocated
<br>
or declared) length, len_trim(string) will return the length ignoring
<br>
any trailing spaces.  If the underlying routines receiving the
<br>
string want to know how long it is, and they're C routines, they
<br>
have to have another (integer, by reference) argument.  Unfortunately,
<br>
compilers don't always agree on where that hidden argument goes.
<br>
Most, I think, put it after the explicit arguments, but some might
<br>
put it right after the string being passed.  If the receiving
<br>
routines are Fortran from another compiler, you're just hosed, I
<br>
think.
<br>
<p>As with every array in Fortran, arrays of strings
<br>
are contiguous in memory, and presumably the end of string (1,1)
<br>
is right before the beginning of string(2,1), etc.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noam
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12984.php">Yves Caniou: "Re: [OMPI users] About the correct use of DIET_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="12982.php">Andrew J Marquis: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="12979.php">Andrew J Marquis: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13162.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="13162.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
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
