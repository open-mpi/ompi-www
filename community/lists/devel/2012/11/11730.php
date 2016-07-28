<?
$subject_val = "Re: [OMPI devel] Compile-time MPI_Datatype checking";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 08:09:21 2012" -->
<!-- isoreceived="20121101120921" -->
<!-- sent="Thu, 1 Nov 2012 06:08:11 -0600" -->
<!-- isosent="20121101120811" -->
<!-- name="Kenneth A. Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compile-time MPI_Datatype checking" -->
<!-- id="009e01cdb829$9095aab0$b1c10010$_at_wattsys.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA16qNe7C_sKUZ4qiEmz4tOYzTKR4RAJdOAC+6EUZ-rtJpw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Compile-time MPI_Datatype checking<br>
<strong>From:</strong> Kenneth A. Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-01 08:08:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11731.php">Jeff Squyres: "Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>Previous message:</strong> <a href="11729.php">TERRY DONTJE: "Re: [OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11708.php">Paul Hargrove: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>&nbsp;
<br>
<p>Indeed, some of us are using clang (and other llvm front ends) for JIT on
<br>
our hetero HPC clusters for amorphous problem spaces.  Obviously, I don't
<br>
work for a National Lab. But I do mod/sim/vis for quantum, nano, and
<br>
meso-physics.
<br>
<p>&nbsp;
<br>
<p>Just wanted you to be aware.
<br>
<p>&nbsp;
<br>
<p>Ken
<br>
<p>&nbsp;
<br>
<p>From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
<br>
Behalf Of Paul Hargrove
<br>
Sent: Wednesday, October 31, 2012 12:48 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] Compile-time MPI_Datatype checking
<br>
<p>&nbsp;
<br>
<p>Note that with Apple's latest versions of Xcode (4.2 and higher, IIRC) Clang
<br>
is now the default C compiler.  I am told that Clang is the ONLY bundled
<br>
compiler for OSX 10.8 (Mountain Lion) unless you take extra steps to install
<br>
gcc (which is actually llvm-gcc and cross-compiles for OSX 10.7).
<br>
<p>&nbsp;
<br>
<p>So, Clang *is* gaining some &quot;market share&quot;, though not yet in major HPC
<br>
systems.
<br>
<p>&nbsp;
<br>
<p>-Paul
<br>
<p>&nbsp;
<br>
<p>On Wed, Oct 31, 2012 at 11:40 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p>If it's only on for Clang, I very much doubt anyone will care - I'm unaware
<br>
of any of our users that currently utilize that compiler, and certainly not
<br>
on the clusters in the national labs (gcc, Intel, etc. - but I've never seen
<br>
them use Clang).
<br>
<p>Not saying anything negative about Clang - just noting it isn't much used in
<br>
our current community that I've heard.
<br>
<p><p>On Oct 31, 2012, at 11:19 AM, Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Oct 31, 2012 at 5:04 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 31, 2012, at 9:38 AM, Dmitri Gribenko wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The rationale here is that correct MPI applications should not need to
</span><br>
add any extra compiler files to compile without warnings.
<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would disagree with this.  Compiler warnings are most useful when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they are on by default.  Only a few developers will turn on a warning
</span><br>
<span class="quotelev3">&gt;&gt;&gt; because warnings are hard to discover and enabling a warning requires
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an explicit action from the developer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Understood, but:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; a) MPI explicitly allows this kind of deliberate mismatch.  It does not
</span><br>
make sense to warn for things that are correct in MPI.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think it is MPI.  It is the C standard that allows one to
</span><br>
<span class="quotelev1">&gt; store any pointer in void* and char*.  But C standard also considers
</span><br>
<span class="quotelev1">&gt; lots of other weird things to be valid, see below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; b) Warnings are significantly less useful if the user looks at them and
</span><br>
says, &quot;the compiler is wrong; I know that MPI says that this deliberate
<br>
mismatch in my code is ok.&quot;
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, one can also argue that since the following is valid C, the
</span><br>
<span class="quotelev1">&gt; warning in question should not be implemented at all:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; long *b = malloc(sizeof(int));
</span><br>
<span class="quotelev1">&gt; MPI_Recv(b, 1, MPI_INT, ...);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But this code is clearly badly written, so we are left with a question
</span><br>
<span class="quotelev1">&gt; about where to draw the line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; c) as such, these warnings are really only useful for the application
</span><br>
where type/MPI_Datatype matching is expected/desired.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compilers already warn about valid C code.  Silencing many warnings
</span><br>
<span class="quotelev1">&gt; relies on conventions that are derived from best practices of being
</span><br>
<span class="quotelev1">&gt; explicit about something unusual.  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat /tmp/aaa.c
</span><br>
<span class="quotelev1">&gt; void foo(void *a) {
</span><br>
<span class="quotelev1">&gt;  for(int i = a; i &lt; 10; i++)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    if(i = 5)
</span><br>
<span class="quotelev1">&gt;      return;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; $ clang -fsyntax-only -std=c99 /tmp/aaa.c
</span><br>
<span class="quotelev1">&gt; /tmp/aaa.c:2:11: warning: incompatible pointer to integer conversion
</span><br>
<span class="quotelev1">&gt; initializing 'int' with an expression of type 'void *'
</span><br>
<span class="quotelev1">&gt; [-Wint-conversion]
</span><br>
<span class="quotelev1">&gt;  for(int i = a; i &lt; 10; i++)
</span><br>
<span class="quotelev1">&gt;          ^   ~
</span><br>
<span class="quotelev1">&gt; /tmp/aaa.c:4:10: warning: using the result of an assignment as a
</span><br>
<span class="quotelev1">&gt; condition without parentheses [-Wparentheses]
</span><br>
<span class="quotelev1">&gt;    if(i = 5)
</span><br>
<span class="quotelev1">&gt;       ~~^~~
</span><br>
<span class="quotelev1">&gt; /tmp/aaa.c:4:10: note: place parentheses around the assignment to
</span><br>
<span class="quotelev1">&gt; silence this warning
</span><br>
<span class="quotelev1">&gt;    if(i = 5)
</span><br>
<span class="quotelev1">&gt;         ^
</span><br>
<span class="quotelev1">&gt;       (    )
</span><br>
<span class="quotelev1">&gt; /tmp/aaa.c:4:10: note: use '==' to turn this assignment into an
</span><br>
<span class="quotelev1">&gt; equality comparison
</span><br>
<span class="quotelev1">&gt;    if(i = 5)
</span><br>
<span class="quotelev1">&gt;         ^
</span><br>
<span class="quotelev1">&gt;         ==
</span><br>
<span class="quotelev1">&gt; 2 warnings generated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; According to C standard this is valid C code, but clang emits two
</span><br>
<span class="quotelev1">&gt; warnings on this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can these warnings be enabled as part of the warnings rollup -Wall
</span><br>
option?  That would be an easy way to find/enable these warnings.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IIRC, -Wall warning set is frozen in clang.  -Wall is misleading in
</span><br>
<span class="quotelev1">&gt; that it does not turn on all warnings implemented in the compiler.
</span><br>
<span class="quotelev1">&gt; Clang has -Weverything to really turn on all warnings.  But
</span><br>
<span class="quotelev1">&gt; -Weverything is very noisy (by design, not to be fixed) unless one
</span><br>
<span class="quotelev1">&gt; also turns off all warnings that are not interesting for the project
</span><br>
<span class="quotelev1">&gt; with -Wno-foo.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think it is possible to disable this warning by default
</span><br>
<span class="quotelev1">&gt; because off-by-default warnings are discouraged in Clang.  There is no
</span><br>
<span class="quotelev1">&gt; formal policy, but the rule of thumb is: either make the warning good
</span><br>
<span class="quotelev1">&gt; enough for everyone or don't implement it; if some particular app does
</span><br>
<span class="quotelev1">&gt; something strange, it can disable this warning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The pattern you described is an important one, but most MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; applications will have matching buffer types/type tags.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I agree that most applications *probably* don't do this.  But significant
</span><br>
developer in this community (i.e., Sandia) has at least multiple
<br>
applications that *do* do it.  I can't ignore that.  :-(
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are a few approaches to solving this in order of preference:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0. Is this really a concern for Sandia?  (I.e., do they target Clang?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Ask the developer to silence the warning with a cast to 'void *' or
</span><br>
<span class="quotelev1">&gt; -Wno-type-safety.  Rationale: compilers already do warn about valid
</span><br>
<span class="quotelev1">&gt; but suspicious code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Turn off checking for char* just like for void*.  Rationale: C
</span><br>
<span class="quotelev1">&gt; standard allows char* to alias a pointer of any type.  Note that char*
</span><br>
<span class="quotelev1">&gt; is special in this regard (strict aliasing rules).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Turn off annotations by default in mpi.h.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dmitri
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; main(i,j){for(i=2;;i++){for(j=2;j&lt;i;j++){if(!(i%j)){j=0;break;}}if
</span><br>
<span class="quotelev1">&gt; (j){printf(&quot;%d\n&quot;,i);}}} /*Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt;*/
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p><p><p><p>&nbsp;
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
 
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11730/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11731.php">Jeff Squyres: "Re: [OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>Previous message:</strong> <a href="11729.php">TERRY DONTJE: "Re: [OMPI devel] Multirail + Open MPI 1.6.1 = very big latency for the first communication"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/10/11708.php">Paul Hargrove: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
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
