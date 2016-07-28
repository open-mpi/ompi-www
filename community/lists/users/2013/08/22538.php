<?
$subject_val = "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 21 22:53:01 2013" -->
<!-- isoreceived="20130822025301" -->
<!-- sent="Wed, 21 Aug 2013 19:53:00 -0700" -->
<!-- isosent="20130822025300" -->
<!-- name="Richard Haney" -->
<!-- email="rfhaney_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make" -->
<!-- id="CACpvy6AatPE8SnBtA5bxeGjfSB3eeYj60mmMr3qqDBg5x78NGg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.LRH.2.03.1308202240420.36131_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make<br>
<strong>From:</strong> Richard Haney (<em>rfhaney_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-21 22:53:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22539.php">mahesh: "[OMPI users] Detailed documentation on OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="22537.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>In reply to:</strong> <a href="22531.php">Jeremiah Willcock: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22540.php">George Bosilca: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<li><strong>Reply:</strong> <a href="22540.php">George Bosilca: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...
<br>
<p>Thanks, Jeremiah, for the suggestion.
<br>
<p>File win_compat.h is in directory opal/win32 , a directory which by its
<br>
name is supposedly concerned only with producing a 32-bit target, and so,
<br>
because we are doing a build for a 64-bit target, it seems make should not
<br>
be having anything to do with files in that directory.
<br>
<p>What seems a more likely approach is to consider what happens in asm.c ,
<br>
which appears to be where make has problems.  I gather that either some
<br>
command is executed to create asm.lo earlier in the make processing
<br>
(although make output does not show any earlier command to do that) or
<br>
else, which seems more likely, gcc (in command &quot;   CC     asm.lo &quot; ) knows
<br>
how to interpret the file name asm.lo so as to look at asm.c for build
<br>
purposes.
<br>
<p>So what does asm.c do???  After a bunch of initial #include statements in
<br>
asm.c there is next the statement
<br>
<p>#if OPAL_ASSEMBLY_ARCH == OMPI_SPARC
<br>
<p>But note that directory opal/asm/base has a bunch of files whose names
<br>
suggest that SPARC is an alternative architecture to AMD64 .  So it seems
<br>
the preprocessor #if condition should evaluate to false.  The other end of
<br>
this #if statement is
<br>
<p>#endif /* OPAL_ASSEMBLY_ARCH == OMPI_SPARC32 */
<br>
<p>at the very end of the file.  So it seems the result is that there is no
<br>
code in asm.c to compile (or assemble); the resulting preprocessed file
<br>
consists only of included headers.
<br>
<p>So I'm thinking that the thing to do is to gut asm.c and replace it with a
<br>
dummy routine so that at least an object file will be produced so that make
<br>
will not get confused for lack of an object file.
<br>
<p>But this assumes that asm.c is not supposed to produce any entry points or
<br>
other loader variables to link to other modules in Open MPI.
<br>
<p>That is a big question.  One possibility is to find some equivalent 32-bit
<br>
file alternative to the supposed 64-bit asm.c and to try to manually
<br>
re-interpret and modify that code so as to become an equivalent 64-bit code.
<br>
<p>So maybe I should do a 32-bit build and somehow adjust the relevant
<br>
Makefileso that a file of 32-bit preprocessed C or assembly code is
<br>
produced from
<br>
asm.c  But I suppose this would require knowing what the command &quot;CC
<br>
&nbsp;&nbsp;asm.lo&quot;
<br>
is actually supposed to do even in the 32-bit case.
<br>
<p>I am wondering whether such a 32-bit &quot;build&quot; for preprocessed output from
<br>
asm.c can be done as a quick, stand-alone run without having to rerun
<br>
configure and make for context.
<br>
<p><pre>
---
Note also the OMPI_SPARC32 in the comment for #endif .  That suggests the
author may have been vacillating as to whether SPARC is a 32-bit
architecture.
There is likely lots of guessing in this approach; so unless someone can
suggest a more direct and definitive solution to resolve this issue fairly
soon, I think I may take a little vacation and perhaps come back to this
question later.
Richard Haney
On Tue, Aug 20, 2013 at 7:41 PM, Jeremiah Willcock &lt;jewillco_at_[hidden]&gt;wrote:
&gt; The file win_compat.h seems to be very strange (many #defines of function
&gt; names, #defines of type names rather than typedefs, etc.).  It might make
&gt; sense to avoid including it entirely for MinGW (it is included from
&gt; opal/include/opal_config_**bottom.h), or edit it to be correct for 64-bit
&gt; systems.  You might want to try commenting out the entire body of
&gt; win_compat.h and re-enabling only those parts that are truly necessary (and
&gt; don't have MinGW headers that should be used instead, such as for ssize_t).
&gt;
&gt; -- Jeremiah Willcock
&gt;
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22538/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22539.php">mahesh: "[OMPI users] Detailed documentation on OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="22537.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>In reply to:</strong> <a href="22531.php">Jeremiah Willcock: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22540.php">George Bosilca: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
<li><strong>Reply:</strong> <a href="22540.php">George Bosilca: "Re: [OMPI users] Addendum to: Assembler instruction errors for push and pop during make"</a>
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
